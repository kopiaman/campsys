<?php 
class eventclass_student_bill_pay  extends eventsBase
{ 
	function eventclass_student_bill_pay()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["AfterDelete"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;
$student_bill_id=$values['student_bill_id'];

$sql_inv = "SELECT amount AS amount_bill FROM student_billing WHERE student_bill_id='$student_bill_id'";
$q_inv = db_query($sql_inv,$conn);
$row_inv=db_fetch_array($q_inv);
$amount_bill=$row_inv['amount_bill'];


$sql_sum = "SELECT SUM(amount) AS sumpay , amount AS pay FROM student_payment WHERE student_bill_id='$student_bill_id'";
$q_sum = db_query($sql_sum,$conn);
$row_sum=db_fetch_array($q_sum);
$sumpay=$row_sum['sumpay'];


$balance=$amount_bill-$sumpay;

if( $balance<=0){
$sql_update2="UPDATE student_billing SET status='Paid',amount_balance='$balance' WHERE student_bill_id='$student_bill_id'";
db_exec($sql_update2,$conn);
}
else if($balance>0){
$sql_update="UPDATE student_billing SET status='Pending',amount_balance='$balance' WHERE student_bill_id='$student_bill_id'";
db_exec($sql_update,$conn);
}
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		global $conn;
$student_bill_id=$values['student_bill_id'];

$sql_inv = "SELECT amount AS amount_bill FROM student_billing WHERE student_bill_id='$student_bill_id'";
$q_inv = db_query($sql_inv,$conn);
$row_inv=db_fetch_array($q_inv);
$amount_bill=$row_inv['amount_bill'];


$sql_sum = "SELECT SUM(amount) AS sumpay , amount AS pay FROM student_payment WHERE student_bill_id='$student_bill_id'";
$q_sum = db_query($sql_sum,$conn);
$row_sum=db_fetch_array($q_sum);
$sumpay=$row_sum['sumpay'];


$balance=$amount_bill-$sumpay;

if( $balance<=0){
$sql_update2="UPDATE student_billing SET status='Paid',amount_balance='$balance' WHERE student_bill_id='$student_bill_id'";
db_exec($sql_update2,$conn);
}
else if($balance>0){
$sql_update="UPDATE student_billing SET status='Pending',amount_balance='$balance' WHERE student_bill_id='$student_bill_id'";
db_exec($sql_update,$conn);
}
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where,&$deleted_values,&$message,&$pageObject)
{

		global $conn;
$student_bill_id=$deleted_values['student_bill_id'];

$sql_inv = "SELECT amount AS amount_bill FROM student_billing WHERE student_bill_id='$student_bill_id'";
$q_inv = db_query($sql_inv,$conn);
$row_inv=db_fetch_array($q_inv);
$amount_bill=$row_inv['amount_bill'];


$sql_sum = "SELECT SUM(amount) AS sumpay FROM student_payment WHERE student_bill_id='$student_bill_id'";
$q_sum = db_query($sql_sum,$conn);
$row_sum=db_fetch_array($q_sum);
$sumpay=$row_sum['sumpay'];


$balance=$amount_bill-$sumpay;

if( $balance<=0){
$sql_update2="UPDATE student_billing SET status='Paid',amount_balance='$balance' WHERE student_bill_id='$student_bill_id'";
db_exec($sql_update2,$conn);
}
else if($balance>0){
$sql_update="UPDATE student_billing SET status='Pending',amount_balance='$balance' WHERE student_bill_id='$student_bill_id'";
db_exec($sql_update,$conn);
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
