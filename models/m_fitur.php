<?php 
class Fitur {
	private $mysqli;

	function __construct($conn) {
		$this->mysqli = $conn;
	}

	public function tampil($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tabel_admin";
		if($id != null) {
			$sql .= " WHERE id_adm = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tambah($username, $pass, $nama, $level, $gbr_adm){
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO tabel_admin VALUES ('', '$username', '$pass', '$nama', '$level', '$gbr_adm')") or die ($db->error);
	}
}
?>