<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Exam_Result_Batch_Whole = array();
	$tdataReport_Exam_Result_Batch_Whole[".NumberOfChars"] = 80; 
	$tdataReport_Exam_Result_Batch_Whole[".ShortName"] = "Report_Exam_Result_Batch_Whole";
	$tdataReport_Exam_Result_Batch_Whole[".OwnerID"] = "";
	$tdataReport_Exam_Result_Batch_Whole[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Exam_Result_Batch_Whole = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Exam_Result_Batch_Whole["English"] = array();
	$fieldToolTipsReport_Exam_Result_Batch_Whole["English"] = array();
	$fieldLabelsReport_Exam_Result_Batch_Whole["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Exam_Result_Batch_Whole["English"]["BatchID"] = "";
	$fieldLabelsReport_Exam_Result_Batch_Whole["English"]["DipID"] = "Course";
	$fieldToolTipsReport_Exam_Result_Batch_Whole["English"]["DipID"] = "";
	$fieldLabelsReport_Exam_Result_Batch_Whole["English"]["Option"] = "Option";
	$fieldToolTipsReport_Exam_Result_Batch_Whole["English"]["Option"] = "";
	if (count($fieldToolTipsReport_Exam_Result_Batch_Whole["English"]))
		$tdataReport_Exam_Result_Batch_Whole[".isUseToolTips"] = true;
}
	
	



$tdataReport_Exam_Result_Batch_Whole[".shortTableName"] = "Report_Exam_Result_Batch_Whole";
$tdataReport_Exam_Result_Batch_Whole[".nSecOptions"] = 0;
$tdataReport_Exam_Result_Batch_Whole[".recsPerRowList"] = 1;
$tdataReport_Exam_Result_Batch_Whole[".mainTableOwnerID"] = "";
$tdataReport_Exam_Result_Batch_Whole[".moveNext"] = 1;
$tdataReport_Exam_Result_Batch_Whole[".nType"] = 1;

$tdataReport_Exam_Result_Batch_Whole[".strOriginalTableName"] = "student_info";




$tdataReport_Exam_Result_Batch_Whole[".showAddInPopup"] = false;

$tdataReport_Exam_Result_Batch_Whole[".showEditInPopup"] = false;

$tdataReport_Exam_Result_Batch_Whole[".showViewInPopup"] = false;

$tdataReport_Exam_Result_Batch_Whole[".fieldsForRegister"] = array();
	
$tdataReport_Exam_Result_Batch_Whole[".listAjax"] = false;

	$tdataReport_Exam_Result_Batch_Whole[".audit"] = true;

	$tdataReport_Exam_Result_Batch_Whole[".locking"] = false;

$tdataReport_Exam_Result_Batch_Whole[".listIcons"] = true;




$tdataReport_Exam_Result_Batch_Whole[".showSimpleSearchOptions"] = true;

$tdataReport_Exam_Result_Batch_Whole[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Exam_Result_Batch_Whole[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Exam_Result_Batch_Whole[".isUseAjaxSuggest"] = true;

$tdataReport_Exam_Result_Batch_Whole[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Exam_Result_Batch_Whole[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Exam_Result_Batch_Whole[".isUseTimeForSearch"] = false;




$tdataReport_Exam_Result_Batch_Whole[".allSearchFields"] = array();

$tdataReport_Exam_Result_Batch_Whole[".allSearchFields"][] = "DipID";
$tdataReport_Exam_Result_Batch_Whole[".allSearchFields"][] = "BatchID";

$tdataReport_Exam_Result_Batch_Whole[".googleLikeFields"][] = "Option";

$tdataReport_Exam_Result_Batch_Whole[".panelSearchFields"][] = "DipID";
$tdataReport_Exam_Result_Batch_Whole[".panelSearchFields"][] = "BatchID";

$tdataReport_Exam_Result_Batch_Whole[".advSearchFields"][] = "DipID";
$tdataReport_Exam_Result_Batch_Whole[".advSearchFields"][] = "BatchID";

$tdataReport_Exam_Result_Batch_Whole[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Exam_Result_Batch_Whole[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY DipID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Exam_Result_Batch_Whole[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Exam_Result_Batch_Whole[".orderindexes"] = array();
$tdataReport_Exam_Result_Batch_Whole[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "DipID");

$tdataReport_Exam_Result_Batch_Whole[".sqlHead"] = "SELECT DipID,  BatchID,  DipID AS `Option`";
$tdataReport_Exam_Result_Batch_Whole[".sqlFrom"] = "FROM student_info";
$tdataReport_Exam_Result_Batch_Whole[".sqlWhereExpr"] = "(Status ='Active')";
$tdataReport_Exam_Result_Batch_Whole[".sqlTail"] = "GROUP BY DipID, BatchID";

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
$tdataReport_Exam_Result_Batch_Whole[".arrEditTabs"] = $arrEditTabs;

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
$tdataReport_Exam_Result_Batch_Whole[".arrAddTabs"] = $arrAddTabs;

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
$tdataReport_Exam_Result_Batch_Whole[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Exam_Result_Batch_Whole[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Exam_Result_Batch_Whole[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Exam_Result_Batch_Whole = array();
$tdataReport_Exam_Result_Batch_Whole[".Keys"] = $tableKeysReport_Exam_Result_Batch_Whole;

$tdataReport_Exam_Result_Batch_Whole[".listFields"] = array();
$tdataReport_Exam_Result_Batch_Whole[".listFields"][] = "DipID";
$tdataReport_Exam_Result_Batch_Whole[".listFields"][] = "BatchID";
$tdataReport_Exam_Result_Batch_Whole[".listFields"][] = "Option";

$tdataReport_Exam_Result_Batch_Whole[".viewFields"] = array();

$tdataReport_Exam_Result_Batch_Whole[".addFields"] = array();

$tdataReport_Exam_Result_Batch_Whole[".inlineAddFields"] = array();

$tdataReport_Exam_Result_Batch_Whole[".editFields"] = array();

$tdataReport_Exam_Result_Batch_Whole[".inlineEditFields"] = array();

$tdataReport_Exam_Result_Batch_Whole[".exportFields"] = array();

$tdataReport_Exam_Result_Batch_Whole[".printFields"] = array();

//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
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
	$edata["DisplayField"] = "shortcut_name";
	
		
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
	
		
		
	$tdataReport_Exam_Result_Batch_Whole["DipID"] = $fdata;
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
	
		
		
	$tdataReport_Exam_Result_Batch_Whole["BatchID"] = $fdata;
//	Option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Option";
	$fdata["GoodName"] = "Option";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Option"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
	
		
		
	$tdataReport_Exam_Result_Batch_Whole["Option"] = $fdata;

	
$tables_data["Report_Exam_Result_Batch_Whole"]=&$tdataReport_Exam_Result_Batch_Whole;
$field_labels["Report_Exam_Result_Batch_Whole"] = &$fieldLabelsReport_Exam_Result_Batch_Whole;
$fieldToolTips["Report_Exam_Result_Batch_Whole"] = &$fieldToolTipsReport_Exam_Result_Batch_Whole;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Exam_Result_Batch_Whole"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Exam_Result_Batch_Whole"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Exam_Result_Batch_Whole()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DipID,  BatchID,  DipID AS `Option`";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "(Status ='Active')";
$proto0["m_strOrderBy"] = "ORDER BY DipID";
$proto0["m_strTail"] = "GROUP BY DipID, BatchID";
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
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
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
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Option";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "student_info";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "StudentID";
$proto12["m_columns"][] = "Name";
$proto12["m_columns"][] = "ICNO";
$proto12["m_columns"][] = "DOB";
$proto12["m_columns"][] = "MatricNo";
$proto12["m_columns"][] = "Nogilir";
$proto12["m_columns"][] = "Email";
$proto12["m_columns"][] = "Access";
$proto12["m_columns"][] = "Passw";
$proto12["m_columns"][] = "Type";
$proto12["m_columns"][] = "BranchID";
$proto12["m_columns"][] = "DateJoin";
$proto12["m_columns"][] = "Dateout";
$proto12["m_columns"][] = "Gender";
$proto12["m_columns"][] = "married";
$proto12["m_columns"][] = "Address1";
$proto12["m_columns"][] = "City";
$proto12["m_columns"][] = "Postcode";
$proto12["m_columns"][] = "StateID";
$proto12["m_columns"][] = "Country";
$proto12["m_columns"][] = "HomeTelephone";
$proto12["m_columns"][] = "MobileTelephone";
$proto12["m_columns"][] = "Nationality";
$proto12["m_columns"][] = "Passport";
$proto12["m_columns"][] = "BatchID";
$proto12["m_columns"][] = "Intake";
$proto12["m_columns"][] = "Sponsor";
$proto12["m_columns"][] = "DipID";
$proto12["m_columns"][] = "Status";
$proto12["m_columns"][] = "Disability";
$proto12["m_columns"][] = "MedicalCondition";
$proto12["m_columns"][] = "race";
$proto12["m_columns"][] = "Religion";
$proto12["m_columns"][] = "Class";
$proto12["m_columns"][] = "Intake_Category";
$proto12["m_columns"][] = "f1_name";
$proto12["m_columns"][] = "f1_tel";
$proto12["m_columns"][] = "f1_relation";
$proto12["m_columns"][] = "f2_name";
$proto12["m_columns"][] = "f2_tel";
$proto12["m_columns"][] = "f2_relation";
$proto12["m_columns"][] = "blood";
$proto12["m_columns"][] = "hostel_in";
$proto12["m_columns"][] = "job";
$proto12["m_columns"][] = "al_certificate";
$proto12["m_columns"][] = "al_license";
$proto12["m_columns"][] = "f_name";
$proto12["m_columns"][] = "f_tel";
$proto12["m_columns"][] = "f_ic";
$proto12["m_columns"][] = "f_job";
$proto12["m_columns"][] = "f_address";
$proto12["m_columns"][] = "m_name";
$proto12["m_columns"][] = "m_tel";
$proto12["m_columns"][] = "m_ic";
$proto12["m_columns"][] = "m_job";
$proto12["m_columns"][] = "m_address";
$proto12["m_columns"][] = "qua_year";
$proto12["m_columns"][] = "qua_level";
$proto12["m_columns"][] = "qua_result";
$proto12["m_columns"][] = "qua_place";
$proto12["m_columns"][] = "photo";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto15["m_column"]=$obj;
$obj = new SQLGroupByItem($proto15);

$proto0["m_groupby"][]=$obj;
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto19["m_column"]=$obj;
$proto19["m_bAsc"] = 1;
$proto19["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto19);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Exam_Result_Batch_Whole = createSqlQuery_Report_Exam_Result_Batch_Whole();
			$tdataReport_Exam_Result_Batch_Whole[".sqlquery"] = $queryData_Report_Exam_Result_Batch_Whole;

include_once(getabspath("include/Report_Exam_Result_Batch_Whole_events.php"));
$tableEvents["Report_Exam_Result_Batch_Whole"] = new eventclass_Report_Exam_Result_Batch_Whole;
$tdataReport_Exam_Result_Batch_Whole[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Exam_Result_Batch_Whole");

?>