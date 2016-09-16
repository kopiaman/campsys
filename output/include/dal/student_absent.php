<?php
$dalTablestudent_absent = array();
$dalTablestudent_absent["abid"] = array("type"=>3,"varname"=>"abid");
$dalTablestudent_absent["StudentID"] = array("type"=>3,"varname"=>"StudentID");
$dalTablestudent_absent["courseID"] = array("type"=>3,"varname"=>"courseID");
$dalTablestudent_absent["dates"] = array("type"=>7,"varname"=>"dates");
$dalTablestudent_absent["reason"] = array("type"=>200,"varname"=>"reason");
	$dalTablestudent_absent["abid"]["key"]=true;
$dal_info["student_absent"]=&$dalTablestudent_absent;

?>