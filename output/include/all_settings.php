<?php
require_once(getabspath("classes/cipherer.php"));
$tdataall = array();
	$tdataall[".NumberOfChars"] = 80; 
	$tdataall[".ShortName"] = "all";
	$tdataall[".OwnerID"] = "";
	$tdataall[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsall = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsall["English"] = array();
	$fieldToolTipsall["English"] = array();
	$fieldLabelsall["English"]["ID"] = "ID";
	$fieldToolTipsall["English"]["ID"] = "";
	$fieldLabelsall["English"]["StudentID"] = "Student ID";
	$fieldToolTipsall["English"]["StudentID"] = "";
	$fieldLabelsall["English"]["start_date"] = "Start Date";
	$fieldToolTipsall["English"]["start_date"] = "";
	$fieldLabelsall["English"]["end_date"] = "End Date";
	$fieldToolTipsall["English"]["end_date"] = "";
	$fieldLabelsall["English"]["examStatus"] = "Exam Status";
	$fieldToolTipsall["English"]["examStatus"] = "";
	$fieldLabelsall["English"]["duration"] = "Duration";
	$fieldToolTipsall["English"]["duration"] = "";
	$fieldLabelsall["English"]["unemployed"] = "Unemployed";
	$fieldToolTipsall["English"]["unemployed"] = "";
	$fieldLabelsall["English"]["remarks"] = "Remarks";
	$fieldToolTipsall["English"]["remarks"] = "";
	if (count($fieldToolTipsall["English"]))
		$tdataall[".isUseToolTips"] = true;
}
	
	



$tdataall[".shortTableName"] = "all";
$tdataall[".nSecOptions"] = 0;
$tdataall[".recsPerRowList"] = 1;
$tdataall[".mainTableOwnerID"] = "";
$tdataall[".moveNext"] = 1;
$tdataall[".nType"] = 1;

$tdataall[".strOriginalTableName"] = "student_info";




$tdataall[".showAddInPopup"] = false;

$tdataall[".showEditInPopup"] = false;

$tdataall[".showViewInPopup"] = false;

$tdataall[".fieldsForRegister"] = array();
	
$tdataall[".listAjax"] = false;

	$tdataall[".audit"] = true;

	$tdataall[".locking"] = false;

$tdataall[".listIcons"] = true;




$tdataall[".showSimpleSearchOptions"] = true;

$tdataall[".showSearchPanel"] = true;

if (isMobile())
	$tdataall[".isUseAjaxSuggest"] = false;
else 
	$tdataall[".isUseAjaxSuggest"] = true;

$tdataall[".rowHighlite"] = true;

// button handlers file names

$tdataall[".addPageEvents"] = false;

// use timepicker for search panel
$tdataall[".isUseTimeForSearch"] = false;




$tdataall[".allSearchFields"] = array();

$tdataall[".allSearchFields"][] = "ID";
$tdataall[".allSearchFields"][] = "StudentID";
$tdataall[".allSearchFields"][] = "start_date";
$tdataall[".allSearchFields"][] = "end_date";
$tdataall[".allSearchFields"][] = "examStatus";
$tdataall[".allSearchFields"][] = "duration";
$tdataall[".allSearchFields"][] = "unemployed";
$tdataall[".allSearchFields"][] = "remarks";

$tdataall[".googleLikeFields"][] = "ID";
$tdataall[".googleLikeFields"][] = "StudentID";
$tdataall[".googleLikeFields"][] = "start_date";
$tdataall[".googleLikeFields"][] = "end_date";
$tdataall[".googleLikeFields"][] = "examStatus";
$tdataall[".googleLikeFields"][] = "duration";
$tdataall[".googleLikeFields"][] = "unemployed";
$tdataall[".googleLikeFields"][] = "remarks";


$tdataall[".advSearchFields"][] = "ID";
$tdataall[".advSearchFields"][] = "StudentID";
$tdataall[".advSearchFields"][] = "start_date";
$tdataall[".advSearchFields"][] = "end_date";
$tdataall[".advSearchFields"][] = "examStatus";
$tdataall[".advSearchFields"][] = "duration";
$tdataall[".advSearchFields"][] = "unemployed";
$tdataall[".advSearchFields"][] = "remarks";

$tdataall[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataall[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataall[".strOrderBy"] = $tstrOrderBy;

$tdataall[".orderindexes"] = array();

$tdataall[".sqlHead"] = "SELECT student_industry_training.id,  student_industry_training.studentID,  student_industry_training.start_date,  student_industry_training.end_date,  student_industry_training.examStatus,  student_industry_training.duration,  student_industry_training.unemployed,  student_industry_training.remarks";
$tdataall[".sqlFrom"] = "FROM student_industry_training  INNER JOIN student_info ON student_industry_training.studentID = student_info.StudentID  INNER JOIN ojt_company ON student_industry_training.organization_name = ojt_company.id";
$tdataall[".sqlWhereExpr"] = "(student_info.StudentID =453)";
$tdataall[".sqlTail"] = "";

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
$tdataall[".arrEditTabs"] = $arrEditTabs;

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
$tdataall[".arrAddTabs"] = $arrAddTabs;

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
$tdataall[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataall[".arrGroupsPerPage"] = $arrGPP;

$tableKeysall = array();
$tdataall[".Keys"] = $tableKeysall;

$tdataall[".listFields"] = array();
$tdataall[".listFields"][] = "ID";
$tdataall[".listFields"][] = "StudentID";
$tdataall[".listFields"][] = "start_date";
$tdataall[".listFields"][] = "end_date";
$tdataall[".listFields"][] = "examStatus";
$tdataall[".listFields"][] = "duration";
$tdataall[".listFields"][] = "unemployed";
$tdataall[".listFields"][] = "remarks";

$tdataall[".viewFields"] = array();
$tdataall[".viewFields"][] = "ID";
$tdataall[".viewFields"][] = "StudentID";
$tdataall[".viewFields"][] = "start_date";
$tdataall[".viewFields"][] = "end_date";
$tdataall[".viewFields"][] = "examStatus";
$tdataall[".viewFields"][] = "duration";
$tdataall[".viewFields"][] = "unemployed";
$tdataall[".viewFields"][] = "remarks";

$tdataall[".addFields"] = array();
$tdataall[".addFields"][] = "StudentID";

$tdataall[".inlineAddFields"] = array();
$tdataall[".inlineAddFields"][] = "ID";
$tdataall[".inlineAddFields"][] = "StudentID";
$tdataall[".inlineAddFields"][] = "start_date";
$tdataall[".inlineAddFields"][] = "end_date";
$tdataall[".inlineAddFields"][] = "examStatus";
$tdataall[".inlineAddFields"][] = "duration";
$tdataall[".inlineAddFields"][] = "unemployed";
$tdataall[".inlineAddFields"][] = "remarks";

$tdataall[".editFields"] = array();
$tdataall[".editFields"][] = "StudentID";

$tdataall[".inlineEditFields"] = array();
$tdataall[".inlineEditFields"][] = "ID";
$tdataall[".inlineEditFields"][] = "StudentID";
$tdataall[".inlineEditFields"][] = "start_date";
$tdataall[".inlineEditFields"][] = "end_date";
$tdataall[".inlineEditFields"][] = "examStatus";
$tdataall[".inlineEditFields"][] = "duration";
$tdataall[".inlineEditFields"][] = "unemployed";
$tdataall[".inlineEditFields"][] = "remarks";

$tdataall[".exportFields"] = array();
$tdataall[".exportFields"][] = "ID";
$tdataall[".exportFields"][] = "StudentID";
$tdataall[".exportFields"][] = "start_date";
$tdataall[".exportFields"][] = "end_date";
$tdataall[".exportFields"][] = "examStatus";
$tdataall[".exportFields"][] = "duration";
$tdataall[".exportFields"][] = "unemployed";
$tdataall[".exportFields"][] = "remarks";

$tdataall[".printFields"] = array();
$tdataall[".printFields"][] = "ID";
$tdataall[".printFields"][] = "StudentID";
$tdataall[".printFields"][] = "start_date";
$tdataall[".printFields"][] = "end_date";
$tdataall[".printFields"][] = "examStatus";
$tdataall[".printFields"][] = "duration";
$tdataall[".printFields"][] = "unemployed";
$tdataall[".printFields"][] = "remarks";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "student_industry_training.id";
	
		
		
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
	
		
		
	$tdataall["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Student ID"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "studentID"; 
		$fdata["FullName"] = "student_industry_training.studentID";
	
		
		
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
	
		
		
	$tdataall["StudentID"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Start Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "start_date"; 
		$fdata["FullName"] = "student_industry_training.start_date";
	
		
		
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
	
		
		
	$tdataall["start_date"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "End Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "end_date"; 
		$fdata["FullName"] = "student_industry_training.end_date";
	
		
		
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
	
		
		
	$tdataall["end_date"] = $fdata;
//	examStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "examStatus";
	$fdata["GoodName"] = "examStatus";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Exam Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "examStatus"; 
		$fdata["FullName"] = "student_industry_training.examStatus";
	
		
		
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
	
		
		
	$tdataall["examStatus"] = $fdata;
//	duration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "duration";
	$fdata["GoodName"] = "duration";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Duration"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "duration"; 
		$fdata["FullName"] = "student_industry_training.duration";
	
		
		
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
	
		
		
	$tdataall["duration"] = $fdata;
//	unemployed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "unemployed";
	$fdata["GoodName"] = "unemployed";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Unemployed"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "unemployed"; 
		$fdata["FullName"] = "student_industry_training.unemployed";
	
		
		
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
	
		
		
	$tdataall["unemployed"] = $fdata;
//	remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "remarks";
	$fdata["GoodName"] = "remarks";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Remarks"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "remarks"; 
		$fdata["FullName"] = "student_industry_training.remarks";
	
		
		
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
	
		
		
	$tdataall["remarks"] = $fdata;

	
$tables_data["all"]=&$tdataall;
$field_labels["all"] = &$fieldLabelsall;
$fieldToolTips["all"] = &$fieldToolTipsall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["all"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["all"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_industry_training.id,  student_industry_training.studentID,  student_industry_training.start_date,  student_industry_training.end_date,  student_industry_training.examStatus,  student_industry_training.duration,  student_industry_training.unemployed,  student_industry_training.remarks";
$proto0["m_strFrom"] = "FROM student_industry_training  INNER JOIN student_info ON student_industry_training.studentID = student_info.StudentID  INNER JOIN ojt_company ON student_industry_training.organization_name = ojt_company.id";
$proto0["m_strWhere"] = "(student_info.StudentID =453)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "student_info.StudentID =453";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=453";
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
	"m_strName" => "id",
	"m_strTable" => "student_industry_training"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_industry_training"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "student_industry_training"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "student_industry_training"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "examStatus",
	"m_strTable" => "student_industry_training"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "duration",
	"m_strTable" => "student_industry_training"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "unemployed",
	"m_strTable" => "student_industry_training"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "remarks",
	"m_strTable" => "student_industry_training"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "student_industry_training";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "studentID";
$proto22["m_columns"][] = "organization_name";
$proto22["m_columns"][] = "organization_supervisor";
$proto22["m_columns"][] = "academic supervisor";
$proto22["m_columns"][] = "start_date";
$proto22["m_columns"][] = "end_date";
$proto22["m_columns"][] = "orga_super_tel";
$proto22["m_columns"][] = "duration";
$proto22["m_columns"][] = "examStatus";
$proto22["m_columns"][] = "unemployed";
$proto22["m_columns"][] = "remarks";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
												$proto25=array();
$proto25["m_link"] = "SQLL_INNERJOIN";
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
$proto27["m_sql"] = "student_industry_training.studentID = student_info.StudentID";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_industry_training"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= student_info.StudentID";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
												$proto29=array();
$proto29["m_link"] = "SQLL_INNERJOIN";
			$proto30=array();
$proto30["m_strName"] = "ojt_company";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "organization_name";
$proto30["m_columns"][] = "address";
$proto30["m_columns"][] = "state";
$proto30["m_columns"][] = "tel";
$proto30["m_columns"][] = "fax";
$proto30["m_columns"][] = "email";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "";
$proto31=array();
$proto31["m_sql"] = "student_industry_training.organization_name = ojt_company.id";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_name",
	"m_strTable" => "student_industry_training"
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "= ojt_company.id";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_all = createSqlQuery_all();
								$tdataall[".sqlquery"] = $queryData_all;

include_once(getabspath("include/all_events.php"));
$tableEvents["all"] = new eventclass_all;
$tdataall[".hasEvents"] = true;

$cipherer = new RunnerCipherer("all");

?>