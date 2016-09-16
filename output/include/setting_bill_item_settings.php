<?php
require_once(getabspath("classes/cipherer.php"));
$tdatasetting_bill_item = array();
	$tdatasetting_bill_item[".NumberOfChars"] = 80; 
	$tdatasetting_bill_item[".ShortName"] = "setting_bill_item";
	$tdatasetting_bill_item[".OwnerID"] = "";
	$tdatasetting_bill_item[".OriginalTable"] = "setting_bill_item";

//	field labels
$fieldLabelssetting_bill_item = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssetting_bill_item["English"] = array();
	$fieldToolTipssetting_bill_item["English"] = array();
	$fieldLabelssetting_bill_item["English"]["id"] = "Id";
	$fieldToolTipssetting_bill_item["English"]["id"] = "";
	$fieldLabelssetting_bill_item["English"]["items"] = "Items";
	$fieldToolTipssetting_bill_item["English"]["items"] = "";
	$fieldLabelssetting_bill_item["English"]["amount"] = "Default Fee";
	$fieldToolTipssetting_bill_item["English"]["amount"] = "";
	$fieldLabelssetting_bill_item["English"]["item"] = "Item";
	$fieldToolTipssetting_bill_item["English"]["item"] = "";
	if (count($fieldToolTipssetting_bill_item["English"]))
		$tdatasetting_bill_item[".isUseToolTips"] = true;
}
	
	
	$tdatasetting_bill_item[".NCSearch"] = true;



$tdatasetting_bill_item[".shortTableName"] = "setting_bill_item";
$tdatasetting_bill_item[".nSecOptions"] = 0;
$tdatasetting_bill_item[".recsPerRowList"] = 1;
$tdatasetting_bill_item[".mainTableOwnerID"] = "";
$tdatasetting_bill_item[".moveNext"] = 1;
$tdatasetting_bill_item[".nType"] = 0;

$tdatasetting_bill_item[".strOriginalTableName"] = "setting_bill_item";




$tdatasetting_bill_item[".showAddInPopup"] = false;

$tdatasetting_bill_item[".showEditInPopup"] = false;

$tdatasetting_bill_item[".showViewInPopup"] = false;

$tdatasetting_bill_item[".fieldsForRegister"] = array();
	
$tdatasetting_bill_item[".listAjax"] = false;

	$tdatasetting_bill_item[".audit"] = true;

	$tdatasetting_bill_item[".locking"] = false;

$tdatasetting_bill_item[".listIcons"] = true;
$tdatasetting_bill_item[".inlineEdit"] = true;
$tdatasetting_bill_item[".inlineAdd"] = true;



$tdatasetting_bill_item[".delete"] = true;

$tdatasetting_bill_item[".showSimpleSearchOptions"] = true;

$tdatasetting_bill_item[".showSearchPanel"] = true;

if (isMobile())
	$tdatasetting_bill_item[".isUseAjaxSuggest"] = false;
else 
	$tdatasetting_bill_item[".isUseAjaxSuggest"] = true;

$tdatasetting_bill_item[".rowHighlite"] = true;

// button handlers file names

$tdatasetting_bill_item[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasetting_bill_item[".isUseTimeForSearch"] = false;




$tdatasetting_bill_item[".allSearchFields"] = array();

$tdatasetting_bill_item[".allSearchFields"][] = "id";
$tdatasetting_bill_item[".allSearchFields"][] = "items";
$tdatasetting_bill_item[".allSearchFields"][] = "amount";

$tdatasetting_bill_item[".googleLikeFields"][] = "id";
$tdatasetting_bill_item[".googleLikeFields"][] = "items";
$tdatasetting_bill_item[".googleLikeFields"][] = "amount";


$tdatasetting_bill_item[".advSearchFields"][] = "id";
$tdatasetting_bill_item[".advSearchFields"][] = "items";
$tdatasetting_bill_item[".advSearchFields"][] = "amount";

$tdatasetting_bill_item[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatasetting_bill_item[".pageSize"] = 50;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasetting_bill_item[".strOrderBy"] = $tstrOrderBy;

$tdatasetting_bill_item[".orderindexes"] = array();

$tdatasetting_bill_item[".sqlHead"] = "SELECT id,   items,   amount";
$tdatasetting_bill_item[".sqlFrom"] = "FROM setting_bill_item";
$tdatasetting_bill_item[".sqlWhereExpr"] = "";
$tdatasetting_bill_item[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasetting_bill_item[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasetting_bill_item[".arrGroupsPerPage"] = $arrGPP;

$tableKeyssetting_bill_item = array();
$tableKeyssetting_bill_item[] = "id";
$tdatasetting_bill_item[".Keys"] = $tableKeyssetting_bill_item;

$tdatasetting_bill_item[".listFields"] = array();
$tdatasetting_bill_item[".listFields"][] = "items";
$tdatasetting_bill_item[".listFields"][] = "amount";

$tdatasetting_bill_item[".viewFields"] = array();

$tdatasetting_bill_item[".addFields"] = array();

$tdatasetting_bill_item[".inlineAddFields"] = array();
$tdatasetting_bill_item[".inlineAddFields"][] = "items";
$tdatasetting_bill_item[".inlineAddFields"][] = "amount";

$tdatasetting_bill_item[".editFields"] = array();

$tdatasetting_bill_item[".inlineEditFields"] = array();
$tdatasetting_bill_item[".inlineEditFields"][] = "items";
$tdatasetting_bill_item[".inlineEditFields"][] = "amount";

$tdatasetting_bill_item[".exportFields"] = array();

$tdatasetting_bill_item[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "setting_bill_item";
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
	
		
		
	$tdatasetting_bill_item["id"] = $fdata;
//	items
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "items";
	$fdata["GoodName"] = "items";
	$fdata["ownerTable"] = "setting_bill_item";
	$fdata["Label"] = "Items"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "items"; 
		$fdata["FullName"] = "items";
	
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
			$edata["EditParams"].= " maxlength=100";
	
		$edata["inputStyle"] = " width:450px;";
	$edata["controlWidth"] = 450;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasetting_bill_item["items"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "setting_bill_item";
	$fdata["Label"] = "Default Fee"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "amount"; 
		$fdata["FullName"] = "amount";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
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
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasetting_bill_item["amount"] = $fdata;

	
$tables_data["setting_bill_item"]=&$tdatasetting_bill_item;
$field_labels["setting_bill_item"] = &$fieldLabelssetting_bill_item;
$fieldToolTips["setting_bill_item"] = &$fieldToolTipssetting_bill_item;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["setting_bill_item"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["setting_bill_item"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_setting_bill_item()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   items,   amount";
$proto0["m_strFrom"] = "FROM setting_bill_item";
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
	"m_strTable" => "setting_bill_item"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "items",
	"m_strTable" => "setting_bill_item"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "setting_bill_item"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "setting_bill_item";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "items";
$proto12["m_columns"][] = "amount";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_setting_bill_item = createSqlQuery_setting_bill_item();
			$tdatasetting_bill_item[".sqlquery"] = $queryData_setting_bill_item;

$tableEvents["setting_bill_item"] = new eventsBase;
$tdatasetting_bill_item[".hasEvents"] = false;

$cipherer = new RunnerCipherer("setting_bill_item");

?>