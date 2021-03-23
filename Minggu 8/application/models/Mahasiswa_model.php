<?php
class Mahasiswa_model extends CI_Model {

    public function get_data(){
        $data_mahasiswa = [["nama"=>"Kim Jefry", "prodi"=>"MIF"],
                           ["nama"=>"Ahmad Kurniawan", "prodi"=>"TKK"],
                           ["nama"=>"Budi Sudarsono", "prodi"=>"TIF"]];
        return $data_mahasiswa;
    }
    public function get_prodi(){
        $data_prodi = [["no"=>"1", "prodi"=>"MIF", "ket"=>"Manajemen Informatika"],
                           ["no"=>"2", "prodi"=>"TKK", "ket"=>"Teknik Komputer"],
                           ["no"=>"3", "prodi"=>"TIF", "ket"=>"Teknik Informatika"]];
        return $data_prodi;
    }
    public function get_angkatan(){
        $data_angkatan = [["no"=>"1", "tahun"=>"2016"],
                           ["no"=>"2", "tahun"=>"2017"],
                           ["no"=>"3", "tahun"=>"2018"]];
        return $data_angkatan;
    }
}
?>
