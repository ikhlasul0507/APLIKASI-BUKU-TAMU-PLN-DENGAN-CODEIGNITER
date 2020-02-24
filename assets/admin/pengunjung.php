<?php 
include "..\proses\auto_kode.php";

?>
<div class="container">
			<h2>HALAMAN PENGUNJUNG</h2>
			<HR>
			<div class="row">
				<div class="container-fluid col-md-3">
					<button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#exampleModal"><em class="fa fa-plus-circle">&nbsp;</em>Tambah Data</button>
					<!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                           
                                                            
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">

                                                   <form action="proses/simpan_pengunjung.php" method="post"> 
                                                        <p class="text-center"><H3><B>FORMULIR DATA PENGUNJUNG</B></H3></p><hr>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                      <input type="date" class="form-control" id="tanggal" name="tanggal_pengunjung">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                      <input type="email" class="form-control" id="email" placeholder="Email" name="email_pengunjung" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                       <input type="text" class="form-control" id="nomor" 
                                                                      value="<?php  echo $no_auto; ?>" name="nomor_pengunjung" readonly>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                      <input type="number" class="form-control" id="handphone" placeholder="Handphone" name="handphone_pengunjung" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama_pengunjung" autocomplete="off">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" id="asal" placeholder="Asal" name="asal_pengunjung" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                     <select name="jenis_kelamin_pengunjung" class="form-control">
                                                                        <option>--Pilih--</option>
                                                                        <option>Laki-laki</option>
                                                                        <option>Perempuan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" id="keperluan" placeholder="Keperluan" name="keperluan_pengunjung" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan" name="pekerjaan_pengunjung" autocomplete="off">
                                                                </div>
                                                               <div class="form-group col-md-6">
                                                                     <select name="tujuan_pengunjung" class="form-control">
                                                                        <option>--Pilih--</option>
                                                                        <option>Bagian Operasi Distribusi</option>
                                                                        <option>Bagian SCADA & Telekomunikasi</option>
                                                                        <option>Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                    <div class="form-check ">
                                                                     
                                                                    </div>
                                                            </div>
                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="Submit" class="btn btn-primary">Simpan</button>
                                                         </form>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                            
				</div>
			</div>
			<br>
			<div class="mt-5">


<?php
	// Menampilkan data berdasarkan table murid yang tanggalnya kurang dari 5 hari
	$sql="SELECT * From tbl_pengunjung ";
	$tampil = mysqli_query($conn,$sql);
?>

			<table class="table mt-5">
			  <thead class="">
			    <tr style="background-color: red">
			      <th scope="col">Action</th>
			      <th scope="col">ID</th>
			      <th scope="col">Tanggal</th>
			      <th scope="col">Email</th>
			      <th scope="col">Kode</th>
			      <th scope="col">Handphone</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Asal</th>
			      <th scope="col">Jenis Kelamin</th>
			      <th scope="col">Keperluan</th>
			      <th scope="col">Pekerjaan</th>
			      <th scope="col">Tujuan</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php while($s=mysqli_fetch_array($tampil)) { ?>
			    <tr>
			      <th scope="col">

			      	<a href='proses/hapus_pengunjung.php?delete=<?php echo "$s[id_pengunjung]";?>' name="delete" class="badge badge-warning">Hapus</a>
			      </th>
			      <th scope="col"><?php echo "$s[id_pengunjung]";?></th>
			      <th ><?php echo "$s[tanggal_pengunjung]";?></th>
			      <th ><?php echo "$s[email_pengunjung]";?></th>
			      <th ><?php echo "$s[nomor_pengunjung]";?></th>
			      <th ><?php echo "$s[handphone_pengunjung]";?></th>
			      <th ><?php echo "$s[nama_pengunjung]";?></th>
			      <th ><?php echo "$s[asal_pengunjung]";?></th>
			      <th ><?php echo "$s[jenis_kelamin_pengunjung]";?></th>
			      <th ><?php echo "$s[keperluan_pengunjung]";?></th>
			      <th ><?php echo "$s[pekerjaan_pengunjung]";?></th>
			      <th ><?php echo "$s[tujuan_pengunjung]";?></th>

           


			    </tr>
			   <?php } ?>
			  </tbody>
			</table>
     
		   </div>
</div>