<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastaff_employement_history = array();
	$tdatastaff_employement_history[".NumberOfChars"] = 80; 
	$tdatastaff_employement_history[".ShortName"] = "staff_employement_history";
	$tdatastaff_employement_history[".OwnerID"] = "";
	$tdatastaff_employement_history[".OriginalTable"] = "staff_employement_history";

//	field labels
$fieldLabelsstaff_employement_history = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstaff_employement_history["English"] = array();
	$fieldToolTipsstaff_employement_history["English"] = array();
	$fieldLabelsstaff_employement_history["English"]["ID"] = "ID";
	$fieldToolTipsstaff_employement_history["English"]["ID"] = "";
	$fieldLabelsstaff_employement_history["English"]["StaffID"] = "Staff ID";
	$fieldToolTipsstaff_employement_history["English"]["StaffID"] = "";
	$fieldLabelsstaff_employement_history["English"]["Organisation"] = "Previous Employment";
	$fieldToolTipsstaff_employement_history["English"]["Organisation"] = "";
	$fieldLabelsstaff_employement_history["English"]["Position"] = "Position";
	$fieldToolTipsstaff_employement_history["English"]["Position"] = "";
	$fieldLabelsstaff_employement_history["English"]["DateStart"] = "Date Start";
	$fieldToolTipsstaff_employement_history["English"]["DateStart"] = "";
	$fieldLabelsstaff_employement_history["English"]["DateEnd"] = "Date Left";
	$fieldToolTipsstaff_employement_history["English"]["DateEnd"] = "";
	$fieldLabelsstaff_employement_history["English"]["Reason"] = "Reason For Leaving";
	$fieldToolTipsstaff_employement_history["English"]["Reason"] = "";
	if (count($fieldToolTipsstaff_employement_history["English"]))
		$tdatastaff_employement_history[".isUseToolTips"] = true;
}
	
	



$tdatastaff_employement_history[".shortTableName"] = "staff_employement_history";
$tdatastaff_employement_history[".nSecOptions"] = 0;
$tdatastaff_employement_history[".recsPerRowList"] = 1;
$tdatastaff_employement_history[".mainTableOwnerID"] = "";
$tdatastaff_employement_history[".moveNext"] = 1;
$tdatastaff_employement_history[".nType"] = 0;

$tdatastaff_employement_history[".strOriginalTableName"] = "staff_employement_history";




$tdatastaff_employement_history[".showAddInPopup"] = false;

$tdatastaff_employement_history[".showEditInPopup"] = false;

$tdatastaff_employement_history[".showViewInPopup"] = false;

$tdatastaff_employement_history[".fieldsForRegister"] = array();
	
$tdatastaff_employement_history[".listAjax"] = false;

	$tdatastaff_employement_history[".audit"] = true;

	$tdatastaff_employement_history[".locking"] = false;

$tdatastaff_employement_history[".listIcons"] = true;
$tdatastaff_employement_history[".inlineEdit"] = true;
$tdatastaff_employement_history[".inlineAdd"] = true;



$tdatastaff_employement_history[".delete"] = true;

$tdatastaff_employement_history[".showSimpleSearchOptions"] = true;

$tdatastaff_employement_history[".showSearchPanel"] = true;

if (isMobile())
	$tdatastaff_employement_history[".isUseAjaxSuggest"] = false;
else 
	$tdatastaff_employement_history[".isUseAjaxSuggest"] = true;

$tdatastaff_employement_history[".rowHighlite"] = true;

// button handlers file names

$tdatastaff_employement_history[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastaff_employement_history[".isUseTimeForSearch"] = false;




$tdatastaff_employement_history[".allSearchFields"] = array();


$tdatastaff_employement_history[".googleLikeFields"][] = "ID";
$tdatastaff_employement_history[".googleLikeFields"][] = "StaffID";
$tdatastaff_employement_history[".googleLikeFields"][] = "Organisation";
$tdatastaff_employement_history[".googleLikeFields"][] = "Position";
$tdatastaff_employement_history[".googleLikeFields"][] = "DateStart";
$tdatastaff_employement_history[".googleLikeFields"][] = "DateEnd";
$tdatastaff_employement_history[".googleLikeFields"][] = "Reason";

$tdatastaff_employement_history[".panelSearchFields"][] = "StaffID";
$tdatastaff_employement_history[".panelSearchFields"][] = "ID";
$tdatastaff_employement_history[".panelSearchFields"][] = "Organisation";
$tdatastaff_employement_history[".panelSearchFields"][] = "Position";
$tdatastaff_employement_history[".panelSearchFields"][] = "DateStart";
$tdatastaff_employement_history[".panelSearchFields"][] = "DateEnd";


$tdatastaff_employement_history[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastaff_employement_history[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastaff_employement_history[".strOrderBy"] = $tstrOrderBy;

$tdatastaff_employement_history[".orderindexes"] = array();

$tdatastaff_employement_history[".sqlHead"] = "SELECT ID,   StaffID,   Organisation,   `Position`,   DateStart,   DateEnd,   Reason";
$tdatastaff_employement_history[".sqlFrom"] = "FROM staff_employement_history";
$tdatastaff_employement_history[".sqlWhereExpr"] = "";
$tdatastaff_employement_history[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaff_employement_history[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaff_employement_history[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstaff_employement_history = array();
$tableKeysstaff_employement_history[] = "ID";
$tdatastaff_employement_history[".Keys"] = $tableKeysstaff_employement_history;

$tdatastaff_employement_history[".listFields"] = array();
$tdatastaff_employement_history[".listFields"][] = "Organisation";
$tdatastaff_employement_history[".listFields"][] = "Position";
$tdatastaff_employement_history[".listFields"][] = "DateStart";
$tdatastaff_employement_history[".listFields"][] = "DateEnd";
$tdatastaff_employement_history[".listFields"][] = "Reason";

$tdatastaff_employement_history[".viewFields"] = array();

$tdatastaff_employement_history[".addFields"] = array();

$tdatastaff_employement_history[".inlineAddFields"] = array();
$tdatastaff_employement_history[".inlineAddFields"][] = "Organisation";
$tdatastaff_employement_history[".inlineAddFields"][] = "Position";
$tdatastaff_employement_history[".inlineAddFields"][] = "DateStart";
$tdatastaff_employement_history[".inlineAddFields"][] = "DateEnd";
$tdatastaff_employement_history[".inlineAddFields"][] = "Reason";

$tdatastaff_employement_history[".editFields"] = array();

$tdatastaff_employement_history[".inlineEditFields"] = array();
$tdatastaff_employement_history[".inlineEditFields"][] = "Organisation";
$tdatastaff_employement_history[".inlineEditFields"][] = "Position";
$tdatastaff_employement_history[".inlineEditFields"][] = "DateStart";
$tdatastaff_employement_history[".inlineEditFields"][] = "DateEnd";
$tdatastaff_employement_history[".inlineEditFields"][] = "Reason";

$tdatastaff_employement_history[".exportFields"] = array();

$tdatastaff_employement_history[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "staff_employement_history";
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
	
		
		
	$tdatastaff_employement_history["ID"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "staff_employement_history";
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
	
		
		
	$tdatastaff_employement_history["StaffID"] = $fdata;
//	Organisation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Organisation";
	$fdata["GoodName"] = "Organisation";
	$fdata["ownerTable"] = "staff_employement_history";
	$fdata["Label"] = "Previous Employment"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Organisation"; 
		$fdata["FullName"] = "Organisation";
	
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_employement_history["Organisation"] = $fdata;
//	Position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Position";
	$fdata["GoodName"] = "Position";
	$fdata["ownerTable"] = "staff_employement_history";
	$fdata["Label"] = "Position"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Position"; 
		$fdata["FullName"] = "`Position`";
	
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff_employement_history["Position"] = $fdata;
//	DateStart
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DateStart";
	$fdata["GoodName"] = "DateStart";
	$fdata["ownerTable"] = "staff_employement_history";
	$fdata["Label"] = "Date Start"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "DateStart"; 
		$fdata["FullName"] = "DateStart";
	
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
	
		
		
	$tdatastaff_employement_history["DateStart"] = $fdata;
//	DateEnd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DateEnd";
	$fdata["GoodName"] = "DateEnd";
	$fdata["ownerTable"] = "staff_employement_history";
	$fdata["Label"] = "Date Left"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "DateEnd"; 
		$fdata["FullName"] = "DateEnd";
	
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
	
		
		
	$tdatastaff_employement_history["DateEnd"] = $fdata;
//	Reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Reason";
	$fdata["GoodName"] = "Reason";
	$fdata["ownerTable"] = "staff_employement_history";
	$fdata["Label"] = "Reason For Leaving"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Reason"; 
		$fdata["FullName"] = "Reason";
	
		
		
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
	
		
		
	$tdatastaff_employement_history["Reason"] = $fdata;

	
$tables_data["staff_employement_history"]=&$tdatastaff_employement_history;
$field_labels["staff_employement_history"] = &$fieldLabelsstaff_employement_history;
$fieldToolTips["staff_employement_history"] = &$fieldToolTipsstaff_employement_history;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["staff_employement_history"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["staff_employement_history"] = array();

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
	$masterTablesData["staff_employement_history"][$mIndex] = $masterParams;	
		$masterTablesData["staff_employement_history"][$mIndex]["masterKeys"][]="ID";
		$masterTablesData["staff_employement_history"][$mIndex]["detailKeys"][]="StaffID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_staff_employement_history()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   StaffID,   Organisation,   `Position`,   DateStart,   DateEnd,   Reason";
$proto0["m_strFrom"] = "FROM staff_employement_history";
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
	"m_strTable" => "staff_employement_history"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffID",
	"m_strTable" => "staff_employement_history"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Organisation",
	"m_strTable" => "staff_employement_history"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Position",
	"m_strTable" => "staff_employement_history"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DateStart",
	"m_strTable" => "staff_employement_history"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "DateEnd",
	"m_strTable" => "staff_employement_history"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Reason",
	"m_strTable" => "staff_employement_history"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "staff_employement_history";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "StaffID";
$proto20["m_columns"][] = "Organisation";
$proto20["m_columns"][] = "Position";
$proto20["m_columns"][] = "DateStart";
$proto20["m_columns"][] = "DateEnd";
$proto20["m_columns"][] = "Reason";
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
$queryData_staff_employement_history = createSqlQuery_staff_employement_history();
							$tdatastaff_employement_history[".sqlquery"] = $queryData_staff_employement_history;

$tableEvents["staff_employement_history"] = new eventsBase;
$tdatastaff_employement_history[".hasEvents"] = false;

$cipherer = new RunnerCipherer("staff_employement_history");

?>