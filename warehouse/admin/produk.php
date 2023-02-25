<h2>Data Produk</h2>

<table class="table table-bordered" id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Jenis Barang</th>
			<th>Harga Jual</th>
			<th>Modal Pembuatan</th>
			<th>Stok Barang</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>

		<?php $no = 1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM produk LEFT JOIN kategori ON produk.id_kategori=kategori.id_kategori") ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $pecah["nama_produk"]; ?></td>
				<td><?= $pecah['nama_kategori']; ?></td>
				<td>Rp. <?= number_format($pecah["harga_produk"]); ?>,-</td>
				<td>Rp. <?= number_format($pecah["modal"]); ?>,-</td>
				<td><?= $pecah['stok_produk']; ?></td>
				<td>
					<a href="index.php?halaman=ubahproduk&id=<?= $pecah['id_produk']; ?>" class="btn btn-warning btn-xs">ubah</a> |
					<a href="index.php?halaman=hapusproduk&id=<?= $pecah['id_produk']; ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs">hapus</a>
				</td>
			</tr>
			<?php $no++; ?>
		<?php } ?>

	</tbody>
</table>

<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data Produk</a>