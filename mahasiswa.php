<?php
$query="SELECT * FROM mahasiswa";
$konek=mysqli_connect('localhost','root','','mraweekly');
$result=mysqli_query($konek,$query);
// echo $result;
// echo $mhs["nim"];

?>

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

        <?php
        while($mhs= mysqli_fetch_assoc($result)){

       ?>
        <tr>
        <a href="tambah.php"><button>Tambah data</button></a>
        <td><?= $mhs['id']?></td>
        <td><?php echo $mhs['nama']?></td>
        <td><?php echo $mhs['nim']?></td>
        <td><?php echo $mhs['prodi']?></td>
        <td><?php echo $mhs['email']?></td>
        <td><?= $mhs['nama']?></td>
        <td>
            <img src="/asset/<?=$mhs['foto']?> " alt="" width='100px'></td>
        <td>
            <a href="edit.php"><button>Edit</button></a> <b>|</b> 
            <a href="delete.php"><button>hapus</button></a>
        </td>
        </tr>    
        <?php } ?>   
    </table>
</body>
</html>