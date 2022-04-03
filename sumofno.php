<h4>To find sum of digits of a number just add all the digits.</h4>

For example,

<h3>14597 = 1 + 4 + 5 + 9 + 7</h3>  
<h4>14597 = 26</h4>

<?php  

$num = 12346;
$rem = 0;
$sum = 0;
for ($i=0; $i <= strlen($num) ; $i++) { 
	$rem = $num%10;
	//echo "$rem";die();
	$sum = $sum + $rem;  
	//echo "$sum";die();
	$num=$num/10;
	//echo "$num" ;die(); 
}

echo "Sum of digits 12346 is $sum";
?>