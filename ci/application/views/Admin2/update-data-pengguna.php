<form class="user" method="post" action="<?php echo base_url('Data_Pengguna/update'); ?>">
    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Data Pengguna</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <input type="hidden" name="id" value="<?= $user['id_pengguna'] ?>">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="<?= $user['nama_pengguna'] ?>" id="example-text-input" name="nama_pengguna">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="<?= $user['email_pengguna'] ?>" id="example-date-input" name="email_pengguna">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="id_role">
                                        <option value="" hidden disabled selected>Pilih...</option>
                                        <?php foreach ($role as $item) : ?>
                                            <option value="<?= $item->id_role ?>"><?= $item->nama_role ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="<?= $user['username'] ?>" id="example-text-input" name="username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="password" value="<?= $user['password'] ?>" id="example-text-input" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2">
                                <div class="input-group mt-2">
                                                                <div class="custom">
                                                                <div class="input-group-append">

                                                                <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Simpan"></a>
                                                                </div>
                                                                </div> &nbsp &nbsp
                                                                <div class="input-group-append">
                                                                    <a class="small" href="<?php echo base_url('Data_Pengguna/index')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                                                    </a>
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
</form>

<!-- END wrapper -->