<!--<form class="user" action="<?php echo base_url('Surat_Keluar/surat-keluar');?>" method="POST">
    <div class="page-content-wrapper">-->

        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Surat Keluar</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                           <p>
                            <a href=<?php echo base_url('Surat_Keluar/tambah_surat_keluar');?>>
                                <button type="button" class="btn btn-info btn-sm float-right">+ Tambah Data</button>
                            </a> 
                        </p>
                        <br>
                        <div class="container align-items-center">
                            <form action="<?php echo base_url('Surat_Keluar/filter');?>" method="get">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="inputMulaiTanggal" class="font-weight-bold">Mulai
                                            Tanggal :</label>
                                            <input type="date" id="inputMulaiTanggal" name="mulai_tanggal" class="form-control" required>
                                        </div>&nbsp&nbsp&nbsp&nbsp
                                        <div class="form-group">
                                            <label for="inputSampaiTanggal" class="font-weight-bold">Sampai Tanggal :</label>
                                            <input type="date" id="inputSampaiTanggal" name="sampai_tanggal"class="form-control" required>
                                        </div> 
                                        <div class="col-sm-1 form-group">
                                            <label for="inputSampaiTanggal" class="font-weight-bold"> 
                                                <font color="white">Disetujui</font> 
                                            </label> 
                                            <div class="btn-group">
                                                <button type="submit"
                                                class="btn btn-primary bt-sm">Cari</button> 
                                                <a href="<?php echo base_url('Surat_Keluar')?>"  class="btn btn-outline-primary ml-2">Reset</a>
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
                                        <th>Tujuan Surat</th>
                                        <th>Oleh Pimpinan</th>
                                        <th>Teruskan</th>
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
                                <td><?php echo $baris->no_sk; ?></td>
                                <td><?php echo $baris->tgl_sk; ?></td>
                                <td><?php echo $baris->tujuan_sk; ?></td>
                                <td><?php echo $baris->status; ?></td>
                                <td><?php
                                    echo '<a href="'.base_url(''.$baris->id_sk).'"><button type="button" class="btn-success">Teruskan</button></a>';?></td>
                                <td>
                                    <?php
                                    echo '<a href="'.base_url('Surat_Keluar/edit_surat_keluar/'.$baris->id_sk).'"><button type="button" class="btn-primary">Edit</button></a>';
                                    echo " ";
                                    echo '<a href="'.base_url('Surat_Keluar/hapus_surat_keluar/'.$baris->id_sk).'"><button type="button" class="btn-danger">Hapus</button></a>';
                                    echo " ";
                                    echo '<a href="'.base_url('Surat_Keluar/detail_surat_keluar/'.$baris->id_sk).'"><button type="button" class="btn-warning">Detail</button></a>';
                                ?></td>
                            </tr>
                            
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>