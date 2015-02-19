      <?php if ($PageTitle == "") { ?>
      </div> <!-- END content-main -->
      
      <div id="rotating">
        <img src="images/main-image1.jpg" alt="">
        <img src="images/main-image-porsche.jpg" alt="">
        <img src="images/main-image3.jpg" alt="">
      </div> <!-- END rotating -->
      
      <div style="clear: both;"></div>
      <?php } ?>
      
      <hr <?php echo ($PageTitle == "") ? "style=\"margin-bottom: 21px;\"" : "style=\"margin: 21px 0;\""; ?>>
      
      <div class="special">
        <img src="images/OurNeighborhood.jpg" alt="Our Neighbohood">
        <img src="images/logo-thiensville.jpg" alt="Village of Thiensville">
        <div>
          Get more from your appointment by visiting our neighborhood businesses.
        </div>
        <br>
        <a href="our-neighborhood.php" class="arrow">More Info</a>
      </div>
      
      <div class="special">
        <img src="images/QCASpecials.jpg" alt="QCA Specials">
        <img src="images/blackcar.jpg" alt="Black Car">
        <div>
          Check out the cost saving specials&mdash;the best service for the best price.
        </div>
        <br>
        <a href="specials.php" class="arrow">More Info</a>
      </div>
      
      <!-- <div class="special">
        <img src="images/CarsForSale.jpg" alt="Cars for Sale">
        <img src="images/spiff-cars-for-sale.jpg" alt="Cars for sale">
        <div>
          Looking for a new (to you) car? We have some great cars at great prices.
        </div>
        <br>
        <a href="cars-for-sale.php" class="arrow">More Info</a>
      </div> -->
      <div class="special">
        <img src="images/AutoDetailing.jpg" alt="Auto Detailing">
        <img src="images/buffing-short.jpg" alt="Buffing">
        <div>
          Quick Care Auto has a detailing package to fit your needs and budget.
        </div>
        <br>
        <a href="detailing.php" class="arrow">More Info</a>
      </div>
      
      <div class="special" style="width: 122px;">
        <img src="images/NAPAautocare.jpg" alt="NAPA AutoCare">
        <img src="images/spiff-napa.jpg" alt="NAPA AutoCare Center">
        <div style="width: 122px;">
          NAPA Autocare "Peace of Mind" Nationwide Limited Warranty
        </div>
        <br>
        <a href="napa-autocare.php" class="arrow">More Info</a>
      </div>
      
      <!--
      <div class="special">
        <img src="images/AutoDetailing.jpg" alt="Auto Detailing">
        <img src="images/buffing-short.jpg" alt="Buffing">
        <div>
          Quick Care Auto has a detailing package to fit your needs and budget.
        </div>
        <br>
        <a href="detailing.php" class="arrow">More Info</a>
      </div>
      -->
      
      <!--<a href="http://www.facebook.com/media/set/?set=a.265751013465984.59558.145397368834683&type=3"><img src="images/spiff-halloween.jpg" alt="Halloween 2011" style="margin-top: 30px;"></a>-->
      <!--<a href="auto-classes.php"><img src="images/spiff-auto-classes.jpg" alt="Quick Care Auto Classes" style="margin-top: 30px;"></a>-->
      
      <div style="clear: both;"></div>
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