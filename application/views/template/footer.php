</div>
<!-- End of Main Content -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Programmer e JAI 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tiny-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Media Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-row">
                    <?php
                    $folder = 'asset/img/';
                    $scandir = scandir($folder);

                    foreach ($scandir as $file) {
                        if (!in_array($file, ['.', '..'])) {
                            $filePath = $folder . $file;
                            if (is_file($filePath) && preg_match('/^.*\.(jpg|jpeg|png|bmp|JPG|JPEG|PNG|BMP)$/', $file)) {
                                print '<div class="col-2"><img class="imageSelect rounded img-fluid" src="' . base_url($filePath) . '" alt="no-img"></div>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('asset/sbadmin/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('asset/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('asset/sbadmin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('asset/sbadmin/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('asset/sbadmin/vendor/chart.js/Chart.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('asset/sbadmin/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('asset/sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('asset/sbadmin/js/demo/datatables-demo.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('asset/sbadmin/js/demo/chart-area-demo.js') ?>"></script>
<script src="<?= base_url('asset/sbadmin/js/demo/chart-pie-demo.js') ?>"></script>

<!-- Tinymce -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<script>
    $('.imageSelect').click(function() {
        var ed = tinymce.activeEditor;
        var src = $(this).attr('src');
        var img = '<img src="' + src + '" alt="no-img" style="border-radius:.25rem;">';

        ed.selection.setContent(img);
        $('#exampleModalCenter').modal('hide');
    });
</script>

</body>

</html>