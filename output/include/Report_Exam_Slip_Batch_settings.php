<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Exam_Slip_Batch = array();
	$tdataReport_Exam_Slip_Batch[".NumberOfChars"] = 80; 
	$tdataReport_Exam_Slip_Batch[".ShortName"] = "Report_Exam_Slip_Batch";
	$tdataReport_Exam_Slip_Batch[".OwnerID"] = "";
	$tdataReport_Exam_Slip_Batch[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Exam_Slip_Batch = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Exam_Slip_Batch["English"] = array();
	$fieldToolTipsReport_Exam_Slip_Batch["English"] = array();
	$fieldLabelsReport_Exam_Slip_Batch["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Exam_Slip_Batch["English"]["BatchID"] = "";
	$fieldLabelsReport_Exam_Slip_Batch["English"]["DipID"] = "Course";
	$fieldToolTipsReport_Exam_Slip_Batch["English"]["DipID"] = "";
	$fieldLabelsReport_Exam_Slip_Batch["English"]["Class"] = "Class";
	$fieldToolTipsReport_Exam_Slip_Batch["English"]["Class"] = "";
	$fieldLabelsReport_Exam_Slip_Batch["English"]["Option"] = "Semester";
	$fieldToolTipsReport_Exam_Slip_Batch["English"]["Option"] = "";
	$fieldLabelsReport_Exam_Slip_Batch["English"]["s2"] = "S2";
	$fieldToolTipsReport_Exam_Slip_Batch["English"]["s2"] = "";
	$fieldLabelsReport_Exam_Slip_Batch["English"]["s3"] = "S3";
	$fieldToolTipsReport_Exam_Slip_Batch["English"]["s3"] = "";
	$fieldLabelsReport_Exam_Slip_Batch["English"]["s4"] = "S4";
	$fieldToolTipsReport_Exam_Slip_Batch["English"]["s4"] = "";
	$fieldLabelsReport_Exam_Slip_Batch["English"]["s5"] = "S5";
	$fieldToolTipsReport_Exam_Slip_Batch["English"]["s5"] = "";
	$fieldLabelsReport_Exam_Slip_Batch["English"]["s6"] = "S6";
	$fieldToolTipsReport_Exam_Slip_Batch["English"]["s6"] = "";
	$fieldLabelsReport_Exam_Slip_Batch["English"]["s7"] = "S7";
	$fieldToolTipsReport_Exam_Slip_Batch["English"]["s7"] = "";
	$fieldLabelsReport_Exam_Slip_Batch["English"]["s8"] = "S8";
	$fieldToolTipsReport_Exam_Slip_Batch["English"]["s8"] = "";
	if (count($fieldToolTipsReport_Exam_Slip_Batch["English"]))
		$tdataReport_Exam_Slip_Batch[".isUseToolTips"] = true;
}
	
	



$tdataReport_Exam_Slip_Batch[".shortTableName"] = "Report_Exam_Slip_Batch";
$tdataReport_Exam_Slip_Batch[".nSecOptions"] = 0;
$tdataReport_Exam_Slip_Batch[".recsPerRowList"] = 1;
$tdataReport_Exam_Slip_Batch[".mainTableOwnerID"] = "";
$tdataReport_Exam_Slip_Batch[".moveNext"] = 1;
$tdataReport_Exam_Slip_Batch[".nType"] = 1;

$tdataReport_Exam_Slip_Batch[".strOriginalTableName"] = "student_info";




$tdataReport_Exam_Slip_Batch[".showAddInPopup"] = false;

$tdataReport_Exam_Slip_Batch[".showEditInPopup"] = false;

$tdataReport_Exam_Slip_Batch[".showViewInPopup"] = false;

$tdataReport_Exam_Slip_Batch[".fieldsForRegister"] = array();
	
$tdataReport_Exam_Slip_Batch[".listAjax"] = false;

	$tdataReport_Exam_Slip_Batch[".audit"] = true;

	$tdataReport_Exam_Slip_Batch[".locking"] = false;

$tdataReport_Exam_Slip_Batch[".listIcons"] = true;




$tdataReport_Exam_Slip_Batch[".showSimpleSearchOptions"] = true;

$tdataReport_Exam_Slip_Batch[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Exam_Slip_Batch[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Exam_Slip_Batch[".isUseAjaxSuggest"] = true;

$tdataReport_Exam_Slip_Batch[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Exam_Slip_Batch[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Exam_Slip_Batch[".isUseTimeForSearch"] = false;




$tdataReport_Exam_Slip_Batch[".allSearchFields"] = array();

$tdataReport_Exam_Slip_Batch[".allSearchFields"][] = "DipID";
$tdataReport_Exam_Slip_Batch[".allSearchFields"][] = "BatchID";
$tdataReport_Exam_Slip_Batch[".allSearchFields"][] = "Class";

$tdataReport_Exam_Slip_Batch[".googleLikeFields"][] = "Option";
$tdataReport_Exam_Slip_Batch[".googleLikeFields"][] = "s2";
$tdataReport_Exam_Slip_Batch[".googleLikeFields"][] = "s3";
$tdataReport_Exam_Slip_Batch[".googleLikeFields"][] = "s4";
$tdataReport_Exam_Slip_Batch[".googleLikeFields"][] = "s5";
$tdataReport_Exam_Slip_Batch[".googleLikeFields"][] = "s6";
$tdataReport_Exam_Slip_Batch[".googleLikeFields"][] = "s7";
$tdataReport_Exam_Slip_Batch[".googleLikeFields"][] = "s8";

$tdataReport_Exam_Slip_Batch[".panelSearchFields"][] = "DipID";
$tdataReport_Exam_Slip_Batch[".panelSearchFields"][] = "BatchID";
$tdataReport_Exam_Slip_Batch[".panelSearchFields"][] = "Class";

$tdataReport_Exam_Slip_Batch[".advSearchFields"][] = "DipID";
$tdataReport_Exam_Slip_Batch[".advSearchFields"][] = "BatchID";
$tdataReport_Exam_Slip_Batch[".advSearchFields"][] = "Class";

$tdataReport_Exam_Slip_Batch[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Exam_Slip_Batch[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Exam_Slip_Batch[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Exam_Slip_Batch[".orderindexes"] = array();

$tdataReport_Exam_Slip_Batch[".sqlHead"] = "SELECT DISTINCT DipID,  BatchID,  `Class`,  DipID AS `Option`,  DipID AS s2,  DipID AS s3,  DipID AS s4,  DipID AS s5,  DipID AS s6,  DipID AS s7,  DipID AS s8";
$tdataReport_Exam_Slip_Batch[".sqlFrom"] = "FROM student_info";
$tdataReport_Exam_Slip_Batch[".sqlWhereExpr"] = "(Status ='Active')";
$tdataReport_Exam_Slip_Batch[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "BatchID";
	$tabFields[] = "Class";
$arrEditTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>22,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>37,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Exam_Slip_Batch[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Personal1',
					  'tabName'=>"Personal",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "BatchID";
	$tabFields[] = "Class";
	$tabFields[] = "DipID";
$arrAddTabs[] = array('tabId'=>'Campus_Info1',
					  'tabName'=>"Campus Info",
					  'nType'=>'0',
					  'nOrder'=>11,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Contact1',
					  'tabName'=>"Contact",
					  'nType'=>'0',
					  'nOrder'=>22,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Next_Of_Kin1',
					  'tabName'=>"Next Of Kin",
					  'nType'=>'0',
					  'nOrder'=>30,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Medical1',
					  'tabName'=>"Medical",
					  'nType'=>'0',
					  'nOrder'=>37,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataReport_Exam_Slip_Batch[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "BatchID";
	$tabFields[] = "Class";
	$tabFields[] = "DipID";
$arrViewTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>22,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>34,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Exam_Slip_Batch[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Exam_Slip_Batch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Exam_Slip_Batch[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Exam_Slip_Batch = array();
$tdataReport_Exam_Slip_Batch[".Keys"] = $tableKeysReport_Exam_Slip_Batch;

$tdataReport_Exam_Slip_Batch[".listFields"] = array();
$tdataReport_Exam_Slip_Batch[".listFields"][] = "DipID";
$tdataReport_Exam_Slip_Batch[".listFields"][] = "BatchID";
$tdataReport_Exam_Slip_Batch[".listFields"][] = "Class";
$tdataReport_Exam_Slip_Batch[".listFields"][] = "Option";
$tdataReport_Exam_Slip_Batch[".listFields"][] = "s2";
$tdataReport_Exam_Slip_Batch[".listFields"][] = "s3";
$tdataReport_Exam_Slip_Batch[".listFields"][] = "s4";
$tdataReport_Exam_Slip_Batch[".listFields"][] = "s5";
$tdataReport_Exam_Slip_Batch[".listFields"][] = "s6";
$tdataReport_Exam_Slip_Batch[".listFields"][] = "s7";
$tdataReport_Exam_Slip_Batch[".listFields"][] = "s8";

$tdataReport_Exam_Slip_Batch[".viewFields"] = array();

$tdataReport_Exam_Slip_Batch[".addFields"] = array();

$tdataReport_Exam_Slip_Batch[".inlineAddFields"] = array();

$tdataReport_Exam_Slip_Batch[".editFields"] = array();

$tdataReport_Exam_Slip_Batch[".inlineEditFields"] = array();

$tdataReport_Exam_Slip_Batch[".exportFields"] = array();

$tdataReport_Exam_Slip_Batch[".printFields"] = array();

//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Course"; 
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
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
				
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
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
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
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
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdataReport_Exam_Slip_Batch["DipID"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	$edata["LookupOrderBy"] = "ID";
	
		$edata["LookupDesc"] = true;
	
		$edata["LookupWhere"] = "Class=30";
	
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:100px;";
	$edata["controlWidth"] = 100;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Exam_Slip_Batch["BatchID"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Batch["Class"] = $fdata;
//	Option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Option";
	$fdata["GoodName"] = "Option";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Semester"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Batch["Option"] = $fdata;
//	s2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "s2";
	$fdata["GoodName"] = "s2";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S2"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Batch["s2"] = $fdata;
//	s3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "s3";
	$fdata["GoodName"] = "s3";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S3"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Batch["s3"] = $fdata;
//	s4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "s4";
	$fdata["GoodName"] = "s4";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S4"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Batch["s4"] = $fdata;
//	s5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "s5";
	$fdata["GoodName"] = "s5";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S5"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Batch["s5"] = $fdata;
//	s6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "s6";
	$fdata["GoodName"] = "s6";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S6"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Batch["s6"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S7"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Batch["s7"] = $fdata;
//	s8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s8";
	$fdata["GoodName"] = "s8";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S8"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Batch["s8"] = $fdata;

	
$tables_data["Report_Exam_Slip_Batch"]=&$tdataReport_Exam_Slip_Batch;
$field_labels["Report_Exam_Slip_Batch"] = &$fieldLabelsReport_Exam_Slip_Batch;
$fieldToolTips["Report_Exam_Slip_Batch"] = &$fieldToolTipsReport_Exam_Slip_Batch;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Exam_Slip_Batch"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Exam_Slip_Batch"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Exam_Slip_Batch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT DISTINCT";
$proto0["m_strFieldList"] = "DipID,  BatchID,  `Class`,  DipID AS `Option`,  DipID AS s2,  DipID AS s3,  DipID AS s4,  DipID AS s5,  DipID AS s6,  DipID AS s7,  DipID AS s8";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "(Status ='Active')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "Status ='Active'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "student_info"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "='Active'";
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
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Option";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "s2";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "s3";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "s4";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "s5";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "s6";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "s7";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "s8";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "student_info";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "StudentID";
$proto28["m_columns"][] = "Name";
$proto28["m_columns"][] = "ICNO";
$proto28["m_columns"][] = "DOB";
$proto28["m_columns"][] = "MatricNo";
$proto28["m_columns"][] = "Nogilir";
$proto28["m_columns"][] = "Email";
$proto28["m_columns"][] = "Access";
$proto28["m_columns"][] = "Passw";
$proto28["m_columns"][] = "Type";
$proto28["m_columns"][] = "BranchID";
$proto28["m_columns"][] = "DateJoin";
$proto28["m_columns"][] = "Dateout";
$proto28["m_columns"][] = "Gender";
$proto28["m_columns"][] = "married";
$proto28["m_columns"][] = "Address1";
$proto28["m_columns"][] = "City";
$proto28["m_columns"][] = "Postcode";
$proto28["m_columns"][] = "StateID";
$proto28["m_columns"][] = "Country";
$proto28["m_columns"][] = "HomeTelephone";
$proto28["m_columns"][] = "MobileTelephone";
$proto28["m_columns"][] = "Nationality";
$proto28["m_columns"][] = "Passport";
$proto28["m_columns"][] = "BatchID";
$proto28["m_columns"][] = "Intake";
$proto28["m_columns"][] = "Sponsor";
$proto28["m_columns"][] = "DipID";
$proto28["m_columns"][] = "Status";
$proto28["m_columns"][] = "Disability";
$proto28["m_columns"][] = "MedicalCondition";
$proto28["m_columns"][] = "race";
$proto28["m_columns"][] = "Religion";
$proto28["m_columns"][] = "Class";
$proto28["m_columns"][] = "Intake_Category";
$proto28["m_columns"][] = "f1_name";
$proto28["m_columns"][] = "f1_tel";
$proto28["m_columns"][] = "f1_relation";
$proto28["m_columns"][] = "f2_name";
$proto28["m_columns"][] = "f2_tel";
$proto28["m_columns"][] = "f2_relation";
$proto28["m_columns"][] = "blood";
$proto28["m_columns"][] = "hostel_in";
$proto28["m_columns"][] = "job";
$proto28["m_columns"][] = "al_certificate";
$proto28["m_columns"][] = "al_license";
$proto28["m_columns"][] = "f_name";
$proto28["m_columns"][] = "f_tel";
$proto28["m_columns"][] = "f_ic";
$proto28["m_columns"][] = "f_job";
$proto28["m_columns"][] = "f_address";
$proto28["m_columns"][] = "m_name";
$proto28["m_columns"][] = "m_tel";
$proto28["m_columns"][] = "m_ic";
$proto28["m_columns"][] = "m_job";
$proto28["m_columns"][] = "m_address";
$proto28["m_columns"][] = "qua_year";
$proto28["m_columns"][] = "qua_level";
$proto28["m_columns"][] = "qua_result";
$proto28["m_columns"][] = "qua_place";
$proto28["m_columns"][] = "photo";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Exam_Slip_Batch = createSqlQuery_Report_Exam_Slip_Batch();
											$tdataReport_Exam_Slip_Batch[".sqlquery"] = $queryData_Report_Exam_Slip_Batch;

include_once(getabspath("include/Report_Exam_Slip_Batch_events.php"));
$tableEvents["Report_Exam_Slip_Batch"] = new eventclass_Report_Exam_Slip_Batch;
$tdataReport_Exam_Slip_Batch[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Exam_Slip_Batch");

?>