<?php
require_once(getabspath("classes/cipherer.php"));
$tdataEvaluation_Batch_List = array();
	$tdataEvaluation_Batch_List[".NumberOfChars"] = 80; 
	$tdataEvaluation_Batch_List[".ShortName"] = "Evaluation_Batch_List";
	$tdataEvaluation_Batch_List[".OwnerID"] = "";
	$tdataEvaluation_Batch_List[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsEvaluation_Batch_List = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEvaluation_Batch_List["English"] = array();
	$fieldToolTipsEvaluation_Batch_List["English"] = array();
	$fieldLabelsEvaluation_Batch_List["English"]["BatchID"] = "Batch";
	$fieldToolTipsEvaluation_Batch_List["English"]["BatchID"] = "";
	$fieldLabelsEvaluation_Batch_List["English"]["DipID"] = "Course";
	$fieldToolTipsEvaluation_Batch_List["English"]["DipID"] = "";
	$fieldLabelsEvaluation_Batch_List["English"]["Intake_Category"] = "Program";
	$fieldToolTipsEvaluation_Batch_List["English"]["Intake_Category"] = "";
	$fieldLabelsEvaluation_Batch_List["English"]["option"] = "Option";
	$fieldToolTipsEvaluation_Batch_List["English"]["option"] = "";
	if (count($fieldToolTipsEvaluation_Batch_List["English"]))
		$tdataEvaluation_Batch_List[".isUseToolTips"] = true;
}
	
	



$tdataEvaluation_Batch_List[".shortTableName"] = "Evaluation_Batch_List";
$tdataEvaluation_Batch_List[".nSecOptions"] = 0;
$tdataEvaluation_Batch_List[".recsPerRowList"] = 1;
$tdataEvaluation_Batch_List[".mainTableOwnerID"] = "";
$tdataEvaluation_Batch_List[".moveNext"] = 1;
$tdataEvaluation_Batch_List[".nType"] = 1;

$tdataEvaluation_Batch_List[".strOriginalTableName"] = "student_info";




$tdataEvaluation_Batch_List[".showAddInPopup"] = false;

$tdataEvaluation_Batch_List[".showEditInPopup"] = false;

$tdataEvaluation_Batch_List[".showViewInPopup"] = false;

$tdataEvaluation_Batch_List[".fieldsForRegister"] = array();
	
$tdataEvaluation_Batch_List[".listAjax"] = false;

	$tdataEvaluation_Batch_List[".audit"] = true;

	$tdataEvaluation_Batch_List[".locking"] = false;

$tdataEvaluation_Batch_List[".listIcons"] = true;




$tdataEvaluation_Batch_List[".showSimpleSearchOptions"] = true;

$tdataEvaluation_Batch_List[".showSearchPanel"] = true;

if (isMobile())
	$tdataEvaluation_Batch_List[".isUseAjaxSuggest"] = false;
else 
	$tdataEvaluation_Batch_List[".isUseAjaxSuggest"] = true;

$tdataEvaluation_Batch_List[".rowHighlite"] = true;

// button handlers file names
$tdataEvaluation_Batch_List[".isUsebuttonHandlers"] = true;

$tdataEvaluation_Batch_List[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEvaluation_Batch_List[".isUseTimeForSearch"] = false;




$tdataEvaluation_Batch_List[".allSearchFields"] = array();

$tdataEvaluation_Batch_List[".allSearchFields"][] = "Intake_Category";
$tdataEvaluation_Batch_List[".allSearchFields"][] = "DipID";
$tdataEvaluation_Batch_List[".allSearchFields"][] = "BatchID";

$tdataEvaluation_Batch_List[".googleLikeFields"][] = "Intake_Category";
$tdataEvaluation_Batch_List[".googleLikeFields"][] = "option";

$tdataEvaluation_Batch_List[".panelSearchFields"][] = "Intake_Category";
$tdataEvaluation_Batch_List[".panelSearchFields"][] = "DipID";
$tdataEvaluation_Batch_List[".panelSearchFields"][] = "BatchID";

$tdataEvaluation_Batch_List[".advSearchFields"][] = "Intake_Category";
$tdataEvaluation_Batch_List[".advSearchFields"][] = "DipID";
$tdataEvaluation_Batch_List[".advSearchFields"][] = "BatchID";

$tdataEvaluation_Batch_List[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataEvaluation_Batch_List[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEvaluation_Batch_List[".strOrderBy"] = $tstrOrderBy;

$tdataEvaluation_Batch_List[".orderindexes"] = array();

$tdataEvaluation_Batch_List[".sqlHead"] = "SELECT DipID,  BatchID,  Intake_Category,  DipID AS `option`";
$tdataEvaluation_Batch_List[".sqlFrom"] = "FROM student_info";
$tdataEvaluation_Batch_List[".sqlWhereExpr"] = "";
$tdataEvaluation_Batch_List[".sqlTail"] = "GROUP BY DipID, BatchID";

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
$arrEditTabs[] = array('tabId'=>'Family_Info1',
					   'tabName'=>"Family Info",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>28,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Intake_Category";
	$tabFields[] = "BatchID";
$arrEditTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>35,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>45,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataEvaluation_Batch_List[".arrEditTabs"] = $arrEditTabs;

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
$arrAddTabs[] = array('tabId'=>'Family_Info1',
					  'tabName'=>"Family Info",
					  'nType'=>'0',
					  'nOrder'=>19,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Next_Of_Kin1',
					  'tabName'=>"Next Of Kin",
					  'nType'=>'0',
					  'nOrder'=>28,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "DipID";
	$tabFields[] = "Intake_Category";
	$tabFields[] = "BatchID";
$arrAddTabs[] = array('tabId'=>'Campus_Info1',
					  'tabName'=>"Campus Info",
					  'nType'=>'0',
					  'nOrder'=>35,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Medical1',
					  'tabName'=>"Medical",
					  'nType'=>'0',
					  'nOrder'=>45,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataEvaluation_Batch_List[".arrAddTabs"] = $arrAddTabs;

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
$arrViewTabs[] = array('tabId'=>'Family_Info1',
					   'tabName'=>"Family Info",
					   'nType'=>'0',
					   'nOrder'=>18,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>27,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "Intake_Category";
	$tabFields[] = "BatchID";
$arrViewTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>34,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>44,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataEvaluation_Batch_List[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEvaluation_Batch_List[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEvaluation_Batch_List[".arrGroupsPerPage"] = $arrGPP;

$tableKeysEvaluation_Batch_List = array();
$tdataEvaluation_Batch_List[".Keys"] = $tableKeysEvaluation_Batch_List;

$tdataEvaluation_Batch_List[".listFields"] = array();
$tdataEvaluation_Batch_List[".listFields"][] = "BatchID";
$tdataEvaluation_Batch_List[".listFields"][] = "DipID";
$tdataEvaluation_Batch_List[".listFields"][] = "option";

$tdataEvaluation_Batch_List[".viewFields"] = array();

$tdataEvaluation_Batch_List[".addFields"] = array();

$tdataEvaluation_Batch_List[".inlineAddFields"] = array();

$tdataEvaluation_Batch_List[".editFields"] = array();

$tdataEvaluation_Batch_List[".inlineEditFields"] = array();

$tdataEvaluation_Batch_List[".exportFields"] = array();

$tdataEvaluation_Batch_List[".printFields"] = array();

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
	
		
		
	$tdataEvaluation_Batch_List["DipID"] = $fdata;
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
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("Evaluation_Batch_List"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
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
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("Evaluation_Batch_List"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
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
	
		
				
		$fdata["EditFormats"]["register"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("Evaluation_Batch_List"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
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
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
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
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdataEvaluation_Batch_List["BatchID"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Intake_Category";
	$fdata["GoodName"] = "Intake_Category";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Program"; 
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
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("Evaluation_Batch_List"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
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
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("Evaluation_Batch_List"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
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
	
		
				
		$fdata["EditFormats"]["register"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("Evaluation_Batch_List"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
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
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
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
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdataEvaluation_Batch_List["Intake_Category"] = $fdata;
//	option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "option";
	$fdata["GoodName"] = "option";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Option"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
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
	
		
		
	$tdataEvaluation_Batch_List["option"] = $fdata;

	
$tables_data["Evaluation_Batch_List"]=&$tdataEvaluation_Batch_List;
$field_labels["Evaluation_Batch_List"] = &$fieldLabelsEvaluation_Batch_List;
$fieldToolTips["Evaluation_Batch_List"] = &$fieldToolTipsEvaluation_Batch_List;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Evaluation_Batch_List"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Evaluation_Batch_List"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Evaluation_Batch_List()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DipID,  BatchID,  Intake_Category,  DipID AS `option`";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY DipID, BatchID";
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
	"m_strName" => "Intake_Category",
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
$proto11["m_alias"] = "option";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "student_info";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "StudentID";
$proto14["m_columns"][] = "Name";
$proto14["m_columns"][] = "ICNO";
$proto14["m_columns"][] = "DOB";
$proto14["m_columns"][] = "MatricNo";
$proto14["m_columns"][] = "Nogilir";
$proto14["m_columns"][] = "Email";
$proto14["m_columns"][] = "Access";
$proto14["m_columns"][] = "Passw";
$proto14["m_columns"][] = "Type";
$proto14["m_columns"][] = "BranchID";
$proto14["m_columns"][] = "DateJoin";
$proto14["m_columns"][] = "Dateout";
$proto14["m_columns"][] = "Gender";
$proto14["m_columns"][] = "married";
$proto14["m_columns"][] = "Address1";
$proto14["m_columns"][] = "City";
$proto14["m_columns"][] = "Postcode";
$proto14["m_columns"][] = "StateID";
$proto14["m_columns"][] = "Country";
$proto14["m_columns"][] = "HomeTelephone";
$proto14["m_columns"][] = "MobileTelephone";
$proto14["m_columns"][] = "Nationality";
$proto14["m_columns"][] = "Passport";
$proto14["m_columns"][] = "BatchID";
$proto14["m_columns"][] = "Intake";
$proto14["m_columns"][] = "Sponsor";
$proto14["m_columns"][] = "DipID";
$proto14["m_columns"][] = "Status";
$proto14["m_columns"][] = "Disability";
$proto14["m_columns"][] = "MedicalCondition";
$proto14["m_columns"][] = "race";
$proto14["m_columns"][] = "Religion";
$proto14["m_columns"][] = "Class";
$proto14["m_columns"][] = "Intake_Category";
$proto14["m_columns"][] = "f1_name";
$proto14["m_columns"][] = "f1_tel";
$proto14["m_columns"][] = "f1_relation";
$proto14["m_columns"][] = "f2_name";
$proto14["m_columns"][] = "f2_tel";
$proto14["m_columns"][] = "f2_relation";
$proto14["m_columns"][] = "blood";
$proto14["m_columns"][] = "hostel_in";
$proto14["m_columns"][] = "job";
$proto14["m_columns"][] = "al_certificate";
$proto14["m_columns"][] = "al_license";
$proto14["m_columns"][] = "f_name";
$proto14["m_columns"][] = "f_tel";
$proto14["m_columns"][] = "f_ic";
$proto14["m_columns"][] = "f_job";
$proto14["m_columns"][] = "f_address";
$proto14["m_columns"][] = "m_name";
$proto14["m_columns"][] = "m_tel";
$proto14["m_columns"][] = "m_ic";
$proto14["m_columns"][] = "m_job";
$proto14["m_columns"][] = "m_address";
$proto14["m_columns"][] = "qua_year";
$proto14["m_columns"][] = "qua_level";
$proto14["m_columns"][] = "qua_result";
$proto14["m_columns"][] = "qua_place";
$proto14["m_columns"][] = "photo";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto0["m_groupby"][]=$obj;
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Evaluation_Batch_List = createSqlQuery_Evaluation_Batch_List();
				$tdataEvaluation_Batch_List[".sqlquery"] = $queryData_Evaluation_Batch_List;

include_once(getabspath("include/Evaluation_Batch_List_events.php"));
$tableEvents["Evaluation_Batch_List"] = new eventclass_Evaluation_Batch_List;
$tdataEvaluation_Batch_List[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Evaluation_Batch_List");

?>