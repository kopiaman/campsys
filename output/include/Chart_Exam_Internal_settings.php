<?php
require_once(getabspath("classes/cipherer.php"));
$tdataChart_Exam_Internal = array();
	$tdataChart_Exam_Internal[".ShortName"] = "Chart_Exam_Internal";
	$tdataChart_Exam_Internal[".OwnerID"] = "";
	$tdataChart_Exam_Internal[".OriginalTable"] = "student_course";

//	field labels
$fieldLabelsChart_Exam_Internal = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsChart_Exam_Internal["English"] = array();
	$fieldToolTipsChart_Exam_Internal["English"] = array();
	$fieldLabelsChart_Exam_Internal["English"]["Semester"] = "Semester";
	$fieldToolTipsChart_Exam_Internal["English"]["Semester"] = "";
	$fieldLabelsChart_Exam_Internal["English"]["course"] = "Course";
	$fieldToolTipsChart_Exam_Internal["English"]["course"] = "";
	$fieldLabelsChart_Exam_Internal["English"]["program"] = "Course";
	$fieldToolTipsChart_Exam_Internal["English"]["program"] = "";
	$fieldLabelsChart_Exam_Internal["English"]["less80"] = "Less 80%";
	$fieldToolTipsChart_Exam_Internal["English"]["less80"] = "";
	$fieldLabelsChart_Exam_Internal["English"]["less100"] = "Less 100%";
	$fieldToolTipsChart_Exam_Internal["English"]["less100"] = "";
	$fieldLabelsChart_Exam_Internal["English"]["Batch"] = "Batch";
	$fieldToolTipsChart_Exam_Internal["English"]["Batch"] = "";
	$fieldLabelsChart_Exam_Internal["English"]["Class"] = "Class";
	$fieldToolTipsChart_Exam_Internal["English"]["Class"] = "";
	$fieldLabelsChart_Exam_Internal["English"]["program_course"] = "Program Course";
	$fieldToolTipsChart_Exam_Internal["English"]["program_course"] = "";
	$fieldLabelsChart_Exam_Internal["English"]["Exam_Remark"] = "Exam Remark";
	$fieldToolTipsChart_Exam_Internal["English"]["Exam_Remark"] = "";
	$fieldLabelsChart_Exam_Internal["English"]["less45"] = "Less 45%";
	$fieldToolTipsChart_Exam_Internal["English"]["less45"] = "";
	$fieldLabelsChart_Exam_Internal["English"]["less65"] = "Less 65% ";
	$fieldToolTipsChart_Exam_Internal["English"]["less65"] = "";
	$fieldLabelsChart_Exam_Internal["English"][""] = "";
	$fieldToolTipsChart_Exam_Internal["English"][""] = "";
	$fieldLabelsChart_Exam_Internal["English"][""] = "Chart Exam Internal";
	$fieldToolTipsChart_Exam_Internal["English"][""] = "";
	$fieldLabelsChart_Exam_Internal["English"][""] = "";
	$fieldToolTipsChart_Exam_Internal["English"][""] = "";
	$fieldLabelsChart_Exam_Internal["English"][""] = "";
	$fieldToolTipsChart_Exam_Internal["English"][""] = "";
	if (count($fieldToolTipsChart_Exam_Internal["English"]))
		$tdataChart_Exam_Internal[".isUseToolTips"] = true;
}
	
	
	$tdataChart_Exam_Internal[".NCSearch"] = true;

	$tdataChart_Exam_Internal[".ChartRefreshTime"] = 0;


$tdataChart_Exam_Internal[".shortTableName"] = "Chart_Exam_Internal";
$tdataChart_Exam_Internal[".nSecOptions"] = 0;
$tdataChart_Exam_Internal[".recsPerRowList"] = 1;
$tdataChart_Exam_Internal[".mainTableOwnerID"] = "";
$tdataChart_Exam_Internal[".moveNext"] = 1;
$tdataChart_Exam_Internal[".nType"] = 3;

$tdataChart_Exam_Internal[".strOriginalTableName"] = "student_course";




$tdataChart_Exam_Internal[".showAddInPopup"] = false;

$tdataChart_Exam_Internal[".showEditInPopup"] = false;

$tdataChart_Exam_Internal[".showViewInPopup"] = false;

$tdataChart_Exam_Internal[".fieldsForRegister"] = array();
	
$tdataChart_Exam_Internal[".listAjax"] = false;

	$tdataChart_Exam_Internal[".audit"] = false;

	$tdataChart_Exam_Internal[".locking"] = false;

$tdataChart_Exam_Internal[".listIcons"] = true;
$tdataChart_Exam_Internal[".edit"] = true;
$tdataChart_Exam_Internal[".inlineEdit"] = true;
$tdataChart_Exam_Internal[".inlineAdd"] = true;
$tdataChart_Exam_Internal[".view"] = true;



$tdataChart_Exam_Internal[".delete"] = true;

$tdataChart_Exam_Internal[".showSimpleSearchOptions"] = false;

$tdataChart_Exam_Internal[".showSearchPanel"] = true;

if (isMobile())
	$tdataChart_Exam_Internal[".isUseAjaxSuggest"] = false;
else 
	$tdataChart_Exam_Internal[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataChart_Exam_Internal[".addPageEvents"] = false;

// use timepicker for search panel
$tdataChart_Exam_Internal[".isUseTimeForSearch"] = false;




$tdataChart_Exam_Internal[".allSearchFields"] = array();

$tdataChart_Exam_Internal[".allSearchFields"][] = "course";
$tdataChart_Exam_Internal[".allSearchFields"][] = "Semester";
$tdataChart_Exam_Internal[".allSearchFields"][] = "program";
$tdataChart_Exam_Internal[".allSearchFields"][] = "Batch";
$tdataChart_Exam_Internal[".allSearchFields"][] = "Class";
$tdataChart_Exam_Internal[".allSearchFields"][] = "program_course";
$tdataChart_Exam_Internal[".allSearchFields"][] = "Exam_Remark";

$tdataChart_Exam_Internal[".googleLikeFields"][] = "less45";
$tdataChart_Exam_Internal[".googleLikeFields"][] = "less65";

$tdataChart_Exam_Internal[".panelSearchFields"][] = "course";
$tdataChart_Exam_Internal[".panelSearchFields"][] = "Semester";
$tdataChart_Exam_Internal[".panelSearchFields"][] = "program";
$tdataChart_Exam_Internal[".panelSearchFields"][] = "Batch";
$tdataChart_Exam_Internal[".panelSearchFields"][] = "Class";
$tdataChart_Exam_Internal[".panelSearchFields"][] = "program_course";
$tdataChart_Exam_Internal[".panelSearchFields"][] = "Exam_Remark";

$tdataChart_Exam_Internal[".advSearchFields"][] = "course";
$tdataChart_Exam_Internal[".advSearchFields"][] = "Semester";
$tdataChart_Exam_Internal[".advSearchFields"][] = "program";
$tdataChart_Exam_Internal[".advSearchFields"][] = "Batch";
$tdataChart_Exam_Internal[".advSearchFields"][] = "Class";
$tdataChart_Exam_Internal[".advSearchFields"][] = "program_course";
$tdataChart_Exam_Internal[".advSearchFields"][] = "Exam_Remark";

$tdataChart_Exam_Internal[".isTableType"] = "chart";

	



// Access doesn't support subqueries from the same table as main



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataChart_Exam_Internal[".strOrderBy"] = $tstrOrderBy;

$tdataChart_Exam_Internal[".orderindexes"] = array();

$tdataChart_Exam_Internal[".sqlHead"] = "SELECT student_course.CourseID AS course,  student_course.Semester,  student_course.ProgramID AS Program,  COUNT(if(student_course.Final_Exam>=0 AND student_course.Final_Exam<46, student_course.StudentID, NULL)) AS less45,  COUNT(if(student_course.Final_Exam>=46 AND student_course.Final_Exam<66, student_course.StudentID, NULL)) AS less65,  COUNT(if(student_course.Final_Exam>=66  AND student_course.Final_Exam<81, student_course.StudentID, NULL)) AS less80,  COUNT(if(student_course.Final_Exam>=81  AND student_course.Final_Exam<=100, student_course.StudentID, NULL)) AS less100,  student_info.BatchID AS Batch,  student_info.`Class`,  student_info.Intake_Category AS program_course,  student_course.Exam_Remark";
$tdataChart_Exam_Internal[".sqlFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID";
$tdataChart_Exam_Internal[".sqlWhereExpr"] = "";
$tdataChart_Exam_Internal[".sqlTail"] = "GROUP BY student_course.CourseID";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataChart_Exam_Internal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataChart_Exam_Internal[".arrGroupsPerPage"] = $arrGPP;

$tableKeysChart_Exam_Internal = array();
$tdataChart_Exam_Internal[".Keys"] = $tableKeysChart_Exam_Internal;

$tdataChart_Exam_Internal[".listFields"] = array();
$tdataChart_Exam_Internal[".listFields"][] = "course";
$tdataChart_Exam_Internal[".listFields"][] = "Semester";
$tdataChart_Exam_Internal[".listFields"][] = "program";
$tdataChart_Exam_Internal[".listFields"][] = "less45";
$tdataChart_Exam_Internal[".listFields"][] = "less65";
$tdataChart_Exam_Internal[".listFields"][] = "less80";
$tdataChart_Exam_Internal[".listFields"][] = "less100";
$tdataChart_Exam_Internal[".listFields"][] = "Batch";
$tdataChart_Exam_Internal[".listFields"][] = "Class";
$tdataChart_Exam_Internal[".listFields"][] = "program_course";
$tdataChart_Exam_Internal[".listFields"][] = "Exam_Remark";

$tdataChart_Exam_Internal[".viewFields"] = array();
$tdataChart_Exam_Internal[".viewFields"][] = "course";
$tdataChart_Exam_Internal[".viewFields"][] = "Semester";
$tdataChart_Exam_Internal[".viewFields"][] = "program";
$tdataChart_Exam_Internal[".viewFields"][] = "less45";
$tdataChart_Exam_Internal[".viewFields"][] = "less65";
$tdataChart_Exam_Internal[".viewFields"][] = "less80";
$tdataChart_Exam_Internal[".viewFields"][] = "less100";
$tdataChart_Exam_Internal[".viewFields"][] = "Batch";
$tdataChart_Exam_Internal[".viewFields"][] = "Class";
$tdataChart_Exam_Internal[".viewFields"][] = "program_course";
$tdataChart_Exam_Internal[".viewFields"][] = "Exam_Remark";

$tdataChart_Exam_Internal[".addFields"] = array();
$tdataChart_Exam_Internal[".addFields"][] = "Semester";
$tdataChart_Exam_Internal[".addFields"][] = "Exam_Remark";

$tdataChart_Exam_Internal[".inlineAddFields"] = array();
$tdataChart_Exam_Internal[".inlineAddFields"][] = "course";
$tdataChart_Exam_Internal[".inlineAddFields"][] = "Semester";
$tdataChart_Exam_Internal[".inlineAddFields"][] = "program";
$tdataChart_Exam_Internal[".inlineAddFields"][] = "less45";
$tdataChart_Exam_Internal[".inlineAddFields"][] = "less65";
$tdataChart_Exam_Internal[".inlineAddFields"][] = "less80";
$tdataChart_Exam_Internal[".inlineAddFields"][] = "less100";
$tdataChart_Exam_Internal[".inlineAddFields"][] = "Batch";
$tdataChart_Exam_Internal[".inlineAddFields"][] = "Class";
$tdataChart_Exam_Internal[".inlineAddFields"][] = "program_course";
$tdataChart_Exam_Internal[".inlineAddFields"][] = "Exam_Remark";

$tdataChart_Exam_Internal[".editFields"] = array();
$tdataChart_Exam_Internal[".editFields"][] = "Semester";
$tdataChart_Exam_Internal[".editFields"][] = "Exam_Remark";

$tdataChart_Exam_Internal[".inlineEditFields"] = array();
$tdataChart_Exam_Internal[".inlineEditFields"][] = "course";
$tdataChart_Exam_Internal[".inlineEditFields"][] = "Semester";
$tdataChart_Exam_Internal[".inlineEditFields"][] = "program";
$tdataChart_Exam_Internal[".inlineEditFields"][] = "less45";
$tdataChart_Exam_Internal[".inlineEditFields"][] = "less65";
$tdataChart_Exam_Internal[".inlineEditFields"][] = "less80";
$tdataChart_Exam_Internal[".inlineEditFields"][] = "less100";
$tdataChart_Exam_Internal[".inlineEditFields"][] = "Batch";
$tdataChart_Exam_Internal[".inlineEditFields"][] = "Class";
$tdataChart_Exam_Internal[".inlineEditFields"][] = "program_course";
$tdataChart_Exam_Internal[".inlineEditFields"][] = "Exam_Remark";

$tdataChart_Exam_Internal[".exportFields"] = array();
$tdataChart_Exam_Internal[".exportFields"][] = "course";
$tdataChart_Exam_Internal[".exportFields"][] = "Semester";
$tdataChart_Exam_Internal[".exportFields"][] = "program";
$tdataChart_Exam_Internal[".exportFields"][] = "less45";
$tdataChart_Exam_Internal[".exportFields"][] = "less65";
$tdataChart_Exam_Internal[".exportFields"][] = "less80";
$tdataChart_Exam_Internal[".exportFields"][] = "less100";
$tdataChart_Exam_Internal[".exportFields"][] = "Batch";
$tdataChart_Exam_Internal[".exportFields"][] = "Class";
$tdataChart_Exam_Internal[".exportFields"][] = "program_course";
$tdataChart_Exam_Internal[".exportFields"][] = "Exam_Remark";

$tdataChart_Exam_Internal[".printFields"] = array();
$tdataChart_Exam_Internal[".printFields"][] = "course";
$tdataChart_Exam_Internal[".printFields"][] = "Semester";
$tdataChart_Exam_Internal[".printFields"][] = "program";
$tdataChart_Exam_Internal[".printFields"][] = "less45";
$tdataChart_Exam_Internal[".printFields"][] = "less65";
$tdataChart_Exam_Internal[".printFields"][] = "less80";
$tdataChart_Exam_Internal[".printFields"][] = "less100";
$tdataChart_Exam_Internal[".printFields"][] = "Batch";
$tdataChart_Exam_Internal[".printFields"][] = "Class";
$tdataChart_Exam_Internal[".printFields"][] = "program_course";
$tdataChart_Exam_Internal[".printFields"][] = "Exam_Remark";

//	course
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "course";
	$fdata["GoodName"] = "course";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CourseID"; 
		$fdata["FullName"] = "student_course.CourseID";
	
		
		
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
				
		
			
	$edata["LinkField"] = "CourseID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Shortname";
	
		
	$edata["LookupTable"] = "course";
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
	
		
		
	$tdataChart_Exam_Internal["course"] = $fdata;
//	Semester
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Semester";
	$fdata["GoodName"] = "Semester";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Semester"; 
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
	
		$fdata["strField"] = "Semester"; 
		$fdata["FullName"] = "student_course.Semester";
	
		
		
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
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_Exam_Internal["Semester"] = $fdata;
//	program
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "program";
	$fdata["GoodName"] = "program";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProgramID"; 
		$fdata["FullName"] = "student_course.ProgramID";
	
		
		
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
	
		
		
	$tdataChart_Exam_Internal["program"] = $fdata;
//	less45
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "less45";
	$fdata["GoodName"] = "less45";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Less 45%"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "less45"; 
		$fdata["FullName"] = "COUNT(if(student_course.Final_Exam>=0 AND student_course.Final_Exam<46, student_course.StudentID, NULL))";
	
		
		
				
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
	
		
		
	$tdataChart_Exam_Internal["less45"] = $fdata;
//	less65
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "less65";
	$fdata["GoodName"] = "less65";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Less 65% "; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "less65"; 
		$fdata["FullName"] = "COUNT(if(student_course.Final_Exam>=46 AND student_course.Final_Exam<66, student_course.StudentID, NULL))";
	
		
		
				
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
	
		
		
	$tdataChart_Exam_Internal["less65"] = $fdata;
//	less80
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "less80";
	$fdata["GoodName"] = "less80";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Less 80%"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "less80"; 
		$fdata["FullName"] = "COUNT(if(student_course.Final_Exam>=66  AND student_course.Final_Exam<81, student_course.StudentID, NULL))";
	
		
		
				
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
	
		
		
	$tdataChart_Exam_Internal["less80"] = $fdata;
//	less100
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "less100";
	$fdata["GoodName"] = "less100";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Less 100%"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "less100"; 
		$fdata["FullName"] = "COUNT(if(student_course.Final_Exam>=81  AND student_course.Final_Exam<=100, student_course.StudentID, NULL))";
	
		
		
				
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
	
		
		
	$tdataChart_Exam_Internal["less100"] = $fdata;
//	Batch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Batch";
	$fdata["GoodName"] = "Batch";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "student_info.BatchID";
	
		
		
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
	
		
		
	$tdataChart_Exam_Internal["Batch"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "student_info.`Class`";
	
		
		
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_Exam_Internal["Class"] = $fdata;
//	program_course
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "program_course";
	$fdata["GoodName"] = "program_course";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Program Course"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Intake_Category"; 
		$fdata["FullName"] = "student_info.Intake_Category";
	
		
		
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
	
		
		
	$tdataChart_Exam_Internal["program_course"] = $fdata;
//	Exam_Remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Exam_Remark";
	$fdata["GoodName"] = "Exam_Remark";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Exam Remark"; 
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
	
		$fdata["strField"] = "Exam_Remark"; 
		$fdata["FullName"] = "student_course.Exam_Remark";
	
		
		
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
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "class=33";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataChart_Exam_Internal["Exam_Remark"] = $fdata;

	$tdataChart_Exam_Internal[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Chart_Exam_Internal</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>
		
		<attr value="parameters">';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="0">
			<attr value="name">less45</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="1">
			<attr value="name">less65</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="2">
			<attr value="name">less80</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="3">
			<attr value="name">less100</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="4">
		<attr value="name">course</attr>
	</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="scolor21">FFAD5B</attr>
			<attr value="scolor22">FFAD5B</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="scolor31">0000FF</attr>
			<attr value="scolor32">0000FF</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="scolor41">32CD32</attr>
			<attr value="scolor42">32CD32</attr>';

	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="head">'.xmlencode("Internal Exam Statistic").'</attr>
<attr value="foot">'.xmlencode("Mark").'</attr>
<attr value="y_axis_label">'.xmlencode("No of Student").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">C7CDC1</attr>
<attr value="color72">C7CDC1</attr>
<attr value="color81">ECF0E8</attr>
<attr value="color82">ECF0E8</attr>
<attr value="color91">68838B</attr>
<attr value="color92">68838B</attr>
<attr value="color101">48505A</attr>
<attr value="color102">48505A</attr>
<attr value="color111">45595F</attr>
<attr value="color112">45595F</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">5</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdataChart_Exam_Internal[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="0">
		<attr value="name">course</attr>
		<attr value="label">'.xmlencode("Course").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="1">
		<attr value="name">Semester</attr>
		<attr value="label">'.xmlencode("Semester").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="2">
		<attr value="name">program</attr>
		<attr value="label">'.xmlencode("Course").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="3">
		<attr value="name">less45</attr>
		<attr value="label">'.xmlencode("Less 45%").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="4">
		<attr value="name">less65</attr>
		<attr value="label">'.xmlencode("Less 65% ").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="5">
		<attr value="name">less80</attr>
		<attr value="label">'.xmlencode("Less 80%").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="6">
		<attr value="name">less100</attr>
		<attr value="label">'.xmlencode("Less 100%").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="7">
		<attr value="name">Batch</attr>
		<attr value="label">'.xmlencode("Batch").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="8">
		<attr value="name">Class</attr>
		<attr value="label">'.xmlencode("Class").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="9">
		<attr value="name">program_course</attr>
		<attr value="label">'.xmlencode("Program Course").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataChart_Exam_Internal[".chartXml"] .= '<attr value="10">
		<attr value="name">Exam_Remark</attr>
		<attr value="label">'.xmlencode("Exam Remark").'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataChart_Exam_Internal[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Chart_Exam_Internal</attr>
<attr value="short_table_name">Chart_Exam_Internal</attr>
</attr>

</chart>';
	
$tables_data["Chart_Exam_Internal"]=&$tdataChart_Exam_Internal;
$field_labels["Chart_Exam_Internal"] = &$fieldLabelsChart_Exam_Internal;
$fieldToolTips["Chart_Exam_Internal"] = &$fieldToolTipsChart_Exam_Internal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Chart_Exam_Internal"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Chart_Exam_Internal"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Chart_Exam_Internal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_course.CourseID AS course,  student_course.Semester,  student_course.ProgramID AS Program,  COUNT(if(student_course.Final_Exam>=0 AND student_course.Final_Exam<46, student_course.StudentID, NULL)) AS less45,  COUNT(if(student_course.Final_Exam>=46 AND student_course.Final_Exam<66, student_course.StudentID, NULL)) AS less65,  COUNT(if(student_course.Final_Exam>=66  AND student_course.Final_Exam<81, student_course.StudentID, NULL)) AS less80,  COUNT(if(student_course.Final_Exam>=81  AND student_course.Final_Exam<=100, student_course.StudentID, NULL)) AS less100,  student_info.BatchID AS Batch,  student_info.`Class`,  student_info.Intake_Category AS program_course,  student_course.Exam_Remark";
$proto0["m_strFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY student_course.CourseID";
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
	"m_strName" => "CourseID",
	"m_strTable" => "student_course"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "course";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Semester",
	"m_strTable" => "student_course"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ProgramID",
	"m_strTable" => "student_course"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Program";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_COUNT";
$proto12["m_arguments"] = array();
						$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.Final_Exam>=0 AND student_course.Final_Exam<46"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.StudentID"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto13);

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto12);

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "less45";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_COUNT";
$proto18["m_arguments"] = array();
						$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.Final_Exam>=46 AND student_course.Final_Exam<66"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.StudentID"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto19);

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto18);

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "less65";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$proto24=array();
$proto24["m_functiontype"] = "SQLF_COUNT";
$proto24["m_arguments"] = array();
						$proto25=array();
$proto25["m_functiontype"] = "SQLF_CUSTOM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.Final_Exam>=66  AND student_course.Final_Exam<81"
));

$proto25["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.StudentID"
));

$proto25["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto25);

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto24);

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "less80";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_functiontype"] = "SQLF_COUNT";
$proto30["m_arguments"] = array();
						$proto31=array();
$proto31["m_functiontype"] = "SQLF_CUSTOM";
$proto31["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.Final_Exam>=81  AND student_course.Final_Exam<=100"
));

$proto31["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.StudentID"
));

$proto31["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto31["m_arguments"][]=$obj;
$proto31["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto31);

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto30);

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "less100";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "Batch";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "program_course";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.Exam_Remark"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "student_course";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "ID";
$proto44["m_columns"][] = "StudentID";
$proto44["m_columns"][] = "CourseID";
$proto44["m_columns"][] = "Semester";
$proto44["m_columns"][] = "Credit";
$proto44["m_columns"][] = "e1";
$proto44["m_columns"][] = "e2";
$proto44["m_columns"][] = "e3";
$proto44["m_columns"][] = "e4";
$proto44["m_columns"][] = "ProgramID";
$proto44["m_columns"][] = "Eligible";
$proto44["m_columns"][] = "Seat";
$proto44["m_columns"][] = "Attendance";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_alias"] = "";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = "0";
$proto45["m_inBrackets"] = "0";
$proto45["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
												$proto47=array();
$proto47["m_link"] = "SQLL_INNERJOIN";
			$proto48=array();
$proto48["m_strName"] = "student_info";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "StudentID";
$proto48["m_columns"][] = "Name";
$proto48["m_columns"][] = "ICNO";
$proto48["m_columns"][] = "DOB";
$proto48["m_columns"][] = "MatricNo";
$proto48["m_columns"][] = "Nogilir";
$proto48["m_columns"][] = "Email";
$proto48["m_columns"][] = "Access";
$proto48["m_columns"][] = "Passw";
$proto48["m_columns"][] = "Type";
$proto48["m_columns"][] = "BranchID";
$proto48["m_columns"][] = "DateJoin";
$proto48["m_columns"][] = "Dateout";
$proto48["m_columns"][] = "Gender";
$proto48["m_columns"][] = "married";
$proto48["m_columns"][] = "Address1";
$proto48["m_columns"][] = "City";
$proto48["m_columns"][] = "Postcode";
$proto48["m_columns"][] = "StateID";
$proto48["m_columns"][] = "Country";
$proto48["m_columns"][] = "HomeTelephone";
$proto48["m_columns"][] = "MobileTelephone";
$proto48["m_columns"][] = "Nationality";
$proto48["m_columns"][] = "Passport";
$proto48["m_columns"][] = "BatchID";
$proto48["m_columns"][] = "Intake";
$proto48["m_columns"][] = "Sponsor";
$proto48["m_columns"][] = "DipID";
$proto48["m_columns"][] = "Status";
$proto48["m_columns"][] = "Disability";
$proto48["m_columns"][] = "MedicalCondition";
$proto48["m_columns"][] = "race";
$proto48["m_columns"][] = "Religion";
$proto48["m_columns"][] = "Class";
$proto48["m_columns"][] = "Intake_Category";
$proto48["m_columns"][] = "f1_name";
$proto48["m_columns"][] = "f1_tel";
$proto48["m_columns"][] = "f1_relation";
$proto48["m_columns"][] = "f2_name";
$proto48["m_columns"][] = "f2_tel";
$proto48["m_columns"][] = "f2_relation";
$proto48["m_columns"][] = "blood";
$proto48["m_columns"][] = "hostel_in";
$proto48["m_columns"][] = "job";
$proto48["m_columns"][] = "al_certificate";
$proto48["m_columns"][] = "al_license";
$proto48["m_columns"][] = "f_name";
$proto48["m_columns"][] = "f_tel";
$proto48["m_columns"][] = "f_ic";
$proto48["m_columns"][] = "f_job";
$proto48["m_columns"][] = "f_address";
$proto48["m_columns"][] = "m_name";
$proto48["m_columns"][] = "m_tel";
$proto48["m_columns"][] = "m_ic";
$proto48["m_columns"][] = "m_job";
$proto48["m_columns"][] = "m_address";
$proto48["m_columns"][] = "qua_year";
$proto48["m_columns"][] = "qua_level";
$proto48["m_columns"][] = "qua_result";
$proto48["m_columns"][] = "qua_place";
$proto48["m_columns"][] = "photo";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_alias"] = "";
$proto49=array();
$proto49["m_sql"] = "student_course.StudentID = student_info.StudentID";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "= student_info.StudentID";
$proto49["m_havingmode"] = "0";
$proto49["m_inBrackets"] = "0";
$proto49["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "CourseID",
	"m_strTable" => "student_course"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Chart_Exam_Internal = createSqlQuery_Chart_Exam_Internal();
											$tdataChart_Exam_Internal[".sqlquery"] = $queryData_Chart_Exam_Internal;

$tableEvents["Chart_Exam_Internal"] = new eventsBase;
$tdataChart_Exam_Internal[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Chart_Exam_Internal");

?>