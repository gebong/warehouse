<?php

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM produk WHERE id_produk = '$_GET[id]'");

echo "<script>alert('Produk terhapus');</script>";
echo "<script>location='index.php?halaman=produk';</script>";
