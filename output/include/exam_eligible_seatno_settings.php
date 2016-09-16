<?php
require_once(getabspath("classes/cipherer.php"));
$tdataexam_eligible_seatno = array();
	$tdataexam_eligible_seatno[".NumberOfChars"] = 80; 
	$tdataexam_eligible_seatno[".ShortName"] = "exam_eligible_seatno";
	$tdataexam_eligible_seatno[".OwnerID"] = "";
	$tdataexam_eligible_seatno[".OriginalTable"] = "student_course";

//	field labels
$fieldLabelsexam_eligible_seatno = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsexam_eligible_seatno["English"] = array();
	$fieldToolTipsexam_eligible_seatno["English"] = array();
	$fieldLabelsexam_eligible_seatno["English"]["ID"] = "ID";
	$fieldToolTipsexam_eligible_seatno["English"]["ID"] = "";
	$fieldLabelsexam_eligible_seatno["English"]["StudentID"] = "Student";
	$fieldToolTipsexam_eligible_seatno["English"]["StudentID"] = "";
	$fieldLabelsexam_eligible_seatno["English"]["CourseID"] = "Module";
	$fieldToolTipsexam_eligible_seatno["English"]["CourseID"] = "";
	$fieldLabelsexam_eligible_seatno["English"]["Eligible"] = "Eligible";
	$fieldToolTipsexam_eligible_seatno["English"]["Eligible"] = "";
	$fieldLabelsexam_eligible_seatno["English"]["Seat"] = "Seat";
	$fieldToolTipsexam_eligible_seatno["English"]["Seat"] = "";
	$fieldLabelsexam_eligible_seatno["English"]["BatchID"] = "Batch";
	$fieldToolTipsexam_eligible_seatno["English"]["BatchID"] = "";
	$fieldLabelsexam_eligible_seatno["English"]["DipID"] = "Course";
	$fieldToolTipsexam_eligible_seatno["English"]["DipID"] = "";
	$fieldLabelsexam_eligible_seatno["English"]["Class"] = "Class";
	$fieldToolTipsexam_eligible_seatno["English"]["Class"] = "";
	$fieldLabelsexam_eligible_seatno["English"]["Exam_Remark"] = "Exam Remark";
	$fieldToolTipsexam_eligible_seatno["English"]["Exam_Remark"] = "";
	$fieldLabelsexam_eligible_seatno["English"]["Semester"] = "Sem";
	$fieldToolTipsexam_eligible_seatno["English"]["Semester"] = "";
	$fieldLabelsexam_eligible_seatno["English"]["Intake_Category"] = "Program";
	$fieldToolTipsexam_eligible_seatno["English"]["Intake_Category"] = "";
	if (count($fieldToolTipsexam_eligible_seatno["English"]))
		$tdataexam_eligible_seatno[".isUseToolTips"] = true;
}
	
	



$tdataexam_eligible_seatno[".shortTableName"] = "exam_eligible_seatno";
$tdataexam_eligible_seatno[".nSecOptions"] = 0;
$tdataexam_eligible_seatno[".recsPerRowList"] = 1;
$tdataexam_eligible_seatno[".mainTableOwnerID"] = "";
$tdataexam_eligible_seatno[".moveNext"] = 1;
$tdataexam_eligible_seatno[".nType"] = 1;

$tdataexam_eligible_seatno[".strOriginalTableName"] = "student_course";




$tdataexam_eligible_seatno[".showAddInPopup"] = false;

$tdataexam_eligible_seatno[".showEditInPopup"] = false;

$tdataexam_eligible_seatno[".showViewInPopup"] = false;

$tdataexam_eligible_seatno[".fieldsForRegister"] = array();
	
$tdataexam_eligible_seatno[".listAjax"] = false;

	$tdataexam_eligible_seatno[".audit"] = true;

	$tdataexam_eligible_seatno[".locking"] = false;

$tdataexam_eligible_seatno[".listIcons"] = true;
$tdataexam_eligible_seatno[".inlineEdit"] = true;




$tdataexam_eligible_seatno[".showSimpleSearchOptions"] = true;

$tdataexam_eligible_seatno[".showSearchPanel"] = true;

if (isMobile())
	$tdataexam_eligible_seatno[".isUseAjaxSuggest"] = false;
else 
	$tdataexam_eligible_seatno[".isUseAjaxSuggest"] = true;

$tdataexam_eligible_seatno[".rowHighlite"] = true;

// button handlers file names

$tdataexam_eligible_seatno[".addPageEvents"] = false;

// use timepicker for search panel
$tdataexam_eligible_seatno[".isUseTimeForSearch"] = false;




$tdataexam_eligible_seatno[".allSearchFields"] = array();

$tdataexam_eligible_seatno[".allSearchFields"][] = "StudentID";
$tdataexam_eligible_seatno[".allSearchFields"][] = "Intake_Category";
$tdataexam_eligible_seatno[".allSearchFields"][] = "DipID";
$tdataexam_eligible_seatno[".allSearchFields"][] = "BatchID";
$tdataexam_eligible_seatno[".allSearchFields"][] = "Class";
$tdataexam_eligible_seatno[".allSearchFields"][] = "CourseID";
$tdataexam_eligible_seatno[".allSearchFields"][] = "Semester";
$tdataexam_eligible_seatno[".allSearchFields"][] = "Exam_Remark";
$tdataexam_eligible_seatno[".allSearchFields"][] = "Seat";

$tdataexam_eligible_seatno[".googleLikeFields"][] = "StudentID";

$tdataexam_eligible_seatno[".panelSearchFields"][] = "StudentID";
$tdataexam_eligible_seatno[".panelSearchFields"][] = "Intake_Category";
$tdataexam_eligible_seatno[".panelSearchFields"][] = "DipID";
$tdataexam_eligible_seatno[".panelSearchFields"][] = "BatchID";
$tdataexam_eligible_seatno[".panelSearchFields"][] = "Class";
$tdataexam_eligible_seatno[".panelSearchFields"][] = "CourseID";
$tdataexam_eligible_seatno[".panelSearchFields"][] = "Semester";
$tdataexam_eligible_seatno[".panelSearchFields"][] = "Exam_Remark";
$tdataexam_eligible_seatno[".panelSearchFields"][] = "Seat";

$tdataexam_eligible_seatno[".advSearchFields"][] = "StudentID";
$tdataexam_eligible_seatno[".advSearchFields"][] = "Intake_Category";
$tdataexam_eligible_seatno[".advSearchFields"][] = "DipID";
$tdataexam_eligible_seatno[".advSearchFields"][] = "BatchID";
$tdataexam_eligible_seatno[".advSearchFields"][] = "Class";
$tdataexam_eligible_seatno[".advSearchFields"][] = "CourseID";
$tdataexam_eligible_seatno[".advSearchFields"][] = "Semester";
$tdataexam_eligible_seatno[".advSearchFields"][] = "Exam_Remark";
$tdataexam_eligible_seatno[".advSearchFields"][] = "Seat";

$tdataexam_eligible_seatno[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataexam_eligible_seatno[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_course.StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataexam_eligible_seatno[".strOrderBy"] = $tstrOrderBy;

$tdataexam_eligible_seatno[".orderindexes"] = array();
$tdataexam_eligible_seatno[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "student_course.StudentID");

$tdataexam_eligible_seatno[".sqlHead"] = "SELECT student_course.ID,  student_course.StudentID,  student_course.CourseID,  student_course.Eligible,  student_course.Seat,  student_info.BatchID,  student_info.DipID,  student_info.`Class`,  student_course.Exam_Remark,  student_course.Semester,  student_info.Intake_Category";
$tdataexam_eligible_seatno[".sqlFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID";
$tdataexam_eligible_seatno[".sqlWhereExpr"] = "(student_course.Eligible ='Yes')";
$tdataexam_eligible_seatno[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataexam_eligible_seatno[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataexam_eligible_seatno[".arrGroupsPerPage"] = $arrGPP;

$tableKeysexam_eligible_seatno = array();
$tableKeysexam_eligible_seatno[] = "ID";
$tdataexam_eligible_seatno[".Keys"] = $tableKeysexam_eligible_seatno;

$tdataexam_eligible_seatno[".listFields"] = array();
$tdataexam_eligible_seatno[".listFields"][] = "StudentID";
$tdataexam_eligible_seatno[".listFields"][] = "DipID";
$tdataexam_eligible_seatno[".listFields"][] = "BatchID";
$tdataexam_eligible_seatno[".listFields"][] = "Class";
$tdataexam_eligible_seatno[".listFields"][] = "CourseID";
$tdataexam_eligible_seatno[".listFields"][] = "Semester";
$tdataexam_eligible_seatno[".listFields"][] = "Exam_Remark";
$tdataexam_eligible_seatno[".listFields"][] = "Seat";

$tdataexam_eligible_seatno[".viewFields"] = array();

$tdataexam_eligible_seatno[".addFields"] = array();

$tdataexam_eligible_seatno[".inlineAddFields"] = array();

$tdataexam_eligible_seatno[".editFields"] = array();

$tdataexam_eligible_seatno[".inlineEditFields"] = array();
$tdataexam_eligible_seatno[".inlineEditFields"][] = "Seat";

$tdataexam_eligible_seatno[".exportFields"] = array();

$tdataexam_eligible_seatno[".printFields"] = array();

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
	
		
		
	$tdataexam_eligible_seatno["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_course.StudentID";
	
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_eligible_seatno["StudentID"] = $fdata;
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
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_eligible_seatno["CourseID"] = $fdata;
//	Eligible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
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
	
		
		$edata["AutoUpdate"] = true; 
	
	
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
	
		
		
	$tdataexam_eligible_seatno["Eligible"] = $fdata;
//	Seat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Seat";
	$fdata["GoodName"] = "Seat";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Seat"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Seat"; 
		$fdata["FullName"] = "student_course.Seat";
	
		
		
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
			
		$edata["inputStyle"] = " width:35px;";
	$edata["controlWidth"] = 35;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_eligible_seatno["Seat"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataexam_eligible_seatno["BatchID"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdataexam_eligible_seatno["DipID"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdataexam_eligible_seatno["Class"] = $fdata;
//	Exam_Remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Exam_Remark";
	$fdata["GoodName"] = "Exam_Remark";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Exam Remark"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Exam_Remark"; 
		$fdata["FullName"] = "student_course.Exam_Remark";
	
		
		
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
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=33";
	
		
		
		
				
	
	
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
	
		
		
	$tdataexam_eligible_seatno["Exam_Remark"] = $fdata;
//	Semester
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Semester";
	$fdata["GoodName"] = "Semester";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Sem"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Semester"; 
		$fdata["FullName"] = "student_course.Semester";
	
		
		
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
	
		
		
	$tdataexam_eligible_seatno["Semester"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
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
	
		
		
	$tdataexam_eligible_seatno["Intake_Category"] = $fdata;

	
$tables_data["exam_eligible_seatno"]=&$tdataexam_eligible_seatno;
$field_labels["exam_eligible_seatno"] = &$fieldLabelsexam_eligible_seatno;
$fieldToolTips["exam_eligible_seatno"] = &$fieldToolTipsexam_eligible_seatno;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["exam_eligible_seatno"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["exam_eligible_seatno"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_exam_eligible_seatno()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_course.ID,  student_course.StudentID,  student_course.CourseID,  student_course.Eligible,  student_course.Seat,  student_info.BatchID,  student_info.DipID,  student_info.`Class`,  student_course.Exam_Remark,  student_course.Semester,  student_info.Intake_Category";
$proto0["m_strFrom"] = "FROM student_course  INNER JOIN student_info ON student_course.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "(student_course.Eligible ='Yes')";
$proto0["m_strOrderBy"] = "ORDER BY student_course.StudentID DESC";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "student_course.Eligible ='Yes'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Eligible",
	"m_strTable" => "student_course"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "='Yes'";
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
	"m_strName" => "Eligible",
	"m_strTable" => "student_course"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Seat",
	"m_strTable" => "student_course"
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.Exam_Remark"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Semester",
	"m_strTable" => "student_course"
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 0;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_exam_eligible_seatno = createSqlQuery_exam_eligible_seatno();
											$tdataexam_eligible_seatno[".sqlquery"] = $queryData_exam_eligible_seatno;

include_once(getabspath("include/exam_eligible_seatno_events.php"));
$tableEvents["exam_eligible_seatno"] = new eventclass_exam_eligible_seatno;
$tdataexam_eligible_seatno[".hasEvents"] = true;

$cipherer = new RunnerCipherer("exam_eligible_seatno");

?>