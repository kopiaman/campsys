<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_qualification = array();
	$tdatastudent_qualification[".NumberOfChars"] = 80; 
	$tdatastudent_qualification[".ShortName"] = "student_qualification";
	$tdatastudent_qualification[".OwnerID"] = "";
	$tdatastudent_qualification[".OriginalTable"] = "student_qualification";

//	field labels
$fieldLabelsstudent_qualification = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_qualification["English"] = array();
	$fieldToolTipsstudent_qualification["English"] = array();
	$fieldLabelsstudent_qualification["English"]["ID"] = "ID";
	$fieldToolTipsstudent_qualification["English"]["ID"] = "";
	$fieldLabelsstudent_qualification["English"]["StudentID"] = "Student";
	$fieldToolTipsstudent_qualification["English"]["StudentID"] = "";
	$fieldLabelsstudent_qualification["English"]["Institution"] = "Institution/School";
	$fieldToolTipsstudent_qualification["English"]["Institution"] = "";
	$fieldLabelsstudent_qualification["English"]["YearGrad"] = "Year Grad";
	$fieldToolTipsstudent_qualification["English"]["YearGrad"] = "";
	$fieldLabelsstudent_qualification["English"]["Education_Type"] = "Level";
	$fieldToolTipsstudent_qualification["English"]["Education_Type"] = "";
	$fieldLabelsstudent_qualification["English"]["Major"] = "Major/Specialization";
	$fieldToolTipsstudent_qualification["English"]["Major"] = "";
	$fieldLabelsstudent_qualification["English"]["Grade_CGPA"] = "CGPA/Result";
	$fieldToolTipsstudent_qualification["English"]["Grade_CGPA"] = "";
	if (count($fieldToolTipsstudent_qualification["English"]))
		$tdatastudent_qualification[".isUseToolTips"] = true;
}
	
	



$tdatastudent_qualification[".shortTableName"] = "student_qualification";
$tdatastudent_qualification[".nSecOptions"] = 0;
$tdatastudent_qualification[".recsPerRowList"] = 1;
$tdatastudent_qualification[".mainTableOwnerID"] = "";
$tdatastudent_qualification[".moveNext"] = 1;
$tdatastudent_qualification[".nType"] = 0;

$tdatastudent_qualification[".strOriginalTableName"] = "student_qualification";




$tdatastudent_qualification[".showAddInPopup"] = false;

$tdatastudent_qualification[".showEditInPopup"] = false;

$tdatastudent_qualification[".showViewInPopup"] = false;

$tdatastudent_qualification[".fieldsForRegister"] = array();
	
$tdatastudent_qualification[".listAjax"] = false;

	$tdatastudent_qualification[".audit"] = true;

	$tdatastudent_qualification[".locking"] = false;

$tdatastudent_qualification[".listIcons"] = true;
$tdatastudent_qualification[".edit"] = true;
$tdatastudent_qualification[".inlineEdit"] = true;
$tdatastudent_qualification[".inlineAdd"] = true;



$tdatastudent_qualification[".delete"] = true;

$tdatastudent_qualification[".showSimpleSearchOptions"] = true;

$tdatastudent_qualification[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_qualification[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_qualification[".isUseAjaxSuggest"] = true;

$tdatastudent_qualification[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_qualification[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_qualification[".isUseTimeForSearch"] = false;




$tdatastudent_qualification[".allSearchFields"] = array();


$tdatastudent_qualification[".googleLikeFields"][] = "ID";
$tdatastudent_qualification[".googleLikeFields"][] = "StudentID";
$tdatastudent_qualification[".googleLikeFields"][] = "Institution";
$tdatastudent_qualification[".googleLikeFields"][] = "YearGrad";
$tdatastudent_qualification[".googleLikeFields"][] = "Education_Type";
$tdatastudent_qualification[".googleLikeFields"][] = "Major";
$tdatastudent_qualification[".googleLikeFields"][] = "Grade_CGPA";

$tdatastudent_qualification[".panelSearchFields"][] = "StudentID";
$tdatastudent_qualification[".panelSearchFields"][] = "ID";
$tdatastudent_qualification[".panelSearchFields"][] = "Education_Type";
$tdatastudent_qualification[".panelSearchFields"][] = "Institution";
$tdatastudent_qualification[".panelSearchFields"][] = "YearGrad";
$tdatastudent_qualification[".panelSearchFields"][] = "Major";
$tdatastudent_qualification[".panelSearchFields"][] = "Grade_CGPA";


$tdatastudent_qualification[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_qualification[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_qualification[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_qualification[".orderindexes"] = array();

$tdatastudent_qualification[".sqlHead"] = "SELECT ID,   StudentID,   Institution,   YearGrad,   Education_Type,   Major,   Grade_CGPA";
$tdatastudent_qualification[".sqlFrom"] = "FROM student_qualification";
$tdatastudent_qualification[".sqlWhereExpr"] = "";
$tdatastudent_qualification[".sqlTail"] = "";


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "Education_Type";
$arrAddTabs[] = array('tabId'=>'School_Education_Record1',
					  'tabName'=>"School Education Record",
					  'nType'=>'1',
					  'nOrder'=>1,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "Institution";
	$tabFields[] = "YearGrad";
	$tabFields[] = "Major";
	$tabFields[] = "Grade_CGPA";
$arrAddTabs[] = array('tabId'=>'Highest_Education_Record1',
					  'tabName'=>"Highest Education Record",
					  'nType'=>'1',
					  'nOrder'=>5,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdatastudent_qualification[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "Education_Type";
$arrViewTabs[] = array('tabId'=>'School_Education_Record1',
					   'tabName'=>"School Education Record",
					   'nType'=>'1',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "Institution";
	$tabFields[] = "YearGrad";
	$tabFields[] = "Major";
	$tabFields[] = "Grade_CGPA";
$arrViewTabs[] = array('tabId'=>'Highest_Education_Record1',
					   'tabName'=>"Highest Education Record",
					   'nType'=>'1',
					   'nOrder'=>5,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatastudent_qualification[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_qualification[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_qualification[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_qualification = array();
$tableKeysstudent_qualification[] = "ID";
$tdatastudent_qualification[".Keys"] = $tableKeysstudent_qualification;

$tdatastudent_qualification[".listFields"] = array();
$tdatastudent_qualification[".listFields"][] = "Education_Type";
$tdatastudent_qualification[".listFields"][] = "Institution";
$tdatastudent_qualification[".listFields"][] = "YearGrad";
$tdatastudent_qualification[".listFields"][] = "Major";
$tdatastudent_qualification[".listFields"][] = "Grade_CGPA";

$tdatastudent_qualification[".viewFields"] = array();

$tdatastudent_qualification[".addFields"] = array();
$tdatastudent_qualification[".addFields"][] = "Education_Type";
$tdatastudent_qualification[".addFields"][] = "Institution";
$tdatastudent_qualification[".addFields"][] = "YearGrad";
$tdatastudent_qualification[".addFields"][] = "Major";
$tdatastudent_qualification[".addFields"][] = "Grade_CGPA";

$tdatastudent_qualification[".inlineAddFields"] = array();
$tdatastudent_qualification[".inlineAddFields"][] = "Education_Type";
$tdatastudent_qualification[".inlineAddFields"][] = "Institution";
$tdatastudent_qualification[".inlineAddFields"][] = "YearGrad";
$tdatastudent_qualification[".inlineAddFields"][] = "Major";
$tdatastudent_qualification[".inlineAddFields"][] = "Grade_CGPA";

$tdatastudent_qualification[".editFields"] = array();
$tdatastudent_qualification[".editFields"][] = "Education_Type";
$tdatastudent_qualification[".editFields"][] = "Institution";
$tdatastudent_qualification[".editFields"][] = "YearGrad";
$tdatastudent_qualification[".editFields"][] = "Major";
$tdatastudent_qualification[".editFields"][] = "Grade_CGPA";

$tdatastudent_qualification[".inlineEditFields"] = array();
$tdatastudent_qualification[".inlineEditFields"][] = "Education_Type";
$tdatastudent_qualification[".inlineEditFields"][] = "Institution";
$tdatastudent_qualification[".inlineEditFields"][] = "YearGrad";
$tdatastudent_qualification[".inlineEditFields"][] = "Major";
$tdatastudent_qualification[".inlineEditFields"][] = "Grade_CGPA";

$tdatastudent_qualification[".exportFields"] = array();

$tdatastudent_qualification[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_qualification";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
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
	
		
		
	$tdatastudent_qualification["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_qualification";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_qualification["StudentID"] = $fdata;
//	Institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Institution";
	$fdata["GoodName"] = "Institution";
	$fdata["ownerTable"] = "student_qualification";
	$fdata["Label"] = "Institution/School"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Institution"; 
		$fdata["FullName"] = "Institution";
	
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_qualification["Institution"] = $fdata;
//	YearGrad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "YearGrad";
	$fdata["GoodName"] = "YearGrad";
	$fdata["ownerTable"] = "student_qualification";
	$fdata["Label"] = "Year Grad"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "YearGrad"; 
		$fdata["FullName"] = "YearGrad";
	
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
	
		
		$edata["AutoUpdate"] = true; 
	
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_qualification["YearGrad"] = $fdata;
//	Education_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Education_Type";
	$fdata["GoodName"] = "Education_Type";
	$fdata["ownerTable"] = "student_qualification";
	$fdata["Label"] = "Level"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Education_Type"; 
		$fdata["FullName"] = "Education_Type";
	
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
	
		
		$edata["LookupWhere"] = "Class=8";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_qualification["Education_Type"] = $fdata;
//	Major
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Major";
	$fdata["GoodName"] = "Major";
	$fdata["ownerTable"] = "student_qualification";
	$fdata["Label"] = "Major/Specialization"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Major"; 
		$fdata["FullName"] = "Major";
	
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_qualification["Major"] = $fdata;
//	Grade_CGPA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Grade_CGPA";
	$fdata["GoodName"] = "Grade_CGPA";
	$fdata["ownerTable"] = "student_qualification";
	$fdata["Label"] = "CGPA/Result"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Grade_CGPA"; 
		$fdata["FullName"] = "Grade_CGPA";
	
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
	
		
		
	$tdatastudent_qualification["Grade_CGPA"] = $fdata;

	
$tables_data["student_qualification"]=&$tdatastudent_qualification;
$field_labels["student_qualification"] = &$fieldLabelsstudent_qualification;
$fieldToolTips["student_qualification"] = &$fieldToolTipsstudent_qualification;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_qualification"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_qualification"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="student_info";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "student_info";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["student_qualification"][$mIndex] = $masterParams;	
		$masterTablesData["student_qualification"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["student_qualification"][$mIndex]["detailKeys"][]="StudentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_qualification()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   StudentID,   Institution,   YearGrad,   Education_Type,   Major,   Grade_CGPA";
$proto0["m_strFrom"] = "FROM student_qualification";
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
	"m_strName" => "ID",
	"m_strTable" => "student_qualification"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_qualification"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Institution",
	"m_strTable" => "student_qualification"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "YearGrad",
	"m_strTable" => "student_qualification"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Education_Type",
	"m_strTable" => "student_qualification"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Major",
	"m_strTable" => "student_qualification"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Grade_CGPA",
	"m_strTable" => "student_qualification"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "student_qualification";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "StudentID";
$proto20["m_columns"][] = "Institution";
$proto20["m_columns"][] = "YearGrad";
$proto20["m_columns"][] = "Education_Type";
$proto20["m_columns"][] = "Major";
$proto20["m_columns"][] = "Grade_CGPA";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_qualification = createSqlQuery_student_qualification();
							$tdatastudent_qualification[".sqlquery"] = $queryData_student_qualification;

$tableEvents["student_qualification"] = new eventsBase;
$tdatastudent_qualification[".hasEvents"] = false;

$cipherer = new RunnerCipherer("student_qualification");

?>