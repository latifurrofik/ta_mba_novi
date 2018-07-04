<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url('assets/images/logo_tronsmart.jpg'); ?>">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="form-horizontal" action="<?php echo base_url('index.php/pendaftaran/cari_token'); ?>" method="POST">
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="TOKEN" class="form-control" placeholder="Token.." style="margin-top:20px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <input type="submit" class="btn btn-danger m-t-15 waves-effect" value="Cari" style="margin-top:25px;">
                            </div>
                        </div>     
                    </form>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/pendaftaran'); ?>" class="js-right-sidebar" data-close="true">
                        <button class="btn btn-danger waves-effect">Claim Garansi</button>
                    </a>
                </li>
                <li>
                    <?php
                    if ($this->session->userdata("ISLOGIN") == true) {
                        echo '
                            <a href="'.base_url("index.php/logout").'">
                                <button type="button" data-color="white" class="btn bg-red waves-effect">Log Out</button>
                            </a>
                        ';
                    } else {
                        echo '
                            <a href="#" class="js-modal-buttons">
                                <button type="button" data-color="white" class="js-modal-buttons btn bg-red waves-effect">Login</button>
                            </a>
                        ';
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>