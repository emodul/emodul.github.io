<?php
 include "koneksi.php";
 $id = $_GET['id'];
 $query = "SELECT * from tbl_mtk where id='$id'";
 $hasil = mysqli_query($koneksi, $query);
 $data = mysqli_fetch_array($hasil);
 $judul = $data['judul'];
 $guru = $data['guru'];


?>


<!DOCTYPE html>
<html>
<head>
 <title>EDIT</title>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">EDIT DATA</div>
                <div class="card-body">
<form action="update_guru.php" method="POST">
<div class="form-group">
 <label>id Materi : </label><?php echo "$id";?>
 </div>
 <div class="form-group">
 <label>Judul : </label>
 <input type="text" name="input_judul" value=<?php echo "$judul"; ?>>
 </div>
 <div class="form-group">
 <label>guru : </label>
 <input type="text" name="input_guru" value=<?php echo "$guru"; ?>>
</div>
 <input type="hidden" name="id" value=<?php echo "$id";?>><br>
 <button class="btn btn-primary" type="submit" value="simpan"/>EDIT DATA</button>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>