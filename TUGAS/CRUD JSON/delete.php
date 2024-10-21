<?php 
//mengambil data json
$json_data = file_get_contents('barang.json');

//konversi json ke array
$barang = json_decode($json_data, true);

//hapus data
$indeks = $_GET["indeks"];
unset($barang[$indeks]);

//reset id pada array
$barang = array_values($barang);

//konversi kembali array ke json
$json_update = json_encode($barang, JSON_PRETTY_PRINT);

//simpan data
file_put_contents('barang.json', $json_update);

//arahkan ke read
header("location:data.php");


echo "data berhasil dihapus";

?>