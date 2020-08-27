<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "db_konek";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("koneksi ke database gagal " . mysqli_connect_error());

}
echo "berhasil koneksi ke database";
mysqli_close($conn);
?>