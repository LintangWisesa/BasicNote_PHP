<?php 

// A destructor is called when the object is destructed or the script is stopped or exited.
// If you create a __destruct() function, PHP will automatically call this function at the end of the script.

class FruitE {
    public $name;
    public $color;
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct(){
        echo "Ini buah $this->name, warnanya $this->color";
    }
}

$jambu = new FruitE('Jambu', 'Hijau');

?>