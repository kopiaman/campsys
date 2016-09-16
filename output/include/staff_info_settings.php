<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastaff_info = array();
	$tdatastaff_info[".NumberOfChars"] = 80; 
	$tdatastaff_info[".ShortName"] = "staff_info";
	$tdatastaff_info[".OwnerID"] = "IC_No";
	$tdatastaff_info[".OriginalTable"] = "staff_info";

//	field labels
$fieldLabelsstaff_info = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstaff_info["English"] = array();
	$fieldToolTipsstaff_info["English"] = array();
	$fieldLabelsstaff_info["English"]["ID"] = "ID";
	$fieldToolTipsstaff_info["English"]["ID"] = "";
	$fieldLabelsstaff_info["English"]["Name"] = "Name";
	$fieldToolTipsstaff_info["English"]["Name"] = "";
	$fieldLabelsstaff_info["English"]["StaffNo"] = "Employee No";
	$fieldToolTipsstaff_info["English"]["StaffNo"] = "";
	$fieldLabelsstaff_info["English"]["Email"] = "Email";
	$fieldToolTipsstaff_info["English"]["Email"] = "";
	$fieldLabelsstaff_info["English"]["Gender"] = "Gender";
	$fieldToolTipsstaff_info["English"]["Gender"] = "";
	$fieldLabelsstaff_info["English"]["Race"] = "Race";
	$fieldToolTipsstaff_info["English"]["Race"] = "";
	$fieldLabelsstaff_info["English"]["DOB"] = "Birthday";
	$fieldToolTipsstaff_info["English"]["DOB"] = "";
	$fieldLabelsstaff_info["English"]["Address1"] = "Address";
	$fieldToolTipsstaff_info["English"]["Address1"] = "";
	$fieldLabelsstaff_info["English"]["Postcode"] = "Postcode";
	$fieldToolTipsstaff_info["English"]["Postcode"] = "";
	$fieldLabelsstaff_info["English"]["City"] = "City";
	$fieldToolTipsstaff_info["English"]["City"] = "";
	$fieldLabelsstaff_info["English"]["State"] = "State";
	$fieldToolTipsstaff_info["English"]["State"] = "";
	$fieldLabelsstaff_info["English"]["Nationality"] = "Nationality";
	$fieldToolTipsstaff_info["English"]["Nationality"] = "";
	$fieldLabelsstaff_info["English"]["Home_Tel"] = "Home Tel";
	$fieldToolTipsstaff_info["English"]["Home_Tel"] = "";
	$fieldLabelsstaff_info["English"]["Mobile_Tel"] = "Mobile Tel";
	$fieldToolTipsstaff_info["English"]["Mobile_Tel"] = "";
	$fieldLabelsstaff_info["English"]["Disability"] = "Disability";
	$fieldToolTipsstaff_info["English"]["Disability"] = "";
	$fieldLabelsstaff_info["English"]["Medical_condition"] = "Serious Medical Condition";
	$fieldToolTipsstaff_info["English"]["Medical_condition"] = "";
	$fieldLabelsstaff_info["English"]["Join_Date"] = "Join Date";
	$fieldToolTipsstaff_info["English"]["Join_Date"] = "";
	$fieldLabelsstaff_info["English"]["End_Date"] = "End Date";
	$fieldToolTipsstaff_info["English"]["End_Date"] = "";
	$fieldLabelsstaff_info["English"]["Job_Type"] = "Job Type";
	$fieldToolTipsstaff_info["English"]["Job_Type"] = "";
	$fieldLabelsstaff_info["English"]["Employee_Type"] = "Employment";
	$fieldToolTipsstaff_info["English"]["Employee_Type"] = "";
	$fieldLabelsstaff_info["English"]["Job_Title"] = "Designation";
	$fieldToolTipsstaff_info["English"]["Job_Title"] = "";
	$fieldLabelsstaff_info["English"]["religion"] = "Religion";
	$fieldToolTipsstaff_info["English"]["religion"] = "";
	$fieldLabelsstaff_info["English"]["IC_Number"] = "IC Number";
	$fieldToolTipsstaff_info["English"]["IC Number"] = "";
	$fieldLabelsstaff_info["English"]["department"] = "Department";
	$fieldToolTipsstaff_info["English"]["department"] = "";
	$fieldLabelsstaff_info["English"]["passport"] = "Passport";
	$fieldToolTipsstaff_info["English"]["passport"] = "";
	$fieldLabelsstaff_info["English"]["married"] = "Marital Status";
	$fieldToolTipsstaff_info["English"]["married"] = "";
	$fieldLabelsstaff_info["English"]["blood"] = "Blood";
	$fieldToolTipsstaff_info["English"]["blood"] = "";
	$fieldLabelsstaff_info["English"]["photo"] = "Photo";
	$fieldToolTipsstaff_info["English"]["photo"] = "";
	$fieldLabelsstaff_info["English"]["f1_name"] = "1# Name";
	$fieldToolTipsstaff_info["English"]["f1_name"] = "";
	$fieldLabelsstaff_info["English"]["f1_relation"] = "Relationship";
	$fieldToolTipsstaff_info["English"]["f1_relation"] = "";
	$fieldLabelsstaff_info["English"]["f1_tel"] = "Tel";
	$fieldToolTipsstaff_info["English"]["f1_tel"] = "";
	$fieldLabelsstaff_info["English"]["f2_name"] = "2# Name";
	$fieldToolTipsstaff_info["English"]["f2_name"] = "";
	$fieldLabelsstaff_info["English"]["f2_relation"] = "Relationship";
	$fieldToolTipsstaff_info["English"]["f2_relation"] = "";
	$fieldLabelsstaff_info["English"]["f2_tel"] = "Tel";
	$fieldToolTipsstaff_info["English"]["f2_tel"] = "";
	$fieldLabelsstaff_info["English"]["bank1"] = "Maybank Account";
	$fieldToolTipsstaff_info["English"]["bank1"] = "";
	$fieldLabelsstaff_info["English"]["bank2"] = "Other Bank";
	$fieldToolTipsstaff_info["English"]["bank2"] = "";
	$fieldLabelsstaff_info["English"]["epf"] = "Epf";
	$fieldToolTipsstaff_info["English"]["epf"] = "";
	$fieldLabelsstaff_info["English"]["socso"] = "Socso";
	$fieldToolTipsstaff_info["English"]["socso"] = "";
	$fieldLabelsstaff_info["English"]["lhdn"] = "Lhdn";
	$fieldToolTipsstaff_info["English"]["lhdn"] = "";
	$fieldLabelsstaff_info["English"]["confirmation_date"] = "Confirmation Date";
	$fieldToolTipsstaff_info["English"]["confirmation_date"] = "";
	$fieldLabelsstaff_info["English"]["staffID2"] = "Staff ID2";
	$fieldToolTipsstaff_info["English"]["staffID2"] = "";
	$fieldLabelsstaff_info["English"]["fullname"] = "Fullname";
	$fieldToolTipsstaff_info["English"]["fullname"] = "";
	$fieldLabelsstaff_info["English"]["staff"] = "Staff";
	$fieldToolTipsstaff_info["English"]["staff"] = "";
	$fieldLabelsstaff_info["English"]["sstatus"] = "Status";
	$fieldToolTipsstaff_info["English"]["sstatus"] = "";
	$fieldLabelsstaff_info["English"]["ID1"] = "Option";
	$fieldToolTipsstaff_info["English"]["ID1"] = "";
	if (count($fieldToolTipsstaff_info["English"]))
		$tdatastaff_info[".isUseToolTips"] = true;
}
	
	
	$tdatastaff_info[".NCSearch"] = true;



$tdatastaff_info[".shortTableName"] = "staff_info";
$tdatastaff_info[".nSecOptions"] = 2;
$tdatastaff_info[".recsPerRowList"] = 1;
$tdatastaff_info[".mainTableOwnerID"] = "IC_No";
$tdatastaff_info[".moveNext"] = 1;
$tdatastaff_info[".nType"] = 0;

$tdatastaff_info[".strOriginalTableName"] = "staff_info";




$tdatastaff_info[".showAddInPopup"] = false;

$tdatastaff_info[".showEditInPopup"] = false;

$tdatastaff_info[".showViewInPopup"] = false;

$tdatastaff_info[".fieldsForRegister"] = array();
	
$tdatastaff_info[".listAjax"] = false;

	$tdatastaff_info[".audit"] = true;

	$tdatastaff_info[".locking"] = false;

$tdatastaff_info[".listIcons"] = true;
$tdatastaff_info[".edit"] = true;
$tdatastaff_info[".view"] = true;

$tdatastaff_info[".exportTo"] = true;


$tdatastaff_info[".delete"] = true;

$tdatastaff_info[".showSimpleSearchOptions"] = true;

$tdatastaff_info[".showSearchPanel"] = true;

if (isMobile())
	$tdatastaff_info[".isUseAjaxSuggest"] = false;
else 
	$tdatastaff_info[".isUseAjaxSuggest"] = true;

$tdatastaff_info[".rowHighlite"] = true;

// button handlers file names

$tdatastaff_info[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastaff_info[".isUseTimeForSearch"] = false;




$tdatastaff_info[".allSearchFields"] = array();

$tdatastaff_info[".allSearchFields"][] = "Name";
$tdatastaff_info[".allSearchFields"][] = "sstatus";
$tdatastaff_info[".allSearchFields"][] = "StaffNo";
$tdatastaff_info[".allSearchFields"][] = "department";
$tdatastaff_info[".allSearchFields"][] = "Employee_Type";

$tdatastaff_info[".googleLikeFields"][] = "Name";
$tdatastaff_info[".googleLikeFields"][] = "sstatus";
$tdatastaff_info[".googleLikeFields"][] = "ID1";

$tdatastaff_info[".panelSearchFields"][] = "Name";
$tdatastaff_info[".panelSearchFields"][] = "sstatus";
$tdatastaff_info[".panelSearchFields"][] = "StaffNo";
$tdatastaff_info[".panelSearchFields"][] = "department";
$tdatastaff_info[".panelSearchFields"][] = "Employee_Type";

$tdatastaff_info[".advSearchFields"][] = "Name";
$tdatastaff_info[".advSearchFields"][] = "sstatus";
$tdatastaff_info[".advSearchFields"][] = "StaffNo";
$tdatastaff_info[".advSearchFields"][] = "department";
$tdatastaff_info[".advSearchFields"][] = "Employee_Type";

$tdatastaff_info[".isTableType"] = "list";

	

$tdatastaff_info[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
					


$tdatastaff_info[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastaff_info[".strOrderBy"] = $tstrOrderBy;

$tdatastaff_info[".orderindexes"] = array();

$tdatastaff_info[".sqlHead"] = "SELECT ID,  Name,  StaffNo,  IC_No AS `IC Number`,  Email,  Gender,  Race,  DOB,  Address1,  Postcode,  City,  `State`,  Nationality,  Home_Tel,  Mobile_Tel,  Disability,  Medical_condition,  Join_Date,  End_Date,  Job_Type,  Employee_Type,  Job_Title,  religion,  department,  passport,  married,  blood,  photo,  f1_name,  f1_relation,  f1_tel,  f2_name,  f2_relation,  f2_tel,  bank1,  bank2,  epf,  socso,  lhdn,  confirmation_date,  sstatus,  ID AS ID1";
$tdatastaff_info[".sqlFrom"] = "FROM staff_info";
$tdatastaff_info[".sqlWhereExpr"] = "";
$tdatastaff_info[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "photo";
	$tabFields[] = "Name";
	$tabFields[] = "IC Number";
	$tabFields[] = "Race";
	$tabFields[] = "religion";
	$tabFields[] = "DOB";
	$tabFields[] = "Gender";
	$tabFields[] = "Nationality";
	$tabFields[] = "married";
$arrEditTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Home_Tel";
	$tabFields[] = "Mobile_Tel";
	$tabFields[] = "Email";
	$tabFields[] = "Address1";
	$tabFields[] = "Postcode";
	$tabFields[] = "City";
	$tabFields[] = "State";
$arrEditTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_relation";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_relation";
	$tabFields[] = "f2_tel";
$arrEditTabs[] = array('tabId'=>'Next_of_Kin1',
					   'tabName'=>"Next of Kin",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "sstatus";
	$tabFields[] = "StaffNo";
	$tabFields[] = "department";
	$tabFields[] = "Job_Type";
	$tabFields[] = "Job_Title";
	$tabFields[] = "Employee_Type";
	$tabFields[] = "Join_Date";
	$tabFields[] = "confirmation_date";
	$tabFields[] = "End_Date";
$arrEditTabs[] = array('tabId'=>'Job_Info1',
					   'tabName'=>"Job Info",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "bank1";
	$tabFields[] = "bank2";
	$tabFields[] = "epf";
	$tabFields[] = "socso";
	$tabFields[] = "passport";
	$tabFields[] = "lhdn";
$arrEditTabs[] = array('tabId'=>'Account_Info1',
					   'tabName'=>"Account Info",
					   'nType'=>'0',
					   'nOrder'=>36,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Disability";
	$tabFields[] = "Medical_condition";
	$tabFields[] = "blood";
$arrEditTabs[] = array('tabId'=>'Health_Info1',
					   'tabName'=>"Health Info",
					   'nType'=>'0',
					   'nOrder'=>43,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatastaff_info[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "photo";
	$tabFields[] = "Name";
	$tabFields[] = "IC Number";
	$tabFields[] = "Race";
	$tabFields[] = "religion";
	$tabFields[] = "DOB";
	$tabFields[] = "Gender";
	$tabFields[] = "Nationality";
	$tabFields[] = "married";
$arrAddTabs[] = array('tabId'=>'Personal1',
					  'tabName'=>"Personal",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Home_Tel";
	$tabFields[] = "Mobile_Tel";
	$tabFields[] = "Email";
	$tabFields[] = "Address1";
	$tabFields[] = "Postcode";
	$tabFields[] = "City";
	$tabFields[] = "State";
$arrAddTabs[] = array('tabId'=>'Contact1',
					  'tabName'=>"Contact",
					  'nType'=>'0',
					  'nOrder'=>11,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_relation";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_relation";
	$tabFields[] = "f2_tel";
$arrAddTabs[] = array('tabId'=>'Next_of_Kin1',
					  'tabName'=>"Next of Kin",
					  'nType'=>'0',
					  'nOrder'=>19,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "sstatus";
	$tabFields[] = "StaffNo";
	$tabFields[] = "department";
	$tabFields[] = "Job_Type";
	$tabFields[] = "Job_Title";
	$tabFields[] = "Employee_Type";
	$tabFields[] = "Join_Date";
	$tabFields[] = "confirmation_date";
	$tabFields[] = "End_Date";
$arrAddTabs[] = array('tabId'=>'Job_Info1',
					  'tabName'=>"Job Info",
					  'nType'=>'0',
					  'nOrder'=>26,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "bank1";
	$tabFields[] = "bank2";
	$tabFields[] = "epf";
	$tabFields[] = "socso";
	$tabFields[] = "passport";
	$tabFields[] = "lhdn";
$arrAddTabs[] = array('tabId'=>'Account_Info1',
					  'tabName'=>"Account Info",
					  'nType'=>'0',
					  'nOrder'=>36,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Disability";
	$tabFields[] = "Medical_condition";
	$tabFields[] = "blood";
$arrAddTabs[] = array('tabId'=>'Health_Info1',
					  'tabName'=>"Health Info",
					  'nType'=>'0',
					  'nOrder'=>43,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatastaff_info[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "photo";
	$tabFields[] = "Name";
	$tabFields[] = "IC Number";
	$tabFields[] = "Race";
	$tabFields[] = "religion";
	$tabFields[] = "DOB";
	$tabFields[] = "Gender";
	$tabFields[] = "Nationality";
	$tabFields[] = "married";
$arrViewTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Home_Tel";
	$tabFields[] = "Mobile_Tel";
	$tabFields[] = "Email";
	$tabFields[] = "Address1";
	$tabFields[] = "Postcode";
	$tabFields[] = "City";
	$tabFields[] = "State";
$arrViewTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_relation";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_relation";
	$tabFields[] = "f2_tel";
$arrViewTabs[] = array('tabId'=>'Next_of_Kin1',
					   'tabName'=>"Next of Kin",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "sstatus";
	$tabFields[] = "StaffNo";
	$tabFields[] = "department";
	$tabFields[] = "Job_Type";
	$tabFields[] = "Job_Title";
	$tabFields[] = "Employee_Type";
	$tabFields[] = "Join_Date";
	$tabFields[] = "confirmation_date";
	$tabFields[] = "End_Date";
$arrViewTabs[] = array('tabId'=>'Job_Info1',
					   'tabName'=>"Job Info",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "bank1";
	$tabFields[] = "bank2";
	$tabFields[] = "epf";
	$tabFields[] = "socso";
	$tabFields[] = "passport";
	$tabFields[] = "lhdn";
$arrViewTabs[] = array('tabId'=>'Account_Info1',
					   'tabName'=>"Account Info",
					   'nType'=>'0',
					   'nOrder'=>36,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Disability";
	$tabFields[] = "Medical_condition";
	$tabFields[] = "blood";
$arrViewTabs[] = array('tabId'=>'Health_Info1',
					   'tabName'=>"Health Info",
					   'nType'=>'0',
					   'nOrder'=>43,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatastaff_info[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaff_info[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaff_info[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstaff_info = array();
$tableKeysstaff_info[] = "ID";
$tdatastaff_info[".Keys"] = $tableKeysstaff_info;

$tdatastaff_info[".listFields"] = array();
$tdatastaff_info[".listFields"][] = "StaffNo";
$tdatastaff_info[".listFields"][] = "Name";
$tdatastaff_info[".listFields"][] = "department";
$tdatastaff_info[".listFields"][] = "Employee_Type";
$tdatastaff_info[".listFields"][] = "sstatus";
$tdatastaff_info[".listFields"][] = "ID1";

$tdatastaff_info[".viewFields"] = array();
$tdatastaff_info[".viewFields"][] = "photo";
$tdatastaff_info[".viewFields"][] = "Name";
$tdatastaff_info[".viewFields"][] = "IC Number";
$tdatastaff_info[".viewFields"][] = "Race";
$tdatastaff_info[".viewFields"][] = "religion";
$tdatastaff_info[".viewFields"][] = "DOB";
$tdatastaff_info[".viewFields"][] = "Gender";
$tdatastaff_info[".viewFields"][] = "Nationality";
$tdatastaff_info[".viewFields"][] = "married";
$tdatastaff_info[".viewFields"][] = "Home_Tel";
$tdatastaff_info[".viewFields"][] = "Mobile_Tel";
$tdatastaff_info[".viewFields"][] = "Email";
$tdatastaff_info[".viewFields"][] = "Address1";
$tdatastaff_info[".viewFields"][] = "Postcode";
$tdatastaff_info[".viewFields"][] = "City";
$tdatastaff_info[".viewFields"][] = "State";
$tdatastaff_info[".viewFields"][] = "f1_name";
$tdatastaff_info[".viewFields"][] = "f1_relation";
$tdatastaff_info[".viewFields"][] = "f1_tel";
$tdatastaff_info[".viewFields"][] = "f2_name";
$tdatastaff_info[".viewFields"][] = "f2_relation";
$tdatastaff_info[".viewFields"][] = "f2_tel";
$tdatastaff_info[".viewFields"][] = "sstatus";
$tdatastaff_info[".viewFields"][] = "StaffNo";
$tdatastaff_info[".viewFields"][] = "department";
$tdatastaff_info[".viewFields"][] = "Job_Type";
$tdatastaff_info[".viewFields"][] = "Job_Title";
$tdatastaff_info[".viewFields"][] = "Employee_Type";
$tdatastaff_info[".viewFields"][] = "Join_Date";
$tdatastaff_info[".viewFields"][] = "confirmation_date";
$tdatastaff_info[".viewFields"][] = "End_Date";
$tdatastaff_info[".viewFields"][] = "bank1";
$tdatastaff_info[".viewFields"][] = "bank2";
$tdatastaff_info[".viewFields"][] = "epf";
$tdatastaff_info[".viewFields"][] = "socso";
$tdatastaff_info[".viewFields"][] = "passport";
$tdatastaff_info[".viewFields"][] = "lhdn";
$tdatastaff_info[".viewFields"][] = "Disability";
$tdatastaff_info[".viewFields"][] = "Medical_condition";
$tdatastaff_info[".viewFields"][] = "blood";

$tdatastaff_info[".addFields"] = array();
$tdatastaff_info[".addFields"][] = "photo";
$tdatastaff_info[".addFields"][] = "Name";
$tdatastaff_info[".addFields"][] = "IC Number";
$tdatastaff_info[".addFields"][] = "Race";
$tdatastaff_info[".addFields"][] = "religion";
$tdatastaff_info[".addFields"][] = "DOB";
$tdatastaff_info[".addFields"][] = "Gender";
$tdatastaff_info[".addFields"][] = "Nationality";
$tdatastaff_info[".addFields"][] = "married";
$tdatastaff_info[".addFields"][] = "Home_Tel";
$tdatastaff_info[".addFields"][] = "Mobile_Tel";
$tdatastaff_info[".addFields"][] = "Email";
$tdatastaff_info[".addFields"][] = "Address1";
$tdatastaff_info[".addFields"][] = "Postcode";
$tdatastaff_info[".addFields"][] = "City";
$tdatastaff_info[".addFields"][] = "State";
$tdatastaff_info[".addFields"][] = "f1_name";
$tdatastaff_info[".addFields"][] = "f1_relation";
$tdatastaff_info[".addFields"][] = "f1_tel";
$tdatastaff_info[".addFields"][] = "f2_name";
$tdatastaff_info[".addFields"][] = "f2_relation";
$tdatastaff_info[".addFields"][] = "f2_tel";
$tdatastaff_info[".addFields"][] = "sstatus";
$tdatastaff_info[".addFields"][] = "StaffNo";
$tdatastaff_info[".addFields"][] = "department";
$tdatastaff_info[".addFields"][] = "Job_Type";
$tdatastaff_info[".addFields"][] = "Job_Title";
$tdatastaff_info[".addFields"][] = "Employee_Type";
$tdatastaff_info[".addFields"][] = "Join_Date";
$tdatastaff_info[".addFields"][] = "confirmation_date";
$tdatastaff_info[".addFields"][] = "End_Date";
$tdatastaff_info[".addFields"][] = "bank1";
$tdatastaff_info[".addFields"][] = "bank2";
$tdatastaff_info[".addFields"][] = "epf";
$tdatastaff_info[".addFields"][] = "socso";
$tdatastaff_info[".addFields"][] = "passport";
$tdatastaff_info[".addFields"][] = "lhdn";
$tdatastaff_info[".addFields"][] = "Disability";
$tdatastaff_info[".addFields"][] = "Medical_condition";
$tdatastaff_info[".addFields"][] = "blood";

$tdatastaff_info[".inlineAddFields"] = array();

$tdatastaff_info[".editFields"] = array();
$tdatastaff_info[".editFields"][] = "photo";
$tdatastaff_info[".editFields"][] = "Name";
$tdatastaff_info[".editFields"][] = "IC Number";
$tdatastaff_info[".editFields"][] = "Race";
$tdatastaff_info[".editFields"][] = "religion";
$tdatastaff_info[".editFields"][] = "DOB";
$tdatastaff_info[".editFields"][] = "Gender";
$tdatastaff_info[".editFields"][] = "Nationality";
$tdatastaff_info[".editFields"][] = "married";
$tdatastaff_info[".editFields"][] = "Home_Tel";
$tdatastaff_info[".editFields"][] = "Mobile_Tel";
$tdatastaff_info[".editFields"][] = "Email";
$tdatastaff_info[".editFields"][] = "Address1";
$tdatastaff_info[".editFields"][] = "Postcode";
$tdatastaff_info[".editFields"][] = "City";
$tdatastaff_info[".editFields"][] = "State";
$tdatastaff_info[".editFields"][] = "f1_name";
$tdatastaff_info[".editFields"][] = "f1_relation";
$tdatastaff_info[".editFields"][] = "f1_tel";
$tdatastaff_info[".editFields"][] = "f2_name";
$tdatastaff_info[".editFields"][] = "f2_relation";
$tdatastaff_info[".editFields"][] = "f2_tel";
$tdatastaff_info[".editFields"][] = "sstatus";
$tdatastaff_info[".editFields"][] = "StaffNo";
$tdatastaff_info[".editFields"][] = "department";
$tdatastaff_info[".editFields"][] = "Job_Type";
$tdatastaff_info[".editFields"][] = "Job_Title";
$tdatastaff_info[".editFields"][] = "Employee_Type";
$tdatastaff_info[".editFields"][] = "Join_Date";
$tdatastaff_info[".editFields"][] = "confirmation_date";
$tdatastaff_info[".editFields"][] = "End_Date";
$tdatastaff_info[".editFields"][] = "bank1";
$tdatastaff_info[".editFields"][] = "bank2";
$tdatastaff_info[".editFields"][] = "epf";
$tdatastaff_info[".editFields"][] = "socso";
$tdatastaff_info[".editFields"][] = "passport";
$tdatastaff_info[".editFields"][] = "lhdn";
$tdatastaff_info[".editFields"][] = "Disability";
$tdatastaff_info[".editFields"][] = "Medical_condition";
$tdatastaff_info[".editFields"][] = "blood";

$tdatastaff_info[".inlineEditFields"] = array();

$tdatastaff_info[".exportFields"] = array();
$tdatastaff_info[".exportFields"][] = "photo";
$tdatastaff_info[".exportFields"][] = "Name";
$tdatastaff_info[".exportFields"][] = "IC Number";
$tdatastaff_info[".exportFields"][] = "Race";
$tdatastaff_info[".exportFields"][] = "religion";
$tdatastaff_info[".exportFields"][] = "DOB";
$tdatastaff_info[".exportFields"][] = "Gender";
$tdatastaff_info[".exportFields"][] = "Nationality";
$tdatastaff_info[".exportFields"][] = "married";
$tdatastaff_info[".exportFields"][] = "Home_Tel";
$tdatastaff_info[".exportFields"][] = "Mobile_Tel";
$tdatastaff_info[".exportFields"][] = "Email";
$tdatastaff_info[".exportFields"][] = "Address1";
$tdatastaff_info[".exportFields"][] = "Postcode";
$tdatastaff_info[".exportFields"][] = "City";
$tdatastaff_info[".exportFields"][] = "State";
$tdatastaff_info[".exportFields"][] = "f1_name";
$tdatastaff_info[".exportFields"][] = "f1_relation";
$tdatastaff_info[".exportFields"][] = "f1_tel";
$tdatastaff_info[".exportFields"][] = "f2_name";
$tdatastaff_info[".exportFields"][] = "f2_relation";
$tdatastaff_info[".exportFields"][] = "f2_tel";
$tdatastaff_info[".exportFields"][] = "sstatus";
$tdatastaff_info[".exportFields"][] = "StaffNo";
$tdatastaff_info[".exportFields"][] = "department";
$tdatastaff_info[".exportFields"][] = "Job_Type";
$tdatastaff_info[".exportFields"][] = "Job_Title";
$tdatastaff_info[".exportFields"][] = "Employee_Type";
$tdatastaff_info[".exportFields"][] = "Join_Date";
$tdatastaff_info[".exportFields"][] = "confirmation_date";
$tdatastaff_info[".exportFields"][] = "End_Date";
$tdatastaff_info[".exportFields"][] = "bank1";
$tdatastaff_info[".exportFields"][] = "bank2";
$tdatastaff_info[".exportFields"][] = "epf";
$tdatastaff_info[".exportFields"][] = "socso";
$tdatastaff_info[".exportFields"][] = "passport";
$tdatastaff_info[".exportFields"][] = "lhdn";
$tdatastaff_info[".exportFields"][] = "Disability";
$tdatastaff_info[".exportFields"][] = "Medical_condition";
$tdatastaff_info[".exportFields"][] = "blood";

$tdatastaff_info[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["ID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "Name";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:250px;";
	$edata["controlWidth"] = 250;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Name"] = $fdata;
//	StaffNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StaffNo";
	$fdata["GoodName"] = "StaffNo";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Employee No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StaffNo"; 
		$fdata["FullName"] = "StaffNo";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["StaffNo"] = $fdata;
//	IC Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IC Number";
	$fdata["GoodName"] = "IC_Number";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "IC Number"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "IC_No"; 
		$fdata["FullName"] = "IC_No";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["IC Number"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Email"; 
		$fdata["FullName"] = "Email";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
		$edata["inputStyle"] = " width:200px;";
	$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Email"] = $fdata;
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Gender"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Gender"; 
		$fdata["FullName"] = "Gender";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Male";
	$edata["LookupValues"][] = "Female";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Gender"] = $fdata;
//	Race
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Race";
	$fdata["GoodName"] = "Race";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Race"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Race"; 
		$fdata["FullName"] = "Race";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		$edata["AutoUpdate"] = true; 
	
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "class=3";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Race"] = $fdata;
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Birthday"; 
	$fdata["FieldType"] = 7;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DOB"; 
		$fdata["FullName"] = "DOB";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 80; 
	$edata["LastYearFactor"] = -21; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["DOB"] = $fdata;
//	Address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Address1";
	$fdata["GoodName"] = "Address1";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Address"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Address1"; 
		$fdata["FullName"] = "Address1";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 41;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Address1"] = $fdata;
//	Postcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Postcode";
	$fdata["GoodName"] = "Postcode";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Postcode"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Postcode"; 
		$fdata["FullName"] = "Postcode";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";
	
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Postcode"] = $fdata;
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "City"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "City"; 
		$fdata["FullName"] = "City";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["City"] = $fdata;
//	State
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "State";
	$fdata["GoodName"] = "State";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "State"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "State"; 
		$fdata["FullName"] = "`State`";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "class=1";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["State"] = $fdata;
//	Nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Nationality";
	$fdata["GoodName"] = "Nationality";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Nationality"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nationality"; 
		$fdata["FullName"] = "Nationality";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		$edata["AutoUpdate"] = true; 
	
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("staff_info"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "ccode";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "country";
	
		
	$edata["LookupTable"] = "countries";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Nationality"] = $fdata;
//	Home_Tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Home_Tel";
	$fdata["GoodName"] = "Home_Tel";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Home Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Home_Tel"; 
		$fdata["FullName"] = "Home_Tel";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Home_Tel"] = $fdata;
//	Mobile_Tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Mobile_Tel";
	$fdata["GoodName"] = "Mobile_Tel";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Mobile Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Mobile_Tel"; 
		$fdata["FullName"] = "Mobile_Tel";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Mobile_Tel"] = $fdata;
//	Disability
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Disability";
	$fdata["GoodName"] = "Disability";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Disability"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Disability"; 
		$fdata["FullName"] = "Disability";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Disability"] = $fdata;
//	Medical_condition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Medical_condition";
	$fdata["GoodName"] = "Medical_condition";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Serious Medical Condition"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Medical_condition"; 
		$fdata["FullName"] = "Medical_condition";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Medical_condition"] = $fdata;
//	Join_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Join_Date";
	$fdata["GoodName"] = "Join_Date";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Join Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Join_Date"; 
		$fdata["FullName"] = "Join_Date";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 15; 
	$edata["LastYearFactor"] = 1; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Join_Date"] = $fdata;
//	End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "End_Date";
	$fdata["GoodName"] = "End_Date";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "End Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "End_Date"; 
		$fdata["FullName"] = "End_Date";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["End_Date"] = $fdata;
//	Job_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Job_Type";
	$fdata["GoodName"] = "Job_Type";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Job Type"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Job_Type"; 
		$fdata["FullName"] = "Job_Type";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=45";
	
		
		
		
				
			//	dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Job_Title";
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Job_Type"] = $fdata;
//	Employee_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Employee_Type";
	$fdata["GoodName"] = "Employee_Type";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Employment"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Employee_Type"; 
		$fdata["FullName"] = "Employee_Type";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "class=12";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Employee_Type"] = $fdata;
//	Job_Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Job_Title";
	$fdata["GoodName"] = "Job_Title";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Designation"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Job_Title"; 
		$fdata["FullName"] = "Job_Title";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "job_name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "job_name";
	
		
	$edata["LookupTable"] = "job";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "Job_Type"; 
	$edata["CategoryFilter"] = "job_category"; 
	
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["Job_Title"] = $fdata;
//	religion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "religion";
	$fdata["GoodName"] = "religion";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Religion"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "religion"; 
		$fdata["FullName"] = "religion";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "class=4";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["religion"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Department"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "department"; 
		$fdata["FullName"] = "department";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class='28'";
	
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["department"] = $fdata;
//	passport
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "passport";
	$fdata["GoodName"] = "passport";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Passport"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "passport"; 
		$fdata["FullName"] = "passport";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["passport"] = $fdata;
//	married
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "married";
	$fdata["GoodName"] = "married";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Marital Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "married"; 
		$fdata["FullName"] = "married";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Single";
	$edata["LookupValues"][] = "Married";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["married"] = $fdata;
//	blood
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "blood";
	$fdata["GoodName"] = "blood";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Blood"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "blood"; 
		$fdata["FullName"] = "blood";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "A";
	$edata["LookupValues"][] = "B";
	$edata["LookupValues"][] = "AB";
	$edata["LookupValues"][] = "O";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["blood"] = $fdata;
//	photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "photo";
	$fdata["GoodName"] = "photo";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Photo"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "photo"; 
		$fdata["FullName"] = "photo";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
					$vdata["ShowIcon"] = true; 
			$vdata["ShowCustomExpr"] = true; 
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 2000;
	
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;
	
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["photo"] = $fdata;
//	f1_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "f1_name";
	$fdata["GoodName"] = "f1_name";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "1# Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f1_name"; 
		$fdata["FullName"] = "f1_name";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:200px;";
	$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["f1_name"] = $fdata;
//	f1_relation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "f1_relation";
	$fdata["GoodName"] = "f1_relation";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Relationship"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f1_relation"; 
		$fdata["FullName"] = "f1_relation";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class='9'";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["f1_relation"] = $fdata;
//	f1_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "f1_tel";
	$fdata["GoodName"] = "f1_tel";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f1_tel"; 
		$fdata["FullName"] = "f1_tel";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["f1_tel"] = $fdata;
//	f2_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "f2_name";
	$fdata["GoodName"] = "f2_name";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "2# Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f2_name"; 
		$fdata["FullName"] = "f2_name";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:200px;";
	$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["f2_name"] = $fdata;
//	f2_relation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "f2_relation";
	$fdata["GoodName"] = "f2_relation";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Relationship"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f2_relation"; 
		$fdata["FullName"] = "f2_relation";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class='9'";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["f2_relation"] = $fdata;
//	f2_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "f2_tel";
	$fdata["GoodName"] = "f2_tel";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f2_tel"; 
		$fdata["FullName"] = "f2_tel";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["f2_tel"] = $fdata;
//	bank1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "bank1";
	$fdata["GoodName"] = "bank1";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Maybank Account"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "bank1"; 
		$fdata["FullName"] = "bank1";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["bank1"] = $fdata;
//	bank2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "bank2";
	$fdata["GoodName"] = "bank2";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Other Bank"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "bank2"; 
		$fdata["FullName"] = "bank2";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["bank2"] = $fdata;
//	epf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "epf";
	$fdata["GoodName"] = "epf";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Epf"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "epf"; 
		$fdata["FullName"] = "epf";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["epf"] = $fdata;
//	socso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "socso";
	$fdata["GoodName"] = "socso";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Socso"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "socso"; 
		$fdata["FullName"] = "socso";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["socso"] = $fdata;
//	lhdn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "lhdn";
	$fdata["GoodName"] = "lhdn";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Lhdn"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lhdn"; 
		$fdata["FullName"] = "lhdn";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["lhdn"] = $fdata;
//	confirmation_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "confirmation_date";
	$fdata["GoodName"] = "confirmation_date";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Confirmation Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "confirmation_date"; 
		$fdata["FullName"] = "confirmation_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 10; 
	$edata["LastYearFactor"] = 1; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["confirmation_date"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sstatus"; 
		$fdata["FullName"] = "sstatus";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Active";
	$edata["LookupValues"][] = "Non Active";

	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["sstatus"] = $fdata;
//	ID1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "ID1";
	$fdata["GoodName"] = "ID1";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Option"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_info["ID1"] = $fdata;

	
$tables_data["staff_info"]=&$tdatastaff_info;
$field_labels["staff_info"] = &$fieldLabelsstaff_info;
$fieldToolTips["staff_info"] = &$fieldToolTipsstaff_info;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["staff_info"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="staff_compulsory_training";
	$detailsParam["dDataSourceTable"]="staff_compulsory_training";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="staff_compulsory_training";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 2;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 1;
		
	$detailsTablesData["staff_info"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["staff_info"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["staff_info"][$dIndex]["detailKeys"][]="StaffID";

$dIndex = 2-1;
			$strOriginalDetailsTable="staff_employement_history";
	$detailsParam["dDataSourceTable"]="staff_employement_history";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="staff_employement_history";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 2;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 1;
		
	$detailsTablesData["staff_info"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["staff_info"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["staff_info"][$dIndex]["detailKeys"][]="StaffID";

$dIndex = 3-1;
			$strOriginalDetailsTable="staff_discipline";
	$detailsParam["dDataSourceTable"]="staff_discipline";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="staff_discipline";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 2;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 1;
		
	$detailsTablesData["staff_info"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["staff_info"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["staff_info"][$dIndex]["detailKeys"][]="StaffID";

$dIndex = 4-1;
			$strOriginalDetailsTable="staff_qualification";
	$detailsParam["dDataSourceTable"]="staff_qualification";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="staff_qualification";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 2;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 1;
		
	$detailsTablesData["staff_info"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["staff_info"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["staff_info"][$dIndex]["detailKeys"][]="StaffID";

$dIndex = 5-1;
			$strOriginalDetailsTable="staff_internal_history";
	$detailsParam["dDataSourceTable"]="staff_internal_history";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="staff_internal_history";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 2;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 1;
		
	$detailsTablesData["staff_info"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["staff_info"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["staff_info"][$dIndex]["detailKeys"][]="StaffID";

	
// tables which are master tables for current table (detail)
$masterTablesData["staff_info"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_staff_info()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Name,  StaffNo,  IC_No AS `IC Number`,  Email,  Gender,  Race,  DOB,  Address1,  Postcode,  City,  `State`,  Nationality,  Home_Tel,  Mobile_Tel,  Disability,  Medical_condition,  Join_Date,  End_Date,  Job_Type,  Employee_Type,  Job_Title,  religion,  department,  passport,  married,  blood,  photo,  f1_name,  f1_relation,  f1_tel,  f2_name,  f2_relation,  f2_tel,  bank1,  bank2,  epf,  socso,  lhdn,  confirmation_date,  sstatus,  ID AS ID1";
$proto0["m_strFrom"] = "FROM staff_info";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "staff_info"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "staff_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffNo",
	"m_strTable" => "staff_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "IC_No",
	"m_strTable" => "staff_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "IC Number";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "staff_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "staff_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Race",
	"m_strTable" => "staff_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "staff_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Address1",
	"m_strTable" => "staff_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Postcode",
	"m_strTable" => "staff_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "staff_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "State",
	"m_strTable" => "staff_info"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Nationality",
	"m_strTable" => "staff_info"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Home_Tel",
	"m_strTable" => "staff_info"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Mobile_Tel",
	"m_strTable" => "staff_info"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability",
	"m_strTable" => "staff_info"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Medical_condition",
	"m_strTable" => "staff_info"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "Join_Date",
	"m_strTable" => "staff_info"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "End_Date",
	"m_strTable" => "staff_info"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Job_Type",
	"m_strTable" => "staff_info"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "Employee_Type",
	"m_strTable" => "staff_info"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "Job_Title",
	"m_strTable" => "staff_info"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "religion",
	"m_strTable" => "staff_info"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "staff_info"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "passport",
	"m_strTable" => "staff_info"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "married",
	"m_strTable" => "staff_info"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "blood",
	"m_strTable" => "staff_info"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "photo",
	"m_strTable" => "staff_info"
));

$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_name",
	"m_strTable" => "staff_info"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_relation",
	"m_strTable" => "staff_info"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_tel",
	"m_strTable" => "staff_info"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_name",
	"m_strTable" => "staff_info"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_relation",
	"m_strTable" => "staff_info"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_tel",
	"m_strTable" => "staff_info"
));

$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "bank1",
	"m_strTable" => "staff_info"
));

$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "bank2",
	"m_strTable" => "staff_info"
));

$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "epf",
	"m_strTable" => "staff_info"
));

$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "socso",
	"m_strTable" => "staff_info"
));

$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "lhdn",
	"m_strTable" => "staff_info"
));

$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "confirmation_date",
	"m_strTable" => "staff_info"
));

$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "staff_info"
));

$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "staff_info"
));

$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "ID1";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto89=array();
$proto89["m_link"] = "SQLL_MAIN";
			$proto90=array();
$proto90["m_strName"] = "staff_info";
$proto90["m_columns"] = array();
$proto90["m_columns"][] = "ID";
$proto90["m_columns"][] = "Name";
$proto90["m_columns"][] = "StaffNo";
$proto90["m_columns"][] = "BranchID";
$proto90["m_columns"][] = "IC_No";
$proto90["m_columns"][] = "Email";
$proto90["m_columns"][] = "Password";
$proto90["m_columns"][] = "Resign";
$proto90["m_columns"][] = "Gender";
$proto90["m_columns"][] = "Race";
$proto90["m_columns"][] = "DOB";
$proto90["m_columns"][] = "Address1";
$proto90["m_columns"][] = "Postcode";
$proto90["m_columns"][] = "City";
$proto90["m_columns"][] = "State";
$proto90["m_columns"][] = "Country";
$proto90["m_columns"][] = "Nationality";
$proto90["m_columns"][] = "Home_Tel";
$proto90["m_columns"][] = "Mobile_Tel";
$proto90["m_columns"][] = "DisciplineID";
$proto90["m_columns"][] = "Disability";
$proto90["m_columns"][] = "Medical_condition";
$proto90["m_columns"][] = "Join_Date";
$proto90["m_columns"][] = "End_Date";
$proto90["m_columns"][] = "Job_Type";
$proto90["m_columns"][] = "Employee_Type";
$proto90["m_columns"][] = "Job_Title";
$proto90["m_columns"][] = "Branch";
$proto90["m_columns"][] = "religion";
$proto90["m_columns"][] = "level";
$proto90["m_columns"][] = "department";
$proto90["m_columns"][] = "passport";
$proto90["m_columns"][] = "married";
$proto90["m_columns"][] = "blood";
$proto90["m_columns"][] = "photo";
$proto90["m_columns"][] = "f1_name";
$proto90["m_columns"][] = "f1_relation";
$proto90["m_columns"][] = "f1_tel";
$proto90["m_columns"][] = "f2_name";
$proto90["m_columns"][] = "f2_relation";
$proto90["m_columns"][] = "f2_tel";
$proto90["m_columns"][] = "bank1";
$proto90["m_columns"][] = "bank2";
$proto90["m_columns"][] = "epf";
$proto90["m_columns"][] = "socso";
$proto90["m_columns"][] = "lhdn";
$proto90["m_columns"][] = "confirmation_date";
$proto90["m_columns"][] = "trades";
$proto90["m_columns"][] = "trades2";
$proto90["m_columns"][] = "subModule";
$proto90["m_columns"][] = "sstatus";
$obj = new SQLTable($proto90);

$proto89["m_table"] = $obj;
$proto89["m_alias"] = "";
$proto91=array();
$proto91["m_sql"] = "";
$proto91["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto91["m_column"]=$obj;
$proto91["m_contained"] = array();
$proto91["m_strCase"] = "";
$proto91["m_havingmode"] = "0";
$proto91["m_inBrackets"] = "0";
$proto91["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto91);

$proto89["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto89);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_staff_info = createSqlQuery_staff_info();
																																										$tdatastaff_info[".sqlquery"] = $queryData_staff_info;

$tableEvents["staff_info"] = new eventsBase;
$tdatastaff_info[".hasEvents"] = false;

$cipherer = new RunnerCipherer("staff_info");

?>