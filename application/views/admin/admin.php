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
<?php $i = 1 ?>

        <nav>
            <div class="nav nav-tabs" role=tablist>
                <a class="nav-item nav-link active" href="#datatim" role="tab" data-toggle="tab" aria-controls="datatim" aria-selected="true">Verifikasi Tim</a>
                <a class="nav-item nav-link" href="#editberita" role="tab" data-toggle="tab" aria-controls="editberita" aria-selected="false">Edit Berita</a>
                <a class="nav-item nav-link" href="#addberita" role="tab" data-toggle="tab" aria-controls="addberita" aria-selected="false">Tambah Berita</a>
            </div>
        </nav>

        <div class="tab-content py-3">

            <div class="tab-pane show active" id="datatim">
                <p>
                    <i>- tombol checklist hijau untuk verifikasi jika bukti pembayaran sudah sah</i><br>
                    <i>- tombol x merah untuk membatalkan status verifikasi</i><br>
                    <i>- tombol biru gambar bukti pembayaran tim</i>
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID DB</th>
                        <th scope="col">Nama Tim</th>
                        <th scope="col">Perguruan Tinggi</th>
                        <th scope="col">Bukti Pembayaran</th>
                        <th scope="col">Status</th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peserta as $team) : ?>
                            <tr>
                                <th scope="row"><?php echo $i ?></th>
                                <th scope="row"><?php echo $team['id'] ?></th>
                                <td>
                                    <a href="<?php echo site_url('/adminAV18/view_profile/'.$team['id'])?>">
                                        <?php echo $team['nama_tim'] ?>                                
                                    </a>
                                </td>
                                <td><?php echo $team['nama_pt'] ?></td>
                                <?php if($team['bukti_pembayaran'] == NULL) : ?>
                                    <td>
                                        <p>
                                            BELUM BAYAR
                                        </p>
                                    </td>
                                <?php endif ?>
                                <?php if($team['bukti_pembayaran'] != NULL) : ?>
                                    <td><a href="<?php site_url(); ?>assets/bukti/<?php echo $team['bukti_pembayaran'] ?>" type="button" class="btn btn-primary"><i class="fa fa-image"></i></a></td>
                                <?php endif ?>
                                <td>
                                    <?php
                                        switch ($team['verifikasi']) {
                                            case 0:
                                            echo
                                                "<p class='text-danger m-0'>
                                                    Belum Verifikasi
                                                </p>";
                                                break;
                                            case 1:
                                                echo "<p class='text-success m-0'>
                                                    Sudah Verifikasi
                                                </p>";
                                                break;
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php echo form_open('adminAV18/verif')?>
                                        <input type="hidden" name="id" value="<?php echo $team['id'] ?>">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <?php echo form_open('adminAV18/unverif')?>
                                        <input type="hidden" name="id" value="<?php echo $team['id'] ?>">
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i += 1?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

            <div class="tab-pane" id="editberita">
                <p><i>pilih berita yg mau diedit, klik tombol biru, isi form dibawah yg mau diganti, klik simpan</i></p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $x=1 ?>
                        <?php foreach ($berita as $news) : ?>
                            <tr>
                                <th scope="row"><?php echo $x ?></th>
                                <td><?php echo $news['created_at']?></td>
                                <td><a href="<?php echo site_url() ?>/news/<?php echo $news['id']?>" target="_blank"><?php echo $news['judul'] ?></a></td>
                                <td class="row">
                                    <?php echo form_open_multipart('adminAV18/edit_berita') ?>
                                        <input type="hidden" name="id" value="<?php echo $news['id'] ?>">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </form>
                                    <!-- <?php echo form_open_multipart('adminAV18/delete_berita') ?>
                                        <input type="hidden" name="id" value="<?php echo $news['id'] ?>">
                                        <button class="btn btn-danger ml-1"><i class="fa fa-remove" aria-hidden="true"></i></button>
                                    </form> -->
                                </td>
                            </tr>
                            <?php $x++ ?>                   
                        <?php endforeach ?>
                    </tbody>
                </table>

                <!-- <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" type="text" name="" value="">
                </div>
                <div class="form-group">
                    <label for="">Upload Gambar <small>dengan ekstensi .png/.jpg</small></label>
                    <input class="form-control-file" type="file" name="" accept=".png,.jpg">
                </div>
                <div class="form-group">
                    <label>Paragraf</label>
                    <textarea class="form-control" rows="10"></textarea>
                </div>
                <button type="button" class="btn btn-success">Simpan</button> -->

                <!-- <div id="summernote"></div>
                <script>
                $(document).ready(function() {
                    $('#summernote').summernote();
                });
                </script> -->
            </div>

            <div class="tab-pane" id="addberita">
                <?php echo form_open_multipart('adminAV18/add_berita')?>
                    <div class="form-group">
                        <label>Judul *</label>
                        <input class="form-control" type="text" name="judul" placeholder="Judul Berita" required>
                    </div>
                    <div class="form-group">
                        <label for="">Upload Gambar <small>dengan ekstensi .png/.jpg</small></label>
                        <input class="form-control-file" type="file" name="userfile" accept=".png,.jpg,.jpeg" required>
                    </div>
                    <div class="form-group">
                        <label>Konten *</label>
                        <textarea class="form-control" rows="10" name="content" placeholder="Konten Berita" required></textarea>
                    </div>
                    <!-- <div id="summernote"></div>
                    <script>
                    $(document).ready(function() {
                        $('#summernote').summernote();
                    });
                    </script> -->
                    <button type="submit" class="btn btn-success">Post</button>
                </form>
            </div>

        </div>
                        
</section>


</body>

<script src="<?= base_url('assets/js/'); ?>jquery-3.3.1.slim.min.js"></script>
<script src="<?= base_url('assets/js/'); ?>popper.min.js"></script>
<script src="<?= base_url('assets/js/'); ?>bootstrap.min.js"></script>
<script src="<?= base_url('assets/js/'); ?>av.js"></script>
<script src="<?= base_url('assets/js/'); ?>summernote.js"></script>

</html>