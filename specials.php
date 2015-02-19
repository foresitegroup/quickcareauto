<?php
$PageTitle = "Specials";
$HeaderImg = "specials.jpg";
include "header.php";
?>

<div id="minheight"></div>

Quick Care Auto is committed to delivering the best service for the best price possible.<br>
<br>

<script type="text/javascript" src="inc/jquery.printElement.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#p1").click(function() { $('#c1').printElement({overrideElementCSS: true}); return false; });
  });
</script>

<div class="coupon-wrap" style="float: none; width: 490px; margin: 0 auto; text-align: center; font-style: italic;">
  <img src="images/coupon-20110331.jpg" alt="" class="coupon" style="width: 490px;  border: 5px dashed #000000; padding: 0;" id="c1"><br>
  <a href="images/coupon-20110331.jpg" id="p1">Click to print</a>
</div>

<div style="clear: both;"></div>

<?php include "footer.php"; ?>