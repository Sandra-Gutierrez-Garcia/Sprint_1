<?php
 
 declare(strict_types=1);
 use PHPUnit\Framework\TestCase;

 require_once "S1_07_PHP_Ejercicio_1_Sandra.php";

class S1_07_PHP_Ejercicio_1_texting  extends TestCase  {

	public function testIsEven(): void {
        $number = new S1_07_PHP_Ejercicio_1_Sandra(rand(-3,20));
		 $this->assertTrue($number->isEven());
	}
	    public function testIsPositive(): void {
        $number = new S1_07_PHP_Ejercicio_1_Sandra(rand(-3,20));
		 $this->assertTrue($number->isPositive()); 

	}

}

?>
 
 