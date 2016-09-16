<?php
require_once(getabspath("classes/cipherer.php"));
$tdataChart_no_student = array();
	$tdataChart_no_student[".ShortName"] = "Chart_no_student";
	$tdataChart_no_student[".OwnerID"] = "";
	$tdataChart_no_student[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsChart_no_student = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsChart_no_student["English"] = array();
	$fieldToolTipsChart_no_student["English"] = array();
	$fieldLabelsChart_no_student["English"]["StudentID"] = "Student";
	$fieldToolTipsChart_no_student["English"]["StudentID"] = "";
	$fieldLabelsChart_no_student["English"]["BatchID"] = "Batch";
	$fieldToolTipsChart_no_student["English"]["BatchID"] = "";
	$fieldLabelsChart_no_student["English"]["DipID"] = "Course";
	$fieldToolTipsChart_no_student["English"]["DipID"] = "";
	$fieldLabelsChart_no_student["English"]["no_student"] = "No Student";
	$fieldToolTipsChart_no_student["English"]["no_student"] = "";
	$fieldLabelsChart_no_student["English"]["Gender"] = "Gender";
	$fieldToolTipsChart_no_student["English"]["Gender"] = "";
	$fieldLabelsChart_no_student["English"]["StateID"] = "State";
	$fieldToolTipsChart_no_student["English"]["StateID"] = "";
	$fieldLabelsChart_no_student["English"]["Sponsor"] = "Financial Aid";
	$fieldToolTipsChart_no_student["English"]["Sponsor"] = "";
	$fieldLabelsChart_no_student["English"]["race"] = "Race";
	$fieldToolTipsChart_no_student["English"]["race"] = "";
	$fieldLabelsChart_no_student["English"]["Intake_Category"] = "Program";
	$fieldToolTipsChart_no_student["English"]["Intake_Category"] = "";
	if (count($fieldToolTipsChart_no_student["English"]))
		$tdataChart_no_student[".isUseToolTips"] = true;
}
	
	
	$tdataChart_no_student[".NCSearch"] = true;

	$tdataChart_no_student[".ChartRefreshTime"] = 0;


$tdataChart_no_student[".shortTableName"] = "Chart_no_student";
$tdataChart_no_student[".nSecOptions"] = 0;
$tdataChart_no_student[".recsPerRowList"] = 1;
$tdataChart_no_student[".mainTableOwnerID"] = "";
$tdataChart_no_student[".moveNext"] = 0;
$tdataChart_no_student[".nType"] = 3;

$tdataChart_no_student[".strOriginalTableName"] = "student_info";




$tdataChart_no_student[".showAddInPopup"] = false;

$tdataChart_no_student[".showEditInPopup"] = false;

$tdataChart_no_student[".showViewInPopup"] = false;

$tdataChart_no_student[".fieldsForRegister"] = array();
	
$tdataChart_no_student[".listAjax"] = false;

	$tdataChart_no_student[".audit"] = false;

	$tdataChart_no_student[".locking"] = false;

$tdataChart_no_student[".listIcons"] = true;
$tdataChart_no_student[".edit"] = true;
$tdataChart_no_student[".inlineEdit"] = true;
$tdataChart_no_student[".inlineAdd"] = true;
$tdataChart_no_student[".view"] = true;



$tdataChart_no_student[".delete"] = true;

$tdataChart_no_student[".showSimpleSearchOptions"] = false;

$tdataChart_no_student[".showSearchPanel"] = true;

if (isMobile())
	$tdataChart_no_student[".isUseAjaxSuggest"] = false;
else 
	$tdataChart_no_student[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataChart_no_student[".addPageEvents"] = false;

// use timepicker for search panel
$tdataChart_no_student[".isUseTimeForSearch"] = false;




$tdataChart_no_student[".allSearchFields"] = array();

$tdataChart_no_student[".allSearchFields"][] = "BatchID";
$tdataChart_no_student[".allSearchFields"][] = "DipID";
$tdataChart_no_student[".allSearchFields"][] = "Gender";
$tdataChart_no_student[".allSearchFields"][] = "StateID";
$tdataChart_no_student[".allSearchFields"][] = "Sponsor";
$tdataChart_no_student[".allSearchFields"][] = "race";
$tdataChart_no_student[".allSearchFields"][] = "Intake_Category";


$tdataChart_no_student[".panelSearchFields"][] = "DipID";
$tdataChart_no_student[".panelSearchFields"][] = "Gender";
$tdataChart_no_student[".panelSearchFields"][] = "StateID";
$tdataChart_no_student[".panelSearchFields"][] = "Sponsor";
$tdataChart_no_student[".panelSearchFields"][] = "race";
$tdataChart_no_student[".panelSearchFields"][] = "Intake_Category";

$tdataChart_no_student[".advSearchFields"][] = "BatchID";
$tdataChart_no_student[".advSearchFields"][] = "DipID";
$tdataChart_no_student[".advSearchFields"][] = "Gender";
$tdataChart_no_student[".advSearchFields"][] = "StateID";
$tdataChart_no_student[".advSearchFields"][] = "Sponsor";
$tdataChart_no_student[".advSearchFields"][] = "race";
$tdataChart_no_student[".advSearchFields"][] = "Intake_Category";

$tdataChart_no_student[".isTableType"] = "chart";

	



// Access doesn't support subqueries from the same table as main



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataChart_no_student[".strOrderBy"] = $tstrOrderBy;

$tdataChart_no_student[".orderindexes"] = array();

$tdataChart_no_student[".sqlHead"] = "SELECT BatchID,  DipID,  StudentID,  COUNT(StudentID) AS no_student,  Gender,  StateID,  Sponsor,  race,  Intake_Category";
$tdataChart_no_student[".sqlFrom"] = "FROM student_info";
$tdataChart_no_student[".sqlWhereExpr"] = "Status='Active'";
$tdataChart_no_student[".sqlTail"] = "GROUP BY BatchID";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataChart_no_student[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataChart_no_student[".arrGroupsPerPage"] = $arrGPP;

$tableKeysChart_no_student = array();
$tableKeysChart_no_student[] = "StudentID";
$tdataChart_no_student[".Keys"] = $tableKeysChart_no_student;

$tdataChart_no_student[".listFields"] = array();
$tdataChart_no_student[".listFields"][] = "BatchID";
$tdataChart_no_student[".listFields"][] = "DipID";
$tdataChart_no_student[".listFields"][] = "StudentID";
$tdataChart_no_student[".listFields"][] = "no_student";
$tdataChart_no_student[".listFields"][] = "Gender";
$tdataChart_no_student[".listFields"][] = "StateID";
$tdataChart_no_student[".listFields"][] = "Sponsor";
$tdataChart_no_student[".listFields"][] = "race";
$tdataChart_no_student[".listFields"][] = "Intake_Category";

$tdataChart_no_student[".viewFields"] = array();
$tdataChart_no_student[".viewFields"][] = "BatchID";
$tdataChart_no_student[".viewFields"][] = "DipID";
$tdataChart_no_student[".viewFields"][] = "StudentID";
$tdataChart_no_student[".viewFields"][] = "no_student";
$tdataChart_no_student[".viewFields"][] = "Gender";
$tdataChart_no_student[".viewFields"][] = "StateID";
$tdataChart_no_student[".viewFields"][] = "Sponsor";
$tdataChart_no_student[".viewFields"][] = "race";
$tdataChart_no_student[".viewFields"][] = "Intake_Category";

$tdataChart_no_student[".addFields"] = array();
$tdataChart_no_student[".addFields"][] = "BatchID";
$tdataChart_no_student[".addFields"][] = "DipID";
$tdataChart_no_student[".addFields"][] = "Gender";
$tdataChart_no_student[".addFields"][] = "StateID";
$tdataChart_no_student[".addFields"][] = "Sponsor";
$tdataChart_no_student[".addFields"][] = "race";
$tdataChart_no_student[".addFields"][] = "Intake_Category";

$tdataChart_no_student[".inlineAddFields"] = array();
$tdataChart_no_student[".inlineAddFields"][] = "BatchID";
$tdataChart_no_student[".inlineAddFields"][] = "DipID";
$tdataChart_no_student[".inlineAddFields"][] = "no_student";
$tdataChart_no_student[".inlineAddFields"][] = "Gender";
$tdataChart_no_student[".inlineAddFields"][] = "StateID";
$tdataChart_no_student[".inlineAddFields"][] = "Sponsor";
$tdataChart_no_student[".inlineAddFields"][] = "race";
$tdataChart_no_student[".inlineAddFields"][] = "Intake_Category";

$tdataChart_no_student[".editFields"] = array();
$tdataChart_no_student[".editFields"][] = "BatchID";
$tdataChart_no_student[".editFields"][] = "DipID";
$tdataChart_no_student[".editFields"][] = "Gender";
$tdataChart_no_student[".editFields"][] = "StateID";
$tdataChart_no_student[".editFields"][] = "Sponsor";
$tdataChart_no_student[".editFields"][] = "race";
$tdataChart_no_student[".editFields"][] = "Intake_Category";

$tdataChart_no_student[".inlineEditFields"] = array();
$tdataChart_no_student[".inlineEditFields"][] = "BatchID";
$tdataChart_no_student[".inlineEditFields"][] = "DipID";
$tdataChart_no_student[".inlineEditFields"][] = "no_student";
$tdataChart_no_student[".inlineEditFields"][] = "Gender";
$tdataChart_no_student[".inlineEditFields"][] = "StateID";
$tdataChart_no_student[".inlineEditFields"][] = "Sponsor";
$tdataChart_no_student[".inlineEditFields"][] = "race";
$tdataChart_no_student[".inlineEditFields"][] = "Intake_Category";

$tdataChart_no_student[".exportFields"] = array();
$tdataChart_no_student[".exportFields"][] = "BatchID";
$tdataChart_no_student[".exportFields"][] = "DipID";
$tdataChart_no_student[".exportFields"][] = "StudentID";
$tdataChart_no_student[".exportFields"][] = "no_student";
$tdataChart_no_student[".exportFields"][] = "Gender";
$tdataChart_no_student[".exportFields"][] = "StateID";
$tdataChart_no_student[".exportFields"][] = "Sponsor";
$tdataChart_no_student[".exportFields"][] = "race";
$tdataChart_no_student[".exportFields"][] = "Intake_Category";

$tdataChart_no_student[".printFields"] = array();
$tdataChart_no_student[".printFields"][] = "BatchID";
$tdataChart_no_student[".printFields"][] = "DipID";
$tdataChart_no_student[".printFields"][] = "StudentID";
$tdataChart_no_student[".printFields"][] = "no_student";
$tdataChart_no_student[".printFields"][] = "Gender";
$tdataChart_no_student[".printFields"][] = "StateID";
$tdataChart_no_student[".printFields"][] = "Sponsor";
$tdataChart_no_student[".printFields"][] = "race";
$tdataChart_no_student[".printFields"][] = "Intake_Category";

//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
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
	
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "BatchID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=3";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["BatchID"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Course"; 
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
	
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["DipID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["StudentID"] = $fdata;
//	no_student
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "no_student";
	$fdata["GoodName"] = "no_student";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "No Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "no_student"; 
		$fdata["FullName"] = "COUNT(StudentID)";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["no_student"] = $fdata;
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Gender"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Gender"; 
		$fdata["FullName"] = "Gender";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["Gender"] = $fdata;
//	StateID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "StateID";
	$fdata["GoodName"] = "StateID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "State"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StateID"; 
		$fdata["FullName"] = "StateID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		$edata["LookupWhere"] = "Class=1";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["StateID"] = $fdata;
//	Sponsor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sponsor";
	$fdata["GoodName"] = "Sponsor";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Financial Aid"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Sponsor"; 
		$fdata["FullName"] = "Sponsor";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		$edata["LookupWhere"] = "Class=16";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["Sponsor"] = $fdata;
//	race
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "race";
	$fdata["GoodName"] = "race";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Race"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "race"; 
		$fdata["FullName"] = "race";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		$edata["LookupWhere"] = "Class=3";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["race"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Intake_Category";
	$fdata["GoodName"] = "Intake_Category";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Program"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Intake_Category"; 
		$fdata["FullName"] = "Intake_Category";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_no_student["Intake_Category"] = $fdata;

	$tdataChart_no_student[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Chart_no_student</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>
		
		<attr value="parameters">';
	$tdataChart_no_student[".chartXml"] .= '<attr value="0">
			<attr value="name">no_student</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr">Student</attr>';
	$tdataChart_no_student[".chartXml"] .= '</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="1">
		<attr value="name">BatchID</attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdataChart_no_student[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';

	$tdataChart_no_student[".chartXml"] .= '<attr value="head">'.xmlencode("Statistic of Active Student").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("BranchID").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">FFFFFF</attr>
<attr value="color72">FFFFFF</attr>
<attr value="color81">FEF7DB</attr>
<attr value="color82">FEF7DB</attr>
<attr value="color91">000000</attr>
<attr value="color92">000000</attr>
<attr value="color101">000000</attr>
<attr value="color102">000000</attr>
<attr value="color111">000000</attr>
<attr value="color112">000000</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">false</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">5</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdataChart_no_student[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataChart_no_student[".chartXml"] .= '<attr value="0">
		<attr value="name">BatchID</attr>
		<attr value="label">'.xmlencode("Batch").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="1">
		<attr value="name">DipID</attr>
		<attr value="label">'.xmlencode("Course").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="2">
		<attr value="name">StudentID</attr>
		<attr value="label">'.xmlencode("Student").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="3">
		<attr value="name">no_student</attr>
		<attr value="label">'.xmlencode("No Student").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="4">
		<attr value="name">Gender</attr>
		<attr value="label">'.xmlencode("Gender").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="5">
		<attr value="name">StateID</attr>
		<attr value="label">'.xmlencode("State").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="6">
		<attr value="name">Sponsor</attr>
		<attr value="label">'.xmlencode("Financial Aid").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="7">
		<attr value="name">race</attr>
		<attr value="label">'.xmlencode("Race").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_no_student[".chartXml"] .= '<attr value="8">
		<attr value="name">Intake_Category</attr>
		<attr value="label">'.xmlencode("Program").'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataChart_no_student[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Chart_no_student</attr>
<attr value="short_table_name">Chart_no_student</attr>
</attr>

</chart>';
	
$tables_data["Chart_no_student"]=&$tdataChart_no_student;
$field_labels["Chart_no_student"] = &$fieldLabelsChart_no_student;
$fieldToolTips["Chart_no_student"] = &$fieldToolTipsChart_no_student;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Chart_no_student"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Chart_no_student"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Chart_no_student()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "BatchID,  DipID,  StudentID,  COUNT(StudentID) AS no_student,  Gender,  StateID,  Sponsor,  race,  Intake_Category";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "Status='Active'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY BatchID";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "Status='Active'";
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
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_COUNT";
$proto12["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto12);

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "no_student";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "student_info"
));

$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "StateID",
	"m_strTable" => "student_info"
));

$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Sponsor",
	"m_strTable" => "student_info"
));

$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "race",
	"m_strTable" => "student_info"
));

$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "student_info";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "StudentID";
$proto25["m_columns"][] = "Name";
$proto25["m_columns"][] = "ICNO";
$proto25["m_columns"][] = "DOB";
$proto25["m_columns"][] = "MatricNo";
$proto25["m_columns"][] = "Nogilir";
$proto25["m_columns"][] = "Email";
$proto25["m_columns"][] = "Access";
$proto25["m_columns"][] = "Passw";
$proto25["m_columns"][] = "Type";
$proto25["m_columns"][] = "BranchID";
$proto25["m_columns"][] = "DateJoin";
$proto25["m_columns"][] = "Dateout";
$proto25["m_columns"][] = "Gender";
$proto25["m_columns"][] = "married";
$proto25["m_columns"][] = "Address1";
$proto25["m_columns"][] = "City";
$proto25["m_columns"][] = "Postcode";
$proto25["m_columns"][] = "StateID";
$proto25["m_columns"][] = "Country";
$proto25["m_columns"][] = "HomeTelephone";
$proto25["m_columns"][] = "MobileTelephone";
$proto25["m_columns"][] = "Nationality";
$proto25["m_columns"][] = "Passport";
$proto25["m_columns"][] = "BatchID";
$proto25["m_columns"][] = "Intake";
$proto25["m_columns"][] = "Sponsor";
$proto25["m_columns"][] = "DipID";
$proto25["m_columns"][] = "Status";
$proto25["m_columns"][] = "Disability";
$proto25["m_columns"][] = "MedicalCondition";
$proto25["m_columns"][] = "race";
$proto25["m_columns"][] = "Religion";
$proto25["m_columns"][] = "Class";
$proto25["m_columns"][] = "Intake_Category";
$proto25["m_columns"][] = "f1_name";
$proto25["m_columns"][] = "f1_tel";
$proto25["m_columns"][] = "f1_relation";
$proto25["m_columns"][] = "f2_name";
$proto25["m_columns"][] = "f2_tel";
$proto25["m_columns"][] = "f2_relation";
$proto25["m_columns"][] = "blood";
$proto25["m_columns"][] = "hostel_in";
$proto25["m_columns"][] = "job";
$proto25["m_columns"][] = "al_certificate";
$proto25["m_columns"][] = "al_license";
$proto25["m_columns"][] = "f_name";
$proto25["m_columns"][] = "f_tel";
$proto25["m_columns"][] = "f_ic";
$proto25["m_columns"][] = "f_job";
$proto25["m_columns"][] = "f_address";
$proto25["m_columns"][] = "m_name";
$proto25["m_columns"][] = "m_tel";
$proto25["m_columns"][] = "m_ic";
$proto25["m_columns"][] = "m_job";
$proto25["m_columns"][] = "m_address";
$proto25["m_columns"][] = "qua_year";
$proto25["m_columns"][] = "qua_level";
$proto25["m_columns"][] = "qua_result";
$proto25["m_columns"][] = "qua_place";
$proto25["m_columns"][] = "photo";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_alias"] = "";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = "0";
$proto26["m_inBrackets"] = "0";
$proto26["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Chart_no_student = createSqlQuery_Chart_no_student();
									$tdataChart_no_student[".sqlquery"] = $queryData_Chart_no_student;

$tableEvents["Chart_no_student"] = new eventsBase;
$tdataChart_no_student[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Chart_no_student");

?>