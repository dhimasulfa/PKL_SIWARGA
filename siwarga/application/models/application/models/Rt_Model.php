<?php
class Rt_Model extends CI_Model {

//************************************************Profil*************************************************************
	function get_profil(){
		$query = $this->db->query("SELECT * FROM profil");
		return $query->result();
	}
	function input_profil($data = array()){
		return $this->db->insert('profil',$data);
		
	}
	function get_edit_profil($id){
		$query = $this->db->query("Select * from profil where id_profil='$id'");
		return $query->result();
	}
	function update_data_profil($data){
		$query = $this->db->query("Update profil set profil='".$data['profil']."',ket_profil='".$data['ket_profil']."' where id_profil = '".$data['id_profil']."'");
		return true;
	}
	public function delete_profil($id_profil) {

        $this->load->database();

        $this->db->where('id_profil', $id_profil);
        return $this->db->delete("profil");
	}
//********************************************GET PERANGKAT******************************************************** */
	function get_perangkat($id_rt){
		$query = $this->db->query("SELECT * FROM rt where rt.id_rt = '".$id_rt."'");
		return $query->result();
	}

//***********************************************Warga****************************************
	
function get_table_warga(){
	return $this->db->get("warga");
}

function get_data_warga($id_rt){
	$query = $this->db->query("select warga.nik, warga.nama, warga.no_kk, warga.tmp_lahir, warga.tgl_lahir, warga.telp, warga.id_rt, warga.rw from warga, rt WHERE warga.id_rt = rt.id_rt and rt.id_rt='$id_rt'");
	return $query->result();
}

function get_data_warga_rw(){
	$query = $this->db->query("Select * from warga");
	return $query->result();
}

function input_warga($data = array()){
	return $this->db->insert('warga',$data);
	
}

function get_rt(){
		$query = $this->db->query("SELECT * FROM rt");
		return $query->result();
	}
function get_edit_warga($id){
	$query = $this->db->query("Select * from warga where nik='$id'");
	return $query->result();
}
function update_data_warga($data){
	$query = $this->db->query("Update warga set nama='".$data['nama']."',tmp_lahir='".$data['tmp_lahir']."',tgl_lahir='".$data['tgl_lahir']."',telp='".$data['telp']."' ,status='".$data['status']."',rw='".$data['rw']."' where nik = '".$data['nik']."'");
	return true;
}
public function delete_warga($nik) {

	$this->load->database();

	$this->db->where('nik', $nik);
	return $this->db->delete("warga");
}
//***********************************************RT****************************************
function get_table_rt(){
	return $this->db->get("rt");
}

function get_data_rt(){
	$query = $this->db->query("SELECT * FROM rt ");
	return $query->result();
}
function input_rt($data = array()){
	return $this->db->insert('rt',$data);
	
}
function get_edit_rt($id){
	$query = $this->db->query("Select * from rt where id_rt='$id'");
	return $query->result();
}
function update_data_rt($data){
	$query = $this->db->query("Update rt set rt='".$data['rt']."',rw='".$data['rw']."',nama_ketua='".$data['nama_ketua']."',alamat='".$data['alamat']."',telp='".$data['telp']."' ,status='".$data['status']."' where id_rt = '".$data['id_rt']."'");
	return true;
}
public function delete_rt($id_rt) {

	$this->load->database();

	$this->db->where('id_rt', $id_rt);
	return $this->db->delete("rt");
}	
 public function kode_rt(){
	  $this->db->select('RIGHT(rt.id_rt,2) as id_rt', FALSE);
	  $this->db->order_by('id_rt','DESC');    
	  $this->db->limit(1);    
	  $query = $this->db->get('rt');  //cek dulu apakah ada sudah ada kode di tabel.    
	  if($query->num_rows() <> 0){      
		   //cek kode jika telah tersedia    
		   $data = $query->row();      
		   $kode = intval($data->id_rt) + 1; 
	  }
	  else{      
		   $kode = 1;  //cek jika kode belum terdapat pada table
	  }
		  $tgl=date('dmY'); 
		  $batas = str_pad($kode, 2, "0", STR_PAD_LEFT);    
		  $kodetampil = "T"."0".$batas;  //format kode
		  return $kodetampil;  
	 }

//***********************************************RW****************************************
function get_table_rw(){
	return $this->db->get("rw");
}

function get_data_rw(){
	$query = $this->db->query("SELECT * FROM rw ");
	return $query->result();
}
function input_rw($data = array()){
	return $this->db->insert('rw',$data);
	
}
function get_edit_rw($id){
	$query = $this->db->query("Select * from rw where id_rw='$id'");
	return $query->result();
}
function update_data_rw($data){
	$query = $this->db->query("Update rw set rw='".$data['rw']."',nama_ketua='".$data['nama_ketua']."',alamat='".$data['alamat']."',telp='".$data['telp']."' ,status='".$data['status']."' where id_rw = '".$data['id_rw']."'");
	return true;
}
public function delete_rw($id_rw) {

	$this->load->database();

	$this->db->where('id_rw', $id_rw);
	return $this->db->delete("rw");
}
 public function kode_rw(){
	  $this->db->select('RIGHT(rw.id_rw,2) as id_rw', FALSE);
	  $this->db->order_by('id_rw','DESC');    
	  $this->db->limit(1);    
	  $query = $this->db->get('rw');  //cek dulu apakah ada sudah ada kode di tabel.    
	  if($query->num_rows() <> 0){      
		   //cek kode jika telah tersedia    
		   $data = $query->row();      
		   $kode = intval($data->id_rw) + 1; 
	  }
	  else{      
		   $kode = 1;  //cek jika kode belum terdapat pada table
	  }
		  $tgl=date('dmY'); 
		  $batas = str_pad($kode, 2, "0", STR_PAD_LEFT);    
		  $kodetampil = "W"."0".$batas;  //format kode
		  return $kodetampil;  
	 }

//*****************************************Emergency****************************************
function get_table_emergency(){
	return $this->db->get("emergency");
}

function get_data_emergency(){
	$query = $this->db->query("SELECT * FROM emergency ");
	return $query->result();
}
function input_emergency($data = array()){
	return $this->db->insert('emergency',$data);
	
}
function get_edit_emergency($id){
	$query = $this->db->query("Select * from emergency where id_emergency='$id'");
	return $query->result();
}
function update_data_emergency($data){
	$query = $this->db->query("Update emergency set tanggal='".$data['tanggal']."',lokasi='".$data['lokasi']."',pelapor='".$data['pelapor']."',keterangan='".$data['keterangan']."' where id_emergency = '".$data['id_emergency']."'");
	return true;
}
public function delete_emergency($id_emergency) {

	$this->load->database();

	$this->db->where('id_emergency', $id_emergency);
	return $this->db->delete("emergency");
}
 public function kode_emergency(){
	  $this->db->select('RIGHT(emergency.id_emergency,2) as id_emergency', FALSE);
	  $this->db->order_by('id_emergency','DESC');    
	  $this->db->limit(1);    
	  $query = $this->db->get('emergency');  //cek dulu apakah ada sudah ada kode di tabel.    
	  if($query->num_rows() <> 0){      
		   //cek kode jika telah tersedia    
		   $data = $query->row();      
		   $kode = intval($data->id_emergency) + 1; 
	  }
	  else{      
		   $kode = 1;  //cek jika kode belum terdapat pada table
	  }
		  $tgl=date('dmY'); 
		  $batas = str_pad($kode, 2, "0", STR_PAD_LEFT);    
		  $kodetampil = "E"."0".$batas;  //format kode
		  return $kodetampil;  
	 }

//*****************************************Info Warga****************************************
	function get_table_info_warga(){
        return $this->db->get("infowarga");
    }
    
	function get_data_info_warga(){
		$query = $this->db->query("SELECT * FROM infowarga ");
		return $query->result();
	}
	function input_info_warga($data = array()){
		return $this->db->insert('infowarga',$data);
		
	}
	function get_edit_info_warga($id){
		$query = $this->db->query("Select * from infowarga where id='$id'");
		return $query->result();
	}
	function update_data_info_warga($data){
		$query = $this->db->query("Update infowarga set judul='".$data['judul']."',tanggal='".$data['tanggal']."',isi='".$data['isi']."' where id = '".$data['id']."'");
		return true;
	}
	public function delete_info_warga($id) {

        $this->load->database();

        $this->db->where('id', $id);
        return $this->db->delete("infowarga");
    }
     public function kode_info(){
		  $this->db->select('RIGHT(infowarga.id,2) as id', FALSE);
		  $this->db->order_by('id','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('infowarga');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->id) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($kode, 2, "0", STR_PAD_LEFT);    
			  $kodetampil = "I"."0".$batas;  //format kode
			  return $kodetampil;  
		 }


}
?>