<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Compulsory_Training = array();
	$tdataReport_Compulsory_Training[".NumberOfChars"] = 80; 
	$tdataReport_Compulsory_Training[".ShortName"] = "Report_Compulsory_Training";
	$tdataReport_Compulsory_Training[".OwnerID"] = "";
	$tdataReport_Compulsory_Training[".OriginalTable"] = "student_compulsory_training";

//	field labels
$fieldLabelsReport_Compulsory_Training = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Compulsory_Training["English"] = array();
	$fieldToolTipsReport_Compulsory_Training["English"] = array();
	$fieldLabelsReport_Compulsory_Training["English"]["ID"] = "ID";
	$fieldToolTipsReport_Compulsory_Training["English"]["ID"] = "";
	$fieldLabelsReport_Compulsory_Training["English"]["StudentID"] = "Student Name";
	$fieldToolTipsReport_Compulsory_Training["English"]["StudentID"] = "";
	$fieldLabelsReport_Compulsory_Training["English"]["TrainingID"] = "Training Name";
	$fieldToolTipsReport_Compulsory_Training["English"]["TrainingID"] = "";
	$fieldLabelsReport_Compulsory_Training["English"]["Attendance"] = "Attendance";
	$fieldToolTipsReport_Compulsory_Training["English"]["Attendance"] = "";
	$fieldLabelsReport_Compulsory_Training["English"]["MatricNo"] = "Matric No";
	$fieldToolTipsReport_Compulsory_Training["English"]["MatricNo"] = "";
	$fieldLabelsReport_Compulsory_Training["English"]["Training_date"] = "Training Date";
	$fieldToolTipsReport_Compulsory_Training["English"]["Training_date"] = "";
	$fieldLabelsReport_Compulsory_Training["English"]["Venue"] = "Venue";
	$fieldToolTipsReport_Compulsory_Training["English"]["Venue"] = "";
	$fieldLabelsReport_Compulsory_Training["English"]["Provider"] = "Provider";
	$fieldToolTipsReport_Compulsory_Training["English"]["Provider"] = "";
	$fieldLabelsReport_Compulsory_Training["English"]["BatchID"] = "Batch";
	$fieldToolTipsReport_Compulsory_Training["English"]["BatchID"] = "";
	$fieldLabelsReport_Compulsory_Training["English"]["DipID"] = "Program ";
	$fieldToolTipsReport_Compulsory_Training["English"]["DipID"] = "";
	$fieldLabelsReport_Compulsory_Training["English"]["Class"] = "Class";
	$fieldToolTipsReport_Compulsory_Training["English"]["Class"] = "";
	if (count($fieldToolTipsReport_Compulsory_Training["English"]))
		$tdataReport_Compulsory_Training[".isUseToolTips"] = true;
}
	
	



$tdataReport_Compulsory_Training[".shortTableName"] = "Report_Compulsory_Training";
$tdataReport_Compulsory_Training[".nSecOptions"] = 0;
$tdataReport_Compulsory_Training[".recsPerRowList"] = 1;
$tdataReport_Compulsory_Training[".mainTableOwnerID"] = "";
$tdataReport_Compulsory_Training[".moveNext"] = 1;
$tdataReport_Compulsory_Training[".nType"] = 1;

$tdataReport_Compulsory_Training[".strOriginalTableName"] = "student_compulsory_training";




$tdataReport_Compulsory_Training[".showAddInPopup"] = false;

$tdataReport_Compulsory_Training[".showEditInPopup"] = false;

$tdataReport_Compulsory_Training[".showViewInPopup"] = false;

$tdataReport_Compulsory_Training[".fieldsForRegister"] = array();
	
$tdataReport_Compulsory_Training[".listAjax"] = false;

	$tdataReport_Compulsory_Training[".audit"] = true;

	$tdataReport_Compulsory_Training[".locking"] = false;

$tdataReport_Compulsory_Training[".listIcons"] = true;
$tdataReport_Compulsory_Training[".inlineEdit"] = true;
$tdataReport_Compulsory_Training[".inlineAdd"] = true;



$tdataReport_Compulsory_Training[".delete"] = true;

$tdataReport_Compulsory_Training[".showSimpleSearchOptions"] = true;

$tdataReport_Compulsory_Training[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Compulsory_Training[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Compulsory_Training[".isUseAjaxSuggest"] = true;

$tdataReport_Compulsory_Training[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Compulsory_Training[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Compulsory_Training[".isUseTimeForSearch"] = false;




$tdataReport_Compulsory_Training[".allSearchFields"] = array();

$tdataReport_Compulsory_Training[".allSearchFields"][] = "StudentID";
$tdataReport_Compulsory_Training[".allSearchFields"][] = "MatricNo";
$tdataReport_Compulsory_Training[".allSearchFields"][] = "BatchID";
$tdataReport_Compulsory_Training[".allSearchFields"][] = "DipID";
$tdataReport_Compulsory_Training[".allSearchFields"][] = "Class";
$tdataReport_Compulsory_Training[".allSearchFields"][] = "TrainingID";
$tdataReport_Compulsory_Training[".allSearchFields"][] = "Training_date";
$tdataReport_Compulsory_Training[".allSearchFields"][] = "Venue";
$tdataReport_Compulsory_Training[".allSearchFields"][] = "Provider";
$tdataReport_Compulsory_Training[".allSearchFields"][] = "Attendance";

$tdataReport_Compulsory_Training[".googleLikeFields"][] = "StudentID";
$tdataReport_Compulsory_Training[".googleLikeFields"][] = "MatricNo";
$tdataReport_Compulsory_Training[".googleLikeFields"][] = "BatchID";
$tdataReport_Compulsory_Training[".googleLikeFields"][] = "DipID";
$tdataReport_Compulsory_Training[".googleLikeFields"][] = "Class";

$tdataReport_Compulsory_Training[".panelSearchFields"][] = "StudentID";
$tdataReport_Compulsory_Training[".panelSearchFields"][] = "MatricNo";
$tdataReport_Compulsory_Training[".panelSearchFields"][] = "BatchID";
$tdataReport_Compulsory_Training[".panelSearchFields"][] = "TrainingID";
$tdataReport_Compulsory_Training[".panelSearchFields"][] = "Training_date";
$tdataReport_Compulsory_Training[".panelSearchFields"][] = "Attendance";

$tdataReport_Compulsory_Training[".advSearchFields"][] = "StudentID";
$tdataReport_Compulsory_Training[".advSearchFields"][] = "MatricNo";
$tdataReport_Compulsory_Training[".advSearchFields"][] = "BatchID";
$tdataReport_Compulsory_Training[".advSearchFields"][] = "DipID";
$tdataReport_Compulsory_Training[".advSearchFields"][] = "Class";
$tdataReport_Compulsory_Training[".advSearchFields"][] = "TrainingID";
$tdataReport_Compulsory_Training[".advSearchFields"][] = "Training_date";
$tdataReport_Compulsory_Training[".advSearchFields"][] = "Venue";
$tdataReport_Compulsory_Training[".advSearchFields"][] = "Provider";
$tdataReport_Compulsory_Training[".advSearchFields"][] = "Attendance";

$tdataReport_Compulsory_Training[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Compulsory_Training[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY student_compulsory_training.ID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Compulsory_Training[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Compulsory_Training[".orderindexes"] = array();
$tdataReport_Compulsory_Training[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "student_compulsory_training.ID");

$tdataReport_Compulsory_Training[".sqlHead"] = "SELECT student_compulsory_training.ID,  student_compulsory_training.StudentID,  student_compulsory_training.TrainingID,  student_compulsory_training.Attendance,  student_info.MatricNo,  student_compulsory_training.Training_date,  student_compulsory_training.Venue,  student_compulsory_training.Provider,  student_info.BatchID,  student_info.DipID,  student_info.`Class`";
$tdataReport_Compulsory_Training[".sqlFrom"] = "FROM student_compulsory_training  INNER JOIN student_info ON student_compulsory_training.StudentID = student_info.StudentID";
$tdataReport_Compulsory_Training[".sqlWhereExpr"] = "(student_info.Status ='Active')";
$tdataReport_Compulsory_Training[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Compulsory_Training[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Compulsory_Training[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Compulsory_Training = array();
$tableKeysReport_Compulsory_Training[] = "ID";
$tdataReport_Compulsory_Training[".Keys"] = $tableKeysReport_Compulsory_Training;

$tdataReport_Compulsory_Training[".listFields"] = array();
$tdataReport_Compulsory_Training[".listFields"][] = "StudentID";
$tdataReport_Compulsory_Training[".listFields"][] = "MatricNo";
$tdataReport_Compulsory_Training[".listFields"][] = "TrainingID";
$tdataReport_Compulsory_Training[".listFields"][] = "Training_date";
$tdataReport_Compulsory_Training[".listFields"][] = "Venue";
$tdataReport_Compulsory_Training[".listFields"][] = "Provider";
$tdataReport_Compulsory_Training[".listFields"][] = "Attendance";

$tdataReport_Compulsory_Training[".viewFields"] = array();

$tdataReport_Compulsory_Training[".addFields"] = array();

$tdataReport_Compulsory_Training[".inlineAddFields"] = array();
$tdataReport_Compulsory_Training[".inlineAddFields"][] = "StudentID";
$tdataReport_Compulsory_Training[".inlineAddFields"][] = "TrainingID";
$tdataReport_Compulsory_Training[".inlineAddFields"][] = "Training_date";
$tdataReport_Compulsory_Training[".inlineAddFields"][] = "Venue";
$tdataReport_Compulsory_Training[".inlineAddFields"][] = "Provider";
$tdataReport_Compulsory_Training[".inlineAddFields"][] = "Attendance";

$tdataReport_Compulsory_Training[".editFields"] = array();

$tdataReport_Compulsory_Training[".inlineEditFields"] = array();
$tdataReport_Compulsory_Training[".inlineEditFields"][] = "StudentID";
$tdataReport_Compulsory_Training[".inlineEditFields"][] = "TrainingID";
$tdataReport_Compulsory_Training[".inlineEditFields"][] = "Training_date";
$tdataReport_Compulsory_Training[".inlineEditFields"][] = "Venue";
$tdataReport_Compulsory_Training[".inlineEditFields"][] = "Provider";
$tdataReport_Compulsory_Training[".inlineEditFields"][] = "Attendance";

$tdataReport_Compulsory_Training[".exportFields"] = array();

$tdataReport_Compulsory_Training[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "student_compulsory_training.ID";
	
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
	
		
		
	$tdataReport_Compulsory_Training["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "Student Name"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_compulsory_training.StudentID";
	
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
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
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
	
		
		
	$tdataReport_Compulsory_Training["StudentID"] = $fdata;
//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "Training Name"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "TrainingID"; 
		$fdata["FullName"] = "student_compulsory_training.TrainingID";
	
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
				
		
			
	$edata["LinkField"] = "TrainingID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TrainingName";
	
		
	$edata["LookupTable"] = "training";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
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
	
		
		
	$tdataReport_Compulsory_Training["TrainingID"] = $fdata;
//	Attendance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Attendance";
	$fdata["GoodName"] = "Attendance";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "Attendance"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Attendance"; 
		$fdata["FullName"] = "student_compulsory_training.Attendance";
	
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
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Compulsory_Training["Attendance"] = $fdata;
//	MatricNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MatricNo";
	$fdata["GoodName"] = "MatricNo";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Matric No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "MatricNo"; 
		$fdata["FullName"] = "student_info.MatricNo";
	
		
		
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
	
		
		
	$tdataReport_Compulsory_Training["MatricNo"] = $fdata;
//	Training_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Training_date";
	$fdata["GoodName"] = "Training_date";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "Training Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Training_date"; 
		$fdata["FullName"] = "student_compulsory_training.Training_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Compulsory_Training["Training_date"] = $fdata;
//	Venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Venue";
	$fdata["GoodName"] = "Venue";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "Venue"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Venue"; 
		$fdata["FullName"] = "student_compulsory_training.Venue";
	
		
		
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
	$edata["freeInput"] = 1;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("Report_Compulsory_Training"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=35";
	
		
		
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
	
		
		
	$tdataReport_Compulsory_Training["Venue"] = $fdata;
//	Provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Provider";
	$fdata["GoodName"] = "Provider";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "Provider"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Provider"; 
		$fdata["FullName"] = "student_compulsory_training.Provider";
	
		
		
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
	$edata["freeInput"] = 1;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("Report_Compulsory_Training"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=36";
	
		
		
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
	
		
		
	$tdataReport_Compulsory_Training["Provider"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
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
	
		
		
	$tdataReport_Compulsory_Training["BatchID"] = $fdata;
//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
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
	
		
		
	$tdataReport_Compulsory_Training["DipID"] = $fdata;
//	Class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Class";
	$fdata["GoodName"] = "Class";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Class"; 
		$fdata["FullName"] = "student_info.`Class`";
	
		
		
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
	
		
		
	$tdataReport_Compulsory_Training["Class"] = $fdata;

	
$tables_data["Report_Compulsory_Training"]=&$tdataReport_Compulsory_Training;
$field_labels["Report_Compulsory_Training"] = &$fieldLabelsReport_Compulsory_Training;
$fieldToolTips["Report_Compulsory_Training"] = &$fieldToolTipsReport_Compulsory_Training;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Compulsory_Training"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Compulsory_Training"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Compulsory_Training()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_compulsory_training.ID,  student_compulsory_training.StudentID,  student_compulsory_training.TrainingID,  student_compulsory_training.Attendance,  student_info.MatricNo,  student_compulsory_training.Training_date,  student_compulsory_training.Venue,  student_compulsory_training.Provider,  student_info.BatchID,  student_info.DipID,  student_info.`Class`";
$proto0["m_strFrom"] = "FROM student_compulsory_training  INNER JOIN student_info ON student_compulsory_training.StudentID = student_info.StudentID";
$proto0["m_strWhere"] = "(student_info.Status ='Active')";
$proto0["m_strOrderBy"] = "ORDER BY student_compulsory_training.ID DESC";
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
	"m_strName" => "ID",
	"m_strTable" => "student_compulsory_training"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_compulsory_training"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingID",
	"m_strTable" => "student_compulsory_training"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Attendance",
	"m_strTable" => "student_compulsory_training"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "MatricNo",
	"m_strTable" => "student_info"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_date",
	"m_strTable" => "student_compulsory_training"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Venue",
	"m_strTable" => "student_compulsory_training"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Provider",
	"m_strTable" => "student_compulsory_training"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Class",
	"m_strTable" => "student_info"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "student_compulsory_training";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "ID";
$proto28["m_columns"][] = "StudentID";
$proto28["m_columns"][] = "TrainingID";
$proto28["m_columns"][] = "Attendance";
$proto28["m_columns"][] = "Training_date";
$proto28["m_columns"][] = "Venue";
$proto28["m_columns"][] = "Provider";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_INNERJOIN";
			$proto32=array();
$proto32["m_strName"] = "student_info";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "StudentID";
$proto32["m_columns"][] = "Name";
$proto32["m_columns"][] = "ICNO";
$proto32["m_columns"][] = "DOB";
$proto32["m_columns"][] = "MatricNo";
$proto32["m_columns"][] = "Nogilir";
$proto32["m_columns"][] = "Email";
$proto32["m_columns"][] = "Access";
$proto32["m_columns"][] = "Passw";
$proto32["m_columns"][] = "Type";
$proto32["m_columns"][] = "BranchID";
$proto32["m_columns"][] = "DateJoin";
$proto32["m_columns"][] = "Dateout";
$proto32["m_columns"][] = "Gender";
$proto32["m_columns"][] = "married";
$proto32["m_columns"][] = "Address1";
$proto32["m_columns"][] = "City";
$proto32["m_columns"][] = "Postcode";
$proto32["m_columns"][] = "StateID";
$proto32["m_columns"][] = "Country";
$proto32["m_columns"][] = "HomeTelephone";
$proto32["m_columns"][] = "MobileTelephone";
$proto32["m_columns"][] = "Nationality";
$proto32["m_columns"][] = "Passport";
$proto32["m_columns"][] = "BatchID";
$proto32["m_columns"][] = "Intake";
$proto32["m_columns"][] = "Sponsor";
$proto32["m_columns"][] = "DipID";
$proto32["m_columns"][] = "Status";
$proto32["m_columns"][] = "Disability";
$proto32["m_columns"][] = "MedicalCondition";
$proto32["m_columns"][] = "race";
$proto32["m_columns"][] = "Religion";
$proto32["m_columns"][] = "Class";
$proto32["m_columns"][] = "Intake_Category";
$proto32["m_columns"][] = "f1_name";
$proto32["m_columns"][] = "f1_tel";
$proto32["m_columns"][] = "f1_relation";
$proto32["m_columns"][] = "f2_name";
$proto32["m_columns"][] = "f2_tel";
$proto32["m_columns"][] = "f2_relation";
$proto32["m_columns"][] = "blood";
$proto32["m_columns"][] = "hostel_in";
$proto32["m_columns"][] = "job";
$proto32["m_columns"][] = "al_certificate";
$proto32["m_columns"][] = "al_license";
$proto32["m_columns"][] = "f_name";
$proto32["m_columns"][] = "f_tel";
$proto32["m_columns"][] = "f_ic";
$proto32["m_columns"][] = "f_job";
$proto32["m_columns"][] = "f_address";
$proto32["m_columns"][] = "m_name";
$proto32["m_columns"][] = "m_tel";
$proto32["m_columns"][] = "m_ic";
$proto32["m_columns"][] = "m_job";
$proto32["m_columns"][] = "m_address";
$proto32["m_columns"][] = "qua_year";
$proto32["m_columns"][] = "qua_level";
$proto32["m_columns"][] = "qua_result";
$proto32["m_columns"][] = "qua_place";
$proto32["m_columns"][] = "photo";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_alias"] = "";
$proto33=array();
$proto33["m_sql"] = "student_compulsory_training.StudentID = student_info.StudentID";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_compulsory_training"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= student_info.StudentID";
$proto33["m_havingmode"] = "0";
$proto33["m_inBrackets"] = "0";
$proto33["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "student_compulsory_training"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 0;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Compulsory_Training = createSqlQuery_Report_Compulsory_Training();
											$tdataReport_Compulsory_Training[".sqlquery"] = $queryData_Report_Compulsory_Training;

$tableEvents["Report_Compulsory_Training"] = new eventsBase;
$tdataReport_Compulsory_Training[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Report_Compulsory_Training");

?>