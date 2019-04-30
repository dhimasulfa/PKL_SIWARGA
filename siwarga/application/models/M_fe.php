<?php
class M_fe extends CI_Model{

	function get_data_warga(){
            $query = $this->db->query("SELECT * FROM warga ");
            return $query->result();
      }

    public function search_warga($cari){
    		$query = $this->db->query("SELECT * FROM warga WHERE nik LIKE '%$cari%'");
            return $query->result();
  }
  function get_data_rt(){
            $query = $this->db->query("SELECT * FROM rt ");
            return $query->result();
      }
}
?>