<?php
require_once(getabspath("classes/cipherer.php"));
$tdataeva_ass_topic = array();
	$tdataeva_ass_topic[".NumberOfChars"] = 80; 
	$tdataeva_ass_topic[".ShortName"] = "eva_ass_topic";
	$tdataeva_ass_topic[".OwnerID"] = "";
	$tdataeva_ass_topic[".OriginalTable"] = "eva_ass_topic";

//	field labels
$fieldLabelseva_ass_topic = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelseva_ass_topic["English"] = array();
	$fieldToolTipseva_ass_topic["English"] = array();
	$fieldLabelseva_ass_topic["English"]["eid"] = "Eid";
	$fieldToolTipseva_ass_topic["English"]["eid"] = "";
	$fieldLabelseva_ass_topic["English"]["main_topic"] = "Main ";
	$fieldToolTipseva_ass_topic["English"]["main_topic"] = "";
	$fieldLabelseva_ass_topic["English"]["sub_topic"] = "Sub ";
	$fieldToolTipseva_ass_topic["English"]["sub_topic"] = "";
	$fieldLabelseva_ass_topic["English"]["title"] = "Title";
	$fieldToolTipseva_ass_topic["English"]["title"] = "";
	$fieldLabelseva_ass_topic["English"]["topic_1"] = "Topic 1";
	$fieldToolTipseva_ass_topic["English"]["topic_1"] = "";
	$fieldLabelseva_ass_topic["English"]["topic_2"] = "Topic 2";
	$fieldToolTipseva_ass_topic["English"]["topic_2"] = "";
	$fieldLabelseva_ass_topic["English"]["topic_3"] = "Topic 3";
	$fieldToolTipseva_ass_topic["English"]["topic_3"] = "";
	$fieldLabelseva_ass_topic["English"]["topic_5"] = "Topic 5";
	$fieldToolTipseva_ass_topic["English"]["topic_5"] = "";
	$fieldLabelseva_ass_topic["English"]["task1"] = "Task1";
	$fieldToolTipseva_ass_topic["English"]["task1"] = "";
	if (count($fieldToolTipseva_ass_topic["English"]))
		$tdataeva_ass_topic[".isUseToolTips"] = true;
}
	
	
	$tdataeva_ass_topic[".NCSearch"] = true;



$tdataeva_ass_topic[".shortTableName"] = "eva_ass_topic";
$tdataeva_ass_topic[".nSecOptions"] = 0;
$tdataeva_ass_topic[".recsPerRowList"] = 1;
$tdataeva_ass_topic[".mainTableOwnerID"] = "";
$tdataeva_ass_topic[".moveNext"] = 1;
$tdataeva_ass_topic[".nType"] = 0;

$tdataeva_ass_topic[".strOriginalTableName"] = "eva_ass_topic";




$tdataeva_ass_topic[".showAddInPopup"] = false;

$tdataeva_ass_topic[".showEditInPopup"] = false;

$tdataeva_ass_topic[".showViewInPopup"] = false;

$tdataeva_ass_topic[".fieldsForRegister"] = array();
	
$tdataeva_ass_topic[".listAjax"] = false;

	$tdataeva_ass_topic[".audit"] = true;

	$tdataeva_ass_topic[".locking"] = false;

$tdataeva_ass_topic[".listIcons"] = true;
$tdataeva_ass_topic[".inlineEdit"] = true;
$tdataeva_ass_topic[".inlineAdd"] = true;

$tdataeva_ass_topic[".exportTo"] = true;


$tdataeva_ass_topic[".delete"] = true;

$tdataeva_ass_topic[".showSimpleSearchOptions"] = true;

$tdataeva_ass_topic[".showSearchPanel"] = true;

if (isMobile())
	$tdataeva_ass_topic[".isUseAjaxSuggest"] = false;
else 
	$tdataeva_ass_topic[".isUseAjaxSuggest"] = true;

$tdataeva_ass_topic[".rowHighlite"] = true;

// button handlers file names

$tdataeva_ass_topic[".addPageEvents"] = false;

// use timepicker for search panel
$tdataeva_ass_topic[".isUseTimeForSearch"] = false;



$tdataeva_ass_topic[".useDetailsPreview"] = true;

$tdataeva_ass_topic[".allSearchFields"] = array();

$tdataeva_ass_topic[".allSearchFields"][] = "main_topic";
$tdataeva_ass_topic[".allSearchFields"][] = "sub_topic";
$tdataeva_ass_topic[".allSearchFields"][] = "title";

$tdataeva_ass_topic[".googleLikeFields"][] = "main_topic";
$tdataeva_ass_topic[".googleLikeFields"][] = "sub_topic";
$tdataeva_ass_topic[".googleLikeFields"][] = "title";


$tdataeva_ass_topic[".advSearchFields"][] = "main_topic";
$tdataeva_ass_topic[".advSearchFields"][] = "sub_topic";
$tdataeva_ass_topic[".advSearchFields"][] = "title";

$tdataeva_ass_topic[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataeva_ass_topic[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY eid DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataeva_ass_topic[".strOrderBy"] = $tstrOrderBy;

$tdataeva_ass_topic[".orderindexes"] = array();
$tdataeva_ass_topic[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "eid");

$tdataeva_ass_topic[".sqlHead"] = "SELECT eid,  main_topic,  sub_topic,  title";
$tdataeva_ass_topic[".sqlFrom"] = "FROM eva_ass_topic";
$tdataeva_ass_topic[".sqlWhereExpr"] = "";
$tdataeva_ass_topic[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataeva_ass_topic[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataeva_ass_topic[".arrGroupsPerPage"] = $arrGPP;

$tableKeyseva_ass_topic = array();
$tableKeyseva_ass_topic[] = "eid";
$tdataeva_ass_topic[".Keys"] = $tableKeyseva_ass_topic;

$tdataeva_ass_topic[".listFields"] = array();
$tdataeva_ass_topic[".listFields"][] = "main_topic";
$tdataeva_ass_topic[".listFields"][] = "sub_topic";
$tdataeva_ass_topic[".listFields"][] = "title";

$tdataeva_ass_topic[".viewFields"] = array();

$tdataeva_ass_topic[".addFields"] = array();

$tdataeva_ass_topic[".inlineAddFields"] = array();
$tdataeva_ass_topic[".inlineAddFields"][] = "main_topic";
$tdataeva_ass_topic[".inlineAddFields"][] = "sub_topic";
$tdataeva_ass_topic[".inlineAddFields"][] = "title";

$tdataeva_ass_topic[".editFields"] = array();

$tdataeva_ass_topic[".inlineEditFields"] = array();
$tdataeva_ass_topic[".inlineEditFields"][] = "main_topic";
$tdataeva_ass_topic[".inlineEditFields"][] = "sub_topic";
$tdataeva_ass_topic[".inlineEditFields"][] = "title";

$tdataeva_ass_topic[".exportFields"] = array();
$tdataeva_ass_topic[".exportFields"][] = "main_topic";
$tdataeva_ass_topic[".exportFields"][] = "sub_topic";
$tdataeva_ass_topic[".exportFields"][] = "title";

$tdataeva_ass_topic[".printFields"] = array();

//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "eva_ass_topic";
	$fdata["Label"] = "Eid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "eid"; 
		$fdata["FullName"] = "eid";
	
		
		
				
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
	
		
		
	$tdataeva_ass_topic["eid"] = $fdata;
//	main_topic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "main_topic";
	$fdata["GoodName"] = "main_topic";
	$fdata["ownerTable"] = "eva_ass_topic";
	$fdata["Label"] = "Main "; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "main_topic"; 
		$fdata["FullName"] = "main_topic";
	
		
		
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
	
		
		
	$tdataeva_ass_topic["main_topic"] = $fdata;
//	sub_topic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sub_topic";
	$fdata["GoodName"] = "sub_topic";
	$fdata["ownerTable"] = "eva_ass_topic";
	$fdata["Label"] = "Sub "; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sub_topic"; 
		$fdata["FullName"] = "sub_topic";
	
		
		
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
	
		
		
	$tdataeva_ass_topic["sub_topic"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "eva_ass_topic";
	$fdata["Label"] = "Title"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "title"; 
		$fdata["FullName"] = "title";
	
		
		
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
	
		
		
	$tdataeva_ass_topic["title"] = $fdata;

	
$tables_data["eva_ass_topic"]=&$tdataeva_ass_topic;
$field_labels["eva_ass_topic"] = &$fieldLabelseva_ass_topic;
$fieldToolTips["eva_ass_topic"] = &$fieldToolTipseva_ass_topic;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["eva_ass_topic"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="eva_ass_taskno";
	$detailsParam["dDataSourceTable"]="eva_ass_taskno";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="eva_ass_taskno";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["eva_ass_topic"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["eva_ass_topic"][$dIndex]["masterKeys"][]="sub_topic";
		$detailsTablesData["eva_ass_topic"][$dIndex]["detailKeys"][]="sub_topic";

	
// tables which are master tables for current table (detail)
$masterTablesData["eva_ass_topic"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_eva_ass_topic()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eid,  main_topic,  sub_topic,  title";
$proto0["m_strFrom"] = "FROM eva_ass_topic";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY eid DESC";
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
	"m_strName" => "eid",
	"m_strTable" => "eva_ass_topic"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "main_topic",
	"m_strTable" => "eva_ass_topic"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_topic",
	"m_strTable" => "eva_ass_topic"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "eva_ass_topic"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "eva_ass_topic";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "eid";
$proto14["m_columns"][] = "main_topic";
$proto14["m_columns"][] = "sub_topic";
$proto14["m_columns"][] = "title";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "eid",
	"m_strTable" => "eva_ass_topic"
));

$proto17["m_column"]=$obj;
$proto17["m_bAsc"] = 0;
$proto17["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto17);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_eva_ass_topic = createSqlQuery_eva_ass_topic();
				$tdataeva_ass_topic[".sqlquery"] = $queryData_eva_ass_topic;

$tableEvents["eva_ass_topic"] = new eventsBase;
$tdataeva_ass_topic[".hasEvents"] = false;

$cipherer = new RunnerCipherer("eva_ass_topic");

?>