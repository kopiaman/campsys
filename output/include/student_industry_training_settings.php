<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_industry_training = array();
	$tdatastudent_industry_training[".NumberOfChars"] = 80; 
	$tdatastudent_industry_training[".ShortName"] = "student_industry_training";
	$tdatastudent_industry_training[".OwnerID"] = "";
	$tdatastudent_industry_training[".OriginalTable"] = "student_industry_training";

//	field labels
$fieldLabelsstudent_industry_training = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_industry_training["English"] = array();
	$fieldToolTipsstudent_industry_training["English"] = array();
	$fieldLabelsstudent_industry_training["English"]["id"] = "Id";
	$fieldToolTipsstudent_industry_training["English"]["id"] = "";
	$fieldLabelsstudent_industry_training["English"]["studentID"] = "Student";
	$fieldToolTipsstudent_industry_training["English"]["studentID"] = "";
	$fieldLabelsstudent_industry_training["English"]["organization_name"] = "Employer";
	$fieldToolTipsstudent_industry_training["English"]["organization_name"] = "";
	$fieldLabelsstudent_industry_training["English"]["organization_supervisor"] = "Organization Facilitator";
	$fieldToolTipsstudent_industry_training["English"]["organization_supervisor"] = "";
	$fieldLabelsstudent_industry_training["English"]["academic_supervisor"] = "Academic Supervisor";
	$fieldToolTipsstudent_industry_training["English"]["academic supervisor"] = "";
	$fieldLabelsstudent_industry_training["English"]["start_date"] = "Start Date";
	$fieldToolTipsstudent_industry_training["English"]["start_date"] = "";
	$fieldLabelsstudent_industry_training["English"]["end_date"] = "End Date";
	$fieldToolTipsstudent_industry_training["English"]["end_date"] = "";
	$fieldLabelsstudent_industry_training["English"]["orga_super_tel"] = "Facilitator Tel";
	$fieldToolTipsstudent_industry_training["English"]["orga_super_tel"] = "";
	$fieldLabelsstudent_industry_training["English"]["duration"] = "Duration";
	$fieldToolTipsstudent_industry_training["English"]["duration"] = "";
	$fieldLabelsstudent_industry_training["English"]["examStatus"] = "Exam Status";
	$fieldToolTipsstudent_industry_training["English"]["examStatus"] = "";
	$fieldLabelsstudent_industry_training["English"]["unemployed"] = "Unemployed";
	$fieldToolTipsstudent_industry_training["English"]["unemployed"] = "";
	$fieldLabelsstudent_industry_training["English"]["remarks"] = "Remarks";
	$fieldToolTipsstudent_industry_training["English"]["remarks"] = "";
	if (count($fieldToolTipsstudent_industry_training["English"]))
		$tdatastudent_industry_training[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_industry_training[".NCSearch"] = true;



$tdatastudent_industry_training[".shortTableName"] = "student_industry_training";
$tdatastudent_industry_training[".nSecOptions"] = 0;
$tdatastudent_industry_training[".recsPerRowList"] = 4;
$tdatastudent_industry_training[".mainTableOwnerID"] = "";
$tdatastudent_industry_training[".moveNext"] = 1;
$tdatastudent_industry_training[".nType"] = 0;

$tdatastudent_industry_training[".strOriginalTableName"] = "student_industry_training";




$tdatastudent_industry_training[".showAddInPopup"] = false;

$tdatastudent_industry_training[".showEditInPopup"] = false;

$tdatastudent_industry_training[".showViewInPopup"] = false;

$tdatastudent_industry_training[".fieldsForRegister"] = array();
	
$tdatastudent_industry_training[".listAjax"] = false;

	$tdatastudent_industry_training[".audit"] = true;

	$tdatastudent_industry_training[".locking"] = false;

$tdatastudent_industry_training[".listIcons"] = true;
$tdatastudent_industry_training[".inlineEdit"] = true;
$tdatastudent_industry_training[".inlineAdd"] = true;



$tdatastudent_industry_training[".delete"] = true;

$tdatastudent_industry_training[".showSimpleSearchOptions"] = true;

$tdatastudent_industry_training[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_industry_training[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_industry_training[".isUseAjaxSuggest"] = true;

$tdatastudent_industry_training[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_industry_training[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_industry_training[".isUseTimeForSearch"] = false;




$tdatastudent_industry_training[".allSearchFields"] = array();


$tdatastudent_industry_training[".googleLikeFields"][] = "id";
$tdatastudent_industry_training[".googleLikeFields"][] = "studentID";
$tdatastudent_industry_training[".googleLikeFields"][] = "organization_name";
$tdatastudent_industry_training[".googleLikeFields"][] = "organization_supervisor";
$tdatastudent_industry_training[".googleLikeFields"][] = "academic supervisor";
$tdatastudent_industry_training[".googleLikeFields"][] = "start_date";
$tdatastudent_industry_training[".googleLikeFields"][] = "end_date";
$tdatastudent_industry_training[".googleLikeFields"][] = "orga_super_tel";
$tdatastudent_industry_training[".googleLikeFields"][] = "duration";
$tdatastudent_industry_training[".googleLikeFields"][] = "examStatus";
$tdatastudent_industry_training[".googleLikeFields"][] = "unemployed";
$tdatastudent_industry_training[".googleLikeFields"][] = "remarks";



$tdatastudent_industry_training[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_industry_training[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_industry_training[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_industry_training[".orderindexes"] = array();

$tdatastudent_industry_training[".sqlHead"] = "SELECT id,   studentID,   organization_name,   organization_supervisor,   `academic supervisor`,   start_date,   end_date,   orga_super_tel,   duration,   examStatus,   unemployed,   remarks";
$tdatastudent_industry_training[".sqlFrom"] = "FROM student_industry_training";
$tdatastudent_industry_training[".sqlWhereExpr"] = "";
$tdatastudent_industry_training[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_industry_training[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_industry_training[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_industry_training = array();
$tableKeysstudent_industry_training[] = "id";
$tdatastudent_industry_training[".Keys"] = $tableKeysstudent_industry_training;

$tdatastudent_industry_training[".listFields"] = array();
$tdatastudent_industry_training[".listFields"][] = "organization_name";
$tdatastudent_industry_training[".listFields"][] = "unemployed";
$tdatastudent_industry_training[".listFields"][] = "duration";
$tdatastudent_industry_training[".listFields"][] = "examStatus";
$tdatastudent_industry_training[".listFields"][] = "start_date";
$tdatastudent_industry_training[".listFields"][] = "end_date";
$tdatastudent_industry_training[".listFields"][] = "remarks";

$tdatastudent_industry_training[".viewFields"] = array();

$tdatastudent_industry_training[".addFields"] = array();

$tdatastudent_industry_training[".inlineAddFields"] = array();
$tdatastudent_industry_training[".inlineAddFields"][] = "organization_name";
$tdatastudent_industry_training[".inlineAddFields"][] = "unemployed";
$tdatastudent_industry_training[".inlineAddFields"][] = "duration";
$tdatastudent_industry_training[".inlineAddFields"][] = "examStatus";
$tdatastudent_industry_training[".inlineAddFields"][] = "start_date";
$tdatastudent_industry_training[".inlineAddFields"][] = "end_date";
$tdatastudent_industry_training[".inlineAddFields"][] = "remarks";

$tdatastudent_industry_training[".editFields"] = array();

$tdatastudent_industry_training[".inlineEditFields"] = array();
$tdatastudent_industry_training[".inlineEditFields"][] = "organization_name";
$tdatastudent_industry_training[".inlineEditFields"][] = "unemployed";
$tdatastudent_industry_training[".inlineEditFields"][] = "duration";
$tdatastudent_industry_training[".inlineEditFields"][] = "examStatus";
$tdatastudent_industry_training[".inlineEditFields"][] = "start_date";
$tdatastudent_industry_training[".inlineEditFields"][] = "end_date";
$tdatastudent_industry_training[".inlineEditFields"][] = "remarks";

$tdatastudent_industry_training[".exportFields"] = array();

$tdatastudent_industry_training[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "student_industry_training";
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
	
		
		
	$tdatastudent_industry_training["id"] = $fdata;
//	studentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "studentID";
	$fdata["GoodName"] = "studentID";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "studentID"; 
		$fdata["FullName"] = "studentID";
	
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
	
		
		
	$tdatastudent_industry_training["studentID"] = $fdata;
//	organization_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "organization_name";
	$fdata["GoodName"] = "organization_name";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Employer"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "organization_name"; 
		$fdata["FullName"] = "organization_name";
	
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
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_industry_training["organization_name"] = $fdata;
//	organization_supervisor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "organization_supervisor";
	$fdata["GoodName"] = "organization_supervisor";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Organization Facilitator"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "organization_supervisor"; 
		$fdata["FullName"] = "organization_supervisor";
	
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
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_industry_training["organization_supervisor"] = $fdata;
//	academic supervisor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "academic supervisor";
	$fdata["GoodName"] = "academic_supervisor";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Academic Supervisor"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "academic supervisor"; 
		$fdata["FullName"] = "`academic supervisor`";
	
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "staff_info";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Job_Title='Lecturer'";
	
		
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
	
		
		
	$tdatastudent_industry_training["academic supervisor"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Start Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "start_date"; 
		$fdata["FullName"] = "start_date";
	
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
	
		
		
	$tdatastudent_industry_training["start_date"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "End Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "end_date"; 
		$fdata["FullName"] = "end_date";
	
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
	
		
		
	$tdatastudent_industry_training["end_date"] = $fdata;
//	orga_super_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "orga_super_tel";
	$fdata["GoodName"] = "orga_super_tel";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Facilitator Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "orga_super_tel"; 
		$fdata["FullName"] = "orga_super_tel";
	
		
		
				
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
	
		
		
	$tdatastudent_industry_training["orga_super_tel"] = $fdata;
//	duration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "duration";
	$fdata["GoodName"] = "duration";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Duration"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "duration"; 
		$fdata["FullName"] = "duration";
	
		
		
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
	
		
		
	$tdatastudent_industry_training["duration"] = $fdata;
//	examStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "examStatus";
	$fdata["GoodName"] = "examStatus";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Exam Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "examStatus"; 
		$fdata["FullName"] = "examStatus";
	
		
		
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
	
		
		
	$tdatastudent_industry_training["examStatus"] = $fdata;
//	unemployed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "unemployed";
	$fdata["GoodName"] = "unemployed";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Unemployed"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "unemployed"; 
		$fdata["FullName"] = "unemployed";
	
		
		
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
	
		
		
	$tdatastudent_industry_training["unemployed"] = $fdata;
//	remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "remarks";
	$fdata["GoodName"] = "remarks";
	$fdata["ownerTable"] = "student_industry_training";
	$fdata["Label"] = "Remarks"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "remarks"; 
		$fdata["FullName"] = "remarks";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_industry_training["remarks"] = $fdata;

	
$tables_data["student_industry_training"]=&$tdatastudent_industry_training;
$field_labels["student_industry_training"] = &$fieldLabelsstudent_industry_training;
$fieldToolTips["student_industry_training"] = &$fieldToolTipsstudent_industry_training;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_industry_training"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_industry_training"] = array();

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
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["student_industry_training"][$mIndex] = $masterParams;	
		$masterTablesData["student_industry_training"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["student_industry_training"][$mIndex]["detailKeys"][]="studentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_industry_training()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   studentID,   organization_name,   organization_supervisor,   `academic supervisor`,   start_date,   end_date,   orga_super_tel,   duration,   examStatus,   unemployed,   remarks";
$proto0["m_strFrom"] = "FROM student_industry_training";
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
	"m_strName" => "id",
	"m_strTable" => "student_industry_training"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "studentID",
	"m_strTable" => "student_industry_training"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_name",
	"m_strTable" => "student_industry_training"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_supervisor",
	"m_strTable" => "student_industry_training"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "academic supervisor",
	"m_strTable" => "student_industry_training"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "student_industry_training"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "student_industry_training"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "orga_super_tel",
	"m_strTable" => "student_industry_training"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "duration",
	"m_strTable" => "student_industry_training"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "examStatus",
	"m_strTable" => "student_industry_training"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "unemployed",
	"m_strTable" => "student_industry_training"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "remarks",
	"m_strTable" => "student_industry_training"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "student_industry_training";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "studentID";
$proto30["m_columns"][] = "organization_name";
$proto30["m_columns"][] = "organization_supervisor";
$proto30["m_columns"][] = "academic supervisor";
$proto30["m_columns"][] = "start_date";
$proto30["m_columns"][] = "end_date";
$proto30["m_columns"][] = "orga_super_tel";
$proto30["m_columns"][] = "duration";
$proto30["m_columns"][] = "examStatus";
$proto30["m_columns"][] = "unemployed";
$proto30["m_columns"][] = "remarks";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_industry_training = createSqlQuery_student_industry_training();
												$tdatastudent_industry_training[".sqlquery"] = $queryData_student_industry_training;

$tableEvents["student_industry_training"] = new eventsBase;
$tdatastudent_industry_training[".hasEvents"] = false;

$cipherer = new RunnerCipherer("student_industry_training");

?>