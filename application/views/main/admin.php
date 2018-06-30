<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Claim</th>
                                        <th>Barang</th>
                                        <th>Tipe Barang</th>
                                        <th>Serial</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php
                                		$i=1;
                                		foreach ($pendaftar as $key) {
	                                		if ($key['VERIFIKASI'] == 1) {
	                                			$verifikasi = "";
	                                		} else {
	                                			$verifikasi = "<a href='".base_url('index.php/verifikasi/')."'><button class='btn btn-success'>Claim</button></a>";
	                                		}
                                			echo "
                                				<tr>
                                					<td>".$i++."</td>
                                					<td>".$key['NAMA']."</td>
                                					<td>".$key['EMAIL']."</td>
                                					<td>".$key['NOTELP']."</td>
                                					<td>".$key['ALAMAT']."</td>
                                					<td>".$key['TANGGAL']."</td>
                                					<td>".$key['BARANG']."</td>
                                					<td>".$key['TIPE']."</td>
                                					<td>".$key['TOKEN']."</td>
                                					<td>".$verifikasi."</td>
                                				</tr>
                                			";
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
</section>