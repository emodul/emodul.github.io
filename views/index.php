<?php
ob_start();
require_once('config/koneksi.php');
require_once('models/database.php');

$connection = new Database($host,$user,$pass,$database);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">

      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../homeadmin.html">E-Modul</a>
        </div>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Setting <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="divider"></li>
                <li><a href="../logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <div id="page-wrapper">

      	<?php 
      	if(@$_GET['page'] == 'dashboard' || @$_GET['page']== '') {
      		include "views/dashboard.php";
      	} else if (@$_GET['page'] == 'fitur') {
      		include "views/fitur.php";
      	}
      	?>

        
        </div>

      </div>

    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>

  </body>
</html>