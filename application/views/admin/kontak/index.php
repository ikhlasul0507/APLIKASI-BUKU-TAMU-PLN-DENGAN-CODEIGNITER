	
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
						<div class="row">
							<div class="col-md-11">
								<div class="row">
									
									<div class="col-md-9">
			
										<a href=" <?= base_url();?>admin/cetak_print" target="_blank" class="btn btn-primary mt-3 btn-small" ><em class="fa fa-print">&nbsp;</em>Print</a>
										<a href=" <?= base_url();?>admin/export_excel_kontak" class="btn btn-warning mt-3"><em class="fa fa-file">&nbsp;</em>Export Excel</a>
										<a href=" <?= base_url();?>admin/cetak_pdf " target="_blank" class="btn btn-danger mt-3"><em class="fa fa-book">&nbsp;</em>Export PDF</a>
						
									</div>
									<div class="col-md-12"><br>
										<form action="" method="post">
										<input type="text" class="form float-right ml-5" style="width: 280px; border-radius: 10px" placeholder="Pencarian" name="keyword" autocomplete="off">
										<input type="submit" class="btn-outline-success float-right" name="submit" style="background-color: #6495ED; border-radius: 10px" value="Cari..">
										</form>
									</div>
								</div>
								<br>
								 <!-- notifikasi yang di kirim dari controller -->
							      	<?php if($this->session->flashdata('pesan')): ?>
								          <strong><?php echo $this->session->flashdata('pesan');?></strong>
								     <?php endif; ?>
								 <!-- End -->
						<table class="table mt-4">
							<tr style="background-color: #6495ED; text-shadow: white">
								<td>No</td><td>Nama</td><td>Email</td><td>Subject</td><td>Pesan</td><td>Action</td>
							</tr>
							<?php $no=1 ; 
							foreach ($kontak as $knt) :?>
							<tr>
								<td><?= ++$start ?></td>
								<td><?= $knt['nama_kontak']; ?></td>
								<td><?= $knt['email_kontak']; ?></td>
								<td><?= $knt['subject_kontak']; ?></td>
								<td><?= $knt['pesan_kontak']; ?></td>
								<td style="background-color: yellow" align="center" valign="justify">
									<a href="<?= base_url();?>admin/hapus_kontak/<?= $knt['id_kontak']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">
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
						</div>
						</div>
					</div>

				</div>
			</div>
		
		
		
	</div>	<!--/.main-->