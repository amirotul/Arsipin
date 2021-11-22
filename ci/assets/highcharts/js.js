Highcharts.chart('data_dokumen', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Jumlah dokumen pertahun'
    },
    xAxis: {
        categories: [
        '2021',
        '2022',
        '2023',
        '2024',
        '2025'
        ],
        plotBands: [{ // visualize the weekend
            from: 4.5,
            to: 6.5,
            color: 'rgba(68, 170, 213, .2)'
        }]
    },
    yAxis: {
        title: {
            text: 'Jumlah Dokumen'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' dokumen'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5
        }
    },
    series: [{
        name: 'Surat Masuk',
        
        data: [<?php echo $data_sm_pertahun; ?>]
    }, {
        name: 'Surat Keluar',
        data: [<?php echo $data_sk_pertahun; ?>]
    }, {
        name: 'Disposisi',
        
        data: [<?php echo $data_dis_pertahun; ?>]
    }]
});

 // pie chart
    // Create the chart
    Highcharts.chart('container', {
      chart: {
        type: 'pie'
    },
    title: {
        text: 'Browser market shares. January, 2018'
    },

    accessibility: {
        announceNewData: {
          enabled: true
      },
      point: {
          valueSuffix: '%'
      }
  },

  plotOptions: {
    series: {
      dataLabels: {
        enabled: false,
        format: '{point.name}: {point.y:.1f}%'
    }
}
},

tooltip: {
    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
},

series: [
{
  name: "Browsers",
  colorByPoint: true,
  data: [
  {
      name: "Chrome",
      y: 62.74,
      drilldown: "Chrome"
  },
  {
      name: "Firefox",
      y: 10.57,
      drilldown: "Firefox"
  },
  
  ]
}
],
drilldown: {
    series: [
    {
        name: "Chrome",
        id: "Chrome",
        data: [
        [
        "v65.0",
        0.1
        ],
        [
        "v64.0",
        1.3
        ],
        [
        "v63.0",
        53.02
        ],
        [
        "v62.0",
        1.4
        ],
        [
        "v61.0",
        0.88
        ],
        [
        "v60.0",
        0.56
        ],
        [
        "v59.0",
        0.45
        ],
        [
        "v58.0",
        0.49
        ],
        [
        "v57.0",
        0.32
        ],
        [
        "v56.0",
        0.29
        ],
        [
        "v55.0",
        0.79
        ],
        [
        "v54.0",
        0.18
        ],
        [
        "v51.0",
        0.13
        ],
        [
        "v49.0",
        2.16
        ],
        [
        "v48.0",
        0.13
        ],
        [
        "v47.0",
        0.11
        ],
        [
        "v43.0",
        0.17
        ],
        [
        "v29.0",
        0.26
        ]
        ]
    },
    {
        name: "Firefox",
        id: "Firefox",
        data: [
        [
        "v58.0",
        1.02
        ],
        [
        "v57.0",
        7.36
        ],
        [
        "v56.0",
        0.35
        ],
        [
        "v55.0",
        0.11
        ],
        [
        "v54.0",
        0.1
        ],
        [
        "v52.0",
        0.95
        ],
        [
        "v51.0",
        0.15
        ],
        [
        "v50.0",
        0.1
        ],
        [
        "v48.0",
        0.31
        ],
        [
        "v47.0",
        0.12
        ]
        ]
    }
    ]
}
});