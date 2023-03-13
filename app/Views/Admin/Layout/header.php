<!DOCTYPE html>
<html>

<head lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Librería Alpha</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/img/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#da532c">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/datatables-net/datatables.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/separate/vendor/datatables-net.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/lib/bootstrap-sweetalert/sweetalert.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/separate/vendor/sweet-alert-animations.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>assets/js/lib/jquery/jquery.min.js"></script>
</head>

<body class="with-side-menu">

    <header class="site-header">
        <div class="container-fluid">
            <a href="#" class="site-logo">
                <img class="hidden-md-down" src="<?= base_url() ?>assets/img/logo-2.png" alt="">
                <img class="hidden-lg-up" src="<?= base_url() ?>assets/img/logo-2-mob.png" alt="">
            </a>
            <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
                <span>toggle menu</span>
            </button>
            <button class="hamburger hamburger--htla">
                <span>toggle menu</span>
            </button>
            <div class="site-header-content">
                <div class="site-header-content-in">
                    <div class="site-header-shown">
                        <div class="dropdown user-menu">
                            <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="<?= base_url() ?>assets/img/avatar-2-64.png" alt="">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                                <a class="dropdown-item" href="#"><span
                                        class="font-icon glyphicon glyphicon-user"></span>Profile</a>
                                <a class="dropdown-item" href="#"><span
                                        class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
                                <a class="dropdown-item" href="#"><span
                                        class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><span
                                        class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
                            </div>
                        </div>
                    </div><!--.site-header-shown-->
                </div><!--site-header-content-in-->
            </div><!--.site-header-content-->
        </div><!--.container-fluid-->
    </header><!--.site-header-->