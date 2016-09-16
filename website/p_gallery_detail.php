<?php include_once('inc_head.php');?>
<!--script for zoom in --> 
<script src="js/jquery.lighter.js" type="text/javascript"></script>
<link href="css/jquery.lighter.css" rel="stylesheet" type="text/css" />
<?php
$wig=$_GET['wig'];

$sql_pic= "SELECT picid,files,caption FROM w_pic WHERE wig=$wig";
$query_pic=mysql_query($sql_pic,$conn);
$row_pic=mysql_fetch_assoc($query_pic);

$sql_gal= "SELECT wcat,sub_cat FROM w_gallery_sub WHERE wig=$wig";
$query_gal=mysql_query($sql_gal,$conn);
$row_gal=mysql_fetch_assoc($query_gal);
$subname=$row_gal['sub_cat'];
$wcat=$row_gal['wcat'];

$sql_gal_m= "SELECT category_name FROM w_gallery WHERE wcat=$wcat";
$query_gal_m=mysql_query($sql_gal_m,$conn);
$row_gal_m=mysql_fetch_assoc($query_gal_m);
$maincategory=$row_gal_m['category_name'];
?>
  
  <div class="sixteen columns">
  <h2>Gallery</h2>
  <h3><a href="p_gallery.php?wcat=<?php echo $wcat?>"><?php echo $maincategory ?></a> > <?php echo $subname ?></h3>
  <?php  do{ ?>

   <?php		
	$image_name=$row_pic['files'];
	$filesarray=json_decode($image_name);
			
   $i=0;
   do{
	  $names=$filesarray[$i]->name;
	 $thumbs=$filesarray[$i]->thumbnail;
	 
	 if($names){
	echo $value="<a href='../output/$names'  data-lighter>";
	echo "<img src='../output/$thumbs' style='padding:10px;' /></a>";
	 }else{};
	 	$i++;
   }while($i<10);

?>
 

    <?php  }while($row_pic=mysql_fetch_assoc($query_pic)) ?>
    <br class="clear" />
  </div>
  <hr>
  <?php include_once('inc_footer.php') ?>
</div>
<!-- container -->
</body>
</html>