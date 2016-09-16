<?php 
class eventclass_exam_eligible_seatno  extends eventsBase
{ 
	function eventclass_exam_eligible_seatno()
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
$mark=$values['Final_Exam'];
$ID=$keys['ID'];

if( $mark>=90){
$sql_update="UPDATE student_course SET Exam_Status='EXCELLENT' WHERE ID='$ID'";
db_exec($sql_update,$conn);

}
else if ( $mark<=89 && $mark>=80) {
$sql_update="UPDATE student_course SET Exam_Status='GOOD' WHERE ID='$ID'";
db_exec($sql_update,$conn);
}

else if ( $mark<=79 && $mark>=74) {
$sql_update="UPDATE student_course SET Exam_Status='PASS' WHERE ID='$ID'";
db_exec($sql_update,$conn);
}

else {
$sql_update="UPDATE student_course SET Exam_Status='FAILED' WHERE ID='$ID'";
db_exec($sql_update,$conn);
}
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
