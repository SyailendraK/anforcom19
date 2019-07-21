<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Anforcom 2018</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>register.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- SEO Meta Tag -->
    <meta name="robots" content="noodp"/>
    <meta property="og:type" content="website" />
    <meta content='all-language' http-equiv='Content-Language'/>
    <meta content='2 days' name='revisit-after'/>
    <meta content='global' name='distribution'/>
    <meta content='global' name='target'/>
    <meta content='all' name='robots'/>
    <meta content='all' name='googlebot'/>
    <meta content='all' name='msnbot'/>
    <meta content='all' name='Googlebot-Image'/>
    <meta content='all' name='Slurp'/>
    <meta content='all' name='ZyBorg'/>
    <meta content='all' name='Scooter'/>
    <meta content='ALL' name='spiders'/>
    <meta content='true' name='MSSmartTagsPreventParsing'/>
    <meta content='never' name='Expires'/>
    <meta content='2 days' name='revisit-after'/>
    <meta content='id' name='language'/>
    <meta content='id' name='geo.country'/>

    <meta name="twitter:card" content="summary"/>

    <!-- <meta content='width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0' name='viewport'/> -->
    <meta content='index,follow' name='robots'/>
    <meta content='website' property='og:type'/>

    <!-- Validate Website to Sitemap -->
    <meta content='#' name='google-site-verification'/>
    <link href='#' rel='author'/>

  </head>

  <body>

    <section id="register">
      <div id="judulregis">
        <h2 class="pt-3">Form Pendaftaran Mobile Apps Competition</h2>
      </div>

      <div id="form-regis">

        <?php echo validation_errors(); ?>

        <?php echo form_open_multipart('peserta/register_peserta'); ?>
          <div class="row">
            <div class="col-md-6" id="sisikiri">
              <div class="form-group">
                <label for="">Perguruan Tinggi *</label>
                <input class="form-control" type="text" name="nama_pt" pattern="[a-zA-Z0-9\s]{3,30}" placeholder="Nama Perguruan Tinggi Anda" required>
              </div>
              <div class="form-group">
                <label for="">Nama Tim Anda *</label>
                <input class="form-control" type="text" name="nama_tim" pattern="[a-zA-Z0-9]{3,30}" title="Huruf dan/atau Angka, 3 ~ 30 Karakter Tanpa Spasi" placeholder="Nama Tim Anda (Huruf dan/atau Angka, 3 ~ 30 Karakter)" required>
              </div>
              <div class="form-group">
                <label for="">Nama Ketua *</label>
                <input class="form-control" type="text" name="nama_ketua" pattern="[a-zA-Z\s]{3,50}" placeholder="Nama Lengkap Ketua"required>
              </div>
              <div class="form-group">
                <label for="">E-mail Ketua *</label>
                <input class="form-control" type="email" name="email_ketua" placeholder="E-mail Aktif Ketua" required>
              </div>
              <div class="form-group">
                <label for="">Nomor Mahasiswa Ketua *</label>
                <input class="form-control" type="text" name="nim_ketua" pattern="[0-9]{3,30}" placeholder="Nomor Mahasiswa Ketua" required>
              </div>
              <div class="form-group">
                <label for="">Scan Kartu Tanda Mahasiswa Ketua * <small>.png/.jpg</small></label>
                <input class="form-control-file" type="file" name="userfile1" accept=".png,.jpg" required>
              </div>
              <div class="form-group">
                <label for="">Kata Sandi * <small>huruf dan angka 8 ~ 30 karakter</small></label>
                <input class="form-control" type="password" name="password" pattern="[a-zA-Z0-9]{8,30}" title="huruf dan angka 8 ~ 30 karakter tanpa spasi" placeholder="********" required>
              </div>
              <div class="form-group">
                <label for="">Ulang Kata Sandi *</label>
                <input class="form-control" type="password" name="verif_pass" placeholder="********" required>
              </div>
            </div>
            <div class="col-md-6" id="sisikanan">
              <div class="form-group">
                <label for="">Nama Anggota 1</label>
                <input class="form-control" type="text" name="nama_anggota1" pattern="[a-zA-Z\s]{3,50}" required>
              </div>
              <div class="form-group">
                <label for="">Nomor Mahasiswa Anggota 1</label>
                <input class="form-control" type="text" name="nim_anggota1" pattern="[0-9]{3,30}" required>
              </div>
              <div class="form-group">
                <label for="">Scan Kartu Tanda Mahasiswa Anggota 1 <small>.png/.jpg</small></label>
                <input class="form-control-file" type="file" name="userfile2" accept=".png,.jpg" required>
              </div>
              <hr>
              <div class="form-group">
                <label for="">Nama Anggota 2</label>
                <input class="form-control" type="text" name="nama_anggota2" pattern="[a-zA-Z\s]{3,40}">
              </div>
              <div class="form-group">
                <label for="">Nomor Mahasiswa Anggota 2</label>
                <input class="form-control" type="text" name="nim_anggota2" pattern="[0-9]{3,30}">
              </div>
              <div class="form-group">
                <label for="">Scan Kartu Tanda Mahasiswa Anggota 2 <small>.png/.jpg</small></label>
                <input class="form-control-file" type="file" name="userfile3" accept=".png,.jpg">
              </div>
              <p><small>*) Wajib untuk diisi</small></p>
              <button class="btn" type="submit">DAFTAR!</button>
            </div>
          </div>
        </form>
      </div>
    </section>
