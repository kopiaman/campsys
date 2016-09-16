<?php
require_once(getabspath("classes/cipherer.php"));
$tdatabranch_program = array();
	$tdatabranch_program[".NumberOfChars"] = 80; 
	$tdatabranch_program[".ShortName"] = "branch_program";
	$tdatabranch_program[".OwnerID"] = "";
	$tdatabranch_program[".OriginalTable"] = "branch_program";

//	field labels
$fieldLabelsbranch_program = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbranch_program["English"] = array();
	$fieldToolTipsbranch_program["English"] = array();
	$fieldLabelsbranch_program["English"]["id"] = "Id";
	$fieldToolTipsbranch_program["English"]["id"] = "";
	$fieldLabelsbranch_program["English"]["branch_id"] = "Branch Id";
	$fieldToolTipsbranch_program["English"]["branch_id"] = "";
	$fieldLabelsbranch_program["English"]["program_id"] = "Program Id";
	$fieldToolTipsbranch_program["English"]["program_id"] = "";
	if (count($fieldToolTipsbranch_program["English"]))
		$tdatabranch_program[".isUseToolTips"] = true;
}
	
	
	$tdatabranch_program[".NCSearch"] = true;



$tdatabranch_program[".shortTableName"] = "branch_program";
$tdatabranch_program[".nSecOptions"] = 0;
$tdatabranch_program[".recsPerRowList"] = 1;
$tdatabranch_program[".mainTableOwnerID"] = "";
$tdatabranch_program[".moveNext"] = 1;
$tdatabranch_program[".nType"] = 0;

$tdatabranch_program[".strOriginalTableName"] = "branch_program";




$tdatabranch_program[".showAddInPopup"] = false;

$tdatabranch_program[".showEditInPopup"] = false;

$tdatabranch_program[".showViewInPopup"] = true;

$tdatabranch_program[".fieldsForRegister"] = array();

$tdatabranch_program[".listAjax"] = false;

	$tdatabranch_program[".audit"] = false;

	$tdatabranch_program[".locking"] = false;

$tdatabranch_program[".listIcons"] = true;
$tdatabranch_program[".inlineEdit"] = true;
$tdatabranch_program[".inlineAdd"] = true;



$tdatabranch_program[".delete"] = true;

$tdatabranch_program[".showSimpleSearchOptions"] = false;

$tdatabranch_program[".showSearchPanel"] = true;

if (isMobile())
	$tdatabranch_program[".isUseAjaxSuggest"] = false;
else 
	$tdatabranch_program[".isUseAjaxSuggest"] = true;

$tdatabranch_program[".rowHighlite"] = true;

// button handlers file names

$tdatabranch_program[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabranch_program[".isUseTimeForSearch"] = false;




$tdatabranch_program[".allSearchFields"] = array();

$tdatabranch_program[".allSearchFields"][] = "branch_id";
$tdatabranch_program[".allSearchFields"][] = "program_id";

$tdatabranch_program[".googleLikeFields"][] = "id";
$tdatabranch_program[".googleLikeFields"][] = "branch_id";
$tdatabranch_program[".googleLikeFields"][] = "program_id";


$tdatabranch_program[".advSearchFields"][] = "id";
$tdatabranch_program[".advSearchFields"][] = "branch_id";
$tdatabranch_program[".advSearchFields"][] = "program_id";

$tdatabranch_program[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatabranch_program[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabranch_program[".strOrderBy"] = $tstrOrderBy;

$tdatabranch_program[".orderindexes"] = array();

$tdatabranch_program[".sqlHead"] = "SELECT id,   branch_id,   program_id";
$tdatabranch_program[".sqlFrom"] = "FROM branch_program";
$tdatabranch_program[".sqlWhereExpr"] = "";
$tdatabranch_program[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabranch_program[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabranch_program[".arrGroupsPerPage"] = $arrGPP;

$tableKeysbranch_program = array();
$tableKeysbranch_program[] = "id";
$tdatabranch_program[".Keys"] = $tableKeysbranch_program;

$tdatabranch_program[".listFields"] = array();
$tdatabranch_program[".listFields"][] = "branch_id";
$tdatabranch_program[".listFields"][] = "program_id";

$tdatabranch_program[".viewFields"] = array();

$tdatabranch_program[".addFields"] = array();

$tdatabranch_program[".inlineAddFields"] = array();
$tdatabranch_program[".inlineAddFields"][] = "branch_id";
$tdatabranch_program[".inlineAddFields"][] = "program_id";

$tdatabranch_program[".editFields"] = array();

$tdatabranch_program[".inlineEditFields"] = array();
$tdatabranch_program[".inlineEditFields"][] = "branch_id";
$tdatabranch_program[".inlineEditFields"][] = "program_id";

$tdatabranch_program[".exportFields"] = array();

$tdatabranch_program[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "branch_program";
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
	
		
		
	$tdatabranch_program["id"] = $fdata;
//	branch_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "branch_id";
	$fdata["GoodName"] = "branch_id";
	$fdata["ownerTable"] = "branch_program";
	$fdata["Label"] = "Branch Id"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "branch_id"; 
		$fdata["FullName"] = "branch_id";
	
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
	
		
		
	$tdatabranch_program["branch_id"] = $fdata;
//	program_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "program_id";
	$fdata["GoodName"] = "program_id";
	$fdata["ownerTable"] = "branch_program";
	$fdata["Label"] = "Program Id"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "program_id"; 
		$fdata["FullName"] = "program_id";
	
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
			
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "program";
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
	
		
		
	$tdatabranch_program["program_id"] = $fdata;

	
$tables_data["branch_program"]=&$tdatabranch_program;
$field_labels["branch_program"] = &$fieldLabelsbranch_program;
$fieldToolTips["branch_program"] = &$fieldToolTipsbranch_program;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["branch_program"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["branch_program"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_branch_program()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   branch_id,   program_id";
$proto0["m_strFrom"] = "FROM branch_program";
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
	"m_strTable" => "branch_program"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "branch_id",
	"m_strTable" => "branch_program"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "program_id",
	"m_strTable" => "branch_program"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "branch_program";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "branch_id";
$proto12["m_columns"][] = "program_id";
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
$queryData_branch_program = createSqlQuery_branch_program();
			$tdatabranch_program[".sqlquery"] = $queryData_branch_program;

$tableEvents["branch_program"] = new eventsBase;
$tdatabranch_program[".hasEvents"] = false;

$cipherer = new RunnerCipherer("branch_program");

?>