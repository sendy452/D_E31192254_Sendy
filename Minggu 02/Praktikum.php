<?php
//Praktikum no.1
class Car{
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;
    
    public function hello(){
        return "Beep I am a <i>".$this->comp."</i>, and I am <i>".$this->color;
    }
}

$bmw = new Car();
$mercedes = new Car();

$bmw -> color = 'blue';
$bmw -> comp = 'BMW';
$mercedes -> comp = 'Mercedez Benz';

echo $bmw -> hello();

//Praktikum no.2
class Car{
    public $tank;
    
    public function fill($float){
        $this->tank += $float;
        return $this;
    }
    public function ride($float){
        $miles = $float;
        $gallons = $miles/50;
        $this->tank -= ($gallons);
        return $this;
    }
}

$bmw = new Car();

$tank = $bmw ->fill(10)->ride(40)->tank;

echo "The number of gallons left in the tank: ".$tank." gal.";

?>