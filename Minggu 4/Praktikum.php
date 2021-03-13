<?php
//Praktikum Inheritance
class Car{
    private $model;
    
    public function setModel($model){
        $this->model = $model;
    }
    public function hello(){
        return "beep I am a <i> ".$this->model."</i><br/>";
    }
}

class SportsCar extends Car{
    
}

$sportsCar1 = new SportsCar();
$sportsCar1->setModel('Mercedez Benz');
echo $sportsCar1->hello();

//Praktikum Enkapsulasi Objek : Private dan Protected
//Private
class Car{
    private $model;
    
    public function setModel($model){
        $this->model = $model;
    }
}

class SportsCar extends Car{
    public function hello(){
        return "beep I am a <i> ".$this->model."</i><br/>";
    }
}

$sportsCar1 = new SportsCar();
$sportsCar1->setModel('Mercedez Benz');
//Protected
class Car{
    protected $model;
    
    public function setModel($model){
        $this->model = $model;
    }
}

class SportsCar extends Car{
    public function hello(){
        return "beep I am a <i> ".$this->model."</i><br/>";
    }
}

$sportsCar1 = new SportsCar();

//Praktikum Abstract
abstract class Car{
    protected $tankVolume;
    
    public function setTankVolume($volume){
        $this->tankVolume = $volume;
    }
    
    abstract public function calcNumMilesOnFullTank();
}

//Praktikum Override
class Car{
    final public function hello(){
        return "beep";
    }
}

class sportsCar extends Car{
    public function hello(){
        return "Hallo";
    }
}

$sportsCar1 = new sportsCar();
echo $sportsCar1->hello();

//Praktikum Abstract Classes and Methods
abstract class Car{
    abstract public function calcNumMilesOnFullTank();
}

?>