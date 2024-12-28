<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Mobil</title>
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
          <div class="card-header">Tambah Data Mobil</div>
          <div class="card-body text-success">
            <div class="row">
              <div class="col-md-5">
                <form action="insertmobil_adityatm.php" method="POST">
                  <div class="mb-3 mt-3">
                    <label for="plat " class="form-label">No Plat :</label>
                    <input
                      type="text"
                      name="no_plat_adityataufiqmaulana"
                      class="form-control"
                      id="no_plat_adityataufiqmaulana"
                      placeholder="Masukan No Plat Mobil"
                      required
                    />
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="nama_mobil" class="form-label">Nama mobil :</label>
                    <select name="nama_mobil_adityataufiqmaulana" id="nama_mobil_adityataufiqmaulana"
                    class="form-control">
                    <option value="">-- Pilih Nama Mobil --</option>
                    <option value="Avanza">Avanza</option>
                    <option value="Brio">Brio</option>
                    <option value="Apv">APV</option>
                    <option value="Grandlivina">GrandLivina</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="brand" class="form-label">Brand Mobil :</label>
                    <select name="brand_mobil_adityataufiqmaulana" id="brand_mobil_adityataufiqmaulana"
                    class="form-control">
                    <option value="">-- Pilih Brand Mobil --</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Honda">Honda</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="Nissan">Nissan</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="brand" class="form-label">Tipe Tranmisi :</label>
                    <select name="tipe_transmisi_adityataufiqmaulana" id="tipe_transmisi_adityataufiqmaulana"
                    class="form-control">
                    <option value="">-- Pilih Brand Mobil --</option>
                    <option value="Matic">Matic</option>
                    <option value="Manual">Manual</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <a href="tampilmobil_adityatm.php" class="btn btn-warning">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-simpan" data-id="simpandata">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
  document.querySelectorAll(".btn-simpan").forEach((button) => {
    button.addEventListener("click", function (event) {
      // Mencegah form langsung submit
      event.preventDefault();

      // Ambil nilai input
      const noplat = document.getElementById("no_plat_adityataufiqmaulana").value.trim();
      const nama = document.getElementById("nama_mobil_adityataufiqmaulana").value.trim();
      const brand = document.getElementById("brand_mobil_adityataufiqmaulana").value.trim();
      const tipe = document.getElementById("tipe_transmisi_adityataufiqmaulana").value.trim();

      // Validasi input kosong
      if (!noplat || !nama || !brand || !tipe) {
        Swal.fire({
          icon: "warning",
          title: "Gagal Menyimpan",
          text: "Semua data harus diisi!",
          showConfirmButton: true,
        });
        return;
      }

      // Jika semua input valid, tampilkan SweetAlert sukses
      Swal.fire({
        icon: "success",
        title: "Data Berhasil Disimpan",
        text: "Klik OK untuk melanjutkan",
        showConfirmButton: true,
      }).then((result) => {
        if (result.isConfirmed) {
          // Arahkan ke halaman setelah SweetAlert ditutup
          document.querySelector("form").submit();
        }
      });
    });
  });
</script>
  </body>
</html>
