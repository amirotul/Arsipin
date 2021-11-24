<form class="user" action="<?php echo base_url('Data_Arsip/input/' . $id_jenis);?>" method="post" enctype="multipart/form-data">
<div class="page-content-wrapper">

    <div class="container-fluid">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Data Arsip</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nama_arsip" class="col-sm-2 col-form-label">Nama Arsip</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="nama_arsip" name="nama_arsip" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Jenis Divisi</label>
                            <div class="col-sm-5">
                                <select class="form-control" id="id_jenis" name="id_jenis" required="">
                                    <option value="" hidden disabled selected>Pilih Jenis Arsip</option>
                                    <?php foreach ($role as $item) : ?>
                                        <option value="<?= $item->id_jenis_arsip ?>"><?= $item->jenis_arsip ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Upload</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="date" value="" id="tgl_upload" name="tgl_upload" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="file_arsip" class="col-sm-2 col-form-label">File</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <input type="file" class="form-control" name="file_arsip" id="file_arsip" required="">
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

                                        <a href=<?php echo base_url('Data_Arsip')?>>
                                            <button class="btn btn-danger btn-sm" type="button">Batal</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>