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
  <?php echo form_open_multipart('adminAV18/update_berita')?>
    <div class="form-group">
        <label>Judul *</label>
        <input class="form-control" type="text" name="judul" placeholder="Judul Berita" required value="<?php echo $berita['judul'] ?>">
    </div>
    <div class="form-group">
        <label for="">Upload Gambar <small>dengan ekstensi .png/.jpg</small></label>
        <input class="form-control-file" type="file" name="userfile" accept=".png,.jpg,.jpeg" required>
    </div>
    <div class="form-group">
        <label>Konten *</label>
        <textarea class="form-control" rows="10" name="content" placeholder="Konten Berita" required><?php echo $berita['content'] ?></textarea>
    </div>
    <!-- <div id="summernote"></div>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    </script> -->
    <input type="hidden" name="id" value="<?php echo $berita['id'] ?>">
    <input type="hidden" name="default_pic" value="<?php echo $berita['pic'] ?>">
    <button type="submit" class="btn btn-success">Post</button>
  </form>
</section>

</body>

<script src="<?= base_url('assets/js/'); ?>jquery-3.3.1.slim.min.js"></script>
<script src="<?= base_url('assets/js/'); ?>popper.min.js"></script>
<script src="<?= base_url('assets/js/'); ?>bootstrap.min.js"></script>
<script src="<?= base_url('assets/js/'); ?>av.js"></script>
<script src="<?= base_url('assets/js/'); ?>summernote.js"></script>

</html>
