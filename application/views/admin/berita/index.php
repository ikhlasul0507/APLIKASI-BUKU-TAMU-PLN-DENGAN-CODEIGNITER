	
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
						<a href=" <?= base_url();?>admin/tambah_berita" class="btn btn-primary mt-3"><em class="fa fa-plus">&nbsp;</em>Tambah Data Berita</a>
						<div class="row">
							<div class="col-md-11">
					     <br>
					      <!-- notifikasi yang di kirim dari controller -->
					      	<?php if($this->session->flashdata('pesan')): ?>
						          <strong><?php echo $this->session->flashdata('pesan');?></strong>
						     <?php endif; ?>
						 <!-- End -->
						<table class="table mt-3">
							<tr style="background-color: #6495ED; text-shadow: white">
								<td>No</td><td>Waktu</td><td>Judul</td><td>Isi</td><td>Photo</td><td>Action</td>
							</tr>
							<?php $no=1 ; 
							foreach ($berita as $brt) :?>
							<tr>
								<td><?= ++$start ?></td>
								<td><?= $brt['waktu_berita']; ?></td>
								<td><?= $brt['judul_berita']; ?></td>
								<td><?= $brt['isi_berita']; ?></td>
								<td><a href="<?php echo base_url();?>assets/admin/img/<?= $brt['photo_berita']; ?>" target="_blank"><img src="<?php echo base_url();?>assets/admin/img/<?= $brt['photo_berita']; ?>" height="50px" width="50px"></a></td>
								<td style="background-color: yellow" align="center" valign="justify">
									<a href="<?= base_url();?>admin/edit_berita/<?= $brt['id_berita']; ?>">
									<i class="fa fa-pencil-square-o fa-2x" data-toggle="tooltip" data-placement="top" title="Edit" style="color:green"></i>
									</a>
									<a href="<?= base_url();?>admin/hapus_berita/<?= $brt['id_berita']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">
									<i class="fa fa-trash fa-2x ml-2" data-toggle="tooltip" data-placement="top" title="Hapus" style="color:red"></i>
									</a>
									
								</td>
							</tr>
							<?php endforeach; ?>
						</table>
						<center>
						<?= $this->pagination->create_links(); ?>
						</center>
						</div>
						</div>
					</div>

				</div>
			</div>
		
		
		
	</div>	<!--/.main-->