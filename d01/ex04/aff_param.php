#!/usr/bin/php
<?php
if ($argc >= 2)
{
	$i = 0;
	foreach($argv as $toto)
	{
		if ($i != 0)
			echo "$toto\n";
		$i++;
	}
}
?>
