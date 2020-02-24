 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>

 						
						<table class="table mt-4" border="1">
							<tr>
								<td colspan="13" align="center" valign="justify" ><h3>LAPORAN DATA PENGUNJUNG<br>UNIT INDUK WILAYAH SUMATERA SELATAN, JAMBI DAN BENGKULU<br>UNIT PELAKSANA PENGATUR DISTRIBUSI</h3>

								</td>
							</tr>
							<tr style="font-size: 18;">
								<td bgcolor="#6495ED">>No</td>
								<td bgcolor="#6495ED">Status</td>
								<td bgcolor="#6495ED">No Tamu</td>
								<td bgcolor="#6495ED">Handphone</td>
								<td bgcolor="#6495ED">Nama Tamu</td>
								<td bgcolor="#6495ED">Tanggal Masuk</td>
								<td bgcolor="#6495ED">Menemui</td>
								<td bgcolor="#6495ED">Jam Masuk</td>
								<td bgcolor="#6495ED">Jam Keluar</td>
								<td bgcolor="#6495ED">Nama Satpam</td>
								<td bgcolor="#6495ED">Bukti Tamu</td>
								<td bgcolor="#6495ED">Keterangan</td>
								<td bgcolor="#6495ED">Photo</td>	
							</tr>
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