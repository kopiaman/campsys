<?php include_once('inc_head.php');?>
<?php
$wcat=$_GET['wcat'];
$sql_gal= "SELECT wig,wcat,sub_cat FROM w_gallery_sub WHERE wcat=$wcat";
$query_gal=mysql_query($sql_gal,$conn);
$row_gal=mysql_fetch_assoc($query_gal);

$sql_gal_m= "SELECT category_name FROM w_gallery WHERE wcat=$wcat";
$query_gal_m=mysql_query($sql_gal_m,$conn);
$row_gal_m=mysql_fetch_assoc($query_gal_m);
$maincategory=$row_gal_m['category_name'];



//echo $value="<a href='../output/$names'  data-lighter>";
//echo "<img src='../output/$thumbs' style='padding:10px;' /></a>";



?>
  
  <div class="sixteen columns">
  <h2>GALLERY > <?php echo $maincategory ?></h2><?php  do{ $sub_cat=$row_gal['sub_cat'] ; $wig=$row_gal['wig'] ;
  
  $sql_pic= "SELECT files FROM w_pic WHERE wig=$wig";
$query_pic=mysql_query($sql_pic,$conn);
$row_pic=mysql_fetch_assoc($query_pic);
  
    $image_name=$row_pic['files'];
	$filesarray=json_decode($image_name);
	$names=$filesarray[0]->name;
	$thumbs=$filesarray[0]->thumbnail;
  
   $style="background-image:url(../output/$names); background-position:top right;"?>
    <div class="product_list_horizontal" style="<?php echo $style ?>">
    <h3><a href="p_gallery_detail.php?wig=<?php echo $wig?>" style="background-color:#906; padding:5px; color:#FFF;"><?php echo $sub_cat ?></a></h3>
 
    </div>
    <?php  }while($row_gal=mysql_fetch_assoc($query_gal)) ?>
    <br class="clear" />
  </div>
  <hr>
  <?php include_once('inc_footer.php') ?>
</div>
<!-- container -->
</body>
</html>