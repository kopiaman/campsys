<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


if(!isLogged())
{ 
	return;
}
if(!IsAdmin())
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "student_info";
$nonAdminTablesArr[] = "student_extracurricular";
$nonAdminTablesArr[] = "student_course";
$nonAdminTablesArr[] = "student_qualification";
$nonAdminTablesArr[] = "student_discipline";
$nonAdminTablesArr[] = "student_hostel";
$nonAdminTablesArr[] = "course";
$nonAdminTablesArr[] = "program";
$nonAdminTablesArr[] = "staff_compulsory_training";
$nonAdminTablesArr[] = "staff_employement_history";
$nonAdminTablesArr[] = "staff_discipline";
$nonAdminTablesArr[] = "staff_qualification";
$nonAdminTablesArr[] = "staff_info";
$nonAdminTablesArr[] = "setting";
$nonAdminTablesArr[] = "student_school";
$nonAdminTablesArr[] = "program_course";
$nonAdminTablesArr[] = "group";
$nonAdminTablesArr[] = "campus_setting";
$nonAdminTablesArr[] = "student_absent";
$nonAdminTablesArr[] = "student_industry_training";
$nonAdminTablesArr[] = "user";
$nonAdminTablesArr[] = "setting_bill_item";
$nonAdminTablesArr[] = "program_billing";
$nonAdminTablesArr[] = "job";
$nonAdminTablesArr[] = "set_intake_category";
$nonAdminTablesArr[] = "set_setting_category";
$nonAdminTablesArr[] = "Marking_Batch";
$nonAdminTablesArr[] = "Report-Billing Pending";
$nonAdminTablesArr[] = "Report-Billing Paid";
$nonAdminTablesArr[] = "student_payment";
$nonAdminTablesArr[] = "LIST-Student Billing";
$nonAdminTablesArr[] = "student_billing";
$nonAdminTablesArr[] = "report_bill_pending";
$nonAdminTablesArr[] = "report_bill_paid";
$nonAdminTablesArr[] = "Report_Family";
$nonAdminTablesArr[] = "Report_Discipline";
$nonAdminTablesArr[] = "Report_Extracurricular";
$nonAdminTablesArr[] = "Report-_Industry_Training";
$nonAdminTablesArr[] = "Report_Compulsory_Training";
$nonAdminTablesArr[] = "Report_Sponsor";
$nonAdminTablesArr[] = "Report_Staff_Training";
$nonAdminTablesArr[] = "Report_Staff_Kin";
$nonAdminTablesArr[] = "Report_Student_Course";
$nonAdminTablesArr[] = "training";
$nonAdminTablesArr[] = "Report_Student_Hostel";
$nonAdminTablesArr[] = "Chart_no_student";
$nonAdminTablesArr[] = "Report_Exam_Slip_Indiv";
$nonAdminTablesArr[] = "Report_Exam_Slip_Batch";
$nonAdminTablesArr[] = "Report_Exam_Result_Indiv";
$nonAdminTablesArr[] = "Report_Exam_Result_Batch";
$nonAdminTablesArr[] = "Report_Student_Class";
$nonAdminTablesArr[] = "all";
$nonAdminTablesArr[] = "enroll";
$nonAdminTablesArr[] = "staff_internal_history";
$nonAdminTablesArr[] = "calendar_qa";
$nonAdminTablesArr[] = "enroll_prospect";
$nonAdminTablesArr[] = "Report_Exam_Summary";
$nonAdminTablesArr[] = "Report_student_billing_overall";
$nonAdminTablesArr[] = "Report_Sponsor_Overall";
$nonAdminTablesArr[] = "Report_Student_Hostel_overall";
$nonAdminTablesArr[] = "Report_Student_Class_overall";
$nonAdminTablesArr[] = "Report_Student_Payment";
$nonAdminTablesArr[] = "ojt_company";
$nonAdminTablesArr[] = "exam_eligible_seatno";
$nonAdminTablesArr[] = "exam_result_memo";
$nonAdminTablesArr[] = "Report_Exam_Result_Batch_Whole";
$nonAdminTablesArr[] = "t_facilities_timetable";
$nonAdminTablesArr[] = "student_evaluation";
$nonAdminTablesArr[] = "Report_Student_Attendance";
$nonAdminTablesArr[] = "Report_Instructor_Trade";
$nonAdminTablesArr[] = "student_course_dca";
$nonAdminTablesArr[] = "Evaluation_Batch_List";
$nonAdminTablesArr[] = "w_news";
$nonAdminTablesArr[] = "w_gallery_sub";
$nonAdminTablesArr[] = "w_pic";
$nonAdminTablesArr[] = "w_gallery";
$nonAdminTablesArr[] = "w_faq";
$nonAdminTablesArr[] = "w_slider";
$nonAdminTablesArr[] = "Report_Exam_Slip_MOE";
$nonAdminTablesArr[] = "Report_Exam_Result_MOE";
$nonAdminTablesArr[] = "Program_Batch";
$nonAdminTablesArr[] = "timetable_attendance";
$nonAdminTablesArr[] = "Report_Absent";
$nonAdminTablesArr[] = "Report_Attendance";
$nonAdminTablesArr[] = "Program_Batch_Bill";
$nonAdminTablesArr[] = "support";
$nonAdminTablesArr[] = "w_course";
$nonAdminTablesArr[] = "Chart_Exam_Internal";
$nonAdminTablesArr[] = "student_billing_item";
$nonAdminTablesArr[] = "student_bill_list";
$nonAdminTablesArr[] = "student_bill_pay";
$nonAdminTablesArr[] = "course_moe2";
$nonAdminTablesArr[] = "course_moe2_sem2";
$nonAdminTablesArr[] = "course_moe2_sem3";
$nonAdminTablesArr[] = "course_moe2_sem4";
$nonAdminTablesArr[] = "course_moe2_sem5";
$nonAdminTablesArr[] = "course_moe2_sem6";
$nonAdminTablesArr[] = "Marking_Student_list";
$nonAdminTablesArr[] = "Report_Attendance_Student_List";
$nonAdminTablesArr[] = "Report_Student_Course_List";
$nonAdminTablesArr[] = "student_course_DCA_List_student2";
$nonAdminTablesArr[] = "student_bill_list2";
$nonAdminTablesArr[] = "student_bill_statement";

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));
	
switch(postvalue("a"))
{
	case "add":
		$sql ="insert into `campsysv621_uggroups` (`Label`) values (".db_prepare_string(postvalue("name")).")";
		db_exec($sql,$conn);
		$sql = "select max(`GroupID`) from `campsysv621_uggroups`";
		$rs = db_query($sql,$conn);
		$data = db_fetch_numarray($rs);
		echo "<textarea>".htmlspecialchars(my_json_encode(array('success' => true, 'id' => $data[0])))."</textarea>";
		break;
	case "del":
		$sql ="delete from `campsysv621_uggroups` where `GroupID`=".(postvalue("id")+0);
		db_exec($sql,$conn);
		$sql ="delete from `campsysv621_ugrights` where `GroupID`=".(postvalue("id")+0);
		db_exec($sql,$conn);
		$sql ="delete from `campsysv621_ugmembers` where `GroupID`=".(postvalue("id")+0);
		db_exec($sql,$conn);
		echo "<textarea>".htmlspecialchars(my_json_encode(array('success' => true)))."</textarea>";
		break;
	case "rename":
		$sql ="update `campsysv621_uggroups` set `Label`=".db_prepare_string(postvalue("name"))." where `GroupID`=".(postvalue("id")+0);
		db_exec($sql,$conn);
		echo "<textarea>".htmlspecialchars(my_json_encode(array('success' => true)))."</textarea>";
		break;
	case 'saveRights':
		$error = '';
		if(postvalue('state'))
		{
			$allRights = array();
			$rs = db_query("select `GroupID`, `TableName`, `AccessMask` from `campsysv621_ugrights`", $conn);
			// don't use db_fetch_array! because of ORACLE and PostgreSQL
			while($data = db_fetch_numarray($rs))
			{
				$allRights[] = $data;
			}
			
			$delGroupId = 0;
			$state = my_json_decode(postvalue('state'));
			// delete all extra permissions from db
			foreach($allRights as $i => $data)
			{
				$groupIDInt = (int) $data[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if(!array_key_exists($groupIDInt, $state))
					db_exec("delete from `campsysv621_ugrights` where `GroupID`=".$groupIDInt, $conn);
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
					db_exec("delete from `campsysv621_ugrights` where `GroupID`=".$groupIDInt." and `TableName`=".db_prepare_string(html_special_decode($data[1])), $conn);
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if(!array_key_exists($table, $realTables))
						continue;
					
					$ins = true;
					foreach($allRights as $i => $data)
					{	
						if($data[0] == $groupId && $data[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
								db_exec("update `campsysv621_ugrights` set `AccessMask`=".db_prepare_string($mask)." where `GroupID`=".$groupId." and `TableName`=".db_prepare_string(html_special_decode($realTables[$table])), $conn);
						}
					}
					if($ins)
					{
						db_exec(mysprintf("insert into `campsysv621_ugrights` (`TableName`, `GroupID`, `AccessMask`) values (%s, %d, %s)", 
							array(db_prepare_string(html_special_decode($realTables[$table])), $groupId, db_prepare_string($mask))), $conn);
					}
					
					if(db_error($conn) != '')
						$error .= ($error == '' ? '' : ' ').db_error($conn);
				}
			}
		}
		getJSONResult($error);
		break;
	case 'saveMembership':
		$error = '';
		$groupId = postvalue('group');
		$realUsers = GetRealValues();
		
		for($i=0;$i<count($realUsers);$i++)
		{
			if($realUsers[$i] != $_SESSION["UserID"])
				$sql = "delete from `campsysv621_ugmembers` where `UserName`=%s";
			else
				$sql = "delete from `campsysv621_ugmembers` where `UserName`=%s and `GroupID`<>-1";
			
			db_exec(mysprintf($sql, array(db_prepare_string(html_special_decode($realUsers[$i])))), $conn);	
		}
		
		if(postvalue('state'))
		{
			$state = my_json_decode(postvalue('state'));
			foreach ($state as $group => $users)
				foreach ($users as $user)
				{
					if(!array_key_exists($user, $realUsers))
						continue;
					
					db_exec(mysprintf("insert into `campsysv621_ugmembers` (`UserName`, `GroupID`) values (%s, %d)"
						, array(db_prepare_string(html_special_decode($realUsers[$user])), $group)), $conn);
					
					if(db_error($conn) != '')
						$error .= db_error($conn);
				}
		}
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo "<textarea>".htmlspecialchars(my_json_encode($result))."</textarea>";
}