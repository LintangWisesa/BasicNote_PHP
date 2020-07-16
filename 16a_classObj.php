<!-- OOP stands for Object-Oriented Programming -->
<!-- OOP is faster and easier to execute -->
<!-- OOP provides a clear structure for the programs -->
<!-- OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug -->
<!-- OOP makes it possible to create full reusable applications with less code and shorter development time -->

<?php 

// <!-- class: a template for objects -->
class Fruit {
    // Properties
    public $name = "Apel";
}
  
// <!-- object: an instance of a class -->
// semua object akan bernama "Apel"
$apel = new Fruit();
$belimbing = new Fruit();
$ceri = new Fruit();

echo $apel->name . "<br>";
echo $belimbing->name . "<br>";
echo $ceri->name . "<br>";

// cek $apel = object dari class Fruit
var_dump($apel); echo "<br>";
var_dump($belimbing); echo "<br>";
var_dump($ceri); echo "<br>";

var_dump($apel instanceof Fruit);

?>
