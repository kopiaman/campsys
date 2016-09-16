<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_assesment = array();
	$tdatastudent_assesment[".NumberOfChars"] = 80; 
	$tdatastudent_assesment[".ShortName"] = "student_assesment";
	$tdatastudent_assesment[".OwnerID"] = "";
	$tdatastudent_assesment[".OriginalTable"] = "student_assesment";

//	field labels
$fieldLabelsstudent_assesment = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_assesment["English"] = array();
	$fieldToolTipsstudent_assesment["English"] = array();
	$fieldLabelsstudent_assesment["English"]["tid"] = "Tid";
	$fieldToolTipsstudent_assesment["English"]["tid"] = "";
	$fieldLabelsstudent_assesment["English"]["StudentID"] = "Student";
	$fieldToolTipsstudent_assesment["English"]["StudentID"] = "";
	$fieldLabelsstudent_assesment["English"]["topic_1"] = "GEN Subject";
	$fieldToolTipsstudent_assesment["English"]["topic_1"] = "";
	$fieldLabelsstudent_assesment["English"]["topic_2"] = "MEC Subject";
	$fieldToolTipsstudent_assesment["English"]["topic_2"] = "";
	$fieldLabelsstudent_assesment["English"]["topic_3"] = "ASD Subject";
	$fieldToolTipsstudent_assesment["English"]["topic_3"] = "";
	$fieldLabelsstudent_assesment["English"]["topic_4"] = "WNL Subject";
	$fieldToolTipsstudent_assesment["English"]["topic_4"] = "";
	$fieldLabelsstudent_assesment["English"]["topic_5"] = "ELEC Subject";
	$fieldToolTipsstudent_assesment["English"]["topic_5"] = "";
	$fieldLabelsstudent_assesment["English"]["topic_6"] = "SHM Subject";
	$fieldToolTipsstudent_assesment["English"]["topic_6"] = "";
	$fieldLabelsstudent_assesment["English"]["topic_7"] = "MNP Subject";
	$fieldToolTipsstudent_assesment["English"]["topic_7"] = "";
	$fieldLabelsstudent_assesment["English"]["taskno1"] = "GEN Task No";
	$fieldToolTipsstudent_assesment["English"]["taskno1"] = "";
	$fieldLabelsstudent_assesment["English"]["taskno2"] = "MEC Task No";
	$fieldToolTipsstudent_assesment["English"]["taskno2"] = "";
	$fieldLabelsstudent_assesment["English"]["taskno3"] = "ASD Task No";
	$fieldToolTipsstudent_assesment["English"]["taskno3"] = "";
	$fieldLabelsstudent_assesment["English"]["taskno4"] = "WNL Task No";
	$fieldToolTipsstudent_assesment["English"]["taskno4"] = "";
	$fieldLabelsstudent_assesment["English"]["taskno5"] = "ELEC Task No";
	$fieldToolTipsstudent_assesment["English"]["taskno5"] = "";
	$fieldLabelsstudent_assesment["English"]["taskno6"] = "SHM Task No";
	$fieldToolTipsstudent_assesment["English"]["taskno6"] = "";
	$fieldLabelsstudent_assesment["English"]["taskno7"] = "MNP Task No";
	$fieldToolTipsstudent_assesment["English"]["taskno7"] = "";
	$fieldLabelsstudent_assesment["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsstudent_assesment["English"]["MatricNo"] = "";
	$fieldLabelsstudent_assesment["English"]["BatchID"] = "Batch";
	$fieldToolTipsstudent_assesment["English"]["BatchID"] = "";
	$fieldLabelsstudent_assesment["English"]["DipID"] = "Course";
	$fieldToolTipsstudent_assesment["English"]["DipID"] = "";
	$fieldLabelsstudent_assesment["English"]["Intake_Category"] = "Program";
	$fieldToolTipsstudent_assesment["English"]["Intake_Category"] = "";
	$fieldLabelsstudent_assesment["English"]["Class"] = "Class";
	$fieldToolTipsstudent_assesment["English"]["Class"] = "";
	if (count($fieldToolTipsstudent_assesment["English"]))
		$tdatastudent_assesment[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_assesment[".NCSearch"] = true;



$tdatastudent_assesment[".shortTableName"] = "student_assesment";
$tdatastudent_assesment[".nSecOptions"] = 0;
$tdatastudent_assesment[".recsPerRowList"] = 1;
$tdatastudent_assesment[".mainTableOwnerID"] = "";
$tdatastudent_assesment[".moveNext"] = 1;
$tdatastudent_assesment[".nType"] = 0;

$tdatastudent_assesment[".strOriginalTableName"] = "student_assesment";




$tdatastudent_assesment[".showAddInPopup"] = false;

$tdatastudent_assesment[".showEditInPopup"] = false;

$tdatastudent_assesment[".showViewInPopup"] = false;

$tdatastudent_assesment[".fieldsForRegister"] = array();
	
$tdatastudent_assesment[".listAjax"] = false;

	$tdatastudent_assesment[".audit"] = true;

	$tdatastudent_assesment[".locking"] = false;

$tdatastudent_assesment[".listIcons"] = true;
$tdatastudent_assesment[".edit"] = true;



$tdatastudent_assesment[".delete"] = true;

$tdatastudent_assesment[".showSimpleSearchOptions"] = true;

$tdatastudent_assesment[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_assesment[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_assesment[".isUseAjaxSuggest"] = true;

$tdatastudent_assesment[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_assesment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_assesment[".isUseTimeForSearch"] = false;




$tdatastudent_assesment[".allSearchFields"] = array();

$tdatastudent_assesment[".allSearchFields"][] = "StudentID";
$tdatastudent_assesment[".allSearchFields"][] = "MatricNo";
$tdatastudent_assesment[".allSearchFields"][] = "DipID";
$tdatastudent_assesment[".allSearchFields"][] = "BatchID";
$tdatastudent_assesment[".allSearchFields"][] = "Class";
$tdatastudent_assesment[".allSearchFields"][] = "Intake_Category";
$tdatastudent_assesment[".allSearchFields"][] = "topic_1";
$tdatastudent_assesment[".allSearchFields"][] = "taskno1";
$tdatastudent_assesment[".allSearchFields"][] = "topic_2";
$tdatastudent_assesment[".allSearchFields"][] = "taskno2";
$tdatastudent_assesment[".allSearchFields"][] = "topic_3";
$tdatastudent_assesment[".allSearchFields"][] = "taskno3";
$tdatastudent_assesment[".allSearchFields"][] = "topic_4";
$tdatastudent_assesment[".allSearchFields"][] = "taskno4";
$tdatastudent_assesment[".allSearchFields"][] = "topic_5";
$tdatastudent_assesment[".allSearchFields"][] = "taskno5";
$tdatastudent_assesment[".allSearchFields"][] = "topic_6";
$tdatastudent_assesment[".allSearchFields"][] = "taskno6";
$tdatastudent_assesment[".allSearchFields"][] = "topic_7";
$tdatastudent_assesment[".allSearchFields"][] = "taskno7";

$tdatastudent_assesment[".googleLikeFields"][] = "StudentID";
$tdatastudent_assesment[".googleLikeFields"][] = "Class";

$tdatastudent_assesment[".panelSearchFields"][] = "StudentID";
$tdatastudent_assesment[".panelSearchFields"][] = "MatricNo";
$tdatastudent_assesment[".panelSearchFields"][] = "DipID";
$tdatastudent_assesment[".panelSearchFields"][] = "BatchID";
$tdatastudent_assesment[".panelSearchFields"][] = "Class";
$tdatastudent_assesment[".panelSearchFields"][] = "Intake_Category";

$tdatastudent_assesment[".advSearchFields"][] = "StudentID";
$tdatastudent_assesment[".advSearchFields"][] = "MatricNo";
$tdatastudent_assesment[".advSearchFields"][] = "DipID";
$tdatastudent_assesment[".advSearchFields"][] = "BatchID";
$tdatastudent_assesment[".advSearchFields"][] = "Class";
$tdatastudent_assesment[".advSearchFields"][] = "Intake_Category";
$tdatastudent_assesment[".advSearchFields"][] = "topic_1";
$tdatastudent_assesment[".advSearchFields"][] = "taskno1";
$tdatastudent_assesment[".advSearchFields"][] = "topic_2";
$tdatastudent_assesment[".advSearchFields"][] = "taskno2";
$tdatastudent_assesment[".advSearchFields"][] = "topic_3";
$tdatastudent_assesment[".advSearchFields"][] = "taskno3";
$tdatastudent_assesment[".advSearchFields"][] = "topic_4";
$tdatastudent_assesment[".advSearchFields"][] = "taskno4";
$tdatastudent_assesment[".advSearchFields"][] = "topic_5";
$tdatastudent_assesment[".advSearchFields"][] = "taskno5";
$tdatastudent_assesment[".advSearchFields"][] = "topic_6";
$tdatastudent_assesment[".advSearchFields"][] = "taskno6";
$tdatastudent_assesment[".advSearchFields"][] = "topic_7";
$tdatastudent_assesment[".advSearchFields"][] = "taskno7";

$tdatastudent_assesment[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_assesment[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_assesment.StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_assesment[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_assesment[".orderindexes"] = array();
$tdatastudent_assesment[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "student_assesment.StudentID");

$tdatastudent_assesment[".sqlHead"] = "SELECT student_assesment.tid,  student_assesment.StudentID,  student_assesment.topic_1,  student_assesment.topic_2,  student_assesment.topic_3,  student_assesment.topic_4,  student_assesment.topic_5,  student_assesment.topic_6,  student_assesment.topic_7,  student_assesment.taskno1,  student_assesment.taskno2,  student_assesment.taskno3,  student_assesment.taskno4,  student_assesment.taskno5,  student_assesment.taskno6,  student_assesment.taskno7,  student_info.MatricNo,  student_info.BatchID,  student_info.DipID,  student_info.Intake_Category,  student_info.`Class`";
$tdatastudent_assesment[".sqlFrom"] = "FROM student_assesment  INNER JOIN student_info ON student_assesment.StudentID = student_info.StudentID";
$tdatastudent_assesment[".sqlWhereExpr"] = "";
$tdatastudent_assesment[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "topic_1";
	$tabFields[] = "taskno1";
$arrEditTabs[] = array('tabId'=>'1__General_Aircraft_Maintenance1',
					   'tabName'=>"1. GM",
					   'nType'=>'0',
					   'nOrder'=>2,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_2";
	$tabFields[] = "taskno2";
$arrEditTabs[] = array('tabId'=>'2__Mechanical_Fitting_Practices__Common_1',
					   'tabName'=>"2. MF",
					   'nType'=>'0',
					   'nOrder'=>5,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_3";
	$tabFields[] = "taskno3";
$arrEditTabs[] = array('tabId'=>'3__Assembly___Disassembly_Practices__Common_1',
					   'tabName'=>"3.ADP",
					   'nType'=>'0',
					   'nOrder'=>8,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_4";
	$tabFields[] = "taskno4";
$arrEditTabs[] = array('tabId'=>'4__Wiring_and_Looming__Common_1',
					   'tabName'=>"4. WL",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_5";
	$tabFields[] = "taskno5";
$arrEditTabs[] = array('tabId'=>'5__Electrical_Power___Avionic_Systems__Common_1',
					   'tabName'=>"5. ES",
					   'nType'=>'0',
					   'nOrder'=>14,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_6";
	$tabFields[] = "taskno6";
$arrEditTabs[] = array('tabId'=>'6_0_Sheet_Metal_Practices1',
					   'tabName'=>"6. SM",
					   'nType'=>'0',
					   'nOrder'=>17,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_7";
	$tabFields[] = "taskno7";
$arrEditTabs[] = array('tabId'=>'7__Maintenance_Practices1',
					   'tabName'=>"7. MP",
					   'nType'=>'0',
					   'nOrder'=>20,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatastudent_assesment[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "topic_1";
	$tabFields[] = "taskno1";
$arrAddTabs[] = array('tabId'=>'1__General_Aircraft_Maintenance1',
					  'tabName'=>"1. GM",
					  'nType'=>'0',
					  'nOrder'=>2,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_2";
	$tabFields[] = "taskno2";
$arrAddTabs[] = array('tabId'=>'2__Mechanical_Fitting_Practices__Common_1',
					  'tabName'=>"2. MF",
					  'nType'=>'0',
					  'nOrder'=>5,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_3";
	$tabFields[] = "taskno3";
$arrAddTabs[] = array('tabId'=>'3__Assembly___Disassembly_Practices__Common_1',
					  'tabName'=>"3.ADP",
					  'nType'=>'0',
					  'nOrder'=>8,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_4";
	$tabFields[] = "taskno4";
$arrAddTabs[] = array('tabId'=>'4__Wiring_and_Looming__Common_1',
					  'tabName'=>"4. WL",
					  'nType'=>'0',
					  'nOrder'=>11,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_5";
	$tabFields[] = "taskno5";
$arrAddTabs[] = array('tabId'=>'5__Electrical_Power___Avionic_Systems__Common_1',
					  'tabName'=>"5. ES",
					  'nType'=>'0',
					  'nOrder'=>14,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_6";
	$tabFields[] = "taskno6";
$arrAddTabs[] = array('tabId'=>'6_0_Sheet_Metal_Practices1',
					  'tabName'=>"6. SM",
					  'nType'=>'0',
					  'nOrder'=>17,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_7";
	$tabFields[] = "taskno7";
$arrAddTabs[] = array('tabId'=>'7__Maintenance_Practices1',
					  'tabName'=>"7. MP",
					  'nType'=>'0',
					  'nOrder'=>20,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatastudent_assesment[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "topic_1";
	$tabFields[] = "taskno1";
$arrViewTabs[] = array('tabId'=>'1__General_Aircraft_Maintenance1',
					   'tabName'=>"1. GM",
					   'nType'=>'0',
					   'nOrder'=>2,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_2";
	$tabFields[] = "taskno2";
$arrViewTabs[] = array('tabId'=>'2__Mechanical_Fitting_Practices__Common_1',
					   'tabName'=>"2. MF",
					   'nType'=>'0',
					   'nOrder'=>5,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_3";
	$tabFields[] = "taskno3";
$arrViewTabs[] = array('tabId'=>'3__Assembly___Disassembly_Practices__Common_1',
					   'tabName'=>"3.ADP",
					   'nType'=>'0',
					   'nOrder'=>8,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_4";
	$tabFields[] = "taskno4";
$arrViewTabs[] = array('tabId'=>'4__Wiring_and_Looming__Common_1',
					   'tabName'=>"4. WL",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_5";
	$tabFields[] = "taskno5";
$arrViewTabs[] = array('tabId'=>'5__Electrical_Power___Avionic_Systems__Common_1',
					   'tabName'=>"5. ES",
					   'nType'=>'0',
					   'nOrder'=>14,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_6";
	$tabFields[] = "taskno6";
$arrViewTabs[] = array('tabId'=>'6_0_Sheet_Metal_Practices1',
					   'tabName'=>"6. SM",
					   'nType'=>'0',
					   'nOrder'=>17,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_7";
	$tabFields[] = "taskno7";
$arrViewTabs[] = array('tabId'=>'7__Maintenance_Practices1',
					   'tabName'=>"7. MP",
					   'nType'=>'0',
					   'nOrder'=>20,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatastudent_assesment[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_assesment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_assesment[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_assesment = array();
$tableKeysstudent_assesment[] = "tid";
$tdatastudent_assesment[".Keys"] = $tableKeysstudent_assesment;

$tdatastudent_assesment[".listFields"] = array();
$tdatastudent_assesment[".listFields"][] = "StudentID";
$tdatastudent_assesment[".listFields"][] = "DipID";
$tdatastudent_assesment[".listFields"][] = "BatchID";

$tdatastudent_assesment[".viewFields"] = array();

$tdatastudent_assesment[".addFields"] = array();
$tdatastudent_assesment[".addFields"][] = "StudentID";
$tdatastudent_assesment[".addFields"][] = "topic_1";
$tdatastudent_assesment[".addFields"][] = "taskno1";
$tdatastudent_assesment[".addFields"][] = "topic_2";
$tdatastudent_assesment[".addFields"][] = "taskno2";
$tdatastudent_assesment[".addFields"][] = "topic_3";
$tdatastudent_assesment[".addFields"][] = "taskno3";
$tdatastudent_assesment[".addFields"][] = "topic_4";
$tdatastudent_assesment[".addFields"][] = "taskno4";
$tdatastudent_assesment[".addFields"][] = "topic_5";
$tdatastudent_assesment[".addFields"][] = "taskno5";
$tdatastudent_assesment[".addFields"][] = "topic_6";
$tdatastudent_assesment[".addFields"][] = "taskno6";
$tdatastudent_assesment[".addFields"][] = "topic_7";
$tdatastudent_assesment[".addFields"][] = "taskno7";

$tdatastudent_assesment[".inlineAddFields"] = array();

$tdatastudent_assesment[".editFields"] = array();
$tdatastudent_assesment[".editFields"][] = "topic_1";
$tdatastudent_assesment[".editFields"][] = "taskno1";
$tdatastudent_assesment[".editFields"][] = "topic_2";
$tdatastudent_assesment[".editFields"][] = "taskno2";
$tdatastudent_assesment[".editFields"][] = "topic_3";
$tdatastudent_assesment[".editFields"][] = "taskno3";
$tdatastudent_assesment[".editFields"][] = "topic_4";
$tdatastudent_assesment[".editFields"][] = "taskno4";
$tdatastudent_assesment[".editFields"][] = "topic_5";
$tdatastudent_assesment[".editFields"][] = "taskno5";
$tdatastudent_assesment[".editFields"][] = "topic_6";
$tdatastudent_assesment[".editFields"][] = "taskno6";
$tdatastudent_assesment[".editFields"][] = "topic_7";
$tdatastudent_assesment[".editFields"][] = "taskno7";

$tdatastudent_assesment[".inlineEditFields"] = array();

$tdatastudent_assesment[".exportFields"] = array();

$tdatastudent_assesment[".printFields"] = array();

//	tid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tid";
	$fdata["GoodName"] = "tid";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "Tid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "tid"; 
		$fdata["FullName"] = "student_assesment.tid";
	
		
		
				
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
	
		
		
	$tdatastudent_assesment["tid"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_assesment.StudentID";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:338px;";
	$edata["controlWidth"] = 338;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:338px;";
	$edata["controlWidth"] = 338;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
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
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatastudent_assesment["StudentID"] = $fdata;
//	topic_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "topic_1";
	$fdata["GoodName"] = "topic_1";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "GEN Subject"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_1"; 
		$fdata["FullName"] = "student_assesment.topic_1";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=1";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=1";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=1";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatastudent_assesment["topic_1"] = $fdata;
//	topic_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "topic_2";
	$fdata["GoodName"] = "topic_2";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "MEC Subject"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_2"; 
		$fdata["FullName"] = "student_assesment.topic_2";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=2";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=2";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=2";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatastudent_assesment["topic_2"] = $fdata;
//	topic_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "topic_3";
	$fdata["GoodName"] = "topic_3";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "ASD Subject"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_3"; 
		$fdata["FullName"] = "student_assesment.topic_3";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=3";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=3";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=3";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatastudent_assesment["topic_3"] = $fdata;
//	topic_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "topic_4";
	$fdata["GoodName"] = "topic_4";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "WNL Subject"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_4"; 
		$fdata["FullName"] = "student_assesment.topic_4";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=4";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=4";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=4";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatastudent_assesment["topic_4"] = $fdata;
//	topic_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "topic_5";
	$fdata["GoodName"] = "topic_5";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "ELEC Subject"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_5"; 
		$fdata["FullName"] = "student_assesment.topic_5";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=5";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=5";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=5";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatastudent_assesment["topic_5"] = $fdata;
//	topic_6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "topic_6";
	$fdata["GoodName"] = "topic_6";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "SHM Subject"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_6"; 
		$fdata["FullName"] = "student_assesment.topic_6";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=6";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=6";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=6";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatastudent_assesment["topic_6"] = $fdata;
//	topic_7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "topic_7";
	$fdata["GoodName"] = "topic_7";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "MNP Subject"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_7"; 
		$fdata["FullName"] = "student_assesment.topic_7";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=7";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=7";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=7";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatastudent_assesment["topic_7"] = $fdata;
//	taskno1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "taskno1";
	$fdata["GoodName"] = "taskno1";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "GEN Task No"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "taskno1"; 
		$fdata["FullName"] = "student_assesment.taskno1";
	
		
		
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
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "taskno";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "taskno";
	
		
	$edata["LookupTable"] = "eva_ass_taskno";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "sub_topic like '1%'";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_assesment["taskno1"] = $fdata;
//	taskno2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "taskno2";
	$fdata["GoodName"] = "taskno2";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "MEC Task No"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "taskno2"; 
		$fdata["FullName"] = "student_assesment.taskno2";
	
		
		
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
				$edata["LCType"] = 3;
			
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "taskno";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "taskno";
	
		
	$edata["LookupTable"] = "eva_ass_taskno";
	$edata["LookupOrderBy"] = "taskno";
	
		
		$edata["LookupWhere"] = "sub_topic like '2%'";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_assesment["taskno2"] = $fdata;
//	taskno3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "taskno3";
	$fdata["GoodName"] = "taskno3";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "ASD Task No"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "taskno3"; 
		$fdata["FullName"] = "student_assesment.taskno3";
	
		
		
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
				$edata["LCType"] = 3;
			
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "taskno";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "taskno";
	
		
	$edata["LookupTable"] = "eva_ass_taskno";
	$edata["LookupOrderBy"] = "taskno";
	
		
		$edata["LookupWhere"] = "sub_topic like '3%'";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_assesment["taskno3"] = $fdata;
//	taskno4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "taskno4";
	$fdata["GoodName"] = "taskno4";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "WNL Task No"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "taskno4"; 
		$fdata["FullName"] = "student_assesment.taskno4";
	
		
		
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
				$edata["LCType"] = 3;
			
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "taskno";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "taskno";
	
		
	$edata["LookupTable"] = "eva_ass_taskno";
	$edata["LookupOrderBy"] = "taskno";
	
		
		$edata["LookupWhere"] = "sub_topic like '4%'";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_assesment["taskno4"] = $fdata;
//	taskno5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "taskno5";
	$fdata["GoodName"] = "taskno5";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "ELEC Task No"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "taskno5"; 
		$fdata["FullName"] = "student_assesment.taskno5";
	
		
		
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
				$edata["LCType"] = 3;
			
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "taskno";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "taskno";
	
		
	$edata["LookupTable"] = "eva_ass_taskno";
	$edata["LookupOrderBy"] = "taskno";
	
		
		$edata["LookupWhere"] = "sub_topic like '5%'";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_assesment["taskno5"] = $fdata;
//	taskno6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "taskno6";
	$fdata["GoodName"] = "taskno6";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "SHM Task No"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "taskno6"; 
		$fdata["FullName"] = "student_assesment.taskno6";
	
		
		
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
				$edata["LCType"] = 3;
			
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "taskno";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "taskno";
	
		
	$edata["LookupTable"] = "eva_ass_taskno";
	$edata["LookupOrderBy"] = "taskno";
	
		
		$edata["LookupWhere"] = "sub_topic like '6%'";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_assesment["taskno6"] = $fdata;
//	taskno7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "taskno7";
	$fdata["GoodName"] = "taskno7";
	$fdata["ownerTable"] = "student_assesment";
	$fdata["Label"] = "MNP Task No"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "taskno7"; 
		$fdata["FullName"] = "student_assesment.taskno7";
	
		
		
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
				$edata["LCType"] = 3;
			
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "taskno";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "taskno";
	
		
	$edata["LookupTable"] = "eva_ass_taskno";
	$edata["LookupOrderBy"] = "taskno";
	
		
		$edata["LookupWhere"] = "sub_topic like '7%'";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_assesment["taskno7"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Matric No"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "student_info.MatricNo";
	
		
		
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
	
		
		
	$tdatastudent_assesment["MatricNo"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "student_info.BatchID";
	
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_assesment["BatchID"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "student_info.DipID";
	
		
		
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
				
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "shortcut_name";
	
		
	$edata["LookupTable"] = "program";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_assesment["DipID"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Intake_Category";
	$fdata["GoodName"] = "Intake_Category";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Program"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Intake_Category"; 
		$fdata["FullName"] = "student_info.Intake_Category";
	
		
		
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
				
		
			
	$edata["LinkField"] = "Intake_Code";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Intake_Category";
	
		
	$edata["LookupTable"] = "set_intake_category";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_assesment["Intake_Category"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "student_info.`Class`";
	
		
		
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
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "group";
	
		
	$edata["LookupTable"] = "group";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_assesment["Class"] = $fdata;

	
$tables_data["student_assesment"]=&$tdatastudent_assesment;
$field_labels["student_assesment"] = &$fieldLabelsstudent_assesment;
$fieldToolTips["student_assesment"] = &$fieldToolTipsstudent_assesment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_assesment"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_assesment"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_assesment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_assesment.tid,  student_assesment.StudentID,  student_assesment.topic_1,  student_assesment.topic_2,  student_assesment.topic_3,  student_assesment.topic_4,  student_assesment.topic_5,  student_assesment.topic_6,  student_assesment.topic_7,  student_assesment.taskno1,  student_assesment.taskno2,  student_assesment.taskno3,  student_assesment.taskno4,  student_assesment.taskno5,  student_assesment.taskno6,  student_assesment.taskno7,  student_info.MatricNo,  student_info.BatchID,  student_info.DipID,  student_info.Intake_Category,  student_info.`Class`";
$proto0["m_strFrom"] = "FROM student_assesment  INNER JOIN student_info ON student_assesment.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY student_assesment.StudentID DESC";
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
	"m_strName" => "tid",
	"m_strTable" => "student_assesment"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_assesment"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_1",
	"m_strTable" => "student_assesment"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_2",
	"m_strTable" => "student_assesment"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_3",
	"m_strTable" => "student_assesment"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_4",
	"m_strTable" => "student_assesment"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_5",
	"m_strTable" => "student_assesment"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_6",
	"m_strTable" => "student_assesment"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_7",
	"m_strTable" => "student_assesment"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "taskno1",
	"m_strTable" => "student_assesment"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "taskno2",
	"m_strTable" => "student_assesment"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "taskno3",
	"m_strTable" => "student_assesment"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "taskno4",
	"m_strTable" => "student_assesment"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "taskno5",
	"m_strTable" => "student_assesment"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "taskno6",
	"m_strTable" => "student_assesment"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "taskno7",
	"m_strTable" => "student_assesment"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "student_assesment";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "tid";
$proto48["m_columns"][] = "StudentID";
$proto48["m_columns"][] = "topic_1";
$proto48["m_columns"][] = "topic_2";
$proto48["m_columns"][] = "topic_3";
$proto48["m_columns"][] = "topic_4";
$proto48["m_columns"][] = "topic_5";
$proto48["m_columns"][] = "topic_6";
$proto48["m_columns"][] = "topic_7";
$proto48["m_columns"][] = "taskno1";
$proto48["m_columns"][] = "taskno2";
$proto48["m_columns"][] = "taskno3";
$proto48["m_columns"][] = "taskno4";
$proto48["m_columns"][] = "taskno5";
$proto48["m_columns"][] = "taskno6";
$proto48["m_columns"][] = "taskno7";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_alias"] = "";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = "0";
$proto49["m_inBrackets"] = "0";
$proto49["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
												$proto51=array();
$proto51["m_link"] = "SQLL_INNERJOIN";
			$proto52=array();
$proto52["m_strName"] = "student_info";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "StudentID";
$proto52["m_columns"][] = "Name";
$proto52["m_columns"][] = "ICNO";
$proto52["m_columns"][] = "DOB";
$proto52["m_columns"][] = "MatricNo";
$proto52["m_columns"][] = "Nogilir";
$proto52["m_columns"][] = "Email";
$proto52["m_columns"][] = "Access";
$proto52["m_columns"][] = "Passw";
$proto52["m_columns"][] = "Type";
$proto52["m_columns"][] = "BranchID";
$proto52["m_columns"][] = "DateJoin";
$proto52["m_columns"][] = "Dateout";
$proto52["m_columns"][] = "Gender";
$proto52["m_columns"][] = "married";
$proto52["m_columns"][] = "Address1";
$proto52["m_columns"][] = "City";
$proto52["m_columns"][] = "Postcode";
$proto52["m_columns"][] = "StateID";
$proto52["m_columns"][] = "Country";
$proto52["m_columns"][] = "HomeTelephone";
$proto52["m_columns"][] = "MobileTelephone";
$proto52["m_columns"][] = "Nationality";
$proto52["m_columns"][] = "Passport";
$proto52["m_columns"][] = "BatchID";
$proto52["m_columns"][] = "Intake";
$proto52["m_columns"][] = "Sponsor";
$proto52["m_columns"][] = "DipID";
$proto52["m_columns"][] = "Status";
$proto52["m_columns"][] = "Disability";
$proto52["m_columns"][] = "MedicalCondition";
$proto52["m_columns"][] = "race";
$proto52["m_columns"][] = "Religion";
$proto52["m_columns"][] = "Class";
$proto52["m_columns"][] = "Intake_Category";
$proto52["m_columns"][] = "f1_name";
$proto52["m_columns"][] = "f1_tel";
$proto52["m_columns"][] = "f1_relation";
$proto52["m_columns"][] = "f2_name";
$proto52["m_columns"][] = "f2_tel";
$proto52["m_columns"][] = "f2_relation";
$proto52["m_columns"][] = "blood";
$proto52["m_columns"][] = "hostel_in";
$proto52["m_columns"][] = "job";
$proto52["m_columns"][] = "al_certificate";
$proto52["m_columns"][] = "al_license";
$proto52["m_columns"][] = "f_name";
$proto52["m_columns"][] = "f_tel";
$proto52["m_columns"][] = "f_ic";
$proto52["m_columns"][] = "f_job";
$proto52["m_columns"][] = "f_address";
$proto52["m_columns"][] = "m_name";
$proto52["m_columns"][] = "m_tel";
$proto52["m_columns"][] = "m_ic";
$proto52["m_columns"][] = "m_job";
$proto52["m_columns"][] = "m_address";
$proto52["m_columns"][] = "qua_year";
$proto52["m_columns"][] = "qua_level";
$proto52["m_columns"][] = "qua_result";
$proto52["m_columns"][] = "qua_place";
$proto52["m_columns"][] = "photo";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_alias"] = "";
$proto53=array();
$proto53["m_sql"] = "student_assesment.StudentID = student_info.StudentID";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_assesment"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= student_info.StudentID";
$proto53["m_havingmode"] = "0";
$proto53["m_inBrackets"] = "0";
$proto53["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_assesment"
));

$proto55["m_column"]=$obj;
$proto55["m_bAsc"] = 0;
$proto55["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto55);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_assesment = createSqlQuery_student_assesment();
																					$tdatastudent_assesment[".sqlquery"] = $queryData_student_assesment;

include_once(getabspath("include/student_assesment_events.php"));
$tableEvents["student_assesment"] = new eventclass_student_assesment;
$tdatastudent_assesment[".hasEvents"] = true;

$cipherer = new RunnerCipherer("student_assesment");

?>