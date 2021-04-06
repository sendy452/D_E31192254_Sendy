<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hitunglingkaran extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->benchmark->mark('code_start');
        $this->benchmark->mark('dog');
        
        $this->load->library('lingkaran');
        
        $this->benchmark->mark('cat');
    }

    function index(){
        $this->lingkaran->keliling('21');
        echo "<hr/>";
        $this->lingkaran->luas('14');
        
        $this->load->view('view_benchmark');
        $this->benchmark->mark('bird');
        $this->benchmark->mark('code_end');
    }
}
?>