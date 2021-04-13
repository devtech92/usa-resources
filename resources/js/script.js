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


// ----------------------Navbar-----------------------------------
  $(document).ready(function() {
    $("#open_nav").click(function () {
      $(".mySidebar").show();
      $("#open_nav").hide();
    });
    $("#close_nav").click(function () {
      $(".mySidebar").hide();
      $("#open_nav").show();
    });
    $(window).resize(function () {
      var windowsize = $(window).width();
      if (windowsize <= 360) {
        $("#btn2").show();
      } else {
        $("#btn2").hide();
      }
    });
    var windowsize = $(window).width();
    if (windowsize <= 360) {
      $("#btn2").show();
    } else {
      $("#btn2").hide();
    }

    $(".sidebar-togl").click(function () {
      $(".sidenav").addClass("expanded");
    });


  });
  $('#cascade-slider').cascadeSlider({});















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

