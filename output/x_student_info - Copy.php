<?php require_once('include/dbcommon.php');?>
<?php require_once('x_config.php');?>
<link href="db/css/basic.css" rel="stylesheet" type="text/css" />
<p>
<?php 
$studentID =$_GET['StudentID'];

//select campus  settingk;/
$sql_01 = "SELECT logo,acronyim,campus_name,address,city,postcode,state,faxNo,telephone FROM campus_setting WHERE id=1";
$q_01 = mysql_query($sql_01);
$row_q01=mysql_fetch_assoc($q_01);

require_once('x_student_info_query.php');
?>
</p>
<table width="98%" border="0" align="center" class="table_cover">
  <tr>
    <th valign="top" scope="col">
      <table width="500" border="0" align="center" class="left">
        <tr>
          <th width="24%" scope="row"><img src="images/<?php echo $row_q01['logo']?>"/></th>
          <td width="5%"><br />          </td>
          <td width="71%"><strong><?php echo $row_q01['campus_name']?></strong><br />
            <?php echo $row_q01['address']?>, <?php echo $row_q01['city']?>, <?php echo $row_q01['state']?><br />
Fax: <?php echo $row_q01['faxNo']?> Tel: <?php echo $row_q01['telephone']?></td></tr>
      </table>
      
      <div class="div_all">
      
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
  <img src="<?php echo $thumbnames?>"  />
        <h2><?php echo $row['Name']; ?><br />
          <?php echo $row['MatricNo']; ?>        </h2>
   
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
              <td><?php echo $row['MobileTelephone']; ?></td>
            </tr>
            <tr>
              <th width="36%" class="left" scope="row"><strong>HOME TEL:</strong></th>
              <th width="9%">:</th>
              <td width="55%"><?php  echo $row['HomeTelephone']; ?></td>
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
          <h2>NEXT OF KIN</h2>
          <table width="100%" border="0" class="left">
            <tr>
              <th width="36%" class="left" scope="row"><strong>1# Kin Name</strong></th>
              <th width="9%">:</th>
              <td width="55%" rowspan="2"><?php if($row['f1_name']){ echo $row['f1_name']. ',<br>('; echo $row['f1_relation']. '),<br>';echo $row['f1_tel'] ;}?></td>
            </tr>
            <tr>
              <th class="left" scope="row">&nbsp;</th>
              <th>&nbsp;</th>
            </tr>
            <tr>
              <th class="left" scope="row"><strong>2# Kin Name</strong></th>
              <th>:</th>
              <td><?php if($row['f2_name']){ echo $row['f2_name']. ',<br>('; echo $row['f2_relation']. '),<br>';echo $row['f2_tel'] ;}?></td>
            </tr>
          </table>
        </div>
     <div class="divright">
       <h2>CAMPUS INFORMATION</h2>
       <table width="100%" border="0" class="left">
         <tr>
           <th width="36%" class="left" scope="row"><strong>PROGRAM</strong></th>
           <th width="9%">:</th>
           <td width="55%"><?php echo $row3['programname']; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>BATCH</strong></th>
           <th>:</th>
           <td><?php echo $row['BatchID']; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>CLASS</strong></th>
           <th>:</th>
           <td><?php echo $row0['classname']; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>DATE JOIN</strong></th>
           <th>:</th>
           <td><?php $DateJoin=$row['DateJoin'];  
 if($DateJoin){echo $newDate2 = date("d-m-Y", strtotime($DateJoin));}?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>STATUS</strong></th>
           <th>:</th>
           <td><?php echo $row['Status']; ?></td>
         </tr>
         <tr>
           <th class="left" scope="row"><strong>SPONSOR</strong></th>
           <th>:</th>
           <td><?php echo $row['Sponsor']; ?></td>
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
       <p>&nbsp;</p>
         <h2>ACADEMIC QUALIFICATION</h2>
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
       <h2>OTHER QUALIFICATION</h2>
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
       <p>&nbsp;</p>
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
<table width="98%" border="0" align="center" class="table_cover"><tr>
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
    <h2>EXTRACURRICULAR ACTIVITY</h2>
    <table width="90%" border="1" align="center">
      <tr>
        <th width="24%" scope="col">Activity</th>
        <th width="22%" scope="col">Level</th>
        <th width="12%" scope="col">Achievement</th>
        <th width="22%" scope="col">Start Date</th>
        <th width="20%" scope="col">End Date</th>
      </tr>
      <tr>  <?php do{ ?>
        <td><?php echo $row_3['ex_activity'] ?></td>
        <td><?php echo $row_3['ex_level'] ?></td>
        <td><?php echo $row_3['ex_ach'] ?></td>
        <td><?php echo $row_3['ex_start'] ?></td>
        <td><?php echo $row_3['ex_end'] ?></td>
      </tr> <?php } while($row_3=mysql_fetch_assoc($q_sc3)) ;?>
    </table>
    <h2>DISCIPLINE RECORD</h2>
    <table width="90%" border="1" align="center">
      <tr>
        <th width="27%" scope="col">Activity</th>
        <th width="12%" scope="col">Level</th>
        <th width="17%" scope="col">Date Commited</th>
        <th width="25%" scope="col">Action Taken</th>
        <th width="19%" scope="col">Comment</th>
        </tr>
      <tr> <?php do{ ?>
        <td><?php echo $row_4['dis_activity'] ?></td>
        <td><?php echo $row_4['dis_level'] ?></td>
        <td><?php echo $row_4['dis_date'] ?></td>
        <td><?php echo $row_4['dis_action'] ?></td>
        <td><?php echo $row_4['dis_comment'] ?></td>
        </tr><?php } while($row_4=mysql_fetch_assoc($q_sc4)) ;?>
    </table>
    <h2>&nbsp;</h2>
    <h2>HOSTEL  RECORD</h2>
    <table width="90%" border="1" align="center">
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
    <h2>ON THE JOB TRAINING</h2>
    <table width="90%" border="1"align="center">
      <tr>
        <th width="27%" scope="col">Organization Name</th>
        <th width="12%" scope="col">Address</th>
        <th width="17%" scope="col">Contact</th>
        <th width="17%" scope="col">Duration</th>
        <th width="17%" scope="col">Remarks</th>
      </tr>
      <tr>
        <?php do{ ?>
        <td><?php echo $row_11['organization_name'] ?></td>
        <td><?php echo $row_11['address'] ?>, <?php echo $row_11['state'] ?></td>
        <td>Tel: <?php echo $row_11['tel'] ?>,<br /> Fax: <?php echo $row_11['fax'] ?></td>
        <td><?php echo $row_11['duration'] ?></td>
        <td><?php echo $row_11['remarks'] ?></td>
      </tr>
      <?php } while($row_11=mysql_fetch_assoc($q_sc11)) ;?>
  </table>
    <h2>&nbsp;</h2>
    <h2>&nbsp;</h2>
<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td></tr></table>
    
    <div style="page-break-before:always"></div>
<div class="height_divider"></div>
<table width="98%" border="0" align="center" class="table_cover"><tr>
  <td valign="top"><table width="500" border="0" align="center" class="left">
    <tr>
      <th width="24%" scope="row"><img src="images/<?php echo $row_q01['logo']?>"/></th>
      <td width="5%"><br /></td>
      <td width="71%"><strong><?php echo $row_q01['campus_name']?></strong><br />
        <?php echo $row_q01['address']?>, <?php echo $row_q01['city']?>, <?php echo $row_q01['state']?><br />
        Fax: <?php echo $row_q01['faxNo']?> Tel: <?php echo $row_q01['telephone']?></td>
    </tr>
  </table>
   
    <h2>MATA EXAM(Internal)</h2>
  <table width="91%" border="1" align="center" cellpadding="2" >
    <tr>
    <th width="17" align="center">#</th>
     <th width="339">Module</th>
     <th width="72">E1</th>
     <th width="64">E2</th>
     <th width="72">E3</th>
     <th width="56">E4</th>
      <th width="128">CGPA</th>
      </tr>
    <?php $e=1;do{  ?>
    <tr>
   <td align="center"><?php echo $e; ?></td>
    <td><?php echo $row_5['Name'];?></td>
    <td align="center"><?php echo $e1=$row_5['e1'];?></td>
    <td align="center"><?php echo $e2=$row_5['e2'];?></td>
    <td align="center"><?php echo $e3=$row_5['e3'];?></td>
    <td align="center"><?php echo $e4=$row_5['e4'];?></td>
      <td align="center"><?php echo cgpa_internal($e1,$e2,$e3,$e4)?></td>
      </tr>
    <?php $e++;
	 }while($row_5=mysql_fetch_array($q_sc5))?>
</table>
  <h2>DCA EXAM</h2>
  <table width="90%" border="1" align="center" cellpadding="2" class="table2">
    <tr>
      <th width="17" align="center">#</th>
      <th width="330">Course</th>
      <th width="144" align="center">Result</th>
      <th width="134" align="center">Remark</th>
      <th width="130" align="center">Date</th>
    </tr>
    <?php $d=1;do{  ?>
    <tr>
      <td align="center"><?php echo $d; ?></td>
      <td><?php echo $row_course_dca['coursename'];?></td>
      <td align="center"><?php echo $dcaStatus=$row_course_dca['Exam_Status'];?></td>
      <td align="center"><?php echo $dcaRemark=$row_course_dca['Exam_Remark'];?></td>
      <td align="center"><?php echo $dcaDate=$row_course_dca['Exam_Date'];?></td>
    </tr>
    <?php $d++;
	 }while($row_course_dca=mysql_fetch_assoc($query_course_dca)) ?>
  </table>
  <h2>&nbsp;</h2><p>&nbsp;</p></td></tr></table>
      <div style="page-break-before:always"></div>
<div class="height_divider"></div>
<table width="98%" border="0" align="center" class="table_cover">
  <tr>
    <td valign="top"><table width="500" border="0" align="center" class="left">
      <tr>
        <th width="24%" scope="row"><img src="images/<?php echo $row_q01['logo']?>"/></th>
        <td width="5%"><br /></td>
        <td width="71%"><strong><?php echo $row_q01['campus_name']?></strong><br />
          <?php echo $row_q01['address']?>, <?php echo $row_q01['city']?>, <?php echo $row_q01['state']?><br />
          Fax: <?php echo $row_q01['faxNo']?> Tel: <?php echo $row_q01['telephone']?></td>
      </tr>
    </table>
      <h2>MOE EXAM<br />
        <br />
        Semester 1
      </h2>
      <table width="90%" border="1" align="center" cellpadding="2" >
        <tr>
          <th>BM</th>
          <th>ENG</th>
          <th>MATH</th>
          <th>SCIE</th>
          <th>HIST</th>
          <th>ISLAM</th>
          <th>MORAL</th>
          <th>G.AVIA</th>
          <th>TOOLS</th>
          <th>SAFE1</th>
          <th>ELEC1</th>
          <th>COMP</th>
        </tr>

        <tr>
          <td align="center"><?php echo $row_moe1['c1'];?></td>
          <td align="center"><?php echo $row_moe1['c2'];?></td>
          <td align="center"><?php echo $row_moe1['c3'];?></td>
          <td align="center"><?php echo $row_moe1['c4'];?></td>
          <td align="center"><?php echo $row_moe1['c5'];?></td>
          <td align="center"><?php echo $row_moe1['c6'];?></td>
          <td align="center"><?php echo $row_moe1['c7'];?></td>
          <td align="center"><?php echo $row_moe1['c8'];?></td>
          <td align="center"><?php echo $row_moe1['c9'];?></td>
          <td align="center"><?php echo $row_moe1['c10'];?></td>
          <td align="center"><?php echo $row_moe1['c11'];?></td>
          <td align="center"><?php echo $row_moe1['c12'];?></td>
        </tr>
      </table>
      <h2>Semester 2      </h2>
      <table width="90%" border="1" align="center" cellpadding="2" >
        <tr>
          <th>BM</th>
          <th>ENG</th>
          <th>MATH</th>
          <th>SCIE</th>
          <th>HIST</th>
          <th>ISLAM</th>
          <th>MORAL</th>
          <th>T.DRAW</th>
          <th>WELD</th>
          <th>WSHOP</th>
          <th>ELEC2</th>
        </tr>
        <tr>
          <td align="center"><?php echo $row_moe2['c1'];?></td>
          <td align="center"><?php echo $row_moe2['c2'];?></td>
          <td align="center"><?php echo $row_moe2['c3'];?></td>
          <td align="center"><?php echo $row_moe2['c4'];?></td>
          <td align="center"><?php echo $row_moe2['c5'];?></td>
          <td align="center"><?php echo $row_moe2['c6'];?></td>
          <td align="center"><?php echo $row_moe2['c7'];?></td>
          <td align="center"><?php echo $row_moe2['c8'];?></td>
          <td align="center"><?php echo $row_moe2['c9'];?></td>
          <td align="center"><?php echo $row_moe2['c10'];?></td>
          <td align="center"><?php echo $row_moe2['c11'];?></td>
   
        </tr>
      </table>
      <h2>Semester 3</h2>
      <table width="90%" border="1" align="center" cellpadding="2" >
        <tr>
          <th>BM</th>
          <th>ENG</th>
          <th>MATH</th>
          <th>SCIE</th>
          <th>HIST</th>
          <th>ISLAM</th>
          <th>MORAL</th>
          <th>AIR.SYS	</th>
          <th>PROP	</th>
          <th>RES.EN</th>
          <th>ELECTRO	</th>
        </tr>
        <tr>
          <td align="center"><?php echo $row_moe3['c1'];?></td>
          <td align="center"><?php echo $row_moe3['c2'];?></td>
          <td align="center"><?php echo $row_moe3['c3'];?></td>
          <td align="center"><?php echo $row_moe3['c4'];?></td>
          <td align="center"><?php echo $row_moe3['c5'];?></td>
          <td align="center"><?php echo $row_moe3['c6'];?></td>
          <td align="center"><?php echo $row_moe3['c7'];?></td>
          <td align="center"><?php echo $row_moe3['c8'];?></td>
          <td align="center"><?php echo $row_moe3['c9'];?></td>
          <td align="center"><?php echo $row_moe3['c10'];?></td>
          <td align="center"><?php echo $row_moe3['c11'];?></td>
        </tr>
      </table>
      <h2>Semester 4</h2>
      <table width="90%" border="1" align="center" cellpadding="2" >
        <tr>
          <th>BM</th>
          <th>ENG</th>
          <th>MATH</th>
          <th>SCIE</th>
          <th>HIST</th>
          <th>ISLAM</th>
          <th>MORAL</th>
          <th>AIR.SYS2 </th>
          <th>AERO.DYN</th>
          <th>EN.TURB</th>
          <th>ELECTRO2 </th>
        </tr>
        <tr>
          <td align="center"><?php echo $row_moe4['c1'];?></td>
          <td align="center"><?php echo $row_moe4['c2'];?></td>
          <td align="center"><?php echo $row_moe4['c3'];?></td>
          <td align="center"><?php echo $row_moe4['c4'];?></td>
          <td align="center"><?php echo $row_moe4['c5'];?></td>
          <td align="center"><?php echo $row_moe4['c6'];?></td>
          <td align="center"><?php echo $row_moe4['c7'];?></td>
          <td align="center"><?php echo $row_moe4['c8'];?></td>
          <td align="center"><?php echo $row_moe4['c9'];?></td>
          <td align="center"><?php echo $row_moe4['c10'];?></td>
          <td align="center"><?php echo $row_moe4['c11'];?></td>
        </tr>
      </table>
      <h2>Semester 5</h2>
      <table width="90%" border="1" align="center" cellpadding="2" >
        <tr>
          <th>ENG</th>
          <th>MATH</th>
          <th>ISLAM</th>
          <th>MORAL</th>
          <th>FINANCE</th>
          <th>PROF</th>
          <th>PHYS</th>
          <th>ELEC</th>
          <th>DIGITAL</th>
          <th>MATERIAL</th>
          <th>PRACTICE</th>
        </tr>
        <tr>
          <td align="center"><?php echo $row_moe5['c1'];?></td>
          <td align="center"><?php echo $row_moe5['c2'];?></td>
          <td align="center"><?php echo $row_moe5['c3'];?></td>
          <td align="center"><?php echo $row_moe5['c4'];?></td>
          <td align="center"><?php echo $row_moe5['c5'];?></td>
          <td align="center"><?php echo $row_moe5['c6'];?></td>
          <td align="center"><?php echo $row_moe5['c7'];?></td>
          <td align="center"><?php echo $row_moe5['c8'];?></td>
          <td align="center"><?php echo $row_moe5['c9'];?></td>
          <td align="center"><?php echo $row_moe5['c10'];?></td>
          <td align="center"><?php echo $row_moe5['c11'];?></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <h2>Semester 6</h2>
      <table width="90%" border="1" align="center" cellpadding="2" >
        <tr>
          <th>ENG</th>
          <th>ISLAM</th>
          <th>MORAL</th>
          <th>ARAB</th>
          <th>PROF</th>
          <th>TURBINE</th>
          <th>LAW</th>
          <th>HUMAN</th>
          <th>BAS.AERO</th>
          <th>AERO.SYS</th>
          <th>PROP</th>
        </tr>
        <tr>
          <td align="center"><?php echo $row_moe6['c1'];?></td>
          <td align="center"><?php echo $row_moe6['c2'];?></td>
          <td align="center"><?php echo $row_moe6['c3'];?></td>
          <td align="center"><?php echo $row_moe6['c4'];?></td>
          <td align="center"><?php echo $row_moe6['c5'];?></td>
          <td align="center"><?php echo $row_moe6['c6'];?></td>
          <td align="center"><?php echo $row_moe6['c7'];?></td>
          <td align="center"><?php echo $row_moe6['c8'];?></td>
          <td align="center"><?php echo $row_moe6['c9'];?></td>
          <td align="center"><?php echo $row_moe6['c10'];?></td>
          <td align="center"><?php echo $row_moe6['c11'];?></td>
        </tr>
      </table>
      <p>&nbsp;</p>
<p>&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
