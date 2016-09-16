<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatraining = array();
	$tdatatraining[".NumberOfChars"] = 80; 
	$tdatatraining[".ShortName"] = "training";
	$tdatatraining[".OwnerID"] = "";
	$tdatatraining[".OriginalTable"] = "training";

//	field labels
$fieldLabelstraining = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining["English"] = array();
	$fieldToolTipstraining["English"] = array();
	$fieldLabelstraining["English"]["TrainingID"] = "Training ID";
	$fieldToolTipstraining["English"]["TrainingID"] = "";
	$fieldLabelstraining["English"]["TrainingName"] = "Training Name";
	$fieldToolTipstraining["English"]["TrainingName"] = "";
	if (count($fieldToolTipstraining["English"]))
		$tdatatraining[".isUseToolTips"] = true;
}
	
	
	$tdatatraining[".NCSearch"] = true;



$tdatatraining[".shortTableName"] = "training";
$tdatatraining[".nSecOptions"] = 0;
$tdatatraining[".recsPerRowList"] = 1;
$tdatatraining[".mainTableOwnerID"] = "";
$tdatatraining[".moveNext"] = 1;
$tdatatraining[".nType"] = 0;

$tdatatraining[".strOriginalTableName"] = "training";




$tdatatraining[".showAddInPopup"] = false;

$tdatatraining[".showEditInPopup"] = false;

$tdatatraining[".showViewInPopup"] = false;

$tdatatraining[".fieldsForRegister"] = array();
	
$tdatatraining[".listAjax"] = false;

	$tdatatraining[".audit"] = true;

	$tdatatraining[".locking"] = false;

$tdatatraining[".listIcons"] = true;
$tdatatraining[".inlineEdit"] = true;
$tdatatraining[".inlineAdd"] = true;



$tdatatraining[".delete"] = true;

$tdatatraining[".showSimpleSearchOptions"] = true;

$tdatatraining[".showSearchPanel"] = true;

if (isMobile())
	$tdatatraining[".isUseAjaxSuggest"] = false;
else 
	$tdatatraining[".isUseAjaxSuggest"] = true;

$tdatatraining[".rowHighlite"] = true;

// button handlers file names

$tdatatraining[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining[".isUseTimeForSearch"] = false;




$tdatatraining[".allSearchFields"] = array();

$tdatatraining[".allSearchFields"][] = "TrainingName";

$tdatatraining[".googleLikeFields"][] = "TrainingID";
$tdatatraining[".googleLikeFields"][] = "TrainingName";


$tdatatraining[".advSearchFields"][] = "TrainingName";

$tdatatraining[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatraining[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatraining[".strOrderBy"] = $tstrOrderBy;

$tdatatraining[".orderindexes"] = array();

$tdatatraining[".sqlHead"] = "SELECT TrainingID,   TrainingName";
$tdatatraining[".sqlFrom"] = "FROM training";
$tdatatraining[".sqlWhereExpr"] = "";
$tdatatraining[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining[".arrGroupsPerPage"] = $arrGPP;

$tableKeystraining = array();
$tableKeystraining[] = "TrainingID";
$tdatatraining[".Keys"] = $tableKeystraining;

$tdatatraining[".listFields"] = array();
$tdatatraining[".listFields"][] = "TrainingName";

$tdatatraining[".viewFields"] = array();

$tdatatraining[".addFields"] = array();
$tdatatraining[".addFields"][] = "TrainingName";

$tdatatraining[".inlineAddFields"] = array();
$tdatatraining[".inlineAddFields"][] = "TrainingName";

$tdatatraining[".editFields"] = array();

$tdatatraining[".inlineEditFields"] = array();
$tdatatraining[".inlineEditFields"][] = "TrainingName";

$tdatatraining[".exportFields"] = array();

$tdatatraining[".printFields"] = array();

//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "training";
	$fdata["Label"] = "Training ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "TrainingID"; 
		$fdata["FullName"] = "TrainingID";
	
		
		
				
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
	
		
		
	$tdatatraining["TrainingID"] = $fdata;
//	TrainingName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TrainingName";
	$fdata["GoodName"] = "TrainingName";
	$fdata["ownerTable"] = "training";
	$fdata["Label"] = "Training Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "TrainingName"; 
		$fdata["FullName"] = "TrainingName";
	
		
		
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
	
		
		
	$tdatatraining["TrainingName"] = $fdata;

	
$tables_data["training"]=&$tdatatraining;
$field_labels["training"] = &$fieldLabelstraining;
$fieldToolTips["training"] = &$fieldToolTipstraining;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["training"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["training"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_training()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TrainingID,   TrainingName";
$proto0["m_strFrom"] = "FROM training";
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
	"m_strName" => "TrainingID",
	"m_strTable" => "training"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingName",
	"m_strTable" => "training"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "training";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "TrainingID";
$proto10["m_columns"][] = "TrainingName";
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
$queryData_training = createSqlQuery_training();
		$tdatatraining[".sqlquery"] = $queryData_training;

$tableEvents["training"] = new eventsBase;
$tdatatraining[".hasEvents"] = false;

$cipherer = new RunnerCipherer("training");

?>