<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Asset</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM aset WHERE id_aset='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Asset Kantor </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA ASSET</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nama Barang</td> <td><?= $data['nama_barang'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Tanggal Beli</td> <td><?= $data['tanggal_beli'] ?></td>
                                </tr>
                                <tr>
                                    <td>Merek</td> <td><?= $data['merek'] ?></td>
                                </tr>
								<tr>
                                    <td>Jumlah</td> <td><?= $data['jumlah'] ?></td>
                                </tr>
								<tr>
                                    <td>Unit</td> <td><?= $data['satuan'] ?></td>
                                </tr>
								<tr>
                                    <td>Keterangan</td> <td><?= $data['ket'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Staf Pengelolaan Pemanfaat Asset Kantor<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>