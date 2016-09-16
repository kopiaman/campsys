<?php
$dalTablestudent_billing = array();
$dalTablestudent_billing["student_bill_id"] = array("type"=>3,"varname"=>"student_bill_id");
$dalTablestudent_billing["proid"] = array("type"=>3,"varname"=>"proid");
$dalTablestudent_billing["studentID"] = array("type"=>3,"varname"=>"studentID");
$dalTablestudent_billing["item"] = array("type"=>200,"varname"=>"item");
$dalTablestudent_billing["amount"] = array("type"=>14,"varname"=>"amount");
$dalTablestudent_billing["status"] = array("type"=>200,"varname"=>"status");
$dalTablestudent_billing["date"] = array("type"=>200,"varname"=>"date");
$dalTablestudent_billing["amount_balance"] = array("type"=>14,"varname"=>"amount_balance");
$dalTablestudent_billing["bill_no"] = array("type"=>200,"varname"=>"bill_no");
$dalTablestudent_billing["remark"] = array("type"=>200,"varname"=>"remark");
	$dalTablestudent_billing["student_bill_id"]["key"]=true;
$dal_info["student_billing"]=&$dalTablestudent_billing;

?>