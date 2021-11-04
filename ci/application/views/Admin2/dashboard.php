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
                            <h6 class="text-uppercase mb-3">Surat Masuk</h6>
                            <h4 class="mb-0"><?php echo $total_data_sm; ?><small class="ml-2"></small></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-3">
                    <div class="card mini-stat">
                        <div class="mini-stat-icon text-right">
                            <i class="mdi mdi-email-open"></i>
                        </div>
                        <div class="p-4">
                            <h6 class="text-uppercase mb-3">Surat Keluar</h6>
                            <h4 class="mb-0"><?php echo $total_data_sk; ?><small class="ml-2"></small></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-3">
                    <div class="card mini-stat">
                        <div class="mini-stat-icon text-right">
                            <i class="mdi mdi-tag-text-outline"></i>
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
                            <i class="mdi mdi-file-document-box"></i>
                        </div>
                        <div class="p-4">
                            <h6 class="text-uppercase mb-3">Data Arsip</h6>
                            <h4 class="mb-0"><?php echo $total_data_arsip; ?><small class="ml-2"></small></h4>
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
                            <h6 class="text-uppercase mb-3">Data Divisi</h6>
                            <h4 class="mb-0"><?php echo $total_data_divisi; ?><small class="ml-2"></small></h4>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12 col-xl-3">
                    <div class="card mini-stat">
                        <div class="mini-stat-icon text-right">
                            <i class="mdi mdi-folder-account"></i>
                        </div>
                        <div class="p-4">
                            <h6 class="text-uppercase mb-3">Data Pengguna</h6>
                            <h4 class="mb-0"><?php echo $total_data_pengguna; ?><small class="ml-2"></small></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-3">
                    <div class="card mini-stat">
                        <div class="mini-stat-icon text-right">
                            <i class="mdi mdi-folder-account"></i>
                        </div>
                        <div class="p-4">
                            <h6 class="text-uppercase mb-3">Surat Masuk Bulan Ini</h6>
                            <h4 class="mb-0"><small class="ml-2"></small></h4>
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
                            <h4 class="mb-0"><small class="ml-2"></small></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-8">
                    <div class="card">
                        <div class="card-body">   
                            <h4 class="mt-0 mb-3 header-title">Dokumen</h4>        
                            <div id="morris-area-chart" style="height: 340px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 mb-3 header-title">Surat Masuk</h4> 
                            <div id="morris-donut-example" style="height: 340px;"></div>
                        </div>
                    </div>
                </div>                  
                            </div><!-- end row -->