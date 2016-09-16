<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Attendance = array();
	$tdataReport_Attendance[".NumberOfChars"] = 80; 
	$tdataReport_Attendance[".ShortName"] = "Report_Attendance";
	$tdataReport_Attendance[".OwnerID"] = "";
	$tdataReport_Attendance[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Attendance = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Attendance["English"] = array();
	$fieldToolTipsReport_Attendance["English"] = array();
	$fieldLabelsReport_Attendance["English"]["CourseID"] = "Module";
	$fieldToolTipsReport_Attendance["English"]["CourseID"] = "";
	$fieldLabelsReport_Attendance["English"]["StudentID"] = "Student ";
	$fieldToolTipsReport_Attendance["English"]["StudentID"] = "";
	$fieldLabelsReport_Attendance["English"]["reason"] = "Reason";
	$fieldToolTipsReport_Attendance["English"]["reason"] = "";
	$fieldLabelsReport_Attendance["English"]["abs_count"] = "Absent Count";
	$fieldToolTipsReport_Attendance["English"]["abs_count"] = "";
	$fieldLabelsReport_Attendance["English"]["abs_hour"] = "Absent Hour";
	$fieldToolTipsReport_Attendance["English"]["abs_hour"] = "";
	$fieldLabelsReport_Attendance["English"]["total_hour"] = "Module Hour";
	$fieldToolTipsReport_Attendance["English"]["total_hour"] = "";
	$fieldLabelsReport_Attendance["English"]["att_percent"] = "Total Attendance(%)";
	$fieldToolTipsReport_Attendance["English"]["att_percent"] = "";
	if (count($fieldToolTipsReport_Attendance["English"]))
		$tdataReport_Attendance[".isUseToolTips"] = true;
}
	
	



$tdataReport_Attendance[".shortTableName"] = "Report_Attendance";
$tdataReport_Attendance[".nSecOptions"] = 0;
$tdataReport_Attendance[".recsPerRowList"] = 1;
$tdataReport_Attendance[".mainTableOwnerID"] = "";
$tdataReport_Attendance[".moveNext"] = 1;
$tdataReport_Attendance[".nType"] = 1;

$tdataReport_Attendance[".strOriginalTableName"] = "student_info";




$tdataReport_Attendance[".showAddInPopup"] = false;

$tdataReport_Attendance[".showEditInPopup"] = false;

$tdataReport_Attendance[".showViewInPopup"] = false;

$tdataReport_Attendance[".fieldsForRegister"] = array();
	
$tdataReport_Attendance[".listAjax"] = false;

	$tdataReport_Attendance[".audit"] = true;

	$tdataReport_Attendance[".locking"] = false;

$tdataReport_Attendance[".listIcons"] = true;




$tdataReport_Attendance[".showSimpleSearchOptions"] = true;

$tdataReport_Attendance[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Attendance[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Attendance[".isUseAjaxSuggest"] = true;

$tdataReport_Attendance[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Attendance[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Attendance[".isUseTimeForSearch"] = false;




$tdataReport_Attendance[".allSearchFields"] = array();

$tdataReport_Attendance[".allSearchFields"][] = "CourseID";

$tdataReport_Attendance[".googleLikeFields"][] = "StudentID";

$tdataReport_Attendance[".panelSearchFields"][] = "CourseID";
$tdataReport_Attendance[".panelSearchFields"][] = "StudentID";

$tdataReport_Attendance[".advSearchFields"][] = "CourseID";

$tdataReport_Attendance[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Attendance[".pageSize"] = 40;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Attendance[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Attendance[".orderindexes"] = array();

$tdataReport_Attendance[".sqlHead"] = "SELECT student_course.StudentID,  student_course.CourseID,  student_absent.reason,  coalesce(sum(student_absent.reason='ABS' OR student_absent.reason='L'), 0) AS abs_count,  SUM(TIME_FORMAT(TIMEDIFF(t_facilities_timetable.end_time,t_facilities_timetable.start_time) ,'%H')) AS abs_hour,  program_course.total_hour,  100-(SUM(TIME_FORMAT(TIMEDIFF(t_facilities_timetable.end_time,t_facilities_timetable.start_time) ,'%H')) / program_course.total_hour*100) AS att_percent";
$tdataReport_Attendance[".sqlFrom"] = "FROM student_absent  INNER JOIN t_facilities_timetable ON student_absent.courseID = t_facilities_timetable.courseID AND student_absent.dates = t_facilities_timetable.`date`  INNER JOIN program_course ON student_absent.courseID = program_course.CourseID  RIGHT OUTER JOIN student_course ON student_course.StudentID = student_absent.StudentID AND student_course.CourseID = student_absent.courseID";
$tdataReport_Attendance[".sqlWhereExpr"] = "";
$tdataReport_Attendance[".sqlTail"] = "GROUP BY student_course.StudentID, student_course.CourseID";

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
$tdataReport_Attendance[".arrEditTabs"] = $arrEditTabs;

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
$tdataReport_Attendance[".arrAddTabs"] = $arrAddTabs;

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
$tdataReport_Attendance[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Attendance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Attendance[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Attendance = array();
$tdataReport_Attendance[".Keys"] = $tableKeysReport_Attendance;

$tdataReport_Attendance[".listFields"] = array();
$tdataReport_Attendance[".listFields"][] = "CourseID";
$tdataReport_Attendance[".listFields"][] = "abs_count";
$tdataReport_Attendance[".listFields"][] = "abs_hour";
$tdataReport_Attendance[".listFields"][] = "total_hour";
$tdataReport_Attendance[".listFields"][] = "att_percent";

$tdataReport_Attendance[".viewFields"] = array();

$tdataReport_Attendance[".addFields"] = array();

$tdataReport_Attendance[".inlineAddFields"] = array();

$tdataReport_Attendance[".editFields"] = array();

$tdataReport_Attendance[".inlineEditFields"] = array();

$tdataReport_Attendance[".exportFields"] = array();

$tdataReport_Attendance[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Student "; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_course.StudentID";
	
		
		
				
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Attendance["StudentID"] = $fdata;
//	CourseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CourseID";
	$fdata["GoodName"] = "CourseID";
	$fdata["ownerTable"] = "student_course";
	$fdata["Label"] = "Module"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "CourseID"; 
		$fdata["FullName"] = "student_course.CourseID";
	
		
		
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
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Attendance["CourseID"] = $fdata;
//	reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "reason";
	$fdata["GoodName"] = "reason";
	$fdata["ownerTable"] = "student_absent";
	$fdata["Label"] = "Reason"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "reason"; 
		$fdata["FullName"] = "student_absent.reason";
	
		
		
				
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
	
		
		
	$tdataReport_Attendance["reason"] = $fdata;
//	abs_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "abs_count";
	$fdata["GoodName"] = "abs_count";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Absent Count"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "abs_count"; 
		$fdata["FullName"] = "coalesce(sum(student_absent.reason='ABS' OR student_absent.reason='L'), 0)";
	
		
		
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
	
		
		
	$tdataReport_Attendance["abs_count"] = $fdata;
//	abs_hour
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "abs_hour";
	$fdata["GoodName"] = "abs_hour";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Absent Hour"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "abs_hour"; 
		$fdata["FullName"] = "SUM(TIME_FORMAT(TIMEDIFF(t_facilities_timetable.end_time,t_facilities_timetable.start_time) ,'%H'))";
	
		
		
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
	
		
		
	$tdataReport_Attendance["abs_hour"] = $fdata;
//	total_hour
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "total_hour";
	$fdata["GoodName"] = "total_hour";
	$fdata["ownerTable"] = "program_course";
	$fdata["Label"] = "Module Hour"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "total_hour"; 
		$fdata["FullName"] = "program_course.total_hour";
	
		
		
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
	
		
		
	$tdataReport_Attendance["total_hour"] = $fdata;
//	att_percent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "att_percent";
	$fdata["GoodName"] = "att_percent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Total Attendance(%)"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "att_percent"; 
		$fdata["FullName"] = "100-(SUM(TIME_FORMAT(TIMEDIFF(t_facilities_timetable.end_time,t_facilities_timetable.start_time) ,'%H')) / program_course.total_hour*100)";
	
		
		
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
	
		
		
	$tdataReport_Attendance["att_percent"] = $fdata;

	
$tables_data["Report_Attendance"]=&$tdataReport_Attendance;
$field_labels["Report_Attendance"] = &$fieldLabelsReport_Attendance;
$fieldToolTips["Report_Attendance"] = &$fieldToolTipsReport_Attendance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Attendance"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Attendance"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="Report_Attendance_Student_List";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Report_Attendance_Student_List";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["Report_Attendance"][$mIndex] = $masterParams;	
		$masterTablesData["Report_Attendance"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["Report_Attendance"][$mIndex]["detailKeys"][]="StudentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Attendance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_course.StudentID,  student_course.CourseID,  student_absent.reason,  coalesce(sum(student_absent.reason='ABS' OR student_absent.reason='L'), 0) AS abs_count,  SUM(TIME_FORMAT(TIMEDIFF(t_facilities_timetable.end_time,t_facilities_timetable.start_time) ,'%H')) AS abs_hour,  program_course.total_hour,  100-(SUM(TIME_FORMAT(TIMEDIFF(t_facilities_timetable.end_time,t_facilities_timetable.start_time) ,'%H')) / program_course.total_hour*100) AS att_percent";
$proto0["m_strFrom"] = "FROM student_absent  INNER JOIN t_facilities_timetable ON student_absent.courseID = t_facilities_timetable.courseID AND student_absent.dates = t_facilities_timetable.`date`  INNER JOIN program_course ON student_absent.courseID = program_course.CourseID  RIGHT OUTER JOIN student_course ON student_course.StudentID = student_absent.StudentID AND student_course.CourseID = student_absent.courseID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY student_course.StudentID, student_course.CourseID";
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
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "CourseID",
	"m_strTable" => "student_course"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "reason",
	"m_strTable" => "student_absent"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_CUSTOM";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(student_absent.reason='ABS' OR student_absent.reason='L')"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto12);

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "abs_count";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_SUM";
$proto16["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "TIME_FORMAT(TIMEDIFF(t_facilities_timetable.end_time,t_facilities_timetable.start_time) ,'%H')"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "abs_hour";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "total_hour",
	"m_strTable" => "program_course"
));

$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "100-(SUM(TIME_FORMAT(TIMEDIFF(t_facilities_timetable.end_time,t_facilities_timetable.start_time) ,'%H')) / program_course.total_hour*100)"
));

$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "att_percent";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "student_absent";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "abid";
$proto23["m_columns"][] = "StudentID";
$proto23["m_columns"][] = "courseID";
$proto23["m_columns"][] = "dates";
$proto23["m_columns"][] = "reason";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_alias"] = "";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = "0";
$proto24["m_inBrackets"] = "0";
$proto24["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "t_facilities_timetable";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "fid";
$proto27["m_columns"][] = "courseID";
$proto27["m_columns"][] = "start_time";
$proto27["m_columns"][] = "end_time";
$proto27["m_columns"][] = "staffID";
$proto27["m_columns"][] = "staffID2";
$proto27["m_columns"][] = "date";
$proto27["m_columns"][] = "endate";
$proto27["m_columns"][] = "facility";
$proto27["m_columns"][] = "program";
$proto27["m_columns"][] = "batch";
$proto27["m_columns"][] = "class";
$proto27["m_columns"][] = "legend";
$proto27["m_columns"][] = "room";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_alias"] = "";
$proto28=array();
$proto28["m_sql"] = "student_absent.courseID = t_facilities_timetable.courseID AND student_absent.dates = t_facilities_timetable.`date`";
$proto28["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "student_absent.courseID = t_facilities_timetable.courseID AND student_absent.dates = t_facilities_timetable.`date`"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
						$proto30=array();
$proto30["m_sql"] = "student_absent.courseID = t_facilities_timetable.courseID";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "courseID",
	"m_strTable" => "student_absent"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= t_facilities_timetable.courseID";
$proto30["m_havingmode"] = "0";
$proto30["m_inBrackets"] = "0";
$proto30["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto30);

			$proto28["m_contained"][]=$obj;
						$proto32=array();
$proto32["m_sql"] = "student_absent.dates = t_facilities_timetable.`date`";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "dates",
	"m_strTable" => "student_absent"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= t_facilities_timetable.`date`";
$proto32["m_havingmode"] = "0";
$proto32["m_inBrackets"] = "0";
$proto32["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto32);

			$proto28["m_contained"][]=$obj;
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = "0";
$proto28["m_inBrackets"] = "0";
$proto28["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_INNERJOIN";
			$proto35=array();
$proto35["m_strName"] = "program_course";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "pcid";
$proto35["m_columns"][] = "ProgramID";
$proto35["m_columns"][] = "BatchID";
$proto35["m_columns"][] = "CourseID";
$proto35["m_columns"][] = "Semester";
$proto35["m_columns"][] = "total_hour";
$proto35["m_columns"][] = "credit";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_alias"] = "";
$proto36=array();
$proto36["m_sql"] = "student_absent.courseID = program_course.CourseID";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "courseID",
	"m_strTable" => "student_absent"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= program_course.CourseID";
$proto36["m_havingmode"] = "0";
$proto36["m_inBrackets"] = "0";
$proto36["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_RIGHTJOIN";
			$proto39=array();
$proto39["m_strName"] = "student_course";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "ID";
$proto39["m_columns"][] = "StudentID";
$proto39["m_columns"][] = "CourseID";
$proto39["m_columns"][] = "Semester";
$proto39["m_columns"][] = "Credit";
$proto39["m_columns"][] = "e1";
$proto39["m_columns"][] = "e2";
$proto39["m_columns"][] = "e3";
$proto39["m_columns"][] = "e4";
$proto39["m_columns"][] = "ProgramID";
$proto39["m_columns"][] = "Eligible";
$proto39["m_columns"][] = "Seat";
$proto39["m_columns"][] = "Attendance";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_alias"] = "";
$proto40=array();
$proto40["m_sql"] = "student_course.StudentID = student_absent.StudentID AND student_course.CourseID = student_absent.courseID";
$proto40["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "student_course.StudentID = student_absent.StudentID AND student_course.CourseID = student_absent.courseID"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
						$proto42=array();
$proto42["m_sql"] = "student_course.StudentID = student_absent.StudentID";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= student_absent.StudentID";
$proto42["m_havingmode"] = "0";
$proto42["m_inBrackets"] = "0";
$proto42["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto42);

			$proto40["m_contained"][]=$obj;
						$proto44=array();
$proto44["m_sql"] = "student_course.CourseID = student_absent.courseID";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CourseID",
	"m_strTable" => "student_course"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= student_absent.courseID";
$proto44["m_havingmode"] = "0";
$proto44["m_inBrackets"] = "0";
$proto44["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto44);

			$proto40["m_contained"][]=$obj;
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = "0";
$proto40["m_inBrackets"] = "0";
$proto40["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_course"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "CourseID",
	"m_strTable" => "student_course"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Attendance = createSqlQuery_Report_Attendance();
							$tdataReport_Attendance[".sqlquery"] = $queryData_Report_Attendance;

include_once(getabspath("include/Report_Attendance_events.php"));
$tableEvents["Report_Attendance"] = new eventclass_Report_Attendance;
$tdataReport_Attendance[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Report_Attendance");

?>