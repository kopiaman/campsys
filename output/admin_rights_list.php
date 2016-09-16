<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/admin_rights_variables.php");


$gsqlHead="select `username` ";
$gsqlFrom="from `user`";
$gsqlWhereExpr="";
$gsqlTail="";
// $gstrSQL = "SELECT TableName,   GroupID,   AccessMask  FROM campsysv621_ugrights ";
$gstrSQL = $gQuery->gSQLWhere("");


if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(!IsAdmin())
{
	echo "<p>"."You don't have permissions to access this table"." <a href=\"login.php\">"."Back to login page"."</a></p>";
	return;
}



$layout = new TLayout("ug_rights2","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();

$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons","block"=>"savebuttons_block","substyle"=>1);


$layout->skins["ugcontrols"] = "1";
$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "1";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"ugrightsblock","block"=>"rights_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();


$layout->containers["left"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";
$layout->containers["uggroup"] = array();

$layout->containers["uggroup"][] = array("name"=>"ugrightsgroup","block"=>"","substyle"=>1);


$layout->skins["uggroup"] = "1";
$layout->blocks["left"][] = "uggroup";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "2";
$layout->blocks["top"][] = "search";$page_layouts["admin_rights_list"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');
include('classes/listpage.php');
include('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;
$nonAdminTablesRightsArr=array();
$nonAdminTablesArr=array();
$pageRights=array();
$nonAdminTablesArr[] = array("student_info","Student Info");
$nonAdminTablesRightsArr["student_info"]=array();
$pageRights["student_info"]["add"]=true;
$pageRights["student_info"]["edit"]=true;
$pageRights["student_info"]["delete"]=true;
$pageRights["student_info"]["list"]=true;
$pageRights["student_info"]["export"]=true;
$pageRights["student_info"]["import"]=true;

$nonAdminTablesArr[] = array("student_extracurricular","Extracurricular");
$nonAdminTablesRightsArr["student_extracurricular"]=array();
$pageRights["student_extracurricular"]["add"]=true;
$pageRights["student_extracurricular"]["edit"]=true;
$pageRights["student_extracurricular"]["delete"]=true;
$pageRights["student_extracurricular"]["list"]=true;
$pageRights["student_extracurricular"]["export"]=false;
$pageRights["student_extracurricular"]["import"]=false;

$nonAdminTablesArr[] = array("student_course","Module");
$nonAdminTablesRightsArr["student_course"]=array();
$pageRights["student_course"]["add"]=false;
$pageRights["student_course"]["edit"]=false;
$pageRights["student_course"]["delete"]=false;
$pageRights["student_course"]["list"]=true;
$pageRights["student_course"]["export"]=false;
$pageRights["student_course"]["import"]=false;

$nonAdminTablesArr[] = array("student_qualification","Qualification");
$nonAdminTablesRightsArr["student_qualification"]=array();
$pageRights["student_qualification"]["add"]=true;
$pageRights["student_qualification"]["edit"]=true;
$pageRights["student_qualification"]["delete"]=true;
$pageRights["student_qualification"]["list"]=true;
$pageRights["student_qualification"]["export"]=false;
$pageRights["student_qualification"]["import"]=false;

$nonAdminTablesArr[] = array("student_discipline","Discipline");
$nonAdminTablesRightsArr["student_discipline"]=array();
$pageRights["student_discipline"]["add"]=true;
$pageRights["student_discipline"]["edit"]=true;
$pageRights["student_discipline"]["delete"]=true;
$pageRights["student_discipline"]["list"]=true;
$pageRights["student_discipline"]["export"]=false;
$pageRights["student_discipline"]["import"]=false;

$nonAdminTablesArr[] = array("student_hostel","Hostel");
$nonAdminTablesRightsArr["student_hostel"]=array();
$pageRights["student_hostel"]["add"]=true;
$pageRights["student_hostel"]["edit"]=true;
$pageRights["student_hostel"]["delete"]=true;
$pageRights["student_hostel"]["list"]=true;
$pageRights["student_hostel"]["export"]=true;
$pageRights["student_hostel"]["import"]=false;

$nonAdminTablesArr[] = array("course","Module");
$nonAdminTablesRightsArr["course"]=array();
$pageRights["course"]["add"]=true;
$pageRights["course"]["edit"]=true;
$pageRights["course"]["delete"]=true;
$pageRights["course"]["list"]=true;
$pageRights["course"]["export"]=false;
$pageRights["course"]["import"]=false;

$nonAdminTablesArr[] = array("program","Course");
$nonAdminTablesRightsArr["program"]=array();
$pageRights["program"]["add"]=true;
$pageRights["program"]["edit"]=true;
$pageRights["program"]["delete"]=true;
$pageRights["program"]["list"]=true;
$pageRights["program"]["export"]=false;
$pageRights["program"]["import"]=false;

$nonAdminTablesArr[] = array("staff_compulsory_training","Staff Training");
$nonAdminTablesRightsArr["staff_compulsory_training"]=array();
$pageRights["staff_compulsory_training"]["add"]=true;
$pageRights["staff_compulsory_training"]["edit"]=true;
$pageRights["staff_compulsory_training"]["delete"]=true;
$pageRights["staff_compulsory_training"]["list"]=true;
$pageRights["staff_compulsory_training"]["export"]=false;
$pageRights["staff_compulsory_training"]["import"]=false;

$nonAdminTablesArr[] = array("staff_employement_history","Staff Employment History");
$nonAdminTablesRightsArr["staff_employement_history"]=array();
$pageRights["staff_employement_history"]["add"]=true;
$pageRights["staff_employement_history"]["edit"]=true;
$pageRights["staff_employement_history"]["delete"]=true;
$pageRights["staff_employement_history"]["list"]=true;
$pageRights["staff_employement_history"]["export"]=false;
$pageRights["staff_employement_history"]["import"]=false;

$nonAdminTablesArr[] = array("staff_discipline","Staff Discipline");
$nonAdminTablesRightsArr["staff_discipline"]=array();
$pageRights["staff_discipline"]["add"]=true;
$pageRights["staff_discipline"]["edit"]=true;
$pageRights["staff_discipline"]["delete"]=true;
$pageRights["staff_discipline"]["list"]=true;
$pageRights["staff_discipline"]["export"]=false;
$pageRights["staff_discipline"]["import"]=false;

$nonAdminTablesArr[] = array("staff_qualification","Staff Qualification");
$nonAdminTablesRightsArr["staff_qualification"]=array();
$pageRights["staff_qualification"]["add"]=true;
$pageRights["staff_qualification"]["edit"]=true;
$pageRights["staff_qualification"]["delete"]=true;
$pageRights["staff_qualification"]["list"]=true;
$pageRights["staff_qualification"]["export"]=false;
$pageRights["staff_qualification"]["import"]=false;

$nonAdminTablesArr[] = array("staff_info","Staff Info");
$nonAdminTablesRightsArr["staff_info"]=array();
$pageRights["staff_info"]["add"]=true;
$pageRights["staff_info"]["edit"]=true;
$pageRights["staff_info"]["delete"]=true;
$pageRights["staff_info"]["list"]=true;
$pageRights["staff_info"]["export"]=true;
$pageRights["staff_info"]["import"]=true;

$nonAdminTablesArr[] = array("setting","Field Name");
$nonAdminTablesRightsArr["setting"]=array();
$pageRights["setting"]["add"]=true;
$pageRights["setting"]["edit"]=true;
$pageRights["setting"]["delete"]=true;
$pageRights["setting"]["list"]=true;
$pageRights["setting"]["export"]=false;
$pageRights["setting"]["import"]=false;

$nonAdminTablesArr[] = array("student_school","School Academic Result");
$nonAdminTablesRightsArr["student_school"]=array();
$pageRights["student_school"]["add"]=true;
$pageRights["student_school"]["edit"]=true;
$pageRights["student_school"]["delete"]=true;
$pageRights["student_school"]["list"]=true;
$pageRights["student_school"]["export"]=false;
$pageRights["student_school"]["import"]=false;

$nonAdminTablesArr[] = array("program_course","Program Course");
$nonAdminTablesRightsArr["program_course"]=array();
$pageRights["program_course"]["add"]=true;
$pageRights["program_course"]["edit"]=true;
$pageRights["program_course"]["delete"]=true;
$pageRights["program_course"]["list"]=true;
$pageRights["program_course"]["export"]=false;
$pageRights["program_course"]["import"]=false;

$nonAdminTablesArr[] = array("group","Class");
$nonAdminTablesRightsArr["group"]=array();
$pageRights["group"]["add"]=true;
$pageRights["group"]["edit"]=true;
$pageRights["group"]["delete"]=true;
$pageRights["group"]["list"]=true;
$pageRights["group"]["export"]=false;
$pageRights["group"]["import"]=false;

$nonAdminTablesArr[] = array("campus_setting","Campus Setting");
$nonAdminTablesRightsArr["campus_setting"]=array();
$pageRights["campus_setting"]["add"]=false;
$pageRights["campus_setting"]["edit"]=true;
$pageRights["campus_setting"]["delete"]=false;
$pageRights["campus_setting"]["list"]=true;
$pageRights["campus_setting"]["export"]=false;
$pageRights["campus_setting"]["import"]=false;

$nonAdminTablesArr[] = array("student_absent","Absent");
$nonAdminTablesRightsArr["student_absent"]=array();
$pageRights["student_absent"]["add"]=true;
$pageRights["student_absent"]["edit"]=true;
$pageRights["student_absent"]["delete"]=true;
$pageRights["student_absent"]["list"]=true;
$pageRights["student_absent"]["export"]=false;
$pageRights["student_absent"]["import"]=false;

$nonAdminTablesArr[] = array("student_industry_training","Student Industry Training");
$nonAdminTablesRightsArr["student_industry_training"]=array();
$pageRights["student_industry_training"]["add"]=true;
$pageRights["student_industry_training"]["edit"]=true;
$pageRights["student_industry_training"]["delete"]=true;
$pageRights["student_industry_training"]["list"]=true;
$pageRights["student_industry_training"]["export"]=false;
$pageRights["student_industry_training"]["import"]=false;

$nonAdminTablesArr[] = array("user","User");
$nonAdminTablesRightsArr["user"]=array();
$pageRights["user"]["add"]=false;
$pageRights["user"]["edit"]=false;
$pageRights["user"]["delete"]=false;
$pageRights["user"]["list"]=true;
$pageRights["user"]["export"]=false;
$pageRights["user"]["import"]=false;

$nonAdminTablesArr[] = array("setting_bill_item","Setting Bill Item");
$nonAdminTablesRightsArr["setting_bill_item"]=array();
$pageRights["setting_bill_item"]["add"]=true;
$pageRights["setting_bill_item"]["edit"]=true;
$pageRights["setting_bill_item"]["delete"]=true;
$pageRights["setting_bill_item"]["list"]=true;
$pageRights["setting_bill_item"]["export"]=false;
$pageRights["setting_bill_item"]["import"]=false;

$nonAdminTablesArr[] = array("program_billing","Course Charges");
$nonAdminTablesRightsArr["program_billing"]=array();
$pageRights["program_billing"]["add"]=true;
$pageRights["program_billing"]["edit"]=true;
$pageRights["program_billing"]["delete"]=true;
$pageRights["program_billing"]["list"]=true;
$pageRights["program_billing"]["export"]=false;
$pageRights["program_billing"]["import"]=false;

$nonAdminTablesArr[] = array("job","Occupation");
$nonAdminTablesRightsArr["job"]=array();
$pageRights["job"]["add"]=true;
$pageRights["job"]["edit"]=true;
$pageRights["job"]["delete"]=true;
$pageRights["job"]["list"]=true;
$pageRights["job"]["export"]=false;
$pageRights["job"]["import"]=false;

$nonAdminTablesArr[] = array("set_intake_category","Set Intake Category");
$nonAdminTablesRightsArr["set_intake_category"]=array();
$pageRights["set_intake_category"]["add"]=true;
$pageRights["set_intake_category"]["edit"]=false;
$pageRights["set_intake_category"]["delete"]=false;
$pageRights["set_intake_category"]["list"]=true;
$pageRights["set_intake_category"]["export"]=false;
$pageRights["set_intake_category"]["import"]=false;

$nonAdminTablesArr[] = array("set_setting_category","Set Setting Category");
$nonAdminTablesRightsArr["set_setting_category"]=array();
$pageRights["set_setting_category"]["add"]=true;
$pageRights["set_setting_category"]["edit"]=true;
$pageRights["set_setting_category"]["delete"]=true;
$pageRights["set_setting_category"]["list"]=true;
$pageRights["set_setting_category"]["export"]=false;
$pageRights["set_setting_category"]["import"]=false;

$nonAdminTablesArr[] = array("Marking_Batch","Marking");
$nonAdminTablesRightsArr["Marking_Batch"]=array();
$pageRights["Marking_Batch"]["add"]=false;
$pageRights["Marking_Batch"]["edit"]=true;
$pageRights["Marking_Batch"]["delete"]=false;
$pageRights["Marking_Batch"]["list"]=true;
$pageRights["Marking_Batch"]["export"]=true;
$pageRights["Marking_Batch"]["import"]=false;

$nonAdminTablesArr[] = array("Report-Billing Pending","Report-Billing Pending");
$nonAdminTablesRightsArr["Report-Billing Pending"]=array();
$pageRights["Report-Billing Pending"]["add"]=false;
$pageRights["Report-Billing Pending"]["edit"]=false;
$pageRights["Report-Billing Pending"]["delete"]=false;
$pageRights["Report-Billing Pending"]["list"]=true;
$pageRights["Report-Billing Pending"]["export"]=false;
$pageRights["Report-Billing Pending"]["import"]=false;

$nonAdminTablesArr[] = array("Report-Billing Paid","Report-Billing Paid");
$nonAdminTablesRightsArr["Report-Billing Paid"]=array();
$pageRights["Report-Billing Paid"]["add"]=false;
$pageRights["Report-Billing Paid"]["edit"]=false;
$pageRights["Report-Billing Paid"]["delete"]=false;
$pageRights["Report-Billing Paid"]["list"]=true;
$pageRights["Report-Billing Paid"]["export"]=false;
$pageRights["Report-Billing Paid"]["import"]=false;

$nonAdminTablesArr[] = array("student_payment","Payment");
$nonAdminTablesRightsArr["student_payment"]=array();
$pageRights["student_payment"]["add"]=true;
$pageRights["student_payment"]["edit"]=true;
$pageRights["student_payment"]["delete"]=true;
$pageRights["student_payment"]["list"]=true;
$pageRights["student_payment"]["export"]=false;
$pageRights["student_payment"]["import"]=false;

$nonAdminTablesArr[] = array("LIST-Student Billing","Billing Record");
$nonAdminTablesRightsArr["LIST-Student Billing"]=array();
$pageRights["LIST-Student Billing"]["add"]=false;
$pageRights["LIST-Student Billing"]["edit"]=false;
$pageRights["LIST-Student Billing"]["delete"]=false;
$pageRights["LIST-Student Billing"]["list"]=true;
$pageRights["LIST-Student Billing"]["export"]=false;
$pageRights["LIST-Student Billing"]["import"]=false;

$nonAdminTablesArr[] = array("student_billing","Student Billing");
$nonAdminTablesRightsArr["student_billing"]=array();
$pageRights["student_billing"]["add"]=true;
$pageRights["student_billing"]["edit"]=true;
$pageRights["student_billing"]["delete"]=true;
$pageRights["student_billing"]["list"]=true;
$pageRights["student_billing"]["export"]=true;
$pageRights["student_billing"]["import"]=false;

$nonAdminTablesArr[] = array("report_bill_pending","Report Bill Pending");
$nonAdminTablesRightsArr["report_bill_pending"]=array();
$pageRights["report_bill_pending"]["add"]=false;
$pageRights["report_bill_pending"]["edit"]=false;
$pageRights["report_bill_pending"]["delete"]=false;
$pageRights["report_bill_pending"]["list"]=true;
$pageRights["report_bill_pending"]["export"]=true;
$pageRights["report_bill_pending"]["import"]=false;

$nonAdminTablesArr[] = array("report_bill_paid","Report Bill Paid");
$nonAdminTablesRightsArr["report_bill_paid"]=array();
$pageRights["report_bill_paid"]["add"]=false;
$pageRights["report_bill_paid"]["edit"]=false;
$pageRights["report_bill_paid"]["delete"]=false;
$pageRights["report_bill_paid"]["list"]=true;
$pageRights["report_bill_paid"]["export"]=true;
$pageRights["report_bill_paid"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Family","Report Family");
$nonAdminTablesRightsArr["Report_Family"]=array();
$pageRights["Report_Family"]["add"]=false;
$pageRights["Report_Family"]["edit"]=true;
$pageRights["Report_Family"]["delete"]=true;
$pageRights["Report_Family"]["list"]=true;
$pageRights["Report_Family"]["export"]=true;
$pageRights["Report_Family"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Discipline","Report Discipline");
$nonAdminTablesRightsArr["Report_Discipline"]=array();
$pageRights["Report_Discipline"]["add"]=true;
$pageRights["Report_Discipline"]["edit"]=true;
$pageRights["Report_Discipline"]["delete"]=true;
$pageRights["Report_Discipline"]["list"]=true;
$pageRights["Report_Discipline"]["export"]=true;
$pageRights["Report_Discipline"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Extracurricular","Report Extracurricular");
$nonAdminTablesRightsArr["Report_Extracurricular"]=array();
$pageRights["Report_Extracurricular"]["add"]=true;
$pageRights["Report_Extracurricular"]["edit"]=true;
$pageRights["Report_Extracurricular"]["delete"]=true;
$pageRights["Report_Extracurricular"]["list"]=true;
$pageRights["Report_Extracurricular"]["export"]=true;
$pageRights["Report_Extracurricular"]["import"]=false;

$nonAdminTablesArr[] = array("Report-_Industry_Training","Report- Industry Training");
$nonAdminTablesRightsArr["Report-_Industry_Training"]=array();
$pageRights["Report-_Industry_Training"]["add"]=true;
$pageRights["Report-_Industry_Training"]["edit"]=true;
$pageRights["Report-_Industry_Training"]["delete"]=true;
$pageRights["Report-_Industry_Training"]["list"]=true;
$pageRights["Report-_Industry_Training"]["export"]=true;
$pageRights["Report-_Industry_Training"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Compulsory_Training","Report Compulsory Training");
$nonAdminTablesRightsArr["Report_Compulsory_Training"]=array();
$pageRights["Report_Compulsory_Training"]["add"]=true;
$pageRights["Report_Compulsory_Training"]["edit"]=true;
$pageRights["Report_Compulsory_Training"]["delete"]=true;
$pageRights["Report_Compulsory_Training"]["list"]=true;
$pageRights["Report_Compulsory_Training"]["export"]=false;
$pageRights["Report_Compulsory_Training"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Sponsor","Report Sponsor");
$nonAdminTablesRightsArr["Report_Sponsor"]=array();
$pageRights["Report_Sponsor"]["add"]=false;
$pageRights["Report_Sponsor"]["edit"]=true;
$pageRights["Report_Sponsor"]["delete"]=false;
$pageRights["Report_Sponsor"]["list"]=true;
$pageRights["Report_Sponsor"]["export"]=true;
$pageRights["Report_Sponsor"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Staff_Training","Report Staff Training");
$nonAdminTablesRightsArr["Report_Staff_Training"]=array();
$pageRights["Report_Staff_Training"]["add"]=true;
$pageRights["Report_Staff_Training"]["edit"]=true;
$pageRights["Report_Staff_Training"]["delete"]=true;
$pageRights["Report_Staff_Training"]["list"]=true;
$pageRights["Report_Staff_Training"]["export"]=false;
$pageRights["Report_Staff_Training"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Staff_Kin","Report Staff Kin");
$nonAdminTablesRightsArr["Report_Staff_Kin"]=array();
$pageRights["Report_Staff_Kin"]["add"]=false;
$pageRights["Report_Staff_Kin"]["edit"]=true;
$pageRights["Report_Staff_Kin"]["delete"]=false;
$pageRights["Report_Staff_Kin"]["list"]=true;
$pageRights["Report_Staff_Kin"]["export"]=true;
$pageRights["Report_Staff_Kin"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Student_Course","Report Student Course");
$nonAdminTablesRightsArr["Report_Student_Course"]=array();
$pageRights["Report_Student_Course"]["add"]=true;
$pageRights["Report_Student_Course"]["edit"]=true;
$pageRights["Report_Student_Course"]["delete"]=false;
$pageRights["Report_Student_Course"]["list"]=true;
$pageRights["Report_Student_Course"]["export"]=false;
$pageRights["Report_Student_Course"]["import"]=false;

$nonAdminTablesArr[] = array("training","Training");
$nonAdminTablesRightsArr["training"]=array();
$pageRights["training"]["add"]=true;
$pageRights["training"]["edit"]=true;
$pageRights["training"]["delete"]=true;
$pageRights["training"]["list"]=true;
$pageRights["training"]["export"]=false;
$pageRights["training"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Student_Hostel","Report Student Hostel");
$nonAdminTablesRightsArr["Report_Student_Hostel"]=array();
$pageRights["Report_Student_Hostel"]["add"]=true;
$pageRights["Report_Student_Hostel"]["edit"]=true;
$pageRights["Report_Student_Hostel"]["delete"]=true;
$pageRights["Report_Student_Hostel"]["list"]=true;
$pageRights["Report_Student_Hostel"]["export"]=false;
$pageRights["Report_Student_Hostel"]["import"]=false;

$nonAdminTablesArr[] = array("Chart_no_student","Chart No Student");
$nonAdminTablesRightsArr["Chart_no_student"]=array();
$pageRights["Chart_no_student"]["add"]=false;
$pageRights["Chart_no_student"]["edit"]=false;
$pageRights["Chart_no_student"]["delete"]=false;
$pageRights["Chart_no_student"]["list"]=true;
$pageRights["Chart_no_student"]["export"]=false;
$pageRights["Chart_no_student"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Exam_Slip_Indiv","Report Exam Slip Indiv");
$nonAdminTablesRightsArr["Report_Exam_Slip_Indiv"]=array();
$pageRights["Report_Exam_Slip_Indiv"]["add"]=false;
$pageRights["Report_Exam_Slip_Indiv"]["edit"]=false;
$pageRights["Report_Exam_Slip_Indiv"]["delete"]=false;
$pageRights["Report_Exam_Slip_Indiv"]["list"]=true;
$pageRights["Report_Exam_Slip_Indiv"]["export"]=false;
$pageRights["Report_Exam_Slip_Indiv"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Exam_Slip_Batch","Report Exam Slip Batch");
$nonAdminTablesRightsArr["Report_Exam_Slip_Batch"]=array();
$pageRights["Report_Exam_Slip_Batch"]["add"]=false;
$pageRights["Report_Exam_Slip_Batch"]["edit"]=false;
$pageRights["Report_Exam_Slip_Batch"]["delete"]=false;
$pageRights["Report_Exam_Slip_Batch"]["list"]=true;
$pageRights["Report_Exam_Slip_Batch"]["export"]=false;
$pageRights["Report_Exam_Slip_Batch"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Exam_Result_Indiv","Report Exam Result Indiv");
$nonAdminTablesRightsArr["Report_Exam_Result_Indiv"]=array();
$pageRights["Report_Exam_Result_Indiv"]["add"]=false;
$pageRights["Report_Exam_Result_Indiv"]["edit"]=false;
$pageRights["Report_Exam_Result_Indiv"]["delete"]=false;
$pageRights["Report_Exam_Result_Indiv"]["list"]=true;
$pageRights["Report_Exam_Result_Indiv"]["export"]=false;
$pageRights["Report_Exam_Result_Indiv"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Exam_Result_Batch","Report Exam Result Batch");
$nonAdminTablesRightsArr["Report_Exam_Result_Batch"]=array();
$pageRights["Report_Exam_Result_Batch"]["add"]=false;
$pageRights["Report_Exam_Result_Batch"]["edit"]=false;
$pageRights["Report_Exam_Result_Batch"]["delete"]=false;
$pageRights["Report_Exam_Result_Batch"]["list"]=true;
$pageRights["Report_Exam_Result_Batch"]["export"]=false;
$pageRights["Report_Exam_Result_Batch"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Student_Class","Report Student Class");
$nonAdminTablesRightsArr["Report_Student_Class"]=array();
$pageRights["Report_Student_Class"]["add"]=false;
$pageRights["Report_Student_Class"]["edit"]=true;
$pageRights["Report_Student_Class"]["delete"]=false;
$pageRights["Report_Student_Class"]["list"]=true;
$pageRights["Report_Student_Class"]["export"]=true;
$pageRights["Report_Student_Class"]["import"]=false;

$nonAdminTablesArr[] = array("all","All");
$nonAdminTablesRightsArr["all"]=array();
$pageRights["all"]["add"]=false;
$pageRights["all"]["edit"]=false;
$pageRights["all"]["delete"]=false;
$pageRights["all"]["list"]=true;
$pageRights["all"]["export"]=false;
$pageRights["all"]["import"]=false;

$nonAdminTablesArr[] = array("enroll","Enroll");
$nonAdminTablesRightsArr["enroll"]=array();
$pageRights["enroll"]["add"]=true;
$pageRights["enroll"]["edit"]=true;
$pageRights["enroll"]["delete"]=true;
$pageRights["enroll"]["list"]=true;
$pageRights["enroll"]["export"]=true;
$pageRights["enroll"]["import"]=false;

$nonAdminTablesArr[] = array("staff_internal_history","Staff History(MATA)");
$nonAdminTablesRightsArr["staff_internal_history"]=array();
$pageRights["staff_internal_history"]["add"]=true;
$pageRights["staff_internal_history"]["edit"]=true;
$pageRights["staff_internal_history"]["delete"]=true;
$pageRights["staff_internal_history"]["list"]=true;
$pageRights["staff_internal_history"]["export"]=false;
$pageRights["staff_internal_history"]["import"]=false;

$nonAdminTablesArr[] = array("calendar_qa","Calendar Qa");
$nonAdminTablesRightsArr["calendar_qa"]=array();
$pageRights["calendar_qa"]["add"]=true;
$pageRights["calendar_qa"]["edit"]=true;
$pageRights["calendar_qa"]["delete"]=true;
$pageRights["calendar_qa"]["list"]=true;
$pageRights["calendar_qa"]["export"]=false;
$pageRights["calendar_qa"]["import"]=false;

$nonAdminTablesArr[] = array("enroll_prospect","Enroll Prospect");
$nonAdminTablesRightsArr["enroll_prospect"]=array();
$pageRights["enroll_prospect"]["add"]=true;
$pageRights["enroll_prospect"]["edit"]=true;
$pageRights["enroll_prospect"]["delete"]=true;
$pageRights["enroll_prospect"]["list"]=true;
$pageRights["enroll_prospect"]["export"]=true;
$pageRights["enroll_prospect"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Exam_Summary","Report Exam Summary");
$nonAdminTablesRightsArr["Report_Exam_Summary"]=array();
$pageRights["Report_Exam_Summary"]["add"]=false;
$pageRights["Report_Exam_Summary"]["edit"]=false;
$pageRights["Report_Exam_Summary"]["delete"]=false;
$pageRights["Report_Exam_Summary"]["list"]=true;
$pageRights["Report_Exam_Summary"]["export"]=false;
$pageRights["Report_Exam_Summary"]["import"]=false;

$nonAdminTablesArr[] = array("Report_student_billing_overall","Report Student Billing Overall");
$nonAdminTablesRightsArr["Report_student_billing_overall"]=array();
$pageRights["Report_student_billing_overall"]["add"]=false;
$pageRights["Report_student_billing_overall"]["edit"]=false;
$pageRights["Report_student_billing_overall"]["delete"]=false;
$pageRights["Report_student_billing_overall"]["list"]=true;
$pageRights["Report_student_billing_overall"]["export"]=true;
$pageRights["Report_student_billing_overall"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Sponsor_Overall","Report Sponsor Overall");
$nonAdminTablesRightsArr["Report_Sponsor_Overall"]=array();
$pageRights["Report_Sponsor_Overall"]["add"]=false;
$pageRights["Report_Sponsor_Overall"]["edit"]=false;
$pageRights["Report_Sponsor_Overall"]["delete"]=false;
$pageRights["Report_Sponsor_Overall"]["list"]=true;
$pageRights["Report_Sponsor_Overall"]["export"]=true;
$pageRights["Report_Sponsor_Overall"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Student_Hostel_overall","Report Student Hostel Overall");
$nonAdminTablesRightsArr["Report_Student_Hostel_overall"]=array();
$pageRights["Report_Student_Hostel_overall"]["add"]=false;
$pageRights["Report_Student_Hostel_overall"]["edit"]=false;
$pageRights["Report_Student_Hostel_overall"]["delete"]=false;
$pageRights["Report_Student_Hostel_overall"]["list"]=true;
$pageRights["Report_Student_Hostel_overall"]["export"]=false;
$pageRights["Report_Student_Hostel_overall"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Student_Class_overall","Report Student Class Overall");
$nonAdminTablesRightsArr["Report_Student_Class_overall"]=array();
$pageRights["Report_Student_Class_overall"]["add"]=false;
$pageRights["Report_Student_Class_overall"]["edit"]=false;
$pageRights["Report_Student_Class_overall"]["delete"]=false;
$pageRights["Report_Student_Class_overall"]["list"]=true;
$pageRights["Report_Student_Class_overall"]["export"]=true;
$pageRights["Report_Student_Class_overall"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Student_Payment","Report Student Payment");
$nonAdminTablesRightsArr["Report_Student_Payment"]=array();
$pageRights["Report_Student_Payment"]["add"]=false;
$pageRights["Report_Student_Payment"]["edit"]=false;
$pageRights["Report_Student_Payment"]["delete"]=false;
$pageRights["Report_Student_Payment"]["list"]=true;
$pageRights["Report_Student_Payment"]["export"]=false;
$pageRights["Report_Student_Payment"]["import"]=false;

$nonAdminTablesArr[] = array("ojt_company","Ojt Company");
$nonAdminTablesRightsArr["ojt_company"]=array();
$pageRights["ojt_company"]["add"]=true;
$pageRights["ojt_company"]["edit"]=true;
$pageRights["ojt_company"]["delete"]=true;
$pageRights["ojt_company"]["list"]=true;
$pageRights["ojt_company"]["export"]=true;
$pageRights["ojt_company"]["import"]=false;

$nonAdminTablesArr[] = array("exam_eligible_seatno","Exam Eligible Seatno");
$nonAdminTablesRightsArr["exam_eligible_seatno"]=array();
$pageRights["exam_eligible_seatno"]["add"]=false;
$pageRights["exam_eligible_seatno"]["edit"]=true;
$pageRights["exam_eligible_seatno"]["delete"]=false;
$pageRights["exam_eligible_seatno"]["list"]=true;
$pageRights["exam_eligible_seatno"]["export"]=false;
$pageRights["exam_eligible_seatno"]["import"]=false;

$nonAdminTablesArr[] = array("exam_result_memo","Exam Result Memo");
$nonAdminTablesRightsArr["exam_result_memo"]=array();
$pageRights["exam_result_memo"]["add"]=false;
$pageRights["exam_result_memo"]["edit"]=true;
$pageRights["exam_result_memo"]["delete"]=true;
$pageRights["exam_result_memo"]["list"]=true;
$pageRights["exam_result_memo"]["export"]=false;
$pageRights["exam_result_memo"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Exam_Result_Batch_Whole","Report Exam Result Batch Whole");
$nonAdminTablesRightsArr["Report_Exam_Result_Batch_Whole"]=array();
$pageRights["Report_Exam_Result_Batch_Whole"]["add"]=false;
$pageRights["Report_Exam_Result_Batch_Whole"]["edit"]=false;
$pageRights["Report_Exam_Result_Batch_Whole"]["delete"]=false;
$pageRights["Report_Exam_Result_Batch_Whole"]["list"]=true;
$pageRights["Report_Exam_Result_Batch_Whole"]["export"]=false;
$pageRights["Report_Exam_Result_Batch_Whole"]["import"]=false;

$nonAdminTablesArr[] = array("t_facilities_timetable","T Facilities Timetable");
$nonAdminTablesRightsArr["t_facilities_timetable"]=array();
$pageRights["t_facilities_timetable"]["add"]=true;
$pageRights["t_facilities_timetable"]["edit"]=true;
$pageRights["t_facilities_timetable"]["delete"]=true;
$pageRights["t_facilities_timetable"]["list"]=true;
$pageRights["t_facilities_timetable"]["export"]=false;
$pageRights["t_facilities_timetable"]["import"]=false;

$nonAdminTablesArr[] = array("student_evaluation","Student Evaluation");
$nonAdminTablesRightsArr["student_evaluation"]=array();
$pageRights["student_evaluation"]["add"]=true;
$pageRights["student_evaluation"]["edit"]=true;
$pageRights["student_evaluation"]["delete"]=true;
$pageRights["student_evaluation"]["list"]=true;
$pageRights["student_evaluation"]["export"]=false;
$pageRights["student_evaluation"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Student_Attendance","Report Student Attendance");
$nonAdminTablesRightsArr["Report_Student_Attendance"]=array();
$pageRights["Report_Student_Attendance"]["add"]=false;
$pageRights["Report_Student_Attendance"]["edit"]=false;
$pageRights["Report_Student_Attendance"]["delete"]=false;
$pageRights["Report_Student_Attendance"]["list"]=true;
$pageRights["Report_Student_Attendance"]["export"]=false;
$pageRights["Report_Student_Attendance"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Instructor_Trade","Report Instructor Trade");
$nonAdminTablesRightsArr["Report_Instructor_Trade"]=array();
$pageRights["Report_Instructor_Trade"]["add"]=false;
$pageRights["Report_Instructor_Trade"]["edit"]=true;
$pageRights["Report_Instructor_Trade"]["delete"]=false;
$pageRights["Report_Instructor_Trade"]["list"]=true;
$pageRights["Report_Instructor_Trade"]["export"]=false;
$pageRights["Report_Instructor_Trade"]["import"]=false;

$nonAdminTablesArr[] = array("student_course_dca","Marking");
$nonAdminTablesRightsArr["student_course_dca"]=array();
$pageRights["student_course_dca"]["add"]=true;
$pageRights["student_course_dca"]["edit"]=true;
$pageRights["student_course_dca"]["delete"]=true;
$pageRights["student_course_dca"]["list"]=true;
$pageRights["student_course_dca"]["export"]=true;
$pageRights["student_course_dca"]["import"]=false;

$nonAdminTablesArr[] = array("Evaluation_Batch_List","Evaluation Batch List");
$nonAdminTablesRightsArr["Evaluation_Batch_List"]=array();
$pageRights["Evaluation_Batch_List"]["add"]=false;
$pageRights["Evaluation_Batch_List"]["edit"]=false;
$pageRights["Evaluation_Batch_List"]["delete"]=false;
$pageRights["Evaluation_Batch_List"]["list"]=true;
$pageRights["Evaluation_Batch_List"]["export"]=false;
$pageRights["Evaluation_Batch_List"]["import"]=false;

$nonAdminTablesArr[] = array("w_news","News");
$nonAdminTablesRightsArr["w_news"]=array();
$pageRights["w_news"]["add"]=true;
$pageRights["w_news"]["edit"]=true;
$pageRights["w_news"]["delete"]=true;
$pageRights["w_news"]["list"]=true;
$pageRights["w_news"]["export"]=false;
$pageRights["w_news"]["import"]=false;

$nonAdminTablesArr[] = array("w_gallery_sub","Sub Category Gallery");
$nonAdminTablesRightsArr["w_gallery_sub"]=array();
$pageRights["w_gallery_sub"]["add"]=true;
$pageRights["w_gallery_sub"]["edit"]=true;
$pageRights["w_gallery_sub"]["delete"]=true;
$pageRights["w_gallery_sub"]["list"]=true;
$pageRights["w_gallery_sub"]["export"]=false;
$pageRights["w_gallery_sub"]["import"]=false;

$nonAdminTablesArr[] = array("w_pic","Photo");
$nonAdminTablesRightsArr["w_pic"]=array();
$pageRights["w_pic"]["add"]=true;
$pageRights["w_pic"]["edit"]=true;
$pageRights["w_pic"]["delete"]=true;
$pageRights["w_pic"]["list"]=true;
$pageRights["w_pic"]["export"]=false;
$pageRights["w_pic"]["import"]=false;

$nonAdminTablesArr[] = array("w_gallery","Gallery");
$nonAdminTablesRightsArr["w_gallery"]=array();
$pageRights["w_gallery"]["add"]=true;
$pageRights["w_gallery"]["edit"]=false;
$pageRights["w_gallery"]["delete"]=false;
$pageRights["w_gallery"]["list"]=false;
$pageRights["w_gallery"]["export"]=false;
$pageRights["w_gallery"]["import"]=false;

$nonAdminTablesArr[] = array("w_faq","W Faq");
$nonAdminTablesRightsArr["w_faq"]=array();
$pageRights["w_faq"]["add"]=true;
$pageRights["w_faq"]["edit"]=true;
$pageRights["w_faq"]["delete"]=true;
$pageRights["w_faq"]["list"]=true;
$pageRights["w_faq"]["export"]=false;
$pageRights["w_faq"]["import"]=false;

$nonAdminTablesArr[] = array("w_slider","W Slider");
$nonAdminTablesRightsArr["w_slider"]=array();
$pageRights["w_slider"]["add"]=true;
$pageRights["w_slider"]["edit"]=true;
$pageRights["w_slider"]["delete"]=true;
$pageRights["w_slider"]["list"]=true;
$pageRights["w_slider"]["export"]=false;
$pageRights["w_slider"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Exam_Slip_MOE","Report Exam Slip MOE");
$nonAdminTablesRightsArr["Report_Exam_Slip_MOE"]=array();
$pageRights["Report_Exam_Slip_MOE"]["add"]=false;
$pageRights["Report_Exam_Slip_MOE"]["edit"]=false;
$pageRights["Report_Exam_Slip_MOE"]["delete"]=false;
$pageRights["Report_Exam_Slip_MOE"]["list"]=true;
$pageRights["Report_Exam_Slip_MOE"]["export"]=false;
$pageRights["Report_Exam_Slip_MOE"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Exam_Result_MOE","Report Exam Result MOE");
$nonAdminTablesRightsArr["Report_Exam_Result_MOE"]=array();
$pageRights["Report_Exam_Result_MOE"]["add"]=false;
$pageRights["Report_Exam_Result_MOE"]["edit"]=false;
$pageRights["Report_Exam_Result_MOE"]["delete"]=false;
$pageRights["Report_Exam_Result_MOE"]["list"]=true;
$pageRights["Report_Exam_Result_MOE"]["export"]=false;
$pageRights["Report_Exam_Result_MOE"]["import"]=false;

$nonAdminTablesArr[] = array("Program_Batch","Program Batch");
$nonAdminTablesRightsArr["Program_Batch"]=array();
$pageRights["Program_Batch"]["add"]=false;
$pageRights["Program_Batch"]["edit"]=false;
$pageRights["Program_Batch"]["delete"]=false;
$pageRights["Program_Batch"]["list"]=true;
$pageRights["Program_Batch"]["export"]=false;
$pageRights["Program_Batch"]["import"]=false;

$nonAdminTablesArr[] = array("timetable_attendance","Timetable Attendance");
$nonAdminTablesRightsArr["timetable_attendance"]=array();
$pageRights["timetable_attendance"]["add"]=true;
$pageRights["timetable_attendance"]["edit"]=true;
$pageRights["timetable_attendance"]["delete"]=true;
$pageRights["timetable_attendance"]["list"]=true;
$pageRights["timetable_attendance"]["export"]=false;
$pageRights["timetable_attendance"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Absent","Report Absent");
$nonAdminTablesRightsArr["Report_Absent"]=array();
$pageRights["Report_Absent"]["add"]=false;
$pageRights["Report_Absent"]["edit"]=false;
$pageRights["Report_Absent"]["delete"]=false;
$pageRights["Report_Absent"]["list"]=true;
$pageRights["Report_Absent"]["export"]=true;
$pageRights["Report_Absent"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Attendance","Report");
$nonAdminTablesRightsArr["Report_Attendance"]=array();
$pageRights["Report_Attendance"]["add"]=false;
$pageRights["Report_Attendance"]["edit"]=false;
$pageRights["Report_Attendance"]["delete"]=false;
$pageRights["Report_Attendance"]["list"]=true;
$pageRights["Report_Attendance"]["export"]=false;
$pageRights["Report_Attendance"]["import"]=false;

$nonAdminTablesArr[] = array("Program_Batch_Bill","Program Batch Bill");
$nonAdminTablesRightsArr["Program_Batch_Bill"]=array();
$pageRights["Program_Batch_Bill"]["add"]=false;
$pageRights["Program_Batch_Bill"]["edit"]=false;
$pageRights["Program_Batch_Bill"]["delete"]=false;
$pageRights["Program_Batch_Bill"]["list"]=true;
$pageRights["Program_Batch_Bill"]["export"]=false;
$pageRights["Program_Batch_Bill"]["import"]=false;

$nonAdminTablesArr[] = array("support","Support");
$nonAdminTablesRightsArr["support"]=array();
$pageRights["support"]["add"]=true;
$pageRights["support"]["edit"]=true;
$pageRights["support"]["delete"]=true;
$pageRights["support"]["list"]=true;
$pageRights["support"]["export"]=false;
$pageRights["support"]["import"]=false;

$nonAdminTablesArr[] = array("w_course","W Course");
$nonAdminTablesRightsArr["w_course"]=array();
$pageRights["w_course"]["add"]=true;
$pageRights["w_course"]["edit"]=true;
$pageRights["w_course"]["delete"]=true;
$pageRights["w_course"]["list"]=true;
$pageRights["w_course"]["export"]=false;
$pageRights["w_course"]["import"]=false;

$nonAdminTablesArr[] = array("Chart_Exam_Internal","Chart Exam Internal");
$nonAdminTablesRightsArr["Chart_Exam_Internal"]=array();
$pageRights["Chart_Exam_Internal"]["add"]=false;
$pageRights["Chart_Exam_Internal"]["edit"]=false;
$pageRights["Chart_Exam_Internal"]["delete"]=false;
$pageRights["Chart_Exam_Internal"]["list"]=true;
$pageRights["Chart_Exam_Internal"]["export"]=false;
$pageRights["Chart_Exam_Internal"]["import"]=false;

$nonAdminTablesArr[] = array("student_billing_item","Item");
$nonAdminTablesRightsArr["student_billing_item"]=array();
$pageRights["student_billing_item"]["add"]=false;
$pageRights["student_billing_item"]["edit"]=true;
$pageRights["student_billing_item"]["delete"]=false;
$pageRights["student_billing_item"]["list"]=true;
$pageRights["student_billing_item"]["export"]=true;
$pageRights["student_billing_item"]["import"]=false;

$nonAdminTablesArr[] = array("student_bill_list","Student Bill List");
$nonAdminTablesRightsArr["student_bill_list"]=array();
$pageRights["student_bill_list"]["add"]=false;
$pageRights["student_bill_list"]["edit"]=false;
$pageRights["student_bill_list"]["delete"]=false;
$pageRights["student_bill_list"]["list"]=true;
$pageRights["student_bill_list"]["export"]=false;
$pageRights["student_bill_list"]["import"]=false;

$nonAdminTablesArr[] = array("student_bill_pay","Pay");
$nonAdminTablesRightsArr["student_bill_pay"]=array();
$pageRights["student_bill_pay"]["add"]=true;
$pageRights["student_bill_pay"]["edit"]=true;
$pageRights["student_bill_pay"]["delete"]=true;
$pageRights["student_bill_pay"]["list"]=true;
$pageRights["student_bill_pay"]["export"]=false;
$pageRights["student_bill_pay"]["import"]=false;

$nonAdminTablesArr[] = array("course_moe2","Course Moe2");
$nonAdminTablesRightsArr["course_moe2"]=array();
$pageRights["course_moe2"]["add"]=true;
$pageRights["course_moe2"]["edit"]=true;
$pageRights["course_moe2"]["delete"]=true;
$pageRights["course_moe2"]["list"]=true;
$pageRights["course_moe2"]["export"]=false;
$pageRights["course_moe2"]["import"]=false;

$nonAdminTablesArr[] = array("course_moe2_sem2","Course Moe2 Sem2");
$nonAdminTablesRightsArr["course_moe2_sem2"]=array();
$pageRights["course_moe2_sem2"]["add"]=true;
$pageRights["course_moe2_sem2"]["edit"]=true;
$pageRights["course_moe2_sem2"]["delete"]=true;
$pageRights["course_moe2_sem2"]["list"]=true;
$pageRights["course_moe2_sem2"]["export"]=false;
$pageRights["course_moe2_sem2"]["import"]=false;

$nonAdminTablesArr[] = array("course_moe2_sem3","Course Moe2 Sem3");
$nonAdminTablesRightsArr["course_moe2_sem3"]=array();
$pageRights["course_moe2_sem3"]["add"]=true;
$pageRights["course_moe2_sem3"]["edit"]=true;
$pageRights["course_moe2_sem3"]["delete"]=true;
$pageRights["course_moe2_sem3"]["list"]=true;
$pageRights["course_moe2_sem3"]["export"]=false;
$pageRights["course_moe2_sem3"]["import"]=false;

$nonAdminTablesArr[] = array("course_moe2_sem4","Course Moe2 Sem4");
$nonAdminTablesRightsArr["course_moe2_sem4"]=array();
$pageRights["course_moe2_sem4"]["add"]=true;
$pageRights["course_moe2_sem4"]["edit"]=true;
$pageRights["course_moe2_sem4"]["delete"]=true;
$pageRights["course_moe2_sem4"]["list"]=true;
$pageRights["course_moe2_sem4"]["export"]=false;
$pageRights["course_moe2_sem4"]["import"]=false;

$nonAdminTablesArr[] = array("course_moe2_sem5","Course Moe2 Sem5");
$nonAdminTablesRightsArr["course_moe2_sem5"]=array();
$pageRights["course_moe2_sem5"]["add"]=true;
$pageRights["course_moe2_sem5"]["edit"]=true;
$pageRights["course_moe2_sem5"]["delete"]=true;
$pageRights["course_moe2_sem5"]["list"]=true;
$pageRights["course_moe2_sem5"]["export"]=false;
$pageRights["course_moe2_sem5"]["import"]=false;

$nonAdminTablesArr[] = array("course_moe2_sem6","Course Moe2 Sem6");
$nonAdminTablesRightsArr["course_moe2_sem6"]=array();
$pageRights["course_moe2_sem6"]["add"]=true;
$pageRights["course_moe2_sem6"]["edit"]=true;
$pageRights["course_moe2_sem6"]["delete"]=true;
$pageRights["course_moe2_sem6"]["list"]=true;
$pageRights["course_moe2_sem6"]["export"]=false;
$pageRights["course_moe2_sem6"]["import"]=false;

$nonAdminTablesArr[] = array("Marking_Student_list","Marking Student List");
$nonAdminTablesRightsArr["Marking_Student_list"]=array();
$pageRights["Marking_Student_list"]["add"]=false;
$pageRights["Marking_Student_list"]["edit"]=false;
$pageRights["Marking_Student_list"]["delete"]=false;
$pageRights["Marking_Student_list"]["list"]=true;
$pageRights["Marking_Student_list"]["export"]=false;
$pageRights["Marking_Student_list"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Attendance_Student_List","Report Attendance Student List");
$nonAdminTablesRightsArr["Report_Attendance_Student_List"]=array();
$pageRights["Report_Attendance_Student_List"]["add"]=false;
$pageRights["Report_Attendance_Student_List"]["edit"]=false;
$pageRights["Report_Attendance_Student_List"]["delete"]=false;
$pageRights["Report_Attendance_Student_List"]["list"]=true;
$pageRights["Report_Attendance_Student_List"]["export"]=false;
$pageRights["Report_Attendance_Student_List"]["import"]=false;

$nonAdminTablesArr[] = array("Report_Student_Course_List","Report Student Course List");
$nonAdminTablesRightsArr["Report_Student_Course_List"]=array();
$pageRights["Report_Student_Course_List"]["add"]=false;
$pageRights["Report_Student_Course_List"]["edit"]=false;
$pageRights["Report_Student_Course_List"]["delete"]=false;
$pageRights["Report_Student_Course_List"]["list"]=true;
$pageRights["Report_Student_Course_List"]["export"]=false;
$pageRights["Report_Student_Course_List"]["import"]=false;

$nonAdminTablesArr[] = array("student_course_DCA_List_student2","DCA Exan");
$nonAdminTablesRightsArr["student_course_DCA_List_student2"]=array();
$pageRights["student_course_DCA_List_student2"]["add"]=false;
$pageRights["student_course_DCA_List_student2"]["edit"]=false;
$pageRights["student_course_DCA_List_student2"]["delete"]=false;
$pageRights["student_course_DCA_List_student2"]["list"]=true;
$pageRights["student_course_DCA_List_student2"]["export"]=false;
$pageRights["student_course_DCA_List_student2"]["import"]=false;

$nonAdminTablesArr[] = array("student_bill_list2","Student Bill List2");
$nonAdminTablesRightsArr["student_bill_list2"]=array();
$pageRights["student_bill_list2"]["add"]=false;
$pageRights["student_bill_list2"]["edit"]=false;
$pageRights["student_bill_list2"]["delete"]=false;
$pageRights["student_bill_list2"]["list"]=true;
$pageRights["student_bill_list2"]["export"]=false;
$pageRights["student_bill_list2"]["import"]=false;

$nonAdminTablesArr[] = array("student_bill_statement","Upload Statement");
$nonAdminTablesRightsArr["student_bill_statement"]=array();
$pageRights["student_bill_statement"]["add"]=true;
$pageRights["student_bill_statement"]["edit"]=true;
$pageRights["student_bill_statement"]["delete"]=true;
$pageRights["student_bill_statement"]["list"]=true;
$pageRights["student_bill_statement"]["export"]=false;
$pageRights["student_bill_statement"]["import"]=false;


$options["nonAdminTablesArr"] = $nonAdminTablesArr;
$options["nonAdminTablesRightsArr"] = $nonAdminTablesRightsArr;


$pageObject = ListPage::createListPage($strTableName, $options);
 // add button events if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	//$xt->assign_loopsection("grid_row",$rowinfo);
	


?>
