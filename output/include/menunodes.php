<?php
	// create menu nodes arr
	$menuNodesObject->menuNodes = array();
		
	if(!$menuNodesObject->isAdminTable()){
		$menuNode = array();
		$menuNode["id"] = "1";
		$menuNode["name"] = "HOME";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "HOME";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "2";
		$menuNode["name"] = "STUDENT AFFAIR";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "STUDENT AFFAIR";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "3";
		$menuNode["name"] = "Active Students";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "student_info";
		$menuNode["style"] = "";
		$menuNode["params"] = "q=%28Status~equals~Active%29";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Active Students";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "4";
		$menuNode["name"] = "Withdrawed Students";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "student_info";
		$menuNode["style"] = "";
		$menuNode["params"] = "q=%28Status~equals~Quit%29";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Withdrawed Students";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "5";
		$menuNode["name"] = "Terminated Students";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "student_info";
		$menuNode["style"] = "";
		$menuNode["params"] = "q=%28Status~equals~Terminated%29";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Terminated Students";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "6";
		$menuNode["name"] = "Graduated Students";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "student_info";
		$menuNode["style"] = "";
		$menuNode["params"] = "q=%28Status~equals~Graduated%29";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Graduated Students";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "7";
		$menuNode["name"] = " STUDENT DETAIL";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = " STUDENT DETAIL";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "8";
		$menuNode["name"] = "Next Of Kin";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Family";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "7";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Next Of Kin";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "9";
		$menuNode["name"] = "Discipline";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Discipline";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "7";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Discipline";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "10";
		$menuNode["name"] = "Extracurricular";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Extracurricular";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "7";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Extracurricular";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "11";
		$menuNode["name"] = "Financial Aid";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Sponsor";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "7";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Financial Aid";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "12";
		$menuNode["name"] = "Hostel";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Student_Hostel";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "7";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Hostel";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "13";
		$menuNode["name"] = "Class";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Student_Class";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "7";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Class";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "14";
		$menuNode["name"] = "REPORT/STATISTIC";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "REPORT/STATISTIC";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "15";
		$menuNode["name"] = "STATISTIC- No of Student";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Chart_no_student";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "14";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "Chart";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "STATISTIC- No of Student";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "16";
		$menuNode["name"] = "REPORT- Student Hostel Overall";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Student_Hostel_overall";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "14";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "REPORT- Student Hostel Overall";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "17";
		$menuNode["name"] = "REPORT -Student Class Overall";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Student_Class_overall";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "14";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "REPORT -Student Class Overall";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "18";
		$menuNode["name"] = "REPORT-Sponsor Overall";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Sponsor_Overall";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "14";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "REPORT-Sponsor Overall";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "19";
		$menuNode["name"] = "MOE";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "MOE";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "20";
		$menuNode["name"] = "Exam Marking";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "19";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Exam Marking";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "21";
		$menuNode["name"] = "Sem 1";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "course_moe2";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Sem 1";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "22";
		$menuNode["name"] = "Sem 2";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "course_moe2_sem2";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Sem 2";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "23";
		$menuNode["name"] = "Sem 3";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "course_moe2_sem3";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Sem 3";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "24";
		$menuNode["name"] = "Sem 4";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "course_moe2_sem4";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Sem 4";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "25";
		$menuNode["name"] = "Sem 5";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "course_moe2_sem5";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Sem 5";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "26";
		$menuNode["name"] = "Sem 6";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "course_moe2_sem6";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Sem 6";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "27";
		$menuNode["name"] = "Advance";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "19";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Advance";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "28";
		$menuNode["name"] = "Exam Seat Slip";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Exam_Slip_MOE";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "27";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Exam Seat Slip";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "29";
		$menuNode["name"] = "Exam Result Slip";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Exam_Result_MOE";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "27";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Exam Result Slip";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "30";
		$menuNode["name"] = "HR/ADMIN";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "HR/ADMIN";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "31";
		$menuNode["name"] = "Active Staff";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "staff_info";
		$menuNode["style"] = "";
		$menuNode["params"] = "q=%28sstatus~equals~Active%29";
		$menuNode["parent"] = "30";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Active Staff";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "32";
		$menuNode["name"] = "Non Active Staff";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "staff_info";
		$menuNode["style"] = "";
		$menuNode["params"] = "q=%28sstatus~equals~Non+Active%29";
		$menuNode["parent"] = "30";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Non Active Staff";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "33";
		$menuNode["name"] = "STAFF DETAIL";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "30";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "STAFF DETAIL";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "34";
		$menuNode["name"] = "External Training";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Staff_Training";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "33";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "External Training";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "35";
		$menuNode["name"] = "Next Of Kin";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Staff_Kin";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "33";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Next Of Kin";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "36";
		$menuNode["name"] = "CALENDAR";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "30";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "CALENDAR";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "37";
		$menuNode["name"] = "TRAINING";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "TRAINING";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "38";
		$menuNode["name"] = "Assign Module ";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Program_Batch";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "37";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Assign Module ";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "39";
		$menuNode["name"] = "Attendance";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Attendance_Student_List";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "37";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Attendance";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "40";
		$menuNode["name"] = "OJT";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report-_Industry_Training";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "37";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "OJT";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "41";
		$menuNode["name"] = "Setting";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "37";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Setting";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "42";
		$menuNode["name"] = "Instructor's Trade";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Instructor_Trade";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "41";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Instructor's Trade";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "43";
		$menuNode["name"] = "Module Name";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "course";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "41";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Module Name";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "44";
		$menuNode["name"] = "Advance Module";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "37";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Advance Module";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "45";
		$menuNode["name"] = "Timetable";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "t_facilities_timetable";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "44";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Timetable";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "46";
		$menuNode["name"] = " External Training";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Compulsory_Training";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "44";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = " External Training";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "47";
		$menuNode["name"] = "EXAM/QA";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "EXAM/QA";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "48";
		$menuNode["name"] = "Marking Intenal Exam";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Marking_Student_list";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "47";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Marking Intenal Exam";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "49";
		$menuNode["name"] = "DCA exam";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "student_course_DCA_List_student2";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "47";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "DCA exam";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "50";
		$menuNode["name"] = "Generator";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "47";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Generator";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "51";
		$menuNode["name"] = "Exam Result Memo Generator";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "exam_result_memo";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "50";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Exam Result Memo Generator";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "52";
		$menuNode["name"] = "ACCOUNT";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "ACCOUNT";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "53";
		$menuNode["name"] = "Upload Statement";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "student_bill_list2";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "52";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Upload Statement";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "54";
		$menuNode["name"] = "CORPORATE";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "CORPORATE";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "55";
		$menuNode["name"] = "Interests";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "enroll_prospect";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "54";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Interests";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "56";
		$menuNode["name"] = "Online Application";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "enroll";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "54";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Online Application";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "57";
		$menuNode["name"] = "PROGRAM / COURSE OFFER";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "54";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "PROGRAM / COURSE OFFER";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "58";
		$menuNode["name"] = "Programme List";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "program";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "57";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Programme List";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "59";
		$menuNode["name"] = "Course Program List";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "set_intake_category";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "57";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Course Program List";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "60";
		$menuNode["name"] = "WEBSITE";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "WEBSITE";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "61";
		$menuNode["name"] = "Slider";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "w_slider";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "60";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Slider";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "62";
		$menuNode["name"] = "Courses";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "w_course";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "60";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Courses";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "63";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "w_news";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "60";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "News";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "64";
		$menuNode["name"] = "Gallery";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "w_gallery_sub";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "60";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Gallery";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "65";
		$menuNode["name"] = "FAQ";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "w_faq";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "60";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "FAQ";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "66";
		$menuNode["name"] = "ADMIN";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "ADMIN";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "67";
		$menuNode["name"] = "Category List";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "set_setting_category";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "66";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Category List";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "68";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "campus_setting";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "66";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Campus Setting";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "69";
		$menuNode["name"] = "SUPPORT";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "SUPPORT";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "70";
		$menuNode["name"] = "Feedback/Problem/Inquiry";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "support";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "69";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Feedback/Problem/Inquiry";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "71";
		$menuNode["name"] = "User Manual";
		$menuNode["href"] = "manual/";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "69";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "NewWindow";
			$menuNode["title"] = "User Manual";
		$menuNodesObject->menuNodes[] = $menuNode;
			if($menuNodesObject->pageType == PAGE_MENU && IsAdmin())
		{
					$menuNode = array();
			$menuNode["id"] = "AAS";
			$menuNode["name"] = "-------";
			$menuNode["href"] = "";
			$menuNode["type"] = "Separator";
			$menuNode["table"] = "";
			$menuNode["style"] = "";
			$menuNode["title"] = "-------";
			$menuNode["params"] = "";
			$menuNode["parent"] = "0";
			$menuNode["nameType"] = "Text";
			$menuNode["linkType"] = "None";
			$menuNode["pageType"] = "";
			$menuNode["openType"] = "None";	
			$menuNodesObject->menuNodes[] = $menuNode;
			//Admin area Link
			$menuNode = array();
			$menuNode["id"] = "AA";
			$menuNode["name"] = "Admin Area";
			$menuNode["href"] = "admin_rights_list.php";
			$menuNode["type"] = "Leaf";
			$menuNode["table"] = "";
			$menuNode["style"] = "";
			$menuNode["title"] = "Admin Area";
			$menuNode["params"] = "";
			$menuNode["parent"] = "0";
			$menuNode["nameType"] = "Text";
			$menuNode["linkType"] = "External";
			$menuNode["pageType"] = "AdminArea";
			$menuNode["openType"] = "None";	
			$menuNodesObject->menuNodes[] = $menuNode;
		}
	}else{
		//Admin Area menu items
		// admin_rights item
		$menuNode = array();
		$menuNode["id"] = "admin_rights";
		$menuNode["name"] = "admin_rights";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_rights";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Permissions";
		$menuNode["href"] = "admin_rights_list.php";
		$menuNodesObject->menuNodes[] = $menuNode;
		// admin_members item
		$menuNode = array();
		$menuNode["id"] = "admin_members";
		$menuNode["name"] = "admin_members";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_members";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Assign users to groups";
		$menuNode["href"] = "admin_members_list.php";
		$menuNodesObject->menuNodes[] = $menuNode;
		// admin_users item
		$menuNode = array();
		$menuNode["id"] = "admin_users";
		$menuNode["name"] = "admin_users";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_users";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Add/Edit users";
		$menuNode["href"] = "admin_users_list.php";
		$menuNodesObject->menuNodes[] = $menuNode;
	}	
	
?>
