<form class="user" action="<?php echo base_url('Surat_Masuk/update');?>" method="post" enctype="multipart/form-data">
    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Surat Masuk</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                         <?php foreach($user as $baris){ ?>
                            <div class="form-group row">
                                <input type="hidden" class="form-control" id="id_sm" name="id_sm" value="<?php echo $baris->id_sm; ?>">
                                <label for="example-number-input" class="col-sm-2 col-form-label">No. Surat</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="int" value="<?php echo $baris->no_sm; ?>" id="no_sm" name="no_sm" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Surat</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="date" value="<?php echo $baris->tgl_sm; ?>" id="tgl_sm" name="tgl_sm" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Terima</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="date" value="<?php echo $baris->tgl_terima_sm; ?>" id="tgl_terima_sm" name="tgl_terima_sm" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Asal Surat</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="<?php echo $baris->asal_sm; ?>" id="asal_sm" name="asal_sm" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Perihal</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="<?php echo $baris->perihal_sm; ?>" id="perihal_sm" name="perihal_sm" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">File</label>
                                <div class="col-sm-5">
                                            <iframe src="<?php echo base_url();?>assets/upload/file_sm/<?php echo $baris->file_sm; ?>" width="390"  height="300" type="application/pdf" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'"></iframe>
                                            <input type="file" class="form-control" name="file_sm">
                                            <input type="hidden" class="form-control" name="fileLama" value="<?= $baris->file_sm?>">
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
                                        <a class="small" href="<?php echo base_url('Surat_Masuk')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                        </a>
                                    </div>
                                </div>
                                </form><?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
