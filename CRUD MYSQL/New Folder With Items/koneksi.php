<?php


$host = "localhost";
$user = "root";
$pass = "";
$database = "belajar_web";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (mysqli_connect_error()) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}


?>