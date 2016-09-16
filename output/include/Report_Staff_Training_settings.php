<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Staff_Training = array();
	$tdataReport_Staff_Training[".NumberOfChars"] = 80; 
	$tdataReport_Staff_Training[".ShortName"] = "Report_Staff_Training";
	$tdataReport_Staff_Training[".OwnerID"] = "";
	$tdataReport_Staff_Training[".OriginalTable"] = "staff_compulsory_training";

//	field labels
$fieldLabelsReport_Staff_Training = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Staff_Training["English"] = array();
	$fieldToolTipsReport_Staff_Training["English"] = array();
	$fieldLabelsReport_Staff_Training["English"]["ID"] = "ID";
	$fieldToolTipsReport_Staff_Training["English"]["ID"] = "";
	$fieldLabelsReport_Staff_Training["English"]["StaffID"] = "Staff";
	$fieldToolTipsReport_Staff_Training["English"]["StaffID"] = "";
	$fieldLabelsReport_Staff_Training["English"]["TrainingID"] = "Training";
	$fieldToolTipsReport_Staff_Training["English"]["TrainingID"] = "";
	$fieldLabelsReport_Staff_Training["English"]["Attendance"] = "Attendance";
	$fieldToolTipsReport_Staff_Training["English"]["Attendance"] = "";
	$fieldLabelsReport_Staff_Training["English"]["Training_Date"] = "Training Date";
	$fieldToolTipsReport_Staff_Training["English"]["Training_Date"] = "";
	$fieldLabelsReport_Staff_Training["English"]["Venue"] = "Venue";
	$fieldToolTipsReport_Staff_Training["English"]["Venue"] = "";
	$fieldLabelsReport_Staff_Training["English"]["Provider"] = "Provider";
	$fieldToolTipsReport_Staff_Training["English"]["Provider"] = "";
	if (count($fieldToolTipsReport_Staff_Training["English"]))
		$tdataReport_Staff_Training[".isUseToolTips"] = true;
}
	
	



$tdataReport_Staff_Training[".shortTableName"] = "Report_Staff_Training";
$tdataReport_Staff_Training[".nSecOptions"] = 0;
$tdataReport_Staff_Training[".recsPerRowList"] = 1;
$tdataReport_Staff_Training[".mainTableOwnerID"] = "";
$tdataReport_Staff_Training[".moveNext"] = 1;
$tdataReport_Staff_Training[".nType"] = 1;

$tdataReport_Staff_Training[".strOriginalTableName"] = "staff_compulsory_training";




$tdataReport_Staff_Training[".showAddInPopup"] = false;

$tdataReport_Staff_Training[".showEditInPopup"] = false;

$tdataReport_Staff_Training[".showViewInPopup"] = false;

$tdataReport_Staff_Training[".fieldsForRegister"] = array();
	
$tdataReport_Staff_Training[".listAjax"] = false;

	$tdataReport_Staff_Training[".audit"] = true;

	$tdataReport_Staff_Training[".locking"] = false;

$tdataReport_Staff_Training[".listIcons"] = true;
$tdataReport_Staff_Training[".inlineEdit"] = true;
$tdataReport_Staff_Training[".inlineAdd"] = true;



$tdataReport_Staff_Training[".delete"] = true;

$tdataReport_Staff_Training[".showSimpleSearchOptions"] = true;

$tdataReport_Staff_Training[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Staff_Training[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Staff_Training[".isUseAjaxSuggest"] = true;

$tdataReport_Staff_Training[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Staff_Training[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Staff_Training[".isUseTimeForSearch"] = false;




$tdataReport_Staff_Training[".allSearchFields"] = array();

$tdataReport_Staff_Training[".allSearchFields"][] = "StaffID";
$tdataReport_Staff_Training[".allSearchFields"][] = "TrainingID";
$tdataReport_Staff_Training[".allSearchFields"][] = "Training_Date";
$tdataReport_Staff_Training[".allSearchFields"][] = "Venue";
$tdataReport_Staff_Training[".allSearchFields"][] = "Provider";
$tdataReport_Staff_Training[".allSearchFields"][] = "Attendance";

$tdataReport_Staff_Training[".googleLikeFields"][] = "StaffID";
$tdataReport_Staff_Training[".googleLikeFields"][] = "TrainingID";
$tdataReport_Staff_Training[".googleLikeFields"][] = "Attendance";
$tdataReport_Staff_Training[".googleLikeFields"][] = "Training_Date";
$tdataReport_Staff_Training[".googleLikeFields"][] = "Venue";
$tdataReport_Staff_Training[".googleLikeFields"][] = "Provider";

$tdataReport_Staff_Training[".panelSearchFields"][] = "StaffID";
$tdataReport_Staff_Training[".panelSearchFields"][] = "TrainingID";
$tdataReport_Staff_Training[".panelSearchFields"][] = "Attendance";

$tdataReport_Staff_Training[".advSearchFields"][] = "StaffID";
$tdataReport_Staff_Training[".advSearchFields"][] = "TrainingID";
$tdataReport_Staff_Training[".advSearchFields"][] = "Training_Date";
$tdataReport_Staff_Training[".advSearchFields"][] = "Venue";
$tdataReport_Staff_Training[".advSearchFields"][] = "Provider";
$tdataReport_Staff_Training[".advSearchFields"][] = "Attendance";

$tdataReport_Staff_Training[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Staff_Training[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Staff_Training[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Staff_Training[".orderindexes"] = array();

$tdataReport_Staff_Training[".sqlHead"] = "SELECT ID,   StaffID,   TrainingID,   Attendance,   Training_Date,   Venue,   Provider";
$tdataReport_Staff_Training[".sqlFrom"] = "FROM staff_compulsory_training";
$tdataReport_Staff_Training[".sqlWhereExpr"] = "";
$tdataReport_Staff_Training[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Staff_Training[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Staff_Training[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Staff_Training = array();
$tableKeysReport_Staff_Training[] = "ID";
$tdataReport_Staff_Training[".Keys"] = $tableKeysReport_Staff_Training;

$tdataReport_Staff_Training[".listFields"] = array();
$tdataReport_Staff_Training[".listFields"][] = "StaffID";
$tdataReport_Staff_Training[".listFields"][] = "TrainingID";
$tdataReport_Staff_Training[".listFields"][] = "Training_Date";
$tdataReport_Staff_Training[".listFields"][] = "Venue";
$tdataReport_Staff_Training[".listFields"][] = "Provider";
$tdataReport_Staff_Training[".listFields"][] = "Attendance";

$tdataReport_Staff_Training[".viewFields"] = array();

$tdataReport_Staff_Training[".addFields"] = array();

$tdataReport_Staff_Training[".inlineAddFields"] = array();
$tdataReport_Staff_Training[".inlineAddFields"][] = "StaffID";
$tdataReport_Staff_Training[".inlineAddFields"][] = "TrainingID";
$tdataReport_Staff_Training[".inlineAddFields"][] = "Training_Date";
$tdataReport_Staff_Training[".inlineAddFields"][] = "Venue";
$tdataReport_Staff_Training[".inlineAddFields"][] = "Provider";
$tdataReport_Staff_Training[".inlineAddFields"][] = "Attendance";

$tdataReport_Staff_Training[".editFields"] = array();

$tdataReport_Staff_Training[".inlineEditFields"] = array();
$tdataReport_Staff_Training[".inlineEditFields"][] = "StaffID";
$tdataReport_Staff_Training[".inlineEditFields"][] = "TrainingID";
$tdataReport_Staff_Training[".inlineEditFields"][] = "Training_Date";
$tdataReport_Staff_Training[".inlineEditFields"][] = "Venue";
$tdataReport_Staff_Training[".inlineEditFields"][] = "Provider";
$tdataReport_Staff_Training[".inlineEditFields"][] = "Attendance";

$tdataReport_Staff_Training[".exportFields"] = array();

$tdataReport_Staff_Training[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "staff_compulsory_training";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
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
	
		
		
	$tdataReport_Staff_Training["ID"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "staff_compulsory_training";
	$fdata["Label"] = "Staff"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "StaffID"; 
		$fdata["FullName"] = "StaffID";
	
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
				if(strpos(GetUserPermissions("Report_Staff_Training"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "staff_info";
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
	
		
		
	$tdataReport_Staff_Training["StaffID"] = $fdata;
//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "staff_compulsory_training";
	$fdata["Label"] = "Training"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "TrainingID"; 
		$fdata["FullName"] = "TrainingID";
	
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
				if(strpos(GetUserPermissions("Report_Staff_Training"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "TrainingID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TrainingName";
	
		
	$edata["LookupTable"] = "training";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Staff_Training["TrainingID"] = $fdata;
//	Attendance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Attendance";
	$fdata["GoodName"] = "Attendance";
	$fdata["ownerTable"] = "staff_compulsory_training";
	$fdata["Label"] = "Attendance"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Attendance"; 
		$fdata["FullName"] = "Attendance";
	
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
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Staff_Training["Attendance"] = $fdata;
//	Training_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Training_Date";
	$fdata["GoodName"] = "Training_Date";
	$fdata["ownerTable"] = "staff_compulsory_training";
	$fdata["Label"] = "Training Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Training_Date"; 
		$fdata["FullName"] = "Training_Date";
	
		
		
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
	
		
		
	$tdataReport_Staff_Training["Training_Date"] = $fdata;
//	Venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Venue";
	$fdata["GoodName"] = "Venue";
	$fdata["ownerTable"] = "staff_compulsory_training";
	$fdata["Label"] = "Venue"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Venue"; 
		$fdata["FullName"] = "Venue";
	
		
		
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
				if(strpos(GetUserPermissions("Report_Staff_Training"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=35";
	
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
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
	
		
		
	$tdataReport_Staff_Training["Venue"] = $fdata;
//	Provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Provider";
	$fdata["GoodName"] = "Provider";
	$fdata["ownerTable"] = "staff_compulsory_training";
	$fdata["Label"] = "Provider"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Provider"; 
		$fdata["FullName"] = "Provider";
	
		
		
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
				if(strpos(GetUserPermissions("Report_Staff_Training"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=36";
	
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Staff_Training["Provider"] = $fdata;

	
$tables_data["Report_Staff_Training"]=&$tdataReport_Staff_Training;
$field_labels["Report_Staff_Training"] = &$fieldLabelsReport_Staff_Training;
$fieldToolTips["Report_Staff_Training"] = &$fieldToolTipsReport_Staff_Training;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Staff_Training"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Staff_Training"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Staff_Training()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   StaffID,   TrainingID,   Attendance,   Training_Date,   Venue,   Provider";
$proto0["m_strFrom"] = "FROM staff_compulsory_training";
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
	"m_strTable" => "staff_compulsory_training"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffID",
	"m_strTable" => "staff_compulsory_training"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingID",
	"m_strTable" => "staff_compulsory_training"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Attendance",
	"m_strTable" => "staff_compulsory_training"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_Date",
	"m_strTable" => "staff_compulsory_training"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Venue",
	"m_strTable" => "staff_compulsory_training"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Provider",
	"m_strTable" => "staff_compulsory_training"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "staff_compulsory_training";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "StaffID";
$proto20["m_columns"][] = "TrainingID";
$proto20["m_columns"][] = "Attendance";
$proto20["m_columns"][] = "Training_Date";
$proto20["m_columns"][] = "Venue";
$proto20["m_columns"][] = "Provider";
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
$queryData_Report_Staff_Training = createSqlQuery_Report_Staff_Training();
							$tdataReport_Staff_Training[".sqlquery"] = $queryData_Report_Staff_Training;

$tableEvents["Report_Staff_Training"] = new eventsBase;
$tdataReport_Staff_Training[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Report_Staff_Training");

?>