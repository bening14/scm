<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Blog</h1>
    <p class="mb-4">Blog yang sudah pernah dibuat, <strong>Jika ada komentar segera dibalas!</strong></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog</h6>
            <!-- <a href="<?= base_url('website/input') ?>" type="button" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Blog</a> -->
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-dark" role="alert"><i class="fas fa-info-circle"></i>
                        <strong>Tambah blog : </strong> Gambar Utama yang diupload berukuran 850 x 530 pixel.
                    </div>
                    <div class="col-md-12 mt-4">
                        <?php
                        echo form_open_multipart('website/input_blog_action');

                        ?>
                        <div class="form-group">
                            <label>Gambar Utama Blog</label>
                            <input type="file" class="form-control" id="customFileLang" lang="en" name="gambar">
                        </div>
                        <div class="form-group">
                            <label>Judul Blog</label>
                            <input type="text" class="form-control" value="" name="judul">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" value="" name="kategori">
                        </div>
                        <div class="form-group">
                            <label>Sub Konten</label>
                            <input type="text" class="form-control" value="" name="sub_konten">
                        </div>
                        <div class="form-group">
                            <label class="mt-4">Isi Blog</label>
                            <textarea name="konten" id="textEditor" placeholder="Masukan konten disini..." cols="80" rows="15">
                                </textarea>
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