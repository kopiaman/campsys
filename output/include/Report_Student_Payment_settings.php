<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Student_Payment = array();
	$tdataReport_Student_Payment[".NumberOfChars"] = 80; 
	$tdataReport_Student_Payment[".ShortName"] = "Report_Student_Payment";
	$tdataReport_Student_Payment[".OwnerID"] = "";
	$tdataReport_Student_Payment[".OriginalTable"] = "student_payment";

//	field labels
$fieldLabelsReport_Student_Payment = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Student_Payment["English"] = array();
	$fieldToolTipsReport_Student_Payment["English"] = array();
	$fieldLabelsReport_Student_Payment["English"]["amount"] = "Pay Amount";
	$fieldToolTipsReport_Student_Payment["English"]["amount"] = "";
	$fieldLabelsReport_Student_Payment["English"]["pay_date"] = "Date";
	$fieldToolTipsReport_Student_Payment["English"]["pay_date"] = "";
	$fieldLabelsReport_Student_Payment["English"]["studentID"] = "Student";
	$fieldToolTipsReport_Student_Payment["English"]["studentID"] = "";
	$fieldLabelsReport_Student_Payment["English"]["terms"] = "Terms";
	$fieldToolTipsReport_Student_Payment["English"]["terms"] = "";
	$fieldLabelsReport_Student_Payment["English"]["ref_no"] = "OR No";
	$fieldToolTipsReport_Student_Payment["English"]["ref_no"] = "";
	$fieldLabelsReport_Student_Payment["English"]["pay_id"] = "Pay Id";
	$fieldToolTipsReport_Student_Payment["English"]["pay_id"] = "";
	$fieldLabelsReport_Student_Payment["English"]["items"] = "Items";
	$fieldToolTipsReport_Student_Payment["English"]["items"] = "";
	$fieldLabelsReport_Student_Payment["English"]["month"] = "Month";
	$fieldToolTipsReport_Student_Payment["English"]["month"] = "";
	$fieldLabelsReport_Student_Payment["English"]["year"] = "Year";
	$fieldToolTipsReport_Student_Payment["English"]["year"] = "";
	$fieldLabelsReport_Student_Payment["English"]["DipID"] = "Course";
	$fieldToolTipsReport_Student_Payment["English"]["DipID"] = "";
	$fieldLabelsReport_Student_Payment["English"]["Class"] = "Class";
	$fieldToolTipsReport_Student_Payment["English"]["Class"] = "";
	$fieldLabelsReport_Student_Payment["English"]["Intake_Category"] = "Program";
	$fieldToolTipsReport_Student_Payment["English"]["Intake_Category"] = "";
	$fieldLabelsReport_Student_Payment["English"]["BatchID"] = "Batch ";
	$fieldToolTipsReport_Student_Payment["English"]["BatchID"] = "";
	if (count($fieldToolTipsReport_Student_Payment["English"]))
		$tdataReport_Student_Payment[".isUseToolTips"] = true;
}
	
	
	$tdataReport_Student_Payment[".NCSearch"] = true;



$tdataReport_Student_Payment[".shortTableName"] = "Report_Student_Payment";
$tdataReport_Student_Payment[".nSecOptions"] = 0;
$tdataReport_Student_Payment[".recsPerRowList"] = 1;
$tdataReport_Student_Payment[".mainTableOwnerID"] = "";
$tdataReport_Student_Payment[".moveNext"] = 1;
$tdataReport_Student_Payment[".nType"] = 1;

$tdataReport_Student_Payment[".strOriginalTableName"] = "student_payment";




$tdataReport_Student_Payment[".showAddInPopup"] = false;

$tdataReport_Student_Payment[".showEditInPopup"] = false;

$tdataReport_Student_Payment[".showViewInPopup"] = false;

$tdataReport_Student_Payment[".fieldsForRegister"] = array();
	
$tdataReport_Student_Payment[".listAjax"] = false;

	$tdataReport_Student_Payment[".audit"] = true;

	$tdataReport_Student_Payment[".locking"] = false;

$tdataReport_Student_Payment[".listIcons"] = true;




$tdataReport_Student_Payment[".showSimpleSearchOptions"] = true;

$tdataReport_Student_Payment[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Student_Payment[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Student_Payment[".isUseAjaxSuggest"] = true;

$tdataReport_Student_Payment[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Student_Payment[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Student_Payment[".isUseTimeForSearch"] = false;




$tdataReport_Student_Payment[".allSearchFields"] = array();

$tdataReport_Student_Payment[".allSearchFields"][] = "studentID";
$tdataReport_Student_Payment[".allSearchFields"][] = "DipID";
$tdataReport_Student_Payment[".allSearchFields"][] = "BatchID";
$tdataReport_Student_Payment[".allSearchFields"][] = "Class";
$tdataReport_Student_Payment[".allSearchFields"][] = "Intake_Category";
$tdataReport_Student_Payment[".allSearchFields"][] = "items";
$tdataReport_Student_Payment[".allSearchFields"][] = "pay_date";
$tdataReport_Student_Payment[".allSearchFields"][] = "month";
$tdataReport_Student_Payment[".allSearchFields"][] = "year";
$tdataReport_Student_Payment[".allSearchFields"][] = "terms";
$tdataReport_Student_Payment[".allSearchFields"][] = "ref_no";

$tdataReport_Student_Payment[".googleLikeFields"][] = "studentID";
$tdataReport_Student_Payment[".googleLikeFields"][] = "DipID";
$tdataReport_Student_Payment[".googleLikeFields"][] = "Class";
$tdataReport_Student_Payment[".googleLikeFields"][] = "Intake_Category";
$tdataReport_Student_Payment[".googleLikeFields"][] = "BatchID";

$tdataReport_Student_Payment[".panelSearchFields"][] = "studentID";
$tdataReport_Student_Payment[".panelSearchFields"][] = "DipID";
$tdataReport_Student_Payment[".panelSearchFields"][] = "BatchID";
$tdataReport_Student_Payment[".panelSearchFields"][] = "Class";
$tdataReport_Student_Payment[".panelSearchFields"][] = "Intake_Category";
$tdataReport_Student_Payment[".panelSearchFields"][] = "items";
$tdataReport_Student_Payment[".panelSearchFields"][] = "pay_date";
$tdataReport_Student_Payment[".panelSearchFields"][] = "month";
$tdataReport_Student_Payment[".panelSearchFields"][] = "year";
$tdataReport_Student_Payment[".panelSearchFields"][] = "terms";
$tdataReport_Student_Payment[".panelSearchFields"][] = "ref_no";

$tdataReport_Student_Payment[".advSearchFields"][] = "studentID";
$tdataReport_Student_Payment[".advSearchFields"][] = "DipID";
$tdataReport_Student_Payment[".advSearchFields"][] = "BatchID";
$tdataReport_Student_Payment[".advSearchFields"][] = "Class";
$tdataReport_Student_Payment[".advSearchFields"][] = "Intake_Category";
$tdataReport_Student_Payment[".advSearchFields"][] = "items";
$tdataReport_Student_Payment[".advSearchFields"][] = "pay_date";
$tdataReport_Student_Payment[".advSearchFields"][] = "month";
$tdataReport_Student_Payment[".advSearchFields"][] = "year";
$tdataReport_Student_Payment[".advSearchFields"][] = "terms";
$tdataReport_Student_Payment[".advSearchFields"][] = "ref_no";

$tdataReport_Student_Payment[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main


$tdataReport_Student_Payment[".totalsFields"][] = array(
	"fName" => "amount", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdataReport_Student_Payment[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_payment.pay_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Student_Payment[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Student_Payment[".orderindexes"] = array();
$tdataReport_Student_Payment[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_payment.pay_id");

$tdataReport_Student_Payment[".sqlHead"] = "SELECT student_payment.pay_id,  student_payment.amount,  student_payment.pay_date,  MONTH(student_payment.pay_date) AS `month`,  YEAR(student_payment.pay_date) AS `year`,  student_payment.studentID,  student_payment.terms,  student_payment.ref_no,  setting_bill_item.items,  student_info.DipID,  student_info.`Class`,  student_info.Intake_Category,  student_info.BatchID";
$tdataReport_Student_Payment[".sqlFrom"] = "FROM student_payment  INNER JOIN student_info ON student_payment.studentID = student_info.StudentID  INNER JOIN student_billing ON student_payment.student_bill_id = student_billing.student_bill_id  INNER JOIN setting_bill_item ON student_billing.item = setting_bill_item.id";
$tdataReport_Student_Payment[".sqlWhereExpr"] = "(student_info.Status ='Active')";
$tdataReport_Student_Payment[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Student_Payment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Student_Payment[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Student_Payment = array();
$tableKeysReport_Student_Payment[] = "pay_id";
$tdataReport_Student_Payment[".Keys"] = $tableKeysReport_Student_Payment;

$tdataReport_Student_Payment[".listFields"] = array();
$tdataReport_Student_Payment[".listFields"][] = "studentID";
$tdataReport_Student_Payment[".listFields"][] = "items";
$tdataReport_Student_Payment[".listFields"][] = "amount";
$tdataReport_Student_Payment[".listFields"][] = "pay_date";
$tdataReport_Student_Payment[".listFields"][] = "terms";
$tdataReport_Student_Payment[".listFields"][] = "ref_no";

$tdataReport_Student_Payment[".viewFields"] = array();

$tdataReport_Student_Payment[".addFields"] = array();

$tdataReport_Student_Payment[".inlineAddFields"] = array();

$tdataReport_Student_Payment[".editFields"] = array();

$tdataReport_Student_Payment[".inlineEditFields"] = array();

$tdataReport_Student_Payment[".exportFields"] = array();

$tdataReport_Student_Payment[".printFields"] = array();

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
		$fdata["FullName"] = "student_payment.pay_id";
	
		
		
				
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
	
		
		
	$tdataReport_Student_Payment["pay_id"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Pay Amount"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "amount"; 
		$fdata["FullName"] = "student_payment.amount";
	
		
		
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
	
		
		
	$tdataReport_Student_Payment["amount"] = $fdata;
//	pay_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pay_date";
	$fdata["GoodName"] = "pay_date";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "pay_date"; 
		$fdata["FullName"] = "student_payment.pay_date";
	
		
		
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
	
		
		
	$tdataReport_Student_Payment["pay_date"] = $fdata;
//	month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "month";
	$fdata["GoodName"] = "month";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Month"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "month"; 
		$fdata["FullName"] = "MONTH(student_payment.pay_date)";
	
		
		
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
	$edata["LookupValues"][] = "9";
	$edata["LookupValues"][] = "10";
	$edata["LookupValues"][] = "11";
	$edata["LookupValues"][] = "12";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Payment["month"] = $fdata;
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Year"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "year"; 
		$fdata["FullName"] = "YEAR(student_payment.pay_date)";
	
		
		
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
	
		
		
	$tdataReport_Student_Payment["year"] = $fdata;
//	studentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "studentID";
	$fdata["GoodName"] = "studentID";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "studentID"; 
		$fdata["FullName"] = "student_payment.studentID";
	
		
		
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
	
		
		
	$tdataReport_Student_Payment["studentID"] = $fdata;
//	terms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "terms";
	$fdata["GoodName"] = "terms";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "Terms"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "terms"; 
		$fdata["FullName"] = "student_payment.terms";
	
		
		
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
	
		
		
	$tdataReport_Student_Payment["terms"] = $fdata;
//	ref_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ref_no";
	$fdata["GoodName"] = "ref_no";
	$fdata["ownerTable"] = "student_payment";
	$fdata["Label"] = "OR No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ref_no"; 
		$fdata["FullName"] = "student_payment.ref_no";
	
		
		
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
	
		
		
	$tdataReport_Student_Payment["ref_no"] = $fdata;
//	items
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "items";
	$fdata["GoodName"] = "items";
	$fdata["ownerTable"] = "setting_bill_item";
	$fdata["Label"] = "Items"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "items"; 
		$fdata["FullName"] = "setting_bill_item.items";
	
		
		
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
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Payment["items"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
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
	
		
		
	$tdataReport_Student_Payment["DipID"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "student_info.`Class`";
	
		
		
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
	$edata["DisplayField"] = "group";
	
		
	$edata["LookupTable"] = "group";
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
	
		
		
	$tdataReport_Student_Payment["Class"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Intake_Category";
	$fdata["GoodName"] = "Intake_Category";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Program"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Intake_Category"; 
		$fdata["FullName"] = "student_info.Intake_Category";
	
		
		
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
				
		
			
	$edata["LinkField"] = "Intake_Code";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Intake_Category";
	
		
	$edata["LookupTable"] = "set_intake_category";
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
	
		
		
	$tdataReport_Student_Payment["Intake_Category"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch "; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataReport_Student_Payment["BatchID"] = $fdata;

	
$tables_data["Report_Student_Payment"]=&$tdataReport_Student_Payment;
$field_labels["Report_Student_Payment"] = &$fieldLabelsReport_Student_Payment;
$fieldToolTips["Report_Student_Payment"] = &$fieldToolTipsReport_Student_Payment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Student_Payment"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Student_Payment"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Student_Payment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_payment.pay_id,  student_payment.amount,  student_payment.pay_date,  MONTH(student_payment.pay_date) AS `month`,  YEAR(student_payment.pay_date) AS `year`,  student_payment.studentID,  student_payment.terms,  student_payment.ref_no,  setting_bill_item.items,  student_info.DipID,  student_info.`Class`,  student_info.Intake_Category,  student_info.BatchID";
$proto0["m_strFrom"] = "FROM student_payment  INNER JOIN student_info ON student_payment.studentID = student_info.StudentID  INNER JOIN student_billing ON student_payment.student_bill_id = student_billing.student_bill_id  INNER JOIN setting_bill_item ON student_billing.item = setting_bill_item.id";
$proto0["m_strWhere"] = "(student_info.Status ='Active')";
$proto0["m_strOrderBy"] = "ORDER BY student_payment.pay_id DESC";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "student_info.Status ='Active'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "student_info"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "='Active'";
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
	"m_strName" => "amount",
	"m_strTable" => "student_payment"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "pay_date",
	"m_strTable" => "student_payment"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_CUSTOM";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "student_payment.pay_date"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto12);

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "month";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_CUSTOM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "student_payment.pay_date"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "YEAR";
$obj = new SQLFunctionCall($proto15);

$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "year";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_payment"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "terms",
	"m_strTable" => "student_payment"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "ref_no",
	"m_strTable" => "student_payment"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "items",
	"m_strTable" => "setting_bill_item"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "student_payment";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "pay_id";
$proto34["m_columns"][] = "student_bill_id";
$proto34["m_columns"][] = "amount";
$proto34["m_columns"][] = "pay_date";
$proto34["m_columns"][] = "studentID";
$proto34["m_columns"][] = "terms";
$proto34["m_columns"][] = "ref_no";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_alias"] = "";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = "0";
$proto35["m_inBrackets"] = "0";
$proto35["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
												$proto37=array();
$proto37["m_link"] = "SQLL_INNERJOIN";
			$proto38=array();
$proto38["m_strName"] = "student_info";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "StudentID";
$proto38["m_columns"][] = "Name";
$proto38["m_columns"][] = "ICNO";
$proto38["m_columns"][] = "DOB";
$proto38["m_columns"][] = "MatricNo";
$proto38["m_columns"][] = "Nogilir";
$proto38["m_columns"][] = "Email";
$proto38["m_columns"][] = "Access";
$proto38["m_columns"][] = "Passw";
$proto38["m_columns"][] = "Type";
$proto38["m_columns"][] = "BranchID";
$proto38["m_columns"][] = "DateJoin";
$proto38["m_columns"][] = "Dateout";
$proto38["m_columns"][] = "Gender";
$proto38["m_columns"][] = "married";
$proto38["m_columns"][] = "Address1";
$proto38["m_columns"][] = "City";
$proto38["m_columns"][] = "Postcode";
$proto38["m_columns"][] = "StateID";
$proto38["m_columns"][] = "Country";
$proto38["m_columns"][] = "HomeTelephone";
$proto38["m_columns"][] = "MobileTelephone";
$proto38["m_columns"][] = "Nationality";
$proto38["m_columns"][] = "Passport";
$proto38["m_columns"][] = "BatchID";
$proto38["m_columns"][] = "Intake";
$proto38["m_columns"][] = "Sponsor";
$proto38["m_columns"][] = "DipID";
$proto38["m_columns"][] = "Status";
$proto38["m_columns"][] = "Disability";
$proto38["m_columns"][] = "MedicalCondition";
$proto38["m_columns"][] = "race";
$proto38["m_columns"][] = "Religion";
$proto38["m_columns"][] = "Class";
$proto38["m_columns"][] = "Intake_Category";
$proto38["m_columns"][] = "f1_name";
$proto38["m_columns"][] = "f1_tel";
$proto38["m_columns"][] = "f1_relation";
$proto38["m_columns"][] = "f2_name";
$proto38["m_columns"][] = "f2_tel";
$proto38["m_columns"][] = "f2_relation";
$proto38["m_columns"][] = "blood";
$proto38["m_columns"][] = "hostel_in";
$proto38["m_columns"][] = "job";
$proto38["m_columns"][] = "al_certificate";
$proto38["m_columns"][] = "al_license";
$proto38["m_columns"][] = "f_name";
$proto38["m_columns"][] = "f_tel";
$proto38["m_columns"][] = "f_ic";
$proto38["m_columns"][] = "f_job";
$proto38["m_columns"][] = "f_address";
$proto38["m_columns"][] = "m_name";
$proto38["m_columns"][] = "m_tel";
$proto38["m_columns"][] = "m_ic";
$proto38["m_columns"][] = "m_job";
$proto38["m_columns"][] = "m_address";
$proto38["m_columns"][] = "qua_year";
$proto38["m_columns"][] = "qua_level";
$proto38["m_columns"][] = "qua_result";
$proto38["m_columns"][] = "qua_place";
$proto38["m_columns"][] = "photo";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_alias"] = "";
$proto39=array();
$proto39["m_sql"] = "student_payment.studentID = student_info.StudentID";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_payment"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= student_info.StudentID";
$proto39["m_havingmode"] = "0";
$proto39["m_inBrackets"] = "0";
$proto39["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_INNERJOIN";
			$proto42=array();
$proto42["m_strName"] = "student_billing";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "student_bill_id";
$proto42["m_columns"][] = "proid";
$proto42["m_columns"][] = "studentID";
$proto42["m_columns"][] = "item";
$proto42["m_columns"][] = "amount";
$proto42["m_columns"][] = "status";
$proto42["m_columns"][] = "date";
$proto42["m_columns"][] = "amount_balance";
$proto42["m_columns"][] = "bill_no";
$proto42["m_columns"][] = "remark";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_alias"] = "";
$proto43=array();
$proto43["m_sql"] = "student_payment.student_bill_id = student_billing.student_bill_id";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "student_bill_id",
	"m_strTable" => "student_payment"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= student_billing.student_bill_id";
$proto43["m_havingmode"] = "0";
$proto43["m_inBrackets"] = "0";
$proto43["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_INNERJOIN";
			$proto46=array();
$proto46["m_strName"] = "setting_bill_item";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "id";
$proto46["m_columns"][] = "items";
$proto46["m_columns"][] = "amount";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_alias"] = "";
$proto47=array();
$proto47["m_sql"] = "student_billing.item = setting_bill_item.id";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "student_billing"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= setting_bill_item.id";
$proto47["m_havingmode"] = "0";
$proto47["m_inBrackets"] = "0";
$proto47["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "pay_id",
	"m_strTable" => "student_payment"
));

$proto49["m_column"]=$obj;
$proto49["m_bAsc"] = 0;
$proto49["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto49);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Student_Payment = createSqlQuery_Report_Student_Payment();
													$tdataReport_Student_Payment[".sqlquery"] = $queryData_Report_Student_Payment;

include_once(getabspath("include/Report_Student_Payment_events.php"));
$tableEvents["Report_Student_Payment"] = new eventclass_Report_Student_Payment;
$tdataReport_Student_Payment[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Student_Payment");

?>