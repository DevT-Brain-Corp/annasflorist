// Navbar
$(document).ready(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() > 50) {
        $('.navnav').addClass('solid');
    } else {
        $('.navnav').removeClass('solid');
    }
  });
});
// End Navbar

// Layar
$(document).ready(function() {
  $(window).width(function() {
    if($(this).width() > 1367) {
        $('.deskripsii').addClass('container');
        $('.deskripsii').removeClass('row');
        $('.deskripsiii').removeClass('col s10 offset-s1');

        $('.narasi').addClass('container');
        $('.narasi').removeClass('row');
        $('.narasii').removeClass('col s10 offset-s1');

        $('.sales').addClass('container');
        $('.sales').removeClass('row');
        $('.saless').removeClass('col s10 offset-s1');
    } else {
        $('.deskripsii').removeClass('container');
        $('.deskripsii').addClass('row');
        $('.deskripsiii').addClass('col s10 offset-s1');

        $('.narasi').removeClass('container');
        $('.narasi').addClass('row');
        $('.narasii').addClass('col s10 offset-s1');

        $('.sales').removeClass('container');
        $('.sales').addClass('row');
        $('.saless').addClass('col s10 offset-s1');
    }
  });
});
// End Layar

// dropdown
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems);
});
// end dropdown

// modal
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems);
});
// end modal

// slider gambar
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.slider');
  var instances = M.Slider.init(elems,{
    height: 600,
    indicators: false
  });
});
// end slider gambar

// inputnumber
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
};

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
};
// end inputnumber

// Stok Pot
function handleClick(myRadio) {
  document.getElementById("stokpot2").innerHTML = myRadio.id;
}
// End Stok Pot
