<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/student_withdraw_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');

global $globalEvents;

CheckPermissionsEvent($strTableName, 'A');

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

$layout = new TLayout("add","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"addheader_mobile","block"=>"","substyle"=>2);


$layout->containers["fields"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"addfields_mobile1","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"addbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";
$layout->blocks["top"][] = "fields";
$layout->containers["flylist"] = array();

$layout->containers["flylist"][] = array("name"=>"flypanel_mobile","block"=>"","substyle"=>2);


$layout->skins["flylist"] = "empty";
$layout->blocks["top"][] = "flylist";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["student_withdraw_add"] = $layout;

$layout = new TLayout("tab","BoldOrange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_withdraw_add_Personal1"] = $layout;

$layout = new TLayout("tab","BoldOrange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_withdraw_add_Family_Info1"] = $layout;

$layout = new TLayout("tab","BoldOrange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_withdraw_add_Next_Of_Kin1"] = $layout;

$layout = new TLayout("tab","BoldOrange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_withdraw_add_Campus_Info1"] = $layout;

$layout = new TLayout("tab","BoldOrange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_withdraw_add_Medical1"] = $layout;



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
	$templatefile = "student_withdraw_inline_add.htm";
else
	$templatefile = "student_withdraw_add.htm";

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
		header('Location: student_withdraw_add.php');
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
//	processing photo - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_photo = $pageObject->getControl("photo", $id);
		$control_photo->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing photo - end
//	processing Name - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Name = $pageObject->getControl("Name", $id);
		$control_Name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Name - end
//	processing DOB - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_DOB = $pageObject->getControl("DOB", $id);
		$control_DOB->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing DOB - end
//	processing ICNO - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_ICNO = $pageObject->getControl("ICNO", $id);
		$control_ICNO->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ICNO - end
//	processing married - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_married = $pageObject->getControl("married", $id);
		$control_married->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing married - end
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
//	processing Nationality - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Nationality = $pageObject->getControl("Nationality", $id);
		$control_Nationality->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Nationality - end
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
//	processing Email - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Email = $pageObject->getControl("Email", $id);
		$control_Email->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Email - end
//	processing HomeTelephone - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_HomeTelephone = $pageObject->getControl("HomeTelephone", $id);
		$control_HomeTelephone->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing HomeTelephone - end
//	processing MobileTelephone - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_MobileTelephone = $pageObject->getControl("MobileTelephone", $id);
		$control_MobileTelephone->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing MobileTelephone - end
//	processing f_name - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f_name = $pageObject->getControl("f_name", $id);
		$control_f_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f_name - end
//	processing f_tel - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f_tel = $pageObject->getControl("f_tel", $id);
		$control_f_tel->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f_tel - end
//	processing f_ic - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f_ic = $pageObject->getControl("f_ic", $id);
		$control_f_ic->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f_ic - end
//	processing f_address - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f_address = $pageObject->getControl("f_address", $id);
		$control_f_address->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f_address - end
//	processing m_name - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_m_name = $pageObject->getControl("m_name", $id);
		$control_m_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing m_name - end
//	processing m_tel - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_m_tel = $pageObject->getControl("m_tel", $id);
		$control_m_tel->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing m_tel - end
//	processing m_ic - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_m_ic = $pageObject->getControl("m_ic", $id);
		$control_m_ic->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing m_ic - end
//	processing m_address - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_m_address = $pageObject->getControl("m_address", $id);
		$control_m_address->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing m_address - end
//	processing f1_name - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f1_name = $pageObject->getControl("f1_name", $id);
		$control_f1_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f1_name - end
//	processing f2_name - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f2_name = $pageObject->getControl("f2_name", $id);
		$control_f2_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f2_name - end
//	processing f1_relation - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f1_relation = $pageObject->getControl("f1_relation", $id);
		$control_f1_relation->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f1_relation - end
//	processing f2_relation - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f2_relation = $pageObject->getControl("f2_relation", $id);
		$control_f2_relation->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f2_relation - end
//	processing f1_tel - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f1_tel = $pageObject->getControl("f1_tel", $id);
		$control_f1_tel->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f1_tel - end
//	processing f2_tel - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_f2_tel = $pageObject->getControl("f2_tel", $id);
		$control_f2_tel->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing f2_tel - end
//	processing DipID - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_DipID = $pageObject->getControl("DipID", $id);
		$control_DipID->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing DipID - end
//	processing BranchID - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_BranchID = $pageObject->getControl("BranchID", $id);
		$control_BranchID->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing BranchID - end
//	processing Intake_Category - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Intake_Category = $pageObject->getControl("Intake_Category", $id);
		$control_Intake_Category->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Intake_Category - end
//	processing BatchID - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_BatchID = $pageObject->getControl("BatchID", $id);
		$control_BatchID->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing BatchID - end
//	processing Class - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Class = $pageObject->getControl("Class", $id);
		$control_Class->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Class - end
//	processing DateJoin - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_DateJoin = $pageObject->getControl("DateJoin", $id);
		$control_DateJoin->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing DateJoin - end
//	processing Type - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Type = $pageObject->getControl("Type", $id);
		$control_Type->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Type - end
//	processing Status - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Status = $pageObject->getControl("Status", $id);
		$control_Status->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Status - end
//	processing Sponsor - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Sponsor = $pageObject->getControl("Sponsor", $id);
		$control_Sponsor->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Sponsor - end
//	processing Disability - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_Disability = $pageObject->getControl("Disability", $id);
		$control_Disability->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Disability - end
//	processing MedicalCondition - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_MedicalCondition = $pageObject->getControl("MedicalCondition", $id);
		$control_MedicalCondition->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing MedicalCondition - end
//	processing blood - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_blood = $pageObject->getControl("blood", $id);
		$control_blood->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing blood - end




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
//	processing photo - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_photo->afterSuccessfulSave();
			}
//	processing photo - end
//	processing Name - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Name->afterSuccessfulSave();
			}
//	processing Name - end
//	processing DOB - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_DOB->afterSuccessfulSave();
			}
//	processing DOB - end
//	processing ICNO - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_ICNO->afterSuccessfulSave();
			}
//	processing ICNO - end
//	processing married - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_married->afterSuccessfulSave();
			}
//	processing married - end
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
//	processing Nationality - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Nationality->afterSuccessfulSave();
			}
//	processing Nationality - end
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
//	processing Email - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Email->afterSuccessfulSave();
			}
//	processing Email - end
//	processing HomeTelephone - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_HomeTelephone->afterSuccessfulSave();
			}
//	processing HomeTelephone - end
//	processing MobileTelephone - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_MobileTelephone->afterSuccessfulSave();
			}
//	processing MobileTelephone - end
//	processing f_name - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f_name->afterSuccessfulSave();
			}
//	processing f_name - end
//	processing f_tel - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f_tel->afterSuccessfulSave();
			}
//	processing f_tel - end
//	processing f_ic - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f_ic->afterSuccessfulSave();
			}
//	processing f_ic - end
//	processing f_address - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f_address->afterSuccessfulSave();
			}
//	processing f_address - end
//	processing m_name - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_m_name->afterSuccessfulSave();
			}
//	processing m_name - end
//	processing m_tel - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_m_tel->afterSuccessfulSave();
			}
//	processing m_tel - end
//	processing m_ic - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_m_ic->afterSuccessfulSave();
			}
//	processing m_ic - end
//	processing m_address - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_m_address->afterSuccessfulSave();
			}
//	processing m_address - end
//	processing f1_name - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f1_name->afterSuccessfulSave();
			}
//	processing f1_name - end
//	processing f2_name - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f2_name->afterSuccessfulSave();
			}
//	processing f2_name - end
//	processing f1_relation - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f1_relation->afterSuccessfulSave();
			}
//	processing f1_relation - end
//	processing f2_relation - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f2_relation->afterSuccessfulSave();
			}
//	processing f2_relation - end
//	processing f1_tel - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f1_tel->afterSuccessfulSave();
			}
//	processing f1_tel - end
//	processing f2_tel - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_f2_tel->afterSuccessfulSave();
			}
//	processing f2_tel - end
//	processing DipID - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_DipID->afterSuccessfulSave();
			}
//	processing DipID - end
//	processing BranchID - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_BranchID->afterSuccessfulSave();
			}
//	processing BranchID - end
//	processing Intake_Category - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Intake_Category->afterSuccessfulSave();
			}
//	processing Intake_Category - end
//	processing BatchID - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_BatchID->afterSuccessfulSave();
			}
//	processing BatchID - end
//	processing Class - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Class->afterSuccessfulSave();
			}
//	processing Class - end
//	processing DateJoin - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_DateJoin->afterSuccessfulSave();
			}
//	processing DateJoin - end
//	processing Type - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Type->afterSuccessfulSave();
			}
//	processing Type - end
//	processing Status - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Status->afterSuccessfulSave();
			}
//	processing Status - end
//	processing Sponsor - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Sponsor->afterSuccessfulSave();
			}
//	processing Sponsor - end
//	processing Disability - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_Disability->afterSuccessfulSave();
			}
//	processing Disability - end
//	processing MedicalCondition - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_MedicalCondition->afterSuccessfulSave();
			}
//	processing MedicalCondition - end
//	processing blood - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_blood->afterSuccessfulSave();
			}
//	processing blood - end

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
						$message .='&nbsp;<a href=\'student_withdraw_edit.php?'.$keylink.'\'>'."Edit".'</a>&nbsp;';
					if($pageObject->pSet->hasViewPage() && $permis['search'])
						$message .='&nbsp;<a href=\'student_withdraw_view.php?'.$keylink.'\'>'."View".'</a>&nbsp;';
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
	header("Location: student_withdraw_".$pageObject->getPageType().".php");
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
		$copykeys["StudentID"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["StudentID"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["StudentID"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
	$defvalues["married"] = "Single";
	$defvalues["race"] = "Malay";
	$defvalues["Religion"] = "Islam";
	$defvalues["Nationality"] = "MY";
	$defvalues["Country"] = "MY";
	$defvalues["f_address"] = "Same as student's address";
	$defvalues["m_address"] = "Same as above";
	$defvalues["BranchID"] = "1";
	$defvalues["Type"] = "Fulltime";
	$defvalues["Status"] = "Active";
	$defvalues["Disability"] = "No";
}



if($readavalues)
{
	$defvalues["Name"]=@$avalues["Name"];
	$defvalues["ICNO"]=@$avalues["ICNO"];
	$defvalues["DOB"]=@$avalues["DOB"];
	$defvalues["Email"]=@$avalues["Email"];
	$defvalues["Type"]=@$avalues["Type"];
	$defvalues["BranchID"]=@$avalues["BranchID"];
	$defvalues["DateJoin"]=@$avalues["DateJoin"];
	$defvalues["Gender"]=@$avalues["Gender"];
	$defvalues["Address1"]=@$avalues["Address1"];
	$defvalues["City"]=@$avalues["City"];
	$defvalues["Postcode"]=@$avalues["Postcode"];
	$defvalues["StateID"]=@$avalues["StateID"];
	$defvalues["HomeTelephone"]=@$avalues["HomeTelephone"];
	$defvalues["MobileTelephone"]=@$avalues["MobileTelephone"];
	$defvalues["Nationality"]=@$avalues["Nationality"];
	$defvalues["BatchID"]=@$avalues["BatchID"];
	$defvalues["Sponsor"]=@$avalues["Sponsor"];
	$defvalues["DipID"]=@$avalues["DipID"];
	$defvalues["Status"]=@$avalues["Status"];
	$defvalues["Disability"]=@$avalues["Disability"];
	$defvalues["MedicalCondition"]=@$avalues["MedicalCondition"];
	$defvalues["race"]=@$avalues["race"];
	$defvalues["Religion"]=@$avalues["Religion"];
	$defvalues["Class"]=@$avalues["Class"];
	$defvalues["married"]=@$avalues["married"];
	$defvalues["Intake_Category"]=@$avalues["Intake_Category"];
	$defvalues["f1_name"]=@$avalues["f1_name"];
	$defvalues["f1_tel"]=@$avalues["f1_tel"];
	$defvalues["f1_relation"]=@$avalues["f1_relation"];
	$defvalues["f2_name"]=@$avalues["f2_name"];
	$defvalues["f2_tel"]=@$avalues["f2_tel"];
	$defvalues["f2_relation"]=@$avalues["f2_relation"];
	$defvalues["blood"]=@$avalues["blood"];
	$defvalues["f_name"]=@$avalues["f_name"];
	$defvalues["f_tel"]=@$avalues["f_tel"];
	$defvalues["f_ic"]=@$avalues["f_ic"];
	$defvalues["f_address"]=@$avalues["f_address"];
	$defvalues["m_name"]=@$avalues["m_name"];
	$defvalues["m_tel"]=@$avalues["m_tel"];
	$defvalues["m_ic"]=@$avalues["m_ic"];
	$defvalues["m_address"]=@$avalues["m_address"];
	$defvalues["Country"]=@$avalues["Country"];
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
	
	if(!$pageObject->isAppearOnTabs("DOB"))
		$xt->assign("DOB_fieldblock",true);
	else
		$xt->assign("DOB_tabfieldblock",true);
	$xt->assign("DOB_label",true);
	if(isEnableSection508())
		$xt->assign_section("DOB_label","<label for=\"".GetInputElementId("DOB", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Email"))
		$xt->assign("Email_fieldblock",true);
	else
		$xt->assign("Email_tabfieldblock",true);
	$xt->assign("Email_label",true);
	if(isEnableSection508())
		$xt->assign_section("Email_label","<label for=\"".GetInputElementId("Email", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Type"))
		$xt->assign("Type_fieldblock",true);
	else
		$xt->assign("Type_tabfieldblock",true);
	$xt->assign("Type_label",true);
	if(isEnableSection508())
		$xt->assign_section("Type_label","<label for=\"".GetInputElementId("Type", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("BranchID"))
		$xt->assign("BranchID_fieldblock",true);
	else
		$xt->assign("BranchID_tabfieldblock",true);
	$xt->assign("BranchID_label",true);
	if(isEnableSection508())
		$xt->assign_section("BranchID_label","<label for=\"".GetInputElementId("BranchID", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("DateJoin"))
		$xt->assign("DateJoin_fieldblock",true);
	else
		$xt->assign("DateJoin_tabfieldblock",true);
	$xt->assign("DateJoin_label",true);
	if(isEnableSection508())
		$xt->assign_section("DateJoin_label","<label for=\"".GetInputElementId("DateJoin", $id, PAGE_ADD)."\">","</label>");
	
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
	
	if(!$pageObject->isAppearOnTabs("BatchID"))
		$xt->assign("BatchID_fieldblock",true);
	else
		$xt->assign("BatchID_tabfieldblock",true);
	$xt->assign("BatchID_label",true);
	if(isEnableSection508())
		$xt->assign_section("BatchID_label","<label for=\"".GetInputElementId("BatchID", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Sponsor"))
		$xt->assign("Sponsor_fieldblock",true);
	else
		$xt->assign("Sponsor_tabfieldblock",true);
	$xt->assign("Sponsor_label",true);
	if(isEnableSection508())
		$xt->assign_section("Sponsor_label","<label for=\"".GetInputElementId("Sponsor", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("DipID"))
		$xt->assign("DipID_fieldblock",true);
	else
		$xt->assign("DipID_tabfieldblock",true);
	$xt->assign("DipID_label",true);
	if(isEnableSection508())
		$xt->assign_section("DipID_label","<label for=\"".GetInputElementId("DipID", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Status"))
		$xt->assign("Status_fieldblock",true);
	else
		$xt->assign("Status_tabfieldblock",true);
	$xt->assign("Status_label",true);
	if(isEnableSection508())
		$xt->assign_section("Status_label","<label for=\"".GetInputElementId("Status", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Disability"))
		$xt->assign("Disability_fieldblock",true);
	else
		$xt->assign("Disability_tabfieldblock",true);
	$xt->assign("Disability_label",true);
	if(isEnableSection508())
		$xt->assign_section("Disability_label","<label for=\"".GetInputElementId("Disability", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("MedicalCondition"))
		$xt->assign("MedicalCondition_fieldblock",true);
	else
		$xt->assign("MedicalCondition_tabfieldblock",true);
	$xt->assign("MedicalCondition_label",true);
	if(isEnableSection508())
		$xt->assign_section("MedicalCondition_label","<label for=\"".GetInputElementId("MedicalCondition", $id, PAGE_ADD)."\">","</label>");
	
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
	
	if(!$pageObject->isAppearOnTabs("Class"))
		$xt->assign("Class_fieldblock",true);
	else
		$xt->assign("Class_tabfieldblock",true);
	$xt->assign("Class_label",true);
	if(isEnableSection508())
		$xt->assign_section("Class_label","<label for=\"".GetInputElementId("Class", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("photo"))
		$xt->assign("photo_fieldblock",true);
	else
		$xt->assign("photo_tabfieldblock",true);
	$xt->assign("photo_label",true);
	if(isEnableSection508())
		$xt->assign_section("photo_label","<label for=\"".GetInputElementId("photo", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("married"))
		$xt->assign("married_fieldblock",true);
	else
		$xt->assign("married_tabfieldblock",true);
	$xt->assign("married_label",true);
	if(isEnableSection508())
		$xt->assign_section("married_label","<label for=\"".GetInputElementId("married", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Intake_Category"))
		$xt->assign("Intake_Category_fieldblock",true);
	else
		$xt->assign("Intake_Category_tabfieldblock",true);
	$xt->assign("Intake_Category_label",true);
	if(isEnableSection508())
		$xt->assign_section("Intake_Category_label","<label for=\"".GetInputElementId("Intake_Category", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f1_name"))
		$xt->assign("f1_name_fieldblock",true);
	else
		$xt->assign("f1_name_tabfieldblock",true);
	$xt->assign("f1_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_name_label","<label for=\"".GetInputElementId("f1_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f1_tel"))
		$xt->assign("f1_tel_fieldblock",true);
	else
		$xt->assign("f1_tel_tabfieldblock",true);
	$xt->assign("f1_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_tel_label","<label for=\"".GetInputElementId("f1_tel", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f1_relation"))
		$xt->assign("f1_relation_fieldblock",true);
	else
		$xt->assign("f1_relation_tabfieldblock",true);
	$xt->assign("f1_relation_label",true);
	if(isEnableSection508())
		$xt->assign_section("f1_relation_label","<label for=\"".GetInputElementId("f1_relation", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f2_name"))
		$xt->assign("f2_name_fieldblock",true);
	else
		$xt->assign("f2_name_tabfieldblock",true);
	$xt->assign("f2_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_name_label","<label for=\"".GetInputElementId("f2_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f2_tel"))
		$xt->assign("f2_tel_fieldblock",true);
	else
		$xt->assign("f2_tel_tabfieldblock",true);
	$xt->assign("f2_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_tel_label","<label for=\"".GetInputElementId("f2_tel", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f2_relation"))
		$xt->assign("f2_relation_fieldblock",true);
	else
		$xt->assign("f2_relation_tabfieldblock",true);
	$xt->assign("f2_relation_label",true);
	if(isEnableSection508())
		$xt->assign_section("f2_relation_label","<label for=\"".GetInputElementId("f2_relation", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("blood"))
		$xt->assign("blood_fieldblock",true);
	else
		$xt->assign("blood_tabfieldblock",true);
	$xt->assign("blood_label",true);
	if(isEnableSection508())
		$xt->assign_section("blood_label","<label for=\"".GetInputElementId("blood", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f_name"))
		$xt->assign("f_name_fieldblock",true);
	else
		$xt->assign("f_name_tabfieldblock",true);
	$xt->assign("f_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("f_name_label","<label for=\"".GetInputElementId("f_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f_tel"))
		$xt->assign("f_tel_fieldblock",true);
	else
		$xt->assign("f_tel_tabfieldblock",true);
	$xt->assign("f_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("f_tel_label","<label for=\"".GetInputElementId("f_tel", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f_ic"))
		$xt->assign("f_ic_fieldblock",true);
	else
		$xt->assign("f_ic_tabfieldblock",true);
	$xt->assign("f_ic_label",true);
	if(isEnableSection508())
		$xt->assign_section("f_ic_label","<label for=\"".GetInputElementId("f_ic", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("f_address"))
		$xt->assign("f_address_fieldblock",true);
	else
		$xt->assign("f_address_tabfieldblock",true);
	$xt->assign("f_address_label",true);
	if(isEnableSection508())
		$xt->assign_section("f_address_label","<label for=\"".GetInputElementId("f_address", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("m_name"))
		$xt->assign("m_name_fieldblock",true);
	else
		$xt->assign("m_name_tabfieldblock",true);
	$xt->assign("m_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("m_name_label","<label for=\"".GetInputElementId("m_name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("m_tel"))
		$xt->assign("m_tel_fieldblock",true);
	else
		$xt->assign("m_tel_tabfieldblock",true);
	$xt->assign("m_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("m_tel_label","<label for=\"".GetInputElementId("m_tel", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("m_ic"))
		$xt->assign("m_ic_fieldblock",true);
	else
		$xt->assign("m_ic_tabfieldblock",true);
	$xt->assign("m_ic_label",true);
	if(isEnableSection508())
		$xt->assign_section("m_ic_label","<label for=\"".GetInputElementId("m_ic", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("m_address"))
		$xt->assign("m_address_fieldblock",true);
	else
		$xt->assign("m_address_tabfieldblock",true);
	$xt->assign("m_address_label",true);
	if(isEnableSection508())
		$xt->assign_section("m_address_label","<label for=\"".GetInputElementId("m_address", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Country"))
		$xt->assign("Country_fieldblock",true);
	else
		$xt->assign("Country_tabfieldblock",true);
	$xt->assign("Country_label",true);
	if(isEnableSection508())
		$xt->assign_section("Country_label","<label for=\"".GetInputElementId("Country", $id, PAGE_ADD)."\">","</label>");
	
	
	
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["StudentID"]));
	
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
//	DOB
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("DOB", $data, $keylink);
		$showValues["DOB"] = $value;
		$showFields[] = "DOB";
	}	
//	MatricNo
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("MatricNo", $data, $keylink);
		$showValues["MatricNo"] = $value;
		$showFields[] = "MatricNo";
	}	
//	Email
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Email", $data, $keylink);
		$showValues["Email"] = $value;
		$showFields[] = "Email";
	}	
//	Type
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Type", $data, $keylink);
		$showValues["Type"] = $value;
		$showFields[] = "Type";
	}	
//	BranchID
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("BranchID", $data, $keylink);
		$showValues["BranchID"] = $value;
		$showFields[] = "BranchID";
	}	
//	DateJoin
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("DateJoin", $data, $keylink);
		$showValues["DateJoin"] = $value;
		$showFields[] = "DateJoin";
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
//	BatchID
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("BatchID", $data, $keylink);
		$showValues["BatchID"] = $value;
		$showFields[] = "BatchID";
	}	
//	Sponsor
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Sponsor", $data, $keylink);
		$showValues["Sponsor"] = $value;
		$showFields[] = "Sponsor";
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
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Status", $data, $keylink);
		$showValues["Status"] = $value;
		$showFields[] = "Status";
	}	
//	Disability
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Disability", $data, $keylink);
		$showValues["Disability"] = $value;
		$showFields[] = "Disability";
	}	
//	MedicalCondition
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("MedicalCondition", $data, $keylink);
		$showValues["MedicalCondition"] = $value;
		$showFields[] = "MedicalCondition";
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
//	Class
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Class", $data, $keylink);
		$showValues["Class"] = $value;
		$showFields[] = "Class";
	}	
//	photo
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("photo", $data, $keylink);
		$showValues["photo"] = $value;
		$showFields[] = "photo";
	}	
//	married
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("married", $data, $keylink);
		$showValues["married"] = $value;
		$showFields[] = "married";
	}	
//	Intake_Category
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Intake_Category", $data, $keylink);
		$showValues["Intake_Category"] = $value;
		$showFields[] = "Intake_Category";
	}	
//	f1_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f1_name", $data, $keylink);
		$showValues["f1_name"] = $value;
		$showFields[] = "f1_name";
	}	
//	f1_tel
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f1_tel", $data, $keylink);
		$showValues["f1_tel"] = $value;
		$showFields[] = "f1_tel";
	}	
//	f1_relation
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f1_relation", $data, $keylink);
		$showValues["f1_relation"] = $value;
		$showFields[] = "f1_relation";
	}	
//	f2_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f2_name", $data, $keylink);
		$showValues["f2_name"] = $value;
		$showFields[] = "f2_name";
	}	
//	f2_tel
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f2_tel", $data, $keylink);
		$showValues["f2_tel"] = $value;
		$showFields[] = "f2_tel";
	}	
//	f2_relation
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f2_relation", $data, $keylink);
		$showValues["f2_relation"] = $value;
		$showFields[] = "f2_relation";
	}	
//	blood
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("blood", $data, $keylink);
		$showValues["blood"] = $value;
		$showFields[] = "blood";
	}	
//	Option
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Option", $data, $keylink);
		$showValues["Option"] = $value;
		$showFields[] = "Option";
	}	
//	f_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f_name", $data, $keylink);
		$showValues["f_name"] = $value;
		$showFields[] = "f_name";
	}	
//	f_tel
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f_tel", $data, $keylink);
		$showValues["f_tel"] = $value;
		$showFields[] = "f_tel";
	}	
//	f_ic
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f_ic", $data, $keylink);
		$showValues["f_ic"] = $value;
		$showFields[] = "f_ic";
	}	
//	f_address
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("f_address", $data, $keylink);
		$showValues["f_address"] = $value;
		$showFields[] = "f_address";
	}	
//	m_name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("m_name", $data, $keylink);
		$showValues["m_name"] = $value;
		$showFields[] = "m_name";
	}	
//	m_tel
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("m_tel", $data, $keylink);
		$showValues["m_tel"] = $value;
		$showFields[] = "m_tel";
	}	
//	m_ic
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("m_ic", $data, $keylink);
		$showValues["m_ic"] = $value;
		$showFields[] = "m_ic";
	}	
//	m_address
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("m_address", $data, $keylink);
		$showValues["m_address"] = $value;
		$showFields[] = "m_address";
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
		$showRawValues["StudentID"] = substr($data["StudentID"],0,100);
		$showRawValues["Name"] = substr($data["Name"],0,100);
		$showRawValues["ICNO"] = substr($data["ICNO"],0,100);
		$showRawValues["DOB"] = substr($data["DOB"],0,100);
		$showRawValues["MatricNo"] = substr($data["MatricNo"],0,100);
		$showRawValues["Email"] = substr($data["Email"],0,100);
		$showRawValues["Access"] = substr($data["Access"],0,100);
		$showRawValues["Type"] = substr($data["Type"],0,100);
		$showRawValues["BranchID"] = substr($data["BranchID"],0,100);
		$showRawValues["DateJoin"] = substr($data["DateJoin"],0,100);
		$showRawValues["Gender"] = substr($data["Gender"],0,100);
		$showRawValues["Address1"] = substr($data["Address1"],0,100);
		$showRawValues["City"] = substr($data["City"],0,100);
		$showRawValues["Postcode"] = substr($data["Postcode"],0,100);
		$showRawValues["StateID"] = substr($data["StateID"],0,100);
		$showRawValues["HomeTelephone"] = substr($data["HomeTelephone"],0,100);
		$showRawValues["MobileTelephone"] = substr($data["MobileTelephone"],0,100);
		$showRawValues["Nationality"] = substr($data["Nationality"],0,100);
		$showRawValues["BatchID"] = substr($data["BatchID"],0,100);
		$showRawValues["Intake"] = substr($data["Intake"],0,100);
		$showRawValues["Sponsor"] = substr($data["Sponsor"],0,100);
		$showRawValues["DipID"] = substr($data["DipID"],0,100);
		$showRawValues["Status"] = substr($data["Status"],0,100);
		$showRawValues["Disability"] = substr($data["Disability"],0,100);
		$showRawValues["MedicalCondition"] = substr($data["MedicalCondition"],0,100);
		$showRawValues["race"] = substr($data["race"],0,100);
		$showRawValues["Religion"] = substr($data["Religion"],0,100);
		$showRawValues["Class"] = substr($data["Class"],0,100);
		$showRawValues["photo"] = substr($data["photo"],0,100);
		$showRawValues["married"] = substr($data["married"],0,100);
		$showRawValues["Intake_Category"] = substr($data["Intake_Category"],0,100);
		$showRawValues["f1_name"] = substr($data["f1_name"],0,100);
		$showRawValues["f1_tel"] = substr($data["f1_tel"],0,100);
		$showRawValues["f1_relation"] = substr($data["f1_relation"],0,100);
		$showRawValues["f2_name"] = substr($data["f2_name"],0,100);
		$showRawValues["f2_tel"] = substr($data["f2_tel"],0,100);
		$showRawValues["f2_relation"] = substr($data["f2_relation"],0,100);
		$showRawValues["blood"] = substr($data["blood"],0,100);
		$showRawValues["Name1"] = substr($data["Name1"],0,100);
		$showRawValues["hostel_in"] = substr($data["hostel_in"],0,100);
		$showRawValues["Option"] = substr($data["Option"],0,100);
		$showRawValues["f_name"] = substr($data["f_name"],0,100);
		$showRawValues["f_tel"] = substr($data["f_tel"],0,100);
		$showRawValues["f_ic"] = substr($data["f_ic"],0,100);
		$showRawValues["f_address"] = substr($data["f_address"],0,100);
		$showRawValues["m_name"] = substr($data["m_name"],0,100);
		$showRawValues["m_tel"] = substr($data["m_tel"],0,100);
		$showRawValues["m_ic"] = substr($data["m_ic"],0,100);
		$showRawValues["m_address"] = substr($data["m_address"],0,100);
		$showRawValues["Country"] = substr($data["Country"],0,100);
	
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
		$options['masterTable'] = "student_withdraw";
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
	$strTableName = "student_withdraw";
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
