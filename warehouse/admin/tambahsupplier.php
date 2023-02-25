<?php
$datakategori = [];
$ambil = $koneksi->query("SELECT * FROM supplier");
while ($tiap = $ambil->fetch_assoc()) {
    $datakategori[] = $tiap;
}

// echo "<pre>";
// print_r($datakategori);
// echo "</pre>";

?>


<h2>Tambah Supplier</h2>

<div class="row">
    <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Supplier</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="form-group">
                <label>Alamat </label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="number" name="telp" class="form-control">
            </div>

            <div class="form-group">
                <label>Nama Website</label>
                <input type="text" name="web" class="form-control">
            </div>
            <div class="form-group">
                <label>Jenis Barang</label>
                <input type="text" name="jenis" class="form-control">
            </div>

            <button name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<?php
if (isset($_POST["submit"])) {

    // menyimpan ke database
    $koneksi->query("INSERT INTO supplier
		(nama,alamat, telepon,website,jenis_barang)
		VALUES('$_POST[nama]','$_POST[alamat]','$_POST[telp]','$_POST[web]','$_POST[jenis]')");
    // Mendapatkan id_produk barusan
    $id_produk_barusan = $koneksi->insert_id;

    // Membuat perulangan untuk memasukkan nama nama foto ke tabel
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=supplier'>";
}
?>