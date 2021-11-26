<form class="user" action="<?php echo base_url('Disposisi/detail-disposisi');?>" method="POST">
     <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Detail Disposisi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card ">
                        <div class="card-body">
                            <a href="<?php echo base_url('Disposisi')?>">
                                <i class="far fa-arrow-alt-circle-left fa-2x" ></i>
                                <br>
                            </a>
                            <div class="float-left">
                                
                                <div class="card m-b-30 ">
                                    <div class="card-body">
                                        <div class="list-group mail-list">
                                
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-4 col-form-label">Batas waktu</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="date"  value="<?= $user['batas_waktu_dis'] ?>" id="batas_waktu_dis" name="batas_waktu_dis" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-number-input"class="col-sm-4
                                                col-form-label">Tujuan</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="varchar"  value="<?= $user['jenis_divisi'] ?>" id="jenis_divisi" name="jenis_divisi" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-number-input"class="col-sm-4
                                                col-form-label">Isi</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="varchar"  value="<?= $user['isi_dis'] ?>" id="isi_dis" name="isi_dis" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-number-input"class="col-sm-4
                                                col-form-label">Catatan</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="varchar"  value="<?= $user['catatan_dis'] ?>" id="catatan_dis" name="catatan_dis" disabled>
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
                                            <iframe type="application/pdf" src="<?php echo base_url();?>assets/upload/file_dis/<?= $user['file_dis'] ?>" id="file_dis" name="file_dis" width="520" height="370"></iframe>
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

            