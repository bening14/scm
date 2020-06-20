<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Blog</h1>
    <p class="mb-4">Blog yang sudah pernah dibuat, <strong>Jika ada komentar segera dibalas!</strong></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">Blog</h6> -->
            <a href="<?= base_url('website/input_blog') ?>" type="button" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Blog</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Kategori</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Kategori</th>
                            <th>Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($blog as $bg) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $bg->judul ?></td>
                                <td><?= $bg->konten ?></td>
                                <td><?= $bg->kategori ?></td>
                                <td><?= $bg->tanggal ?></td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->