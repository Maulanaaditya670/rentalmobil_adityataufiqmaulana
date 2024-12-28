<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_plat_adityataufiqmaulana=$_POST['no_plat_adityataufiqmaulana'];
$nama_adityataufiqmaulana=$_POST['nama_mobil_adityataufiqmaulana'];
$brand_mobil_adityataufiqmaulana=$_POST['brand_mobil_adityataufiqmaulana'];
$tipe_transmisi_adityataufiqmaulana=$_POST['tipe_transmisi_adityataufiqmaulana'];
//Menjalankan kueri insert
$insert=mysqli_query($koneksi,"INSERT INTO tbl_mobil_adityataufiqmaulana
(no_plat_adityataufiqmaulana,
nama_mobil_adityataufiqmaulana,
brand_mobil_adityataufiqmaulana,
tipe_transmisi_adityataufiqmaulana)
VALUES
('$_POST[no_plat_adityataufiqmaulana]',
'$_POST[nama_mobil_adityataufiqmaulana]',
'$_POST[brand_mobil_adityataufiqmaulana]',
'$_POST[tipe_transmisi_adityataufiqmaulana]')
");
if($insert){
//Jika proses delete berhasil
header("location:tampilmobil_adityatm.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menyimpan !</p>";
echo"<a href='tampilmobil_adityatm.php'>Coba Lagi</a>";
}
?>
?>