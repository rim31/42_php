#!/usr/bin/php
<?php
function ft_split($my_tab)
{

	$my_tab = ereg_replace("( +)", " ", $my_tab);
	$my_tab = trim($my_tab);
	if ($my_tab)
	{
		$my_tab = explode(" ", "$my_tab");
		sort($my_tab);
	}
	if ($my_tab)
		return($my_tab);
	return(array());
}

if ($argc >= 2)
{
	for ($i = 1; $i <= $argc; $i++)
	{
		$str .= " ".$argv[$i];
	}
	$str = ft_split($str);
	foreach($str as $toto)
	{
		echo "$toto\n";
	}
}
?>
