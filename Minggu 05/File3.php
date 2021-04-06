<?php
include 'File2.php';

class Rectangle implements Shape{
    private $width, $height;
    
    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calcArea(){
        return $this->width * $this->height;
    }
}

$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo $circ->calcArea();
echo "<br/>";
echo $rect->calcArea();

?>