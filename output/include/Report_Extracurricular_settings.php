<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Extracurricular = array();
	$tdataReport_Extracurricular[".NumberOfChars"] = 80; 
	$tdataReport_Extracurricular[".ShortName"] = "Report_Extracurricular";
	$tdataReport_Extracurricular[".OwnerID"] = "";
	$tdataReport_Extracurricular[".OriginalTable"] = "student_extracurricular";

//	field labels
$fieldLabelsReport_Extracurricular = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Extracurricular["English"] = array();
	$fieldToolTipsReport_Extracurricular["English"] = array();
	$fieldLabelsReport_Extracurricular["English"]["ID"] = "ID";
	$fieldToolTipsReport_Extracurricular["English"]["ID"] = "";
	$fieldLabelsReport_Extracurricular["English"]["StudentID"] = "Student Name";
	$fieldToolTipsReport_Extracurricular["English"]["StudentID"] = "";
	$fieldLabelsReport_Extracurricular["English"]["Activity"] = "Activity";
	$fieldToolTipsReport_Extracurricular["English"]["Activity"] = "";
	$fieldLabelsReport_Extracurricular["English"]["Achievement"] = "Achievement";
	$fieldToolTipsReport_Extracurricular["English"]["Achievement"] = "";
	$fieldLabelsReport_Extracurricular["English"]["Start_Date"] = "Start Date";
	$fieldToolTipsReport_Extracurricular["English"]["Start_Date"] = "";
	$fieldLabelsReport_Extracurricular["English"]["End_Date"] = "End Date";
	$fieldToolTipsReport_Extracurricular["English"]["End_Date"] = "";
	$fieldLabelsReport_Extracurricular["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsReport_Extracurricular["English"]["MatricNo"] = "";
	$fieldLabelsReport_Extracurricular["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Extracurricular["English"]["BatchID"] = "";
	$fieldLabelsReport_Extracurricular["English"]["DipID"] = "Program Name";
	$fieldToolTipsReport_Extracurricular["English"]["DipID"] = "";
	$fieldLabelsReport_Extracurricular["English"]["Sponsor"] = "Financial Aid";
	$fieldToolTipsReport_Extracurricular["English"]["Sponsor"] = "";
	$fieldLabelsReport_Extracurricular["English"]["Intake"] = "Year Intake";
	$fieldToolTipsReport_Extracurricular["English"]["Intake"] = "";
	$fieldLabelsReport_Extracurricular["English"]["Level"] = "Level";
	$fieldToolTipsReport_Extracurricular["English"]["Level"] = "";
	$fieldLabelsReport_Extracurricular["English"]["BranchID"] = "Branch ID";
	$fieldToolTipsReport_Extracurricular["English"]["BranchID"] = "";
	$fieldLabelsReport_Extracurricular["English"]["Class"] = "Class";
	$fieldToolTipsReport_Extracurricular["English"]["Class"] = "";
	$fieldLabelsReport_Extracurricular["English"]["Intake_Category"] = "Program";
	$fieldToolTipsReport_Extracurricular["English"]["Intake_Category"] = "";
	if (count($fieldToolTipsReport_Extracurricular["English"]))
		$tdataReport_Extracurricular[".isUseToolTips"] = true;
}
	
	



$tdataReport_Extracurricular[".shortTableName"] = "Report_Extracurricular";
$tdataReport_Extracurricular[".nSecOptions"] = 0;
$tdataReport_Extracurricular[".recsPerRowList"] = 1;
$tdataReport_Extracurricular[".mainTableOwnerID"] = "";
$tdataReport_Extracurricular[".moveNext"] = 1;
$tdataReport_Extracurricular[".nType"] = 1;

$tdataReport_Extracurricular[".strOriginalTableName"] = "student_extracurricular";




$tdataReport_Extracurricular[".showAddInPopup"] = false;

$tdataReport_Extracurricular[".showEditInPopup"] = false;

$tdataReport_Extracurricular[".showViewInPopup"] = false;

$tdataReport_Extracurricular[".fieldsForRegister"] = array();
	
$tdataReport_Extracurricular[".listAjax"] = false;

	$tdataReport_Extracurricular[".audit"] = true;

	$tdataReport_Extracurricular[".locking"] = false;

$tdataReport_Extracurricular[".listIcons"] = true;
$tdataReport_Extracurricular[".inlineEdit"] = true;
$tdataReport_Extracurricular[".inlineAdd"] = true;

$tdataReport_Extracurricular[".exportTo"] = true;


$tdataReport_Extracurricular[".delete"] = true;

$tdataReport_Extracurricular[".showSimpleSearchOptions"] = true;

$tdataReport_Extracurricular[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Extracurricular[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Extracurricular[".isUseAjaxSuggest"] = true;

$tdataReport_Extracurricular[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Extracurricular[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Extracurricular[".isUseTimeForSearch"] = false;




$tdataReport_Extracurricular[".allSearchFields"] = array();

$tdataReport_Extracurricular[".allSearchFields"][] = "BranchID";
$tdataReport_Extracurricular[".allSearchFields"][] = "StudentID";
$tdataReport_Extracurricular[".allSearchFields"][] = "MatricNo";
$tdataReport_Extracurricular[".allSearchFields"][] = "Class";
$tdataReport_Extracurricular[".allSearchFields"][] = "BatchID";
$tdataReport_Extracurricular[".allSearchFields"][] = "Intake_Category";
$tdataReport_Extracurricular[".allSearchFields"][] = "DipID";
$tdataReport_Extracurricular[".allSearchFields"][] = "Activity";
$tdataReport_Extracurricular[".allSearchFields"][] = "Level";
$tdataReport_Extracurricular[".allSearchFields"][] = "Sponsor";
$tdataReport_Extracurricular[".allSearchFields"][] = "Intake";

$tdataReport_Extracurricular[".googleLikeFields"][] = "StudentID";
$tdataReport_Extracurricular[".googleLikeFields"][] = "Activity";
$tdataReport_Extracurricular[".googleLikeFields"][] = "MatricNo";

$tdataReport_Extracurricular[".panelSearchFields"][] = "StudentID";
$tdataReport_Extracurricular[".panelSearchFields"][] = "MatricNo";
$tdataReport_Extracurricular[".panelSearchFields"][] = "BatchID";
$tdataReport_Extracurricular[".panelSearchFields"][] = "Activity";
$tdataReport_Extracurricular[".panelSearchFields"][] = "Level";

$tdataReport_Extracurricular[".advSearchFields"][] = "BranchID";
$tdataReport_Extracurricular[".advSearchFields"][] = "StudentID";
$tdataReport_Extracurricular[".advSearchFields"][] = "MatricNo";
$tdataReport_Extracurricular[".advSearchFields"][] = "Class";
$tdataReport_Extracurricular[".advSearchFields"][] = "BatchID";
$tdataReport_Extracurricular[".advSearchFields"][] = "Intake_Category";
$tdataReport_Extracurricular[".advSearchFields"][] = "DipID";
$tdataReport_Extracurricular[".advSearchFields"][] = "Activity";
$tdataReport_Extracurricular[".advSearchFields"][] = "Level";
$tdataReport_Extracurricular[".advSearchFields"][] = "Sponsor";
$tdataReport_Extracurricular[".advSearchFields"][] = "Intake";

$tdataReport_Extracurricular[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Extracurricular[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_extracurricular.ID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Extracurricular[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Extracurricular[".orderindexes"] = array();
$tdataReport_Extracurricular[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_extracurricular.ID");

$tdataReport_Extracurricular[".sqlHead"] = "SELECT student_extracurricular.ID,  student_extracurricular.StudentID,  student_extracurricular.Activity,  student_extracurricular.Achievement,  student_extracurricular.Start_Date,  student_extracurricular.End_Date,  student_info.MatricNo,  student_info.BatchID,  student_info.DipID,  student_info.Sponsor,  student_info.Intake,  student_extracurricular.`Level`,  student_info.BranchID,  student_info.`Class`,  student_info.Intake_Category";
$tdataReport_Extracurricular[".sqlFrom"] = "FROM student_extracurricular  INNER JOIN student_info ON student_extracurricular.StudentID = student_info.StudentID";
$tdataReport_Extracurricular[".sqlWhereExpr"] = "(student_info.Status ='Active')";
$tdataReport_Extracurricular[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Extracurricular[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Extracurricular[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Extracurricular = array();
$tableKeysReport_Extracurricular[] = "ID";
$tdataReport_Extracurricular[".Keys"] = $tableKeysReport_Extracurricular;

$tdataReport_Extracurricular[".listFields"] = array();
$tdataReport_Extracurricular[".listFields"][] = "StudentID";
$tdataReport_Extracurricular[".listFields"][] = "MatricNo";
$tdataReport_Extracurricular[".listFields"][] = "BatchID";
$tdataReport_Extracurricular[".listFields"][] = "Activity";
$tdataReport_Extracurricular[".listFields"][] = "Level";
$tdataReport_Extracurricular[".listFields"][] = "Achievement";
$tdataReport_Extracurricular[".listFields"][] = "Start_Date";
$tdataReport_Extracurricular[".listFields"][] = "End_Date";

$tdataReport_Extracurricular[".viewFields"] = array();

$tdataReport_Extracurricular[".addFields"] = array();

$tdataReport_Extracurricular[".inlineAddFields"] = array();
$tdataReport_Extracurricular[".inlineAddFields"][] = "StudentID";
$tdataReport_Extracurricular[".inlineAddFields"][] = "Activity";
$tdataReport_Extracurricular[".inlineAddFields"][] = "Level";
$tdataReport_Extracurricular[".inlineAddFields"][] = "Achievement";
$tdataReport_Extracurricular[".inlineAddFields"][] = "Start_Date";
$tdataReport_Extracurricular[".inlineAddFields"][] = "End_Date";

$tdataReport_Extracurricular[".editFields"] = array();

$tdataReport_Extracurricular[".inlineEditFields"] = array();
$tdataReport_Extracurricular[".inlineEditFields"][] = "StudentID";
$tdataReport_Extracurricular[".inlineEditFields"][] = "Activity";
$tdataReport_Extracurricular[".inlineEditFields"][] = "Level";
$tdataReport_Extracurricular[".inlineEditFields"][] = "Achievement";
$tdataReport_Extracurricular[".inlineEditFields"][] = "Start_Date";
$tdataReport_Extracurricular[".inlineEditFields"][] = "End_Date";

$tdataReport_Extracurricular[".exportFields"] = array();
$tdataReport_Extracurricular[".exportFields"][] = "StudentID";
$tdataReport_Extracurricular[".exportFields"][] = "MatricNo";
$tdataReport_Extracurricular[".exportFields"][] = "BatchID";
$tdataReport_Extracurricular[".exportFields"][] = "Activity";
$tdataReport_Extracurricular[".exportFields"][] = "Achievement";
$tdataReport_Extracurricular[".exportFields"][] = "Start_Date";
$tdataReport_Extracurricular[".exportFields"][] = "End_Date";

$tdataReport_Extracurricular[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "student_extracurricular.ID";
	
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
	
		
		
	$tdataReport_Extracurricular["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Student Name"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_extracurricular.StudentID";
	
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
				if(strpos(GetUserPermissions("Report_Extracurricular"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
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
	
		
		
	$tdataReport_Extracurricular["StudentID"] = $fdata;
//	Activity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Activity";
	$fdata["GoodName"] = "Activity";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Activity"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activity"; 
		$fdata["FullName"] = "student_extracurricular.Activity";
	
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
			$edata["nCols"] = 150;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Extracurricular["Activity"] = $fdata;
//	Achievement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Achievement";
	$fdata["GoodName"] = "Achievement";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Achievement"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Achievement"; 
		$fdata["FullName"] = "student_extracurricular.Achievement";
	
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
	
		
		
	$tdataReport_Extracurricular["Achievement"] = $fdata;
//	Start_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Start_Date";
	$fdata["GoodName"] = "Start_Date";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Start Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Start_Date"; 
		$fdata["FullName"] = "student_extracurricular.Start_Date";
	
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
	
		
		
	$tdataReport_Extracurricular["Start_Date"] = $fdata;
//	End_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "End_Date";
	$fdata["GoodName"] = "End_Date";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "End Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "End_Date"; 
		$fdata["FullName"] = "student_extracurricular.End_Date";
	
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
	
		
		
	$tdataReport_Extracurricular["End_Date"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
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
	
		
		
	$tdataReport_Extracurricular["MatricNo"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
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
	
		
		
	$tdataReport_Extracurricular["BatchID"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Program Name"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
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
				if(strpos(GetUserPermissions("Report_Extracurricular"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
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
	
		
		
	$tdataReport_Extracurricular["DipID"] = $fdata;
//	Sponsor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Sponsor";
	$fdata["GoodName"] = "Sponsor";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Financial Aid"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Sponsor"; 
		$fdata["FullName"] = "student_info.Sponsor";
	
		
		
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
	
		
		
	$tdataReport_Extracurricular["Sponsor"] = $fdata;
//	Intake
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Intake";
	$fdata["GoodName"] = "Intake";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Year Intake"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Intake"; 
		$fdata["FullName"] = "student_info.Intake";
	
		
		
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
	
		$edata["LookupWhere"] = "Class=7";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Extracurricular["Intake"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "student_extracurricular";
	$fdata["Label"] = "Level"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Level"; 
		$fdata["FullName"] = "student_extracurricular.`Level`";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=34";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Extracurricular["Level"] = $fdata;
//	BranchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "BranchID";
	$fdata["GoodName"] = "BranchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Branch ID"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "BranchID"; 
		$fdata["FullName"] = "student_info.BranchID";
	
		
		
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
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";
	
		
	$edata["LookupTable"] = "branch";
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
	
		
		
	$tdataReport_Extracurricular["BranchID"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
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
	
		
		
	$tdataReport_Extracurricular["Class"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
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
	
		
		
	$tdataReport_Extracurricular["Intake_Category"] = $fdata;

	
$tables_data["Report_Extracurricular"]=&$tdataReport_Extracurricular;
$field_labels["Report_Extracurricular"] = &$fieldLabelsReport_Extracurricular;
$fieldToolTips["Report_Extracurricular"] = &$fieldToolTipsReport_Extracurricular;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Extracurricular"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Extracurricular"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Extracurricular()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_extracurricular.ID,  student_extracurricular.StudentID,  student_extracurricular.Activity,  student_extracurricular.Achievement,  student_extracurricular.Start_Date,  student_extracurricular.End_Date,  student_info.MatricNo,  student_info.BatchID,  student_info.DipID,  student_info.Sponsor,  student_info.Intake,  student_extracurricular.`Level`,  student_info.BranchID,  student_info.`Class`,  student_info.Intake_Category";
$proto0["m_strFrom"] = "FROM student_extracurricular  INNER JOIN student_info ON student_extracurricular.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "(student_info.Status ='Active')";
$proto0["m_strOrderBy"] = "ORDER BY student_extracurricular.ID DESC";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "student_info.Status ='Active'";
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
	"m_strName" => "ID",
	"m_strTable" => "student_extracurricular"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_extracurricular"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Activity",
	"m_strTable" => "student_extracurricular"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Achievement",
	"m_strTable" => "student_extracurricular"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Start_Date",
	"m_strTable" => "student_extracurricular"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "End_Date",
	"m_strTable" => "student_extracurricular"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Sponsor",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake",
	"m_strTable" => "student_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "student_extracurricular"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "BranchID",
	"m_strTable" => "student_info"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
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
$proto36["m_strName"] = "student_extracurricular";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "ID";
$proto36["m_columns"][] = "StudentID";
$proto36["m_columns"][] = "Activity";
$proto36["m_columns"][] = "Achievement";
$proto36["m_columns"][] = "Start_Date";
$proto36["m_columns"][] = "End_Date";
$proto36["m_columns"][] = "Level";
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
$proto41["m_sql"] = "student_extracurricular.StudentID = student_info.StudentID";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_extracurricular"
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
	"m_strName" => "ID",
	"m_strTable" => "student_extracurricular"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 0;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Extracurricular = createSqlQuery_Report_Extracurricular();
															$tdataReport_Extracurricular[".sqlquery"] = $queryData_Report_Extracurricular;

$tableEvents["Report_Extracurricular"] = new eventsBase;
$tdataReport_Extracurricular[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Report_Extracurricular");

?>