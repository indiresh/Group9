<?php
if (isset($_POST["action"]) and $_POST["action"] == "rqstpwreset" )
    {
    // process form
    echo "A password reset request has been receieved for " . $_POST['username'] ."<br><br>";
    echo "A message has been sent to the email address of record for this account.<br><br>";
    }
else
    {
    // display form
?>
    [Reset Password]<br><br>
    Request a password reset below by completing the required fields and clicking request password reset...<br>
    Or <a href="index.php?page=sign-in.php">login with an existing user account</a>.<br><br><br>

    <form action="index.php?page=resetpw.php" method="post">
        <input type="hidden" name="action" value="rqstpwreset">
    <table>
        <tr><td align="right" width="125">Username:</td><td><input type="text" name="username"></td></tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Request Password Reset">&nbsp;<input type="reset" name="reset" value="Clear"></td></tr>
    </table>
    </form>
    <br><br>
<?php
    }
?>
