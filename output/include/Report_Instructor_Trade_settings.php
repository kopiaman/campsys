<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Instructor_Trade = array();
	$tdataReport_Instructor_Trade[".NumberOfChars"] = 80; 
	$tdataReport_Instructor_Trade[".ShortName"] = "Report_Instructor_Trade";
	$tdataReport_Instructor_Trade[".OwnerID"] = "IC_No";
	$tdataReport_Instructor_Trade[".OriginalTable"] = "staff_info";

//	field labels
$fieldLabelsReport_Instructor_Trade = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Instructor_Trade["English"] = array();
	$fieldToolTipsReport_Instructor_Trade["English"] = array();
	$fieldLabelsReport_Instructor_Trade["English"]["ID"] = "ID";
	$fieldToolTipsReport_Instructor_Trade["English"]["ID"] = "";
	$fieldLabelsReport_Instructor_Trade["English"]["Name"] = "Name";
	$fieldToolTipsReport_Instructor_Trade["English"]["Name"] = "";
	$fieldLabelsReport_Instructor_Trade["English"]["subModule"] = "Sub Module";
	$fieldToolTipsReport_Instructor_Trade["English"]["subModule"] = "";
	$fieldLabelsReport_Instructor_Trade["English"]["trades"] = "Trades";
	$fieldToolTipsReport_Instructor_Trade["English"]["trades"] = "";
	$fieldLabelsReport_Instructor_Trade["English"]["trades2"] = "Trades2";
	$fieldToolTipsReport_Instructor_Trade["English"]["trades2"] = "";
	$fieldLabelsReport_Instructor_Trade["English"]["department"] = "Department";
	$fieldToolTipsReport_Instructor_Trade["English"]["department"] = "";
	if (count($fieldToolTipsReport_Instructor_Trade["English"]))
		$tdataReport_Instructor_Trade[".isUseToolTips"] = true;
}
	
	
	$tdataReport_Instructor_Trade[".NCSearch"] = true;



$tdataReport_Instructor_Trade[".shortTableName"] = "Report_Instructor_Trade";
$tdataReport_Instructor_Trade[".nSecOptions"] = 2;
$tdataReport_Instructor_Trade[".recsPerRowList"] = 1;
$tdataReport_Instructor_Trade[".mainTableOwnerID"] = "IC_No";
$tdataReport_Instructor_Trade[".moveNext"] = 1;
$tdataReport_Instructor_Trade[".nType"] = 1;

$tdataReport_Instructor_Trade[".strOriginalTableName"] = "staff_info";




$tdataReport_Instructor_Trade[".showAddInPopup"] = false;

$tdataReport_Instructor_Trade[".showEditInPopup"] = false;

$tdataReport_Instructor_Trade[".showViewInPopup"] = false;

$tdataReport_Instructor_Trade[".fieldsForRegister"] = array();
	
$tdataReport_Instructor_Trade[".listAjax"] = false;

	$tdataReport_Instructor_Trade[".audit"] = true;

	$tdataReport_Instructor_Trade[".locking"] = false;

$tdataReport_Instructor_Trade[".listIcons"] = true;
$tdataReport_Instructor_Trade[".inlineEdit"] = true;




$tdataReport_Instructor_Trade[".showSimpleSearchOptions"] = true;

$tdataReport_Instructor_Trade[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Instructor_Trade[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Instructor_Trade[".isUseAjaxSuggest"] = true;

$tdataReport_Instructor_Trade[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Instructor_Trade[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Instructor_Trade[".isUseTimeForSearch"] = false;




$tdataReport_Instructor_Trade[".allSearchFields"] = array();

$tdataReport_Instructor_Trade[".allSearchFields"][] = "Name";
$tdataReport_Instructor_Trade[".allSearchFields"][] = "trades";
$tdataReport_Instructor_Trade[".allSearchFields"][] = "trades2";
$tdataReport_Instructor_Trade[".allSearchFields"][] = "subModule";
$tdataReport_Instructor_Trade[".allSearchFields"][] = "department";

$tdataReport_Instructor_Trade[".googleLikeFields"][] = "Name";
$tdataReport_Instructor_Trade[".googleLikeFields"][] = "trades";
$tdataReport_Instructor_Trade[".googleLikeFields"][] = "trades2";
$tdataReport_Instructor_Trade[".googleLikeFields"][] = "subModule";
$tdataReport_Instructor_Trade[".googleLikeFields"][] = "department";

$tdataReport_Instructor_Trade[".panelSearchFields"][] = "Name";
$tdataReport_Instructor_Trade[".panelSearchFields"][] = "trades";
$tdataReport_Instructor_Trade[".panelSearchFields"][] = "trades2";
$tdataReport_Instructor_Trade[".panelSearchFields"][] = "subModule";
$tdataReport_Instructor_Trade[".panelSearchFields"][] = "department";

$tdataReport_Instructor_Trade[".advSearchFields"][] = "Name";
$tdataReport_Instructor_Trade[".advSearchFields"][] = "trades";
$tdataReport_Instructor_Trade[".advSearchFields"][] = "trades2";
$tdataReport_Instructor_Trade[".advSearchFields"][] = "subModule";
$tdataReport_Instructor_Trade[".advSearchFields"][] = "department";

$tdataReport_Instructor_Trade[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Instructor_Trade[".pageSize"] = 45;

$tstrOrderBy = "order by department, trades";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Instructor_Trade[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Instructor_Trade[".orderindexes"] = array();
$tdataReport_Instructor_Trade[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "department");
$tdataReport_Instructor_Trade[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "trades");

$tdataReport_Instructor_Trade[".sqlHead"] = "SELECT ID,  Name,  trades,  trades2,  subModule,  department";
$tdataReport_Instructor_Trade[".sqlFrom"] = "FROM staff_info";
$tdataReport_Instructor_Trade[".sqlWhereExpr"] = "`department` LIKE  '%VOCATIONAL COLLEGE%' OR `department` LIKE  '%TRAINING%'";
$tdataReport_Instructor_Trade[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
$arrEditTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Next_of_Kin1',
					   'tabName'=>"Next of Kin",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Job_Info1',
					   'tabName'=>"Job Info",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Account_Info1',
					   'tabName'=>"Account Info",
					   'nType'=>'0',
					   'nOrder'=>36,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Health_Info1',
					   'tabName'=>"Health Info",
					   'nType'=>'0',
					   'nOrder'=>43,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Instructor_Trade[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
$arrAddTabs[] = array('tabId'=>'Personal1',
					  'tabName'=>"Personal",
					  'nType'=>'0',
					  'nOrder'=>1,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Contact1',
					  'tabName'=>"Contact",
					  'nType'=>'0',
					  'nOrder'=>11,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Next_of_Kin1',
					  'tabName'=>"Next of Kin",
					  'nType'=>'0',
					  'nOrder'=>19,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Job_Info1',
					  'tabName'=>"Job Info",
					  'nType'=>'0',
					  'nOrder'=>26,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Account_Info1',
					  'tabName'=>"Account Info",
					  'nType'=>'0',
					  'nOrder'=>36,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Health_Info1',
					  'tabName'=>"Health Info",
					  'nType'=>'0',
					  'nOrder'=>43,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataReport_Instructor_Trade[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "Name";
$arrViewTabs[] = array('tabId'=>'Personal1',
					   'tabName'=>"Personal",
					   'nType'=>'0',
					   'nOrder'=>1,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Contact1',
					   'tabName'=>"Contact",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Next_of_Kin1',
					   'tabName'=>"Next of Kin",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Job_Info1',
					   'tabName'=>"Job Info",
					   'nType'=>'0',
					   'nOrder'=>26,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Account_Info1',
					   'tabName'=>"Account Info",
					   'nType'=>'0',
					   'nOrder'=>36,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Health_Info1',
					   'tabName'=>"Health Info",
					   'nType'=>'0',
					   'nOrder'=>43,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Instructor_Trade[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Instructor_Trade[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Instructor_Trade[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Instructor_Trade = array();
$tableKeysReport_Instructor_Trade[] = "ID";
$tdataReport_Instructor_Trade[".Keys"] = $tableKeysReport_Instructor_Trade;

$tdataReport_Instructor_Trade[".listFields"] = array();
$tdataReport_Instructor_Trade[".listFields"][] = "Name";
$tdataReport_Instructor_Trade[".listFields"][] = "trades";
$tdataReport_Instructor_Trade[".listFields"][] = "trades2";
$tdataReport_Instructor_Trade[".listFields"][] = "subModule";

$tdataReport_Instructor_Trade[".viewFields"] = array();

$tdataReport_Instructor_Trade[".addFields"] = array();

$tdataReport_Instructor_Trade[".inlineAddFields"] = array();

$tdataReport_Instructor_Trade[".editFields"] = array();

$tdataReport_Instructor_Trade[".inlineEditFields"] = array();
$tdataReport_Instructor_Trade[".inlineEditFields"][] = "trades";
$tdataReport_Instructor_Trade[".inlineEditFields"][] = "trades2";
$tdataReport_Instructor_Trade[".inlineEditFields"][] = "subModule";

$tdataReport_Instructor_Trade[".exportFields"] = array();

$tdataReport_Instructor_Trade[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "staff_info";
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
	
		
		
	$tdataReport_Instructor_Trade["ID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "Name";
	
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
	
		$edata["inputStyle"] = " width:250px;";
	$edata["controlWidth"] = 250;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Instructor_Trade["Name"] = $fdata;
//	trades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "trades";
	$fdata["GoodName"] = "trades";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Trades"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "trades"; 
		$fdata["FullName"] = "trades";
	
		
		
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
	
		
		
	$tdataReport_Instructor_Trade["trades"] = $fdata;
//	trades2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "trades2";
	$fdata["GoodName"] = "trades2";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Trades2"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "trades2"; 
		$fdata["FullName"] = "trades2";
	
		
		
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
	
		
		
	$tdataReport_Instructor_Trade["trades2"] = $fdata;
//	subModule
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "subModule";
	$fdata["GoodName"] = "subModule";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Sub Module"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "subModule"; 
		$fdata["FullName"] = "subModule";
	
		
		
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
	
		
		
	$tdataReport_Instructor_Trade["subModule"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "staff_info";
	$fdata["Label"] = "Department"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "department"; 
		$fdata["FullName"] = "department";
	
		
		
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
	
		
		
	$tdataReport_Instructor_Trade["department"] = $fdata;

	
$tables_data["Report_Instructor_Trade"]=&$tdataReport_Instructor_Trade;
$field_labels["Report_Instructor_Trade"] = &$fieldLabelsReport_Instructor_Trade;
$fieldToolTips["Report_Instructor_Trade"] = &$fieldToolTipsReport_Instructor_Trade;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Instructor_Trade"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Instructor_Trade"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Instructor_Trade()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Name,  trades,  trades2,  subModule,  department";
$proto0["m_strFrom"] = "FROM staff_info";
$proto0["m_strWhere"] = "`department` LIKE  '%VOCATIONAL COLLEGE%' OR `department` LIKE  '%TRAINING%'";
$proto0["m_strOrderBy"] = "order by department, trades";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "`department` LIKE  '%VOCATIONAL COLLEGE%' OR `department` LIKE  '%TRAINING%'";
$proto1["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`department` LIKE  '%VOCATIONAL COLLEGE%' OR `department` LIKE  '%TRAINING%'"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "`department` LIKE  '%VOCATIONAL COLLEGE%'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "staff_info"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "LIKE  '%VOCATIONAL COLLEGE%'";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "`department` LIKE  '%TRAINING%'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "staff_info"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "LIKE  '%TRAINING%'";
$proto5["m_havingmode"] = "0";
$proto5["m_inBrackets"] = "0";
$proto5["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = "0";
$proto7["m_inBrackets"] = "0";
$proto7["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "staff_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "staff_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "trades",
	"m_strTable" => "staff_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "trades2",
	"m_strTable" => "staff_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "subModule",
	"m_strTable" => "staff_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "staff_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "staff_info";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "ID";
$proto22["m_columns"][] = "Name";
$proto22["m_columns"][] = "StaffNo";
$proto22["m_columns"][] = "BranchID";
$proto22["m_columns"][] = "IC_No";
$proto22["m_columns"][] = "Email";
$proto22["m_columns"][] = "Password";
$proto22["m_columns"][] = "Resign";
$proto22["m_columns"][] = "Gender";
$proto22["m_columns"][] = "Race";
$proto22["m_columns"][] = "DOB";
$proto22["m_columns"][] = "Address1";
$proto22["m_columns"][] = "Postcode";
$proto22["m_columns"][] = "City";
$proto22["m_columns"][] = "State";
$proto22["m_columns"][] = "Country";
$proto22["m_columns"][] = "Nationality";
$proto22["m_columns"][] = "Home_Tel";
$proto22["m_columns"][] = "Mobile_Tel";
$proto22["m_columns"][] = "DisciplineID";
$proto22["m_columns"][] = "Disability";
$proto22["m_columns"][] = "Medical_condition";
$proto22["m_columns"][] = "Join_Date";
$proto22["m_columns"][] = "End_Date";
$proto22["m_columns"][] = "Job_Type";
$proto22["m_columns"][] = "Employee_Type";
$proto22["m_columns"][] = "Job_Title";
$proto22["m_columns"][] = "Branch";
$proto22["m_columns"][] = "religion";
$proto22["m_columns"][] = "level";
$proto22["m_columns"][] = "department";
$proto22["m_columns"][] = "passport";
$proto22["m_columns"][] = "married";
$proto22["m_columns"][] = "blood";
$proto22["m_columns"][] = "photo";
$proto22["m_columns"][] = "f1_name";
$proto22["m_columns"][] = "f1_relation";
$proto22["m_columns"][] = "f1_tel";
$proto22["m_columns"][] = "f2_name";
$proto22["m_columns"][] = "f2_relation";
$proto22["m_columns"][] = "f2_tel";
$proto22["m_columns"][] = "bank1";
$proto22["m_columns"][] = "bank2";
$proto22["m_columns"][] = "epf";
$proto22["m_columns"][] = "socso";
$proto22["m_columns"][] = "lhdn";
$proto22["m_columns"][] = "confirmation_date";
$proto22["m_columns"][] = "trades";
$proto22["m_columns"][] = "trades2";
$proto22["m_columns"][] = "subModule";
$proto22["m_columns"][] = "sstatus";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "staff_info"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 1;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "trades",
	"m_strTable" => "staff_info"
));

$proto27["m_column"]=$obj;
$proto27["m_bAsc"] = 1;
$proto27["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto27);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Instructor_Trade = createSqlQuery_Report_Instructor_Trade();
						$tdataReport_Instructor_Trade[".sqlquery"] = $queryData_Report_Instructor_Trade;

include_once(getabspath("include/Report_Instructor_Trade_events.php"));
$tableEvents["Report_Instructor_Trade"] = new eventclass_Report_Instructor_Trade;
$tdataReport_Instructor_Trade[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Instructor_Trade");

?>