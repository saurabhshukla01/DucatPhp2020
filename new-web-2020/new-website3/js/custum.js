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

  $(".enterpreneur-tab-opt ul li a").on('click', function (e) {
      e.preventDefault(); // prenvent default anchor behavier

      $(".enterpreneur-tab-opt ul li").removeClass('active'); // remove ative class from all li elements
      $(this).parent().addClass('active'); // add active class to current clicked li element

      $(".enterpreneur-tabs-content > div").hide(); // hide all content
      var hrefId = $(this).attr('href'); // get id from href attrbute of clicked anchor tag
      $(hrefId).show(); // show id's content        
  });

});



jQuery(document).ready(function($) {
  "use strict";
  $('#customers-testimonials').owlCarousel( {
      loop: true,
      center: true,
      items: 3,
      margin: 30,
      autoplay: true,
      dots:true,
      nav:true,
      autoplayTimeout: 8500,
      smartSpeed: 450,
      navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1170: {
          items: 3
        }
      }
    });
  });