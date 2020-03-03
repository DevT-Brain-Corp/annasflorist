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

// slider
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, {
      indicators: false,
      height: 800
    });
  });
// End Slider

// Maps
var mymap = L.map('mapid').setView([-8.166074, 113.720853], 100);

L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=amayy49uQF1YDQn4fFWc', {
    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
    maxZoom: 18
}).addTo(mymap);

var marker = L.marker([-8.166074, 113.720853]).addTo(mymap);
marker.bindPopup("<b>Annas Florist</b><br>Perumahan Mastrip Blok W-4, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121").openPopup();
// End Maps
