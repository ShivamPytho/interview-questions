<?php
//connections database 
$conn = mysqli_connect("localhost", "root", "", "crudapp");
if($conn)
{
    //echo "Connections successfully <br>";
}
else
{
    echo "fatal Error!!!";
}

$sql = "SELECT * FROM `insert_data`";
$result = mysqli_query($conn , $sql);

//find the number of record retutern
$num = mysqli_num_rows($result);
echo "$num";  
echo '<br>';

//
if($num > 0)

{
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo '<br>';
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo '<br>';
    $r=1;
    while($row = mysqli_fetch_assoc($result)){
        //echo var_dump($row);
        echo  $r . "Hello:-" .     $row['name']."Your Addres :-". $row['address']. $row['date'];

        echo "<br>";
        $r++;
    }
}

?>