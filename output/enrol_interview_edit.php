<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/enrol_interview_variables.php");
include('include/xtempl.php');
include('classes/editpage.php');
include("classes/searchclause.php");

add_nocache_headers();

global $globalEvents;

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'E') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired");
	return;
}

$layout = new TLayout("edit2","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["top"] = array();
$layout->containers["edit"] = array();

$layout->containers["edit"][] = array("name"=>"editheader","block"=>"","substyle"=>2);


$layout->containers["edit"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["edit"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"editfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"editbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["edit"] = "1";
$layout->blocks["top"][] = "edit";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["enrol_interview_edit"] = $layout;


$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["enrol_interview_edit_Personal_Particular1"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["enrol_interview_edit_Contact_Information1"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["enrol_interview_edit_Parents_Guardian_Information1"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["enrol_interview_edit_Medical_History1"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["enrol_interview_edit_Qualification_Information1"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["enrol_interview_edit_Enclosures___Required_Documents_1"] = $layout;



if ((sizeof($_POST)==0) && (postvalue('ferror')) && (!postvalue("editid1"))){
	$returnJSON['success'] = false;
	$returnJSON['message'] = "Error occurred";
	$returnJSON['fatalError'] = true;
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}
else if ((sizeof($_POST)==0) && (postvalue('ferror')) && (postvalue("editid1"))){
	if (postvalue('fly')){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_edit"] = "<< "."Error occurred"." >>";
	}
}
/////////////////////////////////////////////////////////////
//init variables
/////////////////////////////////////////////////////////////
if(postvalue("editType")=="inline")
	$inlineedit = EDIT_INLINE;
elseif(postvalue("editType")==EDIT_POPUP)
	$inlineedit = EDIT_POPUP;
else
	$inlineedit = EDIT_SIMPLE;

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

$flyId = $id+1;
$xt = new Xtempl();

// assign an id
$xt->assign("id",$id);

$templatefile = "enrol_interview_edit.htm";

//array of params for classes
$params = array("pageType" => PAGE_EDIT,"id" => $id);


$params['tName'] = $strTableName;
$params['xt'] = &$xt;
$params['mode'] = $inlineedit;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['templatefile'] = $templatefile;
$params['pageEditLikeInline'] = ($inlineedit == EDIT_INLINE);
//Get array of tabs for edit page
$params['useTabsOnEdit'] = $gSettings->useTabsOnEdit();
if($params['useTabsOnEdit'])
	$params['arrEditTabs'] = $gSettings->getEditTabs();

$pageObject = new EditPage($params);

//	For ajax request 
if($_REQUEST["action"]!="")
{
	if($pageObject->lockingObj)
	{
		$arrkeys = explode("&",refine($_REQUEST["keys"]));
		foreach($arrkeys as $ind=>$val)
			$arrkeys[$ind]=urldecode($val);
		
		if($_REQUEST["action"]=="unlock")
		{
			$pageObject->lockingObj->UnlockRecord($strTableName,$arrkeys,$_REQUEST["sid"]);
			exit();	
		}
		else if($_REQUEST["action"]=="lockadmin" && (IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP))
		{
			$pageObject->lockingObj->UnlockAdmin($strTableName,$arrkeys,$_REQUEST["startEdit"]=="yes");
			if($_REQUEST["startEdit"]=="no")
				echo "unlock";
			else if($_REQUEST["startEdit"]=="yes")
				echo "lock";
			exit();	
		}
		else if($_REQUEST["action"]=="confirm")
		{
			if(!$pageObject->lockingObj->ConfirmLock($strTableName,$arrkeys,$message));
				echo $message;
			exit();	
		}
	}
	else
		exit();
}

$filename = $status = $message = $mesClass = $usermessage = $strWhereClause = $bodyonload = "";
$showValues = $showRawValues = $showFields = $showDetailKeys = $key = $next = $prev = array();
$HaveData = $enableCtrlsForEditing = true;
$error_happened = $readevalues = $IsSaved = false;

$auditObj = GetAuditObject($strTableName);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;


if($pageObject->lockingObj)
{
	$system_attrs = "style='display:none;'";
	$system_message = "";
}

if ($inlineedit!=EDIT_INLINE)
{
	// add button events if exist
	$pageObject->addButtonHandlers();
}

$url_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//	Before Process event
if($eventObj->exists("BeforeProcessEdit"))
	$eventObj->BeforeProcessEdit($conn, $pageObject);

$keys = array();
$skeys = "";
$savedKeys = array();
$keys["enrolID"] = urldecode(postvalue("editid1"));
$savedKeys["enrolID"] = urldecode(postvalue("editid1"));
$skeys.= rawurlencode(postvalue("editid1"))."&";

$pageObject->setKeys($keys);

if($skeys!="")
	$skeys = substr($skeys,0,-1);

//For show detail tables on master page edit
if($inlineedit!=EDIT_INLINE)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables && !isMobile())
	{
		$ids = $id;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}
/////////////////////////////////////////////////////////////
//	process entered data, read and save
/////////////////////////////////////////////////////////////

// proccess captcha
if ($inlineedit!=EDIT_INLINE)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();

if(@$_POST["a"] == "edited")
{
	$strWhereClause = whereAdd($strWhereClause,KeyWhere($keys));
		$oldValuesRead = false;	
	if($eventObj->exists("AfterEdit") || $eventObj->exists("BeforeEdit") || $auditObj || isTableGeoUpdatable($pageObject->cipherer->pSet)
		|| $globalEvents->exists("IsRecordEditable", $strTableName))
	{
		//	read old values
		$rsold = db_query($gQuery->gSQLWhere($strWhereClause), $conn);
		$dataold = $pageObject->cipherer->DecryptFetchedArray($rsold);
		$oldValuesRead = true;
	}
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($dataold, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
	$evalues = $efilename_values = $blobfields = array();
	

//	processing Name - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Name = $pageObject->getControl("Name", $id);
		$control_Name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Name - end
//	processing ICNO - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_ICNO = $pageObject->getControl("ICNO", $id);
		$control_ICNO->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ICNO - end
//	processing DOB - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_DOB = $pageObject->getControl("DOB", $id);
		$control_DOB->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing DOB - end
//	processing Email - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Email = $pageObject->getControl("Email", $id);
		$control_Email->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Email - end
//	processing Date_Apply - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Date_Apply = $pageObject->getControl("Date_Apply", $id);
		$control_Date_Apply->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Date_Apply - end
//	processing Gender - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Gender = $pageObject->getControl("Gender", $id);
		$control_Gender->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Gender - end
//	processing married - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_married = $pageObject->getControl("married", $id);
		$control_married->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing married - end
//	processing Address1 - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Address1 = $pageObject->getControl("Address1", $id);
		$control_Address1->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Address1 - end
//	processing City - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_City = $pageObject->getControl("City", $id);
		$control_City->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing City - end
//	processing Postcode - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Postcode = $pageObject->getControl("Postcode", $id);
		$control_Postcode->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Postcode - end
//	processing StateID - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_StateID = $pageObject->getControl("StateID", $id);
		$control_StateID->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing StateID - end
//	processing HomeTelephone - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_HomeTelephone = $pageObject->getControl("HomeTelephone", $id);
		$control_HomeTelephone->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing HomeTelephone - end
//	processing MobileTelephone - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_MobileTelephone = $pageObject->getControl("MobileTelephone", $id);
		$control_MobileTelephone->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing MobileTelephone - end
//	processing Nationality - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Nationality = $pageObject->getControl("Nationality", $id);
		$control_Nationality->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Nationality - end
//	processing DipID - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_DipID = $pageObject->getControl("DipID", $id);
		$control_DipID->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing DipID - end
//	processing Status - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Status = $pageObject->getControl("Status", $id);
		$control_Status->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Status - end
//	processing Disability - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Disability = $pageObject->getControl("Disability", $id);
		$control_Disability->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Disability - end
//	processing MedicalCondition - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_MedicalCondition = $pageObject->getControl("MedicalCondition", $id);
		$control_MedicalCondition->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing MedicalCondition - end
//	processing race - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_race = $pageObject->getControl("race", $id);
		$control_race->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing race - end
//	processing Religion - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Religion = $pageObject->getControl("Religion", $id);
		$control_Religion->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Religion - end
//	processing f1_name - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f1_name = $pageObject->getControl("f1_name", $id);
		$control_f1_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f1_name - end
//	processing f1_tel - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f1_tel = $pageObject->getControl("f1_tel", $id);
		$control_f1_tel->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f1_tel - end
//	processing f1_relation - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f1_relation = $pageObject->getControl("f1_relation", $id);
		$control_f1_relation->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f1_relation - end
//	processing f2_name - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f2_name = $pageObject->getControl("f2_name", $id);
		$control_f2_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f2_name - end
//	processing f2_tel - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f2_tel = $pageObject->getControl("f2_tel", $id);
		$control_f2_tel->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f2_tel - end
//	processing f2_relation - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f2_relation = $pageObject->getControl("f2_relation", $id);
		$control_f2_relation->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f2_relation - end
//	processing blood - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_blood = $pageObject->getControl("blood", $id);
		$control_blood->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing blood - end
//	processing qua_level - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_qua_level = $pageObject->getControl("qua_level", $id);
		$control_qua_level->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing qua_level - end
//	processing q1_s - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_q1_s = $pageObject->getControl("q1_s", $id);
		$control_q1_s->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing q1_s - end
//	processing q1_g - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_q1_g = $pageObject->getControl("q1_g", $id);
		$control_q1_g->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing q1_g - end
//	processing q2_s - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_q2_s = $pageObject->getControl("q2_s", $id);
		$control_q2_s->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing q2_s - end
//	processing q2_g - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_q2_g = $pageObject->getControl("q2_g", $id);
		$control_q2_g->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing q2_g - end
//	processing q3_s - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_q3_s = $pageObject->getControl("q3_s", $id);
		$control_q3_s->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing q3_s - end
//	processing q3_g - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_q3_g = $pageObject->getControl("q3_g", $id);
		$control_q3_g->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing q3_g - end
//	processing q4_s - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_q4_s = $pageObject->getControl("q4_s", $id);
		$control_q4_s->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing q4_s - end
//	processing q4_g - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_q4_g = $pageObject->getControl("q4_g", $id);
		$control_q4_g->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing q4_g - end
//	processing g5_s - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g5_s = $pageObject->getControl("g5_s", $id);
		$control_g5_s->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g5_s - end
//	processing g5_g - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g5_g = $pageObject->getControl("g5_g", $id);
		$control_g5_g->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g5_g - end
//	processing g6_s - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g6_s = $pageObject->getControl("g6_s", $id);
		$control_g6_s->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g6_s - end
//	processing g6_g - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g6_g = $pageObject->getControl("g6_g", $id);
		$control_g6_g->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g6_g - end
//	processing g7_s - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g7_s = $pageObject->getControl("g7_s", $id);
		$control_g7_s->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g7_s - end
//	processing g7_g - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g7_g = $pageObject->getControl("g7_g", $id);
		$control_g7_g->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g7_g - end
//	processing g8_s - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g8_s = $pageObject->getControl("g8_s", $id);
		$control_g8_s->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g8_s - end
//	processing g8_g - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g8_g = $pageObject->getControl("g8_g", $id);
		$control_g8_g->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g8_g - end
//	processing g9_s - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g9_s = $pageObject->getControl("g9_s", $id);
		$control_g9_s->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g9_s - end
//	processing g9_g - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g9_g = $pageObject->getControl("g9_g", $id);
		$control_g9_g->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g9_g - end
//	processing oq_highest - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_oq_highest = $pageObject->getControl("oq_highest", $id);
		$control_oq_highest->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing oq_highest - end
//	processing oq_major - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_oq_major = $pageObject->getControl("oq_major", $id);
		$control_oq_major->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing oq_major - end
//	processing oq_u - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_oq_u = $pageObject->getControl("oq_u", $id);
		$control_oq_u->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing oq_u - end
//	processing oq_cgpa - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_oq_cgpa = $pageObject->getControl("oq_cgpa", $id);
		$control_oq_cgpa->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing oq_cgpa - end
//	processing at_ic - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_at_ic = $pageObject->getControl("at_ic", $id);
		$control_at_ic->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing at_ic - end
//	processing at_dob - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_at_dob = $pageObject->getControl("at_dob", $id);
		$control_at_dob->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing at_dob - end
//	processing at_spm - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_at_spm = $pageObject->getControl("at_spm", $id);
		$control_at_spm->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing at_spm - end
//	processing at_slc - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_at_slc = $pageObject->getControl("at_slc", $id);
		$control_at_slc->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing at_slc - end
//	processing at_coco - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_at_coco = $pageObject->getControl("at_coco", $id);
		$control_at_coco->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing at_coco - end
//	processing at_fama - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_at_fama = $pageObject->getControl("at_fama", $id);
		$control_at_fama->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing at_fama - end
//	processing at_famaic - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_at_famaic = $pageObject->getControl("at_famaic", $id);
		$control_at_famaic->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing at_famaic - end
//	processing at_trans - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_at_trans = $pageObject->getControl("at_trans", $id);
		$control_at_trans->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing at_trans - end
//	processing at_photo - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_at_photo = $pageObject->getControl("at_photo", $id);
		$control_at_photo->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing at_photo - end
//	processing Passport - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Passport = $pageObject->getControl("Passport", $id);
		$control_Passport->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Passport - end
//	processing Country - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Country = $pageObject->getControl("Country", $id);
		$control_Country->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Country - end
//	processing g10_s - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g10_s = $pageObject->getControl("g10_s", $id);
		$control_g10_s->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g10_s - end
//	processing g10_g - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g10_g = $pageObject->getControl("g10_g", $id);
		$control_g10_g->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g10_g - end
//	processing g11_s - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g11_s = $pageObject->getControl("g11_s", $id);
		$control_g11_s->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g11_s - end
//	processing g11_g - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_g11_g = $pageObject->getControl("g11_g", $id);
		$control_g11_g->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing g11_g - end
//	processing o_english - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_o_english = $pageObject->getControl("o_english", $id);
		$control_o_english->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing o_english - end
//	processing qua_year - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_qua_year = $pageObject->getControl("qua_year", $id);
		$control_qua_year->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing qua_year - end
//	processing f1_job - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f1_job = $pageObject->getControl("f1_job", $id);
		$control_f1_job->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f1_job - end
//	processing f2_job - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f2_job = $pageObject->getControl("f2_job", $id);
		$control_f2_job->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f2_job - end
//	processing finance - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_finance = $pageObject->getControl("finance", $id);
		$control_finance->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing finance - end

	foreach($efilename_values as $ekey=>$value)
		$evalues[$ekey] = $value;
		
	if($pageObject->lockingObj)
	{
		$lockmessage = "";
		if(!$pageObject->lockingObj->ConfirmLock($strTableName,$savedKeys,$lockmessage))
		{
			$enableCtrlsForEditing = false;
			$system_attrs = "style='display:block;'";
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,false,$id);
				
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
				exit();
			}
			else
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$system_message = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,true,$id);
				else
					$system_message = $lockmessage;
			}
			$status = "DECLINED";
			$readevalues = true;
		}
	}
	
	if($readevalues==false)
	{
	//	do event
		$retval = true;
		if($eventObj->exists("BeforeEdit"))
			$retval=$eventObj->BeforeEdit($evalues,$strWhereClause,$dataold,$keys,$usermessage,(bool)$inlineedit, $pageObject);
	
		if($retval && $pageObject->isCaptchaOk)
		{		
			if($inlineedit!=EDIT_INLINE)
				$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		
			//set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked	
            if(isTableGeoUpdatable($pageObject->cipherer->pSet)) {			
				setUpdatedLatLng($evalues, $pageObject->cipherer->pSet, $dataold);
			}	
			
			if(DoUpdateRecord($strOriginalTableName,$evalues,$blobfields,$strWhereClause,$id,$pageObject, $pageObject->cipherer))
			{
				$IsSaved = true;

			// Give possibility to all edit controls to clean their data				
			//	processing Name - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Name->afterSuccessfulSave();
				}
	//	processing Name - end
			//	processing ICNO - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_ICNO->afterSuccessfulSave();
				}
	//	processing ICNO - end
			//	processing DOB - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_DOB->afterSuccessfulSave();
				}
	//	processing DOB - end
			//	processing Email - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Email->afterSuccessfulSave();
				}
	//	processing Email - end
			//	processing Date_Apply - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Date_Apply->afterSuccessfulSave();
				}
	//	processing Date_Apply - end
			//	processing Gender - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Gender->afterSuccessfulSave();
				}
	//	processing Gender - end
			//	processing married - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_married->afterSuccessfulSave();
				}
	//	processing married - end
			//	processing Address1 - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Address1->afterSuccessfulSave();
				}
	//	processing Address1 - end
			//	processing City - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_City->afterSuccessfulSave();
				}
	//	processing City - end
			//	processing Postcode - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Postcode->afterSuccessfulSave();
				}
	//	processing Postcode - end
			//	processing StateID - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_StateID->afterSuccessfulSave();
				}
	//	processing StateID - end
			//	processing HomeTelephone - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_HomeTelephone->afterSuccessfulSave();
				}
	//	processing HomeTelephone - end
			//	processing MobileTelephone - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_MobileTelephone->afterSuccessfulSave();
				}
	//	processing MobileTelephone - end
			//	processing Nationality - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Nationality->afterSuccessfulSave();
				}
	//	processing Nationality - end
			//	processing DipID - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_DipID->afterSuccessfulSave();
				}
	//	processing DipID - end
			//	processing Status - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Status->afterSuccessfulSave();
				}
	//	processing Status - end
			//	processing Disability - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Disability->afterSuccessfulSave();
				}
	//	processing Disability - end
			//	processing MedicalCondition - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_MedicalCondition->afterSuccessfulSave();
				}
	//	processing MedicalCondition - end
			//	processing race - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_race->afterSuccessfulSave();
				}
	//	processing race - end
			//	processing Religion - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Religion->afterSuccessfulSave();
				}
	//	processing Religion - end
			//	processing f1_name - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f1_name->afterSuccessfulSave();
				}
	//	processing f1_name - end
			//	processing f1_tel - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f1_tel->afterSuccessfulSave();
				}
	//	processing f1_tel - end
			//	processing f1_relation - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f1_relation->afterSuccessfulSave();
				}
	//	processing f1_relation - end
			//	processing f2_name - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f2_name->afterSuccessfulSave();
				}
	//	processing f2_name - end
			//	processing f2_tel - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f2_tel->afterSuccessfulSave();
				}
	//	processing f2_tel - end
			//	processing f2_relation - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f2_relation->afterSuccessfulSave();
				}
	//	processing f2_relation - end
			//	processing blood - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_blood->afterSuccessfulSave();
				}
	//	processing blood - end
			//	processing qua_level - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_qua_level->afterSuccessfulSave();
				}
	//	processing qua_level - end
			//	processing q1_s - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_q1_s->afterSuccessfulSave();
				}
	//	processing q1_s - end
			//	processing q1_g - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_q1_g->afterSuccessfulSave();
				}
	//	processing q1_g - end
			//	processing q2_s - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_q2_s->afterSuccessfulSave();
				}
	//	processing q2_s - end
			//	processing q2_g - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_q2_g->afterSuccessfulSave();
				}
	//	processing q2_g - end
			//	processing q3_s - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_q3_s->afterSuccessfulSave();
				}
	//	processing q3_s - end
			//	processing q3_g - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_q3_g->afterSuccessfulSave();
				}
	//	processing q3_g - end
			//	processing q4_s - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_q4_s->afterSuccessfulSave();
				}
	//	processing q4_s - end
			//	processing q4_g - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_q4_g->afterSuccessfulSave();
				}
	//	processing q4_g - end
			//	processing g5_s - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g5_s->afterSuccessfulSave();
				}
	//	processing g5_s - end
			//	processing g5_g - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g5_g->afterSuccessfulSave();
				}
	//	processing g5_g - end
			//	processing g6_s - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g6_s->afterSuccessfulSave();
				}
	//	processing g6_s - end
			//	processing g6_g - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g6_g->afterSuccessfulSave();
				}
	//	processing g6_g - end
			//	processing g7_s - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g7_s->afterSuccessfulSave();
				}
	//	processing g7_s - end
			//	processing g7_g - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g7_g->afterSuccessfulSave();
				}
	//	processing g7_g - end
			//	processing g8_s - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g8_s->afterSuccessfulSave();
				}
	//	processing g8_s - end
			//	processing g8_g - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g8_g->afterSuccessfulSave();
				}
	//	processing g8_g - end
			//	processing g9_s - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g9_s->afterSuccessfulSave();
				}
	//	processing g9_s - end
			//	processing g9_g - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g9_g->afterSuccessfulSave();
				}
	//	processing g9_g - end
			//	processing oq_highest - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_oq_highest->afterSuccessfulSave();
				}
	//	processing oq_highest - end
			//	processing oq_major - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_oq_major->afterSuccessfulSave();
				}
	//	processing oq_major - end
			//	processing oq_u - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_oq_u->afterSuccessfulSave();
				}
	//	processing oq_u - end
			//	processing oq_cgpa - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_oq_cgpa->afterSuccessfulSave();
				}
	//	processing oq_cgpa - end
			//	processing at_ic - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_at_ic->afterSuccessfulSave();
				}
	//	processing at_ic - end
			//	processing at_dob - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_at_dob->afterSuccessfulSave();
				}
	//	processing at_dob - end
			//	processing at_spm - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_at_spm->afterSuccessfulSave();
				}
	//	processing at_spm - end
			//	processing at_slc - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_at_slc->afterSuccessfulSave();
				}
	//	processing at_slc - end
			//	processing at_coco - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_at_coco->afterSuccessfulSave();
				}
	//	processing at_coco - end
			//	processing at_fama - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_at_fama->afterSuccessfulSave();
				}
	//	processing at_fama - end
			//	processing at_famaic - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_at_famaic->afterSuccessfulSave();
				}
	//	processing at_famaic - end
			//	processing at_trans - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_at_trans->afterSuccessfulSave();
				}
	//	processing at_trans - end
			//	processing at_photo - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_at_photo->afterSuccessfulSave();
				}
	//	processing at_photo - end
			//	processing Passport - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Passport->afterSuccessfulSave();
				}
	//	processing Passport - end
			//	processing Country - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Country->afterSuccessfulSave();
				}
	//	processing Country - end
			//	processing g10_s - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g10_s->afterSuccessfulSave();
				}
	//	processing g10_s - end
			//	processing g10_g - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g10_g->afterSuccessfulSave();
				}
	//	processing g10_g - end
			//	processing g11_s - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g11_s->afterSuccessfulSave();
				}
	//	processing g11_s - end
			//	processing g11_g - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_g11_g->afterSuccessfulSave();
				}
	//	processing g11_g - end
			//	processing o_english - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_o_english->afterSuccessfulSave();
				}
	//	processing o_english - end
			//	processing qua_year - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_qua_year->afterSuccessfulSave();
				}
	//	processing qua_year - end
			//	processing f1_job - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f1_job->afterSuccessfulSave();
				}
	//	processing f1_job - end
			//	processing f2_job - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f2_job->afterSuccessfulSave();
				}
	//	processing f2_job - end
			//	processing finance - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_finance->afterSuccessfulSave();
				}
	//	processing finance - end
				
				//	after edit event
				if($pageObject->lockingObj && $inlineedit == EDIT_INLINE)
					$pageObject->lockingObj->UnlockRecord($strTableName,$savedKeys,"");
				if($auditObj || $eventObj->exists("AfterEdit"))
				{
					foreach($dataold as $idx=>$val)
					{
						if(!array_key_exists($idx,$evalues))
							$evalues[$idx] = $val;
					}
				}

				if($auditObj)
					$auditObj->LogEdit($strTableName,$evalues,$dataold,$keys);
				if($eventObj->exists("AfterEdit"))
					$eventObj->AfterEdit($evalues,KeyWhere($keys),$dataold,$keys,(bool)$inlineedit, $pageObject);
							
				$mesClass = "mes_ok";
			}
			elseif($inlineedit!=EDIT_INLINE)
				$mesClass = "mes_not";	
		}
		else
		{
			$message = $usermessage;
			$readevalues = true;
			$status = "DECLINED";
		}
	}
	if($readevalues)
		$keys = $savedKeys;
}
//else
{
	/////////////////////////
	//Locking recors
	/////////////////////////

	if($pageObject->lockingObj)
	{
		$enableCtrlsForEditing = $pageObject->lockingObj->LockRecord($strTableName,$keys);
		if(!$enableCtrlsForEditing)
		{
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,false,$id);
				else
					$lockmessage = $pageObject->lockingObj->LockUser;
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo my_json_encode($returnJSON);
				exit();
			}
			
			$system_attrs = "style='display:block;'";
			$system_message = $pageObject->lockingObj->LockUser;
			
			if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
			{
				$rb = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,true,$id);
				if($rb!="")
					$system_message = $rb;
			}
		}
	}
}

if($pageObject->lockingObj && $inlineedit!=EDIT_INLINE)
	$pageObject->body["begin"] .='<div class="runner-locking" '.$system_attrs.'>'.$system_message.'</div>';

if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if ($IsSaved && no_output_done() && $inlineedit == EDIT_SIMPLE)
{
	// saving message
	$_SESSION["message_edit"] = ($message ? $message : "");
	// key get query
	$keyGetQ = "";
		$keyGetQ.="editid1=".rawurldecode($keys["enrolID"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: enrol_interview_".$pageObject->getPageType().".php?".$keyGetQ);
	// turned on output buffering, so we need to stop script
	exit();
}
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if ($inlineedit == EDIT_SIMPLE && isset($_SESSION["message_edit"]))
{
	$message = $_SESSION["message_edit"];
	unset($_SESSION["message_edit"]);
}


$pageObject->setKeys($keys);
$pageObject->readEditValues = $readevalues;
if($readevalues)
	$pageObject->editValues = $evalues;

//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();
if(!$data)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		header("Location: enrol_interview_list.php?a=return");
		exit();
	}
	else
		$data = array();
}

if($globalEvents->exists("IsRecordEditable", $strTableName))
{
	if(!$globalEvents->IsRecordEditable($data, true, $strTableName) && $inlineedit != EDIT_INLINE)
	{
		return SecurityRedirect($inlineedit);
	}
}


//global variable use in BuildEditControl function
//	show readonly fields

if($readevalues)
{
	$data["Name"] = $evalues["Name"];
	$data["ICNO"] = $evalues["ICNO"];
	$data["DOB"] = $evalues["DOB"];
	$data["Email"] = $evalues["Email"];
	$data["Date_Apply"] = $evalues["Date_Apply"];
	$data["Gender"] = $evalues["Gender"];
	$data["married"] = $evalues["married"];
	$data["Address1"] = $evalues["Address1"];
	$data["City"] = $evalues["City"];
	$data["Postcode"] = $evalues["Postcode"];
	$data["StateID"] = $evalues["StateID"];
	$data["HomeTelephone"] = $evalues["HomeTelephone"];
	$data["MobileTelephone"] = $evalues["MobileTelephone"];
	$data["Nationality"] = $evalues["Nationality"];
	$data["DipID"] = $evalues["DipID"];
	$data["Status"] = $evalues["Status"];
	$data["Disability"] = $evalues["Disability"];
	$data["MedicalCondition"] = $evalues["MedicalCondition"];
	$data["race"] = $evalues["race"];
	$data["Religion"] = $evalues["Religion"];
	$data["f1_name"] = $evalues["f1_name"];
	$data["f1_tel"] = $evalues["f1_tel"];
	$data["f1_relation"] = $evalues["f1_relation"];
	$data["f2_name"] = $evalues["f2_name"];
	$data["f2_tel"] = $evalues["f2_tel"];
	$data["f2_relation"] = $evalues["f2_relation"];
	$data["blood"] = $evalues["blood"];
	$data["qua_level"] = $evalues["qua_level"];
	$data["q1_s"] = $evalues["q1_s"];
	$data["q1_g"] = $evalues["q1_g"];
	$data["q2_s"] = $evalues["q2_s"];
	$data["q2_g"] = $evalues["q2_g"];
	$data["q3_s"] = $evalues["q3_s"];
	$data["q3_g"] = $evalues["q3_g"];
	$data["q4_s"] = $evalues["q4_s"];
	$data["q4_g"] = $evalues["q4_g"];
	$data["g5_s"] = $evalues["g5_s"];
	$data["g5_g"] = $evalues["g5_g"];
	$data["g6_s"] = $evalues["g6_s"];
	$data["g6_g"] = $evalues["g6_g"];
	$data["g7_s"] = $evalues["g7_s"];
	$data["g7_g"] = $evalues["g7_g"];
	$data["g8_s"] = $evalues["g8_s"];
	$data["g8_g"] = $evalues["g8_g"];
	$data["g9_s"] = $evalues["g9_s"];
	$data["g9_g"] = $evalues["g9_g"];
	$data["oq_highest"] = $evalues["oq_highest"];
	$data["oq_major"] = $evalues["oq_major"];
	$data["oq_u"] = $evalues["oq_u"];
	$data["oq_cgpa"] = $evalues["oq_cgpa"];
	$data["at_ic"] = $evalues["at_ic"];
	$data["at_dob"] = $evalues["at_dob"];
	$data["at_spm"] = $evalues["at_spm"];
	$data["at_slc"] = $evalues["at_slc"];
	$data["at_coco"] = $evalues["at_coco"];
	$data["at_fama"] = $evalues["at_fama"];
	$data["at_famaic"] = $evalues["at_famaic"];
	$data["at_trans"] = $evalues["at_trans"];
	$data["at_photo"] = $evalues["at_photo"];
	$data["Passport"] = $evalues["Passport"];
	$data["Country"] = $evalues["Country"];
	$data["g10_s"] = $evalues["g10_s"];
	$data["g10_g"] = $evalues["g10_g"];
	$data["g11_s"] = $evalues["g11_s"];
	$data["g11_g"] = $evalues["g11_g"];
	$data["o_english"] = $evalues["o_english"];
	$data["qua_year"] = $evalues["qua_year"];
	$data["f1_job"] = $evalues["f1_job"];
	$data["f2_job"] = $evalues["f2_job"];
	$data["finance"] = $evalues["finance"];
}

/////////////////////////////////////////////////////////////
//	assign values to $xt class, prepare page for displaying
/////////////////////////////////////////////////////////////
//Basic includes js files
$includes = "";
//javascript code
	
if($inlineedit != EDIT_INLINE)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		$includes.= "<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		
		if (!isMobile())
			$includes.= "<div id=\"search_suggest".$id."\"></div>\r\n";
			
		$pageObject->body["begin"].= $includes;
	}	

	if(!$pageObject->isAppearOnTabs("Name"))
		$xt->assign("Name_fieldblock",true);
	else
		$xt->assign("Name_tabfieldblock",true);
	$xt->assign("Name_label",true);
	if(isEnableSection508())
		$xt->assign_section("Name_label","<label for=\"".GetInputElementId("Name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ICNO"))
		$xt->assign("ICNO_fieldblock",true);
	else
		$xt->assign("ICNO_tabfieldblock",true);
	$xt->assign("ICNO_label",true);
	if(isEnableSection508())
		$xt->assign_section("ICNO_label","<label for=\"".GetInputElementId("ICNO", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("DOB"))
		$xt->assign("DOB_fieldblock",true);
	else
		$xt->assign("DOB_tabfieldblock",true);
	$xt->assign("DOB_label",true);
	if(isEnableSection508())
		$xt->assign_section("DOB_label","<label for=\"".GetInputElementId("DOB", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Email"))
		$xt->assign("Email_fieldblock",true);
	else
		$xt->assign("Email_tabfieldblock",true);
	$xt->assign("Email_label",true);
	if(isEnableSection508())
		$xt->assign_section("Email_label","<label for=\"".GetInputElementId("Email", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Date_Apply"))
		$xt->assign("Date_Apply_fieldblock",true);
	else
		$xt->assign("Date_Apply_tabfieldblock",true);
	$xt->assign("Date_Apply_label",true);
	if(isEnableSection508())
		$xt->assign_section("Date_Apply_label","<label for=\"".GetInputElementId("Date_Apply", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Gender"))
		$xt->assign("Gender_fieldblock",true);
	else
		$xt->assign("Gender_tabfieldblock",true);
	$xt->assign("Gender_label",true);
	if(isEnableSection508())
		$xt->assign_section("Gender_label","<label for=\"".GetInputElementId("Gender", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("married"))
		$xt->assign("married_fieldblock",true);
	else
		$xt->assign("married_tabfieldblock",true);
	$xt->assign("married_label",true);
	if(isEnableSection508())
		$xt->assign_section("married_label","<label for=\"".GetInputElementId("married", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Address1"))
		$xt->assign("Address1_fieldblock",true);
	else
		$xt->assign("Address1_tabfieldblock",true);
	$xt->assign("Address1_label",true);
	if(isEnableSection508())
		$xt->assign_section("Address1_label","<label for=\"".GetInputElementId("Address1", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("City"))
		$xt->assign("City_fieldblock",true);
	else
		$xt->assign("City_tabfieldblock",true);
	$xt->assign("City_label",true);
	if(isEnableSection508())
		$xt->assign_section("City_label","<label for=\"".GetInputElementId("City", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Postcode"))
		$xt->assign("Postcode_fieldblock",true);
	else
		$xt->assign("Postcode_tabfieldblock",true);
	$xt->assign("Postcode_label",true);
	if(isEnableSection508())
		$xt->assign_section("Postcode_label","<label for=\"".GetInputElementId("Postcode", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("StateID"))
		$xt->assign("StateID_fieldblock",true);
	else
		$xt->assign("StateID_tabfieldblock",true);
	$xt->assign("StateID_label",true);
	if(isEnableSection508())
		$xt->assign_section("StateID_label","<label for=\"".GetInputElementId("StateID", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("HomeTelephone"))
		$xt->assign("HomeTelephone_fieldblock",true);
	else
		$xt->assign("HomeTelephone_tabfieldblock",true);
	$xt->assign("HomeTelephone_label",true);
	if(isEnableSection508())
		$xt->assign_section("HomeTelephone_label","<label for=\"".GetInputElementId("HomeTelephone", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("MobileTelephone"))
		$xt->assign("MobileTelephone_fieldblock",true);
	else
		$xt->assign("MobileTelephone_tabfieldblock",true);
	$xt->assign("MobileTelephone_label",true);
	if(isEnableSection508())
		$xt->assign_section("MobileTelephone_label","<label for=\"".GetInputElementId("MobileTelephone", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Nationality"))
		$xt->assign("Nationality_fieldblock",true);
	else
		$xt->assign("Nationality_tabfieldblock",true);
	$xt->assign("Nationality_label",true);
	if(isEnableSection508())
		$xt->assign_section("Nationality_label","<label for=\"".GetInputElementId("Nationality", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("DipID"))
		$xt->assign("DipID_fieldblock",true);
	else
		$xt->assign("DipID_tabfieldblock",true);
	$xt->assign("DipID_label",true);
	if(isEnableSection508())
		$xt->assign_section("DipID_label","<label for=\"".GetInputElementId("DipID", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Status"))
		$xt->assign("Status_fieldblock",true);
	else
		$xt->assign("Status_tabfieldblock",true);
	$xt->assign("Status_label",true);
	if(isEnableSection508())
		$xt->assign_section("Status_label","<label for=\"".GetInputElementId("Status", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Disability"))
		$xt->assign("Disability_fieldblock",true);
	else
		$xt->assign("Disability_tabfieldblock",true);
	$xt->assign("Disability_label",true);
	if(isEnableSection508())
		$xt->assign_section("Disability_label","<label for=\"".GetInputElementId("Disability", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("MedicalCondition"))
		$xt->assign("MedicalCondition_fieldblock",true);
	else
		$xt->assign("MedicalCondition_tabfieldblock",true);
	$xt->assign("MedicalCondition_label",true);
	if(isEnableSection508())
		$xt->assign_section("MedicalCondition_label","<label for=\"".GetInputElementId("MedicalCondition", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("race"))
		$xt->assign("race_fieldblock",true);
	else
		$xt->assign("race_tabfieldblock",true);
	$xt->assign("race_label",true);
	if(isEnableSection508())
		$xt->assign_section("race_label","<label for=\"".GetInputElementId("race", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Religion"))
		$xt->assign("Religion_fieldblock",true);
	else
		$xt->assign("Religion_tabfieldblock",true);
	$xt->assign("Religion_label",true);
	if(isEnableSection508())
		$xt->assign_section("Religion_label","<label for=\"".GetInputElementId("Religion", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f1_name"))
		$xt->assign("f1_name_fieldblock",true);
	else
		$xt->assign("f1_name_tabfieldblock",true);
	$xt->assign("f1_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_name_label","<label for=\"".GetInputElementId("f1_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f1_tel"))
		$xt->assign("f1_tel_fieldblock",true);
	else
		$xt->assign("f1_tel_tabfieldblock",true);
	$xt->assign("f1_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_tel_label","<label for=\"".GetInputElementId("f1_tel", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f1_relation"))
		$xt->assign("f1_relation_fieldblock",true);
	else
		$xt->assign("f1_relation_tabfieldblock",true);
	$xt->assign("f1_relation_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_relation_label","<label for=\"".GetInputElementId("f1_relation", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f2_name"))
		$xt->assign("f2_name_fieldblock",true);
	else
		$xt->assign("f2_name_tabfieldblock",true);
	$xt->assign("f2_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_name_label","<label for=\"".GetInputElementId("f2_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f2_tel"))
		$xt->assign("f2_tel_fieldblock",true);
	else
		$xt->assign("f2_tel_tabfieldblock",true);
	$xt->assign("f2_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_tel_label","<label for=\"".GetInputElementId("f2_tel", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f2_relation"))
		$xt->assign("f2_relation_fieldblock",true);
	else
		$xt->assign("f2_relation_tabfieldblock",true);
	$xt->assign("f2_relation_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_relation_label","<label for=\"".GetInputElementId("f2_relation", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("blood"))
		$xt->assign("blood_fieldblock",true);
	else
		$xt->assign("blood_tabfieldblock",true);
	$xt->assign("blood_label",true);
	if(isEnableSection508())
		$xt->assign_section("blood_label","<label for=\"".GetInputElementId("blood", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("qua_level"))
		$xt->assign("qua_level_fieldblock",true);
	else
		$xt->assign("qua_level_tabfieldblock",true);
	$xt->assign("qua_level_label",true);
	if(isEnableSection508())
		$xt->assign_section("qua_level_label","<label for=\"".GetInputElementId("qua_level", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("q1_s"))
		$xt->assign("q1_s_fieldblock",true);
	else
		$xt->assign("q1_s_tabfieldblock",true);
	$xt->assign("q1_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("q1_s_label","<label for=\"".GetInputElementId("q1_s", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("q1_g"))
		$xt->assign("q1_g_fieldblock",true);
	else
		$xt->assign("q1_g_tabfieldblock",true);
	$xt->assign("q1_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("q1_g_label","<label for=\"".GetInputElementId("q1_g", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("q2_s"))
		$xt->assign("q2_s_fieldblock",true);
	else
		$xt->assign("q2_s_tabfieldblock",true);
	$xt->assign("q2_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("q2_s_label","<label for=\"".GetInputElementId("q2_s", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("q2_g"))
		$xt->assign("q2_g_fieldblock",true);
	else
		$xt->assign("q2_g_tabfieldblock",true);
	$xt->assign("q2_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("q2_g_label","<label for=\"".GetInputElementId("q2_g", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("q3_s"))
		$xt->assign("q3_s_fieldblock",true);
	else
		$xt->assign("q3_s_tabfieldblock",true);
	$xt->assign("q3_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("q3_s_label","<label for=\"".GetInputElementId("q3_s", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("q3_g"))
		$xt->assign("q3_g_fieldblock",true);
	else
		$xt->assign("q3_g_tabfieldblock",true);
	$xt->assign("q3_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("q3_g_label","<label for=\"".GetInputElementId("q3_g", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("q4_s"))
		$xt->assign("q4_s_fieldblock",true);
	else
		$xt->assign("q4_s_tabfieldblock",true);
	$xt->assign("q4_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("q4_s_label","<label for=\"".GetInputElementId("q4_s", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("q4_g"))
		$xt->assign("q4_g_fieldblock",true);
	else
		$xt->assign("q4_g_tabfieldblock",true);
	$xt->assign("q4_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("q4_g_label","<label for=\"".GetInputElementId("q4_g", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g5_s"))
		$xt->assign("g5_s_fieldblock",true);
	else
		$xt->assign("g5_s_tabfieldblock",true);
	$xt->assign("g5_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g5_s_label","<label for=\"".GetInputElementId("g5_s", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g5_g"))
		$xt->assign("g5_g_fieldblock",true);
	else
		$xt->assign("g5_g_tabfieldblock",true);
	$xt->assign("g5_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g5_g_label","<label for=\"".GetInputElementId("g5_g", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g6_s"))
		$xt->assign("g6_s_fieldblock",true);
	else
		$xt->assign("g6_s_tabfieldblock",true);
	$xt->assign("g6_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g6_s_label","<label for=\"".GetInputElementId("g6_s", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g6_g"))
		$xt->assign("g6_g_fieldblock",true);
	else
		$xt->assign("g6_g_tabfieldblock",true);
	$xt->assign("g6_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g6_g_label","<label for=\"".GetInputElementId("g6_g", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g7_s"))
		$xt->assign("g7_s_fieldblock",true);
	else
		$xt->assign("g7_s_tabfieldblock",true);
	$xt->assign("g7_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g7_s_label","<label for=\"".GetInputElementId("g7_s", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g7_g"))
		$xt->assign("g7_g_fieldblock",true);
	else
		$xt->assign("g7_g_tabfieldblock",true);
	$xt->assign("g7_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g7_g_label","<label for=\"".GetInputElementId("g7_g", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g8_s"))
		$xt->assign("g8_s_fieldblock",true);
	else
		$xt->assign("g8_s_tabfieldblock",true);
	$xt->assign("g8_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g8_s_label","<label for=\"".GetInputElementId("g8_s", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g8_g"))
		$xt->assign("g8_g_fieldblock",true);
	else
		$xt->assign("g8_g_tabfieldblock",true);
	$xt->assign("g8_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g8_g_label","<label for=\"".GetInputElementId("g8_g", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g9_s"))
		$xt->assign("g9_s_fieldblock",true);
	else
		$xt->assign("g9_s_tabfieldblock",true);
	$xt->assign("g9_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g9_s_label","<label for=\"".GetInputElementId("g9_s", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g9_g"))
		$xt->assign("g9_g_fieldblock",true);
	else
		$xt->assign("g9_g_tabfieldblock",true);
	$xt->assign("g9_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g9_g_label","<label for=\"".GetInputElementId("g9_g", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("oq_highest"))
		$xt->assign("oq_highest_fieldblock",true);
	else
		$xt->assign("oq_highest_tabfieldblock",true);
	$xt->assign("oq_highest_label",true);
	if(isEnableSection508())
		$xt->assign_section("oq_highest_label","<label for=\"".GetInputElementId("oq_highest", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("oq_major"))
		$xt->assign("oq_major_fieldblock",true);
	else
		$xt->assign("oq_major_tabfieldblock",true);
	$xt->assign("oq_major_label",true);
	if(isEnableSection508())
		$xt->assign_section("oq_major_label","<label for=\"".GetInputElementId("oq_major", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("oq_u"))
		$xt->assign("oq_u_fieldblock",true);
	else
		$xt->assign("oq_u_tabfieldblock",true);
	$xt->assign("oq_u_label",true);
	if(isEnableSection508())
		$xt->assign_section("oq_u_label","<label for=\"".GetInputElementId("oq_u", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("oq_cgpa"))
		$xt->assign("oq_cgpa_fieldblock",true);
	else
		$xt->assign("oq_cgpa_tabfieldblock",true);
	$xt->assign("oq_cgpa_label",true);
	if(isEnableSection508())
		$xt->assign_section("oq_cgpa_label","<label for=\"".GetInputElementId("oq_cgpa", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("at_ic"))
		$xt->assign("at_ic_fieldblock",true);
	else
		$xt->assign("at_ic_tabfieldblock",true);
	$xt->assign("at_ic_label",true);
	if(isEnableSection508())
		$xt->assign_section("at_ic_label","<label for=\"".GetInputElementId("at_ic", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("at_dob"))
		$xt->assign("at_dob_fieldblock",true);
	else
		$xt->assign("at_dob_tabfieldblock",true);
	$xt->assign("at_dob_label",true);
	if(isEnableSection508())
		$xt->assign_section("at_dob_label","<label for=\"".GetInputElementId("at_dob", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("at_spm"))
		$xt->assign("at_spm_fieldblock",true);
	else
		$xt->assign("at_spm_tabfieldblock",true);
	$xt->assign("at_spm_label",true);
	if(isEnableSection508())
		$xt->assign_section("at_spm_label","<label for=\"".GetInputElementId("at_spm", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("at_slc"))
		$xt->assign("at_slc_fieldblock",true);
	else
		$xt->assign("at_slc_tabfieldblock",true);
	$xt->assign("at_slc_label",true);
	if(isEnableSection508())
		$xt->assign_section("at_slc_label","<label for=\"".GetInputElementId("at_slc", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("at_coco"))
		$xt->assign("at_coco_fieldblock",true);
	else
		$xt->assign("at_coco_tabfieldblock",true);
	$xt->assign("at_coco_label",true);
	if(isEnableSection508())
		$xt->assign_section("at_coco_label","<label for=\"".GetInputElementId("at_coco", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("at_fama"))
		$xt->assign("at_fama_fieldblock",true);
	else
		$xt->assign("at_fama_tabfieldblock",true);
	$xt->assign("at_fama_label",true);
	if(isEnableSection508())
		$xt->assign_section("at_fama_label","<label for=\"".GetInputElementId("at_fama", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("at_famaic"))
		$xt->assign("at_famaic_fieldblock",true);
	else
		$xt->assign("at_famaic_tabfieldblock",true);
	$xt->assign("at_famaic_label",true);
	if(isEnableSection508())
		$xt->assign_section("at_famaic_label","<label for=\"".GetInputElementId("at_famaic", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("at_trans"))
		$xt->assign("at_trans_fieldblock",true);
	else
		$xt->assign("at_trans_tabfieldblock",true);
	$xt->assign("at_trans_label",true);
	if(isEnableSection508())
		$xt->assign_section("at_trans_label","<label for=\"".GetInputElementId("at_trans", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("at_photo"))
		$xt->assign("at_photo_fieldblock",true);
	else
		$xt->assign("at_photo_tabfieldblock",true);
	$xt->assign("at_photo_label",true);
	if(isEnableSection508())
		$xt->assign_section("at_photo_label","<label for=\"".GetInputElementId("at_photo", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Passport"))
		$xt->assign("Passport_fieldblock",true);
	else
		$xt->assign("Passport_tabfieldblock",true);
	$xt->assign("Passport_label",true);
	if(isEnableSection508())
		$xt->assign_section("Passport_label","<label for=\"".GetInputElementId("Passport", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Country"))
		$xt->assign("Country_fieldblock",true);
	else
		$xt->assign("Country_tabfieldblock",true);
	$xt->assign("Country_label",true);
	if(isEnableSection508())
		$xt->assign_section("Country_label","<label for=\"".GetInputElementId("Country", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g10_s"))
		$xt->assign("g10_s_fieldblock",true);
	else
		$xt->assign("g10_s_tabfieldblock",true);
	$xt->assign("g10_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g10_s_label","<label for=\"".GetInputElementId("g10_s", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g10_g"))
		$xt->assign("g10_g_fieldblock",true);
	else
		$xt->assign("g10_g_tabfieldblock",true);
	$xt->assign("g10_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g10_g_label","<label for=\"".GetInputElementId("g10_g", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g11_s"))
		$xt->assign("g11_s_fieldblock",true);
	else
		$xt->assign("g11_s_tabfieldblock",true);
	$xt->assign("g11_s_label",true);
	if(isEnableSection508())
		$xt->assign_section("g11_s_label","<label for=\"".GetInputElementId("g11_s", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("g11_g"))
		$xt->assign("g11_g_fieldblock",true);
	else
		$xt->assign("g11_g_tabfieldblock",true);
	$xt->assign("g11_g_label",true);
	if(isEnableSection508())
		$xt->assign_section("g11_g_label","<label for=\"".GetInputElementId("g11_g", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("o_english"))
		$xt->assign("o_english_fieldblock",true);
	else
		$xt->assign("o_english_tabfieldblock",true);
	$xt->assign("o_english_label",true);
	if(isEnableSection508())
		$xt->assign_section("o_english_label","<label for=\"".GetInputElementId("o_english", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("qua_year"))
		$xt->assign("qua_year_fieldblock",true);
	else
		$xt->assign("qua_year_tabfieldblock",true);
	$xt->assign("qua_year_label",true);
	if(isEnableSection508())
		$xt->assign_section("qua_year_label","<label for=\"".GetInputElementId("qua_year", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f1_job"))
		$xt->assign("f1_job_fieldblock",true);
	else
		$xt->assign("f1_job_tabfieldblock",true);
	$xt->assign("f1_job_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_job_label","<label for=\"".GetInputElementId("f1_job", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f2_job"))
		$xt->assign("f2_job_fieldblock",true);
	else
		$xt->assign("f2_job_tabfieldblock",true);
	$xt->assign("f2_job_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_job_label","<label for=\"".GetInputElementId("f2_job", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("finance"))
		$xt->assign("finance_fieldblock",true);
	else
		$xt->assign("finance_tabfieldblock",true);
	$xt->assign("finance_label",true);
	if(isEnableSection508())
		$xt->assign_section("finance_label","<label for=\"".GetInputElementId("finance", $id, PAGE_EDIT)."\">","</label>");
		

	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("enrolID", $data)));
	//$xt->assign('editForm',true);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if(!@$_SESSION[$strTableName."_noNextPrev"] && $inlineedit == EDIT_SIMPLE)
	{
		$next = array();
		$prev = array();
		$pageObject->getNextPrevRecordKeys($data,"Edit",$next,$prev);
	}
	$nextlink = $prevlink = "";
	if(count($next))
	{
		$xt->assign("next_button",true);
				$nextlink.= "editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
				$prevlink.= "editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("prev_button",false);
	$xt->assign("resetbutton_attrs",'id="resetButton'.$id.'"');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//End Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if($inlineedit == EDIT_SIMPLE)
	{
		$xt->assign("back_button",true);
		$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	}
	// onmouseover event, for changing focus. Needed to proper submit form
	//$onmouseover = "this.focus();";
	//$onmouseover = 'onmouseover="'.$onmouseover.'"';
	
	$xt->assign("save_button",true);
	if(!$enableCtrlsForEditing)
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\" type=\"disabled\" ");
	else
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\"");
		
	$xt->assign("reset_button",true);

}

$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}
/////////////////////////////////////////////////////////////
//process readonly and auto-update fields
/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////
//	validation stuff
$regex = '';
$regexmessage = '';
$regextype = '';
$control = array();

foreach($pageObject->editFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if (!$detailKeys || !in_array($fName, $detailKeys))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"]="xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_EDIT;
		$control[$gfName]["params"]["field"] = $fName;
		if(!IsNumberType($pageObject->pSet->getFieldType($fName)) || is_null(@$data[$fName]))
			$control[$gfName]["params"]["value"] = @$data[$fName];
		else
		{
			$control[$gfName]["params"]["value"] = str_replace(".",$locale_info["LOCALE_SDECIMAL"],@$data[$fName]);
		}
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation	
		$additionalCtrlParams = array();
		$additionalCtrlParams["disabled"] = !$enableCtrlsForEditing;
		$control[$gfName]["params"]["additionalCtrlParams"] = $additionalCtrlParams;
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if($inlineedit == EDIT_INLINE)
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="inline_edit";
		$controls["controls"]['mode'] = "inline_edit";
	}
	else{
			if (!$detailKeys || !in_array($fName, $detailKeys))
				$control[$gfName]["params"]["mode"] = "edit";
			$controls["controls"]['mode'] = "edit";
		}
																																																																							
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$data[$fName];
		
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $pageObject->editFields))
		$vals = array($fName => @$data[$fName],$strCategoryControl => @$data[$strCategoryControl]);
	else
		$vals = array($fName => @$data[$fName]);
		
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, $data[$fName]);
	
	if($pageObject->pSet->getViewFormat($fName) == FORMAT_MAP)	
		$pageObject->googleMapCfg['isUseGoogleMap'] = true;
		
	if($detailKeys && in_array($fName, $detailKeys) && array_key_exists($fName, $data))
	{
		$value = $pageObject->showDBValue($fName, $data);
		
		$xt->assign($gfName."_editcontrol",$value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
if($pageObject->lockingObj)
{
	$pageObject->jsSettings['tableSettings'][$strTableName]["sKeys"] = $skeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["enableCtrls"] = $enableCtrlsForEditing;
	$pageObject->jsSettings['tableSettings'][$strTableName]["confirmTime"] = $pageObject->lockingObj->ConfirmTime;
}

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && $inlineedit!=EDIT_INLINE && !isMobile())
{
	if(count($dpParams['ids']))
	{
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		$xt->assign("detail_tables",true);	
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
		$options["masterPageType"] = PAGE_EDIT;
		$options["mainMasterPageType"] = PAGE_EDIT;
		$options['masterTable'] = "enrol_interview";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "enrol_interview";
			continue;
		}
		
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
		$masterKeys = array();
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk){
			$options['masterKeysReq'][$mkr] = $data[$mk];
			$masterKeys['masterKey'.$mkr] = $data[$mk];
			$mkr++;
		}
		
		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->isDispGrid())
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			
			foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
				$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
			}
			
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dControlsMap[$strTableName]['masterKeys'] = $masterKeys;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
			
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
			
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
		$flyId = $listPageObject->recId+1;
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "enrol_interview";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->flyId = $flyId;
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineedit == EDIT_SIMPLE)
{
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineedit == EDIT_POPUP){
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);
}

$xt->assign("style_block",true);

$pageObject->xt->assign("legend", true);

$viewlink = "";
$viewkeys = array();
	$viewkeys["editid1"] = postvalue("editid1");
foreach($viewkeys as $key => $val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='enrol_interview_view.php?".$viewlink."'\"");
if(CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && $inlineedit == EDIT_SIMPLE)
	$xt->assign("view_button",true);
else
	$xt->assign("view_button",false);

/////////////////////////////////////////////////////////////
//display the page
/////////////////////////////////////////////////////////////
if($eventObj->exists("BeforeShowEdit"))
	$eventObj->BeforeShowEdit($xt,$templatefile,$data, $pageObject);

if($inlineedit != EDIT_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}
	
if($inlineedit == EDIT_POPUP || $inlineedit == EDIT_INLINE)
{
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($data, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
}
if($inlineedit == EDIT_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $flyId + 1;
	echo (my_json_encode($returnJSON)); 
}
elseif($inlineedit == EDIT_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($pageObject->editFields as $fName)
	{
		if($detailKeys && in_array($fName, $detailKeys))
			continue;
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");
	}
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);
	
function SecurityRedirect($inlineedit)
{
	if($inlineedit == EDIT_INLINE)
	{
		echo my_json_encode(array("success" => false, "message" => "The record is not editable"));
		return;
	}
	
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: menu.php?message=expired");	
}
?>
