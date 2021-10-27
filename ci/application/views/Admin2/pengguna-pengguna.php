<form class="user" action="<?php echo base_url('Data_Pengguna/pengguna-pengguna');?>" method="POST">
    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Data Pengguna</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <p>
                                <a href=form-add-data-pengguna.html>
                                    <button type="button" class="btn btn-info btn-sm">Tambah Data</button>
                                </a>
                            </p>
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
            </div>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pengguna</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hana Lestari</td>
                        <td>hana@gmail.com</td>
                        <td>Divisi Marketing</td>
                        <td>hanalestari1</td>
                        <td>hana123</td>
                        <td><a href=update-data-pengguna.html>
                            <button type="button" class="btn-primary">Edit</button></a>
                            &nbsp
                            <a href=pengguna-pengguna.html>
                                <button type="button" class="btn-danger">Hapus</button></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Hani L</td>
                                <td>hani@gmail.com</td>
                                <td>Divisi HRD</td>
                                <td>hani_l</td>
                                <td>hani123</td>
                                <td><a href=update-data-pengguna.html>
                                    <button type="button" class="btn-primary">Edit</button></a>
                                    &nbsp
                                    <a href=pengguna-pengguna.html>
                                        <button type="button" class="btn-danger">Hapus</button></a></td>
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