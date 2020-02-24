	
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
							<div class="col-md-4">
							<form action="" method="post" >
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Pegawai</label>
							    <input type="text" class="form-control" name="nama_pegawai" value="<?= set_value('nama_pegawai'); ?>" >
							    <small class="text-danger"><?php echo form_error('nama_pegawai'); ?></small>
							    <br>
							   </div>
							   <div class="form-group">
							    <label for="exampleInputEmail1">Handphone</label>
							    <input type="text" class="form-control" name="handphone_pegawai" value="<?= set_value('handphone_pegawai'); ?>" >
							    <small class="text-danger"><?php echo form_error('handphone_pegawai'); ?></small>
							    <br>
							   </div>
							   <div class="form-group">
							    <label for="exampleInputEmail1">Jabatan</label>
							    <input type="text" class="form-control" name="jabatan_pegawai" value="<?= set_value('jabatan_pegawai'); ?>" >
							    <small class="text-danger"><?php echo form_error('jabatan_pegawai'); ?></small>
							    <br>
							   </div>
							  <button type="submit" class="btn btn-primary">Simpan</button>
							</form>
							</div>
						</div>
					</div>

				</div>
			</div>
	</div>	<!--/.main-->
