<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == "POST"){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$folder = "student/";
$img = $_FILES['uploadefile']['name'];
$tmp_img =$_FILES['uploadefile']['tmp_name'];

$insert = "INSERT INTO register(fname,lname,uname,email,image) VALUES('$fname','$lname','$uname','$email','$img')";

if ($conn->query($insert)) {
			move_uploaded_file($tmp_img,$folder.$img);
               echo "Register successfully";
               exit();
            } else {
               echo "Something went wrong";
               exit();
            }
}

?>