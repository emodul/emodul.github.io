<?php
 include "koneksi.php";

 $id = $_POST['id'];
 $judul = $_POST['input_judul'];
 $guru = $_POST['input_guru'];
 $query = "UPDATE tbl_kwu SET judul='$judul', guru='$guru' WHERE id='$id'";
 $result = mysqli_query($koneksi, $query);
 //echo $nama;
 if($result)
 {
  header('location:home_admin.php');
 }
 else
 {
  echo "data tidak berhasil diedit, error : " . mysqli_error($kon);
 }
?>