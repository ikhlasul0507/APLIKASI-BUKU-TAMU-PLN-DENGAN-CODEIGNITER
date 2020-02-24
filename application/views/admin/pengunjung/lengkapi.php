  
  <div class="col-sm-7 col-sm-offset-3 col-lg-8 col-lg-offset-2 main">
      <div class="row">
        <ol class="breadcrumb">
          <li><a href=" <?= base_url();?><?= $link; ?>">
            <em class="fa fa-home"></em>
          </a></li>
          <li class="active"><?= $link; ?></li>
        </ol>
      </div><!--/.row-->
      
      <div class="row">
        <div class="col-lg-5">
          <div class="container mt-8"> <br>
          
            <div class="row">
              <div class="col-md-8">
              <form action="" method="post">
                <div class="form-group">
                  <h2><?php echo validation_errors(); ?> </h2>
                  <h3>Verifikasi Data Pengunjung</h3>
                  <br>
                  <table>
                    <tr>
                      <td>Nomor Tamu</td><td><input type="text" style="width: 300px" class="form-control" name="nomor_tamu" value=" <?= $pengunjung['nomor_tamu'];?>" readonly></td>
                      <td rowspan="6" valign="top" align="center" >
                          <div class="ml-2">
                          <img src="<?php echo base_url();?>assets/buku/img/<?= $pengunjung['photo_tamu']; ?>" height="280" width="100%" class="ml-3" style="border-radius: 10%">
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Nama Tamu</td><td><input type="text" style="width: 300px" class="form-control" name="nama_tamu" value=" <?= $pengunjung['nama_tamu']; ?>" readonly></td>
                    </tr>
                    <tr>
                      <td>Bukti Tamu</td><td> <input type="text" style="width: 300px" class="form-control" name="bukti_tamu" value=" <?= $pengunjung['bukti_tamu'];?>" readonly></td>
                    </tr>
                    <tr>
                      <td>Menemui</td><td><input type="text" style="width: 300px" class="form-control" name="menemui_tamu" value=" <?= $pengunjung['menemui_tamu'];?>" readonly></td>
                    </tr>
                    <tr>
                      <td>Jam Masuk</td><td> <input type="text" style="width: 300px" class="form-control" name="jam_masuk_tamu" value=" <?= $pengunjung['jam_masuk_tamu'];?>" readonly></td>
                    </tr>
                    <tr>
                      <td>Jam Keluar</td><td> <input type="text"  style="width: 300px" class="form-control" name="jam_keluar_tamu" value=" <?php date_default_timezone_set('Asia/Jakarta'); echo date ('H:i:s');?>" readonly></td>
                    </tr>

                  </table>


                  <input type="hidden" name="id_tamu" value=" <?= $pengunjung['id_tamu'];?>">
                  <input type="hidden" name="no_hp_tamu" value=" <?= $pengunjung['no_hp_tamu'];?>">
                  <input type="hidden" name="tanggal_tamu" value=" <?= $pengunjung['tanggal_tamu'];?>">
                  <input type="hidden" name="nama_satpam" value=" <?= $pengunjung['nama_satpam'];?>">
                  <input type="hidden" name="keterangan_tamu" value=" <?= $pengunjung['keterangan_tamu'];?>">
                  <input type="hidden" name="photo_tamu" value=" <?= $pengunjung['photo_tamu'];?>">
                  <input type="hidden" name="status_tamu" value="Selesai">
                <button type="submit" class="btn btn-danger">Selesai</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    
    
    
  </div>  <!--/.main-->