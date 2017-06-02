<?php
function auth($login, $passwd)
{
	if ($login && $passwd && file_exists('../private/passwd'))
	{
		$file = file_get_contents('../private/passwd', true);
		$tab = unserialize($file);
		$i = 0;
		while ($tab[$i] && $tab[$i]['login'] !== $login)
			$i++;
		if ($tab[$i]['login'] === $login && $tab[$i]['passwd'] === hash('Whirlpool', $passwd))
			return (TRUE);
	}
}
return FALSE;
?>
