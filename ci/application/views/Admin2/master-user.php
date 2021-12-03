<form class="user" action="<?php echo base_url('Master_User/master_user');?>" method="POST">
    <!-- end page title end breadcrumb -->
    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Data Master User</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <p>
                                <a href=<?php echo base_url('Master_User/tambah_master_user'); ?>>
                                    <button type="button" class="btn btn-info btn-sm float-right">+ Tambah Data</button>
                                </a>
                            </p>

                            <br>
                            <br>
            <div class="row">
                <div class="col-sm-12">
                </div>
            </div>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Role</th> 
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
                                <td><?php echo $baris->nama_role; ?></td>
                                <td>
                                    <?php
                                    echo '<button type="button" class="btn-danger" data-toggle="modal" data-target="#deleteModal" data-id-masteruser="' . $baris->id_role . '">Hapus</button>';
                                    ?></td>
                            </tr>
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
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Master User</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">Yakin ingin menghapus? Tindakan ini tidak dapat dibatalkan.</div>
                            <div class="modal-footer">

                            <?php
                            echo '<a href="" class="btn-hapus"><button type="button" class="btn btn-danger">Hapus</button></a>';
                            echo " ";
                            echo '<a><button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button></a>';
                            ?>

                </div>
            </div>
        </div>
    </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


    </div><!-- container -->

</div> <!-- Page content Wrapper -->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->

<footer class="footer">
    © 2018 - 2020 Dashor by Themesdesign.
</footer>

</div>
<!-- End Right content here -->
<script src="<?= base_url('assets/js/delete-confirm-masteruser.js') ?>"></script>


</div>