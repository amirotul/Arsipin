
/*
 Template Name: Dashor - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: Morris init js
 */

!function($) {
    "use strict";

    var MorrisCharts = function() {};

    //creates line chart
    MorrisCharts.prototype.createLineChart = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Line({
          element: element,
          data: data,
          xkey: xkey,
          ykeys: ykeys,
          labels: labels,
          hideHover: 'auto',
          resize: true, //defaulted to true
          lineColors: lineColors,
          gridLineColor:'rgba(135, 135, 135, 0.1)',
          gridTextColor: '#999'
        });
    },

    //creates area chart
    MorrisCharts.prototype.createAreaChart = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 3,
            lineWidth: 2,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            resize: true,
            hideHover: 'auto',
            lineColors: lineColors,
            gridLineColor:'rgba(135, 135, 135, 0.1)',
            fillOpacity: 0.6,
            gridTextColor: '#999'
        });
    },
    //creates Bar chart
    MorrisCharts.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            barSizeRatio: 0.4,
            resize: true,
            hideHover: 'auto',
            barColors: lineColors,
            gridLineColor:'rgba(135, 135, 135, 0.1)',
            barRadius: [3, 3, 0, 0],
            barOpacity: 1,
            highlightSpeed: 150,
            barRadius: [5, 5, 0, 0],
            gridTextColor: '#999'
        });
    },
    //creates Donut chart
    MorrisCharts.prototype.createDonutChart = function(element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            backgroundColor: '#transparent',
            labelColor: '#666',
            resize: true,
            colors: colors
        });
    },
    
    MorrisCharts.prototype.init = function() {

        //create line chart
        var $data  = [
            {y: '2015', a: 0, b: 0, c:0},
            {y: '2016', a: 150, b: 45, c:15},
            {y: '2017', a: 60, b: 150, c:195},
            {y: '2018', a: 180, b: 36, c:21},
            {y: '2019', a: 90, b: 60, c:360},
            {y: '2020', a: 75, b: 240, c:120},
            {y: '2021', a: 30, b: 30, c:30}
          ];
        this.createLineChart('morris-line-example', $data, 'y', ['a', 'b'], ['Surat Masuk', 'Surat Keluar'], ['#365d6e', '#ddd']);

        //creating area chart
        var $areaData = [
            { y: '2020', a: 0, b: 0},
            { y: '2021', a: 50,  b: 30 },
            { y: '2022', a: 50,  b: 30 },
            { y: '2023', a: 120,  b: 100},
            { y: '2024', a: 60,  b: 40 },
            { y: '2025', a: 140,  b: 120},
            { y: '2026', a: 180, b: 200 }
        ];
        this.createAreaChart('morris-area-example', 0, 0, $areaData, 'y', ['a', 'b'], ['Surat Masuk', 'Surat Keluar'], ['#ec536c', '#59ceb5']);

        //creating bar chart
        var $barData = [
             { y: '2020', a: 0, b: 0},
            { y: '2021', a: 50,  b: 30 },
            { y: '2022', a: 50,  b: 30 },
            { y: '2023', a: 120,  b: 100},
            { y: '2024', a: 60,  b: 40 },
            { y: '2025', a: 140,  b: 120},
            { y: '2026', a: 180, b: 200 }
        ];
        this.createBarChart('morris-bar-example', $barData, 'y', ['a', 'b'], ['Surat Masuk', 'Surat Keluar'], ['#365d6e', '#59ceb5']);

        //creating donut chart
        var $donutData = [
            {label: "Download Sales", value: 12},
            {label: "In-Store Sales", value: 30},
            {label: "Mail-Order Sales", value: 20}
        ];
        this.createDonutChart('morris-donut-example', $donutData, ['rgba(211, 218, 232,0.4)','rgba(89, 206, 181, 1)', 'rgba(54, 93, 110, 1)']);
    },
    //init
    $.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.MorrisCharts.init();
}(window.jQuery);