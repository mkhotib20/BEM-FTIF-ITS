    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><?php echo $page_title ?></h1>
                            <p>BEM FTIf Semangat Berpadu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
   <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                         <?php foreach ($artikel as $a) {
                             $judul = $a['judul_artikel'];
                             $konten = $a['konten_artikel'];
                             $timestamp = $a['timestamp'];
                             $tgl = mdate('%d/%m/%y', $timestamp);
                             $gambar = $a['gambar_artikel'];
                         } ?>
                            <div class="single-blog blog-details two-column">
                                <div class="post-thumb">
                                    <a href="#"><img style="width: 500px" src="<?php echo $gambar ?>" class="img-responsive" alt=""></a>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="#"><?php echo $judul ?></a></h2>
                                    <h3 class="post-author"><a href="#">Diterbitkan pada <?php echo $tgl ?></a></h3>
                                    <p><?php echo $konten ?></p>
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                            <li><a href="#"><i class="fa fa-eye"></i>32 </a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i>Bagikan ke Twitter</a></li>
                                            <li><a href="#"><i class="fa fa-link"></i>Bagikan ke Line</a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i>Bagikan ke Facebook</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
  

