<form class="user" action="<?php echo base_url('Profile/update'); ?>" method="post" enctype="multipart/form-data">
<div class="page-content-wrapper">

    <div class="container-fluid">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Profile</h4>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">

                                <input type="hidden" name="fotolama" value="<?= $user['foto'] ?>">
                                <div class="form-group row">
                                    <label for="nama_pengguna" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="<?= $user['nama_pengguna'];?>" id="nama_pengguna" name="nama_pengguna">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email_pengguna" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="<?= $user['email_pengguna'];?>" id="email_pengguna" name="email_pengguna" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="<?= $user['username'];?>" id="username" name="username" >

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="<?= $user['password'];?>" id="password" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col-md-10 offset-md-2">
                                            <div class="input-group mt-2">
                                                <div class="custom">
                                                    <div class="input-group-append">

                                                        <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Update"></a>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <figure class="img-fluid">
                                        <img src="<?php echo base_url('./assets/upload/fotopengguna/') .$user['foto'];?>" class="preview-foto" alt="" height="190" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'">
                                    </figure>
                                    <div class="mt-3">
                                        <input type="file" hidden class="custom-file-input btn-upload-foto" id="foto" name="foto" accept="image/jpeg, image/png">
                                        <label class="btn btn-block btn-primary" for="foto">Pilih foto</label>
                                    </div>
                                </div>

                            </div> 

                            <!--<div class="col-md d-flex">
                                <img src="<?php echo base_url('assets/upload/fotopengguna/') .$this->session->userdata('session_foto');?>" alt="" height="190">
                            </div>
                        </div>-->
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
    <script src="<?= base_url('assets/js/previewfoto.js') ?>"></script>