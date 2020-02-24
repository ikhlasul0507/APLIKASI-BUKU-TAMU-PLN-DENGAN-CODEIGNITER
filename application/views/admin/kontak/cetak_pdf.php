	<center><table>
		<tr>
			
			<td width="200px" align="right"><img src="assets/buku/img/logo1.png" width="100px" height="120px"></td>
			<td align="center" width="600px">
				<h3>LAPORAN DATA KONTAK<br>UNIT INDUK WILAYAH SUMATERA SELATAN, JAMBI DAN BENGKULU<br>UNIT PELAKSANA PENGATUR DISTRIBUSI</h3>
				<small>Dicetak pada tanggal : <?= date('d F Y, h:i:s A'); ?></small>
			</td>
			<td width="200px" align="left"><img src="assets/admin/img/pln_update.png" width="100px" height="120px"></td>
		</tr>
	</table>
	<hr size="3" color="black">
						
						<table class="table mt-4" border="1px" cellpadding="0" cellspacing="0">
							<thead>
							<tr bgcolor="#6495ED">
								<th align="center" bgcolor="#6495ED"><b>No</b></th>
								<th align="center" bgcolor="#6495ED"><b>Nama</b></th>
								<th align="center" bgcolor="#6495ED"><b>Email</b></th>
								<th align="center" bgcolor="#6495ED"><b>Subject</b></th>
								<th align="center" bgcolor="#6495ED"><b>Pesan</b></th>
							</tr>
							</thead><HR>
							<?php $no=1 ; 
							foreach ($kontak as $knt) :?>
							<tr>
								<td width="30px"><?= $no++; ?></td>
								<td width="40px"><?= $knt['nama_kontak']; ?></td>
								<td width="80px"><?= $knt['email_kontak']; ?></td>
								<td width="200"><?= $knt['subject_kontak']; ?></td>
								<td width="320"><?= $knt['pesan_kontak']; ?></td>
							</tr>
							<?php endforeach; ?>
						</table>