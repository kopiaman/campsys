<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Sponsor_Overall = array();
	$tdataReport_Sponsor_Overall[".NumberOfChars"] = 80; 
	$tdataReport_Sponsor_Overall[".ShortName"] = "Report_Sponsor_Overall";
	$tdataReport_Sponsor_Overall[".OwnerID"] = "";
	$tdataReport_Sponsor_Overall[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Sponsor_Overall = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Sponsor_Overall["English"] = array();
	$fieldToolTipsReport_Sponsor_Overall["English"] = array();
	$fieldLabelsReport_Sponsor_Overall["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Sponsor_Overall["English"]["BatchID"] = "";
	$fieldLabelsReport_Sponsor_Overall["English"]["Sponsor"] = "Financial Aid";
	$fieldToolTipsReport_Sponsor_Overall["English"]["Sponsor"] = "";
	$fieldLabelsReport_Sponsor_Overall["English"]["DipID"] = "Course";
	$fieldToolTipsReport_Sponsor_Overall["English"]["DipID"] = "";
	$fieldLabelsReport_Sponsor_Overall["English"]["bil_student"] = "No of Student";
	$fieldToolTipsReport_Sponsor_Overall["English"]["bil_student"] = "";
	if (count($fieldToolTipsReport_Sponsor_Overall["English"]))
		$tdataReport_Sponsor_Overall[".isUseToolTips"] = true;
}
	
	



$tdataReport_Sponsor_Overall[".shortTableName"] = "Report_Sponsor_Overall";
$tdataReport_Sponsor_Overall[".nSecOptions"] = 0;
$tdataReport_Sponsor_Overall[".recsPerRowList"] = 1;
$tdataReport_Sponsor_Overall[".mainTableOwnerID"] = "";
$tdataReport_Sponsor_Overall[".moveNext"] = 1;
$tdataReport_Sponsor_Overall[".nType"] = 1;

$tdataReport_Sponsor_Overall[".strOriginalTableName"] = "student_info";




$tdataReport_Sponsor_Overall[".showAddInPopup"] = false;

$tdataReport_Sponsor_Overall[".showEditInPopup"] = false;

$tdataReport_Sponsor_Overall[".showViewInPopup"] = false;

$tdataReport_Sponsor_Overall[".fieldsForRegister"] = array();
	
$tdataReport_Sponsor_Overall[".listAjax"] = false;

	$tdataReport_Sponsor_Overall[".audit"] = true;

	$tdataReport_Sponsor_Overall[".locking"] = false;

$tdataReport_Sponsor_Overall[".listIcons"] = true;

$tdataReport_Sponsor_Overall[".exportTo"] = true;



$tdataReport_Sponsor_Overall[".showSimpleSearchOptions"] = true;

$tdataReport_Sponsor_Overall[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Sponsor_Overall[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Sponsor_Overall[".isUseAjaxSuggest"] = true;

$tdataReport_Sponsor_Overall[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Sponsor_Overall[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Sponsor_Overall[".isUseTimeForSearch"] = false;




$tdataReport_Sponsor_Overall[".allSearchFields"] = array();

$tdataReport_Sponsor_Overall[".allSearchFields"][] = "DipID";
$tdataReport_Sponsor_Overall[".allSearchFields"][] = "BatchID";
$tdataReport_Sponsor_Overall[".allSearchFields"][] = "Sponsor";

$tdataReport_Sponsor_Overall[".googleLikeFields"][] = "bil_student";

$tdataReport_Sponsor_Overall[".panelSearchFields"][] = "DipID";
$tdataReport_Sponsor_Overall[".panelSearchFields"][] = "BatchID";
$tdataReport_Sponsor_Overall[".panelSearchFields"][] = "Sponsor";

$tdataReport_Sponsor_Overall[".advSearchFields"][] = "DipID";
$tdataReport_Sponsor_Overall[".advSearchFields"][] = "BatchID";
$tdataReport_Sponsor_Overall[".advSearchFields"][] = "Sponsor";

$tdataReport_Sponsor_Overall[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main


$tdataReport_Sponsor_Overall[".totalsFields"][] = array(
	"fName" => "bil_student", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdataReport_Sponsor_Overall[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY DipID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Sponsor_Overall[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Sponsor_Overall[".orderindexes"] = array();
$tdataReport_Sponsor_Overall[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "DipID");

$tdataReport_Sponsor_Overall[".sqlHead"] = "SELECT BatchID,  Sponsor,  DipID,  COUNT(StudentID) AS bil_student";
$tdataReport_Sponsor_Overall[".sqlFrom"] = "FROM student_info";
$tdataReport_Sponsor_Overall[".sqlWhereExpr"] = "(Status ='Active')";
$tdataReport_Sponsor_Overall[".sqlTail"] = "GROUP BY BatchID, Sponsor, DipID";

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
	$tabFields[] = "Sponsor";
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
$tdataReport_Sponsor_Overall[".arrEditTabs"] = $arrEditTabs;

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
	$tabFields[] = "DipID";
	$tabFields[] = "Sponsor";
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
$tdataReport_Sponsor_Overall[".arrAddTabs"] = $arrAddTabs;

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
	$tabFields[] = "DipID";
	$tabFields[] = "Sponsor";
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
$tdataReport_Sponsor_Overall[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Sponsor_Overall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Sponsor_Overall[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Sponsor_Overall = array();
$tdataReport_Sponsor_Overall[".Keys"] = $tableKeysReport_Sponsor_Overall;

$tdataReport_Sponsor_Overall[".listFields"] = array();
$tdataReport_Sponsor_Overall[".listFields"][] = "DipID";
$tdataReport_Sponsor_Overall[".listFields"][] = "BatchID";
$tdataReport_Sponsor_Overall[".listFields"][] = "Sponsor";
$tdataReport_Sponsor_Overall[".listFields"][] = "bil_student";

$tdataReport_Sponsor_Overall[".viewFields"] = array();

$tdataReport_Sponsor_Overall[".addFields"] = array();

$tdataReport_Sponsor_Overall[".inlineAddFields"] = array();

$tdataReport_Sponsor_Overall[".editFields"] = array();

$tdataReport_Sponsor_Overall[".inlineEditFields"] = array();

$tdataReport_Sponsor_Overall[".exportFields"] = array();
$tdataReport_Sponsor_Overall[".exportFields"][] = "DipID";
$tdataReport_Sponsor_Overall[".exportFields"][] = "BatchID";
$tdataReport_Sponsor_Overall[".exportFields"][] = "Sponsor";
$tdataReport_Sponsor_Overall[".exportFields"][] = "bil_student";

$tdataReport_Sponsor_Overall[".printFields"] = array();

//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "BatchID";
	
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
	$edata["LookupOrderBy"] = "ID";
	
		$edata["LookupDesc"] = true;
	
		$edata["LookupWhere"] = "Class=30";
	
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:100px;";
	$edata["controlWidth"] = 100;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Sponsor_Overall["BatchID"] = $fdata;
//	Sponsor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Sponsor";
	$fdata["GoodName"] = "Sponsor";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Financial Aid"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Sponsor"; 
		$fdata["FullName"] = "Sponsor";
	
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
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=16";
	
		
		
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
	
		
		
	$tdataReport_Sponsor_Overall["Sponsor"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
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
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
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
				
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "program";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "program";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdataReport_Sponsor_Overall["DipID"] = $fdata;
//	bil_student
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "bil_student";
	$fdata["GoodName"] = "bil_student";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "No of Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "bil_student"; 
		$fdata["FullName"] = "COUNT(StudentID)";
	
		
		
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
	
		
		
	$tdataReport_Sponsor_Overall["bil_student"] = $fdata;

	
$tables_data["Report_Sponsor_Overall"]=&$tdataReport_Sponsor_Overall;
$field_labels["Report_Sponsor_Overall"] = &$fieldLabelsReport_Sponsor_Overall;
$fieldToolTips["Report_Sponsor_Overall"] = &$fieldToolTipsReport_Sponsor_Overall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Sponsor_Overall"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Sponsor_Overall"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Sponsor_Overall()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "BatchID,  Sponsor,  DipID,  COUNT(StudentID) AS bil_student";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "(Status ='Active')";
$proto0["m_strOrderBy"] = "ORDER BY DipID";
$proto0["m_strTail"] = "GROUP BY BatchID, Sponsor, DipID";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "Status ='Active'";
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
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Sponsor",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
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
$proto11["m_alias"] = "bil_student";
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
$proto0["m_groupby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto18["m_column"]=$obj;
$obj = new SQLGroupByItem($proto18);

$proto0["m_groupby"][]=$obj;
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "Sponsor",
	"m_strTable" => "student_info"
));

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Sponsor_Overall = createSqlQuery_Report_Sponsor_Overall();
				$tdataReport_Sponsor_Overall[".sqlquery"] = $queryData_Report_Sponsor_Overall;

include_once(getabspath("include/Report_Sponsor_Overall_events.php"));
$tableEvents["Report_Sponsor_Overall"] = new eventclass_Report_Sponsor_Overall;
$tdataReport_Sponsor_Overall[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Sponsor_Overall");

?>