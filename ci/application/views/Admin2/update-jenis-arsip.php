
<div class="page-content-wrapper">

    <div class="container-fluid">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Jenis Arsip</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <?php foreach($user as $baris){ ?>
                            <form class="user" action="<?php echo base_url('Jenis_Arsip/update');?>"
                                method="POST">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Jenis Arsip</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="<?php echo $baris->jenis_arsip; ?>" id="example-text-input">
                                    </div>
                                </div>
                                <div class="col-md-10 offset-md-2">
                                    <div class="input-group mt-2">
                                        <div class="custom">
                                            <div class="input-group-append">

                                                <a href=jenis-arsip.html>
                                                    <button class="btn btn-primary" type="submit" name="submit">Simpan</button></a>
                                                </div>
                                            </form><?php } ?><hr>
                                        </div> &nbsp &nbsp
                                        <div class="input-group-append">

                                            <a href=<?php echo base_url('Jenis_Arsip')?>>
                                                <button class="btn btn-danger" type="button">Batal</button></a>
                                            </div>
                                        </div>
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
