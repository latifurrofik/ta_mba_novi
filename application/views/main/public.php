<style type="text/css">
    .img_carousel_barang{
        height: 350px !important;
    }
</style>
<section class="content">
    <div class="container-fluid nopadding">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                <div class="card">
                    <div class="body nopadding">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <?php
                                    foreach ($barang as $key) {
                                        echo "
                                        <div class='item ".(($key['BARANGID'] == 1)? 'active' : '')."'>
                                            <img src=".base_url('assets/images/'.$key["GAMBAR"])." class='img_carousel_barang'>
                                            <div class='carousel-caption'>
                                                <h3>".$key['NAMA']."</h3>
                                                <p>".$key['DESKRIPSI']."</p>
                                            </div>
                                        </div>"; 
                                    }
                                ?>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(window).on('load', function(){
        $.ajax({
            url : "<?php echo base_url('index.php/pendaftaran/get_notif'); ?>",
            type : "POST",
            beforeSend : function(xhr){
                xhr.overrideMimeType("text/plain; charset=x-user-defined");
            }
        })
        .done(function(data){
            if(localStorage.getItem('token') != data){
                swal(data, "Silahkan ingat - ingat / simpan token diatas.", "success");
                localStorage.setItem('token', data);
            }
        });
    });
</script>