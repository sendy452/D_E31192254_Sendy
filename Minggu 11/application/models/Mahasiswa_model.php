<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
    
    function getAll(){
        $this->db->select('*');
        $this->db->from('tm_user');
        $this->db->join('tm_grup', 'tm_user.grup = tm_grup.id_grup');
        $query = $this->db->get();
        return $query;
    }
    function input_data($data, $table){
        $this->db->insert($table, $data);
    }
}
?>