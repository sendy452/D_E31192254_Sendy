<?php
//latihan no.1
interface hitungLuas{
    
    public function hitungLuasPersegi($sisi);
    public function hitungLuasSegitiga($sisi);
    public function hitungLuasLingkaran($sisi);
}

//latihan no.2
class Persegi implements hitungLuas{
    var $sisi;    
    
    public function hitungLuasPersegi($sisi){
        return $sisi * $sisi;
    }
    public function hitungLuasSegitiga($sisi){}
    public function hitungLuasLingkaran($sisi){}
}

class Segitiga implements hitungLuas{
    var $sisi;
    
    public function hitungLuasSegitiga($sisi){
        return $sisi * $sisi / 2;
    }
    public function hitungLuasPersegi($sisi){}
    public function hitungLuasLingkaran($sisi){}
}

class Lingkaran implements hitungLuas{
    private $radius;
  
    public function hitungLuasLingkaran($radius){
        return $radius * $radius * pi();
    }
    public function hitungLuasSegitiga($radius){}
    public function hitungLuasPersegi($radius){}
}

//latihan no.3
$persegi = new Persegi();
$segitiga = new Segitiga();
$lingkaran = new Lingkaran();

echo "Hasil perhitungan luasnya adalah:<br/>
Luas Persegi = ".$persegi->hitungLuasPersegi(4)." m<sup>2</sup><br/>
Luas Segitiga = ".$segitiga->hitungLuasSegitiga(8)." m<sup>2</sup><br/>
Luas Lingkaran = ".$lingkaran->hitungLuasLingkaran(10)." m<sup>2</sup>";

?>