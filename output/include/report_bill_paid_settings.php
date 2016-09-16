<?php
require_once(getabspath("classes/cipherer.php"));
$tdatareport_bill_paid = array();
	$tdatareport_bill_paid[".NumberOfChars"] = 80; 
	$tdatareport_bill_paid[".ShortName"] = "report_bill_paid";
	$tdatareport_bill_paid[".OwnerID"] = "";
	$tdatareport_bill_paid[".OriginalTable"] = "report_bill_paid";

//	field labels
$fieldLabelsreport_bill_paid = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreport_bill_paid["English"] = array();
	$fieldToolTipsreport_bill_paid["English"] = array();
	$fieldLabelsreport_bill_paid["English"]["StudentID"] = "Student ID";
	$fieldToolTipsreport_bill_paid["English"]["StudentID"] = "";
	$fieldLabelsreport_bill_paid["English"]["Name"] = "Name";
	$fieldToolTipsreport_bill_paid["English"]["Name"] = "";
	$fieldLabelsreport_bill_paid["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsreport_bill_paid["English"]["MatricNo"] = "";
	$fieldLabelsreport_bill_paid["English"]["Batch"] = "Batch";
	$fieldToolTipsreport_bill_paid["English"]["Batch"] = "";
	$fieldLabelsreport_bill_paid["English"]["Program_Name"] = "Course";
	$fieldToolTipsreport_bill_paid["English"]["Program_Name"] = "";
	$fieldLabelsreport_bill_paid["English"]["Bill"] = "Bill";
	$fieldToolTipsreport_bill_paid["English"]["Bill"] = "";
	$fieldLabelsreport_bill_paid["English"]["Paid"] = "Paid";
	$fieldToolTipsreport_bill_paid["English"]["Paid"] = "";
	$fieldLabelsreport_bill_paid["English"]["Outstanding"] = "Outstanding";
	$fieldToolTipsreport_bill_paid["English"]["Outstanding"] = "";
	$fieldLabelsreport_bill_paid["English"]["ID"] = "Statement";
	$fieldToolTipsreport_bill_paid["English"]["ID"] = "";
	if (count($fieldToolTipsreport_bill_paid["English"]))
		$tdatareport_bill_paid[".isUseToolTips"] = true;
}
	
	
	$tdatareport_bill_paid[".NCSearch"] = true;



$tdatareport_bill_paid[".shortTableName"] = "report_bill_paid";
$tdatareport_bill_paid[".nSecOptions"] = 0;
$tdatareport_bill_paid[".recsPerRowList"] = 1;
$tdatareport_bill_paid[".mainTableOwnerID"] = "";
$tdatareport_bill_paid[".moveNext"] = 1;
$tdatareport_bill_paid[".nType"] = 0;

$tdatareport_bill_paid[".strOriginalTableName"] = "report_bill_paid";




$tdatareport_bill_paid[".showAddInPopup"] = false;

$tdatareport_bill_paid[".showEditInPopup"] = false;

$tdatareport_bill_paid[".showViewInPopup"] = false;

$tdatareport_bill_paid[".fieldsForRegister"] = array();
	
$tdatareport_bill_paid[".listAjax"] = false;

	$tdatareport_bill_paid[".audit"] = true;

	$tdatareport_bill_paid[".locking"] = false;

$tdatareport_bill_paid[".listIcons"] = true;

$tdatareport_bill_paid[".exportTo"] = true;



$tdatareport_bill_paid[".showSimpleSearchOptions"] = true;

$tdatareport_bill_paid[".showSearchPanel"] = true;

if (isMobile())
	$tdatareport_bill_paid[".isUseAjaxSuggest"] = false;
else 
	$tdatareport_bill_paid[".isUseAjaxSuggest"] = true;

$tdatareport_bill_paid[".rowHighlite"] = true;

// button handlers file names

$tdatareport_bill_paid[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport_bill_paid[".isUseTimeForSearch"] = false;




$tdatareport_bill_paid[".allSearchFields"] = array();

$tdatareport_bill_paid[".allSearchFields"][] = "Name";
$tdatareport_bill_paid[".allSearchFields"][] = "MatricNo";
$tdatareport_bill_paid[".allSearchFields"][] = "Batch";
$tdatareport_bill_paid[".allSearchFields"][] = "Program_Name";

$tdatareport_bill_paid[".googleLikeFields"][] = "Name";

$tdatareport_bill_paid[".panelSearchFields"][] = "Name";
$tdatareport_bill_paid[".panelSearchFields"][] = "MatricNo";
$tdatareport_bill_paid[".panelSearchFields"][] = "Batch";
$tdatareport_bill_paid[".panelSearchFields"][] = "Program_Name";

$tdatareport_bill_paid[".advSearchFields"][] = "Name";
$tdatareport_bill_paid[".advSearchFields"][] = "MatricNo";
$tdatareport_bill_paid[".advSearchFields"][] = "Batch";
$tdatareport_bill_paid[".advSearchFields"][] = "Program_Name";

$tdatareport_bill_paid[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main


$tdatareport_bill_paid[".totalsFields"][] = array(
	"fName" => "Bill", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatareport_bill_paid[".totalsFields"][] = array(
	"fName" => "Paid", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatareport_bill_paid[".totalsFields"][] = array(
	"fName" => "Outstanding", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatareport_bill_paid[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY Batch DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareport_bill_paid[".strOrderBy"] = $tstrOrderBy;

$tdatareport_bill_paid[".orderindexes"] = array();
$tdatareport_bill_paid[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "Batch");

$tdatareport_bill_paid[".sqlHead"] = "SELECT StudentID,  Name,  MatricNo,  Batch,  Program_Name,  Bill,  Paid,  Outstanding,  StudentID AS ID";
$tdatareport_bill_paid[".sqlFrom"] = "FROM report_bill_paid";
$tdatareport_bill_paid[".sqlWhereExpr"] = "";
$tdatareport_bill_paid[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport_bill_paid[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport_bill_paid[".arrGroupsPerPage"] = $arrGPP;

$tableKeysreport_bill_paid = array();
$tableKeysreport_bill_paid[] = "StudentID";
$tdatareport_bill_paid[".Keys"] = $tableKeysreport_bill_paid;

$tdatareport_bill_paid[".listFields"] = array();
$tdatareport_bill_paid[".listFields"][] = "ID";
$tdatareport_bill_paid[".listFields"][] = "Name";
$tdatareport_bill_paid[".listFields"][] = "MatricNo";
$tdatareport_bill_paid[".listFields"][] = "Batch";
$tdatareport_bill_paid[".listFields"][] = "Bill";
$tdatareport_bill_paid[".listFields"][] = "Paid";
$tdatareport_bill_paid[".listFields"][] = "Outstanding";

$tdatareport_bill_paid[".viewFields"] = array();

$tdatareport_bill_paid[".addFields"] = array();

$tdatareport_bill_paid[".inlineAddFields"] = array();

$tdatareport_bill_paid[".editFields"] = array();

$tdatareport_bill_paid[".inlineEditFields"] = array();

$tdatareport_bill_paid[".exportFields"] = array();
$tdatareport_bill_paid[".exportFields"][] = "Name";
$tdatareport_bill_paid[".exportFields"][] = "MatricNo";
$tdatareport_bill_paid[".exportFields"][] = "Batch";
$tdatareport_bill_paid[".exportFields"][] = "Program_Name";
$tdatareport_bill_paid[".exportFields"][] = "Bill";
$tdatareport_bill_paid[".exportFields"][] = "Paid";
$tdatareport_bill_paid[".exportFields"][] = "Outstanding";

$tdatareport_bill_paid[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "report_bill_paid";
	$fdata["Label"] = "Student ID"; 
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
	
		
		
	$tdatareport_bill_paid["StudentID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "report_bill_paid";
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
	
		
		
	$tdatareport_bill_paid["Name"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "report_bill_paid";
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
	
		
		
	$tdatareport_bill_paid["MatricNo"] = $fdata;
//	Batch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Batch";
	$fdata["GoodName"] = "Batch";
	$fdata["ownerTable"] = "report_bill_paid";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Batch"; 
		$fdata["FullName"] = "Batch";
	
		
		
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
	
		
		
	$tdatareport_bill_paid["Batch"] = $fdata;
//	Program_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Program_Name";
	$fdata["GoodName"] = "Program_Name";
	$fdata["ownerTable"] = "report_bill_paid";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Program_Name"; 
		$fdata["FullName"] = "Program_Name";
	
		
		
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
	
		
		
	$tdatareport_bill_paid["Program_Name"] = $fdata;
//	Bill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Bill";
	$fdata["GoodName"] = "Bill";
	$fdata["ownerTable"] = "report_bill_paid";
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
	
		
		
	$tdatareport_bill_paid["Bill"] = $fdata;
//	Paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Paid";
	$fdata["GoodName"] = "Paid";
	$fdata["ownerTable"] = "report_bill_paid";
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
	
		
		
	$tdatareport_bill_paid["Paid"] = $fdata;
//	Outstanding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Outstanding";
	$fdata["GoodName"] = "Outstanding";
	$fdata["ownerTable"] = "report_bill_paid";
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
	
		
		
	$tdatareport_bill_paid["Outstanding"] = $fdata;
//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "report_bill_paid";
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
	
		
		
	$tdatareport_bill_paid["ID"] = $fdata;

	
$tables_data["report_bill_paid"]=&$tdatareport_bill_paid;
$field_labels["report_bill_paid"] = &$fieldLabelsreport_bill_paid;
$fieldToolTips["report_bill_paid"] = &$fieldToolTipsreport_bill_paid;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["report_bill_paid"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["report_bill_paid"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_report_bill_paid()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "StudentID,  Name,  MatricNo,  Batch,  Program_Name,  Bill,  Paid,  Outstanding,  StudentID AS ID";
$proto0["m_strFrom"] = "FROM report_bill_paid";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Batch DESC";
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
	"m_strTable" => "report_bill_paid"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "report_bill_paid"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "report_bill_paid"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Batch",
	"m_strTable" => "report_bill_paid"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Program_Name",
	"m_strTable" => "report_bill_paid"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Bill",
	"m_strTable" => "report_bill_paid"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Paid",
	"m_strTable" => "report_bill_paid"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Outstanding",
	"m_strTable" => "report_bill_paid"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "report_bill_paid"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "ID";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "report_bill_paid";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "StudentID";
$proto24["m_columns"][] = "Name";
$proto24["m_columns"][] = "MatricNo";
$proto24["m_columns"][] = "Batch";
$proto24["m_columns"][] = "Intake";
$proto24["m_columns"][] = "Sponsor";
$proto24["m_columns"][] = "Program_Name";
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
	"m_strName" => "Batch",
	"m_strTable" => "report_bill_paid"
));

$proto27["m_column"]=$obj;
$proto27["m_bAsc"] = 0;
$proto27["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto27);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_report_bill_paid = createSqlQuery_report_bill_paid();
									$tdatareport_bill_paid[".sqlquery"] = $queryData_report_bill_paid;

$tableEvents["report_bill_paid"] = new eventsBase;
$tdatareport_bill_paid[".hasEvents"] = false;

$cipherer = new RunnerCipherer("report_bill_paid");

?>