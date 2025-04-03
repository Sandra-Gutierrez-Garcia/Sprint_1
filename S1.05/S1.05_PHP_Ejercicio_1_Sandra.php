<?php declare(strict_types=1);  ?>



<?php
 

include "S1.05_PHP_Ejercicio_1_Cat.php";
include "S1.05_PHP_Ejercicio_1_dog.php";


abstract class animal{
    private  string $nombreDelAnimal; // es un String 

    function __construct(String $nombreDelAnimal){
      $this->nombreDelAnimal = $nombreDelAnimal;
     
  }
  public  function get_animal() {
      return $this->nombreDelAnimal;
  }
  
 //seter para modificar
    public function set_animal(String $nombreDelAnimal) {
    $this->nombreDelAnimal = $nombreDelAnimal;
    }
    //creamos estracto para las Herencia pueda accerder a ellas
    abstract public function makeSound():String;

}




?>
