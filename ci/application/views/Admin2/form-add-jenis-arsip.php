<form class="user" action="<?php echo base_url('Jenis_Arsip/input');?>" method="post">
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add Jenis Arsip</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Jenis Arsip</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="" id="jenis_arsip" name="jenis_arsip">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2">
                                    <div class="input-group mt-2">
                                        <div class="custom">
                                            <div class="input-group-append">
                                            </form></hr>
                                            <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Simpan"></a>
                                        </div>
                                        
                                    </div> &nbsp &nbsp
                                    <div class="input-group-append">

                                        <a href=<?php echo base_url('Jenis_Arsip')?>>
                                            <button class="btn btn-danger btn-sm" type="button">Batal</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>