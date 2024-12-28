<?php
session_start();
include 'config/koneksi.php'; // Menghubungkan dengan file koneksi.php

// Tampilkan error untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ambil data dari form login
$username = $_POST['username_adityataufiqmaulana'];
$password = md5($_POST['password_adityataufiqmaulana']);
// Query untuk memeriksa username dan password
$cari = mysqli_query($koneksi, "SELECT * FROM tbl_user_adityataufiqmaulana WHERE username_adityataufiqmaulana='$username' AND password_adityataufiqmaulana='$password'");
$data = mysqli_fetch_array($cari);


echo "<html><head><script src='assets/sweetalert2.all.min.js'></script></head><body>";

if (!empty($data['username_adityataufiqmaulana'])) {
    // Jika login berhasil
    $_SESSION['username_adityataufiqmaulana'] = $data['username_adityataufiqmaulana'];
    $_SESSION['password_adityataufiqmaulana'] = $data['password_adityataufiqmaulana'];
    $_SESSION['nama_lengkap_adityataufiqmaulana'] = $data['nama_lengkap_adityataufiqmaulana'];
    $_SESSION['level_adityataufiqmaulana'] = $data['level_adityataufiqmaulana'];
    $nama_lengkap = $data['nama_lengkap_adityataufiqmaulana'];
    echo "<script>
        Swal.fire({
            title: 'Login Berhasil!',
            text: 'Selamat datang, $nama_lengkap',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../rentalmobil_adityataufiqmaulana/menu_adityatm/menu_adityatm.php';
            }
        });
    </script>";
} else {
    // Jika login gagal
    echo "<script>
        Swal.fire({
            title: 'Login Gagal!',
            text: 'Username atau password salah.',
            icon: 'error',
            confirmButtonText: 'Coba Lagi'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'index.php';
            }
        });
    </script>";
}

// Tutup HTML
echo "</body></html>";
?>
