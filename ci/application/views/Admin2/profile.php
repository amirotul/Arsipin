<form class="user" action="" method="POST" enctype="multipart/form-data">
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
                                <input type="hidden" name="id_role" value="<?= $user['id_role'] ?>">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="<?= $user['nama_pengguna'];?>" id="example-text-input" disabled="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="<?= $user['email_pengguna'];?>" id="example-date-input" disabled="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="<?= $user['username'];?>" id="example-date-input" disabled="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="<?= $user['password'];?>" id="example-date-input" disabled="">
                                    </div>
                                </div>
                                <!--<div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Asal Kota</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="Malang" id="example-text-input" disabled="">
                                    </div>
                                </div>-->
                                <div class="form-group row">
                                        <div class="col-md-10 offset-md-2">
                                            <div class="input-group mt-2">
                                                <div class="custom">
                                                    <div class="input-group-append">
                                                        <a href="<?php echo base_url ('Profile/edit_profile')?>"><button type="button" class="btn btn-primary btn-sm">Update</button></a>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            <div class="col-auto">
                                    <figure class="img-fluid">
                                        <img src="<?php echo base_url('/assets/upload/fotopengguna/') . $user['foto'] ?>" class="preview-foto" alt="" height="150" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'">
                                    </figure>
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