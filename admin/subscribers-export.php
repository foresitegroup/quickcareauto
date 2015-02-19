<?php
include_once "../inc/dbconfig.php";

switch ($_GET['a']) {
  case "all":
    $result = mysql_query("SELECT * FROM subscribers ORDER BY email ASC");
		break;
	case "unexp":
    $result = mysql_query("SELECT * FROM subscribers WHERE exported = '' ORDER BY id ASC");
		break;
}

while($row = mysql_fetch_array($result)) {
  $data .= $row['email'] . "\r\n";
}

$filetag = date("Ymd-Hi");

mysql_query("UPDATE subscribers SET exported = 'yes'");

header("refresh:0; url=subscribers-index.php");

header("Content-Type: text/plain");
header("Content-Disposition: attachment; filename=subscribers_$filetag.txt");
header("Pragma: no-cache");
header("Expires: 0");
print $data;
//exit;


?>