<?php
include "login.php";
$PageTitle = "Specials";
include "header.php";
?>

<script type="text/javascript">$(document).ready(function() { $("#alert").fadeOut(5000); });</script>

<h3 style="float: left;">Update Specials</h3>
<h3 style="float: left; margin-left: 140px;">
  <?php
  if (isset($_POST['submit'])) {
    mysql_query("UPDATE content SET text = '" . $_POST['text'] . "' WHERE id = '1'");
    
    echo "<div id=\"alert\">Update complete!</div>";
  }
  
  $result = mysql_query("SELECT * FROM content WHERE id = '1'");
  $row = mysql_fetch_array($result);
  ?>
</h3>
<div style="clear: both;"></div>

<form action="specials-index.php" method="POST" style="width: 675px;">
  <strong>Text</strong><br>
  <textarea name="text" id="specials"><?php echo $row['text']; ?></textarea><br>
  
  <input type="hidden" name="id" value="1">
  <input type="submit" name="submit" value="Update" style="display: block; margin: 0 auto;">
</form>

<?php include "footer.php"; ?>