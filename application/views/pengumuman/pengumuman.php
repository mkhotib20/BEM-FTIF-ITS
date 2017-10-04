<!DOCTYPE html>
<html>
<head>
	<title>PENGUMUMAN WAYANG BARU BEM FTIf</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pengumuman/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pengumuman/css/style.css') ?>">
	<link rel="icon" href="<?php echo base_url('assets/pengumuman/img/favicon.png') ?>">
	<script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
  </script>
</head>
<body>
	<section class="main-sec">
		<div class="container">
		<center>
			<img style="width: 240px;" src="<?php echo base_url('assets/pengumuman/img/icon.png') ?>">
			<h1 class="judul">Pengumuman Wayang Baru <br> BEM FTIf 2017/2018</h1>
		</center>
		<div style="margin-top: 30px;" class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="box">
					<center>
						<img style="height: 100px;" src="<?php echo base_url('assets/pengumuman/img/good.png') ?>">
						<br><br>
						<p>Cieee <em><b><?php echo $nama ?></b></em> NRP <b><em><?php echo $nrp ?></em></b> , diterima Staff BEM FTIf Semangat Berpadu 2017/2018. Selamat yaa!</p>
						<a href="<?php echo base_url('jadiwayang') ?>" class="btn btn-warning" >Cek Lainnya</a>
					</center>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer style="margin-top: 50px;">
		<div class="container">
			<center><p>© Departemen Information Media BEM FTIf 2017. All Rights Reserved.</p></center>
		</div>
	</footer>
</body>
<script type="text/javascript" src="<?php echo base_url('assets/pengumuman/js/bootstrap.min.js') ?>"></script>
</html>