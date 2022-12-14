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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Data Siswa</title>
</head>

<body style="padding: 100px;">

    <table class="table table-striped" style="text-align: center;">
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
                <td><a href="fungsi/fungsi_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('apakah anda yakin?')" style="color: red;">Hapus</a></td>
            </tr>
        <?php endwhile; ?>
        <tr>
            <th colspan="6"><a href="tampilan/insert.php">Tambah Data</a></th>
        </tr>
    </table>
</body>

</html>