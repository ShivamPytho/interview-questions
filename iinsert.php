<?php

include "conn.php";


$name = 'name';
$address = 'address';
$sql = "INSERT INTO `insert_data` (`name`, `address`, `date`) VALUES ('$name', '$address', CURRENT_TIMESTAMP)";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo "Insert Seccessfully ..!!";
}
else
{
    echo "Not Insert ....!";
}


?>