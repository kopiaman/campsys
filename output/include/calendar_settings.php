<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacalendar = array();
	$tdatacalendar[".NumberOfChars"] = 80; 
	$tdatacalendar[".ShortName"] = "calendar";
	$tdatacalendar[".OwnerID"] = "";
	$tdatacalendar[".OriginalTable"] = "calendar";

//	field labels
$fieldLabelscalendar = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalendar["English"] = array();
	$fieldToolTipscalendar["English"] = array();
	$fieldLabelscalendar["English"]["id"] = "Id";
	$fieldToolTipscalendar["English"]["id"] = "";
	$fieldLabelscalendar["English"]["branch_id"] = "Branch Id";
	$fieldToolTipscalendar["English"]["branch_id"] = "";
	$fieldLabelscalendar["English"]["title"] = "Title";
	$fieldToolTipscalendar["English"]["title"] = "";
	$fieldLabelscalendar["English"]["content"] = "Detail";
	$fieldToolTipscalendar["English"]["content"] = "";
	$fieldLabelscalendar["English"]["category"] = "Category";
	$fieldToolTipscalendar["English"]["category"] = "";
	$fieldLabelscalendar["English"]["date_start"] = "Date Start";
	$fieldToolTipscalendar["English"]["date_start"] = "";
	$fieldLabelscalendar["English"]["date_end"] = "Date End";
	$fieldToolTipscalendar["English"]["date_end"] = "";
	$fieldLabelscalendar["English"]["days"] = "Days";
	$fieldToolTipscalendar["English"]["days"] = "";
	if (count($fieldToolTipscalendar["English"]))
		$tdatacalendar[".isUseToolTips"] = true;
}
	
	
	$tdatacalendar[".NCSearch"] = true;



$tdatacalendar[".shortTableName"] = "calendar";
$tdatacalendar[".nSecOptions"] = 0;
$tdatacalendar[".recsPerRowList"] = 1;
$tdatacalendar[".mainTableOwnerID"] = "";
$tdatacalendar[".moveNext"] = 1;
$tdatacalendar[".nType"] = 0;

$tdatacalendar[".strOriginalTableName"] = "calendar";




$tdatacalendar[".showAddInPopup"] = false;

$tdatacalendar[".showEditInPopup"] = false;

$tdatacalendar[".showViewInPopup"] = false;

$tdatacalendar[".fieldsForRegister"] = array();
	
$tdatacalendar[".listAjax"] = false;

	$tdatacalendar[".audit"] = true;

	$tdatacalendar[".locking"] = false;

$tdatacalendar[".listIcons"] = true;
$tdatacalendar[".inlineEdit"] = true;
$tdatacalendar[".inlineAdd"] = true;



$tdatacalendar[".delete"] = true;

$tdatacalendar[".showSimpleSearchOptions"] = true;

$tdatacalendar[".showSearchPanel"] = true;

if (isMobile())
	$tdatacalendar[".isUseAjaxSuggest"] = false;
else 
	$tdatacalendar[".isUseAjaxSuggest"] = true;

$tdatacalendar[".rowHighlite"] = true;

// button handlers file names
$tdatacalendar[".isUsebuttonHandlers"] = true;

$tdatacalendar[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalendar[".isUseTimeForSearch"] = false;




$tdatacalendar[".allSearchFields"] = array();

$tdatacalendar[".allSearchFields"][] = "title";
$tdatacalendar[".allSearchFields"][] = "content";
$tdatacalendar[".allSearchFields"][] = "category";
$tdatacalendar[".allSearchFields"][] = "date_start";

$tdatacalendar[".googleLikeFields"][] = "id";
$tdatacalendar[".googleLikeFields"][] = "branch_id";
$tdatacalendar[".googleLikeFields"][] = "title";
$tdatacalendar[".googleLikeFields"][] = "content";
$tdatacalendar[".googleLikeFields"][] = "category";
$tdatacalendar[".googleLikeFields"][] = "date_start";
$tdatacalendar[".googleLikeFields"][] = "date_end";
$tdatacalendar[".googleLikeFields"][] = "days";


$tdatacalendar[".advSearchFields"][] = "title";
$tdatacalendar[".advSearchFields"][] = "content";
$tdatacalendar[".advSearchFields"][] = "category";
$tdatacalendar[".advSearchFields"][] = "date_start";

$tdatacalendar[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacalendar[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalendar[".strOrderBy"] = $tstrOrderBy;

$tdatacalendar[".orderindexes"] = array();

$tdatacalendar[".sqlHead"] = "SELECT id,   branch_id,   title,   content,   category,   date_start,   date_end,   days";
$tdatacalendar[".sqlFrom"] = "FROM calendar";
$tdatacalendar[".sqlWhereExpr"] = "";
$tdatacalendar[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalendar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalendar[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscalendar = array();
$tableKeyscalendar[] = "id";
$tdatacalendar[".Keys"] = $tableKeyscalendar;

$tdatacalendar[".listFields"] = array();
$tdatacalendar[".listFields"][] = "title";
$tdatacalendar[".listFields"][] = "content";
$tdatacalendar[".listFields"][] = "category";
$tdatacalendar[".listFields"][] = "date_start";
$tdatacalendar[".listFields"][] = "date_end";

$tdatacalendar[".viewFields"] = array();

$tdatacalendar[".addFields"] = array();

$tdatacalendar[".inlineAddFields"] = array();
$tdatacalendar[".inlineAddFields"][] = "title";
$tdatacalendar[".inlineAddFields"][] = "content";
$tdatacalendar[".inlineAddFields"][] = "category";
$tdatacalendar[".inlineAddFields"][] = "date_start";
$tdatacalendar[".inlineAddFields"][] = "date_end";

$tdatacalendar[".editFields"] = array();

$tdatacalendar[".inlineEditFields"] = array();
$tdatacalendar[".inlineEditFields"][] = "title";
$tdatacalendar[".inlineEditFields"][] = "content";
$tdatacalendar[".inlineEditFields"][] = "category";
$tdatacalendar[".inlineEditFields"][] = "date_start";
$tdatacalendar[".inlineEditFields"][] = "date_end";

$tdatacalendar[".exportFields"] = array();

$tdatacalendar[".printFields"] = array();

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
	
		
		
	$tdatacalendar["id"] = $fdata;
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
	
		
		
	$tdatacalendar["branch_id"] = $fdata;
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
	
		
		
	$tdatacalendar["title"] = $fdata;
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
	
		
		
	$tdatacalendar["content"] = $fdata;
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
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "class=22";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacalendar["category"] = $fdata;
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
	
		
		
	$tdatacalendar["date_start"] = $fdata;
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
	
		
		
	$tdatacalendar["date_end"] = $fdata;
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
	
		
		
	$tdatacalendar["days"] = $fdata;

	
$tables_data["calendar"]=&$tdatacalendar;
$field_labels["calendar"] = &$fieldLabelscalendar;
$fieldToolTips["calendar"] = &$fieldToolTipscalendar;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calendar"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["calendar"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calendar()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   branch_id,   title,   content,   category,   date_start,   date_end,   days";
$proto0["m_strFrom"] = "FROM calendar";
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
$queryData_calendar = createSqlQuery_calendar();
								$tdatacalendar[".sqlquery"] = $queryData_calendar;

include_once(getabspath("include/calendar_events.php"));
$tableEvents["calendar"] = new eventclass_calendar;
$tdatacalendar[".hasEvents"] = true;

$cipherer = new RunnerCipherer("calendar");

?>