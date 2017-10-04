<?php include 'header.php'; ?>
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Open Recruitment 
        <small>Berikut daftar peserta OPREC</small>
      </h1>
    </section>

    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <br>
              <br>
              <a href="#" class="btn btn-success">Download Data Pendaftar(.xlsx)</a>
              <a href="#" class="btn btn-success">Download Semua Berkas (.rar)</a>
            </div>
            
            <br>
            <div class="box-body table-responsive" >
              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>NRP</th>
                    <th>Nama Lengkap</th>
                    <th>Pilihan 1</th>
                    <th>Unduh Berkas</th>
                    <th>Detail Pendaftar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>5215100061</td>
                    <td>Muhammad Khotib</td>
                    <td>Information Media Department</td>
                    <td><a href="#" class="btn btn-warning">Download</a></td>
                    <td><a href="#" class="btn btn-primary">Detail</a></td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>
    </section>
  </div>

  <?php include 'footer.php'; ?>