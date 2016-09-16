<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
session_cache_limiter("none");

include("include/enroll_variables.php");

if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(CheckPermissionsEvent($strTableName, 'P') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Export"))
{
	echo "<p>"."You don't have permissions to access this table"."<a href=\"login.php\">"."Back to login page"."</a></p>";
	return;
}

$layout = new TLayout("export","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["top"] = array();
$layout->containers["export"] = array();

$layout->containers["export"][] = array("name"=>"exportheader","block"=>"","substyle"=>2);


$layout->containers["export"][] = array("name"=>"exprange_header","block"=>"rangeheader_block","substyle"=>3);


$layout->containers["export"][] = array("name"=>"exprange","block"=>"range_block","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expoutput_header","block"=>"","substyle"=>3);


$layout->containers["export"][] = array("name"=>"expoutput","block"=>"","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expbuttons","block"=>"","substyle"=>2);


$layout->skins["export"] = "fields";
$layout->blocks["top"][] = "export";$page_layouts["enroll_export"] = $layout;


// Modify query: remove blob fields from fieldlist.
// Blob fields on an export page are shown using imager.php (for example).
// They don't need to be selected from DB in export.php itself.
//$gQuery->ReplaceFieldsWithDummies(GetBinaryFieldsIndices());

$cipherer = new RunnerCipherer($strTableName);

$strWhereClause = "";
$strHavingClause = "";
$strSearchCriteria = "and";
$selected_recs = array();
$options = "1";

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;

$phpVersion = (int)substr(phpversion(), 0, 1); 
if($phpVersion > 4)
{
	include("include/export_functions.php");
	$xt->assign("groupExcel", true);
}
else
	$xt->assign("excel", true);

//array of params for classes
$params = array("pageType" => PAGE_EXPORT, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
if(!$eventObj->exists("ListGetRowCount") && !$eventObj->exists("ListQuery"))
	$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

//	Before Process event
if($eventObj->exists("BeforeProcessExport"))
	$eventObj->BeforeProcessExport($conn, $pageObject);

if (@$_REQUEST["a"]!="")
{
	$options = "";
	$sWhere = "1=0";	

//	process selection
	$selected_recs = array();
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["enrolID"] = refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[] = $keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys = array();
			$keys["enrolID"] = urldecode($arr[0]);
			$selected_recs[] = $keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}


	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
	
	$_SESSION[$strTableName."_SelectedSQL"] = $strSQL;
	$_SESSION[$strTableName."_SelectedWhere"] = $sWhere;
	$_SESSION[$strTableName."_SelectedRecords"] = $selected_recs;
}

if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
{
	$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
	$strWhereClause = @$_SESSION[$strTableName."_SelectedWhere"];
	$selected_recs = $_SESSION[$strTableName."_SelectedRecords"];
}
else
{
	$strWhereClause = @$_SESSION[$strTableName."_where"];
	$strHavingClause = @$_SESSION[$strTableName."_having"];
	$strSearchCriteria = @$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}

$mypage = 1;
if(@$_REQUEST["type"])
{
//	order by
	$strOrderBy = $_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy = $gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);

	$strSQLbak = $strSQL;
	if($eventObj->exists("BeforeQueryExport"))
		$eventObj->BeforeQueryExport($strSQL,$strWhereClause,$strOrderBy, $pageObject);
//	Rebuild SQL if needed
	if($strSQL!=$strSQLbak)
	{
//	changed $strSQL - old style	
		$numrows=GetRowCount($strSQL);
	}
	else
	{
		$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
		$strSQL.=" ".trim($strOrderBy);
		$rowcount=false;
		if($eventObj->exists("ListGetRowCount"))
		{
			$masterKeysReq=array();
			for($i = 0; $i < count($pageObject->detailKeysByM); $i ++)
				$masterKeysReq[] = $_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount = $eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
		}
		if($rowcount !== false)
			$numrows = $rowcount;
		else
			$numrows = $gQuery->gSQLRowCount($strWhereClause,$strHavingClause,$strSearchCriteria);
	}
	LogInfo($strSQL);

//	 Pagination:

	$nPageSize = 0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage = (integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize = (integer)@$_SESSION[$strTableName."_pagesize"];
		
		if(!$nPageSize)
			$nPageSize = $gSettings->getInitialPageSize();
				
		if($nPageSize<0)
			$nPageSize = 0;
			
		if($nPageSize>0)
		{
			if($numrows<=($mypage-1)*$nPageSize)
				$mypage = ceil($numrows/$nPageSize);
		
			if(!$mypage)
				$mypage = 1;
			
					$strSQL.=" limit ".(($mypage-1)*$nPageSize).",".$nPageSize;
		}
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
	{
		$arrFieldForSort = array();
		$arrHowFieldSort = array();
		require_once getabspath('classes/orderclause.php');
		$fieldList = unserialize($_SESSION[$strTableName."_orderFieldsList"]);
		for($i = 0; $i < count($fieldList); $i++)
		{
			$arrFieldForSort[] = $fieldList[$i]->fieldIndex; 
			$arrHowFieldSort[] = $fieldList[$i]->orderDirection; 
		}
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $nPageSize, $mypage, $pageObject);
	}
	if($listarray!==false)
		$rs = $listarray;
	elseif($nPageSize>0)
	{
					$rs = db_query($strSQL,$conn);
	}
	else
		$rs = db_query($strSQL,$conn);

	if(!ini_get("safe_mode"))
		set_time_limit(300);
	
	if(substr(@$_REQUEST["type"],0,5)=="excel")
	{
//	remove grouping
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SMONGROUPING"]="0";
				if($phpVersion > 4)
			ExportToExcel($cipherer, $pageObject);
		else
			ExportToExcel_old($cipherer);
	}
	else if(@$_REQUEST["type"]=="word")
	{
		ExportToWord($cipherer);
	}
	else if(@$_REQUEST["type"]=="xml")
	{
		ExportToXML($cipherer);
	}
	else if(@$_REQUEST["type"]=="csv")
	{
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SDECIMAL"]=".";
		$locale_info["LOCALE_SMONGROUPING"]="0";
		$locale_info["LOCALE_SMONDECIMALSEP"]=".";
		ExportToCSV($cipherer);
	}
	db_close($conn);
	return;
}

// add button events if exist
$pageObject->addButtonHandlers();

if($options)
{
	$xt->assign("rangeheader_block",true);
	$xt->assign("range_block",true);
}

$xt->assign("exportlink_attrs", 'id="saveButton'.$pageObject->id.'"');

$pageObject->body["begin"] .="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";

$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
$pageObject->body['end'] .= '</script>';
$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
$pageObject->addCommonJs();

$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$xt->display("enroll_export.htm");

function ExportToExcel_old($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=enroll.xls");

	echo "<html>";
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToWord($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=enroll.doc");

	echo "<html>";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToXML($cipherer)
{
	global $nPageSize,$rs,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: text/xml");
	header("Content-Disposition: attachment;Filename=enroll.xml");
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);	
	//if(!$row)
	//	return;
		
	global $cCharset;
	
	echo "<?xml version=\"1.0\" encoding=\"".$cCharset."\" standalone=\"yes\"?>\r\n";
	echo "<table>\r\n";
	$i = 0;
	$pageObject->viewControls->forExport = "xml";
	while((!$nPageSize || $i<$nPageSize) && $row)
	{
		$values = array();
			$values["DipID"] = $pageObject->showDBValue("DipID", $row);
			$values["Date_Apply"] = $pageObject->showDBValue("Date_Apply", $row);
			$values["Status"] = $pageObject->showDBValue("Status", $row);
			$values["Name"] = $pageObject->showDBValue("Name", $row);
			$values["ICNO"] = $pageObject->showDBValue("ICNO", $row);
			$values["Passport"] = $pageObject->showDBValue("Passport", $row);
			$values["DOB"] = $pageObject->showDBValue("DOB", $row);
			$values["Nationality"] = $pageObject->showDBValue("Nationality", $row);
			$values["Gender"] = $pageObject->showDBValue("Gender", $row);
			$values["race"] = $pageObject->showDBValue("race", $row);
			$values["Religion"] = $pageObject->showDBValue("Religion", $row);
			$values["married"] = $pageObject->showDBValue("married", $row);
			$values["finance"] = $pageObject->showDBValue("finance", $row);
			$values["Address1"] = $pageObject->showDBValue("Address1", $row);
			$values["Postcode"] = $pageObject->showDBValue("Postcode", $row);
			$values["City"] = $pageObject->showDBValue("City", $row);
			$values["StateID"] = $pageObject->showDBValue("StateID", $row);
			$values["Country"] = $pageObject->showDBValue("Country", $row);
			$values["MobileTelephone"] = $pageObject->showDBValue("MobileTelephone", $row);
			$values["HomeTelephone"] = $pageObject->showDBValue("HomeTelephone", $row);
			$values["Email"] = $pageObject->showDBValue("Email", $row);
			$values["f_name"] = $pageObject->showDBValue("f_name", $row);
			$values["f_ic"] = $pageObject->showDBValue("f_ic", $row);
			$values["f_tel"] = $pageObject->showDBValue("f_tel", $row);
			$values["f_job"] = $pageObject->showDBValue("f_job", $row);
			$values["m_name"] = $pageObject->showDBValue("m_name", $row);
			$values["m_ic"] = $pageObject->showDBValue("m_ic", $row);
			$values["m_tel"] = $pageObject->showDBValue("m_tel", $row);
			$values["m_job"] = $pageObject->showDBValue("m_job", $row);
			$values["blood"] = $pageObject->showDBValue("blood", $row);
			$values["Disability"] = $pageObject->showDBValue("Disability", $row);
			$values["MedicalCondition"] = $pageObject->showDBValue("MedicalCondition", $row);
			$values["qua_level"] = $pageObject->showDBValue("qua_level", $row);
			$values["qua_place"] = $pageObject->showDBValue("qua_place", $row);
			$values["qua_year"] = $pageObject->showDBValue("qua_year", $row);
			$values["qua_result"] = $pageObject->showDBValue("qua_result", $row);
			$values["q1_s"] = $pageObject->showDBValue("q1_s", $row);
			$values["q1_g"] = $pageObject->showDBValue("q1_g", $row);
			$values["q2_s"] = $pageObject->showDBValue("q2_s", $row);
			$values["q2_g"] = $pageObject->showDBValue("q2_g", $row);
			$values["q3_s"] = $pageObject->showDBValue("q3_s", $row);
			$values["q3_g"] = $pageObject->showDBValue("q3_g", $row);
			$values["q4_s"] = $pageObject->showDBValue("q4_s", $row);
			$values["q4_g"] = $pageObject->showDBValue("q4_g", $row);
			$values["g5_s"] = $pageObject->showDBValue("g5_s", $row);
			$values["g5_g"] = $pageObject->showDBValue("g5_g", $row);
			$values["g6_s"] = $pageObject->showDBValue("g6_s", $row);
			$values["g6_g"] = $pageObject->showDBValue("g6_g", $row);
			$values["g7_s"] = $pageObject->showDBValue("g7_s", $row);
			$values["g7_g"] = $pageObject->showDBValue("g7_g", $row);
			$values["g8_s"] = $pageObject->showDBValue("g8_s", $row);
			$values["g8_g"] = $pageObject->showDBValue("g8_g", $row);
			$values["g9_s"] = $pageObject->showDBValue("g9_s", $row);
			$values["g9_g"] = $pageObject->showDBValue("g9_g", $row);
			$values["g10_s"] = $pageObject->showDBValue("g10_s", $row);
			$values["g10_g"] = $pageObject->showDBValue("g10_g", $row);
			$values["g11_s"] = $pageObject->showDBValue("g11_s", $row);
			$values["g11_g"] = $pageObject->showDBValue("g11_g", $row);
			$values["o_english"] = $pageObject->showDBValue("o_english", $row);
			$values["oq_highest"] = $pageObject->showDBValue("oq_highest", $row);
			$values["oq_major"] = $pageObject->showDBValue("oq_major", $row);
			$values["oq_u"] = $pageObject->showDBValue("oq_u", $row);
			$values["oq_cgpa"] = $pageObject->showDBValue("oq_cgpa", $row);
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		
		if ($eventRes)
		{
			$i++;
			echo "<row>\r\n";
			foreach ($values as $fName => $val)
			{
				$field = htmlspecialchars(XMLNameEncode($fName));
				echo "<".$field.">";
				echo $values[$fName];
				echo "</".$field.">\r\n";
			}
			echo "</row>\r\n";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	echo "</table>\r\n";
}

function ExportToCSV($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment;Filename=enroll.csv");
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);

// write header
	$outstr = "";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"DipID\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Date_Apply\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Status\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ICNO\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Passport\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"DOB\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Nationality\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Gender\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"race\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Religion\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"married\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"finance\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Address1\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Postcode\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"City\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"StateID\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Country\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"MobileTelephone\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"HomeTelephone\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Email\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"f_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"f_ic\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"f_tel\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"f_job\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"m_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"m_ic\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"m_tel\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"m_job\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"blood\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Disability\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"MedicalCondition\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"qua_level\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"qua_place\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"qua_year\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"qua_result\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"q1_s\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"q1_g\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"q2_s\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"q2_g\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"q3_s\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"q3_g\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"q4_s\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"q4_g\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g5_s\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g5_g\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g6_s\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g6_g\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g7_s\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g7_g\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g8_s\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g8_g\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g9_s\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g9_g\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g10_s\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g10_g\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g11_s\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"g11_g\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"o_english\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"oq_highest\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"oq_major\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"oq_u\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"oq_cgpa\"";
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "csv";
	while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
	{
		$values = array();
			$values["DipID"] = $pageObject->getViewControl("DipID")->showDBValue($row, "");
			$values["Date_Apply"] = $pageObject->getViewControl("Date_Apply")->showDBValue($row, "");
			$values["Status"] = $pageObject->getViewControl("Status")->showDBValue($row, "");
			$values["Name"] = $pageObject->getViewControl("Name")->showDBValue($row, "");
			$values["ICNO"] = $pageObject->getViewControl("ICNO")->showDBValue($row, "");
			$values["Passport"] = $pageObject->getViewControl("Passport")->showDBValue($row, "");
			$values["DOB"] = $pageObject->getViewControl("DOB")->showDBValue($row, "");
			$values["Nationality"] = $pageObject->getViewControl("Nationality")->showDBValue($row, "");
			$values["Gender"] = $pageObject->getViewControl("Gender")->showDBValue($row, "");
			$values["race"] = $pageObject->getViewControl("race")->showDBValue($row, "");
			$values["Religion"] = $pageObject->getViewControl("Religion")->showDBValue($row, "");
			$values["married"] = $pageObject->getViewControl("married")->showDBValue($row, "");
			$values["finance"] = $pageObject->getViewControl("finance")->showDBValue($row, "");
			$values["Address1"] = $pageObject->getViewControl("Address1")->showDBValue($row, "");
			$values["Postcode"] = $pageObject->getViewControl("Postcode")->showDBValue($row, "");
			$values["City"] = $pageObject->getViewControl("City")->showDBValue($row, "");
			$values["StateID"] = $pageObject->getViewControl("StateID")->showDBValue($row, "");
			$values["Country"] = $pageObject->getViewControl("Country")->showDBValue($row, "");
			$values["MobileTelephone"] = $pageObject->getViewControl("MobileTelephone")->showDBValue($row, "");
			$values["HomeTelephone"] = $pageObject->getViewControl("HomeTelephone")->showDBValue($row, "");
			$values["Email"] = $pageObject->getViewControl("Email")->showDBValue($row, "");
			$values["f_name"] = $pageObject->getViewControl("f_name")->showDBValue($row, "");
			$values["f_ic"] = $pageObject->getViewControl("f_ic")->showDBValue($row, "");
			$values["f_tel"] = $pageObject->getViewControl("f_tel")->showDBValue($row, "");
			$values["f_job"] = $pageObject->getViewControl("f_job")->showDBValue($row, "");
			$values["m_name"] = $pageObject->getViewControl("m_name")->showDBValue($row, "");
			$values["m_ic"] = $pageObject->getViewControl("m_ic")->showDBValue($row, "");
			$values["m_tel"] = $pageObject->getViewControl("m_tel")->showDBValue($row, "");
			$values["m_job"] = $pageObject->getViewControl("m_job")->showDBValue($row, "");
			$values["blood"] = $pageObject->getViewControl("blood")->showDBValue($row, "");
			$values["Disability"] = $pageObject->getViewControl("Disability")->showDBValue($row, "");
			$values["MedicalCondition"] = $pageObject->getViewControl("MedicalCondition")->showDBValue($row, "");
			$values["qua_level"] = $pageObject->getViewControl("qua_level")->showDBValue($row, "");
			$values["qua_place"] = $pageObject->getViewControl("qua_place")->showDBValue($row, "");
			$values["qua_year"] = $pageObject->getViewControl("qua_year")->showDBValue($row, "");
			$values["qua_result"] = $pageObject->getViewControl("qua_result")->showDBValue($row, "");
			$values["q1_s"] = $pageObject->getViewControl("q1_s")->showDBValue($row, "");
			$values["q1_g"] = $pageObject->getViewControl("q1_g")->showDBValue($row, "");
			$values["q2_s"] = $pageObject->getViewControl("q2_s")->showDBValue($row, "");
			$values["q2_g"] = $pageObject->getViewControl("q2_g")->showDBValue($row, "");
			$values["q3_s"] = $pageObject->getViewControl("q3_s")->showDBValue($row, "");
			$values["q3_g"] = $pageObject->getViewControl("q3_g")->showDBValue($row, "");
			$values["q4_s"] = $pageObject->getViewControl("q4_s")->showDBValue($row, "");
			$values["q4_g"] = $pageObject->getViewControl("q4_g")->showDBValue($row, "");
			$values["g5_s"] = $pageObject->getViewControl("g5_s")->showDBValue($row, "");
			$values["g5_g"] = $pageObject->getViewControl("g5_g")->showDBValue($row, "");
			$values["g6_s"] = $pageObject->getViewControl("g6_s")->showDBValue($row, "");
			$values["g6_g"] = $pageObject->getViewControl("g6_g")->showDBValue($row, "");
			$values["g7_s"] = $pageObject->getViewControl("g7_s")->showDBValue($row, "");
			$values["g7_g"] = $pageObject->getViewControl("g7_g")->showDBValue($row, "");
			$values["g8_s"] = $pageObject->getViewControl("g8_s")->showDBValue($row, "");
			$values["g8_g"] = $pageObject->getViewControl("g8_g")->showDBValue($row, "");
			$values["g9_s"] = $pageObject->getViewControl("g9_s")->showDBValue($row, "");
			$values["g9_g"] = $pageObject->getViewControl("g9_g")->showDBValue($row, "");
			$values["g10_s"] = $pageObject->getViewControl("g10_s")->showDBValue($row, "");
			$values["g10_g"] = $pageObject->getViewControl("g10_g")->showDBValue($row, "");
			$values["g11_s"] = $pageObject->getViewControl("g11_s")->showDBValue($row, "");
			$values["g11_g"] = $pageObject->getViewControl("g11_g")->showDBValue($row, "");
			$values["o_english"] = $pageObject->getViewControl("o_english")->showDBValue($row, "");
			$values["oq_highest"] = $pageObject->getViewControl("oq_highest")->showDBValue($row, "");
			$values["oq_major"] = $pageObject->getViewControl("oq_major")->showDBValue($row, "");
			$values["oq_u"] = $pageObject->getViewControl("oq_u")->showDBValue($row, "");
			$values["oq_cgpa"] = $pageObject->getViewControl("oq_cgpa")->showDBValue($row, "");

		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row,$values, $pageObject);
		}
		if ($eventRes)
		{
			$outstr="";
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["DipID"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Date_Apply"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Status"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ICNO"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Passport"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["DOB"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Nationality"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Gender"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["race"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Religion"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["married"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["finance"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Address1"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Postcode"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["City"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["StateID"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Country"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["MobileTelephone"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["HomeTelephone"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Email"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["f_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["f_ic"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["f_tel"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["f_job"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["m_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["m_ic"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["m_tel"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["m_job"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["blood"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Disability"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["MedicalCondition"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["qua_level"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["qua_place"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["qua_year"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["qua_result"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["q1_s"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["q1_g"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["q2_s"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["q2_g"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["q3_s"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["q3_g"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["q4_s"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["q4_g"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g5_s"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g5_g"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g6_s"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g6_g"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g7_s"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g7_g"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g8_s"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g8_g"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g9_s"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g9_g"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g10_s"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g10_g"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g11_s"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["g11_g"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["o_english"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["oq_highest"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["oq_major"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["oq_u"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["oq_cgpa"]).'"';
			echo $outstr;
		}
		
		$iNumberOfRows++;
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
			
		if(((!$nPageSize || $iNumberOfRows<$nPageSize) && $row) && $eventRes)
			echo "\r\n";
	}
}

function WriteTableData($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);
//	if(!$row)
//		return;
// write header
	echo "<tr>";
	if($_REQUEST["type"]=="excel")
	{
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Course").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Date Applied").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Status").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Name").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("IC").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Passport").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Date Of Birth").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Nationality").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Gender").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Race").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Religion").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Marital Status").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Financial Aid").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Resident Address").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Postcode").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("City").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("State").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Country").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Mobile Tel").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Home Tel").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Email").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Father's Name").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("IC").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tel").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Occupation").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Mother's Name").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("IC").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Tel").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Occupation").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Blood").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Disability").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Serious Medical Condition").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Qualification Level").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Last School").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Qualification Year").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("School Result ").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 1").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 1 Grade").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 2 ").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 2 Grade").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 3 ").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 3 Grade").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 4 ").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 4 Grade").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 5 ").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 5 Grade").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 6 ").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 6 Grade").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 7 ").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 7 Grade").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 8 ").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 8 Grade").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 9 ").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 9 Grade").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 10 ").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 10 Grade").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 11 ").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Subject 11 Grade").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("IETLS/ TOEFL/ MUET").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Highest Qualification / Professional Licensed").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Major / Specialization").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("University / Institute").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("CGPA").'</td>';	
	}
	else
	{
		echo "<td>"."Course"."</td>";
		echo "<td>"."Date Applied"."</td>";
		echo "<td>"."Status"."</td>";
		echo "<td>"."Name"."</td>";
		echo "<td>"."IC"."</td>";
		echo "<td>"."Passport"."</td>";
		echo "<td>"."Date Of Birth"."</td>";
		echo "<td>"."Nationality"."</td>";
		echo "<td>"."Gender"."</td>";
		echo "<td>"."Race"."</td>";
		echo "<td>"."Religion"."</td>";
		echo "<td>"."Marital Status"."</td>";
		echo "<td>"."Financial Aid"."</td>";
		echo "<td>"."Resident Address"."</td>";
		echo "<td>"."Postcode"."</td>";
		echo "<td>"."City"."</td>";
		echo "<td>"."State"."</td>";
		echo "<td>"."Country"."</td>";
		echo "<td>"."Mobile Tel"."</td>";
		echo "<td>"."Home Tel"."</td>";
		echo "<td>"."Email"."</td>";
		echo "<td>"."Father's Name"."</td>";
		echo "<td>"."IC"."</td>";
		echo "<td>"."Tel"."</td>";
		echo "<td>"."Occupation"."</td>";
		echo "<td>"."Mother's Name"."</td>";
		echo "<td>"."IC"."</td>";
		echo "<td>"."Tel"."</td>";
		echo "<td>"."Occupation"."</td>";
		echo "<td>"."Blood"."</td>";
		echo "<td>"."Disability"."</td>";
		echo "<td>"."Serious Medical Condition"."</td>";
		echo "<td>"."Qualification Level"."</td>";
		echo "<td>"."Last School"."</td>";
		echo "<td>"."Qualification Year"."</td>";
		echo "<td>"."School Result "."</td>";
		echo "<td>"."Subject 1"."</td>";
		echo "<td>"."Subject 1 Grade"."</td>";
		echo "<td>"."Subject 2 "."</td>";
		echo "<td>"."Subject 2 Grade"."</td>";
		echo "<td>"."Subject 3 "."</td>";
		echo "<td>"."Subject 3 Grade"."</td>";
		echo "<td>"."Subject 4 "."</td>";
		echo "<td>"."Subject 4 Grade"."</td>";
		echo "<td>"."Subject 5 "."</td>";
		echo "<td>"."Subject 5 Grade"."</td>";
		echo "<td>"."Subject 6 "."</td>";
		echo "<td>"."Subject 6 Grade"."</td>";
		echo "<td>"."Subject 7 "."</td>";
		echo "<td>"."Subject 7 Grade"."</td>";
		echo "<td>"."Subject 8 "."</td>";
		echo "<td>"."Subject 8 Grade"."</td>";
		echo "<td>"."Subject 9 "."</td>";
		echo "<td>"."Subject 9 Grade"."</td>";
		echo "<td>"."Subject 10 "."</td>";
		echo "<td>"."Subject 10 Grade"."</td>";
		echo "<td>"."Subject 11 "."</td>";
		echo "<td>"."Subject 11 Grade"."</td>";
		echo "<td>"."IETLS/ TOEFL/ MUET"."</td>";
		echo "<td>"."Highest Qualification / Professional Licensed"."</td>";
		echo "<td>"."Major / Specialization"."</td>";
		echo "<td>"."University / Institute"."</td>";
		echo "<td>"."CGPA"."</td>";
	}
	echo "</tr>";
	
// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "export";
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals, $totalsFields, $row);
		
		$values = array();
	
					$values["DipID"] = $pageObject->getViewControl("DipID")->showDBValue($row, "");
					$values["Date_Apply"] = $pageObject->getViewControl("Date_Apply")->showDBValue($row, "");
					$values["Status"] = $pageObject->getViewControl("Status")->showDBValue($row, "");
					$values["Name"] = $pageObject->getViewControl("Name")->showDBValue($row, "");
					$values["ICNO"] = $pageObject->getViewControl("ICNO")->showDBValue($row, "");
					$values["Passport"] = $pageObject->getViewControl("Passport")->showDBValue($row, "");
					$values["DOB"] = $pageObject->getViewControl("DOB")->showDBValue($row, "");
					$values["Nationality"] = $pageObject->getViewControl("Nationality")->showDBValue($row, "");
					$values["Gender"] = $pageObject->getViewControl("Gender")->showDBValue($row, "");
					$values["race"] = $pageObject->getViewControl("race")->showDBValue($row, "");
					$values["Religion"] = $pageObject->getViewControl("Religion")->showDBValue($row, "");
					$values["married"] = $pageObject->getViewControl("married")->showDBValue($row, "");
					$values["finance"] = $pageObject->getViewControl("finance")->showDBValue($row, "");
					$values["Address1"] = $pageObject->getViewControl("Address1")->showDBValue($row, "");
					$values["Postcode"] = $pageObject->getViewControl("Postcode")->showDBValue($row, "");
					$values["City"] = $pageObject->getViewControl("City")->showDBValue($row, "");
					$values["StateID"] = $pageObject->getViewControl("StateID")->showDBValue($row, "");
					$values["Country"] = $pageObject->getViewControl("Country")->showDBValue($row, "");
					$values["MobileTelephone"] = $pageObject->getViewControl("MobileTelephone")->showDBValue($row, "");
					$values["HomeTelephone"] = $pageObject->getViewControl("HomeTelephone")->showDBValue($row, "");
					$values["Email"] = $pageObject->getViewControl("Email")->showDBValue($row, "");
					$values["f_name"] = $pageObject->getViewControl("f_name")->showDBValue($row, "");
					$values["f_ic"] = $pageObject->getViewControl("f_ic")->showDBValue($row, "");
					$values["f_tel"] = $pageObject->getViewControl("f_tel")->showDBValue($row, "");
					$values["f_job"] = $pageObject->getViewControl("f_job")->showDBValue($row, "");
					$values["m_name"] = $pageObject->getViewControl("m_name")->showDBValue($row, "");
					$values["m_ic"] = $pageObject->getViewControl("m_ic")->showDBValue($row, "");
					$values["m_tel"] = $pageObject->getViewControl("m_tel")->showDBValue($row, "");
					$values["m_job"] = $pageObject->getViewControl("m_job")->showDBValue($row, "");
					$values["blood"] = $pageObject->getViewControl("blood")->showDBValue($row, "");
					$values["Disability"] = $pageObject->getViewControl("Disability")->showDBValue($row, "");
					$values["MedicalCondition"] = $pageObject->getViewControl("MedicalCondition")->showDBValue($row, "");
					$values["qua_level"] = $pageObject->getViewControl("qua_level")->showDBValue($row, "");
					$values["qua_place"] = $pageObject->getViewControl("qua_place")->showDBValue($row, "");
					$values["qua_year"] = $pageObject->getViewControl("qua_year")->showDBValue($row, "");
					$values["qua_result"] = $pageObject->getViewControl("qua_result")->showDBValue($row, "");
					$values["q1_s"] = $pageObject->getViewControl("q1_s")->showDBValue($row, "");
					$values["q1_g"] = $pageObject->getViewControl("q1_g")->showDBValue($row, "");
					$values["q2_s"] = $pageObject->getViewControl("q2_s")->showDBValue($row, "");
					$values["q2_g"] = $pageObject->getViewControl("q2_g")->showDBValue($row, "");
					$values["q3_s"] = $pageObject->getViewControl("q3_s")->showDBValue($row, "");
					$values["q3_g"] = $pageObject->getViewControl("q3_g")->showDBValue($row, "");
					$values["q4_s"] = $pageObject->getViewControl("q4_s")->showDBValue($row, "");
					$values["q4_g"] = $pageObject->getViewControl("q4_g")->showDBValue($row, "");
					$values["g5_s"] = $pageObject->getViewControl("g5_s")->showDBValue($row, "");
					$values["g5_g"] = $pageObject->getViewControl("g5_g")->showDBValue($row, "");
					$values["g6_s"] = $pageObject->getViewControl("g6_s")->showDBValue($row, "");
					$values["g6_g"] = $pageObject->getViewControl("g6_g")->showDBValue($row, "");
					$values["g7_s"] = $pageObject->getViewControl("g7_s")->showDBValue($row, "");
					$values["g7_g"] = $pageObject->getViewControl("g7_g")->showDBValue($row, "");
					$values["g8_s"] = $pageObject->getViewControl("g8_s")->showDBValue($row, "");
					$values["g8_g"] = $pageObject->getViewControl("g8_g")->showDBValue($row, "");
					$values["g9_s"] = $pageObject->getViewControl("g9_s")->showDBValue($row, "");
					$values["g9_g"] = $pageObject->getViewControl("g9_g")->showDBValue($row, "");
					$values["g10_s"] = $pageObject->getViewControl("g10_s")->showDBValue($row, "");
					$values["g10_g"] = $pageObject->getViewControl("g10_g")->showDBValue($row, "");
					$values["g11_s"] = $pageObject->getViewControl("g11_s")->showDBValue($row, "");
					$values["g11_g"] = $pageObject->getViewControl("g11_g")->showDBValue($row, "");
					$values["o_english"] = $pageObject->getViewControl("o_english")->showDBValue($row, "");
					$values["oq_highest"] = $pageObject->getViewControl("oq_highest")->showDBValue($row, "");
					$values["oq_major"] = $pageObject->getViewControl("oq_major")->showDBValue($row, "");
					$values["oq_u"] = $pageObject->getViewControl("oq_u")->showDBValue($row, "");
					$values["oq_cgpa"] = $pageObject->getViewControl("oq_cgpa")->showDBValue($row, "");
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		}
		if ($eventRes)
		{
			$iNumberOfRows++;
			echo "<tr>";
		
							echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["DipID"]);
				else
					echo $values["DipID"];//echo htmlspecialchars($values["DipID"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Date_Apply"]);
					else
						echo $values["Date_Apply"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									echo $values["Status"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Name"]);
					else
						echo $values["Name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ICNO"]);
					else
						echo $values["ICNO"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Passport"]);
					else
						echo $values["Passport"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["DOB"]);
					else
						echo $values["DOB"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["Nationality"]);
				else
					echo $values["Nationality"];//echo htmlspecialchars($values["Nationality"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Gender"]);
					else
						echo $values["Gender"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["race"]);
				else
					echo $values["race"];//echo htmlspecialchars($values["race"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["Religion"]);
				else
					echo $values["Religion"];//echo htmlspecialchars($values["Religion"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["married"]);
					else
						echo $values["married"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["finance"]);
				else
					echo $values["finance"];//echo htmlspecialchars($values["finance"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Address1"]);
					else
						echo $values["Address1"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Postcode"]);
					else
						echo $values["Postcode"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["City"]);
					else
						echo $values["City"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["StateID"]);
				else
					echo $values["StateID"];//echo htmlspecialchars($values["StateID"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["Country"]);
				else
					echo $values["Country"];//echo htmlspecialchars($values["Country"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["MobileTelephone"]);
					else
						echo $values["MobileTelephone"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["HomeTelephone"]);
					else
						echo $values["HomeTelephone"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Email"]);
					else
						echo $values["Email"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["f_name"]);
					else
						echo $values["f_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["f_ic"]);
					else
						echo $values["f_ic"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["f_tel"]);
					else
						echo $values["f_tel"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["f_job"]);
					else
						echo $values["f_job"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["m_name"]);
					else
						echo $values["m_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["m_ic"]);
					else
						echo $values["m_ic"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["m_tel"]);
					else
						echo $values["m_tel"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["m_job"]);
					else
						echo $values["m_job"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["blood"]);
					else
						echo $values["blood"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Disability"]);
					else
						echo $values["Disability"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["MedicalCondition"]);
					else
						echo $values["MedicalCondition"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["qua_level"]);
				else
					echo $values["qua_level"];//echo htmlspecialchars($values["qua_level"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["qua_place"]);
					else
						echo $values["qua_place"];
			echo '</td>';
							echo '<td>';
			
									echo $values["qua_year"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["qua_result"]);
					else
						echo $values["qua_result"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["q1_s"]);
					else
						echo $values["q1_s"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["q1_g"]);
					else
						echo $values["q1_g"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["q2_s"]);
					else
						echo $values["q2_s"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["q2_g"]);
					else
						echo $values["q2_g"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["q3_s"]);
				else
					echo $values["q3_s"];//echo htmlspecialchars($values["q3_s"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["q3_g"]);
					else
						echo $values["q3_g"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["q4_s"]);
				else
					echo $values["q4_s"];//echo htmlspecialchars($values["q4_s"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["q4_g"]);
					else
						echo $values["q4_g"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["g5_s"]);
				else
					echo $values["g5_s"];//echo htmlspecialchars($values["g5_s"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["g5_g"]);
					else
						echo $values["g5_g"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["g6_s"]);
				else
					echo $values["g6_s"];//echo htmlspecialchars($values["g6_s"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["g6_g"]);
					else
						echo $values["g6_g"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["g7_s"]);
				else
					echo $values["g7_s"];//echo htmlspecialchars($values["g7_s"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["g7_g"]);
					else
						echo $values["g7_g"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["g8_s"]);
				else
					echo $values["g8_s"];//echo htmlspecialchars($values["g8_s"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["g8_g"]);
					else
						echo $values["g8_g"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["g9_s"]);
				else
					echo $values["g9_s"];//echo htmlspecialchars($values["g9_s"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["g9_g"]);
					else
						echo $values["g9_g"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["g10_s"]);
				else
					echo $values["g10_s"];//echo htmlspecialchars($values["g10_s"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["g10_g"]);
					else
						echo $values["g10_g"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["g11_s"]);
				else
					echo $values["g11_s"];//echo htmlspecialchars($values["g11_s"]); commented for bug #6823
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["g11_g"]);
					else
						echo $values["g11_g"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["o_english"]);
					else
						echo $values["o_english"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["oq_highest"]);
					else
						echo $values["oq_highest"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["oq_major"]);
					else
						echo $values["oq_major"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["oq_u"]);
					else
						echo $values["oq_u"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["oq_cgpa"]);
					else
						echo $values["oq_cgpa"];
			echo '</td>';
			echo "</tr>";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	
}

function XMLNameEncode($strValue)
{
	$search = array(" ","#","'","/","\\","(",")",",","[");
	$ret = str_replace($search,"",$strValue);
	$search = array("]","+","\"","-","_","|","}","{","=");
	$ret = str_replace($search,"",$ret);
	return $ret;
}

function PrepareForExcel($ret)
{
	//$ret = htmlspecialchars($str); commented for bug #6823
	if (substr($ret,0,1)== "=") 
		$ret = "&#61;".substr($ret,1);
	return $ret;

}

function countTotals(&$totals, $totalsFields, $data)
{
	for($i = 0; $i < count($totalsFields); $i ++) 
	{
		if($totalsFields[$i]['totalsType'] == 'COUNT') 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]!= "");
		else if($totalsFields[$i]['viewFormat'] == "Time") 
		{
			$time = GetTotalsForTime($data[$totalsFields[$i]['fName']]);
			$totals[$totalsFields[$i]['fName']]["value"] += $time[2]+$time[1]*60 + $time[0]*3600;
		} 
		else 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]+ 0);
		
		if($totalsFields[$i]['totalsType'] == 'AVERAGE')
		{
			if(!is_null($data[$totalsFields[$i]['fName']]) && $data[$totalsFields[$i]['fName']]!=="")
				$totals[$totalsFields[$i]['fName']]['numRows']++;
		}
	}
}
?>
