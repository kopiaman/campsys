<?php 
class eventclass_student_course  extends eventsBase
{ 
	function eventclass_student_course()
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
