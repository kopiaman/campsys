<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_billing = array();
	$tdatastudent_billing[".NumberOfChars"] = 80; 
	$tdatastudent_billing[".ShortName"] = "student_billing";
	$tdatastudent_billing[".OwnerID"] = "";
	$tdatastudent_billing[".OriginalTable"] = "student_billing";

//	field labels
$fieldLabelsstudent_billing = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_billing["English"] = array();
	$fieldToolTipsstudent_billing["English"] = array();
	$fieldLabelsstudent_billing["English"]["student_bill_id"] = "Student Bill Id";
	$fieldToolTipsstudent_billing["English"]["student_bill_id"] = "";
	$fieldLabelsstudent_billing["English"]["studentID"] = "Student";
	$fieldToolTipsstudent_billing["English"]["studentID"] = "";
	$fieldLabelsstudent_billing["English"]["item"] = "Item";
	$fieldToolTipsstudent_billing["English"]["item"] = "";
	$fieldLabelsstudent_billing["English"]["amount"] = " Amount(RM)";
	$fieldToolTipsstudent_billing["English"]["amount"] = "";
	$fieldLabelsstudent_billing["English"]["status"] = "Status";
	$fieldToolTipsstudent_billing["English"]["status"] = "";
	$fieldLabelsstudent_billing["English"]["date"] = "Invoice Date";
	$fieldToolTipsstudent_billing["English"]["date"] = "";
	$fieldLabelsstudent_billing["English"]["amount_balance"] = "Outstanding(RM)";
	$fieldToolTipsstudent_billing["English"]["amount_balance"] = "";
	$fieldLabelsstudent_billing["English"]["bill_no"] = "Invoice No";
	$fieldToolTipsstudent_billing["English"]["bill_no"] = "";
	$fieldLabelsstudent_billing["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsstudent_billing["English"]["MatricNo"] = "";
	$fieldLabelsstudent_billing["English"]["BatchID"] = "Batch";
	$fieldToolTipsstudent_billing["English"]["BatchID"] = "";
	$fieldLabelsstudent_billing["English"]["Sponsor"] = "Financial Aid";
	$fieldToolTipsstudent_billing["English"]["Sponsor"] = "";
	$fieldLabelsstudent_billing["English"]["DipID"] = "Course";
	$fieldToolTipsstudent_billing["English"]["DipID"] = "";
	$fieldLabelsstudent_billing["English"]["paid_amount"] = "Paid (RM)";
	$fieldToolTipsstudent_billing["English"]["paid_amount"] = "";
	$fieldLabelsstudent_billing["English"]["remark"] = "Remark";
	$fieldToolTipsstudent_billing["English"]["remark"] = "";
	if (count($fieldToolTipsstudent_billing["English"]))
		$tdatastudent_billing[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_billing[".NCSearch"] = true;



$tdatastudent_billing[".shortTableName"] = "student_billing";
$tdatastudent_billing[".nSecOptions"] = 0;
$tdatastudent_billing[".recsPerRowList"] = 1;
$tdatastudent_billing[".mainTableOwnerID"] = "";
$tdatastudent_billing[".moveNext"] = 1;
$tdatastudent_billing[".nType"] = 0;

$tdatastudent_billing[".strOriginalTableName"] = "student_billing";




$tdatastudent_billing[".showAddInPopup"] = false;

$tdatastudent_billing[".showEditInPopup"] = false;

$tdatastudent_billing[".showViewInPopup"] = false;

$tdatastudent_billing[".fieldsForRegister"] = array();
	
$tdatastudent_billing[".listAjax"] = false;

	$tdatastudent_billing[".audit"] = true;

	$tdatastudent_billing[".locking"] = false;

$tdatastudent_billing[".listIcons"] = true;
$tdatastudent_billing[".inlineEdit"] = true;
$tdatastudent_billing[".inlineAdd"] = true;

$tdatastudent_billing[".exportTo"] = true;


$tdatastudent_billing[".delete"] = true;

$tdatastudent_billing[".showSimpleSearchOptions"] = true;

$tdatastudent_billing[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_billing[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_billing[".isUseAjaxSuggest"] = true;

$tdatastudent_billing[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_billing[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_billing[".isUseTimeForSearch"] = false;



$tdatastudent_billing[".useDetailsPreview"] = true;

$tdatastudent_billing[".allSearchFields"] = array();

$tdatastudent_billing[".allSearchFields"][] = "DipID";
$tdatastudent_billing[".allSearchFields"][] = "studentID";
$tdatastudent_billing[".allSearchFields"][] = "MatricNo";
$tdatastudent_billing[".allSearchFields"][] = "BatchID";
$tdatastudent_billing[".allSearchFields"][] = "item";
$tdatastudent_billing[".allSearchFields"][] = "bill_no";
$tdatastudent_billing[".allSearchFields"][] = "date";
$tdatastudent_billing[".allSearchFields"][] = "amount_balance";
$tdatastudent_billing[".allSearchFields"][] = "status";

$tdatastudent_billing[".googleLikeFields"][] = "studentID";

$tdatastudent_billing[".panelSearchFields"][] = "DipID";
$tdatastudent_billing[".panelSearchFields"][] = "studentID";
$tdatastudent_billing[".panelSearchFields"][] = "MatricNo";
$tdatastudent_billing[".panelSearchFields"][] = "BatchID";
$tdatastudent_billing[".panelSearchFields"][] = "item";
$tdatastudent_billing[".panelSearchFields"][] = "bill_no";
$tdatastudent_billing[".panelSearchFields"][] = "date";
$tdatastudent_billing[".panelSearchFields"][] = "paid_amount";
$tdatastudent_billing[".panelSearchFields"][] = "amount_balance";
$tdatastudent_billing[".panelSearchFields"][] = "status";

$tdatastudent_billing[".advSearchFields"][] = "DipID";
$tdatastudent_billing[".advSearchFields"][] = "studentID";
$tdatastudent_billing[".advSearchFields"][] = "MatricNo";
$tdatastudent_billing[".advSearchFields"][] = "BatchID";
$tdatastudent_billing[".advSearchFields"][] = "item";
$tdatastudent_billing[".advSearchFields"][] = "bill_no";
$tdatastudent_billing[".advSearchFields"][] = "date";
$tdatastudent_billing[".advSearchFields"][] = "amount_balance";
$tdatastudent_billing[".advSearchFields"][] = "status";

$tdatastudent_billing[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	

$tdatastudent_billing[".totalsFields"][] = array(
	"fName" => "amount", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatastudent_billing[".totalsFields"][] = array(
	"fName" => "paid_amount", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatastudent_billing[".totalsFields"][] = array(
	"fName" => "amount_balance", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdatastudent_billing[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_billing.student_bill_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_billing[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_billing[".orderindexes"] = array();
$tdatastudent_billing[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_billing.student_bill_id");

$tdatastudent_billing[".sqlHead"] = "SELECT student_billing.student_bill_id,  student_billing.studentID,  student_billing.item,  student_billing.amount,  student_billing.status,  student_billing.`date`,  student_billing.amount_balance,  student_billing.bill_no,  student_info.MatricNo,  student_info.BatchID,  student_info.Sponsor,  student_info.DipID,  SUM(student_payment.amount) AS paid_amount,  student_billing.remark";
$tdatastudent_billing[".sqlFrom"] = "FROM student_billing  INNER JOIN student_info ON student_billing.studentID = student_info.StudentID  LEFT OUTER JOIN student_payment ON student_billing.student_bill_id = student_payment.student_bill_id";
$tdatastudent_billing[".sqlWhereExpr"] = "";
$tdatastudent_billing[".sqlTail"] = "GROUP BY student_billing.student_bill_id";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_billing[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_billing[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_billing = array();
$tableKeysstudent_billing[] = "student_bill_id";
$tdatastudent_billing[".Keys"] = $tableKeysstudent_billing;

$tdatastudent_billing[".listFields"] = array();
$tdatastudent_billing[".listFields"][] = "studentID";
$tdatastudent_billing[".listFields"][] = "MatricNo";
$tdatastudent_billing[".listFields"][] = "BatchID";
$tdatastudent_billing[".listFields"][] = "item";
$tdatastudent_billing[".listFields"][] = "amount";
$tdatastudent_billing[".listFields"][] = "bill_no";
$tdatastudent_billing[".listFields"][] = "date";
$tdatastudent_billing[".listFields"][] = "paid_amount";
$tdatastudent_billing[".listFields"][] = "amount_balance";
$tdatastudent_billing[".listFields"][] = "status";
$tdatastudent_billing[".listFields"][] = "remark";

$tdatastudent_billing[".viewFields"] = array();

$tdatastudent_billing[".addFields"] = array();

$tdatastudent_billing[".inlineAddFields"] = array();
$tdatastudent_billing[".inlineAddFields"][] = "studentID";
$tdatastudent_billing[".inlineAddFields"][] = "item";
$tdatastudent_billing[".inlineAddFields"][] = "amount";
$tdatastudent_billing[".inlineAddFields"][] = "bill_no";
$tdatastudent_billing[".inlineAddFields"][] = "date";
$tdatastudent_billing[".inlineAddFields"][] = "status";
$tdatastudent_billing[".inlineAddFields"][] = "remark";

$tdatastudent_billing[".editFields"] = array();

$tdatastudent_billing[".inlineEditFields"] = array();
$tdatastudent_billing[".inlineEditFields"][] = "item";
$tdatastudent_billing[".inlineEditFields"][] = "amount";
$tdatastudent_billing[".inlineEditFields"][] = "bill_no";
$tdatastudent_billing[".inlineEditFields"][] = "date";
$tdatastudent_billing[".inlineEditFields"][] = "remark";

$tdatastudent_billing[".exportFields"] = array();
$tdatastudent_billing[".exportFields"][] = "studentID";
$tdatastudent_billing[".exportFields"][] = "MatricNo";
$tdatastudent_billing[".exportFields"][] = "BatchID";
$tdatastudent_billing[".exportFields"][] = "item";
$tdatastudent_billing[".exportFields"][] = "amount";
$tdatastudent_billing[".exportFields"][] = "bill_no";
$tdatastudent_billing[".exportFields"][] = "date";
$tdatastudent_billing[".exportFields"][] = "paid_amount";
$tdatastudent_billing[".exportFields"][] = "amount_balance";
$tdatastudent_billing[".exportFields"][] = "status";
$tdatastudent_billing[".exportFields"][] = "remark";

$tdatastudent_billing[".printFields"] = array();

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
	
		
		
	$tdatastudent_billing["student_bill_id"] = $fdata;
//	studentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "studentID";
	$fdata["GoodName"] = "studentID";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "studentID"; 
		$fdata["FullName"] = "student_billing.studentID";
	
		
		
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
	
		
		
	$tdatastudent_billing["studentID"] = $fdata;
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
	
		
		$fdata["bInlineAdd"] = true; 
	
		
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
	
		
		
	$tdatastudent_billing["item"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = " Amount(RM)"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
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
	
		
		
	$tdatastudent_billing["amount"] = $fdata;
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
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
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
	
		
		
	$tdatastudent_billing["status"] = $fdata;
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
	
		
		$fdata["bInlineAdd"] = true; 
	
		
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
	
		
		
	$tdatastudent_billing["date"] = $fdata;
//	amount_balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "amount_balance";
	$fdata["GoodName"] = "amount_balance";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Outstanding(RM)"; 
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
	
		
		
	$tdatastudent_billing["amount_balance"] = $fdata;
//	bill_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "bill_no";
	$fdata["GoodName"] = "bill_no";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Invoice No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
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
	
		
		
	$tdatastudent_billing["bill_no"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Matric No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "student_info.MatricNo";
	
		
		
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
	
		
		
	$tdatastudent_billing["MatricNo"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "student_info.BatchID";
	
		
		
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
	
		
		
	$tdatastudent_billing["BatchID"] = $fdata;
//	Sponsor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Sponsor";
	$fdata["GoodName"] = "Sponsor";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Financial Aid"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Sponsor"; 
		$fdata["FullName"] = "student_info.Sponsor";
	
		
		
				
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
	
		
		$edata["LookupWhere"] = "Class=16";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_billing["Sponsor"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "student_info.DipID";
	
		
		
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
	
		
		
	$tdatastudent_billing["DipID"] = $fdata;
//	paid_amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "paid_amount";
	$fdata["GoodName"] = "paid_amount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Paid (RM)"; 
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
	
		
		
	$tdatastudent_billing["paid_amount"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Remark"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
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
	
		
		
	$tdatastudent_billing["remark"] = $fdata;

	
$tables_data["student_billing"]=&$tdatastudent_billing;
$field_labels["student_billing"] = &$fieldLabelsstudent_billing;
$fieldToolTips["student_billing"] = &$fieldToolTipsstudent_billing;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_billing"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="student_payment";
	$detailsParam["dDataSourceTable"]="student_payment";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="student_payment";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["student_billing"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["student_billing"][$dIndex]["masterKeys"][]="student_bill_id";
		$detailsTablesData["student_billing"][$dIndex]["masterKeys"][]="studentID";
		$detailsTablesData["student_billing"][$dIndex]["detailKeys"][]="student_bill_id";
		$detailsTablesData["student_billing"][$dIndex]["detailKeys"][]="studentID";

	
// tables which are master tables for current table (detail)
$masterTablesData["student_billing"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_billing()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_billing.student_bill_id,  student_billing.studentID,  student_billing.item,  student_billing.amount,  student_billing.status,  student_billing.`date`,  student_billing.amount_balance,  student_billing.bill_no,  student_info.MatricNo,  student_info.BatchID,  student_info.Sponsor,  student_info.DipID,  SUM(student_payment.amount) AS paid_amount,  student_billing.remark";
$proto0["m_strFrom"] = "FROM student_billing  INNER JOIN student_info ON student_billing.studentID = student_info.StudentID  LEFT OUTER JOIN student_payment ON student_billing.student_bill_id = student_payment.student_bill_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY student_billing.student_bill_id DESC";
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
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Sponsor",
	"m_strTable" => "student_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_functiontype"] = "SQLF_SUM";
$proto30["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "student_payment"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto30);

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "paid_amount";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "student_billing"
));

$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "student_billing";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "student_bill_id";
$proto35["m_columns"][] = "proid";
$proto35["m_columns"][] = "studentID";
$proto35["m_columns"][] = "item";
$proto35["m_columns"][] = "amount";
$proto35["m_columns"][] = "status";
$proto35["m_columns"][] = "date";
$proto35["m_columns"][] = "amount_balance";
$proto35["m_columns"][] = "bill_no";
$proto35["m_columns"][] = "remark";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_alias"] = "";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = "0";
$proto36["m_inBrackets"] = "0";
$proto36["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_INNERJOIN";
			$proto39=array();
$proto39["m_strName"] = "student_info";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "StudentID";
$proto39["m_columns"][] = "Name";
$proto39["m_columns"][] = "ICNO";
$proto39["m_columns"][] = "DOB";
$proto39["m_columns"][] = "MatricNo";
$proto39["m_columns"][] = "Nogilir";
$proto39["m_columns"][] = "Email";
$proto39["m_columns"][] = "Access";
$proto39["m_columns"][] = "Passw";
$proto39["m_columns"][] = "Type";
$proto39["m_columns"][] = "BranchID";
$proto39["m_columns"][] = "DateJoin";
$proto39["m_columns"][] = "Dateout";
$proto39["m_columns"][] = "Gender";
$proto39["m_columns"][] = "married";
$proto39["m_columns"][] = "Address1";
$proto39["m_columns"][] = "City";
$proto39["m_columns"][] = "Postcode";
$proto39["m_columns"][] = "StateID";
$proto39["m_columns"][] = "Country";
$proto39["m_columns"][] = "HomeTelephone";
$proto39["m_columns"][] = "MobileTelephone";
$proto39["m_columns"][] = "Nationality";
$proto39["m_columns"][] = "Passport";
$proto39["m_columns"][] = "BatchID";
$proto39["m_columns"][] = "Intake";
$proto39["m_columns"][] = "Sponsor";
$proto39["m_columns"][] = "DipID";
$proto39["m_columns"][] = "Status";
$proto39["m_columns"][] = "Disability";
$proto39["m_columns"][] = "MedicalCondition";
$proto39["m_columns"][] = "race";
$proto39["m_columns"][] = "Religion";
$proto39["m_columns"][] = "Class";
$proto39["m_columns"][] = "Intake_Category";
$proto39["m_columns"][] = "f1_name";
$proto39["m_columns"][] = "f1_tel";
$proto39["m_columns"][] = "f1_relation";
$proto39["m_columns"][] = "f2_name";
$proto39["m_columns"][] = "f2_tel";
$proto39["m_columns"][] = "f2_relation";
$proto39["m_columns"][] = "blood";
$proto39["m_columns"][] = "hostel_in";
$proto39["m_columns"][] = "job";
$proto39["m_columns"][] = "al_certificate";
$proto39["m_columns"][] = "al_license";
$proto39["m_columns"][] = "f_name";
$proto39["m_columns"][] = "f_tel";
$proto39["m_columns"][] = "f_ic";
$proto39["m_columns"][] = "f_job";
$proto39["m_columns"][] = "f_address";
$proto39["m_columns"][] = "m_name";
$proto39["m_columns"][] = "m_tel";
$proto39["m_columns"][] = "m_ic";
$proto39["m_columns"][] = "m_job";
$proto39["m_columns"][] = "m_address";
$proto39["m_columns"][] = "qua_year";
$proto39["m_columns"][] = "qua_level";
$proto39["m_columns"][] = "qua_result";
$proto39["m_columns"][] = "qua_place";
$proto39["m_columns"][] = "photo";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_alias"] = "";
$proto40=array();
$proto40["m_sql"] = "student_billing.studentID = student_info.StudentID";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_billing"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= student_info.StudentID";
$proto40["m_havingmode"] = "0";
$proto40["m_inBrackets"] = "0";
$proto40["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_LEFTJOIN";
			$proto43=array();
$proto43["m_strName"] = "student_payment";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "pay_id";
$proto43["m_columns"][] = "student_bill_id";
$proto43["m_columns"][] = "amount";
$proto43["m_columns"][] = "pay_date";
$proto43["m_columns"][] = "studentID";
$proto43["m_columns"][] = "terms";
$proto43["m_columns"][] = "ref_no";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_alias"] = "";
$proto44=array();
$proto44["m_sql"] = "student_billing.student_bill_id = student_payment.student_bill_id";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "student_bill_id",
	"m_strTable" => "student_billing"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= student_payment.student_bill_id";
$proto44["m_havingmode"] = "0";
$proto44["m_inBrackets"] = "0";
$proto44["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "student_bill_id",
	"m_strTable" => "student_billing"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "student_bill_id",
	"m_strTable" => "student_billing"
));

$proto48["m_column"]=$obj;
$proto48["m_bAsc"] = 0;
$proto48["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto48);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_billing = createSqlQuery_student_billing();
														$tdatastudent_billing[".sqlquery"] = $queryData_student_billing;

include_once(getabspath("include/student_billing_events.php"));
$tableEvents["student_billing"] = new eventclass_student_billing;
$tdatastudent_billing[".hasEvents"] = true;

$cipherer = new RunnerCipherer("student_billing");

?>