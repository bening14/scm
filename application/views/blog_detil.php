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
                                <!-- <h1><span></span>JAI</h1> -->
                                <!-- Uncomment below if you prefer to use an image logo -->
                                <img src="<?= base_url('asset/img/logo3.png') ?>" alt="" title="SCM" class="img-fluid">
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
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- single-blog start -->
                            <article class="blog-post-wrapper">
                                <div class="post-thumbnail">
                                    <img src="<?= base_url('asset/img/blog/6.jpg') ?>" alt="" />
                                </div>
                                <div class="post-information">
                                    <h2>Blog image post layout</h2>
                                    <div class="entry-meta">
                                        <span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
                                        <span><i class="fa fa-clock-o"></i> march 28, 2016</span>
                                        <span class="tag-meta">
                                            <i class="fa fa-folder-o"></i>
                                            <a href="#">painting</a>,
                                            <a href="#">work</a>
                                        </span>
                                        <span>
                                            <i class="fa fa-tags"></i>
                                            <a href="#">tools</a>,
                                            <a href="#"> Humer</a>,
                                            <a href="#">House</a>
                                        </span>
                                        <span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>
                                    </div>
                                    <div class="entry-content">
                                        <p>Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse
                                            potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.</p>
                                        <blockquote>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum
                                                tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                        </blockquote>
                                        <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                            Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae
                                            lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                    </div>
                                </div>
                            </article>
                            <div class="clear"></div>
                            <div class="single-post-comments">
                                <div class="comments-area">
                                    <div class="comments-heading">
                                        <h3>6 comments</h3>
                                    </div>
                                    <div class="comments-list">
                                        <ul>
                                            <li class="threaded-comments">
                                                <div class="comments-details">
                                                    <div class="comments-list-img">
                                                        <img src="<?= base_url('asset/img/blog/b02.jpg') ?>" alt="post-author">
                                                    </div>
                                                    <div class="comments-content-wrap">
                                                        <span>
                                                            <b><a href="#">demo</a></b>
                                                            Post author
                                                            <span class="post-time">October 6, 2014 at 4:25 pm</span>
                                                            <a href="#">Reply</a>
                                                        </span>
                                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comments-details">
                                                    <div class="comments-list-img">
                                                        <img src="<?= base_url('asset/img/blog/b02.jpg') ?>" alt="post-author">
                                                    </div>
                                                    <div class="comments-content-wrap">
                                                        <span>
                                                            <b><a href="#">admin</a></b>
                                                            Post author
                                                            <span class="post-time">October 6, 2014 at 6:18 pm </span>
                                                            <a href="#">Reply</a>
                                                        </span>
                                                        <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="threaded-comments">
                                                <div class="comments-details">
                                                    <div class="comments-list-img">
                                                        <img src="<?= base_url('asset/img/blog/b02.jpg') ?>" alt="post-author">
                                                    </div>
                                                    <div class="comments-content-wrap">
                                                        <span>
                                                            <b><a href="#">demo</a></b>
                                                            Post author
                                                            <span class="post-time">October 6, 2014 at 7:25 pm</span>
                                                            <a href="#">Reply</a>
                                                        </span>
                                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Leave a Reply </h3>
                                    <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <p>Name *</p>
                                                <input type="text" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <p>Email *</p>
                                                <input type="email" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <p>Website</p>
                                                <input type="text" />
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                                <p>Website</p>
                                                <textarea id="message-box" cols="30" rows="10"></textarea>
                                                <input type="submit" value="Post Comment" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- single-blog end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Blog Page -->

</main><!-- End #main -->