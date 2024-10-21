<?php 
include "koneksi.php";
$kode = $_GET['kode'];

$data = $koneksi->query("DELETE FROM tb_barang WHERE kode = '$_GET[kode]'");

header('location:data.php');

?>