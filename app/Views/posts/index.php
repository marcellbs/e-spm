<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row py-2">
        <div class="col-xl-12">
            <?php
            if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
                    <?php echo session()->getFlashdata('success') ?>
                </div>
            <?php elseif (session()->getFlashdata('failed')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
                    <?php echo session()->getFlashdata('failed') ?>
                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Postingan</h5>
                </div>
                <div class="card-body">
                    <div class="text-end mb-3">
                        <a href="<?= base_url('posts/new') ?>" class="btn btn-primary">[+] Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th>Judul</th>
                                <th scope="col">Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            if (count($posts) > 0) :
                                foreach ($posts as $post) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $post['title'] ?></td>
                                        <td><?= $post['description'] ?></td>
                                        <td class="d-flex">
                                            <a href="<?= base_url('posts/' . $post['id']) ?>" class="btn btn-sm btn-primary mx-1" title="Show"><i class="fa-regular fa-eye text-light"></i></a>
                                            <a href="<?= base_url('posts/edit/' . $post['id']) ?>" class="btn btn-sm btn-success mx-1" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form class="display-none" method="post" action="<?= base_url('posts/' . $post['id']) ?>" id="postDeleteForm<?= $post['id'] ?>">
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <a href="javascript:void(0)" onclick="deletePost('postDeleteForm<?= $post['id'] ?>')" class="btn btn-sm btn-danger" title="Delete"><i class="fa-regular fa-trash-can"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach;
                            else : ?>
                                <tr rowspan="1">
                                    <td colspan="4">
                                        <h6 class="text-danger text-center">Postingan tidak ditemukan</h6>
                                    </td>
                                </tr>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function deletePost(formId) {
        var confirm = window.confirm('Apakah anda ingin menghapus postingan ini?');
        if (confirm == true) {
            document.getElementById(formId).submit();
        }
    }
</script>
<?= $this->endSection(); ?>