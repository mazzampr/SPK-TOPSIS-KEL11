<?php

$host = "localhost:3360";
$user = "root";
$pass = "";
$name = "data_hp";

try {
    //create PDO connection
    $db = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}

// melakukan koneksi ke database
$koneksi2 = mysqli_connect($host,$user,$pass);
$koneksi = new mysqli($host,$user,$pass,$name);

// cek koneksi yang kita lakukan berhasil atau tidak
if ($koneksi->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
   die('Maaf koneksi gagal: '. $koneksi->connect_error);
}
?>
