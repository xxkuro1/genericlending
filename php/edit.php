<?php
$id = $_POST['id'];
$key = $_POST['key'];

/*
 *
 * CREATE TABLE `db_lending`.`tbl_history` ( `pid` INT(7) NOT NULL AUTO_INCREMENT , `currentamount` DOUBLE(7,3) NOT NULL , `currentbalance` DOUBLE(7,3) NOT NULL , `penalty` INT(7) NOT NULL , `tid` INT NOT NULL , PRIMARY KEY (`pid`)) ENGINE = InnoDB;
 *
 * */

if(isset($key)){
    if($_POST['key'] == "edit"){
        echo $key." at row ". $id;

    }

}


?>