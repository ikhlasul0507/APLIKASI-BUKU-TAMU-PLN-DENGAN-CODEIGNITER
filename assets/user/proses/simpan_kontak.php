<?php 

include "..\koneksi.php";


        $sql=mysqli_query($conn, "INSERT INTO tbl_kontak VALUES 
        ('',
        '$_POST[nama_kontak]',
        '$_POST[email_kontak]',
        '$_POST[subjek_kontak]',
        '$_POST[pesan_kontak]')");
        
        if($sql)
        {

          echo "<script>alert('Data Berhasil Di Simpan');</script>";
          header ('location:../');

        }

        else
        {
          //echo"<script>alert('Gagal');</script>";
          echo mysqli_error($conn);
        }
        

 ?>