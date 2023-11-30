<?php
include "include/koneksi.php";

$id       = $_POST["id"];
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$groupid  = $_POST["groupid"];
$status   = $_POST["status"];

if(empty($_POST["id"]) || empty($_POST["fullname"]) || empty($_POST["username"]) || empty($_POST["password"])){
	echo "<script language='javascript'>alert('Gagal di Edit');</script>";
	echo '<meta http-equiv="refresh" content="0; url=user.php">';
}else{
	$sql = "UPDATE `pelanggan` SET `fullname`='$fullname', `username`='$username', `password`='$password', `groupid`='$groupid', `status`='$status' WHERE `id` = '$id'";
				$kueri = mysqli_query($conn, $sql);
				echo "<script language='javascript'>alert('Berhasil di Edit');</script>";
				echo '<meta http-equiv="refresh" content="0; url=user.php">';
	}
?>
