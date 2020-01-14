<?php
require_once "initialize.php";
$firstname = $conn->real_escape_string($_POST['fname']);
$lastname = $conn->real_escape_string($_POST['lname']);
$address = $conn->real_escape_string($_POST['address']);
$loaninterest = $_POST['loaninterest'];
$amount = $_POST['amount'];
$termofpayment = $_POST['top'];
$totalpaid = $_POST['tp'];
$monthlypaid = $_POST['mp'];
$duedate = $_POST['dd'];


?>