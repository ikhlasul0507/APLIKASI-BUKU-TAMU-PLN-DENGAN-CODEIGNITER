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
				<div class="col-lg-12">
					<div class="container mt-8"> <br>

					
						<div class="row">
							<div class="col-md-10">
								<div class="col-md-8">
								<a href=" <?= base_url();?>admin/tambah_pegawai " class="btn btn-primary mt-3"><em class="fa fa-plus">&nbsp;</em>Tambah Data Pegawai</a>
								</div>
								<div class="col-md-4">
										<form action="" method="post">
										<input type="text" class="form float-right ml-5" style="width: 200px; border-radius: 10px" placeholder="Cari Pegawai" name="keyword" autocomplete="off">
										<input type="submit" class="btn-outline-success float-right" style="background-color: #6495ED; border-radius: 10px" name="submit" value="Cari..">
										</form>
								</div>
								
					     <br>
					     <br>
					      <!-- notifikasi yang di kirim dari controller -->
							      	<?php if($this->session->flashdata('pesan')): ?>
								          <strong><?php echo $this->session->flashdata('pesan');?></strong>
								     <?php endif; ?>
								 <!-- End -->
						<table class="table mt-3 ml-3">
							<tr style="background-color: #6495ED; text-shadow: white">
								<td>No</td><td>Nama</td><td>Handphone</td><td>Jabatan</td><td>Action</td>
							</tr>
							<?php $no=1 ; 
							foreach ($pegawai as $pgw) :?>
							<tr>
								<td><?= ++$start ?></td>
								<td><?= $pgw['nama_pegawai']; ?></td>
								<td><?= $pgw['handphone_pegawai']; ?></td>
								<td><?= $pgw['jabatan_pegawai']; ?></td>
								<td style="background-color: yellow" align="center" valign="justify">
									<a href="<?= base_url();?>admin/edit_pegawai/<?= $pgw['id_pegawai']; ?>">
									<i class="fa fa-pencil-square-o fa-2x" data-toggle="tooltip" data-placement="top" title="Edit" style="color:green"></i>
									</a>
									<a href="<?= base_url();?>admin/hapus_pegawai/<?= $pgw['id_pegawai']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">
									<i class="fa fa-trash fa-2x ml-2" data-toggle="tooltip" data-placement="top" title="Hapus" style="color:red"></i>
									</a>
									
								</td>
							</tr>
							<?php endforeach; ?>
						</table>
						<h5>Data ke <?= $start; ?> Dari total  <?= $total_rows;?> </h5>
						<center>
						<?= $this->pagination->create_links(); ?>
						</center>
						<hr style="border-color: blue">
						<div class="row">
							<div class="col-md-5">
							<a href=" <?= base_url();?>admin/tambah_bukti" class="btn btn-primary mt-3"><em class="fa fa-plus">&nbsp;</em>Tambah Data Bukti Diri</a>
								<div class="row">
									<div class="col-md">
							     <br>
							      <!-- notifikasi yang di kirim dari controller -->
							      	<?php if($this->session->flashdata('pesanbukti')): ?>
								          <strong><?php echo $this->session->flashdata('pesanbukti');?></strong>
								     <?php endif; ?>
								 <!-- End -->
								<table class="table mt-3">
									<tr style="background-color: #6495ED; text-shadow: white">
										<td>No</td><td>Nama Bukti<td>Action</td>
									</tr>
									<?php $no=1 ; 
									foreach ($bukti as $bkt) :?>
									<tr>
										<td><?= $no++; ?></td>
										<td><?= $bkt['nama_bukti']; ?></td>
										<td style="background-color: yellow" align="center" valign="justify">
											<a href="<?= base_url();?>admin/hapus_bukti/<?= $bkt['id_bukti']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">
											<i class="fa fa-trash fa-2x ml-2" data-toggle="tooltip" data-placement="top" title="Hapus" style="color:red"></i>
											</a>
											
										</td>
									</tr>
									<?php endforeach; ?>
								</table>
								</div>
								</div>
							</div>
							<div class="col-md-2"></div>
							<div class="col-md-5">
							<a href=" <?= base_url();?>admin/tambah_satpam" class="btn btn-primary mt-3"><em class="fa fa-plus">&nbsp;</em>Tambah Data Satpam</a>
								<div class="row">
									<div class="col-md">
							     <br>
							      <!-- notifikasi yang di kirim dari controller -->
							      	<?php if($this->session->flashdata('pesansatpam')): ?>
								          <strong><?php echo $this->session->flashdata('pesansatpam');?></strong>
								     <?php endif; ?>
								 <!-- End -->
								<table class="table mt-3 ml-2">
									<tr style="background-color: #6495ED; text-shadow: white">
										<td>No</td><td>Nama Satpam<td>Action</td>
									</tr>
									<?php $no=1 ; 
									foreach ($satpam as $spm) :?>
									<tr>
										<td><?= $no++; ?></td>
										<td><?= $spm['nama_satpam']; ?></td>
										<td style="background-color: yellow" align="center" valign="justify">
											<a href="<?= base_url();?>admin/hapus_satpam/<?= $spm['id_satpam']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">
											<i class="fa fa-trash fa-2x ml-2"  data-toggle="tooltip" data-placement="top" title="Hapus" style="color:red"></i>
											</a>
											
										</td>
									</tr>
									<?php endforeach; ?>
								</table>
								</div>
								</div>
							</div>
						</div>
						<hr style="border-color: blue">
					
					</div>

				</div>
			</div>
		
		
		
	</div>	<!--/.main-->