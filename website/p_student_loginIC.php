<?php include_once('inc_head.php') ?>
  <script type="text/javascript">
$(function() {
	$('#regis').realperson();
});
</script> 
  <script src="js/validation.js"></script> 
    <style>
#error {color:red;font-size:10px;display:none;}
.needsfilled {background:red;color:white;}
</style>

<?php
//register action	

 $ICNO = mysql_real_escape_string($_POST['ic'],$conn);
if ((isset($_POST["MM_login"])) && ($_POST["MM_login"]=="form_login")) {
   
	
$LoginRS__query="SELECT ICNO,Name,StudentID FROM student_info WHERE ICNO LIKE '$ICNO' AND ICNO IS NOT NULL ";
$LoginRS = mysql_query($LoginRS__query, $conn) or die(mysql_error());
$row_login=mysql_fetch_array($LoginRS );
$loginFoundUser = mysql_num_rows($LoginRS);
		
//check if same username exist or not
if ($loginFoundUser){  
		
		$StudentID = $row_login['StudentID'];
$studentLink="../output/x_student_info.php?StudentID=$StudentID";
	 $alert_mod_login="<h4>Student Record Found. <br> Please click the button below to open the student profile. <br> 
	 <a href='$studentLink' target='_blank' type='submit'>CLICK HERE</a> </h4>"; 
		// header("Location: p_student_login.php");
		} else {
		 $alert_mod_login='<h3>Wrong IC</h3>'; 
		};

};
?>
  <div class="sixteen columns"> <!-- sixteen colum for user main menu -->
  
  <h2>Check Student Record</h2>
    <?php  echo '<h4>'.$alert_mod_login.'</h4>';?>    
      
      <div id="reg_content" style="display:block">
        <form id="form_login" method="post" >
           <label>IC NO ( Without dash)</label>
          <input name="ic" type="text" id="ic"  placeholder="IC No"/>
 
          <input name="submit" type="submit" id="submit"  value="Check" />
          </p>
          <input name="MM_login" type="hidden" id="MM_login" value="form_login" />
        </form>
      </div>


    <br class="clear" />
  </div>
  <!-- sixteen colum for user main end -->
  
  <?php include_once('inc_footer.php') ?>
</div>
<!-- container -->
</body>
</html>