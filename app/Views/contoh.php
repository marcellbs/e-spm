<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <h4 class="mt-5">Apa yang ingin anda post ?</h4>
        <div class="card">
            <div class="card-header bg-white">
                Nama
            </div>
            <div class="card-body">
                <textarea id="default-editor">
                <p><em>Hello</em>, <span style="text-decoration: underline;"><strong>World!</strong></span></p>
                </textarea>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
