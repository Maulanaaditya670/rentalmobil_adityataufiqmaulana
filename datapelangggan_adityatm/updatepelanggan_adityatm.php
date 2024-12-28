<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nik_ktp_adityataufiqmaulana_tmp=$_POST['nik_ktp_adityataufiqmaulana_tmp'];
$nik_ktp_adityataufiqmaulana=$_POST['nik_ktp_adityataufiqmaulana'];
$nama_adityataufiqmaulana=$_POST['nama_adityataufiqmaulana'];
$no_hp_adityataufiqmaulana=$_POST['no_hp_adityataufiqmaulana'];
$alamat_adityataufiqmaulana=$_POST['alamat_adityataufiqmaulana'];

// Menjalankan kueri update
$update=mysqli_query($koneksi,"UPDATE tbl_pelanggan_adityataufiqmaulana SET
nik_ktp_adityataufiqmaulana='$nik_ktp_adityataufiqmaulana',
nama_adityataufiqmaulana='$nama_adityataufiqmaulana',
no_hp_adityataufiqmaulana='$no_hp_adityataufiqmaulana',
alamat_adityataufiqmaulana='$alamat_adityataufiqmaulana'
WHERE nik_ktp_adityataufiqmaulana='$nik_ktp_adityataufiqmaulana_tmp'
");
echo "<html><head><script src='assets/sweetalert2.all.min.js'></script></head><body>";
if($update){
    // Jika proses update berhasil
    echo "
    <script src='../assets/sweetalert2.all.min.js'></script>
    <script>
        Swal.fire({
            title: 'Edit Berhasil!',
            text: 'Data pelanggan berhasil diperbarui.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'tampilpelanggan_adityatm.php';
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
            text: 'Gagal memperbarui data pelanggan.',
            icon: 'error',
            confirmButtonText: 'Coba Lagi'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'tampilpelanggan_adityatm.php';
            }
        });
    </script>
    ";
}
echo "</body></html>";
?>
