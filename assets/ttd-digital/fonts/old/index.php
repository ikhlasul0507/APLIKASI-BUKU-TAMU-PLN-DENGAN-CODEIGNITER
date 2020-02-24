<?php require_once('../connections/mysqli_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Suggestion field using jQuery, PHP and MySQL - Learn infinity</title>
    
    <!-- Bootstrap Core Css -->
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- Font Awesome Css -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

	<!-- Bootstrap Select Css -->
    <link href="css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/app_style.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
	.li-post-group {
		background: #f5f5f5;
		padding: 5px 10px;
		border-bottom: solid 1px #CFCFCF;
		margin-top: 5px;
	}
	.li-post-title {
		border-left: solid 4px #304d49;
		background: #a7d4d2;
		padding: 5px;
		color: #304d49;
	}
	.show-more {
		background: #de5213;
		width: 150px;
		text-align: center;
		padding: 10px;
		border-radius: 5px;
		margin: 5px;
		color: #fff;
		cursor: pointer;
	}
	.ui-autocomplete {
		max-height: 250px;
		overflow-y: auto;
		overflow-x: hidden;
	}
	.ui-autocomplete li {
		font-size: 12px !important;
	}
	.ui-autocomplete li:hover {
		font-size: 12px !important;
		background: #638ad2!important;
		color: #FFF;
		padding-left: 5px;
	}
	.has-feedback .form-control {
		padding-right: 5px;
	}
	</style>
</head>
<body>
    <div class="all-content-wrapper">
		<!-- Top Bar -->
		<?php require_once('./include/header.php'); ?>
		<!-- #END# Top Bar -->
	
		<section class="container">
			<div class="form-group custom-input-space has-feedback">
				<div class="page-heading">
					<h3 class="post-title">Suggestion field using jQuery, PHP and MySQL - Learn infinity</h3>
				</div>
				<div class="page-body clearfix">
					<div class="row">
						<div class="col-md-offset-3 col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">Post Details:</div>
								<div class="panel-body">
									<div class="post-data-list">
									<div class="form-group">
										<label for="search-key">Suggestion Textbox:</label>
										<input type="text" class="form-control" id="post_name_search_key" />
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</section>
    </div>
	
	<!-- Jquery Core Js -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap Select Js -->
    <script src="js/bootstrap-select.js"></script>
	
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
	<script>

	$(document).ready(function(e){
		$( "#post_name_search_key" ).autocomplete({
			source: 'post_details.php'
		});

	});
	</script>
</body>
</html>
