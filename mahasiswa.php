<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 align="center">WEBTI | RALF</h1>
    <table border="1" cellspacing="0" cellpadding="10px" align="center">
        <tr>
            <td><a href="index.php">home</a></td>
            <td><a href="profile.php">profile</a></td>
            <td><a href="contact.php">contact</a></td>
            <td><a href="mahasiswa.php">data</a></td>
        </tr>
    </table>
    <h1>data mahasiswa</h1>
    <table border="1" cellpadding="10px" cellspacing="0" 
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>nim</th>
            <th>prodi</th>
            <th>email</th>
            <th>no_hp</th>
            <th>foto</th>
            <th>aksi</th>
        </tr>
        <tr>
        <a href="tambah.php"><button>Tambah data</button></a>
        <td>1</td>
        <td>Muhammad Rafi</td>
        <td>123123123123</td>
        <td>Teknologi Informasi</td>
        <td>Ralf@gmail.com</td>
        <td>08888888888</td>
        <td>
            <img src="/asset/logo.png" alt="" width='100px'></td>
        <td>
            <a href="edit.php"><button>Edit</button></a> <b>|</b> 
            <a href="delete.php"><button>hapus</button></a>
        </td>
        </tr>
       
    </table>

</body>

</html>