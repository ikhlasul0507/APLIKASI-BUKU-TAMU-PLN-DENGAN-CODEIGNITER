	
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
							    <label for="exampleInputEmail1">Nama Lengkap</label>
							    <input type="text" class="form-control" name="nama_admin" value="<?= set_value('nama_admin'); ?>" >
							    <small class="text-danger"><?php echo form_error('nama_admin'); ?></small>
							    
							  </div>
							   <div class="form-group">
							    <label >Jenis Kelamin</label>
							     <select class="form-control" name="jenis_kelamin" style="height: 45px">
							      <option>Laki-laki</option>
							      <option>Perempuan</option>
							     </select>
							     <small class="text-danger"><?php echo form_error('jenis_kelamin'); ?></small>
							  </div>
							   <div class="form-group">
							    <label >Email</label>
							    <input type="text" class="form-control" name="email_admin" value="<?= set_value('email_admin'); ?>">
							     <small class="text-danger"><?php echo form_error('email_admin'); ?></small>
							  </div>
							   <div class="form-group">
							    <label >Username</label>
							    <input type="text" class="form-control" name="username_admin" value="<?= set_value('username_admin'); ?>">
							     <small class="text-warning">*Max 8 Karakter</small>
							      <small class="text-danger"><?php echo form_error('username_admin'); ?></small>
							  </div>
							   <div class="form-group">
							    <label >Password</label>
							    <input type="password" class="form-control" name="password_admin">
								 <small class="text-warning">*Max 8 Karakter</small>
								  <small class="text-danger"><?php echo form_error('password_admin'); ?></small>
							  </div>
							  <div class="form-group">
							    <label >Ulangi password</label>
							    <input type="password" class="form-control" name="password_admin1">
								 <small class="text-warning">*Max 8 Karakter</small>
								  <small class="text-danger"><?php echo form_error('password_admin1'); ?></small>
							  </div>
							  <div class="form-group">
							    <label >Photo</label>
							    <input type="file" class="form-control"  name="photo_admin">
							     <small class="text-warning">*Ukuran Max 1 Mb format jpg,jpeg,png</small>
							     <small class="text-danger"><?php echo form_error('photo_admin'); ?></small><br>
							      <small class="text-danger"><?= $this->session->flashdata('msg'); ?></small>
							  </div>
							  <button type="submit" class="btn btn-primary">Simpan</button>
							</form>
							</div>
						</div>
					</div>

				</div>
			</div>
	</div>	<!--/.main-->
