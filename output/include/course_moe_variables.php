<?php
$strTableName="course_moe";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="course_moe";

$gstrOrderBy="ORDER BY sem, Code";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("course_moe");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["course_moe"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>