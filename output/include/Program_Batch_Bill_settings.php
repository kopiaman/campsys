<?php
require_once(getabspath("classes/cipherer.php"));
$tdataProgram_Batch_Bill = array();
	$tdataProgram_Batch_Bill[".NumberOfChars"] = 80; 
	$tdataProgram_Batch_Bill[".ShortName"] = "Program_Batch_Bill";
	$tdataProgram_Batch_Bill[".OwnerID"] = "";
	$tdataProgram_Batch_Bill[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsProgram_Batch_Bill = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsProgram_Batch_Bill["English"] = array();
	$fieldToolTipsProgram_Batch_Bill["English"] = array();
	$fieldLabelsProgram_Batch_Bill["English"]["BatchID"] = "Batch";
	$fieldToolTipsProgram_Batch_Bill["English"]["BatchID"] = "";
	$fieldLabelsProgram_Batch_Bill["English"]["DipID"] = "Course";
	$fieldToolTipsProgram_Batch_Bill["English"]["DipID"] = "";
	if (count($fieldToolTipsProgram_Batch_Bill["English"]))
		$tdataProgram_Batch_Bill[".isUseToolTips"] = true;
}
	
	



$tdataProgram_Batch_Bill[".shortTableName"] = "Program_Batch_Bill";
$tdataProgram_Batch_Bill[".nSecOptions"] = 0;
$tdataProgram_Batch_Bill[".recsPerRowList"] = 1;
$tdataProgram_Batch_Bill[".mainTableOwnerID"] = "";
$tdataProgram_Batch_Bill[".moveNext"] = 1;
$tdataProgram_Batch_Bill[".nType"] = 1;

$tdataProgram_Batch_Bill[".strOriginalTableName"] = "student_info";




$tdataProgram_Batch_Bill[".showAddInPopup"] = false;

$tdataProgram_Batch_Bill[".showEditInPopup"] = false;

$tdataProgram_Batch_Bill[".showViewInPopup"] = false;

$tdataProgram_Batch_Bill[".fieldsForRegister"] = array();
	
$tdataProgram_Batch_Bill[".listAjax"] = false;

	$tdataProgram_Batch_Bill[".audit"] = true;

	$tdataProgram_Batch_Bill[".locking"] = false;

$tdataProgram_Batch_Bill[".listIcons"] = true;




$tdataProgram_Batch_Bill[".showSimpleSearchOptions"] = true;

$tdataProgram_Batch_Bill[".showSearchPanel"] = true;

if (isMobile())
	$tdataProgram_Batch_Bill[".isUseAjaxSuggest"] = false;
else 
	$tdataProgram_Batch_Bill[".isUseAjaxSuggest"] = true;

$tdataProgram_Batch_Bill[".rowHighlite"] = true;

// button handlers file names

$tdataProgram_Batch_Bill[".addPageEvents"] = false;

// use timepicker for search panel
$tdataProgram_Batch_Bill[".isUseTimeForSearch"] = false;



$tdataProgram_Batch_Bill[".useDetailsPreview"] = true;

$tdataProgram_Batch_Bill[".allSearchFields"] = array();

$tdataProgram_Batch_Bill[".allSearchFields"][] = "DipID";
$tdataProgram_Batch_Bill[".allSearchFields"][] = "BatchID";


$tdataProgram_Batch_Bill[".panelSearchFields"][] = "DipID";
$tdataProgram_Batch_Bill[".panelSearchFields"][] = "BatchID";

$tdataProgram_Batch_Bill[".advSearchFields"][] = "DipID";
$tdataProgram_Batch_Bill[".advSearchFields"][] = "BatchID";

$tdataProgram_Batch_Bill[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataProgram_Batch_Bill[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY BatchID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataProgram_Batch_Bill[".strOrderBy"] = $tstrOrderBy;

$tdataProgram_Batch_Bill[".orderindexes"] = array();
$tdataProgram_Batch_Bill[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "BatchID");

$tdataProgram_Batch_Bill[".sqlHead"] = "SELECT DipID,  BatchID";
$tdataProgram_Batch_Bill[".sqlFrom"] = "FROM student_info";
$tdataProgram_Batch_Bill[".sqlWhereExpr"] = "(Status ='Active')";
$tdataProgram_Batch_Bill[".sqlTail"] = "GROUP BY DipID, BatchID";

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
$tdataProgram_Batch_Bill[".arrEditTabs"] = $arrEditTabs;

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
$tdataProgram_Batch_Bill[".arrAddTabs"] = $arrAddTabs;

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
$tdataProgram_Batch_Bill[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataProgram_Batch_Bill[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataProgram_Batch_Bill[".arrGroupsPerPage"] = $arrGPP;

$tableKeysProgram_Batch_Bill = array();
$tdataProgram_Batch_Bill[".Keys"] = $tableKeysProgram_Batch_Bill;

$tdataProgram_Batch_Bill[".listFields"] = array();
$tdataProgram_Batch_Bill[".listFields"][] = "DipID";
$tdataProgram_Batch_Bill[".listFields"][] = "BatchID";

$tdataProgram_Batch_Bill[".viewFields"] = array();

$tdataProgram_Batch_Bill[".addFields"] = array();

$tdataProgram_Batch_Bill[".inlineAddFields"] = array();

$tdataProgram_Batch_Bill[".editFields"] = array();

$tdataProgram_Batch_Bill[".inlineEditFields"] = array();

$tdataProgram_Batch_Bill[".exportFields"] = array();

$tdataProgram_Batch_Bill[".printFields"] = array();

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
	
		
		
	$tdataProgram_Batch_Bill["DipID"] = $fdata;
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
	
		
		
	$tdataProgram_Batch_Bill["BatchID"] = $fdata;

	
$tables_data["Program_Batch_Bill"]=&$tdataProgram_Batch_Bill;
$field_labels["Program_Batch_Bill"] = &$fieldLabelsProgram_Batch_Bill;
$fieldToolTips["Program_Batch_Bill"] = &$fieldToolTipsProgram_Batch_Bill;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Program_Batch_Bill"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="program_billing";
	$detailsParam["dDataSourceTable"]="program_billing";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="program_billing";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["Program_Batch_Bill"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Program_Batch_Bill"][$dIndex]["masterKeys"][]="DipID";
		$detailsTablesData["Program_Batch_Bill"][$dIndex]["masterKeys"][]="BatchID";
		$detailsTablesData["Program_Batch_Bill"][$dIndex]["detailKeys"][]="ProgramID";
		$detailsTablesData["Program_Batch_Bill"][$dIndex]["detailKeys"][]="BatchID";

	
// tables which are master tables for current table (detail)
$masterTablesData["Program_Batch_Bill"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Program_Batch_Bill()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DipID,  BatchID";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "(Status ='Active')";
$proto0["m_strOrderBy"] = "ORDER BY BatchID DESC";
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
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "student_info";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "StudentID";
$proto10["m_columns"][] = "Name";
$proto10["m_columns"][] = "ICNO";
$proto10["m_columns"][] = "DOB";
$proto10["m_columns"][] = "MatricNo";
$proto10["m_columns"][] = "Nogilir";
$proto10["m_columns"][] = "Email";
$proto10["m_columns"][] = "Access";
$proto10["m_columns"][] = "Passw";
$proto10["m_columns"][] = "Type";
$proto10["m_columns"][] = "BranchID";
$proto10["m_columns"][] = "DateJoin";
$proto10["m_columns"][] = "Dateout";
$proto10["m_columns"][] = "Gender";
$proto10["m_columns"][] = "married";
$proto10["m_columns"][] = "Address1";
$proto10["m_columns"][] = "City";
$proto10["m_columns"][] = "Postcode";
$proto10["m_columns"][] = "StateID";
$proto10["m_columns"][] = "Country";
$proto10["m_columns"][] = "HomeTelephone";
$proto10["m_columns"][] = "MobileTelephone";
$proto10["m_columns"][] = "Nationality";
$proto10["m_columns"][] = "Passport";
$proto10["m_columns"][] = "BatchID";
$proto10["m_columns"][] = "Intake";
$proto10["m_columns"][] = "Sponsor";
$proto10["m_columns"][] = "DipID";
$proto10["m_columns"][] = "Status";
$proto10["m_columns"][] = "Disability";
$proto10["m_columns"][] = "MedicalCondition";
$proto10["m_columns"][] = "race";
$proto10["m_columns"][] = "Religion";
$proto10["m_columns"][] = "Class";
$proto10["m_columns"][] = "Intake_Category";
$proto10["m_columns"][] = "f1_name";
$proto10["m_columns"][] = "f1_tel";
$proto10["m_columns"][] = "f1_relation";
$proto10["m_columns"][] = "f2_name";
$proto10["m_columns"][] = "f2_tel";
$proto10["m_columns"][] = "f2_relation";
$proto10["m_columns"][] = "blood";
$proto10["m_columns"][] = "hostel_in";
$proto10["m_columns"][] = "job";
$proto10["m_columns"][] = "al_certificate";
$proto10["m_columns"][] = "al_license";
$proto10["m_columns"][] = "f_name";
$proto10["m_columns"][] = "f_tel";
$proto10["m_columns"][] = "f_ic";
$proto10["m_columns"][] = "f_job";
$proto10["m_columns"][] = "f_address";
$proto10["m_columns"][] = "m_name";
$proto10["m_columns"][] = "m_tel";
$proto10["m_columns"][] = "m_ic";
$proto10["m_columns"][] = "m_job";
$proto10["m_columns"][] = "m_address";
$proto10["m_columns"][] = "qua_year";
$proto10["m_columns"][] = "qua_level";
$proto10["m_columns"][] = "qua_result";
$proto10["m_columns"][] = "qua_place";
$proto10["m_columns"][] = "photo";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto13=array();
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto13["m_column"]=$obj;
$obj = new SQLGroupByItem($proto13);

$proto0["m_groupby"][]=$obj;
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto15["m_column"]=$obj;
$obj = new SQLGroupByItem($proto15);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto17["m_column"]=$obj;
$proto17["m_bAsc"] = 0;
$proto17["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto17);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Program_Batch_Bill = createSqlQuery_Program_Batch_Bill();
		$tdataProgram_Batch_Bill[".sqlquery"] = $queryData_Program_Batch_Bill;

include_once(getabspath("include/Program_Batch_Bill_events.php"));
$tableEvents["Program_Batch_Bill"] = new eventclass_Program_Batch_Bill;
$tdataProgram_Batch_Bill[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Program_Batch_Bill");

?>