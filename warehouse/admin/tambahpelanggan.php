<?php
$datakategori = [];
$ambil = $koneksi->query("SELECT * FROM pelanggan");
while ($tiap = $ambil->fetch_assoc()) {
    $datakategori[] = $tiap;
}

// echo "<pre>";
// print_r($datakategori);
// echo "</pre>";

?>


<h2>Tambah Pelanggan</h2>

<div class="row">
    <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Konsumen</label>
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

            <button name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<?php
if (isset($_POST["submit"])) {

    // menyimpan ke database
    $koneksi->query("INSERT INTO pelanggan
		(nama_pelanggan,alamat, telepon_pelanggan)
		VALUES('$_POST[nama]','$_POST[alamat]','$_POST[telp]')");
    // Mendapatkan id_produk barusan
    $id_produk_barusan = $koneksi->insert_id;

    // Membuat perulangan untuk memasukkan nama nama foto ke tabel
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=pelanggan'>";
}
?>