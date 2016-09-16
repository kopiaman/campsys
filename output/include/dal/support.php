<?php
$dalTablesupport = array();
$dalTablesupport["sid"] = array("type"=>3,"varname"=>"sid");
$dalTablesupport["topic"] = array("type"=>200,"varname"=>"topic");
$dalTablesupport["staff"] = array("type"=>200,"varname"=>"staff");
$dalTablesupport["inquiry"] = array("type"=>201,"varname"=>"inquiry");
$dalTablesupport["sstatus"] = array("type"=>200,"varname"=>"sstatus");
$dalTablesupport["answer"] = array("type"=>201,"varname"=>"answer");
$dalTablesupport["sdate"] = array("type"=>7,"varname"=>"sdate");
$dalTablesupport["stitle"] = array("type"=>200,"varname"=>"stitle");
$dalTablesupport["attach"] = array("type"=>201,"varname"=>"attach");
$dalTablesupport["attachAns"] = array("type"=>201,"varname"=>"attachAns");
	$dalTablesupport["sid"]["key"]=true;
$dal_info["support"]=&$dalTablesupport;

?>