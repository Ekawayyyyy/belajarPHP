<?php 
//mengambil data json
$json_data = file_get_contents('anggota.json');

//konversi json ke array
$anggota = json_decode($json_data, true);

//hapus data
$indeks = $_GET["indeks"];
unset($anggota[$indeks]);

//reset id pada array
$anggota = array_values($anggota);

//konversi kembali array ke json
$json_update = json_encode($anggota, JSON_PRETTY_PRINT);

//simpan data
file_put_contents('anggota.json', $json_update);

//arahkan ke read
header("location:data.php");

?>