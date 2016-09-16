<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatimetable_attendance = array();
	$tdatatimetable_attendance[".NumberOfChars"] = 80; 
	$tdatatimetable_attendance[".ShortName"] = "timetable_attendance";
	$tdatatimetable_attendance[".OwnerID"] = "";
	$tdatatimetable_attendance[".OriginalTable"] = "t_facilities_timetable";

//	field labels
$fieldLabelstimetable_attendance = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstimetable_attendance["English"] = array();
	$fieldToolTipstimetable_attendance["English"] = array();
	$fieldLabelstimetable_attendance["English"]["id"] = "Id";
	$fieldToolTipstimetable_attendance["English"]["id"] = "";
	$fieldLabelstimetable_attendance["English"]["courseID"] = "Module";
	$fieldToolTipstimetable_attendance["English"]["courseID"] = "";
	$fieldLabelstimetable_attendance["English"]["start_time"] = "Start Time";
	$fieldToolTipstimetable_attendance["English"]["start_time"] = "";
	$fieldLabelstimetable_attendance["English"]["end_time"] = "End Time";
	$fieldToolTipstimetable_attendance["English"]["end_time"] = "";
	$fieldLabelstimetable_attendance["English"]["staffID"] = "Instuctor";
	$fieldToolTipstimetable_attendance["English"]["staffID"] = "";
	$fieldLabelstimetable_attendance["English"]["date"] = "Date";
	$fieldToolTipstimetable_attendance["English"]["date"] = "";
	$fieldLabelstimetable_attendance["English"]["program"] = "Course";
	$fieldToolTipstimetable_attendance["English"]["program"] = "";
	$fieldLabelstimetable_attendance["English"]["batch"] = "Batch";
	$fieldToolTipstimetable_attendance["English"]["batch"] = "";
	$fieldLabelstimetable_attendance["English"]["class"] = "Class";
	$fieldToolTipstimetable_attendance["English"]["class"] = "";
	$fieldLabelstimetable_attendance["English"]["month"] = "Month";
	$fieldToolTipstimetable_attendance["English"]["month"] = "";
	$fieldLabelstimetable_attendance["English"]["year"] = "Year";
	$fieldToolTipstimetable_attendance["English"]["year"] = "";
	$fieldLabelstimetable_attendance["English"]["week"] = "Week";
	$fieldToolTipstimetable_attendance["English"]["week"] = "";
	$fieldLabelstimetable_attendance["English"]["day"] = "Day";
	$fieldToolTipstimetable_attendance["English"]["day"] = "";
	$fieldLabelstimetable_attendance["English"]["teach_hour"] = "Lost Hour";
	$fieldToolTipstimetable_attendance["English"]["teach_hour"] = "";
	if (count($fieldToolTipstimetable_attendance["English"]))
		$tdatatimetable_attendance[".isUseToolTips"] = true;
}
	
	
	$tdatatimetable_attendance[".NCSearch"] = true;



$tdatatimetable_attendance[".shortTableName"] = "timetable_attendance";
$tdatatimetable_attendance[".nSecOptions"] = 0;
$tdatatimetable_attendance[".recsPerRowList"] = 1;
$tdatatimetable_attendance[".mainTableOwnerID"] = "";
$tdatatimetable_attendance[".moveNext"] = 1;
$tdatatimetable_attendance[".nType"] = 1;

$tdatatimetable_attendance[".strOriginalTableName"] = "t_facilities_timetable";




$tdatatimetable_attendance[".showAddInPopup"] = false;

$tdatatimetable_attendance[".showEditInPopup"] = false;

$tdatatimetable_attendance[".showViewInPopup"] = false;

$tdatatimetable_attendance[".fieldsForRegister"] = array();
	
$tdatatimetable_attendance[".listAjax"] = false;

	$tdatatimetable_attendance[".audit"] = true;

	$tdatatimetable_attendance[".locking"] = false;

$tdatatimetable_attendance[".listIcons"] = true;
$tdatatimetable_attendance[".edit"] = true;
$tdatatimetable_attendance[".copy"] = true;



$tdatatimetable_attendance[".delete"] = true;

$tdatatimetable_attendance[".showSimpleSearchOptions"] = true;

$tdatatimetable_attendance[".showSearchPanel"] = true;

if (isMobile())
	$tdatatimetable_attendance[".isUseAjaxSuggest"] = false;
else 
	$tdatatimetable_attendance[".isUseAjaxSuggest"] = true;

$tdatatimetable_attendance[".rowHighlite"] = true;

// button handlers file names

$tdatatimetable_attendance[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatimetable_attendance[".isUseTimeForSearch"] = true;




$tdatatimetable_attendance[".allSearchFields"] = array();

$tdatatimetable_attendance[".allSearchFields"][] = "program";
$tdatatimetable_attendance[".allSearchFields"][] = "class";
$tdatatimetable_attendance[".allSearchFields"][] = "batch";
$tdatatimetable_attendance[".allSearchFields"][] = "courseID";
$tdatatimetable_attendance[".allSearchFields"][] = "teach_hour";
$tdatatimetable_attendance[".allSearchFields"][] = "date";


$tdatatimetable_attendance[".panelSearchFields"][] = "program";
$tdatatimetable_attendance[".panelSearchFields"][] = "class";
$tdatatimetable_attendance[".panelSearchFields"][] = "batch";
$tdatatimetable_attendance[".panelSearchFields"][] = "courseID";
$tdatatimetable_attendance[".panelSearchFields"][] = "teach_hour";
$tdatatimetable_attendance[".panelSearchFields"][] = "date";

$tdatatimetable_attendance[".advSearchFields"][] = "program";
$tdatatimetable_attendance[".advSearchFields"][] = "class";
$tdatatimetable_attendance[".advSearchFields"][] = "batch";
$tdatatimetable_attendance[".advSearchFields"][] = "courseID";
$tdatatimetable_attendance[".advSearchFields"][] = "teach_hour";
$tdatatimetable_attendance[".advSearchFields"][] = "date";

$tdatatimetable_attendance[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatatimetable_attendance[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY `date` DESC, courseID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatimetable_attendance[".strOrderBy"] = $tstrOrderBy;

$tdatatimetable_attendance[".orderindexes"] = array();
$tdatatimetable_attendance[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "`date`");
$tdatatimetable_attendance[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "courseID");

$tdatatimetable_attendance[".sqlHead"] = "SELECT id,  courseID,  start_time,  end_time,  TIME_FORMAT(TIMEDIFF(end_time,start_time),'%H') AS teach_hour,  staffID,  `date`,  DAYNAME(date) AS `day`,  WEEK(date) AS week,  MONTH(date) AS `month`,  YEAR(date) AS `year`,  program,  batch,  `class`";
$tdatatimetable_attendance[".sqlFrom"] = "FROM t_facilities_timetable";
$tdatatimetable_attendance[".sqlWhereExpr"] = "";
$tdatatimetable_attendance[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "date";
	$tabFields[] = "start_time";
	$tabFields[] = "end_time";
$arrEditTabs[] = array('tabId'=>'Datetime1',
					   'tabName'=>"Datetime",
					   'nType'=>'1',
					   'nOrder'=>5,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatatimetable_attendance[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "date";
	$tabFields[] = "start_time";
	$tabFields[] = "end_time";
$arrAddTabs[] = array('tabId'=>'Datetime1',
					  'tabName'=>"Datetime",
					  'nType'=>'1',
					  'nOrder'=>6,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdatatimetable_attendance[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "date";
	$tabFields[] = "start_time";
	$tabFields[] = "end_time";
$arrViewTabs[] = array('tabId'=>'Datetime1',
					   'tabName'=>"Datetime",
					   'nType'=>'1',
					   'nOrder'=>7,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatatimetable_attendance[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatimetable_attendance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatimetable_attendance[".arrGroupsPerPage"] = $arrGPP;

$tableKeystimetable_attendance = array();
$tableKeystimetable_attendance[] = "id";
$tdatatimetable_attendance[".Keys"] = $tableKeystimetable_attendance;

$tdatatimetable_attendance[".listFields"] = array();
$tdatatimetable_attendance[".listFields"][] = "program";
$tdatatimetable_attendance[".listFields"][] = "class";
$tdatatimetable_attendance[".listFields"][] = "batch";
$tdatatimetable_attendance[".listFields"][] = "courseID";
$tdatatimetable_attendance[".listFields"][] = "date";
$tdatatimetable_attendance[".listFields"][] = "teach_hour";

$tdatatimetable_attendance[".viewFields"] = array();

$tdatatimetable_attendance[".addFields"] = array();
$tdatatimetable_attendance[".addFields"][] = "program";
$tdatatimetable_attendance[".addFields"][] = "batch";
$tdatatimetable_attendance[".addFields"][] = "class";
$tdatatimetable_attendance[".addFields"][] = "courseID";
$tdatatimetable_attendance[".addFields"][] = "date";
$tdatatimetable_attendance[".addFields"][] = "start_time";
$tdatatimetable_attendance[".addFields"][] = "end_time";

$tdatatimetable_attendance[".inlineAddFields"] = array();

$tdatatimetable_attendance[".editFields"] = array();
$tdatatimetable_attendance[".editFields"][] = "program";
$tdatatimetable_attendance[".editFields"][] = "batch";
$tdatatimetable_attendance[".editFields"][] = "class";
$tdatatimetable_attendance[".editFields"][] = "courseID";
$tdatatimetable_attendance[".editFields"][] = "date";
$tdatatimetable_attendance[".editFields"][] = "start_time";
$tdatatimetable_attendance[".editFields"][] = "end_time";

$tdatatimetable_attendance[".inlineEditFields"] = array();

$tdatatimetable_attendance[".exportFields"] = array();

$tdatatimetable_attendance[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
				
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
	
		
		
	$tdatatimetable_attendance["id"] = $fdata;
//	courseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "courseID";
	$fdata["GoodName"] = "courseID";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Module"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "courseID"; 
		$fdata["FullName"] = "courseID";
	
		
		
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
				
		
			
	$edata["LinkField"] = "CourseID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Shortname";
	
		
	$edata["LookupTable"] = "course";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatimetable_attendance["courseID"] = $fdata;
//	start_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "start_time";
	$fdata["GoodName"] = "start_time";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Start Time"; 
	$fdata["FieldType"] = 134;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "start_time"; 
		$fdata["FullName"] = "start_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";
	
		$edata["inputStyle"] = " width:60px;";
	$edata["controlWidth"] = 60;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 30,
									  "showSeconds" => 0);
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatimetable_attendance["start_time"] = $fdata;
//	end_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "end_time";
	$fdata["GoodName"] = "end_time";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "End Time"; 
	$fdata["FieldType"] = 134;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "end_time"; 
		$fdata["FullName"] = "end_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";
	
		$edata["inputStyle"] = " width:60px;";
	$edata["controlWidth"] = 60;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 30,
									  "showSeconds" => 0);
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatimetable_attendance["end_time"] = $fdata;
//	teach_hour
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "teach_hour";
	$fdata["GoodName"] = "teach_hour";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Lost Hour"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "teach_hour"; 
		$fdata["FullName"] = "TIME_FORMAT(TIMEDIFF(end_time,start_time),'%H')";
	
		
		
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
	
		
		
	$tdatatimetable_attendance["teach_hour"] = $fdata;
//	staffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "staffID";
	$fdata["GoodName"] = "staffID";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Instuctor"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "staffID"; 
		$fdata["FullName"] = "staffID";
	
		
		
				
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
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "staff_info";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "department='TRAINING'";
	
		
		
		
				
	
	
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
	
		
		
	$tdatatimetable_attendance["staffID"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "date"; 
		$fdata["FullName"] = "`date`";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatimetable_attendance["date"] = $fdata;
//	day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "day";
	$fdata["GoodName"] = "day";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Day"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "day"; 
		$fdata["FullName"] = "DAYNAME(date)";
	
		
		
				
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
	
		
		
	$tdatatimetable_attendance["day"] = $fdata;
//	week
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "week";
	$fdata["GoodName"] = "week";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Week"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "week"; 
		$fdata["FullName"] = "WEEK(date)";
	
		
		
				
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
	
		
		
	$tdatatimetable_attendance["week"] = $fdata;
//	month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "month";
	$fdata["GoodName"] = "month";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Month"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "month"; 
		$fdata["FullName"] = "MONTH(date)";
	
		
		
				
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
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "9";
	$edata["LookupValues"][] = "10";
	$edata["LookupValues"][] = "11";
	$edata["LookupValues"][] = "12";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatimetable_attendance["month"] = $fdata;
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Year"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "year"; 
		$fdata["FullName"] = "YEAR(date)";
	
		
		
				
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
	
		
		
	$tdatatimetable_attendance["year"] = $fdata;
//	program
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "program";
	$fdata["GoodName"] = "program";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "program"; 
		$fdata["FullName"] = "program";
	
		
		
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
	
		
		
	$tdatatimetable_attendance["program"] = $fdata;
//	batch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "batch";
	$fdata["GoodName"] = "batch";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Batch"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "batch"; 
		$fdata["FullName"] = "batch";
	
		
		
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
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatimetable_attendance["batch"] = $fdata;
//	class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "class";
	$fdata["GoodName"] = "class";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Class"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "class"; 
		$fdata["FullName"] = "`class`";
	
		
		
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
	
		
		$edata["AutoUpdate"] = true; 
	
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
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
	
		
		
	$tdatatimetable_attendance["class"] = $fdata;

	
$tables_data["timetable_attendance"]=&$tdatatimetable_attendance;
$field_labels["timetable_attendance"] = &$fieldLabelstimetable_attendance;
$fieldToolTips["timetable_attendance"] = &$fieldToolTipstimetable_attendance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["timetable_attendance"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["timetable_attendance"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_timetable_attendance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  courseID,  start_time,  end_time,  TIME_FORMAT(TIMEDIFF(end_time,start_time),'%H') AS teach_hour,  staffID,  `date`,  DAYNAME(date) AS `day`,  WEEK(date) AS week,  MONTH(date) AS `month`,  YEAR(date) AS `year`,  program,  batch,  `class`";
$proto0["m_strFrom"] = "FROM t_facilities_timetable";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `date` DESC, courseID";
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
	"m_strTable" => "t_facilities_timetable"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "courseID",
	"m_strTable" => "t_facilities_timetable"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "start_time",
	"m_strTable" => "t_facilities_timetable"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "end_time",
	"m_strTable" => "t_facilities_timetable"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "TIME_FORMAT(TIMEDIFF(end_time,start_time),'%H')"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "teach_hour";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "staffID",
	"m_strTable" => "t_facilities_timetable"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "t_facilities_timetable"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_CUSTOM";
$proto20["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "date"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "DAYNAME";
$obj = new SQLFunctionCall($proto20);

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "day";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "date"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "WEEK";
$obj = new SQLFunctionCall($proto23);

$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "week";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_CUSTOM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "date"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto26);

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "month";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$proto29=array();
$proto29["m_functiontype"] = "SQLF_CUSTOM";
$proto29["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "date"
));

$proto29["m_arguments"][]=$obj;
$proto29["m_strFunctionName"] = "YEAR";
$obj = new SQLFunctionCall($proto29);

$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "year";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "program",
	"m_strTable" => "t_facilities_timetable"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "batch",
	"m_strTable" => "t_facilities_timetable"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "class",
	"m_strTable" => "t_facilities_timetable"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "t_facilities_timetable";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "id";
$proto38["m_columns"][] = "fid";
$proto38["m_columns"][] = "courseID";
$proto38["m_columns"][] = "start_time";
$proto38["m_columns"][] = "end_time";
$proto38["m_columns"][] = "staffID";
$proto38["m_columns"][] = "staffID2";
$proto38["m_columns"][] = "date";
$proto38["m_columns"][] = "endate";
$proto38["m_columns"][] = "facility";
$proto38["m_columns"][] = "program";
$proto38["m_columns"][] = "batch";
$proto38["m_columns"][] = "class";
$proto38["m_columns"][] = "legend";
$proto38["m_columns"][] = "room";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_alias"] = "";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = "0";
$proto39["m_inBrackets"] = "0";
$proto39["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "t_facilities_timetable"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "courseID",
	"m_strTable" => "t_facilities_timetable"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 1;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_timetable_attendance = createSqlQuery_timetable_attendance();
														$tdatatimetable_attendance[".sqlquery"] = $queryData_timetable_attendance;

include_once(getabspath("include/timetable_attendance_events.php"));
$tableEvents["timetable_attendance"] = new eventclass_timetable_attendance;
$tdatatimetable_attendance[".hasEvents"] = true;

$cipherer = new RunnerCipherer("timetable_attendance");

?>