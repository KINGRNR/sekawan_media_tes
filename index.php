<?php
include 'fungsi/koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM tb_siswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<body>

    <table border="1" align="center" cellpadding="10px">
        <tr>
            <th><a href="tampilan/insert.php">Tambah Data</a></th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th colspan="2">Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($data)) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?php
                    if ($row['jenis_kelamin'] == 0) {
                        echo "Laki-Laki";
                    } else {
                        echo "Perempuan";
                    }
                    ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><a href="tampilan/update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                <td><a href="fungsi/fungsi_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('apakah anda yakin?')">Hapus</a></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>