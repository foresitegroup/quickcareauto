<?php
include_once "inc/dbconfig.php";

function email($address, $name="") {
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <META http-equiv="Content-Type" content="text/html;charset=utf-8">
  <META http-equiv="pragma" content="no-cache">
  <META http-equiv="imagetoolbar" content="no">
  <META name="language" content="en">
  <META name="author" content="Remedi Creative">
  <META name="description" content="Quick Care Auto is a locally owned full service auto maintenance, repair and auto detailing station.">
  <META name="keywords" content="tune up, engine repair, tires, mufflers, auto repair, detailing, detail, Milwaukee, Wisconsin, Thiensville, Mequon, buffing, waxing, shampooing, hand wash, fleet cars, maintenance, ase certified, deals">
  <title>Quick Care Auto<?php if ($PageTitle != "") { echo " | " . $PageTitle; } ?></title>
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="inc/qca2010.css" type="text/css" media="screen,print">
  <script type="text/javascript" src="inc/jquery-1.5.1.js"></script>
  <script type="text/javascript" src="inc/jquery.cycle.all.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#rotating').cycle({ fx: 'fade', speed: 1750, timeout: 5750 });
      $("a[href^='http'], a[href$='.pdf'], .pop").not("[href*='" + window.location.host + "']").attr('target','_blank');
    });
  </script>
  <!--[if IE 6]><script type="text/javascript" src="inc/IE8.js"></script><![endif]-->
  <!--[if lte IE 7]><link rel="stylesheet" href="inc/ie6.css" type="text/css" media="screen,print"><![endif]-->
  <!--[if IE 8]><link rel="stylesheet" href="inc/ie8.css" type="text/css" media="screen,print"><![endif]-->
  <!-- BEGIN Google Analytics -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-23692427-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <!-- END Google Analytics -->
</head>
<body<?php if (preg_match("/iPhone/i", $_SERVER['HTTP_USER_AGENT'])) echo " style=\"-webkit-text-size-adjust: none;\""; ?>>

<div id="background">
  <div id="wrap">
    <div id="sidebar">
      <a href="."><img src="images/logo.jpg" alt="Quick Care Auto" id="logo"></a>

      <img src="images/address.jpg" alt="185 S Main St. Thiensville, WI 53092" id="address">

      <a href="location-contact.php"><img src="images/map.jpg" alt="" id="map"></a>

      <hr>

      <br>
      <a href="https://www.facebook.com/pages/Quick-Care-Auto/145397368834683?sk=photos_stream&tab=photos_albums"><img src="images/spiff-gallery.png" alt="Gallery"></a><br>

      <a href="http://www.facebook.com/pages/Quick-Care-Auto/145397368834683?v=info" id="facebook"></a>
      <a href="http://twitter.com/Quickcareauto" id="twitter"></a>

      <img src="images/SubscribeForSpecials.jpg" alt="Subscribe for Specials">
      <form action="subscribe.php" method="POST">
        <div>
          <input type="text" name="email" class="input" value="Enter Your Email Here" onClick="if(this.value=='Enter Your Email Here')this.value='';" onBlur="if(this.value=='')this.value='Enter Your Email Here';">
          <input type="image" src="images/submit.jpg" class="submit" onMouseOver="javascript:this.src='images/submit-h.jpg';" onMouseOut="javascript:this.src='images/submit.jpg';">
          <div style="clear: both;"></div>
        </div>
      </form>

      <img src="images/credit-cards.jpg" alt="MasterCard / Visa" style="margin-top: 40px;">

      <!--<a href="detailing-gallery.php"><img src="images/spiff-detailing-gallery.jpg" alt="SEE OUR Detailing Gallery" style="margin-top: 15px;"></a>-->
    </div> <!-- END sidebar -->

    <div id="main">
      <div id="menu">
        <ul>
          <li>
            <a href="." id="m1"></a>
            <ul>
              <!--<li><a href=".">Home</a></li>-->
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="testimonials.php">Testimonials</a></li>
            </ul>
          </li>
          <li>
            <a href="general-services.php" id="m2"></a>
            <!--<ul>
              <li><a href="general-services.php">General Services</a></li>
              <li><a href="resources.php">Resources</a></li>
            </ul>-->
          </li>
          <li>
            <a href="detailing.php" id="m3"></a>
<!--             <ul>
              <li><a href="detailing.php">Detailing</a></li>
              <li><a href="detailing-gallery.php">Detailing Gallery</a></li>
              <li><a href="resources.php">Resources</a></li>
            </ul> -->
          </li>
          <li><a href="resources.php" id="m3b"></a></li>
          <li>
            <a href="specials.php" id="m4"></a>
            <!--<ul>
              <li><a href="specials.php">Specials</a></li>
              <li><a href="auto-classes.php">Auto Classes</a></li>
            </ul>-->
          </li>
          <li><a href="cars-for-sale.php" id="m5"></a></li>
          <li>
            <a href="location-contact.php" id="m6"></a>
            <ul>
              <!--<li><a href="location-contact.php">Location/Contact</a></li>-->
              <li><a href="our-neighborhood.php">Our Neighborhood</a></li>
            </ul>
          </li>
        </ul>
      </div> <!-- END menu -->

      <?php if (preg_match("/iPhone/i", $_SERVER['HTTP_USER_AGENT'])) echo "<a href=\"tel:262-242-0747\">"; ?>
      <img src="images/phone.jpg" alt="262-242-0747" id="phone">
      <?php if (preg_match("/iPhone/i", $_SERVER['HTTP_USER_AGENT'])) echo "</a>"; ?>

      <div style="clear: both;"></div>

      <hr>

      <?php if ($HeaderImg == "") { ?>
      <img src="images/slogan.jpg" alt="Your Personal Auto Service Station" id="slogan">
      <?php } else { ?>
      <img src="images/<?php echo $HeaderImg; ?>" alt="<?php echo $PageTitle; ?>" style="margin: 18px 0 5px;">
      <?php } ?>

      <hr class="five">

      <div id="content-top"<?php if (preg_match("/Firefox/i", $_SERVER['HTTP_USER_AGENT'])) echo " style=\"height: 28px;\""; ?>>&nbsp;</div>

      <?php if ($PageTitle == "") { ?>
      <div id="content-main">
      <?php } ?>