<?php
//0 1 1 2 3 5 8 13 21
$limit = 5 ;
$n1=0;
$n2=1;
$x=0;

for ($i=0; $i <= $limit; $i++) { 
    echo $n1;
    $n1 = $n1+$n2;
    $n2 = $x;
    $x = $n1;
    echo "</br>";
}
?>