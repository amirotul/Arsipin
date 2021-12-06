<div class="page-content-wrapper">
    <div class="container-fluid">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Surat Masuk</h4>
                </div>
            </div>
        </div>
        <form class="user" action="<?= base_url('Surat_Masuk/input_data');?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="example-number-input" class="col-sm-2 col-form-label">No. Surat</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="integer" value="" id="no_sm" name="no_sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Surat</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="date" value="" id="tgl_sm" name="tgl_sm" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Terima</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="date" value="" id="tgl_terima_sm" name="tgl_terima_sm" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Asal Surat</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="" id="asal_sm" name="asal_sm" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Perihal</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="" id="perihal_sm" name="perihal_sm" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">File</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <input type="file" class="form-control" name="file_sm" id="file_sm" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2">
                                    <div class="input-group mt-2">
                                        <div class="custom">
                                            <div class="input-group-append">
                                            </form></hr>
                                            <a><input type="submit" class="btn btn-primary btn-sm" value="Simpan"></a>
                                        </div>
                                        
                                    </div> &nbsp &nbsp
                                    <div class="input-group-append">

                                        <a href=<?php echo base_url('Surat_Masuk')?>>
                                            <button class="btn btn-danger btn-sm" type="button">Batal</button></a>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email_pengguna" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="text" value="<?= $user['id_role'];?>" id="id_pengguna" name="id_pengguna" hidden >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>