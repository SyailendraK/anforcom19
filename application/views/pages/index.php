<section id="intro" class="shadow">
    <div class="hero d-flex align-items-center">
        <div class="col-md-5" align="center">
            <img width="240" src="<?= base_url('assets/img/'); ?>LOGO.png">
            <div class="d-flex justify-content-center mt-3">
                <h5 class="px-1 mr-1" style="background-color:#BEBEBE;color:#1F2945;font-size:1.25rem;"><strong>ANFORCOM</strong></h5>
                <h5 style="color:#d69b11;font-size:1.25rem;"><b>2019</b></h5>
            </div>
            <p class="text-white w-75" style="font-size:14px;">Smart Innovation with Creative Mobile Apps Creation</p>
        </div>
    </div>
</section>

<section id="about">
    <div class="container py-5">
        <div class="row">
            <div class="col-10 offset-md-1">
                <h3><strong>About The Event</strong></h3>
                <h5><strong>Annual Informatics Competition 2019</strong></h5><br>
                <p>ANFORCOM adalah serangkaian event IT tahunan berskala nasional yang diselenggarakan oleh Himpunan Mahasiswa Informatika Universitas Diponegoro </p>
            </div>
        </div>
    </div>
</section>

<section id="event">
    <div class="container py-5">
        <h1 class="judul text-center mb-3"><strong>Event</strong></h1>
        <div class="row">
            <div class="col-md-6 my-3">
                <h4><strong>Mobile Apps Competition</strong></h4>
                <div class="row mt-3">
                    <div class="col-auto">
                        <img width="150" src="<?= base_url('assets/img/'); ?>mobile.png" alt="">
                    </div>
                    <div class="col d-flex align-items-center" align="center">
                        <div>
                            <p>Kompetisi Pengembangan Mobile Apps bagi Mahasiswa/i se-Indonesia</p>
                            <a href="infolomba"><button type="button" class="btn btn-outline-primary" >More Info</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <h4><strong>Seminar IT</strong></h4>
                <div class="row mt-3">
                    <div class="col-auto">
                        <img width="150" src="<?= base_url('assets/img/'); ?>seminar.png" alt="">
                    </div>
                    <div class="col d-flex align-items-center" align="center">
                        <div>
                            <p>Seminar bagi masyarakat umum tentang Perkembangan Teknologi Masa Kini</p>
                            <a href="seminar"><button type="button" class="btn btn-outline-warning" >More Info</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="timeline" class="shadow">
    <div class="container-fluid py-3" align="center">
        <h3 class="judul" style="max-width:225px;">
            <strong>Timeline</strong>
            <span><button class="btn btn-outline-warning btn-sm" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="lomba-collapse seminar-collapse"><i class="fa fa-refresh"></i></button></span>
        </h3>
        <small>update : 20-09-18</small>
        <div class="collapse show multi-collapse" id="lomba-collapse">
            <div id="timeline-lomba" class=" carousel slide container-fluid py-3" data-ride="false" align="center">
                <h4><strong>Lomba</strong></h4>
                <ul class="pagination justify-content-center">
                    <li><a class="active" href="#timeline-lomba" data-slide-to="0"><strong>1</strong></a></li>
                    <li><a href="#timeline-lomba" data-slide-to="1"><strong>2</strong></a></li>
                    <li><a href="#timeline-lomba" data-slide-to="2"><strong>3</strong></a></li>
                    <li><a href="#timeline-lomba" data-slide-to="3"><strong>4</strong></a></li>
                    <li><a href="#timeline-lomba" data-slide-to="4"><strong>5</strong></a></li>
                </ul>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="d-block d-sm-flex align-items-center justify-content-center" align="center">
                            <img height="150" class="py-3 mx-3" src="<?= base_url('assets/img/'); ?>pendaftaran.png" alt="">
                            <p class="mx-3">Pendaftaran & verifikasi<br><i class="fa fa-calendar"></i><span><strong> 29 Juli - 23 September 2018</strong></span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block d-sm-flex align-items-center justify-content-center" align="center">
                            <img height="150" class="py-3 mx-3" src="<?= base_url('assets/img/'); ?>uploaddoc.png" alt="">
                            <p class="mx-3">Pengunggahan proposal<br><i class="fa fa-calendar"></i><span><strong> 29 Juli - 23 September 2018</strong></span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block d-sm-flex align-items-center justify-content-center" align="center">
                            <img height="150" class="py-3 mx-3" src="<?= base_url('assets/img/'); ?>uploadapp.png" alt="">
                            <p class="mx-3">Pengunggahan prototype dan video dokumentasi<br><i class="fa fa-calendar"></i><span><strong> 27 September - 7 Oktober 2018</strong></span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block d-sm-flex align-items-center justify-content-center" align="center">
                            <img height="150" class="py-3 mx-3" src="<?= base_url('assets/img/'); ?>announcement.png" alt="">
                            <p class="mx-3">Pengumuman final<br><i class="fa fa-calendar"></i><span><strong> 14 Oktober 2018</strong></span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block d-sm-flex align-items-center justify-content-center" align="center">
                            <img height="150" class="py-3 mx-3" src="<?= base_url('assets/img/'); ?>final.png" alt="">
                            <p class="mx-3">Babak final<br><i class="fa fa-calendar"></i><span><strong> 21 Oktober 2018</strong></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse multi-collapse" id="seminar-collapse">
            <div id="timeline-seminar" class="carousel slide container-fluid py-3" data-ride="false" align="center">
                <h4 class="mb-2"><strong>Seminar</strong></h4>
                <ul class="pagination justify-content-center">
                    <li><a class="active" href="#timeline-seminar" data-slide-to="0"><strong>1</strong></a></li>
                    <li><a href="#timeline-seminar" data-slide-to="1"><strong>2</strong></a></li>
                    <li><a href="#timeline-seminar" data-slide-to="2"><strong>3</strong></a></li>
                    <li><a href="#timeline-seminar" data-slide-to="3"><strong>4</strong></a></li>
                </ul>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="d-block d-sm-flex align-items-center justify-content-center" align="center">
                            <img height="150" class="py-3 mx-3" src="<?= base_url('assets/img/'); ?>pendaftaran.png" alt="">
                            <p class="mx-3">Tiket Presale 1<br><i class="fa fa-calendar"></i><span><strong> Sampai 10 Oktober 2018</strong></span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block d-sm-flex align-items-center justify-content-center" align="center">
                            <img height="150" class="py-3 mx-3" src="<?= base_url('assets/img/'); ?>pendaftaran.png" alt="">
                            <p class="mx-3">Tiket Presale 2<br><i class="fa fa-calendar"></i><span><strong> Sampai 17 Oktober 2018</strong></span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block d-sm-flex align-items-center justify-content-center" align="center">
                            <img height="150" class="py-3 mx-3" src="<?= base_url('assets/img/'); ?>pendaftaran.png" alt="">
                            <p class="mx-3">OTS<br><i class="fa fa-calendar"></i><span><strong> Tiket Terbatas</strong></span></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block d-sm-flex align-items-center justify-content-center" align="center">
                            <img height="150" class="py-3 mx-3" src="<?= base_url('assets/img/'); ?>seminar.png" alt="">
                            <p class="mx-3">Seminar<br><i class="fa fa-calendar"></i><span><strong> 21 Oktober 2018</strong></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="informasi">
    <div class="container py-5">
        <h1 class="judul text-center"><strong>Berita</strong></h1>
        <div class="row">
            <?php $delay = 100; ?>
            <?php $j = sizeof($berita) ?>
            <?php for ($i = $j ; $i > $j-4 ; $i--) : ?>
                <?php if(!empty($berita[$i])) : ?>
                <div class="col-md-4 my-3">
                    <a href="<?php echo site_url()?>news/<?php echo $berita[$i]['id'] ?>" class="btn btn-default <?php if($i%2 != 0) echo("bc1");?> <?php if($i%2 == 0) echo("bc2");?>" role="button">
                        <div class="card <?php if($i%2 != 0) echo("c1");?> <?php if($i%2 == 0) echo("c2");?>"  data-aos-duration="500" data-aos-delay="<?= $delay ?>" data-aos="flip-up">
                            <img class="card-img-top" src="<?php echo site_url()?>assets/img/hehe.png" style="background-image:url('<?php echo site_url()?>assets/berita/<?php echo $berita[$i]['pic'] ?>');background-size:cover;background-position:center;background-repeat:no-repeat;width:100%;" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-title m-0"><?php echo $berita[$i]['judul'] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php $delay += 150; ?>
                <?php endif ?>
            <?php endfor ?>
        </div>
        <div class="text-center">
            <a href="news"><button type="button" class="btn btn-outline-primary" >More news</button></a>
        </div>
    </div>
</section>

<section id="teaser">
    <div class="container-fluid d-flex justify-content-center shadow" style="background-color: black;">
        <div class="col-md-7 p-0 shadow-lg">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/4dldU7aRG4E?rel=0&controls=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<section id="sponsor-medpart" class="shadow">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-left mt-5 mb-3"><strong>Sponsor</strong></h4>
                <!-- <div class="w-100">
                    <a href="https://bukalapak.com/" target="_blank"><img class="m-3" width="300" src="<?= base_url('assets/img/'); ?>bukalapak.png" alt="bukalapak"></a>
                </div>
                <a href="https://indodax.com/" target="_blank"><img class="m-3" width="200" src="<?= base_url('assets/img/'); ?>indodax.png" alt="indodax"></a>
                <a href="https://ikitas.com/" target="_blank"><img class="m-3" width="200" src="<?= base_url('assets/img/'); ?>ikitas.png" alt="ikitas"></a> -->
            </div>
            <div class="col-md-6 justify-content-center" align="center">
                <h4 class="text-right mt-5 mb-3"><strong>Media Partner</strong></h4>
                <!-- <img class="w-100" src="<?= base_url('assets/img/'); ?>medpart.jpg" alt=""> -->
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5">
                <h3 class="text-center mb-3">Contact Us</h3>
                <p>Panitia Annual Informatics Competition 2019</p>
                <p>
                    <i class="fa fa-map-marker"></i>
                    Fakultas Sains dan Matematika, Universitas Diponegoro. Jl. Prof. Soedharto, S.H., Tembalang, Semarang 50275
                </p>
                <!-- <p><i class="fa fa-envelope"></i> info@anforcom.com</p> -->
                <p><i class="fa fa-phone"></i> Ananda Vijaya 089 651 449 153</p>
                <p><i class="fa fa-phone"></i> Ananda Vijaya 087 731 492 139</p>
            </div>
            <div class="col-md-7">
                <iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.834139266948!2d110.440896!3d-7.048210999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDInNTMuNiJTIDExMMKwMjYnMjcuMiJF!5e0!3m2!1sid!2sid!4v1438612753848" style="border:none"></iframe>
            </div>
        </div>
    </div>
</section>