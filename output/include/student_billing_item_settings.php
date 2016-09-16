<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_billing_item = array();
	$tdatastudent_billing_item[".NumberOfChars"] = 80; 
	$tdatastudent_billing_item[".ShortName"] = "student_billing_item";
	$tdatastudent_billing_item[".OwnerID"] = "";
	$tdatastudent_billing_item[".OriginalTable"] = "student_billing";

//	field labels
$fieldLabelsstudent_billing_item = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_billing_item["English"] = array();
	$fieldToolTipsstudent_billing_item["English"] = array();
	$fieldLabelsstudent_billing_item["English"]["student_bill_id"] = "Student Bill Id";
	$fieldToolTipsstudent_billing_item["English"]["student_bill_id"] = "";
	$fieldLabelsstudent_billing_item["English"]["studentID"] = "Student";
	$fieldToolTipsstudent_billing_item["English"]["studentID"] = "";
	$fieldLabelsstudent_billing_item["English"]["item"] = "Item";
	$fieldToolTipsstudent_billing_item["English"]["item"] = "";
	$fieldLabelsstudent_billing_item["English"]["amount"] = "Charges";
	$fieldToolTipsstudent_billing_item["English"]["amount"] = "";
	$fieldLabelsstudent_billing_item["English"]["status"] = "Status";
	$fieldToolTipsstudent_billing_item["English"]["status"] = "";
	$fieldLabelsstudent_billing_item["English"]["date"] = "Invoice Date";
	$fieldToolTipsstudent_billing_item["English"]["date"] = "";
	$fieldLabelsstudent_billing_item["English"]["amount_balance"] = "Balance";
	$fieldToolTipsstudent_billing_item["English"]["amount_balance"] = "";
	$fieldLabelsstudent_billing_item["English"]["bill_no"] = "Semester";
	$fieldToolTipsstudent_billing_item["English"]["bill_no"] = "";
	$fieldLabelsstudent_billing_item["English"]["paid_amount"] = "Payment";
	$fieldToolTipsstudent_billing_item["English"]["paid_amount"] = "";
	$fieldLabelsstudent_billing_item["English"]["remark"] = "Remark";
	$fieldToolTipsstudent_billing_item["English"]["remark"] = "";
	if (count($fieldToolTipsstudent_billing_item["English"]))
		$tdatastudent_billing_item[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_billing_item[".NCSearch"] = true;



$tdatastudent_billing_item[".shortTableName"] = "student_billing_item";
$tdatastudent_billing_item[".nSecOptions"] = 0;
$tdatastudent_billing_item[".recsPerRowList"] = 1;
$tdatastudent_billing_item[".mainTableOwnerID"] = "";
$tdatastudent_billing_item[".moveNext"] = 1;
$tdatastudent_billing_item[".nType"] = 1;

$tdatastudent_billing_item[".strOriginalTableName"] = "student_billing";




$tdatastudent_billing_item[".showAddInPopup"] = false;

$tdatastudent_billing_item[".showEditInPopup"] = false;

$tdatastudent_billing_item[".showViewInPopup"] = false;

$tdatastudent_billing_item[".fieldsForRegister"] = array();
	
$tdatastudent_billing_item[".listAjax"] = false;

	$tdatastudent_billing_item[".audit"] = true;

	$tdatastudent_billing_item[".locking"] = false;

$tdatastudent_billing_item[".listIcons"] = true;
$tdatastudent_billing_item[".inlineEdit"] = true;

$tdatastudent_billing_item[".exportTo"] = true;



$tdatastudent_billing_item[".showSimpleSearchOptions"] = true;

$tdatastudent_billing_item[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_billing_item[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_billing_item[".isUseAjaxSuggest"] = true;

$tdatastudent_billing_item[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_billing_item[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_billing_item[".isUseTimeForSearch"] = false;



$tdatastudent_billing_item[".useDetailsPreview"] = true;

$tdatastudent_billing_item[".allSearchFields"] = array();

$tdatastudent_billing_item[".allSearchFields"][] = "item";
$tdatastudent_billing_item[".allSearchFields"][] = "date";
$tdatastudent_billing_item[".allSearchFields"][] = "bill_no";
$tdatastudent_billing_item[".allSearchFields"][] = "amount_balance";
$tdatastudent_billing_item[".allSearchFields"][] = "status";

$tdatastudent_billing_item[".googleLikeFields"][] = "studentID";

$tdatastudent_billing_item[".panelSearchFields"][] = "item";
$tdatastudent_billing_item[".panelSearchFields"][] = "studentID";
$tdatastudent_billing_item[".panelSearchFields"][] = "date";
$tdatastudent_billing_item[".panelSearchFields"][] = "bill_no";
$tdatastudent_billing_item[".panelSearchFields"][] = "paid_amount";
$tdatastudent_billing_item[".panelSearchFields"][] = "amount_balance";
$tdatastudent_billing_item[".panelSearchFields"][] = "status";

$tdatastudent_billing_item[".advSearchFields"][] = "item";
$tdatastudent_billing_item[".advSearchFields"][] = "date";
$tdatastudent_billing_item[".advSearchFields"][] = "bill_no";
$tdatastudent_billing_item[".advSearchFields"][] = "amount_balance";
$tdatastudent_billing_item[".advSearchFields"][] = "status";

$tdatastudent_billing_item[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	

$tdatastudent_billing_item[".totalsFields"][] = array(
	"fName" => "amount", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatastudent_billing_item[".totalsFields"][] = array(
	"fName" => "paid_amount", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatastudent_billing_item[".totalsFields"][] = array(
	"fName" => "amount_balance", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdatastudent_billing_item[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_billing_item[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_billing_item[".orderindexes"] = array();

$tdatastudent_billing_item[".sqlHead"] = "SELECT student_billing.student_bill_id,  student_billing.studentID,  student_billing.item,  student_billing.amount,  student_billing.status,  student_billing.`date`,  student_billing.amount_balance,  student_billing.bill_no,  SUM(student_payment.amount) AS paid_amount,  student_billing.remark";
$tdatastudent_billing_item[".sqlFrom"] = "FROM student_billing  LEFT OUTER JOIN student_payment ON student_billing.student_bill_id = student_payment.student_bill_id";
$tdatastudent_billing_item[".sqlWhereExpr"] = "";
$tdatastudent_billing_item[".sqlTail"] = "GROUP BY student_billing.student_bill_id";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_billing_item[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_billing_item[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_billing_item = array();
$tableKeysstudent_billing_item[] = "student_bill_id";
$tdatastudent_billing_item[".Keys"] = $tableKeysstudent_billing_item;

$tdatastudent_billing_item[".listFields"] = array();
$tdatastudent_billing_item[".listFields"][] = "item";
$tdatastudent_billing_item[".listFields"][] = "date";
$tdatastudent_billing_item[".listFields"][] = "bill_no";
$tdatastudent_billing_item[".listFields"][] = "amount";
$tdatastudent_billing_item[".listFields"][] = "paid_amount";
$tdatastudent_billing_item[".listFields"][] = "amount_balance";
$tdatastudent_billing_item[".listFields"][] = "status";
$tdatastudent_billing_item[".listFields"][] = "remark";

$tdatastudent_billing_item[".viewFields"] = array();

$tdatastudent_billing_item[".addFields"] = array();

$tdatastudent_billing_item[".inlineAddFields"] = array();

$tdatastudent_billing_item[".editFields"] = array();

$tdatastudent_billing_item[".inlineEditFields"] = array();
$tdatastudent_billing_item[".inlineEditFields"][] = "item";
$tdatastudent_billing_item[".inlineEditFields"][] = "date";
$tdatastudent_billing_item[".inlineEditFields"][] = "bill_no";
$tdatastudent_billing_item[".inlineEditFields"][] = "amount";
$tdatastudent_billing_item[".inlineEditFields"][] = "remark";

$tdatastudent_billing_item[".exportFields"] = array();
$tdatastudent_billing_item[".exportFields"][] = "item";
$tdatastudent_billing_item[".exportFields"][] = "date";
$tdatastudent_billing_item[".exportFields"][] = "bill_no";
$tdatastudent_billing_item[".exportFields"][] = "amount";
$tdatastudent_billing_item[".exportFields"][] = "paid_amount";
$tdatastudent_billing_item[".exportFields"][] = "amount_balance";
$tdatastudent_billing_item[".exportFields"][] = "status";
$tdatastudent_billing_item[".exportFields"][] = "remark";

$tdatastudent_billing_item[".printFields"] = array();

//	student_bill_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "student_bill_id";
	$fdata["GoodName"] = "student_bill_id";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Student Bill Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "student_bill_id"; 
		$fdata["FullName"] = "student_billing.student_bill_id";
	
		
		
				
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
	
		
		
	$tdatastudent_billing_item["student_bill_id"] = $fdata;
//	studentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "studentID";
	$fdata["GoodName"] = "studentID";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "studentID"; 
		$fdata["FullName"] = "student_billing.studentID";
	
		
		
				
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
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
	$edata["LookupOrderBy"] = "";
	
		
		
		
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
	
		
		
	$tdatastudent_billing_item["studentID"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Item"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "item"; 
		$fdata["FullName"] = "student_billing.item";
	
		
		
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
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "items";
	
		
	$edata["LookupTable"] = "setting_bill_item";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
			//	dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "amount";
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_billing_item["item"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Charges"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "amount"; 
		$fdata["FullName"] = "student_billing.amount";
	
		
		
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
	
		
		
		
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_billing_item["amount"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "status"; 
		$fdata["FullName"] = "student_billing.status";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Pending";
	$edata["LookupValues"][] = "Paid";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatastudent_billing_item["status"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Invoice Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "date"; 
		$fdata["FullName"] = "student_billing.`date`";
	
		
		
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
	
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_billing_item["date"] = $fdata;
//	amount_balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "amount_balance";
	$fdata["GoodName"] = "amount_balance";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Balance"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "amount_balance"; 
		$fdata["FullName"] = "student_billing.amount_balance";
	
		
		
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
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_billing_item["amount_balance"] = $fdata;
//	bill_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "bill_no";
	$fdata["GoodName"] = "bill_no";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Semester"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "bill_no"; 
		$fdata["FullName"] = "student_billing.bill_no";
	
		
		
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
	
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_billing_item["bill_no"] = $fdata;
//	paid_amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "paid_amount";
	$fdata["GoodName"] = "paid_amount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Payment"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "paid_amount"; 
		$fdata["FullName"] = "SUM(student_payment.amount)";
	
		
		
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
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_billing_item["paid_amount"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Remark"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "remark"; 
		$fdata["FullName"] = "student_billing.remark";
	
		
		
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
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_billing_item["remark"] = $fdata;

	
$tables_data["student_billing_item"]=&$tdatastudent_billing_item;
$field_labels["student_billing_item"] = &$fieldLabelsstudent_billing_item;
$fieldToolTips["student_billing_item"] = &$fieldToolTipsstudent_billing_item;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_billing_item"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="student_payment";
	$detailsParam["dDataSourceTable"]="student_bill_pay";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="student_bill_pay";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["student_billing_item"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["student_billing_item"][$dIndex]["masterKeys"][]="student_bill_id";
		$detailsTablesData["student_billing_item"][$dIndex]["detailKeys"][]="student_bill_id";

	
// tables which are master tables for current table (detail)
$masterTablesData["student_billing_item"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="student_bill_list";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "student_bill_list";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["student_billing_item"][$mIndex] = $masterParams;	
		$masterTablesData["student_billing_item"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["student_billing_item"][$mIndex]["detailKeys"][]="studentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_billing_item()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_billing.student_bill_id,  student_billing.studentID,  student_billing.item,  student_billing.amount,  student_billing.status,  student_billing.`date`,  student_billing.amount_balance,  student_billing.bill_no,  SUM(student_payment.amount) AS paid_amount,  student_billing.remark";
$proto0["m_strFrom"] = "FROM student_billing  LEFT OUTER JOIN student_payment ON student_billing.student_bill_id = student_payment.student_bill_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY student_billing.student_bill_id";
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
	"m_strName" => "student_bill_id",
	"m_strTable" => "student_billing"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_billing"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "student_billing"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "student_billing"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "student_billing"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "student_billing"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "amount_balance",
	"m_strTable" => "student_billing"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "bill_no",
	"m_strTable" => "student_billing"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_SUM";
$proto22["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "student_payment"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto22);

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "paid_amount";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "student_billing"
));

$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "student_billing";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "student_bill_id";
$proto27["m_columns"][] = "proid";
$proto27["m_columns"][] = "studentID";
$proto27["m_columns"][] = "item";
$proto27["m_columns"][] = "amount";
$proto27["m_columns"][] = "status";
$proto27["m_columns"][] = "date";
$proto27["m_columns"][] = "amount_balance";
$proto27["m_columns"][] = "bill_no";
$proto27["m_columns"][] = "remark";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_alias"] = "";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = "0";
$proto28["m_inBrackets"] = "0";
$proto28["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_LEFTJOIN";
			$proto31=array();
$proto31["m_strName"] = "student_payment";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "pay_id";
$proto31["m_columns"][] = "student_bill_id";
$proto31["m_columns"][] = "amount";
$proto31["m_columns"][] = "pay_date";
$proto31["m_columns"][] = "studentID";
$proto31["m_columns"][] = "terms";
$proto31["m_columns"][] = "ref_no";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_alias"] = "";
$proto32=array();
$proto32["m_sql"] = "student_billing.student_bill_id = student_payment.student_bill_id";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "student_bill_id",
	"m_strTable" => "student_billing"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= student_payment.student_bill_id";
$proto32["m_havingmode"] = "0";
$proto32["m_inBrackets"] = "0";
$proto32["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "student_bill_id",
	"m_strTable" => "student_billing"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_billing_item = createSqlQuery_student_billing_item();
										$tdatastudent_billing_item[".sqlquery"] = $queryData_student_billing_item;

include_once(getabspath("include/student_billing_item_events.php"));
$tableEvents["student_billing_item"] = new eventclass_student_billing_item;
$tdatastudent_billing_item[".hasEvents"] = true;

$cipherer = new RunnerCipherer("student_billing_item");

?>