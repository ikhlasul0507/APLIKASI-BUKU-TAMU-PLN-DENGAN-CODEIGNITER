 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>

						<table class="table mt-4" border="1">
							<tr ><td colspan="5" align="center"><h3>LAPORAN DATA PENGUNJUNG<br>UNIT INDUK WILAYAH SUMATERA SELATAN, JAMBI DAN BENGKULU<br>UNIT PELAKSANA PENGATUR DISTRIBUSI</h3></td></tr>
							<tr >
								<td bgcolor="#6495ED">No</td>
								<td bgcolor="#6495ED">Nama</td>
								<td bgcolor="#6495ED">Email</td>
								<td bgcolor="#6495ED">Subject</td>
								<td bgcolor="#6495ED">Pesan</td>
							</tr>
							<?php $no=1 ; 
							foreach ($kontak as $knt) :?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $knt['nama_kontak']; ?></td>
								<td><?= $knt['email_kontak']; ?></td>
								<td><?= $knt['subject_kontak']; ?></td>
								<td><?= $knt['pesan_kontak']; ?></td>
							</tr>
							<?php endforeach; ?>
						</table>