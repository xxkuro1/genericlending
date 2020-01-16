<?php 
include 'initialize.php';
$tid = $_POST['id'];

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if (isset($_POST['key'])){
	if($_POST['key'] == 'search'){
		$conn->query("SELECT * from tbl_transaction WHERE tid='$tid'");
		echo "Search Successfully";
	}

}


?>