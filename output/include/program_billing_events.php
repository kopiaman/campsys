<?php 
class eventclass_program_billing  extends eventsBase
{ 
	function eventclass_program_billing()
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
$proid= $keys['proid'];
$bill_date=$values['bill_date'];
$amount_bill=$values['amount'];
$bill_no=$values['bill_no'];
$item=$values['item'];
$ProgramID = $values['ProgramID'];
$BatchID = $values['BatchID'];

//get related student according to intake , branch, and program
$sql_student = "select StudentID from student_info where DipID='$ProgramID' AND BatchID='$BatchID' AND Status='Active'";
$q_student = db_query($sql_student,$conn);

//insert all program billing item to related student program  bill
while($row_student=db_fetch_array($q_student))
{ 
$studentID=$row_student['StudentID'];
$sql_insert="INSERT INTO student_billing (proid,date,amount,amount_balance,bill_no,item,studentID,status)
VALUES ('$proid','$bill_date','$amount_bill','$amount_bill','$bill_no','$item','$studentID','Pending')";
db_exec($sql_insert,$conn);	
}


;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where,&$deleted_values,&$message,&$pageObject)
{

		global $conn;
$proid = $deleted_values['proid'];


//get related bill in student record
$sql_bill= "select student_bill_id from student_billing where proid='$proid'";
$q_bill = db_query($sql_bill,$conn);
$row_bill=db_fetch_array($q_bill);

//delete payment record
do{
$student_bill_id=$q_bill['student_bill_id'];
$sql_del2="DELETE FROM student_payment WHERE student_bill_id='$student_bill_id'";
db_exec($sql_del2,$conn);	 
}while($row_bill=db_fetch_array($q_bill));

//then delete student bill
$sql_del="DELETE FROM student_billing WHERE proid='$proid'";
db_exec($sql_del,$conn);	 












;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;
$proid= $keys['proid'];
$date=$values['bill_date'];
$amount=$values['amount'];
$item=$values['item'];
$bill_no=$values['bill_no'];


$sql_update="UPDATE student_billing SET 
item='$item',amount='$amount',amount_balance='$amount',
date='$date',
bill_no='$bill_no'
WHERE proid='$proid'";
db_exec($sql_update,$conn);

;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
