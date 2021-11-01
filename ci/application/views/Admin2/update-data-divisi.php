<form class="user" action="<?php echo base_url('Data_Divisi/update');?>" method="post" enctype="multipart/form-data">

<div class="page-content-wrapper">

                    <div class="container-fluid">
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Edit Data Divisi</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">

                                            <?php foreach($user as $baris){ ?>

                                                       <div class="form-group row">
                                                    <label for="example-date-input" class="col-sm-2 col-form-label">Jenis Divisi</label>
                                                    <div class="col-sm-5">
                                                     
                                                    <select class="form-control" name="jenis_divisi" id="jenis_divisi" required="">
                                                    <option value="HRD" <?php if(($baris->jenis_divisi)== 1){ echo "selected";}?>>HRD</option>
                                                    <option value="Marketing" <?php if(($baris->jenis_divisi)== 2 ){ echo "selected";}?>>Marketing</option>
                                                    <option value="Pemasaran" <?php if(($baris->jenis_divisi)== 3 ){ echo "selected";}?>>Pemasaran</option>
                                                    
                                                </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-5">
                                                    <input type="hidden" name="id_divisi" value="<?php echo $baris->id_divisi; ?>">
                                                    <input class="form-control" type="text" value="<?php echo $baris->nama_divisi; ?>" id="nama_divisi" name="nama_divisi">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" type="text" value="<?php echo $baris->email_divisi; ?>" id="email_divisi" name="email_divisi">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" type="text" value="<?php echo $baris->username; ?>" id="username" name="username">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" type="text" value="<?php echo $baris->password; ?>" id="password" name="password">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                            <label for="example-date-input" class="col-sm-2 col-form-label">Foto/jpg</label>
                                            <div class="col-sm-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto" name="foto" accept="image/jpeg, image/png" value="../../assets/upload/fotodivisi/<?php echo $baris->foto; ?>">
                                                <label class="custom-file-label" for="foto">Pilih foto...</label>
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
                                                                    <a class="small" href="<?php echo base_url('Data_Divisi/index')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            </form><?php } ?>
            
                                                              </div>
                                                            </div>
                                                          </div>