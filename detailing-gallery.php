<?php
$PageTitle = "Detailing Gallery";
$HeaderImg = "detailing-gallery.jpg";
include "header.php";
?>

<?php
$result = mysql_query("SELECT * FROM detailing WHERE publish != '' ORDER BY id DESC");
$num_rows = mysql_num_rows($result);
?>

<script type="text/javascript">
  $(function() {
    <?php
    for ($count = 1; $count <= $num_rows; $count++) {
      echo "$('#car$count').after('<ul id=\"nav$count\" class=\"nav\">').cycle({ fx: 'turnDown', speed: 'fast', timeout: 0, pager: '#nav$count', pagerAnchorBuilder: function(idx, slide) { return '<li><a href=\"#\"><img src=\"' + slide.src + '\"><\/a><\/li>'; } });\n";
    }
    ?>
  });
</script>

<?php
$count = 1;
while($row = mysql_fetch_array($result)) {
?>
<div class="car-images">
  <div id="car<?php echo $count; ?>">
    <?php
    $iresult = mysql_query("SELECT * FROM detailingimages WHERE detailingid = '" . $row['id'] . "' AND publish != '' ORDER BY sort ASC");
    while($irow = mysql_fetch_array($iresult)) {
      echo "<img src=\"images/detailing/" . $row['id'] . "/" . $irow['image'] . "\" alt=\"\">";
    }
    ?>
  </div> <!-- END car<?php echo $count; ?> -->
</div> <!-- END car-images -->

<div class="car-text">
  <span style="font-size: 150%; font-weight: bold;"><?php echo $row['title']; ?></span><br>
  <br>
  <?php echo $row['text']; ?>
</div> <!-- END car-text -->
  
<div style="clear: both;"></div><br><br>
<?php
$count++;
}
?>

<?php include "footer.php"; ?>