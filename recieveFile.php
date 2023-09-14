<?php
include 'connect.php';
$email = $_GET['email'];
$password = $_GET['password'];
$query = "
    SELECT * FROM transferingdata WHERE email = '$email' && password = '$password'
";
$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    }
}else {
    echo "Error";
}

?>