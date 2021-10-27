<form class="user" action="<?php echo base_url('Disposisi/disposisi');?>" method="POST">
    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Disposisi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
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
                                <th>No. Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Asal Surat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>SR-121</td>
                                <td>1 Oktober 2021</td>
                                <td>Politeknik Negeri Jember</td>
                                <td><a href=update-disposisi.html>
                                    <button type="button" class="btn-primary">Edit</button></a>
                                    &nbsp
                                    <a href=update-disposisi.html>
                                        <button type="button" class="btn-danger">Hapus</button></a>
                                        &nbsp
                                        <a href=detail-disposisi.html>
                                            <button type="button" class="btn-warning">Detail</button></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>SR-122</td>
                                        <td>4 Oktober 2021</td>
                                        <td>Tokopedia</td>
                                        <td><a href=update-disposisi.html>
                                            <button type="button" class="btn-primary">Edit</button></a>
                                            &nbsp
                                            <a href=disposisi.html>
                                                <button type="button" class="btn-danger">Hapus</button></a>
                                                &nbsp
                                                <a href=detail-disposisi.html>
                                                    <button type="button" class="btn-warning">Detail</button></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>SR-123</td>
                                                <td>4 Oktober 2021</td>
                                                <td>Lazada</td>
                                                <td><a href=update-disposisi.html>
                                                    <button type="button" class="btn-primary">Edit</button></a>
                                                    &nbsp
                                                    <a href=disposisi.html>
                                                        <button type="button" class="btn-danger">Hapus</button></a>&nbsp
                                                        <a href=detail-disposisi.html>
                                                            <button type="button" class="btn-warning">Detail</button></a>

                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>SR-124</td>
                                                            <td>4 Oktober 2021</td>
                                                            <td>Shopee</td>
                                                            <td><a href=update-disposisi.html>
                                                                <button type="button" class="btn-primary">Edit</button></a>
                                                                &nbsp
                                                                <a href=disposisi.html>
                                                                    <button type="button" class="btn-danger">Hapus</button></a>
                                                                    &nbsp
                                                                    <a href=detail-disposisi.html>
                                                                        <button type="button" class="btn-warning">Detail</button></a>
                                                                    </td>
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

        <script src="assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
        <script src="assets/plugins/tiny-editable/numeric-input-example.js"></script>
        <script src="assets/plugins/tabledit/jquery.tabledit.js"></script>
        <script src="assets/pages/edit-table.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
<!--<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
    $('.checked-all').on('change', function(e){
    e.preventDefault()
    $('input[name=pilih]').prop('checked', this.checked)
})-->
</script>
</html>