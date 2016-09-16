<?php 
class eventclass_Marking_Batch  extends eventsBase
{ 
	function eventclass_Marking_Batch()
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

		/*
global $conn;
$mark=$values['Final_Exam'];
$ID=$keys['ID'];
$course=$values['CourseID'];

switch($course){

 case 15:
 if($mark>84){  $Exam_Status='EXCELLENT'; }
  else if($mark>79) {  $Exam_Status='GOOD'; }
	else if($mark>59) {  $Exam_Status='PASS'; }
	else if($mark<60) {  $Exam_Status='FAIL'; }
	else { $Exam_Status='-'; }
	$sql_update2="UPDATE student_course SET Exam_Status='$Exam_Status' WHERE ID='$ID'";
	db_exec($sql_update2,$conn);
	break;

 default: 
  if($mark>84){  $Exam_Status='EXCELLENT'; }
  else if($mark>79) {  $Exam_Status='GOOD'; }
	else if($mark>74) {  $Exam_Status='PASS'; }
	else if($mark<75) {  $Exam_Status='FAIL'; }
	else { $Exam_Status='-'; }
	$sql_update2="UPDATE student_course SET Exam_Status='$Exam_Status' WHERE ID='$ID'";
	db_exec($sql_update2,$conn);
}





*/
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
