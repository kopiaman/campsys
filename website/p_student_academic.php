<?php include_once('inc_head.php') ?>
<?php 

$sql_course_int= "SELECT
course.Name AS coursename,
course.Shortname,
course.code,
student_course.Semester,
student_course.Final_Exam,
student_course.Exam_Status,
student_course.Exam_Remark
FROM student_course
INNER JOIN course ON student_course.CourseID = course.CourseID 
WHERE StudentID=$userid";
$query_course_int=mysql_query($sql_course_int,$conn);
$row_course_int=mysql_fetch_assoc($query_course_int);

$sql_course_dca= "SELECT
course.Name AS coursename,
student_course_dca.Exam_Status
FROM student_course_dca
INNER JOIN course ON student_course_dca.CourseID = course.CourseID 
WHERE StudentID=$userid";
$query_course_dca=mysql_query($sql_course_dca,$conn);
$row_course_dca=mysql_fetch_assoc($query_course_dca);


$sql_course_moe= "SELECT
course_moe.Name AS coursename,
student_course_moe.sem AS Semester,
student_course_moe.Final_Exam,
student_course_moe.Exam_Status,
student_course_moe.Exam_Remark
FROM student_course_moe
INNER JOIN course_moe ON student_course_moe.CourseID = course_moe.CourseID 
WHERE StudentID=$userid
ORDER BY student_course_moe.sem, course_moe.Code";
$query_course_moe=mysql_query($sql_course_moe,$conn);
$row_course_moe=mysql_fetch_assoc($query_course_moe);
?>
	
	<!-- Work page begins ======================================================================= -->

<div class="sixteen columns">

<?php if($row_course_moe['coursename']) {?>
<h3>MOE EXAM</h3>
  <table width="100%" border="0" cellpadding="5" class="table2">
    <tr>
     <th width="5%" align="center">#</th>
      <th width="50%">Course</th>
      <th width="14%" align="center">Semester</th>
      <th width="15%" align="center">Result</th>
      <th width="16%" align="center">Remark</th>
    </tr>
    <?php $m=1;do{  ?>
    <tr>
    <td align="center"><?php echo $m; ?></td>
      <td><?php echo $row_course_moe['coursename'];?></td>
       <td align="center"><?php echo $row_course_moe['Semester'];?></td>
        <td align="center"><?php echo $row_course_moe['Final_Exam'];?></td>
        <td align="center"><?php echo $row_course_moe['Exam_Status'].', ' .$row_course_moe['Exam_Remark'];?></td>
    </tr>
    <?php $m++;
	 }while($row_course_moe=mysql_fetch_assoc($query_course_moe)) ?>
  </table>
<p></p>
<?php }else{}; ?>

<h3>MATA EXAM(Internal)</h3>
  <table width="100%" border="0" cellpadding="5" class="table2">
    <tr>
     <th width="11%" align="center">Code</th>
     <th width="89%">Course</th>
     <th width="89%">E1</th>
     <th width="89%">E2</th>
     <th width="89%">E3</th>
     <th width="89%">E4</th>
      <th width="89%">CGPA</th>
      </tr>
    <?php do{  ?>
    <tr>
    <td align="center"><?php  echo $row_course_int['code'] ?></td>
    <td><?php echo $row_course_int['Shortname'];?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <?php 
	 }while($row_course_int=mysql_fetch_assoc($query_course_int)) ?>
  </table>

<p></p>
<h3>DCA EXAM</h3>
  <table width="100%" border="0" cellpadding="5" class="table2">
    <tr>
     <th width="5%" align="center">#</th>
      <th width="50%">Course</th>
      <th width="45%" align="center">Result</th>

    </tr>
    <?php $d=1;do{  ?>
    <tr>
    <td align="center"><?php echo $d; ?></td>
      <td><?php echo $row_course_dca['coursename'];?></td>
       <td align="center"><?php echo $row_course_dca['Exam_Status'];?></td>
    </tr>
    <?php $d++;
	 }while($row_course_dca=mysql_fetch_assoc($query_course_dca)) ?>
  </table>

</div>
		
<?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>