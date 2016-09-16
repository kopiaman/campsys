<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_exam_summary_whole = array();
	$tdataReport_exam_summary_whole[".NumberOfChars"] = 80; 
	$tdataReport_exam_summary_whole[".ShortName"] = "Report_exam_summary_whole";
	$tdataReport_exam_summary_whole[".OwnerID"] = "";
	$tdataReport_exam_summary_whole[".OriginalTable"] = "student_course";

//	field labels
$fieldLabelsReport_exam_summary_whole = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_exam_summary_whole["English"] = array();
	$fieldToolTipsReport_exam_summary_whole["English"] = array();
	$fieldLabelsReport_exam_summary_whole["English"]["Semester"] = "Semester";
	$fieldToolTipsReport_exam_summary_whole["English"]["Semester"] = "";
	$fieldLabelsReport_exam_summary_whole["English"]["Final_Exam"] = "Mark(%)";
	$fieldToolTipsReport_exam_summary_whole["English"]["Final_Exam"] = "";
	$fieldLabelsReport_exam_summary_whole["English"]["Exam_Status"] = "Status";
	$fieldToolTipsReport_exam_summary_whole["English"]["Exam_Status"] = "";
	$fieldLabelsReport_exam_summary_whole["English"]["Exam_Remark"] = "Remark";
	$fieldToolTipsReport_exam_summary_whole["English"]["Exam_Remark"] = "";
	$fieldLabelsReport_exam_summary_whole["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_exam_summary_whole["English"]["BatchID"] = "";
	$fieldLabelsReport_exam_summary_whole["English"]["Class"] = "Class";
	$fieldToolTipsReport_exam_summary_whole["English"]["Class"] = "";
	$fieldLabelsReport_exam_summary_whole["English"]["Shortname"] = "Module";
	$fieldToolTipsReport_exam_summary_whole["English"]["Shortname"] = "";
	$fieldLabelsReport_exam_summary_whole["English"]["shortcut_name"] = "Course";
	$fieldToolTipsReport_exam_summary_whole["English"]["shortcut_name"] = "";
	$fieldLabelsReport_exam_summary_whole["English"]["Name"] = "Name";
	$fieldToolTipsReport_exam_summary_whole["English"]["Name"] = "";
	$fieldLabelsReport_exam_summary_whole["English"]["course_CourseID"] = "Course.Course ID";
	$fieldToolTipsReport_exam_summary_whole["English"]["course.CourseID"] = "";
	$fieldLabelsReport_exam_summary_whole["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsReport_exam_summary_whole["English"]["MatricNo"] = "";
	if (count($fieldToolTipsReport_exam_summary_whole["English"]))
		$tdataReport_exam_summary_whole[".isUseToolTips"] = true;
}
	
	
	$tdataReport_exam_summary_whole[".NCSearch"] = true;



$tdataReport_exam_summary_whole[".shortTableName"] = "Report_exam_summary_whole";
$tdataReport_exam_summary_whole[".nSecOptions"] = 0;
$tdataReport_exam_summary_whole[".recsPerRowList"] = 1;
$tdataReport_exam_summary_whole[".mainTableOwnerID"] = "";
$tdataReport_exam_summary_whole[".moveNext"] = 1;
$tdataReport_exam_summary_whole[".nType"] = 2;

$tdataReport_exam_summary_whole[".strOriginalTableName"] = "student_course";




$tdataReport_exam_summary_whole[".showAddInPopup"] = false;

$tdataReport_exam_summary_whole[".showEditInPopup"] = false;

$tdataReport_exam_summary_whole[".showViewInPopup"] = false;

$tdataReport_exam_summary_whole[".fieldsForRegister"] = array();
	
$tdataReport_exam_summary_whole[".listAjax"] = false;

	$tdataReport_exam_summary_whole[".audit"] = false;

	$tdataReport_exam_summary_whole[".locking"] = false;

$tdataReport_exam_summary_whole[".listIcons"] = true;
$tdataReport_exam_summary_whole[".edit"] = true;
$tdataReport_exam_summary_whole[".inlineEdit"] = true;
$tdataReport_exam_summary_whole[".inlineAdd"] = true;
$tdataReport_exam_summary_whole[".view"] = true;

$tdataReport_exam_summary_whole[".exportTo"] = true;

$tdataReport_exam_summary_whole[".printFriendly"] = true;

$tdataReport_exam_summary_whole[".delete"] = true;

$tdataReport_exam_summary_whole[".showSimpleSearchOptions"] = false;

$tdataReport_exam_summary_whole[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_exam_summary_whole[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_exam_summary_whole[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataReport_exam_summary_whole[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_exam_summary_whole[".isUseTimeForSearch"] = false;




$tdataReport_exam_summary_whole[".allSearchFields"] = array();

$tdataReport_exam_summary_whole[".allSearchFields"][] = "Semester";
$tdataReport_exam_summary_whole[".allSearchFields"][] = "Final_Exam";
$tdataReport_exam_summary_whole[".allSearchFields"][] = "Exam_Status";
$tdataReport_exam_summary_whole[".allSearchFields"][] = "Exam_Remark";
$tdataReport_exam_summary_whole[".allSearchFields"][] = "BatchID";
$tdataReport_exam_summary_whole[".allSearchFields"][] = "Class";
$tdataReport_exam_summary_whole[".allSearchFields"][] = "Shortname";
$tdataReport_exam_summary_whole[".allSearchFields"][] = "shortcut_name";
$tdataReport_exam_summary_whole[".allSearchFields"][] = "MatricNo";

$tdataReport_exam_summary_whole[".googleLikeFields"][] = "Semester";
$tdataReport_exam_summary_whole[".googleLikeFields"][] = "Final_Exam";
$tdataReport_exam_summary_whole[".googleLikeFields"][] = "Exam_Status";
$tdataReport_exam_summary_whole[".googleLikeFields"][] = "Exam_Remark";
$tdataReport_exam_summary_whole[".googleLikeFields"][] = "BatchID";
$tdataReport_exam_summary_whole[".googleLikeFields"][] = "Class";
$tdataReport_exam_summary_whole[".googleLikeFields"][] = "Shortname";
$tdataReport_exam_summary_whole[".googleLikeFields"][] = "shortcut_name";
$tdataReport_exam_summary_whole[".googleLikeFields"][] = "course.CourseID";
$tdataReport_exam_summary_whole[".googleLikeFields"][] = "MatricNo";

$tdataReport_exam_summary_whole[".panelSearchFields"][] = "BatchID";
$tdataReport_exam_summary_whole[".panelSearchFields"][] = "Class";
$tdataReport_exam_summary_whole[".panelSearchFields"][] = "shortcut_name";

$tdataReport_exam_summary_whole[".advSearchFields"][] = "Semester";
$tdataReport_exam_summary_whole[".advSearchFields"][] = "Final_Exam";
$tdataReport_exam_summary_whole[".advSearchFields"][] = "Exam_Status";
$tdataReport_exam_summary_whole[".advSearchFields"][] = "Exam_Remark";
$tdataReport_exam_summary_whole[".advSearchFields"][] = "BatchID";
$tdataReport_exam_summary_whole[".advSearchFields"][] = "Class";
$tdataReport_exam_summary_whole[".advSearchFields"][] = "Shortname";
$tdataReport_exam_summary_whole[".advSearchFields"][] = "shortcut_name";
$tdataReport_exam_summary_whole[".advSearchFields"][] = "course.CourseID";
$tdataReport_exam_summary_whole[".advSearchFields"][] = "MatricNo";

$tdataReport_exam_summary_whole[".isTableType"] = "report";

$tdataReport_exam_summary_whole[".reportGroupFields"] = true;
	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "ORDER BY course.CourseID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_exam_summary_whole[".strOrderBy"] = $tstrOrderBy;

$tdataReport_exam_summary_whole[".orderindexes"] = array();
$tdataReport_exam_summary_whole[".orderindexes"][] = array(10, (1 ? "ASC" : "DESC"), "course.CourseID");

$tdataReport_exam_summary_whole[".sqlHead"] = "SELECT student_course.Semester,  student_course.Final_Exam,  student_course.Exam_Status,  student_course.Exam_Remark,  student_info.BatchID,  student_info.`Class`,  course.Shortname,  program.shortcut_name,  student_info.Name,  course.CourseID AS `course.CourseID`,  student_info.MatricNo";
$tdataReport_exam_summary_whole[".sqlFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID  INNER JOIN course ON student_course.CourseID = course.CourseID  INNER JOIN program ON student_info.DipID = program.ID";
$tdataReport_exam_summary_whole[".sqlWhereExpr"] = "";
$tdataReport_exam_summary_whole[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_exam_summary_whole[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_exam_summary_whole[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_exam_summary_whole = array();
$tdataReport_exam_summary_whole[".Keys"] = $tableKeysReport_exam_summary_whole;

$tdataReport_exam_summary_whole[".listFields"] = array();
$tdataReport_exam_summary_whole[".listFields"][] = "Semester";
$tdataReport_exam_summary_whole[".listFields"][] = "Final_Exam";
$tdataReport_exam_summary_whole[".listFields"][] = "Exam_Status";
$tdataReport_exam_summary_whole[".listFields"][] = "Exam_Remark";
$tdataReport_exam_summary_whole[".listFields"][] = "BatchID";
$tdataReport_exam_summary_whole[".listFields"][] = "Class";
$tdataReport_exam_summary_whole[".listFields"][] = "Shortname";
$tdataReport_exam_summary_whole[".listFields"][] = "shortcut_name";
$tdataReport_exam_summary_whole[".listFields"][] = "Name";
$tdataReport_exam_summary_whole[".listFields"][] = "course.CourseID";
$tdataReport_exam_summary_whole[".listFields"][] = "MatricNo";

$tdataReport_exam_summary_whole[".viewFields"] = array();
$tdataReport_exam_summary_whole[".viewFields"][] = "Semester";
$tdataReport_exam_summary_whole[".viewFields"][] = "Final_Exam";
$tdataReport_exam_summary_whole[".viewFields"][] = "Exam_Status";
$tdataReport_exam_summary_whole[".viewFields"][] = "Exam_Remark";
$tdataReport_exam_summary_whole[".viewFields"][] = "BatchID";
$tdataReport_exam_summary_whole[".viewFields"][] = "Class";
$tdataReport_exam_summary_whole[".viewFields"][] = "Shortname";
$tdataReport_exam_summary_whole[".viewFields"][] = "shortcut_name";
$tdataReport_exam_summary_whole[".viewFields"][] = "Name";
$tdataReport_exam_summary_whole[".viewFields"][] = "course.CourseID";
$tdataReport_exam_summary_whole[".viewFields"][] = "MatricNo";

$tdataReport_exam_summary_whole[".addFields"] = array();
$tdataReport_exam_summary_whole[".addFields"][] = "Semester";
$tdataReport_exam_summary_whole[".addFields"][] = "Final_Exam";
$tdataReport_exam_summary_whole[".addFields"][] = "Exam_Status";
$tdataReport_exam_summary_whole[".addFields"][] = "Exam_Remark";

$tdataReport_exam_summary_whole[".inlineAddFields"] = array();
$tdataReport_exam_summary_whole[".inlineAddFields"][] = "Semester";
$tdataReport_exam_summary_whole[".inlineAddFields"][] = "Final_Exam";
$tdataReport_exam_summary_whole[".inlineAddFields"][] = "Exam_Status";
$tdataReport_exam_summary_whole[".inlineAddFields"][] = "Exam_Remark";
$tdataReport_exam_summary_whole[".inlineAddFields"][] = "BatchID";
$tdataReport_exam_summary_whole[".inlineAddFields"][] = "Class";
$tdataReport_exam_summary_whole[".inlineAddFields"][] = "Shortname";
$tdataReport_exam_summary_whole[".inlineAddFields"][] = "shortcut_name";
$tdataReport_exam_summary_whole[".inlineAddFields"][] = "Name";
$tdataReport_exam_summary_whole[".inlineAddFields"][] = "course.CourseID";
$tdataReport_exam_summary_whole[".inlineAddFields"][] = "MatricNo";

$tdataReport_exam_summary_whole[".editFields"] = array();
$tdataReport_exam_summary_whole[".editFields"][] = "Semester";
$tdataReport_exam_summary_whole[".editFields"][] = "Final_Exam";
$tdataReport_exam_summary_whole[".editFields"][] = "Exam_Status";
$tdataReport_exam_summary_whole[".editFields"][] = "Exam_Remark";

$tdataReport_exam_summary_whole[".inlineEditFields"] = array();
$tdataReport_exam_summary_whole[".inlineEditFields"][] = "Semester";
$tdataReport_exam_summary_whole[".inlineEditFields"][] = "Final_Exam";
$tdataReport_exam_summary_whole[".inlineEditFields"][] = "Exam_Status";
$tdataReport_exam_summary_whole[".inlineEditFields"][] = "Exam_Remark";
$tdataReport_exam_summary_whole[".inlineEditFields"][] = "BatchID";
$tdataReport_exam_summary_whole[".inlineEditFields"][] = "Class";
$tdataReport_exam_summary_whole[".inlineEditFields"][] = "Shortname";
$tdataReport_exam_summary_whole[".inlineEditFields"][] = "shortcut_name";
$tdataReport_exam_summary_whole[".inlineEditFields"][] = "Name";
$tdataReport_exam_summary_whole[".inlineEditFields"][] = "course.CourseID";
$tdataReport_exam_summary_whole[".inlineEditFields"][] = "MatricNo";

$tdataReport_exam_summary_whole[".exportFields"] = array();
$tdataReport_exam_summary_whole[".exportFields"][] = "Semester";
$tdataReport_exam_summary_whole[".exportFields"][] = "Final_Exam";
$tdataReport_exam_summary_whole[".exportFields"][] = "Exam_Status";
$tdataReport_exam_summary_whole[".exportFields"][] = "Exam_Remark";
$tdataReport_exam_summary_whole[".exportFields"][] = "BatchID";
$tdataReport_exam_summary_whole[".exportFields"][] = "Class";
$tdataReport_exam_summary_whole[".exportFields"][] = "Shortname";
$tdataReport_exam_summary_whole[".exportFields"][] = "shortcut_name";
$tdataReport_exam_summary_whole[".exportFields"][] = "Name";
$tdataReport_exam_summary_whole[".exportFields"][] = "course.CourseID";
$tdataReport_exam_summary_whole[".exportFields"][] = "MatricNo";

$tdataReport_exam_summary_whole[".printFields"] = array();
$tdataReport_exam_summary_whole[".printFields"][] = "Semester";
$tdataReport_exam_summary_whole[".printFields"][] = "Final_Exam";
$tdataReport_exam_summary_whole[".printFields"][] = "Exam_Status";
$tdataReport_exam_summary_whole[".printFields"][] = "Exam_Remark";
$tdataReport_exam_summary_whole[".printFields"][] = "BatchID";
$tdataReport_exam_summary_whole[".printFields"][] = "Class";
$tdataReport_exam_summary_whole[".printFields"][] = "Shortname";
$tdataReport_exam_summary_whole[".printFields"][] = "shortcut_name";
$tdataReport_exam_summary_whole[".printFields"][] = "Name";
$tdataReport_exam_summary_whole[".printFields"][] = "course.CourseID";
$tdataReport_exam_summary_whole[".printFields"][] = "MatricNo";

//	Semester
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
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
	
		
		
	$tdataReport_exam_summary_whole["Semester"] = $fdata;
//	Final_Exam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Final_Exam";
	$fdata["GoodName"] = "Final_Exam";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Mark(%)"; 
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
	
		$fdata["strField"] = "Final_Exam"; 
		$fdata["FullName"] = "student_course.Final_Exam";
	
		
		
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
	
		
		
	$tdataReport_exam_summary_whole["Final_Exam"] = $fdata;
//	Exam_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Exam_Status";
	$fdata["GoodName"] = "Exam_Status";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Status"; 
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
	
		$fdata["strField"] = "Exam_Status"; 
		$fdata["FullName"] = "student_course.Exam_Status";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "PASS";
	$edata["LookupValues"][] = "FAIL";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_exam_summary_whole["Exam_Status"] = $fdata;
//	Exam_Remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Exam_Remark";
	$fdata["GoodName"] = "Exam_Remark";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Remark"; 
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
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=33";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_exam_summary_whole["Exam_Remark"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
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
	
		
		
	$tdataReport_exam_summary_whole["BatchID"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
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
	
		
		
	$tdataReport_exam_summary_whole["Class"] = $fdata;
//	Shortname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Shortname";
	$fdata["GoodName"] = "Shortname";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = "Module"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Shortname"; 
		$fdata["FullName"] = "course.Shortname";
	
		
		
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
	
		
		
	$tdataReport_exam_summary_whole["Shortname"] = $fdata;
//	shortcut_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "shortcut_name";
	$fdata["GoodName"] = "shortcut_name";
	$fdata["ownerTable"] = "program";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "shortcut_name"; 
		$fdata["FullName"] = "program.shortcut_name";
	
		
		
				
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
				
		
			
	$edata["LinkField"] = "shortcut_name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "shortcut_name";
	
		
	$edata["LookupTable"] = "program";
	$edata["LookupOrderBy"] = "ID";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_exam_summary_whole["shortcut_name"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "student_info.Name";
	
		
		
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
		
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_exam_summary_whole["Name"] = $fdata;
//	course.CourseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "course.CourseID";
	$fdata["GoodName"] = "course_CourseID";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = "Course.Course ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CourseID"; 
		$fdata["FullName"] = "course.CourseID";
	
		
		
				
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
	
		
		
	$tdataReport_exam_summary_whole["course.CourseID"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Matric No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "student_info.MatricNo";
	
		
		
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
		
			//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_exam_summary_whole["MatricNo"] = $fdata;

	
$tables_data["Report-exam_summary_whole"]=&$tdataReport_exam_summary_whole;
$field_labels["Report_exam_summary_whole"] = &$fieldLabelsReport_exam_summary_whole;
$fieldToolTips["Report-exam_summary_whole"] = &$fieldToolTipsReport_exam_summary_whole;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report-exam_summary_whole"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report-exam_summary_whole"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_exam_summary_whole()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_course.Semester,  student_course.Final_Exam,  student_course.Exam_Status,  student_course.Exam_Remark,  student_info.BatchID,  student_info.`Class`,  course.Shortname,  program.shortcut_name,  student_info.Name,  course.CourseID AS `course.CourseID`,  student_info.MatricNo";
$proto0["m_strFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID  INNER JOIN course ON student_course.CourseID = course.CourseID  INNER JOIN program ON student_info.DipID = program.ID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY course.CourseID";
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
	"m_strName" => "Semester",
	"m_strTable" => "student_course"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.Final_Exam"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.Exam_Status"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.Exam_Remark"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Shortname",
	"m_strTable" => "course"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut_name",
	"m_strTable" => "program"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "CourseID",
	"m_strTable" => "course"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "course.CourseID";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "student_course";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "ID";
$proto28["m_columns"][] = "StudentID";
$proto28["m_columns"][] = "CourseID";
$proto28["m_columns"][] = "Semester";
$proto28["m_columns"][] = "Credit";
$proto28["m_columns"][] = "e1";
$proto28["m_columns"][] = "e2";
$proto28["m_columns"][] = "e3";
$proto28["m_columns"][] = "e4";
$proto28["m_columns"][] = "ProgramID";
$proto28["m_columns"][] = "Eligible";
$proto28["m_columns"][] = "Seat";
$proto28["m_columns"][] = "Attendance";
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
												$proto31=array();
$proto31["m_link"] = "SQLL_INNERJOIN";
			$proto32=array();
$proto32["m_strName"] = "student_info";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "StudentID";
$proto32["m_columns"][] = "Name";
$proto32["m_columns"][] = "ICNO";
$proto32["m_columns"][] = "DOB";
$proto32["m_columns"][] = "MatricNo";
$proto32["m_columns"][] = "Nogilir";
$proto32["m_columns"][] = "Email";
$proto32["m_columns"][] = "Access";
$proto32["m_columns"][] = "Passw";
$proto32["m_columns"][] = "Type";
$proto32["m_columns"][] = "BranchID";
$proto32["m_columns"][] = "DateJoin";
$proto32["m_columns"][] = "Dateout";
$proto32["m_columns"][] = "Gender";
$proto32["m_columns"][] = "married";
$proto32["m_columns"][] = "Address1";
$proto32["m_columns"][] = "City";
$proto32["m_columns"][] = "Postcode";
$proto32["m_columns"][] = "StateID";
$proto32["m_columns"][] = "Country";
$proto32["m_columns"][] = "HomeTelephone";
$proto32["m_columns"][] = "MobileTelephone";
$proto32["m_columns"][] = "Nationality";
$proto32["m_columns"][] = "Passport";
$proto32["m_columns"][] = "BatchID";
$proto32["m_columns"][] = "Intake";
$proto32["m_columns"][] = "Sponsor";
$proto32["m_columns"][] = "DipID";
$proto32["m_columns"][] = "Status";
$proto32["m_columns"][] = "Disability";
$proto32["m_columns"][] = "MedicalCondition";
$proto32["m_columns"][] = "race";
$proto32["m_columns"][] = "Religion";
$proto32["m_columns"][] = "Class";
$proto32["m_columns"][] = "Intake_Category";
$proto32["m_columns"][] = "f1_name";
$proto32["m_columns"][] = "f1_tel";
$proto32["m_columns"][] = "f1_relation";
$proto32["m_columns"][] = "f2_name";
$proto32["m_columns"][] = "f2_tel";
$proto32["m_columns"][] = "f2_relation";
$proto32["m_columns"][] = "blood";
$proto32["m_columns"][] = "hostel_in";
$proto32["m_columns"][] = "job";
$proto32["m_columns"][] = "al_certificate";
$proto32["m_columns"][] = "al_license";
$proto32["m_columns"][] = "f_name";
$proto32["m_columns"][] = "f_tel";
$proto32["m_columns"][] = "f_ic";
$proto32["m_columns"][] = "f_job";
$proto32["m_columns"][] = "f_address";
$proto32["m_columns"][] = "m_name";
$proto32["m_columns"][] = "m_tel";
$proto32["m_columns"][] = "m_ic";
$proto32["m_columns"][] = "m_job";
$proto32["m_columns"][] = "m_address";
$proto32["m_columns"][] = "qua_year";
$proto32["m_columns"][] = "qua_level";
$proto32["m_columns"][] = "qua_result";
$proto32["m_columns"][] = "qua_place";
$proto32["m_columns"][] = "photo";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_alias"] = "";
$proto33=array();
$proto33["m_sql"] = "student_course.StudentID = student_info.StudentID";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= student_info.StudentID";
$proto33["m_havingmode"] = "0";
$proto33["m_inBrackets"] = "0";
$proto33["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
												$proto35=array();
$proto35["m_link"] = "SQLL_INNERJOIN";
			$proto36=array();
$proto36["m_strName"] = "course";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "CourseID";
$proto36["m_columns"][] = "Name";
$proto36["m_columns"][] = "Code";
$proto36["m_columns"][] = "Shortname";
$proto36["m_columns"][] = "color";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_alias"] = "";
$proto37=array();
$proto37["m_sql"] = "student_course.CourseID = course.CourseID";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CourseID",
	"m_strTable" => "student_course"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= course.CourseID";
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
$proto40["m_strName"] = "program";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "ID";
$proto40["m_columns"][] = "Name";
$proto40["m_columns"][] = "Code";
$proto40["m_columns"][] = "priority";
$proto40["m_columns"][] = "type";
$proto40["m_columns"][] = "shortcut_name";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_alias"] = "";
$proto41=array();
$proto41["m_sql"] = "student_info.DipID = program.ID";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= program.ID";
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
	"m_strName" => "CourseID",
	"m_strTable" => "course"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 1;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_exam_summary_whole = createSqlQuery_Report_exam_summary_whole();
											$tdataReport_exam_summary_whole[".sqlquery"] = $queryData_Report_exam_summary_whole;

$tableEvents["Report-exam_summary_whole"] = new eventsBase;
$tdataReport_exam_summary_whole[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Report-exam_summary_whole");

?>