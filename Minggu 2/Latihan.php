<?php
//latihan no.1
class laptop{
    //latihan no.2
    public $pemilik, $merk;
    
    function hidupkan_laptop(){
        //latihan no.4
        $tampil = "Hidupkan laptop ".$this->merk." milik ".$this->pemilik;
        return $tampil;
    }
    function matikan_laptop(){
        //latihan no.5
        $tampil = "Matikan laptop ".$this->merk." milik ".$this->pemilik;
        return $tampil;
    } 
    function restart_laptop(){
        //latihan no.6
        $tampil = "Matikan laptop ".$this->merk." milik ".$this->pemilik.". Hidupkan laptop ".$this->merk." milik ".$this->pemilik."<br/>
        ";
        return $tampil;
    }
    function __construct($x,$y){
        $this->pemilik = $x;
        $this->merk = $y;
    }
}
//latihan no.7
$asus = new laptop("A", "ASUS");
echo $asus->hidupkan_laptop()."<br/>";

$acer = new laptop("B", "Acer");
echo $acer->matikan_laptop()."<br/>";

$lenovo = new laptop("C", "Lenovo");
echo $lenovo->restart_laptop()."<br/>";
?>