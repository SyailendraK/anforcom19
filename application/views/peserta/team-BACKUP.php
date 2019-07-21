<section class="container" id="teamlogin">

        <div class="row mb-3">
            <div class="col-md-6">
                <h3>Selamat Datang Tim <b style="color:#f6ba00;"><?php echo $team['nama_tim'];?></b></h3>
            </div>
            <div class="col-md-6">
                <p class="text-md-right"> Status :
                    <?php 
                        switch($team['verifikasi']){
                            case 0:
                                echo "<span style='font-weight:bold; color:#03568A'>Belum Terverifikasi</span>";
                                break;
                            case 1:
                                echo "<span style='font-weight:bold; color:#f6ba00'>Sudah Terverifikasi</span>";
                                break;
                        }
                    ?>                    
                </p>
            </div>
        </div>

        <nav>
            <div class="nav nav-tabs" role=tablist>
                <a class="nav-item nav-link active" href="#timdata" role="tab" data-toggle="tab" aria-controls="timdata" aria-selected="true">Profil</a>
                <a class="nav-item nav-link" href="#scanbukti" role="tab" data-toggle="tab" aria-controls="scanbukti" aria-selected="false">Pembayaran</a>
                <a class="nav-item nav-link" href="#uploadberkas" role="tab" data-toggle="tab" aria-controls="uploadberkas" aria-selected="false">Upload Berkas</a>
                <a class="nav-item nav-link" href="#editteam" role="tab" data-toggle="tab" aria-controls="editteam" aria-selected="false">Edit Team</a>
            </div>
        </nav>

        <div class="tab-content pt-3">

            <div class="tab-pane show active" id="timdata">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for=""><b>Perguruan Tinggi</b></label>
                            <p> <?php echo $team['nama_pt']; ?> </p>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Ketua</b></label>
                            <p> <?php echo $team['nama_ketua']; ?> </p>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Nomor Mahasiswa Ketua</b></label>
                            <p><?php echo $team['nim_ketua']; ?></p>
                        </div>
                        <div class="form-group">
                            <label for=""><b>E-mail</b></label>
                            <p><?php echo $team['email_ketua']; ?></p>
                        </div>
                        <div class="form-group">
                            <a class="btn btn-primary text-white" data-toggle="modal" data-target="#ktmketua" style="cursor: pointer;">
                                KTM KETUA
                            </a>
                            <div class="modal fade" role="dialog" id="ktmketua">
                                <div class="modal-dialog modal-md modal-content">
                                    <img class="img-responsive w-100 p-2" src="<?php echo site_url()?>/assets/ktm/<?php echo $team['ktm_ketua']?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for=""><b>Anggota 1</b></label>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Nama Anggota 1</b></label>
                            <p><?php echo $team['nama_anggota1']; ?></p>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Nomor Mahasiswa Anggota 1</b></label>
                            <p><?php echo $team['nim_anggota1']; ?></p>
                        </div>
                        <div class="form-group">
                            <a class="btn btn-primary text-white" data-toggle="modal" data-target="#ktmanggota1" style="cursor: pointer;">
                                KTM ANGGOTA 1
                            </a>
                            <div class="modal fade" role="dialog" id="ktmanggota1">
                                <div class="modal-dialog modal-md modal-content">
                                    <img class="img-responsive w-100 p-2" src="<?php echo site_url()?>/assets/ktm/<?php echo $team['ktm_anggota1']?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for=""><b>Anggota 2</b></label>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Nama Anggota 2</b></label>
                            <p><?php echo $team['nama_anggota2']; ?></p>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Nomor Mahasiswa Anggota 2</b></label>
                            <p><?php echo $team['nim_anggota2']; ?></p>
                        </div>
                        <div class="form-group">
                            <a class="btn btn-primary text-white" data-toggle="modal" data-target="#ktmanggota2" style="cursor: pointer;">
                                KTM ANGGOTA 2
                            </a>
                            <div class="modal fade" role="dialog" id="ktmanggota2">
                                <div class="modal-dialog modal-md modal-content">
                                    <img class="img-responsive w-100 p-2" src="<?php echo site_url()?>/assets/ktm/<?php echo $team['ktm_anggota2']?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="scanbukti">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Pembayaran Pendaftaran</h3>
                        <p>Sejumlah Rp 150.000 per tim <br>
                          Rekening Bank Rakyat Indonesia (BRI) <br> <br>
                          <b>7118 01 005563 53 0</b> <br>
                          <b>a.n. Clawdya Sari Purba Siboro</b> <br> <br>
                          Maksimal pembayaran 15 September 2018.
                         </p>
                         <small>Silahkan hubungi Panitia untuk verifikasi jika belum bisa upload bukti pembayaran</small>
                    </div>
                    <div class="col-md-7">
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#scanbuktijpg" style="cursor: pointer;">
                            <?php if($team['bukti_pembayaran'] == NULL) : ?>
                                Bukti Pembayaran
                            <?php endif ?>
                            <?php if($team['bukti_pembayaran'] != NULL) : ?>
                                <img class="w-100" src="<?php echo site_url()?>/assets/bukti/<?php echo $team['bukti_pembayaran']?>" alt="">
                            <?php endif ?>
                        </button>
                        <div class="modal fade" role="dialog" id="scanbuktijpg">
                            <div class="modal-dialog modal-md modal-content">
                                <img class="img-responsive w-100 p-2" src="<?php echo site_url()?>/assets/bukti/<?php echo $team['bukti_pembayaran']?>" alt="">
                            </div>
                        </div>
                        <?php if($team['bukti_pembayaran'] == NULL) : ?>
                            <?php echo form_open_multipart('peserta/upload_bukti'); ?>
                                <div class="form-group mt-3">
                                    <label for="">Upload Scan Bukti Pembayaran <i class="fa fa-exclamation-triangle"></i><br><small>dengan ekstensi .png/.jpg</small></label>
                                    <input class="form-control-file" type="file" name="userfile" accept=".png,.jpg" required>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $this->session->userdata('user_id'); ?>">
                                <input type="hidden" name="nama_tim" value="<?php echo $team['nama_tim']; ?>">
                                <button class="btn btn-outline-warning" type="submit" name="submitbukti"><i class="fa fa-upload" aria-hidden="true" style="margin-right:5px;"></i>upload</button>
                            </form>
                        <?php endif ?>
                        <?php if($team['bukti_pembayaran'] != NULL) : ?>
                            <?php echo form_open_multipart('peserta/upload_bukti'); ?>
                                <div class="form-group mt-3">
                                    <label for="">
                                        Bukti Pembayaran Sudah Terupload <i class="fa fa-check" aria-hidden="true"></i><br>
                                        <small>Perbarui Bukti Pembayaran <small>dengan ekstensi .png/.jpg</small></small>
                                    </label>
                                    <input class="form-control-file" type="file" name="userfile" accept=".png,.jpg" required>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $this->session->userdata('user_id'); ?>">
                                <input type="hidden" name="nama_tim" value="<?php echo $team['nama_tim']; ?>">
                                <button class="btn btn-outline-warning" type="submit" name="submitbukti"><i class="fa fa-upload" aria-hidden="true" style="margin-right:5px;"></i>perbarui</button>
                            </form>
                        <?php endif ?>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="uploadberkas">
                <div class="hehe">
                    <?php if($team['verifikasi'] == 1) : ?>
                    <!-- if (terverifikasi) -->
                        <div class="row">
                        <!-- if (tanggal 25 Juli - 5 September 2018) -->

                            <!-- if (belum upload proposal) -->
                            <?php if($team['proposal'] == NULL) : ?>
                                <div class="col-md-6 uploadberkas" action="" method="post" enctype="">
                                    <?php echo form_open_multipart('peserta/upload_proposal'); ?>
                                        <div class="form-group">
                                            <label>Upload Berkas Proposal <i class="fa fa-exclamation-triangle"></i><br><small>dengan ekstensi .pdf - maks. 5 MB</small></label>
                                            <input class="form-control-file" type="file" name="userfile" accept=".pdf" required>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $team['id']?>">
                                        <input type="hidden" name="nama_tim" value="<?php echo $team['nama_tim']?>">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-upload" aria-hidden="true"></i> Upload Berkas</button>
                                    </form>
                                </div>
                            <?php endif ?>
                            <?php if($team['proposal'] != NULL) : ?>
                                <!-- else (sudah upload proposal) -->
                                <div class="col-md-6 uploadberkas">
                                    <label>Berkas Proposal Sudah Terupload <i class="fa fa-check" aria-hidden="true"></i></label> <br>
                                    <a class="btn btn-success" href="<?php echo site_url(); ?>/assets/proposal/<?php echo $team['proposal']; ?>"><i class="fa fa-download" aria-hidden="true" style="margin-right:5px;"></i> Download Berkas</a><br><br>
                                    <?php echo form_open_multipart('peserta/upload_proposal'); ?>
                                        <div class="form-group">
                                            <label>Perbaharui Proposal<br><small>dengan ekstensi .pdf - maks. 5 MB </small></label>
                                            <input class="form-control-file" type="file" accept=".pdf" name="userfile" required>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $team['id']?>">
                                        <input type="hidden" name="nama_tim" value="<?php echo $team['nama_tim']?>">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-upload" aria-hidden="true"></i> Perbarui Berkas</button>
                                    </form>
                                </div>
                            <?php endif ?>

                            <!-- if (tanggal 6 - 30 September 2018) -->

                            <!-- if(belum upload prototype) -->
                            <!-- <?php if($team['prototipe'] == NULL && $team['link_prototipe'] == NULL) : ?>
                                <div class="col-md-6 uploadberkas">
                                    <?php echo form_open_multipart('peserta/upload_prototipe'); ?>
                                        <div class="form-group">
                                            <label for="">Upload Berkas Prototype <i class="fa fa-exclamation-triangle"></i><br><small>dengan ekstensi .zip/.rar - maks. 5 MB </small></label>
                                            <input class="form-control-file" type="file" name="userfile" accept=".zip,.rar">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Link Alternatif Berkas<br><small>awali dengan https://</small><span style="color:red">*</span></label>
                                            <input class="form-control" type="url" name="link_prototipe" value="" placeholder="https://">
                                        </div>
                                        <input type="hidden" name="nama_timup" value="">
                                        <small><i><span style="color:red;">*</span>) Jika ukuran prototype melebihi 5 MB silahkan upload di media penyimpanan online dan masukan link-nya di formulir yang disediakan</i></small>
                                        <br> <br>
                                        <input type="hidden" name="id" value="<?php echo $team['id']?>">
                                        <input type="hidden" name="default_prototipe" value="<?php echo $team['prototipe']?>">
                                        <input type="hidden" name="nama_tim" value="<?php echo $team['nama_tim']?>">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-upload" aria-hidden="true"></i> Upload Berkas</button>
                                    </form>
                                </div>
                            <?php endif ?> -->

                            <!-- else (sudah upload prototype) -->
                            <!-- <?php if($team['prototipe'] != NULL || $team['link_prototipe'] != NULL) : ?>
                                <div class="col-md-6 uploadberkas">
                                    <label>Berkas Prototype Sudah Terupload <i class="fa fa-check" aria-hidden="true"></i></label><br>
                                    <a class="btn btn-success" href="<?php echo site_url(); ?>/assets/prototipe/<?php echo $team['prototipe'] ?>"><i class="fa fa-download" aria-hidden="true"></i> Download Berkas</a><br><br>
                                    <?php echo form_open_multipart('peserta/upload_prototipe'); ?>
                                        <div class="form-group">
                                            <label for="">Perbarui Berkas Prototype<br><small>dengan ekstensi .zip/.rar - maks. 5 MB</small></label>
                                            <input class="form-control-file" type="file" name="userfile" accept=".zip,.rar">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Perbarui Link Alternatif Berkas <small>awali dengan https://</small><span style="color:red">*</span></label>
                                            <input class="form-control" type="url" name="link_prototipe" value="<?php echo $team['link_prototipe']?>">
                                        </div>
                                        <i style="font-size:9pt;margin-left:2%;"><span style="color:red;">*</span>) Jika ukuran berkas melebihi 5 MB silahkan Uploadkan di media penyimpanan online dan masukan link-nya di form yang disediakan</i>
                                        <br> <br>
                                        <input type="hidden" name="id" value="<?php echo $team['id']?>">
                                        <input type="hidden" name="default_prototipe" value="<?php echo $team['prototipe']?>">
                                        <input type="hidden" name="nama_tim" value="<?php echo $team['nama_tim']?>">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-upload" aria-hidden="true"></i> Perbarui Berkas</button>
                                    </form>
                                </div>
                            <?php endif ?> -->
                            
                            <!-- VIDEO -->
                            <!-- <?php if($team['video'] == NULL) : ?>
                                <div class="col-md-4 uploadberkas">
                                    <?php echo form_open_multipart('peserta/upload_video'); ?>
                                        <div class="form-group">
                                            <label for="video">Upload Link Video <i class="fa fa-exclamation-triangle"></i></label>
                                            <input type="url" name="video" id="video" class="form-control" required>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $team['id']?>">
                                        <button class="btn btn-primary" type="submit" name=""><i class="fa fa-upload" aria-hidden="true"></i> Upload Link</button>
                                    </form>
                                </div>
                            <?php endif ?> -->

                            <!-- else (sudah upload prototype) -->
                            <!-- <?php if($team['video'] != NULL) : ?>
                                <div class="col-md-4 uploadberkas">
                                    <label>Link Video Sudah Terupload <i class="fa fa-check" aria-hidden="true"></i></label><br>
                                    <?php echo form_open_multipart('peserta/upload_video'); ?>
                                        <div class="form-group">
                                            <label for="video">Perbarui Link Video</label>
                                            <input type="url" name="video" id="video" class="form-control" value="<?php echo $team['video']?>" required>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $team['id']?>">
                                        <button class="btn btn-primary" type="submit" name=""><i class="fa fa-upload" aria-hidden="true"></i> Perbarui Berkas</button>
                                    </form>
                                </div>
                            <?php endif ?> -->

                        </div>
                    <?php endif ?>
                    <?php if($team['verifikasi'] == 0) : ?>
                    <!-- else (belum verifikasi) -->
                    <div class="col-md-6 mb-5">
                        <h3>Belum Bisa Upload Berkas</h3>
                        <p>Silahkan hubungi panitia jika sudah upload bukti pembayaran</p>
                        <p><b>Ttd. Panitia Anforcom 2018</b></p>
                    </div>
                    <?php endif ?>
                </div>
            </div>

            <div class="tab-pane" id="editteam">
                <?php echo form_open_multipart('peserta/update_peserta'); ?>
                    <div class="row">
                        <div class="col-md-6" id="sisikiri">
                            <div class="form-group">
                                <label for="">Perguruan Tinggi</label>
                                <input class="form-control "type="text" name="nama_pt" pattern="[a-zA-Z0-9\s]{3,30}" placeholder="Nama Perguruan Tinggi Anda" value="<?php echo $team['nama_pt'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Tim Anda</label>
                                <input class="form-control "type="text" name="nama_tim" pattern="[a-zA-Z0-9]{3,30}" title="Huruf dan/atau Angka, 3 ~ 30 Karakter Tanpa Spasi" placeholder="Nama Tim Anda (Huruf dan/atau Angka, 3 ~ 30 Karakter)" placeholder="Huruf dan/atau Angka, 3 ~ 30 Karakter )" value="<?php echo $team['nama_tim'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Ketua</label>
                                <input class="form-control" type="text" name="nama_ketua" pattern="[a-zA-Z\s]{3,50}" placeholder="Nama Ketua" value="<?php echo $team['nama_ketua'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">E-mail Ketua</label>
                                <input class="form-control" type="email" name="email_ketua" placeholder="E-mail Aktif Ketua" value="<?php echo $team['email_ketua'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Mahasiswa Ketua</label>
                                <input class="form-control" type="text" name="nim_ketua" pattern="[0-9]{3,30}" placeholder="Nomor Mahasiswa Ketua" value="<?php echo $team['nim_ketua'] ?>" required>
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
                                <label for="">Ulang Kata Sandi</label>
                                <input class="form-control" type="password" name="verif_pass" placeholder="*******" required>
                            </div>
                        </div>

                        <div class="col-md-6" id="sisikanan">
                            <div class="form-group">
                                <label for="">Nama Anggota 1</label>
                                <input class="form-control" type="text" name="nama_anggota1" pattern="[a-zA-Z\s]{3,50}" value="<?php echo $team['nama_anggota1'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Mahasiswa Anggota 1</label>
                                <input class="form-control" type="text" name="nim_anggota1" pattern="[0-9]{3,30}" value="<?php echo $team['nim_anggota1'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Scan Kartu Tanda Mahasiswa Anggota 1 <small>.png/.jpg</small></label>
                                <input class="form-control-file" type="file" name="userfile2" accept=".png,.jpg">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="">Nama Anggota 2</label>
                                <input class="form-control" type="text" name="nama_anggota2" pattern="[a-zA-Z\s]{3,50}" value="<?php echo $team['nama_anggota2'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Mahasiswa Anggota 2</label>
                                <input class="form-control" type="text" name="nim_anggota2" pattern="[0-9]{3,30}" value="<?php echo $team['nim_anggota2'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Scan Kartu Tanda Mahasiswa Anggota 2 <small>.png/.jpg</small></label>
                                <input class="form-control-file" type="file" name="userfile3" accept=".png,.jpg">
                            </div>
                            <input type="hidden" name="id" value="<?php echo $team['id']?>">
                            <input type="hidden" name="default_nama_tim" value="<?php echo $team['nama_tim']?>">
                            <input type="hidden" name="default_email_ketua" value="<?php echo $team['email_ketua']?>">
                            <input type="hidden" name="default_ktm_ketua" value="<?php echo $team['ktm_ketua']?>">
                            <input type="hidden" name="default_ktm_anggota1" value="<?php echo $team['ktm_anggota1']?>">
                            <input type="hidden" name="default_ktm_anggota2" value="<?php echo $team['ktm_anggota2']?>">
                            <button class="btn btn-outline-warning" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
                        
</section>
