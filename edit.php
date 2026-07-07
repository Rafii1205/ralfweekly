<?php
require 'function.php';
$id=$_GET["id"];
$query= "SELECT * FROM mahasiswa WHERE id=$id";
$mhs= tampildata($query)[0];
// var_dump($mhs);die;
if(isset($_POST["submit"]))
{
    
    if(edit($_POST,$_FILES,$id) > 0){
    echo "<script>alert('berhasil edit data');
    window.location.href='mahasiswa.php'</script>";
}else{
    echo "<script>alert('gagal edit data!');
    window.location.href='mahasiswa.php'</script>";
}
}   

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>

    <h2>Edit Data Mahasiswa</h2>

    <form action="" method="post" enctype=multipart/form-data>
        <table cellpadding="5">

            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama" required value="<?=$mhs['nama']?>">
                </td>
            </tr>

            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="nim" id="nim" required value="<?=$mhs['nim']?>">
                </td>
            </tr>

            <tr>
                <td><label for="prodi">Prodi</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="prodi" id="prodi" required value="<?=$mhs['prodi']?>"> 
                </td>
            </tr>

            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td>
                    <input type="email" name="email" id="email" required value="<?=$mhs['email']?>">
                </td>
            </tr>

            <tr>
                <td><label for="no_hp">No HP</label></td>
                <td>:</td>
                <td>
                    <input type="number" name="no_hp" id="no_hp" required value="<?=$mhs['no_hp']?>">
                </td>
            </tr>

            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td>
                    <input type="file" name="foto" id="foto"  value="<?=$mhs['foto']?>">
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">Edit Data</button>
                </td>
            </tr>

        </table>
    </form>

</body>
</html>