<?php
if (isset($_POST["action"]) and $_POST["action"] == "Register" )
    {
    // process form
    echo "You have been registered as " . $_POST['username'] ."<br><br>";
?>
    <form action="../index.php?page=sign-in.php" method="post">
    <table>
        <tr><td align="right">Username:</td><td><?php echo $_POST['username'];?></td></tr>
        <tr><td align="right">Password:</td><td><?php echo $_POST['password'];?></td></tr>
        <tr><td align="right">Email:</td><td><?php echo $_POST['emailaddr'];?></td></tr>
        <tr><td align="right">First Name:</td><td><?php echo $_POST['firstname'];?></td></tr>
        <tr><td align="right">Last Name:</td><td><?php echo $_POST['lastname'];?></td></tr>
        <tr><td align="right">Phone Number:</td><td><?php echo $_POST['phonenbr'];?></td></tr>
        <tr><td align="right">&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td><td><input type="submit" name="action" value="Continue">&nbsp;</td></tr>
    </table>
    </form>
<?php
    }
else
    {
    // display form
?>
    [Register]<br><br>
    Register below by entering your information and clicking register...<br>
    Or <a href="../index.php?page=sign-in.php">login as an existing user</a>.<br><br><br>

    <form action="../index.php?page=register.php" method="post">
        <input type="hidden" name="action" value="login">
    <table>
        <tr><td align="right" width="125">Username:</td><td><input type="text" name="username"></td></tr>
        <tr><td align="right">Password:</td><td><input type="password" name="password"></td></tr>
        <tr><td align="right">Email:</td><td><input type="text" name="emailaddr"></td></tr>
        <tr><td align="right">First Name:</td><td><input type="text" name="firstname"></td></tr>
        <tr><td align="right">Last Name:</td><td><input type="text" name="lastname"></td></tr>
        <tr><td align="right">Phone Number:</td><td><input type="text" name="phonenbr"></td></tr>
        <tr><td align="right">&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td><td><input type="submit" name="action" value="Register">&nbsp;<input type="reset" name="reset" value="Clear"></td></tr>
    </table>
    </form>
    <br><br>
<?php
    }
?>
