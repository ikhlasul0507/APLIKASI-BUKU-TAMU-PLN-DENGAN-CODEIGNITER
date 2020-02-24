	
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
									
										<a href=" <?= base_url();?>admin/export_excel_pengunjung" class="btn btn-warning mt-3"><em class="fa fa-book">&nbsp;</em>Export Excel</a>
										<a href=" <?= base_url();?>admin/export_pdf_pengunjung" class="btn btn-danger mt-3" target="_blank"><em class="fa fa-file">&nbsp;</em>Export PDF</a>
						
									</div>
									<div class="col-md-12"><br>
										<form action="" method="post">
										<input type="text" class="form float-right ml-5" style="width: 280px; border-radius: 10px" placeholder="Pencarian" name="keyword" autocomplete="off">
										<input type="submit" style="background-color: #6495ED; border-radius: 10px" class="btn-outline-success float-right " data-toggle="tooltip" data-placement="top" title="Cari..." name="submit" value="Cari..">
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
								<td>No</td>
								<td>Status</td>
								<td>No Tamu</td>
								<td>Handphone</td>
								<td>Nama Tamu</td>
								<td>Tanggal Masuk</td>
								<td>Menemui</td>
								<td>Jam Masuk</td>
								<td>Jam Keluar</td>
								<td>Nama Satpam</td>
								<td>Bukti Tamu</td>
								<td>Keterangan</td>
								<td>Photo</td>
								<td>Action</td>
							</tr>
							<?php  
							foreach ($pengunjung as $pgn) :?>
							<tr>
								<td><?= ++$start ?></td>
								<td>
									
									 <?php if($pgn['status_tamu']=='Proses'):?>
									<a href="<?= base_url();?>admin/lengkapi_pengunjung/<?= $pgn['id_tamu']; ?>" class="btn btn-warning btn-sm active" role="button" data-toggle="modal" aria-pressed="true"><?= $pgn["status_tamu"]; ?></a>
									<?php elseif($pgn['status_tamu']=='Selesai'):?>
									<button type="button" class="btn btn-success btn-sm" disabled><?= $pgn["status_tamu"]; ?></button>
									<?php endif; ?>
								</td>
								<td><?= $pgn['nomor_tamu']; ?></td>
								<td><?= $pgn['no_hp_tamu']; ?></td>
								<td><?= $pgn['nama_tamu']; ?></td>
								<td><?= $pgn['tanggal_tamu']; ?></td>
								<td><?= $pgn['menemui_tamu']; ?></td>
								<td><?= $pgn['jam_masuk_tamu']; ?></td>
								<td><?= $pgn['jam_keluar_tamu']; ?></td>
								<td><?= $pgn['nama_satpam']; ?></td>
								<td><?= $pgn['bukti_tamu']; ?></td>
								<td><?= $pgn['keterangan_tamu']; ?></td>
								<td><a href="<?php echo base_url();?>assets/buku/img/<?= $pgn['photo_tamu']; ?>" target="_blank"><img src="<?php echo base_url();?>assets/buku/img/<?= $pgn['photo_tamu']; ?>" height="50px" width="50px"></a></td>
								
								<td style="background-color: yellow" align="center" valign="justify">
									
									<a href="<?= base_url();?>admin/hapus_pengunjung/<?= $pgn['id_tamu']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">
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
