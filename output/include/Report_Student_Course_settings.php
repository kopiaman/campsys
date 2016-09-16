<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Student_Course = array();
	$tdataReport_Student_Course[".NumberOfChars"] = 80; 
	$tdataReport_Student_Course[".ShortName"] = "Report_Student_Course";
	$tdataReport_Student_Course[".OwnerID"] = "";
	$tdataReport_Student_Course[".OriginalTable"] = "student_course";

//	field labels
$fieldLabelsReport_Student_Course = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Student_Course["English"] = array();
	$fieldToolTipsReport_Student_Course["English"] = array();
	$fieldLabelsReport_Student_Course["English"]["StudentID"] = "Student";
	$fieldToolTipsReport_Student_Course["English"]["StudentID"] = "";
	$fieldLabelsReport_Student_Course["English"]["CourseID"] = "Module";
	$fieldToolTipsReport_Student_Course["English"]["CourseID"] = "";
	$fieldLabelsReport_Student_Course["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsReport_Student_Course["English"]["MatricNo"] = "";
	$fieldLabelsReport_Student_Course["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Student_Course["English"]["BatchID"] = "";
	$fieldLabelsReport_Student_Course["English"]["Class"] = "Class";
	$fieldToolTipsReport_Student_Course["English"]["Class"] = "";
	$fieldLabelsReport_Student_Course["English"]["Intake_Category"] = "Program";
	$fieldToolTipsReport_Student_Course["English"]["Intake_Category"] = "";
	$fieldLabelsReport_Student_Course["English"]["Semester"] = "Sem";
	$fieldToolTipsReport_Student_Course["English"]["Semester"] = "";
	$fieldLabelsReport_Student_Course["English"]["ProgramID"] = "Course";
	$fieldToolTipsReport_Student_Course["English"]["ProgramID"] = "";
	$fieldLabelsReport_Student_Course["English"]["ID"] = "ID";
	$fieldToolTipsReport_Student_Course["English"]["ID"] = "";
	$fieldLabelsReport_Student_Course["English"]["Eligible"] = "Eligible";
	$fieldToolTipsReport_Student_Course["English"]["Eligible"] = "";
	$fieldLabelsReport_Student_Course["English"]["e1"] = "E1";
	$fieldToolTipsReport_Student_Course["English"]["e1"] = "";
	$fieldLabelsReport_Student_Course["English"]["e2"] = "E2";
	$fieldToolTipsReport_Student_Course["English"]["e2"] = "";
	$fieldLabelsReport_Student_Course["English"]["e3"] = "E3";
	$fieldToolTipsReport_Student_Course["English"]["e3"] = "";
	$fieldLabelsReport_Student_Course["English"]["e4"] = "E4";
	$fieldToolTipsReport_Student_Course["English"]["e4"] = "";
	if (count($fieldToolTipsReport_Student_Course["English"]))
		$tdataReport_Student_Course[".isUseToolTips"] = true;
}
	
	



$tdataReport_Student_Course[".shortTableName"] = "Report_Student_Course";
$tdataReport_Student_Course[".nSecOptions"] = 0;
$tdataReport_Student_Course[".recsPerRowList"] = 1;
$tdataReport_Student_Course[".mainTableOwnerID"] = "";
$tdataReport_Student_Course[".moveNext"] = 1;
$tdataReport_Student_Course[".nType"] = 1;

$tdataReport_Student_Course[".strOriginalTableName"] = "student_course";




$tdataReport_Student_Course[".showAddInPopup"] = false;

$tdataReport_Student_Course[".showEditInPopup"] = false;

$tdataReport_Student_Course[".showViewInPopup"] = false;

$tdataReport_Student_Course[".fieldsForRegister"] = array();
	
$tdataReport_Student_Course[".listAjax"] = false;

	$tdataReport_Student_Course[".audit"] = true;

	$tdataReport_Student_Course[".locking"] = false;

$tdataReport_Student_Course[".listIcons"] = true;
$tdataReport_Student_Course[".inlineEdit"] = true;
$tdataReport_Student_Course[".inlineAdd"] = true;




$tdataReport_Student_Course[".showSimpleSearchOptions"] = true;

$tdataReport_Student_Course[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Student_Course[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Student_Course[".isUseAjaxSuggest"] = true;

$tdataReport_Student_Course[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Student_Course[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Student_Course[".isUseTimeForSearch"] = false;




$tdataReport_Student_Course[".allSearchFields"] = array();

$tdataReport_Student_Course[".allSearchFields"][] = "CourseID";
$tdataReport_Student_Course[".allSearchFields"][] = "e1";
$tdataReport_Student_Course[".allSearchFields"][] = "e2";
$tdataReport_Student_Course[".allSearchFields"][] = "e3";
$tdataReport_Student_Course[".allSearchFields"][] = "e4";

$tdataReport_Student_Course[".googleLikeFields"][] = "StudentID";
$tdataReport_Student_Course[".googleLikeFields"][] = "e1";
$tdataReport_Student_Course[".googleLikeFields"][] = "e2";
$tdataReport_Student_Course[".googleLikeFields"][] = "e3";
$tdataReport_Student_Course[".googleLikeFields"][] = "e4";

$tdataReport_Student_Course[".panelSearchFields"][] = "CourseID";
$tdataReport_Student_Course[".panelSearchFields"][] = "StudentID";
$tdataReport_Student_Course[".panelSearchFields"][] = "MatricNo";
$tdataReport_Student_Course[".panelSearchFields"][] = "Semester";
$tdataReport_Student_Course[".panelSearchFields"][] = "BatchID";
$tdataReport_Student_Course[".panelSearchFields"][] = "Intake_Category";
$tdataReport_Student_Course[".panelSearchFields"][] = "ProgramID";
$tdataReport_Student_Course[".panelSearchFields"][] = "Eligible";
$tdataReport_Student_Course[".panelSearchFields"][] = "Class";

$tdataReport_Student_Course[".advSearchFields"][] = "CourseID";
$tdataReport_Student_Course[".advSearchFields"][] = "e1";
$tdataReport_Student_Course[".advSearchFields"][] = "e2";
$tdataReport_Student_Course[".advSearchFields"][] = "e3";
$tdataReport_Student_Course[".advSearchFields"][] = "e4";

$tdataReport_Student_Course[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Student_Course[".pageSize"] = 40;

$tstrOrderBy = "ORDER BY student_course.StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Student_Course[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Student_Course[".orderindexes"] = array();
$tdataReport_Student_Course[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_course.StudentID");

$tdataReport_Student_Course[".sqlHead"] = "SELECT student_course.StudentID,  student_course.CourseID,  student_course.Semester,  student_course.e1,  student_course.e2,  student_course.e3,  student_course.e4,  student_info.MatricNo,  student_info.BatchID,  student_info.`Class`,  student_info.Intake_Category,  student_course.ProgramID,  student_course.ID,  student_course.Eligible";
$tdataReport_Student_Course[".sqlFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID";
$tdataReport_Student_Course[".sqlWhereExpr"] = "";
$tdataReport_Student_Course[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Student_Course[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Student_Course[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Student_Course = array();
$tableKeysReport_Student_Course[] = "ID";
$tdataReport_Student_Course[".Keys"] = $tableKeysReport_Student_Course;

$tdataReport_Student_Course[".listFields"] = array();
$tdataReport_Student_Course[".listFields"][] = "CourseID";
$tdataReport_Student_Course[".listFields"][] = "e1";
$tdataReport_Student_Course[".listFields"][] = "e2";
$tdataReport_Student_Course[".listFields"][] = "e3";
$tdataReport_Student_Course[".listFields"][] = "e4";

$tdataReport_Student_Course[".viewFields"] = array();

$tdataReport_Student_Course[".addFields"] = array();

$tdataReport_Student_Course[".inlineAddFields"] = array();
$tdataReport_Student_Course[".inlineAddFields"][] = "CourseID";
$tdataReport_Student_Course[".inlineAddFields"][] = "e1";
$tdataReport_Student_Course[".inlineAddFields"][] = "e2";
$tdataReport_Student_Course[".inlineAddFields"][] = "e3";
$tdataReport_Student_Course[".inlineAddFields"][] = "e4";

$tdataReport_Student_Course[".editFields"] = array();

$tdataReport_Student_Course[".inlineEditFields"] = array();
$tdataReport_Student_Course[".inlineEditFields"][] = "CourseID";
$tdataReport_Student_Course[".inlineEditFields"][] = "e1";
$tdataReport_Student_Course[".inlineEditFields"][] = "e2";
$tdataReport_Student_Course[".inlineEditFields"][] = "e3";
$tdataReport_Student_Course[".inlineEditFields"][] = "e4";

$tdataReport_Student_Course[".exportFields"] = array();

$tdataReport_Student_Course[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_course.StudentID";
	
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Course["StudentID"] = $fdata;
//	CourseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CourseID";
	$fdata["GoodName"] = "CourseID";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Module"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "CourseID"; 
		$fdata["FullName"] = "student_course.CourseID";
	
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
				
		
			
	$edata["LinkField"] = "CourseID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Shortname";
	
		
	$edata["LookupTable"] = "course";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Course["CourseID"] = $fdata;
//	Semester
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Semester";
	$fdata["GoodName"] = "Semester";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Sem"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Semester"; 
		$fdata["FullName"] = "student_course.Semester";
	
		
		
				
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
	
		
		$edata["LookupWhere"] = "Class=32";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Course["Semester"] = $fdata;
//	e1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "e1";
	$fdata["GoodName"] = "e1";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "E1"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "e1"; 
		$fdata["FullName"] = "student_course.e1";
	
		
		
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
	
		
		
	$tdataReport_Student_Course["e1"] = $fdata;
//	e2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "e2";
	$fdata["GoodName"] = "e2";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "E2"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "e2"; 
		$fdata["FullName"] = "student_course.e2";
	
		
		
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
	
		
		
	$tdataReport_Student_Course["e2"] = $fdata;
//	e3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "e3";
	$fdata["GoodName"] = "e3";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "E3"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "e3"; 
		$fdata["FullName"] = "student_course.e3";
	
		
		
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
	
		
		
	$tdataReport_Student_Course["e3"] = $fdata;
//	e4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "e4";
	$fdata["GoodName"] = "e4";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "E4"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "e4"; 
		$fdata["FullName"] = "student_course.e4";
	
		
		
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
	
		
		
	$tdataReport_Student_Course["e4"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Matric No"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "student_info.MatricNo";
	
		
		
				
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
	
		
		
	$tdataReport_Student_Course["MatricNo"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "student_info.BatchID";
	
		
		
				
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
	
		
		
	$tdataReport_Student_Course["BatchID"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "student_info.`Class`";
	
		
		
				
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
	
		
		
	$tdataReport_Student_Course["Class"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Intake_Category";
	$fdata["GoodName"] = "Intake_Category";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Program"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Intake_Category"; 
		$fdata["FullName"] = "student_info.Intake_Category";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("Report_Student_Course"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
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
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("Report_Student_Course"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
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
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdataReport_Student_Course["Intake_Category"] = $fdata;
//	ProgramID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ProgramID";
	$fdata["GoodName"] = "ProgramID";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ProgramID"; 
		$fdata["FullName"] = "student_course.ProgramID";
	
		
		
				
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Course["ProgramID"] = $fdata;
//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "student_course.ID";
	
		
		
				
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
	
		
		
	$tdataReport_Student_Course["ID"] = $fdata;
//	Eligible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Eligible";
	$fdata["GoodName"] = "Eligible";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Eligible"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Eligible"; 
		$fdata["FullName"] = "student_course.Eligible";
	
		
		
				
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
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Course["Eligible"] = $fdata;

	
$tables_data["Report_Student_Course"]=&$tdataReport_Student_Course;
$field_labels["Report_Student_Course"] = &$fieldLabelsReport_Student_Course;
$fieldToolTips["Report_Student_Course"] = &$fieldToolTipsReport_Student_Course;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Student_Course"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Student_Course"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="Report_Student_Course_List";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Report_Student_Course_List";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["Report_Student_Course"][$mIndex] = $masterParams;	
		$masterTablesData["Report_Student_Course"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["Report_Student_Course"][$mIndex]["detailKeys"][]="StudentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Student_Course()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_course.StudentID,  student_course.CourseID,  student_course.Semester,  student_course.e1,  student_course.e2,  student_course.e3,  student_course.e4,  student_info.MatricNo,  student_info.BatchID,  student_info.`Class`,  student_info.Intake_Category,  student_course.ProgramID,  student_course.ID,  student_course.Eligible";
$proto0["m_strFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY student_course.StudentID DESC";
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
	"m_strTable" => "student_course"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "CourseID",
	"m_strTable" => "student_course"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Semester",
	"m_strTable" => "student_course"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "e1",
	"m_strTable" => "student_course"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "e2",
	"m_strTable" => "student_course"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "e3",
	"m_strTable" => "student_course"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "e4",
	"m_strTable" => "student_course"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "ProgramID",
	"m_strTable" => "student_course"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "student_course"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Eligible",
	"m_strTable" => "student_course"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "student_course";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "ID";
$proto34["m_columns"][] = "StudentID";
$proto34["m_columns"][] = "CourseID";
$proto34["m_columns"][] = "Semester";
$proto34["m_columns"][] = "Credit";
$proto34["m_columns"][] = "e1";
$proto34["m_columns"][] = "e2";
$proto34["m_columns"][] = "e3";
$proto34["m_columns"][] = "e4";
$proto34["m_columns"][] = "ProgramID";
$proto34["m_columns"][] = "Eligible";
$proto34["m_columns"][] = "Seat";
$proto34["m_columns"][] = "Attendance";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_alias"] = "";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = "0";
$proto35["m_inBrackets"] = "0";
$proto35["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
												$proto37=array();
$proto37["m_link"] = "SQLL_INNERJOIN";
			$proto38=array();
$proto38["m_strName"] = "student_info";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "StudentID";
$proto38["m_columns"][] = "Name";
$proto38["m_columns"][] = "ICNO";
$proto38["m_columns"][] = "DOB";
$proto38["m_columns"][] = "MatricNo";
$proto38["m_columns"][] = "Nogilir";
$proto38["m_columns"][] = "Email";
$proto38["m_columns"][] = "Access";
$proto38["m_columns"][] = "Passw";
$proto38["m_columns"][] = "Type";
$proto38["m_columns"][] = "BranchID";
$proto38["m_columns"][] = "DateJoin";
$proto38["m_columns"][] = "Dateout";
$proto38["m_columns"][] = "Gender";
$proto38["m_columns"][] = "married";
$proto38["m_columns"][] = "Address1";
$proto38["m_columns"][] = "City";
$proto38["m_columns"][] = "Postcode";
$proto38["m_columns"][] = "StateID";
$proto38["m_columns"][] = "Country";
$proto38["m_columns"][] = "HomeTelephone";
$proto38["m_columns"][] = "MobileTelephone";
$proto38["m_columns"][] = "Nationality";
$proto38["m_columns"][] = "Passport";
$proto38["m_columns"][] = "BatchID";
$proto38["m_columns"][] = "Intake";
$proto38["m_columns"][] = "Sponsor";
$proto38["m_columns"][] = "DipID";
$proto38["m_columns"][] = "Status";
$proto38["m_columns"][] = "Disability";
$proto38["m_columns"][] = "MedicalCondition";
$proto38["m_columns"][] = "race";
$proto38["m_columns"][] = "Religion";
$proto38["m_columns"][] = "Class";
$proto38["m_columns"][] = "Intake_Category";
$proto38["m_columns"][] = "f1_name";
$proto38["m_columns"][] = "f1_tel";
$proto38["m_columns"][] = "f1_relation";
$proto38["m_columns"][] = "f2_name";
$proto38["m_columns"][] = "f2_tel";
$proto38["m_columns"][] = "f2_relation";
$proto38["m_columns"][] = "blood";
$proto38["m_columns"][] = "hostel_in";
$proto38["m_columns"][] = "job";
$proto38["m_columns"][] = "al_certificate";
$proto38["m_columns"][] = "al_license";
$proto38["m_columns"][] = "f_name";
$proto38["m_columns"][] = "f_tel";
$proto38["m_columns"][] = "f_ic";
$proto38["m_columns"][] = "f_job";
$proto38["m_columns"][] = "f_address";
$proto38["m_columns"][] = "m_name";
$proto38["m_columns"][] = "m_tel";
$proto38["m_columns"][] = "m_ic";
$proto38["m_columns"][] = "m_job";
$proto38["m_columns"][] = "m_address";
$proto38["m_columns"][] = "qua_year";
$proto38["m_columns"][] = "qua_level";
$proto38["m_columns"][] = "qua_result";
$proto38["m_columns"][] = "qua_place";
$proto38["m_columns"][] = "photo";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_alias"] = "";
$proto39=array();
$proto39["m_sql"] = "student_course.StudentID = student_info.StudentID";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= student_info.StudentID";
$proto39["m_havingmode"] = "0";
$proto39["m_inBrackets"] = "0";
$proto39["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Student_Course = createSqlQuery_Report_Student_Course();
														$tdataReport_Student_Course[".sqlquery"] = $queryData_Report_Student_Course;

$tableEvents["Report_Student_Course"] = new eventsBase;
$tdataReport_Student_Course[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Report_Student_Course");

?>