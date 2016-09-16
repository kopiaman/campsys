<?php
$dalTableuser = array();
$dalTableuser["id"] = array("type"=>3,"varname"=>"id");
$dalTableuser["icNo"] = array("type"=>200,"varname"=>"icNo");
$dalTableuser["password"] = array("type"=>200,"varname"=>"password");
$dalTableuser["role"] = array("type"=>200,"varname"=>"role");
$dalTableuser["username"] = array("type"=>200,"varname"=>"username");
$dalTableuser["fullname"] = array("type"=>200,"varname"=>"fullname");
$dalTableuser["department"] = array("type"=>200,"varname"=>"department");
$dalTableuser["umail"] = array("type"=>200,"varname"=>"umail");
	$dalTableuser["id"]["key"]=true;
$dal_info["user"]=&$dalTableuser;

?>