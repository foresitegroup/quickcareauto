<?php
include "login.php";
$PageTitle = "E-mail Subscribers";
include "header.php";
?>

<div id="submenu">
  <a href="subscribers-export.php?a=all">Export All Email</a>
  <a href="subscribers-export.php?a=unexp">Export Unexported Email</a>
  <a href="subscribers-db.php?a=markexp">Mark All as Exported</a>
  <a href="subscribers-db.php?a=markunexp">Mark All as Unexported</a>
  <a href="subscribers-db.php?a=deleteall" onClick="return(confirm('Are you sure you want to delete ALL records?'));">Delete All</a>
  <a href="subscribers-db.php?a=deleteexp" onClick="return(confirm('Are you sure you want to delete all exported records?'));">Delete Exported</a>
</div>

<br>

<table cellspacing="0">
  <tr style="background: #B6B6B6; height: 20px; line-height: 20px;">
    <td style="padding-left: 4px;"><strong>E-mail</strong></td>
    <td style="padding: 0 15px; text-align: center;"><strong>Delete</strong></td>
    <td style="padding: 0 15px; text-align: center;"><strong>Exported</strong></td>
  </tr>
<?php
$result = mysql_query("SELECT * FROM subscribers ORDER BY email ASC");

while ($row = mysql_fetch_array($result)) {
?>
  <tr<?php echo $bg; ?>>
    <td style="padding: 0 15px 0 4px;"><?php echo $row['email']; ?></td>
    <td style="text-align: center; height: 24px; line-height: 24px;">
      <a href="subscribers-db.php?a=delete&id=<?php echo $row['id']; ?>" onClick="return(confirm('Are you sure you want to delete this record?'));"><img src="images/delete.png" alt="Delete" title="Delete" style="vertical-align: middle;"></a>
    </td>
    <td style="text-align: center;">
      <a href="subscribers-db.php?a=exported&id=<?php echo $row['id']; ?>">
      <?php
      echo (empty($row['exported'])) ? "<img src=\"images/publish-n.png\" alt=\"N\" title=\"Not exported\" style=\"vertical-align: middle;\">" : "<img src=\"images/publish-y.png\" alt=\"Y\" title=\"Exported\" style=\"vertical-align: middle;\">";
      ?>
      </a>
    </td>
  </tr>
<?php
  $bg = ($bg == "") ? " style=\"background: #CDCDCD;\"" : "";
}
?>
</table>

<?php include "footer.php"; ?>