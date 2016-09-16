<?php
//select class
$sql_0 = "SELECT
student_info.StudentID,
`group`.`group` AS classname
FROM student_info
INNER JOIN `group` ON `group`.id = student_info.`Class`
WHERE student_info.StudentID='$studentID'";
$q_0 = mysql_query($sql_0);
$row0=mysql_fetch_array($q_0);


//select STUDENT INFO
$sql_02 = "SELECT StudentID,photo,Name,ICNO,DOB,MatricNo,Email,race,Religion,married,Gender,
Address1,City,Postcode,Country,
StateID AS State,HomeTelephone,MobileTelephone, Nationality,Passport,
BranchID,DateJoin,BatchID,Intake,Sponsor,DipID,Status,`Class`,Intake_Category,Type,
f1_name,f1_tel,f1_relation,f2_name,f2_tel,f2_relation,
blood,Disability,MedicalCondition,f_name,
f_tel,f_ic,f_address,f_job,m_name,m_tel,m_ic,m_address,m_job,qua_place,qua_year,qua_result,qua_level
FROM student_info WHERE StudentID='$studentID'";
$q_02 = mysql_query($sql_02);
$row=mysql_fetch_assoc($q_02);

//select program
$sql_03 ="SELECT
student_info.StudentID,
program.Name AS programname
FROM student_info
INNER JOIN program ON student_info.DipID = program.ID
WHERE student_info.StudentID ='$studentID'"; 
$q_03 = mysql_query($sql_03);
$row3=mysql_fetch_array($q_03);

//select school record
$sql_sc="SELECT
student_info.StudentID,
student_school.subject AS sc_subject,
student_school.grade AS sc_grade
FROM student_info
INNER JOIN student_school ON student_info.StudentID = student_school.studentID
WHERE student_info.StudentID ='$studentID'";
$q_sc = mysql_query($sql_sc);
$row_1=mysql_fetch_array($q_sc);


//select qualification
$sql_sc2="SELECT
student_info.StudentID,
student_qualification.Institution AS qua_ins,
student_qualification.YearGrad AS qua_year,
student_qualification.Education_Type AS qua_edu,
student_qualification.Major AS qua_major,
student_qualification.Grade_CGPA AS qua_grade
FROM student_info
INNER JOIN student_qualification ON student_info.StudentID = student_qualification.StudentID
WHERE student_info.StudentID ='$studentID'";
$q_sc2 = mysql_query($sql_sc2);
$row_2=mysql_fetch_array($q_sc2);


//select extracurruicular
$sql_sc3="SELECT
student_info.StudentID,
student_extracurricular.Activity AS ex_activity,
student_extracurricular.Achievement AS ex_ach,
student_extracurricular.Start_Date AS ex_start,
student_extracurricular.End_Date AS ex_end,
student_extracurricular.`Level` AS ex_level
FROM student_info
INNER JOIN student_extracurricular ON student_info.StudentID = student_extracurricular.StudentID
WHERE student_info.StudentID ='$studentID'";
$q_sc3 = mysql_query($sql_sc3);
$row_3=mysql_fetch_array($q_sc3);

//select discipline
$sql_sc4="SELECT
student_info.StudentID,
student_discipline.Activity AS dis_activity,
student_discipline.`Level` AS dis_level,
student_discipline.Date_Committed AS dis_date,
student_discipline.Action_Taken AS dis_action,
student_discipline.`Comment` AS dis_comment
FROM student_info
INNER JOIN student_discipline ON student_info.StudentID = student_discipline.StudentID
WHERE student_info.StudentID ='$studentID'";
$q_sc4 = mysql_query($sql_sc4);
$row_4=mysql_fetch_array($q_sc4);



//exam result Internal

$sql_sc5="
SELECT
student_course.ID,
student_course.StudentID,
student_course.CourseID,
student_course.Semester,
student_course.e1,
student_course.e2,
student_course.e3,
student_course.e4,
student_course.e1 AS cgpa,
course.Code,
course.Shortname,
course.Name
FROM student_course
INNER JOIN student_info ON student_course.StudentID = student_info.StudentID
INNER JOIN course ON student_course.CourseID = course.CourseID
WHERE student_info.StudentID ='$studentID'
ORDER BY student_course.Semester ";
$q_sc5 = mysql_query($sql_sc5);
$row_5=mysql_fetch_array($q_sc5);


$sql_course_dca= "SELECT
student_course_dca.StudentID,
course.Name AS coursename,
student_course_dca.Exam_Status,student_course_dca.Exam_Remark,student_course_dca.Exam_Date,
student_course_dca.Semester
FROM student_course_dca
INNER JOIN course ON student_course_dca.CourseID = course.CourseID 
WHERE student_course_dca.StudentID='$studentID'
ORDER BY student_course_dca.Semester";
$query_course_dca=mysql_query($sql_course_dca,$conn);
$row_course_dca=mysql_fetch_assoc($query_course_dca);

//mOE EXXAM

$moe_sql="SELECT eid,sem,StudentID,c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,c11,c12 FROM course_moe2 WHERE StudentID='$studentID' ";
$sql_course_moe1="$moe_sql AND sem=1";
$query_course_moe1=mysql_query($sql_course_moe1,$conn);$row_moe1=mysql_fetch_assoc($query_course_moe1);

$sql_course_moe2="$moe_sql  AND sem=2";
$query_course_moe2=mysql_query($sql_course_moe2,$conn);$row_moe2=mysql_fetch_assoc($query_course_moe2);

$sql_course_moe3="$moe_sql  AND sem=3";
$query_course_moe3=mysql_query($sql_course_moe3,$conn);$row_moe3=mysql_fetch_assoc($query_course_moe3);

$sql_course_moe4="$moe_sql  AND sem=4";
$query_course_moe4=mysql_query($sql_course_moe4,$conn);$row_moe4=mysql_fetch_assoc($query_course_moe4);

$sql_course_moe5="$moe_sql  AND sem=5";
$query_course_moe5=mysql_query($sql_course_moe5,$conn);$row_moe5=mysql_fetch_assoc($query_course_moe5);

$sql_course_moe6="$moe_sql  AND sem=6";
$query_course_moe6=mysql_query($sql_course_moe6,$conn);$row_moe6=mysql_fetch_assoc($query_course_moe3);


//select hostel
$sql_sc7="SELECT
student_info.StudentID,
student_hostel.HostelID As hostel,
student_hostel.Room_No AS room,
student_hostel.CheckInDate AS date_in,
student_hostel.CheckOutDate AS date_out,
student_hostel.Items AS item
FROM student_info
INNER JOIN student_hostel ON student_info.StudentID = student_hostel.StudentID
WHERE student_info.StudentID ='$studentID'";
$q_sc7 = mysql_query($sql_sc7);
$row_7=mysql_fetch_array($q_sc7);

//select attendance
/*
$sql_sc8="SELECT
student_attendance.StudentID,
COUNT(if(student_attendance.attend = 'Attend', student_attendance.id, NULL)) AS attend1,
COUNT(if(student_attendance.attend = 'MC', student_attendance.id, NULL)) AS MC,
COUNT(if(student_attendance.attend = 'Absent', student_attendance.id, NULL)) AS Absent,
COUNT(if(student_attendance.attend = 'Absent With Reason', student_attendance.id, NULL)) AS Absent_With_Reason,
COUNT(student_attendance.attend) AS TOTAL,
COUNT(if(student_attendance.attend = 'Attend', student_attendance.id, NULL))/ COUNT(student_attendance.attend)*100 AS percent_attend,
COUNT(if(student_attendance.attend = 'MC', student_attendance.id, NULL))/ COUNT(student_attendance.attend)*100 AS percent_MC,
COUNT(if(student_attendance.attend = 'Absent', student_attendance.id, NULL))/ COUNT(student_attendance.attend)*100 AS percent_Absent,
COUNT(if(student_attendance.attend = 'Absent With Reason', student_attendance.id, NULL))/ COUNT(student_attendance.attend)*100 AS per_abr
FROM student_attendance
INNER JOIN student_info ON student_attendance.StudentID = student_info.StudentID
WHERE student_info.StudentID ='$studentID'";
$q_sc8= mysql_query($sql_sc8);
$row_8=mysql_fetch_array($q_sc8);
*/
//select billing
$sql_sc9="SELECT statement,dates FROM student_bill_statement WHERE StudentID ='$studentID' ORDER BY dates DESC";
$q_sc9= mysql_query($sql_sc9);
$row_9=mysql_fetch_array($q_sc9);

//select OJT
$sql_sc11="
SELECT
student_industry_training.id,
student_industry_training.studentID,
student_industry_training.start_date,
student_industry_training.end_date,
student_industry_training.examStatus,
student_industry_training.duration,
student_industry_training.unemployed,
student_industry_training.remarks,
ojt_company.organization_name AS name,
ojt_company.address,
ojt_company.tel,
ojt_company.fax
FROM student_industry_training
LEFT JOIN ojt_company ON student_industry_training.organization_name = ojt_company.id
WHERE studentID='$studentID'";
$q_sc11= mysql_query($sql_sc11);
$row_11=mysql_fetch_array($q_sc11);
?>