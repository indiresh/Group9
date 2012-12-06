<?php
if (isset($_POST["action"]) and $_POST["action"] == "login" )
    {
    // process form
    echo "You are logged as " . $_POST['username'] ."<br><br>";
?>
    <form action="../GrizzBoard/index.php?page=manageuseracct.php" method="post">
    <table>
        <tr><td align="right">Username:</td><td><?php echo $_POST['username'];?></td></tr>
        <tr><td align="right">Password:</td><td>&LT;<i>Shhh! It's a secret</i>&GT;</td></tr>
        <tr><td align="right">Email:</td><td><?php echo $_POST['emailaddr'];?></td></tr>
        <tr><td align="right">First Name:</td><td><?php echo $_POST['firstname'];?></td></tr>
        <tr><td align="right">Last Name:</td><td><?php echo $_POST['lastname'];?></td></tr>
        <tr><td align="right">Phone Number:</td><td><?php echo $_POST['phonenbr'];?></td></tr>
        <tr><td align="right">&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td><td><input type="submit" name="action" value="Continue">&nbsp;<input type="submit" name="action" value="Manage User Account"></td></tr>
    </table>
    </form>
<?php
    }
else
    {
    // display form
?>
    [Login]<br><br>
    Login below by completing the required fields and cllicking register...<br>
    Or <a href="../GrizzBoard/index.php?page=register.php">register as a new user</a>.<br><br><br>

    <form action="../GrizzBoard/index.php?page=sign-in.php" method="post">
        <input type="hidden" name="action" value="login">
    <table>
        <tr><td align="right" width="125">Username:</td><td><input type="text" name="username"></td></tr>
        <tr><td align="right">Password:</td><td><input type="password" name="password"></td></tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Login">&nbsp;<input type="reset" name="reset" value="Clear"></td></tr>
    </table>
    </form>
    <br><br>
    (<a href="../GrizzBoard/index.php?page=resetpw.php">request a password reset</a> if you forgot your password)<br><br><br>
<?php
    }
?>
