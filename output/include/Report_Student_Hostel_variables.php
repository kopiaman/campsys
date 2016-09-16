<?php
$strTableName="Report_Student_Hostel";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_hostel";

$gstrOrderBy="ORDER BY student_hostel.ID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Report_Student_Hostel");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Report_Student_Hostel"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>