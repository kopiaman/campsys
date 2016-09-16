<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STUDENT INFORMATION </title>
<?php // require_once('db/db.php') ; 
require_once('include/dbcommon.php');?>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
<body>
<p>
 <?php 
$enrolID = $_GET['enrolID'];

//select campus  settingk;/
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_array($q_01);

require_once('x_enroll_query.php');
?>
</p>
<table width="98%" border="1" align="center" class="table_cover">
  <tr>
    <th valign="top" scope="col">
      <table width="500" border="0" align="center" class="left">
        <tr>
          <th width="24%" scope="row"><img src="images/<?php echo $row_q01['logo']?>"/></th>
          <td width="5%"><br />          </td>
          <td width="71%"><strong><?php echo $row_q01['campus_name']?></strong><br />
            <?php echo $row_q01['address']?>, <?php echo $row_q01['city']?>, <?php echo $row_q01['state']?><br />
Fax: <?php echo $row_q01['faxNo']?> Tel: <?php echo $row_q01['telephone']?></td>
        </tr>
      </table>
      
      <div class="div_all">
      <?php
    $files_at_photo=json_decode($row['at_photo']);
    $filenames_at_photo=$files_at_photo[0]->name;
    $thumbs_at_photo=$files_at_photo[0]->thumbnail;
?>
      <img src="<?php echo $thumbs_at_photo ?>" >
        <h2><?php echo $row['Name']; ?><br />
        <?php echo $row['MatricNo']; ?>        </h2>
   
        <div class="divleft">
          <h2>PERSONAL INFORMATION</h2>
          <table width="100%" border="0" class="left">
            <tr>
              <th class="left" scope="row"><strong>ADDRESS</strong></th>
              <th>:</th>
              <td><?php echo  $row['Address1'] ;?>,
                <?php if ($row['Postcode']) { echo $row['Postcode']; };?>
                <?php echo  $row['City'] ;?>, <?php echo  $row['State'] ;?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>MOBILE  NO:</strong></th>
              <th>:</th>
              <td><?php echo $row['MobileTelephone']; ?></td>
            </tr>
            <tr>
              <th width="36%" class="left" scope="row"><strong>HOME TEL:</strong></th>
              <th width="9%">:</th>
              <td width="55%"><?php  if($row['HomeTelephone']!='60'){ echo $row['HomeTelephone']; }else{};?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>IC</strong></th>
              <th>:</th>
              <td><?php echo $row['ICNO']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row">PASSPORT</th>
              <th>:</th>
              <td><?php echo $row['Passport']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>MARITAL STATUS</strong></th>
              <th>:</th>
              <td><?php echo $row['married']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>GENDER</strong></th>
              <th>:</th>
              <td><?php echo $row['Gender']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>RACE</strong></th>
              <th>:</th>
              <td><?php echo $row['race']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>NATIONALITY</strong></th>
              <th>:</th>
              <td><?php echo $row['Nationality']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>RELIGION</strong></th>
              <th>:</th>
              <td><?php echo $row['Religion']; ?></td>
            </tr>
          </table>
          <h2>PARENT'S INFORMATION</h2>
FATHER<br />
<table width="100%" border="0" class="left">
  <tr>
    <th width="37%" class="left" scope="row">NAME</th>
    <th width="9%">:</th>
    <td width="54%" class="left" scope="row"><?php echo $row['f_name']?></td>
  </tr>
  <tr>
    <th class="left" scope="row">IC</th>
    <th>:</th>
    <td class="left" scope="row"><?php echo $row['f_ic']?></td>
  </tr>
  <tr>
    <th class="left" scope="row">TEL</th>
    <th>:</th>
    <td class="left" scope="row"><?php echo $row['f_tel']?></td>
  </tr>
  <tr>
    <th class="left" scope="row">OCCUPATION</th>
    <th>:</th>
    <td class="left" scope="row"><?php echo $row['f_job']?></td>
  </tr>
  <?php if ($row['f_address']) { ?>
  <tr>
    <th class="left" scope="row">ADDRESS</th>
    <th>:</th>
    <td class="left" scope="row"><?php echo $row['f_address'];?></td>
  </tr>
  <?php }else{}; ?>
</table>
<br />
MOTHER<br />
<table width="100%" border="0" class="left">
  <tr>
    <th width="37%" class="left" scope="row">NAME</th>
    <th width="7%">:</th>
    <td width="56%"><?php echo $row['m_name']?></td>
  </tr>
  <tr>
    <th class="left" scope="row">IC</th>
    <th>:</th>
    <td><?php echo $row['m_ic']?></td>
  </tr>
  <tr>
    <th class="left" scope="row">TEL</th>
    <th>:</th>
    <td><?php echo $row['m_tel']?></td>
  </tr>
  <tr>
    <th class="left" scope="row">OCCUPATION</th>
    <th>:</th>
    <td><?php echo $row['m_job']?></td>
  </tr>
  <?php if ($row['m_address']) { ?>
  <tr>
    <th class="left" scope="row">ADDRESS</th>
    <th class="left" scope="row">:</th>
    <td><?php echo $row['m_address'];?></td>
  </tr>
  <?php }else{} ;?>
</table>
<h2>MEDICAL INFORMATION</h2>
          <table width="100%" border="0" class="left">
            <tr>
              <th width="36%" class="left" scope="row"><strong>DISABILITY</strong></th>
              <th width="9%">:</th>
              <td width="55%"><?php echo $row['Disability'];?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>BLOOD TYPE</strong></th>
              <th>:</th>
              <td><?php echo $row['blood']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>MEDICAL CONDITION</strong></th>
              <th>:</th>
              <td><?php echo $row['MedicalCondition']; ?></td>
            </tr>
          </table>
          <p>&nbsp;</p>
        </div>
     <div class="divright">
       <h2>PROGRAM INFO</h2>
       <table width="100%" border="0" class="left">
         <tr>
           <th width="36%" class="left" scope="row"><strong>PROGRAM</strong></th>
           <th width="9%">:</th>
           <td width="55%"><?php echo $row3['programname']; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>DATE APPLIED</strong></th>
           <th>:</th>
           <td><?php $Date_Apply=$row['Date_Apply'];  
 echo $newDate2 = date("d-m-Y", strtotime($Date_Apply));?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>STATUS</strong></th>
           <th>:</th>
           <td><?php echo $row['Status']; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row">FINANCIAL AID</th>
           <th>:</th>
           <td><?php echo $row['finance']; ?></td>
         </tr>
       </table>
       <h2>ACADEMIC BACKROUND</h2>
       <table width="100%" border="0" class="left">
         <tr>
           <th width="36%" class="left" scope="row"><strong>SCHOOL/ INSTITUTION</strong></th>
           <th width="9%">:</th>
           <td width="55%"><?php echo $row['qua_place'];?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>LEVEL/ YEAR</strong></th>
           <th>:</th>
           <td><?php echo $row['qua_level'].' ( '.$row['qua_year'].')'; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>RESULT</strong></th>
           <th>:</th>
           <td><?php echo $row['qua_result']; ?></td>
         </tr>
       </table>
       <br />
<br />
<table width="100%" border="1" align="center" class="left">
  <tr>
    <th width="45%" scope="col">Subject</th>
    <th width="55%" scope="col">Grade</th>
  </tr>
  <tr>
   
    <td><?php echo $row['q1_s'] ?></td>
    <td><?php echo $row['q1_g']?></td>
  </tr>
  <tr>
    <td><?php echo $row['q2_s'] ?></td>
    <td><?php echo $row['q2_g']?></td>
  </tr>
  
 <?php if($row['q3_s']){ ?> <tr> 
    <td><?php echo $row['q3_s'] ?></td>
    <td><?php echo $row['q3_g']?></td>
  </tr><?php }else{} ;?>
  
   <?php if($row['q4_s']){ ?><tr>
    <td><?php echo $row['q4_s'] ?></td>
    <td><?php echo $row['q4_g']?></td>
  </tr><?php }else{} ;?>
  
  <?php if($row['g5_s']){ ?><tr>
    <td><?php echo $row['g5_s'] ?></td>
    <td><?php echo $row['g5_g']?></td>
 </tr><?php }else{} ;?>
 
  <?php if($row['g6_s']){ ?><tr>
    <td><?php echo $row['g6_s'] ?></td>
    <td><?php echo $row['g6_g']?></td>
 </tr><?php }else{} ;?>
 
  <?php if($row['g7_s']){ ?><tr>
    <td><?php echo $row['g7_s'] ?></td>
    <td><?php echo $row['g7_g']?></td>
 </tr><?php }else{} ;?>
 
  <?php if($row['g8_s']){ ?><tr>
    <td><?php echo $row['g8_s'] ?></td>
    <td><?php echo $row['g8_g']?></td>
 </tr><?php }else{} ;?>
 
  <?php if($row['g9_s']){ ?><tr>
    <td><?php echo $row['g9_s'] ?></td>
    <td><?php echo $row['g9_g']?></td>
 </tr><?php }else{} ;?>
 
  <?php if($row['g10_s']){ ?><tr>
    <td><?php echo $row['g10_s'] ?></td>
    <td><?php echo $row['g10_g']?></td>
 </tr><?php }else{} ;?>
 
  <?php if($row['g11_s']){ ?><tr>
    <td><?php echo $row['g11_s'] ?></td>
    <td><?php echo $row['g11_g']?></td>
 </tr><?php }else{} ;?>

</table>
<h2>OTHER QUALIFICATION</h2>
       <table width="100%" border="0" class="left">
         <tr>
           <th width="36%" class="left" scope="row"><strong>ILTES/ TOEFL/ MUET</strong></th>
           <th width="9%">:</th>
           <td width="55%"><?php echo $row['o_english'];?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>Highest Qualification / Professional Licensed</strong></th>
           <th>:</th>
           <td><?php echo $row['oq_highest']; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>Major / Specialization</strong></th>
           <th>:</th>
           <td><?php echo $row['oq_major']; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row">University / Institute</th>
           <th>:</th>
           <td><?php echo $row['oq_u']; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row">CGPA</th>
           <th>:</th>
           <td><?php echo $row['oq_cgpa']; ?></td>
         </tr>
       </table>
     </div>
     <div class="clear"></div>
     <div class="divcenter">
       <h2>&nbsp;</h2>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
     </div>
      </div>
   </th>
  </tr>
</table>

<div style="page-break-before:always"></div>
<div class="height_divider"></div>

<?php if($row['at_ic']){

    $files_at_ic=json_decode($row['at_ic']);
    $filenames_at_ic=$files_at_ic[0]->name;
    $thumbs_at_ic=$files_at_ic[0]->thumbnail;
	echo "<img src='$thumbs_at_ic'>";
		echo "<h3>Copy of Identity Card (NRIC)</h3>";
	echo "<br><br>";
}?>
<?php if($row['at_dob']){

    $files_at_dob=json_decode($row['at_dob']);
    $filenames_at_dob=$files_at_dob[0]->name;
    $thumbs_at_dob=$files_at_dob[0]->thumbnail;
	echo "<img src='$filenames_at_dob'>";
		echo "<h3>Copy of Birth Certificate</h3>";
	echo "<p></p>";
}?>
<?php if($row['at_spm']){

    $files_at_spm=json_decode($row['at_spm']);
    $filenames_at_spm=$files_at_spm[0]->name;
    $thumbs_at_spm=$files_at_spm[0]->thumbnail;
	echo "<img src='$filenames_at_spm'>";
		echo "<h3>SPM /SPMV/'O' Level Certificate or result slip</h3>";
	echo "<p></p>";
}?>
<?php if($row['at_slc']){
	
    $files_at_slc=json_decode($row['at_slc']);
    $filenames_at_slc=$files_at_slc[0]->name;
    $thumbs_at_slc=$files_at_slc[0]->thumbnail;
	echo "<img src='$filenames_at_slc'>";
	echo "<h3>School Leaving Certificate</h3>";
	echo "<p></p>";
}?>
<?php if($row['at_coco']){
	
    $files_at_coco=json_decode($row['at_coco']);
    $filenames_at_coco=$files_at_coco[0]->name;
    $thumbs_at_coco=$files_at_coco[0]->thumbnail;
	echo "<img src='$filenames_at_coco'>";
	echo "<h3>Co-Curriculum Certificate</h3>";
	echo "<p></p>";
}?>
<?php if($row['at_trans']){
	
    $files_at_trans=json_decode($row['at_trans']);
    $filenames_at_trans=$files_at_trans[0]->name;
    $thumbs_at_trans=$files_at_trans[0]->thumbnail;
	echo "<img src='$filenames_at_trans'>";
	echo "<h3>Certificate/Diploma/Degree with transcript/result slip of every semester</h3>";
	echo "<p></p>";
}?>
<?php if($row['at_famaic']){
	
    $files_at_famaic=json_decode($row['at_famaic']);
    $filenames_at_famaic=$files_at_famaic[0]->name;
    $thumbs_at_famaic=$files_at_famaic[0]->thumbnail;
	echo "<img src='$filenames_at_famaic'>";
	echo "<h3> Parents/guardian's Identity Card (NRIC)</h3>";
	echo "<p></p>";
}?>
<?php if($row['at_fama']){
	
    $files_at_fama=json_decode($row['at_fama']);
    $filenames_at_fama=$files_at_fama[0]->name;
    $thumbs_at_fama=$files_at_fama[0]->thumbnail;
	echo "<img src='$filenames_at_fama'>";
	echo "<h3>Parents Birth Certificate</h3>";
	echo "<p></p>";
}?>
<!--
<script type="text/javascript">
print();
</script>
-->
</body>
</html>