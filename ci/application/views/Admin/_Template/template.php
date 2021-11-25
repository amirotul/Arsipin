<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
<!DOCTYPE html>
<html lang="en">

<?= @$head; ?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?= @$sidebar;  ?>
        <!-- End of Side bar -->

        <!-- Content Wraper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?= @$topbar; ?>
                <!-- End of Topbar -->
                <div class="container-fluid">

                    <!-- content -->
                    <?= @$content; ?>
                    <!-- End of content -->

                </div>
                <!-- End of Main Content -->

                <!-- footer -->
                <?= @$footer; ?>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Content Wrapper -->


        <!-- Scroll to Top Button-->
    <!-- <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a> -->


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah Anda yakin ingin logout?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?php echo base_url('Login/logout');?>">Logout</a>
            </div>
        </div>
    </div>
</div> 



<!-- Bootstrap core JavaScript-->

<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/js/modernizr.min.js"></script>
<script src="<?php echo base_url()?>assets/js/detect.js"></script>
<script src="<?php echo base_url()?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url()?>assets/js/waves.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.scrollTo.min.js"></script>

<script src="<?php echo base_url()?>assets/plugins/metro/MetroJs.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url()?>assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/raphael/raphael-min.js"></script>
<script src="<?php echo base_url()?>assets/pages/dashboard.js"></script>

<!-- Required datatable js -->
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/jszip.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url();?>assets/pages/datatables.init.js"></script>
<!-- App js -->
<script src="<?php echo base_url()?>assets/js/app.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/exporting.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/export-data.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/accessibility.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/js.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/data.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/drilldown.js"></script>
<script src="<?php echo base_url();?>assets/js/notif.js"></script>

</body>
</html>