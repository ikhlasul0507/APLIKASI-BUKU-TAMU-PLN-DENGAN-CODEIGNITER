<?php 

include "..\koneksi.php";


        $sql=mysqli_query($conn, "INSERT INTO tbl_pengunjung VALUES 
        ('',
        '$_POST[tanggal_pengunjung]',
        '$_POST[email_pengunjung]',
        '$_POST[nomor_pengunjung]',
        '$_POST[handphone_pengunjung]',
        '$_POST[nama_pengunjung]',
        '$_POST[asal_pengunjung]',
        '$_POST[jenis_kelamin_pengunjung]',
        '$_POST[keperluan_pengunjung]',
        '$_POST[pekerjaan_pengunjung]',
        '$_POST[tujuan_pengunjung]')");
       
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