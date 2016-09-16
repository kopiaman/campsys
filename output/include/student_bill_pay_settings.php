<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_bill_pay = array();
	$tdatastudent_bill_pay[".NumberOfChars"] = 80; 
	$tdatastudent_bill_pay[".ShortName"] = "student_bill_pay";
	$tdatastudent_bill_pay[".OwnerID"] = "";
	$tdatastudent_bill_pay[".OriginalTable"] = "student_payment";

//	field labels
$fieldLabelsstudent_bill_pay = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_bill_pay["English"] = array();
	$fieldToolTipsstudent_bill_pay["English"] = array();
	$fieldLabelsstudent_bill_pay["English"]["amount"] = "Payment";
	$fieldToolTipsstudent_bill_pay["English"]["amount"] = "";
	$fieldLabelsstudent_bill_pay["English"]["pay_date"] = "Date";
	$fieldToolTipsstudent_bill_pay["English"]["pay_date"] = "";
	$fieldLabelsstudent_bill_pay["English"]["studentID"] = "Student";
	$fieldToolTipsstudent_bill_pay["English"]["studentID"] = "";
	$fieldLabelsstudent_bill_pay["English"]["terms"] = "Terms";
	$fieldToolTipsstudent_bill_pay["English"]["terms"] = "";
	$fieldLabelsstudent_bill_pay["English"]["ref_no"] = "OR. No";
	$fieldToolTipsstudent_bill_pay["English"]["ref_no"] = "";
	$fieldLabelsstudent_bill_pay["English"]["pay_id"] = "Pay Id";
	$fieldToolTipsstudent_bill_pay["English"]["pay_id"] = "";
	$fieldLabelsstudent_bill_pay["English"]["student_bill_id"] = "Student Bill Id";
	$fieldToolTipsstudent_bill_pay["English"]["student_bill_id"] = "";
	$fieldLabelsstudent_bill_pay["English"][""] = "";
	$fieldToolTipsstudent_bill_pay["English"][""] = "";
	$fieldLabelsstudent_bill_pay["English"][""] = "";
	$fieldToolTipsstudent_bill_pay["English"][""] = "";
	if (count($fieldToolTipsstudent_bill_pay["English"]))
		$tdatastudent_bill_pay[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_bill_pay[".NCSearch"] = true;



$tdatastudent_bill_pay[".shortTableName"] = "student_bill_pay";
$tdatastudent_bill_pay[".nSecOptions"] = 0;
$tdatastudent_bill_pay[".recsPerRowList"] = 1;
$tdatastudent_bill_pay[".mainTableOwnerID"] = "";
$tdatastudent_bill_pay[".moveNext"] = 1;
$tdatastudent_bill_pay[".nType"] = 1;

$tdatastudent_bill_pay[".strOriginalTableName"] = "student_payment";




$tdatastudent_bill_pay[".showAddInPopup"] = false;

$tdatastudent_bill_pay[".showEditInPopup"] = false;

$tdatastudent_bill_pay[".showViewInPopup"] = false;

$tdatastudent_bill_pay[".fieldsForRegister"] = array();
	
$tdatastudent_bill_pay[".listAjax"] = false;

	$tdatastudent_bill_pay[".audit"] = true;

	$tdatastudent_bill_pay[".locking"] = false;

$tdatastudent_bill_pay[".listIcons"] = true;
$tdatastudent_bill_pay[".inlineEdit"] = true;
$tdatastudent_bill_pay[".inlineAdd"] = true;



$tdatastudent_bill_pay[".delete"] = true;

$tdatastudent_bill_pay[".showSimpleSearchOptions"] = true;

$tdatastudent_bill_pay[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_bill_pay[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_bill_pay[".isUseAjaxSuggest"] = true;

$tdatastudent_bill_pay[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_bill_pay[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_bill_pay[".isUseTimeForSearch"] = false;




$tdatastudent_bill_pay[".allSearchFields"] = array();


$tdatastudent_bill_pay[".googleLikeFields"][] = "pay_id";
$tdatastudent_bill_pay[".googleLikeFields"][] = "student_bill_id";
$tdatastudent_bill_pay[".googleLikeFields"][] = "amount";
$tdatastudent_bill_pay[".googleLikeFields"][] = "pay_date";
$tdatastudent_bill_pay[".googleLikeFields"][] = "studentID";
$tdatastudent_bill_pay[".googleLikeFields"][] = "terms";
$tdatastudent_bill_pay[".googleLikeFields"][] = "ref_no";



$tdatastudent_bill_pay[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_bill_pay[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_bill_pay[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_bill_pay[".orderindexes"] = array();

$tdatastudent_bill_pay[".sqlHead"] = "SELECT pay_id,   student_bill_id,   amount,   pay_date,   studentID,   terms,   ref_no";
$tdatastudent_bill_pay[".sqlFrom"] = "FROM student_payment";
$tdatastudent_bill_pay[".sqlWhereExpr"] = "";
$tdatastudent_bill_pay[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_bill_pay[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_bill_pay[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_bill_pay = array();
$tableKeysstudent_bill_pay[] = "pay_id";
$tdatastudent_bill_pay[".Keys"] = $tableKeysstudent_bill_pay;

$tdatastudent_bill_pay[".listFields"] = array();
$tdatastudent_bill_pay[".listFields"][] = "amount";
$tdatastudent_bill_pay[".listFields"][] = "pay_date";
$tdatastudent_bill_pay[".listFields"][] = "terms";
$tdatastudent_bill_pay[".listFields"][] = "ref_no";

$tdatastudent_bill_pay[".viewFields"] = array();

$tdatastudent_bill_pay[".addFields"] = array();

$tdatastudent_bill_pay[".inlineAddFields"] = array();
$tdatastudent_bill_pay[".inlineAddFields"][] = "amount";
$tdatastudent_bill_pay[".inlineAddFields"][] = "pay_date";
$tdatastudent_bill_pay[".inlineAddFields"][] = "terms";
$tdatastudent_bill_pay[".inlineAddFields"][] = "ref_no";

$tdatastudent_bill_pay[".editFields"] = array();

$tdatastudent_bill_pay[".inlineEditFields"] = array();
$tdatastudent_bill_pay[".inlineEditFields"][] = "amount";
$tdatastudent_bill_pay[".inlineEditFields"][] = "pay_date";
$tdatastudent_bill_pay[".inlineEditFields"][] = "terms";
$tdatastudent_bill_pay[".inlineEditFields"][] = "ref_no";

$tdatastudent_bill_pay[".exportFields"] = array();

$tdatastudent_bill_pay[".printFields"] = array();

//	pay_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pay_id";
	$fdata["GoodName"] = "pay_id";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Pay Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pay_id"; 
		$fdata["FullName"] = "pay_id";
	
		
		
				
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
	
		
		
	$tdatastudent_bill_pay["pay_id"] = $fdata;
//	student_bill_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "student_bill_id";
	$fdata["GoodName"] = "student_bill_id";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Student Bill Id"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "student_bill_id"; 
		$fdata["FullName"] = "student_bill_id";
	
		
		
				
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
	
		
		
	$tdatastudent_bill_pay["student_bill_id"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Payment"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "amount"; 
		$fdata["FullName"] = "amount";
	
		
		
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
	
		
		
	$tdatastudent_bill_pay["amount"] = $fdata;
//	pay_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pay_date";
	$fdata["GoodName"] = "pay_date";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "pay_date"; 
		$fdata["FullName"] = "pay_date";
	
		
		
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
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_bill_pay["pay_date"] = $fdata;
//	studentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "studentID";
	$fdata["GoodName"] = "studentID";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "studentID"; 
		$fdata["FullName"] = "studentID";
	
		
		
				
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
	
		
		
	$tdatastudent_bill_pay["studentID"] = $fdata;
//	terms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "terms";
	$fdata["GoodName"] = "terms";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Terms"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "terms"; 
		$fdata["FullName"] = "terms";
	
		
		
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
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=29";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_bill_pay["terms"] = $fdata;
//	ref_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ref_no";
	$fdata["GoodName"] = "ref_no";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "OR. No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "ref_no"; 
		$fdata["FullName"] = "ref_no";
	
		
		
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
	
		
		
	$tdatastudent_bill_pay["ref_no"] = $fdata;

	
$tables_data["student_bill_pay"]=&$tdatastudent_bill_pay;
$field_labels["student_bill_pay"] = &$fieldLabelsstudent_bill_pay;
$fieldToolTips["student_bill_pay"] = &$fieldToolTipsstudent_bill_pay;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_bill_pay"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_bill_pay"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_billing";
	$masterParams["mDataSourceTable"]="student_billing_item";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "student_billing_item";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["student_bill_pay"][$mIndex] = $masterParams;	
		$masterTablesData["student_bill_pay"][$mIndex]["masterKeys"][]="student_bill_id";
		$masterTablesData["student_bill_pay"][$mIndex]["detailKeys"][]="student_bill_id";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_bill_pay()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pay_id,   student_bill_id,   amount,   pay_date,   studentID,   terms,   ref_no";
$proto0["m_strFrom"] = "FROM student_payment";
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
	"m_strName" => "pay_id",
	"m_strTable" => "student_payment"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "student_bill_id",
	"m_strTable" => "student_payment"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "student_payment"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "pay_date",
	"m_strTable" => "student_payment"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_payment"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "terms",
	"m_strTable" => "student_payment"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "ref_no",
	"m_strTable" => "student_payment"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "student_payment";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "pay_id";
$proto20["m_columns"][] = "student_bill_id";
$proto20["m_columns"][] = "amount";
$proto20["m_columns"][] = "pay_date";
$proto20["m_columns"][] = "studentID";
$proto20["m_columns"][] = "terms";
$proto20["m_columns"][] = "ref_no";
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
$queryData_student_bill_pay = createSqlQuery_student_bill_pay();
							$tdatastudent_bill_pay[".sqlquery"] = $queryData_student_bill_pay;

include_once(getabspath("include/student_bill_pay_events.php"));
$tableEvents["student_bill_pay"] = new eventclass_student_bill_pay;
$tdatastudent_bill_pay[".hasEvents"] = true;

$cipherer = new RunnerCipherer("student_bill_pay");

?>