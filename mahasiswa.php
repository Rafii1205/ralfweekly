<?php
require 'function.php';
$query="SELECT * FROM mahasiswa";
$mahasiswas=tampildata($query); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
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

    <div class="data-header">
        <h2>Data Mahasiswa</h2>
        <a href="tambah.php" class="btn btn-primary">+ Tambah Data</a>
    </div>

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach($mahasiswas as $mhs){
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= htmlspecialchars($mhs['nama']) ?></td>
                    <td><?= htmlspecialchars($mhs['nim']) ?></td>
                    <td><?= htmlspecialchars($mhs['prodi']) ?></td>
                    <td><?= htmlspecialchars($mhs['email']) ?></td>
                    <td><?= htmlspecialchars($mhs['no_hp']) ?></td>
                    <td>
                        <img src="asset/<?= htmlspecialchars($mhs['foto']) ?>" alt="foto <?= htmlspecialchars($mhs['nama']) ?>" width="80">
                    </td>
                    <td>
                        <a href="edit.php?id=<?= $mhs['id'] ?>" class="btn btn-success">Edit</a>
                        <span class="action-divider">|</span>
                        <a href="delete.php?id=<?= $mhs['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
