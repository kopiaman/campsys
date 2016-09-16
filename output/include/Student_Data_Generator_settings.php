<?php
require_once(getabspath("classes/cipherer.php"));
$tdataStudent_Data_Generator = array();
	$tdataStudent_Data_Generator[".NumberOfChars"] = 80; 
	$tdataStudent_Data_Generator[".ShortName"] = "Student_Data_Generator";
	$tdataStudent_Data_Generator[".OwnerID"] = "";
	$tdataStudent_Data_Generator[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsStudent_Data_Generator = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsStudent_Data_Generator["English"] = array();
	$fieldToolTipsStudent_Data_Generator["English"] = array();
	$fieldLabelsStudent_Data_Generator["English"]["StudentID"] = "Student";
	$fieldToolTipsStudent_Data_Generator["English"]["StudentID"] = "";
	$fieldLabelsStudent_Data_Generator["English"]["Name"] = "Name";
	$fieldToolTipsStudent_Data_Generator["English"]["Name"] = "";
	$fieldLabelsStudent_Data_Generator["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsStudent_Data_Generator["English"]["MatricNo"] = "";
	$fieldLabelsStudent_Data_Generator["English"]["BatchID"] = "Batch";
	$fieldToolTipsStudent_Data_Generator["English"]["BatchID"] = "";
	$fieldLabelsStudent_Data_Generator["English"]["DipID"] = "Program";
	$fieldToolTipsStudent_Data_Generator["English"]["DipID"] = "";
	$fieldLabelsStudent_Data_Generator["English"]["Status"] = "Status";
	$fieldToolTipsStudent_Data_Generator["English"]["Status"] = "";
	$fieldLabelsStudent_Data_Generator["English"]["Class"] = "Class";
	$fieldToolTipsStudent_Data_Generator["English"]["Class"] = "";
	$fieldLabelsStudent_Data_Generator["English"]["Intake_Category"] = "Course Program";
	$fieldToolTipsStudent_Data_Generator["English"]["Intake_Category"] = "";
	$fieldLabelsStudent_Data_Generator["English"]["Option"] = "Option";
	$fieldToolTipsStudent_Data_Generator["English"]["Option"] = "";
	$fieldLabelsStudent_Data_Generator["English"]["data_status"] = "Data Status";
	$fieldToolTipsStudent_Data_Generator["English"]["data_status"] = "";
	if (count($fieldToolTipsStudent_Data_Generator["English"]))
		$tdataStudent_Data_Generator[".isUseToolTips"] = true;
}
	
	



$tdataStudent_Data_Generator[".shortTableName"] = "Student_Data_Generator";
$tdataStudent_Data_Generator[".nSecOptions"] = 0;
$tdataStudent_Data_Generator[".recsPerRowList"] = 1;
$tdataStudent_Data_Generator[".mainTableOwnerID"] = "";
$tdataStudent_Data_Generator[".moveNext"] = 1;
$tdataStudent_Data_Generator[".nType"] = 1;

$tdataStudent_Data_Generator[".strOriginalTableName"] = "student_info";




$tdataStudent_Data_Generator[".showAddInPopup"] = false;

$tdataStudent_Data_Generator[".showEditInPopup"] = false;

$tdataStudent_Data_Generator[".showViewInPopup"] = true;

$tdataStudent_Data_Generator[".fieldsForRegister"] = array();
	
$tdataStudent_Data_Generator[".listAjax"] = false;

	$tdataStudent_Data_Generator[".audit"] = true;

	$tdataStudent_Data_Generator[".locking"] = false;

$tdataStudent_Data_Generator[".listIcons"] = true;
$tdataStudent_Data_Generator[".inlineEdit"] = true;




$tdataStudent_Data_Generator[".showSimpleSearchOptions"] = false;

$tdataStudent_Data_Generator[".showSearchPanel"] = true;

if (isMobile())
	$tdataStudent_Data_Generator[".isUseAjaxSuggest"] = false;
else 
	$tdataStudent_Data_Generator[".isUseAjaxSuggest"] = true;

$tdataStudent_Data_Generator[".rowHighlite"] = true;

// button handlers file names
$tdataStudent_Data_Generator[".isUsebuttonHandlers"] = true;
$tdataStudent_Data_Generator[".isUsebuttonHandlers"] = true;
$tdataStudent_Data_Generator[".isUsebuttonHandlers"] = true;
$tdataStudent_Data_Generator[".isUsebuttonHandlers"] = true;

$tdataStudent_Data_Generator[".addPageEvents"] = false;

// use timepicker for search panel
$tdataStudent_Data_Generator[".isUseTimeForSearch"] = false;




$tdataStudent_Data_Generator[".allSearchFields"] = array();

$tdataStudent_Data_Generator[".allSearchFields"][] = "Name";
$tdataStudent_Data_Generator[".allSearchFields"][] = "Status";
$tdataStudent_Data_Generator[".allSearchFields"][] = "MatricNo";
$tdataStudent_Data_Generator[".allSearchFields"][] = "DipID";
$tdataStudent_Data_Generator[".allSearchFields"][] = "BatchID";
$tdataStudent_Data_Generator[".allSearchFields"][] = "Class";
$tdataStudent_Data_Generator[".allSearchFields"][] = "data_status";
$tdataStudent_Data_Generator[".allSearchFields"][] = "Intake_Category";

$tdataStudent_Data_Generator[".googleLikeFields"][] = "Name";
$tdataStudent_Data_Generator[".googleLikeFields"][] = "data_status";

$tdataStudent_Data_Generator[".panelSearchFields"][] = "Name";
$tdataStudent_Data_Generator[".panelSearchFields"][] = "Status";
$tdataStudent_Data_Generator[".panelSearchFields"][] = "MatricNo";
$tdataStudent_Data_Generator[".panelSearchFields"][] = "DipID";
$tdataStudent_Data_Generator[".panelSearchFields"][] = "BatchID";
$tdataStudent_Data_Generator[".panelSearchFields"][] = "Class";
$tdataStudent_Data_Generator[".panelSearchFields"][] = "Intake_Category";

$tdataStudent_Data_Generator[".advSearchFields"][] = "Name";
$tdataStudent_Data_Generator[".advSearchFields"][] = "Status";
$tdataStudent_Data_Generator[".advSearchFields"][] = "MatricNo";
$tdataStudent_Data_Generator[".advSearchFields"][] = "DipID";
$tdataStudent_Data_Generator[".advSearchFields"][] = "BatchID";
$tdataStudent_Data_Generator[".advSearchFields"][] = "Class";
$tdataStudent_Data_Generator[".advSearchFields"][] = "data_status";
$tdataStudent_Data_Generator[".advSearchFields"][] = "Intake_Category";

$tdataStudent_Data_Generator[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataStudent_Data_Generator[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataStudent_Data_Generator[".strOrderBy"] = $tstrOrderBy;

$tdataStudent_Data_Generator[".orderindexes"] = array();
$tdataStudent_Data_Generator[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "StudentID");

$tdataStudent_Data_Generator[".sqlHead"] = "SELECT StudentID,  Name,  MatricNo,  BatchID,  DipID,  Status,  `Class`,  Intake_Category,  data_status,  StudentID AS `Option`";
$tdataStudent_Data_Generator[".sqlFrom"] = "FROM student_info";
$tdataStudent_Data_Generator[".sqlWhereExpr"] = "";
$tdataStudent_Data_Generator[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
$arrEditTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Family_Info1',
					   'tabName'=>"Family Info",
					   'nType'=>'0',
					   'nOrder'=>17,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Status";
	$tabFields[] = "MatricNo";
	$tabFields[] = "Intake_Category";
	$tabFields[] = "DipID";
	$tabFields[] = "BatchID";
	$tabFields[] = "Class";
$arrEditTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>33,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Qualification1',
					   'tabName'=>"Qualification",
					   'nType'=>'0',
					   'nOrder'=>43,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>48,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataStudent_Data_Generator[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
$arrAddTabs[] = array('tabId'=>'Personal1',
					  'tabName'=>"Personal",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Family_Info1',
					  'tabName'=>"Family Info",
					  'nType'=>'0',
					  'nOrder'=>17,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Next_Of_Kin1',
					  'tabName'=>"Next Of Kin",
					  'nType'=>'0',
					  'nOrder'=>26,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Status";
	$tabFields[] = "MatricNo";
	$tabFields[] = "Intake_Category";
	$tabFields[] = "DipID";
	$tabFields[] = "BatchID";
	$tabFields[] = "Class";
$arrAddTabs[] = array('tabId'=>'Campus_Info1',
					  'tabName'=>"Campus Info",
					  'nType'=>'0',
					  'nOrder'=>33,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Qualification1',
					  'tabName'=>"Qualification",
					  'nType'=>'0',
					  'nOrder'=>43,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Medical1',
					  'tabName'=>"Medical",
					  'nType'=>'0',
					  'nOrder'=>48,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataStudent_Data_Generator[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
$arrViewTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Family_Info1',
					   'tabName'=>"Family Info",
					   'nType'=>'0',
					   'nOrder'=>17,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Status";
	$tabFields[] = "MatricNo";
	$tabFields[] = "Intake_Category";
	$tabFields[] = "DipID";
	$tabFields[] = "BatchID";
	$tabFields[] = "Class";
$arrViewTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>33,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Qualification1',
					   'tabName'=>"Qualification",
					   'nType'=>'0',
					   'nOrder'=>43,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>48,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataStudent_Data_Generator[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataStudent_Data_Generator[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataStudent_Data_Generator[".arrGroupsPerPage"] = $arrGPP;

$tableKeysStudent_Data_Generator = array();
$tableKeysStudent_Data_Generator[] = "StudentID";
$tdataStudent_Data_Generator[".Keys"] = $tableKeysStudent_Data_Generator;

$tdataStudent_Data_Generator[".listFields"] = array();
$tdataStudent_Data_Generator[".listFields"][] = "Name";
$tdataStudent_Data_Generator[".listFields"][] = "Status";
$tdataStudent_Data_Generator[".listFields"][] = "MatricNo";
$tdataStudent_Data_Generator[".listFields"][] = "DipID";
$tdataStudent_Data_Generator[".listFields"][] = "BatchID";
$tdataStudent_Data_Generator[".listFields"][] = "Class";
$tdataStudent_Data_Generator[".listFields"][] = "data_status";
$tdataStudent_Data_Generator[".listFields"][] = "Option";

$tdataStudent_Data_Generator[".viewFields"] = array();

$tdataStudent_Data_Generator[".addFields"] = array();

$tdataStudent_Data_Generator[".inlineAddFields"] = array();

$tdataStudent_Data_Generator[".editFields"] = array();

$tdataStudent_Data_Generator[".inlineEditFields"] = array();
$tdataStudent_Data_Generator[".inlineEditFields"][] = "MatricNo";
$tdataStudent_Data_Generator[".inlineEditFields"][] = "BatchID";
$tdataStudent_Data_Generator[".inlineEditFields"][] = "Class";

$tdataStudent_Data_Generator[".exportFields"] = array();

$tdataStudent_Data_Generator[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataStudent_Data_Generator["StudentID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";
	
		$edata["inputStyle"] = " width:266px;";
	$edata["controlWidth"] = 266;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataStudent_Data_Generator["Name"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Matric No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "MatricNo";
	
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
	
		
		
		$edata["strEditMask"] = "aa 99**99 9999 aa"; 

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
	
		
		
	$tdataStudent_Data_Generator["MatricNo"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "BatchID";
	
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
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
	
		
		
	$tdataStudent_Data_Generator["BatchID"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Program"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
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
				
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "shortcut_name";
	
		
	$edata["LookupTable"] = "program";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
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
	
		
		
	$tdataStudent_Data_Generator["DipID"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Status"; 
		$fdata["FullName"] = "Status";
	
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
	
		
		$edata["LookupWhere"] = "Class=5";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataStudent_Data_Generator["Status"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "`Class`";
	
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
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "group";
	
		
	$edata["LookupTable"] = "group";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
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
	
		
		
	$tdataStudent_Data_Generator["Class"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Intake_Category";
	$fdata["GoodName"] = "Intake_Category";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Course Program"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Intake_Category"; 
		$fdata["FullName"] = "Intake_Category";
	
		
		
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
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
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
	
		
		
	$tdataStudent_Data_Generator["Intake_Category"] = $fdata;
//	data_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "data_status";
	$fdata["GoodName"] = "data_status";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Data Status"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "data_status"; 
		$fdata["FullName"] = "data_status";
	
		
		
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
	
		
		
	$tdataStudent_Data_Generator["data_status"] = $fdata;
//	Option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Option";
	$fdata["GoodName"] = "Option";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Option"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
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
	
		
		
	$tdataStudent_Data_Generator["Option"] = $fdata;

	
$tables_data["Student_Data_Generator"]=&$tdataStudent_Data_Generator;
$field_labels["Student_Data_Generator"] = &$fieldLabelsStudent_Data_Generator;
$fieldToolTips["Student_Data_Generator"] = &$fieldToolTipsStudent_Data_Generator;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Student_Data_Generator"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Student_Data_Generator"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Student_Data_Generator()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "StudentID,  Name,  MatricNo,  BatchID,  DipID,  Status,  `Class`,  Intake_Category,  data_status,  StudentID AS `Option`";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY StudentID DESC";
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
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "data_status"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Option";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "student_info";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "StudentID";
$proto26["m_columns"][] = "Name";
$proto26["m_columns"][] = "ICNO";
$proto26["m_columns"][] = "DOB";
$proto26["m_columns"][] = "MatricNo";
$proto26["m_columns"][] = "Nogilir";
$proto26["m_columns"][] = "Email";
$proto26["m_columns"][] = "Access";
$proto26["m_columns"][] = "Passw";
$proto26["m_columns"][] = "Type";
$proto26["m_columns"][] = "BranchID";
$proto26["m_columns"][] = "DateJoin";
$proto26["m_columns"][] = "Dateout";
$proto26["m_columns"][] = "Gender";
$proto26["m_columns"][] = "married";
$proto26["m_columns"][] = "Address1";
$proto26["m_columns"][] = "City";
$proto26["m_columns"][] = "Postcode";
$proto26["m_columns"][] = "StateID";
$proto26["m_columns"][] = "Country";
$proto26["m_columns"][] = "HomeTelephone";
$proto26["m_columns"][] = "MobileTelephone";
$proto26["m_columns"][] = "Nationality";
$proto26["m_columns"][] = "Passport";
$proto26["m_columns"][] = "BatchID";
$proto26["m_columns"][] = "Intake";
$proto26["m_columns"][] = "Sponsor";
$proto26["m_columns"][] = "DipID";
$proto26["m_columns"][] = "Status";
$proto26["m_columns"][] = "Disability";
$proto26["m_columns"][] = "MedicalCondition";
$proto26["m_columns"][] = "race";
$proto26["m_columns"][] = "Religion";
$proto26["m_columns"][] = "Class";
$proto26["m_columns"][] = "Intake_Category";
$proto26["m_columns"][] = "f1_name";
$proto26["m_columns"][] = "f1_tel";
$proto26["m_columns"][] = "f1_relation";
$proto26["m_columns"][] = "f2_name";
$proto26["m_columns"][] = "f2_tel";
$proto26["m_columns"][] = "f2_relation";
$proto26["m_columns"][] = "blood";
$proto26["m_columns"][] = "hostel_in";
$proto26["m_columns"][] = "job";
$proto26["m_columns"][] = "al_certificate";
$proto26["m_columns"][] = "al_license";
$proto26["m_columns"][] = "f_name";
$proto26["m_columns"][] = "f_tel";
$proto26["m_columns"][] = "f_ic";
$proto26["m_columns"][] = "f_job";
$proto26["m_columns"][] = "f_address";
$proto26["m_columns"][] = "m_name";
$proto26["m_columns"][] = "m_tel";
$proto26["m_columns"][] = "m_ic";
$proto26["m_columns"][] = "m_job";
$proto26["m_columns"][] = "m_address";
$proto26["m_columns"][] = "qua_year";
$proto26["m_columns"][] = "qua_level";
$proto26["m_columns"][] = "qua_result";
$proto26["m_columns"][] = "qua_place";
$proto26["m_columns"][] = "photo";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 0;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Student_Data_Generator = createSqlQuery_Student_Data_Generator();
										$tdataStudent_Data_Generator[".sqlquery"] = $queryData_Student_Data_Generator;

include_once(getabspath("include/Student_Data_Generator_events.php"));
$tableEvents["Student_Data_Generator"] = new eventclass_Student_Data_Generator;
$tdataStudent_Data_Generator[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Student_Data_Generator");

?>