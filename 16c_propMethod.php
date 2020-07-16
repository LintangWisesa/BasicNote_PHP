<?php 

class Fruit {
    // Properties
    public $name = "Apel";
    // Method
    function color(){
        return "Warnanya merah";
    }
    function taste(string $rasa = "manis"){
        return "Rasanya $rasa";
    }
}

$apel = new Fruit();
echo $apel->name . "<br>";
echo $apel->color() . "<br>";
echo $apel->taste() . "<br>";
echo $apel->taste("masam") . "<br>";

?>