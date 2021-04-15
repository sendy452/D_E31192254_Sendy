<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    function __construct(){
        //function construct adalah function yang akan dijalankan paling awal
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        //meload file model Mahasiswa_model.php
    }
    
	public function index(){
        $data['user'] = $this->Mahasiswa_model->getAll()->result();
        //mengambil data array dari database melalui model Mahasiswa_model
		$this->template->views('crud/home_mahasiswa', $data);
        //menngunakan library templtae untuk menampilkan isi content berupa file view home_mahasiswa
	}
    
    public function tambah(){
        $this->template->views('crud/tambah_mahasiswa');
        //menampilkan halaman tambah_mahasiswa untuk input data
    }
    
    public function input(){
        $username = $this->input->post('username');
        //membuat delarasi $username untuk menampung data dari inputan yang memiliki name username
        $password = $this->input->post('pass');
        //membuat delarasi $password untuk menampung data dari inputan yang memiliki name pass
        $nama = $this->input->post('nama');
        //membuat delarasi $nama untuk menampung data dari inputan yang memiliki name nama
        $grup = $this->input->post('grup');
        //membuat delarasi $grup untuk menampung data dari inputan yang memiliki name grup
        
        $data = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'grup' => $grup
        );
        //mengatur atribut yang sesuai dengan pada tabel yang akan ditambahkan nilainya,
        //dengan nilai masing-masing atribut telah disimpan dalam variabel sebelumnya
        $this->Mahasiswa_model->input_data($data, 'tm_user');
        //input data dengan nilai data pada $data dan tabelnya tm_user
        redirect('Mahasiswa/index');
        //jika sudah maka akan menuju function index pada controller Mahasiswa
    }
}
?>