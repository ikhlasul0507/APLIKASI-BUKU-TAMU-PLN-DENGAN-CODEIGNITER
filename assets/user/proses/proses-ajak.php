<?php
include '../koneksi.php';
$nomor_pengunjung = $_GET['nomor_pengunjung'];
$query = mysqli_query($conn, "select * from tbl_pengunjung where nomor_pengunjung='$nomor_pengunjung'");
$pengunjung = mysqli_fetch_array($query);
$data = array(
            'handphone_pengunjung' =>  $pengunjung['handphone_pengunjung'],
            'tanggal_pengunjung'   =>  $pengunjung['tanggal_pengunjung'],
            'email_pengunjung'     =>  $pengunjung['jurusan'],
            'nama_pengunjung'      =>  $pengunjung['nama_pengunjung'],);
 echo json_encode($data);
?>