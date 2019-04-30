<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siwarga_fe extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_fe');
    }

	public function index()
	{
		$a= array(
	                'data'=>$this->M_fe->get_data_warga());
        $this->load->view('fe/warga',$a);
	}

//***************************************KEANGGOTAAN/SEARCH************************************************

 public function search(){
   //  $keyword = $this->input->post('keyword');
			// $data['warga']=$this->M_fe->search_warga($keyword);
			// $this->load->view('hasil_warga',$data);

			$cari=$this->input->get('cari');
			$beda['cari']=$this->M_fe->search_warga($cari);
			$this->load->view('fe/hasil_warga',$beda);
  }

//**************************************************LOGIN**************************************************
	public function tampil_login()
		{
	        $this->load->view('fe/login');
		}


//********************************************TAMPIL RT/RW*************************************************
	public function tampil_perangkat()
		{
			$a= array(
	                'data'=>$this->M_fe->get_data_rt());
	        $this->load->view('fe/rt_rw',$a);
		}
}
?>