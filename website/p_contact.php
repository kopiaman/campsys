<?php include_once('inc_head.php') ?>
<script type="text/javascript">
$(function() {
	$('#coder').realperson();
});
</script>
<script>
function validateForm2()
{
var x=document.forms["contactform"]["name2"].value;
if (x==null || x=="")
  {
  alert("Name must not be blank");
  return false;
  }
  
var x=document.forms["contactform"]["email2"].value;
if (x==null || x=="")
  {
  alert("Email must not be blank");
  return false;
  }  
  
var x=document.forms["contactform"]["tel2"].value;
if (x==null || x=="")
  {
  alert("Tel must not be blank");
  return false;
  }   
  
var x=document.forms["contactform"]["subject2"].value;
if (x==null || x=="")
  {
  alert("Subject must not be blank");
  return false;
  }     
  
var x=document.forms["contactform"]["message2"].value;
if (x==null || x=="")
  {
  alert("Message must not be blank");
  return false;
  }       
    
};
</script>
<style>
#error {
	color:red;
	font-size:10px;
	display:none;
}
.needsfilled {
	background:red;
	color:white;
}
</style>
<?php
//select email config
$sql_config ="SELECT email,acronyim FROM campus_setting WHERE id='1'";
$q_config = mysql_query($sql_config,$conn);
$config=mysql_fetch_array($q_config);
$to2 =$config['email'];
//$to2 ='kopiaman@yahoo.com';
$websitename=$config['acronyim'];

$name2=mysql_real_escape_string($_POST['name2'],$conn);
$email2=mysql_real_escape_string($_POST['email2'],$conn);
$tel2=mysql_real_escape_string($_POST['tel2'],$conn);
$subject2=mysql_real_escape_string($_POST['subject2'],$conn);
$comment2 = mysql_real_escape_string($_POST['message2'],$conn);

$message2 ="<html><body>";
$message2 .="<p>  Message from $name2  </p> ";
$message2 .="<p>  Subject :  $subject2  </p> ";
$message2 .="<p>  Tel :  $tel2  </p> ";
$message2 .="<p>  Email :  $email2  </p> ";
$message2 .="<p>  Message : <br> $comment2  </p> ";
$message2 .= "</body></html>";
	

$subject ="Inquiry about ". $subject2.' of '  . $websitename . "\r\n";
$headers2 = "From: " . $email2 . "\r\n";
$headers2 .= "Content-type: text/html" ."\r\n";

if (rpHash($_POST['coder']) == $_POST['coderHash']) {		
   $mailto=mail($to2, $subject, $message2, $headers2);
   if($mailto){
	$note='Your message submitted. Thank you';

   } else if(!$mailto){
	$note='Your message is not submitted. Please try again';

   };
}else if($_POST['coder']==''){$note="";		 
}else if(rpHash($_POST['coder'])!= $_POST['coderHash']) {$note="<p class='rejected'>Wrong security code</p>";
};
?> 
	<!-- Work page begins ======================================================================= -->

<div class="sixteen columns">
<h2>Contact Us</h2>
	<h4><?php echo $note ?></h4>
	<h3>Your Feedback is important to us. Feel free to give any comment/suggestion. </h3>
    <form id="contactform" method="post" onSubmit="validateForm2()">
    <div class="five columns alpha">
    
     <label>Name</label><input name="name2" type="text" value="<?php echo $_POST['name2'] ?>" maxlength="25" />
     <label>Email</label><input name="email2" type="text" maxlength="50"  value="<?php echo $_POST['email2'] ?>"  />
	  <label>Tel</label><input name="tel2" type="text" maxlength="15" value="<?php echo $_POST['tel2'] ?>"  />   
    </div>
    <div class="five columns">
    
      
     <label>Subject</label>
     <select name="subject2" id="subject2">
       <option value="Comment">Comment</option>
       <option value="Idea/Improvement">Idea/Improvement</option>
       <option value="Praise">Praise</option><option value="Others">Others</option>
     </select>
     
      <label>Message</label><textarea name="message2" value="<?php echo $_POST['message2'] ?>" ></textarea> 
      <input type="text" id="coder" name="coder" placeholder="Please enter security code above"> 
      <input type="submit" name="c_submit" id="c_submit" value="Submit" />
    
     </div>  
    <div class="six columns omega"><h3> Our Office </h3>
    <p>
 Lot 14, Jalan Putra Square 7, <br>
Putra Square, 25200 Kuantan,<br>
Pahang, Malaysia<br>
<strong>Tel</strong> : 09 - 513 3932 <br>
<strong>Fax</strong> : 09 - 513 3936 <br>
<strong>Email</strong> : enquiry@mataaviation.com <br></p>

</div>
 </form>
<br class="clear" />
</div>


<!-- MAP -->
<div class="sixteen columns">
<h3>Our Map</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.960482695641!2d103.32827588869284!3d3.818610033486449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdd035474193f89b6!2sMalaysian+Aviation+Training%E2%80%A6!5e0!3m2!1sen!2smy!4v1388640617303" width="900" height="300" frameborder="0" style="border:0"></iframe>
 <br class="clear" />
 </div>
	
  <?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>