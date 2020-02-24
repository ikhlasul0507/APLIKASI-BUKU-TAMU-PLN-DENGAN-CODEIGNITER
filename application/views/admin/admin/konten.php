	
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
				<div class="col-lg-10">
					<div class="container mt-8"> <br>
						<a href=" <?= base_url();?>admin/tambah " class="btn btn-primary mt-3"><em class="fa fa-plus">&nbsp;</em>Tambah Data Admin</a>
						<div class="row">
							<div class="col-md-10">
					     <br>
					     <!-- notifikasi yang di kirim dari controller -->
					      	<?php if($this->session->flashdata('pesan')): ?>
						          <strong><?php echo $this->session->flashdata('pesan');?></strong>
						     <?php endif; ?>
						 <!-- End -->
						<table class="table mt-3">
							<tr style="background-color: #6495ED; text-shadow: white">
								<td>No</td><td>Nama</td><td>Jenis Kelamin</td><td>Email</td><td>Username</td><td>Password</td><td>Photo</td><td>Action</td>
							</tr>
							<?php $no=1 ; 
							foreach ($admin as $adm) :?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $adm['nama_admin']; ?></td>
								<td><?= $adm['jenis_kelamin']; ?></td>
								<td><?= $adm['email_admin']; ?></td>
								<td><?= $adm['username_admin']; ?></td>
								<td><?= $adm['password_admin']; ?></td>
								<td><a href="<?php echo base_url();?>assets/admin/img/<?= $adm['photo_admin']; ?>" target="_blank"><img src="<?php echo base_url();?>assets/admin/img/<?= $adm['photo_admin']; ?>" height="50px" width="50px"></a></td>
								<td style="background-color: yellow" align="center" valign="justify">
									<a href="<?= base_url();?>admin/edit/<?= $adm['id_admin']; ?>">
									<i class="fa fa-pencil-square-o fa-2x" style="color:green;"></i>
									</a>&nbsp&nbsp
									<a href="<?= base_url();?>admin/hapus/<?= $adm['id_admin']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">
									<i class="fa fa-trash fa-2x ml-2" style="color:red"></i>
									</a>
									
								</td>
							</tr>
							<?php endforeach; ?>
						</table>
						</div>
						</div>
					</div>

				</div>
			</div>
		
		
		
	</div>	<!--/.main-->