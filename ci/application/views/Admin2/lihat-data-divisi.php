
                <div class="page-content-wrapper">

                    <div class="container-fluid">
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Detail Data Divisi</h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">

                                                <a href="<?php echo base_url('Data_Divisi/index')?>">
                                                <i class="far fa-arrow-alt-circle-left fa-2x" ></i>
                                            <br>
                                            </a>
                                            <br></a>
                                                <?php foreach($user as $baris){ ?>
                                                
                                                <div class="form-group row">
                                                    <label for="example-date-input" class="col-sm-2 col-form-label">Jenis Divisi</label>
                                                    <div class="col-sm-5">
                                                     
                                                    <select class="form-control" name="jenis_divisi" id="jenis_divisi" required="" disabled="">
                                                    <option value="1" <?php if(($baris->jenis_divisi)== 1){ echo "selected";}?> disabled="">HRD</option>
                                                    <option value="2" <?php if(($baris->jenis_divisi)== 2 ){ echo "selected";}?> disabled="">Marketing</option>
                                                    <option value="3" <?php if(($baris->jenis_divisi)== 3 ){ echo "selected";}?> disabled="">Pemasaran</option>
                                                    
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-5">
                                                    <input type="hidden" name="id_divisi" value="<?php echo $baris->id_divisi; ?>">
                                                    <input class="form-control" type="text" value="<?php echo $baris->nama_divisi; ?>" id="nama_divisi" name="nama_divisi" disabled="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" type="text" value="<?php echo $baris->email_divisi; ?>" id="email_divisi" name="email_divisi" disabled="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" type="text" value="<?php echo $baris->username; ?>" id="username" name="username" disabled="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" type="text" value="<?php echo $baris->password; ?>" id="password" name="password" disabled="">
                                                </div>
                                            </div>
                                        </div>

                                            <div class="row">
                                            <div class="col-8">

                                                <a href="#">
                                                <i class="#" ></i>
                                            <br>
                                            <br>
                                        </a>
                                            <div class="col-md d-flex" id="foto" name="foto">
                                                <img src="../../assets/upload/fotodivisi/<?php echo $baris->foto; ?>" alt="" width="200" height="200">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>