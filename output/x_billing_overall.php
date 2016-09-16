<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Statement of Account </title>
<?php require_once('include/dbcommon.php');?>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
</head>
<?php
$smonth=1;
$syear=2014;
$sql_bill = "
SELECT
student_info.Name,
student_billing.proid,
student_billing.studentID,
student_billing.item,
student_billing.bill_no,
student_billing.amount AS charges,
student_payment.amount AS paid,
student_billing.amount_balance AS balance,
student_billing.`date`,
MONTH(student_billing.date) AS smonth,
YEAR(student_billing.date) AS syear,
student_billing.status
FROM student_billing
INNER JOIN student_info ON student_billing.studentID = student_info.StudentID
INNER JOIN student_payment ON student_billing.student_bill_id = student_payment.student_bill_id
WHERE MONTH(student_billing.date)=$smonth AND YEAR(student_billing.date)=$syear
GROUP BY student_billing.student_bill_id
ORDER BY student_billing.bill_no  ASC ";
$q_bill =mysql_query($sql_bill) or die(mysql_error());
$row_bill=mysql_fetch_assoc($q_bill);

//related bill payment

?>
<body>
 <h1><img src="images/logo.png" width="148" height="70" /> <br />
 Statement Of Account</h1>
<p>&nbsp;</p>
 <table width="90%" border="0" align="center" cellpadding="5">
   <tr>
     <td align="left" scope="col"><p><strong>COURSE:</strong> <?php echo $row_bill['Student_Name']; ?> | <strong> Batch: </strong><?php echo $row_bill['Batch']; ?></p></td>
   </tr>
 </table>
 <br />

 <table width="90%" border="1" align="center" class="table_top">
   <tr>
   <th width="13%">Name</th>
     <th width="11%">Date</th>
     <th width="27%">Item</th>
     <th width="12%">Semester</th>
     <th width="12%">Charges (RM)</th>
     <th width="12%">Paid<br />
       (RM)</th>
     <th width="13%">Balance<br />
       (RM)</th>
   </tr>
 </table>
 
  <table width="90%" border="0" align="center" cellpadding="5" class="table_top">
   <?php 
 do {  ?>

   <tr>
    <td width="13%" align="left"><?php echo $row_bill['Name']; ?></td>
     <td width="11%"><?php echo date("d-m-Y", strtotime($row_bill['date'])) ; ?></td>
     <td width="18%" align="left"><?php echo $row_bill['item']; ?></td>
     <td width="14%" align="center"><?php echo $row_bill['bill_no']; ?></td>
     <td width="16%" align="center"><?php echo $row_bill['charges']; ?></td>
     <td width="12%" align="center"><?php echo $row_bill['paid']; ?></td>
     <td width="16%" align="center"><?php echo $row_bill['balance']; ?></td>
     
   </tr>
  
  <?php  } while($row_bill=mysql_fetch_assoc($q_bill))  ?> 

   
 </table>
 
</body>
</html>
