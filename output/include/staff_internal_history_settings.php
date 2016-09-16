<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastaff_internal_history = array();
	$tdatastaff_internal_history[".NumberOfChars"] = 80; 
	$tdatastaff_internal_history[".ShortName"] = "staff_internal_history";
	$tdatastaff_internal_history[".OwnerID"] = "";
	$tdatastaff_internal_history[".OriginalTable"] = "staff_internal_history";

//	field labels
$fieldLabelsstaff_internal_history = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstaff_internal_history["English"] = array();
	$fieldToolTipsstaff_internal_history["English"] = array();
	$fieldLabelsstaff_internal_history["English"]["ID"] = "ID";
	$fieldToolTipsstaff_internal_history["English"]["ID"] = "";
	$fieldLabelsstaff_internal_history["English"]["StaffID"] = "Staff ID";
	$fieldToolTipsstaff_internal_history["English"]["StaffID"] = "";
	$fieldLabelsstaff_internal_history["English"]["designation"] = "Designation";
	$fieldToolTipsstaff_internal_history["English"]["designation"] = "";
	$fieldLabelsstaff_internal_history["English"]["department"] = "Department";
	$fieldToolTipsstaff_internal_history["English"]["department"] = "";
	$fieldLabelsstaff_internal_history["English"]["start_date"] = "Start Date";
	$fieldToolTipsstaff_internal_history["English"]["start_date"] = "";
	$fieldLabelsstaff_internal_history["English"]["end_date"] = "End Date";
	$fieldToolTipsstaff_internal_history["English"]["end_date"] = "";
	if (count($fieldToolTipsstaff_internal_history["English"]))
		$tdatastaff_internal_history[".isUseToolTips"] = true;
}
	
	
	$tdatastaff_internal_history[".NCSearch"] = true;



$tdatastaff_internal_history[".shortTableName"] = "staff_internal_history";
$tdatastaff_internal_history[".nSecOptions"] = 0;
$tdatastaff_internal_history[".recsPerRowList"] = 1;
$tdatastaff_internal_history[".mainTableOwnerID"] = "";
$tdatastaff_internal_history[".moveNext"] = 1;
$tdatastaff_internal_history[".nType"] = 0;

$tdatastaff_internal_history[".strOriginalTableName"] = "staff_internal_history";




$tdatastaff_internal_history[".showAddInPopup"] = false;

$tdatastaff_internal_history[".showEditInPopup"] = false;

$tdatastaff_internal_history[".showViewInPopup"] = false;

$tdatastaff_internal_history[".fieldsForRegister"] = array();
	
$tdatastaff_internal_history[".listAjax"] = false;

	$tdatastaff_internal_history[".audit"] = true;

	$tdatastaff_internal_history[".locking"] = false;

$tdatastaff_internal_history[".listIcons"] = true;
$tdatastaff_internal_history[".inlineEdit"] = true;
$tdatastaff_internal_history[".inlineAdd"] = true;



$tdatastaff_internal_history[".delete"] = true;

$tdatastaff_internal_history[".showSimpleSearchOptions"] = true;

$tdatastaff_internal_history[".showSearchPanel"] = true;

if (isMobile())
	$tdatastaff_internal_history[".isUseAjaxSuggest"] = false;
else 
	$tdatastaff_internal_history[".isUseAjaxSuggest"] = true;

$tdatastaff_internal_history[".rowHighlite"] = true;

// button handlers file names

$tdatastaff_internal_history[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastaff_internal_history[".isUseTimeForSearch"] = false;




$tdatastaff_internal_history[".allSearchFields"] = array();


$tdatastaff_internal_history[".googleLikeFields"][] = "ID";
$tdatastaff_internal_history[".googleLikeFields"][] = "StaffID";
$tdatastaff_internal_history[".googleLikeFields"][] = "designation";
$tdatastaff_internal_history[".googleLikeFields"][] = "department";
$tdatastaff_internal_history[".googleLikeFields"][] = "start_date";
$tdatastaff_internal_history[".googleLikeFields"][] = "end_date";



$tdatastaff_internal_history[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastaff_internal_history[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastaff_internal_history[".strOrderBy"] = $tstrOrderBy;

$tdatastaff_internal_history[".orderindexes"] = array();

$tdatastaff_internal_history[".sqlHead"] = "SELECT ID,   StaffID,   designation,   department,   start_date,   end_date";
$tdatastaff_internal_history[".sqlFrom"] = "FROM staff_internal_history";
$tdatastaff_internal_history[".sqlWhereExpr"] = "";
$tdatastaff_internal_history[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaff_internal_history[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaff_internal_history[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstaff_internal_history = array();
$tableKeysstaff_internal_history[] = "ID";
$tdatastaff_internal_history[".Keys"] = $tableKeysstaff_internal_history;

$tdatastaff_internal_history[".listFields"] = array();
$tdatastaff_internal_history[".listFields"][] = "designation";
$tdatastaff_internal_history[".listFields"][] = "department";
$tdatastaff_internal_history[".listFields"][] = "start_date";
$tdatastaff_internal_history[".listFields"][] = "end_date";

$tdatastaff_internal_history[".viewFields"] = array();

$tdatastaff_internal_history[".addFields"] = array();

$tdatastaff_internal_history[".inlineAddFields"] = array();
$tdatastaff_internal_history[".inlineAddFields"][] = "designation";
$tdatastaff_internal_history[".inlineAddFields"][] = "department";
$tdatastaff_internal_history[".inlineAddFields"][] = "start_date";
$tdatastaff_internal_history[".inlineAddFields"][] = "end_date";

$tdatastaff_internal_history[".editFields"] = array();

$tdatastaff_internal_history[".inlineEditFields"] = array();
$tdatastaff_internal_history[".inlineEditFields"][] = "designation";
$tdatastaff_internal_history[".inlineEditFields"][] = "department";
$tdatastaff_internal_history[".inlineEditFields"][] = "start_date";
$tdatastaff_internal_history[".inlineEditFields"][] = "end_date";

$tdatastaff_internal_history[".exportFields"] = array();

$tdatastaff_internal_history[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "staff_internal_history";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
		
		
				
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
	
		
		
	$tdatastaff_internal_history["ID"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "staff_internal_history";
	$fdata["Label"] = "Staff ID"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StaffID"; 
		$fdata["FullName"] = "StaffID";
	
		
		
				
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
	
		
		
	$tdatastaff_internal_history["StaffID"] = $fdata;
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "staff_internal_history";
	$fdata["Label"] = "Designation"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "designation"; 
		$fdata["FullName"] = "designation";
	
		
		
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
	
		$edata["inputStyle"] = " width:200px;";
	$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_internal_history["designation"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "staff_internal_history";
	$fdata["Label"] = "Department"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "department"; 
		$fdata["FullName"] = "department";
	
		
		
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
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "class=28";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_internal_history["department"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "staff_internal_history";
	$fdata["Label"] = "Start Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "start_date"; 
		$fdata["FullName"] = "start_date";
	
		
		
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
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_internal_history["start_date"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "staff_internal_history";
	$fdata["Label"] = "End Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "end_date"; 
		$fdata["FullName"] = "end_date";
	
		
		
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
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_internal_history["end_date"] = $fdata;

	
$tables_data["staff_internal_history"]=&$tdatastaff_internal_history;
$field_labels["staff_internal_history"] = &$fieldLabelsstaff_internal_history;
$fieldToolTips["staff_internal_history"] = &$fieldToolTipsstaff_internal_history;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["staff_internal_history"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["staff_internal_history"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="staff_info";
	$masterParams["mDataSourceTable"]="staff_info";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "staff_info";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["staff_internal_history"][$mIndex] = $masterParams;	
		$masterTablesData["staff_internal_history"][$mIndex]["masterKeys"][]="ID";
		$masterTablesData["staff_internal_history"][$mIndex]["detailKeys"][]="StaffID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_staff_internal_history()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   StaffID,   designation,   department,   start_date,   end_date";
$proto0["m_strFrom"] = "FROM staff_internal_history";
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
	"m_strName" => "ID",
	"m_strTable" => "staff_internal_history"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffID",
	"m_strTable" => "staff_internal_history"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "staff_internal_history"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "staff_internal_history"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "staff_internal_history"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "staff_internal_history"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "staff_internal_history";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "ID";
$proto18["m_columns"][] = "StaffID";
$proto18["m_columns"][] = "designation";
$proto18["m_columns"][] = "department";
$proto18["m_columns"][] = "start_date";
$proto18["m_columns"][] = "end_date";
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
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_staff_internal_history = createSqlQuery_staff_internal_history();
						$tdatastaff_internal_history[".sqlquery"] = $queryData_staff_internal_history;

$tableEvents["staff_internal_history"] = new eventsBase;
$tdatastaff_internal_history[".hasEvents"] = false;

$cipherer = new RunnerCipherer("staff_internal_history");

?>