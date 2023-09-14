<?php
include 'connect.php';

$id = $_GET['id'];
$query = "
    DELETE From transferingdata WHERE id= '$id'
";
if(mysqli_query($conn,$query)){
    // echo "<script>alert('Delete Success');</script>";
}else{
    // echo "<script>alert('Failed,note: may be it allready deleted');</script>";
}
?>