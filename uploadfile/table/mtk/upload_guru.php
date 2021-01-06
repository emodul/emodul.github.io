<?php
include "koneksi.php";

$tipe_file = $_FILES['nama_file']['type'];
if ($tipe_file == "application/pdf")
{
$judul = trim($_POST['judul']);
$guru = trim($_POST['guru']);
$nama_file = trim($_FILES['nama_file']['name']);

$sql = "INSERT INTO tbl_mtk (judul,guru) VALUES ('$judul','$guru')";
mysqli_query($koneksi,$sql);

$query = mysqli_query($koneksi,"SELECT id FROM tbl_mtk ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($query);

$generate = date("ymd_his_").rand(1111,9999);
$nama_baru = $generate.".pdf";
$file_temp = $_FILES['nama_file']['tmp_name'];
$folder = "file";

move_uploaded_file($file_temp, "$folder/$nama_baru");
mysqli_query($koneksi,"UPDATE tbl_mtk SET nama_file='$nama_baru' WHERE id='$data[id]' ");

$pesan = "upload berhasil";
}else{
	$pesan = "upload gagal, perhatikan format file";
}
?>

<script>
	alert('<?php echo $pesan;?>'); location='home_guru.php';
</script>