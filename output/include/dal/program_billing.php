<?php
$dalTableprogram_billing = array();
$dalTableprogram_billing["proid"] = array("type"=>3,"varname"=>"proid");
$dalTableprogram_billing["ProgramID"] = array("type"=>3,"varname"=>"ProgramID");
$dalTableprogram_billing["BatchID"] = array("type"=>3,"varname"=>"BatchID");
$dalTableprogram_billing["item"] = array("type"=>200,"varname"=>"item");
$dalTableprogram_billing["amount"] = array("type"=>14,"varname"=>"amount");
$dalTableprogram_billing["bill_date"] = array("type"=>200,"varname"=>"bill_date");
$dalTableprogram_billing["bill_no"] = array("type"=>200,"varname"=>"bill_no");
	$dalTableprogram_billing["proid"]["key"]=true;
$dal_info["program_billing"]=&$dalTableprogram_billing;

?>