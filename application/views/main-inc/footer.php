
<?php
if ($this->session->userdata('ISLOGIN') == false) { ?>
    <section class="footer">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                Kontak Kami
                                <small>Silahkan hubungi kami lewat alamat dibawah ini :</small>
                            </h2>
                        </div>
                        <div class="body">
                            Silahkan kunjungi situs resmi kami <a href="www.tronsmart.com">tronsmart.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-cyan">
                            <h2>
                                Mengenai Kami
                                <small>Mengenai perusahaan kami sesuai deskripsi dibawah ini</small>
                            </h2>
                        </div>
                        <div class="body">
                            Silahkan kunjungi situs resmi kami <a href="www.tronsmart.com">tronsmart.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-green">
                            <h2>
                                Blog Tronsmart
                                <small>Kunjungi Blog kami untuk detail barang kami</small>
                            </h2>
                        </div>
                        <div class="body">
                            Silahkan kunjungi situs resmi kami <a href="www.tronsmart.com">tronsmart.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>



    <script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/bootstrap-notify/bootstrap-notify.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/sweetalert/sweetalert.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/pages/ui/dialogs.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/pages/ui/modals.js'; ?>"></script>

    <script src="<?php echo base_url().'assets/js/pages/tables/jquery-datatable.js'; ?>"></script>
    
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/jquery.dataTables.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/jszip.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js'; ?>"></script>


</body>
</html>