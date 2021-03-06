<?php
require_once(getabspath("classes/cipherer.php"));
$tdatagroup = array();
	$tdatagroup[".NumberOfChars"] = 80; 
	$tdatagroup[".ShortName"] = "group";
	$tdatagroup[".OwnerID"] = "";
	$tdatagroup[".OriginalTable"] = "group";

//	field labels
$fieldLabelsgroup = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup["English"] = array();
	$fieldToolTipsgroup["English"] = array();
	$fieldLabelsgroup["English"]["id"] = "Id";
	$fieldToolTipsgroup["English"]["id"] = "";
	$fieldLabelsgroup["English"]["group"] = "Group Name";
	$fieldToolTipsgroup["English"]["group"] = "";
	$fieldLabelsgroup["English"]["Class"] = "Class";
	$fieldToolTipsgroup["English"]["Class"] = "";
	$fieldLabelsgroup["English"]["class"] = "Class";
	$fieldToolTipsgroup["English"]["class"] = "";
	if (count($fieldToolTipsgroup["English"]))
		$tdatagroup[".isUseToolTips"] = true;
}
	
	
	$tdatagroup[".NCSearch"] = true;



$tdatagroup[".shortTableName"] = "group";
$tdatagroup[".nSecOptions"] = 0;
$tdatagroup[".recsPerRowList"] = 1;
$tdatagroup[".mainTableOwnerID"] = "";
$tdatagroup[".moveNext"] = 1;
$tdatagroup[".nType"] = 0;

$tdatagroup[".strOriginalTableName"] = "group";




$tdatagroup[".showAddInPopup"] = false;

$tdatagroup[".showEditInPopup"] = false;

$tdatagroup[".showViewInPopup"] = false;

$tdatagroup[".fieldsForRegister"] = array();
	
$tdatagroup[".listAjax"] = false;

	$tdatagroup[".audit"] = true;

	$tdatagroup[".locking"] = false;

$tdatagroup[".listIcons"] = true;
$tdatagroup[".inlineEdit"] = true;
$tdatagroup[".inlineAdd"] = true;



$tdatagroup[".delete"] = true;

$tdatagroup[".showSimpleSearchOptions"] = true;

$tdatagroup[".showSearchPanel"] = true;

if (isMobile())
	$tdatagroup[".isUseAjaxSuggest"] = false;
else 
	$tdatagroup[".isUseAjaxSuggest"] = true;

$tdatagroup[".rowHighlite"] = true;

// button handlers file names

$tdatagroup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup[".isUseTimeForSearch"] = false;




$tdatagroup[".allSearchFields"] = array();

$tdatagroup[".allSearchFields"][] = "id";
$tdatagroup[".allSearchFields"][] = "group";

$tdatagroup[".googleLikeFields"][] = "group";


$tdatagroup[".advSearchFields"][] = "group";

$tdatagroup[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatagroup[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup[".strOrderBy"] = $tstrOrderBy;

$tdatagroup[".orderindexes"] = array();

$tdatagroup[".sqlHead"] = "SELECT id,   `group`";
$tdatagroup[".sqlFrom"] = "FROM `group`";
$tdatagroup[".sqlWhereExpr"] = "";
$tdatagroup[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup[".arrGroupsPerPage"] = $arrGPP;

$tableKeysgroup = array();
$tableKeysgroup[] = "id";
$tdatagroup[".Keys"] = $tableKeysgroup;

$tdatagroup[".listFields"] = array();
$tdatagroup[".listFields"][] = "group";

$tdatagroup[".viewFields"] = array();

$tdatagroup[".addFields"] = array();

$tdatagroup[".inlineAddFields"] = array();
$tdatagroup[".inlineAddFields"][] = "group";

$tdatagroup[".editFields"] = array();

$tdatagroup[".inlineEditFields"] = array();
$tdatagroup[".inlineEditFields"][] = "group";

$tdatagroup[".exportFields"] = array();

$tdatagroup[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
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
	
		
		
	$tdatagroup["id"] = $fdata;
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = "Group Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "group"; 
		$fdata["FullName"] = "`group`";
	
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatagroup["group"] = $fdata;

	
$tables_data["group"]=&$tdatagroup;
$field_labels["group"] = &$fieldLabelsgroup;
$fieldToolTips["group"] = &$fieldToolTipsgroup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["group"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_group()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   `group`";
$proto0["m_strFrom"] = "FROM `group`";
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
	"m_strTable" => "group"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "group"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "group";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "group";
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
$queryData_group = createSqlQuery_group();
		$tdatagroup[".sqlquery"] = $queryData_group;

$tableEvents["group"] = new eventsBase;
$tdatagroup[".hasEvents"] = false;

$cipherer = new RunnerCipherer("group");

?>