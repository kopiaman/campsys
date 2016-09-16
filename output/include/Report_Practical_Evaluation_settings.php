<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Practical_Evaluation = array();
	$tdataReport_Practical_Evaluation[".NumberOfChars"] = 80; 
	$tdataReport_Practical_Evaluation[".ShortName"] = "Report_Practical_Evaluation";
	$tdataReport_Practical_Evaluation[".OwnerID"] = "";
	$tdataReport_Practical_Evaluation[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Practical_Evaluation = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Practical_Evaluation["English"] = array();
	$fieldToolTipsReport_Practical_Evaluation["English"] = array();
	$fieldLabelsReport_Practical_Evaluation["English"]["StudentID"] = "Student";
	$fieldToolTipsReport_Practical_Evaluation["English"]["StudentID"] = "";
	$fieldLabelsReport_Practical_Evaluation["English"]["Name"] = "Name";
	$fieldToolTipsReport_Practical_Evaluation["English"]["Name"] = "";
	$fieldLabelsReport_Practical_Evaluation["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsReport_Practical_Evaluation["English"]["MatricNo"] = "";
	$fieldLabelsReport_Practical_Evaluation["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Practical_Evaluation["English"]["BatchID"] = "";
	$fieldLabelsReport_Practical_Evaluation["English"]["Intake_Category"] = "Course Program";
	$fieldToolTipsReport_Practical_Evaluation["English"]["Intake_Category"] = "";
	$fieldLabelsReport_Practical_Evaluation["English"]["shortcut_name"] = "Program";
	$fieldToolTipsReport_Practical_Evaluation["English"]["shortcut_name"] = "";
	if (count($fieldToolTipsReport_Practical_Evaluation["English"]))
		$tdataReport_Practical_Evaluation[".isUseToolTips"] = true;
}
	
	



$tdataReport_Practical_Evaluation[".shortTableName"] = "Report_Practical_Evaluation";
$tdataReport_Practical_Evaluation[".nSecOptions"] = 0;
$tdataReport_Practical_Evaluation[".recsPerRowList"] = 1;
$tdataReport_Practical_Evaluation[".mainTableOwnerID"] = "";
$tdataReport_Practical_Evaluation[".moveNext"] = 1;
$tdataReport_Practical_Evaluation[".nType"] = 1;

$tdataReport_Practical_Evaluation[".strOriginalTableName"] = "student_info";




$tdataReport_Practical_Evaluation[".showAddInPopup"] = false;

$tdataReport_Practical_Evaluation[".showEditInPopup"] = false;

$tdataReport_Practical_Evaluation[".showViewInPopup"] = true;

$tdataReport_Practical_Evaluation[".fieldsForRegister"] = array();

$tdataReport_Practical_Evaluation[".listAjax"] = false;

	$tdataReport_Practical_Evaluation[".audit"] = false;

	$tdataReport_Practical_Evaluation[".locking"] = false;

$tdataReport_Practical_Evaluation[".listIcons"] = true;




$tdataReport_Practical_Evaluation[".showSimpleSearchOptions"] = false;

$tdataReport_Practical_Evaluation[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Practical_Evaluation[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Practical_Evaluation[".isUseAjaxSuggest"] = true;

$tdataReport_Practical_Evaluation[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Practical_Evaluation[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Practical_Evaluation[".isUseTimeForSearch"] = false;



$tdataReport_Practical_Evaluation[".useDetailsPreview"] = true;

$tdataReport_Practical_Evaluation[".allSearchFields"] = array();

$tdataReport_Practical_Evaluation[".allSearchFields"][] = "Name";
$tdataReport_Practical_Evaluation[".allSearchFields"][] = "MatricNo";
$tdataReport_Practical_Evaluation[".allSearchFields"][] = "shortcut_name";
$tdataReport_Practical_Evaluation[".allSearchFields"][] = "BatchID";
$tdataReport_Practical_Evaluation[".allSearchFields"][] = "Intake_Category";

$tdataReport_Practical_Evaluation[".googleLikeFields"][] = "Name";
$tdataReport_Practical_Evaluation[".googleLikeFields"][] = "MatricNo";
$tdataReport_Practical_Evaluation[".googleLikeFields"][] = "Intake_Category";
$tdataReport_Practical_Evaluation[".googleLikeFields"][] = "shortcut_name";

$tdataReport_Practical_Evaluation[".panelSearchFields"][] = "Name";
$tdataReport_Practical_Evaluation[".panelSearchFields"][] = "MatricNo";
$tdataReport_Practical_Evaluation[".panelSearchFields"][] = "shortcut_name";
$tdataReport_Practical_Evaluation[".panelSearchFields"][] = "BatchID";
$tdataReport_Practical_Evaluation[".panelSearchFields"][] = "Intake_Category";

$tdataReport_Practical_Evaluation[".advSearchFields"][] = "Name";
$tdataReport_Practical_Evaluation[".advSearchFields"][] = "MatricNo";
$tdataReport_Practical_Evaluation[".advSearchFields"][] = "shortcut_name";
$tdataReport_Practical_Evaluation[".advSearchFields"][] = "BatchID";
$tdataReport_Practical_Evaluation[".advSearchFields"][] = "Intake_Category";

$tdataReport_Practical_Evaluation[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataReport_Practical_Evaluation[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_info.StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Practical_Evaluation[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Practical_Evaluation[".orderindexes"] = array();
$tdataReport_Practical_Evaluation[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_info.StudentID");

$tdataReport_Practical_Evaluation[".sqlHead"] = "SELECT student_info.StudentID,  student_info.Name,  student_info.MatricNo,  student_info.BatchID,  student_info.Intake_Category,  program.shortcut_name";
$tdataReport_Practical_Evaluation[".sqlFrom"] = "FROM student_info  LEFT OUTER JOIN program ON student_info.DipID = program.ID";
$tdataReport_Practical_Evaluation[".sqlWhereExpr"] = "(student_info.Status ='Active')";
$tdataReport_Practical_Evaluation[".sqlTail"] = "";

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
$tdataReport_Practical_Evaluation[".arrEditTabs"] = $arrEditTabs;

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
$tdataReport_Practical_Evaluation[".arrAddTabs"] = $arrAddTabs;

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
$tdataReport_Practical_Evaluation[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Practical_Evaluation[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Practical_Evaluation[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Practical_Evaluation = array();
$tableKeysReport_Practical_Evaluation[] = "StudentID";
$tdataReport_Practical_Evaluation[".Keys"] = $tableKeysReport_Practical_Evaluation;

$tdataReport_Practical_Evaluation[".listFields"] = array();
$tdataReport_Practical_Evaluation[".listFields"][] = "Name";
$tdataReport_Practical_Evaluation[".listFields"][] = "MatricNo";
$tdataReport_Practical_Evaluation[".listFields"][] = "shortcut_name";
$tdataReport_Practical_Evaluation[".listFields"][] = "BatchID";

$tdataReport_Practical_Evaluation[".viewFields"] = array();

$tdataReport_Practical_Evaluation[".addFields"] = array();

$tdataReport_Practical_Evaluation[".inlineAddFields"] = array();

$tdataReport_Practical_Evaluation[".editFields"] = array();

$tdataReport_Practical_Evaluation[".inlineEditFields"] = array();

$tdataReport_Practical_Evaluation[".exportFields"] = array();
$tdataReport_Practical_Evaluation[".exportFields"][] = "Name";
$tdataReport_Practical_Evaluation[".exportFields"][] = "MatricNo";
$tdataReport_Practical_Evaluation[".exportFields"][] = "shortcut_name";
$tdataReport_Practical_Evaluation[".exportFields"][] = "BatchID";
$tdataReport_Practical_Evaluation[".exportFields"][] = "Intake_Category";

$tdataReport_Practical_Evaluation[".printFields"] = array();

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
	
		
		
	$tdataReport_Practical_Evaluation["StudentID"] = $fdata;
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Practical_Evaluation["Name"] = $fdata;
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Practical_Evaluation["MatricNo"] = $fdata;
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
	
		
		
	$tdataReport_Practical_Evaluation["BatchID"] = $fdata;
//	Intake_Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
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
	
		
		
	$tdataReport_Practical_Evaluation["Intake_Category"] = $fdata;
//	shortcut_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
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
	
		
		
	$tdataReport_Practical_Evaluation["shortcut_name"] = $fdata;

	
$tables_data["Report_Practical_Evaluation"]=&$tdataReport_Practical_Evaluation;
$field_labels["Report_Practical_Evaluation"] = &$fieldLabelsReport_Practical_Evaluation;
$fieldToolTips["Report_Practical_Evaluation"] = &$fieldToolTipsReport_Practical_Evaluation;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Practical_Evaluation"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="student_evaluation";
	$detailsParam["dDataSourceTable"]="student_evaluation";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="student_evaluation";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["Report_Practical_Evaluation"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Report_Practical_Evaluation"][$dIndex]["masterKeys"][]="StudentID";
		$detailsTablesData["Report_Practical_Evaluation"][$dIndex]["detailKeys"][]="StudentID";

	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Practical_Evaluation"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Practical_Evaluation()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_info.StudentID,  student_info.Name,  student_info.MatricNo,  student_info.BatchID,  student_info.Intake_Category,  program.shortcut_name";
$proto0["m_strFrom"] = "FROM student_info  LEFT OUTER JOIN program ON student_info.DipID = program.ID";
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
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut_name",
	"m_strTable" => "program"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "student_info";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "StudentID";
$proto18["m_columns"][] = "Name";
$proto18["m_columns"][] = "ICNO";
$proto18["m_columns"][] = "DOB";
$proto18["m_columns"][] = "MatricNo";
$proto18["m_columns"][] = "Nogilir";
$proto18["m_columns"][] = "Email";
$proto18["m_columns"][] = "Access";
$proto18["m_columns"][] = "Passw";
$proto18["m_columns"][] = "Type";
$proto18["m_columns"][] = "BranchID";
$proto18["m_columns"][] = "DateJoin";
$proto18["m_columns"][] = "Dateout";
$proto18["m_columns"][] = "Gender";
$proto18["m_columns"][] = "married";
$proto18["m_columns"][] = "Address1";
$proto18["m_columns"][] = "City";
$proto18["m_columns"][] = "Postcode";
$proto18["m_columns"][] = "StateID";
$proto18["m_columns"][] = "Country";
$proto18["m_columns"][] = "HomeTelephone";
$proto18["m_columns"][] = "MobileTelephone";
$proto18["m_columns"][] = "Nationality";
$proto18["m_columns"][] = "BatchID";
$proto18["m_columns"][] = "Intake";
$proto18["m_columns"][] = "Sponsor";
$proto18["m_columns"][] = "DipID";
$proto18["m_columns"][] = "Status";
$proto18["m_columns"][] = "Disability";
$proto18["m_columns"][] = "MedicalCondition";
$proto18["m_columns"][] = "race";
$proto18["m_columns"][] = "Religion";
$proto18["m_columns"][] = "Class";
$proto18["m_columns"][] = "Intake_Category";
$proto18["m_columns"][] = "f1_name";
$proto18["m_columns"][] = "f1_tel";
$proto18["m_columns"][] = "f1_relation";
$proto18["m_columns"][] = "f1_job";
$proto18["m_columns"][] = "f2_name";
$proto18["m_columns"][] = "f2_tel";
$proto18["m_columns"][] = "f2_relation";
$proto18["m_columns"][] = "f2_job";
$proto18["m_columns"][] = "blood";
$proto18["m_columns"][] = "hostel_in";
$proto18["m_columns"][] = "job";
$proto18["m_columns"][] = "al_certificate";
$proto18["m_columns"][] = "al_OJT";
$proto18["m_columns"][] = "al_license";
$proto18["m_columns"][] = "f_name";
$proto18["m_columns"][] = "f_tel";
$proto18["m_columns"][] = "f_ic";
$proto18["m_columns"][] = "f_address";
$proto18["m_columns"][] = "m_name";
$proto18["m_columns"][] = "m_tel";
$proto18["m_columns"][] = "m_ic";
$proto18["m_columns"][] = "m_address";
$proto18["m_columns"][] = "photo";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
												$proto21=array();
$proto21["m_link"] = "SQLL_LEFTJOIN";
			$proto22=array();
$proto22["m_strName"] = "program";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "ID";
$proto22["m_columns"][] = "Name";
$proto22["m_columns"][] = "Code";
$proto22["m_columns"][] = "priority";
$proto22["m_columns"][] = "type";
$proto22["m_columns"][] = "shortcut_name";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "student_info.DipID = program.ID";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "= program.ID";
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
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 0;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Practical_Evaluation = createSqlQuery_Report_Practical_Evaluation();
						$tdataReport_Practical_Evaluation[".sqlquery"] = $queryData_Report_Practical_Evaluation;

include_once(getabspath("include/Report_Practical_Evaluation_events.php"));
$tableEvents["Report_Practical_Evaluation"] = new eventclass_Report_Practical_Evaluation;
$tdataReport_Practical_Evaluation[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Practical_Evaluation");

?>