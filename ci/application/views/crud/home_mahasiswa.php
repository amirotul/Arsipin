<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Arsipin - Surat Masuk</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="themesdesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>

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
                                            <i class="mdi mdi-cube-outline"></i>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="text-uppercase mb-3">Surat Masuk</h6>
                                            <h4 class="mb-0">10<small class="ml-2"></small></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-xl-3">
                                    <div class="card mini-stat">
                                        <div class="mini-stat-icon text-right">
                                            <i class="mdi mdi-buffer"></i>
                                        </div>
                                        <div class="p-4">
                                            <h6 class="text-uppercase mb-3">Surat Keluar</h6>
                                            <h4 class="mb-0">5<small class="ml-2"></small></h4>
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
                                            <h4 class="mb-0">9<small class="ml-2"></small></h4>
                                        </div>
                                    </div>
                                </div>
                                

                                </div>                                            
                            </div><!-- end row -->

    </body>
    </html>