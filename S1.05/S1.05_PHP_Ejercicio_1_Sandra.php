<?php declare(strict_types=1);  ?>


<html>
    <head>
        <title>Ejercicio_1</title>
</head>
</html>
<?php
 

include "S1.05_PHP_Ejercicio_1_Cat.php";
include "S1.05_PHP_Ejercicio_1_dog.php";


abstract class animal{
    private  string $animal; // es un String 

    function __construct(String $animal){
      $this->animal = $animal;
     
  }
  public  function get_animal() {
      return $this->animal;
  }
  
 //seter para modificar
    public function set_animal(String $animal) {
    $this->animal = $animal;
    }
    //creamos estracto para las Herencia pueda accerder a ellas
    abstract public function makeSound():String;

}




?>
