    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="main-pict" src="<?php echo base_url('assets/front/images/icon.png') ?>">
                </div>
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-6">
                     <div class="main-slider">
                        <div class="slide-text">
                            <h1>Semangat Baru, Semangat Berpadu</h1>
                            <p>Boudin doner frankfurter pig. Cow shank bresaola pork loin tri-tip tongue venison pork belly meatloaf short loin landjaeger biltong beef ribs shankle chicken andouille.</p>
                            <a href="#" class="btn btn-common">Lihat Sambutan KABEM</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="blog" class="padding-top">
        <div class="container">
            <h1 class="tit-head">Berita Terbaru</h1>
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                    <?php foreach ($berita as $b) {?>
                        <div class="col-md-4 portfolio-item branded logos">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="<?php echo $b['gambar_artikel'] ?>" class="img-responsive" alt="">
                                    </div>
                                    <div class="portfolio-view">
                                        <ul class="nav nav-pills">
                                            <li><a href="<?php echo $b['link_instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="portfolio-info ">
                                    <h2><?php echo $b['judul_artikel'] ?></h2>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <br>
                    <h1 class="tit-head">Artikel Terbaru</h1>
                    <div class="row">
                    <?php foreach ($artikel as $a) {
                        $fromat_tgl = '%d';
                        $fromat_bln = '%m';
                        $timestamp = $a['timestamp'];
                        $tgl = mdate($fromat_tgl, $timestamp);
                        $bln = mdate($fromat_bln, $timestamp);
                    ?>
                        <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="<?php echo base_url('info/detail_artikel/').$a['id_artikel'] ?>"><img style="max-height: 230px; width: 100%;" src="<?php echo $a['gambar_artikel']?>" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#"><?php echo $tgl ?> <br><small><?php echo $bln ?></small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html"><?php echo $a['judul_artikel'] ?></a></h2>
                                   
                                    <a href="<?php echo base_url('info/detail_artikel/').$a['id_artikel'] ?>" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i><?php echo $a['kategori_artikel'] ?></a></li>
                                            <li><a href="#"><i class="fa fa-eye"></i><?php echo $a['view_artikel'] ?></a></li>
                                            <li><a href="<?php echo $a['link_instagram'] ?>"><i class="fa fa-instagram"></i>View On Instagram</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>

