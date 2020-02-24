<?php 

	include "koneksi.php";
	$nomor_pengunjung = $_GET ['nomor_pengunjung'];

	 $sql= mysqli_query($conn,"SELECT *FROM tbl_pengunjung WHERE nomor_pengunjung='$nomor_pengunjung'");
	 $pln=mysqli_fetch_array($sql);
	
	 $data=array(
	 	'handphone_pengunjung' => $pln['handphone_pengunjung'],
	 	'tanggal_pengunjung' => $pln['tanggal_pengunjung'],
	 	'email_pengunjung' => $pln['email_pengunjung'],
	 	'nama_pengunjung' => $pln['nama_pengunjung']
	 	);
	 echo json_encode($data);
 ?>