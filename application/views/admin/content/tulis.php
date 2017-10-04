
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tulis 
        <small>Anda dapat Menambahkan Artikel, Berita dan kegiatan terbaru BEM FTIf</small>
      </h1>
    </section>

    <section class="content">
      <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-pencil"></i>

              <h3 class="box-title">Buat Tulisan</h3>
              <div class="pull-right box-tools">
              </div>
            </div>
            <div class="box-body">
              <?php echo form_open_multipart('admin/upload') ?>
                <div class="form-group">
                  <input type="text" class="form-control" name="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                  <select name="kategori" class="form-control">
                    <option selected="" disabled="">--pilih kategori--</option>
                    <option>Artikel</option>
                    <option>Berita</option>
                    <option>Kegiatan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Masukan Gambar</label>
                  <input type="file" name="gambar" >
                </div>
                <div>
                  <textarea class="textarea" name="konten" placeholder="Text anda disini" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="link" placeholder="Link Instagram">
                </div>
                <div class="box-footer clearfix">
                  <input type="submit" class="pull-right btn btn-default" value="Terbitkan">
                </div>
              </form>
            </div>
          </div>
    </section>
  </div>
