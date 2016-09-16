<?php include_once('inc_head.php') ?>
<?php $studentID=$userid; include('../output/x_student_info_query.php') ;?>	
  <!-- Work page begins ======================================================================= -->

<div class="sixteen columns">
<div class="eight columns alpha">
  <h3>PERSONAL INFORMATION</h3>
  <table width="100%" border="0" class="left">
    <tr>
      <th width="36%" align="left" class="left" scope="row"><strong>BIRTHDAY</strong></th>
      <th width="9%">:</th>
      <td width="55%" align="left"><?php $dob=$row['DOB'];  
 if($dob){echo $newDate = date("d-m-Y", strtotime($dob));}?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>IC</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['ICNO']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>PASSPORT</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['Passport']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>MARITAL STATUS</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['married']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>GENDER</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['Gender']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>RACE</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['race']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>NATIONALITY</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['Nationality']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>RELIGION</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['Religion']; ?></td>
    </tr>
  </table>
  <h3><br />
    PARENT'S INFORMATION</h3>
  <h4>FATHER<br />
  </h4>
  <table width="100%" border="0" class="left">
    <tr>
    <th width="37%" align="left" class="left" scope="row"><strong>NAME</strong></th>
    <th width="9%">:</th>
    <td width="54%" align="left" class="left" scope="row"><?php echo $row['f_name']?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>IC</strong></th>
    <th>:</th>
    <td align="left" class="left" scope="row"><?php echo $row['f_ic']?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>TEL</strong></th>
    <th>:</th>
    <td align="left" class="left" scope="row"><?php echo $row['f_tel']?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>OCCUPATION</strong></th>
    <th>:</th>
    <td align="left" class="left" scope="row"><?php echo $row['f1_job']?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>ADDRESS</strong></th>
    <th>:</th>
    <td align="left" class="left" scope="row"><?php echo $row['f_address'];?></td>
  </tr>
</table>
  <h4><br />
    MOTHER<br />
  </h4>
  <table width="100%" border="0" class="left">
    <tr>
    <th width="37%" align="left" class="left" scope="row"><strong>NAME</strong></th>
    <th width="7%">:</th>
    <td width="56%" align="left"><?php echo $row['m_name']?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>IC</strong></th>
    <th>:</th>
    <td align="left"><?php echo $row['m_ic']?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>TEL</strong></th>
    <th>:</th>
    <td align="left"><?php echo $row['m_tel']?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>OCCUPATION</strong></th>
    <th>:</th>
    <td align="left"><?php echo $row['f2_job']?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>ADDRESS</strong></th>
    <th class="left" scope="row">:</th>
    <td align="left"><?php echo $row['m_address'];?></td>
  </tr>
</table>
<h3><br />
  NEXT OF KIN</h3>
<table width="100%" border="0" class="left">
  <tr>
    <th width="36%" align="left" class="left" scope="row"><strong>1# Kin Name</strong></th>
    <th width="9%">:</th>
    <td width="55%" align="left"><?php if($row['f1_name']){ echo $row['f1_name']. ',<br>('; echo $row['f1_relation']. '),<br>';echo $row['f1_tel'] ;}?></td>
  </tr>
  <tr>
    <th align="left" class="left" scope="row"><strong>2# Kin Name</strong></th>
    <th>:</th>
    <td align="left"><?php if($row['f2_name']){ echo $row['f2_name']. ',<br>('; echo $row['f2_relation']. '),<br>';echo $row['f2_tel'] ;}?></td>
  </tr>
</table>
</div>
<div class="eight columns omega">
  <h3>CAMPUS INFORMATION</h3>
  <table width="100%" border="0" class="left">
    <tr>
      <th width="36%" align="left" class="left" scope="row"><strong>PROGRAM</strong></th>
      <th width="9%">:</th>
      <td width="55%" align="left"><?php echo $row3['programname']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>BATCH</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['BatchID']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>CLASS</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row0['classname']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>DATE JOIN</strong></th>
      <th>:</th>
      <td align="left"><?php $DateJoin=$row['DateJoin'];  
 if($DateJoin){echo $newDate2 = date("d-m-Y", strtotime($DateJoin));}?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>TYPE</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['Type']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>STATUS</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['Status']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>SPONSOR</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['Sponsor']; ?></td>
    </tr>
  </table>
  <h3><br />
    MEDICAL INFORMATION</h3>
  <table width="100%" border="0" class="left">
    <tr>
      <th width="36%" align="left" class="left" scope="row"><strong>DISABILITY</strong></th>
      <th width="9%">:</th>
      <td width="55%" align="left"><?php echo $row['Disability'];?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>BLOOD TYPE</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['blood']; ?></td>
    </tr>
    <tr>
      <th align="left" class="left" scope="row"><strong>MEDICAL CONDITION</strong></th>
      <th>:</th>
      <td align="left"><?php echo $row['MedicalCondition']; ?></td>
    </tr>
  </table>
  
  <h3><br />
    ACADEMIC QUALIFICATION</h3>
  <br />
  <table width="60%" border="1" align="center">
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Grade</th>
    </tr>
    <tr>
      <?php do{ ?>
      <td><?php echo $row_1['sc_subject'] ?></td>
      <td><?php echo $row_1['sc_grade'] ;?></td>
    </tr>
    <?php } while($row_1=mysql_fetch_assoc($q_sc)) ;?>
  </table>
  <h3><br />
    OTHER QUALIFICATION</h3>
  <table width="385" border="1" align="center">
    <tr>
      <th width="167" scope="col">Institution</th>
      <th width="89" scope="col">Major</th>
      <th width="107" scope="col">Result</th>
    </tr>
    <tr>
      <?php do{ ?>
      <td><?php echo $row_2['qua_edu'] .'- '.$row_2['qua_ins'] .'-'. $row_2['qua_year'] ?></td>
      <td><?php echo $row_2['qua_major'] ;?></td>
      <td><?php echo $row_2['qua_grade'] ;?></td>
    </tr>
    <?php } while($row_2=mysql_fetch_assoc($q_sc2)) ;?>
  </table>
</div>
 <br class="clear" />
</div>

<div class="sixteen columns">
  <h3><br />
    EXTRACURRICULAR ACTIVITY</h3>
  <table width="90%" border="1" align="center" class="table2">
    <tr>
      <th width="24%" scope="col">Activity</th>
      <th width="22%" scope="col">Level</th>
      <th width="12%" scope="col">Achievement</th>
      <th width="22%" scope="col">Start Date</th>
      <th width="20%" scope="col">End Date</th>
    </tr>
    <tr>
      <?php do{ ?>
      <td><?php echo $row_3['ex_activity'] ?></td>
      <td><?php echo $row_3['ex_level'] ?></td>
      <td><?php echo $row_3['ex_ach'] ?></td>
      <td><?php echo $row_3['ex_start'] ?></td>
      <td><?php echo $row_3['ex_end'] ?></td>
    </tr>
    <?php } while($row_3=mysql_fetch_assoc($q_sc3)) ;?>
  </table>
  <h3><br />
    DISCIPLINE RECORD</h3>
  <table width="90%" border="1" align="center" class="table2">
    <tr>
      <th width="27%" scope="col">Activity</th>
      <th width="12%" scope="col">Level</th>
      <th width="17%" scope="col">Date Commited</th>
      <th width="25%" scope="col">Action Taken</th>
      <th width="19%" scope="col">Comment</th>
    </tr>
    <tr>
      <?php do{ ?>
      <td><?php echo $row_4['dis_activity'] ?></td>
      <td><?php echo $row_4['dis_level'] ?></td>
      <td><?php echo $row_4['dis_date'] ?></td>
      <td><?php echo $row_4['dis_action'] ?></td>
      <td><?php echo $row_4['dis_comment'] ?></td>
    </tr>
    <?php } while($row_4=mysql_fetch_assoc($q_sc4)) ;?>
  </table>
  <h3><br />
    TRAINING RECORD</h3>
  <table width="90%" border="1" align="center" class="table2">
    <tr>
      <th width="27%" scope="col">Training Name</th>
      <th width="12%" scope="col">Date</th>
      <th width="17%" scope="col">Venue</th>
      <th width="25%" scope="col">Provider</th>
      <th width="19%" scope="col">Attendance</th>
    </tr>
    <tr>
      <?php do{ ?>
      <td><?php echo $row_6['t_name'] ?></td>
      <td><?php echo $row_6['t_date'] ?></td>
      <td><?php echo $row_6['t_venue'] ?></td>
      <td><?php echo $row_6['t_provider'] ?></td>
      <td><?php echo $row_6['t_attend'] ?></td>
    </tr>
    <?php } while($row_6=mysql_fetch_assoc($q_sc6)) ;?>
  </table>
  <h3><br />
    HOSTEL  RECORD</h3>
  <table width="90%" border="1" align="center" class="table2">
    <tr>
      <th width="27%" scope="col">Hostel</th>
      <th width="12%" scope="col">Room</th>
      <th width="17%" scope="col">Check-in Date</th>
      <th width="19%" scope="col">Item</th>
    </tr>
    <tr>
      <?php do{ ?>
      <td><?php echo $row_7['hostel'] ?></td>
      <td><?php echo $row_7['room'] ?></td>
      <td><?php echo $row_7['date_in'] ?></td>
      <td><?php echo $row_7['item'] ?></td>
    </tr>
    <?php }while($row_7=mysql_fetch_assoc($q_sc7)) ;?>
  </table>
  <p></p>
  <h3>ON THE JOB TRAINING</h3>
  <table width="90%" border="1" align="center" class="table2">
    <tr>
      <th width="27%" scope="col">Organization Name</th>
      <th width="12%" scope="col">Address</th>
      <th width="17%" scope="col">Contact</th>
      <th width="17%" scope="col">Organization Supervisor</th>
      <th width="17%" scope="col">Academic Supervisor</th>
    </tr>
    <tr>
      <?php do{ ?>
      <td><?php echo $row_11['organization_name'] ?></td>
      <td><?php echo $row_11['address'] ?>, <?php echo $row_11['state'] ?></td>
      <td>Tel: <?php echo $row_11['tel'] ?>,<br />
        Fax: <?php echo $row_11['fax'] ?></td>
      <td><?php echo $row_11['organization_supervisor'] ?></td>
      <td><?php echo $row_11['staffname'] ?></td>
    </tr>
    <?php } while($row_11=mysql_fetch_assoc($q_sc11)) ;?>
  </table>
  <br class="clear" />
</div>
<?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>