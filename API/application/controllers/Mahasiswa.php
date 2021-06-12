<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    function __construct(){
        //function construct adalah function yang akan dijalankan paling awal
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        //meload file model Mahasiswa_model.php
    }
    
    public function index()
    {
        $this->template->views('home');
    }

	public function user(){
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
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->Mahasiswa_model->edit_data($where, 'tm_user')->result();
        $data['data'] = $this->Mahasiswa_model->getGrup()->result();
        $this->template->views('crud/edit_mahasiswa', $data);
    }
    public function update()
    {
        $id = $this->input->post('id');
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

        $where = array('id' => $id);

        $this->Mahasiswa_model->update_data($where, $data, 'tm_user');
        redirect('Mahasiswa');
    }
    public function hapus($id)
    {
        $where = array('id' => $id );
        $this->Mahasiswa_model->hapus_data($where, 'tm_user');
        redirect('Mahasiswa');
    }

    public function Api()
    {
        $data = $this->Mahasiswa_model->getAll();
        echo json_encode($data->result_array());
    }
    public function ApiInsert()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $grup = $this->input->post('grup');
        
        $data = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'grup' => $grup
        );
        
        $this->Mahasiswa_model->input_data($data, 'tm_user');
        echo json_encode($data);
    }
    public function ApiDelete()
    {
        if ($this->input->post('username')) {
            $where = array('username' => $this->input->post('username'));
            if ($this->Mahasiswa_model->hapus_data($where, 'tm_user')) {
                $array = array('success' => true );
            }else {
                $array = array('error' => true );
            }
            echo json_encode($array);
        }
    }
    public function ApiUpdate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $grup = $this->input->post('grup');

        $data = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'grup' => $grup 
        );

        $where = array('username' => $username);

        $this->Mahasiswa_model->update_data($where, $data, 'tm_user');
        echo json_encode($data);
    }
}
?>