<?php
$dalTablecalendar = array();
$dalTablecalendar["id"] = array("type"=>3,"varname"=>"id");
$dalTablecalendar["branch_id"] = array("type"=>3,"varname"=>"branch_id");
$dalTablecalendar["title"] = array("type"=>200,"varname"=>"title");
$dalTablecalendar["content"] = array("type"=>201,"varname"=>"content");
$dalTablecalendar["category"] = array("type"=>200,"varname"=>"category");
$dalTablecalendar["date_start"] = array("type"=>7,"varname"=>"date_start");
$dalTablecalendar["date_end"] = array("type"=>7,"varname"=>"date_end");
$dalTablecalendar["days"] = array("type"=>3,"varname"=>"days");
	$dalTablecalendar["id"]["key"]=true;
$dal_info["calendar"]=&$dalTablecalendar;

?>