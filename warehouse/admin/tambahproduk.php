<?php
$datakategori = [];
$ambil = $koneksi->query("SELECT * FROM kategori");
while ($tiap = $ambil->fetch_assoc()) {
	$datakategori[] = $tiap;
}

// echo "<pre>";
// print_r($datakategori);
// echo "</pre>";

?>


<h2>Tambah Produk</h2>

<div class="row">
	<div class="col-md-8">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<select name="id_kategori" id="" class="form-control">
					<option value="">-Pilih kategori-</option>
					<?php foreach ($datakategori as $key => $value) : ?>
						<option value="<?= $value['id_kategori'] ?>"><?= $value['nama_kategori']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label>Harga (Rp)</label>
				<input type="number" name="harga" class="form-control">
			</div>
			<div class="form-group">
				<label>Modal (Rp)</label>
				<input type="number" name="berat" class="form-control">
			</div>
			<div class="form-group">
				<label>Stok</label>
				<input type="number" name="stok" class="form-control">
			</div>
			<button name="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
</div>

<?php
if (isset($_POST["submit"])) {
	// $latest = intval($koneksi->query(" SELECT id_produk FROM produk ORDER BY id_produk DESC LIMIT 1")) + 1;
	// menyimpan ke database
	$result = $koneksi->query("INSERT INTO produk VALUES('$_POST[id_kategori]', '$_POST[nama]', '$_POST[harga]', '$_POST[berat]', '$_POST[stok]')");

	// Mendapatkan id_produk barusan
	$id_produk_barusan = $koneksi->insert_id;

	// Membuat perulangan untuk memasukkan nama nama foto ke tabel
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=produk'>";
}
?>