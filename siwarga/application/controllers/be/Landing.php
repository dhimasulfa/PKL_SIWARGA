<?php
class Landing extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Rt_Model');
        
	}

	// public function index()
	// {
	// 	$data = array('uniqid' => 'admin/landing',
	// 				'tittle' => 'Dashboard',);
 //      $this->load->view('admin/content', $data);
	// }

//************************************************Dashboard***************************************
 
    function tampil_dashboard(){
      	
		$this->load->view('be/dashboard');
	}

//************************************************Profil***************************************
 
    function profil(){
        $a= array(
				'data'=>$this->Rt_Model->get_profil());
		
		$this->load->view('be/view_profil',$a);
	}
	function input_profil(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Rt_Model->input_profil(array (
			'id_profil' => $this->input->post('id_profil'),
			'profil' => $this->input->post('profil'),
			'ket_profil' => $this->input->post('ket_profil')));
			redirect('be/Landing/profil');
		}else{
			$this->load->view('be/add_profil');
		}
	}
	function edit_profil(){
		$id = $this->uri->segment(4);
		$data=array(
		'profil' => $this->Rt_Model->get_edit_profil($id));
		$this->load->view('be/edit_profil',$data);
	}
    function update_profil(){
    $id_profil = $this->input->post('id_profil');
    $profil = $this->input->post('profil');
    $ket_profil = $this->input->post('ket_profil');
    $data = array(
        'id_profil' => $id_profil,
        'profil' => $profil,
        'ket_profil' => $ket_profil,
    );
 
    $this->Rt_Model->update_data_profil($data);
    redirect('be/Landing/profil');
}
	public function delete_profil($id_profil) {

        $this->load->model("Rt_Model");

        $delete_warga = $this->Rt_Model->delete_profil($id_profil);
        redirect('be/Landing/profil');
	}
//************************************************Warga***************************************
 
	function warga(){
        $a= array(
				'data'=>$this->Rt_Model->get_data_warga($this->session->userdata('ses_id')));
		
		$this->load->view('be/view_warga',$a);
	}
	function warga_rw(){
        $a= array(
				'data'=>$this->Rt_Model->get_data_warga_rw($this->session->userdata('ses_id')));
		
		$this->load->view('be/view_warga',$a);
	}
	function input_warga(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Rt_Model->input_warga(array (
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'no_kk' => $this->input->post('no_kk'),
			'tmp_lahir' => $this->input->post('tmp_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'telp' => $this->input->post('telp'),
		    'status' => $this->input->post('status'),
		    'id_rt' => $this->input->post('id_rt'),
		    'rw' => $this->input->post('rw')));
			redirect('be/Landing/warga');
		}else{
			$data1 = array(
				'id_rt'=>$this->Rt_Model->get_rt()
				);
			$this->load->view('be/input_warga',$data1);
		}
	}
	function edit_warga(){
		$id = $this->uri->segment(4);
		$data=array(
		'warga' => $this->Rt_Model->get_edit_warga($id));
		$this->load->view('be/edit_warga',$data);
	}
    function update_warga(){
    $nik = $this->input->post('nik');
    $nama = $this->input->post('nama');
    $no_kk = $this->input->post('no_kk');
    $tmp_lahir = $this->input->post('tmp_lahir');
    $tgl_lahir =$this->input->post('tgl_lahir');
    $telp =$this->input->post('telp');
    $status =$this->input->post('status');
    $rt =$this->input->post('rt');
    $rw =$this->input->post('rw');
    $data = array(
        'nik' => $nik,
        'nama' => $nama,
        'no_kk' => $no_kk,
        'tmp_lahir' => $tmp_lahir,
        'tgl_lahir' => $tgl_lahir,
        'telp' => $telp,
        'status' => $status,
        'rt' => $rt,
        'rw' => $rw,
    );
 
    $this->Rt_Model->update_data_warga($data);
    redirect('be/Landing/warga');
}
	public function delete_warga($nik) {

        $this->load->model("Rt_Model");

        $delete_warga = $this->Rt_Model->delete_warga($nik);
        redirect('be/Landing/warga');
    }
//************************************************RT***************************************
 
    function rt(){
        $a= array(
				'data'=>$this->Rt_Model->get_data_rt());
		
		$this->load->view('be/view_rt',$a);
	}
	function input_rt(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Rt_Model->input_rt(array (
			'id_rt' => $this->input->post('id_rt'),
			'rt' => $this->input->post('rt'),
			'rw' => $this->input->post('rw'),
			'nama_ketua' => $this->input->post('nama_ketua'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'no_kk' => $this->input->post('no_kk'),
		    'status' => $this->input->post('status')));
			redirect('be/Landing/rt');
		}else{
			$a= array(
        	'kode_rt' => $this->Rt_Model->kode_rt());
        $this->load->view('be/input_rt',$a);
		}
	}
	function edit_rt(){
		$id = $this->uri->segment(4);
		$data=array(
		'rt' => $this->Rt_Model->get_edit_rt($id));
		$this->load->view('be/edit_rt',$data);
	}
    function update_rt(){
    $id_rt = $this->input->post('id_rt');
    $rt = $this->input->post('rt');
    $rw = $this->input->post('rw');
    $nama_ketua = $this->input->post('nama_ketua');
    $alamat = $this->input->post('alamat');
    $telp =$this->input->post('telp');
    $no_kk =$this->input->post('no_kk');
    $status =$this->input->post('status');
    $data = array(
        'id_rt' => $id_rt,
        'rt' => $rt,
         'rw' => $rw,
        'nama_ketua' => $nama_ketua,
        'alamat' => $alamat,
        'telp' => $telp,
        'no_kk' => $no_kk,
        'status' => $status,
    );
 
    $this->Rt_Model->update_data_rt($data);
    redirect('be/Landing/rt');
}
	public function delete_rt($rt) {

        $this->load->model("Rt_Model");

        $delete_rt = $this->Rt_Model->delete_rt($rt);
        redirect('be/Landing/rt');
    }
//************************************************RW***************************************
 
    function rw(){
        $a= array(
				'data'=>$this->Rt_Model->get_data_rw());
		
		$this->load->view('be/view_rw',$a);
	}
	function input_rw(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Rt_Model->input_rw(array (
			'id_rw' => $this->input->post('id_rw'),
			'rw' => $this->input->post('rw'),
			'nama_ketua' => $this->input->post('nama_ketua'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'no_kk' => $this->input->post('no_kk'),
		    'status' => $this->input->post('status')));
			redirect('be/Landing/rw');
		}else{
			$a= array(
        	'kode_rw' => $this->Rt_Model->kode_rw());
        $this->load->view('be/input_rw',$a);
		}
	}
	function edit_rw(){
		$id = $this->uri->segment(4);
		$data=array(
		'rw' => $this->Rt_Model->get_edit_rw($id));
		$this->load->view('be/edit_rw',$data);
	}
    function update_rw(){
    $id_rw = $this->input->post('id_rw');
    $rw = $this->input->post('rw');
    $nama_ketua = $this->input->post('nama_ketua');
    $alamat = $this->input->post('alamat');
    $telp =$this->input->post('telp');
    $no_kk =$this->input->post('no_kk');
    $status =$this->input->post('status');
    $data = array(
        'id_rw' => $id_rw,
        'rw' => $rw,
        'nama_ketua' => $nama_ketua,
        'alamat' => $alamat,
        'telp' => $telp,
        'no_kk' => $no_kk,
        'status' => $status,
    );
 
    $this->Rt_Model->update_data_rw($data);
    redirect('be/Landing/rw');
}
	public function delete_rw($rw) {

        $this->load->model("Rt_Model");

        $delete_rw = $this->Rt_Model->delete_rw($rw);
        redirect('be/Landing/rw');
    }
//******************************************emergency***************************************
 
    function emergency(){
        $a= array(
				'data'=>$this->Rt_Model->get_data_emergency());
		
		$this->load->view('be/view_emergency',$a);
	}
	function input_emergency(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Rt_Model->input_emergency(array (
			'id_emergency' => $this->input->post('id_emergency'),
			'tanggal' => $this->input->post('tanggal'),
			'lokasi' => $this->input->post('lokasi'),
			'pelapor' => $this->input->post('pelapor'),
			'keterangan' => $this->input->post('keterangan')));
			// 'status' => $this->input->post('status')));
			redirect('be/Landing/emergency');
		}else{
			$a= array(
        	'kode_emergency' => $this->Rt_Model->kode_emergency());
        $this->load->view('be/input_emergency',$a);
		}
	}
	function edit_emergency(){
		$id = $this->uri->segment(4);
		$data=array(
		'emergency' => $this->Rt_Model->get_edit_emergency($id));
		$this->load->view('be/edit_emergency',$data);
	}
    function update_emergency(){
    $id_emergency = $this->input->post('id_emergency');
    $tanggal = $this->input->post('tanggal');
    $lokasi = $this->input->post('lokasi');
    $pelapor = $this->input->post('pelapor');
    $keterangan =$this->input->post('keterangan');
    // $status =$this->input->post('status');
    $data = array(
        'id_emergency' => $id_emergency,
        'tanggal' => $tanggal,
        'lokasi' => $lokasi,
        'pelapor' => $pelapor,
        'keterangan' => $keterangan,
        // 'status' => $status,
    );
 
    $this->Rt_Model->update_data_emergency($data);
    redirect('be/Landing/emergency');
}
	public function delete_emergency($emergency) {

        $this->load->model("Rt_Model");

        $delete_emergency = $this->Rt_Model->delete_emergency($emergency);
        redirect('be/Landing/emergency');
    }

//******************************************INFO WARGA***************************************
 
    function info_warga(){
        $a= array(
				'data'=>$this->Rt_Model->get_data_info_warga());
		
		$this->load->view('be/view_info_warga',$a);
	}
	function input_info_warga(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Rt_Model->input_info_warga(array (
			'id' => $this->input->post('id'),
			'judul' => $this->input->post('judul'),
			'tanggal' => $this->input->post('tanggal'),
			'isi' => $this->input->post('isi')));
			redirect('be/Landing/info_warga');
		}else{
			$a= array(
        	'kode_info' => $this->Rt_Model->kode_info());
        $this->load->view('be/input_info_warga',$a);
		}
	}
	function edit_info_warga(){
		$id = $this->uri->segment(4);
		$data=array(
		'info' => $this->Rt_Model->get_edit_info_warga($id));
		$this->load->view('be/edit_info_warga',$data);
	}
    function update_info_warga(){
    $id = $this->input->post('id');
    $judul = $this->input->post('judul');
    $tanggal = $this->input->post('tanggal');
    $isi = $this->input->post('isi');
    $data = array(
        'id' => $id,
        'judul' => $judul,
        'tanggal' => $tanggal,
        'isi' => $isi,
     
    );
 
    $this->Rt_Model->update_data_info_warga($data);
    redirect('be/Landing/info_warga');
}
	public function delete_info_warga($info_warga) {

        $this->load->model("Rt_Model");

        $delete_info_warga = $this->Rt_Model->delete_info_warga($info_warga);
        redirect('be/Landing/info_warga');
    }


	}
?>
	