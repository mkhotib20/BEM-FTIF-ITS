  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables/dataTables.bootstrap.css') ?>">
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
              <a href="<?php echo base_url('admin/download_berkas') ?>" class="btn btn-success">Download Semua Berkas (.zip)</a>
            </div>
            
            <br>
            <div class="box-body table-responsive" >
              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>NRP</th>
                    <th>Nama Lengkap</th>
                    <th>Temubakat</th>
                    <th>Pilihan1</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($tampil as $t) { ?>
                  <tr>
                    <td><?php echo $t['nrp'] ?></td>
                    <td><?php echo $t['nama'] ?></td>
                    <td><?php echo $t['dtb'] ?></td>
                    <td><?php echo $t['pilihan1'] ?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
    </section>
  </div>

