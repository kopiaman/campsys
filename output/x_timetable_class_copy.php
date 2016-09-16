<?php
require_once('include/dbcommon.php');

$batch = $_GET["batch"];
$programid = $_GET["programid"];
$week=$_GET['week'];
$year=$_GET['year'];
//select campus  setting
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_array($q_01);
 
//----check class at saturday and sunday--- 
 $holiday=0;
 $max_row = 8; // 7 day + 1 header
 
$sqlmax = "
		SELECT
		t_facilities_timetable.date,
		t_facilities_timetable.endate,
		t_facilities_timetable.endate-t_facilities_timetable.date AS day_interval,
		DAYNAME(t_facilities_timetable.date) AS Day,
		WEEK(t_facilities_timetable.date) AS week,
		MONTH(t_facilities_timetable.date) AS month,
		YEAR(t_facilities_timetable.date) AS year,
		t_facilities_timetable.batch AS batch,
		t_facilities_timetable.class AS class,
		t_facilities_timetable.program AS program,
		program.shortcut_name AS program_name
		FROM t_facilities_timetable
		LEFT OUTER JOIN program ON t_facilities_timetable.program = program.ID
		WHERE WEEK(date)=$week AND YEAR(date)=$year 
		AND batch=$batch AND program=$programid
		
";
$resultmax = mysql_query($sqlmax) or die(mysql_error());
$rowmax = mysql_fetch_array($resultmax);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CLASS Time table</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<style>
body {
	padding-top: 20px;
	font-size:10px;
	font-family:Verdana, Geneva, sans-serif;
	margin-top:10px;
	margin-left:10px;
}
.container {
	width: 940px auto;
	margin-left: auto;
	margin-right: auto;
 *zoom: 1;
}
.page-header {
	padding-bottom: 17px;
	margin: 18px 0;
	border-bottom: 1px solid #eeeeee;
}
table {
	max-width: 100%;
	border-collapse: collapse;
	border-spacing: 0;
}
table {
	width: 100%;
	margin-bottom: 18px;
	border:1px #000;
}
th, td {
	padding: 8px;
	line-height: 18px;
	text-align: left;
	vertical-align: top;
	border: 1px solid #CCC;
}
th {
	font-weight: bold;
}
.tablehead td, th {
	border:0px;
	font-size:16px;
}
.navi {
	font-size:12px;
	font-weight:bold;
	color:#090;
}
</style>
</head>
<body>
<div class="container">
  <div class="page-header">
    <table width="49%" border="0" class="tablehead">
      <tr>
        <td width="5%"><img src="images/<?php echo $row_q01['logo']?>"/></td>
        <td width="78%"> Time Table <br>
          <?php echo $rowmax['program_name']?> (<?php echo $rowmax['batch']?>-<?php echo $rowmax['class']?>)<br>
          <strong> <br>
          Week:</strong> <?php echo $week?> <strong>Year:</strong> <?php echo $year?><br>
          <br></td>
        <td width="17%" class="navi"><a href="x_timetable_class.php?week=<?php echo $week-1?>&&year=<?php echo $year?>&&programid=<?php echo $programid?>&&batch=<?php echo $batch?>">PREV WEEK</a><br>
          <a href="x_timetable_class.php?week=<?php echo $week+1?>&&year=<?php echo $year?>&&programid=<?php echo $programid?>&&batch=<?php echo $batch?>">NEXT WEEK</a></td>
      </tr>
    </table>
  </div>
  <?php
//$colspan = $end_time - $start_time;
$hari = "";
$days = 1;
$row=1;
$td_color = '#FF9900';

?>
  <table>
    <?php
//----------for <tr>----------
while($row <= $max_row) //MAX ROW check maximum day in that week
{	
	$end = "15:00";
	//---check maximum time------ ..if end time more than 3 pm than the col span will expand
	  $sql2 = "select end_time FROM t_facilities_timetable 
	  WHERE WEEK(t_facilities_timetable.date)=$week AND YEAR(t_facilities_timetable.date)=$year 
	  AND t_facilities_timetable.program=$programid AND t_facilities_timetable.batch=$batch 
	  ORDER BY end_time ";
	$result2 = mysql_query($sql2) or die(mysql_error());
	while($row2 = mysql_fetch_array($result2))
	 { 
		if($row2['end_time']>$end) {$end = $row2['end_time'];}
	 }

	$start = "08:00";
	$day_check = 0;
	
?>
    <tr>
      <?php
	if($row==1){  // row 1 for time header
//----------for <td>----------
		while($start <= $end) //start to show time interval
		{
		
			if($day_check==0){
			?>
      <td>#</td>
      <?php 
			$time = strtotime($start);
			$start = date("H:i", strtotime("-30 minutes", $time));
			}else{ ?>
      <td><div  align="center"><?php echo $start; ?></div></td>
      <?php }?>
      <?php

		
		$time = strtotime($start);
		$start = date("H:i", strtotime("+30 minutes", $time)); //increase 30 minutes interval for colum header time
		$day_check++;
		}
	}
	else{  // for row content

		if($days == 1){ $hari = "Sunday"; } else if($days == 2){ $hari = "Monday"; } else if($days == 3){ $hari = "Tuesday"; } else if($days == 4){ $hari = "Wednesday"; } else if($days == 5){ $hari = "Thursday"; } else if($days == 6){ $hari = "Friday"; } else if($days == 7){ $hari = "Saturday"; }
	
		echo "<td>".$hari."</td>"; // Sunday, Monday..
		
				while($start <= $end)  //from 8am to 3pm , bla bla
				{
					
				$count=0; 
				$sql_db="
					SELECT
		t_facilities_timetable.start_time,
		t_facilities_timetable.end_time,
		t_facilities_timetable.`date`,
		t_facilities_timetable.endate-t_facilities_timetable.date AS day_interval,
		DAYNAME(t_facilities_timetable.date) AS day,
		WEEK(t_facilities_timetable.date) AS week,
		MONTH(t_facilities_timetable.date) AS `month`,
		YEAR(t_facilities_timetable.date) AS `year`,
		t_facilities_timetable.facility AS facility,
		t_facilities_timetable.batch AS batch,
		t_facilities_timetable.legend AS legend,
		setting.Value AS color,
		staff_info.Name AS staff,
		course.Shortname ,
		course.Name AS module,
		`group`.`group` AS class,
		program.shortcut_name AS program
		FROM t_facilities_timetable
		LEFT OUTER JOIN staff_info ON t_facilities_timetable.staffID = staff_info.ID
		LEFT OUTER JOIN course ON t_facilities_timetable.courseID = course.CourseID
		LEFT OUTER JOIN `group` ON t_facilities_timetable.`class` = `group`.id
		LEFT OUTER JOIN program ON t_facilities_timetable.program = program.ID
		LEFT OUTER JOIN setting ON t_facilities_timetable.legend = setting.Field_Name
		WHERE WEEK(t_facilities_timetable.date)=$week AND YEAR(t_facilities_timetable.date)=$year 
		AND t_facilities_timetable.program='$programid' AND t_facilities_timetable.batch='$batch'
"; 
				
				$result_db = mysql_query($sql_db) or die(mysql_error());
				$clash = 0;
				$br = "";
			
				while($out = mysql_fetch_array($result_db))
					 { 
					    $colspan = 1;
					 	$course = $out['module'];
						$lect = $out['staff'];
						$day = $out['day'];
						$start_time = $out['start_time'];
						$end_time = $out['end_time'];
						$group = $out['class'];
						$room = $out['facility'];
					 	$date=$out['date'];
						$color=$out['color'];
						$day_interval=$out['day_interval'];
					
						
							if($day==$hari && ($start_time <= $start && $end_time > $start))
							{ 
							$clash++;
							if($clash>1)
							{ $br = "<br/><br/>"; }
							 	if((substr($end_time, 3,2)=="30")&&(substr($start_time, 3,2)=="30")){  $colspan = ($end_time - $start_time) *2;   } //check time 
								else if((substr($end_time, 3,2)=="00")&&(substr($start_time, 3,2)=="00")){  $colspan = ($end_time - $start_time) *2;   }
								else if((substr($start_time, 3,2)=="30")&&(substr($end_time, 3,2)=="00")&&(($end_time-$start_time)>1)){  $colspan = ($end_time - $start_time) *2-1;   }
								else if((substr($start_time, 3,2)=="00")&&(substr($end_time, 3,2)=="30")&&( ($end_time-$start_time)>0)){  $colspan = ( $end_time - $start_time) *2 + 1;  }
								
								if($colspan==1){ $hour = "+0 minutes"; }
								else if($colspan==2){ $hour = "+30 minutes"; } 
								else if($colspan==3){ $hour = "+1 hours"; } 
								else if($colspan==4){  $hour = "+1 hours +30 minutes"; } 
								else if($colspan==5){  $hour = "+2 hours"; } 
								else if($colspan==6){  $hour = "+2 hours +30 minutes"; } 
								else if($colspan==7){  $hour = "+3 hours"; } 
								else if($colspan==8){  $hour = "+3 hours +30 minutes"; } 
								else if($colspan==9){  $hour = "+4 hours "; } 
								else if($colspan==10){  $hour = "+4 hours +30 minutes"; } 
								else if($colspan==11){  $hour = "+5 hours"; } 
								else if($colspan==12){  $hour = "+5 hours +30 minutes"; } 
								else if($colspan==13){  $hour = "+6 hours"; } 
								else if($colspan==14){  $hour = "+6 hours +30 minutes"; } 
								else if($colspan==15){  $hour = "+7 hours"; } 
								else if($colspan==16){  $hour = "+7 hours +30 minutes"; }
								else if($colspan==17){  $hour = "+8 hours"; } 
								else if($colspan==18){  $hour = "+8 hours +30 minutes"; } 
								else { $hour = "+9hours "; }  
								$time = strtotime($start);
								$start = date("H:i", strtotime($hour, $time));
								 //echo $start.' ';
							//$start=$start+$colspan-1; 				
													
							echo '<td colspan = "'.$colspan.'" bgcolor="'.$color.'" ><div align=center><p><color>';
							//content of timetable	
							if($date!==NULL){echo date("d-m-Y", strtotime($date)); }
							echo '<br><strong>'.$course."</strong><br/>".$lect."<br> (".$room.")";

				
							
							$count=1;
							echo "</color></p></div></td>";
							
						
							} 
								
					 }
					if($count==0){ echo "<td ></td>"; }

		
				$day_check++;
				$time = strtotime($start);
				$start = date("H:i", strtotime("+30 minutes", $time));
				}
				
		//------ event repeat start if in period--------------///							
						 if($day_interval>=1) //if period of the day is more than 1 day , then duplicate the event is true
						 {
							 
							  $i=1; 
							 
							while($i<=$day_interval){  //repeat event by period day
							  $oridate = strtotime($date);
							  $date_add="+ $i days";
							  $newdate = date("d-m-Y", strtotime($date_add, $oridate));
							  
	
							echo '<td colspan = "'.$colspan.'" bgcolor="'.$color.'" ><div align=center><p><color>';
							echo $newdate;
							echo '<br><strong>'.$course."</strong><br/>".$lect."<br> (".$room.")";
							
							$i++; 
							echo "</color></p></div></td>"; }
						 }		
						 //------ event repeat end--------------/// 		
				
		//next day
		$days++;
		
		
		
	}
//-----close </tr>----------	
?>
    </tr>
<?php 
$row++;
			
}
//-----close </table>-------
?>
  </table>
</div>
</body>
</html>