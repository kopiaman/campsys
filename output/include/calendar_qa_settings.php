<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacalendar_qa = array();
	$tdatacalendar_qa[".NumberOfChars"] = 80; 
	$tdatacalendar_qa[".ShortName"] = "calendar_qa";
	$tdatacalendar_qa[".OwnerID"] = "";
	$tdatacalendar_qa[".OriginalTable"] = "calendar";

//	field labels
$fieldLabelscalendar_qa = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalendar_qa["English"] = array();
	$fieldToolTipscalendar_qa["English"] = array();
	$fieldLabelscalendar_qa["English"]["id"] = "Id";
	$fieldToolTipscalendar_qa["English"]["id"] = "";
	$fieldLabelscalendar_qa["English"]["branch_id"] = "Branch Id";
	$fieldToolTipscalendar_qa["English"]["branch_id"] = "";
	$fieldLabelscalendar_qa["English"]["title"] = "Title";
	$fieldToolTipscalendar_qa["English"]["title"] = "";
	$fieldLabelscalendar_qa["English"]["content"] = "Detail";
	$fieldToolTipscalendar_qa["English"]["content"] = "";
	$fieldLabelscalendar_qa["English"]["category"] = "Category";
	$fieldToolTipscalendar_qa["English"]["category"] = "";
	$fieldLabelscalendar_qa["English"]["date_start"] = "Date Start";
	$fieldToolTipscalendar_qa["English"]["date_start"] = "";
	$fieldLabelscalendar_qa["English"]["date_end"] = "Date End";
	$fieldToolTipscalendar_qa["English"]["date_end"] = "";
	$fieldLabelscalendar_qa["English"]["days"] = "Days";
	$fieldToolTipscalendar_qa["English"]["days"] = "";
	if (count($fieldToolTipscalendar_qa["English"]))
		$tdatacalendar_qa[".isUseToolTips"] = true;
}
	
	
	$tdatacalendar_qa[".NCSearch"] = true;



$tdatacalendar_qa[".shortTableName"] = "calendar_qa";
$tdatacalendar_qa[".nSecOptions"] = 0;
$tdatacalendar_qa[".recsPerRowList"] = 1;
$tdatacalendar_qa[".mainTableOwnerID"] = "";
$tdatacalendar_qa[".moveNext"] = 1;
$tdatacalendar_qa[".nType"] = 1;

$tdatacalendar_qa[".strOriginalTableName"] = "calendar";




$tdatacalendar_qa[".showAddInPopup"] = false;

$tdatacalendar_qa[".showEditInPopup"] = false;

$tdatacalendar_qa[".showViewInPopup"] = false;

$tdatacalendar_qa[".fieldsForRegister"] = array();
	
$tdatacalendar_qa[".listAjax"] = false;

	$tdatacalendar_qa[".audit"] = true;

	$tdatacalendar_qa[".locking"] = false;

$tdatacalendar_qa[".listIcons"] = true;
$tdatacalendar_qa[".inlineEdit"] = true;
$tdatacalendar_qa[".inlineAdd"] = true;



$tdatacalendar_qa[".delete"] = true;

$tdatacalendar_qa[".showSimpleSearchOptions"] = true;

$tdatacalendar_qa[".showSearchPanel"] = true;

if (isMobile())
	$tdatacalendar_qa[".isUseAjaxSuggest"] = false;
else 
	$tdatacalendar_qa[".isUseAjaxSuggest"] = true;

$tdatacalendar_qa[".rowHighlite"] = true;

// button handlers file names
$tdatacalendar_qa[".isUsebuttonHandlers"] = true;

$tdatacalendar_qa[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalendar_qa[".isUseTimeForSearch"] = false;




$tdatacalendar_qa[".allSearchFields"] = array();

$tdatacalendar_qa[".allSearchFields"][] = "title";
$tdatacalendar_qa[".allSearchFields"][] = "content";
$tdatacalendar_qa[".allSearchFields"][] = "category";
$tdatacalendar_qa[".allSearchFields"][] = "date_start";
$tdatacalendar_qa[".allSearchFields"][] = "date_end";

$tdatacalendar_qa[".googleLikeFields"][] = "id";
$tdatacalendar_qa[".googleLikeFields"][] = "branch_id";
$tdatacalendar_qa[".googleLikeFields"][] = "title";
$tdatacalendar_qa[".googleLikeFields"][] = "content";
$tdatacalendar_qa[".googleLikeFields"][] = "category";
$tdatacalendar_qa[".googleLikeFields"][] = "date_start";
$tdatacalendar_qa[".googleLikeFields"][] = "date_end";
$tdatacalendar_qa[".googleLikeFields"][] = "days";


$tdatacalendar_qa[".advSearchFields"][] = "title";
$tdatacalendar_qa[".advSearchFields"][] = "content";
$tdatacalendar_qa[".advSearchFields"][] = "category";
$tdatacalendar_qa[".advSearchFields"][] = "date_start";
$tdatacalendar_qa[".advSearchFields"][] = "date_end";

$tdatacalendar_qa[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacalendar_qa[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalendar_qa[".strOrderBy"] = $tstrOrderBy;

$tdatacalendar_qa[".orderindexes"] = array();

$tdatacalendar_qa[".sqlHead"] = "SELECT id,  branch_id,  title,  content,  category,  date_start,  date_end,  days";
$tdatacalendar_qa[".sqlFrom"] = "FROM calendar";
$tdatacalendar_qa[".sqlWhereExpr"] = "(category LIKE  '%exam%')";
$tdatacalendar_qa[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalendar_qa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalendar_qa[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscalendar_qa = array();
$tableKeyscalendar_qa[] = "id";
$tdatacalendar_qa[".Keys"] = $tableKeyscalendar_qa;

$tdatacalendar_qa[".listFields"] = array();
$tdatacalendar_qa[".listFields"][] = "title";
$tdatacalendar_qa[".listFields"][] = "content";
$tdatacalendar_qa[".listFields"][] = "category";
$tdatacalendar_qa[".listFields"][] = "date_start";
$tdatacalendar_qa[".listFields"][] = "date_end";

$tdatacalendar_qa[".viewFields"] = array();

$tdatacalendar_qa[".addFields"] = array();

$tdatacalendar_qa[".inlineAddFields"] = array();
$tdatacalendar_qa[".inlineAddFields"][] = "title";
$tdatacalendar_qa[".inlineAddFields"][] = "content";
$tdatacalendar_qa[".inlineAddFields"][] = "category";
$tdatacalendar_qa[".inlineAddFields"][] = "date_start";
$tdatacalendar_qa[".inlineAddFields"][] = "date_end";

$tdatacalendar_qa[".editFields"] = array();

$tdatacalendar_qa[".inlineEditFields"] = array();
$tdatacalendar_qa[".inlineEditFields"][] = "title";
$tdatacalendar_qa[".inlineEditFields"][] = "content";
$tdatacalendar_qa[".inlineEditFields"][] = "category";
$tdatacalendar_qa[".inlineEditFields"][] = "date_start";
$tdatacalendar_qa[".inlineEditFields"][] = "date_end";

$tdatacalendar_qa[".exportFields"] = array();

$tdatacalendar_qa[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calendar";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
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
	
		
		
	$tdatacalendar_qa["id"] = $fdata;
//	branch_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "branch_id";
	$fdata["GoodName"] = "branch_id";
	$fdata["ownerTable"] = "calendar";
	$fdata["Label"] = "Branch Id"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "branch_id"; 
		$fdata["FullName"] = "branch_id";
	
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
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";
	
		
	$edata["LookupTable"] = "branch";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacalendar_qa["branch_id"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "calendar";
	$fdata["Label"] = "Title"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "title"; 
		$fdata["FullName"] = "title";
	
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=250";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacalendar_qa["title"] = $fdata;
//	content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "content";
	$fdata["GoodName"] = "content";
	$fdata["ownerTable"] = "calendar";
	$fdata["Label"] = "Detail"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "content"; 
		$fdata["FullName"] = "content";
	
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
	
		
		
	$tdatacalendar_qa["content"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "calendar";
	$fdata["Label"] = "Category"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "category"; 
		$fdata["FullName"] = "category";
	
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
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Exam (Private)";
	$edata["LookupValues"][] = "Exam (MOE)";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacalendar_qa["category"] = $fdata;
//	date_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date_start";
	$fdata["GoodName"] = "date_start";
	$fdata["ownerTable"] = "calendar";
	$fdata["Label"] = "Date Start"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "date_start"; 
		$fdata["FullName"] = "date_start";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
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
	
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacalendar_qa["date_start"] = $fdata;
//	date_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "date_end";
	$fdata["GoodName"] = "date_end";
	$fdata["ownerTable"] = "calendar";
	$fdata["Label"] = "Date End"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "date_end"; 
		$fdata["FullName"] = "date_end";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
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
	
		
		
	$tdatacalendar_qa["date_end"] = $fdata;
//	days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "days";
	$fdata["GoodName"] = "days";
	$fdata["ownerTable"] = "calendar";
	$fdata["Label"] = "Days"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "days"; 
		$fdata["FullName"] = "days";
	
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
	
		
		
	$tdatacalendar_qa["days"] = $fdata;

	
$tables_data["calendar_qa"]=&$tdatacalendar_qa;
$field_labels["calendar_qa"] = &$fieldLabelscalendar_qa;
$fieldToolTips["calendar_qa"] = &$fieldToolTipscalendar_qa;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calendar_qa"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["calendar_qa"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calendar_qa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  branch_id,  title,  content,  category,  date_start,  date_end,  days";
$proto0["m_strFrom"] = "FROM calendar";
$proto0["m_strWhere"] = "(category LIKE  '%exam%')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "category LIKE  '%exam%'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "calendar"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "LIKE  '%exam%'";
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
	"m_strTable" => "calendar"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "branch_id",
	"m_strTable" => "calendar"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "calendar"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "content",
	"m_strTable" => "calendar"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "calendar"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "date_start",
	"m_strTable" => "calendar"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "date_end",
	"m_strTable" => "calendar"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "days",
	"m_strTable" => "calendar"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "calendar";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "branch_id";
$proto22["m_columns"][] = "title";
$proto22["m_columns"][] = "content";
$proto22["m_columns"][] = "category";
$proto22["m_columns"][] = "date_start";
$proto22["m_columns"][] = "date_end";
$proto22["m_columns"][] = "days";
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
$queryData_calendar_qa = createSqlQuery_calendar_qa();
								$tdatacalendar_qa[".sqlquery"] = $queryData_calendar_qa;

include_once(getabspath("include/calendar_qa_events.php"));
$tableEvents["calendar_qa"] = new eventclass_calendar_qa;
$tdatacalendar_qa[".hasEvents"] = true;

$cipherer = new RunnerCipherer("calendar_qa");

?>