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
        echo "<td>$row[$tid]</td>";
        echo "<td>$row[$fname]</td>";
        echo "<td>$row[$lname]</td>";
        echo "<td>$row[$address]</td>";
        echo "<td><button type=\"button\"  class=\"button button-primary actiobutton\">View</button><button type=\"button\"  class=\"button button-primary actiobutton\">Delete</button></td>";
        echo "</tr>";
    }

} else {
    echo "0 results";
}


?>
