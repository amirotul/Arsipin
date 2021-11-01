<form class="user" action="<?php echo base_url('Data_Pengguna/input_pengguna'); ?>" method="post" enctype="multipart/form-data">
    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Tambah Data Pengguna</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" value="" id="example-text-input" name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" value="" id="example-date-input" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label">Jenis Divisi</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" id="id_role" name="id_role" required="">
                                                <option value="" hidden disabled selected>Pilih Jenis Divisi</option>
                                                <?php foreach ($role as $item) : ?>
                                                    <option value="<?= $item->id_role ?>"><?= $item->nama_role ?></option>
                                                <?php endforeach ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" value="" id="example-text-input" name="username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="password" value="" id="example-text-input" name="password">
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

                                                    <a class="small" href="<?php echo base_url('Data_Pengguna') ?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <figure class="img-fluid">
                                        <img src="" class="preview-foto" alt="" height="150" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'">
                                    </figure>
                                    <div class="mt-3">
                                        <input type="file" hidden class="custom-file-input btn-upload-foto" id="foto" name="foto" accept="image/jpeg, image/png">
                                        <label class="btn btn-block btn-primary" for="foto">Pilih foto</label>
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
    <script src="<?= base_url('assets/js/previewfoto.js') ?>"></script>

    <!-- END wrapper -->