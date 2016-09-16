<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Exam_Slip_Indiv = array();
	$tdataReport_Exam_Slip_Indiv[".NumberOfChars"] = 80; 
	$tdataReport_Exam_Slip_Indiv[".ShortName"] = "Report_Exam_Slip_Indiv";
	$tdataReport_Exam_Slip_Indiv[".OwnerID"] = "";
	$tdataReport_Exam_Slip_Indiv[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Exam_Slip_Indiv = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Exam_Slip_Indiv["English"] = array();
	$fieldToolTipsReport_Exam_Slip_Indiv["English"] = array();
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["StudentID"] = "Student";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["StudentID"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["Name"] = "Name";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["Name"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["MatricNo"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["BatchID"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["Intake"] = "Year";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["Intake"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["Sponsor"] = "Financial Aid";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["Sponsor"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["DipID"] = "Course";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["DipID"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["Option"] = "Semester";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["Option"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["s2"] = "S2";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["s2"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["s3"] = "S3";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["s3"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["s4"] = "S4";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["s4"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["s5"] = "S5";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["s5"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["s6"] = "S6";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["s6"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["s7"] = "S7";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["s7"] = "";
	$fieldLabelsReport_Exam_Slip_Indiv["English"]["s8"] = "S8";
	$fieldToolTipsReport_Exam_Slip_Indiv["English"]["s8"] = "";
	if (count($fieldToolTipsReport_Exam_Slip_Indiv["English"]))
		$tdataReport_Exam_Slip_Indiv[".isUseToolTips"] = true;
}
	
	



$tdataReport_Exam_Slip_Indiv[".shortTableName"] = "Report_Exam_Slip_Indiv";
$tdataReport_Exam_Slip_Indiv[".nSecOptions"] = 0;
$tdataReport_Exam_Slip_Indiv[".recsPerRowList"] = 1;
$tdataReport_Exam_Slip_Indiv[".mainTableOwnerID"] = "";
$tdataReport_Exam_Slip_Indiv[".moveNext"] = 1;
$tdataReport_Exam_Slip_Indiv[".nType"] = 1;

$tdataReport_Exam_Slip_Indiv[".strOriginalTableName"] = "student_info";




$tdataReport_Exam_Slip_Indiv[".showAddInPopup"] = false;

$tdataReport_Exam_Slip_Indiv[".showEditInPopup"] = false;

$tdataReport_Exam_Slip_Indiv[".showViewInPopup"] = false;

$tdataReport_Exam_Slip_Indiv[".fieldsForRegister"] = array();
	
$tdataReport_Exam_Slip_Indiv[".listAjax"] = false;

	$tdataReport_Exam_Slip_Indiv[".audit"] = true;

	$tdataReport_Exam_Slip_Indiv[".locking"] = false;

$tdataReport_Exam_Slip_Indiv[".listIcons"] = true;




$tdataReport_Exam_Slip_Indiv[".showSimpleSearchOptions"] = true;

$tdataReport_Exam_Slip_Indiv[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Exam_Slip_Indiv[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Exam_Slip_Indiv[".isUseAjaxSuggest"] = true;

$tdataReport_Exam_Slip_Indiv[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Exam_Slip_Indiv[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Exam_Slip_Indiv[".isUseTimeForSearch"] = false;




$tdataReport_Exam_Slip_Indiv[".allSearchFields"] = array();

$tdataReport_Exam_Slip_Indiv[".allSearchFields"][] = "Name";
$tdataReport_Exam_Slip_Indiv[".allSearchFields"][] = "MatricNo";
$tdataReport_Exam_Slip_Indiv[".allSearchFields"][] = "Intake";
$tdataReport_Exam_Slip_Indiv[".allSearchFields"][] = "DipID";
$tdataReport_Exam_Slip_Indiv[".allSearchFields"][] = "BatchID";
$tdataReport_Exam_Slip_Indiv[".allSearchFields"][] = "Sponsor";

$tdataReport_Exam_Slip_Indiv[".googleLikeFields"][] = "Name";
$tdataReport_Exam_Slip_Indiv[".googleLikeFields"][] = "MatricNo";
$tdataReport_Exam_Slip_Indiv[".googleLikeFields"][] = "Option";
$tdataReport_Exam_Slip_Indiv[".googleLikeFields"][] = "s2";
$tdataReport_Exam_Slip_Indiv[".googleLikeFields"][] = "s3";
$tdataReport_Exam_Slip_Indiv[".googleLikeFields"][] = "s4";
$tdataReport_Exam_Slip_Indiv[".googleLikeFields"][] = "s5";
$tdataReport_Exam_Slip_Indiv[".googleLikeFields"][] = "s6";
$tdataReport_Exam_Slip_Indiv[".googleLikeFields"][] = "s7";
$tdataReport_Exam_Slip_Indiv[".googleLikeFields"][] = "s8";

$tdataReport_Exam_Slip_Indiv[".panelSearchFields"][] = "Name";
$tdataReport_Exam_Slip_Indiv[".panelSearchFields"][] = "MatricNo";
$tdataReport_Exam_Slip_Indiv[".panelSearchFields"][] = "DipID";
$tdataReport_Exam_Slip_Indiv[".panelSearchFields"][] = "BatchID";
$tdataReport_Exam_Slip_Indiv[".panelSearchFields"][] = "Sponsor";

$tdataReport_Exam_Slip_Indiv[".advSearchFields"][] = "Name";
$tdataReport_Exam_Slip_Indiv[".advSearchFields"][] = "MatricNo";
$tdataReport_Exam_Slip_Indiv[".advSearchFields"][] = "Intake";
$tdataReport_Exam_Slip_Indiv[".advSearchFields"][] = "DipID";
$tdataReport_Exam_Slip_Indiv[".advSearchFields"][] = "BatchID";
$tdataReport_Exam_Slip_Indiv[".advSearchFields"][] = "Sponsor";

$tdataReport_Exam_Slip_Indiv[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Exam_Slip_Indiv[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Exam_Slip_Indiv[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Exam_Slip_Indiv[".orderindexes"] = array();
$tdataReport_Exam_Slip_Indiv[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "StudentID");

$tdataReport_Exam_Slip_Indiv[".sqlHead"] = "SELECT StudentID,  Name,  MatricNo,  BatchID,  Intake,  Sponsor,  DipID,  StudentID AS `Option`,  StudentID AS s2,  StudentID AS s3,  StudentID AS s4,  StudentID AS s5,  StudentID AS s6,  StudentID AS s7,  StudentID AS s8";
$tdataReport_Exam_Slip_Indiv[".sqlFrom"] = "FROM student_info";
$tdataReport_Exam_Slip_Indiv[".sqlWhereExpr"] = "(Status ='Active')";
$tdataReport_Exam_Slip_Indiv[".sqlTail"] = "";

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
	$tabFields[] = "Intake";
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
$tdataReport_Exam_Slip_Indiv[".arrEditTabs"] = $arrEditTabs;

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
	$tabFields[] = "Intake";
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
$tdataReport_Exam_Slip_Indiv[".arrAddTabs"] = $arrAddTabs;

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
	$tabFields[] = "Intake";
	$tabFields[] = "BatchID";
	$tabFields[] = "DipID";
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
$tdataReport_Exam_Slip_Indiv[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Exam_Slip_Indiv[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Exam_Slip_Indiv[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Exam_Slip_Indiv = array();
$tableKeysReport_Exam_Slip_Indiv[] = "StudentID";
$tdataReport_Exam_Slip_Indiv[".Keys"] = $tableKeysReport_Exam_Slip_Indiv;

$tdataReport_Exam_Slip_Indiv[".listFields"] = array();
$tdataReport_Exam_Slip_Indiv[".listFields"][] = "Name";
$tdataReport_Exam_Slip_Indiv[".listFields"][] = "MatricNo";
$tdataReport_Exam_Slip_Indiv[".listFields"][] = "BatchID";
$tdataReport_Exam_Slip_Indiv[".listFields"][] = "Option";
$tdataReport_Exam_Slip_Indiv[".listFields"][] = "s2";
$tdataReport_Exam_Slip_Indiv[".listFields"][] = "s3";
$tdataReport_Exam_Slip_Indiv[".listFields"][] = "s4";
$tdataReport_Exam_Slip_Indiv[".listFields"][] = "s5";
$tdataReport_Exam_Slip_Indiv[".listFields"][] = "s6";
$tdataReport_Exam_Slip_Indiv[".listFields"][] = "s7";
$tdataReport_Exam_Slip_Indiv[".listFields"][] = "s8";

$tdataReport_Exam_Slip_Indiv[".viewFields"] = array();

$tdataReport_Exam_Slip_Indiv[".addFields"] = array();

$tdataReport_Exam_Slip_Indiv[".inlineAddFields"] = array();

$tdataReport_Exam_Slip_Indiv[".editFields"] = array();

$tdataReport_Exam_Slip_Indiv[".inlineEditFields"] = array();

$tdataReport_Exam_Slip_Indiv[".exportFields"] = array();

$tdataReport_Exam_Slip_Indiv[".printFields"] = array();

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
		$fdata["FullName"] = "StudentID";
	
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["StudentID"] = $fdata;
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["Name"] = $fdata;
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
	
		
		
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "MatricNo";
	
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["MatricNo"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["BatchID"] = $fdata;
//	Intake
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Intake";
	$fdata["GoodName"] = "Intake";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Year"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Intake"; 
		$fdata["FullName"] = "Intake";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		$vdata["LinkPrefix"] ="files/"; 
	
		
			
		
		
		
		
		
		
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
	
		$edata["LookupWhere"] = "Class=7";
	
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["Intake"] = $fdata;
//	Sponsor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Sponsor";
	$fdata["GoodName"] = "Sponsor";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Financial Aid"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["Sponsor"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["DipID"] = $fdata;
//	Option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Option";
	$fdata["GoodName"] = "Option";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Semester"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["Option"] = $fdata;
//	s2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "s2";
	$fdata["GoodName"] = "s2";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S2"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["s2"] = $fdata;
//	s3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "s3";
	$fdata["GoodName"] = "s3";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S3"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["s3"] = $fdata;
//	s4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s4";
	$fdata["GoodName"] = "s4";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S4"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["s4"] = $fdata;
//	s5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "s5";
	$fdata["GoodName"] = "s5";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S5"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["s5"] = $fdata;
//	s6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "s6";
	$fdata["GoodName"] = "s6";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S6"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["s6"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S7"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["s7"] = $fdata;
//	s8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "s8";
	$fdata["GoodName"] = "s8";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "S8"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataReport_Exam_Slip_Indiv["s8"] = $fdata;

	
$tables_data["Report_Exam_Slip_Indiv"]=&$tdataReport_Exam_Slip_Indiv;
$field_labels["Report_Exam_Slip_Indiv"] = &$fieldLabelsReport_Exam_Slip_Indiv;
$fieldToolTips["Report_Exam_Slip_Indiv"] = &$fieldToolTipsReport_Exam_Slip_Indiv;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Exam_Slip_Indiv"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Exam_Slip_Indiv"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Exam_Slip_Indiv()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "StudentID,  Name,  MatricNo,  BatchID,  Intake,  Sponsor,  DipID,  StudentID AS `Option`,  StudentID AS s2,  StudentID AS s3,  StudentID AS s4,  StudentID AS s5,  StudentID AS s6,  StudentID AS s7,  StudentID AS s8";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "(Status ='Active')";
$proto0["m_strOrderBy"] = "ORDER BY StudentID DESC";
$proto0["m_strTail"] = "";
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
	"m_strName" => "Intake",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Sponsor",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Option";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "s2";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "s3";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "s4";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "s5";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "s6";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "s7";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "s8";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "student_info";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "StudentID";
$proto36["m_columns"][] = "Name";
$proto36["m_columns"][] = "ICNO";
$proto36["m_columns"][] = "DOB";
$proto36["m_columns"][] = "MatricNo";
$proto36["m_columns"][] = "Nogilir";
$proto36["m_columns"][] = "Email";
$proto36["m_columns"][] = "Access";
$proto36["m_columns"][] = "Passw";
$proto36["m_columns"][] = "Type";
$proto36["m_columns"][] = "BranchID";
$proto36["m_columns"][] = "DateJoin";
$proto36["m_columns"][] = "Dateout";
$proto36["m_columns"][] = "Gender";
$proto36["m_columns"][] = "married";
$proto36["m_columns"][] = "Address1";
$proto36["m_columns"][] = "City";
$proto36["m_columns"][] = "Postcode";
$proto36["m_columns"][] = "StateID";
$proto36["m_columns"][] = "Country";
$proto36["m_columns"][] = "HomeTelephone";
$proto36["m_columns"][] = "MobileTelephone";
$proto36["m_columns"][] = "Nationality";
$proto36["m_columns"][] = "Passport";
$proto36["m_columns"][] = "BatchID";
$proto36["m_columns"][] = "Intake";
$proto36["m_columns"][] = "Sponsor";
$proto36["m_columns"][] = "DipID";
$proto36["m_columns"][] = "Status";
$proto36["m_columns"][] = "Disability";
$proto36["m_columns"][] = "MedicalCondition";
$proto36["m_columns"][] = "race";
$proto36["m_columns"][] = "Religion";
$proto36["m_columns"][] = "Class";
$proto36["m_columns"][] = "Intake_Category";
$proto36["m_columns"][] = "f1_name";
$proto36["m_columns"][] = "f1_tel";
$proto36["m_columns"][] = "f1_relation";
$proto36["m_columns"][] = "f2_name";
$proto36["m_columns"][] = "f2_tel";
$proto36["m_columns"][] = "f2_relation";
$proto36["m_columns"][] = "blood";
$proto36["m_columns"][] = "hostel_in";
$proto36["m_columns"][] = "job";
$proto36["m_columns"][] = "al_certificate";
$proto36["m_columns"][] = "al_license";
$proto36["m_columns"][] = "f_name";
$proto36["m_columns"][] = "f_tel";
$proto36["m_columns"][] = "f_ic";
$proto36["m_columns"][] = "f_job";
$proto36["m_columns"][] = "f_address";
$proto36["m_columns"][] = "m_name";
$proto36["m_columns"][] = "m_tel";
$proto36["m_columns"][] = "m_ic";
$proto36["m_columns"][] = "m_job";
$proto36["m_columns"][] = "m_address";
$proto36["m_columns"][] = "qua_year";
$proto36["m_columns"][] = "qua_level";
$proto36["m_columns"][] = "qua_result";
$proto36["m_columns"][] = "qua_place";
$proto36["m_columns"][] = "photo";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_alias"] = "";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = "0";
$proto37["m_inBrackets"] = "0";
$proto37["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto39["m_column"]=$obj;
$proto39["m_bAsc"] = 0;
$proto39["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto39);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Exam_Slip_Indiv = createSqlQuery_Report_Exam_Slip_Indiv();
															$tdataReport_Exam_Slip_Indiv[".sqlquery"] = $queryData_Report_Exam_Slip_Indiv;

include_once(getabspath("include/Report_Exam_Slip_Indiv_events.php"));
$tableEvents["Report_Exam_Slip_Indiv"] = new eventclass_Report_Exam_Slip_Indiv;
$tdataReport_Exam_Slip_Indiv[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Exam_Slip_Indiv");

?>