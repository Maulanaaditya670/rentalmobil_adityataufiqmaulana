<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_trx_adityataufiqmaulana_tmp=$_POST['no_trx_adityataufiqmaulana_tmp'];
$no_trx_adityataufiqmaulana=$_POST['no_trx_adityataufiqmaulana'];
$tgl_rental_adityataufiqmaulana=$_POST['tgl_rental_adityataufiqmaulana'];
$nik_ktp_adityataufiqmaulana=$_POST['nik_ktp_adityataufiqmaulana'];
$no_plat_adityataufiqmaulana=$_POST['no_plat_adityataufiqmaulana'];
$lama_rental_adityataufiqmaulana=$_POST['lama_rental_adityataufiqmaulana'];
$bayar_adityataufiqmaulana=$_POST['bayar_adityataufiqmaulana'];
$total_bayar_adityataufiqmaulana=$_POST['total_bayar_adityataufiqmaulana'];

// Menjalankan kueri update
$update=mysqli_query($koneksi,"UPDATE tbl_rental_adityataufiqmaulana SET
no_trx_adityataufiqmaulana='$no_trx_adityataufiqmaulana',
tgl_rental_adityataufiqmaulana='$tgl_rental_adityataufiqmaulana',
nik_ktp_adityataufiqmaulana='$nik_ktp_adityataufiqmaulana',
no_plat_adityataufiqmaulana='$no_plat_adityataufiqmaulana',
lama_rental_adityataufiqmaulana='$lama_rental_adityataufiqmaulana',
bayar_adityataufiqmaulana='$bayar_adityataufiqmaulana',
total_bayar_adityataufiqmaulana='$total_bayar_adityataufiqmaulana'
WHERE no_trx_adityataufiqmaulana='$no_trx_adityataufiqmaulana_tmp'
");
echo "<html><head><script src='assets/sweetalert2.all.min.js'></script></head><body>";
if($update){
    // Jika proses update berhasil
    echo "
    <script src='../assets/sweetalert2.all.min.js'></script>
    <script>
        Swal.fire({
            title: 'Edit Berhasil!',
            text: 'Data rental berhasil diperbarui.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'tampilrental_adityatm.php';
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
            text: 'Gagal memperbarui data rental.',
            icon: 'error',
            confirmButtonText: 'Coba Lagi'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'tampilrental_adityatm.php';
            }
        });
    </script>
    ";
}
echo "</body></html>";
?>
