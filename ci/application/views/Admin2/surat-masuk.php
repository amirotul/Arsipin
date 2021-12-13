<div class="page-content-wrapper">

    <?php
    $getUser = $this->session->userdata('session_user');
    $getGrup = $this->session->userdata('session_grup');
    ?>

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
                            <?php if($getGrup == 3) : ?>
                            <a href="<?php echo base_url('Surat_Masuk/tambah_data') ?>">
                                <button type="button" class="btn btn-info btn-sm float-right">+ Tambah Data</button>
                            </a>
                            <?php endif ?>
                        </p>
                        <br>
                        <form action="" method=""></form>
                        <div class="container align-items-center">
                            <div class="container align-items-center">
                                <form action="<?php echo base_url('Surat_Masuk/filter'); ?>" method="get">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="inputMulaiTanggal" class="font-weight-bold">Mulai
                                                Tanggal :</label>
                                            <input type="date" id="inputMulaiTanggal" name="mulai_tanggal" class="form-control" required>
                                        </div>
                                        &nbsp&nbsp&nbsp&nbsp
                                        <div class="form-group">
                                            <label for="inputSampaiTanggal" class="font-weight-bold">Sampai
                                                Tanggal :</label>
                                            <input type="date" id="inputSampaiTanggal" name="sampai_tanggal" class="form-control" required>
                                        </div>
                                        <div class="col-sm-1 form-group">
                                            <label for="inputSampaiTanggal" class="font-weight-bold">
                                                <font color="white">Disetujui</font>
                                            </label>
                                            <div class="btn-group">
                                                <button type="submit" class="btn btn-primary bt-sm">Cari</button>
                                                <a href="<?php echo base_url('Surat_Masuk') ?>" class="btn btn-outline-primary ml-2">Reset</a>
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
                                            <?php if ($getGrup == 1) : ?>
                                                <th>Oleh Divisi</th>
                                                <th>Oleh Pimpinan</th>
                                                <th>Disposisi</th>
                                            <?php elseif ($getGrup == 2) : ?>
                                                <th>Oleh Pimpinan</th>
                                            <?php elseif ($getGrup == 3) : ?>
                                                <th>Status</th>
                                            <?php elseif ($getGrup != 1 && $getGrup != 2 && $getGrup != 3) : ?>
                                                <th>Oleh Pimpinan</th>
                                            <?php endif ?>
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
                                                <?php if ($getGrup == 1) : ?>
                                                    <td><?php echo $baris->status_divisi; ?></td>
                                                    <td><?php echo $baris->status_pimpinan; ?></td>
                                                    <td>
                                                        <?php if ($baris->status_disposisi == "didisposisi") : ?>
                                                            <span class="text-success">Didisposisi</span>
                                                        <?php else : ?>
                                                            <a href="<?= base_url('Surat_Masuk/tambah_disposisi/' . $baris->id_sm . '?filename=' . $baris->file_sm) ?>"><button type="button" class="btn-success">Disposisikan</button></a>
                                                        <?php endif ?>

                                                    </td>
                                                    
                                                <?php elseif ($getGrup == 2) : ?>

                                                    <th>Dari Divisi</th>
                                                    <th>Oleh Pimpinan</th>
                                                    <td><?php echo $baris->status_pimpinan; ?></td>

                                                <?php elseif ($getGrup == 3) : ?>
                                                    <td><?php echo $baris->status_disposisi; ?></td>
                                                <?php elseif ($getGrup != 1 && $getGrup != 2 && $getGrup != 3) : ?>
                                                    <td><?php echo $baris->status_pimpinan; ?></td>
                                                <?php endif ?>
                                                <td>
                                                    <?php if ($getGrup == 1) : ?>
                                                        <a href="<?= base_url('Surat_Masuk/edit/' . $baris->id_sm) ?>"><button type="button" class="btn-primary">Edit</button></a>
                                                        <button type="button" class="btn-danger" data-toggle="modal" data-target="#deleteModal" data-id-suratmasuk="<?= $baris->id_sm ?>">Hapus</button>
                                                    <?php elseif ($getGrup == 2) : ?>

                                                        <td><?php echo $baris->dari_divisi; ?></td>
                                                        <td><?php echo $baris->status_pimpinan; ?></td>

                                                        <a href="<?= base_url('Surat_Masuk/do_accept/pimpinan/' . $baris->id_sm) ?>"><button class="btn-primary">Setujui</button></a>
                                                        <a href="<?= base_url('Surat_Masuk/do_reject/pimpinan/' . $baris->id_sm) ?>"><button class="btn-danger">Abaikan</button></a>

                                                    <?php elseif ($getGrup == 3) : ?>
                                                        <a href="<?= base_url('Surat_Masuk/edit/' . $baris->id_sm) ?>"><button type="button" class="btn-primary">Edit</button></a>
                                                    <?php elseif ($getGrup != 1 && $getGrup != 2 && $getGrup != 3) : ?>

                                                        <td><?php echo $baris->status_pimpinan; ?></td>
                                                    <?php endif ?>
                                                    <td>
                                                        <!--<?php if ($getGrup == 1) : ?>
                                                            <a href="<?= base_url('Surat_Masuk/edit/' . $baris->id_sm) ?>"><button type="button" class="btn-primary">Edit</button></a>
                                                            <button type="button" class="btn-danger" data-toggle="modal" data-target="#deleteModal" data-id-suratmasuk="<?= $baris->id_sm ?>">Hapus</button>-->
                                                        <?php elseif ($getGrup == 2) : ?>
                                                            <?php if ($baris->status_pimpinan == 'disetujui') : ?>
                                                                <span class="text-success">Disetujui</span>
                                                            <?php elseif ($baris->status_pimpinan == 'diabaikan') : ?>
                                                                <span class="text-danger">Diabaikan</span>
                                                            <?php else : ?>
                                                                <a href="<?= base_url('Surat_Masuk/do_accept/pimpinan/' . $baris->id_sm) ?>"><button class="btn-primary">Setujui</button></a>
                                                                <a href="<?= base_url('Surat_Masuk/do_reject/pimpinan/' . $baris->id_sm) ?>"><button class="btn-danger">Abaikan</button></a>
                                                            <?php endif ?>
                                                        <?php elseif ($getGrup == 3) : ?>
                                                            <a href="<?= base_url('Surat_Masuk/edit/' . $baris->id_sm) ?>"><button type="button" class="btn-primary">Edit</button></a>
                                                        <?php elseif ($getGrup != 1 && $getGrup != 2 && $getGrup != 3) : ?>
                                                            <?php if ($baris->status_divisi == 'dilaksanakan') : ?>
                                                                <span class="text-success">Dilaksanakan</span>
                                                            <?php elseif ($baris->status_divisi == 'diabaikan') : ?>
                                                                <span class="text-danger">Diabaikan</span>
                                                            <?php else : ?>
                                                                <a href="<?= base_url('Surat_Masuk/do_accept/divisi/' . $baris->id_sm) ?>"><button class="btn-info">Laksanakan</button></a>
                                                                <a href="<?= base_url('Surat_Masuk/do_reject/divisi/' . $baris->id_sm) ?>"><button class="btn-danger">Abaikan</button></a>
                                                            <?php endif ?>

                         
                                                    <?php endif ?>
                                                    <a href="<?= base_url('Surat_Masuk/detail/' . $baris->id_sm) ?>"><button type="button" class="btn-warning">Detail</button></a>
                                                </td>
                                            </tr>
                                        <?php
                                        } ?>
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
                                            echo '<a id="btn-hapus-modal"><button type="button" class="btn btn-danger">Hapus</button></a>';
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