<?php
include 'connection.php';

$sql = "SELECT nik, nama, section, division, test_type, score from user";
$result = mysqli_query($conn, $sql);

if mysqli_num_rows($result) > 0 {
    while($row = mysqli_fetch_assoc($result)) {
        echo "NIK: " . $row["nik"]. "|Name: " . $row["nama"]. "|Section: " . $row["section"]. "|Division: " . $row["division"]. "|Test Type: " . $row["test_type"]. "|Score: " . $row["score"]. "<br>";
    }
} else {
    echo "0 results";
} 
