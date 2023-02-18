/*============== Header Mean Menu  ===============*/ 
jQuery(document).ready(function () {
  jQuery('#main_menu').meanmenu({
    meanMenuContainer: '#mobilemenu',
    meanScreenWidth: 991,
  });
});

/*============== Owl Carousel ===============*/ 
jQuery('document').ready(function() {
  jQuery("#owl-slider").owlCarousel({
    autoplay: true,
    items: 1,
  });
});

/*================ WOW Animation init ===============*/ 
jQuery('document').ready(function() {
  // Page scroll animate
  new WOW().init();
});

/*=============== Auto typing ================*/ 
jQuery('document').ready(function() {
  // Auto typing
  new Typed('.auto-typing', {
    strings: ['Web Developer', 'Web Designer', 'Freelancer'],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true,
  });
});

/*============== Back to top ================*/ 
jQuery('document').ready(function() {
  // Back to top
  var backTop = jQuery(".back-to-top");
    
 jQuery(window).scroll(function() {
      if(jQuery(document).scrollTop() > 400) {
        backTop.css('visibility', 'visible');
      }
      else if(jQuery(document).scrollTop() < 400) {
        backTop.css('visibility', 'hidden');
      }
    });
  
    backTop.click(function() {
      jQuery('html').animate({
        scrollTop: 0
      }, 1000);
      return false;
    });
  });



