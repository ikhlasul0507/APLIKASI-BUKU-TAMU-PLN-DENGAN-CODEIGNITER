
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?= base_url();?>assets/buku/img/logo.png">
       <title>Visapp- <?= $judul;?></title>
	<link href="<?= base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/admin/css/datepicker3.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/admin/css/styles.css" rel="stylesheet">
	
</head>
<body >
	<div id="loading"></div>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default ">
				<center>
				<img src=" <?= base_url();?>assets/buku/img/logo.png " width="200px" height="200px" style="border-radius: 20%; position: center">
				<h4><?php if($this->session->flashdata('pesan')): ?>
						          <strong><?php echo $this->session->flashdata('pesan');?></strong>
					<?php endif; ?></h4>
				<div class="panel-heading">Login Admin</div></center>
				<div class="panel-body">
					<form role="form" action="" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username_admin" type="text" autofocus="" autocomplete>
								<small class="text-danger"><?php echo form_error('username_admin'); ?></small>
							</div>
							<div class="form-group">
								<input class="form-control" id="form-password" placeholder="Password" name="password_admin" type="password" autocomplete>
								
							</div>
								<small class="text-danger"><?php echo form_error('password_admin'); ?></small>
							<div class="form-group">
								<button  class="btn btn-primary" type="submit" name="login" style="width: 100%">Login</button>
							</div>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
</body>

<script type="text/javascript">
	$(document).ready(function(){		
		$('#checkbox').click(function(){
			if($(this).is(':checked')){
				$('#form-password').attr('type','text');
			}else{
				$('#form-password').attr('type','password');
			}
		});
	});
</script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="<?= base_url();?>assets/admin/js/jquery-1.11.1.min.js"></script>
<script src="<?= base_url();?>assets/admin/js/bootstrap.min.js"></script>
</html>
