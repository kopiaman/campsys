<?php

//select STUDENT INFO
$sql_02 = "SELECT enrolID,
Name,ICNO,DOB,Email,
BranchID,Date_Apply,Gender,married,
Address1,City,Postcode,StateID,Country,
HomeTelephone,MobileTelephone,
Nationality,DipID,Status,
Disability,MedicalCondition,
race,Religion,
f_name,f_tel,f_ic,f_job,
m_name,m_job,m_tel,m_ic,
blood,qua_level,qua_year,qua_place,
q1_s,
q1_g,
q2_s,
q2_g,
q3_s,
q3_g,
q4_s,
q4_g,
g5_s,
g5_g,
g6_s,
g6_g,
g7_s,
g7_g,
g8_s,
g8_g,
g9_s,
g9_g,
oq_highest,
oq_major,
oq_u,
oq_cgpa,
at_ic,
at_dob,
at_spm,
at_slc,
at_coco,
at_fama,
at_famaic,
at_trans,
at_photo,
Passport,
g10_s,
g10_g,
g11_s,
g11_g,
o_english,
finance
FROM enroll WHERE enrolID='$enrolID'";
$q_02 = mysql_query($sql_02);
$row=mysql_fetch_array($q_02);

//select program
$class=$row['DipID'];
$sql_03 ="SELECT
Field_Name AS programname
FROM setting
WHERE Class='42' AND Value='$class'"; 
$q_03 = mysql_query($sql_03);
$row3=mysql_fetch_array($q_03);

//select nationality name
$student_countrycode=$row['Nationality'];
$sql_04 ="SELECT
country AS national
FROM countries
WHERE ccode ='$student_countrycode'"; 
$q_04 = mysql_query($sql_04);
$row4=mysql_fetch_array($q_04);

?>