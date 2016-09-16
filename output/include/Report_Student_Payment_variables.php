<?php
$strTableName="Report_Student_Payment";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_payment";

$gstrOrderBy="ORDER BY student_payment.pay_id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Report_Student_Payment");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Report_Student_Payment"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>