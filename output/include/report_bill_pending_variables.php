<?php
$strTableName="report_bill_pending";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="report_bill_pending";

$gstrOrderBy="ORDER BY BatchID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("report_bill_pending");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["report_bill_pending"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>