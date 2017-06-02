<?php
function ft_is_sort($tab)
{
	$sorttab = sort($tab);
	for($i = 0; $i <= count($tab); $i++)
	{
		if ($sorttab[$i] != $tab[$i])
			return(FALSE);
	}
	return(TRUE);
}
?>
