// count row
$(document).ready(function(){
  var test = $("#detail #row").length;

  document.getElementById("showcart").innerHTML=test;
  document.getElementById("showcart2").innerHTML=test;
});
// end count row

// count Price
function changeTotalFromCount(input) {
    var unitPrice = parseFloat(input.getAttribute("data-unitPrice"));
    var count = input.value;


    var price = unitPrice * count;
    var formattedPrice = price;

    var label = input.parentNode.parentNode.nextElementSibling.firstElementChild;
    label.innerHTML = '';
    label.appendChild(document.createTextNode("Rp. "+formattedPrice));
    getTotalPrice();
}

function getTotalPrice() {
    var total = 0,
        inputs = document.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
        if(inputs[i].value) {
            total +=   parseFloat(inputs[i].getAttribute("data-unitPrice")) * parseInt(inputs[i].value,10);
        }


  }
    if(total > 0) {
    document.getElementById('totalPriceDisplay').innerText =total;
        }
}


function initTotals() {
    var inputs = document.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
           changeTotalFromCount(inputs[i]);
    }
}

window.onload = initTotals;
// end count Price
