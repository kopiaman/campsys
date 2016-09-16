<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_attend_detail = array();
	$tdataReport_attend_detail[".NumberOfChars"] = 80; 
	$tdataReport_attend_detail[".ShortName"] = "Report_attend_detail";
	$tdataReport_attend_detail[".OwnerID"] = "";
	$tdataReport_attend_detail[".OriginalTable"] = "student_attendance";

//	field labels
$fieldLabelsReport_attend_detail = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_attend_detail["English"] = array();
	$fieldToolTipsReport_attend_detail["English"] = array();
	$fieldLabelsReport_attend_detail["English"]["StudentID"] = "Name";
	$fieldToolTipsReport_attend_detail["English"]["StudentID"] = "";
	$fieldLabelsReport_attend_detail["English"]["course"] = "Module";
	$fieldToolTipsReport_attend_detail["English"]["course"] = "";
	$fieldLabelsReport_attend_detail["English"]["date"] = "Date";
	$fieldToolTipsReport_attend_detail["English"]["date"] = "";
	$fieldLabelsReport_attend_detail["English"]["attend"] = "Reason";
	$fieldToolTipsReport_attend_detail["English"]["attend"] = "";
	$fieldLabelsReport_attend_detail["English"]["programID"] = "Program";
	$fieldToolTipsReport_attend_detail["English"]["programID"] = "";
	$fieldLabelsReport_attend_detail["English"]["batchID"] = "Batch";
	$fieldToolTipsReport_attend_detail["English"]["batchID"] = "";
	$fieldLabelsReport_attend_detail["English"]["class"] = "Class";
	$fieldToolTipsReport_attend_detail["English"]["class"] = "";
	$fieldLabelsReport_attend_detail["English"]["hour"] = "Hour";
	$fieldToolTipsReport_attend_detail["English"]["hour"] = "";
	$fieldLabelsReport_attend_detail["English"]["Attendance"] = "Attendance";
	$fieldToolTipsReport_attend_detail["English"]["Attendance"] = "";
	if (count($fieldToolTipsReport_attend_detail["English"]))
		$tdataReport_attend_detail[".isUseToolTips"] = true;
}
	
	
	$tdataReport_attend_detail[".NCSearch"] = true;



$tdataReport_attend_detail[".shortTableName"] = "Report_attend_detail";
$tdataReport_attend_detail[".nSecOptions"] = 0;
$tdataReport_attend_detail[".recsPerRowList"] = 1;
$tdataReport_attend_detail[".mainTableOwnerID"] = "";
$tdataReport_attend_detail[".moveNext"] = 1;
$tdataReport_attend_detail[".nType"] = 2;

$tdataReport_attend_detail[".strOriginalTableName"] = "student_attendance";




$tdataReport_attend_detail[".showAddInPopup"] = false;

$tdataReport_attend_detail[".showEditInPopup"] = false;

$tdataReport_attend_detail[".showViewInPopup"] = false;

$tdataReport_attend_detail[".fieldsForRegister"] = array();

$tdataReport_attend_detail[".listAjax"] = false;

	$tdataReport_attend_detail[".audit"] = false;

	$tdataReport_attend_detail[".locking"] = false;

$tdataReport_attend_detail[".listIcons"] = true;
$tdataReport_attend_detail[".edit"] = true;
$tdataReport_attend_detail[".inlineEdit"] = true;
$tdataReport_attend_detail[".inlineAdd"] = true;
$tdataReport_attend_detail[".view"] = true;

$tdataReport_attend_detail[".exportTo"] = true;

$tdataReport_attend_detail[".printFriendly"] = true;

$tdataReport_attend_detail[".delete"] = true;

$tdataReport_attend_detail[".showSimpleSearchOptions"] = false;

$tdataReport_attend_detail[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_attend_detail[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_attend_detail[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataReport_attend_detail[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_attend_detail[".isUseTimeForSearch"] = false;




$tdataReport_attend_detail[".allSearchFields"] = array();

$tdataReport_attend_detail[".allSearchFields"][] = "StudentID";
$tdataReport_attend_detail[".allSearchFields"][] = "course";
$tdataReport_attend_detail[".allSearchFields"][] = "date";
$tdataReport_attend_detail[".allSearchFields"][] = "attend";
$tdataReport_attend_detail[".allSearchFields"][] = "programID";
$tdataReport_attend_detail[".allSearchFields"][] = "batchID";
$tdataReport_attend_detail[".allSearchFields"][] = "class";
$tdataReport_attend_detail[".allSearchFields"][] = "hour";
$tdataReport_attend_detail[".allSearchFields"][] = "Attendance";

$tdataReport_attend_detail[".googleLikeFields"][] = "StudentID";
$tdataReport_attend_detail[".googleLikeFields"][] = "Attendance";

$tdataReport_attend_detail[".panelSearchFields"][] = "StudentID";
$tdataReport_attend_detail[".panelSearchFields"][] = "course";
$tdataReport_attend_detail[".panelSearchFields"][] = "date";
$tdataReport_attend_detail[".panelSearchFields"][] = "attend";
$tdataReport_attend_detail[".panelSearchFields"][] = "programID";
$tdataReport_attend_detail[".panelSearchFields"][] = "batchID";
$tdataReport_attend_detail[".panelSearchFields"][] = "class";

$tdataReport_attend_detail[".advSearchFields"][] = "StudentID";
$tdataReport_attend_detail[".advSearchFields"][] = "course";
$tdataReport_attend_detail[".advSearchFields"][] = "date";
$tdataReport_attend_detail[".advSearchFields"][] = "attend";
$tdataReport_attend_detail[".advSearchFields"][] = "programID";
$tdataReport_attend_detail[".advSearchFields"][] = "batchID";
$tdataReport_attend_detail[".advSearchFields"][] = "class";
$tdataReport_attend_detail[".advSearchFields"][] = "hour";
$tdataReport_attend_detail[".advSearchFields"][] = "Attendance";

$tdataReport_attend_detail[".isTableType"] = "report";

$tdataReport_attend_detail[".reportGroupFields"] = true;
	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_attend_detail[".strOrderBy"] = $tstrOrderBy;

$tdataReport_attend_detail[".orderindexes"] = array();

$tdataReport_attend_detail[".sqlHead"] = "SELECT student_attendance.StudentID,  student_attendance.course,  student_attendance.`date`,  student_attendance.attend,  student_attendance.programID,  student_attendance.batchID,  student_attendance.`class`,  student_attendance.`hour`,  student_course.Attendance";
$tdataReport_attend_detail[".sqlFrom"] = "FROM student_attendance  LEFT JOIN student_course ON student_attendance.StudentID = student_course.StudentID AND student_attendance.course = student_course.CourseID AND student_attendance.programID = student_course.ProgramID";
$tdataReport_attend_detail[".sqlWhereExpr"] = "student_course.Exam_Remark IS NULL";
$tdataReport_attend_detail[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_attend_detail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_attend_detail[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_attend_detail = array();
$tdataReport_attend_detail[".Keys"] = $tableKeysReport_attend_detail;

$tdataReport_attend_detail[".listFields"] = array();
$tdataReport_attend_detail[".listFields"][] = "StudentID";
$tdataReport_attend_detail[".listFields"][] = "course";
$tdataReport_attend_detail[".listFields"][] = "date";
$tdataReport_attend_detail[".listFields"][] = "attend";
$tdataReport_attend_detail[".listFields"][] = "programID";
$tdataReport_attend_detail[".listFields"][] = "batchID";
$tdataReport_attend_detail[".listFields"][] = "class";
$tdataReport_attend_detail[".listFields"][] = "hour";
$tdataReport_attend_detail[".listFields"][] = "Attendance";

$tdataReport_attend_detail[".viewFields"] = array();
$tdataReport_attend_detail[".viewFields"][] = "StudentID";
$tdataReport_attend_detail[".viewFields"][] = "course";
$tdataReport_attend_detail[".viewFields"][] = "date";
$tdataReport_attend_detail[".viewFields"][] = "attend";
$tdataReport_attend_detail[".viewFields"][] = "programID";
$tdataReport_attend_detail[".viewFields"][] = "batchID";
$tdataReport_attend_detail[".viewFields"][] = "class";
$tdataReport_attend_detail[".viewFields"][] = "hour";
$tdataReport_attend_detail[".viewFields"][] = "Attendance";

$tdataReport_attend_detail[".addFields"] = array();
$tdataReport_attend_detail[".addFields"][] = "StudentID";
$tdataReport_attend_detail[".addFields"][] = "course";
$tdataReport_attend_detail[".addFields"][] = "date";
$tdataReport_attend_detail[".addFields"][] = "attend";
$tdataReport_attend_detail[".addFields"][] = "programID";
$tdataReport_attend_detail[".addFields"][] = "batchID";
$tdataReport_attend_detail[".addFields"][] = "class";
$tdataReport_attend_detail[".addFields"][] = "hour";

$tdataReport_attend_detail[".inlineAddFields"] = array();
$tdataReport_attend_detail[".inlineAddFields"][] = "StudentID";
$tdataReport_attend_detail[".inlineAddFields"][] = "course";
$tdataReport_attend_detail[".inlineAddFields"][] = "date";
$tdataReport_attend_detail[".inlineAddFields"][] = "attend";
$tdataReport_attend_detail[".inlineAddFields"][] = "programID";
$tdataReport_attend_detail[".inlineAddFields"][] = "batchID";
$tdataReport_attend_detail[".inlineAddFields"][] = "class";
$tdataReport_attend_detail[".inlineAddFields"][] = "hour";
$tdataReport_attend_detail[".inlineAddFields"][] = "Attendance";

$tdataReport_attend_detail[".editFields"] = array();
$tdataReport_attend_detail[".editFields"][] = "StudentID";
$tdataReport_attend_detail[".editFields"][] = "course";
$tdataReport_attend_detail[".editFields"][] = "date";
$tdataReport_attend_detail[".editFields"][] = "attend";
$tdataReport_attend_detail[".editFields"][] = "programID";
$tdataReport_attend_detail[".editFields"][] = "batchID";
$tdataReport_attend_detail[".editFields"][] = "class";
$tdataReport_attend_detail[".editFields"][] = "hour";

$tdataReport_attend_detail[".inlineEditFields"] = array();
$tdataReport_attend_detail[".inlineEditFields"][] = "StudentID";
$tdataReport_attend_detail[".inlineEditFields"][] = "course";
$tdataReport_attend_detail[".inlineEditFields"][] = "date";
$tdataReport_attend_detail[".inlineEditFields"][] = "attend";
$tdataReport_attend_detail[".inlineEditFields"][] = "programID";
$tdataReport_attend_detail[".inlineEditFields"][] = "batchID";
$tdataReport_attend_detail[".inlineEditFields"][] = "class";
$tdataReport_attend_detail[".inlineEditFields"][] = "hour";
$tdataReport_attend_detail[".inlineEditFields"][] = "Attendance";

$tdataReport_attend_detail[".exportFields"] = array();
$tdataReport_attend_detail[".exportFields"][] = "StudentID";
$tdataReport_attend_detail[".exportFields"][] = "course";
$tdataReport_attend_detail[".exportFields"][] = "date";
$tdataReport_attend_detail[".exportFields"][] = "attend";
$tdataReport_attend_detail[".exportFields"][] = "programID";
$tdataReport_attend_detail[".exportFields"][] = "batchID";
$tdataReport_attend_detail[".exportFields"][] = "class";
$tdataReport_attend_detail[".exportFields"][] = "hour";
$tdataReport_attend_detail[".exportFields"][] = "Attendance";

$tdataReport_attend_detail[".printFields"] = array();
$tdataReport_attend_detail[".printFields"][] = "StudentID";
$tdataReport_attend_detail[".printFields"][] = "course";
$tdataReport_attend_detail[".printFields"][] = "date";
$tdataReport_attend_detail[".printFields"][] = "attend";
$tdataReport_attend_detail[".printFields"][] = "programID";
$tdataReport_attend_detail[".printFields"][] = "batchID";
$tdataReport_attend_detail[".printFields"][] = "class";
$tdataReport_attend_detail[".printFields"][] = "hour";
$tdataReport_attend_detail[".printFields"][] = "Attendance";

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Name"; 
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
	
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_attendance.StudentID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 2;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
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
	
		
		
	$tdataReport_attend_detail["StudentID"] = $fdata;
//	course
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "course";
	$fdata["GoodName"] = "course";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Module"; 
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
	
		$fdata["strField"] = "course"; 
		$fdata["FullName"] = "student_attendance.course";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	$edata["DisplayField"] = "Name";
	
		
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
	
		
		
	$tdataReport_attend_detail["course"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "date"; 
		$fdata["FullName"] = "student_attendance.`date`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_attend_detail["date"] = $fdata;
//	attend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "attend";
	$fdata["GoodName"] = "attend";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Reason"; 
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
	
		$fdata["strField"] = "attend"; 
		$fdata["FullName"] = "student_attendance.attend";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	$edata["LookupValues"][] = "MC";
	$edata["LookupValues"][] = "ABS";
	$edata["LookupValues"][] = "L";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_attend_detail["attend"] = $fdata;
//	programID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "programID";
	$fdata["GoodName"] = "programID";
	$fdata["ownerTable"] = "student_attendance";
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
	
		$fdata["strField"] = "programID"; 
		$fdata["FullName"] = "student_attendance.programID";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
	$tdataReport_attend_detail["programID"] = $fdata;
//	batchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "batchID";
	$fdata["GoodName"] = "batchID";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Batch"; 
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
	
		$fdata["strField"] = "batchID"; 
		$fdata["FullName"] = "student_attendance.batchID";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_attend_detail["batchID"] = $fdata;
//	class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "class";
	$fdata["GoodName"] = "class";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Class"; 
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
	
		$fdata["strField"] = "class"; 
		$fdata["FullName"] = "student_attendance.`class`";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_attend_detail["class"] = $fdata;
//	hour
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "hour";
	$fdata["GoodName"] = "hour";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Hour"; 
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
	
		$fdata["strField"] = "hour"; 
		$fdata["FullName"] = "student_attendance.`hour`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
	$tdataReport_attend_detail["hour"] = $fdata;
//	Attendance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Attendance";
	$fdata["GoodName"] = "Attendance";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Attendance"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Attendance"; 
		$fdata["FullName"] = "student_course.Attendance";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
	$tdataReport_attend_detail["Attendance"] = $fdata;

	
$tables_data["Report_attend_detail"]=&$tdataReport_attend_detail;
$field_labels["Report_attend_detail"] = &$fieldLabelsReport_attend_detail;
$fieldToolTips["Report_attend_detail"] = &$fieldToolTipsReport_attend_detail;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_attend_detail"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_attend_detail"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_attend_detail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_attendance.StudentID,  student_attendance.course,  student_attendance.`date`,  student_attendance.attend,  student_attendance.programID,  student_attendance.batchID,  student_attendance.`class`,  student_attendance.`hour`,  student_course.Attendance";
$proto0["m_strFrom"] = "FROM student_attendance  LEFT JOIN student_course ON student_attendance.StudentID = student_course.StudentID AND student_attendance.course = student_course.CourseID AND student_attendance.programID = student_course.ProgramID";
$proto0["m_strWhere"] = "student_course.Exam_Remark IS NULL";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "student_course.Exam_Remark IS NULL";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Exam_Remark",
	"m_strTable" => "student_course"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "IS NULL";
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
	"m_strTable" => "student_attendance"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "course",
	"m_strTable" => "student_attendance"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "student_attendance"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "attend",
	"m_strTable" => "student_attendance"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "programID",
	"m_strTable" => "student_attendance"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "batchID",
	"m_strTable" => "student_attendance"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "class",
	"m_strTable" => "student_attendance"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "hour",
	"m_strTable" => "student_attendance"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Attendance",
	"m_strTable" => "student_course"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "student_attendance";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "attend_id";
$proto24["m_columns"][] = "StudentID";
$proto24["m_columns"][] = "course";
$proto24["m_columns"][] = "date";
$proto24["m_columns"][] = "attend";
$proto24["m_columns"][] = "description";
$proto24["m_columns"][] = "programID";
$proto24["m_columns"][] = "batchID";
$proto24["m_columns"][] = "class";
$proto24["m_columns"][] = "hour";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_alias"] = "";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = "0";
$proto25["m_inBrackets"] = "0";
$proto25["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
												$proto27=array();
$proto27["m_link"] = "SQLL_LEFTJOIN";
			$proto28=array();
$proto28["m_strName"] = "student_course";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "ID";
$proto28["m_columns"][] = "StudentID";
$proto28["m_columns"][] = "CourseID";
$proto28["m_columns"][] = "Semester";
$proto28["m_columns"][] = "Credit";
$proto28["m_columns"][] = "Final_Exam";
$proto28["m_columns"][] = "Exam_Status";
$proto28["m_columns"][] = "Exam_Remark";
$proto28["m_columns"][] = "ProgramID";
$proto28["m_columns"][] = "Eligible";
$proto28["m_columns"][] = "Seat";
$proto28["m_columns"][] = "Attendance";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "student_attendance.StudentID = student_course.StudentID AND student_attendance.course = student_course.CourseID AND student_attendance.programID = student_course.ProgramID";
$proto29["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "student_attendance.StudentID = student_course.StudentID AND student_attendance.course = student_course.CourseID AND student_attendance.programID = student_course.ProgramID"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
						$proto31=array();
$proto31["m_sql"] = "student_attendance.StudentID = student_course.StudentID";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_attendance"
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "= student_course.StudentID";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

			$proto29["m_contained"][]=$obj;
						$proto33=array();
$proto33["m_sql"] = "student_attendance.course = student_course.CourseID";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "course",
	"m_strTable" => "student_attendance"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= student_course.CourseID";
$proto33["m_havingmode"] = "0";
$proto33["m_inBrackets"] = "0";
$proto33["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto33);

			$proto29["m_contained"][]=$obj;
						$proto35=array();
$proto35["m_sql"] = "student_attendance.programID = student_course.ProgramID";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "programID",
	"m_strTable" => "student_attendance"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= student_course.ProgramID";
$proto35["m_havingmode"] = "0";
$proto35["m_inBrackets"] = "0";
$proto35["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto35);

			$proto29["m_contained"][]=$obj;
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
$queryData_Report_attend_detail = createSqlQuery_Report_attend_detail();
									$tdataReport_attend_detail[".sqlquery"] = $queryData_Report_attend_detail;

$tableEvents["Report_attend_detail"] = new eventsBase;
$tdataReport_attend_detail[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Report_attend_detail");

?>