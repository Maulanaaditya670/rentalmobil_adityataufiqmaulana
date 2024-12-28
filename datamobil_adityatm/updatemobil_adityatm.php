<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_plat_adityataufiqmaulana_tmp=$_POST['no_plat_adityataufiqmaulana_tmp'];
$no_plat_adityataufiqmaulana=$_POST['no_plat_adityataufiqmaulana'];
$nama_mobil_adityataufiqmaulana=$_POST['nama_mobil_adityataufiqmaulana'];
$brand_mobil_adityataufiqmaulana=$_POST['brand_mobil_adityataufiqmaulana'];
$tipe_transmisi_adityataufiqmaulana=$_POST['tipe_transmisi_adityataufiqmaulana'];

// Menjalankan kueri update
$update=mysqli_query($koneksi,"UPDATE tbl_mobil_adityataufiqmaulana SET
no_plat_adityataufiqmaulana='$no_plat_adityataufiqmaulana',
nama_mobil_adityataufiqmaulana='$nama_mobil_adityataufiqmaulana',
brand_mobil_adityataufiqmaulana='$brand_mobil_adityataufiqmaulana',
tipe_transmisi_adityataufiqmaulana='$tipe_transmisi_adityataufiqmaulana'
WHERE no_plat_adityataufiqmaulana='$no_plat_adityataufiqmaulana_tmp'
");
echo "<html><head><script src='assets/sweetalert2.all.min.js'></script></head><body>";
if($update){
    // Jika proses update berhasil
    echo "
    <script src='../assets/sweetalert2.all.min.js'></script>
    <script>
        Swal.fire({
            title: 'Edit Berhasil!',
            text: 'Data mobil berhasil diperbarui.',
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
