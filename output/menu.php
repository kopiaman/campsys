<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


include("include/dbcommon.php");

if(!isLogged())
{
	header("Location: login.php");
	return;
}

if(isLoggedAsGuest()){
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
}


$layout = new TLayout("menu","MATA_StyleMATA_purple","MobileMATA_purple");
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();

$layout->containers["menu"][] = array("name"=>"menulogas","block"=>"loggedas_block","substyle"=>1);


$layout->containers["menu"][] = array("name"=>"menulogout","block"=>"logout_link","substyle"=>1);


$layout->containers["menu"][] = array("name"=>"menuchangepwd","block"=>"changepwd_link","substyle"=>1);


$layout->containers["menu"][] = array("name"=>"vmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["menu"] = "menu";
$layout->blocks["top"][] = "menu";$page_layouts["menu"] = $layout;


include('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));
include('classes/runnerpage.php');

include_once(getabspath("include/student_info_events.php"));
$tableEvents["student_info"] = new eventclass_student_info;
include_once(getabspath("include/student_course_events.php"));
$tableEvents["student_course"] = new eventclass_student_course;
include_once(getabspath("include/program_events.php"));
$tableEvents["program"] = new eventclass_program;
include_once(getabspath("include/program_course_events.php"));
$tableEvents["program_course"] = new eventclass_program_course;
include_once(getabspath("include/program_billing_events.php"));
$tableEvents["program_billing"] = new eventclass_program_billing;
include_once(getabspath("include/Marking_Batch_events.php"));
$tableEvents["Marking_Batch"] = new eventclass_Marking_Batch;
include_once(getabspath("include/Report_Billing_Pending_events.php"));
$tableEvents["Report-Billing Pending"] = new eventclass_Report_Billing_Pending;
include_once(getabspath("include/Report_Billing_Paid_events.php"));
$tableEvents["Report-Billing Paid"] = new eventclass_Report_Billing_Paid;
include_once(getabspath("include/student_payment_events.php"));
$tableEvents["student_payment"] = new eventclass_student_payment;
include_once(getabspath("include/student_billing_events.php"));
$tableEvents["student_billing"] = new eventclass_student_billing;
include_once(getabspath("include/Report_Family_events.php"));
$tableEvents["Report_Family"] = new eventclass_Report_Family;
include_once(getabspath("include/Report__Industry_Training_events.php"));
$tableEvents["Report-_Industry_Training"] = new eventclass_Report__Industry_Training;
include_once(getabspath("include/Report_Sponsor_events.php"));
$tableEvents["Report_Sponsor"] = new eventclass_Report_Sponsor;
include_once(getabspath("include/Report_Exam_Slip_Indiv_events.php"));
$tableEvents["Report_Exam_Slip_Indiv"] = new eventclass_Report_Exam_Slip_Indiv;
include_once(getabspath("include/Report_Exam_Slip_Batch_events.php"));
$tableEvents["Report_Exam_Slip_Batch"] = new eventclass_Report_Exam_Slip_Batch;
include_once(getabspath("include/Report_Exam_Result_Indiv_events.php"));
$tableEvents["Report_Exam_Result_Indiv"] = new eventclass_Report_Exam_Result_Indiv;
include_once(getabspath("include/Report_Exam_Result_Batch_events.php"));
$tableEvents["Report_Exam_Result_Batch"] = new eventclass_Report_Exam_Result_Batch;
include_once(getabspath("include/Report_Student_Class_events.php"));
$tableEvents["Report_Student_Class"] = new eventclass_Report_Student_Class;
include_once(getabspath("include/all_events.php"));
$tableEvents["all"] = new eventclass_all;
include_once(getabspath("include/enroll_events.php"));
$tableEvents["enroll"] = new eventclass_enroll;
include_once(getabspath("include/calendar_qa_events.php"));
$tableEvents["calendar_qa"] = new eventclass_calendar_qa;
include_once(getabspath("include/enroll_prospect_events.php"));
$tableEvents["enroll_prospect"] = new eventclass_enroll_prospect;
include_once(getabspath("include/Report_Exam_Summary_events.php"));
$tableEvents["Report_Exam_Summary"] = new eventclass_Report_Exam_Summary;
include_once(getabspath("include/Report_student_billing_overall_events.php"));
$tableEvents["Report_student_billing_overall"] = new eventclass_Report_student_billing_overall;
include_once(getabspath("include/Report_Sponsor_Overall_events.php"));
$tableEvents["Report_Sponsor_Overall"] = new eventclass_Report_Sponsor_Overall;
include_once(getabspath("include/Report_Student_Class_overall_events.php"));
$tableEvents["Report_Student_Class_overall"] = new eventclass_Report_Student_Class_overall;
include_once(getabspath("include/Report_Student_Payment_events.php"));
$tableEvents["Report_Student_Payment"] = new eventclass_Report_Student_Payment;
include_once(getabspath("include/exam_eligible_seatno_events.php"));
$tableEvents["exam_eligible_seatno"] = new eventclass_exam_eligible_seatno;
include_once(getabspath("include/Report_Exam_Result_Batch_Whole_events.php"));
$tableEvents["Report_Exam_Result_Batch_Whole"] = new eventclass_Report_Exam_Result_Batch_Whole;
include_once(getabspath("include/t_facilities_timetable_events.php"));
$tableEvents["t_facilities_timetable"] = new eventclass_t_facilities_timetable;
include_once(getabspath("include/Report_Student_Attendance_events.php"));
$tableEvents["Report_Student_Attendance"] = new eventclass_Report_Student_Attendance;
include_once(getabspath("include/Report_Instructor_Trade_events.php"));
$tableEvents["Report_Instructor_Trade"] = new eventclass_Report_Instructor_Trade;
include_once(getabspath("include/Evaluation_Batch_List_events.php"));
$tableEvents["Evaluation_Batch_List"] = new eventclass_Evaluation_Batch_List;
include_once(getabspath("include/Report_Exam_Slip_MOE_events.php"));
$tableEvents["Report_Exam_Slip_MOE"] = new eventclass_Report_Exam_Slip_MOE;
include_once(getabspath("include/Report_Exam_Result_MOE_events.php"));
$tableEvents["Report_Exam_Result_MOE"] = new eventclass_Report_Exam_Result_MOE;
include_once(getabspath("include/Program_Batch_events.php"));
$tableEvents["Program_Batch"] = new eventclass_Program_Batch;
include_once(getabspath("include/timetable_attendance_events.php"));
$tableEvents["timetable_attendance"] = new eventclass_timetable_attendance;
include_once(getabspath("include/Report_Attendance_events.php"));
$tableEvents["Report_Attendance"] = new eventclass_Report_Attendance;
include_once(getabspath("include/Program_Batch_Bill_events.php"));
$tableEvents["Program_Batch_Bill"] = new eventclass_Program_Batch_Bill;
include_once(getabspath("include/admin_users_events.php"));
$tableEvents["admin_users"] = new eventclass_admin_users;
include_once(getabspath("include/support_events.php"));
$tableEvents["support"] = new eventclass_support;
include_once(getabspath("include/student_billing_item_events.php"));
$tableEvents["student_billing_item"] = new eventclass_student_billing_item;
include_once(getabspath("include/student_bill_list_events.php"));
$tableEvents["student_bill_list"] = new eventclass_student_bill_list;
include_once(getabspath("include/student_bill_pay_events.php"));
$tableEvents["student_bill_pay"] = new eventclass_student_bill_pay;
include_once(getabspath("include/course_moe2_events.php"));
$tableEvents["course_moe2"] = new eventclass_course_moe2;
include_once(getabspath("include/Marking_Student_list_events.php"));
$tableEvents["Marking_Student_list"] = new eventclass_Marking_Student_list;
include_once(getabspath("include/Report_Attendance_Student_List_events.php"));
$tableEvents["Report_Attendance_Student_List"] = new eventclass_Report_Attendance_Student_List;
include_once(getabspath("include/Report_Student_Course_List_events.php"));
$tableEvents["Report_Student_Course_List"] = new eventclass_Report_Student_Course_List;
include_once(getabspath("include/student_course_DCA_List_student2_events.php"));
$tableEvents["student_course_DCA_List_student2"] = new eventclass_student_course_DCA_List_student2;
include_once(getabspath("include/student_bill_list2_events.php"));
$tableEvents["student_bill_list2"] = new eventclass_student_bill_list2;

$xt = new Xtempl();

$id = postvalue("id")!=="" ? postvalue("id") : 1;

//array of params for classes
$params["id"] = $id; 
$params["xt"] = &$xt;
$params["tName"] = "global";
$params["pageType"] = PAGE_MENU;
$params["templatefile"] = "menu.htm";
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

// button handlers file names

//	Before Process event
if($globalEvents->exists("BeforeProcessMenu"))
	$globalEvents->BeforeProcessMenu($conn, $pageObject);

$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";				

$pageObject->addCommonJs();

//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"include/runnerJS/RunnerAll.js\"></script>";
$pageObject->body["end"] .= '<script>'.$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$xt->assign("username",$_SESSION["UserName"]);
$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='changepwd.php';return false;\"");

$xt->assign("logoutlink_attrs","onclick=\"window.location.href='login.php?a=logout';return false;\"");

$xt->assign("guestloginlink_attrs","onclick=\"window.location.href='login.php';return false;\"");

$xt->assign("loggedas_block", !isLoggedAsGuest());
$xt->assign("logout_link", true);
$xt->assign("guestloginbutton", isLoggedAsGuest());
$xt->assign("logoutbutton", isSingleSign() && !isLoggedAsGuest());

// get redirect location for menu page
$redirect = $pageObject->getRedirectForMenuPage();
if($redirect)
{
	header("Location: ".$redirect); 
	exit();
}

$xt->assign("menu_block",true);
if($globalEvents->exists("BeforeShowMenu"))
	$globalEvents->BeforeShowMenu($xt, $pageObject->templatefile, $pageObject);

$xt->display($pageObject->templatefile);
?>