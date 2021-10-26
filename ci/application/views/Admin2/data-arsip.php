<form class="user" action="<?php echo base_url('Data_Arsip/data-arsip');?>" method="POST">

                                <div class="page-content-wrapper">

                    <div class="container-fluid">
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Data Arsip</h4>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                         <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Cards</h1>
                            </div> -->
        
                            <div class="row">
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-95 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        <a href=data-arsip-akte-perusahaan.html class="text-primary">Akte Perusahaan</a></div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">10</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-95 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        <a href=data-arsip-mou.html class="text-primary">MOU</a></div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">6</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-95 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        <a href=data-arsip-kontrak-kerja.html class="text-primary">Kontrak Kerja</a></div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">9</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-95 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        <a href=data-arsip-npwp.html class="text-primary">NPWP</a></div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">4</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-95 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        <a href=data-arsip-tdp.html class="text-primary">TDP</a></div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">3</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-95 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        <a href=data-arsip-cv.html class="text-primary">CV</a></div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">5</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                                    <form action="" method=""></form>
                                        <div class="container align-items-center">
                                            <form action="">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="inputMulaiTanggal" class="font-weight-bold">Mulai
                                                            Tanggal :</label>
                                                        <input type="date" id="inputMulaiTanggal" name="mulai_tanggal"
                                                            class="form-control" name="tgl_pemasukan" required>
                                                    </div>
                                                    &nbsp&nbsp&nbsp&nbsp
                                                    <div class="form-group">
                                                        <label for="inputSampaiTanggal" class="font-weight-bold">Sampai
                                                            Tanggal :</label>
                                                        <input type="date" id="inputSampaiTanggal" name="sampai_tanggal"
                                                            class="form-control" name="tgl_pemasukan" required>
                                                    </div>
                                                    <div class="col-sm-1 form-group">
                                                        <label for="inputSampaiTanggal" class="font-weight-bold">
                                                            <font color="white">Disetujui</font>
                                                        </label>
                                                        <button type="submit"
                                                            class="btn btn-primary bt-sm">Cari</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div id="datatable_wrapper"
                                                                class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                <div
                                                                    class="row align-items-center justify-content-between">
                                                                    <div class="col-auto py-2">
                                                                        <div id="datatable_length"
                                                                            class="dataTables_length d-flex align-items-center">
                                                                            <label class="mr-3 mb-0">
                                                                                Show
                                                                            </label>
                                                                            <select
                                                                                class="custom-select custom-select-sm form-control form-control-sm"
                                                                                name="datatable_length"
                                                                                aria-controls="datatable">
                                                                                <option value="10">10</option>
                                                                                <option value="25">25</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100</option>
                                                                            </select>
                                                                            <label class="mr-3 mb-0">
                                                                                entries
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div id="datatable_filter"
                                                                            class="dataTables_filter" align="right">
                                                                            <label class="m-0">
                                                                                <input type="search"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Search"
                                                                                    aria-controls="datatable">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                        </div>
                                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama</th>
                                                                <th>Jenis arsip</th>
                                                                <th>Tanggal Upload</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Kontrak Kerja Pegawai Divisi Marketing</td>
                                                                <td>Kontrak Kerja</td>
                                                                <td>14 Oktober 2021</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Akte Perusahaan CV Hummasoft</td>
                                                                <td>Akte Perusahaan</td>
                                                                <td>14 Oktober 2021</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>NPWP Perusahaan CV Hummasoft</td>
                                                                <td>NPWP</td>
                                                                <td>14 Oktober 2021</td>
                                                            </tr>
                                                            
                                                              
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="page-title-box">
                                                                <h4 class="page-title">Data Arsip Terbaru</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama</th>
                                                                <th>Jenis arsip</th>
                                                                <th>Tanggal Upload</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Kontrak Kerja Pegawai Divisi Marketing</td>
                                                                <td>Kontrak Kerja</td>
                                                                <td>20 Oktober 2021</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Akte Perusahaan CV Hummasoft</td>
                                                                <td>Akte Perusahaan</td>
                                                                <td>20 Oktober 2021</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>NPWP Perusahaan CV Hummasoft</td>
                                                                <td>NPWP</td>
                                                                <td>20 Oktober 2021</td>
                                                            </tr>
                                                            
                                                              
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                                    
                                                </div>
        
                                            </div>
                                        </div>
                                        </div> <!-- end col -->
                        </div> <!-- end row -->


                                        </div><!-- container -->

                                    </div> <!-- Page content Wrapper -->

                                </div><!-- container -->

                            </div> <!-- Page content Wrapper -->

                        </div> <!-- content -->

                        <footer class="footer">
                            © 2018 - 2020 Dashor by Themesdesign.
                        </footer>

                    </div>
                    <!-- End Right content here -->

                </div>
                <!-- END wrapper -->