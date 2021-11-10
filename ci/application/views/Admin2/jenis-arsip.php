<form class="user" action="<?php echo base_url('Jenis_Arsip/jenis-arsip');?>" method="POST">
    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Jenis Arsip</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                         <a href="<?php echo base_url('Jenis_Arsip/tambah')?>">
                            <button type="button" class="btn btn-info btn-sm float-right">+ Tambah Data</button></p>
                        </a>
                        <br>
                        <br>

                        <div class="row">
                            <div class="col-sm-12">
                            </div>
                        </div>
                        <!-- <div class="modal bs-example-modal" tabindex="-1" role="dialog" id="">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0">Konfirmasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Anda yakin ingin menghapus data ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Hapus</button>
                                        <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Arsip</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                            $no = 1; //no default 1
                            foreach ($user as $baris) { //
                             ?>
                             <tr>
                                <td><?php echo $no++; ?></td>
                                <!-- nomor user otomatis bertambah pada saatn menambah data -->
                                <td><?php echo $baris->jenis_arsip; ?></td> 
                                <td>
                                   <?php
                                   echo '<a href="'.base_url('Jenis_Arsip/edit/'.$baris->id_jenis_arsip).'"><button type="button" class="btn-primary">Edit</button></a>';
                                   echo " ";
                                   echo '<a href="'.base_url('Jenis_Arsip/hapus/'.$baris->id_jenis_arsip).'"><button type="button" class="btn-danger">Hapus</button></a>';
                                   ?>
                               </form>
                           </div>

                       </div>
                   </div> 

               </td>
           </tr>
           <?php 
       }
       ?>
   </tbody>
</table>
</div>

</div>
</div>
<!-- <script>
        $(document).ready(function()
        {
            $("#hapus").click(function()
            {
                //Say - $('p').get(0).id - this delete item id
                //modal.find('#delete_item_id').attr("value",div.data('#delete_item_id'));
                $("#delete_item_id").val( $('p').get() );
                $('#delete_confirmation_modal').modal('show');
            });
        });
    </script> -->