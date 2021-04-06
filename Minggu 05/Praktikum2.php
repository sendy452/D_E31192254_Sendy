<?php
include 'Praktikum.php';

class miniCar implements Car{
    private $model;
    
    public function setModel($name){
        $this->model = $name;
    }
    public function getModel(){
        return $this->model;
    }
}

$object1 = new miniCar();
$object1->model = "multi-purpose vehicle";
echo $object1->model;

$object2 = new miniCar();
$object2->model = "sedan";
echo "<br/>".$object2->model;

$object3 = new miniCar();
$object3->model = "hatchback";
echo "<br/>".$object3->model;

echo "<b><p>Setelah menggunakan fungsi include, dimana dalam hal ini menghubungkan dengan file Praktikum.php sehingga kelas induk Car dapat ditemukan. Karena <i>property</i> memiliki hak akses private maka tidak dapat diakses oleh siapa saja, sehingga tidak akan menampilkan output atau error.</b>";
?>