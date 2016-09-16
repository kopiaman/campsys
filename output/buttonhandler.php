<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/button.php");
	
$params = (array)my_json_decode(postvalue('params'));
$buttId = $params['buttId'];

// proccess table events
if($buttId=='Assign_Tasks_to_Students')
{
	include("include/Evaluation_Batch_List_variables.php");
	buttonHandler_Assign_Tasks_to_Students($params);
}
if($buttId=='ASSIGN_AS_GRADUATE1')
{
	include("include/student_info_variables.php");
	buttonHandler_ASSIGN_AS_GRADUATE1($params);
}
if($buttId=='VIEW_CALENDAR1')
{
	include("include/calendar_qa_variables.php");
	buttonHandler_VIEW_CALENDAR1($params);
}
if($buttId=='ASSIGN___Class_1')
{
	include("include/Report_Student_Class_variables.php");
	buttonHandler_ASSIGN___Class_1($params);
}
if($buttId=='ASSIGN___Class_2')
{
	include("include/Report_Student_Class_variables.php");
	buttonHandler_ASSIGN___Class_2($params);
}
if($buttId=='ASSIGN___Class_3')
{
	include("include/Report_Student_Class_variables.php");
	buttonHandler_ASSIGN___Class_3($params);
}
if($buttId=='ASSIGN___Class_4')
{
	include("include/Report_Student_Class_variables.php");
	buttonHandler_ASSIGN___Class_4($params);
}
if($buttId=='Jan_to_Jul')
{
	include("include/Report_student_billing_overall_variables.php");
	buttonHandler_Jan_to_Jul($params);
}
if($buttId=='Jul_to_Dec')
{
	include("include/Report_student_billing_overall_variables.php");
	buttonHandler_Jul_to_Dec($params);
}
if($buttId=='Statement')
{
	include("include/student_bill_list_variables.php");
	buttonHandler_Statement($params);
}
if($buttId=='Import_MOE_Students')
{
	include("include/course_moe2_variables.php");
	buttonHandler_Import_MOE_Students($params);
}
if($buttId=='Import_MOE_Students2')
{
	include("include/Report__Industry_Training_variables.php");
	buttonHandler_Import_MOE_Students2($params);
}

// proccess non table events


// create table and non table handlers
function buttonHandler_Assign_Tasks_to_Students($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_ASSIGN_AS_GRADUATE1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
foreach($keys as $idx=>$val)
{
$sql = "update student_info set `Status`='Graduated' where StudentID=" .$val["StudentID"];
CustomQuery($sql);
}
;
	echo my_json_encode($result);
}
function buttonHandler_VIEW_CALENDAR1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_ASSIGN___Class_1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
foreach($keys as $idx=>$val)
{
$sql = "update student_info set `Class`='1' where StudentID=" .$val["StudentID"];
CustomQuery($sql);
};
;
	echo my_json_encode($result);
}
function buttonHandler_ASSIGN___Class_2($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
foreach($keys as $idx=>$val)
{
$sql = "update student_info set `Class`='2' where StudentID=" .$val["StudentID"];
CustomQuery($sql);
};
;
	echo my_json_encode($result);
}
function buttonHandler_ASSIGN___Class_3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
foreach($keys as $idx=>$val)
{
$sql = "update student_info set `Class`='3' where StudentID=" .$val["StudentID"];
CustomQuery($sql);
};
;
	echo my_json_encode($result);
}
function buttonHandler_ASSIGN___Class_4($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	
foreach($keys as $idx=>$val)
{
$sql = "update student_info set `Class`='4' where StudentID=" .$val["StudentID"];
CustomQuery($sql);
};
;
	echo my_json_encode($result);
}
function buttonHandler_Jan_to_Jul($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	echo my_json_encode($result);
}
function buttonHandler_Jul_to_Dec($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	echo my_json_encode($result);
}
function buttonHandler_Statement($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.

$data = $button->getCurrentRecord();
$result['StudentID']=$data['StudentID'] ;;
	echo my_json_encode($result);
}
function buttonHandler_Import_MOE_Students($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"]." world!";

global $conn;

$sql_at= "SELECT StudentID FROM student_info WHERE Intake_Category='ED' AND Status='Active'";
$query_at=db_query($sql_at,$conn);
$student=db_fetch_array($query_at);

do{
$StudentID=$student['StudentID'];
$sql_exist= "SELECT StudentID AS ada FROM course_moe2 WHERE StudentID='$StudentID'";
$query_exist=db_query($sql_exist,$conn);
$exist=db_fetch_array($query_exist);

     do{
	$ada=$exist['ada'];
      
       if(!$ada){

        $sql_in= "INSERT INTO course_moe2 (StudentID,sem) VALUES ('$StudentID','1'),
    ('$StudentID','2'),('$StudentID','3'),('$StudentID','4'),('$StudentID','5'),('$StudentID','6') ";
        db_exec($sql_in,$conn);
      

       };  

      }while($exist=db_fetch_array($query_exist));

}while($student=db_fetch_array($query_at));;
	echo my_json_encode($result);
}
function buttonHandler_Import_MOE_Students2($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $params["txt"];

global $conn;

$sql_at= "SELECT StudentID FROM student_info WHERE Intake_Category='ED' AND Status='Active'";
$query_at=db_query($sql_at,$conn);
$student=db_fetch_array($query_at);

do{
$StudentID=$student['StudentID'];
$sql_exist= "SELECT studentID AS ada FROM student_industry_training WHERE studentID='$StudentID'";
$query_exist=db_query($sql_exist,$conn);
$exist=db_fetch_array($query_exist);

     do{
	$ada=$exist['ada'];
      
       if(!$ada){

        $sql_in= "INSERT INTO student_industry_training (studentID) VALUES ('$StudentID')";
        db_exec($sql_in,$conn);
      

       };  

      }while($exist=db_fetch_array($query_exist));

}while($student=db_fetch_array($query_at));;
	echo my_json_encode($result);
}
?>
