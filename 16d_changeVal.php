<?php 

// 1. modify the value of property $name OUTSIDE the class
class FruitA {
    public $name;
}
$apel = new FruitA();
$apel->name = 'Apel';
echo $apel->name . "<br>";

// 2. modify the value of property $name INSIDE the class: method & $this
class FruitB {
    public $name;
    // Method
    function set_name($name){
        $this->name = $name;
    }
}
$belimbing = new FruitB();
$belimbing->set_name('Belimbing');
echo $belimbing->name . "<br>";

?>
