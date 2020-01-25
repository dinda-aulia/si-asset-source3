<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM aset WHERE id_aset ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Asset Kantor</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                        <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" value="<?=$data['nama_barang']?>"class="form-control" id="inputEmail3" placeholder="Nama Barang">
                            </div>
                        </div>
						
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Beli</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_beli" value="<?=$data['tanggal_beli']?>"class="form-control" id="inputEmail3" placeholder="">
                            </div>
                           
                        </div>
                        <!--end tanggal lahir-->           

                        <div class="form-group">
                            <label for="merek" class="col-sm-3 control-label">Merek</label>
                            <div class="col-sm-9">
                                <input type="text" name="merek" value="<?=$data['merek']?>" class="form-control" id="inputPassword3" placeholder="Merek">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" value="<?=$data['jumlah']?>" class="form-control" id="inputPassword3" placeholder="Penerima Berkas">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="satuan" class="col-sm-3 control-label">Satuan</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="satuan" class="form-control">
									<option value="Buah">Buah</option>
									<option value="Unit">Unit</option>
								</select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Ada</option>
									<option value="Digunakan">Digunakan</option>
									<option value="Digunakan">Rusak</option>
								</select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Asset</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Asset
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nama_barang=$_POST['nama_barang'];
  	$tanggal_beli=$_POST['tanggal_beli'];
  	$merek=$_POST['merek'];
	$jumlah=$_POST['jumlah'];
  	$satuan=$_POST['satuan'];
  	$status=$_POST['status'];
	$ket=$_POST['ket'];
    
    //buat sql
    $sql="UPDATE aset SET nama_barang='$nama_barang',tanggal_beli='$tanggal_beli',merek='$merek',jumlah='$jumlah',satuan='$satuan',status='$status',ket='$ket' WHERE id_aset ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=aset&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



