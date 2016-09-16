<?php
$dalTablestudent_attendance = array();
$dalTablestudent_attendance["id"] = array("type"=>3,"varname"=>"id");
$dalTablestudent_attendance["attend_id"] = array("type"=>3,"varname"=>"attend_id");
$dalTablestudent_attendance["StudentID"] = array("type"=>3,"varname"=>"StudentID");
$dalTablestudent_attendance["course"] = array("type"=>3,"varname"=>"course");
$dalTablestudent_attendance["date"] = array("type"=>7,"varname"=>"date");
$dalTablestudent_attendance["attend"] = array("type"=>200,"varname"=>"attend");
$dalTablestudent_attendance["description"] = array("type"=>200,"varname"=>"description");
$dalTablestudent_attendance["programID"] = array("type"=>200,"varname"=>"programID");
$dalTablestudent_attendance["batchID"] = array("type"=>200,"varname"=>"batchID");
$dalTablestudent_attendance["class"] = array("type"=>200,"varname"=>"fldclass");
$dalTablestudent_attendance["hour"] = array("type"=>3,"varname"=>"hour");
	$dalTablestudent_attendance["id"]["key"]=true;
$dal_info["student_attendance"]=&$dalTablestudent_attendance;

?>