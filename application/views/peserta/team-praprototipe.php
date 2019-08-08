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
                          Rekening Bank Negara Indonesia (BNI) <br> <br>
                          <b>0843 005 873</b> <br>
                          <b>a.n. Anggita Muntaz Fathaya</b> <br> <br>
                          Maksimal pembayaran 15 September 2019.
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
                            <div class="form-group mt-3">
                                <label for="">Pendaftaran telah ditutup <i class="fa fa-exclamation-triangle"></i></label>
                            </div>
                        <?php endif ?>
                        <?php if($team['bukti_pembayaran'] != NULL) : ?>
                            <?php echo form_open_multipart('peserta/upload_bukti'); ?>
                                <div class="form-group mt-3">
                                    <label for="">
                                        Bukti Pembayaran Sudah Terupload <i class="fa fa-check" aria-hidden="true"></i><br>
                                    </label>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $this->session->userdata('user_id'); ?>">
                                <input type="hidden" name="nama_tim" value="<?php echo $team['nama_tim']; ?>">
                            </form>
                        <?php endif ?>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="uploadberkas">
                <div class="hehe">
                    <?php if($team['verifikasi'] == 1) : ?>

                        <div class="row">

                            <?php if($team['proposal'] == NULL) : ?>
                                <div class="col-md-6 uploadberkas" action="" method="post" enctype="">
                                    <h3>Pendaftaran telah ditutup <i class="fa fa-exclamation-triangle"></i></h3>
                                </div>
                            <?php endif ?>

                            <?php if($team['proposal'] != NULL) : ?>
                                <div class="col-md-6 uploadberkas">
                                    <label>Berkas Proposal Sudah Terupload <i class="fa fa-check" aria-hidden="true"></i><br><small>Semoga beruntung !</small></label> <br>
                                    <a class="btn btn-success" href="<?php echo site_url(); ?>/assets/proposal/<?php echo $team['proposal']; ?>"><i class="fa fa-download" aria-hidden="true" style="margin-right:5px;"></i> Download Berkas</a><br><br>
                                </div>
                            <?php endif ?>
                            <!-- 21,30,32,33,34,35,36,37,39,41,46,49 -->
                            <?php if(
                                $_SESSION['user_id'] == 999999 ||
                                $_SESSION['user_id'] == 999998 ) 
                            : ?>

                                <?php if($team['prototipe'] == NULL && $team['link_prototipe'] == NULL) : ?>
                                    <div class="col-md-6 uploadberkas">
                                        <?php echo form_open_multipart('peserta/upload_prototipe'); ?>
                                            <div class="form-group">
                                                <label for="">Upload Berkas Prototype <i class="fa fa-exclamation-triangle"></i><br><small>dengan ekstensi .zip/.rar - maks. 25 MB </small></label>
                                                <input class="form-control-file" type="file" name="userfile" accept=".zip,.rar">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Link Alternatif Berkas<br><small>awali dengan http://</small><span style="color:red">*</span></label>
                                                <input class="form-control" type="url" name="link_prototipe" value="" placeholder="https://">
                                            </div>
                                            <input type="hidden" name="nama_timup" value="">
                                            <small><i><span style="color:red;">*</span>) Jika ukuran prototype melebihi 25 MB silahkan upload di media penyimpanan online dan masukan link-nya di formulir yang disediakan</i></small>
                                            <div class="form-group">
                                                <label for="">Link Youtube<br><small>awali dengan http://</small><span style="color:red">*</span></label>
                                                <input class="form-control" type="url" name="video" value="" placeholder="https://">
                                            </div>
                                            <input type="hidden" name="nama_timup" value="">
                                            <small><i><span style="color:red;">*</span>) Jika ukuran prototype melebihi 25 MB silahkan upload di media penyimpanan online dan masukan link-nya di formulir yang disediakan</i></small>
                                            <br> <br>
                                            <input type="hidden" name="id" value="<?php echo $team['id']?>">
                                            <input type="hidden" name="default_prototipe" value="<?php echo $team['prototipe']?>">
                                            <input type="hidden" name="nama_tim" value="<?php echo $team['nama_tim']?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-upload" aria-hidden="true"></i> Upload Berkas</button>
                                        </form>
                                    </div>
                                <?php endif ?>

                                <?php if($team['prototipe'] != NULL || $team['link_prototipe'] != NULL) : ?>
                                    <div class="col-md-6 uploadberkas">
                                        <?php if($team['prototipe'] != NULL && $team['link_prototipe'] != NULL) : ?>
                                            <label>Berkas/Link Prototype Sudah Terupload <i class="fa fa-check" aria-hidden="true"></i></label><br>
                                        <?php endif ?>
                                        <?php if($team['prototipe'] != NULL && $team['link_prototipe'] == NULL) : ?>
                                            <label>Berkas Prototype Sudah Terupload <i class="fa fa-check" aria-hidden="true"></i></label><br>
                                        <?php endif ?>
                                        <?php if($team['prototipe'] == NULL && $team['link_prototipe'] != NULL) : ?>
                                            <label>Link Prototype Sudah Terupload <i class="fa fa-check" aria-hidden="true"></i></label><br>
                                        <?php endif ?>
                                        <?php if($team['prototipe'] != NULL) : ?>
                                            <a class="btn btn-success" href="<?php echo site_url(); ?>/assets/prototipe/<?php echo $team['prototipe'] ?>"><i class="fa fa-download" aria-hidden="true"></i> Download Berkas</a><br><br>
                                        <?php endif ?>
                                        <?php echo form_open_multipart('peserta/upload_prototipe'); ?>
                                            <div class="form-group">
                                                <label for="">Perbarui Berkas Prototype<br><small>dengan ekstensi .zip/.rar - maks. 25 MB</small></label>
                                                <input class="form-control-file" type="file" name="userfile" accept=".zip,.rar">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Perbarui Link Alternatif Berkas <small>awali dengan http://</small><span style="color:red">*</span></label>
                                                <input class="form-control" type="url" name="link_prototipe" value="<?php echo $team['link_prototipe']?>">
                                            </div>
                                            <i style="font-size:9pt;margin-left:2%;"><span style="color:red;">*</span>) Jika ukuran berkas melebihi 25 MB silahkan Uploadkan di media penyimpanan online dan masukan link-nya di form yang disediakan</i>
                                            <div class="form-group">
                                                <label for="">Perbarui Link Youtube <small>awali dengan http://</small><span style="color:red">*</span></label>
                                                <input class="form-control" type="url" name="video" value="<?php echo $team['video']?>">
                                            </div>
                                            <i style="font-size:9pt;margin-left:2%;"><span style="color:red;">*</span>) Jika ukuran berkas melebihi 25 MB silahkan Uploadkan di media penyimpanan online dan masukan link-nya di form yang disediakan</i>
                                            <br> <br>
                                            <input type="hidden" name="id" value="<?php echo $team['id']?>">
                                            <input type="hidden" name="default_prototipe" value="<?php echo $team['prototipe']?>">
                                            <input type="hidden" name="nama_tim" value="<?php echo $team['nama_tim']?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-upload" aria-hidden="true"></i> Perbarui Berkas</button>
                                        </form>
                                    </div>
                                <?php endif ?>

                            <?php endif ?>


                        </div>

                    <?php endif ?>

                    <?php if($team['verifikasi'] == 0) : ?>
                        <div class="col-md-6 mb-5">
                            <h3>Pendaftaran telah ditutup <i class="fa fa-exclamation-triangle"></i></h3>
                        </div>
                    <?php endif ?>
                    
                </div>
            </div>

            <div class="tab-pane" id="editteam">
                <?php if($team['verifikasi'] == 0) : ?>
                    <div class="col-md-6 mb-5">
                        <h3>Pendaftaran telah ditutup <i class="fa fa-exclamation-triangle"></i></h3>
                    </div>
                    <?php endif ?>
                    <?php if($team['verifikasi'] == 1) : ?>
                    <div class="col-md-6 mb-5">
                        <h3>Sudah tidak bisa edit team <i class="fa fa-exclamation-triangle"></i></h3>
                    </div>
                <?php endif ?>
            </div>

        </div>
                        
</section>
