var tooltipSpan = document.getElementById('tooltip-span');

window.onmousemove = function (e) {
    var x = e.clientX,
        y = e.clientY;
    tooltipSpan.style.top = (y) + 'px';
    tooltipSpan.style.left = (x) + 'px';
};
