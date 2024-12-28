<?php
include "../config/koneksi.php";
$i = 0;
$keyword = mysqli_real_escape_string($koneksi, $_GET['keyword']);
$tampil = mysqli_query(
    $koneksi, 
    "SELECT * FROM tbl_rental_adityataufiqmaulana INNER JOIN tbl_pelanggan_adityataufiqmaulana 
            ON tbl_rental_adityataufiqmaulana.nik_ktp_adityataufiqmaulana = tbl_pelanggan_adityataufiqmaulana.nik_ktp_adityataufiqmaulana
            INNER JOIN tbl_mobil_adityataufiqmaulana ON tbl_rental_adityataufiqmaulana.no_plat_adityataufiqmaulana = tbl_mobil_adityataufiqmaulana.no_plat_adityataufiqmaulana 
            WHERE nama_adityataufiqmaulana LIKE '%$keyword%'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Data Rental</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4">
            <?php include "../menu_adityatm/menu_adityatm.php";?>
            </div>
        </div>
        <div class="card border-success mb-3">
            <div class="card-header">
                Hasil Pencarian : keyword "<b><?=$keyword?></b>"
            </div>
            <div class="card-body text-success">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <a href='tampilrental_adityatm.php' class='btn btn-warning'>Kembali</a>
                    </div>
                    <div class="col-md-6">
                        <form action="carirental_adityatm.php" method="GET">
                            <div class="btn-group float-end" role="group">
                                <input type="text" name="keyword" class="form-control" placeholder="Masukan keyword">
                                <button type="button" class="btn btn-primary">Pencarian</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                <th>No Trx</th>
                                <th>Tanggal</th>
                                <th>Pelanggan</th>
                                <th>Mobil</th>
                                <th>Lama</th>
                                <th>Harga</th>
                                <th>Total Bayar</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($data = mysqli_fetch_array($tampil)) { $i++; ?>
                                <tr>
                                <td><?=$data["no_trx_adityataufiqmaulana"]?></td>
                                <td><?=$data["tgl_rental_adityataufiqmaulana"]?></td>
                                <td><?=$data["nama_adityataufiqmaulana"]?></td>
                                <td><?=$data["nama_mobil_adityataufiqmaulana"]?> <?=$data["no_plat_adityataufiqmaulana"]?></td>
                                <td><?=$data["lama_rental_adityataufiqmaulana"]?> Hari</td>
                                <td><?=$data["bayar_adityataufiqmaulana"]?></td>
                                <td><?=$data["total_bayar_adityataufiqmaulana"]?></td>
                                    <td>
                                    <a
                                        href="editrental_adityatm.php?no_plat_adityataufiqmaulana=<?=$data["no_plat_adityataufiqmaulana"]?>"
                                        class="btn btn-primary">Edit</a>
                                    <button
                                        class="btn btn-danger btn-delete"
                                        data-id="<?=$data["no_plat_adityataufiqmaulana"]?>"
                                    >
                                     Hapus
                                    </button>
                                    </td>
                                </tr>
                            <?php 
                            } 
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      // Event listener untuk tombol hapus
      document.querySelectorAll(".btn-delete").forEach((button) => {
        button.addEventListener("click", function () {
          const id = this.getAttribute("data-id");
          Swal.fire({
            title: "Apakah Anda Yakin?",
            text: "Data ini akan dihapus secara permanen!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus!",
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href =
                "deleterental_adityatm.php?no_plat_adityataufiqmaulana=" + id;
            }
          });
        });
      });
    </script>
</body>
</html>