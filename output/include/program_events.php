<?php 
class eventclass_program  extends eventsBase
{ 
	function eventclass_program()
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

		//because MATA only have one branch, so by defaulr branchid=1

global $conn;
$branchid='1';
$programid=$values['ID'];
$strSQLInsert = "insert into branch_program (branch_id, program_id) values ('$branchid', '$programid')";
db_exec($strSQLInsert,$conn);



;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		//because MATA only have one branch, so by defaulr branchid=1
global $conn;
$branchid='1';
$programid=$values['ID'];
$sql_add = "insert into branch_program (branch_id, program_id) values ('$branchid', '$programid')";
db_exec($sql_add,$conn);

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where,&$deleted_values,&$message,&$pageObject)
{

		
global $conn;
$branchid='1';
//if program deleted, the branch program also deleted
$programid=$deleted_values['ID'];
$sql_del = "DELETE FROM branch_program WHERE program_id='$programid'";
db_exec($sql_del,$conn);

;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
