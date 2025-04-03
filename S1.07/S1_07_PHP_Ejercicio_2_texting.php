

<?php

// declare(strict_types=1);
 use PHPUnit\Framework\TestCase;
 require_once "S1_07_PHP_Ejercicio_2_Sandra.php";

class S1_07_PHP_Ejercicio_2_texting  extends TestCase  {

    public function   testPrimeraDivision(){
        $notas= new S1_07_PHP_Ejercicio_2_Sandra (60);
        $this->assertEquals ("Primera División",$notas->clasificaciones());
        
       
    }
    public function   testSegundaDivision (){
        $notas= new S1_07_PHP_Ejercicio_2_Sandra (55);
        $this->assertEquals ("Segunda División",$notas->clasificaciones());
        
       
    }
    public function  testTerceraDivision (){
        $notas= new S1_07_PHP_Ejercicio_2_Sandra (35);
        $this->assertEquals ("Tercera División",$notas->clasificaciones());
        
       
    }
    public function  testReprovara(){
        $notas= new S1_07_PHP_Ejercicio_2_Sandra (1);
        $this->assertEquals ("estudiante reprobado",$notas->clasificaciones());
        
       
    }


}

?>

