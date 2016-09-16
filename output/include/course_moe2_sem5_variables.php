<?php
$strTableName="course_moe2_sem5";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="course_moe2";

$gstrOrderBy="ORDER BY student_info.BatchID DESC,student_info.Name ASC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("course_moe2_sem5");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["course_moe2_sem5"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>