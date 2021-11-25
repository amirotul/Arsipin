<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
// $this->db->select('perihal_sm');
// $data_dokumenChart =$this->db->get("surat_masuk")->result();
// print_r($data_dokumenChart);die();
?>
<form class="user" action="<?php echo base_url('Dashboard/dashboard');?>" method="POST">

    <div class="page-content-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right">


                        </div>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-email"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Disposisi</h6>                                  
                        <h4 class="mb-0"><?php echo $total_data_dis; ?><small class="ml-2"></small></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-email-open"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Data Arsip</h6>
                        <h4 class="mb-0"><?php echo $total_data_arsip; ?><small class="ml-2"></small></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-tag-text-outline"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Data Divisi</h6>
                        <h4 class="mb-0"><?php echo $total_data_divisi; ?><small class="ml-2"></small></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-file-document-box"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Data Pengguna</h6>
                        <h4 class="mb-0"><?php echo $total_data_pengguna; ?><small class="ml-2"></small></h4>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-division-box"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Surat Masuk Bulan Ini</h6>
                        <h4 class="mb-0"><?php echo $total_data_sm; ?><small class="ml-2"></small></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-3">
                <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                        <i class="mdi mdi-folder-account"></i>
                    </div>
                    <div class="p-4">
                        <h6 class="text-uppercase mb-3">Surat Keluar Bulan Ini</h6>
                        <h4 class="mb-0"><?php echo $total_data_perbulan; ?><small class="ml-2"></small></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 mb-3 header-title">Dokumen</h4>
                        <div id="data_dokumen" style="height: 340px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 mb-3 header-title">Surat Masuk</h4> 
                        <div id="container" style="height: 340px;"></div>
                    </div>
                </div>
            </div>                  
        </div>
    </div>
</form>
<script src="<?php echo base_url();?>assets/highcharts/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/exporting.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/export-data.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/accessibility.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/js.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/data.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/drilldown.js"></script>


<script type="text/javascript">
    Highcharts.chart('data_dokumen', {
        chart: {
            type: 'areaspline'
        },
        title: {
            text: 'Jumlah dokumen pertahun'
        },
        

        xAxis: {
            categories: [
            // '2021',
            // '2022',
            // '2023',
            // '2024',
            // '2025'
            <?php echo $data_tahun; ?>,
            <?php echo $data_tahun; ?>,
            <?php echo $data_tahun; ?>
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
        
        data: [<?php echo json_encode ($data_sm_pertahun); ?>]
    }, {
        name: 'Surat Keluar',
        data: [<?php echo json_encode ($data_sk_pertahun); ?>]
    }, {
        name: 'Disposisi',
        
        data: [<?php echo json_encode($data_dis_pertahun); ?>]
        
    }] 
});

     // pie chart
    // Create the chart
    Highcharts.chart('container', {
      chart: {
        type: 'pie'
    },
    title: {
        text: 'Disposisi'
    },

    accessibility: {
        announceNewData: {
          enabled: true
      },
      point: {
          valueSuffix: '%'
      }
  },

  credits: {
    enabled: false
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
      
      y: 62.74
  },
  {
      y: 10.57
  }
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
      },
      {
        name: "Internet Explorer",
        id: "Internet Explorer",
        data: [
          [
            "v11.0",
            6.2
          ],
          [
            "v10.0",
            0.29
          ],
          [
            "v9.0",
            0.27
          ],
          [
            "v8.0",
            0.47
          ]
        ]
      },
      {
        name: "Safari",
        id: "Safari",
        data: [
          [
            "v11.0",
            3.39
          ],
          [
            "v10.1",
            0.96
          ],
          [
            "v10.0",
            0.36
          ],
          [
            "v9.1",
            0.54
          ],
          [
            "v9.0",
            0.13
          ],
          [
            "v5.1",
            0.2
          ]
        ]
      },
      {
        name: "Edge",
        id: "Edge",
        data: [
          [
            "v16",
            2.6
          ],
          [
            "v15",
            0.92
          ],
          [
            "v14",
            0.4
          ],
          [
            "v13",
            0.1
          ]
        ]
      },
      {
        name: "Opera",
        id: "Opera",
        data: [
          [
            "v50.0",
            0.96
          ],
          [
            "v49.0",
            0.82
          ],
          [
            "v12.1",
            0.14
          ]
        ]
      }
    ]
  }
});
</script>

<style type="text/css">
   #data_dokumen {
  height: 400px;
}

.highcharts-figure,
.highcharts-data-table table {
  min-width: 310px;
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}

  /*pie chart*/
  .highcharts-figure,
.highcharts-data-table table {
  min-width: 320px;
  max-width: 660px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
</style>