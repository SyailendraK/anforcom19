<section class="container" style="padding-top:100px;">
    <?php $i = 1 ?>
    <h2 class="mt-2 text-center"><strong>Berita</strong></h2>
    <div id="informasi">
        <div class="row mb-5">
            <?php foreach(array_reverse($berita) as $news) : ?>
            <div class="col-md-4 my-3">
                <a href="<?php echo site_url()?>news/<?php echo $news['id'] ?>" class="btn btn-default <?php if($i%2 != 0) echo("bc1");?> <?php if($i%2 == 0) echo("bc2");?>" role="button">
                    <div class="card <?php if($i%2 != 0) echo("c1");?> <?php if($i%2 == 0) echo("c2");?>">
                        <img class="card-img-top" src="<?php echo site_url()?>assets/img/hehe.png" style="background-image:url('<?php echo site_url()?>assets/berita/<?php echo $news['pic'] ?>');background-size:cover;background-position:center;background-repeat:no-repeat;width:100%;" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-title m-0"><?php echo $news['judul'] ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php $i++ ?>
            <?php endforeach ?>
        </div>
    </div>

</section>