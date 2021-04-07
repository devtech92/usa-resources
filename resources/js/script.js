(function($) {

$('[data-toggle="offcanvas"]').on('click', function () {
    $('.navbar-collapse').toggleClass('show');
    });





    /*==== Nav ====*/
    $('.navbar-collapse a').on('click',function(){
        $(".navbar-collapse").collapse('hide');
    });

/* ================ Nav ================ */
    $('.fa-caret-down').on("click", function(e) {
        e.preventDefault();
        $(this).next().slideToggle('');
    });


/* ================ Nice Select ================ */
    $(document).ready(function() {
  $('select').niceSelect();
});




/* ================ testimonials ================ */
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 50,
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                700: {
                    items: 2,
                    nav: false
                },
                1170: {
                    items: 3,
                    nav: true,
                    loop: true
                }
            }
        });
    });

















  // // The slider being synced must be initialized first
  // $('#carousel').flexslider({
  //   animation: "slide",
  //   controlNav: false,
  //   animationLoop: false,
  //   slideshow: false,
  //   itemWidth: 210,
  //   itemMargin: 5,
  //   asNavFor: '#slider'
  // });

  // $('#slider').flexslider({
  //   animation: "slide",
  //   controlNav: false,
  //   animationLoop: false,
  //   slideshow: false,
  //   sync: "#carousel"
  // });


})(jQuery);
