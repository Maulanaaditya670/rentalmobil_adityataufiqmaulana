<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mobil</title>
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
            <div class="card-header">Edit Data Mobil</div>
            <div class="card-body text-success">
                <div class="row">
                    <div class="col-md-5">
                        <form action="updatemobil_adityatm.php" method="POST">
                            <?php
                            include "../config/koneksi.php";
                            $no_plat_adityataufiqmaulana=$_GET['no_plat_adityataufiqmaulana'];
                            $tampil=mysqli_query($koneksi,"SELECT * FROM tbl_mobil_adityataufiqmaulana WHERE no_plat_adityataufiqmaulana='$no_plat_adityataufiqmaulana'");
                            $data=mysqli_fetch_array($tampil);
                            ?>
                            <div class="mb-3 mt-3">
                                <label for="no_plat_adityataufiqmaulana" class="form-label">No Plat Mobil : </label>
                                <input type="hidden" name="no_plat_adityataufiqmaulana_tmp" value="<?=$data['no_plat_adityataufiqmaulana']?>" 
                                class="form-control" id="no_plat_adityataufiqmaulana_tmp" required>
                                <input type="text" name="no_plat_adityataufiqmaulana" value="<?=$data['no_plat_adityataufiqmaulana']?>" 
                                class="form-control" id="no_plat_adityataufiqmaulana" placeholder="Masukan No Plat Mobil" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Mobil : </label>
                                <select name="nama_mobil_adityataufiqmaulana" id="nama_mobil_adityataufiqmaulana"
                                class="form-control">
                                <option value="<?=$data['nama_mobil_adityataufiqmaulana']?>"><?=$data['nama_mobil_adityataufiqmaulana']?></option>
                                <option value="">-- Pilih Nama Mobil --</option>
                                <option value="Avanza">Avanza</option>
                                <option value="Brio">Brio</option>
                                <option value="Apv">APV</option>
                                <option value="Grandlivina">GrandLivina</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="brand" class="form-label">Brand Mobil : </label>
                                <select name="brand_mobil_adityataufiqmaulana" id="brand_mobil_adityataufiqmaulana"
                                class="form-control">
                                <option value="<?=$data['brand_mobil_adityataufiqmaulana']?>">
                                <?=$data['brand_mobil_adityataufiqmaulana']?>
                                </option>
                                <option value="">-- Pilih Brand Mobil --</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Honda">Honda</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Nissan">Nissan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="transmisi" class="form-label">Tipe Transmisi : </label>
                                <select name="tipe_transmisi_adityataufiqmaulana" id="tipe_transmisi_adityataufiqmaulana"
                                class="form-control">
                                <option value="<?=$data['tipe_transmisi_adityataufiqmaulana']?>">
                                    <?=$data['tipe_transmisi_adityataufiqmaulana']?>
                                </option>
                                <option value="">-- Pilih Tipe Transmisi Mobil --</option>
                                <option value="Matic">Matic</option>
                                <option value="Manual">Manual</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <a href="tampilmobil_adityatm.php" class="btn btn-warning">Kembali</a>
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