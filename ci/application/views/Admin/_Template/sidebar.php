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
                                <a href="<?php echo base_url('Mahasiswa/dashboard')?>" class="waves-effect waves-light"><i
                                    class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
                            </li>


                        <li class="has_sub">
                            <a href="#" class="waves-effect waves-light"><i
                                    class="mdi mdi-file-document-box"></i><span> Data Arsip </span><span
                                    class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url('Mahasiswa/jenis-arsip')?>Jenis Arsip</a></li>
                                <li><a href="data-dokumen.html">Data Arsip</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i
                                    class="mdi mdi-file-document"></i><span> Data Dokumen</span> <span
                                    class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="surat-masuk.html">Surat Masuk</a></li>
                                <li><a href="surat-keluar.html">Surat Keluar</a></li>
                                <li><a href="disposisi.html">Disposisi</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                           </li>
                            </a>
                        </li>

                        <li>
                                <a href="divisi-divisi.html" class="waves-effect waves-light"><i class="mdi mdi-division-box"></i><span> Data Divisi </span></a>
                            </li>

                        <li class="has_sub">
                           </li>
                            </a>
                        </li>

                        <li>
                                <a href="pengguna-pengguna.html" class="waves-effect waves-light"><i class="mdi mdi-folder-account"></i><span> Data Pengguna </span></a>
                            </li>


                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->