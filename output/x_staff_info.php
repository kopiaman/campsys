<?php require_once('include/dbcommon.php');?>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
<p>
<?php 
$staffID =$_GET['staffID'];

//select campus  settingk;/
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_assoc($q_01);

require_once('x_staff_query.php');
?>
</p>
<table width="98%" border="1" align="center" class="table_cover">
  <tr>
    <th valign="top" scope="col">
      <table width="700" border="0" align="center" class="left">
        <tr>
          <th width="24%" scope="row"><img src="images/<?php echo $row_q01['logo']?>"/></th>
          <td width="5%"><br />          </td>
          <td width="71%"><strong><?php echo $row_q01['campus_name']?></strong><br />
            <?php echo $row_q01['address']?>, <?php echo $row_q01['city']?>, <?php echo $row_q01['state']?><br />
Fax: <?php echo $row_q01['faxNo']?> Tel: <?php echo $row_q01['telephone']?></td></tr>
      </table>
      
      <div class="div_all">
        <h2>
          <?php     
 $value = $row['photo'];
//$value is a value from the database
if ($value){
$filesArray = json_decode($value);
 $filenames = $filesArray[0]->name;
//filenames contains file name with path
 $thumbnames = $filesArray[0]->thumbnail;
//thumbnames contains thumbnail file name with path
}
?>
        <img src="<?php echo $thumbnames?>"  /></h2>
        <h2><?php echo $row['Name']; ?><br />
        </h2>
   
        <div class="divleft">
          <h2>PERSONAL INFORMATION</h2>
          <table width="100%" border="0" class="left">
            <tr>
              <th class="left" scope="row"><strong>ADDRESS</strong></th>
              <th>:</th>
              <td><?php echo  $row['Address1'] ;?>, <?php if ($row['Postcode']) { echo $row['Postcode']; };?> <?php echo  $row['City'] ;?>, <?php echo  $row['State'] ;?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>MOBILE  NO:</strong></th>
              <th>:</th>
              <td><?php echo $row['Mobile_Tel']; ?></td>
            </tr>
            <tr>
              <th width="36%" class="left" scope="row"><strong>HOME TEL:</strong></th>
              <th width="9%">:</th>
              <td width="55%"><?php  echo $row['Home_Tel']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>IC</strong></th>
              <th>:</th>
              <td><?php echo $row['IC_No']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row">PASSPORT</th>
              <th>:</th>
              <td><?php echo $row['passport']; ?></td>
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
              <td><?php echo $row['Race']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>NATIONALITY</strong></th>
              <th>:</th>
              <td><?php echo $row['Nationality']; ?></td>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>RELIGION</strong></th>
              <th>:</th>
              <td><?php echo $row['religion']; ?></td>
            </tr>
          </table>
          <h2>NEXT OF KIN</h2>
          FATHER<br />
          <table width="100%" border="0" class="left">
            <tr>
              <th width="37%" class="left" scope="row">NAME</th>
              <th width="9%">:</th>
              <td width="54%" class="left" scope="row"><?php echo $row['f1_name']?></td>
            </tr>
            <tr>
              <th class="left" scope="row">RELATIONSHIP</th>
              <th>:</th>
              <td class="left" scope="row"><?php echo $row['f1_relation']?></td>
            </tr>
            <tr>
              <th class="left" scope="row">TEL</th>
              <th>:</th>
              <td class="left" scope="row"><?php echo $row['f1_tel']?></td>
            </tr>
            <?php if ($row['f_address']) { ?>
            <?php }else{}; ?>
          </table>
          <br />
          MOTHER<br />
          <table width="100%" border="0" class="left">
            <tr>
              <th width="37%" class="left" scope="row">NAME</th>
              <th width="7%">:</th>
              <td width="54%" scope="row"><?php echo $row['f2_name']?></td>
            </tr>
            <tr>
              <th class="left" scope="row">RELATIONSHIP</th>
              <th>:</th>
              <td scope="row"><?php echo $row['f2_relation']?></td>
            </tr>
            <tr>
              <th class="left" scope="row">TEL</th>
              <th>:</th>
              <td scope="row"><?php echo $row['f2_tel']?></td>
            </tr>
            <?php if ($row['m_address']) { ?>
            <?php }else{} ;?>
          </table>
          <p>&nbsp;</p>
          <h2>&nbsp;</h2>
          <p>&nbsp;</p>
        </div>
     <div class="divright">
       <h2>WORK INFORMATION       </h2>
       <table width="100%" border="0" class="left">
         <tr>
           <th width="36%" class="left" scope="row"><strong>STATUS</strong></th>
           <th width="9%">:</th>
           <td width="55%"><?php echo $row['sstatus'];?></td>
         </tr>
         <tr>
           <th class="left" scope="row">EMPLOYEE NO</th>
           <th>:</th>
           <td><?php echo $row['StaffNo']; ?></td>
           </tr>
         <tr>
           <th class="left" scope="row">DEPARTMENT</th>
           <th>:</th>
           <td width="55%"><?php  echo $row['department']; ?></td>
           </tr>
         <tr>
           <th class="left" scope="row">JOB TYPE</th>
           <th>:</th>
           <td><?php echo $row['Job_Type']; ?></td>
           </tr>
         <tr>
           <th class="left" scope="row">DESIGNATION</th>
           <th>:</th>
           <td><?php echo $row['Job_Title']; ?></td>
           </tr>
         <tr>
           <th class="left" scope="row">EMPLOYMENT </th>
           <th>:</th>
           <td><?php echo $row['Employee_Type']; ?></td>
           </tr>
         <tr>
           <th class="left" scope="row"><strong>JOIN DATE</strong></th>
           <th>:</th>
           <td><?php $dateJoin=$row['Join_Date'];  if($dateJoin!==NULL){
echo date("d-m-Y", strtotime($dateJoin)); } ?></td>
         </tr>
         <tr>
           <th class="left" scope="row">CONFIRMATION DATE</th>
           <th>:</th>
           <td><?php $dateConfirm=$row['confirmation_date'];
 if($dateConfirm!==NULL){
echo date("d-m-Y", strtotime($dateConfirm)); } ?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>END DATE</strong></th>
           <th>:</th>
           <td><?php echo $row['End_Date']; ?></td>
         </tr>
 </table>
       <h2>ACCOUNT INFO</h2>
         <table width="100%" border="0" class="left">
           <tr>
             <th width="36%" class="left" scope="row"><strong>MAYBANK</strong></th>
             <th width="9%">:</th>
             <td width="55%"><?php echo $row['bank1'];?></td>
           </tr>
           <tr>
             <th class="left" scope="row"><strong>OTHER BANK</strong></th>
             <th>:</th>
             <td><?php echo $row['bank2']; ?></td>
           </tr>
           <tr>
             <th class="left" scope="row"><strong>EPF</strong></th>
             <th>:</th>
             <td><?php echo $row['epf'];?></td>
           </tr>
           <tr>
             <th class="left" scope="row"><strong>SOCSO</strong></th>
             <th>:</th>
             <td><?php echo $row['socso'];?></td>
           </tr>
           <tr>
             <th class="left" scope="row"><strong>PASSPORT</strong></th>
             <th>:</th>
             <td><?php echo $row['passport']; ?></td>
           </tr>
           <tr>
             <th class="left" scope="row"><strong>LHDN</strong></th>
             <th>:</th>
             <td><?php echo $row['lhdn']; ?></td>
           </tr>
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
         <p><br />
         </p>
     </div>
     <div class="clear"></div>
     <div class="divcenter">
     
       <p>&nbsp;</p>
       <p>&nbsp;</p>
     </div>
      </div>
   </th>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div style="page-break-before:always"></div>
<div class="height_divider"></div>
<table width="98%" border="1" align="center" class="table_cover"><tr>
  <td valign="top"><table width="500" border="0" align="center" class="left">
    <tr>
      <th width="24%" scope="row"><img src="images/<?php echo $row_q01['logo']?>"/></th>
      <td width="5%"><br /></td>
      <td width="71%"><strong><?php echo $row_q01['campus_name']?></strong><br />
        <?php echo $row_q01['address']?>, <?php echo $row_q01['city']?>, <?php echo $row_q01['state']?><br />
        Fax: <?php echo $row_q01['faxNo']?> Tel: <?php echo $row_q01['telephone']?></td>
    </tr>
  </table>
    <h2>&nbsp;</h2>
    <h2>QUALIFICATION</h2>
    <table width="90%" border="1" align="center">
      <tr>
        <th width="24%" scope="col">Institution</th>
        <th width="22%" scope="col">Year</th>
        <th width="12%" scope="col">Type</th>
        <th width="22%" scope="col">Major</th>
        <th width="20%" scope="col">Grade_CGPA</th>
      </tr>
      <tr>  <?php do{ ?>
        <td><?php echo $row_2['Institution'] ?></td>
        <td><?php echo $row_2['YearGrad'] ?></td>
        <td><?php echo $row_2['EducationType'] ?></td>
        <td><?php echo $row_2['Major'] ?></td>
        <td><?php echo $row_2['ex_end'] ?></td>
      </tr> <?php } while($row_2=mysql_fetch_assoc($q_sc2)) ;?>
    </table>
     <h2>HISTORY (MATA)</h2>
    <table width="90%" border="1" align="center">
      <tr>
        <th width="27%" scope="col">Designation</th>
        <th width="12%" scope="col">Department</th>
        <th width="17%" scope="col">Start Date</th>
        <th width="17%" scope="col">End Date</th>
        </tr>
      <tr>
        <?php do{ ?>
        <td><?php echo $row_3['designation'] ?></td>
        <td><?php echo $row_3['department'] ?></td>
        <td><?php echo $row_3['start_date'] ?></td>
        <td><?php echo $row_3['end_date'] ?></td>
        </tr>
      <?php } while($row_3=mysql_fetch_assoc($q_sc3)) ;?>
  </table>
  
    <h2>EMPLOYMENT HISTORY </h2>
    <table width="90%" border="1" align="center">
      <tr>
        <th width="27%" scope="col">Organisation</th>
        <th width="12%" scope="col">Position</th>
        <th width="17%" scope="col">Start Date</th>
        <th width="17%" scope="col">End Date</th>
        <th width="17%" scope="col">Reason For Leaving </th>
        </tr>
      <tr>
        <?php do{ ?>
        <td><?php echo $row_4['Organisation'] ?></td>
        <td><?php echo $row_4['Position'] ?></td>
        <td><?php echo $row_4['DateStart'] ?></td>
        <td><?php echo $row_4['DateEnd'] ?></td>
        <td><?php echo $row_4['Reason'] ?></td>
        </tr>
      <?php } while($row_4=mysql_fetch_assoc($q_sc4)) ;?>
  </table>
    
    <h2>DISCIPLINE </h2>
    <table width="90%" border="1" align="center">
      <tr>
        <th width="27%" scope="col">Activity</th>
        <th width="12%" scope="col">Level</th>
        <th width="17%" scope="col">Date Commited</th>
        <th width="25%" scope="col">Action Taken</th>
        <th width="19%" scope="col">Comment</th>
        </tr>
      <tr> <?php do{ ?>
        <td><?php echo $row_5['dis_activity'] ?></td>
        <td><?php echo $row_5['dis_level'] ?></td>
        <td><?php echo $row_5['dis_date'] ?></td>
        <td><?php echo $row_5['dis_action'] ?></td>
        <td><?php echo $row_5['dis_comment'] ?></td>
        </tr><?php } while($row_5=mysql_fetch_assoc($q_sc5)) ;?>
    </table>
    <h2>TRAINING </h2>
    <table width="90%" border="1" align="center">
      <tr>
        <th width="27%" scope="col">Training Name</th>
        <th width="12%" scope="col">Date</th>
        <th width="17%" scope="col">Venue</th>
        <th width="25%" scope="col">Provider</th>
        <th width="19%" scope="col">Attendance</th>
      </tr>
      <tr>
        <?php do{ ?>
        <td><?php echo $row_6['TrainingName'] ?></td>
        <td><?php echo $row_6['Training_Date'] ?></td>
        <td><?php echo $row_6['Venue'] ?></td>
        <td><?php echo $row_6['Provider'] ?></td>
        <td><?php echo $row_6['Attendance'] ?></td>
      </tr>
      <?php } while($row_6=mysql_fetch_assoc($q_sc6)) ;?>
  </table>
   
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td></tr></table>
