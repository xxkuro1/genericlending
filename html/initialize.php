<?php 
$db_username = "root";
$db_password = "mysql";
$db_host = "localhost";
$db_name = "db_lending";

/*
CREATE TABLE `db_lending`.`tbl_transaction` ( `id` INT(7) NOT NULL AUTO_INCREMENT , `fname` VARCHAR(255) NOT NULL , `lname` VARCHAR(255) NOT NULL , `address` VARCHAR NOT NULL , `amount` INT(15) NOT NULL , `loan_interest` INT(3) NOT NULL , `top` INT(3) NOT NULL COMMENT 'with interest' , `tp` INT(3) NOT NULL COMMENT 'with interest' , `mp` INT(3) NOT NULL COMMENT 'with interest' , `dd` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
*/



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
	