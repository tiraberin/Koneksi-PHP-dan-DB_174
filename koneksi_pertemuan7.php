<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pertemuan7";

$conn = new mysqli($servername, $username, $password, $database);

// Cek Koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>