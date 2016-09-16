<?php include_once('inc_head.php') ?>
  <?php 

$sql_news= "SELECT nid,title,content,ndate,category,pic FROM w_news WHERE nstatus='On' AND category!='Announcement' ORDER BY ndate DESC LIMIT 0,1 ";
$query_news=mysql_query($sql_news,$conn);
$row_news=mysql_fetch_assoc($query_news);

$sql_news_a= "SELECT nid,title,content,ndate,category,pic FROM w_news WHERE nstatus='On' AND category='Announcement' ORDER BY ndate DESC LIMIT 0,1 ";
$query_news_a=mysql_query($sql_news_a,$conn);
$row_news_a=mysql_fetch_assoc($query_news_a);

$sql_slider= "SELECT slid,headline,picture,slink FROM w_slider WHERE sstatus='On' ORDER BY slid DESC  ";
$query_slider=mysql_query($sql_slider,$conn);
$row_slider=mysql_fetch_assoc($query_slider);
?>
  <style>
h2{ padding:10px; }
h3{ background-color:#939; width:100%; padding:8px; color:#FC0;}
</style>
  <?php include('inc_slider.php') ?>
  <!-- Section page 2 ========================================================================= -->
  <div class="sixteen columns">
    <div class="six columns alpha">
      <h3><a href="p_course_cata.php" style="text-decoration:none; color:#FC0">The Courses</a></h3>
      <h4>As an ATO (Approved Training Organisation) MATA offers 'Licensed Aircraft Maintenance Engineer and Technicians' courses based on DCAM EASA Part66 syllabus. Tailor-made aviation related short courses can also be developed as requested.</h4>
    </div>
    <div class="five columns ">
      <h3>Latest News</h3>
      <p>
        <?php do{   $title=$row_news['title']; $nid=$row_news['nid'];
$ndate=$row_news['ndate']; ?>
        <span style="text-decoration:underline; font-weight:bold"> <a href="p_news_detail.php?nid=<?php echo $nid?>"><?php echo date("d-m-Y", strtotime($ndate)).' | '.$title?></a></span><br>
        <?php
echo $trim_content=trim_text($row_news['content'],150) ;
}while($row_news=mysql_fetch_assoc($query_news));?>
      </p>
    </div>
    <div class="five columns omega">
      <h3>Announcement</h3> 
      <?php do{  ; $ndate=$row_news_a['ndate'];  ?>
        <span style="text-decoration:underline; font-weight:bold"> <a href="p_news_detail.php?nid=<?php echo $row_news_a['nid']?>"><?php echo date("d-m-Y", strtotime($ndate)).' |  '.$row_news_a['title']?></a></span><br>
        <?php
echo $trim_content2=trim_text($row_news_a['content'],150) ;
}while($row_news_a=mysql_fetch_assoc($query_news_a));?>
    </div>
    <br class="clear" />
  </div>
  
  <!-- Work page ends ========================================================================= -->
  
  <?php include_once('inc_footer.php'); ?>
</div>
<!-- container -->
</body>
</html>