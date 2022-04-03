<?php

$conn = mysqli_connect('localhost', 'root','','crudapp');
if($conn)
{
    echo "Connection Successfully...!";
}
else
{
    echo "Fatal Error .....??????????";
}

?>