<?php
include "../config/koneksi.php";

// Menjalankan query delete
$delete=mysqli_query($koneksi,"DELETE FROM tbl_mobil_adityataufiqmaulana WHERE no_plat_adityataufiqmaulana='$_GET[no_plat_adityataufiqmaulana]'");

echo "<html><head><script src='assets/sweetalert2.all.min.js'></script></head><body>";
if($delete){
    // Jika proses update berhasil
    echo "
    <script src='../assets/sweetalert2.all.min.js'></script>
    <script>
        Swal.fire({
            title: 'Delete Berhasil!',
            text: 'Data mobil berhasil dihapus.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'tampilmobil_adityatm.php';
            }
        });
    </script>
    ";
} else {
    // Jika proses update gagal
    echo "
    <script src='../assets/sweetalert2.all.min.js'></script>
    <script>
        Swal.fire({
            title: 'Gagal!',
            text: 'Gagal memperbarui data mobil.',
            icon: 'error',
            confirmButtonText: 'Coba Lagi'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'tampilmobil_adityatm.php';
            }
        });
    </script>
    ";
}
echo "</body></html>";
?>