function changeTotalFromCount(input) {
    var unitPrice = parseFloat(input.getAttribute("data-unitPrice"));
    var count = input.value;

    console.log(count);

    var price = unitPrice * count;
    var formattedPrice = 'Rp.' + price.toFixed(2);

    var label = input.parentNode.nextElementSibling;
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
    document.getElementById('totalPriceDisplay').innerText = '\u20ac ' +  total.toFixed(2);
        }
}


function initTotals() {
    var inputs = document.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
           changeTotalFromCount(inputs[i]);
    }
}

window.onload = initTotals;
