<?php
require_once(getabspath("classes/cipherer.php"));
$tdataq_assessor = array();
	$tdataq_assessor[".NumberOfChars"] = 80; 
	$tdataq_assessor[".ShortName"] = "q_assessor";
	$tdataq_assessor[".OwnerID"] = "";
	$tdataq_assessor[".OriginalTable"] = "q_assessor";

//	field labels
$fieldLabelsq_assessor = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsq_assessor["English"] = array();
	$fieldToolTipsq_assessor["English"] = array();
	$fieldLabelsq_assessor["English"]["id"] = "Id";
	$fieldToolTipsq_assessor["English"]["id"] = "";
	$fieldLabelsq_assessor["English"]["name"] = "Name";
	$fieldToolTipsq_assessor["English"]["name"] = "";
	$fieldLabelsq_assessor["English"]["ext"] = "Ext";
	$fieldToolTipsq_assessor["English"]["ext"] = "";
	$fieldLabelsq_assessor["English"]["email"] = "Email";
	$fieldToolTipsq_assessor["English"]["email"] = "";
	$fieldLabelsq_assessor["English"]["remark"] = "Remark";
	$fieldToolTipsq_assessor["English"]["remark"] = "";
	if (count($fieldToolTipsq_assessor["English"]))
		$tdataq_assessor[".isUseToolTips"] = true;
}
	
	
	$tdataq_assessor[".NCSearch"] = true;



$tdataq_assessor[".shortTableName"] = "q_assessor";
$tdataq_assessor[".nSecOptions"] = 0;
$tdataq_assessor[".recsPerRowList"] = 1;
$tdataq_assessor[".mainTableOwnerID"] = "";
$tdataq_assessor[".moveNext"] = 1;
$tdataq_assessor[".nType"] = 0;

$tdataq_assessor[".strOriginalTableName"] = "q_assessor";




$tdataq_assessor[".showAddInPopup"] = false;

$tdataq_assessor[".showEditInPopup"] = false;

$tdataq_assessor[".showViewInPopup"] = false;

$tdataq_assessor[".fieldsForRegister"] = array();

$tdataq_assessor[".listAjax"] = false;

	$tdataq_assessor[".audit"] = false;

	$tdataq_assessor[".locking"] = false;

$tdataq_assessor[".listIcons"] = true;
$tdataq_assessor[".inlineEdit"] = true;
$tdataq_assessor[".inlineAdd"] = true;



$tdataq_assessor[".delete"] = true;

$tdataq_assessor[".showSimpleSearchOptions"] = false;

$tdataq_assessor[".showSearchPanel"] = true;

if (isMobile())
	$tdataq_assessor[".isUseAjaxSuggest"] = false;
else 
	$tdataq_assessor[".isUseAjaxSuggest"] = true;

$tdataq_assessor[".rowHighlite"] = true;

// button handlers file names

$tdataq_assessor[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_assessor[".isUseTimeForSearch"] = false;




$tdataq_assessor[".allSearchFields"] = array();

$tdataq_assessor[".allSearchFields"][] = "id";
$tdataq_assessor[".allSearchFields"][] = "name";
$tdataq_assessor[".allSearchFields"][] = "ext";
$tdataq_assessor[".allSearchFields"][] = "email";
$tdataq_assessor[".allSearchFields"][] = "remark";

$tdataq_assessor[".googleLikeFields"][] = "id";
$tdataq_assessor[".googleLikeFields"][] = "name";
$tdataq_assessor[".googleLikeFields"][] = "ext";
$tdataq_assessor[".googleLikeFields"][] = "email";
$tdataq_assessor[".googleLikeFields"][] = "remark";


$tdataq_assessor[".advSearchFields"][] = "name";
$tdataq_assessor[".advSearchFields"][] = "ext";
$tdataq_assessor[".advSearchFields"][] = "email";
$tdataq_assessor[".advSearchFields"][] = "remark";

$tdataq_assessor[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataq_assessor[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_assessor[".strOrderBy"] = $tstrOrderBy;

$tdataq_assessor[".orderindexes"] = array();

$tdataq_assessor[".sqlHead"] = "SELECT id,   name,   ext,   email,   remark";
$tdataq_assessor[".sqlFrom"] = "FROM q_assessor";
$tdataq_assessor[".sqlWhereExpr"] = "";
$tdataq_assessor[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_assessor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_assessor[".arrGroupsPerPage"] = $arrGPP;

$tableKeysq_assessor = array();
$tableKeysq_assessor[] = "id";
$tdataq_assessor[".Keys"] = $tableKeysq_assessor;

$tdataq_assessor[".listFields"] = array();
$tdataq_assessor[".listFields"][] = "name";
$tdataq_assessor[".listFields"][] = "ext";
$tdataq_assessor[".listFields"][] = "email";
$tdataq_assessor[".listFields"][] = "remark";

$tdataq_assessor[".viewFields"] = array();

$tdataq_assessor[".addFields"] = array();

$tdataq_assessor[".inlineAddFields"] = array();
$tdataq_assessor[".inlineAddFields"][] = "name";
$tdataq_assessor[".inlineAddFields"][] = "ext";
$tdataq_assessor[".inlineAddFields"][] = "email";
$tdataq_assessor[".inlineAddFields"][] = "remark";

$tdataq_assessor[".editFields"] = array();

$tdataq_assessor[".inlineEditFields"] = array();
$tdataq_assessor[".inlineEditFields"][] = "name";
$tdataq_assessor[".inlineEditFields"][] = "ext";
$tdataq_assessor[".inlineEditFields"][] = "email";
$tdataq_assessor[".inlineEditFields"][] = "remark";

$tdataq_assessor[".exportFields"] = array();

$tdataq_assessor[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "q_assessor";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
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
	
		
		
	$tdataq_assessor["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "q_assessor";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "name"; 
		$fdata["FullName"] = "name";
	
		
		
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
	
		
		
	$tdataq_assessor["name"] = $fdata;
//	ext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ext";
	$fdata["GoodName"] = "ext";
	$fdata["ownerTable"] = "q_assessor";
	$fdata["Label"] = "Ext"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ext"; 
		$fdata["FullName"] = "ext";
	
		
		
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
	
		
		
	$tdataq_assessor["ext"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "q_assessor";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "email"; 
		$fdata["FullName"] = "email";
	
		
		
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
	
		
		
	$tdataq_assessor["email"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "q_assessor";
	$fdata["Label"] = "Remark"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "remark"; 
		$fdata["FullName"] = "remark";
	
		
		
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
	
		
		
	$tdataq_assessor["remark"] = $fdata;

	
$tables_data["q_assessor"]=&$tdataq_assessor;
$field_labels["q_assessor"] = &$fieldLabelsq_assessor;
$fieldToolTips["q_assessor"] = &$fieldToolTipsq_assessor;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_assessor"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["q_assessor"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_assessor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   name,   ext,   email,   remark";
$proto0["m_strFrom"] = "FROM q_assessor";
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
	"m_strTable" => "q_assessor"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "q_assessor"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ext",
	"m_strTable" => "q_assessor"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "q_assessor"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "q_assessor"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "q_assessor";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id";
$proto16["m_columns"][] = "name";
$proto16["m_columns"][] = "ext";
$proto16["m_columns"][] = "email";
$proto16["m_columns"][] = "remark";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = "0";
$proto17["m_inBrackets"] = "0";
$proto17["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_assessor = createSqlQuery_q_assessor();
					$tdataq_assessor[".sqlquery"] = $queryData_q_assessor;

$tableEvents["q_assessor"] = new eventsBase;
$tdataq_assessor[".hasEvents"] = false;

$cipherer = new RunnerCipherer("q_assessor");

?>