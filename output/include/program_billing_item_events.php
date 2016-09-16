<?php 
class eventclass_program_billing_item  extends eventsBase
{ 
	function eventclass_program_billing_item()
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
$programBillingID = $values['program_billing_ID'];
$programBillItemID = $keys['id'];
$programBill_itemdate=$values['bill_date'];
$amount_bill=$values['amount'];
$bill_no=$values['bill_no'];
$item=$values['item'];

//get related program in table PROGRAM BILLING
$sql_pb = "select programID,batch from program_billing where id='$programBillingID'";
$q_pb = db_query($sql_pb,$conn);
$row_pb=db_fetch_array($q_pb);

$programID = $row_pb['programID'];
$batch = $row_pb['batch'];

//get related student according to intake , branch, and program
$sql_student = "select StudentID from student_info where DipID='$programID' AND BatchID='$batch' AND Status='Active'";
$q_student = db_query($sql_student,$conn);

//insert all program billing item to related student program  bill
while($row_student=db_fetch_array($q_student))
{ 

$studentID=$row_student['StudentID'];
$sql_insert="INSERT INTO student_billing (date,amount,amount_balance,bill_no,item,program_billing_item_ID,studentID,status)
VALUES ('$programBill_itemdate','$amount_bill','$amount_bill','$bill_no','$item','$programBillItemID','$studentID','Pending')";
db_exec($sql_insert,$conn);	
}


;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where,&$deleted_values,&$message,&$pageObject)
{

		global $conn;

$programBillingID = $deleted_values['program_billing_ID'];
$programBillItemID = $deleted_values['id'];
$programBill_itemdate=$deleted_values['bill_date'];
$amount_bill=$deleted_values['amount'];


//**********  INSERT ALL PROGRAM BILLING ITEM TO RELATED INTAKE, PROGRAM AND ALSO ACTIVE STUDENT  ************

//get related intake,branch,&program in table PROGRAM BILLING
$sql_pb = "select programID,batch from program_billing where id='$programBillingID'";
$q_pb = db_query($sql_pb,$conn);
$row_pb=db_fetch_array($q_pb);;
$programID = $row_pb['programID'];
$batch=$row_pb['batch'];

//get related student according to intake , branch, and program
$sql_student = "select StudentID from student_info where AND DipID='$programID' AND BatchID='$batch' AND Status='Active'";
$q_student = db_query($sql_student,$conn);

//delete all student program bill related to this program billing item id

while($row_student=db_fetch_array($q_student)) {
  $studentID = $row_student['StudentID'];
  $sql_del="DELETE FROM student_billing WHERE program_billing_item_ID='$programBillItemID'";
db_exec($sql_del,$conn);	 }









;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;
$programBillingID = $values['program_billing_ID'];
$programBillItemID = $keys['id'];
$programBill_itemdate=$values['bill_date'];
$amount_bill=$values['amount'];
$bill_no=$values['bill_no'];
$item=$values['item'];

//get related intake,branch,&program in table PROGRAM BILLING
$sql_pb = "select intake,branchID,programID,batch from program_billing where id='$programBillingID'";
$q_pb = db_query($sql_pb,$conn);
$row_pb=db_fetch_array($q_pb);
$intake = $row_pb['intake'];
$branchID = $row_pb['branchID'];
$programID = $row_pb['programID'];
$batch = $row_pb['batch'];

//get related student according to intake , branch, and program
$sql_student = "select StudentID from student_info where Intake='$intake' AND BranchID='$branchID' AND DipID='$programID' AND BatchID='$batch' AND Status='Active'";
$q_student = db_query($sql_student,$conn);


//insert all program billing item to related student program  bill
while($row_student=db_fetch_array($q_student))
{ 
  $sql_update="UPDATE student_billing SET date='$programBill_itemdate',amount='$amount_bill',amount_balance='$amount_bill',bill_no='$bill_no',item='$item' WHERE program_billing_item_ID='$programBillItemID'";
db_exec($sql_update,$conn);

	
}


;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
