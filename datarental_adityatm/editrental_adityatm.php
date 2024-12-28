<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Rental</title>
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
            <div class="card-header">Edit Data Rental</div>
            <div class="card-body text-success">
                <div class="row">
                    <div class="col-md-5">
                        <form action="updaterental_adityatm.php" method="POST">
                            <?php
                            include "../config/koneksi.php";
                            $no_trx_adityataufiqmaulana=$_GET['no_trx_adityataufiqmaulana'];
                            $tampil=mysqli_query(
                            $koneksi,
                            "SELECT * FROM tbl_rental_adityataufiqmaulana INNER JOIN tbl_pelanggan_adityataufiqmaulana ON
                            tbl_rental_adityataufiqmaulana.nik_ktp_adityataufiqmaulana = tbl_pelanggan_adityataufiqmaulana.nik_ktp_adityataufiqmaulana
                            INNER JOIN tbl_mobil_adityataufiqmaulana 
                            ON tbl_rental_adityataufiqmaulana.no_plat_adityataufiqmaulana = tbl_mobil_adityataufiqmaulana.no_plat_adityataufiqmaulana
                            WHERE no_trx_adityataufiqmaulana='$no_trx_adityataufiqmaulana'");
                            $data=mysqli_fetch_array($tampil);
                            ?>
                            <div class="mb-3 mt-3">
                                <label for="no_trx_adityataufiqmaulana" class="form-label">No Trx : </label>
                                <input type="hidden" name="no_trx_adityataufiqmaulana_tmp" value="<?=$data['no_trx_adityataufiqmaulana']?>" 
                                class="form-control" id="no_trx_adityataufiqmaulana_tmp" >
                                <input type="text" name="no_trx_adityataufiqmaulana" value="<?=$data['no_trx_adityataufiqmaulana']?>" 
                                class="form-control" id="no_trx_adityataufiqmaulana" readonly style="cursor: not-allowed;" >
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Tanggal : </label>
                                <input type="date" name="tgl_rental_adityataufiqmaulana" id="tgl_rental_adityataufiqmaulana"
                                class="form-control" value="<?=$data['tgl_rental_adityataufiqmaulana']?>">
                            </div>
                            <div class="mb-3">
                                <label for="brand" class="form-label">Pelanggan : </label>
                                <select name="nik_ktp_adityataufiqmaulana" id="nik_ktp_adityataufiqmaulana" class="form-control">
                                <option value="<?=$data['nik_ktp_adityataufiqmaulana']?>">
                                    <?=$data['nik_ktp_adityataufiqmaulana']?> - <?=$data['nama_adityataufiqmaulana']?>
                                </option>
                                <option value=""> -- Pilih Pelanggan --</option>
                                <?php
                                include "../config/koneksi.php";
                                $tampilpel=mysqli_query($koneksi,"SELECT * FROM tbl_pelanggan_adityataufiqmaulana");
                                while($datapel=mysqli_fetch_array($tampilpel)){
                                echo "<option value='$datapel[nik_ktp_adityataufiqmaulana]'>$datapel[nik_ktp_adityataufiqmaulana] - $datapel[nama_adityataufiqmaulana]</option>";
                                }
                                ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="mobil" class="form-label">Mobil : </label>
                                <select name="no_plat_adityataufiqmaulana" id="no_plat_adityataufiqmaulana" class="form-control">
                                    <option value="<?=$data['no_plat_adityataufiqmaulana']?>">
                                        <?=$data['no_plat_adityataufiqmaulana']?> - <?=$data['nama_mobil_adityataufiqmaulana']?>
                                    </option>
                                    <option value="">-- Pilih Mobil --</option>
                                    <?php
                                    include "../config/koneksi.php";
                                    $tampilmobil=mysqli_query($koneksi,"SELECT * FROM tbl_mobil_adityataufiqmaulana");
                                    while($datamobil=mysqli_fetch_array($tampilmobil)){
                                    echo "<option value='$datamobil[no_plat_adityataufiqmaulana]'>$datamobil[no_plat_adityataufiqmaulana] - $datamobil[nama_mobil_adityataufiqmaulana]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="lama" class="form-label">Lama :</label>
                                <input type="number" name="lama_rental_adityataufiqmaulana" id="lama_rental_adityataufiqmaulana"
                                class="form-control" value="<?=$data['lama_rental_adityataufiqmaulana']?>">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga :</label>
                                <input type="number" name="bayar_adityataufiqmaulana" id="bayar_adityataufiqmaulana"
                                class="form-control" value="<?=$data['bayar_adityataufiqmaulana']?>">
                            </div>
                            <div class="mb-3">
                                <label for="total" class="form-label">Total Bayar :</label>
                                <input type="number" name="total_bayar_adityataufiqmaulana" id="total_bayar_adityataufiqmaulana"
                                class="form-control" value="<?=$data['total_bayar_adityataufiqmaulana']?>">
                            </div>
                            <div class="mb-3">
                                <a href="tampilrental_adityatm.php" class="btn btn-warning">Kembali</a>
                                <button type="submit" class="btn btn-primary">Perbaharui</button>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    // Ambil elemen input
    const lamaRentalInput = document.getElementById("lama_rental_adityataufiqmaulana");
    const hargaRentalInput = document.getElementById("bayar_adityataufiqmaulana");
    const totalBayarInput = document.getElementById("total_bayar_adityataufiqmaulana");

    // Fungsi untuk menghitung total bayar
    function hitungTotalBayar() {
        const lamaRental = parseInt(lamaRentalInput.value) || 0; // Jika kosong, set ke 0
        const hargaRental = parseInt(hargaRentalInput.value) || 0; // Jika kosong, set ke 0
        const totalBayar = lamaRental * hargaRental;

        // Set hasil ke input Total Bayar
        totalBayarInput.value = totalBayar;
    }

    // Tambahkan event listener untuk input Lama Rental dan Harga Rental
    lamaRentalInput.addEventListener("input", hitungTotalBayar);
    hargaRentalInput.addEventListener("input", hitungTotalBayar);
    </script>
</body>
</html>