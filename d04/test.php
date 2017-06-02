<?php
session_start();
// print_r $_SESSION;
if ($_GET[action] == "get" && $_GET[login] && $_GET[passwd])
{
	setcookie($_GET[login], $_GET[passwd]);
	$_SESSION['login'] = $_GET[login];
	$_SESSION['passwd'] = $_GET[passwd];
}
?>
<html>
<p>Texte avant le formulaire</p>
<form method="get" action="index.php">
   <p>
	   <label for="login">login</label> :
	   <input type="text" name="login" id="login"  value=<?PHP echo $_SESSION[login]?> placeholder="Ex : toto" size="30" maxlength="50"/><br /><br />
	   <label for="passwrd">password</label> :
	   <input type="password" name="passwrd" id="passwrd"  value=<?PHP echo $_SESSION[login]?> placeholder="Ex : pAssw0rd_compl1cat3d" size="30" maxlength="50"/><br /><br />
	   <input type="submit" value="OK" />
   </p>
   <p>
	   Texte à l'intérieur du formulaire
   </p>
</form>

<p>Texte après le formulaire</p>
</html>

<?php
session_start();
if ($_GET[submit] === "OK" && $_GET[login] && $_GET[passwd])
{
	$_SESSION[submit] = $_GET[submit];
	$_SESSION[login] = $_GET[login];
	$_SESSION[passwd] = $_GET[passwd];
}
else
	$_SESSION[submit] = "";
?>
<html>
<form method="get" action="index.php">
	   <label for="login">login</label> :
	   <input type="" name="login" value="<?PHP echo $_SESSION[login];?>"/><br />
	   <label for="passwrd">password</label> :
	   <input type="password" name="passwrd" id="passwrd" value="<?PHP echo $_SESSION[passwd];?>"/><br />
	   <input type="submit" name="submit" value="OK" />
</html>



<!-- $tab = array();
if ($_POST[passwd] && $_POST[login] && $_POST[submit] === "OK")
{
	if (!file_exists('../private'))
		mkdir('../private');
	if (file_exists('../private/passwd'))
	{
		$file = file_get_contents('../private/passwd', true);
		$tab = unserialize($file);
	}
	$check = 0;
	$i = 0;
	while ($tab[$i])
	{
		if ($tab[$i]['login'] === $_POST['login'])
		{
			echo "ERROR\n";
			$check++;
		}
		$i++;
	}
	// foreach($tab as $elem)
	// {
	// 	if ($elem['login'] === $_POST['login'])
	// 	{
	// 		echo "ERROR\n";
	// 		$check++;
	// 	}
	// }
	if ($check == 0)
	{
		$mdp = hash('Whirlpool', $_POST[passwrd]);
		// echo $mdp."\n";
		// echo $_POST[passwd]."\n";
		// $tab = array("login" => $_POST[login], "passwrd" => $mdp);
		$tab[$i]['login'] = $_POST['login'];
		$tab[$i]['passwd'] = $mdp;
		$file = serialize($tab);
		file_put_contents('../private/passwd', $file);
		echo "OK\n";
	}
}
else
	echo "ERROR\n"; -->

	<!-- function auth($login, $passwd)
	{
		// $tab = array();
		if ($login && $passwd && file_exists('../private/passwd'))
		{
			$file = file_get_contents('../private/passwd', true);
			$tab = unserialize($file);
			// $tab = unserialize(file_get_contents('../private/passwd', true));
			$i = 0;
			while ($tab[$i] && $tab[$i]['login'] !== $login)
				$i++;
			print_r($tab)."\n";
			// if ($tab[$i]['login'] === $login && $tab[$i]['passwd'] === hash('Whirlpool', $passwd))
			if ($tab[$i]['login'] !== $login || $tab[$i]['passwd']  !== hash('Whirlpool', $passwd))
				return (FALSE);

			echo "ok\n";
			return (TRUE);
			// }
		}
		//
		// return (FALSE);


		// $tab = array();
		// $mdp = hash(	'Whirlpool', $passwd);
		// $tab = unserialize(file_get_contents('../private/passwd'));
		// foreach($tab as $value)
		// {
		// 	if ($value['login'] === $login && $value['passwd'] === $mdp)
		// 		return TRUE;
		// }
		// return FALSE;

		// $tab = array();
		// $file = file_get_contents('../private/passwd', true);
		// $tab = unserialize($file);
		// // $tab = unserialize(file_get_contents('../private/passwd', true));
		// $i = 0;
		// while ($tab[$i] && $tab[$i]['login'] !== $login)
		// 	$i++;
		// // $i--;
		// // print_r($tab)."\n";
		// if (/*$tab[$i]['login'] === $login && */$tab[$i]['passwd'] == hash('Whirlpool', $passwd))
		// 	return TRUE;
		// // echo $tab[$i]['passwd']."\n".hash('Whirlpool', $passwd);
		//
		// }
		// return (FALSE);
	}
	return FALSE; -->
