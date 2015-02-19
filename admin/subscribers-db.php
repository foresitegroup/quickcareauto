<?php
include "../inc/dbconfig.php";

switch ($_GET['a']) {
  case "delete":
    $query = "DELETE FROM subscribers WHERE id = '" . $_GET['id'] . "'";
    break;
  case "deleteall":
    $query = "TRUNCATE TABLE subscribers;";
    break;
  case "deleteexp":
    $query = "DELETE FROM subscribers WHERE exported = 'on'";
    break;
  case "exported":
    // Get the current export state and toggle it
    $result = mysql_query("SELECT * FROM subscribers WHERE id = '" . $_GET['id'] . "'");
    $row = mysql_fetch_array($result);
    $exported = (empty($row['exported'])) ? "on" : "";
    
    $query = "UPDATE subscribers SET exported = '" . $exported . "' WHERE id = '" . $_GET['id'] . "'";
    break;
  case "markexp":
    $query = "UPDATE subscribers SET exported = 'on'";
    break;
  case "markunexp":
    $query = "UPDATE subscribers SET exported = ''";
    break;
}

mysql_query($query);

mysql_close();

header( "Location: subscribers-index.php" );
?>