<?php
 
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $nama = $_POST['nama'];
	 $level = $_POST['level'];

	 
	 // include database connection file
	 include_once("koneksidb.php");
			 
	 // Insert user data into table
	 $result = mysqli_query($mysqli, "INSERT INTO admin(username,password,nama,level) VALUES('$username','$password','$nama','$level')");
	 
	 // Show message when user added
	 echo "user berhasil ditambahkan. <a href='listadmin.php'>View Admin</a>";
	 echo "</br>";
	 echo "</br>";
 }
 ?>		

		<form class="form-horizontal" method="post">
		  
		  <div class="form-group">
			<label for="userName" class="col-sm-2 control-label">Username</label>
			<div class="col-sm-6">
			  <input type="username" class="form-control" name="username" placeholder="Masukkan Username">
			</div>
		  </div>

		  <div class="form-group">
			<label for="password" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-6">
			  <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
			</div>
		  </div>

		  <div class="form-group">
			<label for="namalengkap" class="col-sm-2 control-label">Nama Lengkap</label>
			<div class="col-sm-6">
			  <input type="namalengkap" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
			</div>

			<div class="form-group">
			<label for="namalengkap" class="col-sm-2 control-label">Level</label>
			<div class="col-sm-6">
			  <input type="level" class="form-control" name="level" placeholder="Masukkan Level">
			</div>

		</div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-6">
			  <button type="submit" name="Submit" class="btn btn-success">Tambahkan</button>
			</div>
		  </div>
		</form>
		
