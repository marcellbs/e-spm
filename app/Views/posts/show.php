<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row py-4">
        <div class="col-xl-12 text-end">
            <a href="<?= base_url('posts') ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 m-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="card-title">Show Post</h5>
                </div>
                <div class="card-body p-4">
                    <div class="form-group mb-3 has-validation">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" disabled placeholder="Post Title" value="<?php echo trim($post['title']);?>"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Deskripsi</label>
                        <?php echo trim($post['description']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
