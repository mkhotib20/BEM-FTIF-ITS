<?php include 'header.php'; ?>
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
            <div class="box-body">
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
                  <tr>
                    <td>1219192</td>
                    <td>Mencoba Aja</td>
                    <td><img style="height: 100px;" src="dist/img/user2-160x160.jpg"></td>
                    <td><a href="#" class="btn btn-success">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  <tr>
                    <td>1219192</td>
                    <td>Mencoba Aja</td>
                    <td><img style="height: 100px;" src="dist/img/user2-160x160.jpg"></td>
                    <td><a href="#" class="btn btn-success">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  <tr>
                    <td>1219192</td>
                    <td>Mencoba Aja</td>
                    <td><img style="height: 100px;" src="dist/img/user2-160x160.jpg"></td>
                    <td><a href="#" class="btn btn-success">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Hapus</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
    </section>
  </div>

  <?php include 'footer.php'; ?>