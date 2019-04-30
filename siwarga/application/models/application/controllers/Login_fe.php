<?php
class Login_fe extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }
 
    function index(){
        $this->load->view('fe/login');
    }

    function auth(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
 
        $cek_login=$this->M_login->auth_rw($username,$password);
        
        if($cek_login->num_rows() > 0){
                $data=$cek_login->row_array();
                $this->session->set_userdata('masuk',TRUE);

                if($data['status']=='RW'){ //Akses RW
                    $this->session->set_userdata('akses','RW');
                    $this->session->set_userdata('ses_id',$data['id_rw']);
                    $this->session->set_userdata('ses_nama',$data['nama_ketua']);
                    //echo $_SESSION['ses_nama'];
                    redirect('be/Landing/tampil_dashboard');//halaman utaa

                }else{ //akses reviewer
                    $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect(base_url('Login_fe'));
                }
 
        }else{ //jika login sebagai RT
                    $cek_rt=$this->M_login->auth_rt($username,$password);
                    if($cek_rt->num_rows() > 0){
                            $data=$cek_rt->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','RT');
                            $this->session->set_userdata('ses_id',$data['id_rt']);
                            $this->session->set_userdata('ses_nama',$data['nama_ketua']);
                            // echo 'a';
                            // return;
                            redirect('be/Landing/tampil_dashboard');
                    }else{  // jika username dan password tidak ditemukan atau salah
                       // echo 'b';
                       //      return;
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect(base_url('Login_fe'));
                    }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}