<?php
include 'connection.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$section = $_POST['section'];
$division = $_POST['division'];
$test_type = $_POST['test_type'];
$score = $_POST['score'];

$sql = "INSERT INTO user (nik, nama, section, division, test_type, score) VALUES ('$nik', '$nama', '$section', '$division', '$test_type', '$score')";
$result = mysqli_query($conn, $sql);

?>


