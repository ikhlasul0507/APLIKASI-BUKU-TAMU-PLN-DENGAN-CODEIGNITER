	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href=" <?= base_url();?><?= $link; ?>">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active"><?= $link; ?></li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-6">
					<div class="container mt-8"> <br>
					
						<div class="row">
							<div class="col-md-8">
							<form action="" method="post" enctype="multipart/form-data">
							  <div class="form-group">
							    <label for="exampleInputEmail1">Waktu Berita</label>
							    <input type="text" class="form-control" name="waktu_berita" value=" <?= date("d F Y, h:i:s A") ?> " readonly >
							    <small class="text-danger"><?php echo form_error('waktu_berita'); ?></small>
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Judul Berita</label>
							    <input type="text" class="form-control" name="judul_berita" value="<?= set_value('judul_berita'); ?>" >
							    <small class="text-danger"><?php echo form_error('judul_berita'); ?></small>
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Isi Berita</label>
							    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="isi_berita" value="<?= set_value('isi_berita'); ?>"  ></textarea>
							    <small class="text-danger"><?php echo form_error('isi_berita'); ?></small>
							  </div>
							  <div class="form-group">
							    <label >Photo</label>
							    <input type="file" class="form-control"  name="photo_berita">
							     <small class="text-warning">*Ukuran Max 1 Mb format jpg,jpeg,png</small>
							     <small class="text-danger"><?php echo form_error('photo_berita'); ?></small>
							     <small class="text-danger"><?= $this->session->flashdata('msg'); ?></small>
							  </div>
							  <button type="submit"  class="btn btn-primary">Simpan</button>
							</form>
							</div>
						</div>
					</div>

				</div>
			</div>
	</div>	<!--/.main-->
