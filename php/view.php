<?php
include "initialize.php";

//declare them instead
$tid = 'tid';
$fname = 'fname';
$lname = 'lname';
$address = 'address';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
$statement = "SELECT * FROM tbl_transaction";
$result = $conn->query($statement);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td id=\"transaction_id_$row[$tid]\">$row[$tid]</td>";
        echo "<td id=\"transaction_fname_$row[$fname]\">$row[$fname]</td>";
        echo "<td>$row[$lname]</td>";
        echo "<td>$row[$address]</td>";
        echo "<td>
                <button type=\"button\"  class=\"button button-primary actionbutton\" onclick=\"viewData($row[$tid],'view')\" 
                id=\"btnView\">View</button><button type=\"button\"  class=\"button button-primary actionbutton\" onclick=\"deleteData($row[$tid])\" 
                id=\"btnDelete\">Delete</button>
                
                </td>";
        echo "</tr>";
    }

} else {
    echo "0 results";
}


?>
