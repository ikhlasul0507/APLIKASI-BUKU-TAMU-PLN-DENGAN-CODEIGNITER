<?php

	include  "../../koneksi.php";

 	if(isset($_GET['delete'])){
	$sql=mysqli_query($conn, "DELETE FROM tbl_kritik_saran WHERE id_kritik_saran='$_GET[delete]'" );
		
		if($sql)
		{
			echo"<script>alert('Data Berhasil Di Hapus !!');</script>";
			 header ('location: ..\beranda.php?hal=kritik_saran');
		}
		else
		{
			echo"<script>alert('Gagal');</script>";
		}
 	}

 ?>