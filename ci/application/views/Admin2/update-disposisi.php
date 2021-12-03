<form class="user" action="<?php echo base_url('Disposisi/update');?>" method="post" enctype="multipart/form-data">
<div class="page-content-wrapper">

    <div class="container-fluid">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Disposisi</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <?php foreach($user as $baris){ ?>
                      <form class="user" action="<?php echo base_url('Disposisi/update');?>"
                        method="post">
                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Batas Waktu</label>
                            <div class="col-sm-5">
                                <input type="hidden" name="id_disposisi" value="<?php echo $baris->id_disposisi; ?>">
                                <input class="form-control" type="date" value="<?php echo $baris->batas_waktu_dis; ?>" id="batas_waktu_dis" name="batas_waktu_dis">
                            </div>
                        </div>
                        <!--<div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Jenis Divisi</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="<?php echo $baris->jenis_divisi; ?>" id="jenis_divisi" name="jenis_divisi" >
                            </div>
                        </div>-->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Isi</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="<?php echo $baris->isi_dis; ?>" id="isi_dis" name="isi_dis" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Catatan</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="<?php echo $baris->catatan_dis; ?>" id="catatan_dis" name="catatan_dis" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-5">
                                <iframe src="<?php echo base_url();?>assets/upload/file_sm/<?= $baris->file_dis?>" width="390"  height="300" type="application/pdf" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'"></iframe>
                                 <input type="file" class="form-control" name="file_dis">
                            <input type="hidden" class="form-control" name="gambarLama" value="<?= $baris->file_dis?>">
                                    </div>
                                </div>

                        <div class="form-group row">
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                       <div class="form-group row">

                        <div class="col-sm-5">

                        </div>
                        <div class="col-sm-5">
                        </div>
                        <div class="col-md-10 offset-md-2">
                            <div class="input-group mt-2">
                                <div class="custom">
                                    <div class="input-group-append">

                                        <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Simpan"></a>
                                    </div>
                                </div> &nbsp &nbsp
                                <div class="input-group-append">
                                    <a class="small" href="<?php echo base_url('Disposisi')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                    </a>
                                </div>
                            </div>
                            </form><?php } ?>
                        </div>
                    </div>
                </div>
            </div>
