<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EXAMINATION RESULT SLIP</title>
</head>
<body>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
<?php 
require_once("include/dbcommon.php");require_once("x_config.php");
$batch=$_GET['batch']; 
$program=$_GET['program'];
$sem=$_GET['sem'];
//select campus  settingk;/
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_assoc($q_01);
?>
<?php
//student info
		$sql_student = "
		SELECT
		student_info.Name AS studentname,
		student_info.ICNO AS ic,
		student_info.MatricNo AS matric,
		student_info.nogilir AS nogilir,
		student_info.BatchID AS batch,
		student_info.StudentID AS studentid,
		student_info.DipID as programid,
		`group`.`group` AS `class`,
		program.Name AS programname
		FROM student_info 
		INNER JOIN `group` ON student_info.`Class` = `group`.id
		INNER JOIN program ON student_info.DipID = program.ID
		WHERE student_info.BatchID=$batch AND student_info.DipID=$program 
		ORDER BY student_info.StudentID ASC ";
		$query_student=mysql_query($sql_student,$conn);
		$row_student=mysql_fetch_assoc($query_student);
		
		
?>
  <?php 
  $i=1;
  do{ 
  
  //student name profil
		$studentname=$row_student['studentname'];
		$matric=$row_student['matric']; $nogilir=$row_student['nogilir'];
		$ic=$row_student['ic'];
		$programname=$row_student['programname'];
		$class=$row_student['class'];
		$studentid=$row_student['studentid'];?>
 
<table width="100%" border="0" align="center" class="left">
  <tr>
    <th width="20%" scope="row"><img src="images/MOE_logo.JPG" width="71" height="61" /><br /></th>
    <td width="64%"><h3 align="center">KOLEJ VOKASIONAL SWASTA KEMENTERIAN PELAJARAN MALAYSIA<br />
      MALAYSIAN AVIATION TRAINING ACADEMY (MATA)<br />
    </h3></td>
    <td width="16%"><img src="images/<?php echo $row_q01['logo']?>" height="60"/></td>
  </tr>
</table>
 <br />

<table width="100%"  border="0">
  <tr>
    <th align="left"><strong>SEMESTER <?php echo $sem ?></strong></th>
    <td colspan="3"><strong>TAHUN <?php echo date('Y'); ?><br />
    </strong></td>
  </tr>
  <tr>
    <th align="left" width="12%">Nama</th>
    <td colspan="3"><?php echo ': '.$studentname ?></td>
  </tr>
  <tr>
    <th align="left">No Giliran</th>
    <td width="39%"><?php echo ': '.$nogilir ?></td>
    <th width="17%">I/C No </th>
    <td width="32%"><?php echo ': '.$ic ?></td>
  </tr>
  <tr>
    <th align="left">Kohort </th>
    <td colspan="3"><?php echo ': '.$batch ?>-<?php echo $class ?></td>
  </tr>
</table>
<?php 

//$sem=1;		
		//course mark 
		$sql = "
		SELECT
		course_moe.Code AS code,
		course_moe.Name AS coursename,
		course_moe.Credit AS credit,
		student_course_moe.Final_Exam AS finalexam,
		student_course_moe.Exam_Status AS examstatus,
		student_course_moe.Exam_Remark AS examremark,
		student_course_moe.sem AS semester
		FROM student_course_moe
		INNER JOIN course_moe ON student_course_moe.CourseID = course_moe.CourseID
		INNER JOIN student_info ON student_course_moe.StudentID = student_info.StudentID
		WHERE student_course_moe.StudentID=$studentid AND student_course_moe.sem=$sem
		";
		$result=mysql_query($sql,$conn);
		$row=mysql_fetch_assoc($result);
		
	

?>
<table width="100%" border="1" >
  <tr valign="middle">
    <th><div align="center">Kod</div>
      </td>
    </th>
    <th><div align="center">Mata Pelajaran</div>
      </td>
    </th>
  </tr>
<?php do{ 

	$code=$row['code'];$coursename=$row['coursename'];?>
  <tr>
    <td height="20"><?php echo $code; ?></td>
    <td><?php echo $coursename; ?></td>
  </tr>
 <?php }while($row=mysql_fetch_assoc($result)) ;?>
</table>
<br />
 <table width="100%" border="0" cellpadding="5">
   <tr>
     <th width="85%" align="right">Tandatangan Calon</th>
     <td width="15%" align="right">&nbsp;</td>
   </tr>
 </table>
 <br /> 
<?php //if even number will page break to fit 2 student in one page 

if(is_int($i/2))
{
   echo "<div class='pagebreak'></div>";
}
else
{
   echo "<br/><p></p><hr /><br/><p></p>";
}
?>

<?php 
$i++;
}while($row_student=mysql_fetch_assoc($query_student)) ;?>
</body>
</html>