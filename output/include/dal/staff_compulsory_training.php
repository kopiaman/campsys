<?php
$dalTablestaff_compulsory_training = array();
$dalTablestaff_compulsory_training["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablestaff_compulsory_training["StaffID"] = array("type"=>3,"varname"=>"StaffID");
$dalTablestaff_compulsory_training["TrainingID"] = array("type"=>3,"varname"=>"TrainingID");
$dalTablestaff_compulsory_training["Attendance"] = array("type"=>200,"varname"=>"Attendance");
$dalTablestaff_compulsory_training["Training_Date"] = array("type"=>200,"varname"=>"Training_Date");
$dalTablestaff_compulsory_training["Venue"] = array("type"=>200,"varname"=>"Venue");
$dalTablestaff_compulsory_training["Provider"] = array("type"=>200,"varname"=>"Provider");
	$dalTablestaff_compulsory_training["ID"]["key"]=true;
$dal_info["staff_compulsory_training"]=&$dalTablestaff_compulsory_training;

?>