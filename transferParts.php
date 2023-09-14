<?php
include 'connect.php';
$email = $_GET['email'];
$password = $_GET['password'];
$id = $_GET['id'];
$part = $_GET['part'];
$tableIndex = $_GET['generalPartIndex'];
$query = "INSERT INTO generalPart$tableIndex(id,email,password,part) VALUES('$id','$email','$password','$part')";
if(mysqli_query($conn,$query)){
    echo "part$id sent";
}
?>