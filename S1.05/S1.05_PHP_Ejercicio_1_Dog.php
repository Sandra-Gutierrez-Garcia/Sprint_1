<?php
declare(strict_types=1); 

 
class dog extends animal{
    public function makeSound():string{
        return  "The dog says bup";
    }
}

echo "<br>";
$dog =new dog("perro");
echo $dog->makeSound();
?>