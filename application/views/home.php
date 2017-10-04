<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wayang Baru BEM FTIf</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css') ?>">

  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
  </script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div style="background-color: #efefef;">
    <section style="min-height: 700px;" class="content">
      <div class="judul-oprec">
        <center>
            <img style="height: 200px;" src="<?php echo base_url('assets/icon.png') ?>">
        <h1 style="color: #4286f4; font-weight: bold">BEM FTIf Cari Wayang</h1>
        <p>Wayang Baru untuk BEM FTIf Semangat Berpadu 2017/2018</p></center>
      </div>
      <?php echo $this->session->flashdata('pesan'); ?>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <br>
          <div class="nav-tabs-custom">
          <br>
            <div style="margin: 50px;" class="tab-content">
            <?php echo form_open_multipart('wayangbaru/proses_kirim') ?>
              <div class="active tab-pane" id="data_diri">
                <div class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="nama" placeholder="Nama Lengkap">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="NRP" class="col-sm-2 control-label">NRP</label>

                    <div class="col-sm-10">
                       <input type="text" class="form-control" name="nrp" onkeypress="return hanyaAngka(event)"  placeholder="NRP">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="NRP" class="col-sm-2 control-label">Alamat Surabaya</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat Surabaya">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" name="tgl_lahir" class="form-control pull-right" id="datepicker">
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nomor HP</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" name="hp" onkeypress="return hanyaAngka(event)"  placeholder="Nomor Telepon">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">ID Line</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="id_line" id="inputName" placeholder="ID Line">
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departemen">
                <div class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pilihan 1</label>
                    <div class="col-sm-10">
                        <select name="p1" class="form-control select2" style="width: 100%;">
                          <option selected="selected" disabled="">--pilih departemen--</option>
                          <option>Organization Social Responsibility</option>
                          <option>External Affair</option>
                          <option>Internal Affair</option>
                          <option>Research and Technology Development</option>
                          <option>Student Resources Development</option>
                          <option>Information Media</option>
                          <option>Enterpreneurship</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pilihan 2</label>
                    <div class="col-sm-10">
                        <select name="p2" class="form-control select2" style="width: 100%;">
                          <option selected="selected" disabled="">--pilih departemen--</option>
                          <option>Organization Social Responsibility</option>
                          <option>External Affair</option>
                          <option>Internal Affair</option>
                          <option>Research and Technology Development</option>
                          <option>Student Resources Development</option>
                          <option>Information Media</option>
                          <option>Enterpreneurship</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pilihan 3</label>
                    <div class="col-sm-10">
                        <select name="p3" class="form-control select2" style="width: 100%;">
                          <option selected="selected" disabled="">--pilih departemen--</option>
                          <option>Organization Social Responsibility</option>
                          <option>External Affair</option>
                          <option>Internal Affair</option>
                          <option>Research and Technology Development</option>
                          <option>Student Resources Development</option>
                          <option>Information Media</option>
                          <option>Enterpreneurship</option>
                        </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="motivasi">
                <div class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Motivasi Pilihan 1</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="mp1" placeholder="Tuliskan Disini"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Motivasi Pilihan 2</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="mp2" placeholder="Tuliskan Disini"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Motivasi Pilihan 3</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="mp3" placeholder="Tuliskan Disini"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Yang Ingin didapatkan di BEM FTIf?</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="harapan" placeholder="Tuliskan Disini"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="upload">
               <br> 
                <div class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Curriculum Vitae</label>
                    <div class="col-sm-10">
                      <input type="file" accept=".pdf, .jpg, .png" name="cv" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Portofolio (Khusus IM)</label>
                    <div class="col-sm-10">
                      <input type="file" accept=".pdf, .jpg, .png" name="portofolio" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Deskripsi singkat hasil tes di temubakat.com</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="dtb" placeholder="Tuliskan Disini"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Hasil Tes <a href="http://temubakat.com" target="_blank">temubakat.com</a></label>
                    <div class="col-sm-10">
                      <input type="file" accept=".pdf, .jpg, .png" name="temubakat" class="form-control">
                      <p>FYI : <a href="http://temubakat.com" target="_blank">temubakat.com</a> merupakan Situs pengenalan diri dan personal branding berbasis kekuatan untuk persiapan karir di masa depan </p>
                    </div>

                  </div>
                  <div class="form-group">
                    <div class="col-md-3 col-md-push-11">
                      <input type="submit" class="btn btn-success">
                    </div>
                  </div>
                </div>
              </div>
            <?php echo form_close() ?>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>
  <footer class="main-footer pull-right">
    <strong>Copyright &copy; 2017 <a href="#">Departemen Information Media BEM FTIf</a>.</strong> All rights
    reserved.
  </footer>

<script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/js/app.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/js/demo.js') ?>"></script>
<script type="text/javascript">
  $('#datepicker').datepicker({
      autoclose: true
    });
  $(".select2").select2();
</script>
</body>
</html>
