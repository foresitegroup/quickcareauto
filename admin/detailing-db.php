<?php
include "../inc/dbconfig.php";

switch ($_GET['a']) {
  case "add":
    mysql_query("INSERT INTO detailing (title,text) VALUES ('" . $_POST['title'] . "', '" . $_POST['text'] . "')");
    
    // Get the id of the record we just added
    $result = mysql_query("SELECT * FROM detailing ORDER BY id DESC LIMIT 1");
    $row = mysql_fetch_array($result);
    
    $loc = "detailing-edit.php?id=" . $row['id'];
    break;
  case "edit":
    mysql_query("UPDATE detailing SET title = '" . $_POST['title'] . "', text = '" . $_POST['text'] . "' WHERE id = '" . $_POST['id'] . "'");
    
    $loc = "detailing-edit.php?id=" . $_POST['id'] . "&a=l";
    break;
  case "delete":
    // Get image directory name
    $dir = "../images/detailing/" . $_GET['id'];
    
    // Delete all images in image directory and then the directory itself
    if (is_dir($dir)) {
      if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
          if ($file != "." && $file != "..") unlink($dir . "/" . $file);
        }
        closedir($dh);
      }
      rmdir($dir);
    }
    
    // Delete all image records from database
    mysql_query("DELETE FROM detailingimages WHERE detailingid = '" . $_GET['id'] . "'");
    
    // Delete main record from database
    mysql_query("DELETE FROM detailing WHERE id = '" . $_GET['id'] . "'");
    
    $loc = "detailing-index.php";
    break;
  case "publish":
    // Get the current publish state and toggle it
    $result = mysql_query("SELECT * FROM detailing WHERE id = '" . $_GET['id'] . "'");
    $row = mysql_fetch_array($result);
    $publish = (empty($row['publish'])) ? "on" : "";
    
    mysql_query("UPDATE detailing SET publish = '" . $publish . "' WHERE id = '" . $_GET['id'] . "'");
    
    $loc = "detailing-index.php";
    break;
  case "addimg":
    if ($_POST['image-e'] != "") {
      $TheImage = $_POST['image-e'];
    } else {
      if (!file_exists("../images/detailing/" . $_POST['detailingid'])) { mkdir("../images/detailing/" . $_POST['detailingid']); }
      
      $img_width = 375;
      //$img_height = 375;
      $TheImage = basename($_FILES['image']['name']);
      $target_path = "../images/detailing/" . $_POST['detailingid'] . "/tmp_" . $TheImage;
      $FinalImage = "../images/detailing/" . $_POST['detailingid'] . "/" . $TheImage;
      
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
        // Get image size and type
        list($width_orig, $height_orig, $image_type) = getimagesize($target_path);
        
        //if ($width_orig > $img_width || $height_orig > $img_height) {
        if ($width_orig > $img_width) {
          switch ($image_type) {
            case 1: $im = imagecreatefromgif($target_path); break;
            case 2: $im = imagecreatefromjpeg($target_path); break;
            case 3: $im = imagecreatefrompng($target_path); break;
            default: trigger_error('Unsupported filetype!', E_USER_WARNING); break;
          }
          
          $max_width = $img_width;
          //$max_height = $img_height;
          
          // Calculate resize numbers
          $aspect_ratio = (float) $width_orig / $height_orig;
          $img_height = round($img_width / $aspect_ratio);
          
          //while($img_height > $max_height) {
            //$img_height -= 1;
            //$img_width = round($img_height * $aspect_ratio);
          //}
          
          // Crop image if it's still too wide
          //$cropx = ($img_width > $max_width) ? round(($img_width - $max_width) / 2) : 0;
          $cropy = 0;
          $cropx = 0;
          //$cropy = ($img_height > $max_height) ? round(($img_height - $max_height) / 2) : 0;
          
          $newImg = imagecreatetruecolor($max_width, $img_height);
          imagecopyresampled($newImg, $im, 0, 0, $cropx, $cropy, $img_width, $img_height, $width_orig, $height_orig);
          
          //Generate the file, and rename it
          switch ($image_type) {
            case 1: imagegif($newImg,$FinalImage); break;
            case 2: imagejpeg($newImg,$FinalImage); break;
            case 3: imagepng($newImg,$FinalImage); break;
            default: trigger_error('Failed resize image!', E_USER_WARNING); break;
          }
          
          // Delete original file
          unlink($target_path);
        } else {
          rename($target_path, $FinalImage);
        }
      }
    }
    
    // Set sort number
    $result = mysql_query("SELECT sort FROM detailingimages WHERE detailingid = '" . $_POST['detailingid'] . "' ORDER BY sort+0 DESC LIMIT 1");
    $row = mysql_fetch_array($result);
    $sort = $row[0] + 1;
    
    mysql_query("INSERT INTO detailingimages (detailingid,image,sort,publish) VALUES ('" . $_POST['detailingid'] . "', '" . $TheImage . "', '" . $sort . "', 'on')");
    
    $loc = "detailing-edit.php?id=" . $_POST['detailingid'];
    break;
  case "addimgnu";
    // Set sort number
    $result = mysql_query("SELECT sort FROM detailingimages WHERE detailingid = '" . $_POST['detailingid'] . "' ORDER BY sort+0 DESC LIMIT 1");
    $row = mysql_fetch_array($result);
    $sort = $row[0] + 1;
    
    mysql_query("INSERT INTO detailingimages (detailingid,image,sort,publish) VALUES ('" . $_POST['detailingid'] . "', '" . $_POST['image'] . "', '" . $sort . "', 'on')");
    
    $loc = "detailing-edit.php?id=" . $_POST['detailingid'];
    break;
  case "delimg":
    // Delete image first
    //$result = mysql_query("SELECT * FROM detailingimages,detailing WHERE detailingimages.id = '" . $_GET['id'] . "' AND detailing.id = detailingimages.detailingid");
    $result = mysql_query("SELECT * FROM detailingimages WHERE id = '" . $_GET['id'] . "'");
    $row = mysql_fetch_array($result);
    unlink("../images/detailing/" . $_GET['detailingid'] . "/" . $row['image']);
    
    // Delete record
    mysql_query("DELETE FROM detailingimages WHERE id = '" . $_GET['id'] . "'");
    
    // Renumber the sort column to remove any gaps in sequence
    mysql_query("SET @new_sort = 0;");
    mysql_query("SET @sort_inc = 1;");
    mysql_query("UPDATE detailingimages SET sort = (@new_sort := @new_sort + @sort_inc) WHERE detailingid = '" . $_GET['detailingid'] . "' ORDER BY sort+0 ASC");
    
    $loc = "detailing-edit.php?id=" . $_GET['detailingid'];
    break;
  case "pubimg":
    // Get the current publish state and toggle it
    $result = mysql_query("SELECT * FROM detailingimages WHERE id = '" . $_GET['id'] . "'");
    $row = mysql_fetch_array($result);
    $publish = (empty($row['publish'])) ? "on" : "";
    
    mysql_query("UPDATE detailingimages SET publish = '" . $publish . "' WHERE id = '" . $_GET['id'] . "'");
    
    $loc = "detailing-edit.php?id=" . $_GET['detailingid'];
    break;
  case "sort":
    // Moving up or down?
    $sort = ($_GET['d'] == "u") ? $_GET['s'] - 1 : $_GET['s'] + 1;
    
    // Change sort number of neighboring record
    mysql_query("UPDATE detailingimages SET sort = '" . $_GET['s'] . "' WHERE detailingid = '" . $_GET['detailingid'] . "' AND sort = '" . $sort . "'");
    
    // Change sort number of current record
    mysql_query("UPDATE detailingimages SET sort = '" . $sort . "' WHERE id = '" . $_GET['id'] . "'");
    
    $loc = "detailing-edit.php?id=" . $_GET['detailingid'];
    break;
}

mysql_close();

header( "Location: $loc" );
?>