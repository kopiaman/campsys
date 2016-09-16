<?php
$dalTablestudent_bill_statement = array();
$dalTablestudent_bill_statement["bid"] = array("type"=>3,"varname"=>"bid");
$dalTablestudent_bill_statement["StudentID"] = array("type"=>3,"varname"=>"StudentID");
$dalTablestudent_bill_statement["statement"] = array("type"=>201,"varname"=>"statement");
$dalTablestudent_bill_statement["dates"] = array("type"=>7,"varname"=>"dates");
	$dalTablestudent_bill_statement["bid"]["key"]=true;
$dal_info["student_bill_statement"]=&$dalTablestudent_bill_statement;

?>