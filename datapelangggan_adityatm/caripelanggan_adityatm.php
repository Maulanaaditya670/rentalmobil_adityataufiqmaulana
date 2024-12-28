<?php
include "../config/koneksi.php";
$i = 0;
$keyword = mysqli_real_escape_string($koneksi, $_GET['keyword']);
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_adityataufiqmaulana WHERE nama_adityataufiqmaulana LIKE '%$keyword%'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Data Pelanggan</title>
    <link rel="icon"
      type="image/png"
      href="../assets/car_rental.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4">
            <?php include "../menu_adityatm/menu_adityatm.php;"?>
            </div>
        </div>
        <div class="card border-success mb-3">
            <div class="card-header">
                Hasil Pencarian : keyword "<b><?=$keyword?></b>"
            </div>
            <div class="card-body text-success">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <a href='tampilpelanggan_adityatm.php' class='btn btn-warning'>Kembali</a>
                    </div>
                    <div class="col-md-6">
                        <form action="caripelanggan_adityatm.php" method="GET">
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
                                <th>No</th>
                                <th>NIK KTP</th>
                                <th>Nama Lengkap    </th>
                                <th>No HP </th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($data = mysqli_fetch_array($tampil)) { $i++; ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$data['nik_ktp_adityataufiqmaulana']?></td>
                                    <td><?=$data['nama_adityataufiqmaulana']?></td>
                                    <td><?=$data['no_hp_adityataufiqmaulana']?></td>
                                    <td><?=$data['alamat_adityataufiqmaulana']?></td>
                                    <td>
                                    <a
                                        href="editpelanggan_adityatm.php?nik_ktp_adityataufiqmaulana=<?=$data["nik_ktp_adityataufiqmaulana"]?>"
                                        class="btn btn-primary"
                                        >Edit</a
                                    >
                                    <button
                                        class="btn btn-danger btn-delete"
                                        data-id="<?=$data["nik_ktp_adityataufiqmaulana"]?>"
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
                "deletepelanggan_adityatm.php?nik_ktp_adityataufiqmaulana=" + id;
            }
          });
        });
      });
    </script>
</body>
</html>