<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Arsipin - Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link rel="stylesheet" href="assets/plugins/metro/MetroJs.min.css">
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>

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
                                            <h4 class="mb-0">4<small class="ml-2"></small></h4>
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
                                            <h4 class="mb-0">2<small class="ml-2"></small></h4>
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
                                            <h4 class="mb-0">3<small class="ml-2"></small></h4>
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
                                                <h4 class="mb-0">24<small class="ml-2"></small></h4>
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
                                            <h4 class="mb-0">2<small class="ml-2"></small></h4>
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
                                            <h4 class="mb-0">2<small class="ml-2"></small></h4>
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
                                            <h4 class="mb-0">2<small class="ml-2"></small></h4>
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
                                            <h4 class="mb-0">2<small class="ml-2"></small></h4>
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


                <footer class="footer">
                    © 2018 - 2020 Dashor by Themesdesign.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/plugins/metro/MetroJs.min.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/pages/dashboard.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>