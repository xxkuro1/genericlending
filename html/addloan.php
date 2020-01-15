<?php
$db_username = "root";
$db_password = "";
$db_host = "localhost";
$db_name = "db_lending";

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$address = $_POST['address'];
$loaninterest = $_POST['loaninterest'];
$amount = $_POST['amount'];
$termofpayment = $_POST['termofpayment'];
$totalpaid = $_POST['totalpaid'];
$monthlypaid = $_POST['monthlypaid'];
$duedate = $_POST['duedate'];

$date = date_create($duedate);

$formattedDate = date_format($date,"Y-m-d");


$conn = new mysqli($db_host,$db_username,$db_password,$db_name);

if(isset($_POST['key'])){
    //insert operations
    if($_POST['key'] == 'insert'){
        $statement = "INSERT INTO tbl_customer(fname,lname,address,loaninterest,amount,top,tp,mp,dd) 
        VALUES ('$firstname','$lastname','$address','$loaninterest','$amount','$termofpayment','$totalpaid','$monthlypaid','$formattedDate')";

        if($conn->query($statement) === TRUE){
            echo "Insert Successful";
        }else{
            echo $conn->error;

        }

    }

}


?>
