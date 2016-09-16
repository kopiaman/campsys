<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EXAMINATION RESULT SLIP</title>
</head>
<body>
<p>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
<?php 
require_once("include/dbcommon.php");
$batch=$_GET['batch']; $program=$_GET['program'];
//select campus  settingk;/
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_assoc($q_01);
		
?>
<?php
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
		WHERE student_info.BatchID=$batch AND student_info.DipID=$program ";
		$results=mysql_query($sqls,$conn);
		$rows=mysql_fetch_assoc($results);
		
		
?>
<?php do{
	//student name profil
		$studentname=$rows['studentname'];
		$matric=$rows['matric'];
		$ic=$rows['ic'];
		$programname=$rows['programname'];
		$class=$rows['class'];
		$studentid=$rows['studentid']; ?>
</p> 
 <br /><p></p>
<table width="500" border="0" align="center" class="left">
  <tr>
    <th width="24%" scope="row"><img src="images/<?php echo $row_q01['logo']?>"/></th>
    <td width="5%"><br /></td>
    <td width="71%"><strong><?php echo $row_q01['campus_name']?></strong><br />
      <?php echo $row_q01['address']?>, <?php echo $row_q01['city']?>, <?php echo $row_q01['state']?><br />
      Fax: <?php echo $row_q01['faxNo']?> Tel: <?php echo $row_q01['telephone']?></td>
  </tr>
</table>
 <br /><p></p>
<table width="576"  border="0">
  <tr>
    <th align="left" width="17%">Name </th>
    <td width="83%"><?php echo ': '.$studentname ?></td>
  </tr>
  <tr>
    <th align="left">Matrix No </th>
    <td><?php echo ': '.$matric ?></td>
  </tr>
  <tr>
    <th align="left">I/C No </th>
    <td><?php echo ': '.$ic ?></td>
  </tr>
  <tr>
    <th align="left">Batch </th>
    <td><?php echo ': '.$batch ?>-<?php echo $class ?></td>
  </tr>
  <tr>
    <th align="left">Programme </th>
    <td><?php echo ': '.$programname ?></td>
  </tr>
</table>
<?php 
$sem=1;
		
do{ 
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
		WHERE student_course.StudentID=$studentid AND student_course.Semester=$sem
		";
		$result=mysql_query($sql,$conn);
		$row=mysql_fetch_assoc($result);
		
		//gpa calculation
		$sql_g = "
		SELECT
		SUM(course.Credit) AS sem_unit_taken,
		SUM(if(student_course.Exam_Status= 'PASS', course.Credit, 0)) AS sem_unit_passed,
		SUM(if(student_course.Exam_Status= 'PASS' AND course.Credit!=0, course.Credit, 0)) AS sem_unit_count,
		ROUND(SUM(if(student_course.Exam_Status= 'PASS' AND course.Credit!=0,course.Unit_grade*course.Credit, 0)),2) AS sem_grade_point,
		ROUND(SUM(if(student_course.Exam_Status= 'PASS' AND course.Credit!=0,course.Unit_grade*course.Credit, 0)) / 
		SUM(if(student_course.Exam_Status= 'PASS' AND course.Credit!=0, course.Credit, 0)) ,2) AS sem_gpa
		FROM student_course
		INNER JOIN course ON student_course.CourseID = course.CourseID
		WHERE student_course.StudentID=$studentid AND student_course.Semester=$sem
		";
		$result_g=mysql_query($sql_g,$conn);
		$row_g=mysql_fetch_assoc($result_g);
		
		//CGPA calculation
		$sql_cg = "
		SELECT
		SUM(course.Credit) AS unit_taken,
		SUM(if(student_course.Exam_Status= 'PASS', course.Credit, 0)) AS unit_passed,
		SUM(if(student_course.Exam_Status= 'PASS' AND course.Credit!=0, course.Credit, 0)) AS unit_count,
		ROUND(SUM(if(student_course.Exam_Status= 'PASS' AND course.Credit!=0,course.Unit_grade*course.Credit, 0)),2) AS grade_point,
		ROUND(SUM(if(student_course.Exam_Status= 'PASS' AND course.Credit!=0,course.Unit_grade*course.Credit, 0)) / 
		SUM(if(student_course.Exam_Status= 'PASS' AND course.Credit!=0, course.Credit, 0)) ,2) AS cgpa
		FROM student_course
		INNER JOIN course ON student_course.CourseID = course.CourseID
		WHERE student_course.StudentID=$studentid AND student_course.Semester<=$sem
		";
		$result_cg=mysql_query($sql_cg,$conn);
		$row_cg=mysql_fetch_assoc($result_cg);
		
		$sql_sem = "
		SELECT MAX(Semester) AS maxsem FROM student_course WHERE (StudentID =$studentid)
		";
		$result_sem=mysql_query($sql_sem,$conn);
		$rowsem=mysql_fetch_assoc($result_sem);
		$maxsem=$rowsem['maxsem'];
?>
<p><strong><br />
SEMESTER <?php echo $sem++ ;?> </strong></p>
<table width="800" border="1" >
  <tr valign="middle">
    <th><div align="center">CODE</div>
      </td>
    </th>
    <th><div align="center">MODULE</div>
      </td>
    </th>
    <th align="center"><div align="center">MARKS %</div>
      </td>
    </th>
    <th align="center"><div align="center">GRADE</div>
      </td>
    </th>
    <th align="center"><div align="center">CREDIT<br />
      HOURS</div>
      </td>
    </th>
    <th align="center"><div align="center">UNIT <br />
      GRADE</div>
      </td>
    </th>
    <th align="center"><div align="center">GRADE <br />
      POINT</div>
      </td>
    </th>
    <th align="center"><div align="center">STATUS</div>
      </td>
    </th>
  </tr>
  <?php
		do{
		
		//module/ result info
		$code=$row['code'];
		$coursename=$row['coursename'];
		$finalexam=$row['finalexam'];
		$credit=$row['credit'];
		$gradepoint=$row['gradepoint'];
		$unitgrade=$row['unitgrade'];
		$examremark=$row['examremark'];
		$examstatus=$row['examstatus'];
		$semester=$row['semester'];
		switch($finalexam)
		{
		case ($finalexam <=39):
		$grade='F'; break;
		case ($finalexam <=49):
		$grade='D'; break;
		case ($finalexam <=54):
		$grade='C-'; break;
		case ($finalexam <=59):
		$grade='C'; break;	
		case ($finalexam <=64):
		$grade='C+'; break;	
		case ($finalexam <=69):
		$grade='B-'; break;				
		case ($finalexam <=74):
		$grade='B'; break;	
		case ($finalexam <=79):
		$grade='B+'; break;	
		case ($finalexam <=84):
		$grade='A-'; break;
		case ($finalexam <=100):
		$grade='A'; break;		
		case NULL:
		$grade='-'; break;		
		}
		
		$sem_unit_taken=$row_g['sem_unit_taken'];
		$sem_unit_passed=$row_g['sem_unit_passed'];
		$sem_unit_count=$row_g['sem_unit_count'];
		$sem_grade_point=$row_g['sem_grade_point'];
		$sem_gpa=$row_g['sem_gpa'];
		
		$unit_taken=$row_cg['unit_taken'];
		$unit_passed=$row_cg['unit_passed'];
		$unit_count=$row_cg['unit_count'];
		$grade_point=$row_cg['grade_point'];
		$cgpa=$row_cg['cgpa'];
	 ?>
  <tr>
    <td height="20"><?php echo $code; ?></td>
    <td><?php echo $coursename; ?></td>
    <td align="center"><?php echo $finalexam; ?></td>
    <td align="center"><?php echo $grade; ?></td>
    <td align="center"><?php echo $credit ?></td>
    <td align="center"><?php echo $unitgrade ?></td>
    <td align="center"><?php echo $gradepoint ?></td>
    <td align="center"><?php  echo $examstatus.','.$examremark ?></td>
  </tr>
  <?php }while($row=mysql_fetch_assoc($result)) ?>
</table>
<br />
 			<table width="800" border="1">
 			  <tr>
 			    <th><div align="center">&nbsp;</div></th>
 			    <th><div align="center">Unit Taken</div></th>
 			    <th><div align="center">Unit Passed</div></th>
 			    <th><div align="center">Unit Counted</div></th>
 			    <th><div align="center">Grade Point</div></th>
 			    <th><div align="center">GPA</div></th>
		      </tr>
 			  <tr>
 			    <td>Semester <?php echo $semester ?></td>
 			    <td align="center"><?php echo $sem_unit_taken ?></td>
 			    <td align="center"><?php echo $sem_unit_passed ?></td>
 			    <td align="center"><?php echo $sem_unit_count ?></td>
 			    <td align="center"><?php echo $sem_grade_point ?></td>
 			    <td align="center"><?php  if($sem_gpa===NULL) { echo $sem_gpa='0.00'; } else { echo $sem_gpa; } ?></td>
		      </tr>
 			
 			  <tr>
 			    <td>Cumulative</td>
 			   <td align="center"><?php echo $unit_taken ?></td>
 			    <td align="center"><?php echo $unit_passed ?></td>
 			    <td align="center"><?php echo $unit_count ?></td>
 			    <td align="center"><?php echo $grade_point ?></td>
 			
                    <td align="center"><?php  if($cgpa===NULL) { echo $cgpa='0.00'; } else { echo $cgpa; } ?></td>
		      </tr>
 			  <tr>
 			    <td>Status</td>
 			    <td colspan="5" align="center">
				<?php switch($cgpa)
				{
					case($cgpa<=3):
					$status='FAIL'; break;
					case($cgpa<=4 && $cgpa>=0):
					$status='PASS'; break;
					case NULL:
					$status='-'; break;
					
				} echo $status;?> </td>
		      </tr>
</table>
<?php }while($sem<=$maxsem) ?>
 <br />
<div class="pagebreak"></div>
<?php }while($rows=mysql_fetch_assoc($results)) ?>
</body>
</html>