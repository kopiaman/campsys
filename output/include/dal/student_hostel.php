<?php
$dalTablestudent_hostel = array();
$dalTablestudent_hostel["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablestudent_hostel["StudentID"] = array("type"=>3,"varname"=>"StudentID");
$dalTablestudent_hostel["HostelID"] = array("type"=>200,"varname"=>"HostelID");
$dalTablestudent_hostel["Room_No"] = array("type"=>200,"varname"=>"Room_No");
$dalTablestudent_hostel["CheckInDate"] = array("type"=>200,"varname"=>"CheckInDate");
$dalTablestudent_hostel["CheckOutDate"] = array("type"=>200,"varname"=>"CheckOutDate");
$dalTablestudent_hostel["Items"] = array("type"=>200,"varname"=>"Items");
	$dalTablestudent_hostel["ID"]["key"]=true;
$dal_info["student_hostel"]=&$dalTablestudent_hostel;

?>