<?php
$PageTitle = "Auto Classes";
$HeaderImg = "auto-classes.jpg";
include "header.php";
?>

<?php
if (isset($_POST['submit'])) {
  $SendTo = "customerservice@quickcareauto.com";
  $Subject = "Auto Class Sign-Up";
  $From = "From: " . $_POST['name'] . " <" . $_POST['email'] . ">\r\n";
  
  $Message = "Name " . $_POST['name'] . "\n";
  $Message .= "Phone: " . $_POST['phone'] . "\n";
  $Message .= "E-mail: " . $_POST['email'] . "\n";
  $Message .= "Class: " . $_POST['class'] . "\n";
  
  $Message = stripslashes($Message);
  
  mail($SendTo, $Subject, $Message, $From);
  
  echo "<strong>Thank you for signing up for our auto class.  We will contact you shortly.<br><br>If you're interested in signing up for another class, <a href=\"auto-classes.php\">click here</a>.</strong>";
} else {
?>
  <div style="float: right; margin-left: 20px;">
    <embed type='application/x-shockwave-flash' salign='l' flashvars='&amp;titleAvailable=true&amp;playerAvailable=true&amp;searchAvailable=false&amp;shareFlag=N&amp;singleURL=http://witi.vidcms.trb.com/alfresco/service/edge/content/20c360d8-0101-4380-b19b-c0a24165a7ba&amp;propName=witi.com&amp;hostURL=http://www.fox6now.com&amp;swfPath=http://witi.vid.trb.com/player/&amp;omAccount=triblocaltvglobal&amp;omnitureServer=fox6now.com' allowscriptaccess='always' allowfullscreen='true' menu='true' name='PaperVideoTest' bgcolor='#ffffff' devicefont='false' wmode='transparent' scale='showall' loop='true' play='true' pluginspage='http://www.macromedia.com/go/getflashplayer' quality='high' src='http://witi.vid.trb.com/player/PaperVideoTest.swf' align='middle' height='380' width='400'></embed><br>
  
    <em>Other videos from Quick Care Auto on Fox6: <a href="http://www.fox6now.com/videobeta/6cba160b-b009-4e84-9a89-75d65a431673/Auto/Tony-gets-under-the-hood-and-learns-a-few-things-about-cars">Part 2</a>, <a href="http://www.fox6now.com/videobeta/18d3b9d4-2c2b-46e5-b6b3-2183f1a3e93f/Auto/Tony-gets-a-lesson-on-how-to-properly-clean-a-car">Part 3</a>, <a href="http://www.fox6now.com/videobeta/5501dbc9-8280-4014-b53a-3d3cb2e417c0/Auto/Tony-finishes-up-at-Quick-Care-Auto">Part 4</a>.</em>
  </div>
  
  Come join us for some fun and informative classes learning all about your vehicle.  Following the one hour classes, stay and enjoy appetizers and beverages as you continue chatting with our mechanic, Dave.  Classes are free and limited to 15 per class.<br>
  <br>
  
  Sign up is available by calling 262-242-0747 or by using the form below.<br>
  <br>
  
  <h2>Class Schedule</h2>
  
  <strong>Suspension and Steering</strong><br>
  Is your car handling you or are you handling your car?  Let's see what you have to do to turn a car.  It's not quite as simple as it looks.<br>
  <br>
  Class is Tuesday, March 6th, 6:00 -7:30 pm.<br>
  <br>
  <br>
  
  <strong>Tires 101: Improving your Gas Mileage and Safety</strong><br>
  Tire wear and tear can give you insight on the type of driver you are.  Do you drive fast and reckless or steady as she goes?  Let's find out! Join us as Dave shows you all you need to know about your tires, from the importance of checking the depth of the tire tread to rotation and balance.<br>
  <br>
  Class is Tuesday, April 17th, 6:00-7:30 pm.<br>
  <br>
  <br>
  
  <strong>What's Under Your Hood: Batteries, Belts and Hoses, Oh My!</strong><br>
  Are you intimidated when looking under the hood of your vehicle?   Have you ever even looked under the hood?  This class is for you.  Let Dave, our mechanic, show you the simplicities of how it all works, from where to put the various fluids to what "that thing over there" is.<br>
  <br>
  Class is Tuesday, May 1st, 6:00 - 7:30 pm.<br>
  <br>
  <br>
  
  <strong>Ask the Mechanic</strong><br>
  What is the proper tire pressure for winter driving? How do I know if my belts need replacing? How often does my air filter need to be changed? Dave will be on hand to answer these questions and any other specific questions you may have regarding your vehicle. Join this fun and informative class.<br>
  <br>
  Class is Tuesday, June 5th, 6:00-7:30 pm.<br>
  <br>
  
  <script type="text/javascript">
    <!--
    function checkform (form) {
      if (form.class.value == "") { alert('Please select a class.'); form.class.focus(); return false ; }
      if (form.name.value == "") { alert('Name required.'); form.name.focus(); return false ; }
      if (form.phone.value == "") { alert('Phone number required.'); form.phone.focus(); return false ; }
      if (form.email.value == "") { alert('E-mail required.'); form.email.focus(); return false ; }
      return true ;
    }
    //-->
  </script>
  
  <h2>Class Sign-Up</h2>
  <form action="auto-classes.php" method="POST" onSubmit="return checkform(this)">
    <div>
      <div style="float: left; font-weight: bold; width: 50px;">Class:</div>
      <select name="class" style="float: left;">
        <option value="">Select...</option>
        <option value="Suspension and Steering">Suspension and Steering</option>
        <option value="Tires 101">Tires 101</option>
        <option value="What's Under Your Hood">What's Under Your Hood</option>
        <option value="Ask the Mechanic">Ask the Mechanic</option>
      </select><br>
      <br>
      
      <div style="float: left; font-weight: bold; width: 50px;">Name:</div>
      <input type="text" name="name" style="float: left; width: 300px;"><br>
      <br>
      
      <div style="float: left; font-weight: bold; width: 50px;">Phone:</div>
      <input type="text" name="phone" style="float: left; width: 300px;"><br>
      <br>
      
      <div style="float: left; font-weight: bold; width: 50px;">Email:</div>
      <input type="text" name="email" style="float: left; width: 300px;"><br>
      <br>
      
      <input type="submit" name="submit" value="Sign-Up" style="margin-left: 150px;">
    </div>
  </form>
<?php } ?>

<div style="clear: both;"></div>

<?php include "footer.php"; ?>