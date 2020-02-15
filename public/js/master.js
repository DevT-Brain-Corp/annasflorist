// detectscreen
$(document).ready(function() {
  $(window).on('resize', function() {
    if($(this).width() > 1367) {
      $('.detectscreen').addClass('container');
    }else{
      $('.detectscreen').removeClass('container');
    }
  });
});
// end detectscreen

// Sliding Menu
$('.scroll').on('click', function(e) {

 var tujuan = $(this).attr('href');

 var elemenTujuan = $(tujuan);

 $('html , body').animate({
  scrollTop: elemenTujuan.offset().top - 90
}, 1000, 'easeInOutExpo');

 e.preventDefault();
});
// End Sliding Menu

$(document).ready(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() > 50) {
        $('.navnav').addClass('solid');
    } else {
        $('.navnav').removeClass('solid');
    }
  });
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });

// Modal
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems,{

    });
  });
// End Modal

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, {
      indicators: false,
      height: 800
    });
  });

// Maps
var mymap = L.map('mapid').setView([-8.166074, 113.720853], 100);

L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=amayy49uQF1YDQn4fFWc', {
    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
    maxZoom: 18
}).addTo(mymap);

var marker = L.marker([-8.166074, 113.720853]).addTo(mymap);
marker.bindPopup("<b>Annas Florist</b><br>Perumahan Mastrip Blok W-4, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121").openPopup();
// End Maps

// Read more

// End Read More
