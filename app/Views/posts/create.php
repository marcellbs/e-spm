<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <?php $validation = \Config\Services::validation(); ?>

    <div class="row">
        <div class="col-md-10 mx-auto">
            <form method="POST" action="<?= base_url('posts') ?>">
                <?= csrf_field() ?>

                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="card-title">Membuat Postingan</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="form-group mb-3 has-validation">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control <?php if ($validation->getError('title')) : ?>is-invalid<?php endif ?>" name="title" placeholder="Post Title" value="<?php echo set_value('title'); ?> " />
                            <?php if ($validation->getError('title')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('title') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Deskripsi</label>
                            <textarea id="default-editor" class="form-control <?php if ($validation->getError('description')) : ?>is-invalid<?php endif ?>" name="description" placeholder="Description"><?php echo set_value('description'); ?></textarea>
                            <?php if ($validation->getError('description')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('description') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="card-footer ms-auto bg-light border-light">
                        
                        <a href="<?= base_url('posts') ?>" class="btn btn-danger ">Kembali</a>
                        

                        <button type="submit" class="btn btn-success">Simpan</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>