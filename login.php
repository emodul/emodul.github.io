<!doctype html>
<html lang="en">
  <head>
    <style>
    body {
        
        background-image : url(img/contoh.jpg);
    }
    </style>
  </head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ce0ef63761.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>LOGIN</title>
  </head>

  <body>
    <div class="container">
        <h3 class="text-center">FORM LOGIN<i class="fas fa-user-circle ml-2"></i></h3>
        <hr>

                    <?php 
                        if(isset($_GET['pesan'])){
                            if($_GET['pesan'] == "gagal"){
                                echo "<p style='color:red;'>Login gagal! username dan password salah!</p>";
                            }else if($_GET['pesan'] == "logout"){
                                echo "<p style='color;white;'>Anda telah berhasil logout</p>";
                            }
                        }
                        ?>

        <form action="prosesLogin.php" method="post">
        <div class="form-group">
            <label> Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda">
        </div>

        <div class="form-group">
            <label> Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda">
        </div>

        <button type="submit" name="btnsubmit" class="btn btn-secondary">>SUBMIT</button>
        <button type="reset" class="btn btn-secondary">RESET</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>