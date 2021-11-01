<form class="user" action="<?php echo base_url('Surat_Keluar/update');?>" method="post" enctype="multipart/form-data">
<div class="page-content-wrapper">

    <div class="container-fluid">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Surat Keluar</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <?php foreach($user as $baris){ ?>

                        <div class="form-group row">
                            <input type="hidden" name="id_sk" value="<?php echo $baris->id_sk; ?>">
                            <label for="example-number-input" class="col-sm-2 col-form-label">No. Surat</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="<?php echo $baris->no_sk; ?>" id="no_sk" name="no_sk">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Surat</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="date" value="<?php echo $baris->tgl_sk; ?>" id="tgl_sk" name="tgl_sk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tujuan Surat</label>
                            <div class="col-sm-5">
                            <input class="form-control" type="text" value="<?php echo $baris->tujuan_sk; ?>" id="tujuan_sk" name="tujuan_sk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Perihal</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="<?php echo $baris->perihal_sk; ?>" id="perihal_sk" name="perihal_sk">
                            </div>
                        </div>
                        <div class="form-group row">
                                            <label for="example-date-input" class="col-sm-2 col-form-label">File/pdf</label>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="file_sk" name="file_sk" accept="pdf" value="../assets/upload/fotopengguna/<?php echo $baris->file_sk; ?>">
                                                <label class="custom-file-label" for="foto">Pilih file...</label>
                                                    </div>

                                                    </div>
                                                </div>
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
                                                        <a class="small" href="<?php echo base_url('Surat_Keluar')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                                        </a>
                                                        </div>
                                                        </div>
                                                        </form><?php } ?>
            
                                                        </div>
                                                    </div>
                                                </div>