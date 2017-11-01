<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "project";
$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (mysqli_connect_error()) {
    echo "Connection failed to mysql: " . mysqli_connect_error();
} 
?>