<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <!-- Navigation -->
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                <h1><span></span>JAI</h1>
                                <!-- Uncomment below if you prefer to use an image logo -->
                                <!-- <img src="<?= base_url('asset/img/logo3.png') ?>" alt="" title="SCM" class="img-fluid"> -->
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a class="page-scroll" href="<?= base_url('website') ?>">Home</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="<?= base_url('website/index#about') ?>">About</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="<?= base_url('website/index#services') ?>">Services</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="<?= base_url('website/index#team') ?>">Team Kami</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="<?= base_url('website/index#pricing') ?>">Harga</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="<?= base_url('website/index#template') ?>">Template</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="<?= base_url('website/index#pemesanan') ?>">Pemesanan</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="<?= base_url('website/index#portfolio') ?>">Portfolio</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="<?= base_url('website/index#partner') ?>">Partner</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="<?= base_url('website/index#blog') ?>">Blog</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="<?= base_url('website/index#contact') ?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- navbar-collapse -->
                    </nav>
                    <!-- END: Navigation -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
</header>
<!-- header end -->

<main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
        <div class="home-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                <h1 class="title2">Blog</h1>
                            </div>
                            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                <h2 class="title3">Tips & Update Seputar Digital Marketing</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="page-head-blog">
                        <div class="single-blog-page">
                            <!-- search option start -->
                            <form action="#">
                                <div class="search-option">
                                    <input type="text" placeholder="Search...">
                                    <button class="button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- search option end -->
                        </div>
                        <div class="single-blog-page">
                            <!-- recent start -->
                            <div class="left-blog">
                                <h4>recent post</h4>
                                <div class="recent-post">
                                    <!-- start single post -->
                                    <?php
                                    foreach ($recent_post as $rp) {
                                    ?>
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="#">
                                                    <img src="<?= base_url('asset/img/blog/' . $rp->gambar) ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <p><a href="#"> <?= $rp->judul ?></a></p>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <!-- End single post -->
                                </div>
                            </div>
                            <!-- recent end -->
                        </div>
                        <div class="single-blog-page">
                            <div class="left-blog">
                                <h4>Kategori</h4>
                                <ul>
                                    <?php
                                    foreach ($kategori as $k) {
                                    ?>
                                        <li>
                                            <a href="#"><?= $k->kategori ?></a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="single-blog-page">
                            <div class="left-blog">
                                <h4>archive</h4>
                                <ul>
                                    <li>
                                        <a href="#">07 July 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">29 June 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">13 May 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">20 March 2016</a>
                                    </li>
                                    <li>
                                        <a href="#">09 Fabruary 2016</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-blog-page">
                            <div class="left-tags blog-tags">
                                <div class="popular-tag left-side-tags left-blog">
                                    <h4>popular tags</h4>
                                    <ul>
                                        <li>
                                            <a href="#">Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="#">Project</a>
                                        </li>
                                        <li>
                                            <a href="#">Design</a>
                                        </li>
                                        <li>
                                            <a href="#">Website</a>
                                        </li>
                                        <li>
                                            <a href="#">Joomla</a>
                                        </li>
                                        <li>
                                            <a href="#">Html</a>
                                        </li>
                                        <li>
                                            <a href="#">wordpress</a>
                                        </li>
                                        <li>
                                            <a href="#">Masonry</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End left sidebar -->
                <!-- Start single blog -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <?php
                        foreach ($blog_limit5 as $bg) {
                        ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-blog">
                                    <div class="single-blog-img">
                                        <a href="blog-details.html">
                                            <img src="<?= base_url('asset/img/blog/' . $bg->gambar) ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-meta">
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            <a href="#">11 comments</a>
                                        </span>
                                        <span class="date-type">
                                            <i class="fa fa-calendar"></i><?= $bg->tanggal ?>
                                        </span>
                                    </div>
                                    <div class="blog-text">
                                        <h4>
                                            <a href="#"><?= $bg->judul ?></a>
                                        </h4>
                                        <p>
                                            <?= $bg->konten ?>
                                        </p>
                                    </div>
                                    <span>
                                        <a href="<?= base_url('website/blog_detil') ?>" class="ready-btn">Read more</a>
                                    </span>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- End single blog -->
                        <div class="blog-pagination">
                            <ul class="pagination">
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Blog Page -->

</main><!-- End #main -->