<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastaff_discipline = array();
	$tdatastaff_discipline[".NumberOfChars"] = 80; 
	$tdatastaff_discipline[".ShortName"] = "staff_discipline";
	$tdatastaff_discipline[".OwnerID"] = "";
	$tdatastaff_discipline[".OriginalTable"] = "staff_discipline";

//	field labels
$fieldLabelsstaff_discipline = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstaff_discipline["English"] = array();
	$fieldToolTipsstaff_discipline["English"] = array();
	$fieldLabelsstaff_discipline["English"]["StaffID"] = "Staff ID";
	$fieldToolTipsstaff_discipline["English"]["StaffID"] = "";
	$fieldLabelsstaff_discipline["English"]["Activity"] = "Activity (Description)";
	$fieldToolTipsstaff_discipline["English"]["Activity"] = "";
	$fieldLabelsstaff_discipline["English"]["Level"] = "Misconduct Level";
	$fieldToolTipsstaff_discipline["English"]["Level"] = "";
	$fieldLabelsstaff_discipline["English"]["Date_Commited"] = "Date Commited";
	$fieldToolTipsstaff_discipline["English"]["Date_Commited"] = "";
	$fieldLabelsstaff_discipline["English"]["Action_Taken"] = "Action Taken";
	$fieldToolTipsstaff_discipline["English"]["Action_Taken"] = "";
	$fieldLabelsstaff_discipline["English"]["Comment"] = "Comment";
	$fieldToolTipsstaff_discipline["English"]["Comment"] = "";
	$fieldLabelsstaff_discipline["English"]["ID1"] = "ID1";
	$fieldToolTipsstaff_discipline["English"]["ID1"] = "";
	if (count($fieldToolTipsstaff_discipline["English"]))
		$tdatastaff_discipline[".isUseToolTips"] = true;
}
	
	



$tdatastaff_discipline[".shortTableName"] = "staff_discipline";
$tdatastaff_discipline[".nSecOptions"] = 0;
$tdatastaff_discipline[".recsPerRowList"] = 1;
$tdatastaff_discipline[".mainTableOwnerID"] = "";
$tdatastaff_discipline[".moveNext"] = 1;
$tdatastaff_discipline[".nType"] = 0;

$tdatastaff_discipline[".strOriginalTableName"] = "staff_discipline";




$tdatastaff_discipline[".showAddInPopup"] = false;

$tdatastaff_discipline[".showEditInPopup"] = false;

$tdatastaff_discipline[".showViewInPopup"] = false;

$tdatastaff_discipline[".fieldsForRegister"] = array();
	
$tdatastaff_discipline[".listAjax"] = false;

	$tdatastaff_discipline[".audit"] = true;

	$tdatastaff_discipline[".locking"] = false;

$tdatastaff_discipline[".listIcons"] = true;
$tdatastaff_discipline[".inlineEdit"] = true;
$tdatastaff_discipline[".inlineAdd"] = true;



$tdatastaff_discipline[".delete"] = true;

$tdatastaff_discipline[".showSimpleSearchOptions"] = true;

$tdatastaff_discipline[".showSearchPanel"] = true;

if (isMobile())
	$tdatastaff_discipline[".isUseAjaxSuggest"] = false;
else 
	$tdatastaff_discipline[".isUseAjaxSuggest"] = true;

$tdatastaff_discipline[".rowHighlite"] = true;

// button handlers file names

$tdatastaff_discipline[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastaff_discipline[".isUseTimeForSearch"] = false;




$tdatastaff_discipline[".allSearchFields"] = array();


$tdatastaff_discipline[".googleLikeFields"][] = "StaffID";
$tdatastaff_discipline[".googleLikeFields"][] = "Activity";
$tdatastaff_discipline[".googleLikeFields"][] = "Level";
$tdatastaff_discipline[".googleLikeFields"][] = "Date_Commited";
$tdatastaff_discipline[".googleLikeFields"][] = "Action_Taken";
$tdatastaff_discipline[".googleLikeFields"][] = "Comment";
$tdatastaff_discipline[".googleLikeFields"][] = "ID1";

$tdatastaff_discipline[".panelSearchFields"][] = "ID1";
$tdatastaff_discipline[".panelSearchFields"][] = "StaffID";
$tdatastaff_discipline[".panelSearchFields"][] = "Activity";
$tdatastaff_discipline[".panelSearchFields"][] = "Level";
$tdatastaff_discipline[".panelSearchFields"][] = "Date_Commited";
$tdatastaff_discipline[".panelSearchFields"][] = "Action_Taken";
$tdatastaff_discipline[".panelSearchFields"][] = "Comment";


$tdatastaff_discipline[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastaff_discipline[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastaff_discipline[".strOrderBy"] = $tstrOrderBy;

$tdatastaff_discipline[".orderindexes"] = array();

$tdatastaff_discipline[".sqlHead"] = "SELECT StaffID,   Activity,   `Level`,   Date_Commited,   Action_Taken,   `Comment`,   ID1";
$tdatastaff_discipline[".sqlFrom"] = "FROM staff_discipline";
$tdatastaff_discipline[".sqlWhereExpr"] = "";
$tdatastaff_discipline[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaff_discipline[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaff_discipline[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstaff_discipline = array();
$tableKeysstaff_discipline[] = "ID1";
$tdatastaff_discipline[".Keys"] = $tableKeysstaff_discipline;

$tdatastaff_discipline[".listFields"] = array();
$tdatastaff_discipline[".listFields"][] = "Activity";
$tdatastaff_discipline[".listFields"][] = "Level";
$tdatastaff_discipline[".listFields"][] = "Date_Commited";
$tdatastaff_discipline[".listFields"][] = "Action_Taken";
$tdatastaff_discipline[".listFields"][] = "Comment";

$tdatastaff_discipline[".viewFields"] = array();

$tdatastaff_discipline[".addFields"] = array();

$tdatastaff_discipline[".inlineAddFields"] = array();
$tdatastaff_discipline[".inlineAddFields"][] = "Activity";
$tdatastaff_discipline[".inlineAddFields"][] = "Level";
$tdatastaff_discipline[".inlineAddFields"][] = "Date_Commited";
$tdatastaff_discipline[".inlineAddFields"][] = "Action_Taken";
$tdatastaff_discipline[".inlineAddFields"][] = "Comment";

$tdatastaff_discipline[".editFields"] = array();

$tdatastaff_discipline[".inlineEditFields"] = array();
$tdatastaff_discipline[".inlineEditFields"][] = "Activity";
$tdatastaff_discipline[".inlineEditFields"][] = "Level";
$tdatastaff_discipline[".inlineEditFields"][] = "Date_Commited";
$tdatastaff_discipline[".inlineEditFields"][] = "Action_Taken";
$tdatastaff_discipline[".inlineEditFields"][] = "Comment";

$tdatastaff_discipline[".exportFields"] = array();

$tdatastaff_discipline[".printFields"] = array();

//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "staff_discipline";
	$fdata["Label"] = "Staff ID"; 
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
	
		
		
	$tdatastaff_discipline["StaffID"] = $fdata;
//	Activity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Activity";
	$fdata["GoodName"] = "Activity";
	$fdata["ownerTable"] = "staff_discipline";
	$fdata["Label"] = "Activity (Description)"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Activity"; 
		$fdata["FullName"] = "Activity";
	
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 150;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_discipline["Activity"] = $fdata;
//	Level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Level";
	$fdata["GoodName"] = "Level";
	$fdata["ownerTable"] = "staff_discipline";
	$fdata["Label"] = "Misconduct Level"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Level"; 
		$fdata["FullName"] = "`Level`";
	
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
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "class=14";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_discipline["Level"] = $fdata;
//	Date_Commited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Date_Commited";
	$fdata["GoodName"] = "Date_Commited";
	$fdata["ownerTable"] = "staff_discipline";
	$fdata["Label"] = "Date Commited"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Date_Commited"; 
		$fdata["FullName"] = "Date_Commited";
	
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
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_discipline["Date_Commited"] = $fdata;
//	Action_Taken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Action_Taken";
	$fdata["GoodName"] = "Action_Taken";
	$fdata["ownerTable"] = "staff_discipline";
	$fdata["Label"] = "Action Taken"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Action_Taken"; 
		$fdata["FullName"] = "Action_Taken";
	
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
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "class=15";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_discipline["Action_Taken"] = $fdata;
//	Comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Comment";
	$fdata["GoodName"] = "Comment";
	$fdata["ownerTable"] = "staff_discipline";
	$fdata["Label"] = "Comment"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Comment"; 
		$fdata["FullName"] = "`Comment`";
	
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 150;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_discipline["Comment"] = $fdata;
//	ID1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ID1";
	$fdata["GoodName"] = "ID1";
	$fdata["ownerTable"] = "staff_discipline";
	$fdata["Label"] = "ID1"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID1"; 
		$fdata["FullName"] = "ID1";
	
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
	
		
		
	$tdatastaff_discipline["ID1"] = $fdata;

	
$tables_data["staff_discipline"]=&$tdatastaff_discipline;
$field_labels["staff_discipline"] = &$fieldLabelsstaff_discipline;
$fieldToolTips["staff_discipline"] = &$fieldToolTipsstaff_discipline;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["staff_discipline"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["staff_discipline"] = array();

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
	$masterTablesData["staff_discipline"][$mIndex] = $masterParams;	
		$masterTablesData["staff_discipline"][$mIndex]["masterKeys"][]="ID";
		$masterTablesData["staff_discipline"][$mIndex]["detailKeys"][]="StaffID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_staff_discipline()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "StaffID,   Activity,   `Level`,   Date_Commited,   Action_Taken,   `Comment`,   ID1";
$proto0["m_strFrom"] = "FROM staff_discipline";
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
	"m_strName" => "StaffID",
	"m_strTable" => "staff_discipline"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Activity",
	"m_strTable" => "staff_discipline"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Level",
	"m_strTable" => "staff_discipline"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Date_Commited",
	"m_strTable" => "staff_discipline"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Action_Taken",
	"m_strTable" => "staff_discipline"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Comment",
	"m_strTable" => "staff_discipline"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "ID1",
	"m_strTable" => "staff_discipline"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "staff_discipline";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "StaffID";
$proto20["m_columns"][] = "Activity";
$proto20["m_columns"][] = "Level";
$proto20["m_columns"][] = "Date_Commited";
$proto20["m_columns"][] = "Action_Taken";
$proto20["m_columns"][] = "Comment";
$proto20["m_columns"][] = "ID1";
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
$queryData_staff_discipline = createSqlQuery_staff_discipline();
							$tdatastaff_discipline[".sqlquery"] = $queryData_staff_discipline;

$tableEvents["staff_discipline"] = new eventsBase;
$tdatastaff_discipline[".hasEvents"] = false;

$cipherer = new RunnerCipherer("staff_discipline");

?>