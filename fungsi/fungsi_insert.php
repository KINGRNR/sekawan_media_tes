<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$jenkel = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO tb_siswa (nama,jenis_kelamin,alamat) 
    VALUES ('$nama', '$jenkel','$alamat')";

mysqli_query($conn, $query);
header('Location: ../tampilan/insert.php');
