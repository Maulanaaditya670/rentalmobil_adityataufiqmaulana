<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_trx_adityataufiqmaulana=$_POST['no_trx_adityataufiqmaulana'];
$nik_ktp_adityataufiqmaulana=$_POST['nik_ktp_adityataufiqmaulana'];
$no_plat_adityataufiqmaulana=$_POST['no_plat_adityataufiqmaulana'];
$tgl_rental_adityataufiqmaulana=$_POST['tgl_rental_adityataufiqmaulana'];
$jam_rental_adityataufiqmaulana=$_POST['jam_rental_adityataufiqmaulana'];
$lama_rental_adityataufiqmaulana=$_POST['lama_rental_adityataufiqmaulana'];
$bayar_adityataufiqmaulana=$_POST['bayar_adityataufiqmaulana'];
$total_bayar_adityataufiqmaulana=$_POST['total_bayar_adityataufiqmaulana'];


//Menjalankan kueri insert
$insert=mysqli_query($koneksi,"INSERT INTO tbl_rental_adityataufiqmaulana
(no_trx_adityataufiqmaulana,
nik_ktp_adityataufiqmaulana,
no_plat_adityataufiqmaulana,
tgl_rental_adityataufiqmaulana,
jam_rental_adityataufiqmaulana,
lama_rental_adityataufiqmaulana,
bayar_adityataufiqmaulana,
total_bayar_adityataufiqmaulana)
VALUES
('$_POST[no_trx_adityataufiqmaulana]',
'$_POST[nik_ktp_adityataufiqmaulana]',
'$_POST[no_plat_adityataufiqmaulana]',
'$_POST[tgl_rental_adityataufiqmaulana]',
'$_POST[jam_rental_adityataufiqmaulana]',
'$_POST[lama_rental_adityataufiqmaulana]',
'$_POST[bayar_adityataufiqmaulana]',
'$_POST[total_bayar_adityataufiqmaulana]')
");
if($insert){
//Jika proses delete berhasil
header("location:tampilrental_adityatm.php");
}else{
//Jika proses delete gagal
echo"<p>Gagal Menyimpan !</p>";
echo"<a href='tampilrental_adityatm.php'>Coba Lagi</a>";
}
?>
?>