<?php
require 'function.php';
if(isset($_POST["submit"]))
{
    if(tambah($_POST,$_FILES['foto']) > 0){
    echo "<script>alert('berhasil tambah data');
    window.location.href='mahasiswa.php'</script>";
}else{
    echo "<script>alert('gagal tambah data!');
    window.location.href='mahasiswa.php'</script>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
    <header>
        <h1>WEBTI | RALF</h1>
        <table cellspacing="0" cellpadding="10px">
            <tr>
                <td><a href="index.php">home</a></td>
                <td><a href="contact.php">contact</a></td>
                <td><a href="mahasiswa.php">data</a></td>
            </tr>
        </table>
    </header>

    <div class="form-container">
        <h2>Tambah Data Mahasiswa</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="nim">NIM</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" id="nim" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="prodi">Prodi</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="prodi" id="prodi" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td>
                        <input type="email" name="email" id="email" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="no_hp">No HP</label></td>
                    <td>:</td>
                    <td>
                        <input type="number" name="no_hp" id="no_hp" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="foto">Foto</label></td>
                    <td>:</td>
                    <td>
                        <input type="file" name="foto" id="foto">
                    </td>
                </tr>

                <tr>
                    <td colspan="3" class="form-actions">
                        <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
                        <a href="mahasiswa.php" class="btn btn-secondary">Kembali</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
