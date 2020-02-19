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

// layar
$(document).ready(function() {
  $(window).width(function() {
    if($(this).width() > 1367) {
        $('.sales').addClass('container');
        $('.sales').removeClass('row');
        $('.saless').removeClass('col s10 offset-s1');

        $('.cart').addClass('container');
        $('.cart').removeClass('row');
        $('.cartt').removeClass('col s10 offset-s1');

        $('.total').addClass('container');
        $('.total').removeClass('row');
        $('.totall').removeClass('col s10 offset-s1');
    } else {
        $('.sales').removeClass('container');
        $('.sales').addClass('row');
        $('.saless').addClass('col s10 offset-s1');

        $('.cart').removeClass('container');
        $('.cart').addClass('row');
        $('.cartt').addClass('col s10 offset-s1');

        $('.total').removeClass('container');
        $('.total').addClass('row');
        $('.totall').addClass('col s10 offset-s1');
    }
  });
});
// End layar

// inputnumber
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value++;
  document.getElementById('number').value = value;
};

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
};
// end inputnumber

// Counter Harga
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('Rp.', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = 'Rp.' + total
}
// End Counter Harga
