<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/student_info_variables.php");
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

$layout = new TLayout("edit","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["top"] = array();
$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"editheader","block"=>"","substyle"=>2);


$layout->containers["fields"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"editfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"editbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";
$layout->blocks["top"][] = "fields";
$layout->containers["details"] = array();

$layout->containers["details"][] = array("name"=>"editdetails","block"=>"detail_tables","substyle"=>1);


$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["student_info_edit"] = $layout;


$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_info_edit_Personal1"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_info_edit_Family_Info1"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_info_edit_Next_Of_Kin1"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_info_edit_Campus_Info1"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_info_edit_Qualification1"] = $layout;

$layout = new TLayout("tab","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["student_info_edit_Medical1"] = $layout;


$layout = new TLayout("list6","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["center"] = array();
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);



$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_import","block"=>"import_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_export","block"=>"export_link","substyle"=>1);




$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"search","block"=>"searchform_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"search_buttons","block"=>"searchformbuttons_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "1";
$layout->blocks["top"][] = "search";
$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";
$layout->blocks["top"][] = "recordcontrols";$page_layouts["student_extracurricular_list"] = $layout;

$layout = new TLayout("list6","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["center"] = array();
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);



$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_import","block"=>"import_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_export","block"=>"export_link","substyle"=>1);




$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"search","block"=>"searchform_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"search_buttons","block"=>"searchformbuttons_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "1";
$layout->blocks["top"][] = "search";
$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";
$layout->blocks["top"][] = "recordcontrols";$page_layouts["student_qualification_list"] = $layout;

$layout = new TLayout("list6","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["center"] = array();
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);



$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_import","block"=>"import_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_export","block"=>"export_link","substyle"=>1);




$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"search","block"=>"searchform_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"search_buttons","block"=>"searchformbuttons_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "1";
$layout->blocks["top"][] = "search";
$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";
$layout->blocks["top"][] = "recordcontrols";$page_layouts["student_discipline_list"] = $layout;

$layout = new TLayout("list6","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["center"] = array();
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);



$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_import","block"=>"import_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_export","block"=>"export_link","substyle"=>1);




$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"search","block"=>"searchform_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"search_buttons","block"=>"searchformbuttons_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "1";
$layout->blocks["top"][] = "search";
$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";
$layout->blocks["top"][] = "recordcontrols";$page_layouts["student_hostel_list"] = $layout;

$layout = new TLayout("list6","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["center"] = array();
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);



$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_import","block"=>"import_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_export","block"=>"export_link","substyle"=>1);




$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"search","block"=>"searchform_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"search_buttons","block"=>"searchformbuttons_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "1";
$layout->blocks["top"][] = "search";
$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";
$layout->blocks["top"][] = "recordcontrols";$page_layouts["student_school_list"] = $layout;


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

$templatefile = "student_info_edit.htm";

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
$keys["StudentID"] = urldecode(postvalue("editid1"));
$savedKeys["StudentID"] = urldecode(postvalue("editid1"));
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
			$dpPermis = $pageObject->getPermissions("student_extracurricular");
		if($dpPermis['search'] || $dpPermis['edit']){
			$mKeys["student_extracurricular"] = $pageObject->pSet->getMasterKeysByDetailTable("student_extracurricular");
			$dpParams['strTableNames'][] = "student_extracurricular";
			$dpParams['ids'][] = ++$ids;
		}
				$dpPermis = $pageObject->getPermissions("student_qualification");
		if($dpPermis['search'] || $dpPermis['edit']){
			$mKeys["student_qualification"] = $pageObject->pSet->getMasterKeysByDetailTable("student_qualification");
			$dpParams['strTableNames'][] = "student_qualification";
			$dpParams['ids'][] = ++$ids;
		}
			$dpPermis = $pageObject->getPermissions("student_discipline");
		if($dpPermis['search'] || $dpPermis['edit']){
			$mKeys["student_discipline"] = $pageObject->pSet->getMasterKeysByDetailTable("student_discipline");
			$dpParams['strTableNames'][] = "student_discipline";
			$dpParams['ids'][] = ++$ids;
		}
			$dpPermis = $pageObject->getPermissions("student_hostel");
		if($dpPermis['search'] || $dpPermis['edit']){
			$mKeys["student_hostel"] = $pageObject->pSet->getMasterKeysByDetailTable("student_hostel");
			$dpParams['strTableNames'][] = "student_hostel";
			$dpParams['ids'][] = ++$ids;
		}
			$dpPermis = $pageObject->getPermissions("student_school");
		if($dpPermis['search'] || $dpPermis['edit']){
			$mKeys["student_school"] = $pageObject->pSet->getMasterKeysByDetailTable("student_school");
			$dpParams['strTableNames'][] = "student_school";
			$dpParams['ids'][] = ++$ids;
		}
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
//	processing MatricNo - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_MatricNo = $pageObject->getControl("MatricNo", $id);
		$control_MatricNo->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing MatricNo - end
//	processing Email - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Email = $pageObject->getControl("Email", $id);
		$control_Email->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Email - end
//	processing DateJoin - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_DateJoin = $pageObject->getControl("DateJoin", $id);
		$control_DateJoin->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing DateJoin - end
//	processing Gender - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Gender = $pageObject->getControl("Gender", $id);
		$control_Gender->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Gender - end
//	processing Address1 - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Address1 = $pageObject->getControl("Address1", $id);
		$control_Address1->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Address1 - end
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
//	processing BatchID - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_BatchID = $pageObject->getControl("BatchID", $id);
		$control_BatchID->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing BatchID - end
//	processing Sponsor - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Sponsor = $pageObject->getControl("Sponsor", $id);
		$control_Sponsor->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Sponsor - end
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
//	processing Class - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Class = $pageObject->getControl("Class", $id);
		$control_Class->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Class - end
//	processing photo - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_photo = $pageObject->getControl("photo", $id);
		$control_photo->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing photo - end
//	processing married - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_married = $pageObject->getControl("married", $id);
		$control_married->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing married - end
//	processing Intake_Category - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Intake_Category = $pageObject->getControl("Intake_Category", $id);
		$control_Intake_Category->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Intake_Category - end
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
//	processing f_name - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f_name = $pageObject->getControl("f_name", $id);
		$control_f_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f_name - end
//	processing f_tel - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f_tel = $pageObject->getControl("f_tel", $id);
		$control_f_tel->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f_tel - end
//	processing f_ic - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f_ic = $pageObject->getControl("f_ic", $id);
		$control_f_ic->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f_ic - end
//	processing m_name - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_m_name = $pageObject->getControl("m_name", $id);
		$control_m_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing m_name - end
//	processing m_tel - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_m_tel = $pageObject->getControl("m_tel", $id);
		$control_m_tel->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing m_tel - end
//	processing m_ic - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_m_ic = $pageObject->getControl("m_ic", $id);
		$control_m_ic->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing m_ic - end
//	processing Nogilir - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Nogilir = $pageObject->getControl("Nogilir", $id);
		$control_Nogilir->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Nogilir - end
//	processing City - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_City = $pageObject->getControl("City", $id);
		$control_City->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing City - end
//	processing StateID - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_StateID = $pageObject->getControl("StateID", $id);
		$control_StateID->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing StateID - end
//	processing m_job - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_m_job = $pageObject->getControl("m_job", $id);
		$control_m_job->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing m_job - end
//	processing qua_year - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_qua_year = $pageObject->getControl("qua_year", $id);
		$control_qua_year->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing qua_year - end
//	processing qua_level - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_qua_level = $pageObject->getControl("qua_level", $id);
		$control_qua_level->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing qua_level - end
//	processing qua_result - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_qua_result = $pageObject->getControl("qua_result", $id);
		$control_qua_result->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing qua_result - end
//	processing qua_place - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_qua_place = $pageObject->getControl("qua_place", $id);
		$control_qua_place->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing qua_place - end
//	processing f_job - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_f_job = $pageObject->getControl("f_job", $id);
		$control_f_job->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing f_job - end

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
			//	processing MatricNo - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_MatricNo->afterSuccessfulSave();
				}
	//	processing MatricNo - end
			//	processing Email - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Email->afterSuccessfulSave();
				}
	//	processing Email - end
			//	processing DateJoin - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_DateJoin->afterSuccessfulSave();
				}
	//	processing DateJoin - end
			//	processing Gender - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Gender->afterSuccessfulSave();
				}
	//	processing Gender - end
			//	processing Address1 - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Address1->afterSuccessfulSave();
				}
	//	processing Address1 - end
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
			//	processing BatchID - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_BatchID->afterSuccessfulSave();
				}
	//	processing BatchID - end
			//	processing Sponsor - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Sponsor->afterSuccessfulSave();
				}
	//	processing Sponsor - end
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
			//	processing Class - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Class->afterSuccessfulSave();
				}
	//	processing Class - end
			//	processing photo - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_photo->afterSuccessfulSave();
				}
	//	processing photo - end
			//	processing married - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_married->afterSuccessfulSave();
				}
	//	processing married - end
			//	processing Intake_Category - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Intake_Category->afterSuccessfulSave();
				}
	//	processing Intake_Category - end
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
			//	processing f_name - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f_name->afterSuccessfulSave();
				}
	//	processing f_name - end
			//	processing f_tel - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f_tel->afterSuccessfulSave();
				}
	//	processing f_tel - end
			//	processing f_ic - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f_ic->afterSuccessfulSave();
				}
	//	processing f_ic - end
			//	processing m_name - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_m_name->afterSuccessfulSave();
				}
	//	processing m_name - end
			//	processing m_tel - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_m_tel->afterSuccessfulSave();
				}
	//	processing m_tel - end
			//	processing m_ic - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_m_ic->afterSuccessfulSave();
				}
	//	processing m_ic - end
			//	processing Nogilir - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Nogilir->afterSuccessfulSave();
				}
	//	processing Nogilir - end
			//	processing City - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_City->afterSuccessfulSave();
				}
	//	processing City - end
			//	processing StateID - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_StateID->afterSuccessfulSave();
				}
	//	processing StateID - end
			//	processing m_job - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_m_job->afterSuccessfulSave();
				}
	//	processing m_job - end
			//	processing qua_year - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_qua_year->afterSuccessfulSave();
				}
	//	processing qua_year - end
			//	processing qua_level - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_qua_level->afterSuccessfulSave();
				}
	//	processing qua_level - end
			//	processing qua_result - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_qua_result->afterSuccessfulSave();
				}
	//	processing qua_result - end
			//	processing qua_place - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_qua_place->afterSuccessfulSave();
				}
	//	processing qua_place - end
			//	processing f_job - begin
							$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_f_job->afterSuccessfulSave();
				}
	//	processing f_job - end
				
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
		$keyGetQ.="editid1=".rawurldecode($keys["StudentID"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: student_info_".$pageObject->getPageType().".php?".$keyGetQ);
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
		header("Location: student_info_list.php?a=return");
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
	$data["MatricNo"] = $evalues["MatricNo"];
	$data["Email"] = $evalues["Email"];
	$data["DateJoin"] = $evalues["DateJoin"];
	$data["Gender"] = $evalues["Gender"];
	$data["Address1"] = $evalues["Address1"];
	$data["HomeTelephone"] = $evalues["HomeTelephone"];
	$data["MobileTelephone"] = $evalues["MobileTelephone"];
	$data["Nationality"] = $evalues["Nationality"];
	$data["BatchID"] = $evalues["BatchID"];
	$data["Sponsor"] = $evalues["Sponsor"];
	$data["DipID"] = $evalues["DipID"];
	$data["Status"] = $evalues["Status"];
	$data["Disability"] = $evalues["Disability"];
	$data["MedicalCondition"] = $evalues["MedicalCondition"];
	$data["race"] = $evalues["race"];
	$data["Religion"] = $evalues["Religion"];
	$data["Class"] = $evalues["Class"];
	$data["photo"] = $evalues["photo"];
	$data["married"] = $evalues["married"];
	$data["Intake_Category"] = $evalues["Intake_Category"];
	$data["f1_name"] = $evalues["f1_name"];
	$data["f1_tel"] = $evalues["f1_tel"];
	$data["f1_relation"] = $evalues["f1_relation"];
	$data["f2_name"] = $evalues["f2_name"];
	$data["f2_tel"] = $evalues["f2_tel"];
	$data["f2_relation"] = $evalues["f2_relation"];
	$data["blood"] = $evalues["blood"];
	$data["f_name"] = $evalues["f_name"];
	$data["f_tel"] = $evalues["f_tel"];
	$data["f_ic"] = $evalues["f_ic"];
	$data["m_name"] = $evalues["m_name"];
	$data["m_tel"] = $evalues["m_tel"];
	$data["m_ic"] = $evalues["m_ic"];
	$data["Nogilir"] = $evalues["Nogilir"];
	$data["City"] = $evalues["City"];
	$data["StateID"] = $evalues["StateID"];
	$data["m_job"] = $evalues["m_job"];
	$data["qua_year"] = $evalues["qua_year"];
	$data["qua_level"] = $evalues["qua_level"];
	$data["qua_result"] = $evalues["qua_result"];
	$data["qua_place"] = $evalues["qua_place"];
	$data["f_job"] = $evalues["f_job"];
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
		
	if(!$pageObject->isAppearOnTabs("MatricNo"))
		$xt->assign("MatricNo_fieldblock",true);
	else
		$xt->assign("MatricNo_tabfieldblock",true);
	$xt->assign("MatricNo_label",true);
	if(isEnableSection508())
		$xt->assign_section("MatricNo_label","<label for=\"".GetInputElementId("MatricNo", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Email"))
		$xt->assign("Email_fieldblock",true);
	else
		$xt->assign("Email_tabfieldblock",true);
	$xt->assign("Email_label",true);
	if(isEnableSection508())
		$xt->assign_section("Email_label","<label for=\"".GetInputElementId("Email", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("DateJoin"))
		$xt->assign("DateJoin_fieldblock",true);
	else
		$xt->assign("DateJoin_tabfieldblock",true);
	$xt->assign("DateJoin_label",true);
	if(isEnableSection508())
		$xt->assign_section("DateJoin_label","<label for=\"".GetInputElementId("DateJoin", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Gender"))
		$xt->assign("Gender_fieldblock",true);
	else
		$xt->assign("Gender_tabfieldblock",true);
	$xt->assign("Gender_label",true);
	if(isEnableSection508())
		$xt->assign_section("Gender_label","<label for=\"".GetInputElementId("Gender", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Address1"))
		$xt->assign("Address1_fieldblock",true);
	else
		$xt->assign("Address1_tabfieldblock",true);
	$xt->assign("Address1_label",true);
	if(isEnableSection508())
		$xt->assign_section("Address1_label","<label for=\"".GetInputElementId("Address1", $id, PAGE_EDIT)."\">","</label>");
		
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
		
	if(!$pageObject->isAppearOnTabs("BatchID"))
		$xt->assign("BatchID_fieldblock",true);
	else
		$xt->assign("BatchID_tabfieldblock",true);
	$xt->assign("BatchID_label",true);
	if(isEnableSection508())
		$xt->assign_section("BatchID_label","<label for=\"".GetInputElementId("BatchID", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Sponsor"))
		$xt->assign("Sponsor_fieldblock",true);
	else
		$xt->assign("Sponsor_tabfieldblock",true);
	$xt->assign("Sponsor_label",true);
	if(isEnableSection508())
		$xt->assign_section("Sponsor_label","<label for=\"".GetInputElementId("Sponsor", $id, PAGE_EDIT)."\">","</label>");
		
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
		
	if(!$pageObject->isAppearOnTabs("Class"))
		$xt->assign("Class_fieldblock",true);
	else
		$xt->assign("Class_tabfieldblock",true);
	$xt->assign("Class_label",true);
	if(isEnableSection508())
		$xt->assign_section("Class_label","<label for=\"".GetInputElementId("Class", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("photo"))
		$xt->assign("photo_fieldblock",true);
	else
		$xt->assign("photo_tabfieldblock",true);
	$xt->assign("photo_label",true);
	if(isEnableSection508())
		$xt->assign_section("photo_label","<label for=\"".GetInputElementId("photo", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("married"))
		$xt->assign("married_fieldblock",true);
	else
		$xt->assign("married_tabfieldblock",true);
	$xt->assign("married_label",true);
	if(isEnableSection508())
		$xt->assign_section("married_label","<label for=\"".GetInputElementId("married", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Intake_Category"))
		$xt->assign("Intake_Category_fieldblock",true);
	else
		$xt->assign("Intake_Category_tabfieldblock",true);
	$xt->assign("Intake_Category_label",true);
	if(isEnableSection508())
		$xt->assign_section("Intake_Category_label","<label for=\"".GetInputElementId("Intake_Category", $id, PAGE_EDIT)."\">","</label>");
		
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
		
	if(!$pageObject->isAppearOnTabs("f_name"))
		$xt->assign("f_name_fieldblock",true);
	else
		$xt->assign("f_name_tabfieldblock",true);
	$xt->assign("f_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("f_name_label","<label for=\"".GetInputElementId("f_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f_tel"))
		$xt->assign("f_tel_fieldblock",true);
	else
		$xt->assign("f_tel_tabfieldblock",true);
	$xt->assign("f_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("f_tel_label","<label for=\"".GetInputElementId("f_tel", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f_ic"))
		$xt->assign("f_ic_fieldblock",true);
	else
		$xt->assign("f_ic_tabfieldblock",true);
	$xt->assign("f_ic_label",true);
	if(isEnableSection508())
		$xt->assign_section("f_ic_label","<label for=\"".GetInputElementId("f_ic", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("m_name"))
		$xt->assign("m_name_fieldblock",true);
	else
		$xt->assign("m_name_tabfieldblock",true);
	$xt->assign("m_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("m_name_label","<label for=\"".GetInputElementId("m_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("m_tel"))
		$xt->assign("m_tel_fieldblock",true);
	else
		$xt->assign("m_tel_tabfieldblock",true);
	$xt->assign("m_tel_label",true);
	if(isEnableSection508())
		$xt->assign_section("m_tel_label","<label for=\"".GetInputElementId("m_tel", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("m_ic"))
		$xt->assign("m_ic_fieldblock",true);
	else
		$xt->assign("m_ic_tabfieldblock",true);
	$xt->assign("m_ic_label",true);
	if(isEnableSection508())
		$xt->assign_section("m_ic_label","<label for=\"".GetInputElementId("m_ic", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Nogilir"))
		$xt->assign("Nogilir_fieldblock",true);
	else
		$xt->assign("Nogilir_tabfieldblock",true);
	$xt->assign("Nogilir_label",true);
	if(isEnableSection508())
		$xt->assign_section("Nogilir_label","<label for=\"".GetInputElementId("Nogilir", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("City"))
		$xt->assign("City_fieldblock",true);
	else
		$xt->assign("City_tabfieldblock",true);
	$xt->assign("City_label",true);
	if(isEnableSection508())
		$xt->assign_section("City_label","<label for=\"".GetInputElementId("City", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("StateID"))
		$xt->assign("StateID_fieldblock",true);
	else
		$xt->assign("StateID_tabfieldblock",true);
	$xt->assign("StateID_label",true);
	if(isEnableSection508())
		$xt->assign_section("StateID_label","<label for=\"".GetInputElementId("StateID", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("m_job"))
		$xt->assign("m_job_fieldblock",true);
	else
		$xt->assign("m_job_tabfieldblock",true);
	$xt->assign("m_job_label",true);
	if(isEnableSection508())
		$xt->assign_section("m_job_label","<label for=\"".GetInputElementId("m_job", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("qua_year"))
		$xt->assign("qua_year_fieldblock",true);
	else
		$xt->assign("qua_year_tabfieldblock",true);
	$xt->assign("qua_year_label",true);
	if(isEnableSection508())
		$xt->assign_section("qua_year_label","<label for=\"".GetInputElementId("qua_year", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("qua_level"))
		$xt->assign("qua_level_fieldblock",true);
	else
		$xt->assign("qua_level_tabfieldblock",true);
	$xt->assign("qua_level_label",true);
	if(isEnableSection508())
		$xt->assign_section("qua_level_label","<label for=\"".GetInputElementId("qua_level", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("qua_result"))
		$xt->assign("qua_result_fieldblock",true);
	else
		$xt->assign("qua_result_tabfieldblock",true);
	$xt->assign("qua_result_label",true);
	if(isEnableSection508())
		$xt->assign_section("qua_result_label","<label for=\"".GetInputElementId("qua_result", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("qua_place"))
		$xt->assign("qua_place_fieldblock",true);
	else
		$xt->assign("qua_place_tabfieldblock",true);
	$xt->assign("qua_place_label",true);
	if(isEnableSection508())
		$xt->assign_section("qua_place_label","<label for=\"".GetInputElementId("qua_place", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("f_job"))
		$xt->assign("f_job_fieldblock",true);
	else
		$xt->assign("f_job_tabfieldblock",true);
	$xt->assign("f_job_label",true);
	if(isEnableSection508())
		$xt->assign_section("f_job_label","<label for=\"".GetInputElementId("f_job", $id, PAGE_EDIT)."\">","</label>");
		

	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("StudentID", $data)));
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
												if($pageObject->pSet->isUseRTE("Nationality") && $fName == "Nationality")
	{
		$_SESSION[$strTableName."_"."Nationality"."_rte"] = "MY";
		$control[$gfName]["params"]["mode"] = "add";
	}
						if($pageObject->pSet->isUseRTE("Disability") && $fName == "Disability")
	{
		$_SESSION[$strTableName."_"."Disability"."_rte"] = "No";
		$control[$gfName]["params"]["mode"] = "add";
	}
							if($pageObject->pSet->isUseRTE("married") && $fName == "married")
	{
		$_SESSION[$strTableName."_"."married"."_rte"] = "Single";
		$control[$gfName]["params"]["mode"] = "add";
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
		$options['masterTable'] = "student_info";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "student_info";
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
	$strTableName = "student_info";
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
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='student_info_view.php?".$viewlink."'\"");
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
