<?php
//latihan no.1
class buku{
    public $judulbuku;
    public $pengarang;
    public $penerbit;
    public $tahunterbit;
    public $cetakan;
}

//Latihan no.2
class kendaraan{
    public $jeniskendaraan;
    public $jumlahroda;
    public $merk;
    public $bahanbakar;
    public $harga;
    public $tahunpembuatan;
    
    public function subsidiBBM(){
        $subsidi = 'Tidak';
        if($this -> bahanbakar == 'Premium' && $this -> tahunpembuatan < 2005){
            $subsidi = 'Ya';
        }
        return $subsidi;
    }
}

//Latihan no.3
class kendaraan{
    public  $jeniskendaraan,
            $jumlahroda,
            $merk,
            $bahanbakar,
            $harga,
            $tahunpembuatan;
    
    public function subsidiBBM(){
        $subsidi = 'Tidak';
        if($this -> bahanbakar == 'Premium' && $this -> tahunpembuatan < 2005){
            $subsidi = 'Ya';
        }
        return $subsidi;
    }
    public function hargaSecond(){
        if($this -> tahunpembuatan > 2010){
            $diskon = $this -> harga - ($this -> harga * 20/100);
        }else if($this -> tahunpembuatan >= 2005 && $this -> tahunpembuatan <= 2010){
            $diskon = $this -> harga - ($this -> harga * 30/100);
        }else if($this -> tahunpembuatan < 2005){
            $diskon = $this -> harga - ($this -> harga * 40/100);
        }
        return $diskon;
    }
}

$coba = new kendaraan();
$coba -> jeniskendaraan = 'Mobil';
$coba -> jumlahroda = 4;
$coba -> bahanbakar = 'Premium';
$coba -> harga = 110000000;
$coba -> tahunpembuatan = 2004;
    
echo "<h2>Latihan no.2 & 3</h2>".
     "Jenis Kendaraan: ".$coba -> jeniskendaraan."<br />".
     "Jumlah Roda: ".$coba -> jumlahroda."<br />".
     "Bahan Bakar: ".$coba -> bahanbakar."<br />".
     "Harga: Rp.".number_format($coba -> harga,2,',','.')."<br />".
     "Tahun: ".$coba -> tahunpembuatan."<br />".
     "Subsidi BBM: ".$coba -> subsidiBBM()."<br />".
     "Harga Akhir: Rp.".number_format($coba -> hargaSecond(),2,',','.')."<hr/> <br/>";

//Latihan no.4
class Clothing{
    public  $jenis,
            $bahan,
            $ukuran,
            $jenissablon,
            $harga,
            $total;
    
    public function diskon(){
        $grandtotal = ($this->harga * $this->total);
        $hargaDiskon = $grandtotal;
        if($grandtotal >= 200000 && $grandtotal < 500000){
            $hargaDiskon = $grandtotal - ($grandtotal * 10/100);
        }else if($grandtotal >= 500000){
            $hargaDiskon = $grandtotal - ($grandtotal * 20/100);
        }
        return $hargaDiskon;
    }
    public function bonus(){
        $bonusBarang = 0;
        if($this -> total >= 12 && $this -> total < 24){
            $bonusBarang = 1;
        }else if($this -> total >= 24 ){
            $bonusBarang = 2;
        }
        return $bonusBarang;
    }
    public function tambahHarga(){
        if($this -> ukuran == 'Xl'){
            $tambah = $this -> harga + 5000;
        }else if($this -> ukuran == 'XXl'){
            $tambah = $this -> harga + 5000;
        }else if($this -> ukuran == 'XXXl'){
            $tambah = $this -> harga + 5000;
        }
        return $tambah;
    }
    function __construct($a, $b, $c, $d, $e, $f){
        $this -> jenis = $a;
        $this -> bahan = $b;
        $this -> ukuran = $c;
        $this -> jenissablon = $d;
        $this -> harga = $e;
        $this -> total = $f;
    }
    function Tampilkan(){
        $hasil ="<h2>Latihan no.4</h2>".
                "Jenis Barang: ".$this -> jenis."<br />".
                "Bahan: ".$this -> bahan."<br />".
                "Ukuran: ".$this -> ukuran."<br />".
                "Jenis Sablon: ".$this -> jenissablon."<br />".
                "Harga: Rp.".number_format($this -> harga,2,',','.')."<br />".
                "Total: ".$this -> total."<br />".
                "Harga Total: Rp.".number_format($this -> diskon(),2,',','.')."<br />".
                "Bonus: ".$this -> bonus()." ".$this -> jenis."<hr />";
        return $hasil;
    }
}

$pesan = new Clothing('Kaos', 'Cottom Combed 30s', 'L', 'DTG', 99000, 24);
echo $pesan -> Tampilkan();

?>