$(function(){
    // This function changes the position of the main menu from static to fixed on scroll 
    // Check the initial Poistion of the Sticky Header
    var stickyHeaderTop = $('#stickyheader').offset().top;

    $(window).scroll(function(){
        if( $(window).scrollTop() > stickyHeaderTop ) {
            $('#stickyheader').css({position: 'fixed', top: '0px'});
            $('#stickyalias').css('display', 'block');
        } else {
            $('#stickyheader').css({position: 'static', top: '0px'});
            $('#stickyalias').css('display', 'none');
        }
    });

    // scroll to anchor effect
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 300);
          return false;
        }
      }
    });
});
