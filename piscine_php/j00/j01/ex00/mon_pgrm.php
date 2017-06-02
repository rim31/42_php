#!/usr/bin/php

<?php
function my_add($p1, $p2)
{
   return $p1 + $p2;
}


echo "Hello World !\n";
print("pouet\n");

$my_var = 42;
$my_str = "Coucou";
$my_tab = array("zero", "un", "deux");
$my_result = "21" + "21";
$my_hash = array("key1" => "val1", "key2" => "val2");

//echo $my_var."\n$my_str"."\n";
echo $my_result."\n";

echo $my_tab[0]."\n";
echo $my_hash["key1"]."\n";

echo "$my_tab\n";

print_r($my_tab);
echo "\n";
print(my_add("36", "6")."\n");
echo "\n";

if ($my_tab[1] == "un")
    echo "ok";
else
    echo "no";
echo "\n";

echo $argc."\n";

print_r($argv);

// creer un tableau
// 2 facons :
// $my_tab = array("zero", "un", "deux");
// ou
$my_tab = explode(";", "zero;un;deux;42");

foreach($my_tab as $elem)
{
    echo "$elem\n";

}

foreach($argv as $elem)
{
    echo "$elem\n";

}

print_r($my_tab);
?>
