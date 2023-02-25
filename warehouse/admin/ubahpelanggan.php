<h2>Ubah Pelanggan</h2>


<?php
$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_pelanggan']; ?>">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $pecah['alamat']; ?>">
        </div>
        <div class="form-group">
            <label>No Telepon </label>
            <input type="text" name="telp" class="form-control" value="<?php echo $pecah['telepon_pelanggan']; ?>">
        </div>

        <button class="btn btn-primary" name="ubah">Ubah</button>

</form>

<?php
if (isset($_POST['ubah'])) {

    $koneksi->query("UPDATE pelanggan SET nama_pelanggan='$_POST[nama]',alamat='$_POST[alamat]',telepon_pelanggan='$_POST[telp]' WHERE id_pelanggan='$_GET[id]'");

    echo "<script>alert('pelanggan sudah diubah');</script>";
    echo "<script>location='index.php?halaman=pelanggan';</script>";
}

?>