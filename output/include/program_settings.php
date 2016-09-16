<?php
require_once(getabspath("classes/cipherer.php"));
$tdataprogram = array();
	$tdataprogram[".NumberOfChars"] = 80; 
	$tdataprogram[".ShortName"] = "program";
	$tdataprogram[".OwnerID"] = "";
	$tdataprogram[".OriginalTable"] = "program";

//	field labels
$fieldLabelsprogram = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprogram["English"] = array();
	$fieldToolTipsprogram["English"] = array();
	$fieldLabelsprogram["English"]["ID"] = "ID";
	$fieldToolTipsprogram["English"]["ID"] = "";
	$fieldLabelsprogram["English"]["Name"] = "Name";
	$fieldToolTipsprogram["English"]["Name"] = "";
	$fieldLabelsprogram["English"]["Code"] = "Code";
	$fieldToolTipsprogram["English"]["Code"] = "";
	$fieldLabelsprogram["English"]["priority"] = "Priority";
	$fieldToolTipsprogram["English"]["priority"] = "";
	$fieldLabelsprogram["English"]["type"] = "Type";
	$fieldToolTipsprogram["English"]["type"] = "";
	$fieldLabelsprogram["English"]["shortcut_name"] = "Shortcut Name";
	$fieldToolTipsprogram["English"]["shortcut_name"] = "";
	$fieldLabelsprogram["English"]["DipID"] = "Dip ID";
	$fieldToolTipsprogram["English"]["DipID"] = "";
	$fieldLabelsprogram["English"]["programID"] = "Program ID";
	$fieldToolTipsprogram["English"]["programID"] = "";
	$fieldLabelsprogram["English"]["ProgramID"] = "Program ID";
	$fieldToolTipsprogram["English"]["ProgramID"] = "";
	$fieldLabelsprogram["English"]["program"] = "Program";
	$fieldToolTipsprogram["English"]["program"] = "";
	if (count($fieldToolTipsprogram["English"]))
		$tdataprogram[".isUseToolTips"] = true;
}
	
	



$tdataprogram[".shortTableName"] = "program";
$tdataprogram[".nSecOptions"] = 0;
$tdataprogram[".recsPerRowList"] = 1;
$tdataprogram[".mainTableOwnerID"] = "";
$tdataprogram[".moveNext"] = 1;
$tdataprogram[".nType"] = 0;

$tdataprogram[".strOriginalTableName"] = "program";




$tdataprogram[".showAddInPopup"] = false;

$tdataprogram[".showEditInPopup"] = false;

$tdataprogram[".showViewInPopup"] = false;

$tdataprogram[".fieldsForRegister"] = array();
	
$tdataprogram[".listAjax"] = false;

	$tdataprogram[".audit"] = true;

	$tdataprogram[".locking"] = false;

$tdataprogram[".listIcons"] = true;
$tdataprogram[".inlineEdit"] = true;
$tdataprogram[".inlineAdd"] = true;



$tdataprogram[".delete"] = true;

$tdataprogram[".showSimpleSearchOptions"] = true;

$tdataprogram[".showSearchPanel"] = true;

if (isMobile())
	$tdataprogram[".isUseAjaxSuggest"] = false;
else 
	$tdataprogram[".isUseAjaxSuggest"] = true;

$tdataprogram[".rowHighlite"] = true;

// button handlers file names

$tdataprogram[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprogram[".isUseTimeForSearch"] = false;




$tdataprogram[".allSearchFields"] = array();

$tdataprogram[".allSearchFields"][] = "Name";
$tdataprogram[".allSearchFields"][] = "priority";
$tdataprogram[".allSearchFields"][] = "ID";
$tdataprogram[".allSearchFields"][] = "shortcut_name";
$tdataprogram[".allSearchFields"][] = "type";
$tdataprogram[".allSearchFields"][] = "Code";

$tdataprogram[".googleLikeFields"][] = "ID";
$tdataprogram[".googleLikeFields"][] = "Name";
$tdataprogram[".googleLikeFields"][] = "Code";
$tdataprogram[".googleLikeFields"][] = "priority";
$tdataprogram[".googleLikeFields"][] = "type";
$tdataprogram[".googleLikeFields"][] = "shortcut_name";

$tdataprogram[".panelSearchFields"][] = "Name";
$tdataprogram[".panelSearchFields"][] = "ID";
$tdataprogram[".panelSearchFields"][] = "Code";

$tdataprogram[".advSearchFields"][] = "priority";
$tdataprogram[".advSearchFields"][] = "Name";
$tdataprogram[".advSearchFields"][] = "shortcut_name";
$tdataprogram[".advSearchFields"][] = "type";
$tdataprogram[".advSearchFields"][] = "Code";

$tdataprogram[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataprogram[".pageSize"] = 30;

$tstrOrderBy = "ORDER BY priority";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprogram[".strOrderBy"] = $tstrOrderBy;

$tdataprogram[".orderindexes"] = array();
$tdataprogram[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "priority");

$tdataprogram[".sqlHead"] = "SELECT ID,  Name,  Code,  priority,  `type`,  shortcut_name";
$tdataprogram[".sqlFrom"] = "FROM program";
$tdataprogram[".sqlWhereExpr"] = "";
$tdataprogram[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Course_Selection1',
					   'tabName'=>"Course Selection",
					   'nType'=>'0',
					   'nOrder'=>7,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataprogram[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Course_Selection1',
					  'tabName'=>"Course Selection",
					  'nType'=>'0',
					  'nOrder'=>3,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataprogram[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Course_Selection1',
					   'tabName'=>"Course Selection",
					   'nType'=>'0',
					   'nOrder'=>8,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataprogram[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprogram[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprogram[".arrGroupsPerPage"] = $arrGPP;

$tableKeysprogram = array();
$tableKeysprogram[] = "ID";
$tdataprogram[".Keys"] = $tableKeysprogram;

$tdataprogram[".listFields"] = array();
$tdataprogram[".listFields"][] = "Name";
$tdataprogram[".listFields"][] = "shortcut_name";
$tdataprogram[".listFields"][] = "type";
$tdataprogram[".listFields"][] = "Code";

$tdataprogram[".viewFields"] = array();

$tdataprogram[".addFields"] = array();

$tdataprogram[".inlineAddFields"] = array();
$tdataprogram[".inlineAddFields"][] = "Name";
$tdataprogram[".inlineAddFields"][] = "shortcut_name";
$tdataprogram[".inlineAddFields"][] = "type";
$tdataprogram[".inlineAddFields"][] = "Code";

$tdataprogram[".editFields"] = array();

$tdataprogram[".inlineEditFields"] = array();
$tdataprogram[".inlineEditFields"][] = "Name";
$tdataprogram[".inlineEditFields"][] = "shortcut_name";
$tdataprogram[".inlineEditFields"][] = "type";
$tdataprogram[".inlineEditFields"][] = "Code";

$tdataprogram[".exportFields"] = array();

$tdataprogram[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "program";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
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
	
		
		
	$tdataprogram["ID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "program";
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
	
		$edata["inputStyle"] = " width:393px;";
	$edata["controlWidth"] = 393;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram["Name"] = $fdata;
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "program";
	$fdata["Label"] = "Code"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram["Code"] = $fdata;
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "program";
	$fdata["Label"] = "Priority"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "priority"; 
		$fdata["FullName"] = "priority";
	
		
		
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
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram["priority"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "program";
	$fdata["Label"] = "Type"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "type"; 
		$fdata["FullName"] = "`type`";
	
		
		
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
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=31";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram["type"] = $fdata;
//	shortcut_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "shortcut_name";
	$fdata["GoodName"] = "shortcut_name";
	$fdata["ownerTable"] = "program";
	$fdata["Label"] = "Shortcut Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "shortcut_name"; 
		$fdata["FullName"] = "shortcut_name";
	
		
		
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
			
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram["shortcut_name"] = $fdata;

	
$tables_data["program"]=&$tdataprogram;
$field_labels["program"] = &$fieldLabelsprogram;
$fieldToolTips["program"] = &$fieldToolTipsprogram;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["program"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["program"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_program()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Name,  Code,  priority,  `type`,  shortcut_name";
$proto0["m_strFrom"] = "FROM program";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY priority";
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
	"m_strName" => "ID",
	"m_strTable" => "program"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "program"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "program"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "program"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "program"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut_name",
	"m_strTable" => "program"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "program";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "ID";
$proto18["m_columns"][] = "Name";
$proto18["m_columns"][] = "Code";
$proto18["m_columns"][] = "priority";
$proto18["m_columns"][] = "type";
$proto18["m_columns"][] = "shortcut_name";
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
	"m_strName" => "priority",
	"m_strTable" => "program"
));

$proto21["m_column"]=$obj;
$proto21["m_bAsc"] = 1;
$proto21["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto21);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_program = createSqlQuery_program();
						$tdataprogram[".sqlquery"] = $queryData_program;

include_once(getabspath("include/program_events.php"));
$tableEvents["program"] = new eventclass_program;
$tdataprogram[".hasEvents"] = true;

$cipherer = new RunnerCipherer("program");

?>