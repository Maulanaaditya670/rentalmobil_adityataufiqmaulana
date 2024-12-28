<?php 
session_start();
session_destroy();
echo "<html><head><script src='assets/sweetalert2.all.min.js'></script></head><body>";
echo "<script>
        Swal.fire({
            title: 'Logout Berhasil!',
            text: 'Anda telah keluar dari sistem',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../rentalmobil_adityataufiqmaulana/login.php';
            }
        });
</script>";

echo "</body></html>";
?>