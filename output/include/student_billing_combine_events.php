<?php 
class eventclass_student_billing_combine  extends eventsBase
{ 
	function eventclass_student_billing_combine()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		
global $conn;
$amount_bill=$values['amount'];
$student_bill_id=$keys['student_bill_id'];

$sql_update="UPDATE student_billing SET amount_balance='$amount_bill' WHERE student_bill_id='$student_bill_id'";
db_exec($sql_update,$conn);
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;
$amount_bill=$values['amount'];
$student_bill_id=$keys['student_bill_id'];

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
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
