<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastaff_compulsory_training = array();
	$tdatastaff_compulsory_training[".NumberOfChars"] = 80; 
	$tdatastaff_compulsory_training[".ShortName"] = "staff_compulsory_training";
	$tdatastaff_compulsory_training[".OwnerID"] = "";
	$tdatastaff_compulsory_training[".OriginalTable"] = "staff_compulsory_training";

//	field labels
$fieldLabelsstaff_compulsory_training = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstaff_compulsory_training["English"] = array();
	$fieldToolTipsstaff_compulsory_training["English"] = array();
	$fieldLabelsstaff_compulsory_training["English"]["ID"] = "ID";
	$fieldToolTipsstaff_compulsory_training["English"]["ID"] = "";
	$fieldLabelsstaff_compulsory_training["English"]["StaffID"] = "Staff";
	$fieldToolTipsstaff_compulsory_training["English"]["StaffID"] = "";
	$fieldLabelsstaff_compulsory_training["English"]["TrainingID"] = "Training";
	$fieldToolTipsstaff_compulsory_training["English"]["TrainingID"] = "";
	$fieldLabelsstaff_compulsory_training["English"]["Attendance"] = "Attendance";
	$fieldToolTipsstaff_compulsory_training["English"]["Attendance"] = "";
	$fieldLabelsstaff_compulsory_training["English"]["Training_Date"] = "Training Date";
	$fieldToolTipsstaff_compulsory_training["English"]["Training_Date"] = "";
	$fieldLabelsstaff_compulsory_training["English"]["Venue"] = "Venue";
	$fieldToolTipsstaff_compulsory_training["English"]["Venue"] = "";
	$fieldLabelsstaff_compulsory_training["English"]["Provider"] = "Provider";
	$fieldToolTipsstaff_compulsory_training["English"]["Provider"] = "";
	if (count($fieldToolTipsstaff_compulsory_training["English"]))
		$tdatastaff_compulsory_training[".isUseToolTips"] = true;
}
	
	



$tdatastaff_compulsory_training[".shortTableName"] = "staff_compulsory_training";
$tdatastaff_compulsory_training[".nSecOptions"] = 0;
$tdatastaff_compulsory_training[".recsPerRowList"] = 1;
$tdatastaff_compulsory_training[".mainTableOwnerID"] = "";
$tdatastaff_compulsory_training[".moveNext"] = 1;
$tdatastaff_compulsory_training[".nType"] = 0;

$tdatastaff_compulsory_training[".strOriginalTableName"] = "staff_compulsory_training";




$tdatastaff_compulsory_training[".showAddInPopup"] = false;

$tdatastaff_compulsory_training[".showEditInPopup"] = false;

$tdatastaff_compulsory_training[".showViewInPopup"] = false;

$tdatastaff_compulsory_training[".fieldsForRegister"] = array();
	
$tdatastaff_compulsory_training[".listAjax"] = false;

	$tdatastaff_compulsory_training[".audit"] = true;

	$tdatastaff_compulsory_training[".locking"] = false;

$tdatastaff_compulsory_training[".listIcons"] = true;
$tdatastaff_compulsory_training[".inlineEdit"] = true;
$tdatastaff_compulsory_training[".inlineAdd"] = true;



$tdatastaff_compulsory_training[".delete"] = true;

$tdatastaff_compulsory_training[".showSimpleSearchOptions"] = true;

$tdatastaff_compulsory_training[".showSearchPanel"] = true;

if (isMobile())
	$tdatastaff_compulsory_training[".isUseAjaxSuggest"] = false;
else 
	$tdatastaff_compulsory_training[".isUseAjaxSuggest"] = true;

$tdatastaff_compulsory_training[".rowHighlite"] = true;

// button handlers file names

$tdatastaff_compulsory_training[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastaff_compulsory_training[".isUseTimeForSearch"] = false;




$tdatastaff_compulsory_training[".allSearchFields"] = array();

$tdatastaff_compulsory_training[".allSearchFields"][] = "TrainingID";
$tdatastaff_compulsory_training[".allSearchFields"][] = "Training_Date";
$tdatastaff_compulsory_training[".allSearchFields"][] = "Venue";
$tdatastaff_compulsory_training[".allSearchFields"][] = "Provider";
$tdatastaff_compulsory_training[".allSearchFields"][] = "Attendance";

$tdatastaff_compulsory_training[".googleLikeFields"][] = "StaffID";
$tdatastaff_compulsory_training[".googleLikeFields"][] = "TrainingID";
$tdatastaff_compulsory_training[".googleLikeFields"][] = "Attendance";
$tdatastaff_compulsory_training[".googleLikeFields"][] = "Training_Date";
$tdatastaff_compulsory_training[".googleLikeFields"][] = "Venue";
$tdatastaff_compulsory_training[".googleLikeFields"][] = "Provider";

$tdatastaff_compulsory_training[".panelSearchFields"][] = "TrainingID";
$tdatastaff_compulsory_training[".panelSearchFields"][] = "StaffID";
$tdatastaff_compulsory_training[".panelSearchFields"][] = "Attendance";

$tdatastaff_compulsory_training[".advSearchFields"][] = "TrainingID";
$tdatastaff_compulsory_training[".advSearchFields"][] = "Training_Date";
$tdatastaff_compulsory_training[".advSearchFields"][] = "Venue";
$tdatastaff_compulsory_training[".advSearchFields"][] = "Provider";
$tdatastaff_compulsory_training[".advSearchFields"][] = "Attendance";

$tdatastaff_compulsory_training[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastaff_compulsory_training[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastaff_compulsory_training[".strOrderBy"] = $tstrOrderBy;

$tdatastaff_compulsory_training[".orderindexes"] = array();

$tdatastaff_compulsory_training[".sqlHead"] = "SELECT ID,   StaffID,   TrainingID,   Attendance,   Training_Date,   Venue,   Provider";
$tdatastaff_compulsory_training[".sqlFrom"] = "FROM staff_compulsory_training";
$tdatastaff_compulsory_training[".sqlWhereExpr"] = "";
$tdatastaff_compulsory_training[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaff_compulsory_training[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaff_compulsory_training[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstaff_compulsory_training = array();
$tableKeysstaff_compulsory_training[] = "ID";
$tdatastaff_compulsory_training[".Keys"] = $tableKeysstaff_compulsory_training;

$tdatastaff_compulsory_training[".listFields"] = array();
$tdatastaff_compulsory_training[".listFields"][] = "TrainingID";
$tdatastaff_compulsory_training[".listFields"][] = "Training_Date";
$tdatastaff_compulsory_training[".listFields"][] = "Venue";
$tdatastaff_compulsory_training[".listFields"][] = "Provider";
$tdatastaff_compulsory_training[".listFields"][] = "Attendance";

$tdatastaff_compulsory_training[".viewFields"] = array();

$tdatastaff_compulsory_training[".addFields"] = array();

$tdatastaff_compulsory_training[".inlineAddFields"] = array();
$tdatastaff_compulsory_training[".inlineAddFields"][] = "TrainingID";
$tdatastaff_compulsory_training[".inlineAddFields"][] = "Training_Date";
$tdatastaff_compulsory_training[".inlineAddFields"][] = "Venue";
$tdatastaff_compulsory_training[".inlineAddFields"][] = "Provider";
$tdatastaff_compulsory_training[".inlineAddFields"][] = "Attendance";

$tdatastaff_compulsory_training[".editFields"] = array();

$tdatastaff_compulsory_training[".inlineEditFields"] = array();
$tdatastaff_compulsory_training[".inlineEditFields"][] = "TrainingID";
$tdatastaff_compulsory_training[".inlineEditFields"][] = "Training_Date";
$tdatastaff_compulsory_training[".inlineEditFields"][] = "Venue";
$tdatastaff_compulsory_training[".inlineEditFields"][] = "Provider";
$tdatastaff_compulsory_training[".inlineEditFields"][] = "Attendance";

$tdatastaff_compulsory_training[".exportFields"] = array();

$tdatastaff_compulsory_training[".printFields"] = array();

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
	
		
		
	$tdatastaff_compulsory_training["ID"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "staff_compulsory_training";
	$fdata["Label"] = "Staff"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StaffID"; 
		$fdata["FullName"] = "StaffID";
	
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
	
		
		
	$tdatastaff_compulsory_training["StaffID"] = $fdata;
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
				if(strpos(GetUserPermissions("staff_compulsory_training"), 'S') !== false)
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
	
		
		
	$tdatastaff_compulsory_training["TrainingID"] = $fdata;
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
	
		
		
	$tdatastaff_compulsory_training["Attendance"] = $fdata;
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
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_compulsory_training["Training_Date"] = $fdata;
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
				if(strpos(GetUserPermissions("staff_compulsory_training"), 'S') !== false)
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
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_compulsory_training["Venue"] = $fdata;
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
				if(strpos(GetUserPermissions("staff_compulsory_training"), 'S') !== false)
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
	
		
		
	$tdatastaff_compulsory_training["Provider"] = $fdata;

	
$tables_data["staff_compulsory_training"]=&$tdatastaff_compulsory_training;
$field_labels["staff_compulsory_training"] = &$fieldLabelsstaff_compulsory_training;
$fieldToolTips["staff_compulsory_training"] = &$fieldToolTipsstaff_compulsory_training;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["staff_compulsory_training"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["staff_compulsory_training"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="staff_info";
	$masterParams["mDataSourceTable"]="staff_info";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "staff_info";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["staff_compulsory_training"][$mIndex] = $masterParams;	
		$masterTablesData["staff_compulsory_training"][$mIndex]["masterKeys"][]="ID";
		$masterTablesData["staff_compulsory_training"][$mIndex]["detailKeys"][]="StaffID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_staff_compulsory_training()
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
$queryData_staff_compulsory_training = createSqlQuery_staff_compulsory_training();
							$tdatastaff_compulsory_training[".sqlquery"] = $queryData_staff_compulsory_training;

$tableEvents["staff_compulsory_training"] = new eventsBase;
$tdatastaff_compulsory_training[".hasEvents"] = false;

$cipherer = new RunnerCipherer("staff_compulsory_training");

?>