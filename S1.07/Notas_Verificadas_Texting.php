<?php
declare(strict_types=1);

 use PHPUnit\Framework\TestCase;
 require_once "Notas_Verificadas.php";


class Notas_Verificadas_Texting  extends TestCase  {


    public function   testPrimeraDivision(){
        
        $notas= new Notas_Verificadas (59);
    
        $this->assertEquals ("Primera División", $notas->clasificaciones());
        
       
    }
    public function   testSegundaDivision (){
        $notas= new Notas_Verificadas (45);

        $this->assertEquals("Segunda División", $notas->clasificaciones());
        
       
    }
    public function  testTerceraDivision (){
   
        $notas= new Notas_Verificadas (33);

        $this->assertStringContainsString("Tercera", $notas->clasificaciones());
        
       
    }
    public function  testReprovara(){
        $notas= new Notas_Verificadas (1);
        
        $this->assertStringContainsString ("reprobado",$notas->clasificaciones());
        
       
    }


}

?>

