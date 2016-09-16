<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EXAM RESULT MEMO</title>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
</head>
<?php  
require_once('include/dbcommon.php');?>
<body>
<p>
  <?php 
$eid=$_GET['eid'];

//select campus  settingk;/
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_array($q_01);

//get related exam info
$sql_exam= "SELECT
program.shortcut_name AS prog_name,
exam_creator.eid AS eid,
exam_creator.date_memo2 AS date_memo ,
exam_creator.ref2 AS ref,
exam_creator.exam_date,
exam_creator.exam_venue,
exam_creator.exam_remark AS remark,
exam_creator.stime,
exam_creator.etime,
exam_creator.program,
exam_creator.batch AS batch,
exam_creator.`class` AS class,
exam_creator.course AS course,
course.Name AS module_name
FROM exam_creator
INNER JOIN program ON exam_creator.program = program.ID
INNER JOIN course ON exam_creator.course = course.CourseID
WHERE exam_creator.eid=$eid";
$query_exam=mysql_query($sql_exam,$conn);
$row_exam=mysql_fetch_assoc($query_exam);

?>
  <?php $module=$row_exam['course'];$module_name=$row_exam['module_name']; $batch=$row_exam['batch']; $program=$row_exam['program']; $programname=$row_exam['prog_name']; $class=$row_exam['class']; $exam_date=$row_exam['exam_date']; $exam_venue=$row_exam['exam_venue'];$stime=$row_exam['stime'];$etime=$row_exam['etime'];$date_memo=$row_exam['date_memo'];$ref=$row_exam['ref']; $remark=$row_exam['remark'];?>
  
  <?php
if(!$class){ $class_status='';}
else if($class){$class_status='&& student_info.Class='.$class;}

if(!$remark){ $remark_status='';}
else if($remark){$remark_status="&& student_course.Exam_Remark='$remark' ";}


//get eligible student
$sql_student= "SELECT
student_course.Eligible,
student_course.Seat,
student_course.Semester,
student_course.Final_Exam,
student_course.Exam_Status,
student_course.Exam_Remark,
student_info.Name,
student_info.MatricNo AS matric,
student_course.CourseID,
student_info.BatchID,
student_info.DipID,
student_info.`Class`
FROM student_course
INNER JOIN student_info ON student_course.StudentID = student_info.StudentID
WHERE student_course.Eligible ='Yes' && student_course.CourseID=$module 
&& student_info.DipID=$program && student_info.BatchID=$batch $class_status $remark_status 

";
$query_student=mysql_query($sql_student,$conn);
$row_student=mysql_fetch_assoc($query_student); 

$sql_student2= "SELECT
COUNT(student_info.Name) AS no_student
FROM student_course
INNER JOIN student_info ON student_course.StudentID = student_info.StudentID
WHERE student_course.Eligible ='Yes' && student_course.CourseID=$module 
&& student_info.DipID=$program && student_info.BatchID=$batch $class_status $remark_status ";
$query_student2=mysql_query($sql_student2,$conn);
$row_student2=mysql_fetch_assoc($query_student2); 

?>
</p>
<table width="500" border="0" align="center" class="left">
  <tr>
    <th width="24%" scope="row"><img src="images/<?php echo $row_q01['logo']?>"/></th>
    <td width="5%"><br /></td>
    <td width="71%"><strong><?php echo $row_q01['campus_name']?></strong><br />
      <?php echo $row_q01['address']?>, <?php echo $row_q01['city']?>, <?php echo $row_q01['state']?><br />
      Fax: <?php echo $row_q01['faxNo']?> Tel: <?php echo $row_q01['telephone']?></td>
  </tr>
</table>
<p>&nbsp; </p>
<p>To: STUDENTS BATCH <?php echo $batch.'-'.$class?> (<?php echo $programname ?>) </span><br />
  DATE: <?php echo  date("d-m-Y", strtotime($date_memo)); ?><br />
</p>
<p style="text-decoration:underline; font-weight:bold">SUBJECT: MODULE <?php echo $module_name ?> <?php echo '('.$remark.') '  ?>  EXAMINATION RESULT FOR BATCH <?php echo $batch.'-'.$class?> (<?php echo $programname ?>) </p>
<p>1. Below is examination result for 
  <?php  echo $row_student2['no_student'];?>
 candidates</p>
<table width="504" border="1" cellpadding="5">
  <tr>
    <th width="19" scope="col">#</th>
    <th width="214" align="left" scope="col">Matric No</th>
    <th width="100" align="center" scope="col">Result</th>
    <th width="111" align="center" scope="col">Status</th>
  </tr>
    <?php  
  $i=1;
  do{ ?>
  <tr>

    <th scope="row"><?php echo $i++ ?></th>
    <td align="left"><?php echo $row_student['matric'] ?></td>
    <td align="center"><?php echo $row_student['Final_Exam'] ?></td>
     <td align="center"><?php echo $row_student['Exam_Status'] ?></td>
    </tr>
  <?php }while($row_student=mysql_fetch_assoc($query_student)); ?>
</table>
<p>PS: This memo is computer generated and requires no signature</p>
<p>&nbsp;</p>
</body>
</html>