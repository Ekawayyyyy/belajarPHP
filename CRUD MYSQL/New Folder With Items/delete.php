<?php 
include "koneksi.php";
$id = $_GET['id'];

$data = $koneksi->query("DELETE FROM karyawan WHERE id = '$_GET[id]'");

header('location:data.php');

?>