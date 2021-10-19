var intViewportWidth = window.innerWidth;

if(intViewportWidth < 769){
  $(".news-row").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 800,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    prevArrow: '<div class="prev"><span>PREV</span></div>',
    nextArrow: '<div class="next"><span>NEXT</span></div>'
  });

}


$(".mvSlideArea").slick({
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 800,
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  prevArrow: '<div class="prev"><span>PREV</span></div>',
  nextArrow: '<div class="next"><span>NEXT</span></div>'
});

$(".product-slider").slick({
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 800,
  slidesToShow: 4,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  prevArrow: '<div class="prev"><span></span></div>',
  nextArrow: '<div class="next"><span></span></div>',
  responsive: [{
    breakpoint: 1023,
    settings: "unslick"
  }]
});


// stop video
$('.rando__movie .btn-close').click(function(){
    console.log(2);
    $('.yvideo').attr('src', $('.yvideo').attr('src'));
})


 // scroll to top
 $(window).scroll(function() {
  if ($(this).scrollTop() > 200) {
      $('.scroll-top').fadeIn();
      $('.scroll-top').css('opacity', 1);
  } else {
      $('.scroll-top').fadeOut();
  }
});

// set accLink tradePage
// set accLink tradePage
$('.scroll-top a').click(function(e) {
  e.preventDefault();
  var speed = 400;
  var href = $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top -200;
  $('body,html').animate({
      scrollTop: position
  }, speed, 'swing');
  return false;
});