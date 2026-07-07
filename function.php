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
 function tambah($data,$files){
    global $konek;
    $nama=htmlspecialchars($data["nama"]);
    $nim=htmlspecialchars($data["nim"]);
    $prodi=htmlspecialchars($data["prodi"]);
    $email=htmlspecialchars($data["email"]);
    $no_hp=htmlspecialchars($data["no_hp"]);
    $namafoto=$files["name"];
    $tmpfoto=$files["tmp_name"];
    $path="asset/$namafoto";

    if(move_uploaded_file($tmpfoto, $path)){
      $query="INSERT INTO mahasiswa(nama,nim,prodi,email,no_hp,foto)values ('$nama','$nim','$prodi','$email','$no_hp','$namafoto')";
      mysqli_query($konek,$query);
    }
    return mysqli_affected_rows($konek);

 }
 function edit($data,$id){
   global $konek;
    $nama=htmlspecialchars($data["nama"]);
    $nim=htmlspecialchars($data["nim"]);
    $prodi=htmlspecialchars($data["prodi"]);
    $email=htmlspecialchars($data["email"]);
    $no_hp=htmlspecialchars($data["no_hp"]);
    $namafoto=$files["name"];
    $tmpfoto=$files["tmp_name"];
    $path="asset/$namafoto";

    if(move_uploaded_file($tmpfoto, $path)){
    $query="UPDATE mahasiswa SET 
            nama='$nama',
            nim='$nim',
            prodi='$prodi',
            email='$email',
            no_hp='$no_hp',
            foto='$namafoto'
            WHERE id='$id'";
    mysqli_query($konek,$query);
    }
    return mysqli_affected_rows($konek);
 }
 
?>