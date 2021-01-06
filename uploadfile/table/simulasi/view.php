<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>TAMPILAN PDF</title>
	<style type="text/css">
		body {
			font-family: verdana;
			font-size: 12px;
		}
	</style>
</head>
<body>
<hr>
<?php
$id = mysqli_real_escape_string($koneksi,$_GET['id']);
$sql = "SELECT * FROM tbl_simulasi WHERE id='$id' ";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
?>

<table width="90%" border="0">
<embed type="application/pdf" src="file/<?php echo $data['nama_file'];?>" width="100%" height="600"></embed>
</table>
</body>
</html>