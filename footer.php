      <?php if ($PageTitle == "") { ?>
      </div> <!-- END content-main -->
      
      <div id="rotating">
        <img src="images/main-image1.jpg" alt="">
        <img src="images/main-image3.jpg" alt="">
      </div> <!-- END rotating -->
      
      <div style="clear: both;"></div>
      <?php } ?>
      
      <hr <?php echo ($PageTitle == "") ? "style=\"margin-bottom: 21px;\"" : "style=\"margin: 21px 0;\""; ?>>
      
      <div class="footer-logos">
        <img src="images/logo-amsoil.png" alt="">
        <img src="images/logo-nokian-tires.jpg" alt="">
      </div>
    </div> <!-- END main -->
    
    <div style="clear: both;"></div>
  </div> <!-- END wrap -->
</div> <!-- END background -->

<div id="footer">
  <div id="left">
    <a href=".">home</a>
    <a href="general-services.php">general services</a>
    <a href="resources.php">resources</a>
    <a href="specials.php">specials</a>
    <a href="cars-for-sale.php">cars for sale</a>
    <a href="location-contact.php">location/contact</a>
  </div>
  
  <div id="right">
    &copy; <?php echo date("Y"); ?> Quick Care Auto<br>
    185 S Main St. &nbsp; &bull; &nbsp; Thiensville, WI 53092 &nbsp; &bull; &nbsp; 262-242-0747
  </div>
  
  <div style="clear: both;"></div>
  
  <br><br><br>
  <div style="text-align: center;">
    Site created and maintained by <a href="http://www.foresitegrp.com">Foresite Group</a>
  </div>
  
  <!--[if lte IE 7]><div style="height: 22px;"></div><![endif]-->
</div>

<!-- Preload hover images -->
<div style="display: none;">
  <img src="images/submit-h.jpg" alt="">
</div>

</body>
</html>