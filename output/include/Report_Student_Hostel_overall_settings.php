<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Student_Hostel_overall = array();
	$tdataReport_Student_Hostel_overall[".NumberOfChars"] = 80; 
	$tdataReport_Student_Hostel_overall[".ShortName"] = "Report_Student_Hostel_overall";
	$tdataReport_Student_Hostel_overall[".OwnerID"] = "";
	$tdataReport_Student_Hostel_overall[".OriginalTable"] = "student_hostel";

//	field labels
$fieldLabelsReport_Student_Hostel_overall = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Student_Hostel_overall["English"] = array();
	$fieldToolTipsReport_Student_Hostel_overall["English"] = array();
	$fieldLabelsReport_Student_Hostel_overall["English"]["HostelID"] = "Hostel";
	$fieldToolTipsReport_Student_Hostel_overall["English"]["HostelID"] = "";
	$fieldLabelsReport_Student_Hostel_overall["English"]["No_Student"] = "No Student";
	$fieldToolTipsReport_Student_Hostel_overall["English"]["No_Student"] = "";
	$fieldLabelsReport_Student_Hostel_overall["English"]["No_Avaibility"] = "No Avaibility";
	$fieldToolTipsReport_Student_Hostel_overall["English"]["No_Avaibility"] = "";
	if (count($fieldToolTipsReport_Student_Hostel_overall["English"]))
		$tdataReport_Student_Hostel_overall[".isUseToolTips"] = true;
}
	
	



$tdataReport_Student_Hostel_overall[".shortTableName"] = "Report_Student_Hostel_overall";
$tdataReport_Student_Hostel_overall[".nSecOptions"] = 0;
$tdataReport_Student_Hostel_overall[".recsPerRowList"] = 1;
$tdataReport_Student_Hostel_overall[".mainTableOwnerID"] = "";
$tdataReport_Student_Hostel_overall[".moveNext"] = 1;
$tdataReport_Student_Hostel_overall[".nType"] = 1;

$tdataReport_Student_Hostel_overall[".strOriginalTableName"] = "student_hostel";




$tdataReport_Student_Hostel_overall[".showAddInPopup"] = false;

$tdataReport_Student_Hostel_overall[".showEditInPopup"] = false;

$tdataReport_Student_Hostel_overall[".showViewInPopup"] = false;

$tdataReport_Student_Hostel_overall[".fieldsForRegister"] = array();
	
$tdataReport_Student_Hostel_overall[".listAjax"] = false;

	$tdataReport_Student_Hostel_overall[".audit"] = true;

	$tdataReport_Student_Hostel_overall[".locking"] = false;

$tdataReport_Student_Hostel_overall[".listIcons"] = true;




$tdataReport_Student_Hostel_overall[".showSimpleSearchOptions"] = true;

$tdataReport_Student_Hostel_overall[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Student_Hostel_overall[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Student_Hostel_overall[".isUseAjaxSuggest"] = true;

$tdataReport_Student_Hostel_overall[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Student_Hostel_overall[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Student_Hostel_overall[".isUseTimeForSearch"] = false;




$tdataReport_Student_Hostel_overall[".allSearchFields"] = array();


$tdataReport_Student_Hostel_overall[".googleLikeFields"][] = "No_Student";
$tdataReport_Student_Hostel_overall[".googleLikeFields"][] = "No_Avaibility";

$tdataReport_Student_Hostel_overall[".panelSearchFields"][] = "HostelID";


$tdataReport_Student_Hostel_overall[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Student_Hostel_overall[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Student_Hostel_overall[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Student_Hostel_overall[".orderindexes"] = array();

$tdataReport_Student_Hostel_overall[".sqlHead"] = "SELECT HostelID,  COUNT(StudentID) AS No_Student,  coalesce(sum(CheckInDate=''), 0) AS No_Avaibility";
$tdataReport_Student_Hostel_overall[".sqlFrom"] = "FROM student_hostel";
$tdataReport_Student_Hostel_overall[".sqlWhereExpr"] = "";
$tdataReport_Student_Hostel_overall[".sqlTail"] = "GROUP BY HostelID";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Student_Hostel_overall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Student_Hostel_overall[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Student_Hostel_overall = array();
$tdataReport_Student_Hostel_overall[".Keys"] = $tableKeysReport_Student_Hostel_overall;

$tdataReport_Student_Hostel_overall[".listFields"] = array();
$tdataReport_Student_Hostel_overall[".listFields"][] = "HostelID";
$tdataReport_Student_Hostel_overall[".listFields"][] = "No_Student";
$tdataReport_Student_Hostel_overall[".listFields"][] = "No_Avaibility";

$tdataReport_Student_Hostel_overall[".viewFields"] = array();

$tdataReport_Student_Hostel_overall[".addFields"] = array();

$tdataReport_Student_Hostel_overall[".inlineAddFields"] = array();

$tdataReport_Student_Hostel_overall[".editFields"] = array();

$tdataReport_Student_Hostel_overall[".inlineEditFields"] = array();

$tdataReport_Student_Hostel_overall[".exportFields"] = array();

$tdataReport_Student_Hostel_overall[".printFields"] = array();

//	HostelID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HostelID";
	$fdata["GoodName"] = "HostelID";
	$fdata["ownerTable"] = "student_hostel";
	$fdata["Label"] = "Hostel"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "HostelID"; 
		$fdata["FullName"] = "HostelID";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		$vdata["LinkPrefix"] ="files/"; 
	
		
			
		
		
		
		
		
		
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
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=37";
	
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:80px;";
	$edata["controlWidth"] = 80;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Hostel_overall["HostelID"] = $fdata;
//	No_Student
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "No_Student";
	$fdata["GoodName"] = "No_Student";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "No Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "No_Student"; 
		$fdata["FullName"] = "COUNT(StudentID)";
	
		
		
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
	
		
		
	$tdataReport_Student_Hostel_overall["No_Student"] = $fdata;
//	No_Avaibility
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "No_Avaibility";
	$fdata["GoodName"] = "No_Avaibility";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "No Avaibility"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "No_Avaibility"; 
		$fdata["FullName"] = "coalesce(sum(CheckInDate=''), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Hostel_overall["No_Avaibility"] = $fdata;

	
$tables_data["Report_Student_Hostel_overall"]=&$tdataReport_Student_Hostel_overall;
$field_labels["Report_Student_Hostel_overall"] = &$fieldLabelsReport_Student_Hostel_overall;
$fieldToolTips["Report_Student_Hostel_overall"] = &$fieldToolTipsReport_Student_Hostel_overall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Student_Hostel_overall"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Student_Hostel_overall"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Student_Hostel_overall()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HostelID,  COUNT(StudentID) AS No_Student,  coalesce(sum(CheckInDate=''), 0) AS No_Avaibility";
$proto0["m_strFrom"] = "FROM student_hostel";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY HostelID";
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
	"m_strName" => "HostelID",
	"m_strTable" => "student_hostel"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$proto8=array();
$proto8["m_functiontype"] = "SQLF_COUNT";
$proto8["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_hostel"
));

$proto8["m_arguments"][]=$obj;
$proto8["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto8);

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "No_Student";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(CheckInDate='')"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto11);

$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "No_Avaibility";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "student_hostel";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "StudentID";
$proto15["m_columns"][] = "HostelID";
$proto15["m_columns"][] = "Room_No";
$proto15["m_columns"][] = "CheckInDate";
$proto15["m_columns"][] = "CheckOutDate";
$proto15["m_columns"][] = "Items";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_alias"] = "";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = "0";
$proto16["m_inBrackets"] = "0";
$proto16["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "HostelID",
	"m_strTable" => "student_hostel"
));

$proto18["m_column"]=$obj;
$obj = new SQLGroupByItem($proto18);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Student_Hostel_overall = createSqlQuery_Report_Student_Hostel_overall();
			$tdataReport_Student_Hostel_overall[".sqlquery"] = $queryData_Report_Student_Hostel_overall;

$tableEvents["Report_Student_Hostel_overall"] = new eventsBase;
$tdataReport_Student_Hostel_overall[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Report_Student_Hostel_overall");

?>