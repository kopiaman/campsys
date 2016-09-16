<?php
require_once('include/dbcommon.php');

$week = $_GET["week"];
$month = $_GET["month"];
$year = $_GET["year"];
$facility = $_GET["facility"];
//select campus  setting
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_array($q_01);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Time table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 	<style>
body { padding-top: 20px; font-size:10px; font-family:Verdana, Geneva, sans-serif; margin-top:10px; margin-left:10px;}
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
 th,  td {
  padding: 8px;
  line-height: 18px;
  text-align: left;
  vertical-align: top;
  border: 1px solid #CCC;
}
 th {
  font-weight: bold;
}

.tablehead td, th{
	border:0px; font-size:16px;	
}

.navi{
	font-size:12px;
	font-weight:bold;
	color:#090;	
}
 </style>
   
 </head>
<body>
<div class="container">
<div class="page-header">
  <h2>Time Table </h2>
    <table width="49%" border="0" class="tablehead">
	          <tr>
	            <td width="5%"><img src="images/<?php echo $row_q01['logo']?>"/></td>
	            <td width="78%"><?php echo $rows['program_name']?> (<?php echo $rows['batch']?>-<?php echo $rows['groupname']?>)<br>
	              <strong> <br>
                  Week:</strong> <?php echo $week?> <strong>Year:</strong> <?php echo $year?><br>
                  <br></td>
	            <td width="17%" class="navi"><a href="x_timetable.php?week=<?php echo $week-1?>&&year=<?php echo $year?>&&scheduleID=<?php echo $scheduleID?>">PREV WEEK</a><br>
	              <a href="x_timetable.php?week=<?php echo $week+1?>&&year=<?php echo $year?>&&scheduleID=<?php echo $scheduleID?>">NEXT WEEK</a></td>
      </tr>
    </table>
   
		</div>

<table>
<tr><td></td>
<?php
//----------for <tr>----------

//$colspan = $end_time - $start_time;
$hari = "";
$days = 1;
$row=1;
$td_color = '#FF9900';

	if($row==1)
	{  // row 1 for time header
	//----------for <td>----------
		$day=0;
		while($day<31)
		{
		$day++;
		echo '<td  width="44" scope="col" style="border:1px solid black; border-collapse:collapse">'.$day.'</td>';
		}; 
	}
	else{  // for row content
	
				echo "<td>".$hari."</td>";
		
				while($start <= $end)
				{
				$count=0;
				$sql_db="SELECT
				t_facilities_timetable.id,
				t_facilities_timetable.fid,
				t_facilities_timetable.start_time AS start_time,
				t_facilities_timetable.end_time AS end_time,
				t_facilities_timetable.date AS date,
				DAYNAME(t_facilities_timetable.date) AS day,
				WEEK(t_facilities_timetable.date) AS week,
				YEAR(t_facilities_timetable.date) AS year,
				t_facilities_timetable.facility AS facility,
				t_facilities_timetable.batch AS batch,
				program.shortcut_name AS program,
				`group`.`group` AS groupname,
				course.Name AS Coursename,
				staff_info.Name AS Staffname
				FROM t_facilities_timetable
				LEFT OUTER JOIN program ON t_facilities_timetable.program = program.ID
				LEFT OUTER JOIN `group` ON t_facilities_timetable.`class` = `group`.id
				LEFT OUTER JOIN course ON t_facilities_timetable.courseID = course.CourseID
				LEFT OUTER JOIN staff_info ON t_facilities_timetable.staffID = staff_info.ID
				WHERE WEEK(t_facilities_timetable.date)=$week&&YEAR(t_facilities_timetable.date)=$year&&t_facilities_timetable.facility='$facility'  "; 
				
				$result_db = mysql_query($sql_db) or die(mysql_error());
				$clash = 0;
				$br = "";
			
				while($out = mysql_fetch_array($result_db))
					 { 
					      $colspan = 1;
					 	$course = $out['Coursename'];
						$lect = $out['Staffname'];
						$day = $out['day'];
						$start_time = $out['start_time'];
						$end_time = $out['end_time'];
						$program = $out['program'];
						$batch = $out['batch'];
						$group = $out['groupname'];
						$facility = $out['facility'];
					 	$date=$out['date'];
											
							if($day==$hari && ($start_time <= $start && $end_time > $start))
							{ 
							$clash++;
							if($clash>1)
							{ $br = "<br/><br/>"; }
							 	if((substr($end_time, 3,2)=="30")&&(substr($start_time, 3,2)=="30")){  $colspan = ($end_time - $start_time) *2;   }
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
						
							echo '<td colspan = "'.$colspan.'" bgcolor="'.$color.'" ><div align=center><p><color>';
						
							 
							//content of timetable	
							if($date!==NULL)
							{
								echo date("d-m-Y", strtotime($date)); 
							}
							echo '<br>'.$program.' ( Batch '.$batch.'-'.$group.' )';
							echo '<br><strong>'.$course."</strong><br/>".$lect."<br> (".$facility.")";
							
							$count=1;
							echo "</color></p></div></td>";
							} 
								
					 }
					if($count==0){ echo "<td ></td>"; }

		
				
				$day_check++;
				$time = strtotime($start);
				$start = date("H:i", strtotime("+30 minutes", $time));
				}
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