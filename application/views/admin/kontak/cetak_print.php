<center>
	<table>
		<tr>
			<td width="200px" align="right" valign="TOP"><img src=" <?= base_url();?>/assets/buku/img/logo1.png" width="100px" height="120px"></td>
			<td align="center">
				<h3>LAPORAN DATA KONTAK<br>UNIT INDUK WILAYAH SUMATERA SELATAN, JAMBI DAN BENGKULU<br>UNIT PELAKSANA PENGATUR DISTRIBUSI</h3>
				<small>Dicetak pada tanggal : <?= date('d F Y, h:i:s A'); ?></small>
			</td>
			<td width="200px" align="left" valign="TOP"><img src=" <?= base_url();?>/assets/buku/img/logo_pln.jpg" width="100px" height="120px"></td>
		</tr>
	</table>

						<center>
							<hr size="5" color="black">
						<table class="table mt-4" cellpadding="0" cellspacing="0" border="1">
							<thead style="background-color: #6495ED; text-shadow: white">
							<tr >
								<th align="center"><b>No</b></th>
								<th align="center"><b>Nama</b></th>
								<th align="center"><b>Email</b></th>
								<th align="center"><b>Subject</b></th>
								<th align="center"><b>Pesan</b></th>
							</tr>
							</thead>
							<?php $no=1 ; 
							foreach ($kontak as $knt) :?>
							<tr>
								<td width="30px" align="center"><?= $no++; ?></td>
								<td width="40px"><?= $knt['nama_kontak']; ?></td>
								<td width="80px"><?= $knt['email_kontak']; ?></td>
								<td width="200"><?= $knt['subject_kontak']; ?></td>
								<td width="320"><?= $knt['pesan_kontak']; ?></td>
							</tr>
							<?php endforeach; ?>
						</table>
	<script>
		window.print();
	</script>