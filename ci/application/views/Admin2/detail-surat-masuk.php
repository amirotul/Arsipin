<form class="user" action="<?php echo base_url('Surat_Masuk/detail-surat-masuk');?>" method="POST">
    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Detail Surat Masuk</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card ">
                        <div class="card-body">
                            <!--<a href="<?php echo base_url('Surat_Masuk')?>">
                                <i class="far fa-arrow-alt-circle-left fa-2x" ></i>
                                <br>-->
                            </a>
                            <div class="float-left">

                                <div class="card m-b-30 ">
                                    <div class="card-body">
                                        <div class="list-group mail-list">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">No Surat</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" value="<?= $user['no_sm'] ?>" id="no_sm" name="no_sm" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Tgl Surat</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="date" value="<?= $user['tgl_sm'] ?>" id="tgl_sm" name="tgl_sm" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Tgl Terima</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="date" value="<?= $user['tgl_terima_sm'] ?>" id="tgl_terima_sm" name="tgl_terima_sm" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Asal Surat</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" value="<?= $user['asal_sm'] ?>" id="asal_sm" name="asal_sm" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Perihal</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" value="<?= $user['perihal_sm'] ?>" id="perihal_sm" name="perihal_sm" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Tgl Dilaksanakan</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="date" value="<?= $user['tgl_dilaksanakan_sm'] ?>" id="tgl_dilaksanakan_sm" name="tgl_dilaksanakan_sm" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Tgl Disetujui</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="date" value="<?= $user['tgl_disetujui_sm'] ?>" id="tgl_disetujui_sm" name="tgl_disetujui_sm" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="card border-0 mt-3">
                                    <div class="card-body p-0">
                                        <div class="list-group">

                                        </div>
                                    </div>
                                </div>                                                  
                            </div>

                            <br>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="btn-toolbar mb-3" role="toolbar">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                            <iframe type="application/pdf" src="<?php echo base_url();?>assets/upload/file_sm/<?= $user['file_sm'] ?>" id="file_sm" name="file_sm" width="500" height="370"></iframe>
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-5">

                                            </div>
                                            <div class="col-sm-5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>