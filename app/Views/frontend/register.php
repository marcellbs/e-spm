<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/login.css">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <div class="card-body">

                            <!-- Logo -->
                            <div class="brand-wrapper">
                                <img src="<?= base_url(); ?>/assets/images/logo.svg" alt="logo" class="logo">
                            </div>
                            <!-- Akhir Logo -->
                            
                            <!-- validasi -->
                            <p class="login-card-description">Sign into your account</p>
                            <?php if (session()->getFlashdata('msg')) : ?>
                                <div class="alert alert-warning">
                                    <?= session()->getFlashdata('msg') ?>
                                </div>
                            <?php endif; ?>
                            <!-- validasi -->
                            
                            <!-- form register -->
                            <form action="<?php echo base_url(); ?>/SignupController/store" method="post">
                                <div class="form-group mb-3">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" name="name" id="name" value="<?= set_value('name') ?>" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="sr-only">Confirm Password</label>
                                    <input type="password" name="confirmpassword" id="password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-block login-btn mb-4">Signup</button>
                                </div>
                            </form>
                            <!-- akhir form register -->
                            
                            <p class="login-card-footer-text">Sudah Punya Akun ? <a href="<?= base_url(); ?>/SigninController/index" class="text-reset">Klik Disini</a></p>
                        </div>
                    </div>

                    <!-- gambar -->
                    <div class="col-md-7">
                        <img src="<?= base_url(); ?>/assets/images/login.jpg" alt="login" class="login-card-img">
                    </div>
                    <!-- gambar -->

                </div>
            </div>
        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>