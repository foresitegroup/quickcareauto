<?php
include("../inc/dbconfig.php");
include "login.php";
$PageTitle = "Specials | Edit Special";
include "header.php";
?>

<?php
$id = $_GET['id'];

$query = "SELECT * FROM specials WHERE id = '$id'";

$result = mysql_query($query);
$row = mysql_fetch_array($result)
?>

<form action="specials-db.php?a=edit" method="POST" style="width: 280px;">
  <strong>Text</strong><br>
  <textarea name="text" id="specials"><?php echo $row['text']; ?></textarea><br>
  
  <strong>Expiration Date</strong> <input type="text" name="expires" id="datepicker" style="width: 80px;" value="<?php if ($row['expires'] != "") echo date("m/d/Y",$row['expires']); ?>"><br>
  <br>
  
  <input type="hidden" name="id" value="<?php echo $id ?>">
  <input type="submit" value="Update" style="display: block; margin: 0 auto;">
</form>

<?php include "footer.php"; ?>