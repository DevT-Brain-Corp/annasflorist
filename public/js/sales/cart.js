// count row
$(document).ready(function(){
  var countdiv = $("#detail #row").length;

  document.getElementById("showcart").innerHTML=countdiv;
  document.getElementById("showcart2").innerHTML=countdiv;
});
// end count row

// count Price
function changeTotalFromCount(input) {
  console.log(input);
    var unitPrice = parseFloat(input.getAttribute("data-unitPrice"));
    var count = input.value;


    var price = unitPrice * count;
    var formattedPrice = 'Rp.' + price;

    var label = input.parentNode.parentNode.nextElementSibling.firstElementChild;
    label.innerHTML = '';
    label.appendChild(document.createTextNode(formattedPrice));
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
    document.getElementById('totalPriceDisplay').innerText ="Rp."+total;
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
