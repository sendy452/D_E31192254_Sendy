<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup_model extends CI_Model {

	function getGrup(){
        $this->db->select('*');
        $this->db->from('tm_grup');
        $query = $this->db->get();

        return $query;
    }
    function input_data($data, $table){
        $this->db->insert($table, $data);
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}

/* End of file Grup_model.php */
/* Location: ./application/models/Grup_model.php */