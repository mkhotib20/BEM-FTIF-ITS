<!DOCTYPE html>
<html>
<head>
	<title>PENGUMUMAN WAYANG BARU BEM FTIf</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="img/favicon.png">
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
			<img style="width: 240px;" src="img/icon.png">
			<h1 class="judul">Pengumuman Wayang Baru <br> BEM FTIf 2017/2018</h1>
		</center>
		<div style="margin-top: 30px;" class="row">
				<div class="col-md-8 col-md-offset-2">
					<form>
						<center>
						<p style="">Cek Disini</p>
						<p class="form-nrp"><input type="text" onkeypress="return hanyaAngka(event)" placeholder="Masukan NRP" class="form-control" name="nrp"></p></center>
						<center><p><input type="submit" value="CEK NRP MU" class="btn btn-primary submit"></p></center>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<center><p>© Departemen Information Media BEM FTIf 2017. All Rights Reserved.</p></center>
		</div>
	</footer>
</body>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>