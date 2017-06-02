<?php
$tab = array();
if ($_POST['oldpw'] && $_POST['newpw'] && $_POST['login'] && $_POST['submit'] === "OK")
{
	if (file_exists('../private/passwd'))
	{
		$file = file_get_contents('../private/passwd', true);
		$tab = unserialize($file);
	}
	$check = 0;
	$i = 0;
	while ($tab[$i]  && $tab[$i]['login'] !== $_POST['login'])
		$i++;
	if ($tab[$i][$login] !== $_POST['login'] && $tab[$i]['passwd'] !== hash('Whirlpool', $_POST['oldpw']))
	{
		echo "ERROR\n";
		$check++;
	}
	if ($check === 0)
	{
		$mdp = hash('Whirlpool', $_POST['newpw']);
		$tab[$i]['login'] = $_POST['login'];
		$tab[$i]['passwd'] = $mdp;
		$file = serialize($tab);
		file_put_contents('../private/passwd', $file);
		echo "OK\n";
	}
}
else
	echo "ERROR\n";
?>
