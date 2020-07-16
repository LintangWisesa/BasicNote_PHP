<?php 

class Fruit {
    public $name = "Jambu";       // public - the property or method can be accessed from everywhere.
    protected $color = "Hijau";   // protected - the property or method can be accessed within the class and by classes derived from that class
    private $weight = 1.2;        // private - the property or method can ONLY be accessed within the class
}
  
$mango = new Fruit();
echo $mango->name;
echo $mango->color;   // error
echo $mango->weight;  // error

?>