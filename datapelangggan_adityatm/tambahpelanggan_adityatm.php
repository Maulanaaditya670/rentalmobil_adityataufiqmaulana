<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Pelanggan</title>
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
          <div class="card-header">Tambah Data Pelanggan</div>
          <div class="card-body text-success">
            <div class="row">
              <div class="col-md-5">
                <form action="insertpelanggan_adityatm.php" method="POST">
                  <div class="mb-3 mt-3">
                    <label for="NIK " class="form-label">NIK KTP :</label>
                    <input
                      type="text"
                      name="nik_ktp_adityataufiqmaulana"
                      class="form-control"
                      id="nik_ktp_adityataufiqmaulana"
                      placeholder="Masukan NIK KTP"
                      required
                    />
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="nama_lengkap" class="form-label"
                      >Nama Lengkap :</label
                    >
                    <input
                      type="text"
                      name="nama_adityataufiqmaulana"
                      class="form-control"
                      id="nama_adityataufiqmaulana"
                      placeholder="Masukan Nama Lengkap"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <label for="no_hp" class="form-label">No Hp:</label>
                    <input
                      type="text"
                      name="no_hp_adityataufiqmaulana"
                      class="form-control"
                      id="no_hp_adityataufiqmaulana"
                      placeholder="Masukan Tempat Lahir"
                      required
                    />
                  </div>
                  <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat : </label>
                        <textarea name="alamat_adityataufiqmaulana" 
                        id="alamat_adityataufiqmaulana" rows="3" cols="35" 
                        class="form-control" placeholder="Masukan Alamat" required></textarea>
                    </div>
                  <div class="mb-3">
                    <a href="tampilpelanggan_adityatm.php" class="btn btn-warning">Kembali</a>
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
      const nik = document.getElementById("nik_ktp_adityataufiqmaulana").value.trim();
      const nama = document.getElementById("nama_adityataufiqmaulana").value.trim();
      const noHp = document.getElementById("no_hp_adityataufiqmaulana").value.trim();
      const alamat = document.getElementById("alamat_adityataufiqmaulana").value.trim();

      // Validasi input kosong
      if (!nik || !nama || !noHp || !alamat) {
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
