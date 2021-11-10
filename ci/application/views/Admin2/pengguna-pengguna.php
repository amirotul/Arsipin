<form class="user" action="<?php echo base_url('Data_Pengguna/pengguna-pengguna'); ?>" method="POST">
    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Data Pengguna</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <p>
                                <a href=<?php echo base_url('Data_Pengguna/tambah_pengguna'); ?>>
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
                                        <th>Nama Pengguna</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Foto</th>
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
                                            <td><?php echo $baris->nama_pengguna; ?></td>
                                            <td><?php echo $baris->email_pengguna; ?></td>
                                            <td><?php echo $baris->nama_role; ?></td>
                                            <td><?php echo $baris->username; ?></td>
                                            <td><?php echo $baris->password; ?></td>
                                            <td>
                                                <img src="<?php echo base_url('assets/upload/fotopengguna/') . $baris->foto; ?>" alt="" width="50" height="50" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'">
                                            </td>
                                            <td>
                                                <?php
                                                echo '<a href="' . base_url('Data_Pengguna/edit_pengguna/' . $baris->id_pengguna) . '"><button type="button" class="btn-primary">Edit</button></a>';
                                                echo " ";
                                                echo '<button type="button" class="btn-danger" data-toggle="modal" data-target="#deleteModal" data-id-pengguna="' . $baris->id_pengguna . '">Hapus</button>';
                                                echo " ";
                                                echo '<a href="' . base_url('Data_Pengguna/detail_data_pengguna/' . $baris->id_pengguna) . '"><button type="button" class="btn-warning">Detail</button></a>';
                                                ?></td>

                        </div>
                        </td>
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
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pengguna</h5>
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

    </div>
    <script src="<?= base_url('assets/js/delete-confirm-pengguna.js') ?>"></script>
    <!-- END wrapper -->