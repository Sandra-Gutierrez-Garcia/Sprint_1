<?php
 
 declare(strict_types=1);
 use PHPUnit\Framework\TestCase;

 require_once "numberchecker.php";

class Verificacion_Numero_texting  extends TestCase  {

	public function test_isPositive()
    {
        $numberChecker = new NumberChecker(2); 

        $this->assertTrue($numberChecker->isEven());
        $this->assertTrue($numberChecker->isPositive());

    }
	public function testis_Negative(){
		$numberChecker = new NumberChecker(-2); 
		$this->assertFalse($numberChecker->isPositive());

	}
	public function test_IsEven(){
		$numberChecker = new NumberChecker(3); 
		$this->assertTrue($numberChecker->isEven());

	}
	public function test_IsOdd(){
		$numberChecker = new NumberChecker(4); 
		$this->assertFalse($numberChecker->isEven());

	}

}

?>
 
 