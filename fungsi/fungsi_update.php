<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenkel = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$kirim = $_POST['kirim'];
$hasil = "UPDATE tb_siswa SET nama = '$nama', jenis_kelamin = '$jenkel', alamat = '$alamat' WHERE id=$id";
if ($kirim) {
    $simpan = mysqli_query($conn, $hasil);
    header('Location: ../index.php');
}
