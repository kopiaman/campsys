<?php include_once('inc_head.php') ?>
<?php

$sql_faq= "	SELECT faqid,question,answer,position,category FROM w_faq WHERE fstatus='On' ORDER BY category,position ASC";
$query_faq=mysql_query($sql_faq,$conn);
$row_faq=mysql_fetch_assoc($query_faq);


?>
	<!-- Work page begins ======================================================================= -->

<div class="sixteen columns">
 <h2>FAQ-Frequently Asked Question</h2>
	<?php do {   $question=$row_faq['question'];$category= $row_faq['category']; ?>
  	<h4 style="color:#06F;"><?php echo '<strong>'.$category.'</strong>- '.$question ?> </h4>
    <p><?php echo $row_faq['answer'] ?> </p>
	<?php }while($row_faq=mysql_fetch_assoc($query_faq)) ?>
</div>
		

	
  <?php include_once('inc_footer.php') ?>
		
</div><!-- container -->
</body>
</html>