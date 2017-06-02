<?php
session_start();
include ("auth.php");
if ($_GET['login'] && $_GET['passwd'] && auth($_GET['login'], $_GET['passwd']))
{
	$_SESSION['loggued_on_user'] = $_GET['login'];
 	echo "OK\n";
	header("Location: chat.php");
}
else
{
	$_SESSION['loggued_on_user'] = "";
	echo "ERROR\n";
	header("Location: index.html");
}
?>
