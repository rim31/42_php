#!/usr/bin/php
<?php
$str = trim($argv[1]);
echo preg_replace("/\s+/", " ", $str)."\n";
?>
