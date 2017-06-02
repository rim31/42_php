#!/usr/bin/php
<?php
if ($argc >= 2)
{
	$str = ereg_replace("( +)", " ", $argv[1]);
	$str = trim($str);
	$str = explode(" ", "$str");
	$a = count($str);
	$tmp = $str[0];
	$str[0] = $str[$a];
	$str[$a] = $tmp;
	for ($i = 0; $i <= $a; $i++)
	{
		echo $str[$i];
		if ($i < $a && $i > 0)
		echo " ";
	}
}
?>
