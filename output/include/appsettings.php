<?php
$dDebug = false;
$dSQL = "";

$bSubqueriesSupported=true;

$tables_data = array();
$page_layouts = array();
$field_labels = array();
$fieldToolTips = array();

include(getabspath('classes/layout.php'));

//	custom labels
$custom_labels = array();
$custom_labels["English"] = array();

/**
 *  Define constants of page name 
 */
define('PAGE_LIST',"list");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_RPRINT',"rprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_ADMIN_MEMBERS',"admin_members");
define('PAGE_ADMIN_RIGHTS',"admin_rights");

define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);

define("EDIT_SIMPLE",0);
define("EDIT_INLINE",1);
define("EDIT_ONTHEFLY",2);
define("EDIT_POPUP",3);

define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("SEARCH_SIMPLE",0);
define("SEARCH_LOAD_CONTROL",1);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

$globalSettings = array();
$globalSettings["nLoginMethod"] = 1;
$globalSettings["dbType"] = 0;


$globalSettings["isDynamicPerm"] = true;



$globalSettings["createLoginPage"] = true;
$globalSettings["isUseEncryption"] = 0;
$globalSettings["encryptionKey"] = "";

$globalSettings["apiGoogleMapsCode"] = "";


$globalSettings["useBuiltInMailer"] = true;

$globalSettings["returnToActualListPage"] = true;

/**
 * If true then detail table name will be printed before detail table on the view page 
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup  
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["openPDFFileDirectly"] = true;

$globalSettings["override"] = array();


$wr_is_standalone = false;
$WRAdminPagePassword = "";

$strLeftWrapper = "`";
$strRightWrapper = "`";

$cLoginTable = "user";
$cDisplayNameField = "fullname";
$cUserNameField	= "username";
$cPasswordField	= "password";
$cUserGroupField = "role";
$cEmailField = "umail";

if ($cDisplayNameField == ''){
	$cDisplayNameField = $cUserNameField;
}

$cDisplayNameFieldType	= 200;
$cUserNameFieldType	= 200;
$cPasswordFieldType	= 200;
$cEmailFieldType = 200;

						
						
				$cPasswordFieldType	= 200;
		
						
		$cUserNameFieldType	= 200;
				
						
						
						$cEmailFieldType = 200;

$gPermissionsRefreshTime = 0;
$gPermissionsRead = false;

$nDBType = 0;

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";

$includes_js = array();
$includes_jsreq = array();
$includes_css = array();

$mlang_messages = array();
$mlang_charsets = array();

// table captions
$tableCaptions = array();
$tableCaptions["English"] = array();
$tableCaptions["English"]["student_info"] = "Student Info";
$tableCaptions["English"]["student_extracurricular"] = "Extracurricular";
$tableCaptions["English"]["student_course"] = "Module";
$tableCaptions["English"]["student_qualification"] = "Qualification";
$tableCaptions["English"]["student_discipline"] = "Discipline";
$tableCaptions["English"]["student_hostel"] = "Hostel";
$tableCaptions["English"]["course"] = "Module";
$tableCaptions["English"]["program"] = "Course";
$tableCaptions["English"]["staff_compulsory_training"] = "Staff Training";
$tableCaptions["English"]["staff_employement_history"] = "Staff Employment History";
$tableCaptions["English"]["staff_discipline"] = "Staff Discipline";
$tableCaptions["English"]["staff_info"] = "Staff Info";
$tableCaptions["English"]["staff_qualification"] = "Staff Qualification";
$tableCaptions["English"]["setting"] = "Field Name";
$tableCaptions["English"]["student_school"] = "School Academic Result";
$tableCaptions["English"]["program_course"] = "Program Course";
$tableCaptions["English"]["group"] = "Class";
$tableCaptions["English"]["campus_setting"] = "Campus Setting";
$tableCaptions["English"]["student_absent"] = "Absent";
$tableCaptions["English"]["student_industry_training"] = "Student Industry Training";
$tableCaptions["English"]["user"] = "User";
$tableCaptions["English"]["setting_bill_item"] = "Setting Bill Item";
$tableCaptions["English"]["program_billing"] = "Course Charges";
$tableCaptions["English"]["job"] = "Occupation";
$tableCaptions["English"]["set_intake_category"] = "Set Intake Category";
$tableCaptions["English"]["set_setting_category"] = "Set Setting Category";
$tableCaptions["English"]["Marking_Batch"] = "Marking";
$tableCaptions["English"]["Report_Billing_Pending"] = "Report-Billing Pending";
$tableCaptions["English"]["Report_Billing_Paid"] = "Report-Billing Paid";
$tableCaptions["English"]["student_payment"] = "Payment";
$tableCaptions["English"]["LIST_Student_Billing"] = "Billing Record";
$tableCaptions["English"]["student_billing"] = "Student Billing";
$tableCaptions["English"]["report_bill_pending"] = "Report Bill Pending";
$tableCaptions["English"]["report_bill_paid"] = "Report Bill Paid";
$tableCaptions["English"]["Report_Family"] = "Report Family";
$tableCaptions["English"]["Report_Discipline"] = "Report Discipline";
$tableCaptions["English"]["Report_Extracurricular"] = "Report Extracurricular";
$tableCaptions["English"]["Report__Industry_Training"] = "Report- Industry Training";
$tableCaptions["English"]["Report_Compulsory_Training"] = "Report Compulsory Training";
$tableCaptions["English"]["Report_Sponsor"] = "Report Sponsor";
$tableCaptions["English"]["Report_Staff_Training"] = "Report Staff Training";
$tableCaptions["English"]["Report_Staff_Kin"] = "Report Staff Kin";
$tableCaptions["English"]["Report_Student_Course"] = "Report Student Course";
$tableCaptions["English"]["training"] = "Training";
$tableCaptions["English"]["Report_Student_Hostel"] = "Report Student Hostel";
$tableCaptions["English"]["Chart_no_student"] = "Chart No Student";
$tableCaptions["English"]["Report_Exam_Slip_Indiv"] = "Report Exam Slip Indiv";
$tableCaptions["English"]["Report_Exam_Slip_Batch"] = "Report Exam Slip Batch";
$tableCaptions["English"]["Report_Exam_Result_Indiv"] = "Report Exam Result Indiv";
$tableCaptions["English"]["Report_Exam_Result_Batch"] = "Report Exam Result Batch";
$tableCaptions["English"]["Report_Student_Class"] = "Report Student Class";
$tableCaptions["English"]["all"] = "All";
$tableCaptions["English"]["enroll"] = "Enroll";
$tableCaptions["English"]["staff_internal_history"] = "Staff History(MATA)";
$tableCaptions["English"]["calendar_qa"] = "Calendar Qa";
$tableCaptions["English"]["enroll_prospect"] = "Enroll Prospect";
$tableCaptions["English"]["Report_Exam_Summary"] = "Report Exam Summary";
$tableCaptions["English"]["Report_student_billing_overall"] = "Report Student Billing Overall";
$tableCaptions["English"]["Report_Sponsor_Overall"] = "Report Sponsor Overall";
$tableCaptions["English"]["Report_Student_Hostel_overall"] = "Report Student Hostel Overall";
$tableCaptions["English"]["Report_Student_Class_overall"] = "Report Student Class Overall";
$tableCaptions["English"]["Report_Student_Payment"] = "Report Student Payment";
$tableCaptions["English"]["ojt_company"] = "Ojt Company";
$tableCaptions["English"]["exam_eligible_seatno"] = "Exam Eligible Seatno";
$tableCaptions["English"]["exam_result_memo"] = "Exam Result Memo";
$tableCaptions["English"]["Report_Exam_Result_Batch_Whole"] = "Report Exam Result Batch Whole";
$tableCaptions["English"]["t_facilities_timetable"] = "T Facilities Timetable";
$tableCaptions["English"]["student_evaluation"] = "Student Evaluation";
$tableCaptions["English"]["Report_Student_Attendance"] = "Report Student Attendance";
$tableCaptions["English"]["Report_Instructor_Trade"] = "Report Instructor Trade";
$tableCaptions["English"]["student_course_dca"] = "Marking";
$tableCaptions["English"]["Evaluation_Batch_List"] = "Evaluation Batch List";
$tableCaptions["English"]["w_news"] = "News";
$tableCaptions["English"]["w_gallery_sub"] = "Sub Category Gallery";
$tableCaptions["English"]["w_pic"] = "Photo";
$tableCaptions["English"]["w_gallery"] = "Gallery";
$tableCaptions["English"]["w_faq"] = "W Faq";
$tableCaptions["English"]["w_slider"] = "W Slider";
$tableCaptions["English"]["Report_Exam_Slip_MOE"] = "Report Exam Slip MOE";
$tableCaptions["English"]["Report_Exam_Result_MOE"] = "Report Exam Result MOE";
$tableCaptions["English"]["Program_Batch"] = "Program Batch";
$tableCaptions["English"]["timetable_attendance"] = "Timetable Attendance";
$tableCaptions["English"]["Report_Absent"] = "Report Absent";
$tableCaptions["English"]["Report_Attendance"] = "Report";
$tableCaptions["English"]["Program_Batch_Bill"] = "Program Batch Bill";
$tableCaptions["English"]["T_Eva_Ass_Task"] = "T Eva Ass Task";
$tableCaptions["English"]["admin_rights"] = "Admin Rights";
$tableCaptions["English"]["campsysv621_ugrights"] = "Campsysv621 Ugrights";
$tableCaptions["English"]["admin_members"] = "Admin Members";
$tableCaptions["English"]["admin_users"] = "Add/Edit users";
$tableCaptions["English"]["support"] = "Support";
$tableCaptions["English"]["w_course"] = "W Course";
$tableCaptions["English"]["Chart_Exam_Internal"] = "Chart Exam Internal";
$tableCaptions["English"]["student_billing_item"] = "Item";
$tableCaptions["English"]["student_bill_list"] = "Student Bill List";
$tableCaptions["English"]["student_bill_pay"] = "Pay";
$tableCaptions["English"]["course_moe2"] = "Course Moe2";
$tableCaptions["English"]["course_moe2_sem2"] = "Course Moe2 Sem2";
$tableCaptions["English"]["course_moe2_sem3"] = "Course Moe2 Sem3";
$tableCaptions["English"]["course_moe2_sem4"] = "Course Moe2 Sem4";
$tableCaptions["English"]["course_moe2_sem5"] = "Course Moe2 Sem5";
$tableCaptions["English"]["course_moe2_sem6"] = "Course Moe2 Sem6";
$tableCaptions["English"]["Marking_Student_list"] = "Marking Student List";
$tableCaptions["English"]["Report_Attendance_Student_List"] = "Report Attendance Student List";
$tableCaptions["English"]["Report_Student_Course_List"] = "Report Student Course List";
$tableCaptions["English"]["student_course_DCA_List_student2"] = "DCA Exan";
$tableCaptions["English"]["student_bill_list2"] = "Student Bill List2";
$tableCaptions["English"]["student_bill_statement"] = "Upload Statement";

$globalEvents = new class_GlobalEvents;
$tableEvents = array();

$mlang_defaultlang = "English";


$conn = db_connect();
if(!isLogged())
{
	$allowGuest = guestHasPermissions();
	$scriptname = getFileNameFromURL();
	if($allowGuest && $scriptname!="login.php" && $scriptname!="remind.php" && $scriptname!="register.php" && $scriptname!="registersuggest.php")
	{
		DoLogin(true);
	}
}

$isGroupSecurity = true;

$isUseRTEBasic = true;

$isUseRTECK = false;

$isUseRTEInnova = false;

$caseInsensitiveUsername = 0;

include(getabspath('classes/projectsettings.php'));


?>