// Hasil Penjualan
$(function() {
    "use strict";
    new Chartist.Bar('.ct-chart-product', {
        labels: ['Sukulen Panda', 'Sukulen Roseum', 'Terarium', 'Terarium 2', 'Sukulen Roseum 2'],
        series: [
            [8, 8, 16, 24, 1],
        ]
    }, {
        stackBars: true,
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value) + '';
            }
        }
    }).on('draw', function(data) {
        if (data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 40px'
            });
        }
    });
});
// End Hasil Penjualan

// Hasil Penjualan Bulan Lalu
$(function() {
    "use strict";
    new Chartist.Bar('.bulanlalu', {
        labels: ['Sukulen Panda', 'Sukulen Roseum', 'Terarium', 'Terarium 2', 'Sukulen Roseum 2'],
        series: [
            [8, 8, 16, 24, 1],
        ]
    }, {
        stackBars: true,
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value) + '';
            }
        }
    }).on('draw', function(data) {
        if (data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 40px'
            });
        }
    });
});
// End Hasil Penjualan Bulan Lalu

// Hasil Penjualan Bulan Sekarang
$(function() {
    "use strict";
    new Chartist.Bar('.bulansekarang', {
        labels: ['Sukulen Panda', 'Sukulen Roseum', 'Terarium', 'Terarium 2', 'Sukulen Roseum 2'],
        series: [
            [
              {meta: 'description', value: 1 },
              {meta: 'description', value: 5},
              {meta: 'description', value: 1 },
              {meta: 'description', value: 5},
              {meta: 'description', value: 3}
            ],
        ]
    }, {
        stackBars: true,
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value) + '';
            }
        }
    }).on('draw', function(data) {
        if (data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 40px'
            });
        }
    });
});
// End Hasil Penjualan Bulan Sekarang

// tooltip
var chart = c3.generate({
  bindto: "#c3chart_category",
    data: {
        columns: [
          ['Sales', 100],
          ['Dekorasi', 80],
          ['Workshop', 50],
          ['Rental', 40],
          ['Souvenir', 20],
        ],
        type : 'donut',
        onclick: function (d, i) { console.log("onclick", d, i); },
        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
    },
    donut: {
    }
});
// end tooltip
