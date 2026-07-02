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
?>