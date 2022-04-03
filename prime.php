<?php
echo "Prime Number Programe</br>";


$n = 7;
$flage=0;
for ($i=2; $i <$n ; $i++) { 
    if ($n%$i==0) {
        $flage =1;
        break;
    }
}
if($flage==1){
    echo "Not Prime Noumber";
}else{
    echo "Prime No";
}
?>