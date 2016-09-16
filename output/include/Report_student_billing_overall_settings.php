<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_student_billing_overall = array();
	$tdataReport_student_billing_overall[".NumberOfChars"] = 80; 
	$tdataReport_student_billing_overall[".ShortName"] = "Report_student_billing_overall";
	$tdataReport_student_billing_overall[".OwnerID"] = "";
	$tdataReport_student_billing_overall[".OriginalTable"] = "student_billing";

//	field labels
$fieldLabelsReport_student_billing_overall = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_student_billing_overall["English"] = array();
	$fieldToolTipsReport_student_billing_overall["English"] = array();
	$fieldLabelsReport_student_billing_overall["English"]["bill"] = "Charge";
	$fieldToolTipsReport_student_billing_overall["English"]["bill"] = "";
	$fieldLabelsReport_student_billing_overall["English"]["bal"] = "Balance";
	$fieldToolTipsReport_student_billing_overall["English"]["bal"] = "";
	$fieldLabelsReport_student_billing_overall["English"]["paid"] = "Paid";
	$fieldToolTipsReport_student_billing_overall["English"]["paid"] = "";
	$fieldLabelsReport_student_billing_overall["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_student_billing_overall["English"]["BatchID"] = "";
	$fieldLabelsReport_student_billing_overall["English"]["ProgramID"] = "Course";
	$fieldToolTipsReport_student_billing_overall["English"]["ProgramID"] = "";
	$fieldLabelsReport_student_billing_overall["English"]["detail"] = "Detail";
	$fieldToolTipsReport_student_billing_overall["English"]["detail"] = "";
	$fieldLabelsReport_student_billing_overall["English"]["proid"] = "Proid";
	$fieldToolTipsReport_student_billing_overall["English"]["proid"] = "";
	if (count($fieldToolTipsReport_student_billing_overall["English"]))
		$tdataReport_student_billing_overall[".isUseToolTips"] = true;
}
	
	
	$tdataReport_student_billing_overall[".NCSearch"] = true;



$tdataReport_student_billing_overall[".shortTableName"] = "Report_student_billing_overall";
$tdataReport_student_billing_overall[".nSecOptions"] = 0;
$tdataReport_student_billing_overall[".recsPerRowList"] = 1;
$tdataReport_student_billing_overall[".mainTableOwnerID"] = "";
$tdataReport_student_billing_overall[".moveNext"] = 1;
$tdataReport_student_billing_overall[".nType"] = 1;

$tdataReport_student_billing_overall[".strOriginalTableName"] = "student_billing";




$tdataReport_student_billing_overall[".showAddInPopup"] = false;

$tdataReport_student_billing_overall[".showEditInPopup"] = false;

$tdataReport_student_billing_overall[".showViewInPopup"] = false;

$tdataReport_student_billing_overall[".fieldsForRegister"] = array();
	
$tdataReport_student_billing_overall[".listAjax"] = false;

	$tdataReport_student_billing_overall[".audit"] = true;

	$tdataReport_student_billing_overall[".locking"] = false;

$tdataReport_student_billing_overall[".listIcons"] = true;

$tdataReport_student_billing_overall[".exportTo"] = true;



$tdataReport_student_billing_overall[".showSimpleSearchOptions"] = true;

$tdataReport_student_billing_overall[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_student_billing_overall[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_student_billing_overall[".isUseAjaxSuggest"] = true;

$tdataReport_student_billing_overall[".rowHighlite"] = true;

// button handlers file names
$tdataReport_student_billing_overall[".isUsebuttonHandlers"] = true;
$tdataReport_student_billing_overall[".isUsebuttonHandlers"] = true;

$tdataReport_student_billing_overall[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_student_billing_overall[".isUseTimeForSearch"] = false;




$tdataReport_student_billing_overall[".allSearchFields"] = array();

$tdataReport_student_billing_overall[".allSearchFields"][] = "ProgramID";
$tdataReport_student_billing_overall[".allSearchFields"][] = "BatchID";

$tdataReport_student_billing_overall[".googleLikeFields"][] = "proid";
$tdataReport_student_billing_overall[".googleLikeFields"][] = "ProgramID";
$tdataReport_student_billing_overall[".googleLikeFields"][] = "BatchID";
$tdataReport_student_billing_overall[".googleLikeFields"][] = "detail";

$tdataReport_student_billing_overall[".panelSearchFields"][] = "ProgramID";
$tdataReport_student_billing_overall[".panelSearchFields"][] = "BatchID";

$tdataReport_student_billing_overall[".advSearchFields"][] = "ProgramID";
$tdataReport_student_billing_overall[".advSearchFields"][] = "BatchID";

$tdataReport_student_billing_overall[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main


$tdataReport_student_billing_overall[".totalsFields"][] = array(
	"fName" => "bill", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Currency');
$tdataReport_student_billing_overall[".totalsFields"][] = array(
	"fName" => "paid", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Currency');
$tdataReport_student_billing_overall[".totalsFields"][] = array(
	"fName" => "bal", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Currency');

$tdataReport_student_billing_overall[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY program_billing.BatchID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_student_billing_overall[".strOrderBy"] = $tstrOrderBy;

$tdataReport_student_billing_overall[".orderindexes"] = array();
$tdataReport_student_billing_overall[".orderindexes"][] = array(6, (0 ? "ASC" : "DESC"), "program_billing.BatchID");

$tdataReport_student_billing_overall[".sqlHead"] = "SELECT program_billing.proid,  SUM(program_billing.amount) AS bill,  SUM(amount_balance) AS bal,  SUM(student_billing.amount)-SUM(student_billing.amount_balance) AS paid,  program_billing.ProgramID,  program_billing.BatchID,  program_billing.BatchID AS detail";
$tdataReport_student_billing_overall[".sqlFrom"] = "FROM program_billing  INNER JOIN student_billing ON program_billing.proid = student_billing.proid";
$tdataReport_student_billing_overall[".sqlWhereExpr"] = "";
$tdataReport_student_billing_overall[".sqlTail"] = "GROUP BY program_billing.ProgramID, program_billing.BatchID";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_student_billing_overall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_student_billing_overall[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_student_billing_overall = array();
$tdataReport_student_billing_overall[".Keys"] = $tableKeysReport_student_billing_overall;

$tdataReport_student_billing_overall[".listFields"] = array();
$tdataReport_student_billing_overall[".listFields"][] = "ProgramID";
$tdataReport_student_billing_overall[".listFields"][] = "BatchID";
$tdataReport_student_billing_overall[".listFields"][] = "bill";
$tdataReport_student_billing_overall[".listFields"][] = "paid";
$tdataReport_student_billing_overall[".listFields"][] = "bal";
$tdataReport_student_billing_overall[".listFields"][] = "detail";

$tdataReport_student_billing_overall[".viewFields"] = array();

$tdataReport_student_billing_overall[".addFields"] = array();

$tdataReport_student_billing_overall[".inlineAddFields"] = array();

$tdataReport_student_billing_overall[".editFields"] = array();

$tdataReport_student_billing_overall[".inlineEditFields"] = array();

$tdataReport_student_billing_overall[".exportFields"] = array();
$tdataReport_student_billing_overall[".exportFields"][] = "ProgramID";
$tdataReport_student_billing_overall[".exportFields"][] = "BatchID";
$tdataReport_student_billing_overall[".exportFields"][] = "bill";
$tdataReport_student_billing_overall[".exportFields"][] = "paid";
$tdataReport_student_billing_overall[".exportFields"][] = "bal";

$tdataReport_student_billing_overall[".printFields"] = array();

//	proid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "proid";
	$fdata["GoodName"] = "proid";
	$fdata["ownerTable"] = "program_billing";
	$fdata["Label"] = "Proid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "proid"; 
		$fdata["FullName"] = "program_billing.proid";
	
		
		
				
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
	
		
		
	$tdataReport_student_billing_overall["proid"] = $fdata;
//	bill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "bill";
	$fdata["GoodName"] = "bill";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Charge"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "bill"; 
		$fdata["FullName"] = "SUM(program_billing.amount)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Currency");
	
		
		
		
			
		
		
		
		
		
		
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
	
		
		
	$tdataReport_student_billing_overall["bill"] = $fdata;
//	bal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "bal";
	$fdata["GoodName"] = "bal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Balance"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "bal"; 
		$fdata["FullName"] = "SUM(amount_balance)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Currency");
	
		
		
		
			
		
		
		
		
		
		
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
	
		
		
	$tdataReport_student_billing_overall["bal"] = $fdata;
//	paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "paid";
	$fdata["GoodName"] = "paid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Paid"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "paid"; 
		$fdata["FullName"] = "SUM(student_billing.amount)-SUM(student_billing.amount_balance)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Currency");
	
		
		
		
			
		
		
		
		
		
		
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
	
		
		
	$tdataReport_student_billing_overall["paid"] = $fdata;
//	ProgramID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProgramID";
	$fdata["GoodName"] = "ProgramID";
	$fdata["ownerTable"] = "program_billing";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProgramID"; 
		$fdata["FullName"] = "program_billing.ProgramID";
	
		
		
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
				
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "shortcut_name";
	
		
	$edata["LookupTable"] = "program";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_student_billing_overall["ProgramID"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "program_billing";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "program_billing.BatchID";
	
		
		
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
	
		
		
	$tdataReport_student_billing_overall["BatchID"] = $fdata;
//	detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "detail";
	$fdata["GoodName"] = "detail";
	$fdata["ownerTable"] = "program_billing";
	$fdata["Label"] = "Detail"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "program_billing.BatchID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataReport_student_billing_overall["detail"] = $fdata;

	
$tables_data["Report_student_billing_overall"]=&$tdataReport_student_billing_overall;
$field_labels["Report_student_billing_overall"] = &$fieldLabelsReport_student_billing_overall;
$fieldToolTips["Report_student_billing_overall"] = &$fieldToolTipsReport_student_billing_overall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_student_billing_overall"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_student_billing_overall"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_student_billing_overall()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "program_billing.proid,  SUM(program_billing.amount) AS bill,  SUM(amount_balance) AS bal,  SUM(student_billing.amount)-SUM(student_billing.amount_balance) AS paid,  program_billing.ProgramID,  program_billing.BatchID,  program_billing.BatchID AS detail";
$proto0["m_strFrom"] = "FROM program_billing  INNER JOIN student_billing ON program_billing.proid = student_billing.proid";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY program_billing.BatchID DESC";
$proto0["m_strTail"] = "GROUP BY program_billing.ProgramID, program_billing.BatchID";
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
	"m_strName" => "proid",
	"m_strTable" => "program_billing"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$proto8=array();
$proto8["m_functiontype"] = "SQLF_SUM";
$proto8["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "program_billing"
));

$proto8["m_arguments"][]=$obj;
$proto8["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto8);

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "bill";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_SUM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "amount_balance"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "bal";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(student_billing.amount)-SUM(student_billing.amount_balance)"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "paid";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ProgramID",
	"m_strTable" => "program_billing"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "program_billing"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "program_billing"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "detail";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "program_billing";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "proid";
$proto22["m_columns"][] = "ProgramID";
$proto22["m_columns"][] = "BatchID";
$proto22["m_columns"][] = "item";
$proto22["m_columns"][] = "amount";
$proto22["m_columns"][] = "bill_date";
$proto22["m_columns"][] = "bill_no";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
												$proto25=array();
$proto25["m_link"] = "SQLL_INNERJOIN";
			$proto26=array();
$proto26["m_strName"] = "student_billing";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "student_bill_id";
$proto26["m_columns"][] = "proid";
$proto26["m_columns"][] = "studentID";
$proto26["m_columns"][] = "item";
$proto26["m_columns"][] = "amount";
$proto26["m_columns"][] = "status";
$proto26["m_columns"][] = "date";
$proto26["m_columns"][] = "amount_balance";
$proto26["m_columns"][] = "bill_no";
$proto26["m_columns"][] = "remark";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "program_billing.proid = student_billing.proid";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "proid",
	"m_strTable" => "program_billing"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= student_billing.proid";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "ProgramID",
	"m_strTable" => "program_billing"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "program_billing"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "program_billing"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 0;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_student_billing_overall = createSqlQuery_Report_student_billing_overall();
							$tdataReport_student_billing_overall[".sqlquery"] = $queryData_Report_student_billing_overall;

include_once(getabspath("include/Report_student_billing_overall_events.php"));
$tableEvents["Report_student_billing_overall"] = new eventclass_Report_student_billing_overall;
$tdataReport_student_billing_overall[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_student_billing_overall");

?>