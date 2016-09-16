<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require_once('include/dbcommon.php');

$user_fullname='Mohd Deno Bin Dali';
$user_dep="CEO's OFFICE";

$sql_staff= "SELECT `Name`,`department` FROM `staff_info` WHERE `Name` LIKE '$user_fullname' AND `department` LIKE '$user_dep'";
$query_staff=mysql_query($sql_staff,$conn);
//$row_staff=mysql_fetch_assoc($query_staff);
$row_staff=mysql_num_rows($query_staff); 

echo  $row_staff;
if($row_staff==1){
echo 'Yes';
}else if($row_staff==0){
echo $message =" The Name and Department is not match.";
};


?>
</body>
</html>