<?php
require_once(getabspath("classes/cipherer.php"));
$tdataexam_creator = array();
	$tdataexam_creator[".NumberOfChars"] = 80; 
	$tdataexam_creator[".ShortName"] = "exam_creator";
	$tdataexam_creator[".OwnerID"] = "";
	$tdataexam_creator[".OriginalTable"] = "exam_creator";

//	field labels
$fieldLabelsexam_creator = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsexam_creator["English"] = array();
	$fieldToolTipsexam_creator["English"] = array();
	$fieldLabelsexam_creator["English"]["eid"] = "Eid";
	$fieldToolTipsexam_creator["English"]["eid"] = "";
	$fieldLabelsexam_creator["English"]["date_memo"] = "Date Memo";
	$fieldToolTipsexam_creator["English"]["date_memo"] = "";
	$fieldLabelsexam_creator["English"]["ref"] = "Ref No";
	$fieldToolTipsexam_creator["English"]["ref"] = "";
	$fieldLabelsexam_creator["English"]["exam_date"] = "Exam Date";
	$fieldToolTipsexam_creator["English"]["exam_date"] = "";
	$fieldLabelsexam_creator["English"]["exam_venue"] = "Exam Venue";
	$fieldToolTipsexam_creator["English"]["exam_venue"] = "";
	$fieldLabelsexam_creator["English"]["stime"] = "Start Time";
	$fieldToolTipsexam_creator["English"]["stime"] = "";
	$fieldLabelsexam_creator["English"]["etime"] = "End Time";
	$fieldToolTipsexam_creator["English"]["etime"] = "";
	$fieldLabelsexam_creator["English"]["program"] = "Course";
	$fieldToolTipsexam_creator["English"]["program"] = "";
	$fieldLabelsexam_creator["English"]["batch"] = "Batch";
	$fieldToolTipsexam_creator["English"]["batch"] = "";
	$fieldLabelsexam_creator["English"]["class"] = "Class";
	$fieldToolTipsexam_creator["English"]["class"] = "";
	$fieldLabelsexam_creator["English"]["course"] = "Module";
	$fieldToolTipsexam_creator["English"]["course"] = "";
	$fieldLabelsexam_creator["English"]["Option"] = "Option";
	$fieldToolTipsexam_creator["English"]["Option"] = "";
	$fieldLabelsexam_creator["English"]["exam_remark"] = "Exam Remark";
	$fieldToolTipsexam_creator["English"]["exam_remark"] = "";
	if (count($fieldToolTipsexam_creator["English"]))
		$tdataexam_creator[".isUseToolTips"] = true;
}
	
	
	$tdataexam_creator[".NCSearch"] = true;



$tdataexam_creator[".shortTableName"] = "exam_creator";
$tdataexam_creator[".nSecOptions"] = 0;
$tdataexam_creator[".recsPerRowList"] = 1;
$tdataexam_creator[".mainTableOwnerID"] = "";
$tdataexam_creator[".moveNext"] = 1;
$tdataexam_creator[".nType"] = 0;

$tdataexam_creator[".strOriginalTableName"] = "exam_creator";




$tdataexam_creator[".showAddInPopup"] = false;

$tdataexam_creator[".showEditInPopup"] = false;

$tdataexam_creator[".showViewInPopup"] = false;

$tdataexam_creator[".fieldsForRegister"] = array();
	
$tdataexam_creator[".listAjax"] = false;

	$tdataexam_creator[".audit"] = true;

	$tdataexam_creator[".locking"] = false;

$tdataexam_creator[".listIcons"] = true;
$tdataexam_creator[".edit"] = true;



$tdataexam_creator[".delete"] = true;

$tdataexam_creator[".showSimpleSearchOptions"] = true;

$tdataexam_creator[".showSearchPanel"] = true;

if (isMobile())
	$tdataexam_creator[".isUseAjaxSuggest"] = false;
else 
	$tdataexam_creator[".isUseAjaxSuggest"] = true;

$tdataexam_creator[".rowHighlite"] = true;

// button handlers file names

$tdataexam_creator[".addPageEvents"] = false;

// use timepicker for search panel
$tdataexam_creator[".isUseTimeForSearch"] = true;




$tdataexam_creator[".allSearchFields"] = array();

$tdataexam_creator[".allSearchFields"][] = "date_memo";
$tdataexam_creator[".allSearchFields"][] = "ref";
$tdataexam_creator[".allSearchFields"][] = "exam_date";
$tdataexam_creator[".allSearchFields"][] = "program";
$tdataexam_creator[".allSearchFields"][] = "batch";
$tdataexam_creator[".allSearchFields"][] = "class";
$tdataexam_creator[".allSearchFields"][] = "course";
$tdataexam_creator[".allSearchFields"][] = "exam_remark";

$tdataexam_creator[".googleLikeFields"][] = "eid";
$tdataexam_creator[".googleLikeFields"][] = "date_memo";
$tdataexam_creator[".googleLikeFields"][] = "ref";
$tdataexam_creator[".googleLikeFields"][] = "exam_date";
$tdataexam_creator[".googleLikeFields"][] = "exam_venue";
$tdataexam_creator[".googleLikeFields"][] = "stime";
$tdataexam_creator[".googleLikeFields"][] = "etime";
$tdataexam_creator[".googleLikeFields"][] = "program";
$tdataexam_creator[".googleLikeFields"][] = "batch";
$tdataexam_creator[".googleLikeFields"][] = "class";
$tdataexam_creator[".googleLikeFields"][] = "course";
$tdataexam_creator[".googleLikeFields"][] = "Option";
$tdataexam_creator[".googleLikeFields"][] = "exam_remark";


$tdataexam_creator[".advSearchFields"][] = "date_memo";
$tdataexam_creator[".advSearchFields"][] = "ref";
$tdataexam_creator[".advSearchFields"][] = "exam_date";
$tdataexam_creator[".advSearchFields"][] = "program";
$tdataexam_creator[".advSearchFields"][] = "batch";
$tdataexam_creator[".advSearchFields"][] = "class";
$tdataexam_creator[".advSearchFields"][] = "course";
$tdataexam_creator[".advSearchFields"][] = "exam_remark";

$tdataexam_creator[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataexam_creator[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataexam_creator[".strOrderBy"] = $tstrOrderBy;

$tdataexam_creator[".orderindexes"] = array();

$tdataexam_creator[".sqlHead"] = "SELECT eid,  date_memo,  `ref`,  exam_date,  exam_venue,  stime,  etime,  program,  batch,  `class`,  course,  eid AS `Option`,  exam_remark";
$tdataexam_creator[".sqlFrom"] = "FROM exam_creator";
$tdataexam_creator[".sqlWhereExpr"] = "";
$tdataexam_creator[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataexam_creator[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataexam_creator[".arrGroupsPerPage"] = $arrGPP;

$tableKeysexam_creator = array();
$tableKeysexam_creator[] = "eid";
$tdataexam_creator[".Keys"] = $tableKeysexam_creator;

$tdataexam_creator[".listFields"] = array();
$tdataexam_creator[".listFields"][] = "date_memo";
$tdataexam_creator[".listFields"][] = "ref";
$tdataexam_creator[".listFields"][] = "exam_date";
$tdataexam_creator[".listFields"][] = "program";
$tdataexam_creator[".listFields"][] = "batch";
$tdataexam_creator[".listFields"][] = "class";
$tdataexam_creator[".listFields"][] = "course";
$tdataexam_creator[".listFields"][] = "exam_remark";
$tdataexam_creator[".listFields"][] = "Option";

$tdataexam_creator[".viewFields"] = array();

$tdataexam_creator[".addFields"] = array();
$tdataexam_creator[".addFields"][] = "date_memo";
$tdataexam_creator[".addFields"][] = "ref";
$tdataexam_creator[".addFields"][] = "exam_date";
$tdataexam_creator[".addFields"][] = "exam_venue";
$tdataexam_creator[".addFields"][] = "stime";
$tdataexam_creator[".addFields"][] = "etime";
$tdataexam_creator[".addFields"][] = "program";
$tdataexam_creator[".addFields"][] = "batch";
$tdataexam_creator[".addFields"][] = "class";
$tdataexam_creator[".addFields"][] = "course";
$tdataexam_creator[".addFields"][] = "exam_remark";

$tdataexam_creator[".inlineAddFields"] = array();

$tdataexam_creator[".editFields"] = array();
$tdataexam_creator[".editFields"][] = "date_memo";
$tdataexam_creator[".editFields"][] = "ref";
$tdataexam_creator[".editFields"][] = "exam_date";
$tdataexam_creator[".editFields"][] = "exam_venue";
$tdataexam_creator[".editFields"][] = "stime";
$tdataexam_creator[".editFields"][] = "etime";
$tdataexam_creator[".editFields"][] = "program";
$tdataexam_creator[".editFields"][] = "batch";
$tdataexam_creator[".editFields"][] = "class";
$tdataexam_creator[".editFields"][] = "course";
$tdataexam_creator[".editFields"][] = "exam_remark";

$tdataexam_creator[".inlineEditFields"] = array();

$tdataexam_creator[".exportFields"] = array();

$tdataexam_creator[".printFields"] = array();

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
	
		
		
	$tdataexam_creator["eid"] = $fdata;
//	date_memo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "date_memo";
	$fdata["GoodName"] = "date_memo";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Date Memo"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "date_memo"; 
		$fdata["FullName"] = "date_memo";
	
		
		
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
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_creator["date_memo"] = $fdata;
//	ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ref";
	$fdata["GoodName"] = "ref";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Ref No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ref"; 
		$fdata["FullName"] = "`ref`";
	
		
		
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
	
		$edata["inputStyle"] = " width:229px;";
	$edata["controlWidth"] = 229;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_creator["ref"] = $fdata;
//	exam_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "exam_date";
	$fdata["GoodName"] = "exam_date";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Exam Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
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
	
		
		
	$tdataexam_creator["exam_date"] = $fdata;
//	exam_venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "exam_venue";
	$fdata["GoodName"] = "exam_venue";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Exam Venue"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "exam_venue"; 
		$fdata["FullName"] = "exam_venue";
	
		
		
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
	
		
		
	$tdataexam_creator["exam_venue"] = $fdata;
//	stime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "stime";
	$fdata["GoodName"] = "stime";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Start Time"; 
	$fdata["FieldType"] = 134;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "stime"; 
		$fdata["FullName"] = "stime";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
		
		
	$tdataexam_creator["stime"] = $fdata;
//	etime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "etime";
	$fdata["GoodName"] = "etime";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "End Time"; 
	$fdata["FieldType"] = 134;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "etime"; 
		$fdata["FullName"] = "etime";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
		
		
	$tdataexam_creator["etime"] = $fdata;
//	program
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "program";
	$fdata["GoodName"] = "program";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
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
				
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "shortcut_name";
	
		
	$edata["LookupTable"] = "program";
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
	
		
		
	$tdataexam_creator["program"] = $fdata;
//	batch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "batch";
	$fdata["GoodName"] = "batch";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_creator["batch"] = $fdata;
//	class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "class";
	$fdata["GoodName"] = "class";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_creator["class"] = $fdata;
//	course
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "course";
	$fdata["GoodName"] = "course";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Module"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
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
				
		
			
	$edata["LinkField"] = "CourseID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Shortname";
	
		
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
	
		
		
	$tdataexam_creator["course"] = $fdata;
//	Option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
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
	
		
		
	$tdataexam_creator["Option"] = $fdata;
//	exam_remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "exam_remark";
	$fdata["GoodName"] = "exam_remark";
	$fdata["ownerTable"] = "exam_creator";
	$fdata["Label"] = "Exam Remark"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "exam_remark"; 
		$fdata["FullName"] = "exam_remark";
	
		
		
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
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataexam_creator["exam_remark"] = $fdata;

	
$tables_data["exam_creator"]=&$tdataexam_creator;
$field_labels["exam_creator"] = &$fieldLabelsexam_creator;
$fieldToolTips["exam_creator"] = &$fieldToolTipsexam_creator;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["exam_creator"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["exam_creator"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_exam_creator()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eid,  date_memo,  `ref`,  exam_date,  exam_venue,  stime,  etime,  program,  batch,  `class`,  course,  eid AS `Option`,  exam_remark";
$proto0["m_strFrom"] = "FROM exam_creator";
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
	"m_strName" => "eid",
	"m_strTable" => "exam_creator"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "date_memo",
	"m_strTable" => "exam_creator"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ref",
	"m_strTable" => "exam_creator"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "exam_date",
	"m_strTable" => "exam_creator"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "exam_venue",
	"m_strTable" => "exam_creator"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "stime",
	"m_strTable" => "exam_creator"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "etime",
	"m_strTable" => "exam_creator"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "program",
	"m_strTable" => "exam_creator"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "batch",
	"m_strTable" => "exam_creator"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "class",
	"m_strTable" => "exam_creator"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "course",
	"m_strTable" => "exam_creator"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "eid",
	"m_strTable" => "exam_creator"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Option";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "exam_remark",
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
$proto32["m_columns"][] = "exam_remark";
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
$queryData_exam_creator = createSqlQuery_exam_creator();
													$tdataexam_creator[".sqlquery"] = $queryData_exam_creator;

$tableEvents["exam_creator"] = new eventsBase;
$tdataexam_creator[".hasEvents"] = false;

$cipherer = new RunnerCipherer("exam_creator");

?>