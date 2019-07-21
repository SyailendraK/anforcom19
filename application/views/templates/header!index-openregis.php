<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Anforcom 2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>av.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>navbar.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>summernote.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="300">

    <nav id="navigasi" class="navbar fixed-top navbar-expand-md navbar-dark">
        <a class="navbar-brand pt-0" href="<?= base_url(); ?>"><img height="25" src="<?= base_url('assets/img/') ?>LOGO+NAME.png" alt=""></a>
        <button class="navbar-toggler" aria-expanded="false" aria-controls="navbar" aria-label="Toggle navigation" type="button" data-target="#navbar" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo site_url('index');?>>Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo site_url('index#about');?>>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo site_url('index#event');?>>Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo site_url('index#informasi');?>>News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo site_url('index#contact');?>>Contact</a>
                </li>
                <?php if(!$this->session->userdata('logged_in'))  : ?>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo site_url('login');?>>Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo site_url('register');?> style="color:#DB9200;">Daftar</a>
                    </li>
                <?php endif ?>
                <?php if($this->session->userdata('logged_in'))  : ?>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo site_url('team');?> style="color:#DB9200;">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo site_url('peserta/logout');?> style="color:red;">Log Out</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </nav>