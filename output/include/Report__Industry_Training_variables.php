<?php
$strTableName="Report-_Industry_Training";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_industry_training";

$gstrOrderBy="ORDER BY student_info.BatchID DESC, student_info.Name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Report-_Industry_Training");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Report-_Industry_Training"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>