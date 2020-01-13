<?php 
$db_username = "root";
$db_password = "";
$db_host = "localhost";
$db_name = "db_lending";

// open a connection to the driver
$conn = new mysqli($db_host,$db_username,$db_password);

if ($conn->connect_error) {
    echo "OOPs".$conn->connect_error;
}

$sql = "CREATE DATABASE IF NOT EXISTS db_lending";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully <br>";
} else {
    echo "Error creating database: " . $conn->error."<br>";
}


echo "This is an Init page";

?>