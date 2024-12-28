<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Mobil</title>
    <link rel="icon"
      type="image/png"
      href="../assets/car_rental.png" />
    <script src="../assets/sweetalert2.all.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mb-4">
        <?php include "../menu_adityatm/menu_adityatm.php";?>
        </div>
      </div>
      <div class="card border-success mb-3">
        <div class="card-header">Data Mobil</div>
        <div class="card-body text-success">
          <div class="row">
            <div class="col-md-6 mb-2">
              <a
                href="tambahmobil_adityatm.php"
                class="btn btn-primary"
                >Tambah Data</a
              >
            </div>
            <div class="col-md-6">
              <form action="carimobil_adityatm.php" method="GET">
                <div class="btn-group float-end" role="group">
                  <input
                    type="text"
                    name="keyword"
                    class="form-control"
                    placeholder="Masukan keyword"
                    required
                  />
                  <button type="submit" class="btn btn-primary">Pencarian</button>
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
                    <th>No Plat</th>
                    <th>Nama Mobil</th>
                    <th>Brand Mobil </th>
                    <th>Tipe Transmisi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "../config/koneksi.php";
                  $i = 0;
                  $tampil = mysqli_query(
                    $koneksi,
                    "SELECT * FROM tbl_mobil_adityataufiqmaulana"
                  );
                  while ($data = mysqli_fetch_array($tampil)) {
                    $i++;
                  ?>
                  <tr>
                    <td><?=$i?></td>
                    <td><?=$data["no_plat_adityataufiqmaulana"]?></td>
                    <td><?=$data["nama_mobil_adityataufiqmaulana"]?></td>
                    <td><?=$data["brand_mobil_adityataufiqmaulana"]?></td>
                    <td><?=$data["tipe_transmisi_adityataufiqmaulana"]?></td>
                    <td>
                      <a
                        href="editmobil_adityatm.php?no_plat_adityataufiqmaulana=<?=$data["no_plat_adityataufiqmaulana"]?>"
                        class="btn btn-primary"
                        >Edit</a>
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
      // sweetalert tombol hapus
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
                "deletemobil_adityatm.php?no_plat_adityataufiqmaulana=" + id;
            }
          });
        });
      });
    </script>
  </body>
</html>
