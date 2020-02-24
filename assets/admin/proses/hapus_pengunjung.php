<?php

	include  "../../koneksi.php";

 	if(isset($_GET['delete'])){
	$sql=mysqli_query($conn, "DELETE FROM tbl_pengunjung WHERE id_pengunjung='$_GET[delete]'" );
		
		if($sql)
		{
			echo"<script>alert('Data Berhasil Di Hapus !!');</script>";
			 header ('location: ..\beranda.php?hal=pengunjung');
		}
		else
		{
			echo"<script>alert('Gagal');</script>";
		}
 	}

 ?>