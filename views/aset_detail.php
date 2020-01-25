<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Asset Kantor</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT * FROM aset WHERE id_aset ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama Barang</td> <td><?= $data['nama_barang'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Beli</td> <td><?= $data['tanggal_beli'] ?></td>
                        </tr>
						<tr>
                            <td>Merek</td> <td><?= $data['merek'] ?></td>
                        </tr>
						<tr>
                            <td>Jumlah</td> <td><?= $data['jumlah'] ?></td>
                        </tr>
						<tr>
                            <td>Satuan</td> <td><?= $data['satuan'] ?></td>
                        </tr>
                        <tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['ket'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=aset&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Asset Kantor </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

