<?php 

include "..\..\koneksi.php";


        $sql=mysqli_query($conn, "INSERT INTO tbl_user VALUES 
        ('',
        '$_POST[nama_user]',
        '$_POST[nim_user]',
        '$_POST[email_user]',
        '$_POST[password_user]')");
        
        if($sql)
        {

          echo "<script>alert('Data Berhasil Di Simpan');</script>";
          header ('location: ..\index.php');

        }

        else
        {
          //echo"<script>alert('Gagal');</script>";
          echo mysqli_error($conn);
        }
        
        

 ?>