<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_course_moe = array();
	$tdatastudent_course_moe[".NumberOfChars"] = 80; 
	$tdatastudent_course_moe[".ShortName"] = "student_course_moe";
	$tdatastudent_course_moe[".OwnerID"] = "";
	$tdatastudent_course_moe[".OriginalTable"] = "student_course_moe";

//	field labels
$fieldLabelsstudent_course_moe = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_course_moe["English"] = array();
	$fieldToolTipsstudent_course_moe["English"] = array();
	$fieldLabelsstudent_course_moe["English"]["ID"] = "ID";
	$fieldToolTipsstudent_course_moe["English"]["ID"] = "";
	$fieldLabelsstudent_course_moe["English"]["StudentID"] = "Student ";
	$fieldToolTipsstudent_course_moe["English"]["StudentID"] = "";
	$fieldLabelsstudent_course_moe["English"]["CourseID"] = "Subject";
	$fieldToolTipsstudent_course_moe["English"]["CourseID"] = "";
	$fieldLabelsstudent_course_moe["English"]["sem"] = "Sem";
	$fieldToolTipsstudent_course_moe["English"]["sem"] = "";
	$fieldLabelsstudent_course_moe["English"]["Exam_Status"] = "Status";
	$fieldToolTipsstudent_course_moe["English"]["Exam_Status"] = "";
	$fieldLabelsstudent_course_moe["English"]["Exam_Remark"] = "Remark";
	$fieldToolTipsstudent_course_moe["English"]["Exam_Remark"] = "";
	$fieldLabelsstudent_course_moe["English"]["Final_Exam"] = "Result";
	$fieldToolTipsstudent_course_moe["English"]["Final_Exam"] = "";
	if (count($fieldToolTipsstudent_course_moe["English"]))
		$tdatastudent_course_moe[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_course_moe[".NCSearch"] = true;



$tdatastudent_course_moe[".shortTableName"] = "student_course_moe";
$tdatastudent_course_moe[".nSecOptions"] = 0;
$tdatastudent_course_moe[".recsPerRowList"] = 1;
$tdatastudent_course_moe[".mainTableOwnerID"] = "";
$tdatastudent_course_moe[".moveNext"] = 1;
$tdatastudent_course_moe[".nType"] = 0;

$tdatastudent_course_moe[".strOriginalTableName"] = "student_course_moe";




$tdatastudent_course_moe[".showAddInPopup"] = false;

$tdatastudent_course_moe[".showEditInPopup"] = false;

$tdatastudent_course_moe[".showViewInPopup"] = false;

$tdatastudent_course_moe[".fieldsForRegister"] = array();
	
$tdatastudent_course_moe[".listAjax"] = false;

	$tdatastudent_course_moe[".audit"] = true;

	$tdatastudent_course_moe[".locking"] = false;

$tdatastudent_course_moe[".listIcons"] = true;
$tdatastudent_course_moe[".inlineEdit"] = true;
$tdatastudent_course_moe[".inlineAdd"] = true;



$tdatastudent_course_moe[".delete"] = true;

$tdatastudent_course_moe[".showSimpleSearchOptions"] = true;

$tdatastudent_course_moe[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_course_moe[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_course_moe[".isUseAjaxSuggest"] = true;

$tdatastudent_course_moe[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_course_moe[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_course_moe[".isUseTimeForSearch"] = false;




$tdatastudent_course_moe[".allSearchFields"] = array();

$tdatastudent_course_moe[".allSearchFields"][] = "StudentID";
$tdatastudent_course_moe[".allSearchFields"][] = "CourseID";
$tdatastudent_course_moe[".allSearchFields"][] = "sem";
$tdatastudent_course_moe[".allSearchFields"][] = "Exam_Status";
$tdatastudent_course_moe[".allSearchFields"][] = "Final_Exam";

$tdatastudent_course_moe[".googleLikeFields"][] = "ID";
$tdatastudent_course_moe[".googleLikeFields"][] = "StudentID";
$tdatastudent_course_moe[".googleLikeFields"][] = "CourseID";
$tdatastudent_course_moe[".googleLikeFields"][] = "sem";
$tdatastudent_course_moe[".googleLikeFields"][] = "Exam_Status";
$tdatastudent_course_moe[".googleLikeFields"][] = "Exam_Remark";
$tdatastudent_course_moe[".googleLikeFields"][] = "Final_Exam";


$tdatastudent_course_moe[".advSearchFields"][] = "StudentID";
$tdatastudent_course_moe[".advSearchFields"][] = "CourseID";
$tdatastudent_course_moe[".advSearchFields"][] = "sem";
$tdatastudent_course_moe[".advSearchFields"][] = "Exam_Status";
$tdatastudent_course_moe[".advSearchFields"][] = "Final_Exam";

$tdatastudent_course_moe[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_course_moe[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_course_moe[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_course_moe[".orderindexes"] = array();

$tdatastudent_course_moe[".sqlHead"] = "SELECT ID,  StudentID,  CourseID,  sem,  Exam_Status,  Exam_Remark,  Final_Exam";
$tdatastudent_course_moe[".sqlFrom"] = "FROM student_course_moe";
$tdatastudent_course_moe[".sqlWhereExpr"] = "";
$tdatastudent_course_moe[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_course_moe[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_course_moe[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_course_moe = array();
$tableKeysstudent_course_moe[] = "ID";
$tdatastudent_course_moe[".Keys"] = $tableKeysstudent_course_moe;

$tdatastudent_course_moe[".listFields"] = array();
$tdatastudent_course_moe[".listFields"][] = "StudentID";
$tdatastudent_course_moe[".listFields"][] = "CourseID";
$tdatastudent_course_moe[".listFields"][] = "sem";
$tdatastudent_course_moe[".listFields"][] = "Final_Exam";
$tdatastudent_course_moe[".listFields"][] = "Exam_Remark";
$tdatastudent_course_moe[".listFields"][] = "Exam_Status";

$tdatastudent_course_moe[".viewFields"] = array();

$tdatastudent_course_moe[".addFields"] = array();

$tdatastudent_course_moe[".inlineAddFields"] = array();
$tdatastudent_course_moe[".inlineAddFields"][] = "StudentID";
$tdatastudent_course_moe[".inlineAddFields"][] = "CourseID";
$tdatastudent_course_moe[".inlineAddFields"][] = "sem";
$tdatastudent_course_moe[".inlineAddFields"][] = "Final_Exam";

$tdatastudent_course_moe[".editFields"] = array();

$tdatastudent_course_moe[".inlineEditFields"] = array();
$tdatastudent_course_moe[".inlineEditFields"][] = "StudentID";
$tdatastudent_course_moe[".inlineEditFields"][] = "CourseID";
$tdatastudent_course_moe[".inlineEditFields"][] = "sem";
$tdatastudent_course_moe[".inlineEditFields"][] = "Final_Exam";
$tdatastudent_course_moe[".inlineEditFields"][] = "Exam_Remark";

$tdatastudent_course_moe[".exportFields"] = array();

$tdatastudent_course_moe[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_course_moe";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
		
		
				
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
	
		
		
	$tdatastudent_course_moe["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_course_moe";
	$fdata["Label"] = "Student "; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
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
				if(strpos(GetUserPermissions("student_course_moe"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
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
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course_moe["StudentID"] = $fdata;
//	CourseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CourseID";
	$fdata["GoodName"] = "CourseID";
	$fdata["ownerTable"] = "student_course_moe";
	$fdata["Label"] = "Subject"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "CourseID"; 
		$fdata["FullName"] = "CourseID";
	
		
		
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
				if(strpos(GetUserPermissions("student_course_moe"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "CourseID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Shortname";
	
		
	$edata["LookupTable"] = "course_moe";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
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
	
		
		
	$tdatastudent_course_moe["CourseID"] = $fdata;
//	sem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sem";
	$fdata["GoodName"] = "sem";
	$fdata["ownerTable"] = "student_course_moe";
	$fdata["Label"] = "Sem"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sem"; 
		$fdata["FullName"] = "sem";
	
		
		
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
	
		
		
	$tdatastudent_course_moe["sem"] = $fdata;
//	Exam_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Exam_Status";
	$fdata["GoodName"] = "Exam_Status";
	$fdata["ownerTable"] = "student_course_moe";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Exam_Status"; 
		$fdata["FullName"] = "Exam_Status";
	
		
		
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
	
		$edata["inputStyle"] = " width:60px;";
	$edata["controlWidth"] = 60;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course_moe["Exam_Status"] = $fdata;
//	Exam_Remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Exam_Remark";
	$fdata["GoodName"] = "Exam_Remark";
	$fdata["ownerTable"] = "student_course_moe";
	$fdata["Label"] = "Remark"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Exam_Remark"; 
		$fdata["FullName"] = "Exam_Remark";
	
		
		
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
	
		$edata["inputStyle"] = " width:60px;";
	$edata["controlWidth"] = 60;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course_moe["Exam_Remark"] = $fdata;
//	Final_Exam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Final_Exam";
	$fdata["GoodName"] = "Final_Exam";
	$fdata["ownerTable"] = "student_course_moe";
	$fdata["Label"] = "Result"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Final_Exam"; 
		$fdata["FullName"] = "Final_Exam";
	
		
		
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
	$edata["LookupValues"][] = "A";
	$edata["LookupValues"][] = "A-";
	$edata["LookupValues"][] = "B+";
	$edata["LookupValues"][] = "B";
	$edata["LookupValues"][] = "B-";
	$edata["LookupValues"][] = "C+";
	$edata["LookupValues"][] = "C";
	$edata["LookupValues"][] = "D+";
	$edata["LookupValues"][] = "D";
	$edata["LookupValues"][] = "D-";
	$edata["LookupValues"][] = "E";
	$edata["LookupValues"][] = "T";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_course_moe["Final_Exam"] = $fdata;

	
$tables_data["student_course_moe"]=&$tdatastudent_course_moe;
$field_labels["student_course_moe"] = &$fieldLabelsstudent_course_moe;
$fieldToolTips["student_course_moe"] = &$fieldToolTipsstudent_course_moe;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_course_moe"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_course_moe"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_course_moe()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  StudentID,  CourseID,  sem,  Exam_Status,  Exam_Remark,  Final_Exam";
$proto0["m_strFrom"] = "FROM student_course_moe";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_strTable" => "student_course_moe"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course_moe"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "CourseID",
	"m_strTable" => "student_course_moe"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "sem",
	"m_strTable" => "student_course_moe"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Exam_Status",
	"m_strTable" => "student_course_moe"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Exam_Remark",
	"m_strTable" => "student_course_moe"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Final_Exam",
	"m_strTable" => "student_course_moe"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "student_course_moe";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "StudentID";
$proto20["m_columns"][] = "CourseID";
$proto20["m_columns"][] = "sem";
$proto20["m_columns"][] = "Final_Exam";
$proto20["m_columns"][] = "Exam_Status";
$proto20["m_columns"][] = "Exam_Remark";
$proto20["m_columns"][] = "ProgramID";
$proto20["m_columns"][] = "Seat";
$proto20["m_columns"][] = "Attendance";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_course_moe = createSqlQuery_student_course_moe();
							$tdatastudent_course_moe[".sqlquery"] = $queryData_student_course_moe;

include_once(getabspath("include/student_course_moe_events.php"));
$tableEvents["student_course_moe"] = new eventclass_student_course_moe;
$tdatastudent_course_moe[".hasEvents"] = true;

$cipherer = new RunnerCipherer("student_course_moe");

?>