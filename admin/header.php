<?php include_once "../inc/dbconfig.php"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <META http-equiv="Content-Type" content="text/html;charset=utf-8">
  <META http-equiv="pragma" content="no-cache">
  <META http-equiv="imagetoolbar" content="no">
  <META name="language" content="en">
  <META name="author" content="Remedi Creative">
  <META name="description" content="">
  <META name="keywords" content="">
  <title>Quick Care Auto Administration<?php if ($PageTitle != "") { echo " | " . $PageTitle; } ?></title>
  <link rel="shortcut icon" href="../images/favicon.ico">
  <link rel="stylesheet" href="../inc/qca2010.css" type="text/css" media="screen,print">
  <link rel="stylesheet" href="inc/admin.css" type="text/css" media="screen,print">
  <!--[if IE 6]><script type="text/javascript" src="../inc/IE8.js"></script><![endif]-->
  <!--[if lte IE 7]><link rel="stylesheet" href="../inc/ie6.css" type="text/css" media="screen,print"><![endif]-->
  <!--[if IE 8]><link rel="stylesheet" href="../inc/ie8.css" type="text/css" media="screen,print"><![endif]-->
  
  <script type="text/javascript" src="../inc/jquery-1.5.1.js"></script>
  <link rel="stylesheet" href="inc/jquery.cleditor.css" type="text/css" media="screen,print">
  <script type="text/javascript" src="inc/jquery.cleditor.js"></script>
  <link rel="stylesheet" href="inc/jquery.ui.datepicker.css" type="text/css" media="screen,print">
  <script type="text/javascript" src="inc/jquery.ui.datepicker.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $("#specials").cleditor({
      width: 675,
      height: 500,
      controls: "bold italic underline strikethrough subscript superscript | font size | color removeformat | bullets numbering | outdent indent | alignleft center alignright justify | rule link unlink | cut copy pastetext | source",
      docCSSFile: "../inc/qca2010.css",
      bodyStyle: "background: #FBF9F3;"
    });
    $("#detailing").cleditor({
      width: 350,
      height: 300,
      controls: "bold italic underline | removeformat | bullets numbering | alignleft center alignright | link unlink | cut copy pastetext",
      docCSSFile: "../inc/qca2010.css",
      bodyStyle: "background: #FFFFFF;"
    });
    $( "#datepicker" ).datepicker();
  });
  
  </script>
</head>
<body<?php if (preg_match("/iPhone/i", $_SERVER['HTTP_USER_AGENT'])) echo " style=\"-webkit-text-size-adjust: none;\""; ?>>

<div id="background">
  <div id="wrap">
    <div id="sidebar">
      <a href="."><img src="../images/logo.jpg" alt="Quick Care Auto" id="logo"></a>
    </div> <!-- END sidebar -->
    
    <div id="main">
      <div id="menu">
        <?php if ($PageTitle != "Login") { ?>
        <ul>
          <li><a href="forsale-index.php">Cars for Sale</a></li>
          <li><a href="detailing-index.php">Detailing Gallery</a></li>
          <li><a href="subscribers-index.php">E-mail Subscribers</a></li>
          <li><a href="specials-index.php">Specials</a></li>
        </ul>
        <?php } ?>
      </div> <!-- END menu -->
      
      <div style="clear: both;"></div>
      
      <hr>
      
      <h1><?php echo ($PageTitle != "") ? $PageTitle : "Quick Care Auto Administration"; ?></h1>
      
      <hr class="five">
      
      <div id="content-top"<?php if (preg_match("/Firefox/i", $_SERVER['HTTP_USER_AGENT'])) echo " style=\"height: 28px;\""; ?>>&nbsp;</div>