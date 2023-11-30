<?php
include "include/koneksi.php";

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$groupid  = $_POST["groupid"];
$status   = $_POST["status"];

if(empty($_POST["fullname"]) || empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["groupid"]) || empty($_POST["status"])){
	echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
	echo '<meta http-equiv="refresh" content="0; url=tambahdatauser.php">';
}else{
	$sql = "INSERT INTO `tbl_user` (`fullname`, `username`, `password`, `groupid`,`status`)
			VALUES ('$fullname', '$username', '$password', '$groupid','$status')";
			$kueri = mysqli_query($conn, $sql);
			echo "<script language='javascript'>alert('Berhasil di tambahkan');</script>";
			echo '<meta http-equiv="refresh" content="0; url=user.php">';
 }
?>
