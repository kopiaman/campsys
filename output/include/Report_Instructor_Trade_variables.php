<?php
$strTableName="Report_Instructor_Trade";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="staff_info";

$gstrOrderBy="order by department, trades";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Report_Instructor_Trade");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Report_Instructor_Trade"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>