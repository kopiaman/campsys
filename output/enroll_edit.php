<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/enroll_variables.php");
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

$layout = new TLayout("","","Mobile");
$page_layouts[""] = $layout;


$layout = new TLayout("","","Mobile");
$page_layouts[""] = $layout;

$layout = new TLayout("","","Mobile");
$page_layouts[""] = $layout;

$layout = new TLayout("","","Mobile");
$page_layouts[""] = $layout;

$layout = new TLayout("","","Mobile");
$page_layouts[""] = $layout;

$layout = new TLayout("","","Mobile");
$page_layouts[""] = $layout;

$layout = new TLayout("","","Mobile");
$page_layouts[""] = $layout;



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

$templatefile = ($inlineedit == EDIT_INLINE) ? "enroll_inline_edit.htm" : "enroll_edit.htm";

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
	

//	processing DipID - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_DipID = $pageObject->getControl("DipID", $id);
		$control_DipID->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing DipID - end
//	processing Status - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_Status = $pageObject->getControl("Status", $id);
		$control_Status->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Status - end
//	processing finance - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

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
			//	processing DipID - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_DipID->afterSuccessfulSave();
				}
	//	processing DipID - end
			//	processing Status - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_Status->afterSuccessfulSave();
				}
	//	processing Status - end
			//	processing finance - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
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
	header("Location: enroll_".$pageObject->getPageType().".php?".$keyGetQ);
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
		header("Location: enroll_list.php?a=return");
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
	$data["DipID"] = $evalues["DipID"];
	$data["Status"] = $evalues["Status"];
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
//	return new data to the List page or report an error
/////////////////////////////////////////////////////////////
if (postvalue("a")=="edited" && ($inlineedit == EDIT_INLINE || $inlineedit == EDIT_POPUP))
{
	if(!$data)
	{
		$data = $evalues;
		$HaveData = false;
	}
	//Preparation   view values

//	detail tables

	$keylink = "";
	$keylink.= "&key1=".htmlspecialchars(rawurlencode(@$data["enrolID"]));


//	enrolID - 
	$value = $pageObject->showDBValue("enrolID", $data, $keylink);
	$showValues["enrolID"] = $value;
	$showFields[] = "enrolID";
		$showRawValues["enrolID"] = substr($data["enrolID"],0,100);

//	Name - Custom
	$value = $pageObject->showDBValue("Name", $data, $keylink);
	$showValues["Name"] = $value;
	$showFields[] = "Name";
		$showRawValues["Name"] = substr($data["Name"],0,100);

//	ICNO - 
	$value = $pageObject->showDBValue("ICNO", $data, $keylink);
	$showValues["ICNO"] = $value;
	$showFields[] = "ICNO";
		$showRawValues["ICNO"] = substr($data["ICNO"],0,100);

//	DOB - Short Date
	$value = $pageObject->showDBValue("DOB", $data, $keylink);
	$showValues["DOB"] = $value;
	$showFields[] = "DOB";
		$showRawValues["DOB"] = substr($data["DOB"],0,100);

//	Email - 
	$value = $pageObject->showDBValue("Email", $data, $keylink);
	$showValues["Email"] = $value;
	$showFields[] = "Email";
		$showRawValues["Email"] = substr($data["Email"],0,100);

//	BranchID - 
	$value = $pageObject->showDBValue("BranchID", $data, $keylink);
	$showValues["BranchID"] = $value;
	$showFields[] = "BranchID";
		$showRawValues["BranchID"] = substr($data["BranchID"],0,100);

//	Date_Apply - Short Date
	$value = $pageObject->showDBValue("Date_Apply", $data, $keylink);
	$showValues["Date_Apply"] = $value;
	$showFields[] = "Date_Apply";
		$showRawValues["Date_Apply"] = substr($data["Date_Apply"],0,100);

//	Gender - 
	$value = $pageObject->showDBValue("Gender", $data, $keylink);
	$showValues["Gender"] = $value;
	$showFields[] = "Gender";
		$showRawValues["Gender"] = substr($data["Gender"],0,100);

//	married - 
	$value = $pageObject->showDBValue("married", $data, $keylink);
	$showValues["married"] = $value;
	$showFields[] = "married";
		$showRawValues["married"] = substr($data["married"],0,100);

//	Address1 - 
	$value = $pageObject->showDBValue("Address1", $data, $keylink);
	$showValues["Address1"] = $value;
	$showFields[] = "Address1";
		$showRawValues["Address1"] = substr($data["Address1"],0,100);

//	City - 
	$value = $pageObject->showDBValue("City", $data, $keylink);
	$showValues["City"] = $value;
	$showFields[] = "City";
		$showRawValues["City"] = substr($data["City"],0,100);

//	Postcode - 
	$value = $pageObject->showDBValue("Postcode", $data, $keylink);
	$showValues["Postcode"] = $value;
	$showFields[] = "Postcode";
		$showRawValues["Postcode"] = substr($data["Postcode"],0,100);

//	StateID - 
	$value = $pageObject->showDBValue("StateID", $data, $keylink);
	$showValues["StateID"] = $value;
	$showFields[] = "StateID";
		$showRawValues["StateID"] = substr($data["StateID"],0,100);

//	HomeTelephone - 
	$value = $pageObject->showDBValue("HomeTelephone", $data, $keylink);
	$showValues["HomeTelephone"] = $value;
	$showFields[] = "HomeTelephone";
		$showRawValues["HomeTelephone"] = substr($data["HomeTelephone"],0,100);

//	MobileTelephone - 
	$value = $pageObject->showDBValue("MobileTelephone", $data, $keylink);
	$showValues["MobileTelephone"] = $value;
	$showFields[] = "MobileTelephone";
		$showRawValues["MobileTelephone"] = substr($data["MobileTelephone"],0,100);

//	Nationality - 
	$value = $pageObject->showDBValue("Nationality", $data, $keylink);
	$showValues["Nationality"] = $value;
	$showFields[] = "Nationality";
		$showRawValues["Nationality"] = substr($data["Nationality"],0,100);

//	DipID - 
	$value = $pageObject->showDBValue("DipID", $data, $keylink);
	$showValues["DipID"] = $value;
	$showFields[] = "DipID";
		$showRawValues["DipID"] = substr($data["DipID"],0,100);

//	Status - Custom
	$value = $pageObject->showDBValue("Status", $data, $keylink);
	$showValues["Status"] = $value;
	$showFields[] = "Status";
		$showRawValues["Status"] = substr($data["Status"],0,100);

//	Disability - 
	$value = $pageObject->showDBValue("Disability", $data, $keylink);
	$showValues["Disability"] = $value;
	$showFields[] = "Disability";
		$showRawValues["Disability"] = substr($data["Disability"],0,100);

//	MedicalCondition - 
	$value = $pageObject->showDBValue("MedicalCondition", $data, $keylink);
	$showValues["MedicalCondition"] = $value;
	$showFields[] = "MedicalCondition";
		$showRawValues["MedicalCondition"] = substr($data["MedicalCondition"],0,100);

//	race - 
	$value = $pageObject->showDBValue("race", $data, $keylink);
	$showValues["race"] = $value;
	$showFields[] = "race";
		$showRawValues["race"] = substr($data["race"],0,100);

//	Religion - 
	$value = $pageObject->showDBValue("Religion", $data, $keylink);
	$showValues["Religion"] = $value;
	$showFields[] = "Religion";
		$showRawValues["Religion"] = substr($data["Religion"],0,100);

//	blood - 
	$value = $pageObject->showDBValue("blood", $data, $keylink);
	$showValues["blood"] = $value;
	$showFields[] = "blood";
		$showRawValues["blood"] = substr($data["blood"],0,100);

//	qua_level - 
	$value = $pageObject->showDBValue("qua_level", $data, $keylink);
	$showValues["qua_level"] = $value;
	$showFields[] = "qua_level";
		$showRawValues["qua_level"] = substr($data["qua_level"],0,100);

//	q1_s - 
	$value = $pageObject->showDBValue("q1_s", $data, $keylink);
	$showValues["q1_s"] = $value;
	$showFields[] = "q1_s";
		$showRawValues["q1_s"] = substr($data["q1_s"],0,100);

//	q1_g - 
	$value = $pageObject->showDBValue("q1_g", $data, $keylink);
	$showValues["q1_g"] = $value;
	$showFields[] = "q1_g";
		$showRawValues["q1_g"] = substr($data["q1_g"],0,100);

//	q2_s - 
	$value = $pageObject->showDBValue("q2_s", $data, $keylink);
	$showValues["q2_s"] = $value;
	$showFields[] = "q2_s";
		$showRawValues["q2_s"] = substr($data["q2_s"],0,100);

//	q2_g - 
	$value = $pageObject->showDBValue("q2_g", $data, $keylink);
	$showValues["q2_g"] = $value;
	$showFields[] = "q2_g";
		$showRawValues["q2_g"] = substr($data["q2_g"],0,100);

//	q3_s - 
	$value = $pageObject->showDBValue("q3_s", $data, $keylink);
	$showValues["q3_s"] = $value;
	$showFields[] = "q3_s";
		$showRawValues["q3_s"] = substr($data["q3_s"],0,100);

//	q3_g - 
	$value = $pageObject->showDBValue("q3_g", $data, $keylink);
	$showValues["q3_g"] = $value;
	$showFields[] = "q3_g";
		$showRawValues["q3_g"] = substr($data["q3_g"],0,100);

//	q4_s - 
	$value = $pageObject->showDBValue("q4_s", $data, $keylink);
	$showValues["q4_s"] = $value;
	$showFields[] = "q4_s";
		$showRawValues["q4_s"] = substr($data["q4_s"],0,100);

//	q4_g - 
	$value = $pageObject->showDBValue("q4_g", $data, $keylink);
	$showValues["q4_g"] = $value;
	$showFields[] = "q4_g";
		$showRawValues["q4_g"] = substr($data["q4_g"],0,100);

//	g5_s - 
	$value = $pageObject->showDBValue("g5_s", $data, $keylink);
	$showValues["g5_s"] = $value;
	$showFields[] = "g5_s";
		$showRawValues["g5_s"] = substr($data["g5_s"],0,100);

//	g5_g - 
	$value = $pageObject->showDBValue("g5_g", $data, $keylink);
	$showValues["g5_g"] = $value;
	$showFields[] = "g5_g";
		$showRawValues["g5_g"] = substr($data["g5_g"],0,100);

//	g6_s - 
	$value = $pageObject->showDBValue("g6_s", $data, $keylink);
	$showValues["g6_s"] = $value;
	$showFields[] = "g6_s";
		$showRawValues["g6_s"] = substr($data["g6_s"],0,100);

//	g6_g - 
	$value = $pageObject->showDBValue("g6_g", $data, $keylink);
	$showValues["g6_g"] = $value;
	$showFields[] = "g6_g";
		$showRawValues["g6_g"] = substr($data["g6_g"],0,100);

//	g7_s - 
	$value = $pageObject->showDBValue("g7_s", $data, $keylink);
	$showValues["g7_s"] = $value;
	$showFields[] = "g7_s";
		$showRawValues["g7_s"] = substr($data["g7_s"],0,100);

//	g7_g - 
	$value = $pageObject->showDBValue("g7_g", $data, $keylink);
	$showValues["g7_g"] = $value;
	$showFields[] = "g7_g";
		$showRawValues["g7_g"] = substr($data["g7_g"],0,100);

//	g8_s - 
	$value = $pageObject->showDBValue("g8_s", $data, $keylink);
	$showValues["g8_s"] = $value;
	$showFields[] = "g8_s";
		$showRawValues["g8_s"] = substr($data["g8_s"],0,100);

//	g8_g - 
	$value = $pageObject->showDBValue("g8_g", $data, $keylink);
	$showValues["g8_g"] = $value;
	$showFields[] = "g8_g";
		$showRawValues["g8_g"] = substr($data["g8_g"],0,100);

//	g9_s - 
	$value = $pageObject->showDBValue("g9_s", $data, $keylink);
	$showValues["g9_s"] = $value;
	$showFields[] = "g9_s";
		$showRawValues["g9_s"] = substr($data["g9_s"],0,100);

//	g9_g - 
	$value = $pageObject->showDBValue("g9_g", $data, $keylink);
	$showValues["g9_g"] = $value;
	$showFields[] = "g9_g";
		$showRawValues["g9_g"] = substr($data["g9_g"],0,100);

//	oq_highest - 
	$value = $pageObject->showDBValue("oq_highest", $data, $keylink);
	$showValues["oq_highest"] = $value;
	$showFields[] = "oq_highest";
		$showRawValues["oq_highest"] = substr($data["oq_highest"],0,100);

//	oq_major - 
	$value = $pageObject->showDBValue("oq_major", $data, $keylink);
	$showValues["oq_major"] = $value;
	$showFields[] = "oq_major";
		$showRawValues["oq_major"] = substr($data["oq_major"],0,100);

//	oq_u - 
	$value = $pageObject->showDBValue("oq_u", $data, $keylink);
	$showValues["oq_u"] = $value;
	$showFields[] = "oq_u";
		$showRawValues["oq_u"] = substr($data["oq_u"],0,100);

//	oq_cgpa - 
	$value = $pageObject->showDBValue("oq_cgpa", $data, $keylink);
	$showValues["oq_cgpa"] = $value;
	$showFields[] = "oq_cgpa";
		$showRawValues["oq_cgpa"] = substr($data["oq_cgpa"],0,100);

//	at_ic - Document Download
	$value = $pageObject->showDBValue("at_ic", $data, $keylink);
	$showValues["at_ic"] = $value;
	$showFields[] = "at_ic";
		$showRawValues["at_ic"] = substr($data["at_ic"],0,100);

//	at_dob - Document Download
	$value = $pageObject->showDBValue("at_dob", $data, $keylink);
	$showValues["at_dob"] = $value;
	$showFields[] = "at_dob";
		$showRawValues["at_dob"] = substr($data["at_dob"],0,100);

//	at_spm - Document Download
	$value = $pageObject->showDBValue("at_spm", $data, $keylink);
	$showValues["at_spm"] = $value;
	$showFields[] = "at_spm";
		$showRawValues["at_spm"] = substr($data["at_spm"],0,100);

//	at_slc - Document Download
	$value = $pageObject->showDBValue("at_slc", $data, $keylink);
	$showValues["at_slc"] = $value;
	$showFields[] = "at_slc";
		$showRawValues["at_slc"] = substr($data["at_slc"],0,100);

//	at_coco - Document Download
	$value = $pageObject->showDBValue("at_coco", $data, $keylink);
	$showValues["at_coco"] = $value;
	$showFields[] = "at_coco";
		$showRawValues["at_coco"] = substr($data["at_coco"],0,100);

//	at_fama - Document Download
	$value = $pageObject->showDBValue("at_fama", $data, $keylink);
	$showValues["at_fama"] = $value;
	$showFields[] = "at_fama";
		$showRawValues["at_fama"] = substr($data["at_fama"],0,100);

//	at_famaic - Document Download
	$value = $pageObject->showDBValue("at_famaic", $data, $keylink);
	$showValues["at_famaic"] = $value;
	$showFields[] = "at_famaic";
		$showRawValues["at_famaic"] = substr($data["at_famaic"],0,100);

//	at_trans - Document Download
	$value = $pageObject->showDBValue("at_trans", $data, $keylink);
	$showValues["at_trans"] = $value;
	$showFields[] = "at_trans";
		$showRawValues["at_trans"] = substr($data["at_trans"],0,100);

//	at_photo - Document Download
	$value = $pageObject->showDBValue("at_photo", $data, $keylink);
	$showValues["at_photo"] = $value;
	$showFields[] = "at_photo";
		$showRawValues["at_photo"] = substr($data["at_photo"],0,100);

//	Passport - 
	$value = $pageObject->showDBValue("Passport", $data, $keylink);
	$showValues["Passport"] = $value;
	$showFields[] = "Passport";
		$showRawValues["Passport"] = substr($data["Passport"],0,100);

//	Country - 
	$value = $pageObject->showDBValue("Country", $data, $keylink);
	$showValues["Country"] = $value;
	$showFields[] = "Country";
		$showRawValues["Country"] = substr($data["Country"],0,100);

//	g10_s - 
	$value = $pageObject->showDBValue("g10_s", $data, $keylink);
	$showValues["g10_s"] = $value;
	$showFields[] = "g10_s";
		$showRawValues["g10_s"] = substr($data["g10_s"],0,100);

//	g10_g - 
	$value = $pageObject->showDBValue("g10_g", $data, $keylink);
	$showValues["g10_g"] = $value;
	$showFields[] = "g10_g";
		$showRawValues["g10_g"] = substr($data["g10_g"],0,100);

//	g11_s - 
	$value = $pageObject->showDBValue("g11_s", $data, $keylink);
	$showValues["g11_s"] = $value;
	$showFields[] = "g11_s";
		$showRawValues["g11_s"] = substr($data["g11_s"],0,100);

//	g11_g - 
	$value = $pageObject->showDBValue("g11_g", $data, $keylink);
	$showValues["g11_g"] = $value;
	$showFields[] = "g11_g";
		$showRawValues["g11_g"] = substr($data["g11_g"],0,100);

//	o_english - 
	$value = $pageObject->showDBValue("o_english", $data, $keylink);
	$showValues["o_english"] = $value;
	$showFields[] = "o_english";
		$showRawValues["o_english"] = substr($data["o_english"],0,100);

//	qua_year - 
	$value = $pageObject->showDBValue("qua_year", $data, $keylink);
	$showValues["qua_year"] = $value;
	$showFields[] = "qua_year";
		$showRawValues["qua_year"] = substr($data["qua_year"],0,100);

//	finance - 
	$value = $pageObject->showDBValue("finance", $data, $keylink);
	$showValues["finance"] = $value;
	$showFields[] = "finance";
		$showRawValues["finance"] = substr($data["finance"],0,100);

//	Detail - Custom
	$value = $pageObject->showDBValue("Detail", $data, $keylink);
	$showValues["Detail"] = $value;
	$showFields[] = "Detail";
		$showRawValues["Detail"] = substr($data["Detail"],0,100);

//	f_name - 
	$value = $pageObject->showDBValue("f_name", $data, $keylink);
	$showValues["f_name"] = $value;
	$showFields[] = "f_name";
		$showRawValues["f_name"] = substr($data["f_name"],0,100);

//	f_tel - 
	$value = $pageObject->showDBValue("f_tel", $data, $keylink);
	$showValues["f_tel"] = $value;
	$showFields[] = "f_tel";
		$showRawValues["f_tel"] = substr($data["f_tel"],0,100);

//	f_ic - 
	$value = $pageObject->showDBValue("f_ic", $data, $keylink);
	$showValues["f_ic"] = $value;
	$showFields[] = "f_ic";
		$showRawValues["f_ic"] = substr($data["f_ic"],0,100);

//	f_job - 
	$value = $pageObject->showDBValue("f_job", $data, $keylink);
	$showValues["f_job"] = $value;
	$showFields[] = "f_job";
		$showRawValues["f_job"] = substr($data["f_job"],0,100);

//	m_name - 
	$value = $pageObject->showDBValue("m_name", $data, $keylink);
	$showValues["m_name"] = $value;
	$showFields[] = "m_name";
		$showRawValues["m_name"] = substr($data["m_name"],0,100);

//	m_tel - 
	$value = $pageObject->showDBValue("m_tel", $data, $keylink);
	$showValues["m_tel"] = $value;
	$showFields[] = "m_tel";
		$showRawValues["m_tel"] = substr($data["m_tel"],0,100);

//	m_ic - 
	$value = $pageObject->showDBValue("m_ic", $data, $keylink);
	$showValues["m_ic"] = $value;
	$showFields[] = "m_ic";
		$showRawValues["m_ic"] = substr($data["m_ic"],0,100);

//	m_job - 
	$value = $pageObject->showDBValue("m_job", $data, $keylink);
	$showValues["m_job"] = $value;
	$showFields[] = "m_job";
		$showRawValues["m_job"] = substr($data["m_job"],0,100);

//	qua_result - 
	$value = $pageObject->showDBValue("qua_result", $data, $keylink);
	$showValues["qua_result"] = $value;
	$showFields[] = "qua_result";
		$showRawValues["qua_result"] = substr($data["qua_result"],0,100);

//	qua_place - 
	$value = $pageObject->showDBValue("qua_place", $data, $keylink);
	$showValues["qua_place"] = $value;
	$showFields[] = "qua_place";
		$showRawValues["qua_place"] = substr($data["qua_place"],0,100);
/////////////////////////////////////////////////////////////
//	start inline output
/////////////////////////////////////////////////////////////
	
	if($IsSaved)
	{
		if($pageObject->lockingObj)
			$pageObject->lockingObj->UnlockRecord($strTableName,$keys,"");
		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $pageObject->jsKeys;
		$returnJSON['keyFields'] = $pageObject->keyFields;
		$returnJSON['vals'] = $showValues;
		$returnJSON['fields'] = $showFields;
		$returnJSON['rawVals'] = $showRawValues;
		$returnJSON['detKeys'] = $showDetailKeys;
		$returnJSON['userMess'] = $usermessage;
		$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
		
		if($inlineedit==EDIT_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$returnJSON['hideCaptcha'] = true;
			
		if($globalEvents->exists("IsRecordEditable", $strTableName))
		{
			if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
				$returnJSON['nonEditable'] = true;
		}
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
		
		if($pageObject->lockingObj)
			$returnJSON['lockMessage'] = $system_message;
		
		if($inlineedit == EDIT_POPUP && !$pageObject->isCaptchaOk)
			$returnJSON['captcha'] = false;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
} 
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
		$options['masterTable'] = "enroll";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "enroll";
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
	$strTableName = "enroll";
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


$viewlink = "";
$viewkeys = array();
	$viewkeys["editid1"] = postvalue("editid1");
foreach($viewkeys as $key => $val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='enroll_view.php?".$viewlink."'\"");
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
