<?php
include "login.php";
$PageTitle = "Edit Car for Sale";
include "header.php";

$result = mysql_query("SELECT * FROM forsale WHERE id = '" . $_GET['id'] . "'");
$row = mysql_fetch_array($result);
?>

<script type="text/javascript">
  function toggle() {
    for (var i = 0, j = arguments.length; i < j; i++) {
    document.getElementById(arguments[i]).style.display = (document.getElementById(arguments[i]).style.display != "none" ? "none" : "" );
    }
  }
</script>
<script type="text/javascript">$(document).ready(function() { $("#alert").fadeOut(4000); });</script>

<div style="width: 395px; float: left; border-right: 1px solid #000000;">
  <h3 style="float: left;">Edit Text</h3>
  <h3 style="float: right; height: 1em; text-align: right; margin-right: 45px;"><?php if ($_GET['a'] == "l") { ?><div id="alert">Text update complete!</div><?php } ?></h3>
  <div style="clear: both;"></div>
  
  <form action="forsale-db.php?a=edit" method="POST" style="width: 350px;">
    <strong>Title</strong><br>
    <input type="text" name="title" style="width: 350px;" value="<?php echo $row['title']; ?>"><br>
    <br>
    
    <strong>Text</strong><br>
    <textarea name="text" id="detailing"><?php echo $row['text']; ?></textarea><br>
    
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="submit" value="Update" style="display: block; margin: 0 auto;">
  </form>
  
  <br>
  <br>
</div>

<div style="width: 350px; float: right;">
  <form action="forsale-db.php?a=addimg" method="POST" enctype="multipart/form-data">
    <h3>Add An Image</h3>
    
    <strong>Image</strong> <a href="javascript:toggle('iu','iul','ie','iel')" style="font-size: 85%; outline: none;"><span id="iel">Use existing</span><span id="iul" style="display: none;">Upload new</span></a><br>
    <input type="file" name="image" id="iu" style="width: 350px;">
    <select name="image-e" id="ie" style="width: 350px; margin-bottom: 4px; display: none;">
      <option value="">Select...</option>
      <?php
      $dir = opendir("../images/forsale/" . $_GET['id']);
      while (false != ($file = readdir($dir))) {
        if (($file != ".") and ($file != "..")) {
          $files[] = $file;
        }
      }
      closedir($dir);
      natcasesort($files);
      
      foreach ($files as $file) {
        echo "<option value=\"$file\">$file</option>\n";
      }
      ?>
    </select>
    <br>
    
    <input type="hidden" name="forsaleid" value="<?php echo $_GET['id']; ?>">
    <input type="submit" value="Add" style="display: block; margin: 0 auto;">
  </form>
  
  <br>
  
  <h3>Available Images</h3>
  <?php
  $iresult = mysql_query("SELECT * FROM forsaleimages WHERE forsaleid = '" . $_GET['id'] . "' ORDER BY sort+0 ASC");
  $rownum = 1;
  
  while ($irow = mysql_fetch_array($iresult)) {
    ?>
    <div style="margin-left: 90px;">
      <div class="controls" style="width: 90px; margin-left: -90px;">
        <a href="forsale-db.php?a=delimg&id=<?php echo $irow['id']; ?>&forsaleid=<?php echo $_GET['id']; ?>" onClick="return(confirm('Are you sure you want to delete this record?'));"><img src="images/delete.png" alt="Delete" title="Delete"></a>
        <a href="forsale-db.php?a=pubimg&id=<?php echo $irow['id']; ?>&forsaleid=<?php echo $_GET['id']; ?>">
        <?php
        echo (empty($irow['publish'])) ? "<img src=\"images/publish-n.png\" alt=\"N\" title=\"Not published\">" : "<img src=\"images/publish-y.png\" alt=\"Y\" title=\"Published\">";
        ?>
        </a>
        
        <?php
        echo ($rownum != "1") ? "<a href=\"forsale-db.php?id=" . $irow['id'] . "&s=" . $irow['sort'] . "&a=sort&d=u&forsaleid=" . $_GET['id'] . "\"><img src=\"images/move-u.png\" alt=\"^\" title=\"Move up\"></a>" : "<img src=\"../inc/blank.gif\" alt=\"\" style=\"width: 12px; height: 10px;\">";
        echo ($rownum != mysql_num_rows($iresult)) ? "<a href=\"forsale-db.php?id=" . $irow['id'] . "&s=" . $irow['sort'] . "&a=sort&d=d&forsaleid=" . $_GET['id'] . "\"><img src=\"images/move-d.png\" alt=\"v\" title=\"Move down\"></a>" : "<img src=\"../inc/blank.gif\" alt=\"\" style=\"width: 12px; height: 10px;\">";
        ?>
        
      </div>
      
      <img src="../images/forsale/<?php echo $_GET['id']; ?>/<?php echo $irow['image']; ?>" style="width: 150px;">
      
      <div style="clear: both; height: 15px;"></div>
    </div>
    
    <?php
    $rownum++;
  }
  ?>
</div>

<div style="clear: both; text-align: center;"><br><a href="forsale-index.php">Return to Cars for Sale index</a></div>

<?php include "footer.php"; ?>