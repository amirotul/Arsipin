<form class="user" action="<?php echo base_url('Jenis_Divisi/update');?>" method="post" >

<div class="page-content-wrapper">

                    <div class="container-fluid">
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Edit Jenis Divisi</h4>
                                </div>
                            </div>
                        </div>

                        <?php foreach($user as $baris){ ?>
                        <form class="user" action="<?php echo base_url('Jenis_Divisi/update');?>" method="post">
                        <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama Divisi</label>
                                                <div class="col-sm-5">
                                                   <input type="hidden" name="id" value="<?php echo $baris->id; ?>">
                                                  <input class="form-control" type="text" value="<?php echo $baris->jenis_divisi; ?>" id="jenis_divisi" name="jenis_divisi">
                                                    
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
                                                                    <a class="small" href="<?php echo base_url('Jenis_Divisi')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            </form><?php } ?>
            
                                                              </div>
                                                            </div>
                                                          </div>
                                                          