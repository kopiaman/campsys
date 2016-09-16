<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Student_Class_overall = array();
	$tdataReport_Student_Class_overall[".NumberOfChars"] = 80; 
	$tdataReport_Student_Class_overall[".ShortName"] = "Report_Student_Class_overall";
	$tdataReport_Student_Class_overall[".OwnerID"] = "";
	$tdataReport_Student_Class_overall[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Student_Class_overall = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Student_Class_overall["English"] = array();
	$fieldToolTipsReport_Student_Class_overall["English"] = array();
	$fieldLabelsReport_Student_Class_overall["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Student_Class_overall["English"]["BatchID"] = "";
	$fieldLabelsReport_Student_Class_overall["English"]["No_Student"] = "No Student";
	$fieldToolTipsReport_Student_Class_overall["English"]["No_Student"] = "";
	$fieldLabelsReport_Student_Class_overall["English"]["shortcut_name"] = "Course";
	$fieldToolTipsReport_Student_Class_overall["English"]["shortcut_name"] = "";
	$fieldLabelsReport_Student_Class_overall["English"]["group"] = "Class";
	$fieldToolTipsReport_Student_Class_overall["English"]["group"] = "";
	if (count($fieldToolTipsReport_Student_Class_overall["English"]))
		$tdataReport_Student_Class_overall[".isUseToolTips"] = true;
}
	
	



$tdataReport_Student_Class_overall[".shortTableName"] = "Report_Student_Class_overall";
$tdataReport_Student_Class_overall[".nSecOptions"] = 0;
$tdataReport_Student_Class_overall[".recsPerRowList"] = 1;
$tdataReport_Student_Class_overall[".mainTableOwnerID"] = "";
$tdataReport_Student_Class_overall[".moveNext"] = 1;
$tdataReport_Student_Class_overall[".nType"] = 1;

$tdataReport_Student_Class_overall[".strOriginalTableName"] = "student_info";




$tdataReport_Student_Class_overall[".showAddInPopup"] = false;

$tdataReport_Student_Class_overall[".showEditInPopup"] = false;

$tdataReport_Student_Class_overall[".showViewInPopup"] = false;

$tdataReport_Student_Class_overall[".fieldsForRegister"] = array();
	
$tdataReport_Student_Class_overall[".listAjax"] = false;

	$tdataReport_Student_Class_overall[".audit"] = true;

	$tdataReport_Student_Class_overall[".locking"] = false;

$tdataReport_Student_Class_overall[".listIcons"] = true;

$tdataReport_Student_Class_overall[".exportTo"] = true;



$tdataReport_Student_Class_overall[".showSimpleSearchOptions"] = true;

$tdataReport_Student_Class_overall[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Student_Class_overall[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Student_Class_overall[".isUseAjaxSuggest"] = true;

$tdataReport_Student_Class_overall[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Student_Class_overall[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Student_Class_overall[".isUseTimeForSearch"] = false;




$tdataReport_Student_Class_overall[".allSearchFields"] = array();

$tdataReport_Student_Class_overall[".allSearchFields"][] = "shortcut_name";
$tdataReport_Student_Class_overall[".allSearchFields"][] = "BatchID";
$tdataReport_Student_Class_overall[".allSearchFields"][] = "group";

$tdataReport_Student_Class_overall[".googleLikeFields"][] = "shortcut_name";
$tdataReport_Student_Class_overall[".googleLikeFields"][] = "group";
$tdataReport_Student_Class_overall[".googleLikeFields"][] = "No_Student";

$tdataReport_Student_Class_overall[".panelSearchFields"][] = "BatchID";

$tdataReport_Student_Class_overall[".advSearchFields"][] = "shortcut_name";
$tdataReport_Student_Class_overall[".advSearchFields"][] = "BatchID";
$tdataReport_Student_Class_overall[".advSearchFields"][] = "group";

$tdataReport_Student_Class_overall[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main


$tdataReport_Student_Class_overall[".totalsFields"][] = array(
	"fName" => "No_Student", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdataReport_Student_Class_overall[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY program.shortcut_name, student_info.BatchID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Student_Class_overall[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Student_Class_overall[".orderindexes"] = array();
$tdataReport_Student_Class_overall[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "program.shortcut_name");
$tdataReport_Student_Class_overall[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "student_info.BatchID");

$tdataReport_Student_Class_overall[".sqlHead"] = "SELECT program.shortcut_name,  student_info.BatchID,  `group`.`group`,  COUNT(student_info.StudentID) AS No_Student";
$tdataReport_Student_Class_overall[".sqlFrom"] = "FROM student_info  LEFT OUTER JOIN program ON student_info.DipID = program.ID  LEFT OUTER JOIN `group` ON student_info.`Class` = `group`.id";
$tdataReport_Student_Class_overall[".sqlWhereExpr"] = "(student_info.Status ='Active')";
$tdataReport_Student_Class_overall[".sqlTail"] = "GROUP BY program.shortcut_name, student_info.BatchID, `group`.`group`";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "BatchID";
$arrEditTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>22,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>37,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Student_Class_overall[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Personal1',
					  'tabName'=>"Personal",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "BatchID";
$arrAddTabs[] = array('tabId'=>'Campus_Info1',
					  'tabName'=>"Campus Info",
					  'nType'=>'0',
					  'nOrder'=>11,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Contact1',
					  'tabName'=>"Contact",
					  'nType'=>'0',
					  'nOrder'=>22,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Next_Of_Kin1',
					  'tabName'=>"Next Of Kin",
					  'nType'=>'0',
					  'nOrder'=>30,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Medical1',
					  'tabName'=>"Medical",
					  'nType'=>'0',
					  'nOrder'=>37,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataReport_Student_Class_overall[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "BatchID";
$arrViewTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>22,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>30,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>34,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Student_Class_overall[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Student_Class_overall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Student_Class_overall[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Student_Class_overall = array();
$tdataReport_Student_Class_overall[".Keys"] = $tableKeysReport_Student_Class_overall;

$tdataReport_Student_Class_overall[".listFields"] = array();
$tdataReport_Student_Class_overall[".listFields"][] = "shortcut_name";
$tdataReport_Student_Class_overall[".listFields"][] = "BatchID";
$tdataReport_Student_Class_overall[".listFields"][] = "group";
$tdataReport_Student_Class_overall[".listFields"][] = "No_Student";

$tdataReport_Student_Class_overall[".viewFields"] = array();

$tdataReport_Student_Class_overall[".addFields"] = array();

$tdataReport_Student_Class_overall[".inlineAddFields"] = array();

$tdataReport_Student_Class_overall[".editFields"] = array();

$tdataReport_Student_Class_overall[".inlineEditFields"] = array();

$tdataReport_Student_Class_overall[".exportFields"] = array();
$tdataReport_Student_Class_overall[".exportFields"][] = "shortcut_name";
$tdataReport_Student_Class_overall[".exportFields"][] = "BatchID";
$tdataReport_Student_Class_overall[".exportFields"][] = "group";
$tdataReport_Student_Class_overall[".exportFields"][] = "No_Student";

$tdataReport_Student_Class_overall[".printFields"] = array();

//	shortcut_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "shortcut_name";
	$fdata["GoodName"] = "shortcut_name";
	$fdata["ownerTable"] = "program";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "shortcut_name"; 
		$fdata["FullName"] = "program.shortcut_name";
	
		
		
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
				
		
			
	$edata["LinkField"] = "shortcut_name";
	$edata["LinkFieldType"] = 200;
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
	
		
		
	$tdataReport_Student_Class_overall["shortcut_name"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "student_info.BatchID";
	
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
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Student_Class_overall["BatchID"] = $fdata;
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "group"; 
		$fdata["FullName"] = "`group`.`group`";
	
		
		
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
	
		
		
	$tdataReport_Student_Class_overall["group"] = $fdata;
//	No_Student
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "No_Student";
	$fdata["GoodName"] = "No_Student";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "No Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "No_Student"; 
		$fdata["FullName"] = "COUNT(student_info.StudentID)";
	
		
		
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
	
		
		
	$tdataReport_Student_Class_overall["No_Student"] = $fdata;

	
$tables_data["Report_Student_Class_overall"]=&$tdataReport_Student_Class_overall;
$field_labels["Report_Student_Class_overall"] = &$fieldLabelsReport_Student_Class_overall;
$fieldToolTips["Report_Student_Class_overall"] = &$fieldToolTipsReport_Student_Class_overall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Student_Class_overall"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Student_Class_overall"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Student_Class_overall()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "program.shortcut_name,  student_info.BatchID,  `group`.`group`,  COUNT(student_info.StudentID) AS No_Student";
$proto0["m_strFrom"] = "FROM student_info  LEFT OUTER JOIN program ON student_info.DipID = program.ID  LEFT OUTER JOIN `group` ON student_info.`Class` = `group`.id";
$proto0["m_strWhere"] = "(student_info.Status ='Active')";
$proto0["m_strOrderBy"] = "ORDER BY program.shortcut_name, student_info.BatchID DESC";
$proto0["m_strTail"] = "GROUP BY program.shortcut_name, student_info.BatchID, `group`.`group`";
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
	"m_strName" => "shortcut_name",
	"m_strTable" => "program"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "group"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_COUNT";
$proto12["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto12);

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "No_Student";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "student_info";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "StudentID";
$proto15["m_columns"][] = "Name";
$proto15["m_columns"][] = "ICNO";
$proto15["m_columns"][] = "DOB";
$proto15["m_columns"][] = "MatricNo";
$proto15["m_columns"][] = "Nogilir";
$proto15["m_columns"][] = "Email";
$proto15["m_columns"][] = "Access";
$proto15["m_columns"][] = "Passw";
$proto15["m_columns"][] = "Type";
$proto15["m_columns"][] = "BranchID";
$proto15["m_columns"][] = "DateJoin";
$proto15["m_columns"][] = "Dateout";
$proto15["m_columns"][] = "Gender";
$proto15["m_columns"][] = "married";
$proto15["m_columns"][] = "Address1";
$proto15["m_columns"][] = "City";
$proto15["m_columns"][] = "Postcode";
$proto15["m_columns"][] = "StateID";
$proto15["m_columns"][] = "Country";
$proto15["m_columns"][] = "HomeTelephone";
$proto15["m_columns"][] = "MobileTelephone";
$proto15["m_columns"][] = "Nationality";
$proto15["m_columns"][] = "Passport";
$proto15["m_columns"][] = "BatchID";
$proto15["m_columns"][] = "Intake";
$proto15["m_columns"][] = "Sponsor";
$proto15["m_columns"][] = "DipID";
$proto15["m_columns"][] = "Status";
$proto15["m_columns"][] = "Disability";
$proto15["m_columns"][] = "MedicalCondition";
$proto15["m_columns"][] = "race";
$proto15["m_columns"][] = "Religion";
$proto15["m_columns"][] = "Class";
$proto15["m_columns"][] = "Intake_Category";
$proto15["m_columns"][] = "f1_name";
$proto15["m_columns"][] = "f1_tel";
$proto15["m_columns"][] = "f1_relation";
$proto15["m_columns"][] = "f2_name";
$proto15["m_columns"][] = "f2_tel";
$proto15["m_columns"][] = "f2_relation";
$proto15["m_columns"][] = "blood";
$proto15["m_columns"][] = "hostel_in";
$proto15["m_columns"][] = "job";
$proto15["m_columns"][] = "al_certificate";
$proto15["m_columns"][] = "al_license";
$proto15["m_columns"][] = "f_name";
$proto15["m_columns"][] = "f_tel";
$proto15["m_columns"][] = "f_ic";
$proto15["m_columns"][] = "f_job";
$proto15["m_columns"][] = "f_address";
$proto15["m_columns"][] = "m_name";
$proto15["m_columns"][] = "m_tel";
$proto15["m_columns"][] = "m_ic";
$proto15["m_columns"][] = "m_job";
$proto15["m_columns"][] = "m_address";
$proto15["m_columns"][] = "qua_year";
$proto15["m_columns"][] = "qua_level";
$proto15["m_columns"][] = "qua_result";
$proto15["m_columns"][] = "qua_place";
$proto15["m_columns"][] = "photo";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_alias"] = "";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = "0";
$proto16["m_inBrackets"] = "0";
$proto16["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
												$proto18=array();
$proto18["m_link"] = "SQLL_LEFTJOIN";
			$proto19=array();
$proto19["m_strName"] = "program";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "Name";
$proto19["m_columns"][] = "Code";
$proto19["m_columns"][] = "priority";
$proto19["m_columns"][] = "type";
$proto19["m_columns"][] = "shortcut_name";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_alias"] = "";
$proto20=array();
$proto20["m_sql"] = "student_info.DipID = program.ID";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= program.ID";
$proto20["m_havingmode"] = "0";
$proto20["m_inBrackets"] = "0";
$proto20["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
												$proto22=array();
$proto22["m_link"] = "SQLL_LEFTJOIN";
			$proto23=array();
$proto23["m_strName"] = "group";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "group";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_alias"] = "";
$proto24=array();
$proto24["m_sql"] = "student_info.`Class` = `group`.id";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= `group`.id";
$proto24["m_havingmode"] = "0";
$proto24["m_inBrackets"] = "0";
$proto24["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "shortcut_name",
	"m_strTable" => "program"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "group"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "shortcut_name",
	"m_strTable" => "program"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 1;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Student_Class_overall = createSqlQuery_Report_Student_Class_overall();
				$tdataReport_Student_Class_overall[".sqlquery"] = $queryData_Report_Student_Class_overall;

include_once(getabspath("include/Report_Student_Class_overall_events.php"));
$tableEvents["Report_Student_Class_overall"] = new eventclass_Report_Student_Class_overall;
$tdataReport_Student_Class_overall[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Student_Class_overall");

?>