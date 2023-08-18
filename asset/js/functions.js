(function ($) {
  $('.list-item:first-child').addClass("active");
  $('.list-item').click(function(){
    $('.list-item').removeClass("active");//added dot here
    $(this).addClass("active");
    let img = $(this).data("img")
    if(img){
      $('.image-active').attr('src',img)
    }
  });
  $(document).ready(function () {
    $('.multiple-items').slick({
      dots: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 480,
          settings: {
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 1
          }
        }
      ]
    });
  });
  if(jQuery(window).width() < 768) {
      var swiper = new Swiper(".related-post-content", {
        slidesPerView: "auto",
        loop:true,
        pagination: {
          el: ".blog-pagination",
          clickable: true,
        },
      });
  }
  $(".image-active").stop( true, true );
})(jQuery);

