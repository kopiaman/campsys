<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_attendance = array();
	$tdatastudent_attendance[".NumberOfChars"] = 80; 
	$tdatastudent_attendance[".ShortName"] = "student_attendance";
	$tdatastudent_attendance[".OwnerID"] = "";
	$tdatastudent_attendance[".OriginalTable"] = "student_attendance";

//	field labels
$fieldLabelsstudent_attendance = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_attendance["English"] = array();
	$fieldToolTipsstudent_attendance["English"] = array();
	$fieldLabelsstudent_attendance["English"]["id"] = "Id";
	$fieldToolTipsstudent_attendance["English"]["id"] = "";
	$fieldLabelsstudent_attendance["English"]["date"] = "Date";
	$fieldToolTipsstudent_attendance["English"]["date"] = "";
	$fieldLabelsstudent_attendance["English"]["attend"] = "Reason";
	$fieldToolTipsstudent_attendance["English"]["attend"] = "";
	$fieldLabelsstudent_attendance["English"]["description"] = "Remark";
	$fieldToolTipsstudent_attendance["English"]["description"] = "";
	$fieldLabelsstudent_attendance["English"]["StudentID"] = "Student Name";
	$fieldToolTipsstudent_attendance["English"]["StudentID"] = "";
	$fieldLabelsstudent_attendance["English"]["class"] = "Class";
	$fieldToolTipsstudent_attendance["English"]["class"] = "";
	$fieldLabelsstudent_attendance["English"]["batchID"] = "Batch";
	$fieldToolTipsstudent_attendance["English"]["batchID"] = "";
	$fieldLabelsstudent_attendance["English"]["programID"] = "Program";
	$fieldToolTipsstudent_attendance["English"]["programID"] = "";
	$fieldLabelsstudent_attendance["English"]["attend_id"] = "Attend Id";
	$fieldToolTipsstudent_attendance["English"]["attend_id"] = "";
	$fieldLabelsstudent_attendance["English"]["course"] = "Course";
	$fieldToolTipsstudent_attendance["English"]["course"] = "";
	if (count($fieldToolTipsstudent_attendance["English"]))
		$tdatastudent_attendance[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_attendance[".NCSearch"] = true;



$tdatastudent_attendance[".shortTableName"] = "student_attendance";
$tdatastudent_attendance[".nSecOptions"] = 0;
$tdatastudent_attendance[".recsPerRowList"] = 1;
$tdatastudent_attendance[".mainTableOwnerID"] = "";
$tdatastudent_attendance[".moveNext"] = 1;
$tdatastudent_attendance[".nType"] = 0;

$tdatastudent_attendance[".strOriginalTableName"] = "student_attendance";




$tdatastudent_attendance[".showAddInPopup"] = false;

$tdatastudent_attendance[".showEditInPopup"] = false;

$tdatastudent_attendance[".showViewInPopup"] = true;

$tdatastudent_attendance[".fieldsForRegister"] = array();

$tdatastudent_attendance[".listAjax"] = false;

	$tdatastudent_attendance[".audit"] = false;

	$tdatastudent_attendance[".locking"] = false;

$tdatastudent_attendance[".listIcons"] = true;
$tdatastudent_attendance[".inlineAdd"] = true;

$tdatastudent_attendance[".exportTo"] = true;


$tdatastudent_attendance[".delete"] = true;

$tdatastudent_attendance[".showSimpleSearchOptions"] = false;

$tdatastudent_attendance[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_attendance[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_attendance[".isUseAjaxSuggest"] = true;

$tdatastudent_attendance[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_attendance[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_attendance[".isUseTimeForSearch"] = false;




$tdatastudent_attendance[".allSearchFields"] = array();

$tdatastudent_attendance[".allSearchFields"][] = "StudentID";
$tdatastudent_attendance[".allSearchFields"][] = "attend";

$tdatastudent_attendance[".googleLikeFields"][] = "StudentID";
$tdatastudent_attendance[".googleLikeFields"][] = "course";
$tdatastudent_attendance[".googleLikeFields"][] = "attend_id";

$tdatastudent_attendance[".panelSearchFields"][] = "StudentID";
$tdatastudent_attendance[".panelSearchFields"][] = "date";
$tdatastudent_attendance[".panelSearchFields"][] = "attend";

$tdatastudent_attendance[".advSearchFields"][] = "StudentID";
$tdatastudent_attendance[".advSearchFields"][] = "attend";

$tdatastudent_attendance[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_attendance[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_attendance[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_attendance[".orderindexes"] = array();
$tdatastudent_attendance[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdatastudent_attendance[".sqlHead"] = "SELECT id,  StudentID,  course,  `date`,  attend,  description,  `class`,  batchID,  programID,  attend_id";
$tdatastudent_attendance[".sqlFrom"] = "FROM student_attendance";
$tdatastudent_attendance[".sqlWhereExpr"] = "";
$tdatastudent_attendance[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_attendance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_attendance[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_attendance = array();
$tableKeysstudent_attendance[] = "id";
$tdatastudent_attendance[".Keys"] = $tableKeysstudent_attendance;

$tdatastudent_attendance[".listFields"] = array();
$tdatastudent_attendance[".listFields"][] = "StudentID";
$tdatastudent_attendance[".listFields"][] = "attend";
$tdatastudent_attendance[".listFields"][] = "description";

$tdatastudent_attendance[".viewFields"] = array();

$tdatastudent_attendance[".addFields"] = array();

$tdatastudent_attendance[".inlineAddFields"] = array();
$tdatastudent_attendance[".inlineAddFields"][] = "StudentID";
$tdatastudent_attendance[".inlineAddFields"][] = "attend";
$tdatastudent_attendance[".inlineAddFields"][] = "description";

$tdatastudent_attendance[".editFields"] = array();

$tdatastudent_attendance[".inlineEditFields"] = array();

$tdatastudent_attendance[".exportFields"] = array();
$tdatastudent_attendance[".exportFields"][] = "StudentID";
$tdatastudent_attendance[".exportFields"][] = "attend";
$tdatastudent_attendance[".exportFields"][] = "description";

$tdatastudent_attendance[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
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
	
		
		
	$tdatastudent_attendance["id"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Student Name"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
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
	
		
		
	$tdatastudent_attendance["StudentID"] = $fdata;
//	course
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "course";
	$fdata["GoodName"] = "course";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "course"; 
		$fdata["FullName"] = "course";
	
		
		
				
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
	
		
		
	$tdatastudent_attendance["course"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "date"; 
		$fdata["FullName"] = "`date`";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_attendance["date"] = $fdata;
//	attend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "attend";
	$fdata["GoodName"] = "attend";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Reason"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "attend"; 
		$fdata["FullName"] = "attend";
	
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
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "class=23";
	
		
		
		
				
	
	
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
	
		
		
	$tdatastudent_attendance["attend"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Remark"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "description"; 
		$fdata["FullName"] = "description";
	
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_attendance["description"] = $fdata;
//	class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "class";
	$fdata["GoodName"] = "class";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "class"; 
		$fdata["FullName"] = "`class`";
	
		
		
				
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
	
		
		
	$tdatastudent_attendance["class"] = $fdata;
//	batchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "batchID";
	$fdata["GoodName"] = "batchID";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "batchID"; 
		$fdata["FullName"] = "batchID";
	
		
		
				
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_attendance["batchID"] = $fdata;
//	programID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "programID";
	$fdata["GoodName"] = "programID";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Program"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "programID"; 
		$fdata["FullName"] = "programID";
	
		
		
				
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
	
		
		
	$tdatastudent_attendance["programID"] = $fdata;
//	attend_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "attend_id";
	$fdata["GoodName"] = "attend_id";
	$fdata["ownerTable"] = "student_attendance";
	$fdata["Label"] = "Attend Id"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "attend_id"; 
		$fdata["FullName"] = "attend_id";
	
		
		
				
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
	
		
		
	$tdatastudent_attendance["attend_id"] = $fdata;

	
$tables_data["student_attendance"]=&$tdatastudent_attendance;
$field_labels["student_attendance"] = &$fieldLabelsstudent_attendance;
$fieldToolTips["student_attendance"] = &$fieldToolTipsstudent_attendance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_attendance"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_attendance"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_attendance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  StudentID,  course,  `date`,  attend,  description,  `class`,  batchID,  programID,  attend_id";
$proto0["m_strFrom"] = "FROM student_attendance";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
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
	"m_strName" => "id",
	"m_strTable" => "student_attendance"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_attendance"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "course",
	"m_strTable" => "student_attendance"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "student_attendance"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "attend",
	"m_strTable" => "student_attendance"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "student_attendance"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "class",
	"m_strTable" => "student_attendance"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "batchID",
	"m_strTable" => "student_attendance"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "programID",
	"m_strTable" => "student_attendance"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "attend_id",
	"m_strTable" => "student_attendance"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "student_attendance";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "attend_id";
$proto26["m_columns"][] = "StudentID";
$proto26["m_columns"][] = "course";
$proto26["m_columns"][] = "date";
$proto26["m_columns"][] = "attend";
$proto26["m_columns"][] = "description";
$proto26["m_columns"][] = "programID";
$proto26["m_columns"][] = "batchID";
$proto26["m_columns"][] = "class";
$proto26["m_columns"][] = "hour";
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
	"m_strName" => "id",
	"m_strTable" => "student_attendance"
));

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 0;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_attendance = createSqlQuery_student_attendance();
										$tdatastudent_attendance[".sqlquery"] = $queryData_student_attendance;

include_once(getabspath("include/student_attendance_events.php"));
$tableEvents["student_attendance"] = new eventclass_student_attendance;
$tdatastudent_attendance[".hasEvents"] = true;

$cipherer = new RunnerCipherer("student_attendance");

?>