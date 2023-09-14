<?php
include 'connect.php';
$number = 3;
while ($number<=640) {
    $query = "CREATE TABLE GeneralPart$number (id INT(255),email VARCHAR(255),password VARCHAR(255),part longblob)";
    
    try {
        // if(mysqli_query($conn,$query)){
        //     echo "<br>Table GeneralPart$number created successfully";
        // }else {
        //     echo "Error";
        // }
        echo mysqli_query($conn,$query);
    } catch (Throwable $th) {
        echo $th;
    }
    $number = $number +1;
}


?>