<div class="container">
	<h2>HALAMAN INFO</h2>
			<HR>
			<div class="row">
				<div class="container-fluid col-md-3">
					<button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#Modal"><em class="fa fa-plus-circle">&nbsp;</em>Tambah Data</button>
					<!-- Modal -->
                                                    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"><H3><B>INPUT DATA INFO</B></H3></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">

                                                           <form action="proses\simpan_info.php" enctype="multipart/form-data"  method="post">
                                                            
                                                                  <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                      <input type="date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal_info">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" id="judul" placeholder="judul" name="judul_info">
                                                                    </div>
                                                                  </div>
                                                                  
                                                                  <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                      <input type="file" class="form-control"  placeholder="Photo" name="u_foto">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                     <textarea name="deskripsi_info" id="msg" class="form-control" cols="30" rows="8" placeholder="Deskripsi Info"></textarea>
                                                                    </div>
                                                                  </div>
                                                                 
                                                       
                                                             </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="Submit" class="btn btn-primary">Simpan</button>
                                                          </div>
                                                        </div>
                                                         </form>
                                                      </div>
                                                    </div>
				</div>
			</div>
			<br>

			<div class="mt-5">

<?php

$lama = 1; // lama data yang tersimpan di database dan akan otomatis terhapus setelah 5 hari
 
// proses untuk melakukan penghapusan data
 
$query = "DELETE FROM tbl_info

          WHERE DATEDIFF(CURDATE(), tanggal) > $lama";
$hasil = mysqli_query($conn,$query);

	// Menampilkan data berdasarkan table murid yang tanggalnya kurang dari 5 hari
	$sql="SELECT * From tbl_info";
	$tampil = mysqli_query($conn,$sql);

	
?>

			<table class="table mt-5">
			  <thead>
			    <tr style="background-color: red">
			      <th >ACTION</th>
			      <th >ID</th>
			      <th >TANGGAL</th>
			      <th >JUDUL</th>
			      <th >FILE</th>
			      <th >DESKRIPSI</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php while($s=mysqli_fetch_array($tampil)) { 

		if (file_exists("img/foto_$s[judul_info].png"))
		{
		//jika ada
		$foto="<a href='img/foto_$s[judul_info].png' target='blank''>
		<img src='img/foto_$s[judul_info].png' class='img-circle' width=80px height=80px>
		</a>
		";
	}
	else
	{
		//jika tidak ada
		$foto="";
	}

	?>
			    <tr>
			      <th >
			      	<button class="badge badge-primary btn btn-primary"  data-toggle="modal" data-target="#editModal<?php echo "$s[id_info]"; ?>">Edit</button>
			      	<a href='proses/hapus_info.php?delete=<?php echo "$s[id_info]";?>' name="delete" class="badge badge-warning">Hapus</a>
			      </th>
			      <th><?php echo "$s[id_info]";?></th>
			      <th><?php echo "$s[tanggal_info]";?></th>
			      <th><?php echo "$s[judul_info]";?></th>
			      <th><?= $foto; ?></th>
			      <th><?php echo "$s[deskripsi_info]";?></th>
			    </tr>
			     <?php } ?>
			  </tbody>
			</table>
		   </div>
</div>

<!-- Modal -->
                                                    <div class="modal fade" id="editModal<?php echo $s[id_info]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"><H3><B>INPUT DATA INFO</B></H3></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">

                                                           <form action="proses\simpan_info.php" enctype="multipart/form-data"  method="post">
                                                            
                                                                  <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                      <input type="date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal_info">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" id="judul" placeholder="judul" name="judul_info">
                                                                    </div>
                                                                  </div>
                                                                  
                                                                  <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                      <input type="file" class="form-control"  placeholder="Photo" name="u_foto">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                     <textarea name="deskripsi_info" id="msg" class="form-control" cols="30" rows="8" placeholder="Deskripsi Info"></textarea>
                                                                    </div>
                                                                  </div>
                                                                 
                                                       
                                                             </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="Submit" class="btn btn-primary">Simpan</button>
                                                          </div>
                                                        </div>
                                                         </form>
                                                      </div>
                                                    </div>