// -- Set Dynamic Heights and CSS -- //
$(document).ready(function(){
  resizeDiv();
});
window.onresize = function(event) {
  resizeDiv();
};
function resizeDiv() {
  vpw = $(window).width(); // Viewport Width
  vph = $(window).height(); // Viewport Height

  headerH = $('#masthead').height();

// Your Styles
// Make height equal width for .circle //

 cirW = $('.circle').width();

    $('.circle').css({'height': cirW + 'px'});

// Home page background image height
$('.fixed_bg_home').css({'height': vph + 100 + 'px'});
}

// SMOOTH SCROLLING
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});