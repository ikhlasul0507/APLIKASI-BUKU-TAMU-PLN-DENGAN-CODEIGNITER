<?php 

include "..\..\koneksi.php";


        $sql=mysqli_query($conn, "INSERT INTO tbl_kritik_saran VALUES 
        ('',
        '$_POST[tanggal_kritik_saran]',
        '$_POST[email_kritik_saran]',
        '$_POST[nomor_pengunjung]',
        '$_POST[handphone_kritik_saran]',
        '$_POST[nama_kritik_saran]',
        '$_POST[kritik_saran]')");
        
        if($sql)
        {

          echo "<script>alert('Data Berhasil Di Simpan');</script>";
          header ('location: ..\beranda.php?hal=kritik_saran');

        }

        else
        {
          //echo"<script>alert('Gagal');</script>";
          echo mysqli_error($conn);
        }
        
        

 ?>