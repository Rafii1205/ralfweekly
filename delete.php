<?php
require 'function.php';
$id=$_GET["id"];


if(hapus($id) > 0){
    echo "<script>alert('berhasil dihapus');
    window.location.href='mahasiswa.php'</script>";
}else{
    echo "<script>alert('gagal menghapus data!');
    window.location.href='mahasiswa.php'</script>";
}
?>