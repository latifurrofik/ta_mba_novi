<section class="content">
    <div class="container-fluid nopadding">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul class="list-group">
                                    <?php
                                        echo"
                                            <li class='list-group-item'><strong>Nama Barang</strong> : ".$claim[0]['NAMABARANG']."</li>
                                            <li class='list-group-item'><strong>Nama Pemilik</strong> : ".$claim[0]['NAMA']."</li>
                                            <li class='list-group-item'><strong>Tanggal Claim</strong> : ".$claim[0]['TANGGALCLAIM']."</li>
                                            <li class='list-group-item'><strong>Tanggal Expired</strong> : ".$claim[0]['TANGGALGARANSI']."</li>
                                            <li class='list-group-item'><strong>Alamat Pemilik</strong> : ".$claim[0]['ALAMAT']."</li>
                                            <li class='list-group-item'><strong>Deskripsi Barang</strong> : ".$claim[0]['DESKRIPSIBARANG']."</li>
                                            <li class='list-group-item'><strong>Nomor Serial Barang</strong> : ".$claim[0]['SERIAL']."</li>
                                            <li class='list-group-item'><strong>Status Barang</strong> : ".$claim[0]['SERIAL']."</li>
                                            <li class='list-group-item'>
                                                <span>
                                                    <strong>Progress Barang</strong> : ".$claim[0]['DESKRIPSI']."
                                                </span>
                                                <div class='progress'>
                                                    <div class='progress-bar' role='progressbar' aria-valuenow='".$claim[0]['PRESENTASE']."' aria-valuemin='0' aria-valuemax='100' style='width: ".$claim[0]['PRESENTASE']."%;'>
                                                        ".$claim[0]['PRESENTASE']."%
                                                    </div>
                                                </div>
                                            </li>
                                        ";
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>