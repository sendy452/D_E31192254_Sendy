<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }
    public function index(){
        $data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
        $this->load->view('view_mahasiswa',$data);
    }
    public function profil(){
        echo "ini adalah method profil pada controller Mahasiswa";
    }
    public function prodi(){
        $data['Prodi'] = $this->Mahasiswa_model->get_prodi();
        $this->load->view('view_prodi', $data);
    }
    public function angkatan(){
        $data['angkatan'] = $this->Mahasiswa_model->get_angkatan();
        $this->load->view('view_angkatan', $data);
    }
    public function kesimpulan(){
        $this->load->view('kesimpulan_view');
    }
}
?>
