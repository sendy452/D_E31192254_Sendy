<?php
//latihan no.1
class kalkulator{
    
    //latihan no.2
    private $bil1, $bil2, $bil3;
    
    //latihan no.3
    function tambah(){
        $hasil = $this->bil1 + $this->bil2 + $this->bil3;
        return "Hasil dari penjumlahan adalah ".$hasil."<br/>";
    }
    function kurang(){
        $hasil = $this->bil1 - $this->bil2 - $this->bil3;
        return "Hasil dari pengurangan adalah ".$hasil."<br/>";
    }
    function bagi(){
        $hasil = $this->bil1 / $this->bil2 / $this->bil3;
        return "Hasil dari pembagian adalah ".number_format($hasil, 2, '.', ',')."<br/>";
    }
    function kali(){
        $hasil = $this->bil1 * $this->bil2 * $this->bil3;
        return "Hasil dari perkalian adalah ".$hasil;
    }
    function __construct($a, $b, $c){
        $this->bil1 = $a;
        $this->bil2 = $b;
        $this->bil3 = $c;
    }
}

//latihan no.4
$hitung1 = new kalkulator(3,3,3);
echo $hitung1->tambah();

$hitung2 = new kalkulator(3,3,3);
echo $hitung1->kurang();

$hitung3 = new kalkulator(3,3,3);
echo $hitung1->bagi();

$hitung4 = new kalkulator(3,3,3);
echo $hitung1->kali();
?>