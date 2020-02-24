<?php 

    include '../koneksi.php';

    $cek=mysqli_query($conn,"select right(nomor_pengunjung, 3) as kode from tbl_pengunjung order by nomor_pengunjung DESC limit 1");

    if(mysqli_num_rows($cek)>0)
    {
        $hasil=mysqli_fetch_array($cek);
        $no_auto=$hasil['kode']+1;
        if($no_auto<10){$no_auto="PLN00".$no_auto;}      //1-9
        elseif($no_auto<100){$no_auto="PLN0".$no_auto;}  //10-90
        elseif($no_auto<1000){$no_auto="PLN".$no_auto;}  //100-999
    }
    else
    {
        $no_auto="PLN001";   //default awal
    }

 ?>
