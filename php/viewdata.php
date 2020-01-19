<?php
include "initialize.php";


$tid = $_POST['id'];
//rudimentary
$key = $_POST['key'];





if (isset($_POST['key'])) {
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    $statement = "SELECT * FROM tbl_transaction WHERE tid='$tid'";

    if ($_POST['key'] == 'view') {
        $sql = $conn->query($statement);
        $data = $sql->fetch_array();

        $jsonArray = array(
            'tid' => $data['tid'],
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'address' => $data['address'],
            'loaninterest' => $data['loaninterest'],
            'amount' => $data['amount'],
            'top' => $data['top'],
            'tp' => $data['tp'],
            'mp' => $data['mp'],
            'dd' => $data['dd'],
        );

        exit(json_encode($jsonArray));
    }

}


?>