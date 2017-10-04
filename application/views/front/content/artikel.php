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
   <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
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
  

