<?php
$strTableName="t_eva_ass_task";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="t_eva_ass_task";

$gstrOrderBy="ORDER BY eid DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("t_eva_ass_task");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["t_eva_ass_task"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>