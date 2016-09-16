<?php

//select STAFF INFO
$sql_02="SELECT
Name,
StaffNo,
IC_No,
Email,
Gender,
Race,
DOB,
Address1,
Postcode,
City,
`State`,
Nationality,
Home_Tel,
Mobile_Tel,
Disability,
Medical_condition,
Join_Date,
End_Date,
Job_Type,
Employee_Type,
Job_Title,
religion,
department,
passport,
married,
blood,
photo,
f1_name,
f1_relation,
f1_tel,
f2_name,
f2_relation,
f2_tel,
bank1,
bank2,
epf,
socso,
lhdn,
confirmation_date,
sstatus
FROM staff_info
WHERE ID='$staffID'";
$q_02 = mysql_query($sql_02);
$row=mysql_fetch_assoc($q_02);


//select staff qualification
$sql_sc2="
SELECT StaffID, Institution, YearGrad, EducationType, Major, Grade_CGPA
FROM staff_qualification 
WHERE StaffID ='$staffID'";
$q_sc2 = mysql_query($sql_sc2);
$row_2=mysql_fetch_array($q_sc2);

//select internal history(mata)
$sql_sc3="SELECT  StaffID, designation, department, start_date, end_date
FROM staff_internal_history
WHERE StaffID ='$staffID'";
$q_sc3 = mysql_query($sql_sc3);
$row_3=mysql_fetch_array($q_sc3);

//select emplyment history
$sql_sc4="SELECT  StaffID, Organisation, `Position`, DateStart, DateEnd, Reason
FROM staff_employement_history 
WHERE StaffID ='$staffID'";
$q_sc4 = mysql_query($sql_sc4);
$row_4=mysql_fetch_array($q_sc4);


//select discipline
$sql_sc5="
SELECT StaffID, Activity, `Level`, 
Date_Commited, Action_Taken, `Comment`
FROM staff_discipline 
WHERE StaffID ='$staffID'";
$q_sc5 = mysql_query($sql_sc5);
$row_5=mysql_fetch_array($q_sc5);

//select training
$sql_sc6="SELECT
training.TrainingName,
staff_compulsory_training.Attendance,
staff_compulsory_training.Training_Date,
staff_compulsory_training.Venue,
staff_compulsory_training.Provider
FROM staff_compulsory_training
INNER JOIN training ON staff_compulsory_training.TrainingID = training.TrainingID
WHERE staff_compulsory_training.StaffID ='$staffID'";
$q_sc6 = mysql_query($sql_sc6);
$row_6=mysql_fetch_array($q_sc6);


?>