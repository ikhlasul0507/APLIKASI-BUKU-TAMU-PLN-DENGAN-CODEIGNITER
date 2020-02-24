<marquee behavior="scroll" direction="left" bgcolor="white">
 <div class="row">
  <?php foreach ($berita as $brt) :?>
  <div class="col-md-3">
   <div class="card " style="max-width: 340px; margin-left: 10px;">
    <div class="row no-gutters">
     <div class="col-md-4">
      <img src="<?php echo base_url();?>assets/admin/img/<?= $brt['photo_berita']; ?>" height="100px" width="50px" class=" card-img berita" alt="berita">
     </div>
     <div class="col-md-8">
      <div class="card-body">
       <small class="card-title text-primary"><?= word_limiter($brt['waktu_berita'],3); ?></small><br>

       <p><b><small class="card-text"><?= word_limiter($brt['judul_berita'],3); ?></small></b></p>
       <!-- mulai modal -->
       <button type="button" class="badge badge-primary float-right" data-toggle="modal" data-target="#modal_detail<?php echo $brt['id_berita'];?>">
        Detail
       </button>
      </div>
     </div>
    </div>
   </div>
  </div>
 <?php endforeach; ?>
 </div>
 </marquee>
 <!-- akhir berita -->

      <?php
        foreach($berita as $brt):
            $id_berita=$brt['id_berita'];
            $waktu_berita=$brt['waktu_berita'];
            $judul_berita=$brt['judul_berita'];
            $isi_berita=$brt['isi_berita'];
        ?>

       <!-- Modal -->
     <div class="modal fade" id="modal_detail<?php echo $brt['id_berita'];?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
         <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title" id="exampleModalScrollableTitle"><small>Waktu Update : <?= $brt['waktu_berita'];?> </small></h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
           </button>
          </div>
          <div class="modal-body">
           
           <h3><?= $brt['judul_berita']; ?></h3> 
           <img src="<?php echo base_url();?>assets/admin/img/<?= $brt['photo_berita']; ?>" heigth="100px" alt="imgberita" class="gambarmodal"></small><hr style="color: black">
           <p>
            <?= $brt['isi_berita']; ?>
           </p>
          </div>
         </div>
        </div>
       </div>
      <?php endforeach;?>
       <!-- akhir modal -->
<div class="flash-data" data-flashdata ="<?= $this->session->flashdata('pesan'); ?>"></div>
<?php if ($this->session->flashdata('pesan')):?>
    
<?php endif; ?>
<!-- <script>
  const flashData = $('.flash-data').data('flashdata');

if (flashData) {
  swall({
    title : 'Data Pengunjung',
    text :'Berhasil'+ flashdata,
    type :'success'
  });
}

</script> -->
 <!-- card -->
 <div class="container">
  <div class="row">
   <div class="col ml-2">
    <div class="card price-box">
     <div class="card-header">
      <h4 style="text-align: center">Buku Tamu</h4>
     </div>
     <div class="card-body">
      <form action="" method="post">
       <div class="row margin-1">
        
        <div class="col">
         <div class="form-group">
          <input type="hidden" class="form-control" id="formGroupExampleInput" value="nama">
          <input type="text" class="form-control" placeholder="Budge Tamu Nomor" name="nomor_tamu">
           <small class="text-danger"><?php echo form_error('nomor_tamu'); ?></small>
         </div>
         <div class="form-group">
          <input type="text" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("d-m-Y"); ?>" readonly name="tanggal_tamu">
         </div>
         <div class="form-group">
          <input type="text" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date ('H:i:s');?> " readonly name="jam_masuk_tamu">
         </div>

         <div class="form-group">
          <input type="text" class="form-control"  placeholder="Nama Tamu" name="nama_tamu">
           <small class="text-danger"><?php echo form_error('nama_tamu'); ?></small>
         </div>
          <div class="form-group">
           <select class="custom-select mr-sm-2" name="nama_satpam">
               <option>---Pilih Nama Satpam---</option>
              <?php foreach ($satpam as $spm): ?>
              <option value="<?= $spm['nama_satpam'];?>"><?= $spm['nama_satpam'];?></option>
              <?php endforeach ?>
              </select>
         </div>

         <div class="form-group ">
         <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>-->
           <div id="camera">Capture</div>
    
            <div id="webcam">
                <input type=button class="btn-primary mt-3" value="Capture" onClick="preview()" name="photo_tamu">
                <input type="hidden" name="photo_tamu" value="Capture">
            </div>
            <div id="simpan" style="display:none">
                <input type=button value="Remove" onClick="batal()">
            </div>
            <div id="hasil"></div>
            <script src=" <?= base_url();?>assets/capture/webcam.min.js"></script>
            <script language="Javascript">
                // konfigursi webcam
                Webcam.set({
                    width: 320,
                    height: 200,
                    image_format: 'jpg',
                    jpeg_quality: 100
                });
                Webcam.attach( '#camera' );
         
                function preview() {
                    // untuk preview gambar sebelum di upload
                    Webcam.freeze();
                    // ganti display webcam menjadi none dan simpan menjadi terlihat
                    document.getElementById('webcam').style.display = 'none';
                    document.getElementById('simpan').style.display = '';
                }
                
                function batal() {
                    // batal preview
                    Webcam.unfreeze();
                    
                    // ganti display webcam dan simpan seperti semula
                    document.getElementById('webcam').style.display = '';
                    document.getElementById('simpan').style.display = 'none';
                }
                
                function simpan_buku() {
                    // ambil foto
                    Webcam.snap( function(data_uri) {
                        
                        // upload foto
                        Webcam.upload( data_uri, '<?= base_url();?>buku/upload_webcam', function(code, text) {} );
         
                        // tampilkan hasil gambar yang telah di ambil
                        // document.getElementById('hasil').innerHTML = 
                        //     '<p>Hasil : </p>' + 
                        //     '<img src="'+data_uri+'"/>';
                        
                        Webcam.unfreeze();
                    
                        document.getElementById('webcam').style.display = '';
                        document.getElementById('simpan').style.display = 'none';
                    } );
                }
            </script>
         </div>
        </div>
            <div class="col">
             <div class="form-group">
              <input type="text" class="form-control"  placeholder="No. HP" name="no_hp_tamu">
               <small class="text-danger"><?php echo form_error('no_hp_tamu'); ?></small>
             </div>

             <div class="form-group">
              <select class="custom-select mr-sm-2" name="bukti_tamu">
              <option>---Pilih Bukti Diri---</option>
              <?php foreach ($bukti as $bkt): ?>
              <option value="<?= $bkt['nama_bukti'];?>"><?= $bkt['nama_bukti'];?></option>
              <?php endforeach ?>
              </select>
             </div>
             <div class="form-group">
               <select class="custom-select mr-sm-2" name="menemui_tamu">
              <option>---Menemui---</option>
              <?php foreach ($pegawai as $pgw): ?>
              <option value="<?= $pgw['nama_pegawai'];?>"><?= $pgw['nama_pegawai'];?>-<?= $pgw['jabatan_pegawai'];?>-(<?= $pgw['handphone_pegawai'];?>)</option>
              <?php endforeach ?>
              </select>
             </div>
             <div class="form-group">
              <input type="text" class="form-control"  placeholder="Keterangan" name="keterangan_tamu">
             </div>
             <div class="form-group mt-3 ">
              <label class="text-dark float-left"><small>*Tanda tangan dengan kursor mouse</small></label>
              <div class="col float-right">
               <div id="signature-padi" class="m-signature-pad" style="width: 300px;height: 260px">
                    <div class="m-signature-pad--body" style=" border: 1px solid #e8e8e8; box-shadow: 0 8px 12px rgba(0, 0, 0, 0.4);" >
                      <canvas name="ttd_tamu"></canvas>
                    </div>
                    <input type="hidden" name="status_tamu" value="Proses">
                    <div class="m-signature-pad--footer">
                      <div id="simpan_buku">
                      <button type="submit" onclick="simpan_buku()" class="badge badge-primary button save mt-3 float-right">SIMPAN</button>
                    </div>
                    </div>
                </div>
              </div>
             </div>
            </div>
       </div>
       
     </div>
     </form>
    </div>
   </div>

   <div class="col-4">
    <div class="card price-box">
     <div class="card-header ">
      <h4 style="text-align: center">Statistik Pengunjung</h4>
     </div>
     <div class="card-body">
      <form>
       <div class="row ml-2">
        <div class="col">
         <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
           <i class="fa fa-user"><b> Hari Ini</b></i>
           <span class="badge badge-primary badge-pill">
                  <?php 
                    $date= date('d-m-Y');
                    $a = $this->db->query("SELECT *FROM tbl_tamu WHERE tanggal_tamu='$date'");
                    $hasil= $a->num_rows();
                    echo $hasil;
                    ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
           <i class="fas fa-user-friends"><b> Bulan Ini</b></i>
           <span class="badge badge-primary badge-pill"> <?php 
                    $date= date('m-Y');
                    $a = $this->db->query("SELECT *FROM tbl_tamu WHERE tanggal_tamu LIKE '%$date%'");
                    $hasil= $a->num_rows();
                    echo $hasil;
                    ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
           <i class="fa fa-users"><b> Tahun Ini</b></i>
           <span class="badge badge-primary badge-pill"> <?php 
                    $date= date('Y');
                    $a = $this->db->query("SELECT *FROM tbl_tamu WHERE tanggal_tamu LIKE '%$date%'");
                    $hasil= $a->num_rows();
                    echo $hasil;
                    ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
           <i class="fas fa-poll-h"><b> Total Pengunjung</b></i>
           <span class="badge badge-primary badge-pill"> 
                    <?php 
                    $date= date('d-m-Y');
                    $a = $this->db->query('SELECT *FROM tbl_tamu');
                    $hasil= $a->num_rows();
                    echo $hasil;
                    ?></span>
          </li>
         </ul>
        </div>
       </div>
      </form>
     </div>
    </div>

    <div class="card price-box">
     <div class="card-header ">
      <h4 style="text-align: center">Kritik & Saran</h4>

     </div>
     <div class="card-body">
      <form>
       <div class="row ml-2">
        <div class="col">

         <div class="form-group">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Like or Dislike">
         </div>

         <div class="form-group ">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
         </div>
        </div>
       </div>
      <button onclick="simpan_saran()" type="submit" class="btn btn-primary " data-loading-text="Loading...">Kirim</button>
     </div>
     </form>
    </div>
   </div>



  </div>


 </div>
 <!-- card akhir -->





 <!-- lokasi -->
 <div class="container">
  <h3 class="textlokasi" style="text-align: center">Lokasi Cabang PLN di Palembang</h3>
 <table class="table table-bordered table-primary bg-light lokasipln" id="lokasi">
      <thead>
        <tr style="background-color: #d1d1d150">
          <th scope="col-1" class="text-center ">No.</th>
          <th scope="col-3" style="text-align: center">Nama Lokasi</th>
          <th scope="col-">Alamat</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <th scope="row" class="text-center ">1</th>
          <td><b>PT. PLN (Persero) </b><br>
            Wilayah Sumatera Selatan Jambi dan Bengkulu
          </td>
          <td>Jl. Kapten A. Rivai No.37, Sungai Pangeran, Kec. Ilir Tim. I<br>
            Kota Palembang, Sumatera Selatan 30127<br>
            <p style="color: grey">No Telp. (0711) 350353</p>
            <a href="https://goo.gl/maps/KCUob4GCUjPSU3Y48" target="_blank">
              <i class="fa fa-map-marker"> </i> Lihat lokasi <i class="fa fa-angle-right angle-next"></i></a>
          </td>
        </tr>

        <p>
          <th scope="row" class="text-center ">2</th>
          <td><b>PT PLN Persero</b><br>
            Rayon Ampera</td>
          <td>Jl. Gub H Bastari, 8 Ulu, Kecamatan Seberang Ulu I<br>
            Kota Palembang, Sumatera Selatan 30257<br>
            <p style="color: grey">No Telp. (0711) 511708</p>
            <a href="https://goo.gl/maps/Z4jGhB578sepwpYM9" target="_blank">
              <i class="fa fa-map-marker"> </i> Lihat lokasi <i class="fa fa-angle-right angle-next"></i></a>
          </td>
        </p>


        <tr>
          <th scope="row" class="text-center ">3</th>
          <td><b>PT.PLN (Persero) WS2JB </b><br>
            Area Palembang Rayon Sukarami
          </td>
          <td>Jl. Kelapa Gading Km 9, RT. 1 RW, Karya Baru, Alang Alang Lebar, Karya Baru, Kec. Alang-Alang Lebar <br>
            Kota Palembang, Sumatera Selatan 30961<br>
            <p style="color: grey">No Telp. (0711) 4202710</p>
            <a href="https://goo.gl/maps/Dpaotyhh9u9K4jDS6" target="_blank">
              <i class="fa fa-map-marker"> </i> Lihat lokasi <i class="fa fa-angle-right angle-next"></i></a>
          </td>
        </tr>

        <tr>
          <th scope="row" class="text-center ">4</th>
          <td><b>PT. PLN Persero W. S2JB </b><br>
            Rayon Kenten
          </td>
          <td>Jl. Seduduk Putih, 8 Ilir, Kec. Ilir Tim. II, <br>
            Kota Palembang, Sumatera Selatan 30114<br>

            <a href="https://goo.gl/maps/NDRrdMcGnFcuqjqw8" target="_blank">
              <i class="fa fa-map-marker"> </i> Lihat lokasi <i class="fa fa-angle-right angle-next"></i></a>
          </td>
        </tr>

        <tr>
          <th scope="row" class="text-center ">5</th>
          <td><b>PT PLN (Persero)</b><br>
            Unit Induk Pembangkitan Sumatera Bagian Selatan
          </td>
          <td>Jl. Demang Lebar Daun No.375, Demang Lebar Daun, Kec. Ilir Bar. I<br>
            Kota Palembang, Sumatera Selatan 30131<br>
            <p style="color: grey">No Telp. (0711) 374951</p>
            <a href="https://goo.gl/maps/Dpaotyhh9u9K4jDS6" target="_blank">
              <i class="fa fa-map-marker"> </i> Lihat lokasi <i class="fa fa-angle-right angle-next"></i></a>
          </td>
        </tr>

      </tbody>
    </table>
 </div>
 <!-- lokasi akhir -->



 <!--Start of contact-->
 <section id="contact">
  <div class="container">
   <div class="row">
    <div class="col">
     <div class="contact_area text-center">
      <div style="margin-top:20px"></div>
      <h3 class="text-center">KONTAK</h3>
      <p class="text-center "> PLN UNIT INDUK WILAYAH SUMATERA SELATAN, JAMBI DAN BENGKULU<BR>UNIT PELAKSANA
       PENGATUR DISTRIBUSI</p>
      <br>
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
      </div>
     </div>
    </div>
    <div class="col-md-6">
     <div class="msg">
      <div class="msg_title">
       <h5 class="ml-3">MASUKAN PESAN</h5>
      </div>
      <div class="form_area">
       <!-- CONTACT FORM -->
       <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
        <div id="message"></div>
        <form action="<?= base_url();?>buku/proses_kontak" method="post" class="form-horizontal contact-1" role="form"
         name="contactform" id="contactform">
         <div class="form-group">
          <div class="col-sm-6">
           <input type="text" class="form-control" name="nama_kontak" id="name" placeholder="Name" >
            <small class="text-danger">
          </div>
          <div class="col-sm-6">
           <input type="text" class="form-control" name="email_kontak" id="email" placeholder="Email" >
            <small class="text-danger">
          </div>
         </div>
         <div class="form-group">
          <div class="col-sm-12">
           <input type="subject" class="form-control" id="subject" placeholder="Subject *" name="subject_kontak"
            > 
           <div class="text_area">
            <label>*Maksimal 200 karakter</label>
            <textarea name="pesan_kontak" id="msg" class="form-control" cols="100%" rows="5" placeholder="Message"
            ></textarea> <small class="text-danger"></small>
           </div><br>
           <button onclick="simpan()" type="submit" class="btn btn-primary " data-loading-text="Loading...">Kirim</button>
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
 <!--Sript notif untuk nambahkan kontak pengunjung-->
<!-- <script>
  function simpan()
  {
  swal("Terima Kasih Atas Pesan Anda", {
  buttons: false,
  icon: "success",
  title: "Berhasil !",
  timer: 3000
});}
</script> -->
