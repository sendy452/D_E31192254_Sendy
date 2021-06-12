<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
    
    function getAll(){
        $this->db->select('*');
        $this->db->from('tm_user'); //mengambil data dari tabel tm_user
        $this->db->join('tm_grup', 'tm_user.grup = tm_grup.id_grup');
        //dimana digabung dengan tabel tm_grup berdasarkan atribut grup pada tm_user
        //sama dengan id_grup pada tm_grup
        $query = $this->db->get();
        //mengambil data dari database
        return $query;
        //mengembalikan data yang telah diambil
    }
    function input_data($data, $table){
        $this->db->insert($table, $data);
        //memngunakan function insert yang ada pada library db
        //untuk menambahkan data dengan parameter(nama tabel dan data inputan)
    }
    function getGrup(){
        $this->db->select('*');
        $this->db->from('tm_grup'); //mengambil data dari tabel tm_grup
        $query = $this->db->get();
        //mengambil data dari database
        return $query;
        //mengembalikan data yang telah diambil
    }
    function login($user, $pass, $table)
    {
        $this->db->select('*');
        $this->db->from('tm_user');
        $this->db->where('username', $user);
        $this->db->where('password', $pass);
        $query = $this->db->get();
        return $query;
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
?>