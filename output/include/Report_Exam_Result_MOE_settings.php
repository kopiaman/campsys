<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Exam_Result_MOE = array();
	$tdataReport_Exam_Result_MOE[".NumberOfChars"] = 80; 
	$tdataReport_Exam_Result_MOE[".ShortName"] = "Report_Exam_Result_MOE";
	$tdataReport_Exam_Result_MOE[".OwnerID"] = "";
	$tdataReport_Exam_Result_MOE[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Exam_Result_MOE = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Exam_Result_MOE["English"] = array();
	$fieldToolTipsReport_Exam_Result_MOE["English"] = array();
	$fieldLabelsReport_Exam_Result_MOE["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Exam_Result_MOE["English"]["BatchID"] = "";
	$fieldLabelsReport_Exam_Result_MOE["English"]["DipID"] = "Course";
	$fieldToolTipsReport_Exam_Result_MOE["English"]["DipID"] = "";
	$fieldLabelsReport_Exam_Result_MOE["English"]["Option"] = "Semester";
	$fieldToolTipsReport_Exam_Result_MOE["English"]["Option"] = "";
	if (count($fieldToolTipsReport_Exam_Result_MOE["English"]))
		$tdataReport_Exam_Result_MOE[".isUseToolTips"] = true;
}
	
	



$tdataReport_Exam_Result_MOE[".shortTableName"] = "Report_Exam_Result_MOE";
$tdataReport_Exam_Result_MOE[".nSecOptions"] = 0;
$tdataReport_Exam_Result_MOE[".recsPerRowList"] = 1;
$tdataReport_Exam_Result_MOE[".mainTableOwnerID"] = "";
$tdataReport_Exam_Result_MOE[".moveNext"] = 1;
$tdataReport_Exam_Result_MOE[".nType"] = 1;

$tdataReport_Exam_Result_MOE[".strOriginalTableName"] = "student_info";




$tdataReport_Exam_Result_MOE[".showAddInPopup"] = false;

$tdataReport_Exam_Result_MOE[".showEditInPopup"] = false;

$tdataReport_Exam_Result_MOE[".showViewInPopup"] = false;

$tdataReport_Exam_Result_MOE[".fieldsForRegister"] = array();
	
$tdataReport_Exam_Result_MOE[".listAjax"] = false;

	$tdataReport_Exam_Result_MOE[".audit"] = true;

	$tdataReport_Exam_Result_MOE[".locking"] = false;

$tdataReport_Exam_Result_MOE[".listIcons"] = true;




$tdataReport_Exam_Result_MOE[".showSimpleSearchOptions"] = true;

$tdataReport_Exam_Result_MOE[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Exam_Result_MOE[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Exam_Result_MOE[".isUseAjaxSuggest"] = true;

$tdataReport_Exam_Result_MOE[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Exam_Result_MOE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Exam_Result_MOE[".isUseTimeForSearch"] = false;




$tdataReport_Exam_Result_MOE[".allSearchFields"] = array();

$tdataReport_Exam_Result_MOE[".allSearchFields"][] = "DipID";
$tdataReport_Exam_Result_MOE[".allSearchFields"][] = "BatchID";

$tdataReport_Exam_Result_MOE[".googleLikeFields"][] = "Option";

$tdataReport_Exam_Result_MOE[".panelSearchFields"][] = "DipID";
$tdataReport_Exam_Result_MOE[".panelSearchFields"][] = "BatchID";

$tdataReport_Exam_Result_MOE[".advSearchFields"][] = "DipID";
$tdataReport_Exam_Result_MOE[".advSearchFields"][] = "BatchID";

$tdataReport_Exam_Result_MOE[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Exam_Result_MOE[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY DipID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Exam_Result_MOE[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Exam_Result_MOE[".orderindexes"] = array();
$tdataReport_Exam_Result_MOE[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "DipID");

$tdataReport_Exam_Result_MOE[".sqlHead"] = "SELECT DipID,  BatchID,  DipID AS `Option`";
$tdataReport_Exam_Result_MOE[".sqlFrom"] = "FROM student_info";
$tdataReport_Exam_Result_MOE[".sqlWhereExpr"] = "(Status ='Active') AND (Intake_Category ='ED')";
$tdataReport_Exam_Result_MOE[".sqlTail"] = "GROUP BY DipID, BatchID";

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
$tdataReport_Exam_Result_MOE[".arrEditTabs"] = $arrEditTabs;

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
$tdataReport_Exam_Result_MOE[".arrAddTabs"] = $arrAddTabs;

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
$tdataReport_Exam_Result_MOE[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Exam_Result_MOE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Exam_Result_MOE[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Exam_Result_MOE = array();
$tdataReport_Exam_Result_MOE[".Keys"] = $tableKeysReport_Exam_Result_MOE;

$tdataReport_Exam_Result_MOE[".listFields"] = array();
$tdataReport_Exam_Result_MOE[".listFields"][] = "DipID";
$tdataReport_Exam_Result_MOE[".listFields"][] = "BatchID";
$tdataReport_Exam_Result_MOE[".listFields"][] = "Option";

$tdataReport_Exam_Result_MOE[".viewFields"] = array();

$tdataReport_Exam_Result_MOE[".addFields"] = array();

$tdataReport_Exam_Result_MOE[".inlineAddFields"] = array();

$tdataReport_Exam_Result_MOE[".editFields"] = array();

$tdataReport_Exam_Result_MOE[".inlineEditFields"] = array();

$tdataReport_Exam_Result_MOE[".exportFields"] = array();

$tdataReport_Exam_Result_MOE[".printFields"] = array();

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
	
		
		
	$tdataReport_Exam_Result_MOE["DipID"] = $fdata;
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		$edata["inputStyle"] = " width:100px;";
	$edata["controlWidth"] = 100;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Exam_Result_MOE["BatchID"] = $fdata;
//	Option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Option";
	$fdata["GoodName"] = "Option";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Semester"; 
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
	
		
		
	$tdataReport_Exam_Result_MOE["Option"] = $fdata;

	
$tables_data["Report_Exam_Result_MOE"]=&$tdataReport_Exam_Result_MOE;
$field_labels["Report_Exam_Result_MOE"] = &$fieldLabelsReport_Exam_Result_MOE;
$fieldToolTips["Report_Exam_Result_MOE"] = &$fieldToolTipsReport_Exam_Result_MOE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Exam_Result_MOE"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Exam_Result_MOE"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Exam_Result_MOE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DipID,  BatchID,  DipID AS `Option`";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "(Status ='Active') AND (Intake_Category ='ED')";
$proto0["m_strOrderBy"] = "ORDER BY DipID";
$proto0["m_strTail"] = "GROUP BY DipID, BatchID";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(Status ='Active') AND (Intake_Category ='ED')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Status ='Active') AND (Intake_Category ='ED')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "Status ='Active'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "student_info"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "='Active'";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "1";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "Intake_Category ='ED'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Intake_Category",
	"m_strTable" => "student_info"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "='ED'";
$proto5["m_havingmode"] = "0";
$proto5["m_inBrackets"] = "1";
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
	"m_strName" => "DipID",
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
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Option";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "student_info";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "StudentID";
$proto16["m_columns"][] = "Name";
$proto16["m_columns"][] = "ICNO";
$proto16["m_columns"][] = "DOB";
$proto16["m_columns"][] = "MatricNo";
$proto16["m_columns"][] = "Nogilir";
$proto16["m_columns"][] = "Email";
$proto16["m_columns"][] = "Access";
$proto16["m_columns"][] = "Passw";
$proto16["m_columns"][] = "Type";
$proto16["m_columns"][] = "BranchID";
$proto16["m_columns"][] = "DateJoin";
$proto16["m_columns"][] = "Dateout";
$proto16["m_columns"][] = "Gender";
$proto16["m_columns"][] = "married";
$proto16["m_columns"][] = "Address1";
$proto16["m_columns"][] = "City";
$proto16["m_columns"][] = "Postcode";
$proto16["m_columns"][] = "StateID";
$proto16["m_columns"][] = "Country";
$proto16["m_columns"][] = "HomeTelephone";
$proto16["m_columns"][] = "MobileTelephone";
$proto16["m_columns"][] = "Nationality";
$proto16["m_columns"][] = "Passport";
$proto16["m_columns"][] = "BatchID";
$proto16["m_columns"][] = "Intake";
$proto16["m_columns"][] = "Sponsor";
$proto16["m_columns"][] = "DipID";
$proto16["m_columns"][] = "Status";
$proto16["m_columns"][] = "Disability";
$proto16["m_columns"][] = "MedicalCondition";
$proto16["m_columns"][] = "race";
$proto16["m_columns"][] = "Religion";
$proto16["m_columns"][] = "Class";
$proto16["m_columns"][] = "Intake_Category";
$proto16["m_columns"][] = "f1_name";
$proto16["m_columns"][] = "f1_tel";
$proto16["m_columns"][] = "f1_relation";
$proto16["m_columns"][] = "f2_name";
$proto16["m_columns"][] = "f2_tel";
$proto16["m_columns"][] = "f2_relation";
$proto16["m_columns"][] = "blood";
$proto16["m_columns"][] = "hostel_in";
$proto16["m_columns"][] = "job";
$proto16["m_columns"][] = "al_certificate";
$proto16["m_columns"][] = "al_license";
$proto16["m_columns"][] = "f_name";
$proto16["m_columns"][] = "f_tel";
$proto16["m_columns"][] = "f_ic";
$proto16["m_columns"][] = "f_job";
$proto16["m_columns"][] = "f_address";
$proto16["m_columns"][] = "m_name";
$proto16["m_columns"][] = "m_tel";
$proto16["m_columns"][] = "m_ic";
$proto16["m_columns"][] = "m_job";
$proto16["m_columns"][] = "m_address";
$proto16["m_columns"][] = "qua_year";
$proto16["m_columns"][] = "qua_level";
$proto16["m_columns"][] = "qua_result";
$proto16["m_columns"][] = "qua_place";
$proto16["m_columns"][] = "photo";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = "0";
$proto17["m_inBrackets"] = "0";
$proto17["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto23["m_column"]=$obj;
$proto23["m_bAsc"] = 1;
$proto23["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto23);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Exam_Result_MOE = createSqlQuery_Report_Exam_Result_MOE();
			$tdataReport_Exam_Result_MOE[".sqlquery"] = $queryData_Report_Exam_Result_MOE;

include_once(getabspath("include/Report_Exam_Result_MOE_events.php"));
$tableEvents["Report_Exam_Result_MOE"] = new eventclass_Report_Exam_Result_MOE;
$tdataReport_Exam_Result_MOE[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Exam_Result_MOE");

?>