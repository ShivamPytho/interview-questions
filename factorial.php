<h3>The factorial of a number n is defined by the product of all the digits from 1 to n (including 1 and n).</h3>

<h6>For example,</h6>

<h4>4! = 4*3*2*1 = 24  </h4>
<h4>6! = 6*5*4*3*2*1 = 720</h4>

<?php
$num = 7;
$factorial = 1;
for ($i=$num; $i >=1 ; $i--) { 
	$factorial = $factorial*$i;
}
echo "factorial of $num is $factorial";

?>  