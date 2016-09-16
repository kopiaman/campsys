<?php
$strTableName="eva_ass_topic";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="eva_ass_topic";

$gstrOrderBy="ORDER BY eid DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("eva_ass_topic");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["eva_ass_topic"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>