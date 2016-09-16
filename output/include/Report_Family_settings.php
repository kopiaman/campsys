<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Family = array();
	$tdataReport_Family[".NumberOfChars"] = 80; 
	$tdataReport_Family[".ShortName"] = "Report_Family";
	$tdataReport_Family[".OwnerID"] = "";
	$tdataReport_Family[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Family = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Family["English"] = array();
	$fieldToolTipsReport_Family["English"] = array();
	$fieldLabelsReport_Family["English"]["StudentID"] = "Student";
	$fieldToolTipsReport_Family["English"]["StudentID"] = "";
	$fieldLabelsReport_Family["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsReport_Family["English"]["MatricNo"] = "";
	$fieldLabelsReport_Family["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Family["English"]["BatchID"] = "";
	$fieldLabelsReport_Family["English"]["DipID"] = "Program ";
	$fieldToolTipsReport_Family["English"]["DipID"] = "";
	$fieldLabelsReport_Family["English"]["Class"] = "Class";
	$fieldToolTipsReport_Family["English"]["Class"] = "";
	$fieldLabelsReport_Family["English"]["Address1"] = "Address";
	$fieldToolTipsReport_Family["English"]["Address1"] = "";
	$fieldLabelsReport_Family["English"]["father"] = "Father";
	$fieldToolTipsReport_Family["English"]["father"] = "";
	$fieldLabelsReport_Family["English"]["father_tel"] = "Father Tel";
	$fieldToolTipsReport_Family["English"]["father_tel"] = "";
	$fieldLabelsReport_Family["English"]["mother"] = "Mother";
	$fieldToolTipsReport_Family["English"]["mother"] = "";
	$fieldLabelsReport_Family["English"]["mother_tel"] = "Mother Tel";
	$fieldToolTipsReport_Family["English"]["mother_tel"] = "";
	if (count($fieldToolTipsReport_Family["English"]))
		$tdataReport_Family[".isUseToolTips"] = true;
}
	
	



$tdataReport_Family[".shortTableName"] = "Report_Family";
$tdataReport_Family[".nSecOptions"] = 0;
$tdataReport_Family[".recsPerRowList"] = 1;
$tdataReport_Family[".mainTableOwnerID"] = "";
$tdataReport_Family[".moveNext"] = 1;
$tdataReport_Family[".nType"] = 1;

$tdataReport_Family[".strOriginalTableName"] = "student_info";




$tdataReport_Family[".showAddInPopup"] = false;

$tdataReport_Family[".showEditInPopup"] = false;

$tdataReport_Family[".showViewInPopup"] = false;

$tdataReport_Family[".fieldsForRegister"] = array();
	
$tdataReport_Family[".listAjax"] = false;

	$tdataReport_Family[".audit"] = true;

	$tdataReport_Family[".locking"] = false;

$tdataReport_Family[".listIcons"] = true;
$tdataReport_Family[".inlineEdit"] = true;

$tdataReport_Family[".exportTo"] = true;


$tdataReport_Family[".delete"] = true;

$tdataReport_Family[".showSimpleSearchOptions"] = true;

$tdataReport_Family[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Family[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Family[".isUseAjaxSuggest"] = true;

$tdataReport_Family[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Family[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Family[".isUseTimeForSearch"] = false;




$tdataReport_Family[".allSearchFields"] = array();

$tdataReport_Family[".allSearchFields"][] = "DipID";
$tdataReport_Family[".allSearchFields"][] = "Class";
$tdataReport_Family[".allSearchFields"][] = "StudentID";
$tdataReport_Family[".allSearchFields"][] = "MatricNo";
$tdataReport_Family[".allSearchFields"][] = "BatchID";
$tdataReport_Family[".allSearchFields"][] = "father";
$tdataReport_Family[".allSearchFields"][] = "father_tel";
$tdataReport_Family[".allSearchFields"][] = "mother";
$tdataReport_Family[".allSearchFields"][] = "mother_tel";
$tdataReport_Family[".allSearchFields"][] = "Address1";

$tdataReport_Family[".googleLikeFields"][] = "MatricNo";
$tdataReport_Family[".googleLikeFields"][] = "father";
$tdataReport_Family[".googleLikeFields"][] = "father_tel";
$tdataReport_Family[".googleLikeFields"][] = "mother";
$tdataReport_Family[".googleLikeFields"][] = "mother_tel";
$tdataReport_Family[".googleLikeFields"][] = "Address1";

$tdataReport_Family[".panelSearchFields"][] = "MatricNo";
$tdataReport_Family[".panelSearchFields"][] = "BatchID";

$tdataReport_Family[".advSearchFields"][] = "DipID";
$tdataReport_Family[".advSearchFields"][] = "Class";
$tdataReport_Family[".advSearchFields"][] = "StudentID";
$tdataReport_Family[".advSearchFields"][] = "MatricNo";
$tdataReport_Family[".advSearchFields"][] = "BatchID";
$tdataReport_Family[".advSearchFields"][] = "father";
$tdataReport_Family[".advSearchFields"][] = "father_tel";
$tdataReport_Family[".advSearchFields"][] = "mother";
$tdataReport_Family[".advSearchFields"][] = "mother_tel";
$tdataReport_Family[".advSearchFields"][] = "Address1";

$tdataReport_Family[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Family[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Family[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Family[".orderindexes"] = array();
$tdataReport_Family[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "StudentID");

$tdataReport_Family[".sqlHead"] = "SELECT StudentID,  MatricNo,  f_name AS father,  f_tel AS father_tel,  m_name AS mother,  m_tel AS mother_tel,  BatchID,  DipID,  `Class`,  Address1";
$tdataReport_Family[".sqlFrom"] = "FROM student_info";
$tdataReport_Family[".sqlWhereExpr"] = "(Status ='Active')";
$tdataReport_Family[".sqlTail"] = "";

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
$tdataReport_Family[".arrEditTabs"] = $arrEditTabs;

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
$tdataReport_Family[".arrAddTabs"] = $arrAddTabs;

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
$tdataReport_Family[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Family[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Family[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Family = array();
$tableKeysReport_Family[] = "StudentID";
$tdataReport_Family[".Keys"] = $tableKeysReport_Family;

$tdataReport_Family[".listFields"] = array();
$tdataReport_Family[".listFields"][] = "StudentID";
$tdataReport_Family[".listFields"][] = "MatricNo";
$tdataReport_Family[".listFields"][] = "DipID";
$tdataReport_Family[".listFields"][] = "BatchID";
$tdataReport_Family[".listFields"][] = "father";
$tdataReport_Family[".listFields"][] = "father_tel";
$tdataReport_Family[".listFields"][] = "mother";
$tdataReport_Family[".listFields"][] = "mother_tel";
$tdataReport_Family[".listFields"][] = "Address1";

$tdataReport_Family[".viewFields"] = array();

$tdataReport_Family[".addFields"] = array();

$tdataReport_Family[".inlineAddFields"] = array();

$tdataReport_Family[".editFields"] = array();

$tdataReport_Family[".inlineEditFields"] = array();
$tdataReport_Family[".inlineEditFields"][] = "father";
$tdataReport_Family[".inlineEditFields"][] = "father_tel";
$tdataReport_Family[".inlineEditFields"][] = "mother";
$tdataReport_Family[".inlineEditFields"][] = "mother_tel";
$tdataReport_Family[".inlineEditFields"][] = "Address1";

$tdataReport_Family[".exportFields"] = array();
$tdataReport_Family[".exportFields"][] = "StudentID";
$tdataReport_Family[".exportFields"][] = "MatricNo";
$tdataReport_Family[".exportFields"][] = "DipID";
$tdataReport_Family[".exportFields"][] = "BatchID";
$tdataReport_Family[".exportFields"][] = "Class";
$tdataReport_Family[".exportFields"][] = "father";
$tdataReport_Family[".exportFields"][] = "father_tel";
$tdataReport_Family[".exportFields"][] = "mother";
$tdataReport_Family[".exportFields"][] = "mother_tel";
$tdataReport_Family[".exportFields"][] = "Address1";

$tdataReport_Family[".printFields"] = array();

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
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
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
				
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
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
	
		
		
	$tdataReport_Family["StudentID"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Matric No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Family["MatricNo"] = $fdata;
//	father
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "father";
	$fdata["GoodName"] = "father";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Father"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f_name"; 
		$fdata["FullName"] = "f_name";
	
		
		
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
	
		
		
	$tdataReport_Family["father"] = $fdata;
//	father_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "father_tel";
	$fdata["GoodName"] = "father_tel";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Father Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "f_tel"; 
		$fdata["FullName"] = "f_tel";
	
		
		
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
	
		
		
	$tdataReport_Family["father_tel"] = $fdata;
//	mother
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mother";
	$fdata["GoodName"] = "mother";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Mother"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "m_name"; 
		$fdata["FullName"] = "m_name";
	
		
		
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
	
		
		
	$tdataReport_Family["mother"] = $fdata;
//	mother_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mother_tel";
	$fdata["GoodName"] = "mother_tel";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Mother Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "m_tel"; 
		$fdata["FullName"] = "m_tel";
	
		
		
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
	
		
		
	$tdataReport_Family["mother_tel"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
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
			$edata["EditParams"].= " maxlength=3";
	
		$edata["inputStyle"] = " width:40px;";
	$edata["controlWidth"] = 40;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Family["BatchID"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Program "; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
				
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
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
	
		
		
	$tdataReport_Family["DipID"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "`Class`";
	
		
		
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
	
		
		
	$tdataReport_Family["Class"] = $fdata;
//	Address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Address1";
	$fdata["GoodName"] = "Address1";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Address"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Address1"; 
		$fdata["FullName"] = "Address1";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 35;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Family["Address1"] = $fdata;

	
$tables_data["Report_Family"]=&$tdataReport_Family;
$field_labels["Report_Family"] = &$fieldLabelsReport_Family;
$fieldToolTips["Report_Family"] = &$fieldToolTipsReport_Family;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Family"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Family"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Family()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "StudentID,  MatricNo,  f_name AS father,  f_tel AS father_tel,  m_name AS mother,  m_tel AS mother_tel,  BatchID,  DipID,  `Class`,  Address1";
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
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "f_name",
	"m_strTable" => "student_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "father";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "f_tel",
	"m_strTable" => "student_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "father_tel";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "m_name",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "mother";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "m_tel",
	"m_strTable" => "student_info"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "mother_tel";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Address1",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "student_info";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "StudentID";
$proto26["m_columns"][] = "Name";
$proto26["m_columns"][] = "ICNO";
$proto26["m_columns"][] = "DOB";
$proto26["m_columns"][] = "MatricNo";
$proto26["m_columns"][] = "Nogilir";
$proto26["m_columns"][] = "Email";
$proto26["m_columns"][] = "Access";
$proto26["m_columns"][] = "Passw";
$proto26["m_columns"][] = "Type";
$proto26["m_columns"][] = "BranchID";
$proto26["m_columns"][] = "DateJoin";
$proto26["m_columns"][] = "Dateout";
$proto26["m_columns"][] = "Gender";
$proto26["m_columns"][] = "married";
$proto26["m_columns"][] = "Address1";
$proto26["m_columns"][] = "City";
$proto26["m_columns"][] = "Postcode";
$proto26["m_columns"][] = "StateID";
$proto26["m_columns"][] = "Country";
$proto26["m_columns"][] = "HomeTelephone";
$proto26["m_columns"][] = "MobileTelephone";
$proto26["m_columns"][] = "Nationality";
$proto26["m_columns"][] = "Passport";
$proto26["m_columns"][] = "BatchID";
$proto26["m_columns"][] = "Intake";
$proto26["m_columns"][] = "Sponsor";
$proto26["m_columns"][] = "DipID";
$proto26["m_columns"][] = "Status";
$proto26["m_columns"][] = "Disability";
$proto26["m_columns"][] = "MedicalCondition";
$proto26["m_columns"][] = "race";
$proto26["m_columns"][] = "Religion";
$proto26["m_columns"][] = "Class";
$proto26["m_columns"][] = "Intake_Category";
$proto26["m_columns"][] = "f1_name";
$proto26["m_columns"][] = "f1_tel";
$proto26["m_columns"][] = "f1_relation";
$proto26["m_columns"][] = "f2_name";
$proto26["m_columns"][] = "f2_tel";
$proto26["m_columns"][] = "f2_relation";
$proto26["m_columns"][] = "blood";
$proto26["m_columns"][] = "hostel_in";
$proto26["m_columns"][] = "job";
$proto26["m_columns"][] = "al_certificate";
$proto26["m_columns"][] = "al_license";
$proto26["m_columns"][] = "f_name";
$proto26["m_columns"][] = "f_tel";
$proto26["m_columns"][] = "f_ic";
$proto26["m_columns"][] = "f_job";
$proto26["m_columns"][] = "f_address";
$proto26["m_columns"][] = "m_name";
$proto26["m_columns"][] = "m_tel";
$proto26["m_columns"][] = "m_ic";
$proto26["m_columns"][] = "m_job";
$proto26["m_columns"][] = "m_address";
$proto26["m_columns"][] = "qua_year";
$proto26["m_columns"][] = "qua_level";
$proto26["m_columns"][] = "qua_result";
$proto26["m_columns"][] = "qua_place";
$proto26["m_columns"][] = "photo";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 0;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Family = createSqlQuery_Report_Family();
										$tdataReport_Family[".sqlquery"] = $queryData_Report_Family;

include_once(getabspath("include/Report_Family_events.php"));
$tableEvents["Report_Family"] = new eventclass_Report_Family;
$tdataReport_Family[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Family");

?>