<?php 
include 'initialize.php';
$id = $_POST['id'];
$tid = 'tid';
$fname = 'fname';
$lname = 'lname';
$address = 'address';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
$statement = "SELECT * from tbl_transaction WHERE tid='$id'";
$result = $conn->query($statement);


//the logic
$i = 1;
if (isset($_POST['key'])){
	if($_POST['key'] == 'search'){
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td id=\"transaction_id_$row[$tid]\">$row[$tid]</td>";
                echo "<td id=\"transaction_fname_$row[$fname]\">$row[$fname]</td>";
                echo "<td>$row[$lname]</td>";
                echo "<td>$row[$address]</td>";
                echo "<td>
                <button type=\"button\"  class=\"button button-primary actionbutton\" onclick=\"viewData('view')\" 
                id=\"btnView\">View</button><button type=\"button\"  class=\"button button-primary actionbutton\" onclick=\"deleteData($row[$tid])\" 
                id=\"btnDelete\">Delete</button>
                
                </td>";
                echo "</tr>";
                $i++;
                echo "<br> Found = " . $i;
            }

        } else {
            echo "0 results";
        }
	}

}


?>