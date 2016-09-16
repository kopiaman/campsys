<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
</head>
<?php
$batch=$_GET['batch']; $program=$_GET['program']; //$semester=$_GET['semester'];
require_once("include/dbcommon.php");

//select campus  settingk;/
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_assoc($q_01);

//marking



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
<body>

<?php do{
	//student name profil
	$studentname=$rows['studentname'];
	$matric=$rows['matric'];
	$ic=$rows['ic'];
	$programname=$rows['programname'];
	$class=$rows['class'];
	$studentid=$rows['studentid'];
 ?>
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
<br />
<?php
		//course /result 
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
		WHERE student_info.StudentID=$studentid";
		$result=mysql_query($sql,$conn);$row=mysql_fetch_assoc($result);
		?>
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
<div class="pagebreak"></div>
<?php }while($rows=mysql_fetch_assoc($results)) ?>
<br />
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>