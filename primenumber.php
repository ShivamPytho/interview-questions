<!DOCTYPE html>
<html>
<head>
	<title>Prime Number Programe </title>
</head>
<body>
<form method="post">
	<h4>->A number which is only divisible by 1 and itself is called prime number. Numbers 2, 3, 5, 7, 11, 13, 17, etc. are prime numbers.
<br>
-> 2 is the only even prime number.
<br>
-> It is a natural number greater than 1 and so 0 and 1 are not prime numbers.</h4>
	Enter A Number :- <input type="number" name="number" required=""> 
	<input type="submit" name="submit" value="submit">
	<?php
	if(isset($_POST['submit'])){
		$number = $_POST['number'];
		//echo $number;
			for ($i=2; $i <=$number-1 ; $i++) { 
				if ($number%$i==0) {
					$staus= True;
				}
	}
	if (isset($staus) && $staus) {
		echo $number." is not Prime number.";
	}
	else{
		echo $number."is prime number";
	}
}
	?>
</form>
</body>
</html>