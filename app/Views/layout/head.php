<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <!-- Icons -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="<?php echo base_url(); ?>/assets/js/674861518f.js" crossorigin="anonymous"></script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Js tinyMce -->
    <script src="<?= base_url('assets/tinymce/js/tinymce/tinymce.min.js'); ?>"></script>
    <script>
        tinymce.init({
            selector: 'textarea#default-editor',
            height: 250,
            menubar: false,
            statusbar: false,

        });
    </script>
    <title> <?= $title; ?> </title>
</head>