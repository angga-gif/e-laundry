<?php

/*
|---------- Author---------------
| Name : Kharisma Maulana Pasaribu 
| Date : 31-03-2020
|--------------------------------
*/

include "include/koneksi.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];
// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query = "DELETE FROM tbl_user WHERE id='".$id."'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  echo "<script language='javascript'>alert('Berhasil di Hapus');</script>";
  echo '<meta http-equiv="refresh" content="0; url=user.php">';
}else{
  // Jika Gagal, Lakukan :
  echo "<script language='javascript'>alert('Gagal di Hapus');</script>";
	echo '<meta http-equiv="refresh" content="0; url=user.php">';
}
?>
