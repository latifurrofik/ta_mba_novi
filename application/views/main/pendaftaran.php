<section class="content">
  <div class="container-fluid">
    <div class="body">
        <div id="form_pendaftaran_garansi">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <!-- <div class="header">
                        <h2>
                            Pendaftaran Garansi
                        </h2>
                    </div> -->
                    <div class="body">
                        <form class="form-horizontal" action="<?php echo base_url('index.php/pendaftaran/claim_garansi'); ?>" method="POST">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Nama</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="NAMA" class="form-control" placeholder=".....">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Email</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="EMAIL" class="form-control" placeholder=".....">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">No. Telepon</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="NOTELP" class="form-control" placeholder=".....">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Alamat</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="ALAMAT" class="form-control" placeholder=".....">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Tipe Barang</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="TIPEID">
                                            <option value="">-- Pilih --</option> 
                                            <option value="1">Audio</option>
                                            <option value="2">Power Banks</option>
                                            <option value="3">Chargers</option>
                                            <option value="4">Cable & Hubs</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Merk Barang</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="MERKID">
                                            <option value="">-- Pilih --</option> 
                                            <?php
                                                foreach ($barang as $key) {
                                                    echo "
                                                        <option value=".$key['BARANGID'].">".$key['DESKRIPSI']."</option>
                                                    ";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <div class="container-fluid pull-right">
                                        <input type="button" class="btn btn-success m-t-15 waves-effect" value="Claim" id="btn_claim">
                                        <input type="reset" class="btn btn-danger m-t-15 waves-effect" value="Batal">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
  </div>
</section>

<script type="text/javascript">
    $("#btn_claim").click(function(){
        $.ajax({
            url : "<?php echo base_url('index.php/pendaftaran/get_notif'); ?>",
            type : "POST",
            beforeSend : function(xhr){
                xhr.overrideMimeType("text/plain; charset=x-user-defined");
            }
        })
        .done(function(data){
            if (console && console.log) {
                console.log("Token : ", +data);
            }
        });
    })

</script>