<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Media</h1>
    <p class="mb-4">Gallery Media</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Upload Gambar</h6>
            <!-- <a href="<?= base_url('website/input') ?>" type="button" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Blog</a> -->
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->session->flashdata('message') ?>
                    <div class="alert alert-dark" role="alert"><i class="fas fa-info-circle"></i>
                        <strong>Media : </strong> Library gambar untuk digunakan dalam blog
                    </div>
                    <div class="col-md-12 mt-4">
                        <?php
                        echo form_open_multipart('website/media_action');

                        ?>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" class="form-control" id="customFileLang" lang="en" name="media">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->