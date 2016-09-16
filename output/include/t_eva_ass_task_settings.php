<?php
require_once(getabspath("classes/cipherer.php"));
$tdatat_eva_ass_task = array();
	$tdatat_eva_ass_task[".NumberOfChars"] = 80; 
	$tdatat_eva_ass_task[".ShortName"] = "t_eva_ass_task";
	$tdatat_eva_ass_task[".OwnerID"] = "";
	$tdatat_eva_ass_task[".OriginalTable"] = "t_eva_ass_task";

//	field labels
$fieldLabelst_eva_ass_task = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_eva_ass_task["English"] = array();
	$fieldToolTipst_eva_ass_task["English"] = array();
	$fieldLabelst_eva_ass_task["English"]["eid"] = "Eid";
	$fieldToolTipst_eva_ass_task["English"]["eid"] = "";
	$fieldLabelst_eva_ass_task["English"]["taskno"] = "Task No";
	$fieldToolTipst_eva_ass_task["English"]["taskno"] = "";
	$fieldLabelst_eva_ass_task["English"]["main_topic"] = "Main Topic";
	$fieldToolTipst_eva_ass_task["English"]["main_topic"] = "";
	$fieldLabelst_eva_ass_task["English"]["sub_topic"] = "Sub Topic";
	$fieldToolTipst_eva_ass_task["English"]["sub_topic"] = "";
	$fieldLabelst_eva_ass_task["English"]["title"] = "Title";
	$fieldToolTipst_eva_ass_task["English"]["title"] = "";
	$fieldLabelst_eva_ass_task["English"]["topic_1"] = "Topic 1";
	$fieldToolTipst_eva_ass_task["English"]["topic_1"] = "";
	$fieldLabelst_eva_ass_task["English"]["topic_2"] = "Topic 2";
	$fieldToolTipst_eva_ass_task["English"]["topic_2"] = "";
	$fieldLabelst_eva_ass_task["English"]["topic_3"] = "Topic 3";
	$fieldToolTipst_eva_ass_task["English"]["topic_3"] = "";
	$fieldLabelst_eva_ass_task["English"]["topic_5"] = "Topic 5";
	$fieldToolTipst_eva_ass_task["English"]["topic_5"] = "";
	$fieldLabelst_eva_ass_task["English"]["task1"] = "Task1";
	$fieldToolTipst_eva_ass_task["English"]["task1"] = "";
	if (count($fieldToolTipst_eva_ass_task["English"]))
		$tdatat_eva_ass_task[".isUseToolTips"] = true;
}
	
	
	$tdatat_eva_ass_task[".NCSearch"] = true;



$tdatat_eva_ass_task[".shortTableName"] = "t_eva_ass_task";
$tdatat_eva_ass_task[".nSecOptions"] = 0;
$tdatat_eva_ass_task[".recsPerRowList"] = 1;
$tdatat_eva_ass_task[".mainTableOwnerID"] = "";
$tdatat_eva_ass_task[".moveNext"] = 1;
$tdatat_eva_ass_task[".nType"] = 0;

$tdatat_eva_ass_task[".strOriginalTableName"] = "t_eva_ass_task";




$tdatat_eva_ass_task[".showAddInPopup"] = false;

$tdatat_eva_ass_task[".showEditInPopup"] = false;

$tdatat_eva_ass_task[".showViewInPopup"] = false;

$tdatat_eva_ass_task[".fieldsForRegister"] = array();

$tdatat_eva_ass_task[".listAjax"] = false;

	$tdatat_eva_ass_task[".audit"] = false;

	$tdatat_eva_ass_task[".locking"] = false;

$tdatat_eva_ass_task[".listIcons"] = true;
$tdatat_eva_ass_task[".inlineEdit"] = true;
$tdatat_eva_ass_task[".inlineAdd"] = true;

$tdatat_eva_ass_task[".exportTo"] = true;


$tdatat_eva_ass_task[".delete"] = true;

$tdatat_eva_ass_task[".showSimpleSearchOptions"] = false;

$tdatat_eva_ass_task[".showSearchPanel"] = true;

if (isMobile())
	$tdatat_eva_ass_task[".isUseAjaxSuggest"] = false;
else 
	$tdatat_eva_ass_task[".isUseAjaxSuggest"] = true;

$tdatat_eva_ass_task[".rowHighlite"] = true;

// button handlers file names

$tdatat_eva_ass_task[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_eva_ass_task[".isUseTimeForSearch"] = false;




$tdatat_eva_ass_task[".allSearchFields"] = array();

$tdatat_eva_ass_task[".allSearchFields"][] = "sub_topic";
$tdatat_eva_ass_task[".allSearchFields"][] = "title";
$tdatat_eva_ass_task[".allSearchFields"][] = "main_topic";
$tdatat_eva_ass_task[".allSearchFields"][] = "taskno";

$tdatat_eva_ass_task[".googleLikeFields"][] = "main_topic";
$tdatat_eva_ass_task[".googleLikeFields"][] = "sub_topic";
$tdatat_eva_ass_task[".googleLikeFields"][] = "title";
$tdatat_eva_ass_task[".googleLikeFields"][] = "taskno";

$tdatat_eva_ass_task[".panelSearchFields"][] = "taskno";

$tdatat_eva_ass_task[".advSearchFields"][] = "sub_topic";
$tdatat_eva_ass_task[".advSearchFields"][] = "title";
$tdatat_eva_ass_task[".advSearchFields"][] = "main_topic";
$tdatat_eva_ass_task[".advSearchFields"][] = "taskno";

$tdatat_eva_ass_task[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatat_eva_ass_task[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY eid DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_eva_ass_task[".strOrderBy"] = $tstrOrderBy;

$tdatat_eva_ass_task[".orderindexes"] = array();
$tdatat_eva_ass_task[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "eid");

$tdatat_eva_ass_task[".sqlHead"] = "SELECT eid,  main_topic,  sub_topic,  title,  taskno";
$tdatat_eva_ass_task[".sqlFrom"] = "FROM t_eva_ass_task";
$tdatat_eva_ass_task[".sqlWhereExpr"] = "";
$tdatat_eva_ass_task[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_eva_ass_task[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_eva_ass_task[".arrGroupsPerPage"] = $arrGPP;

$tableKeyst_eva_ass_task = array();
$tableKeyst_eva_ass_task[] = "eid";
$tdatat_eva_ass_task[".Keys"] = $tableKeyst_eva_ass_task;

$tdatat_eva_ass_task[".listFields"] = array();
$tdatat_eva_ass_task[".listFields"][] = "main_topic";
$tdatat_eva_ass_task[".listFields"][] = "sub_topic";
$tdatat_eva_ass_task[".listFields"][] = "title";
$tdatat_eva_ass_task[".listFields"][] = "taskno";

$tdatat_eva_ass_task[".viewFields"] = array();

$tdatat_eva_ass_task[".addFields"] = array();

$tdatat_eva_ass_task[".inlineAddFields"] = array();
$tdatat_eva_ass_task[".inlineAddFields"][] = "main_topic";
$tdatat_eva_ass_task[".inlineAddFields"][] = "sub_topic";
$tdatat_eva_ass_task[".inlineAddFields"][] = "title";
$tdatat_eva_ass_task[".inlineAddFields"][] = "taskno";

$tdatat_eva_ass_task[".editFields"] = array();

$tdatat_eva_ass_task[".inlineEditFields"] = array();
$tdatat_eva_ass_task[".inlineEditFields"][] = "main_topic";
$tdatat_eva_ass_task[".inlineEditFields"][] = "sub_topic";
$tdatat_eva_ass_task[".inlineEditFields"][] = "title";
$tdatat_eva_ass_task[".inlineEditFields"][] = "taskno";

$tdatat_eva_ass_task[".exportFields"] = array();
$tdatat_eva_ass_task[".exportFields"][] = "sub_topic";
$tdatat_eva_ass_task[".exportFields"][] = "title";
$tdatat_eva_ass_task[".exportFields"][] = "main_topic";
$tdatat_eva_ass_task[".exportFields"][] = "taskno";

$tdatat_eva_ass_task[".printFields"] = array();

//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "t_eva_ass_task";
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
	
		
		
	$tdatat_eva_ass_task["eid"] = $fdata;
//	main_topic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "main_topic";
	$fdata["GoodName"] = "main_topic";
	$fdata["ownerTable"] = "t_eva_ass_task";
	$fdata["Label"] = "Main Topic"; 
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
	
		
		
	$tdatat_eva_ass_task["main_topic"] = $fdata;
//	sub_topic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sub_topic";
	$fdata["GoodName"] = "sub_topic";
	$fdata["ownerTable"] = "t_eva_ass_task";
	$fdata["Label"] = "Sub Topic"; 
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
	
		
		
	$tdatat_eva_ass_task["sub_topic"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "t_eva_ass_task";
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
	
		
		
	$tdatat_eva_ass_task["title"] = $fdata;
//	taskno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "taskno";
	$fdata["GoodName"] = "taskno";
	$fdata["ownerTable"] = "t_eva_ass_task";
	$fdata["Label"] = "Task No"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "taskno"; 
		$fdata["FullName"] = "taskno";
	
		
		
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
	
		
		$edata["inputStyle"] = " width:100px;";
	$edata["controlWidth"] = 100;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatat_eva_ass_task["taskno"] = $fdata;

	
$tables_data["t_eva_ass_task"]=&$tdatat_eva_ass_task;
$field_labels["t_eva_ass_task"] = &$fieldLabelst_eva_ass_task;
$fieldToolTips["t_eva_ass_task"] = &$fieldToolTipst_eva_ass_task;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_eva_ass_task"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_eva_ass_task"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_eva_ass_task()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eid,  main_topic,  sub_topic,  title,  taskno";
$proto0["m_strFrom"] = "FROM t_eva_ass_task";
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
	"m_strTable" => "t_eva_ass_task"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "main_topic",
	"m_strTable" => "t_eva_ass_task"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_topic",
	"m_strTable" => "t_eva_ass_task"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "t_eva_ass_task"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "taskno",
	"m_strTable" => "t_eva_ass_task"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "t_eva_ass_task";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "eid";
$proto16["m_columns"][] = "main_topic";
$proto16["m_columns"][] = "sub_topic";
$proto16["m_columns"][] = "title";
$proto16["m_columns"][] = "taskno";
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
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "eid",
	"m_strTable" => "t_eva_ass_task"
));

$proto19["m_column"]=$obj;
$proto19["m_bAsc"] = 0;
$proto19["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto19);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_eva_ass_task = createSqlQuery_t_eva_ass_task();
					$tdatat_eva_ass_task[".sqlquery"] = $queryData_t_eva_ass_task;

$tableEvents["t_eva_ass_task"] = new eventsBase;
$tdatat_eva_ass_task[".hasEvents"] = false;

$cipherer = new RunnerCipherer("t_eva_ass_task");

?>