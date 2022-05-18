<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
<?php $validation = \Config\Services::validation(); ?>

    <div class="row py-4">
        <div class="col-xl-12 text-end">
            <a href="<?= base_url('posts') ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 m-auto">
            <form method="POST" action="<?= base_url('posts/'.$post['id']) ?>">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT"/>

                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="card-title">Update Postingan</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="form-group mb-3 has-validation">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control <?php if($validation->getError('title')): ?>is-invalid<?php endif ?>" name="title" placeholder="Post Title" value="<?php if($post['title']): echo $post['title']; else: set_value('title'); endif ?>"/>
                            <?php if ($validation->getError('title')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('title') ?>
                                </div>                                
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Deskripsi</label>
                            <textarea id="default-editor" class="form-control <?php if($validation->getError('description')): ?>is-invalid<?php endif ?>" name="description" placeholder="Description"><?php if($post['description']): echo $post['description']; else: set_value('description'); endif ?></textarea>
                                <?php if ($validation->getError('description')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('description') ?>
                                </div>                                
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>