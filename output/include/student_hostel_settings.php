<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_hostel = array();
	$tdatastudent_hostel[".NumberOfChars"] = 80; 
	$tdatastudent_hostel[".ShortName"] = "student_hostel";
	$tdatastudent_hostel[".OwnerID"] = "";
	$tdatastudent_hostel[".OriginalTable"] = "student_hostel";

//	field labels
$fieldLabelsstudent_hostel = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_hostel["English"] = array();
	$fieldToolTipsstudent_hostel["English"] = array();
	$fieldLabelsstudent_hostel["English"]["ID"] = "ID";
	$fieldToolTipsstudent_hostel["English"]["ID"] = "";
	$fieldLabelsstudent_hostel["English"]["StudentID"] = "Student";
	$fieldToolTipsstudent_hostel["English"]["StudentID"] = "";
	$fieldLabelsstudent_hostel["English"]["HostelID"] = "Location";
	$fieldToolTipsstudent_hostel["English"]["HostelID"] = "";
	$fieldLabelsstudent_hostel["English"]["CheckInDate"] = "Check In Date";
	$fieldToolTipsstudent_hostel["English"]["CheckInDate"] = "";
	$fieldLabelsstudent_hostel["English"]["CheckOutDate"] = "Check Out Date";
	$fieldToolTipsstudent_hostel["English"]["CheckOutDate"] = "";
	$fieldLabelsstudent_hostel["English"]["Items"] = "Items";
	$fieldToolTipsstudent_hostel["English"]["Items"] = "";
	$fieldLabelsstudent_hostel["English"]["Room_No"] = "No";
	$fieldToolTipsstudent_hostel["English"]["Room_No"] = "";
	if (count($fieldToolTipsstudent_hostel["English"]))
		$tdatastudent_hostel[".isUseToolTips"] = true;
}
	
	



$tdatastudent_hostel[".shortTableName"] = "student_hostel";
$tdatastudent_hostel[".nSecOptions"] = 0;
$tdatastudent_hostel[".recsPerRowList"] = 1;
$tdatastudent_hostel[".mainTableOwnerID"] = "";
$tdatastudent_hostel[".moveNext"] = 1;
$tdatastudent_hostel[".nType"] = 0;

$tdatastudent_hostel[".strOriginalTableName"] = "student_hostel";




$tdatastudent_hostel[".showAddInPopup"] = false;

$tdatastudent_hostel[".showEditInPopup"] = false;

$tdatastudent_hostel[".showViewInPopup"] = false;

$tdatastudent_hostel[".fieldsForRegister"] = array();
	
$tdatastudent_hostel[".listAjax"] = false;

	$tdatastudent_hostel[".audit"] = true;

	$tdatastudent_hostel[".locking"] = false;

$tdatastudent_hostel[".listIcons"] = true;
$tdatastudent_hostel[".inlineEdit"] = true;
$tdatastudent_hostel[".inlineAdd"] = true;

$tdatastudent_hostel[".exportTo"] = true;


$tdatastudent_hostel[".delete"] = true;

$tdatastudent_hostel[".showSimpleSearchOptions"] = true;

$tdatastudent_hostel[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_hostel[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_hostel[".isUseAjaxSuggest"] = true;

$tdatastudent_hostel[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_hostel[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_hostel[".isUseTimeForSearch"] = false;




$tdatastudent_hostel[".allSearchFields"] = array();

$tdatastudent_hostel[".allSearchFields"][] = "HostelID";
$tdatastudent_hostel[".allSearchFields"][] = "Room_No";
$tdatastudent_hostel[".allSearchFields"][] = "CheckInDate";
$tdatastudent_hostel[".allSearchFields"][] = "CheckOutDate";
$tdatastudent_hostel[".allSearchFields"][] = "Items";

$tdatastudent_hostel[".googleLikeFields"][] = "ID";
$tdatastudent_hostel[".googleLikeFields"][] = "StudentID";
$tdatastudent_hostel[".googleLikeFields"][] = "HostelID";
$tdatastudent_hostel[".googleLikeFields"][] = "Room_No";
$tdatastudent_hostel[".googleLikeFields"][] = "CheckInDate";
$tdatastudent_hostel[".googleLikeFields"][] = "CheckOutDate";
$tdatastudent_hostel[".googleLikeFields"][] = "Items";

$tdatastudent_hostel[".panelSearchFields"][] = "ID";
$tdatastudent_hostel[".panelSearchFields"][] = "HostelID";
$tdatastudent_hostel[".panelSearchFields"][] = "StudentID";
$tdatastudent_hostel[".panelSearchFields"][] = "CheckInDate";
$tdatastudent_hostel[".panelSearchFields"][] = "CheckOutDate";

$tdatastudent_hostel[".advSearchFields"][] = "HostelID";
$tdatastudent_hostel[".advSearchFields"][] = "Room_No";
$tdatastudent_hostel[".advSearchFields"][] = "CheckInDate";
$tdatastudent_hostel[".advSearchFields"][] = "CheckOutDate";
$tdatastudent_hostel[".advSearchFields"][] = "Items";

$tdatastudent_hostel[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_hostel[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_hostel[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_hostel[".orderindexes"] = array();

$tdatastudent_hostel[".sqlHead"] = "SELECT ID,   StudentID,   HostelID,   Room_No,   CheckInDate,   CheckOutDate,   Items";
$tdatastudent_hostel[".sqlFrom"] = "FROM student_hostel";
$tdatastudent_hostel[".sqlWhereExpr"] = "";
$tdatastudent_hostel[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_hostel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_hostel[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_hostel = array();
$tableKeysstudent_hostel[] = "ID";
$tdatastudent_hostel[".Keys"] = $tableKeysstudent_hostel;

$tdatastudent_hostel[".listFields"] = array();
$tdatastudent_hostel[".listFields"][] = "HostelID";
$tdatastudent_hostel[".listFields"][] = "Room_No";
$tdatastudent_hostel[".listFields"][] = "CheckInDate";
$tdatastudent_hostel[".listFields"][] = "CheckOutDate";
$tdatastudent_hostel[".listFields"][] = "Items";

$tdatastudent_hostel[".viewFields"] = array();

$tdatastudent_hostel[".addFields"] = array();

$tdatastudent_hostel[".inlineAddFields"] = array();
$tdatastudent_hostel[".inlineAddFields"][] = "HostelID";
$tdatastudent_hostel[".inlineAddFields"][] = "Room_No";
$tdatastudent_hostel[".inlineAddFields"][] = "CheckInDate";
$tdatastudent_hostel[".inlineAddFields"][] = "CheckOutDate";
$tdatastudent_hostel[".inlineAddFields"][] = "Items";

$tdatastudent_hostel[".editFields"] = array();

$tdatastudent_hostel[".inlineEditFields"] = array();
$tdatastudent_hostel[".inlineEditFields"][] = "HostelID";
$tdatastudent_hostel[".inlineEditFields"][] = "Room_No";
$tdatastudent_hostel[".inlineEditFields"][] = "CheckInDate";
$tdatastudent_hostel[".inlineEditFields"][] = "CheckOutDate";
$tdatastudent_hostel[".inlineEditFields"][] = "Items";

$tdatastudent_hostel[".exportFields"] = array();
$tdatastudent_hostel[".exportFields"][] = "ID";
$tdatastudent_hostel[".exportFields"][] = "HostelID";
$tdatastudent_hostel[".exportFields"][] = "StudentID";
$tdatastudent_hostel[".exportFields"][] = "Room_No";
$tdatastudent_hostel[".exportFields"][] = "CheckInDate";
$tdatastudent_hostel[".exportFields"][] = "CheckOutDate";
$tdatastudent_hostel[".exportFields"][] = "Items";

$tdatastudent_hostel[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_hostel";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
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
	
		
		
	$tdatastudent_hostel["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_hostel";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
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
	
		
		
	$tdatastudent_hostel["StudentID"] = $fdata;
//	HostelID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "HostelID";
	$fdata["GoodName"] = "HostelID";
	$fdata["ownerTable"] = "student_hostel";
	$fdata["Label"] = "Location"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
				if(strpos(GetUserPermissions("student_hostel"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=37";
	
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_hostel["HostelID"] = $fdata;
//	Room_No
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Room_No";
	$fdata["GoodName"] = "Room_No";
	$fdata["ownerTable"] = "student_hostel";
	$fdata["Label"] = "No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Room_No"; 
		$fdata["FullName"] = "Room_No";
	
		
		
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
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_hostel["Room_No"] = $fdata;
//	CheckInDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CheckInDate";
	$fdata["GoodName"] = "CheckInDate";
	$fdata["ownerTable"] = "student_hostel";
	$fdata["Label"] = "Check In Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CheckInDate"; 
		$fdata["FullName"] = "CheckInDate";
	
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
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
	
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_hostel["CheckInDate"] = $fdata;
//	CheckOutDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CheckOutDate";
	$fdata["GoodName"] = "CheckOutDate";
	$fdata["ownerTable"] = "student_hostel";
	$fdata["Label"] = "Check Out Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CheckOutDate"; 
		$fdata["FullName"] = "CheckOutDate";
	
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
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
	
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_hostel["CheckOutDate"] = $fdata;
//	Items
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Items";
	$fdata["GoodName"] = "Items";
	$fdata["ownerTable"] = "student_hostel";
	$fdata["Label"] = "Items"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Items"; 
		$fdata["FullName"] = "Items";
	
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
				$edata["LCType"] = 3;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=19";
	
		
		
		
				
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_hostel["Items"] = $fdata;

	
$tables_data["student_hostel"]=&$tdatastudent_hostel;
$field_labels["student_hostel"] = &$fieldLabelsstudent_hostel;
$fieldToolTips["student_hostel"] = &$fieldToolTipsstudent_hostel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_hostel"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_hostel"] = array();

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
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["student_hostel"][$mIndex] = $masterParams;	
		$masterTablesData["student_hostel"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["student_hostel"][$mIndex]["detailKeys"][]="StudentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_hostel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   StudentID,   HostelID,   Room_No,   CheckInDate,   CheckOutDate,   Items";
$proto0["m_strFrom"] = "FROM student_hostel";
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
	"m_strName" => "ID",
	"m_strTable" => "student_hostel"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_hostel"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "HostelID",
	"m_strTable" => "student_hostel"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Room_No",
	"m_strTable" => "student_hostel"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckInDate",
	"m_strTable" => "student_hostel"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "CheckOutDate",
	"m_strTable" => "student_hostel"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Items",
	"m_strTable" => "student_hostel"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "student_hostel";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "StudentID";
$proto20["m_columns"][] = "HostelID";
$proto20["m_columns"][] = "Room_No";
$proto20["m_columns"][] = "CheckInDate";
$proto20["m_columns"][] = "CheckOutDate";
$proto20["m_columns"][] = "Items";
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
$queryData_student_hostel = createSqlQuery_student_hostel();
							$tdatastudent_hostel[".sqlquery"] = $queryData_student_hostel;

$tableEvents["student_hostel"] = new eventsBase;
$tdatastudent_hostel[".hasEvents"] = false;

$cipherer = new RunnerCipherer("student_hostel");

?>