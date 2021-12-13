<form class="user" action="<?php echo base_url('Surat_Keluar/input_data_sk');?>" method="POST">
    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Teruskan Ke Pimpinan</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card ">
                        <div class="card-body">
                            <!--<a href="<?php echo base_url('Surat_Keluar')?>">
                                <i class="far fa-arrow-alt-circle-left fa-2x" ></i>
                                <br>-->
                            </a>
                                
                                <div class="card m-b-30 ">
                                    <div class="card-body">
                                        <div class="list-group mail-list">

                                            <input class="form-control" type="text" value="2" id="id_pengguna" name="id_pengguna" hidden >

                                            <!--<input class="form-control" type="date" value="<?php echo(date('Y-m-d'));?>" id="tgl_disetujui_sk" name="tgl_disetujui_sk" hidden>-->

                                            <?php foreach($user as $baris){ ?>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">No.Surat</label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" type="text" value="<?php echo $baris->no_sk; ?>" id="no_sk" name="no_sk" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Tgl Surat</label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" type="text" value="<?php echo $baris->tgl_sk; ?>" id="tgl_sk" name="tgl_sk" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Tujuan Surat</label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" type="text" value="<?php echo $baris->tujuan_sk; ?>" id="tujuan_sk" name="tujuan_sk" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Perihal</label>
                                                    <div class="col-sm-5">
                                                     <input class="form-control" type="text" value="<?php echo $baris->perihal_sk; ?>" id="perihal_sk" name="perihal_sk" >
                                                 </div>
                                             </div>

                                             <div class="form-group row">
                                             <label for="example-text-input" class="col-sm-2 col-form-label">File</label>
                                             <div class="col-sm-5">
                                                 <div class="input-group">
                                                     <div class="input-group-prepend">
                                                         <input class="form-control" type="text" readonly id="file_sk" name="file_sk" value="<?= $_GET['filename'] ?>">
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                             
                                             <div class="form-group row">
                                            <div class="col-md-10 offset-md-2">
                                                <div class="input-group mt-2">
                                                    <div class="custom">
                                                        <div class="input-group-append">

                                                            <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Teruskan"></a>
                                                        </div>

                                                    </div> &nbsp &nbsp
                                                    <div class="input-group-append">
                                                        <a class="small" href="<?php echo base_url('Surat_Keluar')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                                        </a>
                                                    </div>
                                                </div>
                                                </div>
                                        
                                    </div>

                                             <!--<div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Tgl Disetujui</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="date" value="<?php echo(date('Y-m-d'));?>" id="tgl_disetujui_sk" name="tgl_disetujui_sk">
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                        </div>
                                    </div>
                                    </form><?php } ?>


                                    
                                </div>
                            </div>
                        </div>