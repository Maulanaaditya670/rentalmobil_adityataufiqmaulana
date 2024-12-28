<?php
session_start();

if (!isset($_SESSION['username_adityataufiqmaulana']) || $_SESSION['level_adityataufiqmaulana'] != 'Admin') {
    echo "<script>
            alert('Anda tidak memiliki akses edit data!');
            window.location='../datapelangggan_adityatm/tampilpelanggan_adityatm.php';
          </script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pelanggan</title>
    <link rel="icon"
      type="image/png"
      href="../assets/car_rental.png" />
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4">
                <?php include "../menu_adityatm/menu_adityatm.php";?>
            </div>
        </div>
        <div class="card border-success mb-3">
            <div class="card-header">Edit Data Pelanggan</div>
            <div class="card-body text-success">
                <div class="row">
                    <div class="col-md-5">
                        <form action="updatepelanggan_adityatm.php" method="POST">
                            <?php
                            include "../config/koneksi.php";
                            $nik_ktp_adityataufiqmaulana=$_GET['nik_ktp_adityataufiqmaulana'];
                            $tampil=mysqli_query($koneksi,"SELECT * FROM tbl_pelanggan_adityataufiqmaulana WHERE nik_ktp_adityataufiqmaulana='$nik_ktp_adityataufiqmaulana'");
                            $data=mysqli_fetch_array($tampil);
                            ?>
                            <div class="mb-3 mt-3">
                                <label for="nik_ktp_adityataufiqmaulana" class="form-label">NIK KTP : </label>
                                <input type="hidden" name="nik_ktp_adityataufiqmaulana_tmp" value="<?=$data['nik_ktp_adityataufiqmaulana']?>" 
                                class="form-control" id="nik_ktp_adityataufiqmaulana_tmp" required>
                                <input type="text" name="nik_ktp_adityataufiqmaulana" value="<?=$data['nik_ktp_adityataufiqmaulana']?>" 
                                class="form-control" id="nik_ktp_adityataufiqmaulana" placeholder="Masukan NIK KTP" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap : </label>
                                <input type="text" name="nama_adityataufiqmaulana" id="nama_adityataufiqmaulana" value="<?=$data['nama_adityataufiqmaulana']?>" 
                                class="form-control" placeholder="Masukan Nama Lengkap" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No HP</label>
                                <input type="text" name="no_hp_adityataufiqmaulana" id="no_hp_adityataufiqmaulana" value="<?=$data['no_hp_adityataufiqmaulana']?>"
                                class="form-control" placeholder="Masukan No HP" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat : </label>
                                <input type="text" name="alamat_adityataufiqmaulana" id="alamat_adityataufiqmaulana" value="<?=$data['alamat_adityataufiqmaulana']?>" 
                                class="form-control" placeholder="Masukan Alamat" required>
                            </div>
                            <div class="mb-3">
                                <a href="tampilpelanggan_adityatm.php" class="btn btn-warning">Kembali</a>
                                <button type="submit" class="btn btn-primary">Perbaharui</button>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>