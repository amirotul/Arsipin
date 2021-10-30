<form class="user" action="<?php echo base_url('Surat_Masuk/tambah_disposisi');?>" method="post">
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Tambah Disposisi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="example-number-input" class="col-sm-2 col-form-label">No. Surat</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="varchar"  value="SR-121" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Surat</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="date" value="01 Oktober 2021" id="example-date-input" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Batas Waktu</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="date" value="01 Oktober 2021" id="example-date-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Asal Surat</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="Politeknik Negeri Jember" id="example-text-input" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Tujuan</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="tujuan_divisi">
                                        <option value=""hidden disabled selected>Pilih Divisi</option>
                                        <option value="marketing">Marketing</option>
                                        <option value="hrd">HRD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Isi</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="" id="isi_dis">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Catatan</label>
                                <div class="col-sm-5">
                                 <input class="form-control" type="text" value="" id="catatan_dis" name="">
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
                                        </form></hr>
                                        <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Simpan"></a>
                                    </div>

                                </div> &nbsp &nbsp
                                <div class="input-group-append">
                                    <a href=<?php echo base_url('Surat_Masuk')?>>
                                        <button class="btn btn-danger btn-sm" type="button">Batal</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
