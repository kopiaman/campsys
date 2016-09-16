<?php
require_once(getabspath("classes/cipherer.php"));
$tdataexam_result_memo_moe = array();
	$tdataexam_result_memo_moe[".NumberOfChars"] = 80; 
	$tdataexam_result_memo_moe[".ShortName"] = "exam_result_memo_moe";
	$tdataexam_result_memo_moe[".OwnerID"] = "";
	$tdataexam_result_memo_moe[".OriginalTable"] = "exam_creator";

//	field labels
$fieldLabelsexam_result_memo_moe = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsexam_result_memo_moe["English"] = array();
	$fieldToolTipsexam_result_memo_moe["English"] = array();
	$fieldLabelsexam_result_memo_moe["English"]["eid"] = "Eid";
	$fieldToolTipsexam_result_memo_moe["English"]["eid"] = "";
	$fieldLabelsexam_result_memo_moe["English"]["exam_date"] = "Exam Date";
	$fieldToolTipsexam_result_memo_moe["English"]["exam_date"] = "";
	$fieldLabelsexam_result_memo_moe["English"]["exam_venue"] = "Exam Venue";
	$fieldToolTipsexam_result_memo_moe["English"]["exam_venue"] = "";
	$fieldLabelsexam_result_memo_moe["English"]["stime"] = "Start Time";
	$fieldToolTipsexam_result_memo_moe["English"]["stime"] = "";
	$fieldLabelsexam_result_memo_moe["English"]["etime"] = "End Time";
	$fieldToolTipsexam_result_memo_moe["English"]["etime"] = "";
	$fieldLabelsexam_result_memo_moe["English"]["program"] = "Program";
	$fieldToolTipsexam_result_memo_moe["English"]["program"] = "";
	$fieldLabelsexam_result_memo_moe["English"]["batch"] = "Batch";
	$fieldToolTipsexam_result_memo_moe["English"]["batch"] = "";
	$fieldLabelsexam_result_memo_moe["English"]["class"] = "Class";
	$fieldToolTipsexam_result_memo_moe["English"]["class"] = "";
	$fieldLabelsexam_result_memo_moe["English"]["course"] = "Module";
	$fieldToolTipsexam_result_memo_moe["English"]["course"] = "";
	$fieldLabelsexam_result_memo_moe["English"]["Option"] = "Option";
	$fieldToolTipsexam_result_memo_moe["English"]["Option"] = "";
	$fieldLabelsexam_result_memo_moe["English"]["date_memo2"] = "Date Memo";
	$fieldToolTipsexam_result_memo_moe["English"]["date_memo2"] = "";
	$fieldLabelsexam_result_memo_moe["English"]["ref2"] = "Ref";
	$fieldToolTipsexam_result_memo_moe["English"]["ref2"] = "";
	$fieldLabelsexam_result_memo_moe["English"]["types"] = "Types";
	$fieldToolTipsexam_result_memo_moe["English"]["types"] = "";
	if (count($fieldToolTipsexam_result_memo_moe["English"]))
		$tdataexam_result_memo_moe[".isUseToolTips"] = true;
}
	
	
	$tdataexam_result_memo_moe[".NCSearch"] = true;



$tdataexam_result_memo_moe[".shortTableName"] = "exam_result_memo_moe";
$tdataexam_result_memo_moe[".nSecOptions"] = 0;
$tdataexam_result_memo_moe[".recsPerRowList"] = 1;
$tdataexam_result_memo_moe[".mainTableOwnerID"] = "";
$tdataexam_result_memo_moe[".moveNext"] = 1;
$tdataexam_result_memo_moe[".nType"] = 1;

$tdataexam_result_memo_moe[".strOriginalTableName"] = "exam_creator";




$tdataexam_result_memo_moe[".showAddInPopup"] = false;

$tdataexam_result_memo_moe[".showEditInPopup"] = false;

$tdataexam_result_memo_moe[".showViewInPopup"] = false;

$tdataexam_result_memo_moe[".fieldsForRegister"] = array();

$tdataexam_result_memo_moe[".listAjax"] = false;

	$tdataexam_result_memo_moe[".audit"] = false;

	$tdataexam_result_memo_moe[".locking"] = false;

$tdataexam_result_memo_moe[".listIcons"] = true;
$tdataexam_result_memo_moe[".inlineEdit"] = true;




$tdataexam_result_memo_moe[".showSimpleSearchOptions"] = false;

$tdataexam_result_memo_moe[".showSearchPanel"] = true;

if (isMobile())
	$tdataexam_result_memo_moe[".isUseAjaxSuggest"] = false;
else 
	$tdataexam_result_memo_moe[".isUseAjaxSuggest"] = true;

$tdataexam_result_memo_moe[".rowHighlite"] = true;

// button handlers file names

$tdataexam_result_memo_moe[".addPageEvents"] = false;

// use timepicker for search panel
$tdataexam_result_memo_moe[".isUseTimeForSearch"] = true;




$tdataexam_result_memo_moe[".allSearchFields"] = array();

$tdataexam_result_memo_moe[".allSearchFields"][] = "date_memo2";
$tdataexam_result_memo_moe[".allSearchFields"][] = "ref2";
$tdataexam_result_memo_moe[".allSearchFields"][] = "exam_date";
$tdataexam_result_memo_moe[".allSearchFields"][] = "program";
$tdataexam_result_memo_moe[".allSearchFields"][] = "batch";
$tdataexam_result_memo_moe[".allSearchFields"][] = "class";
$tdataexam_result_memo_moe[".allSearchFields"][] = "course";

$tdataexam_result_memo_moe[".googleLikeFields"][] = "eid";
$tdataexam_result_memo_moe[".googleLikeFields"][] = "exam_date";
$tdataexam_result_memo_moe[".googleLikeFields"][] = "exam_venue";
$tdataexam_result_memo_moe[".googleLikeFields"][] = "stime";
$tdataexam_result_memo_moe[".googleLikeFields"][] = "etime";
$tdataexam_result_memo_moe[".googleLikeFields"][] = "program";
$tdataexam_result_memo_moe[".googleLikeFields"][] = "batch";
$tdataexam_result_memo_moe[".googleLikeFields"][] = "class";
$tdataexam_result_memo_moe[".googleLikeFields"][] = "course";
$tdataexam_result_memo_moe[".googleLikeFields"][] = "Option";
$tdataexam_result_memo_moe[".googleLikeFields"][] = "date_memo2";
$tdataexam_result_memo_moe[".googleLikeFields"][] = "ref2";
$tdataexam_result_memo_moe[".googleLikeFields"][] = "types";


$tdataexam_result_memo_moe[".advSearchFields"][] = "date_memo2";
$tdataexam_result_memo_moe[".advSearchFields"][] = "ref2";
$tdataexam_result_memo_moe[".advSearchFields"][] = "exam_date";
$tdataexam_result_memo_moe[".advSearchFields"][] = "program";
$tdataexam_result_memo_moe[".advSearchFields"][] = "batch";
$tdataexam_result_memo_moe[".advSearchFields"][] = "class";
$tdataexam_result_memo_moe[".advSearchFields"][] = "course";

$tdataexam_result_memo_moe[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataexam_result_memo_moe[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataexam_result_memo_moe[".strOrderBy"] = $tstrOrderBy;

$tdataexam_result_memo_moe[".orderindexes"] = array();

$tdataexam_result_memo_moe[".sqlHead"] = "SELECT eid,  exam_date,  exam_venue,  stime,  etime,  program,  batch,  `class`,  course,  eid AS `Option`,  date_memo2,  ref2,  types";
$tdataexam_result_memo_moe[".sqlFrom"] = "FROM exam_creator";
$tdataexam_result_memo_moe[".sqlWhereExpr"] = "(types ='MOE')";
$tdataexam_result_memo_moe[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataexam_result_memo_moe[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataexam_result_memo_moe[".arrGroupsPerPage"] = $arrGPP;

$tableKeysexam_result_memo_moe = array();
$tableKeysexam_result_memo_moe[] = "eid";
$tdataexam_result_memo_moe[".Keys"] = $tableKeysexam_result_memo_moe;

$tdataexam_result_memo_moe[".listFields"] = array();
$tdataexam_result_memo_moe[".listFields"][] = "date_memo2";
$tdataexam_result_memo_moe[".listFields"][] = "ref2";
$tdataexam_result_memo_moe[".listFields"][] = "exam_date";
$tdataexam_result_memo_moe[".listFields"][] = "program";
$tdataexam_result_memo_moe[".listFields"][] = "batch";
$tdataexam_result_memo_moe[".listFields"][] = "class";
$tdataexam_result_memo_moe[".listFields"][] = "course";
$tdataexam_result_memo_moe[".listFields"][] = "Option";

$tdataexam_result_memo_moe[".viewFields"] = array();

$tdataexam_result_memo_moe[".addFields"] = array();

$tdataexam_result_memo_moe[".inlineAddFields"] = array();

$tdataexam_result_memo_moe[".editFields"] = array();

$tdataexam_result_memo_moe[".inlineEditFields"] = array();
$tdataexam_result_memo_moe[".inlineEditFields"][] = "date_memo2";
$tdataexam_result_memo_moe[".inlineEditFields"][] = "ref2";

$tdataexam_result_memo_moe[".exportFields"] = array();

$tdataexam_result_memo_moe[".printFields"] = array();

//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Eid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "eid"; 
		$fdata["FullName"] = "eid";
	
		
		
				
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
	
		
		
	$tdataexam_result_memo_moe["eid"] = $fdata;
//	exam_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "exam_date";
	$fdata["GoodName"] = "exam_date";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Exam Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "exam_date"; 
		$fdata["FullName"] = "exam_date";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_result_memo_moe["exam_date"] = $fdata;
//	exam_venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "exam_venue";
	$fdata["GoodName"] = "exam_venue";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Exam Venue"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "exam_venue"; 
		$fdata["FullName"] = "exam_venue";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:230px;";
	$edata["controlWidth"] = 230;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_result_memo_moe["exam_venue"] = $fdata;
//	stime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "stime";
	$fdata["GoodName"] = "stime";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Start Time"; 
	$fdata["FieldType"] = 134;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "stime"; 
		$fdata["FullName"] = "stime";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 5,
									  "showSeconds" => 0);
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_result_memo_moe["stime"] = $fdata;
//	etime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "etime";
	$fdata["GoodName"] = "etime";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "End Time"; 
	$fdata["FieldType"] = 134;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "etime"; 
		$fdata["FullName"] = "etime";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 5,
									  "showSeconds" => 0);
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_result_memo_moe["etime"] = $fdata;
//	program
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "program";
	$fdata["GoodName"] = "program";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Program"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "program"; 
		$fdata["FullName"] = "program";
	
		
		
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
				$edata["LCType"] = 2;
			
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "shortcut_name";
	
		
	$edata["LookupTable"] = "program";
	$edata["LookupOrderBy"] = "ID";
	
		
		
		
		
		
				
	
	
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
	
		
		
	$tdataexam_result_memo_moe["program"] = $fdata;
//	batch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "batch";
	$fdata["GoodName"] = "batch";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "batch"; 
		$fdata["FullName"] = "batch";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:40px;";
	$edata["controlWidth"] = 40;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_result_memo_moe["batch"] = $fdata;
//	class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "class";
	$fdata["GoodName"] = "class";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "class"; 
		$fdata["FullName"] = "`class`";
	
		
		
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
				
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "group";
	
		
	$edata["LookupTable"] = "group";
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
	
		
		
	$tdataexam_result_memo_moe["class"] = $fdata;
//	course
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "course";
	$fdata["GoodName"] = "course";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Module"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "course"; 
		$fdata["FullName"] = "course";
	
		
		
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
				$edata["LCType"] = 2;
			
		
			
	$edata["LinkField"] = "CourseID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "course";
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
	
		
		
	$tdataexam_result_memo_moe["course"] = $fdata;
//	Option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Option";
	$fdata["GoodName"] = "Option";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Option"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "eid"; 
		$fdata["FullName"] = "eid";
	
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_result_memo_moe["Option"] = $fdata;
//	date_memo2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "date_memo2";
	$fdata["GoodName"] = "date_memo2";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Date Memo"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "date_memo2"; 
		$fdata["FullName"] = "date_memo2";
	
		
		
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
	
		
		
		$edata["inputStyle"] = " width:67px;";
	$edata["controlWidth"] = 67;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_result_memo_moe["date_memo2"] = $fdata;
//	ref2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ref2";
	$fdata["GoodName"] = "ref2";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Ref"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ref2"; 
		$fdata["FullName"] = "ref2";
	
		
		
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
	
		
		
	$tdataexam_result_memo_moe["ref2"] = $fdata;
//	types
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "types";
	$fdata["GoodName"] = "types";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Types"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "types"; 
		$fdata["FullName"] = "types";
	
		
		
				
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
	
		
		
	$tdataexam_result_memo_moe["types"] = $fdata;

	
$tables_data["exam_result_memo_moe"]=&$tdataexam_result_memo_moe;
$field_labels["exam_result_memo_moe"] = &$fieldLabelsexam_result_memo_moe;
$fieldToolTips["exam_result_memo_moe"] = &$fieldToolTipsexam_result_memo_moe;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["exam_result_memo_moe"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["exam_result_memo_moe"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_exam_result_memo_moe()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eid,  exam_date,  exam_venue,  stime,  etime,  program,  batch,  `class`,  course,  eid AS `Option`,  date_memo2,  ref2,  types";
$proto0["m_strFrom"] = "FROM exam_creator";
$proto0["m_strWhere"] = "(types ='MOE')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "types ='MOE'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "types",
	"m_strTable" => "exam_creator"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "='MOE'";
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
	"m_strTable" => "exam_creator"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "exam_date",
	"m_strTable" => "exam_creator"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "exam_venue",
	"m_strTable" => "exam_creator"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "stime",
	"m_strTable" => "exam_creator"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "etime",
	"m_strTable" => "exam_creator"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "program",
	"m_strTable" => "exam_creator"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "batch",
	"m_strTable" => "exam_creator"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "class",
	"m_strTable" => "exam_creator"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "course",
	"m_strTable" => "exam_creator"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "eid",
	"m_strTable" => "exam_creator"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Option";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "date_memo2",
	"m_strTable" => "exam_creator"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "ref2",
	"m_strTable" => "exam_creator"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "types",
	"m_strTable" => "exam_creator"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "exam_creator";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "eid";
$proto32["m_columns"][] = "date_memo";
$proto32["m_columns"][] = "ref";
$proto32["m_columns"][] = "exam_date";
$proto32["m_columns"][] = "exam_venue";
$proto32["m_columns"][] = "stime";
$proto32["m_columns"][] = "etime";
$proto32["m_columns"][] = "program";
$proto32["m_columns"][] = "batch";
$proto32["m_columns"][] = "class";
$proto32["m_columns"][] = "course";
$proto32["m_columns"][] = "date_memo2";
$proto32["m_columns"][] = "ref2";
$proto32["m_columns"][] = "types";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_alias"] = "";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = "0";
$proto33["m_inBrackets"] = "0";
$proto33["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_exam_result_memo_moe = createSqlQuery_exam_result_memo_moe();
													$tdataexam_result_memo_moe[".sqlquery"] = $queryData_exam_result_memo_moe;

$tableEvents["exam_result_memo_moe"] = new eventsBase;
$tdataexam_result_memo_moe[".hasEvents"] = false;

$cipherer = new RunnerCipherer("exam_result_memo_moe");

?>