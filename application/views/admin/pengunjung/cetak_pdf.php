<center><table>
		<tr>
			
			<td width="200px" align="right"><img src="assets/buku/img/logo1.png" width="100px" height="120px"></td>
			<td align="center" width="600px">
				<h3>LAPORAN DATA PENGUNJUNG<br>UNIT INDUK WILAYAH SUMATERA SELATAN, JAMBI DAN BENGKULU<br>UNIT PELAKSANA PENGATUR DISTRIBUSI</h3>
				<small>Dicetak pada tanggal : <?= date('d F Y, h:i:s A'); ?></small>
			</td>
			<td width="200px" align="left"><img src="assets/admin/img/pln_update.png" width="100px" height="120px"></td>
		</tr>
	</table>
	<hr size="3" color="black">
	<br>
						<table border="1" cellpadding="0" cellspacing="0">
							<thead>
							<tr bgcolor="#6495ED">
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
								
							</tr>
							</thead>
							<?php 
							$no=1; 
							foreach ($pengunjung as $pgn) :?>
							<tr>
								<td><?= $no++ ?></td>
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
								<td><?= $pgn['photo_tamu']; ?></td>
								
							</tr>
							<?php endforeach; ?>
						</table>