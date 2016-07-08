<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php if(isset($title)) echo $title; ?> - Brand</title>
		<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
		<script src="<?php echo base_url('assets/js/jquery.js'); ?>" type="text/javascript"></script>
		<!-- datepicker -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="<?php echo base_url('assets/datepicker/jquery-1.10.2.js'); ?>"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">
		<!-- javascript -->
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
		<!-- bootstrap rating -->
		<link href="<?php echo base_url('assets/bootstrap-rating/bootstrap-rating.css'); ?>" rel="stylesheet">
		<script type="text/javascript" src="<?php echo base_url('assets/bootstrap-rating/bootstrap-rating.min.js'); ?>"></script>
		<!-- lightbox -->
		<link href="<?php echo base_url('assets/lightbox/dist/ekko-lightbox.min.css'); ?>" rel="stylesheet">
		<script type="text/javascript" src="<?php echo base_url('assets/lightbox/dist/ekko-lightbox.min.js'); ?>"></script>
		<!-- lightslider -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/lightslider-master/src/css/lightslider.css'); ?>" />                  
		<script src="<?php echo base_url('assets/lightslider-master/src/js/lightslider.js'); ?>"></script>
	</head>
	<body>
		<nav class="navbar navbar-default nav-t navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="#">Logo</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="<?php if(isset($menu1)) echo 'active'; ?>"><a href="<?php echo site_url(''); ?>">Beranda</a></li>
						<li class="<?php if(isset($menu2)) echo 'active'; ?>"><a href="<?php echo site_url('pasien/daftar'); ?>">Daftar Pasien</a></li>
						<li class="<?php if(isset($menu3)) echo 'active'; ?>"><a href="<?php echo site_url('pasien/pembayaran'); ?>">Pembayaran</a></li>
						<li class="<?php if(isset($menu4)) echo 'active'; ?>"><a href="<?php echo site_url('pasien/surat_rujukan'); ?>">Surat Rujukan</a></li>
						<li class="<?php if(isset($menu5)) echo 'active'; ?>"><a href="<?php echo site_url('dokter/cari'); ?>">Cari Dokter</a></li>
						<li class="<?php if(isset($menu6)) echo 'active'; ?>"><a href="#" data-target="#loginModal" data-toggle="modal">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>		

		<!-- modal login -->
		<div id="loginModal" class="modal fade" role="modal">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h4 class="modal-title">Login Pengguna</h4>
					</div>
					<div class="body">
						<form action="#" class="form-horizontal" role="form">
							<div class="form-group">
								<label class="control-label col-sm-3">ID</label>
								<div class="col-sm-9">
									<input type="text" placeholder="masukan id" maxlength="20" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3">Pass</label>
								<div class="col-sm-9">
									<input type="password" placeholder="masukan pass" maxlength="20" class="form-control" required>
								</div>
							</div>
							<div align="right">
								<button type="submit" class="btn btn-primary btn-sm">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- modal Dokter -->
		<div id="dokterModal" class="modal fade" role="modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="body">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="row" style="margin-top:25px;">
							<div class="col-sm-4">
								<center>
									<img src="<?php echo base_url('assets/img/dokter.png'); ?>" class="img-responsive img-thumbnail" style="max-height:200px;">
								</center>
							</div>
							<div class="col-sm-8">
								<table class="table">
									<tbody>
										<tr>
											<td><b>Nama</b></td>
											<td>:</td>
											<td>Dr. Wahyudi Soedebyio</td>
										</tr>
										<tr>
											<td><b>Spesialis</b></td>
											<td>:</td>
											<td>Dokter THT</td>
										</tr>
									</tbody>
								</table>
								<div class="panel panel-primary">
									<div class="panel-heading">
										<b>Lokasi:</b><br/>
									</div>
									<div class="panel-body">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.325012060745!2d106.86264051423699!3d-6.2208036626583665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f381fe05c171%3A0x3ec158f5116d7d17!2sRumah+Sakit+Ibu+dan+Anak+Hermina+Jatinegara!5e0!3m2!1sid!2sid!4v1467521258971" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>