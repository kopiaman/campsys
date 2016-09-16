<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Billing_Pending = array();
	$tdataReport_Billing_Pending[".NumberOfChars"] = 80; 
	$tdataReport_Billing_Pending[".ShortName"] = "Report_Billing_Pending";
	$tdataReport_Billing_Pending[".OwnerID"] = "";
	$tdataReport_Billing_Pending[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Billing_Pending = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Billing_Pending["English"] = array();
	$fieldToolTipsReport_Billing_Pending["English"] = array();
	$fieldLabelsReport_Billing_Pending["English"]["StudentID"] = "StudentID";
	$fieldToolTipsReport_Billing_Pending["English"]["StudentID"] = "";
	$fieldLabelsReport_Billing_Pending["English"]["Name"] = "Student Name";
	$fieldToolTipsReport_Billing_Pending["English"]["Name"] = "";
	$fieldLabelsReport_Billing_Pending["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsReport_Billing_Pending["English"]["MatricNo"] = "";
	$fieldLabelsReport_Billing_Pending["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Billing_Pending["English"]["BatchID"] = "";
	$fieldLabelsReport_Billing_Pending["English"]["Intake"] = "Intake";
	$fieldToolTipsReport_Billing_Pending["English"]["Intake"] = "";
	$fieldLabelsReport_Billing_Pending["English"]["Sponsor"] = "Financial Aid";
	$fieldToolTipsReport_Billing_Pending["English"]["Sponsor"] = "";
	$fieldLabelsReport_Billing_Pending["English"]["DipID"] = "Program ";
	$fieldToolTipsReport_Billing_Pending["English"]["DipID"] = "";
	$fieldLabelsReport_Billing_Pending["English"]["Bill"] = "Bill";
	$fieldToolTipsReport_Billing_Pending["English"]["Bill"] = "";
	$fieldLabelsReport_Billing_Pending["English"]["Paid"] = "Paid";
	$fieldToolTipsReport_Billing_Pending["English"]["Paid"] = "";
	$fieldLabelsReport_Billing_Pending["English"]["Outstanding"] = "Outstanding";
	$fieldToolTipsReport_Billing_Pending["English"]["Outstanding"] = "";
	if (count($fieldToolTipsReport_Billing_Pending["English"]))
		$tdataReport_Billing_Pending[".isUseToolTips"] = true;
}
	
	



$tdataReport_Billing_Pending[".shortTableName"] = "Report_Billing_Pending";
$tdataReport_Billing_Pending[".nSecOptions"] = 0;
$tdataReport_Billing_Pending[".recsPerRowList"] = 1;
$tdataReport_Billing_Pending[".mainTableOwnerID"] = "";
$tdataReport_Billing_Pending[".moveNext"] = 1;
$tdataReport_Billing_Pending[".nType"] = 1;

$tdataReport_Billing_Pending[".strOriginalTableName"] = "student_info";




$tdataReport_Billing_Pending[".showAddInPopup"] = false;

$tdataReport_Billing_Pending[".showEditInPopup"] = false;

$tdataReport_Billing_Pending[".showViewInPopup"] = false;

$tdataReport_Billing_Pending[".fieldsForRegister"] = array();
	
$tdataReport_Billing_Pending[".listAjax"] = false;

	$tdataReport_Billing_Pending[".audit"] = true;

	$tdataReport_Billing_Pending[".locking"] = false;

$tdataReport_Billing_Pending[".listIcons"] = true;




$tdataReport_Billing_Pending[".showSimpleSearchOptions"] = true;

$tdataReport_Billing_Pending[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Billing_Pending[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Billing_Pending[".isUseAjaxSuggest"] = true;

$tdataReport_Billing_Pending[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Billing_Pending[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Billing_Pending[".isUseTimeForSearch"] = false;




$tdataReport_Billing_Pending[".allSearchFields"] = array();

$tdataReport_Billing_Pending[".allSearchFields"][] = "Name";
$tdataReport_Billing_Pending[".allSearchFields"][] = "MatricNo";
$tdataReport_Billing_Pending[".allSearchFields"][] = "DipID";
$tdataReport_Billing_Pending[".allSearchFields"][] = "BatchID";
$tdataReport_Billing_Pending[".allSearchFields"][] = "Intake";
$tdataReport_Billing_Pending[".allSearchFields"][] = "Sponsor";

$tdataReport_Billing_Pending[".googleLikeFields"][] = "Name";
$tdataReport_Billing_Pending[".googleLikeFields"][] = "MatricNo";

$tdataReport_Billing_Pending[".panelSearchFields"][] = "Name";
$tdataReport_Billing_Pending[".panelSearchFields"][] = "MatricNo";
$tdataReport_Billing_Pending[".panelSearchFields"][] = "DipID";
$tdataReport_Billing_Pending[".panelSearchFields"][] = "BatchID";
$tdataReport_Billing_Pending[".panelSearchFields"][] = "Intake";
$tdataReport_Billing_Pending[".panelSearchFields"][] = "Sponsor";

$tdataReport_Billing_Pending[".advSearchFields"][] = "Name";
$tdataReport_Billing_Pending[".advSearchFields"][] = "MatricNo";
$tdataReport_Billing_Pending[".advSearchFields"][] = "DipID";
$tdataReport_Billing_Pending[".advSearchFields"][] = "BatchID";
$tdataReport_Billing_Pending[".advSearchFields"][] = "Intake";
$tdataReport_Billing_Pending[".advSearchFields"][] = "Sponsor";

$tdataReport_Billing_Pending[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main


$tdataReport_Billing_Pending[".totalsFields"][] = array(
	"fName" => "Bill", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataReport_Billing_Pending[".totalsFields"][] = array(
	"fName" => "Paid", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataReport_Billing_Pending[".totalsFields"][] = array(
	"fName" => "Outstanding", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdataReport_Billing_Pending[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_info.StudentID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Billing_Pending[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Billing_Pending[".orderindexes"] = array();
$tdataReport_Billing_Pending[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_info.StudentID");

$tdataReport_Billing_Pending[".sqlHead"] = "SELECT student_info.StudentID,  student_info.Name,  student_info.MatricNo,  student_info.BatchID,  student_info.Intake,  student_info.Sponsor,  student_info.DipID,  SUM(student_billing.amount) AS Bill,  SUM(student_billing.amount)-SUM(student_billing.amount_balance) AS Paid,  SUM(student_billing.amount_balance) AS Outstanding";
$tdataReport_Billing_Pending[".sqlFrom"] = "FROM student_info  LEFT OUTER JOIN student_billing ON student_info.StudentID = student_billing.studentID";
$tdataReport_Billing_Pending[".sqlWhereExpr"] = "(student_info.Status ='Active')";
$tdataReport_Billing_Pending[".sqlTail"] = "GROUP BY student_info.StudentID  HAVING SUM(student_billing.amount_balance) >0";

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
$tdataReport_Billing_Pending[".arrEditTabs"] = $arrEditTabs;

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
$tdataReport_Billing_Pending[".arrAddTabs"] = $arrAddTabs;

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
$tdataReport_Billing_Pending[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Billing_Pending[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Billing_Pending[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Billing_Pending = array();
$tableKeysReport_Billing_Pending[] = "StudentID";
$tdataReport_Billing_Pending[".Keys"] = $tableKeysReport_Billing_Pending;

$tdataReport_Billing_Pending[".listFields"] = array();
$tdataReport_Billing_Pending[".listFields"][] = "Name";
$tdataReport_Billing_Pending[".listFields"][] = "MatricNo";
$tdataReport_Billing_Pending[".listFields"][] = "BatchID";
$tdataReport_Billing_Pending[".listFields"][] = "Bill";
$tdataReport_Billing_Pending[".listFields"][] = "Paid";
$tdataReport_Billing_Pending[".listFields"][] = "Outstanding";

$tdataReport_Billing_Pending[".viewFields"] = array();

$tdataReport_Billing_Pending[".addFields"] = array();

$tdataReport_Billing_Pending[".inlineAddFields"] = array();

$tdataReport_Billing_Pending[".editFields"] = array();

$tdataReport_Billing_Pending[".inlineEditFields"] = array();

$tdataReport_Billing_Pending[".exportFields"] = array();

$tdataReport_Billing_Pending[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "StudentID"; 
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
	
		
		
	$tdataReport_Billing_Pending["StudentID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Student Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Billing_Pending["Name"] = $fdata;
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "MatricNo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "MatricNo";
	
		
	$edata["LookupTable"] = "student_info";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Billing_Pending["MatricNo"] = $fdata;
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
		$fdata["FullName"] = "student_info.BatchID";
	
		
		
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
	
		
		
	$tdataReport_Billing_Pending["BatchID"] = $fdata;
//	Intake
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Intake";
	$fdata["GoodName"] = "Intake";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Intake"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Intake"; 
		$fdata["FullName"] = "student_info.Intake";
	
		
		
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
	
		
		
	$tdataReport_Billing_Pending["Intake"] = $fdata;
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
		$fdata["FullName"] = "student_info.Sponsor";
	
		
		
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
	
		
		
	$tdataReport_Billing_Pending["Sponsor"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Program "; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "student_info.DipID";
	
		
		
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
	
		
		
	$tdataReport_Billing_Pending["DipID"] = $fdata;
//	Bill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Bill";
	$fdata["GoodName"] = "Bill";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Bill"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Bill"; 
		$fdata["FullName"] = "SUM(student_billing.amount)";
	
		
		
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
	
		
		
	$tdataReport_Billing_Pending["Bill"] = $fdata;
//	Paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Paid";
	$fdata["GoodName"] = "Paid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Paid"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Paid"; 
		$fdata["FullName"] = "SUM(student_billing.amount)-SUM(student_billing.amount_balance)";
	
		
		
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
	
		
		
	$tdataReport_Billing_Pending["Paid"] = $fdata;
//	Outstanding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Outstanding";
	$fdata["GoodName"] = "Outstanding";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Outstanding"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Outstanding"; 
		$fdata["FullName"] = "SUM(student_billing.amount_balance)";
	
		
		
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
	
		
		
	$tdataReport_Billing_Pending["Outstanding"] = $fdata;

	
$tables_data["Report-Billing Pending"]=&$tdataReport_Billing_Pending;
$field_labels["Report_Billing_Pending"] = &$fieldLabelsReport_Billing_Pending;
$fieldToolTips["Report-Billing Pending"] = &$fieldToolTipsReport_Billing_Pending;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report-Billing Pending"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report-Billing Pending"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Billing_Pending()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_info.StudentID,  student_info.Name,  student_info.MatricNo,  student_info.BatchID,  student_info.Intake,  student_info.Sponsor,  student_info.DipID,  SUM(student_billing.amount) AS Bill,  SUM(student_billing.amount)-SUM(student_billing.amount_balance) AS Paid,  SUM(student_billing.amount_balance) AS Outstanding";
$proto0["m_strFrom"] = "FROM student_info  LEFT OUTER JOIN student_billing ON student_info.StudentID = student_billing.studentID";
$proto0["m_strWhere"] = "(student_info.Status ='Active')";
$proto0["m_strOrderBy"] = "ORDER BY student_info.StudentID DESC";
$proto0["m_strTail"] = "GROUP BY student_info.StudentID  HAVING SUM(student_billing.amount_balance) >0";
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
$proto3["m_sql"] = "SUM(student_billing.amount_balance) >0";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$proto4=array();
$proto4["m_functiontype"] = "SQLF_SUM";
$proto4["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "amount_balance",
	"m_strTable" => "student_billing"
));

$proto4["m_arguments"][]=$obj;
$proto4["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto4);

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = ">0";
$proto3["m_havingmode"] = "1";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "student_info"
));

$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Intake",
	"m_strTable" => "student_info"
));

$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Sponsor",
	"m_strTable" => "student_info"
));

$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_SUM";
$proto21["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "student_billing"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto21);

$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "Bill";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(student_billing.amount)-SUM(student_billing.amount_balance)"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Paid";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_SUM";
$proto26["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "amount_balance",
	"m_strTable" => "student_billing"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto26);

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Outstanding";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "student_info";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "StudentID";
$proto29["m_columns"][] = "Name";
$proto29["m_columns"][] = "ICNO";
$proto29["m_columns"][] = "DOB";
$proto29["m_columns"][] = "MatricNo";
$proto29["m_columns"][] = "Nogilir";
$proto29["m_columns"][] = "Email";
$proto29["m_columns"][] = "Access";
$proto29["m_columns"][] = "Passw";
$proto29["m_columns"][] = "Type";
$proto29["m_columns"][] = "BranchID";
$proto29["m_columns"][] = "DateJoin";
$proto29["m_columns"][] = "Dateout";
$proto29["m_columns"][] = "Gender";
$proto29["m_columns"][] = "married";
$proto29["m_columns"][] = "Address1";
$proto29["m_columns"][] = "City";
$proto29["m_columns"][] = "Postcode";
$proto29["m_columns"][] = "StateID";
$proto29["m_columns"][] = "Country";
$proto29["m_columns"][] = "HomeTelephone";
$proto29["m_columns"][] = "MobileTelephone";
$proto29["m_columns"][] = "Nationality";
$proto29["m_columns"][] = "Passport";
$proto29["m_columns"][] = "BatchID";
$proto29["m_columns"][] = "Intake";
$proto29["m_columns"][] = "Sponsor";
$proto29["m_columns"][] = "DipID";
$proto29["m_columns"][] = "Status";
$proto29["m_columns"][] = "Disability";
$proto29["m_columns"][] = "MedicalCondition";
$proto29["m_columns"][] = "race";
$proto29["m_columns"][] = "Religion";
$proto29["m_columns"][] = "Class";
$proto29["m_columns"][] = "Intake_Category";
$proto29["m_columns"][] = "f1_name";
$proto29["m_columns"][] = "f1_tel";
$proto29["m_columns"][] = "f1_relation";
$proto29["m_columns"][] = "f2_name";
$proto29["m_columns"][] = "f2_tel";
$proto29["m_columns"][] = "f2_relation";
$proto29["m_columns"][] = "blood";
$proto29["m_columns"][] = "hostel_in";
$proto29["m_columns"][] = "job";
$proto29["m_columns"][] = "al_certificate";
$proto29["m_columns"][] = "al_license";
$proto29["m_columns"][] = "f_name";
$proto29["m_columns"][] = "f_tel";
$proto29["m_columns"][] = "f_ic";
$proto29["m_columns"][] = "f_job";
$proto29["m_columns"][] = "f_address";
$proto29["m_columns"][] = "m_name";
$proto29["m_columns"][] = "m_tel";
$proto29["m_columns"][] = "m_ic";
$proto29["m_columns"][] = "m_job";
$proto29["m_columns"][] = "m_address";
$proto29["m_columns"][] = "qua_year";
$proto29["m_columns"][] = "qua_level";
$proto29["m_columns"][] = "qua_result";
$proto29["m_columns"][] = "qua_place";
$proto29["m_columns"][] = "photo";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_alias"] = "";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = "0";
$proto30["m_inBrackets"] = "0";
$proto30["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_LEFTJOIN";
			$proto33=array();
$proto33["m_strName"] = "student_billing";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "student_bill_id";
$proto33["m_columns"][] = "proid";
$proto33["m_columns"][] = "studentID";
$proto33["m_columns"][] = "item";
$proto33["m_columns"][] = "amount";
$proto33["m_columns"][] = "status";
$proto33["m_columns"][] = "date";
$proto33["m_columns"][] = "amount_balance";
$proto33["m_columns"][] = "bill_no";
$proto33["m_columns"][] = "remark";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_alias"] = "";
$proto34=array();
$proto34["m_sql"] = "student_info.StudentID = student_billing.studentID";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= student_billing.studentID";
$proto34["m_havingmode"] = "0";
$proto34["m_inBrackets"] = "0";
$proto34["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_info"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 0;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Billing_Pending = createSqlQuery_Report_Billing_Pending();
										$tdataReport_Billing_Pending[".sqlquery"] = $queryData_Report_Billing_Pending;

include_once(getabspath("include/Report_Billing_Pending_events.php"));
$tableEvents["Report-Billing Pending"] = new eventclass_Report_Billing_Pending;
$tdataReport_Billing_Pending[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report-Billing Pending");

?>