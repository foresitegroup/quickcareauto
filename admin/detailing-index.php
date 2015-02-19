<?php
include "login.php";
$PageTitle = "Detailing Gallery";
include "header.php";
?>

<form action="detailing-db.php?a=add" method="POST" style="float: left;">
  <h3>Add New Detailing Gallery</h3>
  
  <strong>Title</strong><br>
  <input type="text" name="title" style="width: 350px;"><br>
  <br>
  
  <strong>Text</strong><br>
  <textarea name="text" id="detailing"></textarea><br>
  
  <input type="submit" value="Submit and add images..." style="display: block; margin: 0 auto;">
</form>

<div style="float: right; width: 350px;">
  <h3>Available Detailing Galleries</h3>
  
  <?php
  $result = mysql_query("SELECT * FROM detailing ORDER BY id DESC");
  while ($row = mysql_fetch_array($result)) {
  ?>
  <div style="margin-left: 80px;">
    <div class="controls" style="width: 80px; margin-left: -80px;">
      <a href="detailing-db.php?a=delete&id=<?php echo $row['id']; ?>" onClick="return(confirm('Are you sure you want to delete this Detailing Gallery?\n\nALL IMAGES ASSOCIATED WITH THIS GALLERY WILL\nBE PERMANENTLY DELETED FROM THE SERVER.'));"><img src="images/delete.png" alt="Delete" title="Delete"></a>
      <a href="detailing-edit.php?id=<?php echo $row['id']; ?>"><img src="images/edit.png" alt="Edit" title="Edit"></a>
      <a href="detailing-db.php?a=publish&id=<?php echo $row['id']; ?>">
      <?php
      echo (empty($row['publish'])) ? "<img src=\"images/publish-n.png\" alt=\"N\" title=\"Not published\">" : "<img src=\"images/publish-y.png\" alt=\"Y\" title=\"Published\">";
      ?>
      </a>
    </div>
    <?php echo $row['title']; ?>
    
    <div style="clear: both; height: 10px;"></div>
  </div>
  <?php
  }
  ?>
</div>

<div style="clear: both;"></div>

<?php include "footer.php"; ?>