<?php
session_start();
include "include/koneksi.php";
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='$username' AND password='$password' and status=1");
	$num = mysqli_num_rows($sql);
	if($num>0){
		$num2 = mysqli_fetch_array($sql);
		if($num2['status'] == 1){
			$_SESSION['id'] = $num2['id'];
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			$_SESSION['groupid'] =  $num2['groupid'];
			echo "<script language='javascript'>alert('Login Berhasil')</script>";
			echo '<meta http-equiv="refresh" content="0; url=index1.php">';
 	    }else{
 	    	echo "<script language='javascript'>alert('Login Gagal, Account Anda Sedang Di Non Aktifkan !!!')</script>";
			echo '<meta http-equiv="refresh" content="0; url=index1.php">';
 	    }
	}else{
		echo "<script language='javascript'>alert('Login gagal, periksa username dan password anda !!!')</script>";
		echo '<meta http-equiv="refresh" content="0; url=login/index.php">';
	}
}
?>
