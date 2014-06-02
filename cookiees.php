<?php
$i = 0;
while (True){
	$i = $i + 1;
	setcookie(strval($i), "bullshiit", time() + 500);
}
?>