<?php 

    include 'koneksi.php';


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


if(isset($_GET['cari'])){

    $query = mysqli_query($conn, "SELECT * FROM daftar WHERE username = 'admin'");
    $row_query = mysqli_fetch_array($query);

}
else{
    $katakunci="";
}

 ?>

</script>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="icon" type="image/png" href="img/logo_PLN.png">
        <title>PLN Jakabaring </title>

        <!--    Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!--Fontawesom-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />

        <link rel="stylesheet" href="css/isotope/style.css">

        <!--Main Stylesheet-->
        <link href="css/style.css" rel="stylesheet">

        <!--Responsive Framework-->
        <link href="css/responsive.css" rel="stylesheet">

        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll" data-target="#header">

        <!--Start Hedaer Section-->
        <section id="header">
            <div class="header-area" >
                <div class="top_header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                                <div class="address">
                                    <i class="fa fa-home floatleft"></i>
                                    <p>Jalan Gubernur H A Bastari Jakabaring, Palembang</p>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                                <div class="phone">
                                    <i class="fa fa-phone floatleft"></i>
                                    <p>(0711) 512965,520179)</p>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-md-4">
                                <div class="social_icon text-right">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                        </div>
                        <!--End of row-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of top header-->
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav" style="background: linear-gradient(to right, #EEEEEE,#008888 ); " >
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand custom_navbar-brand" href="#"><img src="img/Logopln.png" style="height: 60px; width: 180px"  alt=""></a>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li class="active"><a href="#header">BERANDA<span class="sr-only">(current)</span></a></li>
                                    <li><a class="js-scroll-trigger" href="#welcome">PLN</a></li>
                                    <li><a class="js-scroll-trigger" href="#contact">KONTAK</a></li>
                                    <li><a class="js-scroll-trigger" href="#volunteer">PROFIL</a></li>
                                    
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->



        <!--Start of slider section-->
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_overlay">
                            <img src="img/img1.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
        
                                    <h2>PEMBANGKIT LISTRIK NEGARA</h2>
                                    <a href="https://www.pln.co.id/" target="_blank" class="custom_btn ">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item With Active-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img2.jpeg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                   <h2>PEMBANGKIT LISTRIK NEGARA</h2>
                                    
                                    <a href="https://www.pln.co.id/" target="_blank" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <h2>PEMBANGKIT LISTRIK NEGARA</h2>
                                    <a href="https://www.pln.co.id/" target="_blank" class="custom_btn">Read  More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item-->
                </div>
                <!--End of Carousel Inner-->
            </div>
        </section>
        <!--end of slider section-->



        <!--Start of welcome section-->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>APLIKASI SISTEM INFORMASI PENGUNJUNG</h2>
                            <p>PLN UNIT INDUK WILAYAH SUMATERA SELATAN, JAMBI DAN BENGKULU<BR>UNIT PELAKSANA PENGATUR DISTRIBUSI</p>
                        </div>
                    </div>
                </div>
            </div>

                <!--End of row-->
             <div class="container">

                <div class="row">
                   
                            <div class="col-md-2">
                                <div class="item">
                                    <div class="single_item">
                                        <div class="item_list">
                                            <div class="welcome_icon">
                                                <i class="fa fa-home" data-toggle="modal" data-target="#beranda"></i>
                                                <!-- Modal -->
                                    <div class="modal fade" id="beranda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                    <script type="text/javascript" src="chart/chart.js"></script>

                                            <h3><B>GRAFIK PENGUNJUNG</B></h3>
                                            <H6>PLN UNIT INDUK WILAYAH SUMATERA SELATAN, JAMBI DAN BENGKULU<BR>UNIT PELAKSANA PENGATUR DISTRIBUSI</H6>
                                            <HR>
                                            <div style="width: 400 px; margin: 0px auto;">
                                                <canvas id="myChart"></canvas>
                                            </div>
                                       <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Bagian Operasi Distribusi ", "Bagian Telekomunikasi", "Other"],
                datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $jumlah_operasi = mysqli_query($conn,"select * from tbl_pengunjung where tujuan_pengunjung='Bagian Operasi Distribusi'");
                    echo mysqli_num_rows($jumlah_operasi);
                    ?>, 
                    <?php 
                    $jumlah_scada = mysqli_query($conn,"select * from tbl_pengunjung where tujuan_pengunjung='Bagian SCADA & Telekomunikasi'");
                    echo mysqli_num_rows($jumlah_scada);
                    ?>, 
                    <?php 
                    $jumlah_other = mysqli_query($conn,"select * from tbl_pengunjung where tujuan_pengunjung='Other'");
                    echo mysqli_num_rows($jumlah_other);
                    ?>, 
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>   
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                           
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                            </div>
                                            <h4>Beranda</h4>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-2">
                                <div class="item">
                                    <div class="single_item">
                                        <div class="item_list">
                                            <div class="welcome_icon">
                                                <i class="fa fa-users" data-toggle="modal" data-target="#exampleModal"></i>
                                                <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">

                                                           <form action="proses\simpan_pengunjung.php" method="post"> 
                                                        <p class="text-center"><H3><B>FORMULIR DATA PENGUNJUNG</B></H3></p><hr>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                      <input type="date" class="form-control" id="tanggal" name="tanggal_pengunjung">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                      <input type="email" class="form-control" id="email" placeholder="Email" name="email_pengunjung" autocomplete="off" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" id="nomor" 
                                                                      value="<?php  echo $no_auto; ?>" name="nomor_pengunjung" readonly>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                      <input type="number" class="form-control" id="handphone" placeholder="Handphone" name="handphone_pengunjung" autocomplete="off"  required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama_pengunjung" autocomplete="off" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" id="asal" placeholder="Asal" name="asal_pengunjung" autocomplete="off" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                     <select name="jenis_kelamin_pengunjung" class="form-control">
                                                                        <option>--Pilih--</option>
                                                                        <option>Laki-laki</option>
                                                                        <option>Perempuan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" id="keperluan" placeholder="Keperluan" name="keperluan_pengunjung" autocomplete="off" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan" name="pekerjaan_pengunjung" autocomplete="off" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                     <select name="tujuan_pengunjung" class="form-control">
                                                                        <option>--Pilih--</option>
                                                                        <option>Bagian Operasi Distribusi</option>
                                                                        <option>Bagian SCADA & Telekomunikasi</option>
                                                                        <option>Other</option>
                                                                    </select>
                                                                </div>
                                                                
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                    <div class="form-check ">
                                                                     
                                                                    </div>
                                                            </div>
                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="Submit" class="btn btn-primary" name="Simpan">Simpan</button>
                                                         </form>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                            </div>
                                             <h4>Pengunjung</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-2">
                                <div class="item">
                                    <div class="single_item">
                                        <div class="item_list">
                                            <div class="welcome_icon">
                                                <i class="fa fa-weixin" data-toggle="modal" data-target="#Modal"></i>
                                                <!-- Modal -->
                                                    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">

                                                           <form action="proses\simpan_kritik_saran.php" method="post">

                                                                <p class="text-center"><H3><B>FORMULIR DATA KRITIK & SARAN</B></H3></p><hr>
                                                                  
                                                                
                                                               <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                     <input type="text" class="form-control" placeholder="Masukan Kode" name="nomor_pengunjung" onkeyup="isi_otomatis()" id="nomor_pengunjung" required autocomplete="off">
                                                                       
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" placeholder="Handphone" name="handphone_kritik_saran" id="handphone_pengunjung" 
                                                                       readonly>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" name="tanggal_kritik_saran" value="" placeholder="Tanggal " readonly id="tanggal_pengunjung">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                      <input type="email" class="form-control" placeholder="Email" name="email_kritik_saran" id="email_pengunjung" required value="" readonly>
                                                                   
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control"  placeholder="Nama" name="nama_kritik_saran" id="nama_pengunjung" required value="" readonly>
                                                                      <div class="form-check">
                                                                     
                                                                    </div>
                                                                     
                                                                 
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                     <textarea name="kritik_saran"  class="form-control" cols="30" rows="8" placeholder="Kritik & Saran" required></textarea>
                                                                    </div>
                                                                  </div>
                                                                 
                                                             </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="Submit" class="btn btn-primary">Simpan</button>
                                                          </div>
                                                        </div>
                                                         </form>
                                                         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
                                                         </script>
                                                         <script src="js/jquery-1.12.3.min.js"></script>

                                                                   <script type="text/javascript">
                                                                    function isi_otomatis(){
                                                                        var nomor_pengunjung= $("#nomor_pengunjung").val();
                                                                        $.ajax({
                                                                            url:'proses-ajak.php',
                                                                            data :"nomor_pengunjung="+nomor_pengunjung,

                                                                        }).success(function(data){
                                                                            var json = data,
                                                                            obj= JSON.parse(json);
                                                                            $ ("#handphone_pengunjung").val(obj.handphone_pengunjung);
                                                                            $ ("#tanggal_pengunjung").val(obj.tanggal_pengunjung);
                                                                            $ ("#email_pengunjung").val(obj.email_pengunjung);
                                                                            $ ("#nama_pengunjung").val(obj.nama_pengunjung);
                                                                        });
                                                                    }
                                                                </script>
                                                      </div>
                                                    </div>
                                            </div>
                                             <h4>Kritik & Saran</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-2">
                                <div class="item">
                                    <div class="single_item">
                                        <div class="item_list">
                                            <div class="welcome_icon">
                                                <i class="fa fa-leaf" data-toggle="modal" data-target="#about"></i>
                                                <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <ul class="list-group">
                                                          <li class="list-group-item active"><h2>Profil Perusahaan</h2></li>
                                                          <li class="list-group-item"> <b>Visi</b> <br>
                                Diakui sebagai Perusahaan Kelas Dunia yang Bertumbuh kembang, Unggul dan terpercaya dengan bertumpu pada Potensi Insani.
                                                          </li>
                                                          <li class="list-group-item"><b>Misi </b><br>
                                Menjalankan bisnis kelistrikan dan bidang lain yang terkait, berorientasi pada kepuasan pelanggan, anggota perusahaan dan pemegang saham.
                                Menjadikan tenaga listrik sebagai media untuk meningkatkan kualitas kehidupan masyarakat.
                                Mengupayakan agar tenaga listrik menjadi pendorong kegiatan ekonomi.
                                Menjalankan kegiatan usaha yang berwawasan lingkungan.</li>
                                                          <li class="list-group-item"><b>Moto</b><br>
                                Listrik untuk Kehidupan yang Lebih Baik</li>
                                                          <li class="list-group-item"><b>Maksud dan Tujuan Perseroan</b><br>
                                Untuk menyelenggarakan usaha penyediaan tenaga listrik bagi kepentingan umum dalam jumlah dan mutu yang memadai serta memupuk keuntungan dan melaksanakan penugasan Pemerintah di bidang ketenagalistrikan dalam rangka menunjang pembangunan dengan menerapkan prinsip-prinsip Perseroan Terbatas</li>
                                                          <li class="list-group-item"><b>Sejarah PLN</b><br>
                                Berawal di akhir abad 19, bidang pabrik gula dan pabrik ketenagalistrikan di Indonesia mulai ditingkatkan saat beberapa perusahaan asal Belanda yang bergerak di bidang pabrik gula dan pebrik teh mendirikan pembangkit tenaga lisrik untuk keperluan sendiri <br>Antara tahun 1942-1945 terjadi peralihan pengelolaan perusahaan-perusahaan Belanda tersebt oleh Jepang, setelah Belanda menyerah kepada pasukan tentara Jepang di awal Perang Dunia II <br> Proses peralihan kekuasaan kembali terjadi di akhir Perang Dunia II pada Agustus 1945, saat Jepang menyerah kepada Sekutu. Kesempatan ini dimanfaatkan oleh para pemuda dan buruh listrik melalui delagasi Buruh/Pegawai Listrik dan Gas yang bersama-sama dengan Pemimpin KNI Pusat berinisiatif menghadap Presiden Soekarno untuk menyerahkan perusahaan-perusahaan tersebut kepada Pemerintah Republik Indinesia. Pada 27 Oktober 1945, Presiden Soekarno membentuk Jawatan Listrik dan Gas di bawah Departemen Pekerjaan Umum dan Tenaga dengan kapasitas pembangkit tenaga listrik sebesar 157,5 MW.<br>

                                Pada tanggal 1 januari 1961, Jawatan Listrik dan Gas diubah menjadi BPU-PLN (Bada Pemimpin Umum Perusahaan Listrik Negara) yang bergerak di bidang listrik, gas dan kokas yang dibubarkan pada tanggal 1 Januari 1965. Pada saat yang sama, 2 (dua) perusahaan negara yaitu Perusahaan Listrik Negara (PLN) sebagai pengelola tenaga listrik milik negara dan Perusahaan Gas Negara (PGN) sebagai pengelola gas diresmikan.<br>

                                Pada tahun 1972, sesuai dengan Peraturan Pemerintah No. 17, status Perusahaan Listrik Negara (PLN) ditetapkan sebagai Perusahaan Umum Listrik Negara dan sebagai Pemegang Kuasa Usaha Ketenagalistrikan (PKUK) dengan tugas menyediakan tenaga listrik bagi kepentingan umum.<br>

                                Seiring dengan kebijakan Pemerintah yang memberikan kesempatan kepada sektor swasta untuk bergerak dalam bisnis penyediaan listrik, maka sejak tahun 1994 status PLN beralih dari Perusahaan Umum menjadi Perusahaan Perseroan (Persero) dan juga sebagai PKUK dalam menyediakan listrik bagi kepentingan umum hingga sekarang
                                    </li>
                                                          <li class="list-group-item"><b>
                                                            Alamat PT PLN (Persero)<br>
                                                            Jalan Trunojoyo Blok M – I No 135<br>
                                                            Kebayoran Baru, Jakarta 12160, Indonesia<br>
                                                            Telp : 021 – 7251234, 7261122<br>
                                                            fax : 021 – 7221330<br>
                                                            <a href="https://drive.google.com/file/d/1QgNDQJxO5hTDQnIAMql94QQna5L9VtwA/view?usp=sharing" target="_blank">Download Company Profile PT PLN (Persero)</a>
                                                        </b>

                                                          </li>
                                                         
                                                        </ul>
                               
                               
                                
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                             <h4>About</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of col-md-3-->
                            <div class="col-md-2">
                                <div class="item">
                                    <div class="single_item">
                                        <div class="item_list">
                                            <div class="welcome_icon">
                                                <i class="fa fa-bullhorn" data-toggle="modal" data-target="#info"></i>
                                    <!-- Modal -->
                                    <div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body width-600">
    <?php
    // Menampilkan data berdasarkan table murid yang tanggalnya kurang dari 5 hari
    $sql="SELECT * From tbl_info order by tanggal_info desc LIMIT 10";
    $tampil = mysqli_query($conn,$sql);

    ?>
  
                                                <div class="list-group">
                                                  <a href="#" class="list-group-item list-group-item-action active">
                                                    10 Update Info Terbaru !!!
                                                  </a>
                                                  <?php while($s=mysqli_fetch_array($tampil)) { 

                                                        if (file_exists("admin/img/foto_$s[judul_info].png"))
                                                        {
                                                        //jika ada
                                                        $foto="<a href='admin/img/foto_$s[judul_info].png' target='blank''>
                                                        <img src='admin/img/foto_$s[judul_info].png' width=200px height=100px>
                                                        </a>
                                                        ";
                                                    }
                                                    else
                                                    {
                                                        //jika tidak ada
                                                        $foto="";
                                                    }
                                                    ?>

                                                  <a href='admin/img/foto_$s[judul_info].png' target='blank'' class="list-group-item list-group-item-action">
                                                    <table>
                                                        <tr>
                                                            <td width="250px" valign="top">
                                                                Dokumentasi Info
                                                                <br><br><br>
                                                                <marquee>
                                                             <?= $foto; ?>
                                                                </marquee>
                                                                
                                                            </td>
                                                            <td valign="top">
                                                           <h6><b> <?php echo "$s[tanggal_info]";?></b><h6><br>
                                                            <h3><u><?php echo "$s[judul_info]";?></u></h3><br>
                                                            <p>
                                                           <h6> <?php echo "$s[deskripsi_info]";?></h6>
                                                            </p>
                                                       </td>
                                                        </tr>
                                                    </table>
                                                </a>
                                                   <?php } ?>
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                           
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                            </div>
                                             <h4>Info</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of col-md-3-->
                            <div class="col-md-2">
                                <div class="item">
                                    <div class="single_item">
                                        <div class="item_list">
                                            <div class="welcome_icon">
                                                <i class="fa fa-map-pin" data-toggle="modal" data-target="#exampleModalScrollable"></i>
                                               <!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
    <table border="1" align="center" border="3" width="550px">
        <tr>
            <th colspan="5" bgcolor="yellow">PETA PERSEBARAN PT.PLN PERSERO PALEMBANG </th>
        </tr>
        <tr>
            <td><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15937.697341705558!2d104.7486181!3d-2.9796474!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15a3b02e86b43649!2sPT.+PLN+(Persero)+Wilayah+Sumatera+Selatan+Jambi+dan+Bengkulu!5e0!3m2!1sid!2sid!4v1561997660397!5m2!1sid!2sid" width="350" height="100" frameborder="0" style="border:0" allowfullscreen></iframe></td>
            <td>Jl.Kapten A. Rivai No.37<br>
                Sungai Pangeran, Kec. Ilir Tim. I<br>
                Kota Palembang, Sumatera Selatan 30127</td>
        </tr>
        <tr border="1" width="350px">
        
            <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15937.374598044404!2d104.76964202675966!3d-3.0018552650208457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x76b4584a754b4ecc!2sPT+PLN+Persero+Rayon+Ampera!5e0!3m2!1sid!2sid!4v1561998076156!5m2!1sid!2sid" width="350" height="100" frameborder="0" style="border:0" allowfullscreen></iframe></td>
            <td>Jl. Gub H Bastari, 8 Ulu <br>
                Kecamatan Seberang Ulu I <br>
                Kota Palembang, Sumatera Selatan 30257<br>
                Telepon: (0711) 511708<br>
                Provinsi: Sumatera Selatan</td>
        </tr>
        
        <tr>
            <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6145069843838!2d104.71026691475684!3d-2.9266388978684166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b747b727291ab%3A0xd3b169a5b2a57971!2sPT.PLN+(Persero)+WS2JB+Area+Palembang+Rayon+Sukarami!5e0!3m2!1sid!2sid!4v1561998163727!5m2!1sid!2sid" width="350" height="100" frameborder="0" style="border:0" allowfullscreen></iframe></td>
            <td> Jl. Kelapa Gading Km 9 <br>
                RT. 1 RW, Karya Baru <br>
                Alang Alang Lebar, Karya Baru <br>
                Alang Alang Lebar, Kota Palembang <br>
            Sumatera Selatan 30961, Indonesia  </td>
        </tr>
        <tr>
            <td><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127500.77723088046!2d104.65580985670417!3d-2.9865589450966556!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5450544a5845e73%3A0x9d518a73d701df00!2sPT.+PLN+Persero+W.+S2JB+Rayon+Kenten!5e0!3m2!1sid!2sid!4v1561998479305!5m2!1sid!2sid" width="350" height="100" frameborder="0" style="border:0" allowfullscreen></iframe></td>
            <td>Jalan Residen Rozak No.2180, 2 Ilir<br>
             Kec. Kalidoni, Kota Palembang <br>
             Sumatera Selatan 30163<br>
            Telepon: (0711) 719103<br>
            Provinsi: Sumatera Selatan</td>
        </tr>
        <tr>
            <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.5374985294407!2d104.76450731475683!3d-2.948218997852738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5450544a5845e73%3A0x9d518a73d701df00!2sPT.+PLN+Persero+W.+S2JB+Rayon+Kenten!5e0!3m2!1sid!2sid!4v1561998747540!5m2!1sid!2sid" width="350" height="100" frameborder="0" style="border:0" allowfullscreen></iframe></td>
            <td>Jl. Seduduk Putih, 8 Ilir, <br>
                Kec. Ilir Tim. II, Kota Palembang<br>
                Sumatera Selatan 30114<br>
                Telepon: (0711) 818200<br>
                Provinsi: Sumatera Selatan
            </td>
        </tr>
        <tr>
            <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.483311618077!2d104.73480581475684!3d-2.9633096978417903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75c09fd3955b%3A0x38c4e1e992a45e0e!2sPT+PLN+(Persero)+Unit+Induk+Pembangkitan+Sumatera+Bagian+Selatan!5e0!3m2!1sid!2sid!4v1561998928520!5m2!1sid!2sid" width="350" height="100" frameborder="0" style="border:0" allowfullscreen></iframe></td>
            <td>Jl. Demang Lebar Daun No.375 <br>
                Demang Lebar Daun, Kec. Ilir Bar. I<br>
                Kota Palembang, Sumatera Selatan 30151<br>
                Provinsi: Sumatera Selatan<br>
                Telepon: (0711) 374951</td>
        </tr>
    </table>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        
      </div>
    </div>
  </div>
</div>
                                            </div>
                                             <h4>Lokasi</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!--End of col-md-3-->
                    </div>
               
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of welcome section-->



        <!--Start of volunteer-->
        <section id="volunteer">
            <div class="container">
                <div class="row vol_area">
                    <div class="col-md-8">
                        <div class="volunteer_content">
                            <h3>Magang<span>Lemak</span></h3>
                            <p>TERIMA KASIH KEPADA PIHAK PLN UNIT INDUK WILAYAH SUMATERA SELATAN, JAMBI DAN BENGKULU UNIT PELAKSANA PENGATUR DISTRIBUSI<BR>
                                YANG TELAH MEMBERIKAN KONTRIBUSI TERBAIK TERHADAP KAMI 
                            </p>
                        </div>
                    </div>
                    <!--End of col-md-8-->
                    <div class="col-md-3 col-md-offset-1">
                        <div class="join_us">
                            <a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">DETAIL DEVELOPMENT</a>
                            <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body col-md-12">
                                       <div class="container">
                                                
                                                <h3 class="MD-5">Profil Development</h3>
                                                
                                              <div class="row">
                                                <div class="col-md-2">
                                                 <div class="card" style="width: 15rem;">
                                                      <img src="img/amal.png" class="card-img-top" alt="...">
                                                      <div class="card-body">
                                                        <HR>
                                                        <h6 class="card-title"><B>IKHLASUL AMAL</B></h6>
                                                        <HR>
                                                        
                                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#amal">Detail...</a>
                                                        <!-- Modal -->
                                                            <div class="modal fade" id="amal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                              <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <div class="card mb-3" style="max-width: 540px;">
                                                                      <div class="row no-gutters">
                                                                        <div class="col-md-4">
                                                                          <img src="img/amal.png" class="card-img" alt="...">
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                          <div class="card-body">
                                                                            <h3 class="card-title"><B>PROFIL</B></h3>
                                                                            <p class="card-text">
                                                                                <ul class="list-group">
                                                                                  <li class="list-group-item">IKHLASUL AMAL</li>
                                                                                  <li class="list-group-item">D3 MANAJEMEN INFORMATIKA</li>
                                                                                  <li class="list-group-item">KOTA BUMI, 05 JULI 1999</li>
                                                                                  <li class="list-group-item">082280524264</li>
                                                                                  <li class="list-group-item">DESA KOTA BUMI KEC TANJUNG LUBUK KAB OGAN KOMERING ILIR</li>
                                                                                </ul>
                                                                            </p>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                  <div class="card" style="width: 15rem;">
                                                      <img src="img/angel.jpeg" class="card-img-top" alt="...">
                                                      <div class="card-body">
                                                        <HR>
                                                        <h6 class="card-title"><B>ANGEL MONICA PUTRI</B></h6>
                                                        <HR>
                                                        
                                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#angel" >Detail...</a>
                                                         <!-- Modal -->
                                                            <div class="modal fade" id="angel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                              <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <div class="card mb-3" style="max-width: 540px;">
                                                                      <div class="row no-gutters">
                                                                        <div class="col-md-4">
                                                                          <img src="img/angel.jpeg" class="card-img" alt="...">
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                          <div class="card-body">
                                                                            <h3 class="card-title"><B>PROFIL</B></h3>
                                                                            <p class="card-text">
                                                                                <ul class="list-group">
                                                                                  <li class="list-group-item">ANGEL MONICA PUTRI</li>
                                                                                  <li class="list-group-item">D3 MANAJEMEN INFORMATIKA</li>
                                                                                  <li class="list-group-item">PAGARALAM, 10 OKTOBER 1999</li>
                                                                                  <li class="list-group-item">089693973567</li>
                                                                                  <li class="list-group-item">JALAN LUNJUK JAYA GANG TANJUNG</li>
                                                                                </ul>
                                                                            </p>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                  <div class="card" style="width: 15rem;">
                                                      <img src="img/wawan.jpg" class="card-img-top" alt="...">
                                                      <div class="card-body">
                                                        <HR>
                                                        <h6 class="card-title"><B>WAWAN</B></h6>
                                                        <HR>
                                                        
                                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#wawan">Detail...</a>
                                                         <!-- Modal -->
                                                            <div class="modal fade" id="wawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                              <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <div class="card mb-3" style="max-width: 540px;">
                                                                      <div class="row no-gutters">
                                                                        <div class="col-md-4">
                                                                          <img src="img/wawan.jpg" class="card-img" alt="...">
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                          <div class="card-body">
                                                                            <h3 class="card-title"><B>PROFIL</B></h3>
                                                                            <p class="card-text">
                                                                                <ul class="list-group">
                                                                                  <li class="list-group-item">WAWAN</li>
                                                                                  <li class="list-group-item">D3 MANAJEMEN INFORMATIKA</li>
                                                                                  <li class="list-group-item">PALEMBANG, 02 MEI 1998</li>
                                                                                  <li class="list-group-item">083173370700</li>
                                                                                  <li class="list-group-item">DESA BABATAN SAUDAGAR 3 KEC PAMULUTAN KAB OGAN ILIR</li>
                                                                                </ul>
                                                                            </p>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                      </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <HR>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row and vol_area-->
            </div>
            <!--End of container-->
        </section>
        <!--end of volunteer-->

      

        <!--Start of contact-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>KONTAK</h3>
                            <p>PLN UNIT INDUK WILAYAH SUMATERA SELATAN, JAMBI DAN BENGKULU<BR>UNIT PELAKSANA PENGATUR DISTRIBUSI</p>
                        </div>
                    </div>
                </div>
                <BR>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="office">
                            <div class="title">
                                <h5>INFO LOKASI PERUSAHAAN</h5>
                            </div>
                            <div class="office_location">
                                <div class="address">
                                    <i class="fa fa-map-marker"><span>Jalan Gubernur H A Bastari Jakabaring, Palembang</span></i>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone"><span>(0711) 512965,520179)</span></i>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope"><span>pln123@pln.co.id</span></i>
                                </div>
                                <div ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1992.1578020830088!2d104.77641337746643!3d-3.009536077110374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9d94a080cc79%3A0x76b4584a754b4ecc!2sPT+PLN+Persero+Rayon+Ampera!5e0!3m2!1sid!2sid!4v1561989961346!5m2!1sid!2sid" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="msg">
                            <div class="msg_title">
                                <h5>MASUKAN PESAN</h5>
                            </div>
                            <div class="form_area">
                                <!-- CONTACT FORM -->
                                <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                    <div id="message"></div>
                                    <form action="proses\simpan_kontak.php" method="post" class="form-horizontal contact-1" role="form" name="contactform" id="contactform">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="nama_kontak" id="name" placeholder="Name" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="email_kontak" id="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="subject" class="form-control" id="subject" placeholder="Subject *" name="subjek_kontak" required>
                                                <div class="text_area">
                                                    <textarea name="pesan_kontak" id="msg" class="form-control" cols="100%" rows="8" placeholder="Message" required></textarea>
                                                </div>
                                                <br><br>
                                                <button type="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-6-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of contact-->



        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>@ 2019 - Design By Magang Lemak <span><a href="#">&#9798;</a></span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <p>Company @ <a href="http://www.polsri.ac.id/" target="_blank">Politeknik Negeri Sriwijaya</a></p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->



        <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="js/jquery-1.12.3.min.js"></script>

        <!--Counter UP Waypoint-->
        <script src="js/waypoints.min.js"></script>
        <!--Counter UP-->
        <script src="js/jquery.counterup.min.js"></script>

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="js/gmaps.min.js"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: 23.6911078,
                    lng: 90.5112799,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                });


                map.addMarker({
                    lat: 23.6911078,
                    lng: 90.5112799,
                    title: 'Office',
                    details: {
                        database_id: 42,
                        author: 'Foysal'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
                        alert('You clicked in this marker');
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="js/isotope/min/scripts-min.js"></script>
        <script src="js/isotope/cells-by-row.js"></script>
        <script src="js/isotope/isotope.pkgd.min.js"></script>
        <script src="js/isotope/packery-mode.pkgd.min.js"></script>
        <script src="js/isotope/scripts.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/custom.js"></script>

        <!--Back To Top-->
        <script src="js/backtotop.js"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="js/jquery.localScroll.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <!--WOW With Animation-->
        <script src="js/wow.min.js"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom JavaScript-->
        <script src="js/main.js"></script>
    </body>

</html>