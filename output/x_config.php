<?php
/**
 * CAMPSYS common functions for external scripts
 *
 * Author: Zon Hisham Z.Abidin <zonhisham@gmail.com>
 * 14/4/2013
 *
 */

//require_once("include/dbcommon.php");
//$branch = 1;


/**
 * Get image info on logo and name of campus
 * Return result as array
 *
 */
function namelogo() {
  $sqllogo = "select logo,campus_name from campus_setting";
  $resultlogo = mysql_query($sqllogo) or die(mysql_error());
  while($rowlogo = mysql_fetch_array($resultlogo)) {
    $info['logo']       =  $rowlogo['logo'];
    $info['campusname'] = $rowlogo['campus_name'];
  }
  return($info);
}


/**
 * The \b in the pattern indicates a word boundary, so only the distinct
 * word "Pass" is matched, and not a word partial like "passing"
 * \i is case insensitive
 *
 */
function grepPass($str) {
  if (preg_match("/\bpass\b/i", $str) || preg_match("/\bgood\b/i", $str) || preg_match("/\bexcellent\b/i", $str)) {
    return TRUE;
  }
  else {
    return FALSE;
  }
}


function common_slip_header($break,$preview,$generate,$main_header,$top_right_txt1,$top_right_txt2) {
  $info = namelogo();

  $header =  "<table width=\"100%\" border=0>";
  if ($break == 1) {
    if ($preview == 1 && $generate == 0) {
    $header .= "<tr><td colspan=3>----------------------------------------------------------------------------------------------------------- page break -----------------------------------------------------------------------------------------------------------</td></tr>";
    }
  }

  if ($generate == 1) {
    $header .= "<tr><td>&nbsp;</td></tr>";
    $header .= "<tr><td>&nbsp;</td></tr>";
    $header .= "<tr><td>&nbsp;</td></tr>";
    $header .= "<tr><td>&nbsp;</td></tr>";
  }

  $header .= "
    <tr>
      <td width=\"50%\" rowspan=2><img src=\"images/".$info['logo']."\"></td>
      <td width=\"35%\">&nbsp;</td>
      <td width=\"15%\" valign=\"bottom\" align=left><b>$top_right_txt1</b></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width=\"10%\" valign=\"top\" align=left><b>$top_right_txt2</b></td>
    </tr>
  </table>

  <div align=center>
    <h2><font color=blue>MALAYSIAN AVIATION<br>TRAINING ACADEMY SDN. BHD. (691963-D)</font></h2>
  </div>

  <div align=center class=\"page-header\">
    <br>
    <h1>$main_header</h1>
  </div>";

  return $header;
}

function pointvalue($grade){
	
	switch ($grade)
	{
	case "T":$pointvalue=0.00;break;
	case "E":$pointvalue=0.00;break;
	case "D-": $pointvalue=1.00;break;
	case "D":$pointvalue=1.33; break;
	case "D+":$pointvalue=1.67;break;
	case "C":$pointvalue=2.00; break;  
	case "C+":$pointvalue=2.33; break;  
	case "B-":$pointvalue=2.67; break;  
	case "B":$pointvalue=3.00; break;  
	case "B+":$pointvalue=3.33; break;  
	case "A-":$pointvalue=3.67; break;  
	case "A":$pointvalue=4.00; break;  
	default: $pointvalue=0.00;
	}
$pointvalue=number_format($pointvalue,2);
return $pointvalue;
}

function pointstatus_academic($grade){
		switch ($grade)
	{
	case "T":$pointstatus='ABSENT';break;
	case "E":$pointstatus='FAIL';break;
	case "D-": $pointstatus='FAIL';break;
	case "D":$pointstatus='FAIL';break;
	case "D+":$pointstatus='FAIL';break;
	case "C":$pointstatus='PASS';break;
	case "C+":$pointstatus='PASS';break; 
	case "B-":$pointstatus='GOOD';break;  
	case "B":$pointstatus='GOOD';break;  
	case "B+":$pointstatus='GOOD';break;  
	case "A-":$pointstatus='EXCELLENT';break;  
	case "A":$pointstatus='EXCELLENT';break;  
	default: $pointstatus='-';
	}
return $pointstatus;
}

function pointstatus_voca($grade){
		switch ($grade)
	{
	case "T":$pointstatus='ABSENT';break;
	case "E":$pointstatus='NOT COMPETENCE';break;
	case "D-":$pointstatus='NOT COMPETENCE';break;
	case "D":$pointstatus='NOT COMPETENCE';break;
	case "D+":$pointstatus='NOT COMPETENCE';break;
	case "C":$pointstatus='NOT COMPETENCE';break;
	case "C+":$pointstatus='NOT COMPETENCE';break; 
	case "B-":$pointstatus='COMPETENCE';break;  
	case "B":$pointstatus='COMPETENCE';break;  
	case "B+":$pointstatus='COMPETENCE';break;  
	case "A-":$pointstatus='GOOD COMPETENCE';break;  
	case "A":$pointstatus='EXCELLENT COMPETENCE';break;  
	default: $pointstatus='-';
	}
return $pointstatus;
}


 
 function trim_text($input, $length, $ellipses = true, $strip_html = true) {
    //strip tags, if desired
    if ($strip_html) {$input = strip_tags($input);}
	//no need to trim, already shorter than trim length
    if (strlen($input) <= $length) { return $input; }
	 //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
	 //add ellipses (...)
    if ($ellipses) {$trimmed_text .= '..';}
    return $trimmed_text;}
	
	
function cgpa_internal($e1,$e2,$e3,$e4){
$e1=intval($e1);
$e2=intval($e2);
$e3=intval($e3);
$e4=intval($e4);
$max=max($e1, $e2, $e3,$e4);
$value=$max/100*4;	
$cgpa=number_format($value,2);
return $cgpa;	
};

//cth  12 Dec 2014
function dates($date){
$dateNormal=date("d M Y", strtotime($date));	
return $dateNormal;
};

function day($date){
$dateNormal=date("d", strtotime($date));	
return $dateNormal;
};
?>
