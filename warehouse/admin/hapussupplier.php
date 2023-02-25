<?php
$koneksi->query("DELETE FROM supplier WHERE id_supp='$_GET[id]'");

echo "<script>alert('supplier terhapus');</script>";
echo "<script>location='index.php?halaman=supplier';</script>";
