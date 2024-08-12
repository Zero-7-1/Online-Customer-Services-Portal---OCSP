<?php
$db_host = "localhost:3306";
$db_user = "root";
$db_password = "donotforget123";
$db_name = "ocsp_db";

// Creating Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Connection
if($conn->connect_error) {
 die("connection failed");
}
// checking connection 
// else {
// echo "connect";
// }
?>