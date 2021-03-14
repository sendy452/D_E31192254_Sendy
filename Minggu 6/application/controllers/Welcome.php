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
       
        $data['alert'] = $model->alert;
        
        $this->load->view('pesan', $data);
    }
}
