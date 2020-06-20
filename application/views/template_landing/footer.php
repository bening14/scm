    <!-- Start Footer bottom Area -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <h3><span></span>Solusi Cipta Media</h3>
                                </div>

                                <p>Kami merupakan perusahaan yang bergerak dibidang Web Developer, Sistem Informasi dan Web Applications. Kami selalu menggunakan Template Premium untuk mengerjakan website klien kami sehingga menghasilkan website yang profesional dan lebih baik.</p>
                                <div class="footer-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>information</h4>
                                <p>
                                    Untuk informasi lebih lanjut, silahkan hubungi kami
                                </p>
                                <div class="footer-contacts">
                                    <p><span>Phone:</span> 0895-3663-81270</p>
                                    <p><span>Email:</span> info@solusiciptamedia.com</p>
                                    <p><span>Address:</span> Jl. Perusahaan Gg. V Malang 65154, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Premium Template</h4>
                                <div class="flicker-img">
                                    <a href="#"><img src="<?= base_url('asset/img/themes/burger.png') ?>" alt=""></a>
                                    <a href="#"><img src="<?= base_url('asset/img/themes/spa.jpg') ?>" alt=""></a>
                                    <a href="#"><img src="<?= base_url('asset/img/themes/recipes.jpg') ?>" alt=""></a>
                                    <a href="#"><img src="<?= base_url('asset/img/themes/landing.jpg') ?>" alt=""></a>
                                    <a href="#"><img src="<?= base_url('asset/img/themes/cars.jpg') ?>" alt=""></a>
                                    <a href="#"><img src="<?= base_url('asset/img/themes/photograph.jpg') ?>" alt=""></a>
                                    <a href="#"><img src="<?= base_url('asset/img/themes/articles.jpg') ?>" alt=""></a>
                                    <a href="#"><img src="<?= base_url('asset/img/themes/realestate.jpg') ?>" alt=""></a>
                                    <a href="#"><img src="<?= base_url('asset/img/themes/bike.jpg') ?>" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright 2020 <a href="<?= base_url('website/admin') ?>"><strong>Solusi Cipta Media</strong></a>. All Rights Reserved
                            </p>
                        </div>
                        <div class="credits">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->

    <!-- JavaScript Libraries -->
    <script src="<?= base_url('asset/lib/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('asset/lib/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('asset/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('asset/lib/venobox/venobox.min.js') ?>"></script>
    <script src="<?= base_url('asset/lib/knob/jquery.knob.js') ?>"></script>
    <script src="<?= base_url('asset/lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('asset/lib/parallax/parallax.js') ?>"></script>
    <script src="<?= base_url('asset/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('asset/lib/nivo-slider/js/jquery.nivo.slider.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('asset/lib/appear/jquery.appear.js') ?>"></script>
    <script src="<?= base_url('asset/lib/isotope/isotope.pkgd.min.js') ?>"></script>

    <!-- Contact Form JavaScript File -->
    <script src="<?= base_url('asset/contactform/contactform.js') ?>"></script>

    <script src="<?= base_url('asset/js/main.js') ?>"></script>


    <!-- toottip -->
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <!-- widget whatsapp and telegram -->
    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+62895366381270", // WhatsApp number
                telegram: "+6281358725860", // Telegram bot username
                call_to_action: "Halo, Kami disini siap membantu Anda !", // Call to action
                button_color: "#FF6550", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "whatsapp,telegram", // Order of buttons
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->
    </body>

    </html>