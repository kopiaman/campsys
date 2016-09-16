<?php
require_once(getabspath("classes/cipherer.php"));
$tdataenroll = array();
	$tdataenroll[".NumberOfChars"] = 80; 
	$tdataenroll[".ShortName"] = "enroll";
	$tdataenroll[".OwnerID"] = "";
	$tdataenroll[".OriginalTable"] = "enroll";

//	field labels
$fieldLabelsenroll = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsenroll["English"] = array();
	$fieldToolTipsenroll["English"] = array();
	$fieldLabelsenroll["English"]["Name"] = "Name";
	$fieldToolTipsenroll["English"]["Name"] = "";
	$fieldLabelsenroll["English"]["ICNO"] = "IC";
	$fieldToolTipsenroll["English"]["ICNO"] = "";
	$fieldLabelsenroll["English"]["DOB"] = "Date Of Birth";
	$fieldToolTipsenroll["English"]["DOB"] = "";
	$fieldLabelsenroll["English"]["Email"] = "Email";
	$fieldToolTipsenroll["English"]["Email"] = "";
	$fieldLabelsenroll["English"]["BranchID"] = "Branch";
	$fieldToolTipsenroll["English"]["BranchID"] = "";
	$fieldLabelsenroll["English"]["Gender"] = "Gender";
	$fieldToolTipsenroll["English"]["Gender"] = "";
	$fieldLabelsenroll["English"]["married"] = "Marital Status";
	$fieldToolTipsenroll["English"]["married"] = "";
	$fieldLabelsenroll["English"]["Address1"] = "Resident Address";
	$fieldToolTipsenroll["English"]["Address1"] = "";
	$fieldLabelsenroll["English"]["City"] = "City";
	$fieldToolTipsenroll["English"]["City"] = "";
	$fieldLabelsenroll["English"]["Postcode"] = "Postcode";
	$fieldToolTipsenroll["English"]["Postcode"] = "";
	$fieldLabelsenroll["English"]["StateID"] = "State";
	$fieldToolTipsenroll["English"]["StateID"] = "";
	$fieldLabelsenroll["English"]["HomeTelephone"] = "Home Tel";
	$fieldToolTipsenroll["English"]["HomeTelephone"] = "";
	$fieldLabelsenroll["English"]["MobileTelephone"] = "Mobile Tel";
	$fieldToolTipsenroll["English"]["MobileTelephone"] = "";
	$fieldLabelsenroll["English"]["Nationality"] = "Nationality";
	$fieldToolTipsenroll["English"]["Nationality"] = "";
	$fieldLabelsenroll["English"]["DipID"] = "Course";
	$fieldToolTipsenroll["English"]["DipID"] = "";
	$fieldLabelsenroll["English"]["Status"] = "Status";
	$fieldToolTipsenroll["English"]["Status"] = "";
	$fieldLabelsenroll["English"]["Disability"] = "Disability";
	$fieldToolTipsenroll["English"]["Disability"] = "";
	$fieldLabelsenroll["English"]["MedicalCondition"] = "Serious Medical Condition";
	$fieldToolTipsenroll["English"]["MedicalCondition"] = "";
	$fieldLabelsenroll["English"]["race"] = "Race";
	$fieldToolTipsenroll["English"]["race"] = "";
	$fieldLabelsenroll["English"]["Religion"] = "Religion";
	$fieldToolTipsenroll["English"]["Religion"] = "";
	$fieldLabelsenroll["English"]["blood"] = "Blood";
	$fieldToolTipsenroll["English"]["blood"] = "";
	$fieldLabelsenroll["English"]["enrolID"] = "Enrol ID";
	$fieldToolTipsenroll["English"]["enrolID"] = "";
	$fieldLabelsenroll["English"]["qua_level"] = "Qualification Level";
	$fieldToolTipsenroll["English"]["qua_level"] = "";
	$fieldLabelsenroll["English"]["q1_s"] = "Subject 1";
	$fieldToolTipsenroll["English"]["q1_s"] = "";
	$fieldLabelsenroll["English"]["q1_g"] = "Subject 1 Grade";
	$fieldToolTipsenroll["English"]["q1_g"] = "";
	$fieldLabelsenroll["English"]["q2_s"] = "Subject 2 ";
	$fieldToolTipsenroll["English"]["q2_s"] = "";
	$fieldLabelsenroll["English"]["q2_g"] = "Subject 2 Grade";
	$fieldToolTipsenroll["English"]["q2_g"] = "";
	$fieldLabelsenroll["English"]["q3_s"] = "Subject 3 ";
	$fieldToolTipsenroll["English"]["q3_s"] = "";
	$fieldLabelsenroll["English"]["q3_g"] = "Subject 3 Grade";
	$fieldToolTipsenroll["English"]["q3_g"] = "";
	$fieldLabelsenroll["English"]["q4_g"] = "Subject 4 Grade";
	$fieldToolTipsenroll["English"]["q4_g"] = "";
	$fieldLabelsenroll["English"]["q4_s"] = "Subject 4 ";
	$fieldToolTipsenroll["English"]["q4_s"] = "";
	$fieldLabelsenroll["English"]["g5_s"] = "Subject 5 ";
	$fieldToolTipsenroll["English"]["g5_s"] = "";
	$fieldLabelsenroll["English"]["g5_g"] = "Subject 5 Grade";
	$fieldToolTipsenroll["English"]["g5_g"] = "";
	$fieldLabelsenroll["English"]["g6_s"] = "Subject 6 ";
	$fieldToolTipsenroll["English"]["g6_s"] = "";
	$fieldLabelsenroll["English"]["g6_g"] = "Subject 6 Grade";
	$fieldToolTipsenroll["English"]["g6_g"] = "";
	$fieldLabelsenroll["English"]["g7_s"] = "Subject 7 ";
	$fieldToolTipsenroll["English"]["g7_s"] = "";
	$fieldLabelsenroll["English"]["g7_g"] = "Subject 7 Grade";
	$fieldToolTipsenroll["English"]["g7_g"] = "";
	$fieldLabelsenroll["English"]["g8_s"] = "Subject 8 ";
	$fieldToolTipsenroll["English"]["g8_s"] = "";
	$fieldLabelsenroll["English"]["g8_g"] = "Subject 8 Grade";
	$fieldToolTipsenroll["English"]["g8_g"] = "";
	$fieldLabelsenroll["English"]["g9_s"] = "Subject 9 ";
	$fieldToolTipsenroll["English"]["g9_s"] = "";
	$fieldLabelsenroll["English"]["g9_g"] = "Subject 9 Grade";
	$fieldToolTipsenroll["English"]["g9_g"] = "";
	$fieldLabelsenroll["English"]["oq_highest"] = "Highest Qualification / Professional Licensed";
	$fieldToolTipsenroll["English"]["oq_highest"] = "";
	$fieldLabelsenroll["English"]["oq_major"] = "Major / Specialization";
	$fieldToolTipsenroll["English"]["oq_major"] = "";
	$fieldLabelsenroll["English"]["oq_u"] = "University / Institute";
	$fieldToolTipsenroll["English"]["oq_u"] = "";
	$fieldLabelsenroll["English"]["oq_cgpa"] = "CGPA";
	$fieldToolTipsenroll["English"]["oq_cgpa"] = "";
	$fieldLabelsenroll["English"]["at_ic"] = "Identity Card (NRIC)/Passport";
	$fieldToolTipsenroll["English"]["at_ic"] = "";
	$fieldLabelsenroll["English"]["at_dob"] = "Birth Certificate";
	$fieldToolTipsenroll["English"]["at_dob"] = "";
	$fieldLabelsenroll["English"]["at_spm"] = " SPM /SPMV/’O’ Level Certificate or result slip";
	$fieldToolTipsenroll["English"]["at_spm"] = "";
	$fieldLabelsenroll["English"]["at_slc"] = "School Leaving Certificate";
	$fieldToolTipsenroll["English"]["at_slc"] = "";
	$fieldLabelsenroll["English"]["at_coco"] = "Co-Curriculum Certificate";
	$fieldToolTipsenroll["English"]["at_coco"] = "";
	$fieldLabelsenroll["English"]["at_fama"] = "Parents/guardian’sIdentity Card (NRIC)";
	$fieldToolTipsenroll["English"]["at_fama"] = "";
	$fieldLabelsenroll["English"]["at_famaic"] = "Parents Birth Certificate";
	$fieldToolTipsenroll["English"]["at_famaic"] = "";
	$fieldLabelsenroll["English"]["at_trans"] = "Transcript/result slip of every semester";
	$fieldToolTipsenroll["English"]["at_trans"] = "";
	$fieldLabelsenroll["English"]["at_photo"] = "ONE(1) passportsize photographs";
	$fieldToolTipsenroll["English"]["at_photo"] = "";
	$fieldLabelsenroll["English"]["Date_Apply"] = "Date Applied";
	$fieldToolTipsenroll["English"]["Date_Apply"] = "";
	$fieldLabelsenroll["English"]["Passport"] = "Passport";
	$fieldToolTipsenroll["English"]["Passport"] = "";
	$fieldLabelsenroll["English"]["Country"] = "Country";
	$fieldToolTipsenroll["English"]["Country"] = "";
	$fieldLabelsenroll["English"]["g10_s"] = "Subject 10 ";
	$fieldToolTipsenroll["English"]["g10_s"] = "";
	$fieldLabelsenroll["English"]["g10_g"] = "Subject 10 Grade";
	$fieldToolTipsenroll["English"]["g10_g"] = "";
	$fieldLabelsenroll["English"]["g11_s"] = "Subject 11 ";
	$fieldToolTipsenroll["English"]["g11_s"] = "";
	$fieldLabelsenroll["English"]["g11_g"] = "Subject 11 Grade";
	$fieldToolTipsenroll["English"]["g11_g"] = "";
	$fieldLabelsenroll["English"]["o_english"] = "IETLS/ TOEFL/ MUET";
	$fieldToolTipsenroll["English"]["o_english"] = "";
	$fieldLabelsenroll["English"]["qua_year"] = "Qualification Year";
	$fieldToolTipsenroll["English"]["qua_year"] = "";
	$fieldLabelsenroll["English"]["finance"] = "Financial Aid";
	$fieldToolTipsenroll["English"]["finance"] = "";
	$fieldLabelsenroll["English"]["Detail"] = "Detail";
	$fieldToolTipsenroll["English"]["Detail"] = "";
	$fieldLabelsenroll["English"]["f_name"] = "Father's Name";
	$fieldToolTipsenroll["English"]["f_name"] = "";
	$fieldLabelsenroll["English"]["f_tel"] = "Tel";
	$fieldToolTipsenroll["English"]["f_tel"] = "";
	$fieldLabelsenroll["English"]["f_ic"] = "IC";
	$fieldToolTipsenroll["English"]["f_ic"] = "";
	$fieldLabelsenroll["English"]["f_job"] = "Occupation";
	$fieldToolTipsenroll["English"]["f_job"] = "";
	$fieldLabelsenroll["English"]["m_name"] = "Mother's Name";
	$fieldToolTipsenroll["English"]["m_name"] = "";
	$fieldLabelsenroll["English"]["m_tel"] = "Tel";
	$fieldToolTipsenroll["English"]["m_tel"] = "";
	$fieldLabelsenroll["English"]["m_ic"] = "IC";
	$fieldToolTipsenroll["English"]["m_ic"] = "";
	$fieldLabelsenroll["English"]["m_job"] = "Occupation";
	$fieldToolTipsenroll["English"]["m_job"] = "";
	$fieldLabelsenroll["English"]["qua_result"] = "School Result ";
	$fieldToolTipsenroll["English"]["qua_result"] = "";
	$fieldLabelsenroll["English"]["qua_place"] = "Last School";
	$fieldToolTipsenroll["English"]["qua_place"] = "";
	if (count($fieldToolTipsenroll["English"]))
		$tdataenroll[".isUseToolTips"] = true;
}
	
	
	$tdataenroll[".NCSearch"] = true;



$tdataenroll[".shortTableName"] = "enroll";
$tdataenroll[".nSecOptions"] = 0;
$tdataenroll[".recsPerRowList"] = 1;
$tdataenroll[".mainTableOwnerID"] = "";
$tdataenroll[".moveNext"] = 1;
$tdataenroll[".nType"] = 0;

$tdataenroll[".strOriginalTableName"] = "enroll";




$tdataenroll[".showAddInPopup"] = false;

$tdataenroll[".showEditInPopup"] = false;

$tdataenroll[".showViewInPopup"] = false;

$tdataenroll[".fieldsForRegister"] = array();
	
$tdataenroll[".listAjax"] = false;

	$tdataenroll[".audit"] = true;

	$tdataenroll[".locking"] = false;

$tdataenroll[".listIcons"] = true;
$tdataenroll[".inlineEdit"] = true;

$tdataenroll[".exportTo"] = true;


$tdataenroll[".delete"] = true;

$tdataenroll[".showSimpleSearchOptions"] = true;

$tdataenroll[".showSearchPanel"] = true;

if (isMobile())
	$tdataenroll[".isUseAjaxSuggest"] = false;
else 
	$tdataenroll[".isUseAjaxSuggest"] = true;

$tdataenroll[".rowHighlite"] = true;

// button handlers file names

$tdataenroll[".addPageEvents"] = false;

// use timepicker for search panel
$tdataenroll[".isUseTimeForSearch"] = false;




$tdataenroll[".allSearchFields"] = array();

$tdataenroll[".allSearchFields"][] = "DipID";
$tdataenroll[".allSearchFields"][] = "Date_Apply";
$tdataenroll[".allSearchFields"][] = "Status";
$tdataenroll[".allSearchFields"][] = "Name";
$tdataenroll[".allSearchFields"][] = "StateID";

$tdataenroll[".googleLikeFields"][] = "Name";
$tdataenroll[".googleLikeFields"][] = "finance";
$tdataenroll[".googleLikeFields"][] = "Detail";
$tdataenroll[".googleLikeFields"][] = "f_name";
$tdataenroll[".googleLikeFields"][] = "f_tel";
$tdataenroll[".googleLikeFields"][] = "f_ic";
$tdataenroll[".googleLikeFields"][] = "f_job";
$tdataenroll[".googleLikeFields"][] = "m_name";
$tdataenroll[".googleLikeFields"][] = "m_tel";
$tdataenroll[".googleLikeFields"][] = "m_ic";
$tdataenroll[".googleLikeFields"][] = "m_job";
$tdataenroll[".googleLikeFields"][] = "qua_result";
$tdataenroll[".googleLikeFields"][] = "qua_place";

$tdataenroll[".panelSearchFields"][] = "DipID";
$tdataenroll[".panelSearchFields"][] = "Status";
$tdataenroll[".panelSearchFields"][] = "Name";
$tdataenroll[".panelSearchFields"][] = "StateID";
$tdataenroll[".panelSearchFields"][] = "finance";

$tdataenroll[".advSearchFields"][] = "DipID";
$tdataenroll[".advSearchFields"][] = "Date_Apply";
$tdataenroll[".advSearchFields"][] = "Status";
$tdataenroll[".advSearchFields"][] = "Name";
$tdataenroll[".advSearchFields"][] = "StateID";

$tdataenroll[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataenroll[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY Date_Apply DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataenroll[".strOrderBy"] = $tstrOrderBy;

$tdataenroll[".orderindexes"] = array();
$tdataenroll[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "Date_Apply");

$tdataenroll[".sqlHead"] = "SELECT enrolID,  Name,  ICNO,  DOB,  Email,  BranchID,  Date_Apply,  Gender,  married,  Address1,  City,  Postcode,  StateID,  HomeTelephone,  MobileTelephone,  Nationality,  DipID,  Status,  Disability,  MedicalCondition,  race,  Religion,  blood,  qua_level,  q1_s,  q1_g,  q2_s,  q2_g,  q3_s,  q3_g,  q4_s,  q4_g,  g5_s,  g5_g,  g6_s,  g6_g,  g7_s,  g7_g,  g8_s,  g8_g,  g9_s,  g9_g,  oq_highest,  oq_major,  oq_u,  oq_cgpa,  at_ic,  at_dob,  at_spm,  at_slc,  at_coco,  at_fama,  at_famaic,  at_trans,  at_photo,  Passport,  Country,  g10_s,  g10_g,  g11_s,  g11_g,  o_english,  qua_year,  finance,  enrolID AS Detail,  f_name,  f_tel,  f_ic,  f_job,  m_name,  m_tel,  m_ic,  m_job,  qua_result,  qua_place";
$tdataenroll[".sqlFrom"] = "FROM enroll";
$tdataenroll[".sqlWhereExpr"] = "(mode_apply ='online')";
$tdataenroll[".sqlTail"] = "";

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
$arrEditTabs[] = array('tabId'=>'Contact_Information1',
					   'tabName'=>"Contact Information",
					   'nType'=>'0',
					   'nOrder'=>13,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "f_name";
	$tabFields[] = "f_ic";
	$tabFields[] = "f_tel";
	$tabFields[] = "f_job";
	$tabFields[] = "m_name";
	$tabFields[] = "m_ic";
	$tabFields[] = "m_tel";
	$tabFields[] = "m_job";
$arrEditTabs[] = array('tabId'=>'Parents_Guardian_Information1',
					   'tabName'=>"Parents Information",
					   'nType'=>'0',
					   'nOrder'=>22,
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
					   'nOrder'=>31,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "qua_level";
	$tabFields[] = "qua_place";
	$tabFields[] = "qua_year";
	$tabFields[] = "qua_result";
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
$arrEditTabs[] = array('tabId'=>'Enclosures___Required_Documents_1',
					   'tabName'=>"Enclosures ( Required Documents)",
					   'nType'=>'0',
					   'nOrder'=>67,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataenroll[".arrEditTabs"] = $arrEditTabs;

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
	$tabFields[] = "f_name";
	$tabFields[] = "f_ic";
	$tabFields[] = "f_tel";
	$tabFields[] = "f_job";
	$tabFields[] = "m_name";
	$tabFields[] = "m_ic";
	$tabFields[] = "m_tel";
	$tabFields[] = "m_job";
$arrAddTabs[] = array('tabId'=>'Parents_Guardian_Information1',
					  'tabName'=>"Parents Information",
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
	$tabFields[] = "qua_place";
	$tabFields[] = "qua_year";
	$tabFields[] = "qua_result";
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
					  'nOrder'=>67,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataenroll[".arrAddTabs"] = $arrAddTabs;

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
$arrViewTabs[] = array('tabId'=>'Contact_Information1',
					   'tabName'=>"Contact Information",
					   'nType'=>'0',
					   'nOrder'=>13,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "f_name";
	$tabFields[] = "f_ic";
	$tabFields[] = "f_tel";
	$tabFields[] = "f_job";
	$tabFields[] = "m_name";
	$tabFields[] = "m_ic";
	$tabFields[] = "m_tel";
	$tabFields[] = "m_job";
$arrViewTabs[] = array('tabId'=>'Parents_Guardian_Information1',
					   'tabName'=>"Parents Information",
					   'nType'=>'0',
					   'nOrder'=>22,
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
					   'nOrder'=>31,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "qua_level";
	$tabFields[] = "qua_place";
	$tabFields[] = "qua_year";
	$tabFields[] = "qua_result";
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
$arrViewTabs[] = array('tabId'=>'Enclosures___Required_Documents_1',
					   'tabName'=>"Enclosures ( Required Documents)",
					   'nType'=>'0',
					   'nOrder'=>67,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataenroll[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataenroll[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataenroll[".arrGroupsPerPage"] = $arrGPP;

$tableKeysenroll = array();
$tableKeysenroll[] = "enrolID";
$tdataenroll[".Keys"] = $tableKeysenroll;

$tdataenroll[".listFields"] = array();
$tdataenroll[".listFields"][] = "Name";
$tdataenroll[".listFields"][] = "DipID";
$tdataenroll[".listFields"][] = "Date_Apply";
$tdataenroll[".listFields"][] = "finance";
$tdataenroll[".listFields"][] = "StateID";
$tdataenroll[".listFields"][] = "MobileTelephone";
$tdataenroll[".listFields"][] = "Email";
$tdataenroll[".listFields"][] = "Status";
$tdataenroll[".listFields"][] = "Detail";

$tdataenroll[".viewFields"] = array();

$tdataenroll[".addFields"] = array();
$tdataenroll[".addFields"][] = "DipID";
$tdataenroll[".addFields"][] = "Date_Apply";
$tdataenroll[".addFields"][] = "Name";
$tdataenroll[".addFields"][] = "ICNO";
$tdataenroll[".addFields"][] = "Passport";
$tdataenroll[".addFields"][] = "DOB";
$tdataenroll[".addFields"][] = "Nationality";
$tdataenroll[".addFields"][] = "Gender";
$tdataenroll[".addFields"][] = "race";
$tdataenroll[".addFields"][] = "Religion";
$tdataenroll[".addFields"][] = "married";
$tdataenroll[".addFields"][] = "Address1";
$tdataenroll[".addFields"][] = "Postcode";
$tdataenroll[".addFields"][] = "City";
$tdataenroll[".addFields"][] = "StateID";
$tdataenroll[".addFields"][] = "Country";
$tdataenroll[".addFields"][] = "MobileTelephone";
$tdataenroll[".addFields"][] = "HomeTelephone";
$tdataenroll[".addFields"][] = "Email";
$tdataenroll[".addFields"][] = "f_name";
$tdataenroll[".addFields"][] = "f_ic";
$tdataenroll[".addFields"][] = "f_tel";
$tdataenroll[".addFields"][] = "f_job";
$tdataenroll[".addFields"][] = "m_name";
$tdataenroll[".addFields"][] = "m_ic";
$tdataenroll[".addFields"][] = "m_tel";
$tdataenroll[".addFields"][] = "m_job";
$tdataenroll[".addFields"][] = "blood";
$tdataenroll[".addFields"][] = "Disability";
$tdataenroll[".addFields"][] = "MedicalCondition";
$tdataenroll[".addFields"][] = "qua_level";
$tdataenroll[".addFields"][] = "qua_place";
$tdataenroll[".addFields"][] = "qua_year";
$tdataenroll[".addFields"][] = "qua_result";
$tdataenroll[".addFields"][] = "q1_s";
$tdataenroll[".addFields"][] = "q1_g";
$tdataenroll[".addFields"][] = "q2_s";
$tdataenroll[".addFields"][] = "q2_g";
$tdataenroll[".addFields"][] = "q3_s";
$tdataenroll[".addFields"][] = "q3_g";
$tdataenroll[".addFields"][] = "q4_s";
$tdataenroll[".addFields"][] = "q4_g";
$tdataenroll[".addFields"][] = "g5_s";
$tdataenroll[".addFields"][] = "g5_g";
$tdataenroll[".addFields"][] = "g6_s";
$tdataenroll[".addFields"][] = "g6_g";
$tdataenroll[".addFields"][] = "g7_s";
$tdataenroll[".addFields"][] = "g7_g";
$tdataenroll[".addFields"][] = "g8_s";
$tdataenroll[".addFields"][] = "g8_g";
$tdataenroll[".addFields"][] = "g9_s";
$tdataenroll[".addFields"][] = "g9_g";
$tdataenroll[".addFields"][] = "g10_s";
$tdataenroll[".addFields"][] = "g10_g";
$tdataenroll[".addFields"][] = "g11_s";
$tdataenroll[".addFields"][] = "g11_g";
$tdataenroll[".addFields"][] = "o_english";
$tdataenroll[".addFields"][] = "oq_highest";
$tdataenroll[".addFields"][] = "oq_major";
$tdataenroll[".addFields"][] = "oq_u";
$tdataenroll[".addFields"][] = "oq_cgpa";
$tdataenroll[".addFields"][] = "at_ic";
$tdataenroll[".addFields"][] = "at_coco";
$tdataenroll[".addFields"][] = "at_dob";
$tdataenroll[".addFields"][] = "at_fama";
$tdataenroll[".addFields"][] = "at_spm";
$tdataenroll[".addFields"][] = "at_famaic";
$tdataenroll[".addFields"][] = "at_slc";
$tdataenroll[".addFields"][] = "at_trans";
$tdataenroll[".addFields"][] = "at_photo";

$tdataenroll[".inlineAddFields"] = array();

$tdataenroll[".editFields"] = array();

$tdataenroll[".inlineEditFields"] = array();
$tdataenroll[".inlineEditFields"][] = "DipID";
$tdataenroll[".inlineEditFields"][] = "finance";
$tdataenroll[".inlineEditFields"][] = "Status";

$tdataenroll[".exportFields"] = array();
$tdataenroll[".exportFields"][] = "DipID";
$tdataenroll[".exportFields"][] = "Date_Apply";
$tdataenroll[".exportFields"][] = "Status";
$tdataenroll[".exportFields"][] = "Name";
$tdataenroll[".exportFields"][] = "ICNO";
$tdataenroll[".exportFields"][] = "Passport";
$tdataenroll[".exportFields"][] = "DOB";
$tdataenroll[".exportFields"][] = "Nationality";
$tdataenroll[".exportFields"][] = "Gender";
$tdataenroll[".exportFields"][] = "race";
$tdataenroll[".exportFields"][] = "Religion";
$tdataenroll[".exportFields"][] = "married";
$tdataenroll[".exportFields"][] = "finance";
$tdataenroll[".exportFields"][] = "Address1";
$tdataenroll[".exportFields"][] = "Postcode";
$tdataenroll[".exportFields"][] = "City";
$tdataenroll[".exportFields"][] = "StateID";
$tdataenroll[".exportFields"][] = "Country";
$tdataenroll[".exportFields"][] = "MobileTelephone";
$tdataenroll[".exportFields"][] = "HomeTelephone";
$tdataenroll[".exportFields"][] = "Email";
$tdataenroll[".exportFields"][] = "f_name";
$tdataenroll[".exportFields"][] = "f_ic";
$tdataenroll[".exportFields"][] = "f_tel";
$tdataenroll[".exportFields"][] = "f_job";
$tdataenroll[".exportFields"][] = "m_name";
$tdataenroll[".exportFields"][] = "m_ic";
$tdataenroll[".exportFields"][] = "m_tel";
$tdataenroll[".exportFields"][] = "m_job";
$tdataenroll[".exportFields"][] = "blood";
$tdataenroll[".exportFields"][] = "Disability";
$tdataenroll[".exportFields"][] = "MedicalCondition";
$tdataenroll[".exportFields"][] = "qua_level";
$tdataenroll[".exportFields"][] = "qua_place";
$tdataenroll[".exportFields"][] = "qua_year";
$tdataenroll[".exportFields"][] = "qua_result";
$tdataenroll[".exportFields"][] = "q1_s";
$tdataenroll[".exportFields"][] = "q1_g";
$tdataenroll[".exportFields"][] = "q2_s";
$tdataenroll[".exportFields"][] = "q2_g";
$tdataenroll[".exportFields"][] = "q3_s";
$tdataenroll[".exportFields"][] = "q3_g";
$tdataenroll[".exportFields"][] = "q4_s";
$tdataenroll[".exportFields"][] = "q4_g";
$tdataenroll[".exportFields"][] = "g5_s";
$tdataenroll[".exportFields"][] = "g5_g";
$tdataenroll[".exportFields"][] = "g6_s";
$tdataenroll[".exportFields"][] = "g6_g";
$tdataenroll[".exportFields"][] = "g7_s";
$tdataenroll[".exportFields"][] = "g7_g";
$tdataenroll[".exportFields"][] = "g8_s";
$tdataenroll[".exportFields"][] = "g8_g";
$tdataenroll[".exportFields"][] = "g9_s";
$tdataenroll[".exportFields"][] = "g9_g";
$tdataenroll[".exportFields"][] = "g10_s";
$tdataenroll[".exportFields"][] = "g10_g";
$tdataenroll[".exportFields"][] = "g11_s";
$tdataenroll[".exportFields"][] = "g11_g";
$tdataenroll[".exportFields"][] = "o_english";
$tdataenroll[".exportFields"][] = "oq_highest";
$tdataenroll[".exportFields"][] = "oq_major";
$tdataenroll[".exportFields"][] = "oq_u";
$tdataenroll[".exportFields"][] = "oq_cgpa";

$tdataenroll[".printFields"] = array();

//	enrolID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
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
	
		
		
	$tdataenroll["enrolID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
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
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["Name"] = $fdata;
//	ICNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ICNO";
	$fdata["GoodName"] = "ICNO";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "IC"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["ICNO"] = $fdata;
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Date Of Birth"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	$edata["InitialYearFactor"] = 45; 
	$edata["LastYearFactor"] = -12; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["DOB"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=222";
	
		$edata["inputStyle"] = " width:227px;";
	$edata["controlWidth"] = 227;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["Email"] = $fdata;
//	BranchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
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
	
		
		
	$tdataenroll["BranchID"] = $fdata;
//	Date_Apply
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Date_Apply";
	$fdata["GoodName"] = "Date_Apply";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Date Applied"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
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
	
		
		
	$tdataenroll["Date_Apply"] = $fdata;
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Gender"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["Gender"] = $fdata;
//	married
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "married";
	$fdata["GoodName"] = "married";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Marital Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["married"] = $fdata;
//	Address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Address1";
	$fdata["GoodName"] = "Address1";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Resident Address"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["Address1"] = $fdata;
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "City"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["City"] = $fdata;
//	Postcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Postcode";
	$fdata["GoodName"] = "Postcode";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Postcode"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["Postcode"] = $fdata;
//	StateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "StateID";
	$fdata["GoodName"] = "StateID";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "State"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
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
	
		
		
	$tdataenroll["StateID"] = $fdata;
//	HomeTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "HomeTelephone";
	$fdata["GoodName"] = "HomeTelephone";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Home Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["HomeTelephone"] = $fdata;
//	MobileTelephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "MobileTelephone";
	$fdata["GoodName"] = "MobileTelephone";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Mobile Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["MobileTelephone"] = $fdata;
//	Nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Nationality";
	$fdata["GoodName"] = "Nationality";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Nationality"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["Nationality"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		$fdata["bInlineEdit"] = true; 
	
		
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
	
		
		
	$tdataenroll["DipID"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
	
		
		
	$tdataenroll["Status"] = $fdata;
//	Disability
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Disability";
	$fdata["GoodName"] = "Disability";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Disability"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["Disability"] = $fdata;
//	MedicalCondition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "MedicalCondition";
	$fdata["GoodName"] = "MedicalCondition";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Serious Medical Condition"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["MedicalCondition"] = $fdata;
//	race
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "race";
	$fdata["GoodName"] = "race";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Race"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["race"] = $fdata;
//	Religion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Religion";
	$fdata["GoodName"] = "Religion";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Religion"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["Religion"] = $fdata;
//	blood
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "blood";
	$fdata["GoodName"] = "blood";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Blood"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["blood"] = $fdata;
//	qua_level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "qua_level";
	$fdata["GoodName"] = "qua_level";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Qualification Level"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["qua_level"] = $fdata;
//	q1_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "q1_s";
	$fdata["GoodName"] = "q1_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 1"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["q1_s"] = $fdata;
//	q1_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "q1_g";
	$fdata["GoodName"] = "q1_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 1 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["q1_g"] = $fdata;
//	q2_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "q2_s";
	$fdata["GoodName"] = "q2_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 2 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["q2_s"] = $fdata;
//	q2_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "q2_g";
	$fdata["GoodName"] = "q2_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 2 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["q2_g"] = $fdata;
//	q3_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "q3_s";
	$fdata["GoodName"] = "q3_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 3 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
		
		
		
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["q3_s"] = $fdata;
//	q3_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "q3_g";
	$fdata["GoodName"] = "q3_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 3 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["q3_g"] = $fdata;
//	q4_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "q4_s";
	$fdata["GoodName"] = "q4_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 4 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["q4_s"] = $fdata;
//	q4_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "q4_g";
	$fdata["GoodName"] = "q4_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 4 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["q4_g"] = $fdata;
//	g5_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "g5_s";
	$fdata["GoodName"] = "g5_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 5 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["g5_s"] = $fdata;
//	g5_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "g5_g";
	$fdata["GoodName"] = "g5_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 5 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["g5_g"] = $fdata;
//	g6_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "g6_s";
	$fdata["GoodName"] = "g6_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 6 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["g6_s"] = $fdata;
//	g6_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "g6_g";
	$fdata["GoodName"] = "g6_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 6 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["g6_g"] = $fdata;
//	g7_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "g7_s";
	$fdata["GoodName"] = "g7_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 7 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["g7_s"] = $fdata;
//	g7_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "g7_g";
	$fdata["GoodName"] = "g7_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 7 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["g7_g"] = $fdata;
//	g8_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "g8_s";
	$fdata["GoodName"] = "g8_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 8 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
		
		
		
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["g8_s"] = $fdata;
//	g8_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "g8_g";
	$fdata["GoodName"] = "g8_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 8 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["g8_g"] = $fdata;
//	g9_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "g9_s";
	$fdata["GoodName"] = "g9_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 9 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
		
		
		
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["g9_s"] = $fdata;
//	g9_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "g9_g";
	$fdata["GoodName"] = "g9_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 9 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["g9_g"] = $fdata;
//	oq_highest
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "oq_highest";
	$fdata["GoodName"] = "oq_highest";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Highest Qualification / Professional Licensed"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["oq_highest"] = $fdata;
//	oq_major
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "oq_major";
	$fdata["GoodName"] = "oq_major";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Major / Specialization"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["oq_major"] = $fdata;
//	oq_u
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "oq_u";
	$fdata["GoodName"] = "oq_u";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "University / Institute"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["oq_u"] = $fdata;
//	oq_cgpa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "oq_cgpa";
	$fdata["GoodName"] = "oq_cgpa";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "CGPA"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["oq_cgpa"] = $fdata;
//	at_ic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "at_ic";
	$fdata["GoodName"] = "at_ic";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Identity Card (NRIC)/Passport"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "at_ic"; 
		$fdata["FullName"] = "at_ic";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
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
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
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
	
		
		
	$tdataenroll["at_ic"] = $fdata;
//	at_dob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "at_dob";
	$fdata["GoodName"] = "at_dob";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Birth Certificate"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "at_dob"; 
		$fdata["FullName"] = "at_dob";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
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
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
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
	
		
		
	$tdataenroll["at_dob"] = $fdata;
//	at_spm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "at_spm";
	$fdata["GoodName"] = "at_spm";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = " SPM /SPMV/’O’ Level Certificate or result slip"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "at_spm"; 
		$fdata["FullName"] = "at_spm";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
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
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
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
	
		
		
	$tdataenroll["at_spm"] = $fdata;
//	at_slc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "at_slc";
	$fdata["GoodName"] = "at_slc";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "School Leaving Certificate"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "at_slc"; 
		$fdata["FullName"] = "at_slc";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
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
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
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
	
		
		
	$tdataenroll["at_slc"] = $fdata;
//	at_coco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "at_coco";
	$fdata["GoodName"] = "at_coco";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Co-Curriculum Certificate"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "at_coco"; 
		$fdata["FullName"] = "at_coco";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
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
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 5;
	
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
	
		
		
	$tdataenroll["at_coco"] = $fdata;
//	at_fama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "at_fama";
	$fdata["GoodName"] = "at_fama";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Parents/guardian’sIdentity Card (NRIC)"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "at_fama"; 
		$fdata["FullName"] = "at_fama";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
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
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
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
	
		
		
	$tdataenroll["at_fama"] = $fdata;
//	at_famaic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "at_famaic";
	$fdata["GoodName"] = "at_famaic";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Parents Birth Certificate"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "at_famaic"; 
		$fdata["FullName"] = "at_famaic";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
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
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
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
	
		
		
	$tdataenroll["at_famaic"] = $fdata;
//	at_trans
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "at_trans";
	$fdata["GoodName"] = "at_trans";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Transcript/result slip of every semester"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "at_trans"; 
		$fdata["FullName"] = "at_trans";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
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
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 8;
	
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
	
		
		
	$tdataenroll["at_trans"] = $fdata;
//	at_photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "at_photo";
	$fdata["GoodName"] = "at_photo";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "ONE(1) passportsize photographs"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "at_photo"; 
		$fdata["FullName"] = "at_photo";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
				$fdata["UploadFolder"] = "files/";
		
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
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
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
	
		
		
	$tdataenroll["at_photo"] = $fdata;
//	Passport
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "Passport";
	$fdata["GoodName"] = "Passport";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Passport"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["Passport"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Country"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["Country"] = $fdata;
//	g10_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "g10_s";
	$fdata["GoodName"] = "g10_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 10 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
		
		
		
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["g10_s"] = $fdata;
//	g10_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "g10_g";
	$fdata["GoodName"] = "g10_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 10 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["g10_g"] = $fdata;
//	g11_s
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "g11_s";
	$fdata["GoodName"] = "g11_s";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 11 "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
		
		
		
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["g11_s"] = $fdata;
//	g11_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "g11_g";
	$fdata["GoodName"] = "g11_g";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Subject 11 Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["g11_g"] = $fdata;
//	o_english
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "o_english";
	$fdata["GoodName"] = "o_english";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "IETLS/ TOEFL/ MUET"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdataenroll["o_english"] = $fdata;
//	qua_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "qua_year";
	$fdata["GoodName"] = "qua_year";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Qualification Year"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=4";
	
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["qua_year"] = $fdata;
//	finance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "finance";
	$fdata["GoodName"] = "finance";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Financial Aid"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
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
	
		
		
	$tdataenroll["finance"] = $fdata;
//	Detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
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
	
		
		
	$tdataenroll["Detail"] = $fdata;
//	f_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "f_name";
	$fdata["GoodName"] = "f_name";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Father's Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f_name"; 
		$fdata["FullName"] = "f_name";
	
		
		
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
	
		
		
	$tdataenroll["f_name"] = $fdata;
//	f_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "f_tel";
	$fdata["GoodName"] = "f_tel";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f_tel"; 
		$fdata["FullName"] = "f_tel";
	
		
		
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
	
		
		
	$tdataenroll["f_tel"] = $fdata;
//	f_ic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "f_ic";
	$fdata["GoodName"] = "f_ic";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "IC"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f_ic"; 
		$fdata["FullName"] = "f_ic";
	
		
		
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
	
		
		
	$tdataenroll["f_ic"] = $fdata;
//	f_job
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "f_job";
	$fdata["GoodName"] = "f_job";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Occupation"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f_job"; 
		$fdata["FullName"] = "f_job";
	
		
		
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
	
		
		
	$tdataenroll["f_job"] = $fdata;
//	m_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "m_name";
	$fdata["GoodName"] = "m_name";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Mother's Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "m_name"; 
		$fdata["FullName"] = "m_name";
	
		
		
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
	
		
		
	$tdataenroll["m_name"] = $fdata;
//	m_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "m_tel";
	$fdata["GoodName"] = "m_tel";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "m_tel"; 
		$fdata["FullName"] = "m_tel";
	
		
		
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
	
		
		
	$tdataenroll["m_tel"] = $fdata;
//	m_ic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "m_ic";
	$fdata["GoodName"] = "m_ic";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "IC"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "m_ic"; 
		$fdata["FullName"] = "m_ic";
	
		
		
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
	
		
		
	$tdataenroll["m_ic"] = $fdata;
//	m_job
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "m_job";
	$fdata["GoodName"] = "m_job";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Occupation"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "m_job"; 
		$fdata["FullName"] = "m_job";
	
		
		
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
	
		
		
	$tdataenroll["m_job"] = $fdata;
//	qua_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "qua_result";
	$fdata["GoodName"] = "qua_result";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "School Result "; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qua_result"; 
		$fdata["FullName"] = "qua_result";
	
		
		
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
			
		$edata["inputStyle"] = " width:214px;";
	$edata["controlWidth"] = 214;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["qua_result"] = $fdata;
//	qua_place
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "qua_place";
	$fdata["GoodName"] = "qua_place";
	$fdata["ownerTable"] = "enroll";
	$fdata["Label"] = "Last School"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qua_place"; 
		$fdata["FullName"] = "qua_place";
	
		
		
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
			
		$edata["inputStyle"] = " width:235px;";
	$edata["controlWidth"] = 235;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataenroll["qua_place"] = $fdata;

	
$tables_data["enroll"]=&$tdataenroll;
$field_labels["enroll"] = &$fieldLabelsenroll;
$fieldToolTips["enroll"] = &$fieldToolTipsenroll;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["enroll"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["enroll"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_enroll()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "enrolID,  Name,  ICNO,  DOB,  Email,  BranchID,  Date_Apply,  Gender,  married,  Address1,  City,  Postcode,  StateID,  HomeTelephone,  MobileTelephone,  Nationality,  DipID,  Status,  Disability,  MedicalCondition,  race,  Religion,  blood,  qua_level,  q1_s,  q1_g,  q2_s,  q2_g,  q3_s,  q3_g,  q4_s,  q4_g,  g5_s,  g5_g,  g6_s,  g6_g,  g7_s,  g7_g,  g8_s,  g8_g,  g9_s,  g9_g,  oq_highest,  oq_major,  oq_u,  oq_cgpa,  at_ic,  at_dob,  at_spm,  at_slc,  at_coco,  at_fama,  at_famaic,  at_trans,  at_photo,  Passport,  Country,  g10_s,  g10_g,  g11_s,  g11_g,  o_english,  qua_year,  finance,  enrolID AS Detail,  f_name,  f_tel,  f_ic,  f_job,  m_name,  m_tel,  m_ic,  m_job,  qua_result,  qua_place";
$proto0["m_strFrom"] = "FROM enroll";
$proto0["m_strWhere"] = "(mode_apply ='online')";
$proto0["m_strOrderBy"] = "ORDER BY Date_Apply DESC";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "mode_apply ='online'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mode_apply",
	"m_strTable" => "enroll"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "='online'";
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
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "enroll"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ICNO",
	"m_strTable" => "enroll"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "enroll"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "enroll"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "BranchID",
	"m_strTable" => "enroll"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Date_Apply",
	"m_strTable" => "enroll"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "enroll"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "married",
	"m_strTable" => "enroll"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Address1",
	"m_strTable" => "enroll"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "enroll"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Postcode",
	"m_strTable" => "enroll"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "StateID",
	"m_strTable" => "enroll"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "HomeTelephone",
	"m_strTable" => "enroll"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "MobileTelephone",
	"m_strTable" => "enroll"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Nationality",
	"m_strTable" => "enroll"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "enroll"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "enroll"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Disability",
	"m_strTable" => "enroll"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "MedicalCondition",
	"m_strTable" => "enroll"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "race",
	"m_strTable" => "enroll"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "Religion",
	"m_strTable" => "enroll"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "blood",
	"m_strTable" => "enroll"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "qua_level",
	"m_strTable" => "enroll"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "q1_s",
	"m_strTable" => "enroll"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "q1_g",
	"m_strTable" => "enroll"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "q2_s",
	"m_strTable" => "enroll"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "q2_g",
	"m_strTable" => "enroll"
));

$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "q3_s",
	"m_strTable" => "enroll"
));

$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "q3_g",
	"m_strTable" => "enroll"
));

$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "q4_s",
	"m_strTable" => "enroll"
));

$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "q4_g",
	"m_strTable" => "enroll"
));

$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "g5_s",
	"m_strTable" => "enroll"
));

$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "g5_g",
	"m_strTable" => "enroll"
));

$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "g6_s",
	"m_strTable" => "enroll"
));

$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "g6_g",
	"m_strTable" => "enroll"
));

$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "g7_s",
	"m_strTable" => "enroll"
));

$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "g7_g",
	"m_strTable" => "enroll"
));

$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "g8_s",
	"m_strTable" => "enroll"
));

$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "g8_g",
	"m_strTable" => "enroll"
));

$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "g9_s",
	"m_strTable" => "enroll"
));

$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "g9_g",
	"m_strTable" => "enroll"
));

$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "oq_highest",
	"m_strTable" => "enroll"
));

$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "oq_major",
	"m_strTable" => "enroll"
));

$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "oq_u",
	"m_strTable" => "enroll"
));

$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "oq_cgpa",
	"m_strTable" => "enroll"
));

$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "at_ic",
	"m_strTable" => "enroll"
));

$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "at_dob",
	"m_strTable" => "enroll"
));

$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "at_spm",
	"m_strTable" => "enroll"
));

$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "at_slc",
	"m_strTable" => "enroll"
));

$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "at_coco",
	"m_strTable" => "enroll"
));

$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLField(array(
	"m_strName" => "at_fama",
	"m_strTable" => "enroll"
));

$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "at_famaic",
	"m_strTable" => "enroll"
));

$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLField(array(
	"m_strName" => "at_trans",
	"m_strTable" => "enroll"
));

$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "";
$obj = new SQLFieldListItem($proto111);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLField(array(
	"m_strName" => "at_photo",
	"m_strTable" => "enroll"
));

$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
						$proto115=array();
			$obj = new SQLField(array(
	"m_strName" => "Passport",
	"m_strTable" => "enroll"
));

$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "";
$obj = new SQLFieldListItem($proto115);

$proto0["m_fieldlist"][]=$obj;
						$proto117=array();
			$obj = new SQLField(array(
	"m_strName" => "Country",
	"m_strTable" => "enroll"
));

$proto117["m_expr"]=$obj;
$proto117["m_alias"] = "";
$obj = new SQLFieldListItem($proto117);

$proto0["m_fieldlist"][]=$obj;
						$proto119=array();
			$obj = new SQLField(array(
	"m_strName" => "g10_s",
	"m_strTable" => "enroll"
));

$proto119["m_expr"]=$obj;
$proto119["m_alias"] = "";
$obj = new SQLFieldListItem($proto119);

$proto0["m_fieldlist"][]=$obj;
						$proto121=array();
			$obj = new SQLField(array(
	"m_strName" => "g10_g",
	"m_strTable" => "enroll"
));

$proto121["m_expr"]=$obj;
$proto121["m_alias"] = "";
$obj = new SQLFieldListItem($proto121);

$proto0["m_fieldlist"][]=$obj;
						$proto123=array();
			$obj = new SQLField(array(
	"m_strName" => "g11_s",
	"m_strTable" => "enroll"
));

$proto123["m_expr"]=$obj;
$proto123["m_alias"] = "";
$obj = new SQLFieldListItem($proto123);

$proto0["m_fieldlist"][]=$obj;
						$proto125=array();
			$obj = new SQLField(array(
	"m_strName" => "g11_g",
	"m_strTable" => "enroll"
));

$proto125["m_expr"]=$obj;
$proto125["m_alias"] = "";
$obj = new SQLFieldListItem($proto125);

$proto0["m_fieldlist"][]=$obj;
						$proto127=array();
			$obj = new SQLField(array(
	"m_strName" => "o_english",
	"m_strTable" => "enroll"
));

$proto127["m_expr"]=$obj;
$proto127["m_alias"] = "";
$obj = new SQLFieldListItem($proto127);

$proto0["m_fieldlist"][]=$obj;
						$proto129=array();
			$obj = new SQLField(array(
	"m_strName" => "qua_year",
	"m_strTable" => "enroll"
));

$proto129["m_expr"]=$obj;
$proto129["m_alias"] = "";
$obj = new SQLFieldListItem($proto129);

$proto0["m_fieldlist"][]=$obj;
						$proto131=array();
			$obj = new SQLField(array(
	"m_strName" => "finance",
	"m_strTable" => "enroll"
));

$proto131["m_expr"]=$obj;
$proto131["m_alias"] = "";
$obj = new SQLFieldListItem($proto131);

$proto0["m_fieldlist"][]=$obj;
						$proto133=array();
			$obj = new SQLField(array(
	"m_strName" => "enrolID",
	"m_strTable" => "enroll"
));

$proto133["m_expr"]=$obj;
$proto133["m_alias"] = "Detail";
$obj = new SQLFieldListItem($proto133);

$proto0["m_fieldlist"][]=$obj;
						$proto135=array();
			$obj = new SQLField(array(
	"m_strName" => "f_name",
	"m_strTable" => "enroll"
));

$proto135["m_expr"]=$obj;
$proto135["m_alias"] = "";
$obj = new SQLFieldListItem($proto135);

$proto0["m_fieldlist"][]=$obj;
						$proto137=array();
			$obj = new SQLField(array(
	"m_strName" => "f_tel",
	"m_strTable" => "enroll"
));

$proto137["m_expr"]=$obj;
$proto137["m_alias"] = "";
$obj = new SQLFieldListItem($proto137);

$proto0["m_fieldlist"][]=$obj;
						$proto139=array();
			$obj = new SQLField(array(
	"m_strName" => "f_ic",
	"m_strTable" => "enroll"
));

$proto139["m_expr"]=$obj;
$proto139["m_alias"] = "";
$obj = new SQLFieldListItem($proto139);

$proto0["m_fieldlist"][]=$obj;
						$proto141=array();
			$obj = new SQLField(array(
	"m_strName" => "f_job",
	"m_strTable" => "enroll"
));

$proto141["m_expr"]=$obj;
$proto141["m_alias"] = "";
$obj = new SQLFieldListItem($proto141);

$proto0["m_fieldlist"][]=$obj;
						$proto143=array();
			$obj = new SQLField(array(
	"m_strName" => "m_name",
	"m_strTable" => "enroll"
));

$proto143["m_expr"]=$obj;
$proto143["m_alias"] = "";
$obj = new SQLFieldListItem($proto143);

$proto0["m_fieldlist"][]=$obj;
						$proto145=array();
			$obj = new SQLField(array(
	"m_strName" => "m_tel",
	"m_strTable" => "enroll"
));

$proto145["m_expr"]=$obj;
$proto145["m_alias"] = "";
$obj = new SQLFieldListItem($proto145);

$proto0["m_fieldlist"][]=$obj;
						$proto147=array();
			$obj = new SQLField(array(
	"m_strName" => "m_ic",
	"m_strTable" => "enroll"
));

$proto147["m_expr"]=$obj;
$proto147["m_alias"] = "";
$obj = new SQLFieldListItem($proto147);

$proto0["m_fieldlist"][]=$obj;
						$proto149=array();
			$obj = new SQLField(array(
	"m_strName" => "m_job",
	"m_strTable" => "enroll"
));

$proto149["m_expr"]=$obj;
$proto149["m_alias"] = "";
$obj = new SQLFieldListItem($proto149);

$proto0["m_fieldlist"][]=$obj;
						$proto151=array();
			$obj = new SQLField(array(
	"m_strName" => "qua_result",
	"m_strTable" => "enroll"
));

$proto151["m_expr"]=$obj;
$proto151["m_alias"] = "";
$obj = new SQLFieldListItem($proto151);

$proto0["m_fieldlist"][]=$obj;
						$proto153=array();
			$obj = new SQLField(array(
	"m_strName" => "qua_place",
	"m_strTable" => "enroll"
));

$proto153["m_expr"]=$obj;
$proto153["m_alias"] = "";
$obj = new SQLFieldListItem($proto153);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto155=array();
$proto155["m_link"] = "SQLL_MAIN";
			$proto156=array();
$proto156["m_strName"] = "enroll";
$proto156["m_columns"] = array();
$proto156["m_columns"][] = "enrolID";
$proto156["m_columns"][] = "Name";
$proto156["m_columns"][] = "ICNO";
$proto156["m_columns"][] = "DOB";
$proto156["m_columns"][] = "Email";
$proto156["m_columns"][] = "BranchID";
$proto156["m_columns"][] = "Date_Apply";
$proto156["m_columns"][] = "Gender";
$proto156["m_columns"][] = "married";
$proto156["m_columns"][] = "Address1";
$proto156["m_columns"][] = "City";
$proto156["m_columns"][] = "Postcode";
$proto156["m_columns"][] = "StateID";
$proto156["m_columns"][] = "Country";
$proto156["m_columns"][] = "HomeTelephone";
$proto156["m_columns"][] = "MobileTelephone";
$proto156["m_columns"][] = "Nationality";
$proto156["m_columns"][] = "Passport";
$proto156["m_columns"][] = "DipID";
$proto156["m_columns"][] = "Status";
$proto156["m_columns"][] = "Colorblind";
$proto156["m_columns"][] = "Disability";
$proto156["m_columns"][] = "MedicalCondition";
$proto156["m_columns"][] = "race";
$proto156["m_columns"][] = "Religion";
$proto156["m_columns"][] = "f_name";
$proto156["m_columns"][] = "f_tel";
$proto156["m_columns"][] = "f_ic";
$proto156["m_columns"][] = "f_job";
$proto156["m_columns"][] = "m_name";
$proto156["m_columns"][] = "m_tel";
$proto156["m_columns"][] = "m_ic";
$proto156["m_columns"][] = "m_job";
$proto156["m_columns"][] = "blood";
$proto156["m_columns"][] = "qua_level";
$proto156["m_columns"][] = "qua_year";
$proto156["m_columns"][] = "qua_result";
$proto156["m_columns"][] = "qua_place";
$proto156["m_columns"][] = "q1_s";
$proto156["m_columns"][] = "q1_g";
$proto156["m_columns"][] = "q2_s";
$proto156["m_columns"][] = "q2_g";
$proto156["m_columns"][] = "q3_s";
$proto156["m_columns"][] = "q3_g";
$proto156["m_columns"][] = "q4_s";
$proto156["m_columns"][] = "q4_g";
$proto156["m_columns"][] = "g5_s";
$proto156["m_columns"][] = "g5_g";
$proto156["m_columns"][] = "g6_s";
$proto156["m_columns"][] = "g6_g";
$proto156["m_columns"][] = "g7_s";
$proto156["m_columns"][] = "g7_g";
$proto156["m_columns"][] = "g8_s";
$proto156["m_columns"][] = "g8_g";
$proto156["m_columns"][] = "g9_s";
$proto156["m_columns"][] = "g9_g";
$proto156["m_columns"][] = "g10_s";
$proto156["m_columns"][] = "g10_g";
$proto156["m_columns"][] = "g11_s";
$proto156["m_columns"][] = "g11_g";
$proto156["m_columns"][] = "o_english";
$proto156["m_columns"][] = "oq_highest";
$proto156["m_columns"][] = "oq_major";
$proto156["m_columns"][] = "oq_u";
$proto156["m_columns"][] = "oq_cgpa";
$proto156["m_columns"][] = "at_ic";
$proto156["m_columns"][] = "at_dob";
$proto156["m_columns"][] = "at_spm";
$proto156["m_columns"][] = "at_slc";
$proto156["m_columns"][] = "at_coco";
$proto156["m_columns"][] = "at_fama";
$proto156["m_columns"][] = "at_famaic";
$proto156["m_columns"][] = "at_trans";
$proto156["m_columns"][] = "at_photo";
$proto156["m_columns"][] = "mode_apply";
$proto156["m_columns"][] = "finance";
$obj = new SQLTable($proto156);

$proto155["m_table"] = $obj;
$proto155["m_alias"] = "";
$proto157=array();
$proto157["m_sql"] = "";
$proto157["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto157["m_column"]=$obj;
$proto157["m_contained"] = array();
$proto157["m_strCase"] = "";
$proto157["m_havingmode"] = "0";
$proto157["m_inBrackets"] = "0";
$proto157["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto157);

$proto155["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto155);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto159=array();
						$obj = new SQLField(array(
	"m_strName" => "Date_Apply",
	"m_strTable" => "enroll"
));

$proto159["m_column"]=$obj;
$proto159["m_bAsc"] = 0;
$proto159["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto159);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_enroll = createSqlQuery_enroll();
																																																																											$tdataenroll[".sqlquery"] = $queryData_enroll;

include_once(getabspath("include/enroll_events.php"));
$tableEvents["enroll"] = new eventclass_enroll;
$tdataenroll[".hasEvents"] = true;

$cipherer = new RunnerCipherer("enroll");

?>