<?php
class M_login extends CI_Model{
	//cek nip dan password dosen
	public $username;
	public $password;

	function auth_rw($username, $password){
		$query = $this->db->query("SELECT * FROM rw WHERE id_rw='$username' AND id_rw='$password' LIMIT 1");
		return $query;
	}

	function auth_rt($username, $password){
		$query = $this->db->query("SELECT * FROM rt WHERE id_rt='$username' AND id_rt='$password' LIMIT 1");
		return $query;
	}
}
?>