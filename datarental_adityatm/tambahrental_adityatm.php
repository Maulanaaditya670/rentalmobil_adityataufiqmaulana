<?php
$notrx = "TRX-".date("Ymdhis");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Rental</title>
    <link rel="icon" type="image/png" href="../assets/car_rental.png" />
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
    <div class="card-header">Tambah Data Rental</div>
    <div class="card-body text-success">
      <form action="insertrental_adityatm.php" method="POST">
        <div class="row">
          <div class="col-md-4">
            <div class="mb-3">
              <label for="trx" class="form-label">No Trx :</label>
              <input
                type="text"
                name="no_trx_adityataufiqmaulana"
                class="form-control"
                id="no_trx_adityataufiqmaulana"
                value="<?php echo $notrx; ?>" 
                readonly
                style="cursor: not-allowed;"
              />
            </div>
            <div class="mb-3">
              <label for="nama_pelanggan" class="form-label">Pelanggan :</label>
              <select name="nik_ktp_adityataufiqmaulana" id="nik_ktp_adityataufiqmaulana" class="form-control">
                <option value=""> -- Pilih Pelanggan --</option>
                <?php
                include "../config/koneksi.php";
                $tampil=mysqli_query($koneksi,"SELECT * FROM tbl_pelanggan_adityataufiqmaulana");
                while($data=mysqli_fetch_array($tampil)){
                  echo "<option value='$data[nik_ktp_adityataufiqmaulana]'>$data[nik_ktp_adityataufiqmaulana] - $data[nama_adityataufiqmaulana]</option>";
                }
                ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="mobil" class="form-label">Mobil :</label>
              <select name="no_plat_adityataufiqmaulana" id="no_plat_adityataufiqmaulana" class="form-control">
                <option value="">-- Pilih Mobil --</option>
                <?php
                include "../config/koneksi.php";
                $tampil=mysqli_query($koneksi,"SELECT * FROM tbl_mobil_adityataufiqmaulana");
                while($data=mysqli_fetch_array($tampil)){
                  echo "<option value='$data[no_plat_adityataufiqmaulana]'>$data[no_plat_adityataufiqmaulana] - $data[nama_mobil_adityataufiqmaulana]</option>";
                }
                ?>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="mb-3">
              <label for="tanggal_ambil" class="form-label">Tanggal Ambil :</label>
              <input
                type="date"
                name="tgl_rental_adityataufiqmaulana"
                id="tgl_rental_adityataufiqmaulana"
                class="form-control"
              />
            </div>
            <div class="mb-3">
              <label for="jam" class="form-label">Jam Ambil :</label>
              <input
                type="time"
                name="jam_rental_adityataufiqmaulana"
                id="jam_rental_adityataufiqmaulana"
                class="form-control"
              />
            </div>
            <div class="mb-3">
                    <label for="lama" class="form-label">Lama Rental :</label>
                    <input 
                    type="int"
                    name="lama_rental_adityataufiqmaulana" 
                    id="lama_rental_adityataufiqmaulana"
                    class="form-control"
                    >
            </div>
            <div class="mb-3">
                    <label for="harga" class="form-label">Harga Rental :</label>
                    <input 
                    type="number"
                    name="bayar_adityataufiqmaulana" 
                    id="bayar_adityataufiqmaulana"
                    class="form-control"
                    >
                  </div>
                  <div class="mb-3">
                  <label for="harga" class="form-label">Total Bayar :</label>
                  <input 
                    type="number"
                    name="total_bayar_adityataufiqmaulana" 
                    id="total_bayar_adityataufiqmaulana"
                    class="form-control"
                    >
                  </div>

            <div class="mb-3">
              <a href="tampilrental_adityatm.php" class="btn btn-warning">Kembali</a>
              <button type="submit" class="btn btn-primary btn-simpan" data-id="simpandata">Simpan</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- JavaScript rumus bayar -->
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

<!-- javascript sweetalert2 -->
<script>
  document.querySelectorAll(".btn-simpan").forEach((button) => {
    button.addEventListener("click", function (event) {
      // Mencegah form langsung submit
      event.preventDefault();

      // Ambil nilai input
      const nik = document.getElementById("nik_ktp_adityataufiqmaulana").value.trim();
      const noplat = document.getElementById("no_plat_adityataufiqmaulana").value.trim();
      const tgl = document.getElementById("tgl_rental_adityataufiqmaulana").value.trim();
      const jam = document.getElementById("jam_rental_adityataufiqmaulana").value.trim();
      const lama = document.getElementById("lama_rental_adityataufiqmaulana").value.trim();
      const bayar = document.getElementById("bayar_adityataufiqmaulana").value.trim();
      
      // Validasi input kosong
      if (!nik || !noplat || !tgl || !jam || !lama || !bayar) {
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