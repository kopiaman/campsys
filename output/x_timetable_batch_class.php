<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CLASS TIME TABLE</title>
<style>
body { font-size:10px; font-family:Verdana, Geneva, sans-serif; margin-top:10px; margin-left:10px;}
.navi{font-size:12px;font-weight:bold;color:#090;	}
 </style>

</head>
  <?php require_once('x_config.php'); ?>
<?php 
if(!$_GET['month']){
$month=date("m"); 
}else{
	$month=$_GET['month'];
};

if(!$_GET['year']){
$year=date("Y"); 
}else{
	$year=$_GET['year'];
};

//select campus  setting
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_assoc($q_01);




?>
<body>

<table width="1200px" border="0" class="tablehead">
  <tr>
    <td width="10%" ><img src="images/<?php echo $row_q01['logo']?>"/></td>
    <td width="73%"><h2><strong> CLASS TIME TABLE<br />
      MONTH:</strong> <?php echo $month?> <strong>YEAR:</strong> <?php echo $year?><br /></h2>
      <br />
      <strong>Legend:</strong><br />
    
      <table width="473" border="0" cellpadding="5">
        <tr>
          <td width="17" bgcolor="#33FF66">&nbsp;</td>
          <td width="87">T-Theory</td>
          <td width="17" bgcolor="#FF9999">&nbsp;</td>
          <td width="124">EXAM-School Exam</td>
          <td width="17" bgcolor="#FFCCCC">&nbsp;</td>
          <td width="137">VC- Vocational College</td>
        </tr>
        <tr>
          <td width="17" bgcolor="#00CCFF">&nbsp;</td>
          <td>P-Practical</td>
          <td width="17"bgcolor="#FF9900">&nbsp;</td>
          <td width="124">DCA-DCA Exam</td>
          <td width="17" bgcolor="#FFFFCC">&nbsp;</td>
          <td>ND- Not Detailed</td>
        </tr>
      </table>
      </td>
    <td width="17%"><span class="navi"><a href="x_timetable_batch_class.php?month=<?php echo $month-1?>&&year=<?php echo $year?>">PREV MONTH</a><br />
    <a href="x_timetable_batch_class.php?month=<?php echo $month+1?>&&year=<?php echo $year?>">NEXT MONTH</a></span></td>
  </tr>
</table>

<table width="1200px" cellpadding="5">
  <tr>

<td scope="col"></td>
<?php

//td of day of the month
$row=1;
$day=0;
while($day<31)
{
	$day++;
	echo '<td  scope="col" style="border:1px solid black; border-collapse:collapse;">'.$day.'</td>';

}; 
?>
</tr>
<?php
//td of the program & batch & class 
$sql_fac= "
SELECT
t_facilities_timetable.date,
t_facilities_timetable.program AS programid,
t_facilities_timetable.batch AS batch, 
t_facilities_timetable.class AS class,
program.shortcut_name AS programname
FROM t_facilities_timetable
LEFT OUTER JOIN program ON t_facilities_timetable.program = program.ID
WHERE t_facilities_timetable.endate IS NOT NULL 
AND t_facilities_timetable.program!=0
AND MONTH(t_facilities_timetable.date)=$month 
AND YEAR(t_facilities_timetable.date)=$year
GROUP BY t_facilities_timetable.program, t_facilities_timetable.batch, t_facilities_timetable.class
ORDER BY t_facilities_timetable.program  ";
$query_fac=mysql_query($sql_fac,$conn);
$row_fac=mysql_fetch_assoc($query_fac);


do{
	//$color=$row_fac['color'];
	$color='#EBEBEB';
	$programid=$row_fac['programid'];
	$fprogram=$row_fac['programname'];
	$fbatch=$row_fac['batch'];
	$fclass=$row_fac['class'];

	//show  program & batch & class   // rowspan adalah sub row  //td left side
	echo  '<td bgcolor="'.$color.'"  rowspan="1" scope="row" style="border:0px solid black; border-collapse:collapse">'.$fprogram.' ('.$fbatch.'-'.$fclass.')'.'</td>';
	
	//td of content
		$sql_content="
		SELECT
		t_facilities_timetable.start_time AS stime,
		t_facilities_timetable.end_time AS etime,
		t_facilities_timetable.date,
		t_facilities_timetable.endate,
		DAY(t_facilities_timetable.date) AS sday,
		WEEK(t_facilities_timetable.date) AS week,
		DAY(t_facilities_timetable.endate) AS eday,
		DATEDIFF(t_facilities_timetable.endate,t_facilities_timetable.date) AS daydiff ,
		MONTH(t_facilities_timetable.date) AS `month`,
		YEAR(t_facilities_timetable.date) AS `year`,
		t_facilities_timetable.facility AS facility,
		t_facilities_timetable.batch AS batch,
		t_facilities_timetable.class AS class,
		t_facilities_timetable.program AS programid,
		t_facilities_timetable.legend AS legend,
		t_facilities_timetable.room AS room,
		setting.Value AS color,
		staff_info.Name AS staff,
		staff_info1.Name AS staff2,
		course.Shortname AS module,
		program.shortcut_name AS program
		FROM t_facilities_timetable
		LEFT OUTER JOIN staff_info ON t_facilities_timetable.staffID = staff_info.ID
		LEFT OUTER JOIN staff_info AS staff_info1 ON t_facilities_timetable.staffID2 = staff_info1.ID
		LEFT OUTER JOIN course ON t_facilities_timetable.courseID = course.CourseID
		LEFT OUTER JOIN program ON t_facilities_timetable.program = program.ID
		LEFT OUTER JOIN setting ON t_facilities_timetable.legend = setting.Field_Name
		WHERE t_facilities_timetable.endate IS NOT NULL  AND t_facilities_timetable.program!=0
		AND MONTH(t_facilities_timetable.date)=$month AND YEAR(t_facilities_timetable.date)=$year 
		AND t_facilities_timetable.program=$programid
		AND t_facilities_timetable.batch=$fbatch
		AND t_facilities_timetable.class=$fclass
		ORDER BY t_facilities_timetable.date ASC";
		$query_content=mysql_query($sql_content,$conn);
		$row_content=mysql_fetch_assoc($query_content);
		
	 $eday=0; //default value for endate	
	//show content
	do{
		$sday=$row_content['sday']; //start date
		$facility=$row_content['facility'];
		$stime=$row_content['stime'];
		$etime=$row_content['etime'];
		$color=$row_content['color'];
		$programid=$row_content['programid'];
		$program=$row_content['program'];
		$batch=$row_content['batch'];
		$class=$row_content['class'];
		$module=$row_content['module'];
		$staff=$row_content['staff'];	$staff2=$row_content['staff2'];
		$week=$row_content['week'];
		$legend=$row_content['legend'];
		$room=$row_content['room'];			
		if($sday) //if have content please show..
		{
		 
		   //if spacer no space
		   $colspan_blank=$sday-$eday-1;
		   if($colspan_blank!=0){
		  echo '<td style="border:solid 1px silver" colspan = "'.$colspan_blank.'" bgcolor="" ><p></td>'; 	 //spacer area
		   }else{};
		   
		  $stime=date("H:i", strtotime($stime)); 
		  $etime=date("H:i", strtotime($etime)); 
		  $colspan=$row_content['daydiff']+1; 
		  
		  $staff=trim_text($staff,15);
		  

		  
			
		if($staff2){ //show staff 2 if exist	
		  $staff2=trim_text($staff2,15);   $staff2text="/ ".$staff2; 
		}else{  $staff2text=''; }
			  $content='<strong>'.$module.'</strong> ('.$legend.'</strong>)<br>'.$staff.$staff2text.'<br>'
		  .'<strong>'.$facility.$room.' </strong><br>('.$stime.' - '.$etime.')';

			  
		  
		 $url="<a href='x_timetable_class.php?week=$week&&year=$year&&batch=$batch&&class=$class&&programid=$programid' target='_blank'><img src='images/time.png' border='0' /></a>";
		  echo '<td style="text-align:center" colspan = "'.$colspan.'" bgcolor="'.$color.'" >'.$content.' ',$url.'<p></td>'; //content area
		  
		
		//  echo '<td style="text-align:center;border:solid 1px black" colspan = "'.$colspan.'" bgcolor="'.$color.'" >'.$content.'<p></td>'; //content area
		  
		  $eday=$row_content['eday'];
		}else {}
	}while($row_content=mysql_fetch_assoc($query_content));
	
				 
	//new row 
	echo '<tr>';
}while($row_fac=mysql_fetch_assoc($query_fac))
?>		
</table>

</body>
</html>