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

}

?>
 
 