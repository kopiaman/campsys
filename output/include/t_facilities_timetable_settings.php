<?php
require_once(getabspath("classes/cipherer.php"));
$tdatat_facilities_timetable = array();
	$tdatat_facilities_timetable[".NumberOfChars"] = 80; 
	$tdatat_facilities_timetable[".ShortName"] = "t_facilities_timetable";
	$tdatat_facilities_timetable[".OwnerID"] = "";
	$tdatat_facilities_timetable[".OriginalTable"] = "t_facilities_timetable";

//	field labels
$fieldLabelst_facilities_timetable = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_facilities_timetable["English"] = array();
	$fieldToolTipst_facilities_timetable["English"] = array();
	$fieldLabelst_facilities_timetable["English"]["id"] = "Id";
	$fieldToolTipst_facilities_timetable["English"]["id"] = "";
	$fieldLabelst_facilities_timetable["English"]["fid"] = "Fid";
	$fieldToolTipst_facilities_timetable["English"]["fid"] = "";
	$fieldLabelst_facilities_timetable["English"]["courseID"] = "Module";
	$fieldToolTipst_facilities_timetable["English"]["courseID"] = "";
	$fieldLabelst_facilities_timetable["English"]["start_time"] = "Start Time";
	$fieldToolTipst_facilities_timetable["English"]["start_time"] = "";
	$fieldLabelst_facilities_timetable["English"]["end_time"] = "End Time";
	$fieldToolTipst_facilities_timetable["English"]["end_time"] = "";
	$fieldLabelst_facilities_timetable["English"]["staffID"] = "Instuctor";
	$fieldToolTipst_facilities_timetable["English"]["staffID"] = "";
	$fieldLabelst_facilities_timetable["English"]["date"] = "Start Date";
	$fieldToolTipst_facilities_timetable["English"]["date"] = "";
	$fieldLabelst_facilities_timetable["English"]["facility"] = "Location";
	$fieldToolTipst_facilities_timetable["English"]["facility"] = "";
	$fieldLabelst_facilities_timetable["English"]["program"] = "Course";
	$fieldToolTipst_facilities_timetable["English"]["program"] = "";
	$fieldLabelst_facilities_timetable["English"]["batch"] = "Batch";
	$fieldToolTipst_facilities_timetable["English"]["batch"] = "";
	$fieldLabelst_facilities_timetable["English"]["class"] = "Class";
	$fieldToolTipst_facilities_timetable["English"]["class"] = "";
	$fieldLabelst_facilities_timetable["English"]["month"] = "Month";
	$fieldToolTipst_facilities_timetable["English"]["month"] = "";
	$fieldLabelst_facilities_timetable["English"]["year"] = "Year";
	$fieldToolTipst_facilities_timetable["English"]["year"] = "";
	$fieldLabelst_facilities_timetable["English"]["week"] = "Week";
	$fieldToolTipst_facilities_timetable["English"]["week"] = "";
	$fieldLabelst_facilities_timetable["English"]["day"] = "Day";
	$fieldToolTipst_facilities_timetable["English"]["day"] = "";
	$fieldLabelst_facilities_timetable["English"]["endate"] = "End Date";
	$fieldToolTipst_facilities_timetable["English"]["endate"] = "";
	$fieldLabelst_facilities_timetable["English"]["legend"] = "Legend";
	$fieldToolTipst_facilities_timetable["English"]["legend"] = "";
	$fieldLabelst_facilities_timetable["English"]["room"] = "Room";
	$fieldToolTipst_facilities_timetable["English"]["room"] = "";
	$fieldLabelst_facilities_timetable["English"]["staffID2"] = "Instructor 2";
	$fieldToolTipst_facilities_timetable["English"]["staffID2"] = "";
	if (count($fieldToolTipst_facilities_timetable["English"]))
		$tdatat_facilities_timetable[".isUseToolTips"] = true;
}
	
	
	$tdatat_facilities_timetable[".NCSearch"] = true;



$tdatat_facilities_timetable[".shortTableName"] = "t_facilities_timetable";
$tdatat_facilities_timetable[".nSecOptions"] = 0;
$tdatat_facilities_timetable[".recsPerRowList"] = 1;
$tdatat_facilities_timetable[".mainTableOwnerID"] = "";
$tdatat_facilities_timetable[".moveNext"] = 1;
$tdatat_facilities_timetable[".nType"] = 0;

$tdatat_facilities_timetable[".strOriginalTableName"] = "t_facilities_timetable";




$tdatat_facilities_timetable[".showAddInPopup"] = false;

$tdatat_facilities_timetable[".showEditInPopup"] = false;

$tdatat_facilities_timetable[".showViewInPopup"] = false;

$tdatat_facilities_timetable[".fieldsForRegister"] = array();
	
$tdatat_facilities_timetable[".listAjax"] = false;

	$tdatat_facilities_timetable[".audit"] = true;

	$tdatat_facilities_timetable[".locking"] = false;

$tdatat_facilities_timetable[".listIcons"] = true;
$tdatat_facilities_timetable[".edit"] = true;
$tdatat_facilities_timetable[".copy"] = true;



$tdatat_facilities_timetable[".delete"] = true;

$tdatat_facilities_timetable[".showSimpleSearchOptions"] = true;

$tdatat_facilities_timetable[".showSearchPanel"] = true;

if (isMobile())
	$tdatat_facilities_timetable[".isUseAjaxSuggest"] = false;
else 
	$tdatat_facilities_timetable[".isUseAjaxSuggest"] = true;

$tdatat_facilities_timetable[".rowHighlite"] = true;

// button handlers file names

$tdatat_facilities_timetable[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_facilities_timetable[".isUseTimeForSearch"] = true;




$tdatat_facilities_timetable[".allSearchFields"] = array();

$tdatat_facilities_timetable[".allSearchFields"][] = "program";
$tdatat_facilities_timetable[".allSearchFields"][] = "batch";
$tdatat_facilities_timetable[".allSearchFields"][] = "class";
$tdatat_facilities_timetable[".allSearchFields"][] = "courseID";
$tdatat_facilities_timetable[".allSearchFields"][] = "facility";
$tdatat_facilities_timetable[".allSearchFields"][] = "staffID";
$tdatat_facilities_timetable[".allSearchFields"][] = "staffID2";
$tdatat_facilities_timetable[".allSearchFields"][] = "date";
$tdatat_facilities_timetable[".allSearchFields"][] = "endate";
$tdatat_facilities_timetable[".allSearchFields"][] = "week";
$tdatat_facilities_timetable[".allSearchFields"][] = "month";
$tdatat_facilities_timetable[".allSearchFields"][] = "year";
$tdatat_facilities_timetable[".allSearchFields"][] = "start_time";
$tdatat_facilities_timetable[".allSearchFields"][] = "end_time";
$tdatat_facilities_timetable[".allSearchFields"][] = "legend";

$tdatat_facilities_timetable[".googleLikeFields"][] = "staffID";
$tdatat_facilities_timetable[".googleLikeFields"][] = "staffID2";

$tdatat_facilities_timetable[".panelSearchFields"][] = "program";
$tdatat_facilities_timetable[".panelSearchFields"][] = "batch";
$tdatat_facilities_timetable[".panelSearchFields"][] = "class";
$tdatat_facilities_timetable[".panelSearchFields"][] = "courseID";
$tdatat_facilities_timetable[".panelSearchFields"][] = "facility";
$tdatat_facilities_timetable[".panelSearchFields"][] = "staffID";
$tdatat_facilities_timetable[".panelSearchFields"][] = "staffID2";
$tdatat_facilities_timetable[".panelSearchFields"][] = "week";
$tdatat_facilities_timetable[".panelSearchFields"][] = "month";
$tdatat_facilities_timetable[".panelSearchFields"][] = "year";
$tdatat_facilities_timetable[".panelSearchFields"][] = "legend";

$tdatat_facilities_timetable[".advSearchFields"][] = "program";
$tdatat_facilities_timetable[".advSearchFields"][] = "batch";
$tdatat_facilities_timetable[".advSearchFields"][] = "class";
$tdatat_facilities_timetable[".advSearchFields"][] = "courseID";
$tdatat_facilities_timetable[".advSearchFields"][] = "facility";
$tdatat_facilities_timetable[".advSearchFields"][] = "staffID";
$tdatat_facilities_timetable[".advSearchFields"][] = "staffID2";
$tdatat_facilities_timetable[".advSearchFields"][] = "date";
$tdatat_facilities_timetable[".advSearchFields"][] = "endate";
$tdatat_facilities_timetable[".advSearchFields"][] = "week";
$tdatat_facilities_timetable[".advSearchFields"][] = "month";
$tdatat_facilities_timetable[".advSearchFields"][] = "year";
$tdatat_facilities_timetable[".advSearchFields"][] = "start_time";
$tdatat_facilities_timetable[".advSearchFields"][] = "end_time";
$tdatat_facilities_timetable[".advSearchFields"][] = "legend";

$tdatat_facilities_timetable[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatat_facilities_timetable[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY `date` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatat_facilities_timetable[".strOrderBy"] = $tstrOrderBy;

$tdatat_facilities_timetable[".orderindexes"] = array();
$tdatat_facilities_timetable[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "`date`");

$tdatat_facilities_timetable[".sqlHead"] = "SELECT id,  fid,  courseID,  start_time,  end_time,  staffID,  `date`,  DAYNAME(date) AS `day`,  WEEK(date) AS week,  MONTH(date) AS `month`,  YEAR(date) AS `year`,  facility,  program,  batch,  `class`,  endate,  legend,  room,  staffID2";
$tdatat_facilities_timetable[".sqlFrom"] = "FROM t_facilities_timetable";
$tdatat_facilities_timetable[".sqlWhereExpr"] = "(endate IS NOT NULL)";
$tdatat_facilities_timetable[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "date";
	$tabFields[] = "endate";
	$tabFields[] = "start_time";
	$tabFields[] = "end_time";
$arrEditTabs[] = array('tabId'=>'Datetime1',
					   'tabName'=>"Datetime",
					   'nType'=>'1',
					   'nOrder'=>10,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatat_facilities_timetable[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "date";
	$tabFields[] = "endate";
	$tabFields[] = "start_time";
	$tabFields[] = "end_time";
$arrAddTabs[] = array('tabId'=>'Datetime1',
					  'tabName'=>"Datetime",
					  'nType'=>'1',
					  'nOrder'=>10,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdatat_facilities_timetable[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "date";
	$tabFields[] = "endate";
	$tabFields[] = "start_time";
	$tabFields[] = "end_time";
$arrViewTabs[] = array('tabId'=>'Datetime1',
					   'tabName'=>"Datetime",
					   'nType'=>'1',
					   'nOrder'=>7,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatat_facilities_timetable[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_facilities_timetable[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_facilities_timetable[".arrGroupsPerPage"] = $arrGPP;

$tableKeyst_facilities_timetable = array();
$tableKeyst_facilities_timetable[] = "id";
$tdatat_facilities_timetable[".Keys"] = $tableKeyst_facilities_timetable;

$tdatat_facilities_timetable[".listFields"] = array();
$tdatat_facilities_timetable[".listFields"][] = "program";
$tdatat_facilities_timetable[".listFields"][] = "batch";
$tdatat_facilities_timetable[".listFields"][] = "class";
$tdatat_facilities_timetable[".listFields"][] = "courseID";
$tdatat_facilities_timetable[".listFields"][] = "facility";
$tdatat_facilities_timetable[".listFields"][] = "staffID";
$tdatat_facilities_timetable[".listFields"][] = "staffID2";
$tdatat_facilities_timetable[".listFields"][] = "date";
$tdatat_facilities_timetable[".listFields"][] = "endate";
$tdatat_facilities_timetable[".listFields"][] = "week";
$tdatat_facilities_timetable[".listFields"][] = "start_time";
$tdatat_facilities_timetable[".listFields"][] = "end_time";
$tdatat_facilities_timetable[".listFields"][] = "legend";

$tdatat_facilities_timetable[".viewFields"] = array();

$tdatat_facilities_timetable[".addFields"] = array();
$tdatat_facilities_timetable[".addFields"][] = "legend";
$tdatat_facilities_timetable[".addFields"][] = "program";
$tdatat_facilities_timetable[".addFields"][] = "batch";
$tdatat_facilities_timetable[".addFields"][] = "class";
$tdatat_facilities_timetable[".addFields"][] = "facility";
$tdatat_facilities_timetable[".addFields"][] = "courseID";
$tdatat_facilities_timetable[".addFields"][] = "staffID";
$tdatat_facilities_timetable[".addFields"][] = "staffID2";
$tdatat_facilities_timetable[".addFields"][] = "date";
$tdatat_facilities_timetable[".addFields"][] = "endate";
$tdatat_facilities_timetable[".addFields"][] = "start_time";
$tdatat_facilities_timetable[".addFields"][] = "end_time";

$tdatat_facilities_timetable[".inlineAddFields"] = array();

$tdatat_facilities_timetable[".editFields"] = array();
$tdatat_facilities_timetable[".editFields"][] = "legend";
$tdatat_facilities_timetable[".editFields"][] = "program";
$tdatat_facilities_timetable[".editFields"][] = "batch";
$tdatat_facilities_timetable[".editFields"][] = "class";
$tdatat_facilities_timetable[".editFields"][] = "facility";
$tdatat_facilities_timetable[".editFields"][] = "courseID";
$tdatat_facilities_timetable[".editFields"][] = "staffID";
$tdatat_facilities_timetable[".editFields"][] = "staffID2";
$tdatat_facilities_timetable[".editFields"][] = "date";
$tdatat_facilities_timetable[".editFields"][] = "endate";
$tdatat_facilities_timetable[".editFields"][] = "start_time";
$tdatat_facilities_timetable[".editFields"][] = "end_time";

$tdatat_facilities_timetable[".inlineEditFields"] = array();

$tdatat_facilities_timetable[".exportFields"] = array();

$tdatat_facilities_timetable[".printFields"] = array();

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
	
		
		
	$tdatat_facilities_timetable["id"] = $fdata;
//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Fid"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "fid"; 
		$fdata["FullName"] = "fid";
	
		
		
				
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
	
		
		
	$tdatat_facilities_timetable["fid"] = $fdata;
//	courseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
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
	
		
		
	$tdatat_facilities_timetable["courseID"] = $fdata;
//	start_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "start_time";
	$fdata["GoodName"] = "start_time";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Start Time"; 
	$fdata["FieldType"] = 134;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatat_facilities_timetable["start_time"] = $fdata;
//	end_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "end_time";
	$fdata["GoodName"] = "end_time";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "End Time"; 
	$fdata["FieldType"] = 134;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatat_facilities_timetable["end_time"] = $fdata;
//	staffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "staffID";
	$fdata["GoodName"] = "staffID";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Instuctor"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "staffID"; 
		$fdata["FullName"] = "staffID";
	
		
		
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
	
		
		
	$tdatat_facilities_timetable["staffID"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Start Date"; 
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
	
		
		
	$tdatat_facilities_timetable["date"] = $fdata;
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
	
		
		
	$tdatat_facilities_timetable["day"] = $fdata;
//	week
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "week";
	$fdata["GoodName"] = "week";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Week"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "week"; 
		$fdata["FullName"] = "WEEK(date)";
	
		
		
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
	
		
		
	$tdatat_facilities_timetable["week"] = $fdata;
//	month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "month";
	$fdata["GoodName"] = "month";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Month"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "month"; 
		$fdata["FullName"] = "MONTH(date)";
	
		
		
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
	
		
		
	$tdatat_facilities_timetable["month"] = $fdata;
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Year"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "year"; 
		$fdata["FullName"] = "YEAR(date)";
	
		
		
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
	
		
		
	$tdatat_facilities_timetable["year"] = $fdata;
//	facility
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "facility";
	$fdata["GoodName"] = "facility";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Location"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "facility"; 
		$fdata["FullName"] = "facility";
	
		
		
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
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=47";
	
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
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
	
		
		
	$tdatat_facilities_timetable["facility"] = $fdata;
//	program
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
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
	
		
		
	$tdatat_facilities_timetable["program"] = $fdata;
//	batch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
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
	
		
		
	$tdatat_facilities_timetable["batch"] = $fdata;
//	class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
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
	
		
		
	$tdatat_facilities_timetable["class"] = $fdata;
//	endate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "endate";
	$fdata["GoodName"] = "endate";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "End Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "endate"; 
		$fdata["FullName"] = "endate";
	
		
		
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
	
		
		
	$tdatat_facilities_timetable["endate"] = $fdata;
//	legend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "legend";
	$fdata["GoodName"] = "legend";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Legend"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "legend"; 
		$fdata["FullName"] = "legend";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=50";
	
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:40px;";
	$edata["controlWidth"] = 40;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
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
	
		
		$edata["LookupWhere"] = "Class=50";
	
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:40px;";
	$edata["controlWidth"] = 40;
	
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
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=50";
	
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:40px;";
	$edata["controlWidth"] = 40;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatat_facilities_timetable["legend"] = $fdata;
//	room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "room";
	$fdata["GoodName"] = "room";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Room"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "room"; 
		$fdata["FullName"] = "room";
	
		
		
				
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
	
		
		
	$tdatat_facilities_timetable["room"] = $fdata;
//	staffID2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "staffID2";
	$fdata["GoodName"] = "staffID2";
	$fdata["ownerTable"] = "t_facilities_timetable";
	$fdata["Label"] = "Instructor 2"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "staffID2"; 
		$fdata["FullName"] = "staffID2";
	
		
		
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
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "staff_info";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "department='TRAINING'";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatat_facilities_timetable["staffID2"] = $fdata;

	
$tables_data["t_facilities_timetable"]=&$tdatat_facilities_timetable;
$field_labels["t_facilities_timetable"] = &$fieldLabelst_facilities_timetable;
$fieldToolTips["t_facilities_timetable"] = &$fieldToolTipst_facilities_timetable;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["t_facilities_timetable"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["t_facilities_timetable"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_t_facilities_timetable()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  fid,  courseID,  start_time,  end_time,  staffID,  `date`,  DAYNAME(date) AS `day`,  WEEK(date) AS week,  MONTH(date) AS `month`,  YEAR(date) AS `year`,  facility,  program,  batch,  `class`,  endate,  legend,  room,  staffID2";
$proto0["m_strFrom"] = "FROM t_facilities_timetable";
$proto0["m_strWhere"] = "(endate IS NOT NULL)";
$proto0["m_strOrderBy"] = "ORDER BY `date` DESC";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "endate IS NOT NULL";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "endate",
	"m_strTable" => "t_facilities_timetable"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "IS NOT NULL";
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
	"m_strName" => "fid",
	"m_strTable" => "t_facilities_timetable"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "courseID",
	"m_strTable" => "t_facilities_timetable"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "start_time",
	"m_strTable" => "t_facilities_timetable"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "end_time",
	"m_strTable" => "t_facilities_timetable"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
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
	"m_strName" => "facility",
	"m_strTable" => "t_facilities_timetable"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "program",
	"m_strTable" => "t_facilities_timetable"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "batch",
	"m_strTable" => "t_facilities_timetable"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "class",
	"m_strTable" => "t_facilities_timetable"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "endate",
	"m_strTable" => "t_facilities_timetable"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "legend",
	"m_strTable" => "t_facilities_timetable"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "room",
	"m_strTable" => "t_facilities_timetable"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "staffID2",
	"m_strTable" => "t_facilities_timetable"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "t_facilities_timetable";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "id";
$proto48["m_columns"][] = "fid";
$proto48["m_columns"][] = "courseID";
$proto48["m_columns"][] = "start_time";
$proto48["m_columns"][] = "end_time";
$proto48["m_columns"][] = "staffID";
$proto48["m_columns"][] = "staffID2";
$proto48["m_columns"][] = "date";
$proto48["m_columns"][] = "endate";
$proto48["m_columns"][] = "facility";
$proto48["m_columns"][] = "program";
$proto48["m_columns"][] = "batch";
$proto48["m_columns"][] = "class";
$proto48["m_columns"][] = "legend";
$proto48["m_columns"][] = "room";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_alias"] = "";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = "0";
$proto49["m_inBrackets"] = "0";
$proto49["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "t_facilities_timetable"
));

$proto51["m_column"]=$obj;
$proto51["m_bAsc"] = 0;
$proto51["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto51);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_facilities_timetable = createSqlQuery_t_facilities_timetable();
																			$tdatat_facilities_timetable[".sqlquery"] = $queryData_t_facilities_timetable;

include_once(getabspath("include/t_facilities_timetable_events.php"));
$tableEvents["t_facilities_timetable"] = new eventclass_t_facilities_timetable;
$tdatat_facilities_timetable[".hasEvents"] = true;

$cipherer = new RunnerCipherer("t_facilities_timetable");

?>