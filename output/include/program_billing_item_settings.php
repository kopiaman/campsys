<?php
require_once(getabspath("classes/cipherer.php"));
$tdataprogram_billing_item = array();
	$tdataprogram_billing_item[".NumberOfChars"] = 80; 
	$tdataprogram_billing_item[".ShortName"] = "program_billing_item";
	$tdataprogram_billing_item[".OwnerID"] = "";
	$tdataprogram_billing_item[".OriginalTable"] = "program_billing_item";

//	field labels
$fieldLabelsprogram_billing_item = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprogram_billing_item["English"] = array();
	$fieldToolTipsprogram_billing_item["English"] = array();
	$fieldLabelsprogram_billing_item["English"]["id"] = "Id";
	$fieldToolTipsprogram_billing_item["English"]["id"] = "";
	$fieldLabelsprogram_billing_item["English"]["program_billing_ID"] = "Program Billing ID";
	$fieldToolTipsprogram_billing_item["English"]["program_billing_ID"] = "";
	$fieldLabelsprogram_billing_item["English"]["item"] = "Item";
	$fieldToolTipsprogram_billing_item["English"]["item"] = "";
	$fieldLabelsprogram_billing_item["English"]["amount"] = "Invoice Amount";
	$fieldToolTipsprogram_billing_item["English"]["amount"] = "";
	$fieldLabelsprogram_billing_item["English"]["bill_date"] = "Invoice Date";
	$fieldToolTipsprogram_billing_item["English"]["bill_date"] = "";
	$fieldLabelsprogram_billing_item["English"]["bill_no"] = "Invoice No";
	$fieldToolTipsprogram_billing_item["English"]["bill_no"] = "";
	if (count($fieldToolTipsprogram_billing_item["English"]))
		$tdataprogram_billing_item[".isUseToolTips"] = true;
}
	
	
	$tdataprogram_billing_item[".NCSearch"] = true;



$tdataprogram_billing_item[".shortTableName"] = "program_billing_item";
$tdataprogram_billing_item[".nSecOptions"] = 0;
$tdataprogram_billing_item[".recsPerRowList"] = 1;
$tdataprogram_billing_item[".mainTableOwnerID"] = "";
$tdataprogram_billing_item[".moveNext"] = 1;
$tdataprogram_billing_item[".nType"] = 0;

$tdataprogram_billing_item[".strOriginalTableName"] = "program_billing_item";




$tdataprogram_billing_item[".showAddInPopup"] = false;

$tdataprogram_billing_item[".showEditInPopup"] = false;

$tdataprogram_billing_item[".showViewInPopup"] = false;

$tdataprogram_billing_item[".fieldsForRegister"] = array();

$tdataprogram_billing_item[".listAjax"] = false;

	$tdataprogram_billing_item[".audit"] = false;

	$tdataprogram_billing_item[".locking"] = false;

$tdataprogram_billing_item[".listIcons"] = true;
$tdataprogram_billing_item[".inlineAdd"] = true;



$tdataprogram_billing_item[".delete"] = true;

$tdataprogram_billing_item[".showSimpleSearchOptions"] = false;

$tdataprogram_billing_item[".showSearchPanel"] = true;

if (isMobile())
	$tdataprogram_billing_item[".isUseAjaxSuggest"] = false;
else 
	$tdataprogram_billing_item[".isUseAjaxSuggest"] = true;

$tdataprogram_billing_item[".rowHighlite"] = true;

// button handlers file names

$tdataprogram_billing_item[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprogram_billing_item[".isUseTimeForSearch"] = false;




$tdataprogram_billing_item[".allSearchFields"] = array();


$tdataprogram_billing_item[".googleLikeFields"][] = "id";
$tdataprogram_billing_item[".googleLikeFields"][] = "program_billing_ID";
$tdataprogram_billing_item[".googleLikeFields"][] = "item";
$tdataprogram_billing_item[".googleLikeFields"][] = "amount";
$tdataprogram_billing_item[".googleLikeFields"][] = "bill_date";
$tdataprogram_billing_item[".googleLikeFields"][] = "bill_no";



$tdataprogram_billing_item[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main


$tdataprogram_billing_item[".totalsFields"][] = array(
	"fName" => "amount", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdataprogram_billing_item[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprogram_billing_item[".strOrderBy"] = $tstrOrderBy;

$tdataprogram_billing_item[".orderindexes"] = array();

$tdataprogram_billing_item[".sqlHead"] = "SELECT id,   program_billing_ID,   item,   amount,   bill_date,   bill_no";
$tdataprogram_billing_item[".sqlFrom"] = "FROM program_billing_item";
$tdataprogram_billing_item[".sqlWhereExpr"] = "";
$tdataprogram_billing_item[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprogram_billing_item[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprogram_billing_item[".arrGroupsPerPage"] = $arrGPP;

$tableKeysprogram_billing_item = array();
$tableKeysprogram_billing_item[] = "id";
$tdataprogram_billing_item[".Keys"] = $tableKeysprogram_billing_item;

$tdataprogram_billing_item[".listFields"] = array();
$tdataprogram_billing_item[".listFields"][] = "item";
$tdataprogram_billing_item[".listFields"][] = "amount";
$tdataprogram_billing_item[".listFields"][] = "bill_date";
$tdataprogram_billing_item[".listFields"][] = "bill_no";

$tdataprogram_billing_item[".viewFields"] = array();

$tdataprogram_billing_item[".addFields"] = array();

$tdataprogram_billing_item[".inlineAddFields"] = array();
$tdataprogram_billing_item[".inlineAddFields"][] = "item";
$tdataprogram_billing_item[".inlineAddFields"][] = "amount";
$tdataprogram_billing_item[".inlineAddFields"][] = "bill_date";
$tdataprogram_billing_item[".inlineAddFields"][] = "bill_no";

$tdataprogram_billing_item[".editFields"] = array();

$tdataprogram_billing_item[".inlineEditFields"] = array();

$tdataprogram_billing_item[".exportFields"] = array();

$tdataprogram_billing_item[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "program_billing_item";
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
	
		
		
	$tdataprogram_billing_item["id"] = $fdata;
//	program_billing_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "program_billing_ID";
	$fdata["GoodName"] = "program_billing_ID";
	$fdata["ownerTable"] = "program_billing_item";
	$fdata["Label"] = "Program Billing ID"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "program_billing_ID"; 
		$fdata["FullName"] = "program_billing_ID";
	
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
	
		
		
	$tdataprogram_billing_item["program_billing_ID"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "program_billing_item";
	$fdata["Label"] = "Item"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		
		
		
		$fdata["strField"] = "item"; 
		$fdata["FullName"] = "item";
	
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
				$edata["LCType"] = 2;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "items";
	
		
	$edata["LookupTable"] = "setting_bill_item";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
			//	dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "amount";
	
	
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
	
		
		
	$tdataprogram_billing_item["item"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "program_billing_item";
	$fdata["Label"] = "Invoice Amount"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 1;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "amount";
	$edata["LinkFieldType"] = 5;
	$edata["DisplayField"] = "amount";
	
		
	$edata["LookupTable"] = "setting_bill_item";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "item"; 
	$edata["CategoryFilter"] = "id"; 
	
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
	
		
		
	$tdataprogram_billing_item["amount"] = $fdata;
//	bill_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "bill_date";
	$fdata["GoodName"] = "bill_date";
	$fdata["ownerTable"] = "program_billing_item";
	$fdata["Label"] = "Invoice Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		
		
		
		$fdata["strField"] = "bill_date"; 
		$fdata["FullName"] = "bill_date";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 4; 
	$edata["LastYearFactor"] = 0; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram_billing_item["bill_date"] = $fdata;
//	bill_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "bill_no";
	$fdata["GoodName"] = "bill_no";
	$fdata["ownerTable"] = "program_billing_item";
	$fdata["Label"] = "Invoice No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		
		
		
		$fdata["strField"] = "bill_no"; 
		$fdata["FullName"] = "bill_no";
	
		
		
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
	
		
		
	$tdataprogram_billing_item["bill_no"] = $fdata;

	
$tables_data["program_billing_item"]=&$tdataprogram_billing_item;
$field_labels["program_billing_item"] = &$fieldLabelsprogram_billing_item;
$fieldToolTips["program_billing_item"] = &$fieldToolTipsprogram_billing_item;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["program_billing_item"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["program_billing_item"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="program_billing";
	$masterParams["mDataSourceTable"]="program_billing";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "program_billing";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["program_billing_item"][$mIndex] = $masterParams;	
		$masterTablesData["program_billing_item"][$mIndex]["masterKeys"][]="id";
		$masterTablesData["program_billing_item"][$mIndex]["detailKeys"][]="program_billing_ID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_program_billing_item()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   program_billing_ID,   item,   amount,   bill_date,   bill_no";
$proto0["m_strFrom"] = "FROM program_billing_item";
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
	"m_strTable" => "program_billing_item"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "program_billing_ID",
	"m_strTable" => "program_billing_item"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "program_billing_item"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "program_billing_item"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "bill_date",
	"m_strTable" => "program_billing_item"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "bill_no",
	"m_strTable" => "program_billing_item"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "program_billing_item";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "program_billing_ID";
$proto18["m_columns"][] = "item";
$proto18["m_columns"][] = "amount";
$proto18["m_columns"][] = "bill_date";
$proto18["m_columns"][] = "bill_no";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_program_billing_item = createSqlQuery_program_billing_item();
						$tdataprogram_billing_item[".sqlquery"] = $queryData_program_billing_item;

include_once(getabspath("include/program_billing_item_events.php"));
$tableEvents["program_billing_item"] = new eventclass_program_billing_item;
$tdataprogram_billing_item[".hasEvents"] = true;

$cipherer = new RunnerCipherer("program_billing_item");

?>