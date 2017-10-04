<div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <h3>Artikel Terpopuler</h3>
                        <?php foreach ($artikel_pop as $pop) {?>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="<?php echo base_url('info/detail_artikel/').$pop['id_artikel'] ?>"><img style="width: 80px;" src="<?php echo $pop['gambar_artikel'] ?>" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="<?php echo base_url('info/detail_artikel/').$pop['id_artikel'] ?>"><?php echo $pop['judul_artikel'] ?></a></h4>
                                    <p><i class="fa fa-eye"></i> : <?php echo $pop['view_artikel'] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                        <div class="sidebar-item  recent">
                            <h3>Kegiatan Terkini</h3>
                        <?php foreach ($kegiatan as $k) {
                            $timestamp = $k['timestamp'];
                            $tgl = mdate('%d/%m/%y',$timestamp)
                            ?>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img style="width: 80px;" src="<?php echo $k['gambar_artikel'] ?>" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#"><?php echo $k['judul_artikel'] ?></a></h4>
                                    <p>Diterbitkan <?php echo $tgl ?></p>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>