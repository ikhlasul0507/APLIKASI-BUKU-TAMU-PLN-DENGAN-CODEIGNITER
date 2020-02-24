	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href=" <?= base_url();?><?= $link; ?>">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active"><?= $link; ?></li>
				</ol>
			</div><!--/.row-->
			<script type="text/javascript" src="<?= base_url();?>assets/chart/chart.js"></script>
			<div class="row">
				<div class="col-lg-5">
					<div class="container mt-8"> <br>
						<div class="row">
							<div class="col-md-5">
								<div class="row">
									<h3>Grafik Kepuasan Pengunjung</h3>                        
                                         <div style="width: 300 px; margin: 0px auto;">
                                                <canvas id="myChart"></canvas>
        
                                            </div>
        <!-- Koding JS untuk membuat grafik -->
        <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Sangat Puas ", "Tidak Puas"],
                datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $a = $this->db->query('SELECT *FROM tbl_saran WHERE customRadioInline1="1"');
                    $hasil= $a->num_rows();
                    echo $hasil;

                    ?>, 
                    <?php 
                    $b = $this->db->query('SELECT *FROM tbl_saran WHERE customRadioInline1="0"');
                    $hasil= $b->num_rows();
                    echo $hasil;
                    ?>, 
                    
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
      <!-- Akhir dari Grafik -->
     <br><br>
     <center>
			<img src=" <?= base_url();?>assets/buku/img/logo_pln.jpg " width="100px" height="100px">
			<img src=" <?= base_url();?>assets/buku/img/logo.png " width="100px" height="100px" style="border-radius: 20%;">
					</div>
				</div>
			</div>
		</div>
	</div>
			
	<div class="col-lg-5 ml-5 ">
		<div class="container mt-8"> <br>
			<div class="row">
				<div class="col-md-6 ml-3">
					<div class="row">
						<h3>Tabel Data Saran </h3>
							<!-- notifikasi yang di kirim dari controller -->
							<?php if($this->session->flashdata('pesan')): ?>
							<strong><?php echo $this->session->flashdata('pesan');?></strong>
							<?php endif; ?>
							<!-- End -->
						<table class="table mt-4">
							<tr style="background-color: #6495ED; text-shadow: white">
							<td>No</td>
							<td>Rating</td>
							<td>Saran</td>
							<td>Action</td>
							</tr>
								<?php  
								foreach ($saran as $srn) :?>
									<tr>
										<td><?= ++$start ?></td>
										<td> <?php if($srn['customRadioInline1']=='0'):?>

											<button type="button" class="btn btn-danger btn-sm" disabled> <em class="fa fa-angry">&nbsp;</em>Tidak Puas</button>
											<?php elseif($srn['customRadioInline1']=='1'):?>
											<button type="button" class="btn btn-success btn-sm" disabled><em class="fa fa-smile">&nbsp;</em>Sangat Puas</button>
											<?php endif; ?>
										</td>
										<td><?= $srn['saran']; ?></td>
										<td style="background-color: yellow" align="center" valign="justify">
											<a href="<?= base_url();?>admin/hapus_saran/<?= $srn['id_saran']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">
											<i class="fa fa-trash fa-2x ml-2" data-toggle="tooltip" data-placement="top" title="Hapus" style="color:red"></i>
											</a>
										</td>
									</tr>
								<?php endforeach; ?>
						</table>
				<h5>Data ke <?= $start; ?> Dari total  <?= $total_rows;?> </h5>
				<center>
				<?= $this->pagination->create_links(); ?>
				</center>
				</div>
			</div>
		</div>
	</div>
</div>
</div>	<!--/.main-->