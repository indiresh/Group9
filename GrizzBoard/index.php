<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Grizzboard - Ver .1</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="top-bar">
  <div class="login"><b><a href="index.php?page=sign-in.php">Login</a></b></div>
</div>
<div class="header-wrapper">
  <div class="header"><a href="index.php"><img src="images/logo.png" width="411" height="54" /></a> </div>
</div>
<div class="main-wrapper">
  <div class="content-wrapper">
    <?php
	$page = $_GET['page'];	
	if (!empty($page)) {
		include($page);
	} 	
	else {
		include('main.php');
	}
?>
  </div>
  <div class="right-wrapper">
    <?php include "links.php";?>
  </div>
</div>
<div class="footer-wrapper">
  <?php include "footer.php";?>
</div>
</body>
</html>
