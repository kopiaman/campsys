<?php 
class eventclass_enroll_prospect  extends eventsBase
{ 
	function eventclass_enroll_prospect()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		global $conn;
$enrolID=$keys['enrolID'];



/*------------update NAME TO uppercase ---------------*/
$uppername=strtoupper($values['Name']);

$sql_up= "Update enroll set mode_apply='tour' , Name='$uppername' where enrolID='$enrolID'";
$query_up=db_query($sql_up,$conn);
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;
$enrolID=$keys['enrolID'];
$companyemail='kopiaman@yahoo.com';
$studentname=$values['Name'];
$programID=$values['DipID'];
$client_email=$values['Email'];

//select campus  setting
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_array($q_01);

//select programname
$sql_1= "SELECT Field_Name AS programname FROM setting WHERE Value=$programID";
$query_1=mysql_query($sql_1,$conn);
$row_1=mysql_fetch_assoc($query_1);
$programname=$row_1['programname'];

//send to config
$to2 =$client_email;
$headers2 = "From: " . $companyemail . "\r\n";
$headers2 .= "Content-type: text/html" ."\r\n";


if($values['Status']=='Interview'){

$message2 ="<html><body>";
$message2 .="<p> $row_q01[campus_name]</p><p> $row_q01[address],$row_q01[city],$row_q01[state],MALAYSIA </p>";
$message2 .="Fax: $row_q01[faxNo] Tel: $row_q01[telephone]</p><br><br>";

$message2 .="<p style='text-decoration:underline'><strong> Application Status for $programname  </strong> </p><br ><br> ";
$message2 .="<p> Hi $studentname, </p> <br>";
$message2 .="<p> Thank you for your application to enroll in our college. </p><br > ";
$message2 .="<p> Good news, your application is eligible for first interview.
We will give further notification for interview venue and date.</p> <br >";
$message2 .="<p>  Please stay updated by visiting our website or call our office for further clarification. </p><br ><br>";
$message2 .="<p style='font-size:10px'> **Note: This is automatic notification generated by our system***</p> ";
$message2 .= "</body></html>";
$subject2 ="Application Status From MATA- COME FOR INTERVIEW! ";
$mailto=mail($to2, $subject2, $message2, $headers2);

}
else if($values['Status']=='Rejected'){

$message2 ="<html><body>";
$message2 .="<p> $row_q01[campus_name]</p><p> $row_q01[address],$row_q01[city],$row_q01[state],MALAYSIA </p>";
$message2 .="Fax: $row_q01[faxNo] Tel: $row_q01[telephone]</p><br><br>";

$message2 .="<p style='text-decoration:underline'><strong> Application Status for $programname  </strong> </p><br ><br> ";
$message2 .="<p> Hi $studentname, </p> <br>";
$message2 .="<p> Thank you for your application to enroll in our college. </p><br > ";
$message2 .="<p> Unfortunately your application is unsuccessful. <br ><br>";
$message2 .="<p style='font-size:10px'> **Note: This is automatic notification generated by our system***</p> ";
$message2 .= "</body></html>";
$subject2 ="Application Status From MATA- UNSUCCESSFUL ";	
$mailto=mail($to2, $subject2, $message2, $headers2);

}

else if($values['Status']=='Accepted'){

$message2 ="<html><body>";
$message2 .="<p> $row_q01[campus_name]</p><p> $row_q01[address],$row_q01[city],$row_q01[state],MALAYSIA </p>";
$message2 .="Fax: $row_q01[faxNo] Tel: $row_q01[telephone]</p><br><br>";

$message2 .="<p style='text-decoration:underline'><strong> Application Status for $programname  </strong> </p><br ><br> ";
$message2 .="<p> Hi $studentname, </p> <br>";
$message2 .="<p> Thank you for your application to enroll in our college. </p><br > ";
$message2 .="<p> Good news, your application is successful.<br>
We will give more information for registeration procedure.<br>
Please stay updated by visiting our website or call our office for further clarification. </p> <br ><br>";
$message2 .="<p style='font-size:10px'> **Note: This is automatic notification generated by our system***</p> ";
$message2 .= "</body></html>";

$subject2 ="Application Status From MATA- SUCCESFUL & ACCEPTED! ";	
$mailto=mail($to2, $subject2, $message2, $headers2);

$address=$values['Address1'].','.$values['Postcode'];
$sql_active= "INSERT INTO student_info (Name,ICNO,DOB,Email	,
Gender	,married	,Address1,City,
StateID	,Country,HomeTelephone	,MobileTelephone	,
Nationality,Passport,Disability	,MedicalCondition	,race	,
Religion,f_name,f_tel,f_ic,f_job,
m_name,m_tel,m_ic,m_job,
qua_level,qua_place,qua_year,qua_result,
blood	,DipID,Status) VALUES
('$values[Name]','$values[ICNO]','$values[DOB]','$values[Email]',
'$values[Gender]','$values[married]','$address','$values[City]',
'$values[StateID]','$values[Country]','$values[HomeTelephone]','$values[MobileTelephone]',
'$values[Nationality]','$values[Passport]','$values[Disability]','$values[MedicalCondition]','$values[race]',
'$values[Religion]','$values[f_name]','$values[f_tel]','$values[f_ic]','$values[f_job]',
'$values[m_name]','$values[m_tel]','$values[m_ic]','$values[m_job]',
'$values[qua_level]','$values[qua_place]','$values[qua_year]','$values[qua_result]',
'$values[blood]','$values[DipID]','Active')";
db_exec($sql_active,$conn);

}



;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
