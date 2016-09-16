<?php 
class eventclass_student_absent  extends eventsBase
{ 
	function eventclass_student_absent()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["AfterDelete"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		global $conn;

$attend_id=$values['attend_id'];

//select shecdule ID from timetable
$sql_at= "SELECT scheduleID,courseID,date,(end_time-start_time) AS hour FROM schedule_timetable WHERE id='$attend_id'";
$query_at=db_query($sql_at,$conn);
$row_at=db_fetch_array($query_at);

$scheduleID=$row_at['scheduleID'];

//select related schedule id from schedule
$sql_at2= "SELECT programID,batchID,groupID FROM schedule WHERE scheduleID='$scheduleID'";
$query_at2=db_query($sql_at2,$conn);
$row_at2=db_fetch_array($query_at2);

$program=$row_at2['programID'];
$batch=$row_at2['batchID'];
$class=$row_at2['groupID'];

//update program , batch, class to student_attendance table
$date=$row_at['date'];
$hour=$row_at['hour'];
$course=$row_at['courseID'];
$id=$keys['id'];
$sql_up= "Update student_attendance set programID ='$program', batchID='$batch',class='$class',course='$course',date='$date',hour='$hour' where id='$id'";
$query_up=db_exec($sql_up,$conn);

//query the total hour for this module
$sql_th= "SELECT total_hour FROM program_course WHERE programID='$program' && CourseID=$course";
$query_th=db_query($sql_th,$conn);
$row_th=db_fetch_array($query_th);

$totalhour=$row_th['total_hour'];
//the percentage wight of absentee (  $hour/$totalhour)
$weight_absent=($hour/$totalhour*100);

//query current attendance status for this student, program , module
$studentID=$values['StudentID'];
$sql_at3="SELECT Attendance FROM student_course WHERE StudentID=$studentID AND programID=$program AND CourseID=$course AND Exam_Remark IS NULL";
$query_at3=db_query($sql_at3,$conn);
$row_at3=db_fetch_array($query_at3);

$current_attendance=$row_at3['Attendance'];
//update student_course attendance

$net_attendance=$current_attendance-$weight_absent;

$sql_ups= "Update student_course SET Attendance='$net_attendance' where StudentID='$studentID' && programID='$program' && CourseID=$course AND Exam_Remark IS NULL";
$query_ups=db_exec($sql_ups,$conn);
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;

$attend_id=$values['attend_id'];

//select shecdule ID from timetable
$sql_at= "SELECT scheduleID,courseID,date,(end_time-start_time) AS hour FROM schedule_timetable WHERE id='$attend_id'";
$query_at=db_query($sql_at,$conn);
$row_at=db_fetch_array($query_at);

$scheduleID=$row_at['scheduleID'];

//select related schedule id from schedule
$sql_at2= "SELECT programID,batchID,groupID FROM schedule WHERE scheduleID='$scheduleID'";
$query_at2=db_query($sql_at2,$conn);
$row_at2=db_fetch_array($query_at2);

$program=$row_at2['programID'];
$batch=$row_at2['batchID'];
$class=$row_at2['groupID'];

//update program , batch, class to student_attendance table
$date=$row_at['date'];
$hour=$row_at['hour'];
$course=$row_at['courseID'];
$id=$keys['id'];
$sql_up= "Update student_attendance set programID ='$program', batchID='$batch',class='$class',course='$course',date='$date',hour='$hour' where id='$id'";
$query_up=db_exec($sql_up,$conn);

//query the total hour for this module
$sql_th= "SELECT total_hour FROM program_course WHERE programID='$program' && CourseID=$course";
$query_th=db_query($sql_th,$conn);
$row_th=db_fetch_array($query_th);

$totalhour=$row_th['total_hour'];
//the percentage wight of absentee (  $hour/$totalhour)
$weight_absent=($hour/$totalhour*100);

//query current attendance status for this student, program , module
$studentID=$values['StudentID'];
$sql_at3="SELECT Attendance FROM student_course WHERE StudentID=$studentID AND programID=$program AND CourseID=$course";
$query_at3=db_query($sql_at3,$conn);
$row_at3=db_fetch_array($query_at3);

$current_attendance=$row_at3['Attendance'];
//update student_course attendance

$net_attendance=$current_attendance-$weight_absent;

$sql_ups= "Update student_course SET Attendance='$net_attendance' where StudentID='$studentID' && programID='$program' && CourseID=$course";
$query_ups=db_exec($sql_ups,$conn);
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where,&$deleted_values,&$message,&$pageObject)
{

		global $conn;

$attend_id=$deleted_values['attend_id'];

//select shecdule ID from timetable
$sql_at= "SELECT scheduleID,courseID,date,(end_time-start_time) AS hour FROM schedule_timetable WHERE id='$attend_id'";
$query_at=db_query($sql_at,$conn);
$row_at=db_fetch_array($query_at);

$scheduleID=$row_at['scheduleID'];

//select related schedule id from schedule
$sql_at2= "SELECT programID,batchID,groupID FROM schedule WHERE scheduleID='$scheduleID'";
$query_at2=db_query($sql_at2,$conn);
$row_at2=db_fetch_array($query_at2);

$program=$row_at2['programID'];
$batch=$row_at2['batchID'];
$class=$row_at2['groupID'];

//update program , batch, class to student_attendance table
$date=$row_at['date'];
$hour=$row_at['hour'];
$course=$row_at['courseID'];
$id=$keys['id'];
$sql_up= "Update student_attendance set programID ='$program', batchID='$batch',class='$class',course='$course',date='$date',hour='$hour' where id='$id'";
$query_up=db_exec($sql_up,$conn);

//query the total hour for this module
$sql_th= "SELECT total_hour FROM program_course WHERE programID='$program' && CourseID=$course";
$query_th=db_query($sql_th,$conn);
$row_th=db_fetch_array($query_th);

$totalhour=$row_th['total_hour'];
//the percentage wight of absentee (  $hour/$totalhour)
$weight_absent=($hour/$totalhour*100);

//query current attendance status for this student, program , module
$studentID=$deleted_values['StudentID'];
$sql_at3="SELECT Attendance FROM student_course WHERE StudentID=$studentID AND programID=$program AND CourseID=$course AND Exam_Remark IS NULL";
$query_at3=db_query($sql_at3,$conn);
$row_at3=db_fetch_array($query_at3);

$current_attendance=$row_at3['Attendance'];
//update student_course attendance

$net_attendance=$current_attendance+$weight_absent;

$sql_ups= "Update student_course SET Attendance='$net_attendance' where StudentID='$studentID' && programID='$program' && CourseID=$course AND Exam_Remark IS NULL";
$query_ups=db_exec($sql_ups,$conn);

;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
