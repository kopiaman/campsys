<?php
$dalTableprogram_course = array();
$dalTableprogram_course["pcid"] = array("type"=>3,"varname"=>"pcid");
$dalTableprogram_course["ProgramID"] = array("type"=>3,"varname"=>"ProgramID");
$dalTableprogram_course["BatchID"] = array("type"=>3,"varname"=>"BatchID");
$dalTableprogram_course["CourseID"] = array("type"=>200,"varname"=>"CourseID");
$dalTableprogram_course["Semester"] = array("type"=>3,"varname"=>"Semester");
$dalTableprogram_course["total_hour"] = array("type"=>3,"varname"=>"total_hour");
$dalTableprogram_course["credit"] = array("type"=>3,"varname"=>"credit");
	$dalTableprogram_course["pcid"]["key"]=true;
$dal_info["program_course"]=&$dalTableprogram_course;

?>