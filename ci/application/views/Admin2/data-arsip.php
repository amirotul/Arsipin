
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
                            <?php
                            foreach ($role as $item) { //
                            ?>
                                                
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-95 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutt
                                            ers align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        <a href="<?php echo base_url('Data_Arsip/data_per_arsip/'. $item->id_jenis_arsip);?>" class="text-primary"><?= $item->jenis_arsip ?></a></div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800 text-center"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    
                                   
                                                        
                                                        
                                                        <div class="container align-items-center">
                                                            <!--<form action="<?php echo base_url('Data_Arsip/filter');?>" method="get">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <label for="inputMulaiTanggal" class="font-weight-bold">Mulai
                                                                        Tanggal :</label>
                                                                        <input type="date" id="inputMulaiTanggal" name="mulai_tanggal"
                                                                        class="form-control" required>
                                                                    </div>
                                                                    &nbsp&nbsp&nbsp&nbsp
                                                                    <div class="form-group">
                                                                        <label for="inputSampaiTanggal" class="font-weight-bold">Sampai
                                                                        Tanggal :</label>
                                                                        <input type="date" id="inputSampaiTanggal" name="sampai_tanggal"
                                                                        class="form-control" required>
                                                                    </div>
                                                                    <div class="col-sm-1 form-group">
                                                                        <label for="inputSampaiTanggal" class="font-weight-bold">
                                                                            <font color="white">Disetujui</font>
                                                                        </label>
                                                                        <div class="btn-group">
                                                                            <button type="submit"
                                                                            class="btn btn-primary bt-sm">Cari</button>
                                                                            <a href="<?php echo base_url('Data_Arsip')?>"  class="btn btn-outline-primary ml-2">Reset</a>
                                                                        </div>
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
                                            </div>-->

                                            <!--<div class="row">
                                                <div class="col-sm-12">
                                                    <div class="page-title-box">
                                                        
                                                     
                                                        <table id="datatable" class="table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>Jenis arsip</th>
                                                                    <th>Tanggal Upload</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                        $no = 1; //no default 1
                                                        foreach ($user as $baris) { //
                                                            ?>
                                                            <tr>
                                                                
                                                                <td><?php echo $no++; ?></td>
                                                                <td><?php echo $baris->nama_arsip; ?></td>
                                                                <td><?php echo $baris->jenis_arsip; ?></td>
                                                                <td><?php echo $baris->tgl_upload; ?></td>
                                                                
                                                            </tr>
                                                            <?php
                                                        }?>
                                                    </tbody>
                                                </table>-->

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="page-title-box">
                                                            <div class="card-header border-0">
                                                                <div class="row align-items-center">

                                                <div class="col">
                                                    <h5 class="mb-0">Data Arsip Terbaru</h5>
                                                </div>

                                                <div class="col text-right">
                                                     <a href="<?php echo base_url('Data_Arsip/lihat_semua_arsip')?>">
                                                        <button type="button" class="btn btn-info btn-sm float-right">Lihat Semua</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                                <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Jenis arsip</th>
                                                            <th>Tanggal Upload</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                            $no = 1; //no default 1
                                            foreach ($terbaru as $baris) { //
                                                ?>
                                                <tr>
                                                    
                                                    <td><?php echo $no++; ?></td>
                                                    <!-- nomor user otomatis bertambah pada saatn menambah data -->
                                                    <td><?php echo $baris->nama_arsip; ?></td>
                                                    <td><?php echo $baris->id_jenis; ?></td>
                                                    <td><?php echo $baris->tgl_upload; ?></td>
                                                    
                                                </tr>
                                                <?php
                                            }?>
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

