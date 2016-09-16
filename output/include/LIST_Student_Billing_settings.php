<?php
require_once(getabspath("classes/cipherer.php"));
$tdataLIST_Student_Billing = array();
	$tdataLIST_Student_Billing[".NumberOfChars"] = 80; 
	$tdataLIST_Student_Billing[".ShortName"] = "LIST_Student_Billing";
	$tdataLIST_Student_Billing[".OwnerID"] = "";
	$tdataLIST_Student_Billing[".OriginalTable"] = "student_billing";

//	field labels
$fieldLabelsLIST_Student_Billing = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLIST_Student_Billing["English"] = array();
	$fieldToolTipsLIST_Student_Billing["English"] = array();
	$fieldLabelsLIST_Student_Billing["English"]["student_bill_id"] = "Student Bill Id";
	$fieldToolTipsLIST_Student_Billing["English"]["student_bill_id"] = "";
	$fieldLabelsLIST_Student_Billing["English"]["item"] = "Item";
	$fieldToolTipsLIST_Student_Billing["English"]["item"] = "";
	$fieldLabelsLIST_Student_Billing["English"]["status"] = "Status";
	$fieldToolTipsLIST_Student_Billing["English"]["status"] = "";
	$fieldLabelsLIST_Student_Billing["English"]["items"] = "Items";
	$fieldToolTipsLIST_Student_Billing["English"]["items"] = "";
	$fieldLabelsLIST_Student_Billing["English"]["Invoice_Amount"] = "Invoice Amount";
	$fieldToolTipsLIST_Student_Billing["English"]["Invoice_Amount"] = "";
	$fieldLabelsLIST_Student_Billing["English"]["Invoice_no"] = "Invoice No";
	$fieldToolTipsLIST_Student_Billing["English"]["Invoice_no"] = "";
	$fieldLabelsLIST_Student_Billing["English"]["Invoice_date"] = "Invoice Date";
	$fieldToolTipsLIST_Student_Billing["English"]["Invoice_date"] = "";
	$fieldLabelsLIST_Student_Billing["English"]["Balance"] = "Outstanding";
	$fieldToolTipsLIST_Student_Billing["English"]["Balance"] = "";
	$fieldLabelsLIST_Student_Billing["English"]["studentID"] = "Student ID";
	$fieldToolTipsLIST_Student_Billing["English"]["studentID"] = "";
	if (count($fieldToolTipsLIST_Student_Billing["English"]))
		$tdataLIST_Student_Billing[".isUseToolTips"] = true;
}
	
	
	$tdataLIST_Student_Billing[".NCSearch"] = true;



$tdataLIST_Student_Billing[".shortTableName"] = "LIST_Student_Billing";
$tdataLIST_Student_Billing[".nSecOptions"] = 0;
$tdataLIST_Student_Billing[".recsPerRowList"] = 1;
$tdataLIST_Student_Billing[".mainTableOwnerID"] = "";
$tdataLIST_Student_Billing[".moveNext"] = 1;
$tdataLIST_Student_Billing[".nType"] = 1;

$tdataLIST_Student_Billing[".strOriginalTableName"] = "student_billing";




$tdataLIST_Student_Billing[".showAddInPopup"] = false;

$tdataLIST_Student_Billing[".showEditInPopup"] = false;

$tdataLIST_Student_Billing[".showViewInPopup"] = false;

$tdataLIST_Student_Billing[".fieldsForRegister"] = array();
	
$tdataLIST_Student_Billing[".listAjax"] = false;

	$tdataLIST_Student_Billing[".audit"] = true;

	$tdataLIST_Student_Billing[".locking"] = false;

$tdataLIST_Student_Billing[".listIcons"] = true;




$tdataLIST_Student_Billing[".showSimpleSearchOptions"] = true;

$tdataLIST_Student_Billing[".showSearchPanel"] = true;

if (isMobile())
	$tdataLIST_Student_Billing[".isUseAjaxSuggest"] = false;
else 
	$tdataLIST_Student_Billing[".isUseAjaxSuggest"] = true;

$tdataLIST_Student_Billing[".rowHighlite"] = true;

// button handlers file names

$tdataLIST_Student_Billing[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLIST_Student_Billing[".isUseTimeForSearch"] = false;




$tdataLIST_Student_Billing[".allSearchFields"] = array();


$tdataLIST_Student_Billing[".googleLikeFields"][] = "items";
$tdataLIST_Student_Billing[".googleLikeFields"][] = "Invoice_Amount";
$tdataLIST_Student_Billing[".googleLikeFields"][] = "Invoice_no";
$tdataLIST_Student_Billing[".googleLikeFields"][] = "Invoice_date";
$tdataLIST_Student_Billing[".googleLikeFields"][] = "Balance";
$tdataLIST_Student_Billing[".googleLikeFields"][] = "studentID";

$tdataLIST_Student_Billing[".panelSearchFields"][] = "item";
$tdataLIST_Student_Billing[".panelSearchFields"][] = "status";


$tdataLIST_Student_Billing[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataLIST_Student_Billing[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLIST_Student_Billing[".strOrderBy"] = $tstrOrderBy;

$tdataLIST_Student_Billing[".orderindexes"] = array();

$tdataLIST_Student_Billing[".sqlHead"] = "SELECT student_billing.item,  setting_bill_item.items,  student_billing.amount AS Invoice_Amount,  student_billing.bill_no AS Invoice_no,  student_billing.`date` AS Invoice_date,  student_billing.amount_balance AS Balance,  student_billing.student_bill_id,  student_billing.status,  student_billing.studentID";
$tdataLIST_Student_Billing[".sqlFrom"] = "FROM student_billing  INNER JOIN setting_bill_item ON student_billing.item = setting_bill_item.id";
$tdataLIST_Student_Billing[".sqlWhereExpr"] = "";
$tdataLIST_Student_Billing[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLIST_Student_Billing[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLIST_Student_Billing[".arrGroupsPerPage"] = $arrGPP;

$tableKeysLIST_Student_Billing = array();
$tableKeysLIST_Student_Billing[] = "student_bill_id";
$tdataLIST_Student_Billing[".Keys"] = $tableKeysLIST_Student_Billing;

$tdataLIST_Student_Billing[".listFields"] = array();
$tdataLIST_Student_Billing[".listFields"][] = "item";
$tdataLIST_Student_Billing[".listFields"][] = "Invoice_Amount";
$tdataLIST_Student_Billing[".listFields"][] = "Invoice_no";
$tdataLIST_Student_Billing[".listFields"][] = "Invoice_date";
$tdataLIST_Student_Billing[".listFields"][] = "Balance";
$tdataLIST_Student_Billing[".listFields"][] = "status";

$tdataLIST_Student_Billing[".viewFields"] = array();

$tdataLIST_Student_Billing[".addFields"] = array();

$tdataLIST_Student_Billing[".inlineAddFields"] = array();

$tdataLIST_Student_Billing[".editFields"] = array();

$tdataLIST_Student_Billing[".inlineEditFields"] = array();

$tdataLIST_Student_Billing[".exportFields"] = array();

$tdataLIST_Student_Billing[".printFields"] = array();

//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Item"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
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
				if(strpos(GetUserPermissions("LIST-Student Billing"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
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
	
		
		
	$tdataLIST_Student_Billing["item"] = $fdata;
//	items
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "items";
	$fdata["GoodName"] = "items";
	$fdata["ownerTable"] = "setting_bill_item";
	$fdata["Label"] = "Items"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "items"; 
		$fdata["FullName"] = "setting_bill_item.items";
	
		
		
				
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
	
		
		
	$tdataLIST_Student_Billing["items"] = $fdata;
//	Invoice_Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Invoice_Amount";
	$fdata["GoodName"] = "Invoice_Amount";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Invoice Amount"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
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
	
		
		
	$tdataLIST_Student_Billing["Invoice_Amount"] = $fdata;
//	Invoice_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Invoice_no";
	$fdata["GoodName"] = "Invoice_no";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Invoice No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataLIST_Student_Billing["Invoice_no"] = $fdata;
//	Invoice_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Invoice_date";
	$fdata["GoodName"] = "Invoice_date";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Invoice Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
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
	
		
		
	$tdataLIST_Student_Billing["Invoice_date"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Outstanding"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataLIST_Student_Billing["Balance"] = $fdata;
//	student_bill_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
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
	
		
		
	$tdataLIST_Student_Billing["student_bill_id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "status"; 
		$fdata["FullName"] = "student_billing.status";
	
		
		
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
	
		
		
	$tdataLIST_Student_Billing["status"] = $fdata;
//	studentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "studentID";
	$fdata["GoodName"] = "studentID";
	$fdata["ownerTable"] = "student_billing";
	$fdata["Label"] = "Student ID"; 
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
	
		
		
	$tdataLIST_Student_Billing["studentID"] = $fdata;

	
$tables_data["LIST-Student Billing"]=&$tdataLIST_Student_Billing;
$field_labels["LIST_Student_Billing"] = &$fieldLabelsLIST_Student_Billing;
$fieldToolTips["LIST-Student Billing"] = &$fieldToolTipsLIST_Student_Billing;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LIST-Student Billing"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["LIST-Student Billing"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="student_info";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "student_info";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["LIST-Student Billing"][$mIndex] = $masterParams;	
		$masterTablesData["LIST-Student Billing"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["LIST-Student Billing"][$mIndex]["detailKeys"][]="studentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LIST_Student_Billing()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_billing.item,  setting_bill_item.items,  student_billing.amount AS Invoice_Amount,  student_billing.bill_no AS Invoice_no,  student_billing.`date` AS Invoice_date,  student_billing.amount_balance AS Balance,  student_billing.student_bill_id,  student_billing.status,  student_billing.studentID";
$proto0["m_strFrom"] = "FROM student_billing  INNER JOIN setting_bill_item ON student_billing.item = setting_bill_item.id";
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
	"m_strName" => "item",
	"m_strTable" => "student_billing"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "items",
	"m_strTable" => "setting_bill_item"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "student_billing"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Invoice_Amount";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "bill_no",
	"m_strTable" => "student_billing"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Invoice_no";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "student_billing"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Invoice_date";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "amount_balance",
	"m_strTable" => "student_billing"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Balance";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "student_bill_id",
	"m_strTable" => "student_billing"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "student_billing"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_billing"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "student_billing";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "student_bill_id";
$proto24["m_columns"][] = "proid";
$proto24["m_columns"][] = "studentID";
$proto24["m_columns"][] = "item";
$proto24["m_columns"][] = "amount";
$proto24["m_columns"][] = "status";
$proto24["m_columns"][] = "date";
$proto24["m_columns"][] = "amount_balance";
$proto24["m_columns"][] = "bill_no";
$proto24["m_columns"][] = "remark";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_alias"] = "";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = "0";
$proto25["m_inBrackets"] = "0";
$proto25["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
												$proto27=array();
$proto27["m_link"] = "SQLL_INNERJOIN";
			$proto28=array();
$proto28["m_strName"] = "setting_bill_item";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id";
$proto28["m_columns"][] = "items";
$proto28["m_columns"][] = "amount";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "student_billing.item = setting_bill_item.id";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "student_billing"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "= setting_bill_item.id";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LIST_Student_Billing = createSqlQuery_LIST_Student_Billing();
									$tdataLIST_Student_Billing[".sqlquery"] = $queryData_LIST_Student_Billing;

$tableEvents["LIST-Student Billing"] = new eventsBase;
$tdataLIST_Student_Billing[".hasEvents"] = false;

$cipherer = new RunnerCipherer("LIST-Student Billing");

?>