(function ($) {
  "use strict";

  // Mobile Navigation
  if ($('.main-nav').length) {
    var $mobile_nav = $('.main-nav').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('header').append($mobile_nav);
    $('header').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>');
    $('header').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('.mobile-nav-overly').toggle();
    });
    
    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

})(jQuery);




$(function () {

  $(".tab-opt ul li a").on('click', function (e) {
      e.preventDefault(); // prenvent default anchor behavier

      $(".tab-opt ul li").removeClass('active'); // remove ative class from all li elements
      $(this).parent().addClass('active'); // add active class to current clicked li element

      $(".tabs-content > div").hide(); // hide all content
      var hrefId = $(this).attr('href'); // get id from href attrbute of clicked anchor tag
      $(hrefId).show(); // show id's content        
  });

});

$(function () {

  $(".filter-tournament-opt ul li a").on('click', function (e) {
      e.preventDefault(); // prenvent default anchor behavier

      $(".filter-tournament-opt ul li").removeClass('active'); // remove ative class from all li elements
      $(this).parent().addClass('active'); // add active class to current clicked li element

      $(".filter-tournament-content > div").hide(); // hide all content
      var hrefId = $(this).attr('href'); // get id from href attrbute of clicked anchor tag
      $(hrefId).show(); // show id's content        
  });

});


/*$(".custom-date-field").hide();
$(".custom-date").click(function() {
    if($("#custom").is(":checked")) {
        $(".custom-date-field").show();
    } else {
        $(".custom-date-field").hide();
    }
});

*/
$(".custom-date-field").hide();
$("input[name='selectdate']").click(function () {
  $('.custom-date-field').css('display', ($(this).val() === 'custom') ? 'block':'none');
});



/**
 * Created by chase.marcum on 11/13/2014.
 */
jQuery(document).ready(function ($) {
  
  var gadgetCarousel = $(".carousel");
  
  gadgetCarousel.each(function() {
    if ($(this).is(".homebanner")) {
		$(this).slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    } 
    else if ($(this).is(".topgamebanner")){
      $(this).slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    }
    else if ($(this).is(".topchannelsbanner")){
      $(this).slick({
        dots: true,
        infinite: true,
        slidesToShow: 6,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    }
    else {
      $(this).slick();
    }
  })
  
  
  
  
}); // end of os-carousel.js