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

