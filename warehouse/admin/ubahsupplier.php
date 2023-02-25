<h2>Ubah Supplier</h2>


<?php
$ambil = $koneksi->query("SELECT * FROM supplier WHERE id_supp='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group">
            <label>Nama Supplier</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama']; ?>">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $pecah['alamat']; ?>">
        </div>
        <div class="form-group">
            <label>No Telepon </label>
            <input type="text" name="telp" class="form-control" value="<?php echo $pecah['telepon']; ?>">
        </div>
        <div class="form-group">
            <label>Nama Website</label>
            <input type="text" name="web" class="form-control" value="<?php echo $pecah['website']; ?>">
        </div>

        <div class="form-group">
            <label>Jenis Barang</label>
            <input type="text" name="jenis" class="form-control" value="<?php echo $pecah['jenis_barang']; ?>">
        </div>


        <button class="btn btn-primary" name="ubah">Ubah</button>

</form>

<?php
if (isset($_POST['ubah'])) {

    $koneksi->query("UPDATE supplier SET nama='$_POST[nama]',alamat='$_POST[alamat]',telepon='$_POST[telp]',website='$_POST[web]',jenis_barang='$_POST[jenis]' WHERE id_supp='$_GET[id]'");

    echo "<script>alert('supplier sudah diubah');</script>";
    echo "<script>location='index.php?halaman=supplier';</script>";
}

?>