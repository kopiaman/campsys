<?php
require_once(getabspath("classes/cipherer.php"));
$tdataw_course = array();
	$tdataw_course[".NumberOfChars"] = 50; 
	$tdataw_course[".ShortName"] = "w_course";
	$tdataw_course[".OwnerID"] = "";
	$tdataw_course[".OriginalTable"] = "w_course";

//	field labels
$fieldLabelsw_course = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsw_course["English"] = array();
	$fieldToolTipsw_course["English"] = array();
	$fieldLabelsw_course["English"]["wid"] = "Wid";
	$fieldToolTipsw_course["English"]["wid"] = "";
	$fieldLabelsw_course["English"]["intro"] = "Intro";
	$fieldToolTipsw_course["English"]["intro"] = "";
	$fieldLabelsw_course["English"]["requirement"] = "Requirement";
	$fieldToolTipsw_course["English"]["requirement"] = "";
	$fieldLabelsw_course["English"]["about"] = "About Programme";
	$fieldToolTipsw_course["English"]["about"] = "";
	$fieldLabelsw_course["English"]["pos"] = "Position";
	$fieldToolTipsw_course["English"]["pos"] = "";
	$fieldLabelsw_course["English"]["name"] = "Course Name";
	$fieldToolTipsw_course["English"]["name"] = "";
	if (count($fieldToolTipsw_course["English"]))
		$tdataw_course[".isUseToolTips"] = true;
}
	
	
	$tdataw_course[".NCSearch"] = true;



$tdataw_course[".shortTableName"] = "w_course";
$tdataw_course[".nSecOptions"] = 0;
$tdataw_course[".recsPerRowList"] = 1;
$tdataw_course[".mainTableOwnerID"] = "";
$tdataw_course[".moveNext"] = 1;
$tdataw_course[".nType"] = 0;

$tdataw_course[".strOriginalTableName"] = "w_course";




$tdataw_course[".showAddInPopup"] = false;

$tdataw_course[".showEditInPopup"] = false;

$tdataw_course[".showViewInPopup"] = false;

$tdataw_course[".fieldsForRegister"] = array();
	
$tdataw_course[".listAjax"] = false;

	$tdataw_course[".audit"] = false;

	$tdataw_course[".locking"] = false;

$tdataw_course[".listIcons"] = true;
$tdataw_course[".edit"] = true;



$tdataw_course[".delete"] = true;

$tdataw_course[".showSimpleSearchOptions"] = true;

$tdataw_course[".showSearchPanel"] = true;

if (isMobile())
	$tdataw_course[".isUseAjaxSuggest"] = false;
else 
	$tdataw_course[".isUseAjaxSuggest"] = true;

$tdataw_course[".rowHighlite"] = true;

// button handlers file names

$tdataw_course[".addPageEvents"] = false;

// use timepicker for search panel
$tdataw_course[".isUseTimeForSearch"] = false;




$tdataw_course[".allSearchFields"] = array();


$tdataw_course[".googleLikeFields"][] = "wid";
$tdataw_course[".googleLikeFields"][] = "name";
$tdataw_course[".googleLikeFields"][] = "intro";
$tdataw_course[".googleLikeFields"][] = "requirement";
$tdataw_course[".googleLikeFields"][] = "about";
$tdataw_course[".googleLikeFields"][] = "pos";



$tdataw_course[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataw_course[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY pos";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataw_course[".strOrderBy"] = $tstrOrderBy;

$tdataw_course[".orderindexes"] = array();
$tdataw_course[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "pos");

$tdataw_course[".sqlHead"] = "SELECT wid,  name,  intro,  requirement,  about,  pos";
$tdataw_course[".sqlFrom"] = "FROM w_course";
$tdataw_course[".sqlWhereExpr"] = "";
$tdataw_course[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataw_course[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataw_course[".arrGroupsPerPage"] = $arrGPP;

$tableKeysw_course = array();
$tableKeysw_course[] = "wid";
$tdataw_course[".Keys"] = $tableKeysw_course;

$tdataw_course[".listFields"] = array();
$tdataw_course[".listFields"][] = "pos";
$tdataw_course[".listFields"][] = "name";
$tdataw_course[".listFields"][] = "intro";
$tdataw_course[".listFields"][] = "about";
$tdataw_course[".listFields"][] = "requirement";

$tdataw_course[".viewFields"] = array();

$tdataw_course[".addFields"] = array();
$tdataw_course[".addFields"][] = "pos";
$tdataw_course[".addFields"][] = "name";
$tdataw_course[".addFields"][] = "intro";
$tdataw_course[".addFields"][] = "about";
$tdataw_course[".addFields"][] = "requirement";

$tdataw_course[".inlineAddFields"] = array();

$tdataw_course[".editFields"] = array();
$tdataw_course[".editFields"][] = "pos";
$tdataw_course[".editFields"][] = "name";
$tdataw_course[".editFields"][] = "intro";
$tdataw_course[".editFields"][] = "about";
$tdataw_course[".editFields"][] = "requirement";

$tdataw_course[".inlineEditFields"] = array();

$tdataw_course[".exportFields"] = array();

$tdataw_course[".printFields"] = array();

//	wid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "wid";
	$fdata["GoodName"] = "wid";
	$fdata["ownerTable"] = "w_course";
	$fdata["Label"] = "Wid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "wid"; 
		$fdata["FullName"] = "wid";
	
		
		
				
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
	
		
		
	$tdataw_course["wid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "w_course";
	$fdata["Label"] = "Course Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
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
			
		$edata["inputStyle"] = " width:431px;";
	$edata["controlWidth"] = 431;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_course["name"] = $fdata;
//	intro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "intro";
	$fdata["GoodName"] = "intro";
	$fdata["ownerTable"] = "w_course";
	$fdata["Label"] = "Intro"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "intro"; 
		$fdata["FullName"] = "intro";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 180;
			$edata["nCols"] = 600;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_course["intro"] = $fdata;
//	requirement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "requirement";
	$fdata["GoodName"] = "requirement";
	$fdata["ownerTable"] = "w_course";
	$fdata["Label"] = "Requirement"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "requirement"; 
		$fdata["FullName"] = "requirement";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 179;
			$edata["nCols"] = 602;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_course["requirement"] = $fdata;
//	about
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "about";
	$fdata["GoodName"] = "about";
	$fdata["ownerTable"] = "w_course";
	$fdata["Label"] = "About Programme"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "about"; 
		$fdata["FullName"] = "about";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 170;
			$edata["nCols"] = 602;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_course["about"] = $fdata;
//	pos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pos";
	$fdata["GoodName"] = "pos";
	$fdata["ownerTable"] = "w_course";
	$fdata["Label"] = "Position"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "pos"; 
		$fdata["FullName"] = "pos";
	
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_course["pos"] = $fdata;

	
$tables_data["w_course"]=&$tdataw_course;
$field_labels["w_course"] = &$fieldLabelsw_course;
$fieldToolTips["w_course"] = &$fieldToolTipsw_course;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["w_course"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["w_course"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_w_course()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "wid,  name,  intro,  requirement,  about,  pos";
$proto0["m_strFrom"] = "FROM w_course";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY pos";
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
	"m_strName" => "wid",
	"m_strTable" => "w_course"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "w_course"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "intro",
	"m_strTable" => "w_course"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "requirement",
	"m_strTable" => "w_course"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "about",
	"m_strTable" => "w_course"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "pos",
	"m_strTable" => "w_course"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "w_course";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "wid";
$proto18["m_columns"][] = "name";
$proto18["m_columns"][] = "intro";
$proto18["m_columns"][] = "requirement";
$proto18["m_columns"][] = "about";
$proto18["m_columns"][] = "pos";
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
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "pos",
	"m_strTable" => "w_course"
));

$proto21["m_column"]=$obj;
$proto21["m_bAsc"] = 1;
$proto21["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto21);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_w_course = createSqlQuery_w_course();
						$tdataw_course[".sqlquery"] = $queryData_w_course;

$tableEvents["w_course"] = new eventsBase;
$tdataw_course[".hasEvents"] = false;

$cipherer = new RunnerCipherer("w_course");

?>