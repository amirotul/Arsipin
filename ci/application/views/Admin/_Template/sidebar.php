        <?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
        <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
                        <div>

                        <a href="#" class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" height="14" alt="logo"></a>
                </div>
                    </div>
                </div>
               

                <div class="sidebar-inner slimscrollleft" id="sidebar-main">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Overview</li>

                        <li class="has_sub">
                           </li>
                            </a>
                        </li>

                        <li>
                                <a href="<?php echo base_url('Admin/dashboard')?>" class="waves-effect waves-light"><i
                                    class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
                            </li>


                        <li class="has_sub">
                            <a href="#" class="waves-effect waves-light"><i
                                    class="mdi mdi-file-document-box"></i><span> Data Arsip </span><span
                                    class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url('Admin/jenis_arsip')?>">Jenis Arsip</a></li>
                                <li><a href="<?php echo base_url('Admin/data_arsip')?>">Data Arsip</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="<?php echo base_url();?>javascript:void(0);" class="waves-effect"><i
                                    class="mdi mdi-file-document"></i><span> Data Dokumen </span> <span
                                    class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url('Admin/surat_masuk')?>">Surat Masuk</a></li>
                                <li><a href="<?php echo base_url('Admin/surat_keluar')?>">Surat Keluar</a></li>
                                <li><a href="<?php echo base_url('Admin/disposisi')?>">Disposisi</a></li>
                            </ul>
                        </li>

                            <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect waves-light"><i
                                    class="mdi mdi-folder-account"></i><span> Data Divisi </span><span
                                    class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url('Admin/jenis_divisi')?>">Jenis Divisi</a></li>
                                <li><a href="<?php echo base_url('Admin/data_divisi')?>">Data Divisi</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect waves-light"><i
                                    class="mdi mdi-folder-account"></i><span> Data Pengguna </span><span
                                    class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url('Admin/data_pengguna')?>">Pengguna</a></li>
                                <li><a href="<?php echo base_url('Admin/master_user')?>">Master User</a></li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->
            <!-- jQuery  -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/detect.js"></script>
        <script src="<?php echo base_url();?>assets/js/fastclick.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url();?>assets/js/waves.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?php echo base_url();?>assets/plugins/metro/MetroJs.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url();?>assets/pages/dashboard.js"></script>
        <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/app.js"></script>

    </body>