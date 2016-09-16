<?php
require_once(getabspath("classes/cipherer.php"));
$tdataReport_Absent = array();
	$tdataReport_Absent[".NumberOfChars"] = 80; 
	$tdataReport_Absent[".ShortName"] = "Report_Absent";
	$tdataReport_Absent[".OwnerID"] = "";
	$tdataReport_Absent[".OriginalTable"] = "student_info";

//	field labels
$fieldLabelsReport_Absent = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReport_Absent["English"] = array();
	$fieldToolTipsReport_Absent["English"] = array();
	$fieldLabelsReport_Absent["English"]["StudentID"] = "Student";
	$fieldToolTipsReport_Absent["English"]["StudentID"] = "";
	$fieldLabelsReport_Absent["English"]["courseID"] = "Course";
	$fieldToolTipsReport_Absent["English"]["courseID"] = "";
	$fieldLabelsReport_Absent["English"]["reason"] = "Reason";
	$fieldToolTipsReport_Absent["English"]["reason"] = "";
	$fieldLabelsReport_Absent["English"]["ABS"] = "ABS";
	$fieldToolTipsReport_Absent["English"]["ABS"] = "";
	$fieldLabelsReport_Absent["English"]["total_hour"] = "Total Hour";
	$fieldToolTipsReport_Absent["English"]["total_hour"] = "";
	if (count($fieldToolTipsReport_Absent["English"]))
		$tdataReport_Absent[".isUseToolTips"] = true;
}
	
	



$tdataReport_Absent[".shortTableName"] = "Report_Absent";
$tdataReport_Absent[".nSecOptions"] = 0;
$tdataReport_Absent[".recsPerRowList"] = 1;
$tdataReport_Absent[".mainTableOwnerID"] = "";
$tdataReport_Absent[".moveNext"] = 1;
$tdataReport_Absent[".nType"] = 1;

$tdataReport_Absent[".strOriginalTableName"] = "student_info";




$tdataReport_Absent[".showAddInPopup"] = false;

$tdataReport_Absent[".showEditInPopup"] = false;

$tdataReport_Absent[".showViewInPopup"] = false;

$tdataReport_Absent[".fieldsForRegister"] = array();
	
$tdataReport_Absent[".listAjax"] = false;

	$tdataReport_Absent[".audit"] = true;

	$tdataReport_Absent[".locking"] = false;

$tdataReport_Absent[".listIcons"] = true;

$tdataReport_Absent[".exportTo"] = true;



$tdataReport_Absent[".showSimpleSearchOptions"] = true;

$tdataReport_Absent[".showSearchPanel"] = true;

if (isMobile())
	$tdataReport_Absent[".isUseAjaxSuggest"] = false;
else 
	$tdataReport_Absent[".isUseAjaxSuggest"] = true;

$tdataReport_Absent[".rowHighlite"] = true;

// button handlers file names

$tdataReport_Absent[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReport_Absent[".isUseTimeForSearch"] = false;




$tdataReport_Absent[".allSearchFields"] = array();

$tdataReport_Absent[".allSearchFields"][] = "courseID";
$tdataReport_Absent[".allSearchFields"][] = "reason";
$tdataReport_Absent[".allSearchFields"][] = "ABS";
$tdataReport_Absent[".allSearchFields"][] = "total_hour";
$tdataReport_Absent[".allSearchFields"][] = "StudentID";

$tdataReport_Absent[".googleLikeFields"][] = "courseID";
$tdataReport_Absent[".googleLikeFields"][] = "reason";
$tdataReport_Absent[".googleLikeFields"][] = "ABS";
$tdataReport_Absent[".googleLikeFields"][] = "total_hour";


$tdataReport_Absent[".advSearchFields"][] = "courseID";
$tdataReport_Absent[".advSearchFields"][] = "reason";
$tdataReport_Absent[".advSearchFields"][] = "ABS";
$tdataReport_Absent[".advSearchFields"][] = "total_hour";
$tdataReport_Absent[".advSearchFields"][] = "StudentID";

$tdataReport_Absent[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataReport_Absent[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReport_Absent[".strOrderBy"] = $tstrOrderBy;

$tdataReport_Absent[".orderindexes"] = array();

$tdataReport_Absent[".sqlHead"] = "SELECT student_absent.StudentID,  student_absent.courseID,  student_absent.reason,  coalesce(sum(reason='ABS'), 0) AS ABS,  program_course.total_hour";
$tdataReport_Absent[".sqlFrom"] = "FROM student_absent  INNER JOIN program_course ON student_absent.courseID = program_course.CourseID  INNER JOIN t_facilities_timetable ON student_absent.courseID = t_facilities_timetable.courseID AND student_absent.dates = t_facilities_timetable.`date`";
$tdataReport_Absent[".sqlWhereExpr"] = "";
$tdataReport_Absent[".sqlTail"] = "GROUP BY student_absent.StudentID, student_absent.courseID";

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
$arrEditTabs[] = array('tabId'=>'Family_Info1',
					   'tabName'=>"Family Info",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>28,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>35,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>45,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Absent[".arrEditTabs"] = $arrEditTabs;

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
$arrAddTabs[] = array('tabId'=>'Family_Info1',
					  'tabName'=>"Family Info",
					  'nType'=>'0',
					  'nOrder'=>19,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Next_Of_Kin1',
					  'tabName'=>"Next Of Kin",
					  'nType'=>'0',
					  'nOrder'=>28,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Campus_Info1',
					  'tabName'=>"Campus Info",
					  'nType'=>'0',
					  'nOrder'=>35,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Medical1',
					  'tabName'=>"Medical",
					  'nType'=>'0',
					  'nOrder'=>44,
					  'tabGroup'=>1,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataReport_Absent[".arrAddTabs"] = $arrAddTabs;

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
$arrViewTabs[] = array('tabId'=>'Family_Info1',
					   'tabName'=>"Family Info",
					   'nType'=>'0',
					   'nOrder'=>19,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Next_Of_Kin1',
					   'tabName'=>"Next Of Kin",
					   'nType'=>'0',
					   'nOrder'=>28,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Campus_Info1',
					   'tabName'=>"Campus Info",
					   'nType'=>'0',
					   'nOrder'=>35,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Medical1',
					   'tabName'=>"Medical",
					   'nType'=>'0',
					   'nOrder'=>44,
					   'tabGroup'=>1,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataReport_Absent[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReport_Absent[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReport_Absent[".arrGroupsPerPage"] = $arrGPP;

$tableKeysReport_Absent = array();
$tableKeysReport_Absent[] = "StudentID";
$tdataReport_Absent[".Keys"] = $tableKeysReport_Absent;

$tdataReport_Absent[".listFields"] = array();
$tdataReport_Absent[".listFields"][] = "courseID";
$tdataReport_Absent[".listFields"][] = "reason";
$tdataReport_Absent[".listFields"][] = "ABS";
$tdataReport_Absent[".listFields"][] = "total_hour";
$tdataReport_Absent[".listFields"][] = "StudentID";

$tdataReport_Absent[".viewFields"] = array();

$tdataReport_Absent[".addFields"] = array();

$tdataReport_Absent[".inlineAddFields"] = array();

$tdataReport_Absent[".editFields"] = array();

$tdataReport_Absent[".inlineEditFields"] = array();

$tdataReport_Absent[".exportFields"] = array();
$tdataReport_Absent[".exportFields"][] = "courseID";
$tdataReport_Absent[".exportFields"][] = "reason";
$tdataReport_Absent[".exportFields"][] = "ABS";
$tdataReport_Absent[".exportFields"][] = "total_hour";
$tdataReport_Absent[".exportFields"][] = "StudentID";

$tdataReport_Absent[".printFields"] = array();

//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_absent";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "student_absent.StudentID";
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataReport_Absent["StudentID"] = $fdata;
//	courseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "courseID";
	$fdata["GoodName"] = "courseID";
	$fdata["ownerTable"] = "student_absent";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "courseID"; 
		$fdata["FullName"] = "student_absent.courseID";
	
		
		
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
	$edata["DisplayField"] = "Name";
	
		
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
	
		
		
	$tdataReport_Absent["courseID"] = $fdata;
//	reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "reason";
	$fdata["GoodName"] = "reason";
	$fdata["ownerTable"] = "student_absent";
	$fdata["Label"] = "Reason"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "reason"; 
		$fdata["FullName"] = "student_absent.reason";
	
		
		
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
	
		
		
	$tdataReport_Absent["reason"] = $fdata;
//	ABS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ABS";
	$fdata["GoodName"] = "ABS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "ABS"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ABS"; 
		$fdata["FullName"] = "coalesce(sum(reason='ABS'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
	
		
		
	$tdataReport_Absent["ABS"] = $fdata;
//	total_hour
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_hour";
	$fdata["GoodName"] = "total_hour";
	$fdata["ownerTable"] = "program_course";
	$fdata["Label"] = "Total Hour"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdataReport_Absent["total_hour"] = $fdata;

	
$tables_data["Report_Absent"]=&$tdataReport_Absent;
$field_labels["Report_Absent"] = &$fieldLabelsReport_Absent;
$fieldToolTips["Report_Absent"] = &$fieldToolTipsReport_Absent;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Report_Absent"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Report_Absent"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Report_Absent()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "student_absent.StudentID,  student_absent.courseID,  student_absent.reason,  coalesce(sum(reason='ABS'), 0) AS ABS,  program_course.total_hour";
$proto0["m_strFrom"] = "FROM student_absent  INNER JOIN program_course ON student_absent.courseID = program_course.CourseID  INNER JOIN t_facilities_timetable ON student_absent.courseID = t_facilities_timetable.courseID AND student_absent.dates = t_facilities_timetable.`date`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY student_absent.StudentID, student_absent.courseID";
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
	"m_strTable" => "student_absent"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "courseID",
	"m_strTable" => "student_absent"
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
	"m_sql" => "sum(reason='ABS')"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto12);

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "ABS";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "total_hour",
	"m_strTable" => "program_course"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "student_absent";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "abid";
$proto18["m_columns"][] = "StudentID";
$proto18["m_columns"][] = "courseID";
$proto18["m_columns"][] = "dates";
$proto18["m_columns"][] = "reason";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
												$proto21=array();
$proto21["m_link"] = "SQLL_INNERJOIN";
			$proto22=array();
$proto22["m_strName"] = "program_course";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "pcid";
$proto22["m_columns"][] = "ProgramID";
$proto22["m_columns"][] = "BatchID";
$proto22["m_columns"][] = "CourseID";
$proto22["m_columns"][] = "Semester";
$proto22["m_columns"][] = "total_hour";
$proto22["m_columns"][] = "credit";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "student_absent.courseID = program_course.CourseID";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "courseID",
	"m_strTable" => "student_absent"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "= program_course.CourseID";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
												$proto25=array();
$proto25["m_link"] = "SQLL_INNERJOIN";
			$proto26=array();
$proto26["m_strName"] = "t_facilities_timetable";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "fid";
$proto26["m_columns"][] = "courseID";
$proto26["m_columns"][] = "start_time";
$proto26["m_columns"][] = "end_time";
$proto26["m_columns"][] = "staffID";
$proto26["m_columns"][] = "staffID2";
$proto26["m_columns"][] = "date";
$proto26["m_columns"][] = "endate";
$proto26["m_columns"][] = "facility";
$proto26["m_columns"][] = "program";
$proto26["m_columns"][] = "batch";
$proto26["m_columns"][] = "class";
$proto26["m_columns"][] = "legend";
$proto26["m_columns"][] = "room";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "student_absent.courseID = t_facilities_timetable.courseID AND student_absent.dates = t_facilities_timetable.`date`";
$proto27["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "student_absent.courseID = t_facilities_timetable.courseID AND student_absent.dates = t_facilities_timetable.`date`"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
						$proto29=array();
$proto29["m_sql"] = "student_absent.courseID = t_facilities_timetable.courseID";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "courseID",
	"m_strTable" => "student_absent"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "= t_facilities_timetable.courseID";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

			$proto27["m_contained"][]=$obj;
						$proto31=array();
$proto31["m_sql"] = "student_absent.dates = t_facilities_timetable.`date`";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "dates",
	"m_strTable" => "student_absent"
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "= t_facilities_timetable.`date`";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

			$proto27["m_contained"][]=$obj;
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_absent"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "courseID",
	"m_strTable" => "student_absent"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Report_Absent = createSqlQuery_Report_Absent();
					$tdataReport_Absent[".sqlquery"] = $queryData_Report_Absent;

$tableEvents["Report_Absent"] = new eventsBase;
$tdataReport_Absent[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Report_Absent");

?>