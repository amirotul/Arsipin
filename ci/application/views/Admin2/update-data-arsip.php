<form class="user" action="<?php echo base_url('Data_Arsip/update/' . $id_jenis);?>" method="post" enctype="multipart/form-data">
<div class="page-content-wrapper">

    <div class="container-fluid">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Edit Data Arsip</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <?php foreach($user as $baris){ ?>

                        <div class="form-group row">
                            <input type="hidden" name="id_arsip" value="<?php echo $baris->id_arsip; ?>">
                            <label for="nama_arsip" class="col-sm-2 col-form-label">Nama Arsip</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="<?php echo $baris->nama_arsip; ?>" id="nama_arsip" name="nama_arsip" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_arsip" class="col-sm-2 col-form-label">Jenis Arsip</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="<?php echo $baris->id_jenis; ?>" id="id_jenis" name="id_jenis" disabled="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Upload</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="date" value="<?php echo $baris->tgl_upload; ?>" id="tgl_upload" name="tgl_upload" required="">
                            </div>
                        </div>
                        <!--<div class="form-group row">
                                <label for="file_arsip" class="col-sm-2 col-form-label">File</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <input type="file" value="<?php echo $baris->file_arsip; ?>" class="form-control" name="file_arsip" id="file_arsip">
                                        </div>
                                    </div>
                                </div>
                            </div>-->

                            <?php } ?>
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

                                        <a href=<?php echo base_url('Data_Arsip/data_per_arsip/' . $id_jenis)?>>
                                            <button class="btn btn-danger btn-sm" type="button">Batal</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                                    
                                
