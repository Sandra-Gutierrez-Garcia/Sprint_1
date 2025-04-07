<?php
 
 declare(strict_types=1);
 use PHPUnit\Framework\TestCase;

 require_once "Verificacion_Numero.php";

class Verificacion_Numero_texting  extends TestCase  {

	public function testIsEven(): void {
        $number = new Verificacion_Numero(4);
		 $this->assertTrue($number->isEven());
	}

	public function testIsPositive(): void {
        $number = new Verificacion_Numero(2);
		 $this->assertTrue($number->isPositive()); 

	}
	public function testisNegative():void {
		$number = new Verificacion_Numero(2);
		 $this->assertFalse($number->isNegative());
	}
	public function testcomparar():void {
		$number = new Verificacion_Numero(2);
		$this->assertEquals($number,$number->comparar());
	}

}

?>
 
 