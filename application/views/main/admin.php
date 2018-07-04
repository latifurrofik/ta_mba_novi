<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tbl_pendaftar">
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
                                        <th>Token</th>
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
	                                			$verifikasi = "<a href='".base_url('index.php/verifikasi/?id='.$key['PENDAFTARID'])."'><button class='btn btn-warning'>Claim</button></a>";
                                            }

                                            if ($key['PROGRESSID'] == 1) {
	                                			$progress = "<a href='".base_url('index.php/progress/?progressid=2&pendaftarid='.$key['PENDAFTARID'])."'><button class='btn btn-warning'>Tarik Barang</button></a>";
	                                		} elseif($key['PROGRESSID'] == 2) {
                                                $progress = "<a href='".base_url('index.php/progress/?progressid=3&pendaftarid='.$key['PENDAFTARID'])."'><button class='btn btn-warning'>Pengemasan</button></a>";
	                                		} elseif($key['PROGRESSID'] == 3) {
                                                $progress = "<a href='".base_url('index.php/progress/?progressid=4&pendaftarid='.$key['PENDAFTARID'])."'><button class='btn btn-warning'>Dlm Perjalanan</button></a>";
	                                		} elseif($key['PROGRESSID'] == 4) {
                                                $progress = "<button disabled class='btn btn-success'>Terkirim</button>";
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
                                					<td>".$verifikasi.' '.$progress."</td>
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

<script type="text/javascript">

    var table = $("#tbl_pendaftar").DataTable();   
    $('#tbl_pendaftar tbody').on( 'click', 'tr', function () {
        console.log( table.row( this ).data() );
    });

</script>