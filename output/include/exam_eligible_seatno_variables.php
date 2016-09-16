<?php
$strTableName="exam_eligible_seatno";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_course";

$gstrOrderBy="ORDER BY student_course.StudentID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("exam_eligible_seatno");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["exam_eligible_seatno"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>