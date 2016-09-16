<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Statement of Account </title>
<?php require_once('include/dbcommon.php');?>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
</head>
<?php
$StudentID=$_GET['StudentID'];

$sql_total = "
SELECT
student_info.StudentID,
SUM(student_billing.amount) AS TotalBill,
SUM(student_billing.amount)-SUM(student_billing.amount_balance) AS TotalPaid,
SUM(student_billing.amount_balance) AS TotalOutstanding
FROM student_info
LEFT OUTER JOIN student_billing ON student_info.StudentID = student_billing.studentID
WHERE student_info.StudentID='$StudentID'";
$q_total =mysql_query($sql_total) or die(mysql_error());
$row_total=mysql_fetch_assoc($q_total);

$sql_bill = "
SELECT
student_billing.studentID,
student_billing.item AS ItemID,
setting_bill_item.items AS Item_Name,
student_billing.amount AS Fees,
student_billing.amount_balance AS Outstanding,
(student_billing.amount-student_billing.amount_balance) AS Paid,
student_billing.`date` AS Item_Date,
student_billing.bill_no AS Invoice_No,
student_billing.student_bill_id AS student_bill_id,
student_info.Name AS Student_Name,
student_info.MatricNo AS Matric_No,
student_info.BatchID AS Batch,
student_info.Intake AS Intake,
student_info.Sponsor AS Sponsor,
program.Name AS Program_Name
FROM student_billing
INNER JOIN setting_bill_item ON student_billing.item = setting_bill_item.id
INNER JOIN student_info ON student_billing.studentID = student_info.StudentID
INNER JOIN program ON student_info.DipID = program.ID
WHERE student_billing.studentID='$StudentID'
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
     <td align="left" scope="col"><p><strong>NAME:</strong> <?php echo $row_bill['Student_Name']; ?> |  <strong>MATRIC NO:</strong> <?php echo $row_bill['Matric_No']; ?> |<strong> Batch: </strong><?php echo $row_bill['Batch']; ?></p></td>
   </tr>
   <tr>
     <th align="left">PROGRAM NAME:<?php echo $row_bill['Program_Name']; ?></th>
   </tr>
 </table>
 <br />
<table width="90%" border="0" align="center">
   <tr>
     <th>TOTAL CHARGES(RM)</th>
     <th >TOTAL PAID(RM)</th>
     <th >TOTAL OUTSTANDING(RM)</th>
   </tr>
   <tr>
     <td align="center"><?php echo $row_total['TotalBill']; ?></td>
     <td align="center"><?php echo $row_total['TotalPaid']; ?></td>
     <td align="center"><?php echo $row_total['TotalOutstanding']; ?></td>
   </tr>
</table>

<p>&nbsp;</p>

 <table width="90%" border="1" align="center" class="table_top">
   <tr>
     <th width="13%">Date</th>
     <th width="34%">Item</th>
     <th width="12%">Semester</th>
     <th width="13%">Charges (RM)</th>
     <th width="15%">Paid<br />
       (RM)</th>
     <th width="13%">Balance<br />
       (RM)</th>
   </tr>
 </table>
 
   <?php 
 do {  ?>
 <table width="90%" border="0" align="center" cellpadding="5" class="table_top">
   <tr>
     <td width="13%"><?php echo date("d-m-Y", strtotime($row_bill['Item_Date'])) ; ?></td>
     <td width="34%" align="left"><?php echo $row_bill['Item_Name']; ?></td>
     <td width="13%" align="center"><?php echo $row_bill['Invoice_No']; ?></td>
     <td width="12%" align="center"><?php echo $row_bill['Fees']; ?></td>
     <td width="15%" align="center"><?php echo $row_bill['Paid']; ?></td>
     <td width="13%" align="center"><?php echo $row_bill['Outstanding']; ?></td>
     
   </tr>
   <tr>
   <?php 
	 $student_bill_id=$row_bill['student_bill_id'];
$sql_pay = "SELECT student_bill_id,amount AS pay_amount,pay_date,terms,ref_no AS OR_NO FROM student_payment WHERE student_bill_id='$student_bill_id' ";
$q_pay =mysql_query($sql_pay) or die(mysql_error());
$row_pay=mysql_fetch_assoc($q_pay);
	 ?> <?php  if($row_pay['student_bill_id']) { ?>
     <td colspan="6"><p>PAYMENT HISTORY:<br />
       </p>
       
       <table width="100%" border="1" align="center" class="table_grey">
         
         <tr>
           <th scope="col">AMOUNT(RM)</th>
           <th scope="col">DATE</th>
           <th scope="col">MODE</th>
           <th scope="col">REF NO</th>
         </tr>
         <tr>
           <?php } ?>
           <?php do {   ?>
           <td><?php echo $row_pay['pay_amount']; ?></td>
           <td><?php if($row_pay['pay_date']){
		   $paydate=$row_pay['pay_date'];  
		   echo $newDate = date("d-m-Y", strtotime($paydate));
		   } ?></td>
           <td><?php echo $row_pay['terms']; ?></td>
           <td><?php echo $row_pay['OR_NO']; ?></td>
         </tr><?php } while($row_pay=mysql_fetch_array($q_pay))  ?>
         
       </table>
     </td>
   </tr>  
 

   
 </table>
   <?php  } while($row_bill=mysql_fetch_assoc($q_bill))  ?>
</body>
</html>
