<?php
$conn = mysqli(
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
