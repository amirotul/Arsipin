<form class="user" action="<?php echo base_url('Data_Divisi/data-divisi');?>" method="POST" enctype="multipart/form-data">
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
                                <a href="<?php echo base_url('Data_Divisi/tambah_data_divisi')?>">
                                    <button type="button" class="btn btn-info btn-sm float-right">Tambah Data</button>
                                </a>
                            </p>
                            <form action="" method=""></form>
                            <div class="container align-items-center">
                                <form action="">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="inputMulaiTanggal" class="font-weight-bold">Mulai
                                            Tanggal :</label>
                                            <input type="date" id="inputMulaiTanggal" name="mulai_tanggal"
                                            class="form-control" name="tgl_pemasukan" required>
                                        </div>
                                        &nbsp&nbsp&nbsp&nbsp
                                        <div class="form-group">
                                            <label for="inputSampaiTanggal" class="font-weight-bold">Sampai
                                            Tanggal :</label>
                                            <input type="date" id="inputSampaiTanggal" name="sampai_tanggal"
                                            class="form-control" name="tgl_pemasukan" required>
                                        </div>
                                        <div class="col-sm-1 form-group">
                                            <label for="inputSampaiTanggal" class="font-weight-bold">
                                                <font color="white">Disetujui</font>
                                            </label>
                                            <button type="submit"
                                            class="btn btn-primary bt-sm">Cari</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="row">
                                    <div class="col-sm-12">
                                    </div>
                                </div>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis Divisi</th>
                                            <th>Nama</th>
                                            <th>Email</th>
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
                                            <td><?php echo $baris->jenis_divisi; ?></td>
                                            <td><?php echo $baris->nama_divisi; ?></td>
                                            <td><?php echo $baris->email_divisi; ?></td>
                                            <td><?php echo $baris->username; ?></td>
                                            <td><?php echo $baris->password; ?></td>
                                            <td><img src="../../assets/upload/fotodivisi/<?php echo $baris->foto; ?>" alt="" width="60" height="60"></td>
                                                <td>
                                                <?php
                                                echo '<a href="'.base_url('Data_Divisi/edit_data_divisi/'.$baris->id_divisi).'"><button type="button" class="btn-primary">Edit</button></a>';
                                                echo " ";
                                                echo '<a href="'.base_url('Data_Divisi/hapus_data_divisi/'.$baris->id_divisi).'"><button type="button" class="btn-danger">Hapus</button></a>';
                                            //echo " ";
                                              // echo '<a href="'.base_url('Data_Divisi/detail_data_divisi/'.$baris->id_divisi).'"><button type="button" class="btn-warning">Detail</button></a>';
                                                ?></td>
                                            </tr>
                                            <?php
                                                }?>
                                    </tbody>
                                </table>
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
    <!-- END wrapper -->