<?php
require_once("include/dbcommon.php");
require_once("x_event_activecalendar.php");
require_once("x_event_activecalendar_week.php");

$sql_roster= "SELECT
t_instructor_roster.id AS rid,
t_instructor_roster.staff,
t_instructor_roster.trade,
t_instructor_roster.course,
t_instructor_roster.s_date,
t_instructor_roster.e_date,
course.Name AS module_name,
staff_info.Name AS staff_name
FROM t_instructor_roster
INNER JOIN course ON t_instructor_roster.course = course.CourseID
INNER JOIN staff_info ON t_instructor_roster.staff = staff_info.ID
";
$query_roster=mysql_query($sql_roster,$conn);
$row_roster=mysql_fetch_array($query_roster);


$myurl=$_SERVER['PHP_SELF']; // the links url is this page
$yearID=false; // init false to display current year
$monthID=false; // init false to display current month
$dayID=false; // init false to display current day
extract($_GET); // get the new values (if any) of $yearID,$monthID,$dayID
$cal = new activeCalendar($yearID,$monthID,$dayID);

$cal->enableWeekNum("Week");


do{
	
	$sdate=$row_roster['s_date']; //start date
	$startdate=strtotime($row_roster['s_date']);
	
	$edate=$row_roster['e_date']; //end date
	$enddate=strtotime($row_roster['e_date']);
	
	$year=date("Y", strtotime($row_roster['s_date']));
	$month=date("m", strtotime($row_roster['s_date']));
	$day=date("d", strtotime($row_roster['s_date']));
	$x=$day;
	$date_diff =($enddate-$startdate)/86400;
	
	$module=$row_roster['module_name'];
	$staff=$row_roster['staff_name'];
	
	$multipleLinesEvent=array("Module: $module","Instructor: $staff"); 
	 $cal->setEventContent("$year","$month",$x,$multipleLinesEvent);
}while($row_roster=mysql_fetch_array($query_roster));


?> 
<?php print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>MONTHLY INSTRUCTOR ROSTER</title>
<link href="x_event_antique_wide.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>

<?php 
$cal->enableDatePicker(2010,date('Y'),$myurl);
$cal->enableMonthNav($myurl); // this enables the month's navigation controls
echo $cal->showMonth(); // this displays the month's view
?>
<br />
</center>
</body>
</html>