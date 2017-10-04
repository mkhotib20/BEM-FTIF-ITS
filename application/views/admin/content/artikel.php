  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Artikel 
        <small>Anda dapat melakukan operasi edit dan hapus pada artikel</small>
      </h1>
    </section>

    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>Id Artikel</th>
                    <th>Judul Artikel</th>
                    <th>Gambar</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($tampil as $t) { ?>
                  <tr>
                    <td><?php echo $t['id_artikel']; ?></td>
                    <td><?php echo $t['judul_artikel']; ?></td>
                    <td><img style="height: 100px;" src="<?php echo $t['gambar_artikel']; ?>"></td>
                    <td><a href="#" class="btn btn-success">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
    </section>
  </div>

