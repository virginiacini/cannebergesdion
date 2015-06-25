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

//error handling contact form
document.contactform.onsubmit=function(){
  if(document.contactform.fullname.value ==''){
    alert("Please enter your name");
    document.contactform.fullname.focus();
    return false;
  } else if(document.contactform.email.value ==''){
    alert("Please enter your Email address");
    document.contactform.email.focus();
    return false;
  }
  return true;
}

// Google map
function initialize() {
  var myLatlng = new google.maps.LatLng(45.887563, -72.117883);
  var mapOptions = {
    zoom: 13,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1>Canneberges Dion</h1>'+
      '<div>'+
      '<p>140 Rte 9 rang, Ste-Séraphine, QC J0A 1E0</p>' +
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Uluru (Ayers Rock)'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);