<?php
$dalTablestudent_qualification = array();
$dalTablestudent_qualification["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablestudent_qualification["StudentID"] = array("type"=>3,"varname"=>"StudentID");
$dalTablestudent_qualification["Institution"] = array("type"=>200,"varname"=>"Institution");
$dalTablestudent_qualification["YearGrad"] = array("type"=>3,"varname"=>"YearGrad");
$dalTablestudent_qualification["Education_Type"] = array("type"=>200,"varname"=>"Education_Type");
$dalTablestudent_qualification["Major"] = array("type"=>200,"varname"=>"Major");
$dalTablestudent_qualification["Grade_CGPA"] = array("type"=>200,"varname"=>"Grade_CGPA");
	$dalTablestudent_qualification["ID"]["key"]=true;
$dal_info["student_qualification"]=&$dalTablestudent_qualification;

?>