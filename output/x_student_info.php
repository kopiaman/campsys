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
   
      </div>
   </th>
  </tr>
</table>

<div style="page-break-before:auto"></div>
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
    <table width="90%" border="1" align="center" cellpadding="5">
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
    <table width="90%" border="1" align="center" cellpadding="5">
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
    <h2>HOSTEL  RECORD</h2>
    <table width="90%" border="1" align="center" cellpadding="5">
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
    <h2>ON THE JOB TRAINING</h2>
    <table width="90%" border="1"align="center" cellpadding="5">
      <tr>
        <th width="18%" scope="col">Organization </th>
        <th width="25%" scope="col">Address</th>
        <th width="19%" scope="col">Contact</th>
        <th width="19%" scope="col">Duration</th>
        <th width="19%" scope="col">Remarks</th>
      </tr>
      <tr>
        <?php do{ ?>
        <td><?php echo $row_11['name'] ?></td>
        <td><?php echo $row_11['address'] ?>, <?php echo $row_11['state'] ?></td>
        <td>Tel: <?php echo $row_11['tel'] ?>,<br /> Fax: <?php echo $row_11['fax'] ?></td>
        <td><?php echo $row_11['duration'] ?> : <br />
        <?php if($row_11['start_date']){ ?>
		<?php echo dates($row_11['start_date']).' to '.dates($row_11['end_date'])  ?>
        <?php };?>
         </td>
        <td><?php echo $row_11['remarks'] ?></td>
      </tr>
      <?php } while($row_11=mysql_fetch_assoc($q_sc11)) ;?>
  </table>
    <h2>BILL STATEMENT</h2>

    <table width="90%" border="1"align="center" cellpadding="5">
      <tr>
        <th width="27%" scope="col">Date</th>
        <th width="73%" scope="col">Statement</th>
        </tr>
      <tr>
      
     
     <?php
	do{ 
	 $valueBill = $row_9['statement'];	  
	
	 $filesArrayBill = json_decode($valueBill);
	 $pathBill = $filesArrayBill[0]->name;
	 $nameBill = $filesArrayBill[0]->usrName;
	 if($valueBill){
	 $urlBill='http://www.mataaviation.com/output/'.$pathBill;
	 }
	?>
        <td align="center"><?php echo $row_9['dates'] ?></td>
        <td> <a target="_new" href="<?php echo $urlBill; ?>"><?php echo $urlBill; ?></a></td>
        </tr>
      <?php } while($row_9=mysql_fetch_array($q_sc9)) ;?>
      
     
    </table>
    <p>&nbsp;</p>
    <br /></td></tr></table>
    
    <div style="page-break-before:auto"></div>
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
  <table width="90%" border="0" align="center">
    <tr>
      <td height="104"><strong><br />
        LEGEND:</strong><br />
        <table width="90%" border="0">
          <tr>
            <td width="36%">AP- ABSENT WITH PERMISSION</td>
            <td width="64%">AX- ABSENT WITHOUT PERMISSION</td>
          </tr>
          <tr>
            <td>XE- NOT ELIGIBLE</td>
            <td>RC- RECOURSE</td>
          </tr>
        </table></td>
    </tr>
</table>
  <p>&nbsp; </p>
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
  <h2>&nbsp;</h2></td></tr></table>
  
  
<?php //if moe student it will shows 
if($row['Intake_Category']=='ED'){; 
?>  
<div style="page-break-before:auto"></div>
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
           <th>CGPA</th>
        </tr>

        <tr>
          <td align="center"><?php echo $c1a=$row_moe1['c1'];$c1a= pointvalue($c1a);?></td>
          <td align="center"><?php echo $c1b=$row_moe1['c2'];$c1b= pointvalue($c1b);?></td>
          <td align="center"><?php echo $c1c=$row_moe1['c3'];$c1c= pointvalue($c1c);?></td>
          <td align="center"><?php echo $c1d=$row_moe1['c4'];$c1d= pointvalue($c1d);?></td>
          <td align="center"><?php echo $c1e=$row_moe1['c5'];$c1e= pointvalue($c1e);?></td>
          <td align="center"><?php echo $c1f=$row_moe1['c6'];$c1f= pointvalue($c1f);?></td>
          <td align="center"><?php echo $c1g=$row_moe1['c7'];$c1g= pointvalue($c1g);?></td>
          <td align="center"><?php echo $c1h=$row_moe1['c8'];$c1h= pointvalue($c1h);?></td>
          <td align="center"><?php echo $c1i=$row_moe1['c9'];$c1i= pointvalue($c1i);?></td>
          <td align="center"><?php echo $c1j=$row_moe1['c10'];$c1j= pointvalue($c1j);?></td>
          <td align="center"><?php echo $c1k=$row_moe1['c11'];$c1k= pointvalue($c1k);?></td>
          <td align="center"><?php echo $c1l=$row_moe1['c12'];$c1l= pointvalue($c1l);?></td>
          <td align="center"><?php  $c1cgpa=$c1a+$c1b+$c1c+$c1d+$c1e+$c1f+$c1g+$c1h+$c1i+$c1j+$c1k+$c1l; echo number_format($c1cgpa/11,2); ?></td>
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
           <th>CGPA</th>
        </tr>
        <tr>
     <td align="center"><?php echo $c2a=$row_moe2['c1'];$c2a= pointvalue($c2a);?></td>
          <td align="center"><?php echo $c2b=$row_moe2['c2'];$c2b= pointvalue($c2b);?></td>
          <td align="center"><?php echo $c2c=$row_moe2['c3'];$c2c= pointvalue($c2c);?></td>
          <td align="center"><?php echo $c2d=$row_moe2['c4'];$c2d= pointvalue($c2d);?></td>
          <td align="center"><?php echo $c2e=$row_moe2['c5'];$c2e= pointvalue($c2e);?></td>
          <td align="center"><?php echo $c2f=$row_moe2['c6'];$c2f= pointvalue($c2f);?></td>
          <td align="center"><?php echo $c2g=$row_moe2['c7'];$c2g= pointvalue($c2g);?></td>
          <td align="center"><?php echo $c2h=$row_moe2['c8'];$c2h= pointvalue($c2h);?></td>
          <td align="center"><?php echo $c2i=$row_moe2['c9'];$c2i= pointvalue($c2i);?></td>
          <td align="center"><?php echo $c2j=$row_moe2['c10'];$c2j= pointvalue($c2j);?></td>
          <td align="center"><?php echo $c2k=$row_moe2['c11'];$c2k= pointvalue($c2k);?></td>
          <td align="center"><?php  $c2cgpa=$c2a+$c2b+$c2c+$c2d+$c2e+$c2f+$c2g+$c2h+$c2i+$c2j+$c2k; echo number_format($c2cgpa/10,2); ?></td>
   
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
                <th>CGPA	</th>
        </tr>
        <tr>
          <td align="center"><?php echo $c3a=$row_moe3['c1'];$c3a= pointvalue($c3a);?></td>
          <td align="center"><?php echo $c3b=$row_moe3['c2'];$c3b= pointvalue($c3b);?></td>
          <td align="center"><?php echo $c3c=$row_moe3['c3'];$c3c= pointvalue($c3c);?></td>
          <td align="center"><?php echo $c3d=$row_moe3['c4'];$c3d= pointvalue($c3d);?></td>
          <td align="center"><?php echo $c3e=$row_moe3['c5'];$c3e= pointvalue($c3e);?></td>
          <td align="center"><?php echo $c3f=$row_moe3['c6'];$c3f= pointvalue($c3f);?></td>
          <td align="center"><?php echo $c3g=$row_moe3['c7'];$c3g= pointvalue($c3g);?></td>
          <td align="center"><?php echo $c3h=$row_moe3['c8'];$c3h= pointvalue($c3h);?></td>
          <td align="center"><?php echo $c3i=$row_moe3['c9'];$c3i= pointvalue($c3i);?></td>
          <td align="center"><?php echo $c3j=$row_moe3['c10'];$c3j= pointvalue($c3j);?></td>
          <td align="center"><?php echo $c3k=$row_moe3['c11'];$c3k= pointvalue($c3k);?></td>
          <td align="center"><?php  $c3cgpa=$c3a+$c3b+$c3c+$c3d+$c3e+$c3f+$c3g+$c3h+$c3i+$c3j+$c3k; echo number_format($c3cgpa/10,2); ?></td>
   
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
             <th>CGPA	</th>
        </tr>
        <tr>
  		  <td align="center"><?php echo $c4a=$row_moe4['c1'];$c4a= pointvalue($c4a);?></td>
          <td align="center"><?php echo $c4b=$row_moe4['c2'];$c4b= pointvalue($c4b);?></td>
          <td align="center"><?php echo $c4c=$row_moe4['c3'];$c4c= pointvalue($c4c);?></td>
          <td align="center"><?php echo $c4d=$row_moe4['c4'];$c4d= pointvalue($c4d);?></td>
          <td align="center"><?php echo $c4e=$row_moe4['c5'];$c4e= pointvalue($c4e);?></td>
          <td align="center"><?php echo $c4f=$row_moe4['c6'];$c4f= pointvalue($c4f);?></td>
          <td align="center"><?php echo $c4g=$row_moe4['c7'];$c4g= pointvalue($c4g);?></td>
          <td align="center"><?php echo $c4h=$row_moe4['c8'];$c4h= pointvalue($c4h);?></td>
          <td align="center"><?php echo $c4i=$row_moe4['c9'];$c4i= pointvalue($c4i);?></td>
          <td align="center"><?php echo $c4j=$row_moe4['c10'];$c4j= pointvalue($c4j);?></td>
          <td align="center"><?php echo $c4k=$row_moe4['c11'];$c4k= pointvalue($c4k);?></td>
          <td align="center"><?php  $c4cgpa=$c4a+$c4b+$c4c+$c4d+$c4e+$c4f+$c4g+$c4h+$c4i+$c4j+$c4k; echo number_format($c4cgpa/10,2); ?></td>
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
           <th>CGPA</th>
        </tr>
        <tr>
          <td align="center"><?php echo $c5a=$row_moe5['c1'];$c5a= pointvalue($c5a);?></td>
          <td align="center"><?php echo $c5b=$row_moe5['c2'];$c5b= pointvalue($c5b);?></td>
          <td align="center"><?php echo $c5c=$row_moe5['c3'];$c5c= pointvalue($c5c);?></td>
          <td align="center"><?php echo $c5d=$row_moe5['c4'];$c5d= pointvalue($c5d);?></td>
          <td align="center"><?php echo $c5e=$row_moe5['c5'];$c5e= pointvalue($c5e);?></td>
          <td align="center"><?php echo $c5f=$row_moe5['c6'];$c5f= pointvalue($c5f);?></td>
          <td align="center"><?php echo $c5g=$row_moe5['c7'];$c5g= pointvalue($c5g);?></td>
          <td align="center"><?php echo $c5h=$row_moe5['c8'];$c5h= pointvalue($c5h);?></td>
          <td align="center"><?php echo $c5i=$row_moe5['c9'];$c5i= pointvalue($c5i);?></td>
          <td align="center"><?php echo $c5j=$row_moe5['c10'];$c5j= pointvalue($c5j);?></td>
          <td align="center"><?php echo $c5k=$row_moe5['c11'];$c5k= pointvalue($c5k);?></td>
          <td align="center"><?php  $c5cgpa=$c5a+$c5b+$c5c+$c5d+$c5e+$c5f+$c5g+$c5h+$c5i+$c5j+$c5k; echo number_format($c5cgpa/10,2); ?></td>
        </tr>
      </table>
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
          <th>PROP</th><th>CGPA</th>
        </tr>
        <tr>
 		  <td align="center"><?php echo $c6a=$row_moe6['c1'];$c6a= pointvalue($c6a);?></td>
          <td align="center"><?php echo $c6b=$row_moe6['c2'];$c6b= pointvalue($c6b);?></td>
          <td align="center"><?php echo $c6c=$row_moe6['c3'];$c6c= pointvalue($c6c);?></td>
          <td align="center"><?php echo $c6d=$row_moe6['c4'];$c6d= pointvalue($c6d);?></td>
          <td align="center"><?php echo $c6e=$row_moe6['c5'];$c6e= pointvalue($c6e);?></td>
          <td align="center"><?php echo $c6f=$row_moe6['c6'];$c6f= pointvalue($c6f);?></td>
          <td align="center"><?php echo $c6g=$row_moe6['c7'];$c6g= pointvalue($c6g);?></td>
          <td align="center"><?php echo $c6h=$row_moe6['c8'];$c6h= pointvalue($c6h);?></td>
          <td align="center"><?php echo $c6i=$row_moe6['c9'];$c6i= pointvalue($c6i);?></td>
          <td align="center"><?php echo $c6j=$row_moe6['c10'];$c6j= pointvalue($c6j);?></td>
          <td align="center"><?php echo $c6k=$row_moe6['c11'];$c6k= pointvalue($c6k);?></td>
          <td align="center"><?php  $c6cgpa=$c6a+$c6b+$c6c+$c6d+$c6e+$c6f+$c6g+$c6h+$c6i+$c6j+$c6k; echo number_format($c6cgpa/10,2); ?></td>
        </tr>
      </table>
      <p>&nbsp;</p>
<p>&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
<?php }; ?>