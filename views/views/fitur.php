<?php 
include "models/m_fitur.php";

$adm = new Fitur($connection);

if(@$_GET['act'] == '') {
?>

<div class="row">
          <div class="col-lg-12">
            <h1>Fitur <small>Admin</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Admin</a></li>
            </ol>
          </div>

          <div class="row">
          	<div class="col-lg-12">
          		<table class="table table-bordered table-hover table-striped">
          			<tr>
          				<th>No.</th>
                  <th>Nama</th>
          				<th>Username</th>
          				<th>Password</th>
          				<th>Level</th>
          				<th>Aksi</th>
          			</tr>

          			<?php 
          			$no = 1;
          			$tampil = $adm->tampil();
          			while($data = $tampil->fetch_object()) {
          			 ?>
          		<tr>
          		<td align="center"><?php echo $no++; ?></td>
              <td><?php echo $data->nama; ?></td>
          		<td><?php echo $data->username; ?></td>
          		<td><?php echo $data->password; ?></td>          				
          		<td><?php echo $data->level; ?></td>
          			
          	<td align="center">
            <!-- <a id="edit_adm" data-toggle="modal" data-target="#edit" data-id="<?php echo $data->id; ?>" data-nama="<?php echo $data->nama; ?>" data-username="<?php echo $data->username; ?>" data-password="<?php echo $data->password; ?>" data-level="<?php echo $data->level; ?>">
            <button class="btn btn-secondary btn-xs"><i class="fa fa-edit"></i>Edit</button>
            </a> -->
            <a href="?page=fitur&act=del&id=<?php echo $data->id; ?>" onclick="return confirm('Yakin Ingin Menghapus ?')">
          	<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Hapus</button>
            </a>
          	</td>         				
          	</tr>
			<?php
          } ?>
          	</table>
          	</div>

			<button style="margin-left: 20px;" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#tambah">Tambah Admin</button>

			 <div id="tambah" class="modal fade" role="dialog">
			 <div class="modal-dialog">
			 <div class="modal-content">
			 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal">&times;</button>
			 <h4 class="modal-title">Tambah Data Admin</h4>
          
        	</div>
        	<form action="" method="post" enctype="multipart/form-data">
          	<div class="modal-body">
            <div class="form-group">
            <label class="control-label" for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        	</div>
        	<div class="form-group">
            <label class="control-label" for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" required>
        	</div>
        	<div class="form-group">
            <label class="control-label" for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
        	</div>
        	<div class="form-group">
            <label class="control-label" for="level">Level</label>
            <input type="text" name="level" class="form-control" id="level" required>
        </div>
        <div class="modal-footer">
        	<button type="reset" class="btn btn-danger">Reset</button>
        	<button type="submit" class="btn btn-success" name="tambah" value="Simpan">Submit</button>

          </div>
      </form>
      <?php 
      if(@$_POST['tambah']){
        $nama = $connection->conn->real_escape_string($_POST['nama']);
      	$username = $connection->conn->real_escape_string($_POST['username']);
      	$password = $connection->conn->real_escape_string($_POST['password']);
      	$level = $connection->conn->real_escape_string($_POST['level']);

      		$adm->tambah($nama, $username, $password, $level);
      		header("location: ?page=fitur");
      }
      ?>
    </div>
    </div>
    </div>

    <div id="edit" class="modal fade" role="dialog">
       <div class="modal-dialog">
       <div class="modal-content">
       <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Edit Data Admin</h4>
          
          </div>
          <form id="form" enctype="multipart/form-data">
            <div class="modal-body" id="modal-edit">
            <div class="form-group">
            <label class="control-label" for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="level">Level</label>
            <input type="text" name="level" class="form-control" id="level" required>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" name="edit" value="Simpan">Submit</button>

          </div>
      </form>
    </div>
    </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(document).on("click", "#edit_adm", function() {
      var idadm = $(this).data('id');
      var namaadm = $(this).data('nama');
      var usernameadm = $(this).data('username');
      var passwordadm = $(this).data('password');
      var leveladm = $(this).data('level');
      $(".modal-edit #nama").val(namaadm);
      $(".modal-edit #username").val(usernameadm);
      $(".modal-edit #password").val(passwordadm);
      $(".modal-edit #level").val(leveladm);
    })
    </script>

</div>
</div>
<?php 
} else if(@$_GET['act'] == 'del') {
  echo "proses delete untuk id : ".$_GET['id'];

  $adm->hapus($_GET['id']);
  header("location: ?page=fitur");
}