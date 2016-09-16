<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/enroll_prospect_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');

global $globalEvents;

//	check if logged in
if(@$_SESSION["UserID"] && IsAdmin() && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{
	echo "<p>"."You don't have permissions to access this table"."<br>Proceed to <a href=\"admin.php\">Admin Area</a> to set up user permissions</p>";
	return;
}
if(!isLogged() || CheckPermissionsEvent($strTableName, 'A') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	
	header("Location: login.php?message=expired"); 
	return;
}

if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error occurred";
		$returnJSON['fatalError'] = true;
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}

$layout = new TLayout("add2","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["top"] = array();
$layout->containers["add"] = array();

$layout->containers["add"][] = array("name"=>"addheader","block"=>"","substyle"=>2);


$layout->containers["add"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["add"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"addfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"addbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["add"] = "1";
$layout->blocks["top"][] = "add";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["enroll_prospect_add"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["enroll_prospect_add_Personal_Particular1"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["enroll_prospect_add_Contact_Information1"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["enroll_prospect_add_Qualification_Information1"] = $layout;



$filename = "";
$status = "";
$message = "";
$mesClass = "";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
	$templatefile = "enroll_prospect_inline_add.htm";
else
	$templatefile = "enroll_prospect_add.htm";

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");
	
$xt = new Xtempl();
	
// assign an id
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);


$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['locale_info'] = $locale_info;
$params['includes_css'] = $includes_css;
$params['useTabsOnAdd'] = $gSettings->useTabsOnAdd();
$params['templatefile'] = $templatefile;
$params['includes_jsreq'] = $includes_jsreq;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['needSearchClauseObj'] = false;
$params['strOriginalTableName'] = $strOriginalTableName;

if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = $gSettings->getAddTabs();
	
$pageObject = new AddPage($params);

if(isset($_REQUEST['afteradd'])){
		header('Location: enroll_prospect_add.php');
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd'], $pageObject);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
		exit;
}

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd==ADD_SIMPLE || $inlineadd == ADD_ONTHEFLY)
	$pageObject->addButtonHandlers();

$url_page=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$countDetailsIsShow = 0;
		$pageObject->jsSettings['tableSettings'][$strTableName]['isShowDetails'] = $countDetailsIsShow > 0 ? true : false;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
	$eventObj->BeforeProcessAdd($conn, $pageObject);

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing DipID - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_DipID = $pageObject->getControl("DipID", $id);
		$control_DipID->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing DipID - end
//	processing finance - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_finance = $pageObject->getControl("finance", $id);
		$control_finance->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing finance - end
//	processing Date_Apply - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Date_Apply = $pageObject->getControl("Date_Apply", $id);
		$control_Date_Apply->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Date_Apply - end
//	processing Name - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Name = $pageObject->getControl("Name", $id);
		$control_Name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Name - end
//	processing ICNO - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_ICNO = $pageObject->getControl("ICNO", $id);
		$control_ICNO->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ICNO - end
//	processing Passport - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Passport = $pageObject->getControl("Passport", $id);
		$control_Passport->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Passport - end
//	processing Nationality - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Nationality = $pageObject->getControl("Nationality", $id);
		$control_Nationality->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Nationality - end
//	processing Gender - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Gender = $pageObject->getControl("Gender", $id);
		$control_Gender->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Gender - end
//	processing race - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_race = $pageObject->getControl("race", $id);
		$control_race->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing race - end
//	processing Religion - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Religion = $pageObject->getControl("Religion", $id);
		$control_Religion->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Religion - end
//	processing Address1 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Address1 = $pageObject->getControl("Address1", $id);
		$control_Address1->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Address1 - end
//	processing Postcode - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Postcode = $pageObject->getControl("Postcode", $id);
		$control_Postcode->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Postcode - end
//	processing City - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_City = $pageObject->getControl("City", $id);
		$control_City->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing City - end
//	processing StateID - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_StateID = $pageObject->getControl("StateID", $id);
		$control_StateID->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing StateID - end
//	processing Country - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Country = $pageObject->getControl("Country", $id);
		$control_Country->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Country - end
//	processing MobileTelephone - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_MobileTelephone = $pageObject->getControl("MobileTelephone", $id);
		$control_MobileTelephone->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing MobileTelephone - end
//	processing HomeTelephone - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_HomeTelephone = $pageObject->getControl("HomeTelephone", $id);
		$control_HomeTelephone->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing HomeTelephone - end
//	processing Email - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Email = $pageObject->getControl("Email", $id);
		$control_Email->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Email - end
//	processing qua_level - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_qua_level = $pageObject->getControl("qua_level", $id);
		$control_qua_level->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing qua_level - end
//	processing qua_place - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_qua_place = $pageObject->getControl("qua_place", $id);
		$control_qua_place->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing qua_place - end
//	processing qua_year - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_qua_year = $pageObject->getControl("qua_year", $id);
		$control_qua_year->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing qua_year - end
//	processing qua_result - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_qua_result = $pageObject->getControl("qua_result", $id);
		$control_qua_result->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing qua_result - end
//	processing q1_s - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_q1_s = $pageObject->getControl("q1_s", $id);
		$control_q1_s->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing q1_s - end
//	processing q1_g - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_q1_g = $pageObject->getControl("q1_g", $id);
		$control_q1_g->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing q1_g - end
//	processing q2_s - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_q2_s = $pageObject->getControl("q2_s", $id);
		$control_q2_s->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing q2_s - end
//	processing q2_g - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_q2_g = $pageObject->getControl("q2_g", $id);
		$control_q2_g->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing q2_g - end
//	processing q3_s - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_q3_s = $pageObject->getControl("q3_s", $id);
		$control_q3_s->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing q3_s - end
//	processing q3_g - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_q3_g = $pageObject->getControl("q3_g", $id);
		$control_q3_g->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing q3_g - end
//	processing q4_s - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_q4_s = $pageObject->getControl("q4_s", $id);
		$control_q4_s->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing q4_s - end
//	processing q4_g - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_q4_g = $pageObject->getControl("q4_g", $id);
		$control_q4_g->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing q4_g - end
//	processing g5_s - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g5_s = $pageObject->getControl("g5_s", $id);
		$control_g5_s->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g5_s - end
//	processing g5_g - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g5_g = $pageObject->getControl("g5_g", $id);
		$control_g5_g->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g5_g - end
//	processing g6_s - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g6_s = $pageObject->getControl("g6_s", $id);
		$control_g6_s->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g6_s - end
//	processing g6_g - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g6_g = $pageObject->getControl("g6_g", $id);
		$control_g6_g->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g6_g - end
//	processing g7_s - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g7_s = $pageObject->getControl("g7_s", $id);
		$control_g7_s->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g7_s - end
//	processing g7_g - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g7_g = $pageObject->getControl("g7_g", $id);
		$control_g7_g->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g7_g - end
//	processing g8_s - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g8_s = $pageObject->getControl("g8_s", $id);
		$control_g8_s->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g8_s - end
//	processing g8_g - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g8_g = $pageObject->getControl("g8_g", $id);
		$control_g8_g->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g8_g - end
//	processing g9_s - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g9_s = $pageObject->getControl("g9_s", $id);
		$control_g9_s->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g9_s - end
//	processing g9_g - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g9_g = $pageObject->getControl("g9_g", $id);
		$control_g9_g->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g9_g - end
//	processing g10_s - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g10_s = $pageObject->getControl("g10_s", $id);
		$control_g10_s->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g10_s - end
//	processing g10_g - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g10_g = $pageObject->getControl("g10_g", $id);
		$control_g10_g->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g10_g - end
//	processing g11_s - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g11_s = $pageObject->getControl("g11_s", $id);
		$control_g11_s->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g11_s - end
//	processing g11_g - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_g11_g = $pageObject->getControl("g11_g", $id);
		$control_g11_g->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing g11_g - end
//	processing o_english - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_o_english = $pageObject->getControl("o_english", $id);
		$control_o_english->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing o_english - end
//	processing oq_highest - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_oq_highest = $pageObject->getControl("oq_highest", $id);
		$control_oq_highest->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing oq_highest - end
//	processing oq_major - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_oq_major = $pageObject->getControl("oq_major", $id);
		$control_oq_major->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing oq_major - end
//	processing oq_u - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_oq_u = $pageObject->getControl("oq_u", $id);
		$control_oq_u->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing oq_u - end
//	processing oq_cgpa - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_oq_cgpa = $pageObject->getControl("oq_cgpa", $id);
		$control_oq_cgpa->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing oq_cgpa - end




	$failed_inline_add=false;
//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
	
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval = $eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd, $pageObject);
	if($retval && $pageObject->isCaptchaOk)
	{
		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		setUpdatedLatLng($avalues, $pageObject->cipherer->pSet);
		
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject, $pageObject->cipherer))
		{
			$IsSaved=true;
//	after edit event
			if($auditObj || $eventObj->exists("AfterAdd"))
			{
				foreach($keys as $idx=>$val)
					$avalues[$idx]=$val;
			}
			
			if($auditObj)
				$auditObj->LogAdd($strTableName,$avalues,$keys);
				
// Give possibility to all edit controls to clean their data				
//	processing DipID - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_DipID->afterSuccessfulSave();
			}
//	processing DipID - end
//	processing finance - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_finance->afterSuccessfulSave();
			}
//	processing finance - end
//	processing Date_Apply - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Date_Apply->afterSuccessfulSave();
			}
//	processing Date_Apply - end
//	processing Name - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Name->afterSuccessfulSave();
			}
//	processing Name - end
//	processing ICNO - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_ICNO->afterSuccessfulSave();
			}
//	processing ICNO - end
//	processing Passport - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Passport->afterSuccessfulSave();
			}
//	processing Passport - end
//	processing Nationality - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Nationality->afterSuccessfulSave();
			}
//	processing Nationality - end
//	processing Gender - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Gender->afterSuccessfulSave();
			}
//	processing Gender - end
//	processing race - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_race->afterSuccessfulSave();
			}
//	processing race - end
//	processing Religion - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Religion->afterSuccessfulSave();
			}
//	processing Religion - end
//	processing Address1 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Address1->afterSuccessfulSave();
			}
//	processing Address1 - end
//	processing Postcode - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Postcode->afterSuccessfulSave();
			}
//	processing Postcode - end
//	processing City - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_City->afterSuccessfulSave();
			}
//	processing City - end
//	processing StateID - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_StateID->afterSuccessfulSave();
			}
//	processing StateID - end
//	processing Country - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Country->afterSuccessfulSave();
			}
//	processing Country - end
//	processing MobileTelephone - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_MobileTelephone->afterSuccessfulSave();
			}
//	processing MobileTelephone - end
//	processing HomeTelephone - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_HomeTelephone->afterSuccessfulSave();
			}
//	processing HomeTelephone - end
//	processing Email - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Email->afterSuccessfulSave();
			}
//	processing Email - end
//	processing qua_level - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_qua_level->afterSuccessfulSave();
			}
//	processing qua_level - end
//	processing qua_place - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_qua_place->afterSuccessfulSave();
			}
//	processing qua_place - end
//	processing qua_year - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_qua_year->afterSuccessfulSave();
			}
//	processing qua_year - end
//	processing qua_result - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_qua_result->afterSuccessfulSave();
			}
//	processing qua_result - end
//	processing q1_s - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_q1_s->afterSuccessfulSave();
			}
//	processing q1_s - end
//	processing q1_g - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_q1_g->afterSuccessfulSave();
			}
//	processing q1_g - end
//	processing q2_s - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_q2_s->afterSuccessfulSave();
			}
//	processing q2_s - end
//	processing q2_g - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_q2_g->afterSuccessfulSave();
			}
//	processing q2_g - end
//	processing q3_s - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_q3_s->afterSuccessfulSave();
			}
//	processing q3_s - end
//	processing q3_g - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_q3_g->afterSuccessfulSave();
			}
//	processing q3_g - end
//	processing q4_s - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_q4_s->afterSuccessfulSave();
			}
//	processing q4_s - end
//	processing q4_g - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_q4_g->afterSuccessfulSave();
			}
//	processing q4_g - end
//	processing g5_s - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g5_s->afterSuccessfulSave();
			}
//	processing g5_s - end
//	processing g5_g - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g5_g->afterSuccessfulSave();
			}
//	processing g5_g - end
//	processing g6_s - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g6_s->afterSuccessfulSave();
			}
//	processing g6_s - end
//	processing g6_g - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g6_g->afterSuccessfulSave();
			}
//	processing g6_g - end
//	processing g7_s - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g7_s->afterSuccessfulSave();
			}
//	processing g7_s - end
//	processing g7_g - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g7_g->afterSuccessfulSave();
			}
//	processing g7_g - end
//	processing g8_s - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g8_s->afterSuccessfulSave();
			}
//	processing g8_s - end
//	processing g8_g - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g8_g->afterSuccessfulSave();
			}
//	processing g8_g - end
//	processing g9_s - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g9_s->afterSuccessfulSave();
			}
//	processing g9_s - end
//	processing g9_g - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g9_g->afterSuccessfulSave();
			}
//	processing g9_g - end
//	processing g10_s - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g10_s->afterSuccessfulSave();
			}
//	processing g10_s - end
//	processing g10_g - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g10_g->afterSuccessfulSave();
			}
//	processing g10_g - end
//	processing g11_s - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g11_s->afterSuccessfulSave();
			}
//	processing g11_s - end
//	processing g11_g - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_g11_g->afterSuccessfulSave();
			}
//	processing g11_g - end
//	processing o_english - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_o_english->afterSuccessfulSave();
			}
//	processing o_english - end
//	processing oq_highest - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_oq_highest->afterSuccessfulSave();
			}
//	processing oq_highest - end
//	processing oq_major - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_oq_major->afterSuccessfulSave();
			}
//	processing oq_major - end
//	processing oq_u - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_oq_u->afterSuccessfulSave();
			}
//	processing oq_u - end
//	processing oq_cgpa - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_oq_cgpa->afterSuccessfulSave();
			}
//	processing oq_cgpa - end

			$afterAdd_id = '';	
			if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
				$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
			} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
				if($onFly)
					$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
				else{
					$afterAdd_id = generatePassword(20);	
				
					$_SESSION['after_add_data'][$afterAdd_id] = array(
						'avalues'=>$avalues,
						'keys'=>$keys,
						'inlineadd'=>(bool)$inlineadd,
						'time' => time()
					);	
				}
			}
				
			if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
			{
				$permis = array();
				$keylink = "";$k = 0;
				foreach($keys as $idx=>$val)
				{
					if($k!=0)
						$keylink .="&";
					$keylink .="editid".(++$k)."=".htmlspecialchars(rawurlencode(@$val));
				}
				$permis = $pageObject->getPermissions();				
				if (count($keys))
				{
					$message .="</br>";
					if($pageObject->pSet->hasEditPage() && $permis['edit'])
						$message .='&nbsp;<a href=\'enroll_prospect_edit.php?'.$keylink.'\'>'."Edit".'</a>&nbsp;';
					if($pageObject->pSet->hasViewPage() && $permis['search'])
						$message .='&nbsp;<a href=\'enroll_prospect_view.php?'.$keylink.'\'>'."View".'</a>&nbsp;';
				}
				$mesClass = "mes_ok";	
			}
		}
		elseif($inlineadd!=ADD_INLINE)
			$mesClass = "mes_not";	
	}
	else
	{
		$message = $usermessage;
		$status = "DECLINED";
		$readavalues = true;
	}
}
if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	header("Location: enroll_prospect_".$pageObject->getPageType().".php");
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
		$copykeys["enrolID"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["enrolID"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["enrolID"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
	$defvalues["Date_Apply"] = now();
	$defvalues["Nationality"] = "MY";
	$defvalues["Gender"] = "Male";
	$defvalues["race"] = "Malay";
	$defvalues["Religion"] = "Islam";
	$defvalues["Country"] = "Malaysia";
	$defvalues["q1_s"] = "Mathematics";
	$defvalues["q2_s"] = "English";
}



if($readavalues)
{
	$defvalues["Name"]=@$avalues["Name"];
	$defvalues["ICNO"]=@$avalues["ICNO"];
	$defvalues["Email"]=@$avalues["Email"];
	$defvalues["Date_Apply"]=@$avalues["Date_Apply"];
	$defvalues["Gender"]=@$avalues["Gender"];
	$defvalues["Address1"]=@$avalues["Address1"];
	$defvalues["City"]=@$avalues["City"];
	$defvalues["Postcode"]=@$avalues["Postcode"];
	$defvalues["StateID"]=@$avalues["StateID"];
	$defvalues["HomeTelephone"]=@$avalues["HomeTelephone"];
	$defvalues["MobileTelephone"]=@$avalues["MobileTelephone"];
	$defvalues["Nationality"]=@$avalues["Nationality"];
	$defvalues["DipID"]=@$avalues["DipID"];
	$defvalues["race"]=@$avalues["race"];
	$defvalues["Religion"]=@$avalues["Religion"];
	$defvalues["qua_level"]=@$avalues["qua_level"];
	$defvalues["q1_s"]=@$avalues["q1_s"];
	$defvalues["q1_g"]=@$avalues["q1_g"];
	$defvalues["q2_s"]=@$avalues["q2_s"];
	$defvalues["q2_g"]=@$avalues["q2_g"];
	$defvalues["q3_s"]=@$avalues["q3_s"];
	$defvalues["q3_g"]=@$avalues["q3_g"];
	$defvalues["q4_s"]=@$avalues["q4_s"];
	$defvalues["q4_g"]=@$avalues["q4_g"];
	$defvalues["g5_s"]=@$avalues["g5_s"];
	$defvalues["g5_g"]=@$avalues["g5_g"];
	$defvalues["g6_s"]=@$avalues["g6_s"];
	$defvalues["g6_g"]=@$avalues["g6_g"];
	$defvalues["g7_s"]=@$avalues["g7_s"];
	$defvalues["g7_g"]=@$avalues["g7_g"];
	$defvalues["g8_s"]=@$avalues["g8_s"];
	$defvalues["g8_g"]=@$avalues["g8_g"];
	$defvalues["g9_s"]=@$avalues["g9_s"];
	$defvalues["g9_g"]=@$avalues["g9_g"];
	$defvalues["oq_highest"]=@$avalues["oq_highest"];
	$defvalues["oq_major"]=@$avalues["oq_major"];
	$defvalues["oq_u"]=@$avalues["oq_u"];
	$defvalues["oq_cgpa"]=@$avalues["oq_cgpa"];
	$defvalues["Country"]=@$avalues["Country"];
	$defvalues["g10_s"]=@$avalues["g10_s"];
	$defvalues["g10_g"]=@$avalues["g10_g"];
	$defvalues["g11_s"]=@$avalues["g11_s"];
	$defvalues["g11_g"]=@$avalues["g11_g"];
	$defvalues["o_english"]=@$avalues["o_english"];
	$defvalues["qua_year"]=@$avalues["qua_year"];
	$defvalues["finance"]=@$avalues["finance"];
	$defvalues["Passport"]=@$avalues["Passport"];
	$defvalues["qua_result"]=@$avalues["qua_result"];
	$defvalues["qua_place"]=@$avalues["qua_place"];
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues, $pageObject);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		if (!isMobile())
			$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	if(!$pageObject->isAppearOnTabs("Name"))
		$xt->assign("Name_fieldblock",true);
	else
		$xt->assign("Name_tabfieldblock",true);
	$xt->assign("Name_label",true);
	if(isEnableSection508())
		$xt->assign_section("Name_label","<label for=\"".GetInputElementId("Name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ICNO"))
		$xt->assign("ICNO_fieldblock",true);
	else
		$xt->assign("ICNO_tabfieldblock",true);
	$xt->assign("ICNO_label",true);
	if(isEnableSection508())
		$xt->assign_section("ICNO_label","<label for=\"".GetInputElementId("ICNO", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Email"))
		$xt->assign("Email_fieldblock",true);
	else
		$xt->assign("Email_tabfieldblock",true);
	$xt->assign("Email_label",true);
	if(isEnableSection508())
		$xt->assign_section("Email_label","<label for=\"".GetInputElementId("Email", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Date_Apply"))
		$xt->assign("Date_Apply_fieldblock",true);
	else
		$xt->assign("Date_Apply_tabfieldblock",true);
	$xt->assign("Date_Apply_label",true);
	if(isEnableSection508())
		$xt->assign_section("Date_Apply_label","<label for=\"".GetInputElementId("Date_Apply", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Gender"))
		$xt->assign("Gender_fieldblock",true);
	else
		$xt->assign("Gender_tabfieldblock",true);
	$xt->assign("Gender_label",true);
	if(isEnableSection508())
		$xt->assign_section("Gender_label","<label for=\"".GetInputElementId("Gender", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Address1"))
		$xt->assign("Address1_fieldblock",true);
	else
		$xt->assign("Address1_tabfieldblock",true);
	$xt->assign("Address1_label",true);
	if(isEnableSection508())
		$xt->assign_section("Address1_label","<label for=\"".GetInputElementId("Address1", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("City"))
		$xt->assign("City_fieldblock",true);
	else
		$xt->assign("City_tabfieldblock",true);
	$xt->assign("City_label",true);
	if(isEnableSection508())
		$xt->assign_section("City_label","<label for=\"".GetInputElementId("City", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Postcode"))
		$xt->assign("Postcode_fieldblock",true);
	else
		$xt->assign("Postcode_tabfieldblock",true);
	$xt->assign("Postcode_label",true);
	if(isEnableSection508())
		$xt->assign_section("Postcode_label","<label for=\"".GetInputElementId("Postcode", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("StateID"))
		$xt->assign("StateID_fieldblock",true);
	else
		$xt->assign("StateID_tabfieldblock",true);
	$xt->assign("StateID_label",true);
	if(isEnableSection508())
		$xt->assign_section("StateID_label","<label for=\"".GetInputElementId("StateID", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("HomeTelephone"))
		$xt->assign("HomeTelephone_fieldblock",true);
	else
		$xt->assign("HomeTelephone_tabfieldblock",true);
	$xt->assign("HomeTelephone_label",true);
	if(isEnableSection508())
		$xt->assign_section("HomeTelephone_label","<label for=\"".GetInputElementId("HomeTelephone", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("MobileTelephone"))
		$xt->assign("MobileTelephone_fieldblock",true);
	else
		$xt->assign("MobileTelephone_tabfieldblock",true);
	$xt->assign("MobileTelephone_label",true);
	if(isEnableSection508())
		$xt->assign_section("MobileTelephone_label","<label for=\"".GetInputElementId("MobileTelephone", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Nationality"))
		$xt->assign("Nationality_fieldblock",true);
	else
		$xt->assign("Nationality_tabfieldblock",true);
	$xt->assign("Nationality_label",true);
	if(isEnableSection508())
		$xt->assign_section("Nationality_label","<label for=\"".GetInputElementId("Nationality", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("DipID"))
		$xt->assign("DipID_fieldblock",true);
	else
		$xt->assign("DipID_tabfieldblock",true);
	$xt->assign("DipID_label",true);
	if(isEnableSection508())
		$xt->assign_section("DipID_label","<label for=\"".GetInputElementId("DipID", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("race"))
		$xt->assign("race_fieldblock",true);
	else
		$xt->assign("race_tabfieldblock",true);
	$xt->assign("race_label",true);
	if(isEnableSection508())
		$xt->assign_section("race_label","<label for=\"".GetInputElementId("race", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Religion"))
		$xt->assign("Religion_fieldblock",true);
	else
		$xt->assign("Religion_tabfieldblock",true);
	$xt->assign("Religion_label",true);
	if(isEnableSection508())
		$xt->assign_section("Religion_label","<label for=\"".GetInputElementId("Religion", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("qua_level"))
		$xt->assign("qua_level_fieldblock",true);
	else
		$xt->assign("qua_level_tabfieldblock",true);
	$xt->assign("qua_level_label",true);
	if(isEnableSection508())
		$xt->assign_section("qua_level_label","<label for=\"".GetInputElementId("qua_level", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("q1_s"))
		$xt->assign("q1_s_fieldblock",true);
	else
		$xt->assign("q1_s_tabfieldblock",true);
	$xt->assign("q1_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("q1_s_label","<label for=\"".GetInputElementId("q1_s", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("q1_g"))
		$xt->assign("q1_g_fieldblock",true);
	else
		$xt->assign("q1_g_tabfieldblock",true);
	$xt->assign("q1_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("q1_g_label","<label for=\"".GetInputElementId("q1_g", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("q2_s"))
		$xt->assign("q2_s_fieldblock",true);
	else
		$xt->assign("q2_s_tabfieldblock",true);
	$xt->assign("q2_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("q2_s_label","<label for=\"".GetInputElementId("q2_s", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("q2_g"))
		$xt->assign("q2_g_fieldblock",true);
	else
		$xt->assign("q2_g_tabfieldblock",true);
	$xt->assign("q2_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("q2_g_label","<label for=\"".GetInputElementId("q2_g", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("q3_s"))
		$xt->assign("q3_s_fieldblock",true);
	else
		$xt->assign("q3_s_tabfieldblock",true);
	$xt->assign("q3_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("q3_s_label","<label for=\"".GetInputElementId("q3_s", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("q3_g"))
		$xt->assign("q3_g_fieldblock",true);
	else
		$xt->assign("q3_g_tabfieldblock",true);
	$xt->assign("q3_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("q3_g_label","<label for=\"".GetInputElementId("q3_g", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("q4_s"))
		$xt->assign("q4_s_fieldblock",true);
	else
		$xt->assign("q4_s_tabfieldblock",true);
	$xt->assign("q4_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("q4_s_label","<label for=\"".GetInputElementId("q4_s", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("q4_g"))
		$xt->assign("q4_g_fieldblock",true);
	else
		$xt->assign("q4_g_tabfieldblock",true);
	$xt->assign("q4_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("q4_g_label","<label for=\"".GetInputElementId("q4_g", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g5_s"))
		$xt->assign("g5_s_fieldblock",true);
	else
		$xt->assign("g5_s_tabfieldblock",true);
	$xt->assign("g5_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g5_s_label","<label for=\"".GetInputElementId("g5_s", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g5_g"))
		$xt->assign("g5_g_fieldblock",true);
	else
		$xt->assign("g5_g_tabfieldblock",true);
	$xt->assign("g5_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g5_g_label","<label for=\"".GetInputElementId("g5_g", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g6_s"))
		$xt->assign("g6_s_fieldblock",true);
	else
		$xt->assign("g6_s_tabfieldblock",true);
	$xt->assign("g6_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g6_s_label","<label for=\"".GetInputElementId("g6_s", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g6_g"))
		$xt->assign("g6_g_fieldblock",true);
	else
		$xt->assign("g6_g_tabfieldblock",true);
	$xt->assign("g6_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g6_g_label","<label for=\"".GetInputElementId("g6_g", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g7_s"))
		$xt->assign("g7_s_fieldblock",true);
	else
		$xt->assign("g7_s_tabfieldblock",true);
	$xt->assign("g7_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g7_s_label","<label for=\"".GetInputElementId("g7_s", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g7_g"))
		$xt->assign("g7_g_fieldblock",true);
	else
		$xt->assign("g7_g_tabfieldblock",true);
	$xt->assign("g7_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g7_g_label","<label for=\"".GetInputElementId("g7_g", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g8_s"))
		$xt->assign("g8_s_fieldblock",true);
	else
		$xt->assign("g8_s_tabfieldblock",true);
	$xt->assign("g8_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g8_s_label","<label for=\"".GetInputElementId("g8_s", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g8_g"))
		$xt->assign("g8_g_fieldblock",true);
	else
		$xt->assign("g8_g_tabfieldblock",true);
	$xt->assign("g8_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g8_g_label","<label for=\"".GetInputElementId("g8_g", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g9_s"))
		$xt->assign("g9_s_fieldblock",true);
	else
		$xt->assign("g9_s_tabfieldblock",true);
	$xt->assign("g9_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g9_s_label","<label for=\"".GetInputElementId("g9_s", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g9_g"))
		$xt->assign("g9_g_fieldblock",true);
	else
		$xt->assign("g9_g_tabfieldblock",true);
	$xt->assign("g9_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g9_g_label","<label for=\"".GetInputElementId("g9_g", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("oq_highest"))
		$xt->assign("oq_highest_fieldblock",true);
	else
		$xt->assign("oq_highest_tabfieldblock",true);
	$xt->assign("oq_highest_label",true);
	if(isEnableSection508())
		$xt->assign_section("oq_highest_label","<label for=\"".GetInputElementId("oq_highest", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("oq_major"))
		$xt->assign("oq_major_fieldblock",true);
	else
		$xt->assign("oq_major_tabfieldblock",true);
	$xt->assign("oq_major_label",true);
	if(isEnableSection508())
		$xt->assign_section("oq_major_label","<label for=\"".GetInputElementId("oq_major", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("oq_u"))
		$xt->assign("oq_u_fieldblock",true);
	else
		$xt->assign("oq_u_tabfieldblock",true);
	$xt->assign("oq_u_label",true);
	if(isEnableSection508())
		$xt->assign_section("oq_u_label","<label for=\"".GetInputElementId("oq_u", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("oq_cgpa"))
		$xt->assign("oq_cgpa_fieldblock",true);
	else
		$xt->assign("oq_cgpa_tabfieldblock",true);
	$xt->assign("oq_cgpa_label",true);
	if(isEnableSection508())
		$xt->assign_section("oq_cgpa_label","<label for=\"".GetInputElementId("oq_cgpa", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Country"))
		$xt->assign("Country_fieldblock",true);
	else
		$xt->assign("Country_tabfieldblock",true);
	$xt->assign("Country_label",true);
	if(isEnableSection508())
		$xt->assign_section("Country_label","<label for=\"".GetInputElementId("Country", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g10_s"))
		$xt->assign("g10_s_fieldblock",true);
	else
		$xt->assign("g10_s_tabfieldblock",true);
	$xt->assign("g10_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g10_s_label","<label for=\"".GetInputElementId("g10_s", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g10_g"))
		$xt->assign("g10_g_fieldblock",true);
	else
		$xt->assign("g10_g_tabfieldblock",true);
	$xt->assign("g10_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g10_g_label","<label for=\"".GetInputElementId("g10_g", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g11_s"))
		$xt->assign("g11_s_fieldblock",true);
	else
		$xt->assign("g11_s_tabfieldblock",true);
	$xt->assign("g11_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g11_s_label","<label for=\"".GetInputElementId("g11_s", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("g11_g"))
		$xt->assign("g11_g_fieldblock",true);
	else
		$xt->assign("g11_g_tabfieldblock",true);
	$xt->assign("g11_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g11_g_label","<label for=\"".GetInputElementId("g11_g", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("o_english"))
		$xt->assign("o_english_fieldblock",true);
	else
		$xt->assign("o_english_tabfieldblock",true);
	$xt->assign("o_english_label",true);
	if(isEnableSection508())
		$xt->assign_section("o_english_label","<label for=\"".GetInputElementId("o_english", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("qua_year"))
		$xt->assign("qua_year_fieldblock",true);
	else
		$xt->assign("qua_year_tabfieldblock",true);
	$xt->assign("qua_year_label",true);
	if(isEnableSection508())
		$xt->assign_section("qua_year_label","<label for=\"".GetInputElementId("qua_year", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("finance"))
		$xt->assign("finance_fieldblock",true);
	else
		$xt->assign("finance_tabfieldblock",true);
	$xt->assign("finance_label",true);
	if(isEnableSection508())
		$xt->assign_section("finance_label","<label for=\"".GetInputElementId("finance", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Passport"))
		$xt->assign("Passport_fieldblock",true);
	else
		$xt->assign("Passport_tabfieldblock",true);
	$xt->assign("Passport_label",true);
	if(isEnableSection508())
		$xt->assign_section("Passport_label","<label for=\"".GetInputElementId("Passport", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("qua_result"))
		$xt->assign("qua_result_fieldblock",true);
	else
		$xt->assign("qua_result_tabfieldblock",true);
	$xt->assign("qua_result_label",true);
	if(isEnableSection508())
		$xt->assign_section("qua_result_label","<label for=\"".GetInputElementId("qua_result", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("qua_place"))
		$xt->assign("qua_place_fieldblock",true);
	else
		$xt->assign("qua_place_tabfieldblock",true);
	$xt->assign("qua_place_label",true);
	if(isEnableSection508())
		$xt->assign_section("qua_place_label","<label for=\"".GetInputElementId("qua_place", $id, PAGE_ADD)."\">","</label>");
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}

//	show readonly fields
$linkdata="";

$i = 0;
$jsKeys = array();
$keyFields = array();
foreach($keys as $field=>$value)
{
	$keyFields[$i] = $field;
	$jsKeys[$i++] = $value;
}

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$addedData = GetAddedDataLookupQuery($pageObject, $keys, false);
		$data =& $addedData[0];	
		
		if($data)
		{
			$respData = array($addedData[1]["linkField"] => @$data[$addedData[1]["linkFieldIndex"]], $addedData[1]["displayField"] => @$data[$addedData[1]["displayFieldIndex"]]);
		}
		else
		{
			$respData = array($addedData[1]["linkField"] => @$avalues[$addedData[1]["linkField"]], $addedData[1]["displayField"] => @$avalues[$addedData[1]["displayField"]]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $jsKeys;
		$returnJSON['keyFields'] = $keyFields;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	$linkAndDispVals = array();
	if(count($keys))
	{
		$where=KeyWhere($keys);
			
		$forLookup = postvalue('forLookup');
		if ($forLookup)
		{
			$addedData = GetAddedDataLookupQuery($pageObject, $keys, true);
			$data =& $addedData[0];
			$linkAndDispVals = array('linkField' => $addedData[0][$addedData[1]["linkField"]], 'displayField' => $addedData[0][$addedData[1]["displayField"]]);
		}
		else
		{
			$strSQL = $gQuery->gSQLWhere_having_fromQuery('', $where, '');		
		
			LogInfo($strSQL);
			$rs=db_query($strSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["enrolID"]));
	
////////////////////////////////////////////
//	Name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Name", $data, $keylink);
		$showValues["Name"] = $value;
		$showFields[] = "Name";
	}	
//	ICNO
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ICNO", $data, $keylink);
		$showValues["ICNO"] = $value;
		$showFields[] = "ICNO";
	}	
//	Email
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Email", $data, $keylink);
		$showValues["Email"] = $value;
		$showFields[] = "Email";
	}	
//	Date_Apply
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Date_Apply", $data, $keylink);
		$showValues["Date_Apply"] = $value;
		$showFields[] = "Date_Apply";
	}	
//	Gender
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Gender", $data, $keylink);
		$showValues["Gender"] = $value;
		$showFields[] = "Gender";
	}	
//	Address1
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Address1", $data, $keylink);
		$showValues["Address1"] = $value;
		$showFields[] = "Address1";
	}	
//	City
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("City", $data, $keylink);
		$showValues["City"] = $value;
		$showFields[] = "City";
	}	
//	Postcode
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Postcode", $data, $keylink);
		$showValues["Postcode"] = $value;
		$showFields[] = "Postcode";
	}	
//	StateID
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("StateID", $data, $keylink);
		$showValues["StateID"] = $value;
		$showFields[] = "StateID";
	}	
//	HomeTelephone
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("HomeTelephone", $data, $keylink);
		$showValues["HomeTelephone"] = $value;
		$showFields[] = "HomeTelephone";
	}	
//	MobileTelephone
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("MobileTelephone", $data, $keylink);
		$showValues["MobileTelephone"] = $value;
		$showFields[] = "MobileTelephone";
	}	
//	Nationality
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Nationality", $data, $keylink);
		$showValues["Nationality"] = $value;
		$showFields[] = "Nationality";
	}	
//	DipID
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("DipID", $data, $keylink);
		$showValues["DipID"] = $value;
		$showFields[] = "DipID";
	}	
//	Status
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Status", $data, $keylink);
		$showValues["Status"] = $value;
		$showFields[] = "Status";
	}	
//	race
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("race", $data, $keylink);
		$showValues["race"] = $value;
		$showFields[] = "race";
	}	
//	Religion
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Religion", $data, $keylink);
		$showValues["Religion"] = $value;
		$showFields[] = "Religion";
	}	
//	qua_level
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("qua_level", $data, $keylink);
		$showValues["qua_level"] = $value;
		$showFields[] = "qua_level";
	}	
//	q1_s
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("q1_s", $data, $keylink);
		$showValues["q1_s"] = $value;
		$showFields[] = "q1_s";
	}	
//	q1_g
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("q1_g", $data, $keylink);
		$showValues["q1_g"] = $value;
		$showFields[] = "q1_g";
	}	
//	q2_s
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("q2_s", $data, $keylink);
		$showValues["q2_s"] = $value;
		$showFields[] = "q2_s";
	}	
//	q2_g
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("q2_g", $data, $keylink);
		$showValues["q2_g"] = $value;
		$showFields[] = "q2_g";
	}	
//	q3_s
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("q3_s", $data, $keylink);
		$showValues["q3_s"] = $value;
		$showFields[] = "q3_s";
	}	
//	q3_g
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("q3_g", $data, $keylink);
		$showValues["q3_g"] = $value;
		$showFields[] = "q3_g";
	}	
//	q4_s
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("q4_s", $data, $keylink);
		$showValues["q4_s"] = $value;
		$showFields[] = "q4_s";
	}	
//	q4_g
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("q4_g", $data, $keylink);
		$showValues["q4_g"] = $value;
		$showFields[] = "q4_g";
	}	
//	g5_s
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g5_s", $data, $keylink);
		$showValues["g5_s"] = $value;
		$showFields[] = "g5_s";
	}	
//	g5_g
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g5_g", $data, $keylink);
		$showValues["g5_g"] = $value;
		$showFields[] = "g5_g";
	}	
//	g6_s
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g6_s", $data, $keylink);
		$showValues["g6_s"] = $value;
		$showFields[] = "g6_s";
	}	
//	g6_g
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g6_g", $data, $keylink);
		$showValues["g6_g"] = $value;
		$showFields[] = "g6_g";
	}	
//	g7_s
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g7_s", $data, $keylink);
		$showValues["g7_s"] = $value;
		$showFields[] = "g7_s";
	}	
//	g7_g
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g7_g", $data, $keylink);
		$showValues["g7_g"] = $value;
		$showFields[] = "g7_g";
	}	
//	g8_s
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g8_s", $data, $keylink);
		$showValues["g8_s"] = $value;
		$showFields[] = "g8_s";
	}	
//	g8_g
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g8_g", $data, $keylink);
		$showValues["g8_g"] = $value;
		$showFields[] = "g8_g";
	}	
//	g9_s
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g9_s", $data, $keylink);
		$showValues["g9_s"] = $value;
		$showFields[] = "g9_s";
	}	
//	g9_g
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g9_g", $data, $keylink);
		$showValues["g9_g"] = $value;
		$showFields[] = "g9_g";
	}	
//	oq_highest
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("oq_highest", $data, $keylink);
		$showValues["oq_highest"] = $value;
		$showFields[] = "oq_highest";
	}	
//	oq_major
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("oq_major", $data, $keylink);
		$showValues["oq_major"] = $value;
		$showFields[] = "oq_major";
	}	
//	oq_u
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("oq_u", $data, $keylink);
		$showValues["oq_u"] = $value;
		$showFields[] = "oq_u";
	}	
//	oq_cgpa
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("oq_cgpa", $data, $keylink);
		$showValues["oq_cgpa"] = $value;
		$showFields[] = "oq_cgpa";
	}	
//	Country
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Country", $data, $keylink);
		$showValues["Country"] = $value;
		$showFields[] = "Country";
	}	
//	g10_s
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g10_s", $data, $keylink);
		$showValues["g10_s"] = $value;
		$showFields[] = "g10_s";
	}	
//	g10_g
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g10_g", $data, $keylink);
		$showValues["g10_g"] = $value;
		$showFields[] = "g10_g";
	}	
//	g11_s
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g11_s", $data, $keylink);
		$showValues["g11_s"] = $value;
		$showFields[] = "g11_s";
	}	
//	g11_g
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("g11_g", $data, $keylink);
		$showValues["g11_g"] = $value;
		$showFields[] = "g11_g";
	}	
//	o_english
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("o_english", $data, $keylink);
		$showValues["o_english"] = $value;
		$showFields[] = "o_english";
	}	
//	qua_year
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("qua_year", $data, $keylink);
		$showValues["qua_year"] = $value;
		$showFields[] = "qua_year";
	}	
//	finance
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("finance", $data, $keylink);
		$showValues["finance"] = $value;
		$showFields[] = "finance";
	}	
//	Detail
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Detail", $data, $keylink);
		$showValues["Detail"] = $value;
		$showFields[] = "Detail";
	}	
//	Passport
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Passport", $data, $keylink);
		$showValues["Passport"] = $value;
		$showFields[] = "Passport";
	}	
//	qua_result
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("qua_result", $data, $keylink);
		$showValues["qua_result"] = $value;
		$showFields[] = "qua_result";
	}	
//	qua_place
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("qua_place", $data, $keylink);
		$showValues["qua_place"] = $value;
		$showFields[] = "qua_place";
	}	
		$showRawValues["enrolID"] = substr($data["enrolID"],0,100);
		$showRawValues["Name"] = substr($data["Name"],0,100);
		$showRawValues["ICNO"] = substr($data["ICNO"],0,100);
		$showRawValues["Email"] = substr($data["Email"],0,100);
		$showRawValues["BranchID"] = substr($data["BranchID"],0,100);
		$showRawValues["Date_Apply"] = substr($data["Date_Apply"],0,100);
		$showRawValues["month"] = substr($data["month"],0,100);
		$showRawValues["year"] = substr($data["year"],0,100);
		$showRawValues["Gender"] = substr($data["Gender"],0,100);
		$showRawValues["Address1"] = substr($data["Address1"],0,100);
		$showRawValues["City"] = substr($data["City"],0,100);
		$showRawValues["Postcode"] = substr($data["Postcode"],0,100);
		$showRawValues["StateID"] = substr($data["StateID"],0,100);
		$showRawValues["HomeTelephone"] = substr($data["HomeTelephone"],0,100);
		$showRawValues["MobileTelephone"] = substr($data["MobileTelephone"],0,100);
		$showRawValues["Nationality"] = substr($data["Nationality"],0,100);
		$showRawValues["DipID"] = substr($data["DipID"],0,100);
		$showRawValues["Status"] = substr($data["Status"],0,100);
		$showRawValues["Disability"] = substr($data["Disability"],0,100);
		$showRawValues["MedicalCondition"] = substr($data["MedicalCondition"],0,100);
		$showRawValues["race"] = substr($data["race"],0,100);
		$showRawValues["Religion"] = substr($data["Religion"],0,100);
		$showRawValues["blood"] = substr($data["blood"],0,100);
		$showRawValues["qua_level"] = substr($data["qua_level"],0,100);
		$showRawValues["q1_s"] = substr($data["q1_s"],0,100);
		$showRawValues["q1_g"] = substr($data["q1_g"],0,100);
		$showRawValues["q2_s"] = substr($data["q2_s"],0,100);
		$showRawValues["q2_g"] = substr($data["q2_g"],0,100);
		$showRawValues["q3_s"] = substr($data["q3_s"],0,100);
		$showRawValues["q3_g"] = substr($data["q3_g"],0,100);
		$showRawValues["q4_s"] = substr($data["q4_s"],0,100);
		$showRawValues["q4_g"] = substr($data["q4_g"],0,100);
		$showRawValues["g5_s"] = substr($data["g5_s"],0,100);
		$showRawValues["g5_g"] = substr($data["g5_g"],0,100);
		$showRawValues["g6_s"] = substr($data["g6_s"],0,100);
		$showRawValues["g6_g"] = substr($data["g6_g"],0,100);
		$showRawValues["g7_s"] = substr($data["g7_s"],0,100);
		$showRawValues["g7_g"] = substr($data["g7_g"],0,100);
		$showRawValues["g8_s"] = substr($data["g8_s"],0,100);
		$showRawValues["g8_g"] = substr($data["g8_g"],0,100);
		$showRawValues["g9_s"] = substr($data["g9_s"],0,100);
		$showRawValues["g9_g"] = substr($data["g9_g"],0,100);
		$showRawValues["oq_highest"] = substr($data["oq_highest"],0,100);
		$showRawValues["oq_major"] = substr($data["oq_major"],0,100);
		$showRawValues["oq_u"] = substr($data["oq_u"],0,100);
		$showRawValues["oq_cgpa"] = substr($data["oq_cgpa"],0,100);
		$showRawValues["at_ic"] = substr($data["at_ic"],0,100);
		$showRawValues["at_dob"] = substr($data["at_dob"],0,100);
		$showRawValues["at_spm"] = substr($data["at_spm"],0,100);
		$showRawValues["at_slc"] = substr($data["at_slc"],0,100);
		$showRawValues["at_coco"] = substr($data["at_coco"],0,100);
		$showRawValues["at_fama"] = substr($data["at_fama"],0,100);
		$showRawValues["at_famaic"] = substr($data["at_famaic"],0,100);
		$showRawValues["at_trans"] = substr($data["at_trans"],0,100);
		$showRawValues["at_photo"] = substr($data["at_photo"],0,100);
		$showRawValues["Country"] = substr($data["Country"],0,100);
		$showRawValues["g10_s"] = substr($data["g10_s"],0,100);
		$showRawValues["g10_g"] = substr($data["g10_g"],0,100);
		$showRawValues["g11_s"] = substr($data["g11_s"],0,100);
		$showRawValues["g11_g"] = substr($data["g11_g"],0,100);
		$showRawValues["o_english"] = substr($data["o_english"],0,100);
		$showRawValues["qua_year"] = substr($data["qua_year"],0,100);
		$showRawValues["finance"] = substr($data["finance"],0,100);
		$showRawValues["Detail"] = substr($data["Detail"],0,100);
		$showRawValues["Passport"] = substr($data["Passport"],0,100);
		$showRawValues["qua_result"] = substr($data["qua_result"],0,100);
		$showRawValues["qua_place"] = substr($data["qua_place"],0,100);
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{
			$returnJSON['success'] = true;
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
			
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['keyFields'] = $keyFields;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
			$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			// add link and display value if list page is lookup with search
			if(array_key_exists('linkField', $linkAndDispVals))
			{
				$returnJSON['linkValue'] = $linkAndDispVals['linkField'];
				$returnJSON['displayValue'] = $linkAndDispVals['displayField'];
			}
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{ 
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$returnJSON['nonEditable'] = true;
			}
			
			if($inlineadd==ADD_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
				$returnJSON['hideCaptcha'] = true;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
			if(!$pageObject->isCaptchaOk)
				$returnJSON['captcha'] = false;
		}
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$respJSON['noKeys'] = false;
			else
				$respJSON['noKeys'] = true;
			$respJSON['keys'] = $jsKeys;
			$respJSON['keyFields'] = $keyFields;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
			$respJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$respJSON['nonEditable'] = true;
			}
		}
		$respJSON['mKeys'] = array();
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							$strSQL = $gQuery->gSQLWhere($where);
				LogInfo($strSQL);
				$rs = db_query($strSQL,$conn);
				$data = $pageObject->cipherer->DecryptFetchedArray($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}
		}
		if(isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$respJSON['hidecaptcha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captcha'] = false;
			else
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;
		}
	echo "<textarea>".htmlspecialchars(my_json_encode($respJSON))."</textarea>";
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$regex='';
$regexmessage='';
$regextype = '';
$control = array();

foreach($addFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"] = "xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_ADD;
		$control[$gfName]["params"]["field"] = $fName;
		$control[$gfName]["params"]["value"] = @$defvalues[$fName];
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		if($pageObject->pSet->isUseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"] = @$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	//if richEditor for field
	if($pageObject->pSet->isUseRTE($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
	
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$defvalues[$fName];
	
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $addFields))
		$vals = array($fName => @$defvalues[$fName], $strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
	{
		$controls["controls"]['preloadData'] = $preload;
		if(!@$defvalues[$fName] && count($preload["vals"])>0)
			$defvalues[$fName] = $preload["vals"][0];
	}
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		$value = $pageObject->showDBValue($fName, $defvalues);
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
		
	$flyId = $ids+1;
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "enroll_prospect";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}	
			
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $flyId++;
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		$listPageObject = ListPage::createListPage($strTableName,$options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//set page events
		foreach($listPageObject->eventsObject->events as $event => $name)
			$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
		
		//add detail settings to master settings
		$listPageObject->addControlsJSAndCSS();
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
		}
		
		//Add detail's js files to master's files
		$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
		
		//Add detail's css files to master's files
		$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
		$xtParams = array("method"=>'showPage', "params"=> false);
		$xtParams['object'] = $listPageObject;
		$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap;
	$strTableName = "enroll_prospect";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);
$pageObject->xt->assign("legend", true);

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt, $templatefile, $pageObject);
	
if($inlineadd != ADD_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $id+1;	
	echo (my_json_encode($returnJSON)); 
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($addFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

function GetAddedDataLookupQuery($pageObject, $keys, $forLookup)
{
	global $conn, $strTableName, $strOriginalTableName;
	
	$LookupSQL = "";
	$linkfield = "";
	$dispfield = "";
	$noBlobReplace = false;
	$lookupFieldName = "";
	
	if($LookupSQL && $nLookupType != LT_QUERY)
		$LookupSQL.=" from ".AddTableWrappers($strOriginalTableName);
		
	$data = 0;
	$lookupIndexes = array("linkFieldIndex" => 0, "displayFieldIndex" => 0);
	if(count($keys))
	{
		$where = KeyWhere($keys);
		if($nLookupType == LT_QUERY){
			$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $where));
		}else 
			$LookupSQL.=" where ".$where;
		$lookupIndexes = GetLookupFieldsIndexes($lookupPSet, $lookupFieldName);
		LogInfo($LookupSQL);
		if($forLookup){
			$rs=db_query($LookupSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}else if($LookupSQL)
		{
			$rs = db_query($LookupSQL,$conn);
			$data = db_fetch_numarray($rs);
			$data[$lookupIndexes["linkFieldIndex"]] = $pageObject->cipherer->DecryptField($linkFieldName, $data[$lookupIndexes["linkFieldIndex"]]);
			if($nLookupType == LT_QUERY)
				$data[$lookupIndexes["displayFieldIndex"]] = $pageObject->cipherer->DecryptField($dispfield, $data[$lookupIndexes["displayFieldIndex"]]);		
		}
	}

	return array($data, array("linkField" => $linkFieldName, "displayField" => $dispfield
		, "linkFieldIndex" => $lookupIndexes["linkFieldIndex"], "displayFieldIndex" => $lookupIndexes["displayFieldIndex"]));
}	
	
?>
