<?php
require_once(getabspath("classes/cipherer.php"));
$tdataprogram_billing = array();
	$tdataprogram_billing[".NumberOfChars"] = 80; 
	$tdataprogram_billing[".ShortName"] = "program_billing";
	$tdataprogram_billing[".OwnerID"] = "";
	$tdataprogram_billing[".OriginalTable"] = "program_billing";

//	field labels
$fieldLabelsprogram_billing = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprogram_billing["English"] = array();
	$fieldToolTipsprogram_billing["English"] = array();
	$fieldLabelsprogram_billing["English"]["item"] = "Item";
	$fieldToolTipsprogram_billing["English"]["item"] = "";
	$fieldLabelsprogram_billing["English"]["amount"] = "Amount";
	$fieldToolTipsprogram_billing["English"]["amount"] = "";
	$fieldLabelsprogram_billing["English"]["bill_date"] = "Invoice Date";
	$fieldToolTipsprogram_billing["English"]["bill_date"] = "";
	$fieldLabelsprogram_billing["English"]["bill_no"] = "Semester";
	$fieldToolTipsprogram_billing["English"]["bill_no"] = "";
	$fieldLabelsprogram_billing["English"]["proid"] = "Proid";
	$fieldToolTipsprogram_billing["English"]["proid"] = "";
	$fieldLabelsprogram_billing["English"]["programID"] = "Course";
	$fieldToolTipsprogram_billing["English"]["programID"] = "";
	$fieldLabelsprogram_billing["English"]["batchID"] = "Batch";
	$fieldToolTipsprogram_billing["English"]["batchID"] = "";
	if (count($fieldToolTipsprogram_billing["English"]))
		$tdataprogram_billing[".isUseToolTips"] = true;
}
	
	
	$tdataprogram_billing[".NCSearch"] = true;



$tdataprogram_billing[".shortTableName"] = "program_billing";
$tdataprogram_billing[".nSecOptions"] = 0;
$tdataprogram_billing[".recsPerRowList"] = 1;
$tdataprogram_billing[".mainTableOwnerID"] = "";
$tdataprogram_billing[".moveNext"] = 1;
$tdataprogram_billing[".nType"] = 0;

$tdataprogram_billing[".strOriginalTableName"] = "program_billing";




$tdataprogram_billing[".showAddInPopup"] = false;

$tdataprogram_billing[".showEditInPopup"] = false;

$tdataprogram_billing[".showViewInPopup"] = false;

$tdataprogram_billing[".fieldsForRegister"] = array();
	
$tdataprogram_billing[".listAjax"] = false;

	$tdataprogram_billing[".audit"] = true;

	$tdataprogram_billing[".locking"] = false;

$tdataprogram_billing[".listIcons"] = true;
$tdataprogram_billing[".inlineEdit"] = true;
$tdataprogram_billing[".inlineAdd"] = true;



$tdataprogram_billing[".delete"] = true;

$tdataprogram_billing[".showSimpleSearchOptions"] = true;

$tdataprogram_billing[".showSearchPanel"] = true;

if (isMobile())
	$tdataprogram_billing[".isUseAjaxSuggest"] = false;
else 
	$tdataprogram_billing[".isUseAjaxSuggest"] = true;

$tdataprogram_billing[".rowHighlite"] = true;

// button handlers file names

$tdataprogram_billing[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprogram_billing[".isUseTimeForSearch"] = false;




$tdataprogram_billing[".allSearchFields"] = array();


$tdataprogram_billing[".googleLikeFields"][] = "proid";
$tdataprogram_billing[".googleLikeFields"][] = "programID";
$tdataprogram_billing[".googleLikeFields"][] = "batchID";
$tdataprogram_billing[".googleLikeFields"][] = "item";
$tdataprogram_billing[".googleLikeFields"][] = "amount";
$tdataprogram_billing[".googleLikeFields"][] = "bill_date";
$tdataprogram_billing[".googleLikeFields"][] = "bill_no";



$tdataprogram_billing[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main


$tdataprogram_billing[".totalsFields"][] = array(
	"fName" => "amount", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdataprogram_billing[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprogram_billing[".strOrderBy"] = $tstrOrderBy;

$tdataprogram_billing[".orderindexes"] = array();

$tdataprogram_billing[".sqlHead"] = "SELECT proid,   ProgramID,   BatchID,   item,   amount,   bill_date,   bill_no";
$tdataprogram_billing[".sqlFrom"] = "FROM program_billing";
$tdataprogram_billing[".sqlWhereExpr"] = "";
$tdataprogram_billing[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprogram_billing[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprogram_billing[".arrGroupsPerPage"] = $arrGPP;

$tableKeysprogram_billing = array();
$tableKeysprogram_billing[] = "proid";
$tdataprogram_billing[".Keys"] = $tableKeysprogram_billing;

$tdataprogram_billing[".listFields"] = array();
$tdataprogram_billing[".listFields"][] = "item";
$tdataprogram_billing[".listFields"][] = "amount";
$tdataprogram_billing[".listFields"][] = "bill_date";
$tdataprogram_billing[".listFields"][] = "bill_no";

$tdataprogram_billing[".viewFields"] = array();

$tdataprogram_billing[".addFields"] = array();

$tdataprogram_billing[".inlineAddFields"] = array();
$tdataprogram_billing[".inlineAddFields"][] = "item";
$tdataprogram_billing[".inlineAddFields"][] = "amount";
$tdataprogram_billing[".inlineAddFields"][] = "bill_date";
$tdataprogram_billing[".inlineAddFields"][] = "bill_no";

$tdataprogram_billing[".editFields"] = array();

$tdataprogram_billing[".inlineEditFields"] = array();
$tdataprogram_billing[".inlineEditFields"][] = "item";
$tdataprogram_billing[".inlineEditFields"][] = "amount";
$tdataprogram_billing[".inlineEditFields"][] = "bill_date";
$tdataprogram_billing[".inlineEditFields"][] = "bill_no";

$tdataprogram_billing[".exportFields"] = array();

$tdataprogram_billing[".printFields"] = array();

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
		$fdata["FullName"] = "proid";
	
		
		
				
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
	
		
		
	$tdataprogram_billing["proid"] = $fdata;
//	programID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "programID";
	$fdata["GoodName"] = "programID";
	$fdata["ownerTable"] = "program_billing";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ProgramID"; 
		$fdata["FullName"] = "ProgramID";
	
		
		
				
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
	
		
		
	$tdataprogram_billing["programID"] = $fdata;
//	batchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "batchID";
	$fdata["GoodName"] = "batchID";
	$fdata["ownerTable"] = "program_billing";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "BatchID";
	
		
		
				
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
	
		
		
	$tdataprogram_billing["batchID"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "program_billing";
	$fdata["Label"] = "Item"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "item"; 
		$fdata["FullName"] = "item";
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("program_billing"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "items";
	
		
	$edata["LookupTable"] = "setting_bill_item";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
			//	dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "amount";
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram_billing["item"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "program_billing";
	$fdata["Label"] = "Amount"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "amount"; 
		$fdata["FullName"] = "amount";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 1;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "amount";
	$edata["LinkFieldType"] = 5;
	$edata["DisplayField"] = "amount";
	
		
	$edata["LookupTable"] = "setting_bill_item";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "item"; 
	$edata["CategoryFilter"] = "id"; 
	
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram_billing["amount"] = $fdata;
//	bill_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "bill_date";
	$fdata["GoodName"] = "bill_date";
	$fdata["ownerTable"] = "program_billing";
	$fdata["Label"] = "Invoice Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "bill_date"; 
		$fdata["FullName"] = "bill_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
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
	$edata["InitialYearFactor"] = 4; 
	$edata["LastYearFactor"] = 0; 
	
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram_billing["bill_date"] = $fdata;
//	bill_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "bill_no";
	$fdata["GoodName"] = "bill_no";
	$fdata["ownerTable"] = "program_billing";
	$fdata["Label"] = "Semester"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "bill_no"; 
		$fdata["FullName"] = "bill_no";
	
		
		
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
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";

	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram_billing["bill_no"] = $fdata;

	
$tables_data["program_billing"]=&$tdataprogram_billing;
$field_labels["program_billing"] = &$fieldLabelsprogram_billing;
$fieldToolTips["program_billing"] = &$fieldToolTipsprogram_billing;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["program_billing"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["program_billing"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="Program_Batch_Bill";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Program_Batch_Bill";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["program_billing"][$mIndex] = $masterParams;	
		$masterTablesData["program_billing"][$mIndex]["masterKeys"][]="DipID";
		$masterTablesData["program_billing"][$mIndex]["masterKeys"][]="BatchID";
		$masterTablesData["program_billing"][$mIndex]["detailKeys"][]="ProgramID";
		$masterTablesData["program_billing"][$mIndex]["detailKeys"][]="BatchID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_program_billing()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "proid,   ProgramID,   BatchID,   item,   amount,   bill_date,   bill_no";
$proto0["m_strFrom"] = "FROM program_billing";
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
	"m_strName" => "proid",
	"m_strTable" => "program_billing"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ProgramID",
	"m_strTable" => "program_billing"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "program_billing"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "program_billing"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "program_billing"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "bill_date",
	"m_strTable" => "program_billing"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "bill_no",
	"m_strTable" => "program_billing"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "program_billing";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "proid";
$proto20["m_columns"][] = "ProgramID";
$proto20["m_columns"][] = "BatchID";
$proto20["m_columns"][] = "item";
$proto20["m_columns"][] = "amount";
$proto20["m_columns"][] = "bill_date";
$proto20["m_columns"][] = "bill_no";
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
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_program_billing = createSqlQuery_program_billing();
							$tdataprogram_billing[".sqlquery"] = $queryData_program_billing;

include_once(getabspath("include/program_billing_events.php"));
$tableEvents["program_billing"] = new eventclass_program_billing;
$tdataprogram_billing[".hasEvents"] = true;

$cipherer = new RunnerCipherer("program_billing");

?>