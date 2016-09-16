<?php
require_once("include/dbcommon.php");
require_once("x_event_activecalendar.php");
require_once("x_event_activecalendar_week.php");

$sql_roster= "SELECT
course.Name AS module_name,
course.Shortname,
course.color,
schedule_timetable.course_type AS type,
schedule_timetable.`date` AS date,
DAY(schedule_timetable.date) AS day1,
WEEK(schedule_timetable.date) AS week,
MONTH(schedule_timetable.date) AS month,
YEAR(schedule_timetable.date) AS year,
schedule_timetable.room,
staff_info.Name AS staff_name,
schedule_timetable.start_time,
schedule_timetable.end_time,
schedule.batchID AS batch,
schedule.scheduleID ,
program.shortcut_name AS program,
`group`.`group` AS `class`
FROM schedule_timetable
LEFT OUTER JOIN course ON schedule_timetable.courseID = course.CourseID
LEFT OUTER JOIN staff_info ON schedule_timetable.staffID = staff_info.ID
LEFT JOIN schedule ON schedule_timetable.scheduleID = schedule.scheduleID
LEFT JOIN program ON schedule.programID = program.ID
INNER JOIN `group` ON schedule.groupID = `group`.id
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
	
	$date=$row_roster['date']; //start date
	$year=date("Y", strtotime($row_roster['date']));
	$month=date("m", strtotime($row_roster['date']));
	$day=date("d", strtotime($row_roster['date']));
	$week=$row_roster['week'];
	$x=$day;
	
	$module=$row_roster['module_name'];
	$staff=$row_roster['staff_name'];
	$type=$row_roster['type'];
	
 	$program=$row_roster['program'];
   $batch=$row_roster['batch'];
   $class=$row_roster['class'];
   $scheduleid=$row_roster['scheduleID'];
	
	$color=$row_roster['color'];
	$multipleLinesEvent=array("<span style='background-color:$color;'>,$module ($type)","$staff","$program ($batch-$class), <a href='x_timetable.php?week=$week&&year=$year&&scheduleID=$scheduleid' target='_blank'><img src='images/time.png' border='0' /></a> "); 
	$cal->setEventContent("$year","$month",$day,$multipleLinesEvent);
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
<h1>MONTHLY INSTRUCTOR ROSTER</h1>
<?php 
$cal->enableDatePicker(2010,date('Y'),$myurl);
$cal->enableMonthNav($myurl); // this enables the month's navigation controls
//$cal->enableDayLinks("test.php");
echo $cal->showMonth(); // this displays the month's view
?>



<br />
</center>
</body>
</html>