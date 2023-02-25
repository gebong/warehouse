<h2>Data Supplier</h2>

<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Jenis Barang</th>
            <th>Nama Website</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM supplier"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama'] ?></td>
                <td><?php echo $pecah['alamat'] ?></td>
                <td><?php echo $pecah['telepon'] ?></td>
                <td><?php echo $pecah['jenis_barang'] ?></td>
                <td><?php echo $pecah['website'] ?></td>
                <td>
                    <a href="index.php?halaman=hapussupplier&id=<?php echo $pecah['id_supp']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    <a href="index.php?halaman=ubahsupplier&id=<?php echo $pecah['id_supp']; ?>" class="btn btn-success btn-sm">Ubah</a>

                </td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>
<a href="index.php?halaman=tambahsupplier" class="btn btn-primary">Tambah Supplier</a>