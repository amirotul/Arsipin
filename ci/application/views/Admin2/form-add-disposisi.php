 <form class="user" action="<?php echo base_url('Disposisi/input_dis');?>" method="post">
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
                        <?php foreach($user as $baris){ ?>
                           <form class="user" action="<?php echo base_url('Surat_Masuk/get_sm');?>" method="post">
                            <div class="form-group row">
                                <label for="example-number-input" class="col-sm-2 col-form-label">No. Surat</label>
                                <div class="col-sm-5">
                                    <input type="hidden" name="id_sm" value="<?php echo $baris->id_sm; ?>">
                                    <input class="form-control" type="int" value="<?php echo $baris->no_sm; ?>" id="no_sm" name="no_sm" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Surat</label>
                                <div class="col-sm-5">
                                        <input class="form-control" type="datetime" value="<?php echo $baris->tgl_sm; ?>" id="tgl_sm" name="tgl_sm" disabled>
                                    </form>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-date-input" class="col-sm-2 col-form-label">Batas Waktu</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="date" value="" id="batas_waktu_dis" name="batas_waktu_dis" required="">
                                </form>
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Asal Surat</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="<?php echo $baris->asal_sm; ?>" id="asal_sm" name="asal_sm" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">Tujuan</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" id="jenis_divisi" name="jenis_divisi" required="">
                                                <option value="" hidden disabled selected>Pilih Jenis Divisi</option>
                                                <?php foreach ($role as $item) : ?>
                                                    <option value="<?= $item->id ?>"><?= $item->jenis_divisi ?></option>
                                                <?php endforeach ?>

                                            </select>
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Isi</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="" id="isi_dis" name="isi_dis" required="">
                                </form>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Catatan</label>
                                <div class="col-sm-5">
                                   <input class="form-control" type="text" value="" id="catatan_dis" name="catatan_dis" required="">
                               </form>
                               </div>
                           </div>
                           <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">File</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" value="<?php echo $baris->file_sm; ?>" id="file_dis" name="file_dis">
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
                                       
                                        <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Simpan"></a>
                                    </div>

                                </div> &nbsp &nbsp
                                <div class="input-group-append">
                                    <a href=<?php echo base_url('Surat_Masuk')?>>
                                        <button class="btn btn-danger btn-sm" type="button">Batal</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>

    </div>
