#!/usr/bin/php
<?php
if ($argc == 2)
{
	$str = ereg_replace("( +)", " ", $argv[1]);
	$str = trim($str);
	echo $str;
}
?>
