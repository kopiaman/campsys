<?php
$strTableName="Report_Compulsory_Training";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="student_compulsory_training";

$gstrOrderBy="ORDER BY student_compulsory_training.ID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Report_Compulsory_Training");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Report_Compulsory_Training"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>