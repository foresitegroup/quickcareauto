<?php
include("../inc/dbconfig.php");

$TheDate = strtotime($_POST['expires']);

switch ($_GET['a']) {
  case "add":
    $query = "INSERT INTO specials (text,expires) VALUES ('" . $_POST['text'] . "', '$TheDate')";
    break;
  case "edit":
    $query = "UPDATE specials SET text = '" . $_POST['text'] . "', expires = '$TheDate' WHERE id = '" . $_POST['id'] . "'";
    break;
  case "delete":
    $query = "DELETE FROM specials WHERE id = '" . $_GET['id'] . "'";
    break;
}

mysql_query($query);

mysql_close();

header( "Location: specials-index.php" );
?>