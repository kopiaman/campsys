<?php 
class eventclass_program_course  extends eventsBase
{ 
	function eventclass_program_course()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterDelete"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		
global $conn;

$programID=$values['ProgramID'];
$courseID=$values['CourseID'];
$semester=$values['Semester'];
$credit=$values['credit'];
$hour=$values['total_hour'];
$batch=$values['BatchID'];

$sql_1 = "SELECT StudentID FROM student_info WHERE DipID='$programID' AND BatchID=$batch AND Status='Active'";
$q_1 = db_query($sql_1,$conn);
$row_q1=db_fetch_array($q_1);

if($row_q1['StudentID']){
	do{
	$StudentID=$row_q1['StudentID'];

  //insert internal exam
	$sql_add = "INSERT INTO student_course (CourseID,StudentID,ProgramID,Semester,Credit)
	 values ('$courseID','$StudentID','$programID','$semester','$credit')";
	db_exec($sql_add,$conn);

	//insert DCA
	$sql_course_dca = "insert into student_course_dca (StudentID, CourseID, Semester,ProgramID) values ('$StudentID', '$courseID', '$semester','$programID')";
	db_exec($sql_course_dca,$conn);

	}while($row_q1=db_fetch_array($q_1));

}else{};
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where,&$deleted_values,&$message,&$pageObject)
{

		

global $conn;

$programID=$deleted_values['ProgramID'];
$courseID=$deleted_values['CourseID'];
$semester=$deleted_values['Semester'];
$credit=$deleted_values['credit'];
$hour=$deleted_values['total_hour'];
$batch=$deleted_values['BatchID'];

$sql_1 = "
SELECT student_course.StudentID FROM student_course
INNER JOIN student_info ON student_course.StudentID = student_info.StudentID
WHERE student_course.ProgramID='$programID' AND  student_info.BatchID='$batch'
AND student_course.CourseID='$courseID'";
$q_1=db_query($sql_1,$conn);
$row_q1=db_fetch_array($q_1);

if($row_q1['StudentID']){
	do{
	$StudentID=$row_q1['StudentID'];

	$sql_del1="DELETE FROM student_course WHERE ProgramID='$programID' AND CourseID='$courseID' AND StudentID='$StudentID'";
	db_exec($sql_del1,$conn);

	$sql_del2="DELETE FROM student_course_dca WHERE ProgramID='$programID' AND CourseID='$courseID' AND StudentID='$StudentID'";
	db_exec($sql_del2,$conn);


	}while($row_q1=db_fetch_array($q_1));
}else{};
;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		
global $conn;

$programID=$values['ProgramID'];
$courseID=$values['CourseID'];
$semester=$values['Semester'];
$batch=$values['BatchID'];
$credit=$values['credit'];
$total_hour=$values['total_hour'];


$sql_1 = "
SELECT student_course.StudentID FROM student_course
INNER JOIN student_info ON student_course.StudentID = student_info.StudentID
WHERE student_course.ProgramID='$programID' AND  student_info.BatchID='$batch'
AND student_course.CourseID='$courseID'";
$q_1=db_query($sql_1,$conn);
$row_q1=db_fetch_array($q_1);

if($row_q1['StudentID']){
	do{
	$StudentID=$row_q1['StudentID'];

	$sql_update="UPDATE student_course SET Semester='$semester',Credit='$credit' WHERE ProgramID='$programID' 
	 AND CourseID='$courseID' AND StudentID='$StudentID'";
	db_exec($sql_update,$conn);

	$sql_update2="UPDATE student_course_dca SET Semester='$semester' WHERE ProgramID='$programID' 
	 AND CourseID='$courseID' AND StudentID='$StudentID'";
	db_exec($sql_update2,$conn);


	}while($row_q1=db_fetch_array($q_1));
}else{};



//kalau first nak migrate data
/*
$sql_1 = "SELECT StudentID FROM student_info WHERE DipID='$programID' AND BatchID=$batch AND Status='Active'";
$q_1 = db_query($sql_1,$conn);
$row_q1=db_fetch_array($q_1);

do{
$StudentID=$row_q1['StudentID'];
$sql_add = "INSERT INTO student_course (CourseID,StudentID,ProgramID,Semester,Credit) values
 ('$courseID','$StudentID','$programID','$semester','$credit')";
db_exec($sql_add,$conn);

$sql_add2 = "INSERT INTO student_course_dca (CourseID,StudentID,ProgramID,Semester) values
 ('$courseID','$StudentID','$programID','$semester')";
db_exec($sql_add2,$conn);

}while($row_q1=db_fetch_array($q_1));

*/

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
