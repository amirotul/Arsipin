<form class="user" action="<?php echo base_url('Surat_Masuk/surat-masuk');?>" method="POST">
    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Surat Masuk</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                         
                            <p>
                                <a href=form-add-disposisi.html>
                                    <button type="button" class="btn btn-info btn-sm" id="tambah_disposisi">Tambah Disposisi</button>
                                </a>
                            </p>
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
                                <th></th>
                                <th>No</th>
                                <th>No. Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Asal Surat</th>
                                <th>Oleh Divisi</th>
                                <th>Oleh Pimpinan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" disabled="true" /></td>
                                <td>1</td>
                                <td>SR-121</td>
                                <td>1 Oktober 2021</td>
                                <td>Politeknik Negeri Jember</td>
                                <td><font color="green">Dilaksanakan</font></td>
                                <td><font color="green">Disetujui</font></td>
                                <td><a href=update-surat-masuk.html>
                                    <button type="button" class="btn-primary">Edit</button></a>
                                    &nbsp
                                    <a href=surat-masuk.html>
                                        <button type="button" class="btn-danger">Hapus</button></a>
                                        &nbsp
                                        <a href=detail-surat-masuk.html>
                                            <button type="button" class="btn-warning">Detail</button></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"/></td>
                                        <td>2</td>
                                        <td>SR-122</td>
                                        <td>4 Oktober 2021</td>
                                        <td>Tokopedia</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td><a href=update-surat-masuk.html>
                                            <button type="button" class="btn-primary">Edit</button></a>
                                            &nbsp
                                            <a href=surat-masuk.html>
                                                <button type="button" class="btn-danger">Hapus</button></a>
                                                &nbsp
                                                <a href=detail-surat-masuk.html>
                                                    <button type="button" class="btn-warning">Detail</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" disabled="true" /></td>
                                                <td>3</td>
                                                <td>SR-123</td>
                                                <td>4 Oktober 2021</td>
                                                <td>Lazada</td>
                                                <td><font color="green">Dilaksanakan</font></td>
                                                <td><font color="red">Diabaikan</font></td>
                                                <td><a href=update-surat-masuk.html>
                                                    <button type="button" class="btn-primary">Edit</button></a>
                                                    &nbsp
                                                    <a href=surat-masuk.html>
                                                        <button type="button" class="btn-danger">Hapus</button></a>&nbsp
                                                        <a href=detail-surat-masuk.html>
                                                            <button type="button" class="btn-warning">Detail</button></a>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox" disabled="true" /></td>
                                                            <td>4</td>
                                                            <td>SR-124</td>
                                                            <td>4 Oktober 2021</td>
                                                            <td>Shopee</td>
                                                            <td><font color="green">Dilaksanakan</font></td>
                                                            <td><font color="green">Disetujui</font></td>
                                                            <td><a href=update-surat-masuk.html>
                                                                <button type="button" class="btn-primary">Edit</button></a>
                                                                &nbsp
                                                                <a href=surat-masuk.html>
                                                                    <button type="button" class="btn-danger">Hapus</button></a>
                                                                    &nbsp
                                                                    <a href=detail-surat-masuk.html>
                                                                        <button type="button" class="btn-warning">Detail</button></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
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