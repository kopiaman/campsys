<?php
$dalTablestudent_course_dca = array();
$dalTablestudent_course_dca["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablestudent_course_dca["StudentID"] = array("type"=>3,"varname"=>"StudentID");
$dalTablestudent_course_dca["CourseID"] = array("type"=>3,"varname"=>"CourseID");
$dalTablestudent_course_dca["Semester"] = array("type"=>3,"varname"=>"Semester");
$dalTablestudent_course_dca["Exam_Status"] = array("type"=>200,"varname"=>"Exam_Status");
$dalTablestudent_course_dca["Exam_Date"] = array("type"=>7,"varname"=>"Exam_Date");
$dalTablestudent_course_dca["Exam_Remark"] = array("type"=>200,"varname"=>"Exam_Remark");
$dalTablestudent_course_dca["ProgramID"] = array("type"=>3,"varname"=>"ProgramID");
	$dalTablestudent_course_dca["ID"]["key"]=true;
$dal_info["student_course_dca"]=&$dalTablestudent_course_dca;

?>