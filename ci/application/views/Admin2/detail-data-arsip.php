
    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Detail Data Arsip</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card ">
                        <div class="card-body">
                            <a href="<?php echo base_url('Data_Arsip')?>">
                                <i class="far fa-arrow-alt-circle-left fa-2x" ></i>
                                <br>
                            </a>
                            <div class="float-left">
                                
                                <div class="card m-b-30 ">
                                    <div class="card-body">
                                            <?php foreach($user as $baris){ ?>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-4 col-form-label">Nama Arsip</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" value="<?php echo $baris->nama_arsip; ?>" id="nama_arsip" name="nama_arsip" disabled>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-4 col-form-label">Jenis Arsip</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" value="<?php echo $baris->id_jenis; ?>" id="id_jenis" name="id_jenis" disabled>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-4 col-form-label">Tanggal Upload</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" value="<?php echo $baris->tgl_upload; ?>" id="tgl_upload" name="tgl_upload" disabled>
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

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="btn-toolbar mb-3" role="toolbar">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                            
                                            <iframe type="application/pdf" src="<?php echo base_url();?>assets/upload/file_arsip/<?php echo $baris->file_arsip; ?>" id="file_arsip" name="file_arsip" width="530" height="400"></iframe>
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


                        