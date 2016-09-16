<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacountries = array();
	$tdatacountries[".NumberOfChars"] = 80; 
	$tdatacountries[".ShortName"] = "countries";
	$tdatacountries[".OwnerID"] = "";
	$tdatacountries[".OriginalTable"] = "countries";

//	field labels
$fieldLabelscountries = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscountries["English"] = array();
	$fieldToolTipscountries["English"] = array();
	$fieldLabelscountries["English"]["ccode"] = "Ccode";
	$fieldToolTipscountries["English"]["ccode"] = "";
	$fieldLabelscountries["English"]["country"] = "Country";
	$fieldToolTipscountries["English"]["country"] = "";
	$fieldLabelscountries["English"]["Nationality"] = "Nationality";
	$fieldToolTipscountries["English"]["Nationality"] = "";
	$fieldLabelscountries["English"]["Country"] = "Country";
	$fieldToolTipscountries["English"]["Country"] = "";
	if (count($fieldToolTipscountries["English"]))
		$tdatacountries[".isUseToolTips"] = true;
}
	
	
	$tdatacountries[".NCSearch"] = true;



$tdatacountries[".shortTableName"] = "countries";
$tdatacountries[".nSecOptions"] = 0;
$tdatacountries[".recsPerRowList"] = 1;
$tdatacountries[".mainTableOwnerID"] = "";
$tdatacountries[".moveNext"] = 1;
$tdatacountries[".nType"] = 0;

$tdatacountries[".strOriginalTableName"] = "countries";




$tdatacountries[".showAddInPopup"] = false;

$tdatacountries[".showEditInPopup"] = false;

$tdatacountries[".showViewInPopup"] = false;

$tdatacountries[".fieldsForRegister"] = array();

$tdatacountries[".listAjax"] = false;

	$tdatacountries[".audit"] = false;

	$tdatacountries[".locking"] = false;

$tdatacountries[".listIcons"] = true;




$tdatacountries[".showSimpleSearchOptions"] = false;

$tdatacountries[".showSearchPanel"] = true;

if (isMobile())
	$tdatacountries[".isUseAjaxSuggest"] = false;
else 
	$tdatacountries[".isUseAjaxSuggest"] = true;

$tdatacountries[".rowHighlite"] = true;

// button handlers file names

$tdatacountries[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacountries[".isUseTimeForSearch"] = false;




$tdatacountries[".allSearchFields"] = array();

$tdatacountries[".allSearchFields"][] = "ccode";
$tdatacountries[".allSearchFields"][] = "country";

$tdatacountries[".googleLikeFields"][] = "ccode";
$tdatacountries[".googleLikeFields"][] = "country";


$tdatacountries[".advSearchFields"][] = "ccode";
$tdatacountries[".advSearchFields"][] = "country";

$tdatacountries[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacountries[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacountries[".strOrderBy"] = $tstrOrderBy;

$tdatacountries[".orderindexes"] = array();

$tdatacountries[".sqlHead"] = "SELECT ccode,   country";
$tdatacountries[".sqlFrom"] = "FROM countries";
$tdatacountries[".sqlWhereExpr"] = "";
$tdatacountries[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacountries[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacountries[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscountries = array();
$tableKeyscountries[] = "ccode";
$tdatacountries[".Keys"] = $tableKeyscountries;

$tdatacountries[".listFields"] = array();
$tdatacountries[".listFields"][] = "ccode";
$tdatacountries[".listFields"][] = "country";

$tdatacountries[".viewFields"] = array();
$tdatacountries[".viewFields"][] = "ccode";
$tdatacountries[".viewFields"][] = "country";

$tdatacountries[".addFields"] = array();
$tdatacountries[".addFields"][] = "ccode";
$tdatacountries[".addFields"][] = "country";

$tdatacountries[".inlineAddFields"] = array();
$tdatacountries[".inlineAddFields"][] = "ccode";
$tdatacountries[".inlineAddFields"][] = "country";

$tdatacountries[".editFields"] = array();
$tdatacountries[".editFields"][] = "ccode";
$tdatacountries[".editFields"][] = "country";

$tdatacountries[".inlineEditFields"] = array();
$tdatacountries[".inlineEditFields"][] = "ccode";
$tdatacountries[".inlineEditFields"][] = "country";

$tdatacountries[".exportFields"] = array();
$tdatacountries[".exportFields"][] = "ccode";
$tdatacountries[".exportFields"][] = "country";

$tdatacountries[".printFields"] = array();
$tdatacountries[".printFields"][] = "ccode";
$tdatacountries[".printFields"][] = "country";

//	ccode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ccode";
	$fdata["GoodName"] = "ccode";
	$fdata["ownerTable"] = "countries";
	$fdata["Label"] = "Ccode"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ccode"; 
		$fdata["FullName"] = "ccode";
	
		
		
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
			$edata["EditParams"].= " maxlength=2";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacountries["ccode"] = $fdata;
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "countries";
	$fdata["Label"] = "Country"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "country"; 
		$fdata["FullName"] = "country";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacountries["country"] = $fdata;

	
$tables_data["countries"]=&$tdatacountries;
$field_labels["countries"] = &$fieldLabelscountries;
$fieldToolTips["countries"] = &$fieldToolTipscountries;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["countries"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["countries"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_countries()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ccode,   country";
$proto0["m_strFrom"] = "FROM countries";
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
	"m_strName" => "ccode",
	"m_strTable" => "countries"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "countries"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "countries";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "ccode";
$proto10["m_columns"][] = "country";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_countries = createSqlQuery_countries();
		$tdatacountries[".sqlquery"] = $queryData_countries;

$tableEvents["countries"] = new eventsBase;
$tdatacountries[".hasEvents"] = false;

$cipherer = new RunnerCipherer("countries");

?>