    <div class="page-content-wrapper">

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Surat Masuk</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <p>
                                <a href="<?php echo base_url('Surat_Masuk/tambah_data')?>">
                                    <button type="button" class="btn btn-info btn-sm float-right">+ Tambah Data</button>
                                </a>
                            </p>
                            <br>
                            <form action="" method=""></form>
                            <div class="container align-items-center">
                                <div class="container align-items-center">
                                    <form action="<?php echo base_url('Surat_Masuk/filter');?>" method="get">
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="inputMulaiTanggal" class="font-weight-bold">Mulai
                                                Tanggal :</label>
                                                <input type="date" id="inputMulaiTanggal" name="mulai_tanggal"
                                                class="form-control" required>
                                            </div>
                                            &nbsp&nbsp&nbsp&nbsp
                                            <div class="form-group">
                                                <label for="inputSampaiTanggal" class="font-weight-bold">Sampai
                                                Tanggal :</label>
                                                <input type="date" id="inputSampaiTanggal" name="sampai_tanggal"
                                                class="form-control" required>
                                            </div>
                                            <div class="col-sm-1 form-group">
                                                <label for="inputSampaiTanggal" class="font-weight-bold">
                                                    <font color="white">Disetujui</font>
                                                </label>
                                                <div class="btn-group">
                                                    <button type="submit"
                                                    class="btn btn-primary bt-sm">Cari</button>
                                                    <a href="<?php echo base_url('Surat_Masuk')?>"  class="btn btn-outline-primary ml-2">Reset</a>
                                                </div>
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
                                                <th>No. Surat</th>
                                                <th>Tanggal Surat</th>
                                                <th>Asal Surat</th>
                                                <th>Oleh Divisi</th>
                                                <th>Oleh Pimpinan</th>
                                                <th>Disposisi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                            $no = 1; //no default 1
                            foreach ($user as $baris) { //
                             ?>
                             <tr>
                                <!-- <td><input type="checkbox"/></td> -->
                                <td><?php echo $no++; ?></td>
                                <!-- nomor user otomatis bertambah pada saatn menambah data -->
                                <td><?php echo $baris->no_sm; ?></td>
                                <td><?php echo $baris->tgl_sm; ?></td>
                                <td><?php echo $baris->asal_sm; ?></td>
                                <td><?php echo $baris->status_divisi; ?></td>
                                <td><?php echo $baris->status_pimpinan; ?></td>
                                <td>
                                   <?php
                                   echo '<a href="'.base_url('Surat_Masuk/tambah_disposisi/'.$baris->id_sm).'"><button type="button" class="btn-success">Disposisikan</button></a>';
                                   ?>
                               </td>

                               <td>
                                                <?php
                                                echo '<a href="'.base_url('Surat_Masuk/edit/'.$baris->id_sm).'"><button type="button" class="btn-primary">Edit</button></a>';
                                                echo " ";
                                                echo '<button type="button" class="btn-danger" data-toggle="modal" data-target="#deleteModal" data-id-suratmasuk="' . $baris->id_sm . '">Hapus</button>';
                                                echo " ";
                                                echo '<a href="'.base_url('Surat_Masuk/detail/'.$baris->id_sm).'"><button type="button" class="btn-warning">Detail</button></a>';
                                                ?></td>
                                            </tr>
                                            <?php
                                                }?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Divisi</h5>
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
    <!-- END wrapper -->
    <script src="<?= base_url('assets/js/delete-confirm-suratmasuk.js') ?>"></script>