				<?php       
				$adm = $this->db->query("SELECT * FROM tbl_admin where username_admin='".$this->session->username_admin."'")->row_array();
                 ?>
	<div id="sidebar-collapse" class=" col-lg-2 sidebar mt-3">
		<div class="profile-sidebar mt-3">
			<div class="profile-userpic">
				
				<center>
				<a href="<?php echo base_url();?>assets/admin/img/<?= $adm['photo_admin']; ?>" target="_blank"><img src="<?php echo base_url();?>assets/admin/img/<?= $adm['photo_admin']; ?>" class="img-responsive" alt=""></a>
				</center>
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?= $adm['nama_admin']; ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
				
		<ul class="nav menu">
			<!-- include Time  -->
			<iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:230px;height:75px;"src="https://www.clocklink.com/html5embed.php?clock=038&timezone=Indonesia_Jakarta&color=blue&size=300&Title=&Message=&Target=&From=2019,1,1,0,0,0&Color=black"></iframe>
			<!-- akhir dari time -->

			<!-- List Menu Pada Admin -->
			<?php if ($adm['username_admin']=='siti' || $adm['username_admin']== 'dina'|| $adm['username_admin']== 'amal') : ?>
			<li class="active"><a href="<?= base_url()?>admin/konten"><em class="fa fa-dashboard">&nbsp;</em> Beranda Admin</a></li>
			<?php endif; ?>

			<li><a href="<?= base_url()?>admin/pengunjung"><em class="fa fa-users">&nbsp;</em> 	Pengunjung</a></li>

			<li><a href="<?= base_url()?>admin/saran"><em class="fa fa-weixin">&nbsp;</em> Kritik & Saran</a></li>
			
			<?php if ($adm['username_admin']=='siti' || $adm['username_admin']== 'dina' || $adm['username_admin']== 'amal') : ?>
			<li><a href="<?= base_url()?>admin/berita"><em class="fa fa-bullhorn">&nbsp;</em> Berita</a></li>
			<?php endif; ?>

			<?php if ($adm['username_admin']=='siti' || $adm['username_admin']== 'dina' || $adm['username_admin']== 'amal') : ?>
			<li><a href="<?= base_url()?>admin/data"><em class="fa fa-file">&nbsp;</em> Data </a></li>
			<?php endif; ?>

			<li><a href="<?= base_url()?>admin/kontak"><em class="fa fa-user">&nbsp;</em> Kontak</a></li>

			<li onclick="return confirm('Yakin Ingin Keluar ?');"><a href="<?= base_url();?>admin/keluar"><em class="fa fa-power-off">&nbsp;</em> Keluar</a></li>
		</ul>
	</div><!--/.sidebar-->
	<br>
	