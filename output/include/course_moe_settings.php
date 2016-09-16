<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacourse_moe = array();
	$tdatacourse_moe[".NumberOfChars"] = 80; 
	$tdatacourse_moe[".ShortName"] = "course_moe";
	$tdatacourse_moe[".OwnerID"] = "";
	$tdatacourse_moe[".OriginalTable"] = "course_moe";

//	field labels
$fieldLabelscourse_moe = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscourse_moe["English"] = array();
	$fieldToolTipscourse_moe["English"] = array();
	$fieldLabelscourse_moe["English"]["CourseID"] = "Course";
	$fieldToolTipscourse_moe["English"]["CourseID"] = "";
	$fieldLabelscourse_moe["English"]["Name"] = "Name";
	$fieldToolTipscourse_moe["English"]["Name"] = "";
	$fieldLabelscourse_moe["English"]["Code"] = "Code";
	$fieldToolTipscourse_moe["English"]["Code"] = "";
	$fieldLabelscourse_moe["English"]["Credit"] = "Credit";
	$fieldToolTipscourse_moe["English"]["Credit"] = "";
	$fieldLabelscourse_moe["English"]["Shortname"] = "Shortname";
	$fieldToolTipscourse_moe["English"]["Shortname"] = "";
	$fieldLabelscourse_moe["English"]["color"] = "Color";
	$fieldToolTipscourse_moe["English"]["color"] = "";
	$fieldLabelscourse_moe["English"]["sem"] = "Sem";
	$fieldToolTipscourse_moe["English"]["sem"] = "";
	if (count($fieldToolTipscourse_moe["English"]))
		$tdatacourse_moe[".isUseToolTips"] = true;
}
	
	
	$tdatacourse_moe[".NCSearch"] = true;



$tdatacourse_moe[".shortTableName"] = "course_moe";
$tdatacourse_moe[".nSecOptions"] = 0;
$tdatacourse_moe[".recsPerRowList"] = 1;
$tdatacourse_moe[".mainTableOwnerID"] = "";
$tdatacourse_moe[".moveNext"] = 1;
$tdatacourse_moe[".nType"] = 0;

$tdatacourse_moe[".strOriginalTableName"] = "course_moe";




$tdatacourse_moe[".showAddInPopup"] = false;

$tdatacourse_moe[".showEditInPopup"] = false;

$tdatacourse_moe[".showViewInPopup"] = false;

$tdatacourse_moe[".fieldsForRegister"] = array();
	
$tdatacourse_moe[".listAjax"] = false;

	$tdatacourse_moe[".audit"] = true;

	$tdatacourse_moe[".locking"] = false;

$tdatacourse_moe[".listIcons"] = true;
$tdatacourse_moe[".inlineEdit"] = true;
$tdatacourse_moe[".inlineAdd"] = true;



$tdatacourse_moe[".delete"] = true;

$tdatacourse_moe[".showSimpleSearchOptions"] = true;

$tdatacourse_moe[".showSearchPanel"] = true;

if (isMobile())
	$tdatacourse_moe[".isUseAjaxSuggest"] = false;
else 
	$tdatacourse_moe[".isUseAjaxSuggest"] = true;

$tdatacourse_moe[".rowHighlite"] = true;

// button handlers file names
$tdatacourse_moe[".isUsebuttonHandlers"] = true;

$tdatacourse_moe[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacourse_moe[".isUseTimeForSearch"] = false;




$tdatacourse_moe[".allSearchFields"] = array();

$tdatacourse_moe[".allSearchFields"][] = "Name";
$tdatacourse_moe[".allSearchFields"][] = "Code";
$tdatacourse_moe[".allSearchFields"][] = "sem";


$tdatacourse_moe[".panelSearchFields"][] = "Name";
$tdatacourse_moe[".panelSearchFields"][] = "Code";
$tdatacourse_moe[".panelSearchFields"][] = "Credit";
$tdatacourse_moe[".panelSearchFields"][] = "sem";

$tdatacourse_moe[".advSearchFields"][] = "Name";
$tdatacourse_moe[".advSearchFields"][] = "Code";
$tdatacourse_moe[".advSearchFields"][] = "sem";

$tdatacourse_moe[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacourse_moe[".pageSize"] = 100;

$tstrOrderBy = "ORDER BY sem, Code";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacourse_moe[".strOrderBy"] = $tstrOrderBy;

$tdatacourse_moe[".orderindexes"] = array();
$tdatacourse_moe[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "sem");
$tdatacourse_moe[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "Code");

$tdatacourse_moe[".sqlHead"] = "SELECT CourseID,  Name,  Code,  Credit,  Shortname,  color,  sem";
$tdatacourse_moe[".sqlFrom"] = "FROM course_moe";
$tdatacourse_moe[".sqlWhereExpr"] = "";
$tdatacourse_moe[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacourse_moe[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacourse_moe[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscourse_moe = array();
$tableKeyscourse_moe[] = "CourseID";
$tdatacourse_moe[".Keys"] = $tableKeyscourse_moe;

$tdatacourse_moe[".listFields"] = array();
$tdatacourse_moe[".listFields"][] = "Name";
$tdatacourse_moe[".listFields"][] = "Code";
$tdatacourse_moe[".listFields"][] = "Shortname";
$tdatacourse_moe[".listFields"][] = "sem";

$tdatacourse_moe[".viewFields"] = array();

$tdatacourse_moe[".addFields"] = array();

$tdatacourse_moe[".inlineAddFields"] = array();
$tdatacourse_moe[".inlineAddFields"][] = "Name";
$tdatacourse_moe[".inlineAddFields"][] = "Code";
$tdatacourse_moe[".inlineAddFields"][] = "Shortname";
$tdatacourse_moe[".inlineAddFields"][] = "sem";

$tdatacourse_moe[".editFields"] = array();

$tdatacourse_moe[".inlineEditFields"] = array();
$tdatacourse_moe[".inlineEditFields"][] = "Name";
$tdatacourse_moe[".inlineEditFields"][] = "Code";
$tdatacourse_moe[".inlineEditFields"][] = "Shortname";
$tdatacourse_moe[".inlineEditFields"][] = "sem";

$tdatacourse_moe[".exportFields"] = array();

$tdatacourse_moe[".printFields"] = array();

//	CourseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CourseID";
	$fdata["GoodName"] = "CourseID";
	$fdata["ownerTable"] = "course_moe";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "CourseID"; 
		$fdata["FullName"] = "CourseID";
	
		
		
				
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
	
		
		
	$tdatacourse_moe["CourseID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "course_moe";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "Name";
	
		
		
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacourse_moe["Name"] = $fdata;
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "course_moe";
	$fdata["Label"] = "Code"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Code"; 
		$fdata["FullName"] = "Code";
	
		
		
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
			$edata["EditParams"].= " maxlength=7";
	
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacourse_moe["Code"] = $fdata;
//	Credit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Credit";
	$fdata["GoodName"] = "Credit";
	$fdata["ownerTable"] = "course_moe";
	$fdata["Label"] = "Credit"; 
	$fdata["FieldType"] = 14;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Credit"; 
		$fdata["FullName"] = "Credit";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
	
		
		
	$tdatacourse_moe["Credit"] = $fdata;
//	Shortname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Shortname";
	$fdata["GoodName"] = "Shortname";
	$fdata["ownerTable"] = "course_moe";
	$fdata["Label"] = "Shortname"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacourse_moe["Shortname"] = $fdata;
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "course_moe";
	$fdata["Label"] = "Color"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "color"; 
		$fdata["FullName"] = "color";
	
		
		
				
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
	
		
		
	$tdatacourse_moe["color"] = $fdata;
//	sem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sem";
	$fdata["GoodName"] = "sem";
	$fdata["ownerTable"] = "course_moe";
	$fdata["Label"] = "Sem"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sem"; 
		$fdata["FullName"] = "sem";
	
		
		
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
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:60px;";
	$edata["controlWidth"] = 60;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacourse_moe["sem"] = $fdata;

	
$tables_data["course_moe"]=&$tdatacourse_moe;
$field_labels["course_moe"] = &$fieldLabelscourse_moe;
$fieldToolTips["course_moe"] = &$fieldToolTipscourse_moe;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["course_moe"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["course_moe"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_course_moe()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CourseID,  Name,  Code,  Credit,  Shortname,  color,  sem";
$proto0["m_strFrom"] = "FROM course_moe";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY sem, Code";
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
	"m_strTable" => "course_moe"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "course_moe"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "course_moe"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Credit",
	"m_strTable" => "course_moe"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Shortname",
	"m_strTable" => "course_moe"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "course_moe"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sem",
	"m_strTable" => "course_moe"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "course_moe";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "CourseID";
$proto20["m_columns"][] = "Name";
$proto20["m_columns"][] = "Code";
$proto20["m_columns"][] = "Credit";
$proto20["m_columns"][] = "Shortname";
$proto20["m_columns"][] = "color";
$proto20["m_columns"][] = "sem";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "sem",
	"m_strTable" => "course_moe"
));

$proto23["m_column"]=$obj;
$proto23["m_bAsc"] = 1;
$proto23["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto23);

$proto0["m_orderby"][]=$obj;					
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "course_moe"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 1;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_course_moe = createSqlQuery_course_moe();
							$tdatacourse_moe[".sqlquery"] = $queryData_course_moe;

include_once(getabspath("include/course_moe_events.php"));
$tableEvents["course_moe"] = new eventclass_course_moe;
$tdatacourse_moe[".hasEvents"] = true;

$cipherer = new RunnerCipherer("course_moe");

?>