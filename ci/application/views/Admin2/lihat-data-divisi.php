<form class="user" method="post" action="<?php echo base_url('Data_Divisi/detail_data_divisi'); ?>" enctype="multipart/form-data">
        <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Detail Data Divisi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-8">

                                                <a href="<?php echo base_url('Data_Divisi'); ?>">
                                                <i class="far fa-arrow-alt-circle-left fa-2x" ></i>
                                            <br>
                                            </a>
                                            <br></a>
                                    <input type="hidden" name="id" value="<?= $user['id_pengguna'] ?>">
                                    <input type="hidden" name="fotolama" value="<?= $user['foto'] ?>">

                                    <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Jenis Divisi</label>
                                                <div class="col-sm-5">
                                                    
                                                    <input class="form-control" type="text" value="<?= $user['jenis_divisi'] ?>" id="id_role" name="id_role" disabled>
                                                </div>
                                            </div>

                                    <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-5">
                                                    
                                                    <input class="form-control" type="text" value="<?= $user['nama_pengguna'] ?>" id="nama_pengguna" name="nama_pengguna" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" type="text" value="<?= $user['email_pengguna'] ?>" id="email_pengguna" name="email_pengguna" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" type="text" value="<?= $user['username'] ?>" id="username" name="username" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" type="text" value="<?= $user['password'] ?>" id="password" name="password" disabled>
                                                </div>
                                            </div>

                                </div>
                                <div class="col-auto">
                                    <figure class="img-fluid">
                                        <br>
                                        <br>
                                        <img src="<?php echo base_url('assets/upload/fotopengguna/') . $user['foto'] ?>" class="preview-foto" alt="" height="200" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'">
                                    </figure>
                                    
                                </div>

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
<script src="<?= base_url('assets/js/previewfoto.js') ?>"></script>

<!-- END wrapper -->