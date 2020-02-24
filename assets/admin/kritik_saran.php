<div class="container">
	<h2>HALAMAN KRITIK DAN SARAN</h2>
			<HR>
			<div class="row">
				<div class="container-fluid col-md-3">
					<button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#Modal"><em class="fa fa-plus-circle">&nbsp;</em>Tambah Data</button>
					<!-- Modal -->
                                                    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                           
                                                              
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">

                                                                   <form action="proses\simpan_kritik_saran.php" method="post">

                                                                <p class="text-center"><H3><B>FORMULIR DATA KRITIK & SARAN</B></H3></p><hr>
                                                                  
                                                                
                                                               <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                     <input type="text" class="form-control" placeholder="Masukan Kode" name="nomor_pengunjung" onkeyup="isi_otomatis()" id="nomor_pengunjung" required>
                                                                       
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" placeholder="Handphone" name="handphone_kritik_saran" id="handphone_pengunjung" 
                                                                       readonly>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control" name="tanggal_kritik_saran" value="" placeholder="Tanggal " readonly id="tanggal_pengunjung">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                      <input type="email" class="form-control" placeholder="Email" name="email_kritik_saran" id="email_pengunjung" required value="" readonly>
                                                                   
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                      <input type="text" class="form-control"  placeholder="Nama" name="nama_kritik_saran" id="nama_pengunjung" required value="" readonly>
                                                                      <div class="form-check">
                                                                     
                                                                    </div>
                                                                     
                                                                 
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                     <textarea name="kritik_saran"  class="form-control" cols="30" rows="8" placeholder="Kritik & Saran" required></textarea>
                                                                    </div>
                                                                  </div>
                                                                 
                                                             </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="Submit" class="btn btn-primary">Simpan</button>
                                                          </div>
                                                        </div>
                                                         </form>
                                                         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
                                                         </script>
                                                         <script src="js/jquery-1.12.3.min.js"></script>

                                                                   <script type="text/javascript">
                                                                    function isi_otomatis(){
                                                                        var nomor_pengunjung= $("#nomor_pengunjung").val();
                                                                        $.ajax({
                                                                            url:'proses-ajak.php',
                                                                            data :"nomor_pengunjung="+nomor_pengunjung,

                                                                        }).success(function(data){
                                                                            var json = data,
                                                                            obj= JSON.parse(json);
                                                                            $ ("#handphone_pengunjung").val(obj.handphone_pengunjung);
                                                                            $ ("#tanggal_pengunjung").val(obj.tanggal_pengunjung);
                                                                            $ ("#email_pengunjung").val(obj.email_pengunjung);
                                                                            $ ("#nama_pengunjung").val(obj.nama_pengunjung);
                                                                        });
                                                                    }
                                                                </script>
                                                      </div>
                                                    </div>
				</div>
			</div>
			<br>
			<?php
	// Menampilkan data berdasarkan table murid yang tanggalnya kurang dari 5 hari
	$sql="SELECT * From tbl_kritik_saran";
	$tampil = mysqli_query($conn,$sql);
?>
			<div class="mt-5">
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
			      <th scope="col">Kritik & Saran</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php while($s=mysqli_fetch_array($tampil)) { ?>
			    <tr>
			      <th scope="col">
			      	<a href='proses/hapus_kritik_saran.php?delete=<?php echo "$s[id_kritik_saran]";?>' name="delete" class="badge badge-warning">Hapus</a>
			      </th>
			      <th scope="col"><?php echo "$s[id_kritik_saran]";?></th>
			      <th ><?php echo "$s[tanggal_kritik_saran]";?></th>
			      <th ><?php echo "$s[email_kritik_saran]";?></th>
			      <th ><?php echo "$s[nomor_pengunjung]";?></th>
			      <th ><?php echo "$s[handphone_kritik_saran]";?></th>
			      <th ><?php echo "$s[nama_kritik_saran]";?></th>
			      <th ><?php echo "$s[kritik_saran]";?></th>
			    </tr>
			   <?php } ?>
			  </tbody>
			</table>
		   </div>
</div>