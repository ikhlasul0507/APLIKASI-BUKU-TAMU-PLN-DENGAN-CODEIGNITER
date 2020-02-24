<?php 
include '..\..\koneksi.php';

//$email_user = $_POST['email_user'];
//$password_user = $_POST['password_user'];

	$sql="SELECT * From tbl_user where email_user AND password_user ";
	$tampil = mysqli_query($conn,$sql);

	$cek = mysqli_num_rows($tampil);

if ($cek = 1){
	header("location:../beranda.php");
}
else
{
	header("location:");
}
?>