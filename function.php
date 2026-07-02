<?php
 $konek=mysqli_connect('localhost','root','','mraweekly');

 function tampildata($query)
 {
    global $konek; 
    $result=mysqli_query($konek,$query);
    $rows=[];
    while($row= mysqli_fetch_assoc($result))
    {
        $rows[]=$row;
        
    }return $rows;
 }
 function hapus($id){
    global $konek;
    
    $query = "DELETE FROM mahasiswa WHERE id= $id ";
    mysqli_query($konek, $query);
    return mysqli_affected_rows($konek);
 }
 function tambah($data){
    global $konek;
    $nama=htmlspecialchars($data["nama"]);
    $nim=htmlspecialchars($data["nim"]);
    $prodi=htmlspecialchars($data["prodi"]);
    $email=htmlspecialchars($data["email"]);
    $no_hp=htmlspecialchars($data["no_hp"]);
    $foto=htmlspecialchars($data["foto"]);

    $query="INSERT INTO mahasiswa(nama,nim,prodi,email,no_hp,foto)values ('$nama','$nim','$prodi','$email','$no_hp','$foto')";
    mysqli_query($konek,$query);
    return mysqli_affected_rows($konek);
 }
?>