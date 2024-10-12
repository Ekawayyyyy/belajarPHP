<?php
    include "koneksi.php";
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $jurusan = $_POST['jurusan'];

    $sql = "insert into tb_anggota values('$nim', '$nama', '$jabatan', '$jurusan')";
    mysqli_query($koneksi, $sql);

    header("location:indeks.php");
?>