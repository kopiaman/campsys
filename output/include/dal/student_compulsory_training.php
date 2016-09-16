<?php
$dalTablestudent_compulsory_training = array();
$dalTablestudent_compulsory_training["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablestudent_compulsory_training["StudentID"] = array("type"=>3,"varname"=>"StudentID");
$dalTablestudent_compulsory_training["TrainingID"] = array("type"=>3,"varname"=>"TrainingID");
$dalTablestudent_compulsory_training["Attendance"] = array("type"=>200,"varname"=>"Attendance");
$dalTablestudent_compulsory_training["Training_date"] = array("type"=>200,"varname"=>"Training_date");
$dalTablestudent_compulsory_training["Venue"] = array("type"=>200,"varname"=>"Venue");
$dalTablestudent_compulsory_training["Provider"] = array("type"=>200,"varname"=>"Provider");
	$dalTablestudent_compulsory_training["ID"]["key"]=true;
$dal_info["student_compulsory_training"]=&$dalTablestudent_compulsory_training;

?>