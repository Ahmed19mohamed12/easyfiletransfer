<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "easyfiletransfer"
);
if ($conn) {
     echo "success";
}else {
    echo "failed";
}
?>
