	
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
							    <input type="hidden" name="id_pegawai" value=" <?= $pegawai['id_pegawai']; ?> ">
							    <input type="text" class="form-control" name="nama_pegawai" value="<?= $pegawai['nama_pegawai'];?>" >
							    <small class="text-danger"><?php echo form_error('nama_pegawai'); ?></small>
							    <br>
							   </div>
							   <div class="form-group">
							    <label for="exampleInputEmail1">Handphone</label>
							    <input type="text" class="form-control" name="handphone_pegawai" value="<?= $pegawai['handphone_pegawai'];?>">
							    <small class="text-danger"><?php echo form_error('handphone_pegawai'); ?></small>
							    <br>
							   </div>
							   <div class="form-group">
							    <label for="exampleInputEmail1">Jabatan</label>
							    <input type="text" class="form-control" name="jabatan_pegawai" value="<?= $pegawai['jabatan_pegawai'];?>" >
							    <small class="text-danger"><?php echo form_error('jabatan_pegawai'); ?></small>
							    <br>
							   </div>
							  <button type="submit" class="btn btn-primary">Edit</button>
							</form>
							</div>
						</div>
					</div>

				</div>
			</div>
	</div>	<!--/.main-->
