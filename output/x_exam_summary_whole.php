<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
<?php 
require_once("include/dbcommon.php");
$batch=$_GET['batch']; $program=$_GET['program'];
$class=$_GET['class'];

//select campus  settingk;/
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_assoc($q_01);

		//student info
		$sqls = "
		SELECT
		student_info.Name AS studentname,
		student_info.ICNO AS ic,
		student_info.MatricNo AS matric,
		student_info.BatchID AS batch,
		student_info.StudentID AS studentid,
		student_info.DipID as programid,
		`group`.`group` AS `class`,
		program.Name AS programname
		FROM student_info 
		INNER JOIN `group` ON student_info.`Class` = `group`.id
		INNER JOIN program ON student_info.DipID = program.ID
		WHERE student_info.BatchID=$batch AND student_info.DipID=$program AND group.id=$class  ";
		$results=mysql_query($sqls,$conn);
		$rows=mysql_fetch_assoc($results);
		
		//program course  info
		$sql_p = "
		SELECT course.Shortname AS module,course.CourseID FROM program_course
		INNER JOIN course ON program_course.CourseID = course.CourseID
		WHERE program_course.ProgramID =$program
		ORDER BY course.CourseID";
		$result_p=mysql_query($sql_p,$conn);
		$row_p=mysql_fetch_assoc($result_p);
		
		/*
		//course mark 
		$sql = "
		SELECT
		course.Code AS code,
		course.Name AS coursename,
		student_course.Final_Exam AS finalexam,
		course.Credit AS credit,
		ROUND(course.Unit_grade, 2) AS unitgrade,
		ROUND(course.Unit_grade*course.Credit, 2) AS gradepoint,
		student_course.Exam_Status AS examstatus,
		student_course.Exam_Remark AS examremark,
		student_course.Semester AS semester
		FROM student_course
		INNER JOIN course ON student_course.CourseID = course.CourseID
		INNER JOIN student_info ON student_course.StudentID = student_info.StudentID
		WHERE student_course.StudentID=$studentid ";
		$result=mysql_query($sql,$conn);
		$row=mysql_fetch_assoc($result); */
?>
<body>
<table width="800" border="1" cellpadding="5">
  <tr>
    <th rowspan="3" scope="col">NAME</th>
    <th colspan="7" scope="col">MODULE</th>
  </tr>
  <tr>
  <?php do{ ?>
    <th colspan="4" scope="col"><?php echo $row_p['module'] ?></th>
     <?php }while($row_p=mysql_fetch_assoc($result_p)) ?>
  </tr>
  <tr>
  	<?php $i=1;do{ ?>
    <th scope="col"><?php echo 'R'.$i++ ?></th>
    <?php }while($i<=16) ?>
  </tr>
  <?php do{
	  $studentname=$rows['studentname'];$matric=$rows['matric']; ?>
  <tr>
      <th scope="row"><?php echo $studentname.'<br>'.$matric?></th>
    <td colspan="7">&nbsp;</td>

  </tr>
  <?php }while(	$rows=mysql_fetch_assoc($results)) ?>
</table>
</body>
</html>