<?php
require_once(getabspath("classes/cipherer.php"));
$tdatat_eva_assign = array();
	$tdatat_eva_assign[".NumberOfChars"] = 80; 
	$tdatat_eva_assign[".ShortName"] = "t_eva_assign";
	$tdatat_eva_assign[".OwnerID"] = "";
	$tdatat_eva_assign[".OriginalTable"] = "t_eva_assign";

//	field labels
$fieldLabelst_eva_assign = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_eva_assign["English"] = array();
	$fieldToolTipst_eva_assign["English"] = array();
	$fieldLabelst_eva_assign["English"]["tid"] = "Tid";
	$fieldToolTipst_eva_assign["English"]["tid"] = "";
	$fieldLabelst_eva_assign["English"]["StudentID"] = "Student";
	$fieldToolTipst_eva_assign["English"]["StudentID"] = "";
	$fieldLabelst_eva_assign["English"]["topic_1"] = "GM";
	$fieldToolTipst_eva_assign["English"]["topic_1"] = "";
	$fieldLabelst_eva_assign["English"]["topic_2"] = "MF";
	$fieldToolTipst_eva_assign["English"]["topic_2"] = "";
	$fieldLabelst_eva_assign["English"]["topic_3"] = "ADP";
	$fieldToolTipst_eva_assign["English"]["topic_3"] = "";
	$fieldLabelst_eva_assign["English"]["topic_4"] = "WL";
	$fieldToolTipst_eva_assign["English"]["topic_4"] = "";
	$fieldLabelst_eva_assign["English"]["topic_5"] = "ES";
	$fieldToolTipst_eva_assign["English"]["topic_5"] = "";
	$fieldLabelst_eva_assign["English"]["topic_6"] = "SM";
	$fieldToolTipst_eva_assign["English"]["topic_6"] = "";
	$fieldLabelst_eva_assign["English"]["topic_7"] = "MP";
	$fieldToolTipst_eva_assign["English"]["topic_7"] = "";
	if (count($fieldToolTipst_eva_assign["English"]))
		$tdatat_eva_assign[".isUseToolTips"] = true;
}
	
	
	$tdatat_eva_assign[".NCSearch"] = true;



$tdatat_eva_assign[".shortTableName"] = "t_eva_assign";
$tdatat_eva_assign[".nSecOptions"] = 0;
$tdatat_eva_assign[".recsPerRowList"] = 1;
$tdatat_eva_assign[".mainTableOwnerID"] = "";
$tdatat_eva_assign[".moveNext"] = 1;
$tdatat_eva_assign[".nType"] = 0;

$tdatat_eva_assign[".strOriginalTableName"] = "t_eva_assign";




$tdatat_eva_assign[".showAddInPopup"] = false;

$tdatat_eva_assign[".showEditInPopup"] = false;

$tdatat_eva_assign[".showViewInPopup"] = false;

$tdatat_eva_assign[".fieldsForRegister"] = array();

$tdatat_eva_assign[".listAjax"] = false;

	$tdatat_eva_assign[".audit"] = false;

	$tdatat_eva_assign[".locking"] = false;

$tdatat_eva_assign[".listIcons"] = true;
$tdatat_eva_assign[".edit"] = true;



$tdatat_eva_assign[".delete"] = true;

$tdatat_eva_assign[".showSimpleSearchOptions"] = false;

$tdatat_eva_assign[".showSearchPanel"] = true;

if (isMobile())
	$tdatat_eva_assign[".isUseAjaxSuggest"] = false;
else 
	$tdatat_eva_assign[".isUseAjaxSuggest"] = true;

$tdatat_eva_assign[".rowHighlite"] = true;

// button handlers file names
$tdatat_eva_assign[".isUsebuttonHandlers"] = true;

$tdatat_eva_assign[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_eva_assign[".isUseTimeForSearch"] = false;




$tdatat_eva_assign[".allSearchFields"] = array();

$tdatat_eva_assign[".allSearchFields"][] = "StudentID";
$tdatat_eva_assign[".allSearchFields"][] = "topic_1";
$tdatat_eva_assign[".allSearchFields"][] = "topic_2";
$tdatat_eva_assign[".allSearchFields"][] = "topic_3";
$tdatat_eva_assign[".allSearchFields"][] = "topic_4";
$tdatat_eva_assign[".allSearchFields"][] = "topic_5";
$tdatat_eva_assign[".allSearchFields"][] = "topic_6";
$tdatat_eva_assign[".allSearchFields"][] = "topic_7";

$tdatat_eva_assign[".googleLikeFields"][] = "StudentID";
$tdatat_eva_assign[".googleLikeFields"][] = "topic_1";
$tdatat_eva_assign[".googleLikeFields"][] = "topic_2";
$tdatat_eva_assign[".googleLikeFields"][] = "topic_3";
$tdatat_eva_assign[".googleLikeFields"][] = "topic_4";
$tdatat_eva_assign[".googleLikeFields"][] = "topic_5";
$tdatat_eva_assign[".googleLikeFields"][] = "topic_6";
$tdatat_eva_assign[".googleLikeFields"][] = "topic_7";

$tdatat_eva_assign[".panelSearchFields"][] = "topic_1";
$tdatat_eva_assign[".panelSearchFields"][] = "topic_2";

$tdatat_eva_assign[".advSearchFields"][] = "StudentID";
$tdatat_eva_assign[".advSearchFields"][] = "topic_1";
$tdatat_eva_assign[".advSearchFields"][] = "topic_2";
$tdatat_eva_assign[".advSearchFields"][] = "topic_3";
$tdatat_eva_assign[".advSearchFields"][] = "topic_4";
$tdatat_eva_assign[".advSearchFields"][] = "topic_5";
$tdatat_eva_assign[".advSearchFields"][] = "topic_6";
$tdatat_eva_assign[".advSearchFields"][] = "topic_7";

$tdatat_eva_assign[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatat_eva_assign[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_eva_assign[".strOrderBy"] = $tstrOrderBy;

$tdatat_eva_assign[".orderindexes"] = array();

$tdatat_eva_assign[".sqlHead"] = "SELECT tid,   StudentID,   topic_1,   topic_2,   topic_3,   topic_4,   topic_5,   topic_6,   topic_7";
$tdatat_eva_assign[".sqlFrom"] = "FROM t_eva_assign";
$tdatat_eva_assign[".sqlWhereExpr"] = "";
$tdatat_eva_assign[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "topic_1";
$arrEditTabs[] = array('tabId'=>'1__General_Aircraft_Maintenance1',
					   'tabName'=>"1. GM",
					   'nType'=>'0',
					   'nOrder'=>2,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_2";
$arrEditTabs[] = array('tabId'=>'2__Mechanical_Fitting_Practices__Common_1',
					   'tabName'=>"2. MF",
					   'nType'=>'0',
					   'nOrder'=>5,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_3";
$arrEditTabs[] = array('tabId'=>'3__Assembly___Disassembly_Practices__Common_1',
					   'tabName'=>"3.ADP",
					   'nType'=>'0',
					   'nOrder'=>7,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_4";
$arrEditTabs[] = array('tabId'=>'4__Wiring_and_Looming__Common_1',
					   'tabName'=>"4. WL",
					   'nType'=>'0',
					   'nOrder'=>9,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_5";
$arrEditTabs[] = array('tabId'=>'5__Electrical_Power___Avionic_Systems__Common_1',
					   'tabName'=>"5. ES",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_6";
$arrEditTabs[] = array('tabId'=>'6_0_Sheet_Metal_Practices1',
					   'tabName'=>"6. SM",
					   'nType'=>'0',
					   'nOrder'=>13,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_7";
$arrEditTabs[] = array('tabId'=>'7__Maintenance_Practices1',
					   'tabName'=>"7. MP",
					   'nType'=>'0',
					   'nOrder'=>15,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatat_eva_assign[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "topic_1";
$arrAddTabs[] = array('tabId'=>'1__General_Aircraft_Maintenance1',
					  'tabName'=>"1. GM",
					  'nType'=>'0',
					  'nOrder'=>2,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_2";
$arrAddTabs[] = array('tabId'=>'2__Mechanical_Fitting_Practices__Common_1',
					  'tabName'=>"2. MF",
					  'nType'=>'0',
					  'nOrder'=>5,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_3";
$arrAddTabs[] = array('tabId'=>'3__Assembly___Disassembly_Practices__Common_1',
					  'tabName'=>"3.ADP",
					  'nType'=>'0',
					  'nOrder'=>7,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_4";
$arrAddTabs[] = array('tabId'=>'4__Wiring_and_Looming__Common_1',
					  'tabName'=>"4. WL",
					  'nType'=>'0',
					  'nOrder'=>9,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_5";
$arrAddTabs[] = array('tabId'=>'5__Electrical_Power___Avionic_Systems__Common_1',
					  'tabName'=>"5. ES",
					  'nType'=>'0',
					  'nOrder'=>11,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_6";
$arrAddTabs[] = array('tabId'=>'6_0_Sheet_Metal_Practices1',
					  'tabName'=>"6. SM",
					  'nType'=>'0',
					  'nOrder'=>13,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_7";
$arrAddTabs[] = array('tabId'=>'7__Maintenance_Practices1',
					  'tabName'=>"7. MP",
					  'nType'=>'0',
					  'nOrder'=>15,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatat_eva_assign[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "topic_1";
$arrViewTabs[] = array('tabId'=>'1__General_Aircraft_Maintenance1',
					   'tabName'=>"1. GM",
					   'nType'=>'0',
					   'nOrder'=>2,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_2";
$arrViewTabs[] = array('tabId'=>'2__Mechanical_Fitting_Practices__Common_1',
					   'tabName'=>"2. MF",
					   'nType'=>'0',
					   'nOrder'=>5,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_3";
$arrViewTabs[] = array('tabId'=>'3__Assembly___Disassembly_Practices__Common_1',
					   'tabName'=>"3.ADP",
					   'nType'=>'0',
					   'nOrder'=>7,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_4";
$arrViewTabs[] = array('tabId'=>'4__Wiring_and_Looming__Common_1',
					   'tabName'=>"4. WL",
					   'nType'=>'0',
					   'nOrder'=>9,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_5";
$arrViewTabs[] = array('tabId'=>'5__Electrical_Power___Avionic_Systems__Common_1',
					   'tabName'=>"5. ES",
					   'nType'=>'0',
					   'nOrder'=>11,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_6";
$arrViewTabs[] = array('tabId'=>'6_0_Sheet_Metal_Practices1',
					   'tabName'=>"6. SM",
					   'nType'=>'0',
					   'nOrder'=>13,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "topic_7";
$arrViewTabs[] = array('tabId'=>'7__Maintenance_Practices1',
					   'tabName'=>"7. MP",
					   'nType'=>'0',
					   'nOrder'=>15,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatat_eva_assign[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_eva_assign[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_eva_assign[".arrGroupsPerPage"] = $arrGPP;

$tableKeyst_eva_assign = array();
$tableKeyst_eva_assign[] = "tid";
$tdatat_eva_assign[".Keys"] = $tableKeyst_eva_assign;

$tdatat_eva_assign[".listFields"] = array();
$tdatat_eva_assign[".listFields"][] = "StudentID";
$tdatat_eva_assign[".listFields"][] = "topic_1";
$tdatat_eva_assign[".listFields"][] = "topic_2";
$tdatat_eva_assign[".listFields"][] = "topic_3";
$tdatat_eva_assign[".listFields"][] = "topic_4";
$tdatat_eva_assign[".listFields"][] = "topic_5";
$tdatat_eva_assign[".listFields"][] = "topic_6";
$tdatat_eva_assign[".listFields"][] = "topic_7";

$tdatat_eva_assign[".viewFields"] = array();

$tdatat_eva_assign[".addFields"] = array();
$tdatat_eva_assign[".addFields"][] = "StudentID";
$tdatat_eva_assign[".addFields"][] = "topic_1";
$tdatat_eva_assign[".addFields"][] = "topic_2";
$tdatat_eva_assign[".addFields"][] = "topic_3";
$tdatat_eva_assign[".addFields"][] = "topic_4";
$tdatat_eva_assign[".addFields"][] = "topic_5";
$tdatat_eva_assign[".addFields"][] = "topic_6";
$tdatat_eva_assign[".addFields"][] = "topic_7";

$tdatat_eva_assign[".inlineAddFields"] = array();

$tdatat_eva_assign[".editFields"] = array();
$tdatat_eva_assign[".editFields"][] = "StudentID";
$tdatat_eva_assign[".editFields"][] = "topic_1";
$tdatat_eva_assign[".editFields"][] = "topic_2";
$tdatat_eva_assign[".editFields"][] = "topic_3";
$tdatat_eva_assign[".editFields"][] = "topic_4";
$tdatat_eva_assign[".editFields"][] = "topic_5";
$tdatat_eva_assign[".editFields"][] = "topic_6";
$tdatat_eva_assign[".editFields"][] = "topic_7";

$tdatat_eva_assign[".inlineEditFields"] = array();

$tdatat_eva_assign[".exportFields"] = array();

$tdatat_eva_assign[".printFields"] = array();

//	tid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tid";
	$fdata["GoodName"] = "tid";
	$fdata["ownerTable"] = "t_eva_assign";
	$fdata["Label"] = "Tid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "tid"; 
		$fdata["FullName"] = "tid";
	
		
		
				
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
	
		
		
	$tdatat_eva_assign["tid"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "t_eva_assign";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
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
	
		
		
	$tdatat_eva_assign["StudentID"] = $fdata;
//	topic_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "topic_1";
	$fdata["GoodName"] = "topic_1";
	$fdata["ownerTable"] = "t_eva_assign";
	$fdata["Label"] = "GM"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_1"; 
		$fdata["FullName"] = "topic_1";
	
		
		
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=1";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=1";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=1";
	
		
		
		
				
	
	
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
	
		
		
	$tdatat_eva_assign["topic_1"] = $fdata;
//	topic_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "topic_2";
	$fdata["GoodName"] = "topic_2";
	$fdata["ownerTable"] = "t_eva_assign";
	$fdata["Label"] = "MF"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_2"; 
		$fdata["FullName"] = "topic_2";
	
		
		
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=2";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=2";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=2";
	
		
		
		
				
	
	
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
	
		
		
	$tdatat_eva_assign["topic_2"] = $fdata;
//	topic_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "topic_3";
	$fdata["GoodName"] = "topic_3";
	$fdata["ownerTable"] = "t_eva_assign";
	$fdata["Label"] = "ADP"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_3"; 
		$fdata["FullName"] = "topic_3";
	
		
		
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=3";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=3";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=3";
	
		
		
		
				
	
	
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
	
		
		
	$tdatat_eva_assign["topic_3"] = $fdata;
//	topic_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "topic_4";
	$fdata["GoodName"] = "topic_4";
	$fdata["ownerTable"] = "t_eva_assign";
	$fdata["Label"] = "WL"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_4"; 
		$fdata["FullName"] = "topic_4";
	
		
		
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=4";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=4";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=4";
	
		
		
		
				
	
	
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
	
		
		
	$tdatat_eva_assign["topic_4"] = $fdata;
//	topic_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "topic_5";
	$fdata["GoodName"] = "topic_5";
	$fdata["ownerTable"] = "t_eva_assign";
	$fdata["Label"] = "ES"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_5"; 
		$fdata["FullName"] = "topic_5";
	
		
		
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=5";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=5";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=5";
	
		
		
		
				
	
	
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
	
		
		
	$tdatat_eva_assign["topic_5"] = $fdata;
//	topic_6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "topic_6";
	$fdata["GoodName"] = "topic_6";
	$fdata["ownerTable"] = "t_eva_assign";
	$fdata["Label"] = "SM"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_6"; 
		$fdata["FullName"] = "topic_6";
	
		
		
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=6";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=6";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=6";
	
		
		
		
				
	
	
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
	
		
		
	$tdatat_eva_assign["topic_6"] = $fdata;
//	topic_7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "topic_7";
	$fdata["GoodName"] = "topic_7";
	$fdata["ownerTable"] = "t_eva_assign";
	$fdata["Label"] = "MP"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic_7"; 
		$fdata["FullName"] = "topic_7";
	
		
		
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=7";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "main_topic=7";
	
		
		
		
				
	
	
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
			
		
			
	$edata["LinkField"] = "sub_topic";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "sub_topic";
	
		
	$edata["LookupTable"] = "t_eva_ass_task";
	$edata["LookupOrderBy"] = "sub_topic";
	
		
		$edata["LookupWhere"] = "main_topic=7";
	
		
		
		
				
	
	
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
	
		
		
	$tdatat_eva_assign["topic_7"] = $fdata;

	
$tables_data["t_eva_assign"]=&$tdatat_eva_assign;
$field_labels["t_eva_assign"] = &$fieldLabelst_eva_assign;
$fieldToolTips["t_eva_assign"] = &$fieldToolTipst_eva_assign;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_eva_assign"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_eva_assign"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_eva_assign()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tid,   StudentID,   topic_1,   topic_2,   topic_3,   topic_4,   topic_5,   topic_6,   topic_7";
$proto0["m_strFrom"] = "FROM t_eva_assign";
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
	"m_strName" => "tid",
	"m_strTable" => "t_eva_assign"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "t_eva_assign"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_1",
	"m_strTable" => "t_eva_assign"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_2",
	"m_strTable" => "t_eva_assign"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_3",
	"m_strTable" => "t_eva_assign"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_4",
	"m_strTable" => "t_eva_assign"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_5",
	"m_strTable" => "t_eva_assign"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_6",
	"m_strTable" => "t_eva_assign"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "topic_7",
	"m_strTable" => "t_eva_assign"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "t_eva_assign";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "tid";
$proto24["m_columns"][] = "StudentID";
$proto24["m_columns"][] = "topic_1";
$proto24["m_columns"][] = "topic_2";
$proto24["m_columns"][] = "topic_3";
$proto24["m_columns"][] = "topic_4";
$proto24["m_columns"][] = "topic_5";
$proto24["m_columns"][] = "topic_6";
$proto24["m_columns"][] = "topic_7";
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
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_eva_assign = createSqlQuery_t_eva_assign();
									$tdatat_eva_assign[".sqlquery"] = $queryData_t_eva_assign;

include_once(getabspath("include/t_eva_assign_events.php"));
$tableEvents["t_eva_assign"] = new eventclass_t_eva_assign;
$tdatat_eva_assign[".hasEvents"] = true;

$cipherer = new RunnerCipherer("t_eva_assign");

?>