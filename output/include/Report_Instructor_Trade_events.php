<?php 
class eventclass_Report_Instructor_Trade  extends eventsBase
{ 
	function eventclass_Report_Instructor_Trade()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		global $conn;

$ID=$keys['ID'];
//give uppercase name
$uppername=strtoupper($values['Name']);

$give_matric = "UPDATE staff_info set Name='$uppername' where ID='$ID' ";
db_exec($give_matric,$conn);
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
