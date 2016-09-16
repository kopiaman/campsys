<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Assesment = array();
	$tdataReport_Assesment[".NumberOfChars"] = 80; 
	$tdataReport_Assesment[".ShortName"] = "Report_Assesment";
	$tdataReport_Assesment[".OwnerID"] = "";
	$tdataReport_Assesment[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Assesment = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Assesment["English"] = array();
	$fieldToolTipsReport_Assesment["English"] = array();
	$fieldLabelsReport_Assesment["English"]["StudentID"] = "Student";
	$fieldToolTipsReport_Assesment["English"]["StudentID"] = "";
	$fieldLabelsReport_Assesment["English"]["Name"] = "Name";
	$fieldToolTipsReport_Assesment["English"]["Name"] = "";
	$fieldLabelsReport_Assesment["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsReport_Assesment["English"]["MatricNo"] = "";
	$fieldLabelsReport_Assesment["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Assesment["English"]["BatchID"] = "";
	$fieldLabelsReport_Assesment["English"]["Sponsor"] = "Financial Aid";
	$fieldToolTipsReport_Assesment["English"]["Sponsor"] = "";
	$fieldLabelsReport_Assesment["English"]["Intake_Category"] = "Course Program";
	$fieldToolTipsReport_Assesment["English"]["Intake_Category"] = "";
	$fieldLabelsReport_Assesment["English"]["shortcut_name"] = "Program";
	$fieldToolTipsReport_Assesment["English"]["shortcut_name"] = "";
	$fieldLabelsReport_Assesment["English"]["group"] = "Class";
	$fieldToolTipsReport_Assesment["English"]["group"] = "";
	if (count($fieldToolTipsReport_Assesment["English"]))
		$tdataReport_Assesment[".isUseToolTips"] = true;
}
	
	



$tdataReport_Assesment[".shortTableName"] = "Report_Assesment";
$tdataReport_Assesment[".nSecOptions"] = 0;
$tdataReport_Assesment[".recsPerRowList"] = 1;
$tdataReport_Assesment[".mainTableOwnerID"] = "";
$tdataReport_Assesment[".moveNext"] = 1;
$tdataReport_Assesment[".nType"] = 1;

$tdataReport_Assesment[".strOriginalTableName"] = "student_info";




$tdataReport_Assesment[".showAddInPopup"] = false;

$tdataReport_Assesment[".showEditInPopup"] = false;

$tdataReport_Assesment[".showViewInPopup"] = true;

$tdataReport_Assesment[".fieldsForRegister"] = array();

$tdataReport_Assesment[".listAjax"] = false;

	$tdataReport_Assesment[".audit"] = false;

	$tdataReport_Assesment[".locking"] = false;

$tdataReport_Assesment[".listIcons"] = true;

$tdataReport_Assesment[".exportTo"] = true;



$tdataReport_Assesment[".showSimpleSearchOptions"] = false;

$tdataReport_Assesment[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Assesment[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Assesment[".isUseAjaxSuggest"] = true;

$tdataReport_Assesment[".rowHighlite"] = true;

// button handlers file names
$tdataReport_Assesment[".isUsebuttonHandlers"] = true;

$tdataReport_Assesment[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Assesment[".isUseTimeForSearch"] = false;



$tdataReport_Assesment[".useDetailsPreview"] = true;

$tdataReport_Assesment[".allSearchFields"] = array();

$tdataReport_Assesment[".allSearchFields"][] = "Name";
$tdataReport_Assesment[".allSearchFields"][] = "MatricNo";
$tdataReport_Assesment[".allSearchFields"][] = "shortcut_name";
$tdataReport_Assesment[".allSearchFields"][] = "BatchID";
$tdataReport_Assesment[".allSearchFields"][] = "Sponsor";
$tdataReport_Assesment[".allSearchFields"][] = "group";
$tdataReport_Assesment[".allSearchFields"][] = "Intake_Category";

$tdataReport_Assesment[".googleLikeFields"][] = "Name";
$tdataReport_Assesment[".googleLikeFields"][] = "MatricNo";
$tdataReport_Assesment[".googleLikeFields"][] = "Intake_Category";
$tdataReport_Assesment[".googleLikeFields"][] = "shortcut_name";
$tdataReport_Assesment[".googleLikeFields"][] = "group";

$tdataReport_Assesment[".panelSearchFields"][] = "Name";
$tdataReport_Assesment[".panelSearchFields"][] = "MatricNo";
$tdataReport_Assesment[".panelSearchFields"][] = "shortcut_name";
$tdataReport_Assesment[".panelSearchFields"][] = "BatchID";
$tdataReport_Assesment[".panelSearchFields"][] = "group";
$tdataReport_Assesment[".panelSearchFields"][] = "Intake_Category";

$tdataReport_Assesment[".advSearchFields"][] = "Name";
$tdataReport_Assesment[".advSearchFields"][] = "MatricNo";
$tdataReport_Assesment[".advSearchFields"][] = "shortcut_name";
$tdataReport_Assesment[".advSearchFields"][] = "BatchID";
$tdataReport_Assesment[".advSearchFields"][] = "Sponsor";
$tdataReport_Assesment[".advSearchFields"][] = "group";
$tdataReport_Assesment[".advSearchFields"][] = "Intake_Category";

$tdataReport_Assesment[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataReport_Assesment[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_info.StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Assesment[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Assesment[".orderindexes"] = array();
$tdataReport_Assesment[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_info.StudentID");

$tdataReport_Assesment[".sqlHead"] = "SELECT student_info.StudentID,  student_info.Name,  student_info.MatricNo,  student_info.BatchID,  student_info.Sponsor,  student_info.Intake_Category,  program.shortcut_name,  `group`.`group`";
$tdataReport_Assesment[".sqlFrom"] = "FROM student_info  LEFT OUTER JOIN program ON student_info.DipID = program.ID  LEFT OUTER JOIN `group` ON student_info.`Class` = `group`.id";
$tdataReport_Assesment[".sqlWhereExpr"] = "(student_info.Status ='Active')";
$tdataReport_Assesment[".sqlTail"] = "";

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
	$tabFields[] = "Intake_Category";
	$tabFields[] = "BatchID";
	$tabFields[] = "MatricNo";
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
$tdataReport_Assesment[".arrEditTabs"] = $arrEditTabs;

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
	$tabFields[] = "Intake_Category";
	$tabFields[] = "BatchID";
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
$tdataReport_Assesment[".arrAddTabs"] = $arrAddTabs;

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
	$tabFields[] = "Intake_Category";
	$tabFields[] = "BatchID";
	$tabFields[] = "MatricNo";
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
$tdataReport_Assesment[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Assesment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Assesment[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Assesment = array();
$tableKeysReport_Assesment[] = "StudentID";
$tdataReport_Assesment[".Keys"] = $tableKeysReport_Assesment;

$tdataReport_Assesment[".listFields"] = array();
$tdataReport_Assesment[".listFields"][] = "Name";
$tdataReport_Assesment[".listFields"][] = "MatricNo";
$tdataReport_Assesment[".listFields"][] = "shortcut_name";
$tdataReport_Assesment[".listFields"][] = "BatchID";
$tdataReport_Assesment[".listFields"][] = "group";

$tdataReport_Assesment[".viewFields"] = array();

$tdataReport_Assesment[".addFields"] = array();

$tdataReport_Assesment[".inlineAddFields"] = array();

$tdataReport_Assesment[".editFields"] = array();

$tdataReport_Assesment[".inlineEditFields"] = array();

$tdataReport_Assesment[".exportFields"] = array();
$tdataReport_Assesment[".exportFields"][] = "Name";
$tdataReport_Assesment[".exportFields"][] = "MatricNo";
$tdataReport_Assesment[".exportFields"][] = "shortcut_name";
$tdataReport_Assesment[".exportFields"][] = "BatchID";
$tdataReport_Assesment[".exportFields"][] = "Sponsor";
$tdataReport_Assesment[".exportFields"][] = "group";
$tdataReport_Assesment[".exportFields"][] = "Intake_Category";

$tdataReport_Assesment[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_info.StudentID";
	
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Assesment["StudentID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "student_info.Name";
	
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
			$edata["EditParams"].= " maxlength=150";
	
		$edata["inputStyle"] = " width:266px;";
	$edata["controlWidth"] = 266;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Assesment["Name"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Matric No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "student_info.MatricNo";
	
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
			$edata["EditParams"].= " maxlength=12";
	
		$edata["inputStyle"] = " width:222px;";
	$edata["controlWidth"] = 222;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Assesment["MatricNo"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 200;
	
		
		
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
	
		
		
	$tdataReport_Assesment["BatchID"] = $fdata;
//	Sponsor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Sponsor";
	$fdata["GoodName"] = "Sponsor";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Financial Aid"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Sponsor"; 
		$fdata["FullName"] = "student_info.Sponsor";
	
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
				$edata["LCType"] = 2;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
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
	
		
		
	$tdataReport_Assesment["Sponsor"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Intake_Category";
	$fdata["GoodName"] = "Intake_Category";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Course Program"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
	$edata["DisplayField"] = "Intake_Category";
	
		
	$edata["LookupTable"] = "set_intake_category";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Assesment["Intake_Category"] = $fdata;
//	shortcut_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "shortcut_name";
	$fdata["GoodName"] = "shortcut_name";
	$fdata["ownerTable"] = "program";
	$fdata["Label"] = "Program"; 
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
	
		
		
	$tdataReport_Assesment["shortcut_name"] = $fdata;
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "group";
	
		
	$edata["LookupTable"] = "group";
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
	
		
		
	$tdataReport_Assesment["group"] = $fdata;

	
$tables_data["Report_Assesment"]=&$tdataReport_Assesment;
$field_labels["Report_Assesment"] = &$fieldLabelsReport_Assesment;
$fieldToolTips["Report_Assesment"] = &$fieldToolTipsReport_Assesment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Assesment"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="q_assesment";
	$detailsParam["dDataSourceTable"]="q_assesment";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="q_assesment";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["Report_Assesment"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Report_Assesment"][$dIndex]["masterKeys"][]="StudentID";
		$detailsTablesData["Report_Assesment"][$dIndex]["detailKeys"][]="StudentID";

	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Assesment"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Assesment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_info.StudentID,  student_info.Name,  student_info.MatricNo,  student_info.BatchID,  student_info.Sponsor,  student_info.Intake_Category,  program.shortcut_name,  `group`.`group`";
$proto0["m_strFrom"] = "FROM student_info  LEFT OUTER JOIN program ON student_info.DipID = program.ID  LEFT OUTER JOIN `group` ON student_info.`Class` = `group`.id";
$proto0["m_strWhere"] = "(student_info.Status ='Active')";
$proto0["m_strOrderBy"] = "ORDER BY student_info.StudentID DESC";
$proto0["m_strTail"] = "";
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
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Sponsor",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut_name",
	"m_strTable" => "program"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "group"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "student_info";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "StudentID";
$proto22["m_columns"][] = "Name";
$proto22["m_columns"][] = "ICNO";
$proto22["m_columns"][] = "DOB";
$proto22["m_columns"][] = "MatricNo";
$proto22["m_columns"][] = "Nogilir";
$proto22["m_columns"][] = "Email";
$proto22["m_columns"][] = "Access";
$proto22["m_columns"][] = "Passw";
$proto22["m_columns"][] = "Type";
$proto22["m_columns"][] = "BranchID";
$proto22["m_columns"][] = "DateJoin";
$proto22["m_columns"][] = "Dateout";
$proto22["m_columns"][] = "Gender";
$proto22["m_columns"][] = "married";
$proto22["m_columns"][] = "Address1";
$proto22["m_columns"][] = "City";
$proto22["m_columns"][] = "Postcode";
$proto22["m_columns"][] = "StateID";
$proto22["m_columns"][] = "Country";
$proto22["m_columns"][] = "HomeTelephone";
$proto22["m_columns"][] = "MobileTelephone";
$proto22["m_columns"][] = "Nationality";
$proto22["m_columns"][] = "BatchID";
$proto22["m_columns"][] = "Intake";
$proto22["m_columns"][] = "Sponsor";
$proto22["m_columns"][] = "DipID";
$proto22["m_columns"][] = "Status";
$proto22["m_columns"][] = "Disability";
$proto22["m_columns"][] = "MedicalCondition";
$proto22["m_columns"][] = "race";
$proto22["m_columns"][] = "Religion";
$proto22["m_columns"][] = "Class";
$proto22["m_columns"][] = "Intake_Category";
$proto22["m_columns"][] = "f1_name";
$proto22["m_columns"][] = "f1_tel";
$proto22["m_columns"][] = "f1_relation";
$proto22["m_columns"][] = "f1_job";
$proto22["m_columns"][] = "f2_name";
$proto22["m_columns"][] = "f2_tel";
$proto22["m_columns"][] = "f2_relation";
$proto22["m_columns"][] = "f2_job";
$proto22["m_columns"][] = "blood";
$proto22["m_columns"][] = "hostel_in";
$proto22["m_columns"][] = "job";
$proto22["m_columns"][] = "al_certificate";
$proto22["m_columns"][] = "al_OJT";
$proto22["m_columns"][] = "al_license";
$proto22["m_columns"][] = "f_name";
$proto22["m_columns"][] = "f_tel";
$proto22["m_columns"][] = "f_ic";
$proto22["m_columns"][] = "f_address";
$proto22["m_columns"][] = "m_name";
$proto22["m_columns"][] = "m_tel";
$proto22["m_columns"][] = "m_ic";
$proto22["m_columns"][] = "m_address";
$proto22["m_columns"][] = "photo";
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
												$proto25=array();
$proto25["m_link"] = "SQLL_LEFTJOIN";
			$proto26=array();
$proto26["m_strName"] = "program";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "ID";
$proto26["m_columns"][] = "Name";
$proto26["m_columns"][] = "Code";
$proto26["m_columns"][] = "priority";
$proto26["m_columns"][] = "type";
$proto26["m_columns"][] = "shortcut_name";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "student_info.DipID = program.ID";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= program.ID";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
												$proto29=array();
$proto29["m_link"] = "SQLL_LEFTJOIN";
			$proto30=array();
$proto30["m_strName"] = "group";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "group";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "";
$proto31=array();
$proto31["m_sql"] = "student_info.`Class` = `group`.id";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "= `group`.id";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 0;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Assesment = createSqlQuery_Report_Assesment();
								$tdataReport_Assesment[".sqlquery"] = $queryData_Report_Assesment;

include_once(getabspath("include/Report_Assesment_events.php"));
$tableEvents["Report_Assesment"] = new eventclass_Report_Assesment;
$tdataReport_Assesment[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Assesment");

?>