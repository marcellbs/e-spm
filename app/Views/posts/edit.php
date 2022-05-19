<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <?php $validation = \Config\Services::validation(); ?>

    <div class="row mt-4">
        <div class="col-md-10 m-auto">
            <form method="POST" action="<?= base_url('posts/' . $post['id']) ?>">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT" />

                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="card-title">Ubah Postingan</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="form-group mb-3 has-validation">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control <?php if ($validation->getError('title')) : ?>is-invalid<?php endif ?>" name="title" placeholder="Post Title" value="<?php if ($post['title']) : echo $post['title'];
                                                                                                                                                                                        else : set_value('title');
                                                                                                                                                                                        endif ?>" />
                            <?php if ($validation->getError('title')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('title') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Deskripsi</label>
                            <textarea id="default-editor" class="form-control <?php if ($validation->getError('description')) : ?>is-invalid<?php endif ?>" name="description" placeholder="Description"><?php if ($post['description']) : echo $post['description'];
                                                                                                                                                                                                            else : set_value('description');
                                                                                                                                                                                                            endif ?></textarea>
                            <?php if ($validation->getError('description')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('description') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="card-footer ms-auto bg-light">
                        <a href="<?= base_url('posts') ?>" class="btn btn-danger">Kembali</a>

                        <button type="submit" class="btn btn-success me-3">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>