    <form class="user" action="<?php echo base_url('Surat_Masuk/surat-masuk');?>" method="POST">
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
                                   echo '<a href="'.base_url('Surat_Masuk/hapus/'.$baris->id_sm).'"><button type="button" class="btn-danger">Hapus</button></a>';
                                   echo " ";
                                   echo '<a href="'.base_url('Surat_Masuk/detail/'.$baris->id_sm).'"><button type="button" class="btn-warning">Detail</button></a>';
                                   echo " "; 
                                   ?>
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
</div>
</div>
</div>