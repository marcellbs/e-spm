<?php

use App\Database\Migrations\Users;
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <h4 class="mt-3">Apa yang ingin anda post ?</h4>
        <div class="card">
            <div class="card-header bg-white">
                <img class=" rounded-circle mx-2 img-postingan" src="https://i.imgur.com/hczKIze.jpg" alt=""> 
                <h6 class="card-title ms-3 mt-2">Marcell Bintang Setiawan</h6>
            </div>
            <div class="card-body border border-light">
                <textarea id="default-editor" placeholder="Tuliskan sesuatu...">

                </textarea>
            </div>
            <div class="card-footer bg-white ms-auto border border-light">
                <button type="button" class="btn btn-primary ml-2"><i class="fa-regular fa-circle-plus"></i></i> Posting</button>
            </div>
        </div>

        <div class="card my-4 mb-3">
            <div class="card-header bg-white">
                <img class=" rounded-circle mx-2 img-postingan" src="https://i.imgur.com/hczKIze.jpg" alt=""> 
                <h6 class="card-title ms-3 mt-2">Marcell Bintang Setiawan</h6>
            </div>
            <div class="card-body border border-light">
                    <p class="mx-2 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt numquam dicta possimus. Voluptatem sunt maxime animi quaerat voluptatum non totam quae, optio adipisci eveniet sapiente veritatis atque molestiae consectetur provident officia quos voluptates aspernatur suscipit fuga beatae! Assumenda aperiam officia cumque sint eius optio ea, veritatis accusamus quisquam illo. Neque doloremque ipsum aperiam vero aliquid, inventore cupiditate laudantium totam in deserunt repudiandae quia at voluptatibus accusantium sequi quo velit, vel nesciunt harum nobis repellendus nostrum temporibus? Aperiam, nemo vel ducimus accusantium repudiandae, accusamus explicabo placeat minima quibusdam culpa sapiente animi doloremque, laboriosam quas? Alias corporis, nemo cupiditate laborum doloribus adipisci!</p>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
