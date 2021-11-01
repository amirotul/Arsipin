<form class="user" action="<?php echo base_url('Surat_Keluar/lihat-surat-keluar');?>" method="POST">
    <div class="page-content-wrapper">
<div class="page-content-wrapper">

    <div class="container-fluid">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Detail Surat Keluar</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-body">
                        <a href="<?php echo base_url('Surat_Keluar')?>">
                            <i class="far fa-arrow-alt-circle-left fa-2x" ></i>
                            <br>
                        </a>
                        <div class="float-left">
                            
                            <div class="card m-b-30 ">
                                <div class="card-body">
                                    <div class="list-group mail-list">
                                        <?php foreach($user as $baris){ ?>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-4 col-form-label">No.Surat</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" value="<?php echo $baris->no_sk; ?>" id="no_sk" name="no_sk" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-4 col-form-label">Tgl Surat</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" value="<?php echo $baris->tgl_sk; ?>" id="tgl_sk" name="tgl_sk" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-4 col-form-label">Tujuan Surat</label>
                                            <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->tujuan_sk; ?>" id="tujuan_sk" name="tujuan_sk" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-4 col-form-label">Perihal</label>
                                            <div class="col-sm-8">
                                               <input class="form-control" type="text" value="<?php echo $baris->perihal_sk; ?>" id="perihal_sk" name="perihal_sk" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-4 col-form-label">Tgl Disetujui</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" value="<?php echo $baris->tgl_disetujui_sk; ?>" id="tgl_disetujui_sk" name="tgl_disetujui_sk" disabled>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="card border-0 mt-3">
                                <div class="card-body p-0">
                                    <div class="list-group">
                                        
                                    </div>
                                </div>
                            </div>                                                  
                        </div>

                        <br>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="btn-toolbar mb-3" role="toolbar">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <iframe src="../assets/upload/fotopengguna/<?php echo $baris->file; ?>" width="500" height="370" id="file_sk" name="file_sk"></iframe>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <div class="col-sm-5">
                                        
                                    </div>
                                    <div class="col-sm-5">
                                    </div>
                                </div>
                            </form><?php } ?>
            
                                                        </div>
                                                    </div>
                                                </div>


               