<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport__Industry_Training = array();
	$tdataReport__Industry_Training[".NumberOfChars"] = 80; 
	$tdataReport__Industry_Training[".ShortName"] = "Report__Industry_Training";
	$tdataReport__Industry_Training[".OwnerID"] = "";
	$tdataReport__Industry_Training[".OriginalTable"] = "student_industry_training";

//	field labels
$fieldLabelsReport__Industry_Training = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport__Industry_Training["English"] = array();
	$fieldToolTipsReport__Industry_Training["English"] = array();
	$fieldLabelsReport__Industry_Training["English"]["id"] = "Id";
	$fieldToolTipsReport__Industry_Training["English"]["id"] = "";
	$fieldLabelsReport__Industry_Training["English"]["studentID"] = "Student";
	$fieldToolTipsReport__Industry_Training["English"]["studentID"] = "";
	$fieldLabelsReport__Industry_Training["English"]["organization_name"] = "Employer";
	$fieldToolTipsReport__Industry_Training["English"]["organization_name"] = "";
	$fieldLabelsReport__Industry_Training["English"]["start_date"] = "Start Date";
	$fieldToolTipsReport__Industry_Training["English"]["start_date"] = "";
	$fieldLabelsReport__Industry_Training["English"]["end_date"] = "End Date";
	$fieldToolTipsReport__Industry_Training["English"]["end_date"] = "";
	$fieldLabelsReport__Industry_Training["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsReport__Industry_Training["English"]["MatricNo"] = "";
	$fieldLabelsReport__Industry_Training["English"]["Batch"] = "Batch";
	$fieldToolTipsReport__Industry_Training["English"]["Batch"] = "";
	$fieldLabelsReport__Industry_Training["English"]["Program_Name"] = "Program Name";
	$fieldToolTipsReport__Industry_Training["English"]["Program_Name"] = "";
	$fieldLabelsReport__Industry_Training["English"]["Class"] = "Class";
	$fieldToolTipsReport__Industry_Training["English"]["Class"] = "";
	$fieldLabelsReport__Industry_Training["English"]["Intake_Category"] = "Program";
	$fieldToolTipsReport__Industry_Training["English"]["Intake_Category"] = "";
	$fieldLabelsReport__Industry_Training["English"]["examStatus"] = "Exam Status";
	$fieldToolTipsReport__Industry_Training["English"]["examStatus"] = "";
	$fieldLabelsReport__Industry_Training["English"]["duration"] = "Duration";
	$fieldToolTipsReport__Industry_Training["English"]["duration"] = "";
	$fieldLabelsReport__Industry_Training["English"]["unemployed"] = "Unemployed";
	$fieldToolTipsReport__Industry_Training["English"]["unemployed"] = "";
	$fieldLabelsReport__Industry_Training["English"]["remarks"] = "Remarks";
	$fieldToolTipsReport__Industry_Training["English"]["remarks"] = "";
	$fieldLabelsReport__Industry_Training["English"]["Name"] = "Name";
	$fieldToolTipsReport__Industry_Training["English"]["Name"] = "";
	if (count($fieldToolTipsReport__Industry_Training["English"]))
		$tdataReport__Industry_Training[".isUseToolTips"] = true;
}
	
	
	$tdataReport__Industry_Training[".NCSearch"] = true;



$tdataReport__Industry_Training[".shortTableName"] = "Report__Industry_Training";
$tdataReport__Industry_Training[".nSecOptions"] = 0;
$tdataReport__Industry_Training[".recsPerRowList"] = 1;
$tdataReport__Industry_Training[".mainTableOwnerID"] = "";
$tdataReport__Industry_Training[".moveNext"] = 1;
$tdataReport__Industry_Training[".nType"] = 1;

$tdataReport__Industry_Training[".strOriginalTableName"] = "student_industry_training";




$tdataReport__Industry_Training[".showAddInPopup"] = false;

$tdataReport__Industry_Training[".showEditInPopup"] = false;

$tdataReport__Industry_Training[".showViewInPopup"] = false;

$tdataReport__Industry_Training[".fieldsForRegister"] = array();
	
$tdataReport__Industry_Training[".listAjax"] = false;

	$tdataReport__Industry_Training[".audit"] = true;

	$tdataReport__Industry_Training[".locking"] = false;

$tdataReport__Industry_Training[".listIcons"] = true;
$tdataReport__Industry_Training[".edit"] = true;
$tdataReport__Industry_Training[".copy"] = true;

$tdataReport__Industry_Training[".exportTo"] = true;


$tdataReport__Industry_Training[".delete"] = true;

$tdataReport__Industry_Training[".showSimpleSearchOptions"] = true;

$tdataReport__Industry_Training[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport__Industry_Training[".isUseAjaxSuggest"] = false;
else 
	$tdataReport__Industry_Training[".isUseAjaxSuggest"] = true;

$tdataReport__Industry_Training[".rowHighlite"] = true;

// button handlers file names
$tdataReport__Industry_Training[".isUsebuttonHandlers"] = true;

$tdataReport__Industry_Training[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport__Industry_Training[".isUseTimeForSearch"] = false;




$tdataReport__Industry_Training[".allSearchFields"] = array();

$tdataReport__Industry_Training[".allSearchFields"][] = "Intake_Category";
$tdataReport__Industry_Training[".allSearchFields"][] = "Class";
$tdataReport__Industry_Training[".allSearchFields"][] = "Program_Name";
$tdataReport__Industry_Training[".allSearchFields"][] = "studentID";
$tdataReport__Industry_Training[".allSearchFields"][] = "MatricNo";
$tdataReport__Industry_Training[".allSearchFields"][] = "Batch";
$tdataReport__Industry_Training[".allSearchFields"][] = "organization_name";
$tdataReport__Industry_Training[".allSearchFields"][] = "unemployed";
$tdataReport__Industry_Training[".allSearchFields"][] = "start_date";
$tdataReport__Industry_Training[".allSearchFields"][] = "end_date";
$tdataReport__Industry_Training[".allSearchFields"][] = "duration";
$tdataReport__Industry_Training[".allSearchFields"][] = "examStatus";
$tdataReport__Industry_Training[".allSearchFields"][] = "remarks";

$tdataReport__Industry_Training[".googleLikeFields"][] = "studentID";
$tdataReport__Industry_Training[".googleLikeFields"][] = "MatricNo";
$tdataReport__Industry_Training[".googleLikeFields"][] = "examStatus";
$tdataReport__Industry_Training[".googleLikeFields"][] = "duration";
$tdataReport__Industry_Training[".googleLikeFields"][] = "unemployed";
$tdataReport__Industry_Training[".googleLikeFields"][] = "remarks";
$tdataReport__Industry_Training[".googleLikeFields"][] = "Name";

$tdataReport__Industry_Training[".panelSearchFields"][] = "Intake_Category";
$tdataReport__Industry_Training[".panelSearchFields"][] = "Program_Name";
$tdataReport__Industry_Training[".panelSearchFields"][] = "Class";
$tdataReport__Industry_Training[".panelSearchFields"][] = "studentID";
$tdataReport__Industry_Training[".panelSearchFields"][] = "MatricNo";
$tdataReport__Industry_Training[".panelSearchFields"][] = "Batch";
$tdataReport__Industry_Training[".panelSearchFields"][] = "organization_name";

$tdataReport__Industry_Training[".advSearchFields"][] = "Intake_Category";
$tdataReport__Industry_Training[".advSearchFields"][] = "Class";
$tdataReport__Industry_Training[".advSearchFields"][] = "Program_Name";
$tdataReport__Industry_Training[".advSearchFields"][] = "studentID";
$tdataReport__Industry_Training[".advSearchFields"][] = "MatricNo";
$tdataReport__Industry_Training[".advSearchFields"][] = "Batch";
$tdataReport__Industry_Training[".advSearchFields"][] = "organization_name";
$tdataReport__Industry_Training[".advSearchFields"][] = "unemployed";
$tdataReport__Industry_Training[".advSearchFields"][] = "start_date";
$tdataReport__Industry_Training[".advSearchFields"][] = "end_date";
$tdataReport__Industry_Training[".advSearchFields"][] = "duration";
$tdataReport__Industry_Training[".advSearchFields"][] = "examStatus";
$tdataReport__Industry_Training[".advSearchFields"][] = "remarks";

$tdataReport__Industry_Training[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport__Industry_Training[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_info.BatchID DESC, student_info.Name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport__Industry_Training[".strOrderBy"] = $tstrOrderBy;

$tdataReport__Industry_Training[".orderindexes"] = array();
$tdataReport__Industry_Training[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "student_info.BatchID");
$tdataReport__Industry_Training[".orderindexes"][] = array(15, (1 ? "ASC" : "DESC"), "student_info.Name");

$tdataReport__Industry_Training[".sqlHead"] = "SELECT student_industry_training.id,  student_industry_training.studentID,  student_industry_training.organization_name,  student_industry_training.start_date,  student_industry_training.end_date,  student_info.MatricNo,  student_info.BatchID AS Batch,  student_info.DipID AS Program_Name,  student_info.`Class`,  student_info.Intake_Category,  student_industry_training.examStatus,  student_industry_training.duration,  student_industry_training.unemployed,  student_industry_training.remarks,  student_info.Name";
$tdataReport__Industry_Training[".sqlFrom"] = "FROM student_industry_training  INNER JOIN student_info ON student_industry_training.studentID = student_info.StudentID";
$tdataReport__Industry_Training[".sqlWhereExpr"] = "";
$tdataReport__Industry_Training[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport__Industry_Training[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport__Industry_Training[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport__Industry_Training = array();
$tableKeysReport__Industry_Training[] = "id";
$tdataReport__Industry_Training[".Keys"] = $tableKeysReport__Industry_Training;

$tdataReport__Industry_Training[".listFields"] = array();
$tdataReport__Industry_Training[".listFields"][] = "studentID";
$tdataReport__Industry_Training[".listFields"][] = "MatricNo";
$tdataReport__Industry_Training[".listFields"][] = "Batch";
$tdataReport__Industry_Training[".listFields"][] = "organization_name";
$tdataReport__Industry_Training[".listFields"][] = "unemployed";
$tdataReport__Industry_Training[".listFields"][] = "start_date";
$tdataReport__Industry_Training[".listFields"][] = "end_date";
$tdataReport__Industry_Training[".listFields"][] = "duration";
$tdataReport__Industry_Training[".listFields"][] = "examStatus";
$tdataReport__Industry_Training[".listFields"][] = "remarks";

$tdataReport__Industry_Training[".viewFields"] = array();

$tdataReport__Industry_Training[".addFields"] = array();
$tdataReport__Industry_Training[".addFields"][] = "studentID";
$tdataReport__Industry_Training[".addFields"][] = "organization_name";
$tdataReport__Industry_Training[".addFields"][] = "unemployed";
$tdataReport__Industry_Training[".addFields"][] = "start_date";
$tdataReport__Industry_Training[".addFields"][] = "end_date";
$tdataReport__Industry_Training[".addFields"][] = "duration";
$tdataReport__Industry_Training[".addFields"][] = "examStatus";
$tdataReport__Industry_Training[".addFields"][] = "remarks";

$tdataReport__Industry_Training[".inlineAddFields"] = array();

$tdataReport__Industry_Training[".editFields"] = array();
$tdataReport__Industry_Training[".editFields"][] = "studentID";
$tdataReport__Industry_Training[".editFields"][] = "organization_name";
$tdataReport__Industry_Training[".editFields"][] = "unemployed";
$tdataReport__Industry_Training[".editFields"][] = "start_date";
$tdataReport__Industry_Training[".editFields"][] = "end_date";
$tdataReport__Industry_Training[".editFields"][] = "duration";
$tdataReport__Industry_Training[".editFields"][] = "examStatus";
$tdataReport__Industry_Training[".editFields"][] = "remarks";

$tdataReport__Industry_Training[".inlineEditFields"] = array();

$tdataReport__Industry_Training[".exportFields"] = array();
$tdataReport__Industry_Training[".exportFields"][] = "Intake_Category";
$tdataReport__Industry_Training[".exportFields"][] = "Class";
$tdataReport__Industry_Training[".exportFields"][] = "Program_Name";
$tdataReport__Industry_Training[".exportFields"][] = "studentID";
$tdataReport__Industry_Training[".exportFields"][] = "MatricNo";
$tdataReport__Industry_Training[".exportFields"][] = "Batch";
$tdataReport__Industry_Training[".exportFields"][] = "organization_name";
$tdataReport__Industry_Training[".exportFields"][] = "unemployed";
$tdataReport__Industry_Training[".exportFields"][] = "start_date";
$tdataReport__Industry_Training[".exportFields"][] = "end_date";
$tdataReport__Industry_Training[".exportFields"][] = "duration";
$tdataReport__Industry_Training[".exportFields"][] = "examStatus";
$tdataReport__Industry_Training[".exportFields"][] = "remarks";

$tdataReport__Industry_Training[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "student_industry_training.id";
	
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
	
		
		
	$tdataReport__Industry_Training["id"] = $fdata;
//	studentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "studentID";
	$fdata["GoodName"] = "studentID";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "studentID"; 
		$fdata["FullName"] = "student_industry_training.studentID";
	
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
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
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
	
		
		
	$tdataReport__Industry_Training["studentID"] = $fdata;
//	organization_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "organization_name";
	$fdata["GoodName"] = "organization_name";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Employer"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "organization_name"; 
		$fdata["FullName"] = "student_industry_training.organization_name";
	
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
				if(strpos(GetUserPermissions("Report-_Industry_Training"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "organization_name";
	
		
	$edata["LookupTable"] = "ojt_company";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
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
	
		
		
	$tdataReport__Industry_Training["organization_name"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Start Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "start_date"; 
		$fdata["FullName"] = "student_industry_training.start_date";
	
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
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport__Industry_Training["start_date"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "End Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "end_date"; 
		$fdata["FullName"] = "student_industry_training.end_date";
	
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
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport__Industry_Training["end_date"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Matric No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdataReport__Industry_Training["MatricNo"] = $fdata;
//	Batch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Batch";
	$fdata["GoodName"] = "Batch";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdataReport__Industry_Training["Batch"] = $fdata;
//	Program_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Program_Name";
	$fdata["GoodName"] = "Program_Name";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Program Name"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
	$edata["DisplayField"] = "Name";
	
		
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
	
		
		
	$tdataReport__Industry_Training["Program_Name"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdataReport__Industry_Training["Class"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Intake_Category";
	$fdata["GoodName"] = "Intake_Category";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Program"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdataReport__Industry_Training["Intake_Category"] = $fdata;
//	examStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "examStatus";
	$fdata["GoodName"] = "examStatus";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Exam Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
	
		
		
	$tdataReport__Industry_Training["examStatus"] = $fdata;
//	duration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "duration";
	$fdata["GoodName"] = "duration";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Duration"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
	
		
		
	$tdataReport__Industry_Training["duration"] = $fdata;
//	unemployed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "unemployed";
	$fdata["GoodName"] = "unemployed";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Unemployed"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
	
		
		
	$tdataReport__Industry_Training["unemployed"] = $fdata;
//	remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "remarks";
	$fdata["GoodName"] = "remarks";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Remarks"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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
	
		
		
	$tdataReport__Industry_Training["remarks"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "student_info.Name";
	
		
		
				
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
	
		
		
	$tdataReport__Industry_Training["Name"] = $fdata;

	
$tables_data["Report-_Industry_Training"]=&$tdataReport__Industry_Training;
$field_labels["Report__Industry_Training"] = &$fieldLabelsReport__Industry_Training;
$fieldToolTips["Report-_Industry_Training"] = &$fieldToolTipsReport__Industry_Training;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report-_Industry_Training"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report-_Industry_Training"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report__Industry_Training()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_industry_training.id,  student_industry_training.studentID,  student_industry_training.organization_name,  student_industry_training.start_date,  student_industry_training.end_date,  student_info.MatricNo,  student_info.BatchID AS Batch,  student_info.DipID AS Program_Name,  student_info.`Class`,  student_info.Intake_Category,  student_industry_training.examStatus,  student_industry_training.duration,  student_industry_training.unemployed,  student_industry_training.remarks,  student_info.Name";
$proto0["m_strFrom"] = "FROM student_industry_training  INNER JOIN student_info ON student_industry_training.studentID = student_info.StudentID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY student_info.BatchID DESC, student_info.Name";
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
	"m_strName" => "organization_name",
	"m_strTable" => "student_industry_training"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "student_industry_training"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "student_industry_training"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Batch";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Program_Name";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "examStatus",
	"m_strTable" => "student_industry_training"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "duration",
	"m_strTable" => "student_industry_training"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "unemployed",
	"m_strTable" => "student_industry_training"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "remarks",
	"m_strTable" => "student_industry_training"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "student_industry_training";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "id";
$proto36["m_columns"][] = "studentID";
$proto36["m_columns"][] = "organization_name";
$proto36["m_columns"][] = "organization_supervisor";
$proto36["m_columns"][] = "academic supervisor";
$proto36["m_columns"][] = "start_date";
$proto36["m_columns"][] = "end_date";
$proto36["m_columns"][] = "orga_super_tel";
$proto36["m_columns"][] = "duration";
$proto36["m_columns"][] = "examStatus";
$proto36["m_columns"][] = "unemployed";
$proto36["m_columns"][] = "remarks";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_alias"] = "";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = "0";
$proto37["m_inBrackets"] = "0";
$proto37["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_INNERJOIN";
			$proto40=array();
$proto40["m_strName"] = "student_info";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "StudentID";
$proto40["m_columns"][] = "Name";
$proto40["m_columns"][] = "ICNO";
$proto40["m_columns"][] = "DOB";
$proto40["m_columns"][] = "MatricNo";
$proto40["m_columns"][] = "Nogilir";
$proto40["m_columns"][] = "Email";
$proto40["m_columns"][] = "Access";
$proto40["m_columns"][] = "Passw";
$proto40["m_columns"][] = "Type";
$proto40["m_columns"][] = "BranchID";
$proto40["m_columns"][] = "DateJoin";
$proto40["m_columns"][] = "Dateout";
$proto40["m_columns"][] = "Gender";
$proto40["m_columns"][] = "married";
$proto40["m_columns"][] = "Address1";
$proto40["m_columns"][] = "City";
$proto40["m_columns"][] = "Postcode";
$proto40["m_columns"][] = "StateID";
$proto40["m_columns"][] = "Country";
$proto40["m_columns"][] = "HomeTelephone";
$proto40["m_columns"][] = "MobileTelephone";
$proto40["m_columns"][] = "Nationality";
$proto40["m_columns"][] = "Passport";
$proto40["m_columns"][] = "BatchID";
$proto40["m_columns"][] = "Intake";
$proto40["m_columns"][] = "Sponsor";
$proto40["m_columns"][] = "DipID";
$proto40["m_columns"][] = "Status";
$proto40["m_columns"][] = "Disability";
$proto40["m_columns"][] = "MedicalCondition";
$proto40["m_columns"][] = "race";
$proto40["m_columns"][] = "Religion";
$proto40["m_columns"][] = "Class";
$proto40["m_columns"][] = "Intake_Category";
$proto40["m_columns"][] = "f1_name";
$proto40["m_columns"][] = "f1_tel";
$proto40["m_columns"][] = "f1_relation";
$proto40["m_columns"][] = "f2_name";
$proto40["m_columns"][] = "f2_tel";
$proto40["m_columns"][] = "f2_relation";
$proto40["m_columns"][] = "blood";
$proto40["m_columns"][] = "hostel_in";
$proto40["m_columns"][] = "job";
$proto40["m_columns"][] = "al_certificate";
$proto40["m_columns"][] = "al_license";
$proto40["m_columns"][] = "f_name";
$proto40["m_columns"][] = "f_tel";
$proto40["m_columns"][] = "f_ic";
$proto40["m_columns"][] = "f_job";
$proto40["m_columns"][] = "f_address";
$proto40["m_columns"][] = "m_name";
$proto40["m_columns"][] = "m_tel";
$proto40["m_columns"][] = "m_ic";
$proto40["m_columns"][] = "m_job";
$proto40["m_columns"][] = "m_address";
$proto40["m_columns"][] = "qua_year";
$proto40["m_columns"][] = "qua_level";
$proto40["m_columns"][] = "qua_result";
$proto40["m_columns"][] = "qua_place";
$proto40["m_columns"][] = "photo";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_alias"] = "";
$proto41=array();
$proto41["m_sql"] = "student_industry_training.studentID = student_info.StudentID";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_industry_training"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= student_info.StudentID";
$proto41["m_havingmode"] = "0";
$proto41["m_inBrackets"] = "0";
$proto41["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 0;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto45["m_column"]=$obj;
$proto45["m_bAsc"] = 1;
$proto45["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto45);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report__Industry_Training = createSqlQuery_Report__Industry_Training();
															$tdataReport__Industry_Training[".sqlquery"] = $queryData_Report__Industry_Training;

include_once(getabspath("include/Report__Industry_Training_events.php"));
$tableEvents["Report-_Industry_Training"] = new eventclass_Report__Industry_Training;
$tdataReport__Industry_Training[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report-_Industry_Training");

?>