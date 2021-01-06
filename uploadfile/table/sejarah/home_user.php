<?php
include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Home Sejarah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../../../home.html">E-MODUL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../../home.html">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../../../mapel.php">Mata Pelajaran<i class="fas fa-book-reader ml-2"></i></a>
          <div class="dropdown-divider"></div>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</head>
  <body>
 
<br><br>

    <hr>
    <div class="container">
    <b>Data File PDF</b>
    <hr>
    <table id="tabel-data" class="table table-striped">
      <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Nama Guru</th>
        <th width="100">Lihat File</th>
      </tr>
    </thead>


      <?php
                $data = mysqli_query($koneksi, "SELECT * from tbl_sejarah");
                    
                    $no = 1;
                      while ($d=mysqli_fetch_array($data))
                        {

        $lihatpdf = "view.php?id=".$d['id'];
        ?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $d['judul'];?></td>
          <td><?php echo $d['guru'];?></td>
          <td>
            <a href="<?php echo $lihatpdf;?>">Lihat PDF</a>
          </td>
        </tr>
        <?php
        $no++;
      }
      ?>
      <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>


    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>