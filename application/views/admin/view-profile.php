<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Anforcom 2019</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>av.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>navbar.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>summernote.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

<section class="d-flex p-2">
    <a href="<?php echo site_url('adminAV18');?>">
        <img height="30" src="<?= base_url('assets/img/') ?>LOGO.png" alt="">
    </a>
    <h4 class="mr-auto">admin</h4>
    <a class="text-white" href=<?php echo site_url('adminAV18/logout');?>>
        <button type="button" href="adminAV18/logout" class="btn btn-danger">Log Out</button>
    </a>
</section>

<section class="container my-5">
  <h1 class="mb-4">VIEW PROFILE</h1>
  <div class="row">
    <div class="col-md-6">
      <p><b>ID TEAM : </b><br><?php echo $peserta['id'] ?></p>
      <p><b>Perguruan Tinggi : </b><br><?php echo $peserta['nama_pt'] ?></p>
      <p><b>Nama Team : </b><br><?php echo $peserta['nama_tim'] ?></p>
      <p><b>Email Ketua : </b><br><?php echo $peserta['email_ketua'] ?></p>
      <p><b>NIM Ketua : </b><br><?php echo $peserta['nim_ketua'] ?></p>
      <p><b>KTM Ketua : </b><br>
        <a href="<?php echo site_url() ?>/assets/ktm/<?php echo $peserta['ktm_ketua'] ?>">
          <img class="img-fluid" src="<?php echo site_url() ?>/assets/ktm/<?php echo $peserta['ktm_ketua'] ?>" alt="">
        </a>
      </p>
      <!-- <p><b>Password : </b><br><?php echo $peserta['password'] ?></p> -->
      <p><b>Nama Anggota 1 : </b><br><?php echo $peserta['nama_anggota1'] ?></p>
      <p><b>NIM Anggota 1 : </b><br><?php echo $peserta['nim_anggota1'] ?></p>
      <p><b>KTM Anggota 1 : </b><br>
        <a href="<?php echo site_url() ?>/assets/ktm/<?php echo $peserta['ktm_anggota1'] ?>">
          <img class="img-fluid" src="<?php echo site_url() ?>/assets/ktm/<?php echo $peserta['ktm_anggota1'] ?>" alt="">
        </a>
      </p>
      <p><b>Nama Anggota 2 : </b><br><?php echo $peserta['nama_anggota2'] ?></p>
      <p><b>NIM Anggota 2 : </b><br><?php echo $peserta['nim_anggota2'] ?></p>
      <p><b>KTM Anggota 2 : </b><br>
        <a href="<?php echo site_url() ?>/assets/ktm/<?php echo $peserta['ktm_anggota2'] ?>">
          <img class="img-fluid" src="<?php echo site_url() ?>/assets/ktm/<?php echo $peserta['ktm_anggota2'] ?>" alt="">
        </a>
      </p>
    </div>
    <div class="col-md-6">
      <p>
        <b>PROPOSAL :</b><br><a target="_blank" href="<?php echo site_url(); ?>/assets/proposal/<?php echo $peserta['proposal'];?>"><?php echo $peserta['proposal'] ?></a>
      </p>
      <p>
        <b>PROTOTIPE :</b><br><a target="_blank" href="<?php echo site_url(); ?>/assets/prototipe/<?php echo $peserta['prototipe'];?>"><?php echo $peserta['prototipe'] ?></a>
      </p>
      <p>
        <b>Link Prototipe : </b><br><a target="_blank" href="<?php echo $peserta['link_prototipe'] ?>"><?php echo $peserta['link_prototipe'] ?></a><br>
      </p>
      <!-- <p>
        <b>Link Video : </b><br><?php echo $peserta['video'] ?>
      </p> -->
      <p>
        <b>Bukti Pembayaran :</b>
        <a href="<?php echo site_url() ?>/assets/bukti/<?php echo $peserta['bukti_pembayaran'] ?>">
          <img class="img-fluid" src="<?php echo site_url() ?>/assets/bukti/<?php echo $peserta['bukti_pembayaran'] ?>" alt="">
        </a>
      </p>
      <p>
        <b>Status : </b><br>
        <?php if($peserta['verifikasi'] == 0) : ?>
          Belum Verifikasi
        <?php endif ?>
        <?php if($peserta['verifikasi'] == 1) : ?>
          Sudah Verifikasi
        <?php endif ?>
      </p>
      <p>
        <b>Daftar Pada : </b><br><?php echo $peserta['created_at'] ?>
      </p>
    </div>
  </div>
</section>
