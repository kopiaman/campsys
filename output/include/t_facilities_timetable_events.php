<?php 
class eventclass_t_facilities_timetable  extends eventsBase
{ 
	function eventclass_t_facilities_timetable()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["AfterDelete"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		
global $conn;
//to add endate to calendar also
$courseID=$values['courseID'];
$start_time=$values['start_time'];
$end_time=$values['end_time'];
$staffID=$values['staffID'];
$staffID2=$values['staffID2'];
$facility=$values['facility'];
$program=$values['program'];
$batch=$values['batch'];
$class=$values['class'];

$sdate=$values['date'];
$edate=$values['endate'];
$legend=$values['legend'];
$id=$keys['id'];

if($program=='' AND $batch==''){
$program=0; $batch=0; 
$sql_up= "Update t_facilities_timetable set program ='$program',batch='$batch' where id='$id'";
$query_up=db_exec($sql_up,$conn);

}else{}



while(strtotime($sdate)<strtotime($edate)) {
$sdate=date("Y-m-d", strtotime("+1 day", strtotime($sdate)));
$sql_1= "INSERT INTO t_facilities_timetable (fid,courseID,start_time,end_time,staffID,staffID2,date,facility,	program,	batch	,class,legend) 
values ('$id','$courseID','$start_time','$end_time','$staffID','$staffID2','$sdate','$facility',	'$program',	'$batch'	,'$class','$legend')";
db_exec($sql_1,$conn);
};

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		
global $conn;
//to add endate to calendar also
$courseID=$values['courseID'];
$start_time=$values['start_time'];
$end_time=$values['end_time'];
$staffID=$values['staffID'];$staffID2=$values['staffID2'];
$facility=$values['facility'];
$program=$values['program'];
$batch=$values['batch'];
$class=$values['class'];

$sdate=$values['date'];
$edate=$values['endate'];
$legend=$values['legend'];
$id=$keys['id'];

$sql_del= "DELETE FROM t_facilities_timetable WHERE fid='$id'";
db_exec($sql_del,$conn);	

if($program=='' AND $batch==''){
$program=0; $batch=0; 
$sql_up= "Update t_facilities_timetable set program ='$program',batch='$batch' where id='$id'";
$query_up=db_exec($sql_up,$conn);
}else{}

while(strtotime($sdate)<strtotime($edate)) {
$sdate=date("Y-m-d", strtotime("+1 day", strtotime($sdate)));
$sql_1= "INSERT INTO t_facilities_timetable (fid,courseID,start_time,end_time,staffID,staffID2,date,facility,	program,	batch	,class,legend) 
values ('$id','$courseID','$start_time','$end_time','$staffID','$staffID2','$sdate','$facility',	'$program',	'$batch'	,'$class','$legend')";
db_exec($sql_1,$conn);
};

;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where,&$deleted_values,&$message,&$pageObject)
{

		/*
global $conn;
$id=$deleted_values['id'];
$sql_del= "DELETE FROM t_facilities_timetable WHERE fid=$id";
$query_del=db_exec($sql_del,$conn);
*/
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
