<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['panggilan'] = "Sendy";
        $data['nama'] = "Sendy Iven Yulian";
        $data['nim'] = "E31192254";
        $data['golongan'] = "D";
		$this->load->view('welcome_message', $data);
	}
    public function message(){
        
        $this->load->model('Hello_model');
        $model = $this->Hello_model;
        
        echo "<script>window.alert('".$model->alert."');</script>";
    }
    public function variabel(){
        $this->load->model('Hello_model');
        $model = $this->Hello_model;
        
        $a = $model->mahasiswa[0]['nama'];
        $b = $model->mahasiswa[1]['nama'];
        $c = $model->mahasiswa[2]['nama'];
        
        $d = $model->mahasiswa[0]['nim'];
        $e = $model->mahasiswa[1]['nim'];
        $f = $model->mahasiswa[2]['nim'];
        
        $g = $model->mahasiswa[0]['gol'];
        $h = $model->mahasiswa[1]['gol'];
        $i = $model->mahasiswa[2]['gol'];
        
        $data['tampil'] = [
            ['nama' => $a, 'nim' => $d, 'gol' => $g],
            ['nama' => $b, 'nim' => $e, 'gol' => $h],
            ['nama' => $c, 'nim' => $f, 'gol' => $i]
        ];
        
        $this->load->view('hasilvariabel', $data);
    }
}
