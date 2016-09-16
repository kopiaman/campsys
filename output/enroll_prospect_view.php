<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/enroll_prospect_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("view2","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["enroll_prospect_view"] = $layout;


$layout = new TLayout("viewtab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["enroll_prospect_view_Personal_Particular1"] = $layout;

$layout = new TLayout("viewtab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["enroll_prospect_view_Contact_Information1"] = $layout;

$layout = new TLayout("viewtab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["enroll_prospect_view_Qualification_Information1"] = $layout;



//$cipherer = new RunnerCipherer($strTableName);
	
$xt = new Xtempl();

$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
$params["all"] = $all;

//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if($params['useTabsOnView'])
	$params['arrViewTabs'] = $gSettings->getViewTabs();
$pageObject = new ViewPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: enroll_prospect_list.php?a=return");
	exit();
}

$out = "";
$first = true;
$fieldsArr = array();
$arr = array();
$arr['fName'] = "DipID";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DipID");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "finance";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("finance");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Date_Apply";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Date_Apply");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Status";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Status");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Name";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Name");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ICNO";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ICNO");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Passport";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Passport");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Nationality";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Nationality");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Gender";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Gender");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "race";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("race");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Religion";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Religion");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Address1";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Address1");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Postcode";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Postcode");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "City";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("City");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "StateID";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("StateID");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Country";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Country");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "MobileTelephone";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("MobileTelephone");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "HomeTelephone";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("HomeTelephone");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Email";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Email");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "qua_level";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("qua_level");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "qua_year";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("qua_year");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "q1_s";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("q1_s");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "q1_g";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("q1_g");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "q2_s";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("q2_s");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "q2_g";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("q2_g");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "q3_s";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("q3_s");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "q3_g";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("q3_g");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "q4_s";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("q4_s");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "q4_g";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("q4_g");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g5_s";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g5_s");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g5_g";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g5_g");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g6_s";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g6_s");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g6_g";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g6_g");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g10_s";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g10_s");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g10_g";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g10_g");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g11_s";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g11_s");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g11_g";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g11_g");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "o_english";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("o_english");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "oq_highest";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("oq_highest");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "oq_major";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("oq_major");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "oq_u";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("oq_u");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "oq_cgpa";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("oq_cgpa");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g7_s";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g7_s");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g7_g";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g7_g");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g8_s";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g8_s");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g8_g";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g8_g");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g9_s";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g9_s");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "g9_g";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("g9_g");
$fieldsArr[] = $arr;

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("enrolID", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["enrolID"]));

////////////////////////////////////////////
//DipID - 
	
	$value = $pageObject->showDBValue("DipID", $data, $keylink);
	if($mainTableOwnerID=="DipID")
		$ownerIdValue=$value;
	$xt->assign("DipID_value",$value);
	if(!$pageObject->isAppearOnTabs("DipID"))
		$xt->assign("DipID_fieldblock",true);
	else
		$xt->assign("DipID_tabfieldblock",true);
////////////////////////////////////////////
//finance - 
	
	$value = $pageObject->showDBValue("finance", $data, $keylink);
	if($mainTableOwnerID=="finance")
		$ownerIdValue=$value;
	$xt->assign("finance_value",$value);
	if(!$pageObject->isAppearOnTabs("finance"))
		$xt->assign("finance_fieldblock",true);
	else
		$xt->assign("finance_tabfieldblock",true);
////////////////////////////////////////////
//Date_Apply - Short Date
	
	$value = $pageObject->showDBValue("Date_Apply", $data, $keylink);
	if($mainTableOwnerID=="Date_Apply")
		$ownerIdValue=$value;
	$xt->assign("Date_Apply_value",$value);
	if(!$pageObject->isAppearOnTabs("Date_Apply"))
		$xt->assign("Date_Apply_fieldblock",true);
	else
		$xt->assign("Date_Apply_tabfieldblock",true);
////////////////////////////////////////////
//Status - Custom
	
	$value = $pageObject->showDBValue("Status", $data, $keylink);
	if($mainTableOwnerID=="Status")
		$ownerIdValue=$value;
	$xt->assign("Status_value",$value);
	if(!$pageObject->isAppearOnTabs("Status"))
		$xt->assign("Status_fieldblock",true);
	else
		$xt->assign("Status_tabfieldblock",true);
////////////////////////////////////////////
//Name - 
	
	$value = $pageObject->showDBValue("Name", $data, $keylink);
	if($mainTableOwnerID=="Name")
		$ownerIdValue=$value;
	$xt->assign("Name_value",$value);
	if(!$pageObject->isAppearOnTabs("Name"))
		$xt->assign("Name_fieldblock",true);
	else
		$xt->assign("Name_tabfieldblock",true);
////////////////////////////////////////////
//ICNO - 
	
	$value = $pageObject->showDBValue("ICNO", $data, $keylink);
	if($mainTableOwnerID=="ICNO")
		$ownerIdValue=$value;
	$xt->assign("ICNO_value",$value);
	if(!$pageObject->isAppearOnTabs("ICNO"))
		$xt->assign("ICNO_fieldblock",true);
	else
		$xt->assign("ICNO_tabfieldblock",true);
////////////////////////////////////////////
//Passport - 
	
	$value = $pageObject->showDBValue("Passport", $data, $keylink);
	if($mainTableOwnerID=="Passport")
		$ownerIdValue=$value;
	$xt->assign("Passport_value",$value);
	if(!$pageObject->isAppearOnTabs("Passport"))
		$xt->assign("Passport_fieldblock",true);
	else
		$xt->assign("Passport_tabfieldblock",true);
////////////////////////////////////////////
//Nationality - 
	
	$value = $pageObject->showDBValue("Nationality", $data, $keylink);
	if($mainTableOwnerID=="Nationality")
		$ownerIdValue=$value;
	$xt->assign("Nationality_value",$value);
	if(!$pageObject->isAppearOnTabs("Nationality"))
		$xt->assign("Nationality_fieldblock",true);
	else
		$xt->assign("Nationality_tabfieldblock",true);
////////////////////////////////////////////
//Gender - 
	
	$value = $pageObject->showDBValue("Gender", $data, $keylink);
	if($mainTableOwnerID=="Gender")
		$ownerIdValue=$value;
	$xt->assign("Gender_value",$value);
	if(!$pageObject->isAppearOnTabs("Gender"))
		$xt->assign("Gender_fieldblock",true);
	else
		$xt->assign("Gender_tabfieldblock",true);
////////////////////////////////////////////
//race - 
	
	$value = $pageObject->showDBValue("race", $data, $keylink);
	if($mainTableOwnerID=="race")
		$ownerIdValue=$value;
	$xt->assign("race_value",$value);
	if(!$pageObject->isAppearOnTabs("race"))
		$xt->assign("race_fieldblock",true);
	else
		$xt->assign("race_tabfieldblock",true);
////////////////////////////////////////////
//Religion - 
	
	$value = $pageObject->showDBValue("Religion", $data, $keylink);
	if($mainTableOwnerID=="Religion")
		$ownerIdValue=$value;
	$xt->assign("Religion_value",$value);
	if(!$pageObject->isAppearOnTabs("Religion"))
		$xt->assign("Religion_fieldblock",true);
	else
		$xt->assign("Religion_tabfieldblock",true);
////////////////////////////////////////////
//Address1 - 
	
	$value = $pageObject->showDBValue("Address1", $data, $keylink);
	if($mainTableOwnerID=="Address1")
		$ownerIdValue=$value;
	$xt->assign("Address1_value",$value);
	if(!$pageObject->isAppearOnTabs("Address1"))
		$xt->assign("Address1_fieldblock",true);
	else
		$xt->assign("Address1_tabfieldblock",true);
////////////////////////////////////////////
//Postcode - 
	
	$value = $pageObject->showDBValue("Postcode", $data, $keylink);
	if($mainTableOwnerID=="Postcode")
		$ownerIdValue=$value;
	$xt->assign("Postcode_value",$value);
	if(!$pageObject->isAppearOnTabs("Postcode"))
		$xt->assign("Postcode_fieldblock",true);
	else
		$xt->assign("Postcode_tabfieldblock",true);
////////////////////////////////////////////
//City - 
	
	$value = $pageObject->showDBValue("City", $data, $keylink);
	if($mainTableOwnerID=="City")
		$ownerIdValue=$value;
	$xt->assign("City_value",$value);
	if(!$pageObject->isAppearOnTabs("City"))
		$xt->assign("City_fieldblock",true);
	else
		$xt->assign("City_tabfieldblock",true);
////////////////////////////////////////////
//StateID - 
	
	$value = $pageObject->showDBValue("StateID", $data, $keylink);
	if($mainTableOwnerID=="StateID")
		$ownerIdValue=$value;
	$xt->assign("StateID_value",$value);
	if(!$pageObject->isAppearOnTabs("StateID"))
		$xt->assign("StateID_fieldblock",true);
	else
		$xt->assign("StateID_tabfieldblock",true);
////////////////////////////////////////////
//Country - 
	
	$value = $pageObject->showDBValue("Country", $data, $keylink);
	if($mainTableOwnerID=="Country")
		$ownerIdValue=$value;
	$xt->assign("Country_value",$value);
	if(!$pageObject->isAppearOnTabs("Country"))
		$xt->assign("Country_fieldblock",true);
	else
		$xt->assign("Country_tabfieldblock",true);
////////////////////////////////////////////
//MobileTelephone - 
	
	$value = $pageObject->showDBValue("MobileTelephone", $data, $keylink);
	if($mainTableOwnerID=="MobileTelephone")
		$ownerIdValue=$value;
	$xt->assign("MobileTelephone_value",$value);
	if(!$pageObject->isAppearOnTabs("MobileTelephone"))
		$xt->assign("MobileTelephone_fieldblock",true);
	else
		$xt->assign("MobileTelephone_tabfieldblock",true);
////////////////////////////////////////////
//HomeTelephone - 
	
	$value = $pageObject->showDBValue("HomeTelephone", $data, $keylink);
	if($mainTableOwnerID=="HomeTelephone")
		$ownerIdValue=$value;
	$xt->assign("HomeTelephone_value",$value);
	if(!$pageObject->isAppearOnTabs("HomeTelephone"))
		$xt->assign("HomeTelephone_fieldblock",true);
	else
		$xt->assign("HomeTelephone_tabfieldblock",true);
////////////////////////////////////////////
//Email - 
	
	$value = $pageObject->showDBValue("Email", $data, $keylink);
	if($mainTableOwnerID=="Email")
		$ownerIdValue=$value;
	$xt->assign("Email_value",$value);
	if(!$pageObject->isAppearOnTabs("Email"))
		$xt->assign("Email_fieldblock",true);
	else
		$xt->assign("Email_tabfieldblock",true);
////////////////////////////////////////////
//qua_level - 
	
	$value = $pageObject->showDBValue("qua_level", $data, $keylink);
	if($mainTableOwnerID=="qua_level")
		$ownerIdValue=$value;
	$xt->assign("qua_level_value",$value);
	if(!$pageObject->isAppearOnTabs("qua_level"))
		$xt->assign("qua_level_fieldblock",true);
	else
		$xt->assign("qua_level_tabfieldblock",true);
////////////////////////////////////////////
//qua_year - 
	
	$value = $pageObject->showDBValue("qua_year", $data, $keylink);
	if($mainTableOwnerID=="qua_year")
		$ownerIdValue=$value;
	$xt->assign("qua_year_value",$value);
	if(!$pageObject->isAppearOnTabs("qua_year"))
		$xt->assign("qua_year_fieldblock",true);
	else
		$xt->assign("qua_year_tabfieldblock",true);
////////////////////////////////////////////
//q1_s - 
	
	$value = $pageObject->showDBValue("q1_s", $data, $keylink);
	if($mainTableOwnerID=="q1_s")
		$ownerIdValue=$value;
	$xt->assign("q1_s_value",$value);
	if(!$pageObject->isAppearOnTabs("q1_s"))
		$xt->assign("q1_s_fieldblock",true);
	else
		$xt->assign("q1_s_tabfieldblock",true);
////////////////////////////////////////////
//q1_g - 
	
	$value = $pageObject->showDBValue("q1_g", $data, $keylink);
	if($mainTableOwnerID=="q1_g")
		$ownerIdValue=$value;
	$xt->assign("q1_g_value",$value);
	if(!$pageObject->isAppearOnTabs("q1_g"))
		$xt->assign("q1_g_fieldblock",true);
	else
		$xt->assign("q1_g_tabfieldblock",true);
////////////////////////////////////////////
//q2_s - 
	
	$value = $pageObject->showDBValue("q2_s", $data, $keylink);
	if($mainTableOwnerID=="q2_s")
		$ownerIdValue=$value;
	$xt->assign("q2_s_value",$value);
	if(!$pageObject->isAppearOnTabs("q2_s"))
		$xt->assign("q2_s_fieldblock",true);
	else
		$xt->assign("q2_s_tabfieldblock",true);
////////////////////////////////////////////
//q2_g - 
	
	$value = $pageObject->showDBValue("q2_g", $data, $keylink);
	if($mainTableOwnerID=="q2_g")
		$ownerIdValue=$value;
	$xt->assign("q2_g_value",$value);
	if(!$pageObject->isAppearOnTabs("q2_g"))
		$xt->assign("q2_g_fieldblock",true);
	else
		$xt->assign("q2_g_tabfieldblock",true);
////////////////////////////////////////////
//q3_s - 
	
	$value = $pageObject->showDBValue("q3_s", $data, $keylink);
	if($mainTableOwnerID=="q3_s")
		$ownerIdValue=$value;
	$xt->assign("q3_s_value",$value);
	if(!$pageObject->isAppearOnTabs("q3_s"))
		$xt->assign("q3_s_fieldblock",true);
	else
		$xt->assign("q3_s_tabfieldblock",true);
////////////////////////////////////////////
//q3_g - 
	
	$value = $pageObject->showDBValue("q3_g", $data, $keylink);
	if($mainTableOwnerID=="q3_g")
		$ownerIdValue=$value;
	$xt->assign("q3_g_value",$value);
	if(!$pageObject->isAppearOnTabs("q3_g"))
		$xt->assign("q3_g_fieldblock",true);
	else
		$xt->assign("q3_g_tabfieldblock",true);
////////////////////////////////////////////
//q4_s - 
	
	$value = $pageObject->showDBValue("q4_s", $data, $keylink);
	if($mainTableOwnerID=="q4_s")
		$ownerIdValue=$value;
	$xt->assign("q4_s_value",$value);
	if(!$pageObject->isAppearOnTabs("q4_s"))
		$xt->assign("q4_s_fieldblock",true);
	else
		$xt->assign("q4_s_tabfieldblock",true);
////////////////////////////////////////////
//q4_g - 
	
	$value = $pageObject->showDBValue("q4_g", $data, $keylink);
	if($mainTableOwnerID=="q4_g")
		$ownerIdValue=$value;
	$xt->assign("q4_g_value",$value);
	if(!$pageObject->isAppearOnTabs("q4_g"))
		$xt->assign("q4_g_fieldblock",true);
	else
		$xt->assign("q4_g_tabfieldblock",true);
////////////////////////////////////////////
//g5_s - 
	
	$value = $pageObject->showDBValue("g5_s", $data, $keylink);
	if($mainTableOwnerID=="g5_s")
		$ownerIdValue=$value;
	$xt->assign("g5_s_value",$value);
	if(!$pageObject->isAppearOnTabs("g5_s"))
		$xt->assign("g5_s_fieldblock",true);
	else
		$xt->assign("g5_s_tabfieldblock",true);
////////////////////////////////////////////
//g5_g - 
	
	$value = $pageObject->showDBValue("g5_g", $data, $keylink);
	if($mainTableOwnerID=="g5_g")
		$ownerIdValue=$value;
	$xt->assign("g5_g_value",$value);
	if(!$pageObject->isAppearOnTabs("g5_g"))
		$xt->assign("g5_g_fieldblock",true);
	else
		$xt->assign("g5_g_tabfieldblock",true);
////////////////////////////////////////////
//g6_s - 
	
	$value = $pageObject->showDBValue("g6_s", $data, $keylink);
	if($mainTableOwnerID=="g6_s")
		$ownerIdValue=$value;
	$xt->assign("g6_s_value",$value);
	if(!$pageObject->isAppearOnTabs("g6_s"))
		$xt->assign("g6_s_fieldblock",true);
	else
		$xt->assign("g6_s_tabfieldblock",true);
////////////////////////////////////////////
//g6_g - 
	
	$value = $pageObject->showDBValue("g6_g", $data, $keylink);
	if($mainTableOwnerID=="g6_g")
		$ownerIdValue=$value;
	$xt->assign("g6_g_value",$value);
	if(!$pageObject->isAppearOnTabs("g6_g"))
		$xt->assign("g6_g_fieldblock",true);
	else
		$xt->assign("g6_g_tabfieldblock",true);
////////////////////////////////////////////
//g10_s - 
	
	$value = $pageObject->showDBValue("g10_s", $data, $keylink);
	if($mainTableOwnerID=="g10_s")
		$ownerIdValue=$value;
	$xt->assign("g10_s_value",$value);
	if(!$pageObject->isAppearOnTabs("g10_s"))
		$xt->assign("g10_s_fieldblock",true);
	else
		$xt->assign("g10_s_tabfieldblock",true);
////////////////////////////////////////////
//g10_g - 
	
	$value = $pageObject->showDBValue("g10_g", $data, $keylink);
	if($mainTableOwnerID=="g10_g")
		$ownerIdValue=$value;
	$xt->assign("g10_g_value",$value);
	if(!$pageObject->isAppearOnTabs("g10_g"))
		$xt->assign("g10_g_fieldblock",true);
	else
		$xt->assign("g10_g_tabfieldblock",true);
////////////////////////////////////////////
//g11_s - 
	
	$value = $pageObject->showDBValue("g11_s", $data, $keylink);
	if($mainTableOwnerID=="g11_s")
		$ownerIdValue=$value;
	$xt->assign("g11_s_value",$value);
	if(!$pageObject->isAppearOnTabs("g11_s"))
		$xt->assign("g11_s_fieldblock",true);
	else
		$xt->assign("g11_s_tabfieldblock",true);
////////////////////////////////////////////
//g11_g - 
	
	$value = $pageObject->showDBValue("g11_g", $data, $keylink);
	if($mainTableOwnerID=="g11_g")
		$ownerIdValue=$value;
	$xt->assign("g11_g_value",$value);
	if(!$pageObject->isAppearOnTabs("g11_g"))
		$xt->assign("g11_g_fieldblock",true);
	else
		$xt->assign("g11_g_tabfieldblock",true);
////////////////////////////////////////////
//o_english - 
	
	$value = $pageObject->showDBValue("o_english", $data, $keylink);
	if($mainTableOwnerID=="o_english")
		$ownerIdValue=$value;
	$xt->assign("o_english_value",$value);
	if(!$pageObject->isAppearOnTabs("o_english"))
		$xt->assign("o_english_fieldblock",true);
	else
		$xt->assign("o_english_tabfieldblock",true);
////////////////////////////////////////////
//oq_highest - 
	
	$value = $pageObject->showDBValue("oq_highest", $data, $keylink);
	if($mainTableOwnerID=="oq_highest")
		$ownerIdValue=$value;
	$xt->assign("oq_highest_value",$value);
	if(!$pageObject->isAppearOnTabs("oq_highest"))
		$xt->assign("oq_highest_fieldblock",true);
	else
		$xt->assign("oq_highest_tabfieldblock",true);
////////////////////////////////////////////
//oq_major - 
	
	$value = $pageObject->showDBValue("oq_major", $data, $keylink);
	if($mainTableOwnerID=="oq_major")
		$ownerIdValue=$value;
	$xt->assign("oq_major_value",$value);
	if(!$pageObject->isAppearOnTabs("oq_major"))
		$xt->assign("oq_major_fieldblock",true);
	else
		$xt->assign("oq_major_tabfieldblock",true);
////////////////////////////////////////////
//oq_u - 
	
	$value = $pageObject->showDBValue("oq_u", $data, $keylink);
	if($mainTableOwnerID=="oq_u")
		$ownerIdValue=$value;
	$xt->assign("oq_u_value",$value);
	if(!$pageObject->isAppearOnTabs("oq_u"))
		$xt->assign("oq_u_fieldblock",true);
	else
		$xt->assign("oq_u_tabfieldblock",true);
////////////////////////////////////////////
//oq_cgpa - 
	
	$value = $pageObject->showDBValue("oq_cgpa", $data, $keylink);
	if($mainTableOwnerID=="oq_cgpa")
		$ownerIdValue=$value;
	$xt->assign("oq_cgpa_value",$value);
	if(!$pageObject->isAppearOnTabs("oq_cgpa"))
		$xt->assign("oq_cgpa_fieldblock",true);
	else
		$xt->assign("oq_cgpa_tabfieldblock",true);
////////////////////////////////////////////
//g7_s - 
	
	$value = $pageObject->showDBValue("g7_s", $data, $keylink);
	if($mainTableOwnerID=="g7_s")
		$ownerIdValue=$value;
	$xt->assign("g7_s_value",$value);
	if(!$pageObject->isAppearOnTabs("g7_s"))
		$xt->assign("g7_s_fieldblock",true);
	else
		$xt->assign("g7_s_tabfieldblock",true);
////////////////////////////////////////////
//g7_g - 
	
	$value = $pageObject->showDBValue("g7_g", $data, $keylink);
	if($mainTableOwnerID=="g7_g")
		$ownerIdValue=$value;
	$xt->assign("g7_g_value",$value);
	if(!$pageObject->isAppearOnTabs("g7_g"))
		$xt->assign("g7_g_fieldblock",true);
	else
		$xt->assign("g7_g_tabfieldblock",true);
////////////////////////////////////////////
//g8_s - 
	
	$value = $pageObject->showDBValue("g8_s", $data, $keylink);
	if($mainTableOwnerID=="g8_s")
		$ownerIdValue=$value;
	$xt->assign("g8_s_value",$value);
	if(!$pageObject->isAppearOnTabs("g8_s"))
		$xt->assign("g8_s_fieldblock",true);
	else
		$xt->assign("g8_s_tabfieldblock",true);
////////////////////////////////////////////
//g8_g - 
	
	$value = $pageObject->showDBValue("g8_g", $data, $keylink);
	if($mainTableOwnerID=="g8_g")
		$ownerIdValue=$value;
	$xt->assign("g8_g_value",$value);
	if(!$pageObject->isAppearOnTabs("g8_g"))
		$xt->assign("g8_g_fieldblock",true);
	else
		$xt->assign("g8_g_tabfieldblock",true);
////////////////////////////////////////////
//g9_s - 
	
	$value = $pageObject->showDBValue("g9_s", $data, $keylink);
	if($mainTableOwnerID=="g9_s")
		$ownerIdValue=$value;
	$xt->assign("g9_s_value",$value);
	if(!$pageObject->isAppearOnTabs("g9_s"))
		$xt->assign("g9_s_fieldblock",true);
	else
		$xt->assign("g9_s_tabfieldblock",true);
////////////////////////////////////////////
//g9_g - 
	
	$value = $pageObject->showDBValue("g9_g", $data, $keylink);
	if($mainTableOwnerID=="g9_g")
		$ownerIdValue=$value;
	$xt->assign("g9_g_value",$value);
	if(!$pageObject->isAppearOnTabs("g9_g"))
		$xt->assign("g9_g_fieldblock",true);
	else
		$xt->assign("g9_g_tabfieldblock",true);

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "enroll_prospect";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "enroll_prospect";
			continue;
		}
		
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
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];

		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
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
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "enroll_prospect";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='enroll_prospect_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
	else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>
