<?php
include 'connection.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$section = $_POST['section'];
$division = $_POST['division'];
$test_type = $_POST['test_type'];
$score = $_POST['score'];
$created_on = date('Y-m-d H:i:s'); // '2021-08-01 12:00:00

$sql = "INSERT INTO historical_test (nik, nama, section, division, test_type, score, created_on) VALUES ('$nik', '$nama', '$section', '$division', '$test_type', '$score', '$created_on')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>


