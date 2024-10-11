<?php 
//mengambil data json
$json_data = file_get_contents('mahasiswa.json');

//konversi json ke array
$mahasiswa = json_decode($json_data, true);

//hapus data
$indeks = $_GET["indeks"];
unset($mahasiswa[$indeks]);

//reset id pada array
$mahasiswa = array_values($mahasiswa);

//konversi kembali array ke json
$json_update = json_encode($mahasiswa, JSON_PRETTY_PRINT);

//simpan data
file_put_contents('mahasiswa.json', $json_update);

//arahkan ke read
header("location:read.php");

?>