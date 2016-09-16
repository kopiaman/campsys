<?php
require_once(getabspath("classes/cipherer.php"));
$tdatareport_bill_pending = array();
	$tdatareport_bill_pending[".NumberOfChars"] = 80; 
	$tdatareport_bill_pending[".ShortName"] = "report_bill_pending";
	$tdatareport_bill_pending[".OwnerID"] = "";
	$tdatareport_bill_pending[".OriginalTable"] = "report_bill_pending";

//	field labels
$fieldLabelsreport_bill_pending = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreport_bill_pending["English"] = array();
	$fieldToolTipsreport_bill_pending["English"] = array();
	$fieldLabelsreport_bill_pending["English"]["StudentID"] = "Student";
	$fieldToolTipsreport_bill_pending["English"]["StudentID"] = "";
	$fieldLabelsreport_bill_pending["English"]["Name"] = "Name";
	$fieldToolTipsreport_bill_pending["English"]["Name"] = "";
	$fieldLabelsreport_bill_pending["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsreport_bill_pending["English"]["MatricNo"] = "";
	$fieldLabelsreport_bill_pending["English"]["BatchID"] = "Batch";
	$fieldToolTipsreport_bill_pending["English"]["BatchID"] = "";
	$fieldLabelsreport_bill_pending["English"]["DipID"] = "Course";
	$fieldToolTipsreport_bill_pending["English"]["DipID"] = "";
	$fieldLabelsreport_bill_pending["English"]["Bill"] = "Bill";
	$fieldToolTipsreport_bill_pending["English"]["Bill"] = "";
	$fieldLabelsreport_bill_pending["English"]["Paid"] = "Paid";
	$fieldToolTipsreport_bill_pending["English"]["Paid"] = "";
	$fieldLabelsreport_bill_pending["English"]["Outstanding"] = "Outstanding";
	$fieldToolTipsreport_bill_pending["English"]["Outstanding"] = "";
	$fieldLabelsreport_bill_pending["English"]["StudentID2"] = "Statement";
	$fieldToolTipsreport_bill_pending["English"]["StudentID2"] = "";
	if (count($fieldToolTipsreport_bill_pending["English"]))
		$tdatareport_bill_pending[".isUseToolTips"] = true;
}
	
	
	$tdatareport_bill_pending[".NCSearch"] = true;



$tdatareport_bill_pending[".shortTableName"] = "report_bill_pending";
$tdatareport_bill_pending[".nSecOptions"] = 0;
$tdatareport_bill_pending[".recsPerRowList"] = 1;
$tdatareport_bill_pending[".mainTableOwnerID"] = "";
$tdatareport_bill_pending[".moveNext"] = 1;
$tdatareport_bill_pending[".nType"] = 0;

$tdatareport_bill_pending[".strOriginalTableName"] = "report_bill_pending";




$tdatareport_bill_pending[".showAddInPopup"] = false;

$tdatareport_bill_pending[".showEditInPopup"] = false;

$tdatareport_bill_pending[".showViewInPopup"] = false;

$tdatareport_bill_pending[".fieldsForRegister"] = array();
	
$tdatareport_bill_pending[".listAjax"] = false;

	$tdatareport_bill_pending[".audit"] = true;

	$tdatareport_bill_pending[".locking"] = false;

$tdatareport_bill_pending[".listIcons"] = true;

$tdatareport_bill_pending[".exportTo"] = true;



$tdatareport_bill_pending[".showSimpleSearchOptions"] = true;

$tdatareport_bill_pending[".showSearchPanel"] = true;

if (isMobile())
	$tdatareport_bill_pending[".isUseAjaxSuggest"] = false;
else 
	$tdatareport_bill_pending[".isUseAjaxSuggest"] = true;

$tdatareport_bill_pending[".rowHighlite"] = true;

// button handlers file names

$tdatareport_bill_pending[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport_bill_pending[".isUseTimeForSearch"] = false;




$tdatareport_bill_pending[".allSearchFields"] = array();

$tdatareport_bill_pending[".allSearchFields"][] = "Name";
$tdatareport_bill_pending[".allSearchFields"][] = "MatricNo";
$tdatareport_bill_pending[".allSearchFields"][] = "BatchID";
$tdatareport_bill_pending[".allSearchFields"][] = "DipID";

$tdatareport_bill_pending[".googleLikeFields"][] = "Name";

$tdatareport_bill_pending[".panelSearchFields"][] = "Name";
$tdatareport_bill_pending[".panelSearchFields"][] = "MatricNo";
$tdatareport_bill_pending[".panelSearchFields"][] = "BatchID";
$tdatareport_bill_pending[".panelSearchFields"][] = "DipID";

$tdatareport_bill_pending[".advSearchFields"][] = "Name";
$tdatareport_bill_pending[".advSearchFields"][] = "MatricNo";
$tdatareport_bill_pending[".advSearchFields"][] = "BatchID";
$tdatareport_bill_pending[".advSearchFields"][] = "DipID";

$tdatareport_bill_pending[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main


$tdatareport_bill_pending[".totalsFields"][] = array(
	"fName" => "Bill", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatareport_bill_pending[".totalsFields"][] = array(
	"fName" => "Paid", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatareport_bill_pending[".totalsFields"][] = array(
	"fName" => "Outstanding", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatareport_bill_pending[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY BatchID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareport_bill_pending[".strOrderBy"] = $tstrOrderBy;

$tdatareport_bill_pending[".orderindexes"] = array();
$tdatareport_bill_pending[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "BatchID");

$tdatareport_bill_pending[".sqlHead"] = "SELECT StudentID,  Name,  MatricNo,  BatchID,  DipID,  Bill,  Paid,  Outstanding,  StudentID AS StudentID2";
$tdatareport_bill_pending[".sqlFrom"] = "FROM report_bill_pending";
$tdatareport_bill_pending[".sqlWhereExpr"] = "";
$tdatareport_bill_pending[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport_bill_pending[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport_bill_pending[".arrGroupsPerPage"] = $arrGPP;

$tableKeysreport_bill_pending = array();
$tableKeysreport_bill_pending[] = "StudentID";
$tdatareport_bill_pending[".Keys"] = $tableKeysreport_bill_pending;

$tdatareport_bill_pending[".listFields"] = array();
$tdatareport_bill_pending[".listFields"][] = "StudentID2";
$tdatareport_bill_pending[".listFields"][] = "Name";
$tdatareport_bill_pending[".listFields"][] = "MatricNo";
$tdatareport_bill_pending[".listFields"][] = "BatchID";
$tdatareport_bill_pending[".listFields"][] = "Bill";
$tdatareport_bill_pending[".listFields"][] = "Paid";
$tdatareport_bill_pending[".listFields"][] = "Outstanding";

$tdatareport_bill_pending[".viewFields"] = array();

$tdatareport_bill_pending[".addFields"] = array();

$tdatareport_bill_pending[".inlineAddFields"] = array();

$tdatareport_bill_pending[".editFields"] = array();

$tdatareport_bill_pending[".inlineEditFields"] = array();

$tdatareport_bill_pending[".exportFields"] = array();
$tdatareport_bill_pending[".exportFields"][] = "Name";
$tdatareport_bill_pending[".exportFields"][] = "MatricNo";
$tdatareport_bill_pending[".exportFields"][] = "BatchID";
$tdatareport_bill_pending[".exportFields"][] = "DipID";
$tdatareport_bill_pending[".exportFields"][] = "Bill";
$tdatareport_bill_pending[".exportFields"][] = "Paid";
$tdatareport_bill_pending[".exportFields"][] = "Outstanding";

$tdatareport_bill_pending[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "report_bill_pending";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				
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
	
		
		
	$tdatareport_bill_pending["StudentID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "report_bill_pending";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "Name";
	
		
		
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
			$edata["EditParams"].= " maxlength=150";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatareport_bill_pending["Name"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "report_bill_pending";
	$fdata["Label"] = "Matric No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "MatricNo";
	
		
		
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
	
		
		
	$tdatareport_bill_pending["MatricNo"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "report_bill_pending";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "BatchID";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatareport_bill_pending["BatchID"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "report_bill_pending";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
	
		
		
	$tdatareport_bill_pending["DipID"] = $fdata;
//	Bill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Bill";
	$fdata["GoodName"] = "Bill";
	$fdata["ownerTable"] = "report_bill_pending";
	$fdata["Label"] = "Bill"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Bill"; 
		$fdata["FullName"] = "Bill";
	
		
		
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
	
		
		
	$tdatareport_bill_pending["Bill"] = $fdata;
//	Paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Paid";
	$fdata["GoodName"] = "Paid";
	$fdata["ownerTable"] = "report_bill_pending";
	$fdata["Label"] = "Paid"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Paid"; 
		$fdata["FullName"] = "Paid";
	
		
		
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
	
		
		
	$tdatareport_bill_pending["Paid"] = $fdata;
//	Outstanding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Outstanding";
	$fdata["GoodName"] = "Outstanding";
	$fdata["ownerTable"] = "report_bill_pending";
	$fdata["Label"] = "Outstanding"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Outstanding"; 
		$fdata["FullName"] = "Outstanding";
	
		
		
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
	
		
		
	$tdatareport_bill_pending["Outstanding"] = $fdata;
//	StudentID2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "StudentID2";
	$fdata["GoodName"] = "StudentID2";
	$fdata["ownerTable"] = "report_bill_pending";
	$fdata["Label"] = "Statement"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
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
	
		
		
	$tdatareport_bill_pending["StudentID2"] = $fdata;

	
$tables_data["report_bill_pending"]=&$tdatareport_bill_pending;
$field_labels["report_bill_pending"] = &$fieldLabelsreport_bill_pending;
$fieldToolTips["report_bill_pending"] = &$fieldToolTipsreport_bill_pending;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["report_bill_pending"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["report_bill_pending"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_report_bill_pending()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "StudentID,  Name,  MatricNo,  BatchID,  DipID,  Bill,  Paid,  Outstanding,  StudentID AS StudentID2";
$proto0["m_strFrom"] = "FROM report_bill_pending";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY BatchID DESC";
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
	"m_strName" => "StudentID",
	"m_strTable" => "report_bill_pending"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "report_bill_pending"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "report_bill_pending"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "report_bill_pending"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "report_bill_pending"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Bill",
	"m_strTable" => "report_bill_pending"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Paid",
	"m_strTable" => "report_bill_pending"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Outstanding",
	"m_strTable" => "report_bill_pending"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "report_bill_pending"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "StudentID2";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "report_bill_pending";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "StudentID";
$proto24["m_columns"][] = "Name";
$proto24["m_columns"][] = "MatricNo";
$proto24["m_columns"][] = "BatchID";
$proto24["m_columns"][] = "Intake";
$proto24["m_columns"][] = "Sponsor";
$proto24["m_columns"][] = "DipID";
$proto24["m_columns"][] = "Bill";
$proto24["m_columns"][] = "Paid";
$proto24["m_columns"][] = "Outstanding";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "report_bill_pending"
));

$proto27["m_column"]=$obj;
$proto27["m_bAsc"] = 0;
$proto27["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto27);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_report_bill_pending = createSqlQuery_report_bill_pending();
									$tdatareport_bill_pending[".sqlquery"] = $queryData_report_bill_pending;

$tableEvents["report_bill_pending"] = new eventsBase;
$tdatareport_bill_pending[".hasEvents"] = false;

$cipherer = new RunnerCipherer("report_bill_pending");

?>