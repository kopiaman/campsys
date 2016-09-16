<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Student_Hostel = array();
	$tdataReport_Student_Hostel[".NumberOfChars"] = 80; 
	$tdataReport_Student_Hostel[".ShortName"] = "Report_Student_Hostel";
	$tdataReport_Student_Hostel[".OwnerID"] = "";
	$tdataReport_Student_Hostel[".OriginalTable"] = "student_hostel";

//	field labels
$fieldLabelsReport_Student_Hostel = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Student_Hostel["English"] = array();
	$fieldToolTipsReport_Student_Hostel["English"] = array();
	$fieldLabelsReport_Student_Hostel["English"]["ID"] = "ID";
	$fieldToolTipsReport_Student_Hostel["English"]["ID"] = "";
	$fieldLabelsReport_Student_Hostel["English"]["StudentID"] = "Student";
	$fieldToolTipsReport_Student_Hostel["English"]["StudentID"] = "";
	$fieldLabelsReport_Student_Hostel["English"]["HostelID"] = "Location";
	$fieldToolTipsReport_Student_Hostel["English"]["HostelID"] = "";
	$fieldLabelsReport_Student_Hostel["English"]["CheckInDate"] = "Check In Date";
	$fieldToolTipsReport_Student_Hostel["English"]["CheckInDate"] = "";
	$fieldLabelsReport_Student_Hostel["English"]["CheckOutDate"] = "Check Out Date";
	$fieldToolTipsReport_Student_Hostel["English"]["CheckOutDate"] = "";
	$fieldLabelsReport_Student_Hostel["English"]["Items"] = "Items";
	$fieldToolTipsReport_Student_Hostel["English"]["Items"] = "";
	$fieldLabelsReport_Student_Hostel["English"]["Room_No"] = "No";
	$fieldToolTipsReport_Student_Hostel["English"]["Room_No"] = "";
	$fieldLabelsReport_Student_Hostel["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Student_Hostel["English"]["BatchID"] = "";
	$fieldLabelsReport_Student_Hostel["English"]["DipID"] = "Course";
	$fieldToolTipsReport_Student_Hostel["English"]["DipID"] = "";
	$fieldLabelsReport_Student_Hostel["English"]["Class"] = "Class";
	$fieldToolTipsReport_Student_Hostel["English"]["Class"] = "";
	$fieldLabelsReport_Student_Hostel["English"]["Intake_Category"] = "Program";
	$fieldToolTipsReport_Student_Hostel["English"]["Intake_Category"] = "";
	if (count($fieldToolTipsReport_Student_Hostel["English"]))
		$tdataReport_Student_Hostel[".isUseToolTips"] = true;
}
	
	



$tdataReport_Student_Hostel[".shortTableName"] = "Report_Student_Hostel";
$tdataReport_Student_Hostel[".nSecOptions"] = 0;
$tdataReport_Student_Hostel[".recsPerRowList"] = 1;
$tdataReport_Student_Hostel[".mainTableOwnerID"] = "";
$tdataReport_Student_Hostel[".moveNext"] = 1;
$tdataReport_Student_Hostel[".nType"] = 1;

$tdataReport_Student_Hostel[".strOriginalTableName"] = "student_hostel";




$tdataReport_Student_Hostel[".showAddInPopup"] = false;

$tdataReport_Student_Hostel[".showEditInPopup"] = false;

$tdataReport_Student_Hostel[".showViewInPopup"] = false;

$tdataReport_Student_Hostel[".fieldsForRegister"] = array();
	
$tdataReport_Student_Hostel[".listAjax"] = false;

	$tdataReport_Student_Hostel[".audit"] = true;

	$tdataReport_Student_Hostel[".locking"] = false;

$tdataReport_Student_Hostel[".listIcons"] = true;
$tdataReport_Student_Hostel[".inlineEdit"] = true;
$tdataReport_Student_Hostel[".inlineAdd"] = true;



$tdataReport_Student_Hostel[".delete"] = true;

$tdataReport_Student_Hostel[".showSimpleSearchOptions"] = true;

$tdataReport_Student_Hostel[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Student_Hostel[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Student_Hostel[".isUseAjaxSuggest"] = true;

$tdataReport_Student_Hostel[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Student_Hostel[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Student_Hostel[".isUseTimeForSearch"] = false;




$tdataReport_Student_Hostel[".allSearchFields"] = array();

$tdataReport_Student_Hostel[".allSearchFields"][] = "StudentID";
$tdataReport_Student_Hostel[".allSearchFields"][] = "Intake_Category";
$tdataReport_Student_Hostel[".allSearchFields"][] = "DipID";
$tdataReport_Student_Hostel[".allSearchFields"][] = "BatchID";
$tdataReport_Student_Hostel[".allSearchFields"][] = "Class";
$tdataReport_Student_Hostel[".allSearchFields"][] = "HostelID";
$tdataReport_Student_Hostel[".allSearchFields"][] = "Room_No";
$tdataReport_Student_Hostel[".allSearchFields"][] = "CheckInDate";
$tdataReport_Student_Hostel[".allSearchFields"][] = "CheckOutDate";
$tdataReport_Student_Hostel[".allSearchFields"][] = "Items";

$tdataReport_Student_Hostel[".googleLikeFields"][] = "StudentID";
$tdataReport_Student_Hostel[".googleLikeFields"][] = "BatchID";
$tdataReport_Student_Hostel[".googleLikeFields"][] = "DipID";
$tdataReport_Student_Hostel[".googleLikeFields"][] = "Class";
$tdataReport_Student_Hostel[".googleLikeFields"][] = "Intake_Category";

$tdataReport_Student_Hostel[".panelSearchFields"][] = "StudentID";
$tdataReport_Student_Hostel[".panelSearchFields"][] = "Intake_Category";
$tdataReport_Student_Hostel[".panelSearchFields"][] = "DipID";
$tdataReport_Student_Hostel[".panelSearchFields"][] = "BatchID";
$tdataReport_Student_Hostel[".panelSearchFields"][] = "Class";
$tdataReport_Student_Hostel[".panelSearchFields"][] = "HostelID";
$tdataReport_Student_Hostel[".panelSearchFields"][] = "Room_No";
$tdataReport_Student_Hostel[".panelSearchFields"][] = "CheckInDate";
$tdataReport_Student_Hostel[".panelSearchFields"][] = "CheckOutDate";

$tdataReport_Student_Hostel[".advSearchFields"][] = "StudentID";
$tdataReport_Student_Hostel[".advSearchFields"][] = "Intake_Category";
$tdataReport_Student_Hostel[".advSearchFields"][] = "DipID";
$tdataReport_Student_Hostel[".advSearchFields"][] = "BatchID";
$tdataReport_Student_Hostel[".advSearchFields"][] = "Class";
$tdataReport_Student_Hostel[".advSearchFields"][] = "HostelID";
$tdataReport_Student_Hostel[".advSearchFields"][] = "Room_No";
$tdataReport_Student_Hostel[".advSearchFields"][] = "CheckInDate";
$tdataReport_Student_Hostel[".advSearchFields"][] = "CheckOutDate";
$tdataReport_Student_Hostel[".advSearchFields"][] = "Items";

$tdataReport_Student_Hostel[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Student_Hostel[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_hostel.ID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Student_Hostel[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Student_Hostel[".orderindexes"] = array();
$tdataReport_Student_Hostel[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_hostel.ID");

$tdataReport_Student_Hostel[".sqlHead"] = "SELECT student_hostel.ID,  student_hostel.StudentID,  student_hostel.HostelID,  student_hostel.Room_No,  student_hostel.CheckInDate,  student_hostel.CheckOutDate,  student_hostel.Items,  student_info.BatchID,  student_info.DipID,  student_info.`Class`,  student_info.Intake_Category";
$tdataReport_Student_Hostel[".sqlFrom"] = "FROM student_hostel  INNER JOIN student_info ON student_hostel.StudentID = student_info.StudentID";
$tdataReport_Student_Hostel[".sqlWhereExpr"] = "";
$tdataReport_Student_Hostel[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Student_Hostel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Student_Hostel[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Student_Hostel = array();
$tableKeysReport_Student_Hostel[] = "ID";
$tdataReport_Student_Hostel[".Keys"] = $tableKeysReport_Student_Hostel;

$tdataReport_Student_Hostel[".listFields"] = array();
$tdataReport_Student_Hostel[".listFields"][] = "StudentID";
$tdataReport_Student_Hostel[".listFields"][] = "DipID";
$tdataReport_Student_Hostel[".listFields"][] = "BatchID";
$tdataReport_Student_Hostel[".listFields"][] = "Class";
$tdataReport_Student_Hostel[".listFields"][] = "HostelID";
$tdataReport_Student_Hostel[".listFields"][] = "Room_No";
$tdataReport_Student_Hostel[".listFields"][] = "CheckInDate";
$tdataReport_Student_Hostel[".listFields"][] = "CheckOutDate";
$tdataReport_Student_Hostel[".listFields"][] = "Items";

$tdataReport_Student_Hostel[".viewFields"] = array();

$tdataReport_Student_Hostel[".addFields"] = array();

$tdataReport_Student_Hostel[".inlineAddFields"] = array();
$tdataReport_Student_Hostel[".inlineAddFields"][] = "StudentID";
$tdataReport_Student_Hostel[".inlineAddFields"][] = "HostelID";
$tdataReport_Student_Hostel[".inlineAddFields"][] = "Room_No";
$tdataReport_Student_Hostel[".inlineAddFields"][] = "CheckInDate";
$tdataReport_Student_Hostel[".inlineAddFields"][] = "CheckOutDate";
$tdataReport_Student_Hostel[".inlineAddFields"][] = "Items";

$tdataReport_Student_Hostel[".editFields"] = array();

$tdataReport_Student_Hostel[".inlineEditFields"] = array();
$tdataReport_Student_Hostel[".inlineEditFields"][] = "StudentID";
$tdataReport_Student_Hostel[".inlineEditFields"][] = "HostelID";
$tdataReport_Student_Hostel[".inlineEditFields"][] = "Room_No";
$tdataReport_Student_Hostel[".inlineEditFields"][] = "CheckInDate";
$tdataReport_Student_Hostel[".inlineEditFields"][] = "CheckOutDate";
$tdataReport_Student_Hostel[".inlineEditFields"][] = "Items";

$tdataReport_Student_Hostel[".exportFields"] = array();

$tdataReport_Student_Hostel[".printFields"] = array();

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
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "student_hostel.ID";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				
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
	
		
		
	$tdataReport_Student_Hostel["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_hostel";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_hostel.StudentID";
	
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
				if(strpos(GetUserPermissions("Report_Student_Hostel"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "hostel_in='No'";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:80px;";
	$edata["controlWidth"] = 80;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Hostel["StudentID"] = $fdata;
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
	
		
		
		$fdata["strField"] = "HostelID"; 
		$fdata["FullName"] = "student_hostel.HostelID";
	
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
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class='37'";
	
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:80px;";
	$edata["controlWidth"] = 80;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Hostel["HostelID"] = $fdata;
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
	
		
		
		$fdata["strField"] = "Room_No"; 
		$fdata["FullName"] = "student_hostel.Room_No";
	
		
		
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
			
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Hostel["Room_No"] = $fdata;
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
	
		
		
		$fdata["strField"] = "CheckInDate"; 
		$fdata["FullName"] = "student_hostel.CheckInDate";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
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
	
		
		
	$tdataReport_Student_Hostel["CheckInDate"] = $fdata;
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
	
		
		
		$fdata["strField"] = "CheckOutDate"; 
		$fdata["FullName"] = "student_hostel.CheckOutDate";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
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
	
		
		
	$tdataReport_Student_Hostel["CheckOutDate"] = $fdata;
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
	
		
		
		$fdata["strField"] = "Items"; 
		$fdata["FullName"] = "student_hostel.Items";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
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
	$edata["LinkFieldType"] = 201;
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
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
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
	
		
				
		$fdata["EditFormats"]["register"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
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
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
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
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdataReport_Student_Hostel["Items"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdataReport_Student_Hostel["BatchID"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdataReport_Student_Hostel["DipID"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdataReport_Student_Hostel["Class"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
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
	$edata["DisplayField"] = "Intake_Code";
	
		
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
	
		
		
	$tdataReport_Student_Hostel["Intake_Category"] = $fdata;

	
$tables_data["Report_Student_Hostel"]=&$tdataReport_Student_Hostel;
$field_labels["Report_Student_Hostel"] = &$fieldLabelsReport_Student_Hostel;
$fieldToolTips["Report_Student_Hostel"] = &$fieldToolTipsReport_Student_Hostel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Student_Hostel"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Student_Hostel"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Student_Hostel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_hostel.ID,  student_hostel.StudentID,  student_hostel.HostelID,  student_hostel.Room_No,  student_hostel.CheckInDate,  student_hostel.CheckOutDate,  student_hostel.Items,  student_info.BatchID,  student_info.DipID,  student_info.`Class`,  student_info.Intake_Category";
$proto0["m_strFrom"] = "FROM student_hostel  INNER JOIN student_info ON student_hostel.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY student_hostel.ID DESC";
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
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "student_hostel";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "ID";
$proto28["m_columns"][] = "StudentID";
$proto28["m_columns"][] = "HostelID";
$proto28["m_columns"][] = "Room_No";
$proto28["m_columns"][] = "CheckInDate";
$proto28["m_columns"][] = "CheckOutDate";
$proto28["m_columns"][] = "Items";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_INNERJOIN";
			$proto32=array();
$proto32["m_strName"] = "student_info";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "StudentID";
$proto32["m_columns"][] = "Name";
$proto32["m_columns"][] = "ICNO";
$proto32["m_columns"][] = "DOB";
$proto32["m_columns"][] = "MatricNo";
$proto32["m_columns"][] = "Nogilir";
$proto32["m_columns"][] = "Email";
$proto32["m_columns"][] = "Access";
$proto32["m_columns"][] = "Passw";
$proto32["m_columns"][] = "Type";
$proto32["m_columns"][] = "BranchID";
$proto32["m_columns"][] = "DateJoin";
$proto32["m_columns"][] = "Dateout";
$proto32["m_columns"][] = "Gender";
$proto32["m_columns"][] = "married";
$proto32["m_columns"][] = "Address1";
$proto32["m_columns"][] = "City";
$proto32["m_columns"][] = "Postcode";
$proto32["m_columns"][] = "StateID";
$proto32["m_columns"][] = "Country";
$proto32["m_columns"][] = "HomeTelephone";
$proto32["m_columns"][] = "MobileTelephone";
$proto32["m_columns"][] = "Nationality";
$proto32["m_columns"][] = "Passport";
$proto32["m_columns"][] = "BatchID";
$proto32["m_columns"][] = "Intake";
$proto32["m_columns"][] = "Sponsor";
$proto32["m_columns"][] = "DipID";
$proto32["m_columns"][] = "Status";
$proto32["m_columns"][] = "Disability";
$proto32["m_columns"][] = "MedicalCondition";
$proto32["m_columns"][] = "race";
$proto32["m_columns"][] = "Religion";
$proto32["m_columns"][] = "Class";
$proto32["m_columns"][] = "Intake_Category";
$proto32["m_columns"][] = "f1_name";
$proto32["m_columns"][] = "f1_tel";
$proto32["m_columns"][] = "f1_relation";
$proto32["m_columns"][] = "f2_name";
$proto32["m_columns"][] = "f2_tel";
$proto32["m_columns"][] = "f2_relation";
$proto32["m_columns"][] = "blood";
$proto32["m_columns"][] = "hostel_in";
$proto32["m_columns"][] = "job";
$proto32["m_columns"][] = "al_certificate";
$proto32["m_columns"][] = "al_license";
$proto32["m_columns"][] = "f_name";
$proto32["m_columns"][] = "f_tel";
$proto32["m_columns"][] = "f_ic";
$proto32["m_columns"][] = "f_job";
$proto32["m_columns"][] = "f_address";
$proto32["m_columns"][] = "m_name";
$proto32["m_columns"][] = "m_tel";
$proto32["m_columns"][] = "m_ic";
$proto32["m_columns"][] = "m_job";
$proto32["m_columns"][] = "m_address";
$proto32["m_columns"][] = "qua_year";
$proto32["m_columns"][] = "qua_level";
$proto32["m_columns"][] = "qua_result";
$proto32["m_columns"][] = "qua_place";
$proto32["m_columns"][] = "photo";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_alias"] = "";
$proto33=array();
$proto33["m_sql"] = "student_hostel.StudentID = student_info.StudentID";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_hostel"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= student_info.StudentID";
$proto33["m_havingmode"] = "0";
$proto33["m_inBrackets"] = "0";
$proto33["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "student_hostel"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 0;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Student_Hostel = createSqlQuery_Report_Student_Hostel();
											$tdataReport_Student_Hostel[".sqlquery"] = $queryData_Report_Student_Hostel;

$tableEvents["Report_Student_Hostel"] = new eventsBase;
$tdataReport_Student_Hostel[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Report_Student_Hostel");

?>