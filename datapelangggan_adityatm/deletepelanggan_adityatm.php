<?php
include "../config/koneksi.php";

// Menjalankan query delete
$delete=mysqli_query($koneksi,"DELETE FROM tbl_pelanggan_adityataufiqmaulana WHERE nik_ktp_adityataufiqmaulana='$_GET[nik_ktp_adityataufiqmaulana]'");
if ($result) {
    header("Location: tampilpelanggan_adityatm.php?status=error");
} else {
    header("Location: tampilpelanggan_adityatm.php?status=success");
}

?>