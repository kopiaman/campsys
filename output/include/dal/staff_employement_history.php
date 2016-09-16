<?php
$dalTablestaff_employement_history = array();
$dalTablestaff_employement_history["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablestaff_employement_history["StaffID"] = array("type"=>3,"varname"=>"StaffID");
$dalTablestaff_employement_history["Organisation"] = array("type"=>200,"varname"=>"Organisation");
$dalTablestaff_employement_history["Position"] = array("type"=>200,"varname"=>"Position");
$dalTablestaff_employement_history["DateStart"] = array("type"=>7,"varname"=>"DateStart");
$dalTablestaff_employement_history["DateEnd"] = array("type"=>7,"varname"=>"DateEnd");
$dalTablestaff_employement_history["Reason"] = array("type"=>200,"varname"=>"Reason");
	$dalTablestaff_employement_history["ID"]["key"]=true;
$dal_info["staff_employement_history"]=&$dalTablestaff_employement_history;

?>