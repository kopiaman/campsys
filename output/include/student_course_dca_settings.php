<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_course_dca = array();
	$tdatastudent_course_dca[".NumberOfChars"] = 80; 
	$tdatastudent_course_dca[".ShortName"] = "student_course_dca";
	$tdatastudent_course_dca[".OwnerID"] = "";
	$tdatastudent_course_dca[".OriginalTable"] = "student_course_dca";

//	field labels
$fieldLabelsstudent_course_dca = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_course_dca["English"] = array();
	$fieldToolTipsstudent_course_dca["English"] = array();
	$fieldLabelsstudent_course_dca["English"]["ID"] = "ID";
	$fieldToolTipsstudent_course_dca["English"]["ID"] = "";
	$fieldLabelsstudent_course_dca["English"]["StudentID"] = "Student";
	$fieldToolTipsstudent_course_dca["English"]["StudentID"] = "";
	$fieldLabelsstudent_course_dca["English"]["CourseID"] = "Module";
	$fieldToolTipsstudent_course_dca["English"]["CourseID"] = "";
	$fieldLabelsstudent_course_dca["English"]["Exam_Status"] = "Result";
	$fieldToolTipsstudent_course_dca["English"]["Exam_Status"] = "";
	$fieldLabelsstudent_course_dca["English"]["Exam_Remark"] = "Remark";
	$fieldToolTipsstudent_course_dca["English"]["Exam_Remark"] = "";
	$fieldLabelsstudent_course_dca["English"]["Exam_Date"] = "Date";
	$fieldToolTipsstudent_course_dca["English"]["Exam_Date"] = "";
	$fieldLabelsstudent_course_dca["English"]["ProgramID"] = "Course";
	$fieldToolTipsstudent_course_dca["English"]["ProgramID"] = "";
	$fieldLabelsstudent_course_dca["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsstudent_course_dca["English"]["MatricNo"] = "";
	$fieldLabelsstudent_course_dca["English"]["BatchID"] = "Batch";
	$fieldToolTipsstudent_course_dca["English"]["BatchID"] = "";
	$fieldLabelsstudent_course_dca["English"]["Intake_Category"] = "Program";
	$fieldToolTipsstudent_course_dca["English"]["Intake_Category"] = "";
	$fieldLabelsstudent_course_dca["English"]["Class"] = "Class";
	$fieldToolTipsstudent_course_dca["English"]["Class"] = "";
	if (count($fieldToolTipsstudent_course_dca["English"]))
		$tdatastudent_course_dca[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_course_dca[".NCSearch"] = true;



$tdatastudent_course_dca[".shortTableName"] = "student_course_dca";
$tdatastudent_course_dca[".nSecOptions"] = 0;
$tdatastudent_course_dca[".recsPerRowList"] = 1;
$tdatastudent_course_dca[".mainTableOwnerID"] = "";
$tdatastudent_course_dca[".moveNext"] = 1;
$tdatastudent_course_dca[".nType"] = 0;

$tdatastudent_course_dca[".strOriginalTableName"] = "student_course_dca";




$tdatastudent_course_dca[".showAddInPopup"] = false;

$tdatastudent_course_dca[".showEditInPopup"] = false;

$tdatastudent_course_dca[".showViewInPopup"] = false;

$tdatastudent_course_dca[".fieldsForRegister"] = array();
	
$tdatastudent_course_dca[".listAjax"] = false;

	$tdatastudent_course_dca[".audit"] = true;

	$tdatastudent_course_dca[".locking"] = false;

$tdatastudent_course_dca[".listIcons"] = true;
$tdatastudent_course_dca[".inlineEdit"] = true;
$tdatastudent_course_dca[".inlineAdd"] = true;

$tdatastudent_course_dca[".exportTo"] = true;


$tdatastudent_course_dca[".delete"] = true;

$tdatastudent_course_dca[".showSimpleSearchOptions"] = true;

$tdatastudent_course_dca[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_course_dca[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_course_dca[".isUseAjaxSuggest"] = true;

$tdatastudent_course_dca[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_course_dca[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_course_dca[".isUseTimeForSearch"] = false;




$tdatastudent_course_dca[".allSearchFields"] = array();

$tdatastudent_course_dca[".allSearchFields"][] = "ProgramID";
$tdatastudent_course_dca[".allSearchFields"][] = "CourseID";
$tdatastudent_course_dca[".allSearchFields"][] = "Exam_Status";
$tdatastudent_course_dca[".allSearchFields"][] = "Exam_Remark";
$tdatastudent_course_dca[".allSearchFields"][] = "Exam_Date";

$tdatastudent_course_dca[".googleLikeFields"][] = "StudentID";

$tdatastudent_course_dca[".panelSearchFields"][] = "StudentID";
$tdatastudent_course_dca[".panelSearchFields"][] = "MatricNo";
$tdatastudent_course_dca[".panelSearchFields"][] = "Intake_Category";
$tdatastudent_course_dca[".panelSearchFields"][] = "ProgramID";
$tdatastudent_course_dca[".panelSearchFields"][] = "BatchID";
$tdatastudent_course_dca[".panelSearchFields"][] = "Class";
$tdatastudent_course_dca[".panelSearchFields"][] = "CourseID";
$tdatastudent_course_dca[".panelSearchFields"][] = "Exam_Status";
$tdatastudent_course_dca[".panelSearchFields"][] = "Exam_Date";

$tdatastudent_course_dca[".advSearchFields"][] = "ProgramID";
$tdatastudent_course_dca[".advSearchFields"][] = "CourseID";
$tdatastudent_course_dca[".advSearchFields"][] = "Exam_Status";
$tdatastudent_course_dca[".advSearchFields"][] = "Exam_Remark";
$tdatastudent_course_dca[".advSearchFields"][] = "Exam_Date";

$tdatastudent_course_dca[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_course_dca[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_course_dca.StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_course_dca[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_course_dca[".orderindexes"] = array();
$tdatastudent_course_dca[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "student_course_dca.StudentID");

$tdatastudent_course_dca[".sqlHead"] = "SELECT student_course_dca.ID,  student_course_dca.StudentID,  student_course_dca.CourseID,  student_course_dca.Exam_Status,  student_course_dca.Exam_Remark,  student_course_dca.Exam_Date,  student_course_dca.ProgramID,  student_info.MatricNo,  student_info.BatchID,  student_info.Intake_Category,  student_info.`Class`";
$tdatastudent_course_dca[".sqlFrom"] = "FROM student_course_dca  INNER JOIN student_info ON student_course_dca.StudentID = student_info.StudentID";
$tdatastudent_course_dca[".sqlWhereExpr"] = "";
$tdatastudent_course_dca[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_course_dca[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_course_dca[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_course_dca = array();
$tableKeysstudent_course_dca[] = "ID";
$tdatastudent_course_dca[".Keys"] = $tableKeysstudent_course_dca;

$tdatastudent_course_dca[".listFields"] = array();
$tdatastudent_course_dca[".listFields"][] = "CourseID";
$tdatastudent_course_dca[".listFields"][] = "Exam_Status";
$tdatastudent_course_dca[".listFields"][] = "Exam_Remark";
$tdatastudent_course_dca[".listFields"][] = "Exam_Date";

$tdatastudent_course_dca[".viewFields"] = array();

$tdatastudent_course_dca[".addFields"] = array();

$tdatastudent_course_dca[".inlineAddFields"] = array();
$tdatastudent_course_dca[".inlineAddFields"][] = "CourseID";
$tdatastudent_course_dca[".inlineAddFields"][] = "Exam_Status";
$tdatastudent_course_dca[".inlineAddFields"][] = "Exam_Remark";
$tdatastudent_course_dca[".inlineAddFields"][] = "Exam_Date";

$tdatastudent_course_dca[".editFields"] = array();

$tdatastudent_course_dca[".inlineEditFields"] = array();
$tdatastudent_course_dca[".inlineEditFields"][] = "Exam_Status";
$tdatastudent_course_dca[".inlineEditFields"][] = "Exam_Remark";
$tdatastudent_course_dca[".inlineEditFields"][] = "Exam_Date";

$tdatastudent_course_dca[".exportFields"] = array();
$tdatastudent_course_dca[".exportFields"][] = "ProgramID";
$tdatastudent_course_dca[".exportFields"][] = "CourseID";
$tdatastudent_course_dca[".exportFields"][] = "Exam_Status";
$tdatastudent_course_dca[".exportFields"][] = "Exam_Remark";
$tdatastudent_course_dca[".exportFields"][] = "Exam_Date";

$tdatastudent_course_dca[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_course_dca";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "student_course_dca.ID";
	
		
		
				
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
	
		
		
	$tdatastudent_course_dca["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_course_dca";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_course_dca.StudentID";
	
		
		
				
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
	
		
		
	$tdatastudent_course_dca["StudentID"] = $fdata;
//	CourseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CourseID";
	$fdata["GoodName"] = "CourseID";
	$fdata["ownerTable"] = "student_course_dca";
	$fdata["Label"] = "Module"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CourseID"; 
		$fdata["FullName"] = "student_course_dca.CourseID";
	
		
		
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
	
		
		
		
		
		
		$edata["inputStyle"] = " width:120px;";
	$edata["controlWidth"] = 120;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course_dca["CourseID"] = $fdata;
//	Exam_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Exam_Status";
	$fdata["GoodName"] = "Exam_Status";
	$fdata["ownerTable"] = "student_course_dca";
	$fdata["Label"] = "Result"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Exam_Status"; 
		$fdata["FullName"] = "student_course_dca.Exam_Status";
	
		
		
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
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Pass";
	$edata["LookupValues"][] = "Fail";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course_dca["Exam_Status"] = $fdata;
//	Exam_Remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Exam_Remark";
	$fdata["GoodName"] = "Exam_Remark";
	$fdata["ownerTable"] = "student_course_dca";
	$fdata["Label"] = "Remark"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Exam_Remark"; 
		$fdata["FullName"] = "student_course_dca.Exam_Remark";
	
		
		
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
	
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course_dca["Exam_Remark"] = $fdata;
//	Exam_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Exam_Date";
	$fdata["GoodName"] = "Exam_Date";
	$fdata["ownerTable"] = "student_course_dca";
	$fdata["Label"] = "Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Exam_Date"; 
		$fdata["FullName"] = "student_course_dca.Exam_Date";
	
		
		
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
	
		
		
		$edata["inputStyle"] = " width:100px;";
	$edata["controlWidth"] = 100;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course_dca["Exam_Date"] = $fdata;
//	ProgramID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ProgramID";
	$fdata["GoodName"] = "ProgramID";
	$fdata["ownerTable"] = "student_course_dca";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProgramID"; 
		$fdata["FullName"] = "student_course_dca.ProgramID";
	
		
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course_dca["ProgramID"] = $fdata;
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
	
		
		
	$tdatastudent_course_dca["MatricNo"] = $fdata;
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
	
		
		
	$tdatastudent_course_dca["BatchID"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
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
	
		
		
	$tdatastudent_course_dca["Intake_Category"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
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

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course_dca["Class"] = $fdata;

	
$tables_data["student_course_dca"]=&$tdatastudent_course_dca;
$field_labels["student_course_dca"] = &$fieldLabelsstudent_course_dca;
$fieldToolTips["student_course_dca"] = &$fieldToolTipsstudent_course_dca;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_course_dca"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_course_dca"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="student_course_DCA_List_student2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "student_course_DCA_List_student2";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["student_course_dca"][$mIndex] = $masterParams;	
		$masterTablesData["student_course_dca"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["student_course_dca"][$mIndex]["detailKeys"][]="StudentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_course_dca()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_course_dca.ID,  student_course_dca.StudentID,  student_course_dca.CourseID,  student_course_dca.Exam_Status,  student_course_dca.Exam_Remark,  student_course_dca.Exam_Date,  student_course_dca.ProgramID,  student_info.MatricNo,  student_info.BatchID,  student_info.Intake_Category,  student_info.`Class`";
$proto0["m_strFrom"] = "FROM student_course_dca  INNER JOIN student_info ON student_course_dca.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY student_course_dca.StudentID DESC";
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
	"m_strTable" => "student_course_dca"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course_dca"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "CourseID",
	"m_strTable" => "student_course_dca"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Exam_Status",
	"m_strTable" => "student_course_dca"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Exam_Remark",
	"m_strTable" => "student_course_dca"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Exam_Date",
	"m_strTable" => "student_course_dca"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "ProgramID",
	"m_strTable" => "student_course_dca"
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
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
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
$proto28["m_strName"] = "student_course_dca";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "ID";
$proto28["m_columns"][] = "StudentID";
$proto28["m_columns"][] = "CourseID";
$proto28["m_columns"][] = "Semester";
$proto28["m_columns"][] = "Exam_Status";
$proto28["m_columns"][] = "Exam_Date";
$proto28["m_columns"][] = "Exam_Remark";
$proto28["m_columns"][] = "ProgramID";
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
$proto33["m_sql"] = "student_course_dca.StudentID = student_info.StudentID";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course_dca"
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course_dca"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 0;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_course_dca = createSqlQuery_student_course_dca();
											$tdatastudent_course_dca[".sqlquery"] = $queryData_student_course_dca;

$tableEvents["student_course_dca"] = new eventsBase;
$tdatastudent_course_dca[".hasEvents"] = false;

$cipherer = new RunnerCipherer("student_course_dca");

?>