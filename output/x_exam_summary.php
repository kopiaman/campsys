<?php
/**
 * Exam Summary Report
 *
 * Author: Zon Hisham Z.Abidin <zonhisham@gmail.com>
 * 13/5/2013
 *
 */

require_once("include/dbcommon.php");
require_once("x_config.php");

#$intake = $program = $batch = NULL;
$program = $batch = NULL;

#$intake   = isset($_GET["intake"]) && is_numeric($_GET["intake"]) ? $_GET["intake"] : NULL;
$program  = isset($_GET["program"]) && is_numeric($_GET["program"]) ? $_GET["program"] : NULL;
$batch    = isset($_GET["batch"]) && is_numeric($_GET["batch"]) ? $_GET["batch"] : NULL;
$preview  = isset($_GET['preview']) && $_GET['preview'] ? TRUE : FALSE;

if (isset($_GET['generate']) && $_GET['generate'] ) {
  $preview = FALSE;
  $generate = TRUE;
}
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Examination Result Slip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php require_once('x_external_header.php') ?>
    <script language="JavaScript">
      function autoSubmit() {
        var formObject = document.forms['examsummary'];
        formObject.submit();
      }
    </script>

    <style>
      @media all { .page-break { display: none; }
      @media print { .page-break { display: block; page-break-before: always; } }
      body { padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */ }
    </style>
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/favicon.ico">
  </head>

  <body>
    <div class=container>
      <?php
      $header = common_slip_header(0,0,0,"EXAMINATION SUMMARY","","");
      print $header;

      if (!$generate) { //tak perlu nak output form
      ?>
      <div class="row">
        <div class="span12">
          <form name="examsummary" class="well">
            <div class="row">
              <div class="span5">
<!--
                <label>Intake:</label>
                <select name="intake">
                  <option value="0">Please select</option>
                  <?php
                    $sqlintake = "select intake from student_info group by intake";
                    $result = mysql_query($sqlintake) or die(mysql_error());
                    while ($row = mysql_fetch_array($result)) {
                      echo '<option value="' . $row['intake'] . '"';
                      if ($row['intake'] == $intake){
                        echo " selected=selected";
                      }
                      echo '>' . $row['intake'] . "</option>\n";
                    }
                  ?>
                </select>
-->
                <label>Program:</label>
                <select name="program" >
                  <option value="0">Please select</option>
                  <?php
                    $sqlProgram = "select id,name from program order by name";
                    $resultProgram = mysql_query($sqlProgram) or die(mysql_error());
                    while($row = mysql_fetch_array($resultProgram)) {
                      $programid   = $row['id'];
                      $programname = $row['name'];
                      echo '<option value="' . $programid . '"';
                      if($program == $programid) {
                        echo " selected=selected";
                      }
                      echo '>' . $programname . "</option>\n";
                    }
                  ?>
                </select>
              </div>

              <div class="span5">
                <label>Batch:</label>
                <select name="batch" >
                  <option value="0">Please select</option>
                  <?php
                    $sqlbatch = "select BatchID from student_info group by BatchID";
                    $resultbatch = mysql_query($sqlbatch) or die(mysql_error());
                    while($row = mysql_fetch_array($resultbatch)) {
                      $batchid   = $row['BatchID'];
                      echo '<option value="' . $batchid . '"';
                      if($batch == $batchid) {
                        echo " selected=selected";
                      }
                      echo '>' . $batchid . '</option>\n';
                    }
                  ?>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="span4 offset8">
                <input type="submit" name="preview" class="btn btn-primary" value="Preview"/>
                <input type="submit" name="generate" class="btn" value="Generate & Print"/>
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php
      }





      if ($preview || $generate) {
        if (isset($program)) {
          $result = mysql_query("SELECT name FROM program WHERE id=$program");
          if (!$result) {
            echo 'Could not run query: ' . mysql_error();
            exit;
          }
          $row = mysql_fetch_row($result);
          $pname = $row[0];
        }


        #$sql    = "select studentid from student_info where intake=$intake and dipid=$program and batchid=$batch order by class";
        $sql     = "select studentid from student_info where dipid=$program and batchid=$batch order by class";
        $result  = mysql_query($sql) or die(mysql_error());
        $studnum = mysql_num_rows($result);
        if ($studnum == 0) {
          die("<font color=red>No records found</font>");
        }
        else {
          $i = 0;
          while ($row = mysql_fetch_array($result)) {
            $stud[$i]['studentid'] = $row['studentid'];
            $i++;
          }
        }

        /*
         * For each studentid
         * get exam status for each module taken for that particular semester
         * accumulate that result (either pass or fail) into array $module
         *
         */ 
        $module = array();
        for ($j=0; $j < $studnum; $j++) {
          $sql = "select semester from student_course where programid=$program and studentid=".$stud[$j]['studentid']." group by semester";
          $result  = mysql_query($sql) or die(mysql_error());
          $hasData = mysql_num_rows($result);
          if ($hasData == 0) { #probably no marking has been done for this studentid
            die("<font color=red>No records found</font>");
          }

          while ($row = mysql_fetch_array($result)) {
            $index = 0;
            $semester = $row['semester'];
            
            $sqlmod = "select student_course.courseid,
                              student_course.exam_status,
                              course.name 
                              from student_course 
                              inner join course on student_course.courseid=course.courseid 
                              where programid=$program 
                              and semester=$semester 
                              and studentid=".$stud[$j]['studentid'] . " order by courseid";
            $resultmod = mysql_query($sqlmod) or die(mysql_error());

            while ($rowmod = mysql_fetch_array($resultmod)) {
              $code      = $rowmod['courseid'];
              $name      = $rowmod['name'];
              $xm_status = $rowmod['exam_status'];

              $module[$semester][$index]['code'] = $code;
              $module[$semester][$index]['name'] = $name;

              if($xm_status == 'PASS' or $xm_status == 'GOOD' or $xm_status == 'EXCELLENT'){
                $module[$semester][$index]['pass']++;
              }
              elseif($xm_status == 'FAILED') {
                $module[$semester][$index]['fail']++;
              }
              $index++;
            }
          }
        }

        #print "<pre>";
        #print_r($module);
        #print "</pre>";

?>
      <h3><?php echo $pname ?></h3>
<!--
      <h3>INTAKE: <?php print $intake . "&nbsp;&nbsp;&nbsp;&nbsp; BATCH: $batch<br><br>" ?></h3>
-->
      <h3><?php print "BATCH: $batch<br><br>" ?></h3>
<?php
        for($sem=1; $sem<=$semester; $sem++) {
          $moduleTaken = sizeof($module[$sem]); //number of modules taken by this student($stud[$j]['studentid']) for this $sem

?>
      <table class="table table-striped table-bordered table-condensed">
        <tr>
          <td width=100% height=30px colspan=3><div valign=middle><h3>PERFORMANCE FOR SEMESTER: <?php echo $sem ?></h3></div></td>
        </tr>
        <tr>
          <td width=50%>&nbsp;</td>
          <th width=25%><div align=center>PASSES</div></th>
          <th width=25%><div align=center>FAILURES</dvi></th>
        </tr>
<?php
          for($x=0; $x<$moduleTaken; $x++) {
            $modname = $module[$sem][$x]['name'];
            if (!isset($module[$sem][$x]['pass'])) {
              $module[$sem][$x]['pass'] = 0;
            }
            if (!isset($module[$sem][$x]['fail'])) {
              $module[$sem][$x]['fail'] = 0;
            }

            if ($module[$sem][$x]['pass'] != 0 and $module[$sem][$x]['fail'] != 0) {
              $totalStudent =  $module[$sem][$x]['pass'] + $module[$sem][$x]['fail'];
?>
        <tr>
          <td><?php print $x+1 . ". $modname" ?></td>
          <td><?php echo '<div align=center>' . $module[$sem][$x]['pass'] . ' (' . number_format(($module[$sem][$x]['pass']/$totalStudent) * 100,2) . '%)</div>' ?></td>
          <td><?php echo '<div align=center>' . $module[$sem][$x]['fail'] . ' (' . number_format(($module[$sem][$x]['fail']/$totalStudent) * 100,2) . '%)</div>' ?></td>
        </tr>
<?php
            }
          }
?>
      </table>
<?php
        }
        

        #print "<pre>";
        #print_r($module);
        #print "</pre>";


        if ($generate) {
          ?>
          <script type="text/javascript">
            print();
          </script>
      <?php
        }
      } //if isset preview
      ?>
  
  </div> <!-- /container -->
  
  <!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="db/js/bootstrap.min.js"></script>
  <script src="db/js/jquery.min.js"></script>
  <script src="db/js/jquery-ui.min.js"></script>
  
  </body>
  </html>
