<?php
class Siwarga extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_Siwarga');
        
	}
//************************************************Warga***************************************
 
    function index(){
        $a= array(
				'data'=>$this->Model_Siwarga->get_data_warga());
		
		$this->load->view('be/view_warga',$a);
	}
	function input_warga(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Model_Siwarga->input_warga(array (
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'no_kk' => $this->input->post('no_kk'),
			'tmp_lahir' => $this->input->post('tmp_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'telp' => $this->input->post('telp'),
		    'status' => $this->input->post('status'),
		    'rt' => $this->input->post('rt'),
		    'rw' => $this->input->post('rw')));
			redirect('Siwarga/warga');
		}else{
			$this->load->view('input_warga');
		}
	}
	function edit_warga(){
		$id = $this->uri->segment(3);
		$data=array(
		'warga' => $this->Model_Siwarga->get_edit_warga($id));
		$this->load->view('edit_warga',$data);
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
 
    $this->Model_Siwarga->update_data_warga($data);
    redirect('Siwarga/warga');
}
	public function delete_warga($nik) {

        $this->load->model("Model_Siwarga");

        $delete_warga = $this->Model_Siwarga->delete_warga($nik);
        redirect('Siwarga/warga');
    }
//************************************************RT***************************************
 
    function rt(){
        $a= array(
				'data'=>$this->Model_Siwarga->get_data_rt());
		
		$this->load->view('view_rt',$a);
	}
	function input_rt(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Model_Siwarga->input_rt(array (
			'id_rt' => $this->input->post('id_rt'),
			'rt' => $this->input->post('rt'),
			'rw' => $this->input->post('rw'),
			'nama_ketua' => $this->input->post('nama_ketua'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'no_kk' => $this->input->post('no_kk'),
		    'status' => $this->input->post('status')));
			redirect('Siwarga/rt');
		}else{
			$a= array(
        	'kode_rt' => $this->Model_Siwarga->kode_rt());
        $this->load->view('input_rt',$a);
		}
	}
	function edit_rt(){
		$id = $this->uri->segment(3);
		$data=array(
		'rt' => $this->Model_Siwarga->get_edit_rt($id));
		$this->load->view('edit_rt',$data);
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
 
    $this->Model_Siwarga->update_data_rt($data);
    redirect('Siwarga/rt');
}
	public function delete_rt($rt) {

        $this->load->model("Model_Siwarga");

        $delete_rt = $this->Model_Siwarga->delete_rt($rt);
        redirect('Siwarga/rt');
    }
//************************************************RW***************************************
 
    function rw(){
        $a= array(
				'data'=>$this->Model_Siwarga->get_data_rw());
		
		$this->load->view('view_rw',$a);
	}
	function input_rw(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Model_Siwarga->input_rw(array (
			'id_rw' => $this->input->post('id_rw'),
			'rw' => $this->input->post('rw'),
			'nama_ketua' => $this->input->post('nama_ketua'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'no_kk' => $this->input->post('no_kk'),
		    'status' => $this->input->post('status')));
			redirect('Siwarga/rw');
		}else{
			$a= array(
        	'kode_rw' => $this->Model_Siwarga->kode_rw());
        $this->load->view('input_rw',$a);
		}
	}
	function edit_rw(){
		$id = $this->uri->segment(3);
		$data=array(
		'rw' => $this->Model_Siwarga->get_edit_rw($id));
		$this->load->view('edit_rw',$data);
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
 
    $this->Model_Siwarga->update_data_rw($data);
    redirect('Siwarga/rw');
}
	public function delete_rw($rw) {

        $this->load->model("Model_Siwarga");

        $delete_rw = $this->Model_Siwarga->delete_rw($rw);
        redirect('Siwarga/rw');
    }
//******************************************emergency***************************************
 
    function emergency(){
        $a= array(
				'data'=>$this->Model_Siwarga->get_data_emergency());
		
		$this->load->view('view_emergency',$a);
	}
	function input_emergency(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Model_Siwarga->input_emergency(array (
			'id_emergency' => $this->input->post('id_emergency'),
			'tanggal' => $this->input->post('tanggal'),
			'lokasi' => $this->input->post('lokasi'),
			'pelapor' => $this->input->post('pelapor'),
			'keterangan' => $this->input->post('keterangan'),
			'status' => $this->input->post('status')));
			redirect('Siwarga/emergency');
		}else{
			$a= array(
        	'kode_emergency' => $this->Model_Siwarga->kode_emergency());
        $this->load->view('input_emergency',$a);
		}
	}
	function edit_emergency(){
		$id = $this->uri->segment(3);
		$data=array(
		'emergency' => $this->Model_Siwarga->get_edit_emergency($id));
		$this->load->view('edit_emergency',$data);
	}
    function update_emergency(){
    $id_emergency = $this->input->post('id_emergency');
    $tanggal = $this->input->post('tanggal');
    $lokasi = $this->input->post('lokasi');
    $pelapor = $this->input->post('pelapor');
    $keterangan =$this->input->post('keterangan');
    $status =$this->input->post('status');
    $data = array(
        'id_emergency' => $id_emergency,
        'tanggal' => $tanggal,
        'lokasi' => $lokasi,
        'pelapor' => $pelapor,
        'keterangan' => $keterangan,
        'status' => $status,
    );
 
    $this->Model_Siwarga->update_data_emergency($data);
    redirect('Siwarga/emergency');
}
	public function delete_emergency($emergency) {

        $this->load->model("Model_Siwarga");

        $delete_emergency = $this->Model_Siwarga->delete_emergency($emergency);
        redirect('Siwarga/emergency');
    }

//******************************************INFO WARGA***************************************
 
    function info_warga(){
        $a= array(
				'data'=>$this->Model_Siwarga->get_data_info_warga());
		
		$this->load->view('view_info_warga',$a);
	}
	function input_info_warga(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Model_Siwarga->input_info_warga(array (
			'id' => $this->input->post('id'),
			'judul' => $this->input->post('judul'),
			'tanggal' => $this->input->post('tanggal'),
			'isi' => $this->input->post('isi')));
			redirect('Siwarga/info_warga');
		}else{
			$a= array(
        	'kode_info' => $this->Model_Siwarga->kode_info());
        $this->load->view('input_info_warga',$a);
		}
	}
	function edit_info_warga(){
		$id = $this->uri->segment(3);
		$data=array(
		'info' => $this->Model_Siwarga->get_edit_info_warga($id));
		$this->load->view('edit_info_warga',$data);
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
 
    $this->Model_Siwarga->update_data_info_warga($data);
    redirect('Siwarga/info_warga');
}
	public function delete_info_warga($info_warga) {

        $this->load->model("Model_Siwarga");

        $delete_info_warga = $this->Model_Siwarga->delete_info_warga($info_warga);
        redirect('Siwarga/info_warga');
    }


	}
?>
	