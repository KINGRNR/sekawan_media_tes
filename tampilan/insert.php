<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data Siswa</h1>
    <form action="../fungsi/fungsi_insert.php" method="post">
        <table>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jenis_kelamin" id="">
                        <option value="0">Laki-Laki</option>
                        <option value="1">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" id="" value="Buat"></td>
            </tr>
            <tr>
                <td><a href="../index.php">back</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
