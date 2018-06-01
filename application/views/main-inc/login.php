<div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="<?php echo base_url('index.php/login/cek_login'); ?>" method="POST">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-10 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="USERNAME" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-10 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" name="PASSWORD" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <!-- akhir form di modal footer-->
            </div>
            <div class="modal-footer">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="container-fluid nopadding">
                            <input type="submit" class="btn btn-danger waves-effect col-lg-12 col-md-12 col-sm-12 col-xs-12" value="Login">
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>