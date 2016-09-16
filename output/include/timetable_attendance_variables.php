<?php
$strTableName="timetable_attendance";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="t_facilities_timetable";

$gstrOrderBy="ORDER BY `date` DESC, courseID";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("timetable_attendance");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["timetable_attendance"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>