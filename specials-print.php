<?php
include_once "inc/dbconfig.php";

$result = mysql_query("SELECT * FROM content WHERE id = '1'");
$row = mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <META http-equiv="Content-Type" content="text/html;charset=utf-8">
  <META http-equiv="pragma" content="no-cache">
  <META http-equiv="imagetoolbar" content="no">
  <META name="language" content="en">
  <META name="author" content="Remedi Creative">
  <title>Quick Care Auto | Specials</title>
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="inc/qca2010.css" type="text/css" media="screen,print">
  <style type="text/css" media="print">.content { margin: 0; } * html .content { width: auto; }</style>
  <!-- IE7-9, Chrome, and Safari print exactly as seen on screen. IE6 prints with a slightly narrower word wrap. Firefox and Opera print with a slighly wider word wrap. Deal with it. -->
</head>
<body style="background: #FFFFFF;">

<div class="content">
  <img src="images/logo.jpg" alt="Quick Care Auto" id="logo" style="margin: 0; float: left;">
  <img src="images/address.jpg" alt="185 S Main St. Thiensville, WI 53092 262-242-0747" id="address" style="float: left; margin: 30px 0 0 25px;">
  <div style="clear: both;"></div>
  <br>
  <?php echo $row['text']; ?>
</div>

</body>
</html>