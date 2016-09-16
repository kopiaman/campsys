<?php
require_once(getabspath("classes/cipherer.php"));
$tdataMarking_Batch = array();
	$tdataMarking_Batch[".NumberOfChars"] = 80; 
	$tdataMarking_Batch[".ShortName"] = "Marking_Batch";
	$tdataMarking_Batch[".OwnerID"] = "";
	$tdataMarking_Batch[".OriginalTable"] = "student_course";

//	field labels
$fieldLabelsMarking_Batch = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMarking_Batch["English"] = array();
	$fieldToolTipsMarking_Batch["English"] = array();
	$fieldLabelsMarking_Batch["English"]["ID"] = "ID";
	$fieldToolTipsMarking_Batch["English"]["ID"] = "";
	$fieldLabelsMarking_Batch["English"]["StudentID"] = "Student";
	$fieldToolTipsMarking_Batch["English"]["StudentID"] = "";
	$fieldLabelsMarking_Batch["English"]["CourseID"] = "Module";
	$fieldToolTipsMarking_Batch["English"]["CourseID"] = "";
	$fieldLabelsMarking_Batch["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsMarking_Batch["English"]["MatricNo"] = "";
	$fieldLabelsMarking_Batch["English"]["BatchID"] = "Batch";
	$fieldToolTipsMarking_Batch["English"]["BatchID"] = "";
	$fieldLabelsMarking_Batch["English"]["DipID"] = "Course";
	$fieldToolTipsMarking_Batch["English"]["DipID"] = "";
	$fieldLabelsMarking_Batch["English"]["Semester"] = "Sem";
	$fieldToolTipsMarking_Batch["English"]["Semester"] = "";
	$fieldLabelsMarking_Batch["English"]["Class"] = "Class";
	$fieldToolTipsMarking_Batch["English"]["Class"] = "";
	$fieldLabelsMarking_Batch["English"]["Intake_Category"] = "Program";
	$fieldToolTipsMarking_Batch["English"]["Intake_Category"] = "";
	$fieldLabelsMarking_Batch["English"]["e1"] = "E1";
	$fieldToolTipsMarking_Batch["English"]["e1"] = "";
	$fieldLabelsMarking_Batch["English"]["e2"] = "E2";
	$fieldToolTipsMarking_Batch["English"]["e2"] = "";
	$fieldLabelsMarking_Batch["English"]["e3"] = "E3";
	$fieldToolTipsMarking_Batch["English"]["e3"] = "";
	$fieldLabelsMarking_Batch["English"]["e4"] = "E4";
	$fieldToolTipsMarking_Batch["English"]["e4"] = "";
	$fieldLabelsMarking_Batch["English"]["cgpa"] = "CGPA";
	$fieldToolTipsMarking_Batch["English"]["cgpa"] = "";
	if (count($fieldToolTipsMarking_Batch["English"]))
		$tdataMarking_Batch[".isUseToolTips"] = true;
}
	
	



$tdataMarking_Batch[".shortTableName"] = "Marking_Batch";
$tdataMarking_Batch[".nSecOptions"] = 0;
$tdataMarking_Batch[".recsPerRowList"] = 1;
$tdataMarking_Batch[".mainTableOwnerID"] = "";
$tdataMarking_Batch[".moveNext"] = 1;
$tdataMarking_Batch[".nType"] = 1;

$tdataMarking_Batch[".strOriginalTableName"] = "student_course";




$tdataMarking_Batch[".showAddInPopup"] = false;

$tdataMarking_Batch[".showEditInPopup"] = false;

$tdataMarking_Batch[".showViewInPopup"] = false;

$tdataMarking_Batch[".fieldsForRegister"] = array();
	
$tdataMarking_Batch[".listAjax"] = false;

	$tdataMarking_Batch[".audit"] = true;

	$tdataMarking_Batch[".locking"] = false;

$tdataMarking_Batch[".listIcons"] = true;
$tdataMarking_Batch[".inlineEdit"] = true;

$tdataMarking_Batch[".exportTo"] = true;



$tdataMarking_Batch[".showSimpleSearchOptions"] = true;

$tdataMarking_Batch[".showSearchPanel"] = true;

if (isMobile())
	$tdataMarking_Batch[".isUseAjaxSuggest"] = false;
else 
	$tdataMarking_Batch[".isUseAjaxSuggest"] = true;

$tdataMarking_Batch[".rowHighlite"] = true;

// button handlers file names

$tdataMarking_Batch[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMarking_Batch[".isUseTimeForSearch"] = false;




$tdataMarking_Batch[".allSearchFields"] = array();

$tdataMarking_Batch[".allSearchFields"][] = "CourseID";
$tdataMarking_Batch[".allSearchFields"][] = "e1";
$tdataMarking_Batch[".allSearchFields"][] = "e2";
$tdataMarking_Batch[".allSearchFields"][] = "e3";
$tdataMarking_Batch[".allSearchFields"][] = "e4";

$tdataMarking_Batch[".googleLikeFields"][] = "Semester";
$tdataMarking_Batch[".googleLikeFields"][] = "MatricNo";
$tdataMarking_Batch[".googleLikeFields"][] = "BatchID";
$tdataMarking_Batch[".googleLikeFields"][] = "DipID";
$tdataMarking_Batch[".googleLikeFields"][] = "Class";
$tdataMarking_Batch[".googleLikeFields"][] = "Intake_Category";
$tdataMarking_Batch[".googleLikeFields"][] = "e1";
$tdataMarking_Batch[".googleLikeFields"][] = "e2";
$tdataMarking_Batch[".googleLikeFields"][] = "e3";
$tdataMarking_Batch[".googleLikeFields"][] = "e4";
$tdataMarking_Batch[".googleLikeFields"][] = "cgpa";

$tdataMarking_Batch[".panelSearchFields"][] = "CourseID";
$tdataMarking_Batch[".panelSearchFields"][] = "StudentID";
$tdataMarking_Batch[".panelSearchFields"][] = "MatricNo";
$tdataMarking_Batch[".panelSearchFields"][] = "BatchID";
$tdataMarking_Batch[".panelSearchFields"][] = "Semester";
$tdataMarking_Batch[".panelSearchFields"][] = "Class";
$tdataMarking_Batch[".panelSearchFields"][] = "DipID";
$tdataMarking_Batch[".panelSearchFields"][] = "Intake_Category";

$tdataMarking_Batch[".advSearchFields"][] = "CourseID";
$tdataMarking_Batch[".advSearchFields"][] = "e1";
$tdataMarking_Batch[".advSearchFields"][] = "e2";
$tdataMarking_Batch[".advSearchFields"][] = "e3";
$tdataMarking_Batch[".advSearchFields"][] = "e4";

$tdataMarking_Batch[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataMarking_Batch[".pageSize"] = 40;

$tstrOrderBy = "ORDER BY student_course.StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMarking_Batch[".strOrderBy"] = $tstrOrderBy;

$tdataMarking_Batch[".orderindexes"] = array();
$tdataMarking_Batch[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "student_course.StudentID");

$tdataMarking_Batch[".sqlHead"] = "SELECT student_course.ID,  student_course.StudentID,  student_course.CourseID,  student_course.Semester,  student_info.MatricNo,  student_info.BatchID,  student_info.DipID,  student_info.`Class`,  student_info.Intake_Category,  student_course.e1,  student_course.e2,  student_course.e3,  student_course.e4,  student_course.e1 AS cgpa";
$tdataMarking_Batch[".sqlFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID";
$tdataMarking_Batch[".sqlWhereExpr"] = "";
$tdataMarking_Batch[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMarking_Batch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMarking_Batch[".arrGroupsPerPage"] = $arrGPP;

$tableKeysMarking_Batch = array();
$tableKeysMarking_Batch[] = "ID";
$tdataMarking_Batch[".Keys"] = $tableKeysMarking_Batch;

$tdataMarking_Batch[".listFields"] = array();
$tdataMarking_Batch[".listFields"][] = "CourseID";
$tdataMarking_Batch[".listFields"][] = "e1";
$tdataMarking_Batch[".listFields"][] = "e2";
$tdataMarking_Batch[".listFields"][] = "e3";
$tdataMarking_Batch[".listFields"][] = "e4";
$tdataMarking_Batch[".listFields"][] = "cgpa";

$tdataMarking_Batch[".viewFields"] = array();

$tdataMarking_Batch[".addFields"] = array();

$tdataMarking_Batch[".inlineAddFields"] = array();

$tdataMarking_Batch[".editFields"] = array();

$tdataMarking_Batch[".inlineEditFields"] = array();
$tdataMarking_Batch[".inlineEditFields"][] = "e1";
$tdataMarking_Batch[".inlineEditFields"][] = "e2";
$tdataMarking_Batch[".inlineEditFields"][] = "e3";
$tdataMarking_Batch[".inlineEditFields"][] = "e4";

$tdataMarking_Batch[".exportFields"] = array();
$tdataMarking_Batch[".exportFields"][] = "e1";
$tdataMarking_Batch[".exportFields"][] = "e2";
$tdataMarking_Batch[".exportFields"][] = "e3";
$tdataMarking_Batch[".exportFields"][] = "e4";
$tdataMarking_Batch[".exportFields"][] = "cgpa";

$tdataMarking_Batch[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "student_course.ID";
	
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
	
		
		
	$tdataMarking_Batch["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
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
	
		
		
	$tdataMarking_Batch["StudentID"] = $fdata;
//	CourseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CourseID";
	$fdata["GoodName"] = "CourseID";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Module"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
		
		
		
		$edata["inputStyle"] = " width:100px;";
	$edata["controlWidth"] = 100;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMarking_Batch["CourseID"] = $fdata;
//	Semester
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
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
	
		
		
		
		
		
		$edata["inputStyle"] = " width:40px;";
	$edata["controlWidth"] = 40;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMarking_Batch["Semester"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "MatricNo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "MatricNo";
	
		
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
	
		
		
	$tdataMarking_Batch["MatricNo"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
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
	
		
		
	$tdataMarking_Batch["BatchID"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "student_info.DipID";
	
		
		
				
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
	
		
		
	$tdataMarking_Batch["DipID"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
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
	
		
		
	$tdataMarking_Batch["Class"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
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
	
		
		
	$tdataMarking_Batch["Intake_Category"] = $fdata;
//	e1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "e1";
	$fdata["GoodName"] = "e1";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "E1"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMarking_Batch["e1"] = $fdata;
//	e2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "e2";
	$fdata["GoodName"] = "e2";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "E2"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMarking_Batch["e2"] = $fdata;
//	e3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "e3";
	$fdata["GoodName"] = "e3";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "E3"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMarking_Batch["e3"] = $fdata;
//	e4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "e4";
	$fdata["GoodName"] = "e4";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "E4"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMarking_Batch["e4"] = $fdata;
//	cgpa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cgpa";
	$fdata["GoodName"] = "cgpa";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "CGPA"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "e1"; 
		$fdata["FullName"] = "student_course.e1";
	
		
		
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
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMarking_Batch["cgpa"] = $fdata;

	
$tables_data["Marking_Batch"]=&$tdataMarking_Batch;
$field_labels["Marking_Batch"] = &$fieldLabelsMarking_Batch;
$fieldToolTips["Marking_Batch"] = &$fieldToolTipsMarking_Batch;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Marking_Batch"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Marking_Batch"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="Marking_Student_list";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Marking_Student_list";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["Marking_Batch"][$mIndex] = $masterParams;	
		$masterTablesData["Marking_Batch"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["Marking_Batch"][$mIndex]["detailKeys"][]="StudentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Marking_Batch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_course.ID,  student_course.StudentID,  student_course.CourseID,  student_course.Semester,  student_info.MatricNo,  student_info.BatchID,  student_info.DipID,  student_info.`Class`,  student_info.Intake_Category,  student_course.e1,  student_course.e2,  student_course.e3,  student_course.e4,  student_course.e1 AS cgpa";
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
	"m_strName" => "ID",
	"m_strTable" => "student_course"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "CourseID",
	"m_strTable" => "student_course"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Semester",
	"m_strTable" => "student_course"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "e1",
	"m_strTable" => "student_course"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "e2",
	"m_strTable" => "student_course"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "e3",
	"m_strTable" => "student_course"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "e4",
	"m_strTable" => "student_course"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "e1",
	"m_strTable" => "student_course"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "cgpa";
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
$queryData_Marking_Batch = createSqlQuery_Marking_Batch();
														$tdataMarking_Batch[".sqlquery"] = $queryData_Marking_Batch;

include_once(getabspath("include/Marking_Batch_events.php"));
$tableEvents["Marking_Batch"] = new eventclass_Marking_Batch;
$tdataMarking_Batch[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Marking_Batch");

?>