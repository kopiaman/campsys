<?php
require_once(getabspath("classes/cipherer.php"));
$tdataq_assesment = array();
	$tdataq_assesment[".NumberOfChars"] = 80; 
	$tdataq_assesment[".ShortName"] = "q_assesment";
	$tdataq_assesment[".OwnerID"] = "";
	$tdataq_assesment[".OriginalTable"] = "q_assesment";

//	field labels
$fieldLabelsq_assesment = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsq_assesment["English"] = array();
	$fieldToolTipsq_assesment["English"] = array();
	$fieldLabelsq_assesment["English"]["id"] = "Id";
	$fieldToolTipsq_assesment["English"]["id"] = "";
	$fieldLabelsq_assesment["English"]["task_no"] = "Task No";
	$fieldToolTipsq_assesment["English"]["task_no"] = "";
	$fieldLabelsq_assesment["English"]["project"] = "Project";
	$fieldToolTipsq_assesment["English"]["project"] = "";
	$fieldLabelsq_assesment["English"]["as_name"] = "Assessor";
	$fieldToolTipsq_assesment["English"]["as_name"] = "";
	$fieldLabelsq_assesment["English"]["as_comment"] = "Comment";
	$fieldToolTipsq_assesment["English"]["as_comment"] = "";
	$fieldLabelsq_assesment["English"]["result"] = "Result";
	$fieldToolTipsq_assesment["English"]["result"] = "";
	$fieldLabelsq_assesment["English"]["studentID"] = "Student ID";
	$fieldToolTipsq_assesment["English"]["studentID"] = "";
	$fieldLabelsq_assesment["English"]["as_date"] = "Date";
	$fieldToolTipsq_assesment["English"]["as_date"] = "";
	if (count($fieldToolTipsq_assesment["English"]))
		$tdataq_assesment[".isUseToolTips"] = true;
}
	
	
	$tdataq_assesment[".NCSearch"] = true;



$tdataq_assesment[".shortTableName"] = "q_assesment";
$tdataq_assesment[".nSecOptions"] = 0;
$tdataq_assesment[".recsPerRowList"] = 1;
$tdataq_assesment[".mainTableOwnerID"] = "";
$tdataq_assesment[".moveNext"] = 1;
$tdataq_assesment[".nType"] = 0;

$tdataq_assesment[".strOriginalTableName"] = "q_assesment";




$tdataq_assesment[".showAddInPopup"] = false;

$tdataq_assesment[".showEditInPopup"] = false;

$tdataq_assesment[".showViewInPopup"] = false;

$tdataq_assesment[".fieldsForRegister"] = array();

$tdataq_assesment[".listAjax"] = false;

	$tdataq_assesment[".audit"] = false;

	$tdataq_assesment[".locking"] = false;

$tdataq_assesment[".listIcons"] = true;
$tdataq_assesment[".inlineEdit"] = true;
$tdataq_assesment[".inlineAdd"] = true;



$tdataq_assesment[".delete"] = true;

$tdataq_assesment[".showSimpleSearchOptions"] = false;

$tdataq_assesment[".showSearchPanel"] = true;

if (isMobile())
	$tdataq_assesment[".isUseAjaxSuggest"] = false;
else 
	$tdataq_assesment[".isUseAjaxSuggest"] = true;

$tdataq_assesment[".rowHighlite"] = true;

// button handlers file names

$tdataq_assesment[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_assesment[".isUseTimeForSearch"] = false;




$tdataq_assesment[".allSearchFields"] = array();

$tdataq_assesment[".allSearchFields"][] = "task_no";
$tdataq_assesment[".allSearchFields"][] = "project";
$tdataq_assesment[".allSearchFields"][] = "as_name";
$tdataq_assesment[".allSearchFields"][] = "result";
$tdataq_assesment[".allSearchFields"][] = "as_date";
$tdataq_assesment[".allSearchFields"][] = "as_comment";

$tdataq_assesment[".googleLikeFields"][] = "id";
$tdataq_assesment[".googleLikeFields"][] = "task_no";
$tdataq_assesment[".googleLikeFields"][] = "project";
$tdataq_assesment[".googleLikeFields"][] = "as_name";
$tdataq_assesment[".googleLikeFields"][] = "as_comment";
$tdataq_assesment[".googleLikeFields"][] = "result";
$tdataq_assesment[".googleLikeFields"][] = "studentID";
$tdataq_assesment[".googleLikeFields"][] = "as_date";


$tdataq_assesment[".advSearchFields"][] = "task_no";
$tdataq_assesment[".advSearchFields"][] = "project";
$tdataq_assesment[".advSearchFields"][] = "as_name";
$tdataq_assesment[".advSearchFields"][] = "result";
$tdataq_assesment[".advSearchFields"][] = "as_date";
$tdataq_assesment[".advSearchFields"][] = "as_comment";

$tdataq_assesment[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataq_assesment[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_assesment[".strOrderBy"] = $tstrOrderBy;

$tdataq_assesment[".orderindexes"] = array();

$tdataq_assesment[".sqlHead"] = "SELECT id,   task_no,   project,   as_name,   as_comment,   `result`,   StudentID,   as_date";
$tdataq_assesment[".sqlFrom"] = "FROM q_assesment";
$tdataq_assesment[".sqlWhereExpr"] = "";
$tdataq_assesment[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_assesment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_assesment[".arrGroupsPerPage"] = $arrGPP;

$tableKeysq_assesment = array();
$tableKeysq_assesment[] = "id";
$tdataq_assesment[".Keys"] = $tableKeysq_assesment;

$tdataq_assesment[".listFields"] = array();
$tdataq_assesment[".listFields"][] = "task_no";
$tdataq_assesment[".listFields"][] = "project";
$tdataq_assesment[".listFields"][] = "as_name";
$tdataq_assesment[".listFields"][] = "result";
$tdataq_assesment[".listFields"][] = "as_date";
$tdataq_assesment[".listFields"][] = "as_comment";

$tdataq_assesment[".viewFields"] = array();

$tdataq_assesment[".addFields"] = array();

$tdataq_assesment[".inlineAddFields"] = array();
$tdataq_assesment[".inlineAddFields"][] = "task_no";
$tdataq_assesment[".inlineAddFields"][] = "project";
$tdataq_assesment[".inlineAddFields"][] = "as_name";
$tdataq_assesment[".inlineAddFields"][] = "result";
$tdataq_assesment[".inlineAddFields"][] = "as_date";
$tdataq_assesment[".inlineAddFields"][] = "as_comment";

$tdataq_assesment[".editFields"] = array();

$tdataq_assesment[".inlineEditFields"] = array();
$tdataq_assesment[".inlineEditFields"][] = "task_no";
$tdataq_assesment[".inlineEditFields"][] = "project";
$tdataq_assesment[".inlineEditFields"][] = "as_name";
$tdataq_assesment[".inlineEditFields"][] = "result";
$tdataq_assesment[".inlineEditFields"][] = "as_date";
$tdataq_assesment[".inlineEditFields"][] = "as_comment";

$tdataq_assesment[".exportFields"] = array();

$tdataq_assesment[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "q_assesment";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
				
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
	
		
		
	$tdataq_assesment["id"] = $fdata;
//	task_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "task_no";
	$fdata["GoodName"] = "task_no";
	$fdata["ownerTable"] = "q_assesment";
	$fdata["Label"] = "Task No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "task_no"; 
		$fdata["FullName"] = "task_no";
	
		
		
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
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=48";
	
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:60px;";
	$edata["controlWidth"] = 60;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataq_assesment["task_no"] = $fdata;
//	project
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "project";
	$fdata["GoodName"] = "project";
	$fdata["ownerTable"] = "q_assesment";
	$fdata["Label"] = "Project"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "project"; 
		$fdata["FullName"] = "project";
	
		
		
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
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=49";
	
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataq_assesment["project"] = $fdata;
//	as_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "as_name";
	$fdata["GoodName"] = "as_name";
	$fdata["ownerTable"] = "q_assesment";
	$fdata["Label"] = "Assessor"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "as_name"; 
		$fdata["FullName"] = "as_name";
	
		
		
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
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";
	
		
	$edata["LookupTable"] = "q_assessor";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:60px;";
	$edata["controlWidth"] = 60;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataq_assesment["as_name"] = $fdata;
//	as_comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "as_comment";
	$fdata["GoodName"] = "as_comment";
	$fdata["ownerTable"] = "q_assesment";
	$fdata["Label"] = "Comment"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "as_comment"; 
		$fdata["FullName"] = "as_comment";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataq_assesment["as_comment"] = $fdata;
//	result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "result";
	$fdata["GoodName"] = "result";
	$fdata["ownerTable"] = "q_assesment";
	$fdata["Label"] = "Result"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "result"; 
		$fdata["FullName"] = "`result`";
	
		
		
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
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

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
	
		
		
	$tdataq_assesment["result"] = $fdata;
//	studentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "studentID";
	$fdata["GoodName"] = "studentID";
	$fdata["ownerTable"] = "q_assesment";
	$fdata["Label"] = "Student ID"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				
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
	
		
		
	$tdataq_assesment["studentID"] = $fdata;
//	as_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "as_date";
	$fdata["GoodName"] = "as_date";
	$fdata["ownerTable"] = "q_assesment";
	$fdata["Label"] = "Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "as_date"; 
		$fdata["FullName"] = "as_date";
	
		
		
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
	
		
		
		$edata["inputStyle"] = " width:60px;";
	$edata["controlWidth"] = 60;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataq_assesment["as_date"] = $fdata;

	
$tables_data["q_assesment"]=&$tdataq_assesment;
$field_labels["q_assesment"] = &$fieldLabelsq_assesment;
$fieldToolTips["q_assesment"] = &$fieldToolTipsq_assesment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_assesment"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["q_assesment"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="Report_Assesment";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Report_Assesment";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["q_assesment"][$mIndex] = $masterParams;	
		$masterTablesData["q_assesment"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["q_assesment"][$mIndex]["detailKeys"][]="StudentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_assesment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   task_no,   project,   as_name,   as_comment,   `result`,   StudentID,   as_date";
$proto0["m_strFrom"] = "FROM q_assesment";
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
	"m_strName" => "id",
	"m_strTable" => "q_assesment"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "task_no",
	"m_strTable" => "q_assesment"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "project",
	"m_strTable" => "q_assesment"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "as_name",
	"m_strTable" => "q_assesment"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "as_comment",
	"m_strTable" => "q_assesment"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "result",
	"m_strTable" => "q_assesment"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "q_assesment"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "as_date",
	"m_strTable" => "q_assesment"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "q_assesment";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "task_no";
$proto22["m_columns"][] = "project";
$proto22["m_columns"][] = "as_name";
$proto22["m_columns"][] = "as_comment";
$proto22["m_columns"][] = "result";
$proto22["m_columns"][] = "StudentID";
$proto22["m_columns"][] = "as_date";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_assesment = createSqlQuery_q_assesment();
								$tdataq_assesment[".sqlquery"] = $queryData_q_assesment;

$tableEvents["q_assesment"] = new eventsBase;
$tdataq_assesment[".hasEvents"] = false;

$cipherer = new RunnerCipherer("q_assesment");

?>