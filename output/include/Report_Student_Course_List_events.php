<?php 
class eventclass_Report_Student_Course_List  extends eventsBase
{ 
	function eventclass_Report_Student_Course_List()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeDelete"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		global $conn;

$studentID =  $keys['StudentID'];
$programID = $values['DipID'];
$batchID=$values['BatchID'];
$datejoin=$values['DateJoin'];

/*---------ADD MODULE INTERNAL  TO STUDENT COURSE -------------------*/
//check all course in sem 1 and in same program
$sql_course = "select CourseID,Semester,ProgramID from program_course where ProgramID='$programID' AND BatchID=$batchID";
$query_course = db_query($sql_course,$conn);
$row_course=db_fetch_array($query_course);

if($row_course['CourseID']){
		do{
		$course = $row_course['CourseID'];$sem=$row_course['Semester'];
		//insert courseID INTERNAL to student_course
		$sql_course_insert = "insert into student_course (StudentID, CourseID, Semester,ProgramID) values ('$studentID', '$course', '$sem','$programID')";
		db_exec($sql_course_insert,$conn);
		//insert DCA
		$sql_course_dca = "insert into student_course_dca(StudentID, CourseID, Semester,ProgramID) values ('$studentID', '$course', '$sem','$programID')";
		db_exec($sql_course_dca,$conn);
										
		//insert assesment 
		$sql_course_ass = "insert into student_assesment (StudentID) values ('$studentID')";
		db_exec($sql_course_ass,$conn);
		}while ($row_course=db_fetch_array($query_course));
}else{};

/*------------insert course MOE to student_course_moe if STUDENT MOE---------------*/
$intake_category=$values['Intake_Category'];
if($intake_category='ED'){

	$sql_course_moe= "SELECT CourseID ,sem FROM course_moe";
	$query_course_moe=db_query($sql_course_moe,$conn);
	$row_course_moe=db_fetch_array($query_course_moe);

	do{
	$sem_moe=$row_course_moe['sem'];
	$course_moe=$row_course_moe['CourseID'];
	$sql_1= "insert into student_course_moe (CourseID,sem,StudentID) values ('$course_moe','$sem_moe','$studentID')";
	db_exec($sql_1,$conn);
	}while($row_course_moe=db_fetch_array($query_course_moe));
}else{};

/*------------ADD BILLING AUTO TO STUDENT ---------------*/
$sql_proid= "select proid,amount,item,bill_date,bill_no from program_billing 
where ProgramID='$programID' and  BatchID='$batchID'";
$query_proid=db_query($sql_proid,$conn);
$row_proid=db_fetch_array($query_proid);

if($row_proid['proid']){
		do{
		$proid=$row_proid['proid'];
		$amountbill=$row_proid['amount'];
		$item=$row_proid['item'];
		$bill_no=$row_proid['bill_no'];
		$bill_date=$row_proid['bill_date'];

		$sql_1= "insert into student_billing (proid,	studentID,	item,	amount,	status,	date	,amount_balance,	bill_no) 
		values ('$proid', '$studentID', '$item','$amountbill','Pending','$bill_date','$amountbill','$bill_no')";
		db_exec($sql_1,$conn);
		}while ($row_proid=db_fetch_array($query_proid));
}else{}

/*------------update NAME TO uppercase ---------------*/
$uppername=strtoupper($values['Name']);
$give_matric = "UPDATE student_info set Name='$uppername' where StudentID='$studentID' ";
db_exec($give_matric,$conn);



;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where,&$deleted_values,&$message,&$pageObject)
{

		global $conn;
$studentID=$deleted_values['StudentID'];

/**********DELETE ALL BILLING & PAYMENT RECORD*****************/

$sql_del2 = "DELETE FROM student_payment WHERE StudentID='$studentID'";db_exec($sql_del2,$conn);
$sql_del3 = "DELETE FROM student_billing WHERE StudentID='$studentID'";db_exec($sql_del3,$conn);

/**********DELETE ALL BILLING & PAYMENT RECORD END*****************/

$sql_del5 = "DELETE FROM student_course WHERE StudentID='$studentID'";db_exec($sql_del5,$conn);
$sql_del51 = "DELETE FROM student_course_dca WHERE StudentID='$studentID'";db_exec($sql_del51,$conn);
$sql_del52 = "DELETE FROM student_course_moe WHERE StudentID='$studentID'";db_exec($sql_del52,$conn);
$sql_del13 = "DELETE FROM student_assesment WHERE StudentID='$studentID'";db_exec($sql_del13,$conn);
$sql_del6 = "DELETE FROM student_compulsory_training WHERE StudentID='$studentID'";db_exec($sql_del6,$conn);
$sql_del7 = "DELETE FROM  student_discipline WHERE StudentID='$studentID'";db_exec($sql_del7,$conn);
$sql_del8 = "DELETE FROM student_extracurricular WHERE StudentID='$studentID'";db_exec($sql_del8,$conn);
$sql_del9 = "DELETE FROM student_hostel WHERE StudentID='$studentID'";db_exec($sql_del9,$conn);
$sql_del10 = "DELETE FROM student_industry_training WHERE studentID='$studentID'";db_exec($sql_del10,$conn);
$sql_del11 = "DELETE FROM student_qualification WHERE StudentID='$studentID'";db_exec($sql_del11,$conn);
$sql_del12 = "DELETE FROM student_school WHERE studentID='$studentID'";db_exec($sql_del12,$conn);


return true;
;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
