
 <?php
 $getUser = $this->session->userdata('session_user');
 $getGrup = $this->session->userdata('session_grup');
 ?>
 <form class="user" action="<?php echo base_url('Dashboard/dashboard'); ?>" method="POST">

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
            <i class="mdi mdi-division-box"></i>
          </div>
          <div class="p-4">
            <h6 class="text-uppercase mb-3">Surat Masuk Bulan Ini</h6>
            <h4 class="mb-0"><?php echo $total_data_sm_perbulan; ?><small class="ml-2"></small></h4>
          </div>
        </div>
      </div>

      <?php
      if($getGrup==1|2)
      {
        echo'<div class="col-md-12 col-xl-3">
        <div class="card mini-stat">
        <div class="mini-stat-icon text-right">
        <i class="mdi mdi-folder-account"></i>
        </div>
        <div class="p-4">
        <h6 class="text-uppercase mb-3">Surat Keluar Bulan Ini</h6>
        <h4 class="mb-0">';}?> <?php echo $total_data_sk_perbulan; ?> 
        <?php {echo '<small class="ml-2"></small></h4>
        </div>
        </div>
        </div>';}?>

        <div class="col-md-12 col-xl-3">
            <div class="card mini-stat">
              <div class="mini-stat-icon text-right">
                <i class="mdi mdi-email-open"></i>
              </div>
              <div class="p-4">
                <h6 class="text-uppercase mb-3">Data Arsip</h6>
                <h4 class="mb-0"><?php echo $total_data_arsip;
              ?><small class="ml-2"></small></h4>
                </div>
                </div>
                
                </div>

            <?php
              if($getGrup==1)
                  {
                    echo '<div class="col-md-12 col-xl-3">
                    <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                    <i class="mdi mdi-tag-text-outline"></i>
                    </div>
                    <div class="p-4">
                    <h6 class="text-uppercase mb-3">Disposisi</h6>
                    <h4 class="mb-0">';}?> <?php echo $total_data_dis; ?></div>                    
                    <?php {echo '<small class="ml-2"></small></h4>
                    </div>
                    </div>
                    </div>';}?>
          </div>


                <div class="row">
                  <?php
                  if($getGrup==1)
                  {
                    echo '<div class="col-md-12 col-xl-3">
                    <div class="card mini-stat">
                    <div class="mini-stat-icon text-right">
                    <i class="mdi mdi-tag-text-outline"></i>
                    </div>
                    <div class="p-4">
                    <h6 class="text-uppercase mb-3">Data Divisi</h6>
                    <h4 class="mb-0">';}?> <?php echo $total_data_divisi; ?>
                    <?php {echo '<small class="ml-2"></small></h4>
                    </div>
                    </div>
                    </div>';}?>

                    <?php
                    if($getGrup==1)
                    {
                      echo '<div class="col-md-12 col-xl-3">
                      <div class="card mini-stat">
                      <div class="mini-stat-icon text-right">
                      <i class="mdi mdi-file-document-box"></i>
                      </div>
                      <div class="p-4">
                      <h6 class="text-uppercase mb-3">Data Pengguna</h6>
                      <h4 class="mb-0">';}?> <?php echo $total_data_pengguna; ?>
                      <?php {echo '<small class="ml-2"></small></h4>
                      </div>
                      </div>
                      </div>
                      </div>';}?>


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
                  <script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script>
                  <script src="<?php echo base_url(); ?>assets/highcharts/exporting.js"></script>
                  <script src="<?php echo base_url(); ?>assets/highcharts/export-data.js"></script>
                  <script src="<?php echo base_url(); ?>assets/highcharts/accessibility.js"></script>
                  <script src="<?php echo base_url(); ?>assets/highcharts/js.js"></script>
                  <script src="<?php echo base_url(); ?>assets/highcharts/data.js"></script>
                  <script src="<?php echo base_url(); ?>assets/highcharts/drilldown.js"></script>


                  <script type="text/javascript">

                    Highcharts.chart('data_dokumen', {
                      chart: {
                        type: 'areaspline'
                      },
                      title: {
                        text: 'Jumlah Dokumen Per-tahun'
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
        data: [
        <?php echo json_encode($data_sm_pertahun_21); ?>, 
        <?php echo json_encode($data_sm_pertahun_22); ?>,
        <?php echo json_encode($data_sm_pertahun_23); ?>,
        <?php echo json_encode($data_sm_pertahun_24); ?>,
        <?php echo json_encode($data_sm_pertahun_25); ?>,
        ]
      }, {
        name: 'Surat Keluar',
        data: [
        <?php echo json_encode($data_sk_pertahun_21); ?>, 
        <?php echo json_encode($data_sk_pertahun_22); ?>,
        <?php echo json_encode($data_sk_pertahun_23); ?>,
        <?php echo json_encode($data_sk_pertahun_24); ?>,
        <?php echo json_encode($data_sk_pertahun_25); ?>
        ]
      }, {
        name: 'Disposisi',

        data: [ 
        <?php echo json_encode($data_dis_pertahun_21); ?>,
        <?php echo json_encode($data_dis_pertahun_22); ?>,
        <?php echo json_encode($data_dis_pertahun_23); ?>,
        <?php echo json_encode($data_dis_pertahun_24); ?>,
        <?php echo json_encode($data_dis_pertahun_25); ?> 
        ]

      }]
    });

  // pie chart
  // Create the chart
  Highcharts.chart('container', {
    chart: {
     plotBackgroundColor: null,
     plotBorderWidth: null,
     plotShadow: false,
     type: 'pie'
   },
   title: {
    text: 'Disposisi Surat Masuk'
  },
  tooltip: {
    pointFormat: '<b>{point.percentage:.1f}%</b>'
  },
  credits: {
    enabled: false
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Brands',
    colorByPoint: true,
    data: [{
      name: 'Didisposisi',
      y:  <?php echo json_encode($total_data_dis); ?>,
      sliced: true,
      selected: true
    }, {
      name: 'Belum Didisposisi',
      y:  <?php echo json_encode($total_belum_didisposisi); ?>
    }]
  }]
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

  input[type="number"] {
    min-width: 50px;
  }
</style>