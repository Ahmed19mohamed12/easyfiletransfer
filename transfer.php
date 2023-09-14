<?php
include 'connect.php';
$email = $_GET['email'];
$password = $_GET['password'];
$fileName = $_GET['fileName'];
$partsLength = $_GET['partsLength'];
$query = "
    INSERT INTO transferingdata(email,password,fileName,partsLength) VALUES('$email','$password','$fileName','$partsLength')
";
if (mysqli_query($conn,$query)) {
    echo 'sent';
}

?>