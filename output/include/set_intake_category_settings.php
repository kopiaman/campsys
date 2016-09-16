<?php
require_once(getabspath("classes/cipherer.php"));
$tdataset_intake_category = array();
	$tdataset_intake_category[".NumberOfChars"] = 80; 
	$tdataset_intake_category[".ShortName"] = "set_intake_category";
	$tdataset_intake_category[".OwnerID"] = "";
	$tdataset_intake_category[".OriginalTable"] = "set_intake_category";

//	field labels
$fieldLabelsset_intake_category = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsset_intake_category["English"] = array();
	$fieldToolTipsset_intake_category["English"] = array();
	$fieldLabelsset_intake_category["English"]["id"] = "Id";
	$fieldToolTipsset_intake_category["English"]["id"] = "";
	$fieldLabelsset_intake_category["English"]["Intake_Category"] = "Course Program Name";
	$fieldToolTipsset_intake_category["English"]["Intake_Category"] = "";
	$fieldLabelsset_intake_category["English"]["Intake_Code"] = "Code ( ie. PR)";
	$fieldToolTipsset_intake_category["English"]["Intake_Code"] = "";
	$fieldLabelsset_intake_category["English"]["program_course"] = "Program Course";
	$fieldToolTipsset_intake_category["English"]["program_course"] = "";
	if (count($fieldToolTipsset_intake_category["English"]))
		$tdataset_intake_category[".isUseToolTips"] = true;
}
	
	
	$tdataset_intake_category[".NCSearch"] = true;



$tdataset_intake_category[".shortTableName"] = "set_intake_category";
$tdataset_intake_category[".nSecOptions"] = 0;
$tdataset_intake_category[".recsPerRowList"] = 1;
$tdataset_intake_category[".mainTableOwnerID"] = "";
$tdataset_intake_category[".moveNext"] = 1;
$tdataset_intake_category[".nType"] = 0;

$tdataset_intake_category[".strOriginalTableName"] = "set_intake_category";




$tdataset_intake_category[".showAddInPopup"] = false;

$tdataset_intake_category[".showEditInPopup"] = false;

$tdataset_intake_category[".showViewInPopup"] = false;

$tdataset_intake_category[".fieldsForRegister"] = array();
	
$tdataset_intake_category[".listAjax"] = false;

	$tdataset_intake_category[".audit"] = true;

	$tdataset_intake_category[".locking"] = false;

$tdataset_intake_category[".listIcons"] = true;




$tdataset_intake_category[".showSimpleSearchOptions"] = true;

$tdataset_intake_category[".showSearchPanel"] = true;

if (isMobile())
	$tdataset_intake_category[".isUseAjaxSuggest"] = false;
else 
	$tdataset_intake_category[".isUseAjaxSuggest"] = true;

$tdataset_intake_category[".rowHighlite"] = true;

// button handlers file names

$tdataset_intake_category[".addPageEvents"] = false;

// use timepicker for search panel
$tdataset_intake_category[".isUseTimeForSearch"] = false;




$tdataset_intake_category[".allSearchFields"] = array();

$tdataset_intake_category[".allSearchFields"][] = "Intake_Category";
$tdataset_intake_category[".allSearchFields"][] = "Intake_Code";

$tdataset_intake_category[".googleLikeFields"][] = "id";
$tdataset_intake_category[".googleLikeFields"][] = "Intake_Category";
$tdataset_intake_category[".googleLikeFields"][] = "Intake_Code";


$tdataset_intake_category[".advSearchFields"][] = "Intake_Category";
$tdataset_intake_category[".advSearchFields"][] = "Intake_Code";

$tdataset_intake_category[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataset_intake_category[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataset_intake_category[".strOrderBy"] = $tstrOrderBy;

$tdataset_intake_category[".orderindexes"] = array();

$tdataset_intake_category[".sqlHead"] = "SELECT id,   Intake_Category,   Intake_Code";
$tdataset_intake_category[".sqlFrom"] = "FROM set_intake_category";
$tdataset_intake_category[".sqlWhereExpr"] = "";
$tdataset_intake_category[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_intake_category[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_intake_category[".arrGroupsPerPage"] = $arrGPP;

$tableKeysset_intake_category = array();
$tableKeysset_intake_category[] = "id";
$tdataset_intake_category[".Keys"] = $tableKeysset_intake_category;

$tdataset_intake_category[".listFields"] = array();
$tdataset_intake_category[".listFields"][] = "Intake_Category";
$tdataset_intake_category[".listFields"][] = "Intake_Code";

$tdataset_intake_category[".viewFields"] = array();

$tdataset_intake_category[".addFields"] = array();
$tdataset_intake_category[".addFields"][] = "Intake_Category";
$tdataset_intake_category[".addFields"][] = "Intake_Code";

$tdataset_intake_category[".inlineAddFields"] = array();

$tdataset_intake_category[".editFields"] = array();

$tdataset_intake_category[".inlineEditFields"] = array();

$tdataset_intake_category[".exportFields"] = array();

$tdataset_intake_category[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "set_intake_category";
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
	
		
		
	$tdataset_intake_category["id"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Intake_Category";
	$fdata["GoodName"] = "Intake_Category";
	$fdata["ownerTable"] = "set_intake_category";
	$fdata["Label"] = "Course Program Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Intake_Category"; 
		$fdata["FullName"] = "Intake_Category";
	
		
		
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
	
		
		
	$tdataset_intake_category["Intake_Category"] = $fdata;
//	Intake_Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Intake_Code";
	$fdata["GoodName"] = "Intake_Code";
	$fdata["ownerTable"] = "set_intake_category";
	$fdata["Label"] = "Code ( ie. PR)"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Intake_Code"; 
		$fdata["FullName"] = "Intake_Code";
	
		
		
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
	
		
		
	$tdataset_intake_category["Intake_Code"] = $fdata;

	
$tables_data["set_intake_category"]=&$tdataset_intake_category;
$field_labels["set_intake_category"] = &$fieldLabelsset_intake_category;
$fieldToolTips["set_intake_category"] = &$fieldToolTipsset_intake_category;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["set_intake_category"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["set_intake_category"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_set_intake_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   Intake_Category,   Intake_Code";
$proto0["m_strFrom"] = "FROM set_intake_category";
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
	"m_strTable" => "set_intake_category"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
	"m_strTable" => "set_intake_category"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Code",
	"m_strTable" => "set_intake_category"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "set_intake_category";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "Intake_Category";
$proto12["m_columns"][] = "Intake_Code";
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
$queryData_set_intake_category = createSqlQuery_set_intake_category();
			$tdataset_intake_category[".sqlquery"] = $queryData_set_intake_category;

$tableEvents["set_intake_category"] = new eventsBase;
$tdataset_intake_category[".hasEvents"] = false;

$cipherer = new RunnerCipherer("set_intake_category");

?>