<?php
$strTableName="Report_student_billing_overall";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_billing";

$gstrOrderBy="ORDER BY program_billing.BatchID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Report_student_billing_overall");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Report_student_billing_overall"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>