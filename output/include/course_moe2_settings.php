<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacourse_moe2 = array();
	$tdatacourse_moe2[".NumberOfChars"] = 80; 
	$tdatacourse_moe2[".ShortName"] = "course_moe2";
	$tdatacourse_moe2[".OwnerID"] = "";
	$tdatacourse_moe2[".OriginalTable"] = "course_moe2";

//	field labels
$fieldLabelscourse_moe2 = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscourse_moe2["English"] = array();
	$fieldToolTipscourse_moe2["English"] = array();
	$fieldLabelscourse_moe2["English"]["eid"] = "Eid";
	$fieldToolTipscourse_moe2["English"]["eid"] = "";
	$fieldLabelscourse_moe2["English"]["StudentID"] = "Student";
	$fieldToolTipscourse_moe2["English"]["StudentID"] = "";
	$fieldLabelscourse_moe2["English"]["sem"] = "Sem";
	$fieldToolTipscourse_moe2["English"]["sem"] = "";
	$fieldLabelscourse_moe2["English"]["c1"] = "BM";
	$fieldToolTipscourse_moe2["English"]["c1"] = "";
	$fieldLabelscourse_moe2["English"]["c2"] = "ENG";
	$fieldToolTipscourse_moe2["English"]["c2"] = "";
	$fieldLabelscourse_moe2["English"]["c3"] = "MATH";
	$fieldToolTipscourse_moe2["English"]["c3"] = "";
	$fieldLabelscourse_moe2["English"]["c4"] = "SCIE";
	$fieldToolTipscourse_moe2["English"]["c4"] = "";
	$fieldLabelscourse_moe2["English"]["c5"] = "HIST";
	$fieldToolTipscourse_moe2["English"]["c5"] = "";
	$fieldLabelscourse_moe2["English"]["c6"] = "ISLAM";
	$fieldToolTipscourse_moe2["English"]["c6"] = "";
	$fieldLabelscourse_moe2["English"]["c7"] = "MORAL";
	$fieldToolTipscourse_moe2["English"]["c7"] = "";
	$fieldLabelscourse_moe2["English"]["c8"] = "G.AVIA";
	$fieldToolTipscourse_moe2["English"]["c8"] = "";
	$fieldLabelscourse_moe2["English"]["c9"] = "TOOLS";
	$fieldToolTipscourse_moe2["English"]["c9"] = "";
	$fieldLabelscourse_moe2["English"]["c10"] = "SAFE1";
	$fieldToolTipscourse_moe2["English"]["c10"] = "";
	$fieldLabelscourse_moe2["English"]["c11"] = "ELEC 1";
	$fieldToolTipscourse_moe2["English"]["c11"] = "";
	$fieldLabelscourse_moe2["English"]["c12"] = "COMP";
	$fieldToolTipscourse_moe2["English"]["c12"] = "";
	$fieldLabelscourse_moe2["English"]["BatchID"] = "Batch";
	$fieldToolTipscourse_moe2["English"]["BatchID"] = "";
	$fieldLabelscourse_moe2["English"]["MatricNo"] = "Matric No";
	$fieldToolTipscourse_moe2["English"]["MatricNo"] = "";
	$fieldLabelscourse_moe2["English"]["Name"] = "Name";
	$fieldToolTipscourse_moe2["English"]["Name"] = "";
	$fieldLabelscourse_moe2["English"]["cgpa"] = "CGPA";
	$fieldToolTipscourse_moe2["English"]["cgpa"] = "";
	if (count($fieldToolTipscourse_moe2["English"]))
		$tdatacourse_moe2[".isUseToolTips"] = true;
}
	
	
	$tdatacourse_moe2[".NCSearch"] = true;



$tdatacourse_moe2[".shortTableName"] = "course_moe2";
$tdatacourse_moe2[".nSecOptions"] = 0;
$tdatacourse_moe2[".recsPerRowList"] = 1;
$tdatacourse_moe2[".mainTableOwnerID"] = "";
$tdatacourse_moe2[".moveNext"] = 1;
$tdatacourse_moe2[".nType"] = 0;

$tdatacourse_moe2[".strOriginalTableName"] = "course_moe2";




$tdatacourse_moe2[".showAddInPopup"] = false;

$tdatacourse_moe2[".showEditInPopup"] = false;

$tdatacourse_moe2[".showViewInPopup"] = false;

$tdatacourse_moe2[".fieldsForRegister"] = array();
	
$tdatacourse_moe2[".listAjax"] = false;

	$tdatacourse_moe2[".audit"] = false;

	$tdatacourse_moe2[".locking"] = false;

$tdatacourse_moe2[".listIcons"] = true;
$tdatacourse_moe2[".inlineEdit"] = true;
$tdatacourse_moe2[".inlineAdd"] = true;



$tdatacourse_moe2[".delete"] = true;

$tdatacourse_moe2[".showSimpleSearchOptions"] = false;

$tdatacourse_moe2[".showSearchPanel"] = true;

if (isMobile())
	$tdatacourse_moe2[".isUseAjaxSuggest"] = false;
else 
	$tdatacourse_moe2[".isUseAjaxSuggest"] = true;

$tdatacourse_moe2[".rowHighlite"] = true;

// button handlers file names
$tdatacourse_moe2[".isUsebuttonHandlers"] = true;

$tdatacourse_moe2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacourse_moe2[".isUseTimeForSearch"] = false;




$tdatacourse_moe2[".allSearchFields"] = array();

$tdatacourse_moe2[".allSearchFields"][] = "StudentID";
$tdatacourse_moe2[".allSearchFields"][] = "BatchID";
$tdatacourse_moe2[".allSearchFields"][] = "MatricNo";
$tdatacourse_moe2[".allSearchFields"][] = "sem";

$tdatacourse_moe2[".googleLikeFields"][] = "cgpa";

$tdatacourse_moe2[".panelSearchFields"][] = "StudentID";
$tdatacourse_moe2[".panelSearchFields"][] = "BatchID";
$tdatacourse_moe2[".panelSearchFields"][] = "MatricNo";

$tdatacourse_moe2[".advSearchFields"][] = "StudentID";
$tdatacourse_moe2[".advSearchFields"][] = "BatchID";
$tdatacourse_moe2[".advSearchFields"][] = "MatricNo";
$tdatacourse_moe2[".advSearchFields"][] = "sem";

$tdatacourse_moe2[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacourse_moe2[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_info.BatchID DESC, student_info.Name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacourse_moe2[".strOrderBy"] = $tstrOrderBy;

$tdatacourse_moe2[".orderindexes"] = array();
$tdatacourse_moe2[".orderindexes"][] = array(17, (0 ? "ASC" : "DESC"), "student_info.BatchID");
$tdatacourse_moe2[".orderindexes"][] = array(19, (1 ? "ASC" : "DESC"), "student_info.Name");

$tdatacourse_moe2[".sqlHead"] = "SELECT course_moe2.eid,  course_moe2.StudentID,  course_moe2.sem,  course_moe2.c1,  course_moe2.c2,  course_moe2.c3,  course_moe2.c4,  course_moe2.c5,  course_moe2.c6,  course_moe2.c7,  course_moe2.c8,  course_moe2.c9,  course_moe2.c10,  course_moe2.c11,  course_moe2.c12,  course_moe2.c12 AS cgpa,  student_info.BatchID,  student_info.MatricNo,  student_info.Name";
$tdatacourse_moe2[".sqlFrom"] = "FROM course_moe2  INNER JOIN student_info ON course_moe2.StudentID = student_info.StudentID";
$tdatacourse_moe2[".sqlWhereExpr"] = "(course_moe2.sem =1)";
$tdatacourse_moe2[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacourse_moe2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacourse_moe2[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscourse_moe2 = array();
$tableKeyscourse_moe2[] = "eid";
$tdatacourse_moe2[".Keys"] = $tableKeyscourse_moe2;

$tdatacourse_moe2[".listFields"] = array();
$tdatacourse_moe2[".listFields"][] = "StudentID";
$tdatacourse_moe2[".listFields"][] = "BatchID";
$tdatacourse_moe2[".listFields"][] = "MatricNo";
$tdatacourse_moe2[".listFields"][] = "sem";
$tdatacourse_moe2[".listFields"][] = "c1";
$tdatacourse_moe2[".listFields"][] = "c2";
$tdatacourse_moe2[".listFields"][] = "c3";
$tdatacourse_moe2[".listFields"][] = "c4";
$tdatacourse_moe2[".listFields"][] = "c5";
$tdatacourse_moe2[".listFields"][] = "c6";
$tdatacourse_moe2[".listFields"][] = "c7";
$tdatacourse_moe2[".listFields"][] = "c8";
$tdatacourse_moe2[".listFields"][] = "c9";
$tdatacourse_moe2[".listFields"][] = "c10";
$tdatacourse_moe2[".listFields"][] = "c11";
$tdatacourse_moe2[".listFields"][] = "c12";

$tdatacourse_moe2[".viewFields"] = array();

$tdatacourse_moe2[".addFields"] = array();

$tdatacourse_moe2[".inlineAddFields"] = array();
$tdatacourse_moe2[".inlineAddFields"][] = "StudentID";
$tdatacourse_moe2[".inlineAddFields"][] = "sem";
$tdatacourse_moe2[".inlineAddFields"][] = "c1";
$tdatacourse_moe2[".inlineAddFields"][] = "c2";
$tdatacourse_moe2[".inlineAddFields"][] = "c3";
$tdatacourse_moe2[".inlineAddFields"][] = "c4";
$tdatacourse_moe2[".inlineAddFields"][] = "c5";
$tdatacourse_moe2[".inlineAddFields"][] = "c6";
$tdatacourse_moe2[".inlineAddFields"][] = "c7";
$tdatacourse_moe2[".inlineAddFields"][] = "c8";
$tdatacourse_moe2[".inlineAddFields"][] = "c9";
$tdatacourse_moe2[".inlineAddFields"][] = "c10";
$tdatacourse_moe2[".inlineAddFields"][] = "c11";
$tdatacourse_moe2[".inlineAddFields"][] = "c12";

$tdatacourse_moe2[".editFields"] = array();

$tdatacourse_moe2[".inlineEditFields"] = array();
$tdatacourse_moe2[".inlineEditFields"][] = "StudentID";
$tdatacourse_moe2[".inlineEditFields"][] = "sem";
$tdatacourse_moe2[".inlineEditFields"][] = "c1";
$tdatacourse_moe2[".inlineEditFields"][] = "c2";
$tdatacourse_moe2[".inlineEditFields"][] = "c3";
$tdatacourse_moe2[".inlineEditFields"][] = "c4";
$tdatacourse_moe2[".inlineEditFields"][] = "c5";
$tdatacourse_moe2[".inlineEditFields"][] = "c6";
$tdatacourse_moe2[".inlineEditFields"][] = "c7";
$tdatacourse_moe2[".inlineEditFields"][] = "c8";
$tdatacourse_moe2[".inlineEditFields"][] = "c9";
$tdatacourse_moe2[".inlineEditFields"][] = "c10";
$tdatacourse_moe2[".inlineEditFields"][] = "c11";
$tdatacourse_moe2[".inlineEditFields"][] = "c12";

$tdatacourse_moe2[".exportFields"] = array();

$tdatacourse_moe2[".printFields"] = array();

//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "Eid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "eid"; 
		$fdata["FullName"] = "course_moe2.eid";
	
		
		
				
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
	
		
		
	$tdatacourse_moe2["eid"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "course_moe2.StudentID";
	
		
		
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
	$edata["LookupOrderBy"] = "BatchID";
	
		$edata["LookupDesc"] = true;
	
		$edata["LookupWhere"] = "Intake_Category='ED'";
	
		
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
	
		
		
	$tdatacourse_moe2["StudentID"] = $fdata;
//	sem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sem";
	$fdata["GoodName"] = "sem";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "Sem"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sem"; 
		$fdata["FullName"] = "course_moe2.sem";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
//	Begin Lookup settings
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
	
		
		
	$tdatacourse_moe2["sem"] = $fdata;
//	c1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "c1";
	$fdata["GoodName"] = "c1";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "BM"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "c1"; 
		$fdata["FullName"] = "course_moe2.c1";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
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
	
		
		
	$tdatacourse_moe2["c1"] = $fdata;
//	c2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "c2";
	$fdata["GoodName"] = "c2";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "ENG"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "c2"; 
		$fdata["FullName"] = "course_moe2.c2";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
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
	
		
		
	$tdatacourse_moe2["c2"] = $fdata;
//	c3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "c3";
	$fdata["GoodName"] = "c3";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "MATH"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "c3"; 
		$fdata["FullName"] = "course_moe2.c3";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
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
	
		
		
	$tdatacourse_moe2["c3"] = $fdata;
//	c4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "c4";
	$fdata["GoodName"] = "c4";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "SCIE"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "c4"; 
		$fdata["FullName"] = "course_moe2.c4";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
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
	
		
		
	$tdatacourse_moe2["c4"] = $fdata;
//	c5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "c5";
	$fdata["GoodName"] = "c5";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "HIST"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "c5"; 
		$fdata["FullName"] = "course_moe2.c5";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
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
	
		
		
	$tdatacourse_moe2["c5"] = $fdata;
//	c6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "c6";
	$fdata["GoodName"] = "c6";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "ISLAM"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "c6"; 
		$fdata["FullName"] = "course_moe2.c6";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
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
	
		
		
	$tdatacourse_moe2["c6"] = $fdata;
//	c7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "c7";
	$fdata["GoodName"] = "c7";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "MORAL"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "c7"; 
		$fdata["FullName"] = "course_moe2.c7";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
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
	
		
		
	$tdatacourse_moe2["c7"] = $fdata;
//	c8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "c8";
	$fdata["GoodName"] = "c8";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "G.AVIA"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "c8"; 
		$fdata["FullName"] = "course_moe2.c8";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
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
	
		
		
	$tdatacourse_moe2["c8"] = $fdata;
//	c9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "c9";
	$fdata["GoodName"] = "c9";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "TOOLS"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "c9"; 
		$fdata["FullName"] = "course_moe2.c9";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
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
	
		
		
	$tdatacourse_moe2["c9"] = $fdata;
//	c10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "c10";
	$fdata["GoodName"] = "c10";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "SAFE1"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "c10"; 
		$fdata["FullName"] = "course_moe2.c10";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
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
	
		
		
	$tdatacourse_moe2["c10"] = $fdata;
//	c11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "c11";
	$fdata["GoodName"] = "c11";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "ELEC 1"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "c11"; 
		$fdata["FullName"] = "course_moe2.c11";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
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
	
		
		
	$tdatacourse_moe2["c11"] = $fdata;
//	c12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "c12";
	$fdata["GoodName"] = "c12";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "COMP"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "c12"; 
		$fdata["FullName"] = "course_moe2.c12";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=43";
	
		
		
		
				
	
	
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
	
		
		
	$tdatacourse_moe2["c12"] = $fdata;
//	cgpa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cgpa";
	$fdata["GoodName"] = "cgpa";
	$fdata["ownerTable"] = "course_moe2";
	$fdata["Label"] = "CGPA"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "c12"; 
		$fdata["FullName"] = "course_moe2.c12";
	
		
		
				
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
	
		
		
	$tdatacourse_moe2["cgpa"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
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
	
		
		
	$tdatacourse_moe2["BatchID"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Matric No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatacourse_moe2["MatricNo"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
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
	
		
		
	$tdatacourse_moe2["Name"] = $fdata;

	
$tables_data["course_moe2"]=&$tdatacourse_moe2;
$field_labels["course_moe2"] = &$fieldLabelscourse_moe2;
$fieldToolTips["course_moe2"] = &$fieldToolTipscourse_moe2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["course_moe2"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["course_moe2"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_course_moe2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "course_moe2.eid,  course_moe2.StudentID,  course_moe2.sem,  course_moe2.c1,  course_moe2.c2,  course_moe2.c3,  course_moe2.c4,  course_moe2.c5,  course_moe2.c6,  course_moe2.c7,  course_moe2.c8,  course_moe2.c9,  course_moe2.c10,  course_moe2.c11,  course_moe2.c12,  course_moe2.c12 AS cgpa,  student_info.BatchID,  student_info.MatricNo,  student_info.Name";
$proto0["m_strFrom"] = "FROM course_moe2  INNER JOIN student_info ON course_moe2.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "(course_moe2.sem =1)";
$proto0["m_strOrderBy"] = "ORDER BY student_info.BatchID DESC, student_info.Name";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "course_moe2.sem =1";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sem",
	"m_strTable" => "course_moe2"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=1";
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
	"m_strName" => "eid",
	"m_strTable" => "course_moe2"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "course_moe2"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sem",
	"m_strTable" => "course_moe2"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "c1",
	"m_strTable" => "course_moe2"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "c2",
	"m_strTable" => "course_moe2"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "c3",
	"m_strTable" => "course_moe2"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "c4",
	"m_strTable" => "course_moe2"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "c5",
	"m_strTable" => "course_moe2"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "c6",
	"m_strTable" => "course_moe2"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "c7",
	"m_strTable" => "course_moe2"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "c8",
	"m_strTable" => "course_moe2"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "c9",
	"m_strTable" => "course_moe2"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "c10",
	"m_strTable" => "course_moe2"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "c11",
	"m_strTable" => "course_moe2"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "c12",
	"m_strTable" => "course_moe2"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "c12",
	"m_strTable" => "course_moe2"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "cgpa";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "course_moe2";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "eid";
$proto44["m_columns"][] = "StudentID";
$proto44["m_columns"][] = "sem";
$proto44["m_columns"][] = "c1";
$proto44["m_columns"][] = "c2";
$proto44["m_columns"][] = "c3";
$proto44["m_columns"][] = "c4";
$proto44["m_columns"][] = "c5";
$proto44["m_columns"][] = "c6";
$proto44["m_columns"][] = "c7";
$proto44["m_columns"][] = "c8";
$proto44["m_columns"][] = "c9";
$proto44["m_columns"][] = "c10";
$proto44["m_columns"][] = "c11";
$proto44["m_columns"][] = "c12";
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
$proto49["m_sql"] = "course_moe2.StudentID = student_info.StudentID";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "course_moe2"
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
$proto0["m_orderby"] = array();
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto51["m_column"]=$obj;
$proto51["m_bAsc"] = 0;
$proto51["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto51);

$proto0["m_orderby"][]=$obj;					
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto53["m_column"]=$obj;
$proto53["m_bAsc"] = 1;
$proto53["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto53);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_course_moe2 = createSqlQuery_course_moe2();
																			$tdatacourse_moe2[".sqlquery"] = $queryData_course_moe2;

include_once(getabspath("include/course_moe2_events.php"));
$tableEvents["course_moe2"] = new eventclass_course_moe2;
$tdatacourse_moe2[".hasEvents"] = true;

$cipherer = new RunnerCipherer("course_moe2");

?>