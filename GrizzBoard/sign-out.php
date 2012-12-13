<?php
//--require_once("config.php");
define("MYPAGEVERSION","v20121213.111402");
define("MYPAGENAME", "http://www.secs.oakland.edu/~trrothe/cse252/Project1/20121212/110101/index.php?page=sign-in.php");

session_start();
// store session data

if(isset($_SESSION['loggedin_username']))
	{
	echo "[Logout]<br><br>";
	//--echo "logging out from UserID = ".$_SESSION['loggedin_username']."<BR>";
	unset($_SESSION['loggedin_username']);
	echo "logged out<BR>";
	session_write_close();
	session_destroy();
	header("Location: index.php?page=sign-in.php");
	}
else
	{
	echo "not logged in<BR>";
	session_write_close();
	session_destroy();
	header("Location: index.php?page=sign-in.php");
	}

echo "pageversion { " . MYPAGEVERSION . " }<BR>";
?>
