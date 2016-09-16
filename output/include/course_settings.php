<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacourse = array();
	$tdatacourse[".NumberOfChars"] = 80; 
	$tdatacourse[".ShortName"] = "course";
	$tdatacourse[".OwnerID"] = "";
	$tdatacourse[".OriginalTable"] = "course";

//	field labels
$fieldLabelscourse = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscourse["English"] = array();
	$fieldToolTipscourse["English"] = array();
	$fieldLabelscourse["English"]["CourseID"] = "Module";
	$fieldToolTipscourse["English"]["CourseID"] = "";
	$fieldLabelscourse["English"]["Name"] = "Name";
	$fieldToolTipscourse["English"]["Name"] = "";
	$fieldLabelscourse["English"]["Code"] = "Code";
	$fieldToolTipscourse["English"]["Code"] = "";
	$fieldLabelscourse["English"]["Shortname"] = "Shortname";
	$fieldToolTipscourse["English"]["Shortname"] = "";
	$fieldLabelscourse["English"]["color"] = "Color";
	$fieldToolTipscourse["English"]["color"] = "";
	$fieldLabelscourse["English"]["course"] = "Course";
	$fieldToolTipscourse["English"]["course"] = "";
	$fieldLabelscourse["English"]["courseID"] = "Course ID";
	$fieldToolTipscourse["English"]["courseID"] = "";
	if (count($fieldToolTipscourse["English"]))
		$tdatacourse[".isUseToolTips"] = true;
}
	
	



$tdatacourse[".shortTableName"] = "course";
$tdatacourse[".nSecOptions"] = 0;
$tdatacourse[".recsPerRowList"] = 1;
$tdatacourse[".mainTableOwnerID"] = "";
$tdatacourse[".moveNext"] = 1;
$tdatacourse[".nType"] = 0;

$tdatacourse[".strOriginalTableName"] = "course";




$tdatacourse[".showAddInPopup"] = false;

$tdatacourse[".showEditInPopup"] = false;

$tdatacourse[".showViewInPopup"] = false;

$tdatacourse[".fieldsForRegister"] = array();
	
$tdatacourse[".listAjax"] = false;

	$tdatacourse[".audit"] = true;

	$tdatacourse[".locking"] = false;

$tdatacourse[".listIcons"] = true;
$tdatacourse[".inlineEdit"] = true;
$tdatacourse[".inlineAdd"] = true;



$tdatacourse[".delete"] = true;

$tdatacourse[".showSimpleSearchOptions"] = true;

$tdatacourse[".showSearchPanel"] = true;

if (isMobile())
	$tdatacourse[".isUseAjaxSuggest"] = false;
else 
	$tdatacourse[".isUseAjaxSuggest"] = true;

$tdatacourse[".rowHighlite"] = true;

// button handlers file names

$tdatacourse[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacourse[".isUseTimeForSearch"] = false;




$tdatacourse[".allSearchFields"] = array();

$tdatacourse[".allSearchFields"][] = "color";
$tdatacourse[".allSearchFields"][] = "CourseID";
$tdatacourse[".allSearchFields"][] = "Name";
$tdatacourse[".allSearchFields"][] = "Shortname";
$tdatacourse[".allSearchFields"][] = "Code";

$tdatacourse[".googleLikeFields"][] = "Name";
$tdatacourse[".googleLikeFields"][] = "Code";
$tdatacourse[".googleLikeFields"][] = "Shortname";
$tdatacourse[".googleLikeFields"][] = "color";

$tdatacourse[".panelSearchFields"][] = "Name";
$tdatacourse[".panelSearchFields"][] = "Code";

$tdatacourse[".advSearchFields"][] = "color";
$tdatacourse[".advSearchFields"][] = "CourseID";
$tdatacourse[".advSearchFields"][] = "Name";
$tdatacourse[".advSearchFields"][] = "Shortname";
$tdatacourse[".advSearchFields"][] = "Code";

$tdatacourse[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacourse[".pageSize"] = 50;

$tstrOrderBy = "ORDER BY CourseID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacourse[".strOrderBy"] = $tstrOrderBy;

$tdatacourse[".orderindexes"] = array();
$tdatacourse[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "CourseID");

$tdatacourse[".sqlHead"] = "SELECT CourseID,   Name,   Code,   Shortname,   color";
$tdatacourse[".sqlFrom"] = "FROM course";
$tdatacourse[".sqlWhereExpr"] = "";
$tdatacourse[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacourse[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacourse[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscourse = array();
$tableKeyscourse[] = "CourseID";
$tdatacourse[".Keys"] = $tableKeyscourse;

$tdatacourse[".listFields"] = array();
$tdatacourse[".listFields"][] = "color";
$tdatacourse[".listFields"][] = "Name";
$tdatacourse[".listFields"][] = "Shortname";

$tdatacourse[".viewFields"] = array();

$tdatacourse[".addFields"] = array();

$tdatacourse[".inlineAddFields"] = array();
$tdatacourse[".inlineAddFields"][] = "color";
$tdatacourse[".inlineAddFields"][] = "Name";
$tdatacourse[".inlineAddFields"][] = "Shortname";

$tdatacourse[".editFields"] = array();

$tdatacourse[".inlineEditFields"] = array();
$tdatacourse[".inlineEditFields"][] = "color";
$tdatacourse[".inlineEditFields"][] = "Name";
$tdatacourse[".inlineEditFields"][] = "Shortname";

$tdatacourse[".exportFields"] = array();

$tdatacourse[".printFields"] = array();

//	CourseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CourseID";
	$fdata["GoodName"] = "CourseID";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = "Module"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "CourseID"; 
		$fdata["FullName"] = "CourseID";
	
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
	
		
		
	$tdatacourse["CourseID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "Name";
	
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
			$edata["EditParams"].= " maxlength=200";
	
		$edata["inputStyle"] = " width:200px;";
	$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacourse["Name"] = $fdata;
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = "Code"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Code"; 
		$fdata["FullName"] = "Code";
	
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
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:60px;";
	$edata["controlWidth"] = 60;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacourse["Code"] = $fdata;
//	Shortname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Shortname";
	$fdata["GoodName"] = "Shortname";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = "Shortname"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Shortname"; 
		$fdata["FullName"] = "Shortname";
	
		
		
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
			
		$edata["inputStyle"] = " width:60px;";
	$edata["controlWidth"] = 60;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacourse["Shortname"] = $fdata;
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "course";
	$fdata["Label"] = "Color"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "color"; 
		$fdata["FullName"] = "color";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "ColorPicker");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:2px;";
	$edata["controlWidth"] = 2;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacourse["color"] = $fdata;

	
$tables_data["course"]=&$tdatacourse;
$field_labels["course"] = &$fieldLabelscourse;
$fieldToolTips["course"] = &$fieldToolTipscourse;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["course"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["course"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_course()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CourseID,   Name,   Code,   Shortname,   color";
$proto0["m_strFrom"] = "FROM course";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY CourseID";
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
	"m_strName" => "CourseID",
	"m_strTable" => "course"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "course"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "course"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Shortname",
	"m_strTable" => "course"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "course"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "course";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "CourseID";
$proto16["m_columns"][] = "Name";
$proto16["m_columns"][] = "Code";
$proto16["m_columns"][] = "Shortname";
$proto16["m_columns"][] = "color";
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
	"m_strName" => "CourseID",
	"m_strTable" => "course"
));

$proto19["m_column"]=$obj;
$proto19["m_bAsc"] = 1;
$proto19["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto19);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_course = createSqlQuery_course();
					$tdatacourse[".sqlquery"] = $queryData_course;

$tableEvents["course"] = new eventsBase;
$tdatacourse[".hasEvents"] = false;

$cipherer = new RunnerCipherer("course");

?>