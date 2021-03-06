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
                                 echo '<button type="button" class="btn-danger" data-toggle="modal" data-target="#deleteModal" data-id-jenisarsip="' . $baris->id_jenis_arsip . '">Hapus</button>';
                                 ?>
                                 <?php 
                     }
                     ?>
                 </tbody>
             </table>
         </div>

                             <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Jenis Arsip</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">Yakin ingin menghapus? Tindakan ini tidak dapat dibatalkan.</div>
                            <div class="modal-footer">

                            <?php
                            echo '<a class="btn-hapus"><button type="button" class="btn btn-danger">Hapus</button></a>';
                            echo " ";
                            echo '<a><button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button></a>';
                            ?>

                </div>
            </div>
        </div>
    </div>

     </div>
 </div>
 <script src="<?= base_url('assets/js/delete-confirm-jenisarsip.js') ?>"></script>
