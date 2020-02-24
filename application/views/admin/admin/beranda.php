				<?php       
				$adm = $this->db->query("SELECT * FROM tbl_admin where username_admin='".$this->session->username_admin."'")->row_array();
                 ?>
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
				<div class="col-lg-5">
					<br>
					<!-- notifikasi yang di kirim dari controller -->
					      	<?php if($this->session->flashdata('pesan')): ?>
						          <div class="badge badge-success text-wrap" style="width: 45rem;">
									  <strong><?php echo $this->session->flashdata('pesan');?></strong>
									</div>
						     <?php endif; ?>

						
						<table class="table table-bordered">
							<caption><h3>Profil Admin</h3></caption>
							<thead>
								<tr>
									<th>Photo Admin</th>
									<th>Data Diri</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img src="<?php echo base_url();?>assets/admin/img/<?= $adm['photo_admin']; ?>"  alt="" width="200px" height="210px"></td>
									<td>
										<ul class="list-group">
										  <li class="list-group-item">ID=<?= $adm['id_admin']; ?></li>
										  <li class="list-group-item"><?= $adm['nama_admin']; ?></li>
										  <li class="list-group-item"><?= $adm['jenis_kelamin']; ?></li>
										  <li class="list-group-item"><?= $adm['email_admin']; ?></li>
										  <li class="list-group-item">US=<?= $adm['username_admin']; ?></li>
										  <li class="list-group-item">PASS=<?= $adm['password_admin']; ?></li>
										</ul>

									</td>
								</tr>
							</tbody>
						</table>
						<a href="<?= base_url();?>buku" target="_blank"><button type="button" class="btn btn-lg btn-primary btn-block" style="color: white">Mulai Visapp >>></button></a>
				</div>
			</div>
					
		
		
		
	</div>	<!--/.main-->