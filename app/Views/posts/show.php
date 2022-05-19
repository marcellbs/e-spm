<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">

    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="card-title">Detail Postingan</h5>
                </div>
                <div class="card-body p-4">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row">Judul</th>
                                <td><?= $post['title'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Deskripsi</th>
                                <td><?= $post['description'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Dibuat </th>
                                <td><?= $post['created_at'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer ms-auto bg-white border-light">
                    <div class="me-3">
                        <a href="<?= base_url('posts') ?>" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>