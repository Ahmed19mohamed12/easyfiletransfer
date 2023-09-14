<?php
include 'connect.php';
$email = $_GET['email'];
$password = $_GET['password'];
$id = $_GET['id'];
$currentGeneralPartsIndex = $_GET['generalIndex'];
while (true) {
    $query = "SELECT * FROM generalPart$currentGeneralPartsIndex WHERE email = '$email' && password = '$password' && id = '$id' ";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result)>0) {
        while ($row=mysqli_fetch_assoc($result)) {
            echo json_encode($row);
        }
        break;
    } else{
        echo"no data";
        break;
    }
}
    
?>