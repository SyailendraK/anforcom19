//script pagination di jadwal event
$(document).ready(function(){
    $('#timeline-lomba ul li a').click(function(){
      $('#timeline-lomba ul li a').removeClass("active");
      $(this).addClass("active");
  });
});

$(document).ready(function(){
    $('#timeline-seminar ul li a').click(function(){
      $('#timeline-seminar ul li a').removeClass("active");
      $(this).addClass("active");
  });
});

$(document).on('click', function(){
  $('#navbar').collapse('hide');
});
// $('.navbar-toggler').on('click', function(){
//   $('#navbar').toggle();
// });


// const $menu = $("#navbar");
// $(document).ready(function(){
//   $(document).mouseup(function(e){
//     //if(!$menu.is(e.target) && $menu.has(e.target).length === 0){
//         $menu.removeClass('show');
//     //}
//   })
// })
