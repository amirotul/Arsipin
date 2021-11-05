<form class="user" action="<?php echo base_url('Disposisi/disposisi');?>" method="POST">
     <div class="page-content-wrapper">

            <div class="container-fluid">
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Disposisi</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <br>
                                <form action="" method=""></form>
                                <div class="container align-items-center">
                                    <form action="" method=""></form>
                                <div class="container align-items-center">
                                    <div class="container align-items-center">
                                                            <form action="<?php echo base_url('Disposisi/filter');?>" method="get">
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
                                                                            <a href="<?php echo base_url('Disposisi')?>"  class="btn btn-outline-primary ml-2">Reset</a>
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
                                            <!-- <th>Tanggal Disposisi</th> -->
                                            <th>Batas Waktu </th>
                                            <th>Tujuan Divisi</th>
                                            <th>Isi</th>
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
                                <!-- <td><?php echo $baris->tgl_dis; ?></td> -->
                                <td><?php echo $baris->batas_waktu_dis; ?></td>
                                <td><?php echo $baris->jenis_divisi; ?></td>
                                <td><?php echo $baris->isi_dis; ?></td>
                               <td>
                                 <?php
                                 echo '<a href="'.base_url('Disposisi/edit/'.$baris->id_disposisi).'"><button type="button" class="btn-primary">Edit</button></a>';
                                 echo " ";
                                 echo '<a href="'.base_url('Disposisi/hapus/'.$baris->id_disposisi).'"><button type="button" class="btn-danger">Hapus</button></a>';
                                 echo " ";
                                 echo '<a href="'.base_url('Disposisi/detail/'.$baris->id_disposisi).'"><button type="button" class="btn-warning">Detail</button></a>';
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