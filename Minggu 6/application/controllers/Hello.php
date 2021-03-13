<?php
class Hello extends CI_Controller{
    public function index(){
        //echo "<h2>Hello World CI!</h2>";
        
        /*$this->load->model('Hello_model');
        $model = $this->Hello_model;
        
        $a = $model->txt;
        $data['teks'] = $a;
        
        $this->load->view('helloview', $data);*/
        
        $data = ['variabel1' => 'Data variabel ke 1', 'variabel2' => 'Data variabel ke 2'];
        $this->load->view('variabelview', $data);
    }
}
?>