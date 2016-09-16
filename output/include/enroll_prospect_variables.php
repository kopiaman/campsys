<?php
$strTableName="enroll_prospect";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="enroll";

$gstrOrderBy="ORDER BY Date_Apply DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("enroll_prospect");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["enroll_prospect"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>