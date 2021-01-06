<?php 
session_start();
 
include "koneksidb.php";
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$data = mysqli_query($mysqli,"select * from admin where username='$username' and password='$password'");
 
$cek = mysqli_num_rows($data);
 
if($cek > 0){

	$data1 = mysqli_fetch_assoc($data);

	if($data1['level']=="admin"){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "admin";
	header("location:homeadmin.html");
}

	if($data1['level']=="guru"){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "guru";
	header("location:homeguru.html");
}

}else{
	header("location:login.php?pesan=gagal");
}
?>