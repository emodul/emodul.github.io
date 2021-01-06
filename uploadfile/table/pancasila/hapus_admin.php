<?php
include "koneksi.php";
$id = trim($_GET['id']);

$sql = "DELETE FROM tbl_pancasila WHERE id='$id' ";
mysqli_query($koneksi,$sql);
?>

<script>
	alert('Modul berhasil di hapus'); location='home_admin.php';
</script> 