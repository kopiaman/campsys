<?php 
class eventclass_student_course_moe  extends eventsBase
{ 
	function eventclass_student_course_moe()
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
$ID=$keys['ID'];
$course=$values['CourseID'];

$sql_at= "SELECT Code FROM course_moe WHERE CourseID='$course'";
$query_at=db_query($sql_at,$conn);
$row_at=db_fetch_array($query_at);

$code=substr($row_at['Code'],0,1);	
if($code='P'){
	$result=substr($values['Final_Exam'],0,1);	
			switch ($result)
		{
		case ($result=='E'):
		  $status='FAIL';
		  break;
		case ($result='D'):
		  $status='PASS';
		  break;
		case ($result=='C'):
		  $status='GOOD';
		  break;
		case ($result=='A'):
		  $status='EXCELLENT';
		  break;
		case ($result=='T'):
		  $status='T';
		  break;
		default:
			$status='';
		}

	//update result status
	$sql_up= "UPDATE student_course_moe SET Exam_Status='$status' WHERE ID=$ID ";
	$query_up=db_exec($sql_up,$conn);
}
else if($code='A'){
$result=$values['Final_Exam'];	
		switch ($result)
		{
		case ($result=='E' || $result='D-' || $result='D' || $result='D+'):
		  $status='NOT COMPETENCE';
		  break;
		case ($result=='C' || $result='C+' ):
		  $status='NOT COMPETENCE';
		  break;
		case ($result=='B' || $result='B-' || $result='B+' ):
		  $status='COMPETENCE';
		  break;
		case ($result=='A-'):
		  $status='GOOD COMPETENCE';
		  break;
		case ($result=='A'):
		  $status='EXCELLENT COMPETENCE';
		  break;
		case ($result=='T'):
		  $status='T';
		  break;
		default:
			$status='';
		}
	//update result status
	$sql_up= "UPDATE student_course_moe SET Exam_Status ='$status' WHERE ID=$ID ";
	$query_up=db_exec($sql_up,$conn);
}else{}
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;
$ID=$keys['ID'];
$course=$values['CourseID'];

$sql_at= "SELECT Code FROM course_moe WHERE CourseID=$course";
$query_at=db_query($sql_at,$conn);
$row_at=db_fetch_array($query_at);

$code=substr($row_at['Code'],0,1);	
if($code=='A'){
	$result=substr($values['Final_Exam'],0,1);	
			switch ($result)
		{
		case 'E':
		  $status='FAIL';
		  break;
		case 'D':
		  $status='PASS';
		  break;
		case 'C':
		  $status='GOOD';
		  break;
		case 'B':
		  $status='VERY GOOD';
		  break;
		case 'A':
		  $status='EXCELLENT';
		  break;
		case 'T':
		  $status='T';
		  break;
		default:
			$status='';
		};

	//update result status
	$sql_up= "UPDATE student_course_moe SET Exam_Status='$status' WHERE ID=$ID ";
	$query_up=db_exec($sql_up,$conn);
}
else if($code=='P'){
$result2=$values['Final_Exam'];	
		switch ($result2)
		{
		case 'E' :$status2='NOT COMPETENCE'; break;
		case 'D-':$status2='NOT COMPETENCE';break;
		case 'D':$status2='NOT COMPETENCE';break;
		case 'D+':$status2='NOT COMPETENCE';break;
		case 'C'  :$status2='NOT COMPETENCE';break;
		case 'C+' :$status2='NOT COMPETENCE';break;
		case 'B' : $status2='COMPETENCE';break;
		case 'B-' : $status2='COMPETENCE';break;
		case 'B+': $status2='COMPETENCE';break;
		case 'A-': $status2='GOOD COMPETENCE'; break;
		case 'A': $status2='EXCELLENT COMPETENCE'; break;
		case 'T': $status2='T'; break;
		default:
			$status2='';
		};
	//update result status
	$sql_up2= "UPDATE student_course_moe SET Exam_Status ='$status2' WHERE ID=$ID ";
	$query_up2=db_exec($sql_up2,$conn);
}else{};
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
