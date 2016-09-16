<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Exam_Summary = array();
	$tdataReport_Exam_Summary[".NumberOfChars"] = 80; 
	$tdataReport_Exam_Summary[".ShortName"] = "Report_Exam_Summary";
	$tdataReport_Exam_Summary[".OwnerID"] = "";
	$tdataReport_Exam_Summary[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Exam_Summary = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Exam_Summary["English"] = array();
	$fieldToolTipsReport_Exam_Summary["English"] = array();
	$fieldLabelsReport_Exam_Summary["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Exam_Summary["English"]["BatchID"] = "";
	$fieldLabelsReport_Exam_Summary["English"]["DipID"] = "Course";
	$fieldToolTipsReport_Exam_Summary["English"]["DipID"] = "";
	$fieldLabelsReport_Exam_Summary["English"]["Option"] = "Option";
	$fieldToolTipsReport_Exam_Summary["English"]["Option"] = "";
	$fieldLabelsReport_Exam_Summary["English"]["Class"] = "Class";
	$fieldToolTipsReport_Exam_Summary["English"]["Class"] = "";
	if (count($fieldToolTipsReport_Exam_Summary["English"]))
		$tdataReport_Exam_Summary[".isUseToolTips"] = true;
}
	
	



$tdataReport_Exam_Summary[".shortTableName"] = "Report_Exam_Summary";
$tdataReport_Exam_Summary[".nSecOptions"] = 0;
$tdataReport_Exam_Summary[".recsPerRowList"] = 1;
$tdataReport_Exam_Summary[".mainTableOwnerID"] = "";
$tdataReport_Exam_Summary[".moveNext"] = 1;
$tdataReport_Exam_Summary[".nType"] = 1;

$tdataReport_Exam_Summary[".strOriginalTableName"] = "student_info";




$tdataReport_Exam_Summary[".showAddInPopup"] = false;

$tdataReport_Exam_Summary[".showEditInPopup"] = false;

$tdataReport_Exam_Summary[".showViewInPopup"] = false;

$tdataReport_Exam_Summary[".fieldsForRegister"] = array();
	
$tdataReport_Exam_Summary[".listAjax"] = false;

	$tdataReport_Exam_Summary[".audit"] = true;

	$tdataReport_Exam_Summary[".locking"] = false;

$tdataReport_Exam_Summary[".listIcons"] = true;




$tdataReport_Exam_Summary[".showSimpleSearchOptions"] = true;

$tdataReport_Exam_Summary[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Exam_Summary[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Exam_Summary[".isUseAjaxSuggest"] = true;

$tdataReport_Exam_Summary[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Exam_Summary[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Exam_Summary[".isUseTimeForSearch"] = false;




$tdataReport_Exam_Summary[".allSearchFields"] = array();

$tdataReport_Exam_Summary[".allSearchFields"][] = "DipID";
$tdataReport_Exam_Summary[".allSearchFields"][] = "BatchID";
$tdataReport_Exam_Summary[".allSearchFields"][] = "Class";

$tdataReport_Exam_Summary[".googleLikeFields"][] = "Class";

$tdataReport_Exam_Summary[".panelSearchFields"][] = "DipID";
$tdataReport_Exam_Summary[".panelSearchFields"][] = "BatchID";
$tdataReport_Exam_Summary[".panelSearchFields"][] = "Class";

$tdataReport_Exam_Summary[".advSearchFields"][] = "DipID";
$tdataReport_Exam_Summary[".advSearchFields"][] = "BatchID";
$tdataReport_Exam_Summary[".advSearchFields"][] = "Class";

$tdataReport_Exam_Summary[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Exam_Summary[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY DipID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Exam_Summary[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Exam_Summary[".orderindexes"] = array();
$tdataReport_Exam_Summary[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "DipID");

$tdataReport_Exam_Summary[".sqlHead"] = "SELECT DISTINCT DipID,  BatchID,  `Class`,  DipID AS `Option`";
$tdataReport_Exam_Summary[".sqlFrom"] = "FROM student_info";
$tdataReport_Exam_Summary[".sqlWhereExpr"] = "(Status ='Active')";
$tdataReport_Exam_Summary[".sqlTail"] = "";

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
$tdataReport_Exam_Summary[".arrEditTabs"] = $arrEditTabs;

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
$tdataReport_Exam_Summary[".arrAddTabs"] = $arrAddTabs;

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
$tdataReport_Exam_Summary[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Exam_Summary[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Exam_Summary[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Exam_Summary = array();
$tdataReport_Exam_Summary[".Keys"] = $tableKeysReport_Exam_Summary;

$tdataReport_Exam_Summary[".listFields"] = array();
$tdataReport_Exam_Summary[".listFields"][] = "DipID";
$tdataReport_Exam_Summary[".listFields"][] = "BatchID";
$tdataReport_Exam_Summary[".listFields"][] = "Class";
$tdataReport_Exam_Summary[".listFields"][] = "Option";

$tdataReport_Exam_Summary[".viewFields"] = array();

$tdataReport_Exam_Summary[".addFields"] = array();

$tdataReport_Exam_Summary[".inlineAddFields"] = array();

$tdataReport_Exam_Summary[".editFields"] = array();

$tdataReport_Exam_Summary[".inlineEditFields"] = array();

$tdataReport_Exam_Summary[".exportFields"] = array();

$tdataReport_Exam_Summary[".printFields"] = array();

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
	
		
		
	$tdataReport_Exam_Summary["DipID"] = $fdata;
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
	
		
		
	$tdataReport_Exam_Summary["BatchID"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataReport_Exam_Summary["Class"] = $fdata;
//	Option
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
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
	
		
		
	$tdataReport_Exam_Summary["Option"] = $fdata;

	
$tables_data["Report_Exam_Summary"]=&$tdataReport_Exam_Summary;
$field_labels["Report_Exam_Summary"] = &$fieldLabelsReport_Exam_Summary;
$fieldToolTips["Report_Exam_Summary"] = &$fieldToolTipsReport_Exam_Summary;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Exam_Summary"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Exam_Summary"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Exam_Summary()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT DISTINCT";
$proto0["m_strFieldList"] = "DipID,  BatchID,  `Class`,  DipID AS `Option`";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "(Status ='Active')";
$proto0["m_strOrderBy"] = "ORDER BY DipID";
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
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Option";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "student_info";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "StudentID";
$proto14["m_columns"][] = "Name";
$proto14["m_columns"][] = "ICNO";
$proto14["m_columns"][] = "DOB";
$proto14["m_columns"][] = "MatricNo";
$proto14["m_columns"][] = "Nogilir";
$proto14["m_columns"][] = "Email";
$proto14["m_columns"][] = "Access";
$proto14["m_columns"][] = "Passw";
$proto14["m_columns"][] = "Type";
$proto14["m_columns"][] = "BranchID";
$proto14["m_columns"][] = "DateJoin";
$proto14["m_columns"][] = "Dateout";
$proto14["m_columns"][] = "Gender";
$proto14["m_columns"][] = "married";
$proto14["m_columns"][] = "Address1";
$proto14["m_columns"][] = "City";
$proto14["m_columns"][] = "Postcode";
$proto14["m_columns"][] = "StateID";
$proto14["m_columns"][] = "Country";
$proto14["m_columns"][] = "HomeTelephone";
$proto14["m_columns"][] = "MobileTelephone";
$proto14["m_columns"][] = "Nationality";
$proto14["m_columns"][] = "Passport";
$proto14["m_columns"][] = "BatchID";
$proto14["m_columns"][] = "Intake";
$proto14["m_columns"][] = "Sponsor";
$proto14["m_columns"][] = "DipID";
$proto14["m_columns"][] = "Status";
$proto14["m_columns"][] = "Disability";
$proto14["m_columns"][] = "MedicalCondition";
$proto14["m_columns"][] = "race";
$proto14["m_columns"][] = "Religion";
$proto14["m_columns"][] = "Class";
$proto14["m_columns"][] = "Intake_Category";
$proto14["m_columns"][] = "f1_name";
$proto14["m_columns"][] = "f1_tel";
$proto14["m_columns"][] = "f1_relation";
$proto14["m_columns"][] = "f2_name";
$proto14["m_columns"][] = "f2_tel";
$proto14["m_columns"][] = "f2_relation";
$proto14["m_columns"][] = "blood";
$proto14["m_columns"][] = "hostel_in";
$proto14["m_columns"][] = "job";
$proto14["m_columns"][] = "al_certificate";
$proto14["m_columns"][] = "al_license";
$proto14["m_columns"][] = "f_name";
$proto14["m_columns"][] = "f_tel";
$proto14["m_columns"][] = "f_ic";
$proto14["m_columns"][] = "f_job";
$proto14["m_columns"][] = "f_address";
$proto14["m_columns"][] = "m_name";
$proto14["m_columns"][] = "m_tel";
$proto14["m_columns"][] = "m_ic";
$proto14["m_columns"][] = "m_job";
$proto14["m_columns"][] = "m_address";
$proto14["m_columns"][] = "qua_year";
$proto14["m_columns"][] = "qua_level";
$proto14["m_columns"][] = "qua_result";
$proto14["m_columns"][] = "qua_place";
$proto14["m_columns"][] = "photo";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto17["m_column"]=$obj;
$proto17["m_bAsc"] = 1;
$proto17["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto17);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Exam_Summary = createSqlQuery_Report_Exam_Summary();
				$tdataReport_Exam_Summary[".sqlquery"] = $queryData_Report_Exam_Summary;

include_once(getabspath("include/Report_Exam_Summary_events.php"));
$tableEvents["Report_Exam_Summary"] = new eventclass_Report_Exam_Summary;
$tdataReport_Exam_Summary[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Exam_Summary");

?>