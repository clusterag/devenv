<?php
function insert_into_str($string, $place, $insert){
	$around = explode($place, $string);
	return $around[0] . $insert . $around[1];
}
$test = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$test = insert_into_str($test, "BCD", "HHHHHHHHH");
echo $test;
?>