<?php
declare(strict_types=1); 


class cat extends animal{
    
    public function makeSound(): string{
        return  "The cat says meow";
    }
  
}
$cat = new cat("gato");
echo $cat->makeSound();
?>