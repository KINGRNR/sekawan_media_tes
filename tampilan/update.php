<?php
//form edit atau update 
include "../fungsi/koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM tb_siswa WHERE id='$id'";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>
    <h1>Update Data Siswa</h1>
    <form action="../fungsi/fungsi_update.php" method="post">
        <table>
            <tr>

            </tr>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="text" name="id" value="<?= $data['id'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td><input type="text" name="nama" id="" value="<?= $data['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jenis_kelamin" id="">
                        <?php
                        if ($data['jenis_kelamin'] == 0) { ?>
                            ?>
                            <option value="0">Laki-Laki</option>
                            <option value="1">Perempuan</option>
                        <?php } else { ?>
                            <option value="1">Perempuan</option>
                            <option value="0">Laki-Laki</option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="" cols="30" rows="10"><?= $data['alamat'] ?></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" id="" value="Update"></td>
            </tr>
            <tr>
                <td><a href="../index.php">back</a></td>
            </tr>
        </table>
    </form>
</body>

</html>