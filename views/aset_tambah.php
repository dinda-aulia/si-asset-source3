<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Aset Kantor</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">nama_barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" class="form-control" id="inputEmail3" placeholder="Inputkan nama barang" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tanggal_beli" class="col-sm-3 control-label">Tanggal beli</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_beli" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal beli" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="merek" class="col-sm-3 control-label">Merek</label>
                            <div class="col-sm-9">
                                <input type="text" name="merek" class="form-control" id="inputPassword3" placeholder="Inputkan Merek" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" class="form-control" id="inputPassword3" placeholder="Inputkan Jumlah" required>
                            </div>
                        </div>


                        <!--Satuan-->

                        <div class="form-group">
                            <label for="satuan" class="col-sm-3 control-label">Satuan</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="satuan" class="form-control">
									<option value="Unit">Unit</option>
									<option value="Buah">Buah</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Satuan-->

                         <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Ada</option>
									<option value="Digunakan">Digunakan</option>
									<option value="Rusak">Rusak</option>
								</select>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Asset</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=aset&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Aset Kantor
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$namabrg=$_POST['nama_barang'];
  	$tglbeli=$_POST['tanggal_beli'];
  	$merek=$_POST['merek'];
	$jumlah=$_POST['jumlah'];
  	$satuan=$_POST['satuan'];
  	$status=$_POST['status'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO aset VALUES ('','$namabrg','$tglbeli','$merek','$jumlah','$satuan','$status','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=aset&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
