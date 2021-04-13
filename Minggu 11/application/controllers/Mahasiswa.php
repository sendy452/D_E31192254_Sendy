<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }
    
	public function index(){
        $data['user'] = $this->Mahasiswa_model->getAll()->result();
		$this->template->views('crud/home_mahasiswa', $data);
	}
    
    public function tambah(){
        $this->template->views('crud/tambah_mahasiswa');
    }
    
    public function input(){
        $username = $this->input->post('username');
        $password = $this->input->post('pass');
        $nama = $this->input->post('nama');
        $grup = $this->input->post('grup');
        
        $data = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'grup' => $grup
        );
        $this->Mahasiswa_model->input_data($data, 'tm_user');
        redirect('Mahasiswa/index');
    }
}
