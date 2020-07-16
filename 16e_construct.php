<?php 

// A constructor allows you to initialize an object's properties upon creation of the object.
// If you create a __construct() function, PHP will automatically call this function when 
// you create an object from a class.

class FruitC {
    public $name;
    public $color;
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
}

$apel = new FruitC('Apel', 'merah');
echo $apel->name . "&nbsp;" . $apel->color . "<br>";

// default value untuk parameter __construct
class FruitD {
    public $name;
    public $color;
    function __construct(string $name = 'Buah X', string $color = "Warna X"){
        $this->name = $name;
        $this->color = $color;
    }
}

$buahA = new FruitD();
$buahB = new FruitD("Belimbing", "Kuning");
echo $buahA->name . "&nbsp;" . $buahA->color . "<br>";
echo $buahB->name . "&nbsp;" . $buahB->color . "<br>";

?>