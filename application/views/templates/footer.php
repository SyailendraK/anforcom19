<div class="container-fluid p-3" style="background-color:#101523;">
    <div class="row justify-content-center mb-2">
        <a class="mx-2" href="https://www.instagram.com/anforcom/" target="_blank"><img width="25px" src="<?= base_url('assets/img/'); ?>insta.png"></a>
        <a class="mx-2" href="http://line.me/ti/p/~@gsy5063l" target="_blank"><img width="25px" src="<?= base_url('assets/img/'); ?>line.png"></a>
        <a class="mx-2" href="https://twitter.com/anforcom" target="_blank"><img width="25px" src="<?= base_url('assets/img/'); ?>twi.png"></a> 
    </div>
    <p class="text-center m-auto" style="color:white;"><small>© ANFORCOM 2019, HMIF Universitas Diponegoro</small></p>
</div>

</body>
<script src="<?= base_url('assets/js/'); ?>av.js"></script>
<script src="<?= base_url('assets/js/'); ?>jquery-3.4.1.min.js"></script>
<script src="<?= base_url('assets/js/'); ?>popper.min.js"></script>
<script src="<?= base_url('assets/js/'); ?>bootstrap.min.js"></script>
<script src="<?= base_url('assets/js/'); ?>summernote.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?= base_url('assets/js/particles.js-master/'); ?>particles.js"></script>
<script src="<?= base_url('assets/js/particles.js-master/demo/js/'); ?>app.js"></script>

<?php if(isset($ajax)) $this->load->view($ajax)?>

<!-- 
<script type="text/javascript">
	particlesJS.load('particles-js', 'particles.json', function() {
  console.log('callback - particles.js config loaded');
});
</script> -->
<script type="text/javascript">
  // script dinamik height
  $('.navbar').addClass("navbar-hide");

	$(document).ready(function(){

    $('#particles-js').height($('#dinamik').height()+110);
      // console.log('masukk');

    $('.nav-link').click(function(){
      $('#navbar').removeClass("show");
      $('#navbar').addClass("collapse");
      // $('.navbar-toggler').addClass("collapsed");
    });

    // $('.navbar-toggler').click(function(){
    //   $('#navbar').removeClass("show");
    //   $('#navbar').addClass("collapse");
    //   // $('#navbar').toggleClass("show");
    // });

  });

    $(window).scroll(function(e) {
      var scroll = $(window).scrollTop();
      if (scroll <= 30) {
          $('.navbar').addClass("navbar-hide");
      } else {
          $('.navbar').removeClass("navbar-hide");
      }
    });

  
</script>

<script>
  AOS.init();
</script>

</html>