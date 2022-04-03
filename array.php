<?php

// $arr = array("shivam", "shyam","mohen");
// echo $arr[0];
// echo "<br>";
// echo $arr[1];
// echo "<br>";
// echo $arr[2];


// $arr = array(
    
//     0 => "shivam",
//     1 => "shyam",
//     2 => "mohen"
// );
// echo $arr[1];

$arr = array(1, 2, 3, 4, 5);   
$sum = 0;  
   
//Loop through the array to calculate sum of elements  
for ($i = 0; $i < count($arr); $i++) {   
   $sum = $sum + $arr[$i];  
}    
print("Sum of all the elements of an array: " . $sum);  


?>