<?php
//latihan no.1
class mobilLengkap{
    function nontonTV(){
        return "Tv dihidupkan, Tv Mencari Chanel, Tv Menampilkan gambar";
    }
    function fiturTambahan(){
        return "Radio Bluetooth, Charge HP, Maps";
    }
}

class MobilBMW extends mobilLengkap{
    
}

class MobilBMWberaksi{
    function nontonTV(){
        
    }
    function HiudpkanMobil(){
        
    }
    function MatikanMobil(){
        
    }
    function ubahGigi(){
        
    }
}

//Latihan no.2
abstract class itemProduk{
    abstract function Ukuran();
    abstract function Warna();
    abstract function Nama();
}

class Topi extends itemProduk{
    var $model, $ukuran, $warna;
    
    function Ukuran(){
        if($this->ukuran >= 55 && $this->ukuran <= 57){
            $jk = "M";
        }else if($this->ukuran >= 58 && $this->ukuran <= 59){
            $jk = "L";
        }
        return $jk;
    }
    function Warna(){
        return $this->warna;
    }
    function Nama(){
        return $this->model;
    }
    function __construct($a, $b, $c){
        $this->model = $a;
        $this->ukuran = $b;
        $this->warna = $c;
    }
}

class Celana extends itemProduk{
    var $tipe, $model, $ukuran, $warna;
    
    function Ukuran(){
        if($this->ukuran >= 27 && $this->ukuran <= 30){
            $jk = "M";
        }else if($this->ukuran > 30 && $this->ukuran <= 32){
            $jk = "L";
        }
        return $jk;
    }
    function Warna(){
        return $this->warna;
    }
    function Nama(){
        return $this->model;
    }
    function __construct($a, $b, $c, $d){
        $this->model = $a;
        $this->ukuran = $b;
        $this->warna = $c;
        $this->tipe = $d;
    }
}

class Baju extends itemProduk{
    var $tipe, $model, $ukuran, $warna;
    
    function Ukuran(){
        if($this->ukuran == 'L' || $this->ukuran == 'XL'){
            $jk = "Remaja";
        }else if($this->ukuran == 'S' || $this->ukuran == 'M'){
            $jk = "Anak-anak";
        }
        return $jk;
    }
    function Warna(){
        return $this->warna;
    }
    function Nama(){
        return $this->model;
    }
    function __construct($a, $b, $c, $d){
        $this->model = $a;
        $this->ukuran = $b;
        $this->warna = $c;
        $this->tipe = $d;
    }
}

$baju1 = new Baju("3Second", "L", "Biru", "Cotton Combod");
echo "<b>BAJU</b> <br/>
     Nama Merk: ".$baju1->Nama().
     "<br/> Warna: ".$baju1->Warna().
     "<br/> Ukuran: ".$baju1->Ukuran().
     "<br/>Tipe Bahan: ".$baju1->tipe."<hr/>";

$celana1 = new Celana("HTT", 31, "Abu-abu", "Chino");
echo "<b>CELANA</b> <br/>
     Nama Merk: ".$celana1->Nama().
     "<br/> Warna: ".$celana1->Warna().
     "<br/> Ukuran: ".$celana1->Ukuran().
     "<br/>Tipe Bahan: ".$celana1->tipe."<hr/>";

$topi1 = new Topi("Geoff Max", 58, "Orange");
echo "<b>TOPI</b> <br/>
     Nama Merk: ".$topi1->Nama().
     "<br/> Warna: ".$topi1->Warna().
     "<br/>Ukuran: ".$topi1->Ukuran()."<br/>";


//Latihan no.3
//PUBLIC
class Tablet{
    public $merk, $camera, $memory;
    
    function __construct($x,$y,$z){
        $this->merk = $x;
        $this->camera = $y;
        $this->memory = $z;
    }
}

class handphone extends Tablet{
    public $handphone_baru;
    
    function beli_handphone(){
        if($this->handphone_baru == "Iya"){
            return "HP baru dengan spesifikasi:<br />
            Merk: ".$this->merk." 
            <br />Camera: ".$this->camera." MP
            <br />Memory: ".$this->memory."GB";
        }else if($this->handphone_baru == "Tidak"){
            return "HP second dengan spesifikasi:<br />
            Merk: ".$this->setMerk."
            <br />Camera: ".$this->setCamera."
            MP<br />Memory: ".$this->setMemory."GB";
        }
    }
}

$hp1 = new handphone("Samsung", 32, 8);
$hp1->handphone_baru = "Iya";
echo $hp1->beli_handphone();

//PRIVATE
class Tablet{
    private $merk, $camera, $memory;
    
    function __construct($x,$y,$z){
        $this->merk = $x;
        $this->camera = $y;
        $this->memory = $z;
    }
}

class handphone extends Tablet{
    public $handphone_baru;
    
    function beli_handphone(){
        if($this->handphone_baru == "Iya"){
            return "HP baru dengan spesifikasi:<br />
            Merk: ".$this->merk." 
            <br />Camera: ".$this->camera." MP
            <br />Memory: ".$this->memory."GB";
        }else if($this->handphone_baru == "Tidak"){
            return "HP second dengan spesifikasi:<br />
            Merk: ".$this->setMerk."
            <br />Camera: ".$this->setCamera."
            MP<br />Memory: ".$this->setMemory."GB";
        }
    }
}

$hp1 = new handphone("Samsung", 32, 8);
$hp1->handphone_baru = "Iya";
echo $hp1->beli_handphone();

//PROTECTED
class Tablet{
    protected $merk, $camera, $memory;
    
    function __construct($x,$y,$z){
        $this->merk = $x;
        $this->camera = $y;
        $this->memory = $z;
    }
}

class handphone extends Tablet{
    public $handphone_baru;
    
    function beli_handphone(){
        if($this->handphone_baru == "Iya"){
            return "HP baru dengan spesifikasi:<br />
            Merk: ".$this->merk." 
            <br />Camera: ".$this->camera." MP
            <br />Memory: ".$this->memory."GB";
        }else if($this->handphone_baru == "Tidak"){
            return "HP second dengan spesifikasi:<br />
            Merk: ".$this->setMerk."
            <br />Camera: ".$this->setCamera."
            MP<br />Memory: ".$this->setMemory."GB";
        }
    }
}

$hp1 = new handphone("Samsung", 32, 8);
$hp1->handphone_baru = "Iya";
echo $hp1->beli_handphone();


?>