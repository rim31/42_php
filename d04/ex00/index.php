<?php
session_start();
if ($_GET['submit'] === "OK" && $_GET['login'] && $_GET['passwd'])
{
	$_SESSION['submit'] = $_GET['submit'];
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
else
	$_SESSION['submit'] = "";
?>
<html>
<form method="get" action="index.php">
   <p>
	   <label for="login">login</label> :
	   <input type="text" name="login" value="<?PHP echo $_SESSION['login']?>" /><br /><br />
	   <label for="passwrd">password</label> :
	   <input type="password" name="passwrd" value="<?PHP echo $_SESSION['passwd']?>" /><br /><br />
	   <input type="submit" name="submit" value="OK" />
   </p>
</form>
</html>
