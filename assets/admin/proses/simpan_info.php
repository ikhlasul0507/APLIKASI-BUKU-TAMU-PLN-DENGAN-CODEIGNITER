<?php 

include "..\..\koneksi.php";

   if(!empty($_FILES['u_foto']['tmp_name'])){
    move_uploaded_file($_FILES['u_foto']['tmp_name'],
    "../img/foto_$_POST[judul_info].png");
   }
   
        $sql=mysqli_query($conn, "INSERT INTO tbl_info VALUES 
        ('',
        '$_POST[tanggal_info]',
        '$_POST[judul_info]',
        '$_POST[file_info]',
        '$_POST[deskripsi_info]')");
        
        if($sql)
        {

          echo "<script>alert('Data Berhasil Di Simpan');</script>";
          header ('location:..\beranda.php?hal=info');

        }

        else
        {
          //echo"<script>alert('Gagal');</script>";
          echo mysqli_error($conn);
        }
        

 ?>