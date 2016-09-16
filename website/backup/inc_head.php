<?php ob_start();session_start(); ?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">

<title>MataAviation.com- Ultimate Aviation Academy in Malaysia</title>
<meta name="description" content="Enroll in one of leading aviation college in Malaysia ">
<meta name="author" content="MataAviation.my">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================================================================= -->
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/themes/type_01.css">
<link rel="stylesheet" href="css/themes/color_07.css">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Favicons
================================================================================================= -->
<link rel="shortcut icon" href="images/favicons/favicon.ico">
<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">

<!-- JS
================================================================================================= -->
<script src="js/libs/modernizr.min.js"></script>
<script src="js/libs/jquery-1.8.3.min.js"></script>
<script src="js/libs/jquery.easing.1.3.min.js"></script>
<script src="js/libs/jquery.fitvids.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.realperson.js"></script><!-- captcha -->
<style type="text/css">
.realperson-challenge {display: inline-block;}
.realperson-challenge {display: block;color: #000;}
.realperson-text {font-family: "Courier New", monospace;font-size: 6px;font-weight: bold;letter-spacing: -1px;line-height: 3px;}
.realperson-regen {padding-top: 4px;font-size: 12px;text-align: center;cursor: pointer;}
.realperson-disabled {opacity: 0.5;filter: Alpha(Opacity=50);}
.realperson-disabled .realperson-regen {cursor: default;}
.accepted {padding: 0.5em;border: 2px solid green;}
.rejected {padding: 0.5em;border: 2px solid red;}
</style>
<!-- captcha end -->
<style type="text/css" media="screen">
#horizontalmenu {float:right;}
#horizontalmenu ul {padding:2px;margin:2px;list-style:none;}
#horizontalmenu li {
	margin-right:0px;
	float:left;
	position:relative;
	display:block;
	border-style:inset;
	border:4px solid #FFF;
	text-transform:uppercase;
	font-weight: bold;
	font-size:16px;
	font-family:"Times New Roman", Times, serif;
}
#horizontalmenu li:hover {background-color:#F60;padding:10px;}
#horizontalmenu li:hover a {color:#FFF;}
#horizontalmenu li ul {display:none;position:absolute;}
#horizontalmenu li:hover ul {
	display:block;
	background:#909; 
	color:#FFF;
	height:auto;
	z-index:100;
	width:250px;
	padding:10px;
}
#horizontalmenu li:hover ul a {color:#FFF;}
#horizontalmenu li ul li {clear:both;border-style:none;}
#horizontalmenu a {text-decoration:none;color:#F60}
</style>
</head>
<?php
include_once('../output/include/dbcommon.php');
$conn= mysql_connect($host, $user, $pwd) or trigger_error(mysql_error); 
mysql_select_db($sys_dbname) or die(mysql_error());
//do log out
if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  $_SESSION['MM_Userid'] = NULL; $_SESSION['MM_Name'] = NULL;
    unset($_SESSION['MM_Userid']);
	 unset($_SESSION['MM_Name']);
	header("Location: index.php");
}

//captcha code
function rpHash($value) {
	$hash = 5381;
	$value = strtoupper($value);
	for($i = 0; $i < strlen($value); $i++) {
		$hash = (($hash << 5) + $hash) + ord(substr($value, $i));
	}
	return $hash;
};

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

$sql_gallery= "SELECT wcat,category_name FROM w_gallery ";
$query_gallery=mysql_query($sql_gallery,$conn);
$row_gallery=mysql_fetch_assoc($query_gallery);

$sql_course= "SELECT name,wid FROM w_course ORDER BY pos ASC";
$query_course=mysql_query($sql_course,$conn);
$row_course=mysql_fetch_assoc($query_course);

if (isset($_SESSION['MM_Userid'])) { 
//declare userid of session 
$userid=$_SESSION['MM_Userid'];
//get more info of student login
$LoginRS__query="SELECT BatchID, DipID , `Class` AS class FROM student_info WHERE StudentID=$userid";
$LoginRS = mysql_query($LoginRS__query, $conn) or die(mysql_error());
$row_login=mysql_fetch_assoc($LoginRS );
$batch=$row_login['BatchID'];
$program=$row_login['DipID']; $class=$row_login['class'];
 $year=date('Y'); $week=date('W');

$link_timetable="../output/x_timetable_class.php?week=$week&&year=$year&&batch=$batch&&class=$class&&programid=$program";

}
?>
<body>
<div class="container">
<?php if ($userid){ ?>
<div class="loginpanel">
  <div class="floatleft">
    <h5>HI <?php  echo $_SESSION['MM_Name'] ?> 
      | <a href="?doLogout=true">LOGOUT</a> | <a href="p_student_login.php">PASSWORD</a> | <a href="p_student_info.php"> PERSONAL</a> | <a href="p_student_academic.php">EXAM </a>| <a href="../output/x_billing_detail.php?StudentID=<?php echo $_SESSION['MM_Userid'] ;?>" target="_blank"> BILLING </a> |
       <a href="../output/x_billing_detail.php?StudentID=<?php echo $_SESSION['MM_Userid'] ;?>" > ATTENDANCE </a> |
       <a href="<?php echo $link_timetable?>" target="_blank"> TIME TABLE </a> 
        </h5>
  </div>
</div>
<?php }else{}?>
<!-- Header begins ========================================================================== -->
<header class="sixteen columns">
  <div id="logo"> <a href="index.php"><img src="images/logo.png"  alt="logo"></a> </div>
  <!--  <nav>
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="p_about.php">ABOUT US</a></li>
       <li><a href="p_news.php">NEWS</a></li>
      <li><a href="p_course.php">COURSE</a></li>
       <li><a href="p_contact.php">CONTACT US</a></li>
        <li><a href="p_apply.php">APPLY NOW</a></li>
     
      
    </ul>
  </nav>-->
  <div id="horizontalmenu">
    <ul>
      <li><a href="index.php">HOME | </a></li>
      <li><a href="#">ABOUT US | </a>
        <ul>
          <li><a href="p_about.php">- About MATA</a></li>
           <li><a href="p_about_back.php">- The Background</a></li>
          <li><a href="p_about_orga.php">- Organization</a></li>
        </ul>
      </li>
      <li><a href="p_news.php">NEWS | </a></li>
      

      
      <li><a href="#">COURSES | </a>
        <ul><?php do{ ?>
          <li><a href="p_course.php?wid=<?php echo $row_course['wid'] ; ?>">-<?php echo $row_course['name']; ?></a></li>
          <?php } while($row_course=mysql_fetch_assoc($query_course)) ; ?>
        </ul>
      </li>
      
      
      
      <li><a href="#">GALLERY | </a>
        <ul>
          <?php do{ $wcat=$row_gallery['wcat']; $categoryname=$row_gallery['category_name'];?>
          <li><a href="p_gallery.php?wcat=<?php echo $wcat ;?>">-<?php echo $categoryname; ?></a></li>
          <?php }while($row_gallery=mysql_fetch_assoc($query_gallery));?>
        </ul>
      </li>
      <li><a href="p_contact.php">CONTACT US |</a></li>
      <li><a href="../output/enroll_add.php">APPLY NOW |</a></li>
    </ul>
  </div>
  <hr>
</header>
<!-- Header ends ============================================================================ -->