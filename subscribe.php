<?php
$PageTitle = "Subscribe";
$HeaderImg = "subscribe.jpg";
include "header.php";
?>

<div id="minheight"></div>

<?php
if (isset($_POST['email']) && $_POST['email'] != "Enter Your Email Here") {
  mysql_query("INSERT INTO subscribers (email) VALUES ('" . $_POST['email'] . "')");
  echo "<strong>Thank you for subscribing to the Quick Care Auto specials.</strong><br>Please be sure to add <a href=\"m&#97;ilto:&#99;&#117;&#115;&#116;&#111;&#109;&#101;&#114;&#115;&#101;&#114;&#118;&#105;&#99;&#101;&#64;&#113;&#117;&#105;&#99;&#107;&#99;&#97;&#114;&#101;&#97;&#117;&#116;&#111;&#46;&#99;&#111;&#109;\">&#99;&#117;&#115;&#116;&#111;&#109;&#101;&#114;&#115;&#101;&#114;&#118;&#105;&#99;&#101;&#64;&#113;&#117;&#105;&#99;&#107;&#99;&#97;&#114;&#101;&#97;&#117;&#116;&#111;&#46;&#99;&#111;&#109;</a> to your e-mail address book today to ensure that our emails reach your inbox successfully!  Periodically, you'll receive emails from us regarding QCA specials and worthwhile tips for keeping your vehicle in top-running shape.\n";
} else {
?>

Subscribe for specials.<br>
<br>

<form action="subscribe.php" method="POST">
  <div>
    <input type="text" name="email" class="input" style="width: 270px;" value="Enter Your Email Here" onClick="if(this.value=='Enter Your Email Here')this.value='';" onBlur="if(this.value=='')this.value='Enter Your Email Here';">
    <input type="image" src="images/submit.jpg" class="submit" onMouseOver="javascript:this.src='images/submit-h.jpg';" onMouseOut="javascript:this.src='images/submit.jpg';">
    <div style="clear: both;"></div>
  </div>
</form>

<?php } ?>

<div style="clear: both;"></div>

<?php include "footer.php"; ?>