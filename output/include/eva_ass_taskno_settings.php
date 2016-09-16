<?php
require_once(getabspath("classes/cipherer.php"));
$tdataeva_ass_taskno = array();
	$tdataeva_ass_taskno[".NumberOfChars"] = 80; 
	$tdataeva_ass_taskno[".ShortName"] = "eva_ass_taskno";
	$tdataeva_ass_taskno[".OwnerID"] = "";
	$tdataeva_ass_taskno[".OriginalTable"] = "eva_ass_taskno";

//	field labels
$fieldLabelseva_ass_taskno = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelseva_ass_taskno["English"] = array();
	$fieldToolTipseva_ass_taskno["English"] = array();
	$fieldLabelseva_ass_taskno["English"]["tid"] = "Tid";
	$fieldToolTipseva_ass_taskno["English"]["tid"] = "";
	$fieldLabelseva_ass_taskno["English"]["sub_topic"] = "Sub";
	$fieldToolTipseva_ass_taskno["English"]["sub_topic"] = "";
	$fieldLabelseva_ass_taskno["English"]["taskno"] = "Taskno";
	$fieldToolTipseva_ass_taskno["English"]["taskno"] = "";
	$fieldLabelseva_ass_taskno["English"]["taskno1"] = "Taskno1";
	$fieldToolTipseva_ass_taskno["English"]["taskno1"] = "";
	$fieldLabelseva_ass_taskno["English"]["taskno3"] = "Taskno3";
	$fieldToolTipseva_ass_taskno["English"]["taskno3"] = "";
	$fieldLabelseva_ass_taskno["English"]["taskno4"] = "Taskno4";
	$fieldToolTipseva_ass_taskno["English"]["taskno4"] = "";
	$fieldLabelseva_ass_taskno["English"]["taskno2"] = "Taskno2";
	$fieldToolTipseva_ass_taskno["English"]["taskno2"] = "";
	if (count($fieldToolTipseva_ass_taskno["English"]))
		$tdataeva_ass_taskno[".isUseToolTips"] = true;
}
	
	
	$tdataeva_ass_taskno[".NCSearch"] = true;



$tdataeva_ass_taskno[".shortTableName"] = "eva_ass_taskno";
$tdataeva_ass_taskno[".nSecOptions"] = 0;
$tdataeva_ass_taskno[".recsPerRowList"] = 5;
$tdataeva_ass_taskno[".mainTableOwnerID"] = "";
$tdataeva_ass_taskno[".moveNext"] = 1;
$tdataeva_ass_taskno[".nType"] = 0;

$tdataeva_ass_taskno[".strOriginalTableName"] = "eva_ass_taskno";




$tdataeva_ass_taskno[".showAddInPopup"] = false;

$tdataeva_ass_taskno[".showEditInPopup"] = false;

$tdataeva_ass_taskno[".showViewInPopup"] = false;

$tdataeva_ass_taskno[".fieldsForRegister"] = array();
	
$tdataeva_ass_taskno[".listAjax"] = false;

	$tdataeva_ass_taskno[".audit"] = true;

	$tdataeva_ass_taskno[".locking"] = false;

$tdataeva_ass_taskno[".listIcons"] = true;
$tdataeva_ass_taskno[".inlineEdit"] = true;
$tdataeva_ass_taskno[".inlineAdd"] = true;



$tdataeva_ass_taskno[".delete"] = true;

$tdataeva_ass_taskno[".showSimpleSearchOptions"] = true;

$tdataeva_ass_taskno[".showSearchPanel"] = true;

if (isMobile())
	$tdataeva_ass_taskno[".isUseAjaxSuggest"] = false;
else 
	$tdataeva_ass_taskno[".isUseAjaxSuggest"] = true;

$tdataeva_ass_taskno[".rowHighlite"] = true;

// button handlers file names

$tdataeva_ass_taskno[".addPageEvents"] = false;

// use timepicker for search panel
$tdataeva_ass_taskno[".isUseTimeForSearch"] = false;




$tdataeva_ass_taskno[".allSearchFields"] = array();

$tdataeva_ass_taskno[".allSearchFields"][] = "taskno";

$tdataeva_ass_taskno[".googleLikeFields"][] = "tid";
$tdataeva_ass_taskno[".googleLikeFields"][] = "sub_topic";
$tdataeva_ass_taskno[".googleLikeFields"][] = "taskno";


$tdataeva_ass_taskno[".advSearchFields"][] = "taskno";

$tdataeva_ass_taskno[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataeva_ass_taskno[".pageSize"] = 40;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataeva_ass_taskno[".strOrderBy"] = $tstrOrderBy;

$tdataeva_ass_taskno[".orderindexes"] = array();

$tdataeva_ass_taskno[".sqlHead"] = "SELECT tid,   sub_topic,   taskno";
$tdataeva_ass_taskno[".sqlFrom"] = "FROM eva_ass_taskno";
$tdataeva_ass_taskno[".sqlWhereExpr"] = "";
$tdataeva_ass_taskno[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataeva_ass_taskno[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataeva_ass_taskno[".arrGroupsPerPage"] = $arrGPP;

$tableKeyseva_ass_taskno = array();
$tableKeyseva_ass_taskno[] = "tid";
$tdataeva_ass_taskno[".Keys"] = $tableKeyseva_ass_taskno;

$tdataeva_ass_taskno[".listFields"] = array();
$tdataeva_ass_taskno[".listFields"][] = "taskno";

$tdataeva_ass_taskno[".viewFields"] = array();

$tdataeva_ass_taskno[".addFields"] = array();

$tdataeva_ass_taskno[".inlineAddFields"] = array();
$tdataeva_ass_taskno[".inlineAddFields"][] = "taskno";

$tdataeva_ass_taskno[".editFields"] = array();

$tdataeva_ass_taskno[".inlineEditFields"] = array();
$tdataeva_ass_taskno[".inlineEditFields"][] = "taskno";

$tdataeva_ass_taskno[".exportFields"] = array();

$tdataeva_ass_taskno[".printFields"] = array();

//	tid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tid";
	$fdata["GoodName"] = "tid";
	$fdata["ownerTable"] = "eva_ass_taskno";
	$fdata["Label"] = "Tid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "tid"; 
		$fdata["FullName"] = "tid";
	
		
		
				
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
	
		
		
	$tdataeva_ass_taskno["tid"] = $fdata;
//	sub_topic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sub_topic";
	$fdata["GoodName"] = "sub_topic";
	$fdata["ownerTable"] = "eva_ass_taskno";
	$fdata["Label"] = "Sub"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sub_topic"; 
		$fdata["FullName"] = "sub_topic";
	
		
		
				
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
	
		
		
	$tdataeva_ass_taskno["sub_topic"] = $fdata;
//	taskno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "taskno";
	$fdata["GoodName"] = "taskno";
	$fdata["ownerTable"] = "eva_ass_taskno";
	$fdata["Label"] = "Taskno"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataeva_ass_taskno["taskno"] = $fdata;

	
$tables_data["eva_ass_taskno"]=&$tdataeva_ass_taskno;
$field_labels["eva_ass_taskno"] = &$fieldLabelseva_ass_taskno;
$fieldToolTips["eva_ass_taskno"] = &$fieldToolTipseva_ass_taskno;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["eva_ass_taskno"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["eva_ass_taskno"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="eva_ass_topic";
	$masterParams["mDataSourceTable"]="eva_ass_topic";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "eva_ass_topic";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["eva_ass_taskno"][$mIndex] = $masterParams;	
		$masterTablesData["eva_ass_taskno"][$mIndex]["masterKeys"][]="sub_topic";
		$masterTablesData["eva_ass_taskno"][$mIndex]["detailKeys"][]="sub_topic";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_eva_ass_taskno()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tid,   sub_topic,   taskno";
$proto0["m_strFrom"] = "FROM eva_ass_taskno";
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
	"m_strName" => "tid",
	"m_strTable" => "eva_ass_taskno"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_topic",
	"m_strTable" => "eva_ass_taskno"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "taskno",
	"m_strTable" => "eva_ass_taskno"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "eva_ass_taskno";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "tid";
$proto12["m_columns"][] = "sub_topic";
$proto12["m_columns"][] = "taskno";
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
$queryData_eva_ass_taskno = createSqlQuery_eva_ass_taskno();
			$tdataeva_ass_taskno[".sqlquery"] = $queryData_eva_ass_taskno;

$tableEvents["eva_ass_taskno"] = new eventsBase;
$tdataeva_ass_taskno[".hasEvents"] = false;

$cipherer = new RunnerCipherer("eva_ass_taskno");

?>