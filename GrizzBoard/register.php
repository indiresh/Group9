<?php
require_once("config.php");
define("PAGEVERSION","v20121212.123302");



//==================================================================================================
//--------------------------------------------------------------------------------------------------
function displayf1()
{
?>
<script>
//--------------------------------------------------------------------------------------------------
function validatef1d1userid()
{
var f1d1userid=document.forms["f1Register"]["f1d1userid"].value;
var rslt;
var msg1; 
var msg2; 
var reqd = true;
//    msg = "<-- UserID is requireds blank { " + f1d1userid + " }";

if (f1d1userid==null || f1d1userid=="")
    // the field is blank...
    {
    msg1 = "<I style='color:red' ><-- required field is blank...&nbsp;</I>";
    msg2 = "<I style='color:yellow'>enter userid</I>";
    rslt = false; // something is wrong...
    }
else
    // the field is not blank...
    {
    //    stat = "<DIV style='color:green' >O</DIV>";
    //    msg1 = "<I style='color:green'>nothing is wrong</I>";
    //    msg2 = "<I style='color:green'>do not change anything</I>";
    msg1 = "";
    msg2 = "";
    rslt = true; // all is okay...
    }
document.getElementById('f1d1msg1').innerHTML = msg1;
document.getElementById('f1d1msg2').innerHTML = msg2;
return rslt;
}
//--------------------------------------------------------------------------------------------------
function validatef1d2password()
{
var f1d2password=document.forms["f1Register"]["f1d2password"].value;
var rslt;
var msg1; 
var msg2; 
var reqd = true;

if (f1d2password==null || f1d2password=="")
    // the field is blank...
    {
    msg1 = "<I style='color:red' ><-- required field is blank...&nbsp;</I>";
    msg2 = "<I style='color:yellow'>enter password</I>";
    rslt = false; // something is wrong...
    }
else
    // the field is not blank...
    {
    msg1 = "";
    msg2 = "";
    rslt = true; // all is okay...
    }
document.getElementById('f1d2msg1').innerHTML = msg1;
document.getElementById('f1d2msg2').innerHTML = msg2;
return rslt;
}
//--------------------------------------------------------------------------------------------------
function validatef1d4emailaddr()
{
var f1d4emailaddr=document.forms["f1Register"]["f1d4emailaddr"].value;
var rslt;
var msg1; 
var msg2; 
var reqd = true;

if (f1d4emailaddr==null || f1d4emailaddr=="")
    // the field is blank...
    {
    msg1 = "<I style='color:red' ><-- required field is blank...&nbsp;</I>";
    msg2 = "<I style='color:yellow'>enter email address</I>";
    rslt = false; // something is wrong...
    }
else
    // the field is not blank...
    {
    msg1 = "";
    msg2 = "";
    rslt = true; // all is okay...
    }
document.getElementById('f1d4msg1').innerHTML = msg1;
document.getElementById('f1d4msg2').innerHTML = msg2;
return rslt;
}
//--------------------------------------------------------------------------------------------------
function validatef1d5firstname()
{
var f1d5firstname=document.forms["f1Register"]["f1d5firstname"].value;
var rslt;
var msg1; 
var msg2; 
var reqd = true;

if (f1d5firstname==null || f1d5firstname=="")
    // the field is blank...
    {
    msg1 = "<I style='color:red' ><-- required field is blank...&nbsp;</I>";
    msg2 = "<I style='color:yellow'>enter first name</I>";
    rslt = false; // something is wrong...
    }
else
    // the field is not blank...
    {
    msg1 = "";
    msg2 = "";
    rslt = true; // all is okay...
    }
document.getElementById('f1d5msg1').innerHTML = msg1;
document.getElementById('f1d5msg2').innerHTML = msg2;
return rslt;
}
//--------------------------------------------------------------------------------------------------
function validatef1d6lastname()
{
var f1d6lastname=document.forms["f1Register"]["f1d6lastname"].value;
var rslt;
var msg1; 
var msg2; 
var reqd = true;

if (f1d6lastname==null || f1d6lastname=="")
    // the field is blank...
    {
    msg1 = "<I style='color:red' ><-- required field is blank...&nbsp;</I>";
    msg2 = "<I style='color:yellow'>enter last name</I>";
    rslt = false; // something is wrong...
    }
else
    // the field is not blank...
    {
    msg1 = "";
    msg2 = "";
    rslt = true; // all is okay...
    }
document.getElementById('f1d6msg1').innerHTML = msg1;
document.getElementById('f1d6msg2').innerHTML = msg2;
return rslt;
}
//--------------------------------------------------------------------------------------------------
function validatef1()
{
var rsltf1d1;
var rsltf1d2;
//var rsltf1d3;
var rsltf1d4;
var rsltf1d5;
var rsltf1d6;
var rsltf1d7;
var rsltf1d8;
//--var rsltf1d9;
var rslt;
var rsltpasscomp;
var msg1; 
var msg2; 

rsltf1d1 = validatef1d1userid();
rsltf1d2 = validatef1d2password();
//rsltf1d3 = validatef1d3confpassword();
rsltf1d4 = validatef1d4emailaddr();
rsltf1d5 = validatef1d5firstname();
rsltf1d6 = validatef1d6lastname();

rslt = rsltf1d1 && rsltf1d2 && rsltf1d4 && rsltf1d5 && rsltf1d6;

if (rslt)
	// change the state variable to indicate we have valid and complete data...
	// we are ready to check the data against the database
	{
	//-- var statusold = document.getElementsByName("f1h1Action")[0].value;
	var statuschg = "f1h1s2chkuserid";
	document.getElementsByName("f1h1Action")[0].value = statuschg;
	
	//--msg1 = "";
	//--msg2 = "";
	rslt = true; // all is okay...
	}
else
	{
	//--msg1 = "<I style='color:red' >&nbsp;&nbsp;incomplete...</I>";
	//--msg2 = "<I style='color:yellow'>try again</I>";
	rslt = false; // something is wrong...
	}
//--document.getElementById('f1d9msg1').innerHTML = msg1;
//--document.getElementById('f1d9msg2').innerHTML = msg2;
return rslt;
}
//--------------------------------------------------------------------------------------------------
</script>
[Register]<br><br>
Register below by entering your information and clicking register...<br>
Or <a href="index.php?page=sign-in.php">login as an existing user</a>.<br><br><br>

<form action="index.php?page=register.php" method="post" name="f1Register" onsubmit="return validatef1()">
       	<input type="hidden" name="f1h1Action" value="f1h1s1rqstdata">
	<table border="0">
		<tr><td align="right" width="125"><sup>*[1]</sup>User ID:</td><td><input type="text" name="f1d1userid" id="f1d1userid" value="<?php echo $_POST['f1d1userid'];?>"></td><td id="f1d1msg1"><I>Choose a userid</I></td><td id="f1d1msg2"></td></tr>
		<tr><td align="right"><sup color="red">*</sup>Password:</td><td><input type="password" name="f1d2password" id="f1d2password" value="<?php echo $_POST['f1d2password'];?>"></td><td id="f1d2msg1"></td><td id="f1d2msg2"></td></tr>
		<tr><td align="right"><sup>*</sup>First Name:</td><td><input type="text" name="f1d5firstname" id="f1d5firstname" value="<?php echo $_POST['f1d5firstname'];?>"></td><td id="f1d5msg1"></td><td id="f1d5msg2"></td></tr>
		<tr><td align="right"><sup>*</sup>Last Name:</td><td><input type="text" name="f1d6lastname" id="f1d6lastname" value="<?php echo $_POST['f1d6lastname'];?>"></td><td id="f1d6msg1"></td><td id="f1d6msg2"></td></tr>
		<tr><td align="right"><sup>*</sup>Email Address:</td><td><input type="text" name="f1d4emailaddr" id="f1d4emailaddr" value="<?php echo $_POST['f1d4emailaddr'];?>"></td><td id="f1d4msg1"></td><td id="f1d4msg2"></td></tr>
		<tr><td align="right">Phone Number:</td><td><input type="text" name="f1d7phonenbr" id="f1d7phonenbr" value="<?php echo $_POST['f1d7phonenbr'];?>"></td><td id="f1d7msg1"></td><td id="f1d7msg2"></td></tr>
		<tr><td align="right">&nbsp;</td><td>&nbsp;</td><td id="f1d8msg1"></td><td id="f1d8msg2"></td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" name="f1b1submit" value="Register"></td><td id="f1d9msg1"><td id="f1d9msg2"></td></tr>
		<tr><td align="right">&nbsp;</td><td>&nbsp;</td><td id="f1d10msg1"></td><td id="f1d10msg2"></td></tr>
		<tr><td align="right"><sup>*</sup>&nbsp;</td><td colspan=3><I>required field</I></td></tr>
		<tr><td align="right"><sup>[1]</sup>&nbsp;</td><td colspan=3><I>Letters or numbers, up to 30 characters</I></td></tr>
	</table>
</form>
<br><br>
<?php
}
//--------------------------------------------------------------------------------------------------
//==================================================================================================

//--echo "dollar_POST['f1h1Action']=".$_POST["f1h1Action"]."<BR>";

if (isset($_POST["f1h1Action"]) and $_POST["f1h1Action"] == "f1h1s2chkuserid" )
	{
	//--echo "userid is set<BR>";
	$check_userid = $_POST['f1d1userid'];
	$conn = mysql_connect(SQL_HOSTDSN, SQL_USERNAME, SQL_PASSWORD) or die('Could not connect to MySQL database. ' . mysql_error());
	mysql_select_db(SQL_DBNAME,$conn);
	$query = "SELECT id FROM gbaccounts WHERE id ='$check_userid';";
	$result = mysql_query($query) or die(mysql_error());
	if (mysql_num_rows($result) != 0)
		// the userid exists...
		// the account cannot be created with this userid...
		{
		//--echo "userid already exists.<BR><BR>";
		//--echo "cannot register userid=(".$check_userid.")<BR><BR>";
		displayf1();
?>
<script>
//--		//--var statuschg = "f1h1s2chkuserid";
		var statuschg = "f1h1s1rqstdata";
		document.getElementsByName("f1h1Action")[0].value = statuschg;
		
		var f1d1msg1 = "<I style='color:red' ><-- userid already exists...&nbsp;</I>";
		var f1d1msg2 = "<I style='color:yellow'>choose a different userid</I>";
		document.getElementById('f1d1msg1').innerHTML = f1d1msg1;
		document.getElementById('f1d1msg2').innerHTML = f1d1msg2;
		
		//--f1d9msg1 = "<I style='color:red' >&nbsp;&nbsp;oops...</I>";
		//--f1d9msg2 = "<I style='color:yellow'>try again</I>";
		//--document.getElementById('f1d9msg1').innerHTML = f1d9msg1;
		//--document.getElementById('f1d9msg2').innerHTML = f1d9msg2;

</script>
<?php
		}
	else
		// the userid does not exist...
		// attempt to create this account using this userid...
		{
		echo "userid does not exist.<BR><BR>";
		echo "attemping to register userid=(".$check_userid.")<BR><BR>";
		
		//--before--$query = "INSERT INTO gbaccounts(id, password, emailaddr, firstname, lastname, phonenbr) VALUES ('" . $_POST['f1d1userid'] ."', (password('". $_POST['f1d2password'] . "')), '" . $_POST['f1d4emailaddr'] . "', '" .$_POST['f1d5firstname'] ."', '" . $_POST['f1d6lastname'] . "', '" . $_POST['f1d7phonenbr'] . "');";
		$query = "INSERT INTO "
				."gbaccounts"
				."(id"
				.", password"
				.", firstname"
				.", lastname"
				.", emailaddr"
				.", phonenbr"
				.") "
			."VALUES"
				."( '" .$_POST['f1d1userid']    ."'"
				.", (password('" .$_POST['f1d2password']  ."'))"
				.", '" .$_POST['f1d5firstname'] ."'"
				.", '" .$_POST['f1d6lastname']  ."'"
				.", '" .$_POST['f1d4emailaddr'] ."'"
				.", '" .$_POST['f1d7phonenbr']  ."'"
				.");";
		
		$result = mysql_query($query) or die(mysql_error());
?>
		Account <?php echo $_POST['f1d1userid']?> (<?php echo $_POST['f1d5firstname'] . " " . $_POST['f1d6lastname']; ?>) has been registered.<br>
		<a href="index.php">Click here</a> to continue.<br>
<?php
		}
	}
else
	{
	//--echo "is NOT set<BR>";
	displayf1();
	};

echo "pageversion { " . PAGEVERSION . " }<BR>";
?>
12:33 PM 12/12/2012
