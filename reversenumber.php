<?php
$num = 23456;
$revnum = 0;
while ($num > 1) {
	$rem = $num % 10;
	//echo $rem;die();
	$revnum = ($revnum * 10) + $rem;
	//echo $revnum;die();
	$num = ($num/10);
	//echo $num;die();
}

echo "Reverce number of 23456 is :$revnum";
?>