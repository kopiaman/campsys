<?php 
class eventclass_Report_Student_Course  extends eventsBase
{ 
	function eventclass_Report_Student_Course()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
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
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
