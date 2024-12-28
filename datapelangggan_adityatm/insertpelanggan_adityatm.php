<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nik_ktp_adityataufiqmaulana=$_POST['nik_ktp_adityataufiqmaulana'];
$nama_adityataufiqmaulana=$_POST['nama_adityataufiqmaulana'];
$no_hp_adityataufiqmaulana=$_POST['no_hp_adityataufiqmaulana'];
$alamat_adityataufiqmaulana=$_POST['alamat_adityataufiqmaulana'];
//Menjalankan kueri insert
$insert=mysqli_query($koneksi,"INSERT INTO tbl_pelanggan_adityataufiqmaulana
(nik_ktp_adityataufiqmaulana,
nama_adityataufiqmaulana,
no_hp_adityataufiqmaulana,
alamat_adityataufiqmaulana)
VALUES
('$_POST[nik_ktp_adityataufiqmaulana]',
'$_POST[nama_adityataufiqmaulana]',
'$_POST[no_hp_adityataufiqmaulana]',
'$_POST[alamat_adityataufiqmaulana]')
");
if($insert){
//Jika proses delete berhasil
header("location:tampilpelanggan_adityatm.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menyimpan !</p>";
echo"<a href='tamplpelanggan_adityatm.php'>Coba Lagi</a>";
}
?>
?>