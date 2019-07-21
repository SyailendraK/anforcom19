<section >
    <div id="particles-js" style="width: 97vw; position: absolute !important;z-index: -1 !important;margin-top: 10vh;"></div>
    <div class="news-header" align="center" style="padding-top: 100px;">
        <h3><b><?php echo $berita['judul'] ?></b></h3>
        <small><?php echo $berita['created_at']?></small>
        <div class="col-sm-6 my-5">
            <img class="w-100" id="dinamik" src="<?= base_url('assets/berita/'); ?><?php echo $berita['pic'] ?>" alt="post image" >
        </div>
    </div>
</section>
<section class="container" style="padding-top:0px;">
    <p>
        <?php echo $berita['content'] ?>
    </p>
    
    <h3 class="mt-5">Berita Lainnya</h3>
    <div id="informasi">
        <div class="row mb-5">
            <?php $i = 1 ?>
            <?php $delay = 100; ?>
            <?php foreach(array_reverse($index) as $news) : ?>
            <div class="col-md-4 my-3">
                <a href="<?php echo site_url()?>news/<?php echo $news['id'] ?>" class="btn btn-default <?php if($i%2 != 0) echo("bc1");?> <?php if($i%2 == 0) echo("bc2");?>" role="button">
                    <div class="card <?php if($i%2 != 0) echo("c1");?> <?php if($i%2 == 0) echo("c2");?>" data-aos-duration="500" data-aos-delay="<?= $delay ?>" data-aos="flip-up">
                        <img class="card-img-top" src="<?php echo site_url()?>assets/img/hehe.png" style="background-image:url('<?php echo site_url()?>assets/berita/<?php echo $news['pic'] ?>');background-size:cover;background-position:center;background-repeat:no-repeat;width:100%;" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-title m-0"><?php echo $news['judul'] ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php $i++ ?>
            <?php $delay += 150; ?>
            <?php endforeach ?>
        </div>
    </div>

</section>