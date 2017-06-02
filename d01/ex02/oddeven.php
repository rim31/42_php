#!/usr/bin/php
<?php
while(1)
{
	echo "Entrez un nombre: ";
	fscanf(STDIN, "%s", $handle);
	if (is_numeric($handle) == true)
	{
		if ($handle % 2 == 0)
		{
			echo "Le chiffre $handle est Pair\n";
		}
		else if ($handle % 2 != 0)
		{
			echo "Le chiffre $handle est  Impair\n";
		}
	}
	else
	{
		echo "'$handle' n'est pas un chiffre\n";
	}
	$handle = NULL;
}
?>
