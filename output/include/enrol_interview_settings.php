<?php
require_once(getabspath("classes/cipherer.php"));
$tdataenrol_interview = array();
	$tdataenrol_interview[".NumberOfChars"] = 80; 
	$tdataenrol_interview[".ShortName"] = "enrol_interview";
	$tdataenrol_interview[".OwnerID"] = "";
	$tdataenrol_interview[".OriginalTable"] = "enroll";

//	field labels
$fieldLabelsenrol_interview = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsenrol_interview["English"] = array();
	$fieldToolTipsenrol_interview["English"] = array();
	$fieldLabelsenrol_interview["English"]["Name"] = "Name";
	$fieldToolTipsenrol_interview["English"]["Name"] = "";
	$fieldLabelsenrol_interview["English"]["ICNO"] = "IC NO";
	$fieldToolTipsenrol_interview["English"]["ICNO"] = "";
	$fieldLabelsenrol_interview["English"]["DOB"] = "Date Of Birth";
	$fieldToolTipsenrol_interview["English"]["DOB"] = "";
	$fieldLabelsenrol_interview["English"]["Email"] = "Email";
	$fieldToolTipsenrol_interview["English"]["Email"] = "";
	$fieldLabelsenrol_interview["English"]["BranchID"] = "Branch";
	$fieldToolTipsenrol_interview["English"]["BranchID"] = "";
	$fieldLabelsenrol_interview["English"]["Gender"] = "Gender";
	$fieldToolTipsenrol_interview["English"]["Gender"] = "";
	$fieldLabelsenrol_interview["English"]["married"] = "Marital Status";
	$fieldToolTipsenrol_interview["English"]["married"] = "";
	$fieldLabelsenrol_interview["English"]["Address1"] = "Resident Address";
	$fieldToolTipsenrol_interview["English"]["Address1"] = "";
	$fieldLabelsenrol_interview["English"]["City"] = "City";
	$fieldToolTipsenrol_interview["English"]["City"] = "";
	$fieldLabelsenrol_interview["English"]["Postcode"] = "Postcode";
	$fieldToolTipsenrol_interview["English"]["Postcode"] = "";
	$fieldLabelsenrol_interview["English"]["StateID"] = "State";
	$fieldToolTipsenrol_interview["English"]["StateID"] = "";
	$fieldLabelsenrol_interview["English"]["HomeTelephone"] = "Telephone 2";
	$fieldToolTipsenrol_interview["English"]["HomeTelephone"] = "";
	$fieldLabelsenrol_interview["English"]["MobileTelephone"] = "Telephone 1";
	$fieldToolTipsenrol_interview["English"]["MobileTelephone"] = "";
	$fieldLabelsenrol_interview["English"]["Nationality"] = "Nationality";
	$fieldToolTipsenrol_interview["English"]["Nationality"] = "";
	$fieldLabelsenrol_interview["English"]["DipID"] = "Program";
	$fieldToolTipsenrol_interview["English"]["DipID"] = "";
	$fieldLabelsenrol_interview["English"]["Status"] = "Status";
	$fieldToolTipsenrol_interview["English"]["Status"] = "";
	$fieldLabelsenrol_interview["English"]["Disability"] = "Disability";
	$fieldToolTipsenrol_interview["English"]["Disability"] = "";
	$fieldLabelsenrol_interview["English"]["MedicalCondition"] = "Serious Medical Condition";
	$fieldToolTipsenrol_interview["English"]["MedicalCondition"] = "";
	$fieldLabelsenrol_interview["English"]["race"] = "Race";
	$fieldToolTipsenrol_interview["English"]["race"] = "";
	$fieldLabelsenrol_interview["English"]["Religion"] = "Religion";
	$fieldToolTipsenrol_interview["English"]["Religion"] = "";
	$fieldLabelsenrol_interview["English"]["f1_name"] = "#1 Name";
	$fieldToolTipsenrol_interview["English"]["f1_name"] = "";
	$fieldLabelsenrol_interview["English"]["f1_tel"] = "Tel";
	$fieldToolTipsenrol_interview["English"]["f1_tel"] = "";
	$fieldLabelsenrol_interview["English"]["f1_relation"] = "Relationship";
	$fieldToolTipsenrol_interview["English"]["f1_relation"] = "";
	$fieldLabelsenrol_interview["English"]["f2_name"] = "#2 Name";
	$fieldToolTipsenrol_interview["English"]["f2_name"] = "";
	$fieldLabelsenrol_interview["English"]["f2_tel"] = "Tel";
	$fieldToolTipsenrol_interview["English"]["f2_tel"] = "";
	$fieldLabelsenrol_interview["English"]["f2_relation"] = "Relationship";
	$fieldToolTipsenrol_interview["English"]["f2_relation"] = "";
	$fieldLabelsenrol_interview["English"]["blood"] = "Blood";
	$fieldToolTipsenrol_interview["English"]["blood"] = "";
	$fieldLabelsenrol_interview["English"]["enrolID"] = "Enrol ID";
	$fieldToolTipsenrol_interview["English"]["enrolID"] = "";
	$fieldLabelsenrol_interview["English"]["qua_level"] = "Qualification Level";
	$fieldToolTipsenrol_interview["English"]["qua_level"] = "";
	$fieldLabelsenrol_interview["English"]["q1_s"] = "Subject 1";
	$fieldToolTipsenrol_interview["English"]["q1_s"] = "";
	$fieldLabelsenrol_interview["English"]["q1_g"] = "Subject 1 Grade";
	$fieldToolTipsenrol_interview["English"]["q1_g"] = "";
	$fieldLabelsenrol_interview["English"]["q2_s"] = "Subject 2 ";
	$fieldToolTipsenrol_interview["English"]["q2_s"] = "";
	$fieldLabelsenrol_interview["English"]["q2_g"] = "Subject 2 Grade";
	$fieldToolTipsenrol_interview["English"]["q2_g"] = "";
	$fieldLabelsenrol_interview["English"]["q3_s"] = "Subject 3 ";
	$fieldToolTipsenrol_interview["English"]["q3_s"] = "";
	$fieldLabelsenrol_interview["English"]["q3_g"] = "Subject 3 Grade";
	$fieldToolTipsenrol_interview["English"]["q3_g"] = "";
	$fieldLabelsenrol_interview["English"]["q4_g"] = "Subject 4 Grade";
	$fieldToolTipsenrol_interview["English"]["q4_g"] = "";
	$fieldLabelsenrol_interview["English"]["q4_s"] = "Subject 4 ";
	$fieldToolTipsenrol_interview["English"]["q4_s"] = "";
	$fieldLabelsenrol_interview["English"]["g5_s"] = "Subject 5 ";
	$fieldToolTipsenrol_interview["English"]["g5_s"] = "";
	$fieldLabelsenrol_interview["English"]["g5_g"] = "Subject 5 Grade";
	$fieldToolTipsenrol_interview["English"]["g5_g"] = "";
	$fieldLabelsenrol_interview["English"]["g6_s"] = "Subject 6 ";
	$fieldToolTipsenrol_interview["English"]["g6_s"] = "";
	$fieldLabelsenrol_interview["English"]["g6_g"] = "Subject 6 Grade";
	$fieldToolTipsenrol_interview["English"]["g6_g"] = "";
	$fieldLabelsenrol_interview["English"]["g7_s"] = "Subject 7 ";
	$fieldToolTipsenrol_interview["English"]["g7_s"] = "";
	$fieldLabelsenrol_interview["English"]["g7_g"] = "Subject 7 Grade";
	$fieldToolTipsenrol_interview["English"]["g7_g"] = "";
	$fieldLabelsenrol_interview["English"]["g8_s"] = "Subject 8 ";
	$fieldToolTipsenrol_interview["English"]["g8_s"] = "";
	$fieldLabelsenrol_interview["English"]["g8_g"] = "Subject 8 Grade";
	$fieldToolTipsenrol_interview["English"]["g8_g"] = "";
	$fieldLabelsenrol_interview["English"]["g9_s"] = "Subject 9 ";
	$fieldToolTipsenrol_interview["English"]["g9_s"] = "";
	$fieldLabelsenrol_interview["English"]["g9_g"] = "Subject 9 Grade";
	$fieldToolTipsenrol_interview["English"]["g9_g"] = "";
	$fieldLabelsenrol_interview["English"]["oq_highest"] = "Highest Qualification / Professional Licensed";
	$fieldToolTipsenrol_interview["English"]["oq_highest"] = "";
	$fieldLabelsenrol_interview["English"]["oq_major"] = "Major / Specialization";
	$fieldToolTipsenrol_interview["English"]["oq_major"] = "";
	$fieldLabelsenrol_interview["English"]["oq_u"] = "University / Institute";
	$fieldToolTipsenrol_interview["English"]["oq_u"] = "";
	$fieldLabelsenrol_interview["English"]["oq_cgpa"] = "CGPA";
	$fieldToolTipsenrol_interview["English"]["oq_cgpa"] = "";
	$fieldLabelsenrol_interview["English"]["at_ic"] = "Certified true copy of Identity Card (NRIC)/Passport";
	$fieldToolTipsenrol_interview["English"]["at_ic"] = "";
	$fieldLabelsenrol_interview["English"]["at_dob"] = "Certified true copy of Birth Certificate";
	$fieldToolTipsenrol_interview["English"]["at_dob"] = "";
	$fieldLabelsenrol_interview["English"]["at_spm"] = "Certified true copy of SPM /SPMV/’O’ Level Certificate or result slip";
	$fieldToolTipsenrol_interview["English"]["at_spm"] = "";
	$fieldLabelsenrol_interview["English"]["at_slc"] = "Certified true copy of School Leaving Certificate";
	$fieldToolTipsenrol_interview["English"]["at_slc"] = "";
	$fieldLabelsenrol_interview["English"]["at_coco"] = "Certified true copy of Co-Curriculum Certificate";
	$fieldToolTipsenrol_interview["English"]["at_coco"] = "";
	$fieldLabelsenrol_interview["English"]["at_fama"] = "Certified true copy of parents/guardian’sIdentity Card (NRIC)";
	$fieldToolTipsenrol_interview["English"]["at_fama"] = "";
	$fieldLabelsenrol_interview["English"]["at_famaic"] = "Certified true copy of parents Birth Certificate";
	$fieldToolTipsenrol_interview["English"]["at_famaic"] = "";
	$fieldLabelsenrol_interview["English"]["at_trans"] = "Certified true copy of Certificate/Diploma/Degree with transcript/result slip of every semester";
	$fieldToolTipsenrol_interview["English"]["at_trans"] = "";
	$fieldLabelsenrol_interview["English"]["at_photo"] = "ONE(1) passportsize photographs";
	$fieldToolTipsenrol_interview["English"]["at_photo"] = "";
	$fieldLabelsenrol_interview["English"]["Date_Apply"] = "Date Applied/Key-In";
	$fieldToolTipsenrol_interview["English"]["Date_Apply"] = "";
	$fieldLabelsenrol_interview["English"]["Passport"] = "Passport";
	$fieldToolTipsenrol_interview["English"]["Passport"] = "";
	$fieldLabelsenrol_interview["English"]["Country"] = "Country";
	$fieldToolTipsenrol_interview["English"]["Country"] = "";
	$fieldLabelsenrol_interview["English"]["g10_s"] = "Subject 10 ";
	$fieldToolTipsenrol_interview["English"]["g10_s"] = "";
	$fieldLabelsenrol_interview["English"]["g10_g"] = "Subject 10 Grade";
	$fieldToolTipsenrol_interview["English"]["g10_g"] = "";
	$fieldLabelsenrol_interview["English"]["g11_s"] = "Subject 11 ";
	$fieldToolTipsenrol_interview["English"]["g11_s"] = "";
	$fieldLabelsenrol_interview["English"]["g11_g"] = "Subject 11 Grade";
	$fieldToolTipsenrol_interview["English"]["g11_g"] = "";
	$fieldLabelsenrol_interview["English"]["o_english"] = "IETLS/ TOEFL/ MUET";
	$fieldToolTipsenrol_interview["English"]["o_english"] = "";
	$fieldLabelsenrol_interview["English"]["qua_year"] = "Qualification Year";
	$fieldToolTipsenrol_interview["English"]["qua_year"] = "";
	$fieldLabelsenrol_interview["English"]["f1_job"] = "Occupation";
	$fieldToolTipsenrol_interview["English"]["f1_job"] = "";
	$fieldLabelsenrol_interview["English"]["f2_job"] = "Occupation";
	$fieldToolTipsenrol_interview["English"]["f2_job"] = "";
	$fieldLabelsenrol_interview["English"]["finance"] = "Financial Aid";
	$fieldToolTipsenrol_interview["English"]["finance"] = "";
	$fieldLabelsenrol_interview["English"]["Detail"] = "Detail";
	$fieldToolTipsenrol_interview["English"]["Detail"] = "";
	if (count($fieldToolTipsenrol_interview["English"]))
		$tdataenrol_interview[".isUseToolTips"] = true;
}
	
	
	$tdataenrol_interview[".NCSearch"] = true;



$tdataenrol_interview[".shortTableName"] = "enrol_interview";
$tdataenrol_interview[".nSecOptions"] = 0;
$tdataenrol_interview[".recsPerRowList"] = 1;
$tdataenrol_interview[".mainTableOwnerID"] = "";
$tdataenrol_interview[".moveNext"] = 1;
$tdataenrol_interview[".nType"] = 1;

$tdataenrol_interview[".strOriginalTableName"] = "enroll";




$tdataenrol_interview[".showAddInPopup"] = false;

$tdataenrol_interview[".showEditInPopup"] = false;

$tdataenrol_interview[".showViewInPopup"] = false;

$tdataenrol_interview[".fieldsForRegister"] = array();
	
$tdataenrol_interview[".listAjax"] = false;

	$tdataenrol_interview[".audit"] = true;

	$tdataenrol_interview[".locking"] = false;

$tdataenrol_interview[".listIcons"] = true;
$tdataenrol_interview[".edit"] = true;
$tdataenrol_interview[".view"] = true;

$tdataenrol_interview[".exportTo"] = true;


$tdataenrol_interview[".delete"] = true;

$tdataenrol_interview[".showSimpleSearchOptions"] = false;

$tdataenrol_interview[".showSearchPanel"] = true;

if (isMobile())
	$tdataenrol_interview[".isUseAjaxSuggest"] = false;
else 
	$tdataenrol_interview[".isUseAjaxSuggest"] = true;

$tdataenrol_interview[".rowHighlite"] = true;

// button handlers file names

$tdataenrol_interview[".addPageEvents"] = false;

// use timepicker for search panel
$tdataenrol_interview[".isUseTimeForSearch"] = false;




$tdataenrol_interview[".allSearchFields"] = array();

$tdataenrol_interview[".allSearchFields"][] = "Date_Apply";
$tdataenrol_interview[".allSearchFields"][] = "DipID";
$tdataenrol_interview[".allSearchFields"][] = "finance";
$tdataenrol_interview[".allSearchFields"][] = "Name";
$tdataenrol_interview[".allSearchFields"][] = "StateID";

$tdataenrol_interview[".googleLikeFields"][] = "Detail";
$tdataenrol_interview[".googleLikeFields"][] = "Name";
$tdataenrol_interview[".googleLikeFields"][] = "finance";

$tdataenrol_interview[".panelSearchFields"][] = "DipID";
$tdataenrol_interview[".panelSearchFields"][] = "finance";
$tdataenrol_interview[".panelSearchFields"][] = "Status";
$tdataenrol_interview[".panelSearchFields"][] = "Name";
$tdataenrol_interview[".panelSearchFields"][] = "StateID";

$tdataenrol_interview[".advSearchFields"][] = "Date_Apply";
$tdataenrol_interview[".advSearchFields"][] = "DipID";
$tdataenrol_interview[".advSearchFields"][] = "finance";
$tdataenrol_interview[".advSearchFields"][] = "Name";
$tdataenrol_interview[".advSearchFields"][] = "StateID";

$tdataenrol_interview[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataenrol_interview[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataenrol_interview[".strOrderBy"] = $tstrOrderBy;

$tdataenrol_interview[".orderindexes"] = array();

$tdataenrol_interview[".sqlHead"] = "SELECT enrolID AS Detail,  enrolID,  Name,  ICNO,  DOB,  Email,  BranchID,  Date_Apply,  Gender,  married,  Address1,  City,  Postcode,  StateID,  HomeTelephone,  MobileTelephone,  Nationality,  DipID,  Status,  Disability,  MedicalCondition,  race,  Religion,  f1_name,  f1_tel,  f1_relation,  f2_name,  f2_tel,  f2_relation,  blood,  qua_level,  q1_s,  q1_g,  q2_s,  q2_g,  q3_s,  q3_g,  q4_s,  q4_g,  g5_s,  g5_g,  g6_s,  g6_g,  g7_s,  g7_g,  g8_s,  g8_g,  g9_s,  g9_g,  oq_highest,  oq_major,  oq_u,  oq_cgpa,  at_ic,  at_dob,  at_spm,  at_slc,  at_coco,  at_fama,  at_famaic,  at_trans,  at_photo,  Passport,  Country,  g10_s,  g10_g,  g11_s,  g11_g,  o_english,  qua_year,  f1_job,  f2_job,  finance";
$tdataenrol_interview[".sqlFrom"] = "FROM enroll";
$tdataenrol_interview[".sqlWhereExpr"] = "Status='Interview'";
$tdataenrol_interview[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
	$tabFields[] = "ICNO";
	$tabFields[] = "Passport";
	$tabFields[] = "DOB";
	$tabFields[] = "Nationality";
	$tabFields[] = "Gender";
	$tabFields[] = "race";
	$tabFields[] = "Religion";
	$tabFields[] = "married";
$arrEditTabs[] = array('tabId'=>'Personal_Particular1',
					   'tabName'=>"Personal Particular",
					   'nType'=>'0',
					   'nOrder'=>5,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Address1";
	$tabFields[] = "Postcode";
	$tabFields[] = "City";
	$tabFields[] = "StateID";
	$tabFields[] = "Country";
	$tabFields[] = "MobileTelephone";
	$tabFields[] = "HomeTelephone";
	$tabFields[] = "Email";
$arrEditTabs[] = array('tabId'=>'Contact_Information1',
					   'tabName'=>"Contact Information",
					   'nType'=>'0',
					   'nOrder'=>15,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f1_relation";
	$tabFields[] = "f1_job";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_tel";
	$tabFields[] = "f2_relation";
	$tabFields[] = "f2_job";
$arrEditTabs[] = array('tabId'=>'Parents_Guardian_Information1',
					   'tabName'=>"Parents/Guardian Information",
					   'nType'=>'0',
					   'nOrder'=>24,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "blood";
	$tabFields[] = "Disability";
	$tabFields[] = "MedicalCondition";
$arrEditTabs[] = array('tabId'=>'Medical_History1',
					   'tabName'=>"Medical History",
					   'nType'=>'0',
					   'nOrder'=>33,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "qua_level";
	$tabFields[] = "qua_year";
	$tabFields[] = "q1_s";
	$tabFields[] = "q1_g";
	$tabFields[] = "q2_s";
	$tabFields[] = "q2_g";
	$tabFields[] = "q3_s";
	$tabFields[] = "q3_g";
	$tabFields[] = "q4_s";
	$tabFields[] = "q4_g";
	$tabFields[] = "g5_s";
	$tabFields[] = "g5_g";
	$tabFields[] = "g6_s";
	$tabFields[] = "g6_g";
	$tabFields[] = "g7_s";
	$tabFields[] = "g7_g";
	$tabFields[] = "g8_s";
	$tabFields[] = "g8_g";
	$tabFields[] = "g9_s";
	$tabFields[] = "g9_g";
	$tabFields[] = "g10_s";
	$tabFields[] = "g10_g";
	$tabFields[] = "g11_s";
	$tabFields[] = "g11_g";
	$tabFields[] = "o_english";
	$tabFields[] = "oq_highest";
	$tabFields[] = "oq_major";
	$tabFields[] = "oq_u";
	$tabFields[] = "oq_cgpa";
$arrEditTabs[] = array('tabId'=>'Qualification_Information1',
					   'tabName'=>"Academic Information",
					   'nType'=>'0',
					   'nOrder'=>37,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "at_ic";
	$tabFields[] = "at_coco";
	$tabFields[] = "at_dob";
	$tabFields[] = "at_fama";
	$tabFields[] = "at_spm";
	$tabFields[] = "at_famaic";
	$tabFields[] = "at_slc";
	$tabFields[] = "at_trans";
	$tabFields[] = "at_photo";
$arrEditTabs[] = array('tabId'=>'Enclosures___Required_Documents_1',
					   'tabName'=>"Enclosures ( Required Documents)",
					   'nType'=>'0',
					   'nOrder'=>67,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataenrol_interview[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
	$tabFields[] = "ICNO";
	$tabFields[] = "Passport";
	$tabFields[] = "DOB";
	$tabFields[] = "Nationality";
	$tabFields[] = "Gender";
	$tabFields[] = "race";
	$tabFields[] = "Religion";
	$tabFields[] = "married";
$arrAddTabs[] = array('tabId'=>'Personal_Particular1',
					  'tabName'=>"Personal Particular",
					  'nType'=>'0',
					  'nOrder'=>3,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Address1";
	$tabFields[] = "Postcode";
	$tabFields[] = "City";
	$tabFields[] = "StateID";
	$tabFields[] = "Country";
	$tabFields[] = "MobileTelephone";
	$tabFields[] = "HomeTelephone";
	$tabFields[] = "Email";
$arrAddTabs[] = array('tabId'=>'Contact_Information1',
					  'tabName'=>"Contact Information",
					  'nType'=>'0',
					  'nOrder'=>13,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f1_relation";
	$tabFields[] = "f1_job";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_tel";
	$tabFields[] = "f2_relation";
	$tabFields[] = "f2_job";
$arrAddTabs[] = array('tabId'=>'Parents_Guardian_Information1',
					  'tabName'=>"Parents/Guardian Information",
					  'nType'=>'0',
					  'nOrder'=>22,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "blood";
	$tabFields[] = "Disability";
	$tabFields[] = "MedicalCondition";
$arrAddTabs[] = array('tabId'=>'Medical_History1',
					  'tabName'=>"Medical History",
					  'nType'=>'0',
					  'nOrder'=>31,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "qua_level";
	$tabFields[] = "qua_year";
	$tabFields[] = "q1_s";
	$tabFields[] = "q1_g";
	$tabFields[] = "q2_s";
	$tabFields[] = "q2_g";
	$tabFields[] = "q3_s";
	$tabFields[] = "q3_g";
	$tabFields[] = "q4_s";
	$tabFields[] = "q4_g";
	$tabFields[] = "g5_s";
	$tabFields[] = "g5_g";
	$tabFields[] = "g6_s";
	$tabFields[] = "g6_g";
	$tabFields[] = "g7_s";
	$tabFields[] = "g7_g";
	$tabFields[] = "g8_s";
	$tabFields[] = "g8_g";
	$tabFields[] = "g9_s";
	$tabFields[] = "g9_g";
	$tabFields[] = "g10_s";
	$tabFields[] = "g10_g";
	$tabFields[] = "g11_s";
	$tabFields[] = "g11_g";
	$tabFields[] = "o_english";
	$tabFields[] = "oq_highest";
	$tabFields[] = "oq_major";
	$tabFields[] = "oq_u";
	$tabFields[] = "oq_cgpa";
$arrAddTabs[] = array('tabId'=>'Qualification_Information1',
					  'tabName'=>"Academic Information",
					  'nType'=>'0',
					  'nOrder'=>35,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "at_ic";
	$tabFields[] = "at_coco";
	$tabFields[] = "at_dob";
	$tabFields[] = "at_fama";
	$tabFields[] = "at_spm";
	$tabFields[] = "at_famaic";
	$tabFields[] = "at_slc";
	$tabFields[] = "at_trans";
	$tabFields[] = "at_photo";
$arrAddTabs[] = array('tabId'=>'Enclosures___Required_Documents_1',
					  'tabName'=>"Enclosures ( Required Documents)",
					  'nType'=>'0',
					  'nOrder'=>65,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataenrol_interview[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
	$tabFields[] = "ICNO";
	$tabFields[] = "Passport";
	$tabFields[] = "DOB";
	$tabFields[] = "Nationality";
	$tabFields[] = "Gender";
	$tabFields[] = "race";
	$tabFields[] = "Religion";
	$tabFields[] = "married";
$arrViewTabs[] = array('tabId'=>'Personal_Particular1',
					   'tabName'=>"Personal Particular",
					   'nType'=>'0',
					   'nOrder'=>5,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Address1";
	$tabFields[] = "Postcode";
	$tabFields[] = "City";
	$tabFields[] = "StateID";
	$tabFields[] = "Country";
	$tabFields[] = "MobileTelephone";
	$tabFields[] = "Email";
$arrViewTabs[] = array('tabId'=>'Contact_Information1',
					   'tabName'=>"Contact Information",
					   'nType'=>'0',
					   'nOrder'=>15,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "f1_name";
	$tabFields[] = "f1_tel";
	$tabFields[] = "f1_relation";
	$tabFields[] = "f1_job";
	$tabFields[] = "f2_name";
	$tabFields[] = "f2_tel";
	$tabFields[] = "f2_relation";
	$tabFields[] = "f2_job";
$arrViewTabs[] = array('tabId'=>'Parents_Guardian_Information1',
					   'tabName'=>"Parents/Guardian Information",
					   'nType'=>'0',
					   'nOrder'=>23,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "blood";
	$tabFields[] = "Disability";
	$tabFields[] = "MedicalCondition";
$arrViewTabs[] = array('tabId'=>'Medical_History1',
					   'tabName'=>"Medical History",
					   'nType'=>'0',
					   'nOrder'=>32,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "qua_level";
	$tabFields[] = "qua_year";
	$tabFields[] = "q1_s";
	$tabFields[] = "q1_g";
	$tabFields[] = "q2_s";
	$tabFields[] = "q2_g";
	$tabFields[] = "q3_s";
	$tabFields[] = "q3_g";
	$tabFields[] = "q4_s";
	$tabFields[] = "q4_g";
	$tabFields[] = "g5_s";
	$tabFields[] = "g5_g";
	$tabFields[] = "g6_s";
	$tabFields[] = "g6_g";
	$tabFields[] = "g7_s";
	$tabFields[] = "g7_g";
	$tabFields[] = "g8_s";
	$tabFields[] = "g8_g";
	$tabFields[] = "g9_s";
	$tabFields[] = "g9_g";
	$tabFields[] = "g10_s";
	$tabFields[] = "g10_g";
	$tabFields[] = "g11_s";
	$tabFields[] = "g11_g";
	$tabFields[] = "o_english";
	$tabFields[] = "oq_highest";
	$tabFields[] = "oq_major";
	$tabFields[] = "oq_u";
	$tabFields[] = "oq_cgpa";
$arrViewTabs[] = array('tabId'=>'Qualification_Information1',
					   'tabName'=>"Academic Information",
					   'nType'=>'0',
					   'nOrder'=>36,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "at_ic";
	$tabFields[] = "at_coco";
	$tabFields[] = "at_dob";
	$tabFields[] = "at_fama";
	$tabFields[] = "at_spm";
	$tabFields[] = "at_famaic";
	$tabFields[] = "at_slc";
	$tabFields[] = "at_trans";
	$tabFields[] = "at_photo";
$arrViewTabs[] = array('tabId'=>'Enclosures___Required_Documents_1',
					   'tabName'=>"Enclosures ( Required Documents)",
					   'nType'=>'0',
					   'nOrder'=>66,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataenrol_interview[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataenrol_interview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataenrol_interview[".arrGroupsPerPage"] = $arrGPP;

$tableKeysenrol_interview = array();
$tableKeysenrol_interview[] = "enrolID";
$tdataenrol_interview[".Keys"] = $tableKeysenrol_interview;

$tdataenrol_interview[".listFields"] = array();
$tdataenrol_interview[".listFields"][] = "Name";
$tdataenrol_interview[".listFields"][] = "StateID";
$tdataenrol_interview[".listFields"][] = "MobileTelephone";
$tdataenrol_interview[".listFields"][] = "Email";
$tdataenrol_interview[".listFields"][] = "DipID";
$tdataenrol_interview[".listFields"][] = "Date_Apply";
$tdataenrol_interview[".listFields"][] = "Status";
$tdataenrol_interview[".listFields"][] = "finance";
$tdataenrol_interview[".listFields"][] = "Detail";

$tdataenrol_interview[".viewFields"] = array();
$tdataenrol_interview[".viewFields"][] = "DipID";
$tdataenrol_interview[".viewFields"][] = "Date_Apply";
$tdataenrol_interview[".viewFields"][] = "finance";
$tdataenrol_interview[".viewFields"][] = "Status";
$tdataenrol_interview[".viewFields"][] = "Name";
$tdataenrol_interview[".viewFields"][] = "ICNO";
$tdataenrol_interview[".viewFields"][] = "Passport";
$tdataenrol_interview[".viewFields"][] = "DOB";
$tdataenrol_interview[".viewFields"][] = "Nationality";
$tdataenrol_interview[".viewFields"][] = "Gender";
$tdataenrol_interview[".viewFields"][] = "race";
$tdataenrol_interview[".viewFields"][] = "Religion";
$tdataenrol_interview[".viewFields"][] = "married";
$tdataenrol_interview[".viewFields"][] = "Address1";
$tdataenrol_interview[".viewFields"][] = "Postcode";
$tdataenrol_interview[".viewFields"][] = "City";
$tdataenrol_interview[".viewFields"][] = "StateID";
$tdataenrol_interview[".viewFields"][] = "Country";
$tdataenrol_interview[".viewFields"][] = "MobileTelephone";
$tdataenrol_interview[".viewFields"][] = "Email";
$tdataenrol_interview[".viewFields"][] = "f1_name";
$tdataenrol_interview[".viewFields"][] = "f1_tel";
$tdataenrol_interview[".viewFields"][] = "f1_relation";
$tdataenrol_interview[".viewFields"][] = "f1_job";
$tdataenrol_interview[".viewFields"][] = "f2_name";
$tdataenrol_interview[".viewFields"][] = "f2_tel";
$tdataenrol_interview[".viewFields"][] = "f2_relation";
$tdataenrol_interview[".viewFields"][] = "f2_job";
$tdataenrol_interview[".viewFields"][] = "blood";
$tdataenrol_interview[".viewFields"][] = "Disability";
$tdataenrol_interview[".viewFields"][] = "MedicalCondition";
$tdataenrol_interview[".viewFields"][] = "qua_level";
$tdataenrol_interview[".viewFields"][] = "qua_year";
$tdataenrol_interview[".viewFields"][] = "q1_s";
$tdataenrol_interview[".viewFields"][] = "q1_g";
$tdataenrol_interview[".viewFields"][] = "q2_s";
$tdataenrol_interview[".viewFields"][] = "q2_g";
$tdataenrol_interview[".viewFields"][] = "q3_s";
$tdataenrol_interview[".viewFields"][] = "q3_g";
$tdataenrol_interview[".viewFields"][] = "q4_s";
$tdataenrol_interview[".viewFields"][] = "q4_g";
$tdataenrol_interview[".viewFields"][] = "g5_s";
$tdataenrol_interview[".viewFields"][] = "g5_g";
$tdataenrol_interview[".viewFields"][] = "g6_s";
$tdataenrol_interview[".viewFields"][] = "g6_g";
$tdataenrol_interview[".viewFields"][] = "g7_s";
$tdataenrol_interview[".viewFields"][] = "g7_g";
$tdataenrol_interview[".viewFields"][] = "g8_s";
$tdataenrol_interview[".viewFields"][] = "g8_g";
$tdataenrol_interview[".viewFields"][] = "g9_s";
$tdataenrol_interview[".viewFields"][] = "g9_g";
$tdataenrol_interview[".viewFields"][] = "g10_s";
$tdataenrol_interview[".viewFields"][] = "g10_g";
$tdataenrol_interview[".viewFields"][] = "g11_s";
$tdataenrol_interview[".viewFields"][] = "g11_g";
$tdataenrol_interview[".viewFields"][] = "o_english";
$tdataenrol_interview[".viewFields"][] = "oq_highest";
$tdataenrol_interview[".viewFields"][] = "oq_major";
$tdataenrol_interview[".viewFields"][] = "oq_u";
$tdataenrol_interview[".viewFields"][] = "oq_cgpa";
$tdataenrol_interview[".viewFields"][] = "at_ic";
$tdataenrol_interview[".viewFields"][] = "at_coco";
$tdataenrol_interview[".viewFields"][] = "at_dob";
$tdataenrol_interview[".viewFields"][] = "at_fama";
$tdataenrol_interview[".viewFields"][] = "at_spm";
$tdataenrol_interview[".viewFields"][] = "at_famaic";
$tdataenrol_interview[".viewFields"][] = "at_slc";
$tdataenrol_interview[".viewFields"][] = "at_trans";
$tdataenrol_interview[".viewFields"][] = "at_photo";

$tdataenrol_interview[".addFields"] = array();

$tdataenrol_interview[".inlineAddFields"] = array();

$tdataenrol_interview[".editFields"] = array();
$tdataenrol_interview[".editFields"][] = "DipID";
$tdataenrol_interview[".editFields"][] = "Date_Apply";
$tdataenrol_interview[".editFields"][] = "finance";
$tdataenrol_interview[".editFields"][] = "Status";
$tdataenrol_interview[".editFields"][] = "Name";
$tdataenrol_interview[".editFields"][] = "ICNO";
$tdataenrol_interview[".editFields"][] = "Passport";
$tdataenrol_interview[".editFields"][] = "DOB";
$tdataenrol_interview[".editFields"][] = "Nationality";
$tdataenrol_interview[".editFields"][] = "Gender";
$tdataenrol_interview[".editFields"][] = "race";
$tdataenrol_interview[".editFields"][] = "Religion";
$tdataenrol_interview[".editFields"][] = "married";
$tdataenrol_interview[".editFields"][] = "Address1";
$tdataenrol_interview[".editFields"][] = "Postcode";
$tdataenrol_interview[".editFields"][] = "City";
$tdataenrol_interview[".editFields"][] = "StateID";
$tdataenrol_interview[".editFields"][] = "Country";
$tdataenrol_interview[".editFields"][] = "MobileTelephone";
$tdataenrol_interview[".editFields"][] = "HomeTelephone";
$tdataenrol_interview[".editFields"][] = "Email";
$tdataenrol_interview[".editFields"][] = "f1_name";
$tdataenrol_interview[".editFields"][] = "f1_tel";
$tdataenrol_interview[".editFields"][] = "f1_relation";
$tdataenrol_interview[".editFields"][] = "f1_job";
$tdataenrol_interview[".editFields"][] = "f2_name";
$tdataenrol_interview[".editFields"][] = "f2_tel";
$tdataenrol_interview[".editFields"][] = "f2_relation";
$tdataenrol_interview[".editFields"][] = "f2_job";
$tdataenrol_interview[".editFields"][] = "blood";
$tdataenrol_interview[".editFields"][] = "Disability";
$tdataenrol_interview[".editFields"][] = "MedicalCondition";
$tdataenrol_interview[".editFields"][] = "qua_level";
$tdataenrol_interview[".editFields"][] = "qua_year";
$tdataenrol_interview[".editFields"][] = "q1_s";
$tdataenrol_interview[".editFields"][] = "q1_g";
$tdataenrol_interview[".editFields"][] = "q2_s";
$tdataenrol_interview[".editFields"][] = "q2_g";
$tdataenrol_interview[".editFields"][] = "q3_s";
$tdataenrol_interview[".editFields"][] = "q3_g";
$tdataenrol_interview[".editFields"][] = "q4_s";
$tdataenrol_interview[".editFields"][] = "q4_g";
$tdataenrol_interview[".editFields"][] = "g5_s";
$tdataenrol_interview[".editFields"][] = "g5_g";
$tdataenrol_interview[".editFields"][] = "g6_s";
$tdataenrol_interview[".editFields"][] = "g6_g";
$tdataenrol_interview[".editFields"][] = "g7_s";
$tdataenrol_interview[".editFields"][] = "g7_g";
$tdataenrol_interview[".editFields"][] = "g8_s";
$tdataenrol_interview[".editFields"][] = "g8_g";
$tdataenrol_interview[".editFields"][] = "g9_s";
$tdataenrol_interview[".editFields"][] = "g9_g";
$tdataenrol_interview[".editFields"][] = "g10_s";
$tdataenrol_interview[".editFields"][] = "g10_g";
$tdataenrol_interview[".editFields"][] = "g11_s";
$tdataenrol_interview[".editFields"][] = "g11_g";
$tdataenrol_interview[".editFields"][] = "o_english";
$tdataenrol_interview[".editFields"][] = "oq_highest";
$tdataenrol_interview[".editFields"][] = "oq_major";
$tdataenrol_interview[".editFields"][] = "oq_u";
$tdataenrol_interview[".editFields"][] = "oq_cgpa";
$tdataenrol_interview[".editFields"][] = "at_ic";
$tdataenrol_interview[".editFields"][] = "at_coco";
$tdataenrol_interview[".editFields"][] = "at_dob";
$tdataenrol_interview[".editFields"][] = "at_fama";
$tdataenrol_interview[".editFields"][] = "at_spm";
$tdataenrol_interview[".editFields"][] = "at_famaic";
$tdataenrol_interview[".editFields"][] = "at_slc";
$tdataenrol_interview[".editFields"][] = "at_trans";
$tdataenrol_interview[".editFields"][] = "at_photo";

$tdataenrol_interview[".inlineEditFields"] = array();

$tdataenrol_interview[".exportFields"] = array();
$tdataenrol_interview[".exportFields"][] = "DipID";
$tdataenrol_interview[".exportFields"][] = "Date_Apply";
$tdataenrol_interview[".exportFields"][] = "Status";
$tdataenrol_interview[".exportFields"][] = "Name";
$tdataenrol_interview[".exportFields"][] = "ICNO";
$tdataenrol_interview[".exportFields"][] = "Passport";
$tdataenrol_interview[".exportFields"][] = "DOB";
$tdataenrol_interview[".exportFields"][] = "Nationality";
$tdataenrol_interview[".exportFields"][] = "Gender";
$tdataenrol_interview[".exportFields"][] = "race";
$tdataenrol_interview[".exportFields"][] = "Religion";
$tdataenrol_interview[".exportFields"][] = "married";
$tdataenrol_interview[".exportFields"][] = "finance";
$tdataenrol_interview[".exportFields"][] = "Address1";
$tdataenrol_interview[".exportFields"][] = "Postcode";
$tdataenrol_interview[".exportFields"][] = "City";
$tdataenrol_interview[".exportFields"][] = "StateID";
$tdataenrol_interview[".exportFields"][] = "Country";
$tdataenrol_interview[".exportFields"][] = "HomeTelephone";
$tdataenrol_interview[".exportFields"][] = "MobileTelephone";
$tdataenrol_interview[".exportFields"][] = "Email";
$tdataenrol_interview[".exportFields"][] = "f1_name";
$tdataenrol_interview[".exportFields"][] = "f1_tel";
$tdataenrol_interview[".exportFields"][] = "f1_relation";
$tdataenrol_interview[".exportFields"][] = "f2_name";
$tdataenrol_interview[".exportFields"][] = "f2_tel";
$tdataenrol_interview[".exportFields"][] = "f2_relation";
$tdataenrol_interview[".exportFields"][] = "blood";
$tdataenrol_interview[".exportFields"][] = "Disability";
$tdataenrol_interview[".exportFields"][] = "MedicalCondition";
$tdataenrol_interview[".exportFields"][] = "qua_level";
$tdataenrol_interview[".exportFields"][] = "qua_year";
$tdataenrol_interview[".exportFields"][] = "q1_s";
$tdataenrol_interview[".exportFields"][] = "q1_g";
$tdataenrol_interview[".exportFields"][] = "q2_s";
$tdataenrol_interview[".exportFields"][] = "q2_g";
$tdataenrol_interview[".exportFields"][] = "q3_s";
$tdataenrol_interview[".exportFields"][] = "q3_g";
$tdataenrol_interview[".exportFields"][] = "q4_s";
$tdataenrol_interview[".exportFields"][] = "q4_g";
$tdataenrol_interview[".exportFields"][] = "g5_s";
$tdataenrol_interview[".exportFields"][] = "g5_g";
$tdataenrol_interview[".exportFields"][] = "g6_s";
$tdataenrol_interview[".exportFields"][] = "g6_g";
$tdataenrol_interview[".exportFields"][] = "g7_s";
$tdataenrol_interview[".exportFields"][] = "g7_g";
$tdataenrol_interview[".exportFields"][] = "g8_s";
$tdataenrol_interview[".exportFields"][] = "g8_g";
$tdataenrol_interview[".exportFields"][] = "g9_s";
$tdataenrol_interview[".exportFields"][] = "g9_g";
$tdataenrol_interview[".exportFields"][] = "g10_s";
$tdataenrol_interview[".exportFields"][] = "g10_g";
$tdataenrol_interview[".exportFields"][] = "g11_s";
$tdataenrol_interview[".exportFields"][] = "g11_g";
$tdataenrol_interview[".exportFields"][] = "o_english";
$tdataenrol_interview[".exportFields"][] = "oq_highest";
$tdataenrol_interview[".exportFields"][] = "oq_major";
$tdataenrol_interview[".exportFields"][] = "oq_u";
$tdataenrol_interview[".exportFields"][] = "oq_cgpa";

$tdataenrol_interview[".printFields"] = array();

//	Detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Detail";
	$fdata["GoodName"] = "Detail";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Detail"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "enrolID"; 
		$fdata["FullName"] = "enrolID";
	
		
		
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
	
		
		
	$tdataenrol_interview["Detail"] = $fdata;
//	enrolID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "enrolID";
	$fdata["GoodName"] = "enrolID";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Enrol ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "enrolID"; 
		$fdata["FullName"] = "enrolID";
	
		
		
				
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["enrolID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "Name";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
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
			$edata["EditParams"].= " maxlength=150";
	
		$edata["inputStyle"] = " width:248px;";
	$edata["controlWidth"] = 248;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";
	
		$edata["inputStyle"] = " width:248px;";
	$edata["controlWidth"] = 248;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";
	
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdataenrol_interview["Name"] = $fdata;
//	ICNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ICNO";
	$fdata["GoodName"] = "ICNO";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "IC NO"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ICNO"; 
		$fdata["FullName"] = "ICNO";
	
		
		
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
			$edata["EditParams"].= " maxlength=12";
	
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["ICNO"] = $fdata;
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Date Of Birth"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DOB"; 
		$fdata["FullName"] = "DOB";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 25; 
	$edata["LastYearFactor"] = -12; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["DOB"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Email"; 
		$fdata["FullName"] = "Email";
	
		
		
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
			$edata["EditParams"].= " maxlength=222";
	
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["Email"] = $fdata;
//	BranchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "BranchID";
	$fdata["GoodName"] = "BranchID";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Branch"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "BranchID"; 
		$fdata["FullName"] = "BranchID";
	
		
		
				
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["BranchID"] = $fdata;
//	Date_Apply
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Date_Apply";
	$fdata["GoodName"] = "Date_Apply";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Date Applied/Key-In"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Date_Apply"; 
		$fdata["FullName"] = "Date_Apply";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
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
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdataenrol_interview["Date_Apply"] = $fdata;
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Gender"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Gender"; 
		$fdata["FullName"] = "Gender";
	
		
		
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
	
		
		
	$tdataenrol_interview["Gender"] = $fdata;
//	married
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "married";
	$fdata["GoodName"] = "married";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Marital Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
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
	
		
		
	$tdataenrol_interview["married"] = $fdata;
//	Address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Address1";
	$fdata["GoodName"] = "Address1";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Resident Address"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Address1"; 
		$fdata["FullName"] = "Address1";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 33;
			$edata["nCols"] = 217;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["Address1"] = $fdata;
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "City"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "City"; 
		$fdata["FullName"] = "City";
	
		
		
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
	
		
		
	$tdataenrol_interview["City"] = $fdata;
//	Postcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Postcode";
	$fdata["GoodName"] = "Postcode";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Postcode"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Postcode"; 
		$fdata["FullName"] = "Postcode";
	
		
		
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
	
		$edata["inputStyle"] = " width:87px;";
	$edata["controlWidth"] = 87;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["Postcode"] = $fdata;
//	StateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "StateID";
	$fdata["GoodName"] = "StateID";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "State"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StateID"; 
		$fdata["FullName"] = "StateID";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=1";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["StateID"] = $fdata;
//	HomeTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "HomeTelephone";
	$fdata["GoodName"] = "HomeTelephone";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Telephone 2"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "HomeTelephone"; 
		$fdata["FullName"] = "HomeTelephone";
	
		
		
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
			$edata["EditParams"].= " maxlength=14";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["HomeTelephone"] = $fdata;
//	MobileTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "MobileTelephone";
	$fdata["GoodName"] = "MobileTelephone";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Telephone 1"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MobileTelephone"; 
		$fdata["FullName"] = "MobileTelephone";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=14";
	
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["MobileTelephone"] = $fdata;
//	Nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Nationality";
	$fdata["GoodName"] = "Nationality";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Nationality"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nationality"; 
		$fdata["FullName"] = "Nationality";
	
		
		
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
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "ccode";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "country";
	
		
	$edata["LookupTable"] = "countries";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
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
	
		
		
	$tdataenrol_interview["Nationality"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Program"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
				
		
			
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=42";
	
		
		
		
				
	
	
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
	
		
		
	$tdataenrol_interview["DipID"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Status"; 
		$fdata["FullName"] = "Status";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
			
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Interview";
	$edata["LookupValues"][] = "Accepted";
	$edata["LookupValues"][] = "Rejected";
	$edata["LookupValues"][] = "Unprocessed";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["Status"] = $fdata;
//	Disability
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Disability";
	$fdata["GoodName"] = "Disability";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Disability"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Disability"; 
		$fdata["FullName"] = "Disability";
	
		
		
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
	
		
		
	$tdataenrol_interview["Disability"] = $fdata;
//	MedicalCondition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "MedicalCondition";
	$fdata["GoodName"] = "MedicalCondition";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Serious Medical Condition"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MedicalCondition"; 
		$fdata["FullName"] = "MedicalCondition";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 79;
			$edata["nCols"] = 222;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["MedicalCondition"] = $fdata;
//	race
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "race";
	$fdata["GoodName"] = "race";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Race"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "race"; 
		$fdata["FullName"] = "race";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=3";
	
		
		
		
				
	
	
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
	
		
		
	$tdataenrol_interview["race"] = $fdata;
//	Religion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Religion";
	$fdata["GoodName"] = "Religion";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Religion"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Religion"; 
		$fdata["FullName"] = "Religion";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=4";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["Religion"] = $fdata;
//	f1_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "f1_name";
	$fdata["GoodName"] = "f1_name";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "#1 Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:285px;";
	$edata["controlWidth"] = 285;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["f1_name"] = $fdata;
//	f1_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "f1_tel";
	$fdata["GoodName"] = "f1_tel";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["f1_tel"] = $fdata;
//	f1_relation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "f1_relation";
	$fdata["GoodName"] = "f1_relation";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Relationship"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
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
	
		
		$edata["LookupWhere"] = "Class=9";
	
		
		
		
				
	
	
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
	
		
		
	$tdataenrol_interview["f1_relation"] = $fdata;
//	f2_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "f2_name";
	$fdata["GoodName"] = "f2_name";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "#2 Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:289px;";
	$edata["controlWidth"] = 289;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["f2_name"] = $fdata;
//	f2_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "f2_tel";
	$fdata["GoodName"] = "f2_tel";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["f2_tel"] = $fdata;
//	f2_relation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "f2_relation";
	$fdata["GoodName"] = "f2_relation";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Relationship"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
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
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=9";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["f2_relation"] = $fdata;
//	blood
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "blood";
	$fdata["GoodName"] = "blood";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Blood"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
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
	
		
		
	$tdataenrol_interview["blood"] = $fdata;
//	qua_level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "qua_level";
	$fdata["GoodName"] = "qua_level";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Qualification Level"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qua_level"; 
		$fdata["FullName"] = "qua_level";
	
		
		
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
	
		
		$edata["LookupWhere"] = "class=8";
	
		
		
		
				
	
	
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
	
		
		
	$tdataenrol_interview["qua_level"] = $fdata;
//	q1_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "q1_s";
	$fdata["GoodName"] = "q1_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 1"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "q1_s"; 
		$fdata["FullName"] = "q1_s";
	
		
		
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
			
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["q1_s"] = $fdata;
//	q1_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "q1_g";
	$fdata["GoodName"] = "q1_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 1 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "q1_g"; 
		$fdata["FullName"] = "q1_g";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["q1_g"] = $fdata;
//	q2_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "q2_s";
	$fdata["GoodName"] = "q2_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 2 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "q2_s"; 
		$fdata["FullName"] = "q2_s";
	
		
		
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
			
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["q2_s"] = $fdata;
//	q2_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "q2_g";
	$fdata["GoodName"] = "q2_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 2 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "q2_g"; 
		$fdata["FullName"] = "q2_g";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["q2_g"] = $fdata;
//	q3_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "q3_s";
	$fdata["GoodName"] = "q3_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 3 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "q3_s"; 
		$fdata["FullName"] = "q3_s";
	
		
		
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
			
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["q3_s"] = $fdata;
//	q3_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "q3_g";
	$fdata["GoodName"] = "q3_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 3 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "q3_g"; 
		$fdata["FullName"] = "q3_g";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["q3_g"] = $fdata;
//	q4_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "q4_s";
	$fdata["GoodName"] = "q4_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 4 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "q4_s"; 
		$fdata["FullName"] = "q4_s";
	
		
		
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
	$edata["freeInput"] = 1;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=11";
	
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:154px;";
	$edata["controlWidth"] = 154;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["q4_s"] = $fdata;
//	q4_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "q4_g";
	$fdata["GoodName"] = "q4_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 4 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "q4_g"; 
		$fdata["FullName"] = "q4_g";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["q4_g"] = $fdata;
//	g5_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "g5_s";
	$fdata["GoodName"] = "g5_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 5 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g5_s"; 
		$fdata["FullName"] = "g5_s";
	
		
		
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
	$edata["freeInput"] = 1;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=11";
	
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:154px;";
	$edata["controlWidth"] = 154;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g5_s"] = $fdata;
//	g5_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "g5_g";
	$fdata["GoodName"] = "g5_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 5 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g5_g"; 
		$fdata["FullName"] = "g5_g";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g5_g"] = $fdata;
//	g6_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "g6_s";
	$fdata["GoodName"] = "g6_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 6 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g6_s"; 
		$fdata["FullName"] = "g6_s";
	
		
		
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
	$edata["freeInput"] = 1;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=11";
	
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:154px;";
	$edata["controlWidth"] = 154;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g6_s"] = $fdata;
//	g6_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "g6_g";
	$fdata["GoodName"] = "g6_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 6 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g6_g"; 
		$fdata["FullName"] = "g6_g";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g6_g"] = $fdata;
//	g7_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "g7_s";
	$fdata["GoodName"] = "g7_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 7 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g7_s"; 
		$fdata["FullName"] = "g7_s";
	
		
		
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
	$edata["freeInput"] = 1;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=11";
	
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:154px;";
	$edata["controlWidth"] = 154;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g7_s"] = $fdata;
//	g7_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "g7_g";
	$fdata["GoodName"] = "g7_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 7 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g7_g"; 
		$fdata["FullName"] = "g7_g";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g7_g"] = $fdata;
//	g8_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "g8_s";
	$fdata["GoodName"] = "g8_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 8 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g8_s"; 
		$fdata["FullName"] = "g8_s";
	
		
		
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
			
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g8_s"] = $fdata;
//	g8_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "g8_g";
	$fdata["GoodName"] = "g8_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 8 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g8_g"; 
		$fdata["FullName"] = "g8_g";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g8_g"] = $fdata;
//	g9_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "g9_s";
	$fdata["GoodName"] = "g9_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 9 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g9_s"; 
		$fdata["FullName"] = "g9_s";
	
		
		
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
			
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g9_s"] = $fdata;
//	g9_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "g9_g";
	$fdata["GoodName"] = "g9_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 9 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g9_g"; 
		$fdata["FullName"] = "g9_g";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g9_g"] = $fdata;
//	oq_highest
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "oq_highest";
	$fdata["GoodName"] = "oq_highest";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Highest Qualification / Professional Licensed"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "oq_highest"; 
		$fdata["FullName"] = "oq_highest";
	
		
		
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
	
		
		
	$tdataenrol_interview["oq_highest"] = $fdata;
//	oq_major
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "oq_major";
	$fdata["GoodName"] = "oq_major";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Major / Specialization"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "oq_major"; 
		$fdata["FullName"] = "oq_major";
	
		
		
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
	
		
		
	$tdataenrol_interview["oq_major"] = $fdata;
//	oq_u
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "oq_u";
	$fdata["GoodName"] = "oq_u";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "University / Institute"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "oq_u"; 
		$fdata["FullName"] = "oq_u";
	
		
		
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
	
		
		
	$tdataenrol_interview["oq_u"] = $fdata;
//	oq_cgpa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "oq_cgpa";
	$fdata["GoodName"] = "oq_cgpa";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "CGPA"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "oq_cgpa"; 
		$fdata["FullName"] = "oq_cgpa";
	
		
		
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
			
		$edata["inputStyle"] = " width:84px;";
	$edata["controlWidth"] = 84;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["oq_cgpa"] = $fdata;
//	at_ic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "at_ic";
	$fdata["GoodName"] = "at_ic";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Certified true copy of Identity Card (NRIC)/Passport"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "at_ic"; 
		$fdata["FullName"] = "at_ic";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
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
	
		$edata["maxFileSize"] = 1000;
	
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 200;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;
	
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["at_ic"] = $fdata;
//	at_dob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "at_dob";
	$fdata["GoodName"] = "at_dob";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Certified true copy of Birth Certificate"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "at_dob"; 
		$fdata["FullName"] = "at_dob";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
							$vdata["ShowCustomExpr"] = true; 
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 1000;
	
		
		
		
		
		$edata["inputStyle"] = " width:100px;";
	$edata["controlWidth"] = 100;
	
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
	
		
		
	$tdataenrol_interview["at_dob"] = $fdata;
//	at_spm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "at_spm";
	$fdata["GoodName"] = "at_spm";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Certified true copy of SPM /SPMV/’O’ Level Certificate or result slip"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "at_spm"; 
		$fdata["FullName"] = "at_spm";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
							$vdata["ShowCustomExpr"] = true; 
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 1000;
	
		
		
		
		
		
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
	
		
		
	$tdataenrol_interview["at_spm"] = $fdata;
//	at_slc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "at_slc";
	$fdata["GoodName"] = "at_slc";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Certified true copy of School Leaving Certificate"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "at_slc"; 
		$fdata["FullName"] = "at_slc";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
							$vdata["ShowCustomExpr"] = true; 
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 1000;
	
		
		
		
		
		
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
	
		
		
	$tdataenrol_interview["at_slc"] = $fdata;
//	at_coco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "at_coco";
	$fdata["GoodName"] = "at_coco";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Certified true copy of Co-Curriculum Certificate"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "at_coco"; 
		$fdata["FullName"] = "at_coco";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
							$vdata["ShowCustomExpr"] = true; 
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 1000;
	
		
		
		
		
		
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
	
		
		
	$tdataenrol_interview["at_coco"] = $fdata;
//	at_fama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "at_fama";
	$fdata["GoodName"] = "at_fama";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Certified true copy of parents/guardian’sIdentity Card (NRIC)"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "at_fama"; 
		$fdata["FullName"] = "at_fama";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
							$vdata["ShowCustomExpr"] = true; 
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 1000;
	
		
		
		
		
		
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
	
		
		
	$tdataenrol_interview["at_fama"] = $fdata;
//	at_famaic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "at_famaic";
	$fdata["GoodName"] = "at_famaic";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Certified true copy of parents Birth Certificate"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "at_famaic"; 
		$fdata["FullName"] = "at_famaic";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
							$vdata["ShowCustomExpr"] = true; 
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 1000;
	
		
		
		
		
		
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
	
		
		
	$tdataenrol_interview["at_famaic"] = $fdata;
//	at_trans
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "at_trans";
	$fdata["GoodName"] = "at_trans";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Certified true copy of Certificate/Diploma/Degree with transcript/result slip of every semester"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "at_trans"; 
		$fdata["FullName"] = "at_trans";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
							$vdata["ShowCustomExpr"] = true; 
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 1000;
	
		
		
		
		
		
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
	
		
		
	$tdataenrol_interview["at_trans"] = $fdata;
//	at_photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "at_photo";
	$fdata["GoodName"] = "at_photo";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "ONE(1) passportsize photographs"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "at_photo"; 
		$fdata["FullName"] = "at_photo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
							$vdata["ShowCustomExpr"] = true; 
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		$edata["maxFileSize"] = 1000;
	
		
		
		
		
		
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
	
		
		
	$tdataenrol_interview["at_photo"] = $fdata;
//	Passport
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Passport";
	$fdata["GoodName"] = "Passport";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Passport"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Passport"; 
		$fdata["FullName"] = "Passport";
	
		
		
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
	
		
		
	$tdataenrol_interview["Passport"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Country"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Country"; 
		$fdata["FullName"] = "Country";
	
		
		
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
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "country";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "country";
	
		
	$edata["LookupTable"] = "countries";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
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
	
		
		
	$tdataenrol_interview["Country"] = $fdata;
//	g10_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "g10_s";
	$fdata["GoodName"] = "g10_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 10 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g10_s"; 
		$fdata["FullName"] = "g10_s";
	
		
		
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
			
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g10_s"] = $fdata;
//	g10_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "g10_g";
	$fdata["GoodName"] = "g10_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 10 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g10_g"; 
		$fdata["FullName"] = "g10_g";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g10_g"] = $fdata;
//	g11_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "g11_s";
	$fdata["GoodName"] = "g11_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 11 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g11_s"; 
		$fdata["FullName"] = "g11_s";
	
		
		
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
			
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g11_s"] = $fdata;
//	g11_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "g11_g";
	$fdata["GoodName"] = "g11_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 11 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "g11_g"; 
		$fdata["FullName"] = "g11_g";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["g11_g"] = $fdata;
//	o_english
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "o_english";
	$fdata["GoodName"] = "o_english";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "IETLS/ TOEFL/ MUET"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "o_english"; 
		$fdata["FullName"] = "o_english";
	
		
		
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
	
		
		
	$tdataenrol_interview["o_english"] = $fdata;
//	qua_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "qua_year";
	$fdata["GoodName"] = "qua_year";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Qualification Year"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qua_year"; 
		$fdata["FullName"] = "qua_year";
	
		
		
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
			$edata["EditParams"].= " maxlength=4";
	
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["qua_year"] = $fdata;
//	f1_job
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "f1_job";
	$fdata["GoodName"] = "f1_job";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Occupation"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "f1_job"; 
		$fdata["FullName"] = "f1_job";
	
		
		
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
	
		
		
	$tdataenrol_interview["f1_job"] = $fdata;
//	f2_job
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "f2_job";
	$fdata["GoodName"] = "f2_job";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Occupation"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "f2_job"; 
		$fdata["FullName"] = "f2_job";
	
		
		
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
	
		
		
	$tdataenrol_interview["f2_job"] = $fdata;
//	finance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "finance";
	$fdata["GoodName"] = "finance";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Financial Aid"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "finance"; 
		$fdata["FullName"] = "finance";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=16";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenrol_interview["finance"] = $fdata;

	
$tables_data["enrol_interview"]=&$tdataenrol_interview;
$field_labels["enrol_interview"] = &$fieldLabelsenrol_interview;
$fieldToolTips["enrol_interview"] = &$fieldToolTipsenrol_interview;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["enrol_interview"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["enrol_interview"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_enrol_interview()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "enrolID AS Detail,  enrolID,  Name,  ICNO,  DOB,  Email,  BranchID,  Date_Apply,  Gender,  married,  Address1,  City,  Postcode,  StateID,  HomeTelephone,  MobileTelephone,  Nationality,  DipID,  Status,  Disability,  MedicalCondition,  race,  Religion,  f1_name,  f1_tel,  f1_relation,  f2_name,  f2_tel,  f2_relation,  blood,  qua_level,  q1_s,  q1_g,  q2_s,  q2_g,  q3_s,  q3_g,  q4_s,  q4_g,  g5_s,  g5_g,  g6_s,  g6_g,  g7_s,  g7_g,  g8_s,  g8_g,  g9_s,  g9_g,  oq_highest,  oq_major,  oq_u,  oq_cgpa,  at_ic,  at_dob,  at_spm,  at_slc,  at_coco,  at_fama,  at_famaic,  at_trans,  at_photo,  Passport,  Country,  g10_s,  g10_g,  g11_s,  g11_g,  o_english,  qua_year,  f1_job,  f2_job,  finance";
$proto0["m_strFrom"] = "FROM enroll";
$proto0["m_strWhere"] = "Status='Interview'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "Status='Interview'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "enroll"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "='Interview'";
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
	"m_strName" => "enrolID",
	"m_strTable" => "enroll"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Detail";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "enrolID",
	"m_strTable" => "enroll"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "enroll"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ICNO",
	"m_strTable" => "enroll"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "enroll"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "enroll"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "BranchID",
	"m_strTable" => "enroll"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Date_Apply",
	"m_strTable" => "enroll"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "enroll"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "married",
	"m_strTable" => "enroll"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Address1",
	"m_strTable" => "enroll"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "enroll"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Postcode",
	"m_strTable" => "enroll"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "StateID",
	"m_strTable" => "enroll"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "HomeTelephone",
	"m_strTable" => "enroll"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "MobileTelephone",
	"m_strTable" => "enroll"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Nationality",
	"m_strTable" => "enroll"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "enroll"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "enroll"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability",
	"m_strTable" => "enroll"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "MedicalCondition",
	"m_strTable" => "enroll"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "race",
	"m_strTable" => "enroll"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "Religion",
	"m_strTable" => "enroll"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_name",
	"m_strTable" => "enroll"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_tel",
	"m_strTable" => "enroll"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_relation",
	"m_strTable" => "enroll"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_name",
	"m_strTable" => "enroll"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_tel",
	"m_strTable" => "enroll"
));

$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_relation",
	"m_strTable" => "enroll"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "blood",
	"m_strTable" => "enroll"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "qua_level",
	"m_strTable" => "enroll"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "q1_s",
	"m_strTable" => "enroll"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "q1_g",
	"m_strTable" => "enroll"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "q2_s",
	"m_strTable" => "enroll"
));

$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "q2_g",
	"m_strTable" => "enroll"
));

$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "q3_s",
	"m_strTable" => "enroll"
));

$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "q3_g",
	"m_strTable" => "enroll"
));

$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "q4_s",
	"m_strTable" => "enroll"
));

$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "q4_g",
	"m_strTable" => "enroll"
));

$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "g5_s",
	"m_strTable" => "enroll"
));

$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "g5_g",
	"m_strTable" => "enroll"
));

$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "g6_s",
	"m_strTable" => "enroll"
));

$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "g6_g",
	"m_strTable" => "enroll"
));

$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "g7_s",
	"m_strTable" => "enroll"
));

$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "g7_g",
	"m_strTable" => "enroll"
));

$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "g8_s",
	"m_strTable" => "enroll"
));

$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "g8_g",
	"m_strTable" => "enroll"
));

$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "g9_s",
	"m_strTable" => "enroll"
));

$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "g9_g",
	"m_strTable" => "enroll"
));

$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "oq_highest",
	"m_strTable" => "enroll"
));

$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "oq_major",
	"m_strTable" => "enroll"
));

$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLField(array(
	"m_strName" => "oq_u",
	"m_strTable" => "enroll"
));

$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "oq_cgpa",
	"m_strTable" => "enroll"
));

$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLField(array(
	"m_strName" => "at_ic",
	"m_strTable" => "enroll"
));

$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "";
$obj = new SQLFieldListItem($proto111);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLField(array(
	"m_strName" => "at_dob",
	"m_strTable" => "enroll"
));

$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
						$proto115=array();
			$obj = new SQLField(array(
	"m_strName" => "at_spm",
	"m_strTable" => "enroll"
));

$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "";
$obj = new SQLFieldListItem($proto115);

$proto0["m_fieldlist"][]=$obj;
						$proto117=array();
			$obj = new SQLField(array(
	"m_strName" => "at_slc",
	"m_strTable" => "enroll"
));

$proto117["m_expr"]=$obj;
$proto117["m_alias"] = "";
$obj = new SQLFieldListItem($proto117);

$proto0["m_fieldlist"][]=$obj;
						$proto119=array();
			$obj = new SQLField(array(
	"m_strName" => "at_coco",
	"m_strTable" => "enroll"
));

$proto119["m_expr"]=$obj;
$proto119["m_alias"] = "";
$obj = new SQLFieldListItem($proto119);

$proto0["m_fieldlist"][]=$obj;
						$proto121=array();
			$obj = new SQLField(array(
	"m_strName" => "at_fama",
	"m_strTable" => "enroll"
));

$proto121["m_expr"]=$obj;
$proto121["m_alias"] = "";
$obj = new SQLFieldListItem($proto121);

$proto0["m_fieldlist"][]=$obj;
						$proto123=array();
			$obj = new SQLField(array(
	"m_strName" => "at_famaic",
	"m_strTable" => "enroll"
));

$proto123["m_expr"]=$obj;
$proto123["m_alias"] = "";
$obj = new SQLFieldListItem($proto123);

$proto0["m_fieldlist"][]=$obj;
						$proto125=array();
			$obj = new SQLField(array(
	"m_strName" => "at_trans",
	"m_strTable" => "enroll"
));

$proto125["m_expr"]=$obj;
$proto125["m_alias"] = "";
$obj = new SQLFieldListItem($proto125);

$proto0["m_fieldlist"][]=$obj;
						$proto127=array();
			$obj = new SQLField(array(
	"m_strName" => "at_photo",
	"m_strTable" => "enroll"
));

$proto127["m_expr"]=$obj;
$proto127["m_alias"] = "";
$obj = new SQLFieldListItem($proto127);

$proto0["m_fieldlist"][]=$obj;
						$proto129=array();
			$obj = new SQLField(array(
	"m_strName" => "Passport",
	"m_strTable" => "enroll"
));

$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "";
$obj = new SQLFieldListItem($proto129);

$proto0["m_fieldlist"][]=$obj;
						$proto131=array();
			$obj = new SQLField(array(
	"m_strName" => "Country",
	"m_strTable" => "enroll"
));

$proto131["m_expr"]=$obj;
$proto131["m_alias"] = "";
$obj = new SQLFieldListItem($proto131);

$proto0["m_fieldlist"][]=$obj;
						$proto133=array();
			$obj = new SQLField(array(
	"m_strName" => "g10_s",
	"m_strTable" => "enroll"
));

$proto133["m_expr"]=$obj;
$proto133["m_alias"] = "";
$obj = new SQLFieldListItem($proto133);

$proto0["m_fieldlist"][]=$obj;
						$proto135=array();
			$obj = new SQLField(array(
	"m_strName" => "g10_g",
	"m_strTable" => "enroll"
));

$proto135["m_expr"]=$obj;
$proto135["m_alias"] = "";
$obj = new SQLFieldListItem($proto135);

$proto0["m_fieldlist"][]=$obj;
						$proto137=array();
			$obj = new SQLField(array(
	"m_strName" => "g11_s",
	"m_strTable" => "enroll"
));

$proto137["m_expr"]=$obj;
$proto137["m_alias"] = "";
$obj = new SQLFieldListItem($proto137);

$proto0["m_fieldlist"][]=$obj;
						$proto139=array();
			$obj = new SQLField(array(
	"m_strName" => "g11_g",
	"m_strTable" => "enroll"
));

$proto139["m_expr"]=$obj;
$proto139["m_alias"] = "";
$obj = new SQLFieldListItem($proto139);

$proto0["m_fieldlist"][]=$obj;
						$proto141=array();
			$obj = new SQLField(array(
	"m_strName" => "o_english",
	"m_strTable" => "enroll"
));

$proto141["m_expr"]=$obj;
$proto141["m_alias"] = "";
$obj = new SQLFieldListItem($proto141);

$proto0["m_fieldlist"][]=$obj;
						$proto143=array();
			$obj = new SQLField(array(
	"m_strName" => "qua_year",
	"m_strTable" => "enroll"
));

$proto143["m_expr"]=$obj;
$proto143["m_alias"] = "";
$obj = new SQLFieldListItem($proto143);

$proto0["m_fieldlist"][]=$obj;
						$proto145=array();
			$obj = new SQLField(array(
	"m_strName" => "f1_job",
	"m_strTable" => "enroll"
));

$proto145["m_expr"]=$obj;
$proto145["m_alias"] = "";
$obj = new SQLFieldListItem($proto145);

$proto0["m_fieldlist"][]=$obj;
						$proto147=array();
			$obj = new SQLField(array(
	"m_strName" => "f2_job",
	"m_strTable" => "enroll"
));

$proto147["m_expr"]=$obj;
$proto147["m_alias"] = "";
$obj = new SQLFieldListItem($proto147);

$proto0["m_fieldlist"][]=$obj;
						$proto149=array();
			$obj = new SQLField(array(
	"m_strName" => "finance",
	"m_strTable" => "enroll"
));

$proto149["m_expr"]=$obj;
$proto149["m_alias"] = "";
$obj = new SQLFieldListItem($proto149);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto151=array();
$proto151["m_link"] = "SQLL_MAIN";
			$proto152=array();
$proto152["m_strName"] = "enroll";
$proto152["m_columns"] = array();
$proto152["m_columns"][] = "enrolID";
$proto152["m_columns"][] = "Name";
$proto152["m_columns"][] = "ICNO";
$proto152["m_columns"][] = "DOB";
$proto152["m_columns"][] = "Email";
$proto152["m_columns"][] = "BranchID";
$proto152["m_columns"][] = "Date_Apply";
$proto152["m_columns"][] = "Gender";
$proto152["m_columns"][] = "married";
$proto152["m_columns"][] = "Address1";
$proto152["m_columns"][] = "City";
$proto152["m_columns"][] = "Postcode";
$proto152["m_columns"][] = "StateID";
$proto152["m_columns"][] = "Country";
$proto152["m_columns"][] = "HomeTelephone";
$proto152["m_columns"][] = "MobileTelephone";
$proto152["m_columns"][] = "Nationality";
$proto152["m_columns"][] = "Passport";
$proto152["m_columns"][] = "DipID";
$proto152["m_columns"][] = "Status";
$proto152["m_columns"][] = "Colorblind";
$proto152["m_columns"][] = "Disability";
$proto152["m_columns"][] = "MedicalCondition";
$proto152["m_columns"][] = "race";
$proto152["m_columns"][] = "Religion";
$proto152["m_columns"][] = "f1_name";
$proto152["m_columns"][] = "f1_tel";
$proto152["m_columns"][] = "f1_relation";
$proto152["m_columns"][] = "f1_job";
$proto152["m_columns"][] = "f2_name";
$proto152["m_columns"][] = "f2_tel";
$proto152["m_columns"][] = "f2_relation";
$proto152["m_columns"][] = "f2_job";
$proto152["m_columns"][] = "blood";
$proto152["m_columns"][] = "qua_level";
$proto152["m_columns"][] = "qua_year";
$proto152["m_columns"][] = "q1_s";
$proto152["m_columns"][] = "q1_g";
$proto152["m_columns"][] = "q2_s";
$proto152["m_columns"][] = "q2_g";
$proto152["m_columns"][] = "q3_s";
$proto152["m_columns"][] = "q3_g";
$proto152["m_columns"][] = "q4_s";
$proto152["m_columns"][] = "q4_g";
$proto152["m_columns"][] = "g5_s";
$proto152["m_columns"][] = "g5_g";
$proto152["m_columns"][] = "g6_s";
$proto152["m_columns"][] = "g6_g";
$proto152["m_columns"][] = "g7_s";
$proto152["m_columns"][] = "g7_g";
$proto152["m_columns"][] = "g8_s";
$proto152["m_columns"][] = "g8_g";
$proto152["m_columns"][] = "g9_s";
$proto152["m_columns"][] = "g9_g";
$proto152["m_columns"][] = "g10_s";
$proto152["m_columns"][] = "g10_g";
$proto152["m_columns"][] = "g11_s";
$proto152["m_columns"][] = "g11_g";
$proto152["m_columns"][] = "o_english";
$proto152["m_columns"][] = "oq_highest";
$proto152["m_columns"][] = "oq_major";
$proto152["m_columns"][] = "oq_u";
$proto152["m_columns"][] = "oq_cgpa";
$proto152["m_columns"][] = "at_ic";
$proto152["m_columns"][] = "at_dob";
$proto152["m_columns"][] = "at_spm";
$proto152["m_columns"][] = "at_slc";
$proto152["m_columns"][] = "at_coco";
$proto152["m_columns"][] = "at_fama";
$proto152["m_columns"][] = "at_famaic";
$proto152["m_columns"][] = "at_trans";
$proto152["m_columns"][] = "at_photo";
$proto152["m_columns"][] = "mode_apply";
$proto152["m_columns"][] = "finance";
$obj = new SQLTable($proto152);

$proto151["m_table"] = $obj;
$proto151["m_alias"] = "";
$proto153=array();
$proto153["m_sql"] = "";
$proto153["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto153["m_column"]=$obj;
$proto153["m_contained"] = array();
$proto153["m_strCase"] = "";
$proto153["m_havingmode"] = "0";
$proto153["m_inBrackets"] = "0";
$proto153["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto153);

$proto151["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto151);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_enrol_interview = createSqlQuery_enrol_interview();
																																																																									$tdataenrol_interview[".sqlquery"] = $queryData_enrol_interview;

include_once(getabspath("include/enrol_interview_events.php"));
$tableEvents["enrol_interview"] = new eventclass_enrol_interview;
$tdataenrol_interview[".hasEvents"] = true;

$cipherer = new RunnerCipherer("enrol_interview");

?>